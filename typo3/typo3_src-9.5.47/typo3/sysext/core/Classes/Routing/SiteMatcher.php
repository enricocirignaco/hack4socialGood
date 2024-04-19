<?php
declare(strict_types = 1);

namespace TYPO3\CMS\Core\Routing;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;
use Symfony\Component\Routing\Exception\NoConfigurationException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use TYPO3\CMS\Core\Cache\CacheManager;
use TYPO3\CMS\Core\Configuration\Features;
use TYPO3\CMS\Core\Exception\SiteNotFoundException;
use TYPO3\CMS\Core\Http\NormalizedParams;
use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Site\Entity\NullSite;
use TYPO3\CMS\Core\Site\Entity\PseudoSite;
use TYPO3\CMS\Core\Site\Entity\SiteInterface;
use TYPO3\CMS\Core\Site\Entity\SiteLanguage;
use TYPO3\CMS\Core\Site\PseudoSiteFinder;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\HttpUtility;
use TYPO3\CMS\Core\Utility\MathUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;
use TYPO3\CMS\Frontend\Page\PageRepository;

/**
 * Returns a site or pseudo-site (with sys_domain records) based on a given request.
 *
 * The main usage is the ->matchRequest() functionality, which receives a request object and boots up
 * Symfony Routing to find the proper route with its defaults / attributes.
 *
 * On top, this is also commonly used throughout TYPO3 to fetch a site by a given pageId.
 * ->matchPageId().
 *
 * The concept of the SiteMatcher is to *resolve*, and not build URIs. On top, it is a facade to hide the
 * dependency to symfony and to not expose its logic.
 *
 * @internal Please note that the site matcher will be probably cease to exist and adapted to the SiteFinder concept when Pseudo-Site handling will be removed.
 */
class SiteMatcher implements SingletonInterface
{
    /**
     * @var SiteFinder
     */
    protected $finder;

    /**
     * @var PseudoSiteFinder
     */
    protected $pseudoSiteFinder;

    /**
     * Injects necessary objects. PseudoSiteFinder is not injectable as this will be become obsolete in the future.
     *
     * @param SiteFinder|null $finder
     */
    public function __construct(SiteFinder $finder = null)
    {
        $this->finder = $finder ?? GeneralUtility::makeInstance(SiteFinder::class);
        $this->pseudoSiteFinder = GeneralUtility::makeInstance(PseudoSiteFinder::class);
    }

    /**
     * Only used when a page is moved but the pseudo site caches has this information hard-coded, so the caches
     * need to be flushed.
     *
     * @internal
     * @throws \TYPO3\CMS\Core\Cache\Exception\NoSuchCacheException
     */
    public function refresh()
    {
        /** Ensure root line caches are flushed */
        RootlineUtility::purgeCaches();
        GeneralUtility::makeInstance(CacheManager::class)->getCache('cache_rootline')->flush();
        $this->pseudoSiteFinder = GeneralUtility::makeInstance(PseudoSiteFinder::class);
        $this->pseudoSiteFinder->refresh();
    }

    /**
     * First, it is checked, if a "id" GET/POST parameter is found.
     * If it is, we check for a valid site mounted there.
     *
     * If it isn't the quest continues by validating the whole request URL and validating against
     * all available site records (and their language prefixes).
     *
     * If none is found, the "legacy" handling is checked for - checking for all pseudo-sites with
     * a sys_domain record, and match against them.
     *
     * @param ServerRequestInterface $request
     * @return RouteResultInterface
     */
    public function matchRequest(ServerRequestInterface $request): RouteResultInterface
    {
        // Remove script file name (index.php) from request uri
        $uri = $this->canonicalizeUri($request->getUri(), $request);
        $pageId = $this->resolvePageIdQueryParam($request);
        $languageId = $this->resolveLanguageIdQueryParam($request);

        $routeResult = $this->matchSiteByUri($uri, $request);

        // Allow insecure pageId based site resolution if explicitly enabled and only if both, ?id= and ?L= are defined
        // (pageId based site resolution without L parameter has always been prohibited, so we do not support that)
        if (
            GeneralUtility::makeInstance(Features::class)->isFeatureEnabled('security.frontend.allowInsecureSiteResolutionByQueryParameters') &&
            $pageId !== null && $languageId !== null
        ) {
            return $this->matchSiteByQueryParams($pageId, $languageId, $routeResult, $uri, $request);
        }

        // Allow the default language to be resolved in case all languages use a prefix
        // and therefore did not match based on path if an explicit pageId is given,
        // (example "https://www.example.com/?id=.." was entered, but all languages have "https://www.example.com/lang-key/")
        // @todo remove this fallback, in order for SiteBaseRedirectResolver to produce a redirect instead (requires functionals to be adapted)
        if ($pageId !== null && $routeResult->getLanguage() === null) {
            $routeResult = $routeResult->withLanguage($routeResult->getSite()->getDefaultLanguage());
        }

        // adjust the language aspect if it was given by query param `&L` (and ?id is given)
        // @todo remove, this is added for backwards (and functional tests) compatibility reasons
        if ($languageId !== null && $pageId !== null) {
            try {
                // override/set language by `&L=` query param
                $routeResult = $routeResult->withLanguage($routeResult->getSite()->getLanguageById($languageId));
            } catch (\InvalidArgumentException $e) {
                // ignore; language id not available
            }
        }

        if (!($routeResult->getSite() instanceof NullSite)) {
            return $routeResult;
        }

        return $this->matchPseudoSite($uri, $request, $pageId);
    }

    protected function matchPseudoSite(
        UriInterface $uri,
        ServerRequestInterface $request,
        ?int $pageId,
        ?SiteInterface $site = null,
        ?SiteLanguage $language = null
    ) {

        // Check against any sys_domain records
        $collection = $this->getRouteCollectionForVisibleSysDomains();
        $context = new RequestContext('/', $request->getMethod(), $uri->getHost());
        $matcher = new UrlMatcher($collection, $context);
        if ((bool)$GLOBALS['TYPO3_CONF_VARS']['SYS']['recursiveDomainSearch']) {
            $host = explode('.', $uri->getHost());
            while (count($host)) {
                $context->setHost(implode('.', $host));
                try {
                    $result = $matcher->match($uri->getPath());
                    return new SiteRouteResult(
                        $uri,
                        $result['site'],
                        $result['language'],
                        $result['tail']
                    );
                } catch (NoConfigurationException | ResourceNotFoundException $e) {
                    array_shift($host);
                }
            }
        } else {
            try {
                $result = $matcher->match($uri->getPath());
                return new SiteRouteResult($uri, $result['site'], $result['language'], $result['tail']);
            } catch (NoConfigurationException | ResourceNotFoundException $e) {
                // No domain record found
            }
        }
        // No domain record found, try resolving "pseudo-site" again
        if ($site == null) {
            try {
                // use the matching "pseudo-site" for $pageId
                $site = $this->pseudoSiteFinder->getSiteByPageId((int)$pageId);
            } catch (SiteNotFoundException $exception) {
                // use the first "pseudo-site" found
                $allPseudoSites = $this->pseudoSiteFinder->findAll();
                $site = reset($allPseudoSites);
            }
        }
        return new SiteRouteResult($uri, $site, $language);
    }

    /**
     * If a given page ID is handed in, a Site/PseudoSite/NullSite is returned.
     *
     * @param int $pageId uid of a page in default language
     * @param array|null $rootLine an alternative root line, if already at and.
     * @return SiteInterface
     * @throws SiteNotFoundException
     */
    public function matchByPageId(int $pageId, array $rootLine = null): SiteInterface
    {
        try {
            return $this->finder->getSiteByPageId($pageId, $rootLine);
        } catch (SiteNotFoundException $e) {
            // Check for a pseudo / null site
            return $this->pseudoSiteFinder->getSiteByPageId($pageId, $rootLine);
        }
    }

    /**
     * Returns a Symfony RouteCollection containing all routes to all sites.
     *
     * @return RouteCollection
     */
    protected function getRouteCollectionForAllSites(): RouteCollection
    {
        $groupedRoutes = [];
        foreach ($this->finder->getAllSites() as $site) {
            // Add the site as entrypoint
            $uri = $site->getBase();
            $route = new Route(
                ($uri->getPath() ?: '/') . '{tail}',
                ['site' => $site, 'language' => null, 'tail' => ''],
                array_filter(['tail' => '.*', 'port' => (string)$uri->getPort()]),
                ['utf8' => true],
                $uri->getHost() ?: '',
                $uri->getScheme()
            );
            $identifier = 'site_' . $site->getIdentifier();
            $groupedRoutes[($uri->getScheme() ?: '-') . ($uri->getHost() ?: '-')][$uri->getPath() ?: '/'][$identifier] = $route;
            // Add all languages
            foreach ($site->getAllLanguages() as $siteLanguage) {
                $uri = $siteLanguage->getBase();
                $route = new Route(
                    ($uri->getPath() ?: '/') . '{tail}',
                    ['site' => $site, 'language' => $siteLanguage, 'tail' => ''],
                    array_filter(['tail' => '.*', 'port' => (string)$uri->getPort()]),
                    ['utf8' => true],
                    HttpUtility::idn_to_ascii($uri->getHost()) ?: '',
                    $uri->getScheme()
                );
                $identifier = 'site_' . $site->getIdentifier() . '_' . $siteLanguage->getLanguageId();
                $groupedRoutes[($uri->getScheme() ?: '-') . ($uri->getHost() ?: '-')][$uri->getPath() ?: '/'][$identifier] = $route;
            }
        }
        return $this->createRouteCollectionFromGroupedRoutes($groupedRoutes);
    }

    /**
     * Return the page ID (pid) of a sys_domain record, based on a request object, does the infamous
     * "recursive domain search", to also detect if the domain is like "abc.def.example.com" even if the
     * sys_domain entry is "example.com".
     *
     * @return RouteCollection
     */
    protected function getRouteCollectionForVisibleSysDomains(): RouteCollection
    {
        $sites = $this->pseudoSiteFinder->findAll();
        $groupedRoutes = [];
        foreach ($sites as $site) {
            if (!$site instanceof PseudoSite) {
                continue;
            }
            foreach ($site->getEntryPoints() as $uri) {
                // Site has no sys_domain record, it is not valid for a routing entrypoint, but only available
                // via "id" GET parameter which is handled separately
                if (!$uri->getHost()) {
                    continue;
                }
                $route = new Route(
                    ($uri->getPath() ?: '/') . '{tail}',
                    ['site' => $site, 'language' => null, 'tail' => ''],
                    array_filter(['tail' => '.*', 'port' => (string)$uri->getPort()]),
                    ['utf8' => true],
                    $uri->getHost(),
                    $uri->getScheme()
                );
                $identifier = 'site_' . $site->getIdentifier() . '_' . (string)$uri;
                $groupedRoutes[($uri->getScheme() ?: '-') . ($uri->getHost() ?: '-')][$uri->getPath() ?: '/'][$identifier] = $route;
            }
        }
        return $this->createRouteCollectionFromGroupedRoutes($groupedRoutes);
    }

    /**
     * As the {tail} parameter is greedy, it needs to be ensured that the one with the
     * most specific part matches first.
     *
     * @param array $groupedRoutes
     * @return RouteCollection
     */
    protected function createRouteCollectionFromGroupedRoutes(array $groupedRoutes): RouteCollection
    {
        $collection = new RouteCollection();
        // Ensure more generic routes containing '-' in host identifier, processed at last
        krsort($groupedRoutes);
        foreach ($groupedRoutes as $groupedRoutesPerHost) {
            krsort($groupedRoutesPerHost);
            foreach ($groupedRoutesPerHost as $groupedRoutesPerPath) {
                krsort($groupedRoutesPerPath);
                foreach ($groupedRoutesPerPath as $identifier => $route) {
                    $collection->add($identifier, $route);
                }
            }
        }
        return $collection;
    }

    /**
     * @return ?positive-int
     */
    protected function resolvePageIdQueryParam(ServerRequestInterface $request): ?int
    {
        $pageId = $request->getQueryParams()['id'] ?? $request->getParsedBody()['id'] ?? null;

        if ($pageId === null) {
            return null;
        }

        if (is_string($pageId) && $pageId !== '' && !MathUtility::canBeInterpretedAsInteger($pageId)) {
            return (int)GeneralUtility::makeInstance(PageRepository::class)->getPageIdFromAlias($pageId);
        }

        return (int)$pageId <= 0 ? null : (int)$pageId;
    }

    /**
     * @return ?positive-int
     */
    protected function resolveLanguageIdQueryParam(ServerRequestInterface $request): ?int
    {
        $languageId = $request->getQueryParams()['L'] ?? $request->getParsedBody()['L'] ?? null;
        if ($languageId === null) {
            return null;
        }
        return (int)$languageId < 0 ? null : (int)$languageId;
    }

    /**
     * Remove script file name (index.php) from request uri
     */
    protected function canonicalizeUri(UriInterface $uri, ServerRequestInterface $request): UriInterface
    {
        if ($uri->getPath() === '') {
            return $uri;
        }

        $normalizedParams = $request->getAttribute('normalizedParams');
        if (!$normalizedParams instanceof NormalizedParams) {
            return $uri;
        }

        $urlPath = ltrim($uri->getPath(), '/');
        $scriptName = ltrim($normalizedParams->getScriptName(), '/');
        $scriptPath = ltrim($normalizedParams->getSitePath(), '/');
        if ($scriptName !== '' && strpos($urlPath, $scriptName) === 0) {
            $urlPath = '/' . $scriptPath . substr($urlPath, mb_strlen($scriptName));
            $uri = $uri->withPath($urlPath);
        }

        return $uri;
    }

    protected function matchSiteByUri(UriInterface $uri, ServerRequestInterface $request): SiteRouteResult
    {
        $collection = $this->getRouteCollectionForAllSites();
        $requestContext = new RequestContext(
            '',
            $request->getMethod(),
            (string)HttpUtility::idn_to_ascii($request->getUri()->getHost()),
            $uri->getScheme(),
            // Ports are only necessary for URL generation in Symfony which is not used by TYPO3
            80,
            443,
            $uri->getPath()
        );
        $matcher = new UrlMatcher($collection, $requestContext);
        try {
            /** @var array{site: SiteInterface, language: ?SiteLanguage, tail: string} $match */
            $match = $matcher->match($uri->getPath());
            return new SiteRouteResult(
                $uri,
                $match['site'],
                $match['language'],
                $match['tail']
            );
        } catch (NoConfigurationException | ResourceNotFoundException $e) {
            return new SiteRouteResult($uri, new NullSite(), null, '');
        }
    }

    protected function matchSiteByQueryParams(
        int $pageId,
        int $languageId,
        SiteRouteResult $fallback,
        UriInterface $uri,
        ServerRequestInterface $request
    ): SiteRouteResult {
        try {
            $site = $this->finder->getSiteByPageId($pageId);
        } catch (SiteNotFoundException $e) {
            if (!($fallback->getSite() instanceof NullSite)) {
                return $fallback;
            }
            return $this->matchPseudoSite($uri, $request, $pageId);
        }

        try {
            // override/set language by `&L=` query param
            $language = $site->getLanguageById($languageId);
        } catch (\InvalidArgumentException $e) {
            if (!($fallback->getSite() instanceof NullSite)) {
                return $fallback;
            }
            $language = null;
        }

        return $this->matchPseudoSite($uri, $request, $pageId, $site, $language);
    }
}
