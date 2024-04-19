<?php

class Standard_action_overview_ceec2ee6173641e2a1e90d0993cfb6fa2e35d67f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
		<div class="table-fit">
			<table class="table table-striped table-hover table-condensed">
				<thead>
				<tr>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['languageKey'] = NULL;
$arguments248['alternativeLanguageKeys'] = NULL;
$arguments248['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site';

$output247 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext)]);

$output247 .= '</th>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['key'] = NULL;
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$arguments250['languageKey'] = NULL;
$arguments250['alternativeLanguageKeys'] = NULL;
$arguments250['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output247 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output247 .= '</th>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['key'] = NULL;
$arguments252['id'] = NULL;
$arguments252['default'] = NULL;
$arguments252['arguments'] = NULL;
$arguments252['extensionName'] = NULL;
$arguments252['languageKey'] = NULL;
$arguments252['alternativeLanguageKeys'] = NULL;
$arguments252['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl';

$output247 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext)]);

$output247 .= '</th>
					<th>&nbsp;</th>
				</tr>
				</thead>
				<tbody>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
					<tr>
						<td nowrap valign="top">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
								<span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
$array262 = array (
);
$output261 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.margin', $array262)]);

$output261 .= 'px"></span>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
										<a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array319 = array (
);
$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array319)]);

$output318 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['table'] = NULL;
$arguments320['row'] = NULL;
$arguments320['size'] = 'small';
$arguments320['alternativeMarkupIdentifier'] = NULL;
$arguments320['table'] = 'pages';
$array322 = array (
);$arguments320['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array322);

$output318 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output318 .= '
										</a>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
													';
$array352 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array352)]);

$output351 .= ' [ID: ';
$array353 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array353)]);

$output351 .= ']
												';
return $output351;
};
$arguments345 = array();
$arguments345['additionalAttributes'] = NULL;
$arguments345['data'] = NULL;
$arguments345['route'] = NULL;
$arguments345['parameters'] = array (
);
$arguments345['referenceType'] = 'absolute';
$arguments345['name'] = NULL;
$arguments345['rel'] = NULL;
$arguments345['rev'] = NULL;
$arguments345['target'] = NULL;
$arguments345['class'] = NULL;
$arguments345['dir'] = NULL;
$arguments345['id'] = NULL;
$arguments345['lang'] = NULL;
$arguments345['style'] = NULL;
$arguments345['title'] = NULL;
$arguments345['accesskey'] = NULL;
$arguments345['tabindex'] = NULL;
$arguments345['onclick'] = NULL;
$arguments345['route'] = 'site_configuration';
// Rendering Array
$array347 = array();
$array347['action'] = 'edit';
$array348 = array (
);$array347['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array348);
$arguments345['parameters'] = $array347;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['key'] = NULL;
$arguments349['id'] = NULL;
$arguments349['default'] = NULL;
$arguments349['arguments'] = NULL;
$arguments349['extensionName'] = NULL;
$arguments349['languageKey'] = NULL;
$arguments349['alternativeLanguageKeys'] = NULL;
$arguments349['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments345['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
											';
return $output344;
};
$arguments342 = array();

$output341 .= '';

$output341 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
												';
$array357 = array (
);
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array357)]);

$output356 .= ' [ID: ';
$array358 = array (
);
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array358)]);

$output356 .= ']
											';
return $output356;
};
$arguments354 = array();
$arguments354['if'] = NULL;

$output341 .= '';

$output341 .= '
										';
return $output341;
};
$arguments323 = array();
$arguments323['then'] = NULL;
$arguments323['else'] = NULL;
$arguments323['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array338 = array();
$array339 = array (
);$array338['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array339);

$expression340 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments323['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression340(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array338)
					),
					$renderingContext
				);
$arguments323['__thenClosure'] = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
													';
$array333 = array (
);
$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array333)]);

$output332 .= ' [ID: ';
$array334 = array (
);
$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array334)]);

$output332 .= ']
												';
return $output332;
};
$arguments326 = array();
$arguments326['additionalAttributes'] = NULL;
$arguments326['data'] = NULL;
$arguments326['route'] = NULL;
$arguments326['parameters'] = array (
);
$arguments326['referenceType'] = 'absolute';
$arguments326['name'] = NULL;
$arguments326['rel'] = NULL;
$arguments326['rev'] = NULL;
$arguments326['target'] = NULL;
$arguments326['class'] = NULL;
$arguments326['dir'] = NULL;
$arguments326['id'] = NULL;
$arguments326['lang'] = NULL;
$arguments326['style'] = NULL;
$arguments326['title'] = NULL;
$arguments326['accesskey'] = NULL;
$arguments326['tabindex'] = NULL;
$arguments326['onclick'] = NULL;
$arguments326['route'] = 'site_configuration';
// Rendering Array
$array328 = array();
$array328['action'] = 'edit';
$array329 = array (
);$array328['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array329);
$arguments326['parameters'] = $array328;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['key'] = NULL;
$arguments330['id'] = NULL;
$arguments330['default'] = NULL;
$arguments330['arguments'] = NULL;
$arguments330['extensionName'] = NULL;
$arguments330['languageKey'] = NULL;
$arguments330['alternativeLanguageKeys'] = NULL;
$arguments330['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments326['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
											';
return $output325;
};
$arguments323['__elseClosures'][] = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
												';
$array336 = array (
);
$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array336)]);

$output335 .= ' [ID: ';
$array337 = array (
);
$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array337)]);

$output335 .= ']
											';
return $output335;
};

$output318 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output318 .= '
									';
return $output318;
};
$arguments316 = array();

$output315 .= '';

$output315 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['table'] = NULL;
$arguments362['row'] = NULL;
$arguments362['size'] = 'small';
$arguments362['alternativeMarkupIdentifier'] = NULL;
$arguments362['table'] = 'pages';
$array364 = array (
);$arguments362['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array364);

$output361 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output361 .= '
										';
$array365 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array365)]);

$output361 .= '<br>
									';
return $output361;
};
$arguments359 = array();
$arguments359['if'] = NULL;

$output315 .= '';

$output315 .= '
								';
return $output315;
};
$arguments263 = array();
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$arguments263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['0'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array312);
$array311['1'] = ' == ';
$array313 = array (
);$array311['2'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array313);

$expression314 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression314(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);
$arguments263['__thenClosure'] = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
										<a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array266 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array266)]);

$output265 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['table'] = NULL;
$arguments267['row'] = NULL;
$arguments267['size'] = 'small';
$arguments267['alternativeMarkupIdentifier'] = NULL;
$arguments267['table'] = 'pages';
$array269 = array (
);$arguments267['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array269);

$output265 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output265 .= '
										</a>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
													';
$array299 = array (
);
$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array299)]);

$output298 .= ' [ID: ';
$array300 = array (
);
$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array300)]);

$output298 .= ']
												';
return $output298;
};
$arguments292 = array();
$arguments292['additionalAttributes'] = NULL;
$arguments292['data'] = NULL;
$arguments292['route'] = NULL;
$arguments292['parameters'] = array (
);
$arguments292['referenceType'] = 'absolute';
$arguments292['name'] = NULL;
$arguments292['rel'] = NULL;
$arguments292['rev'] = NULL;
$arguments292['target'] = NULL;
$arguments292['class'] = NULL;
$arguments292['dir'] = NULL;
$arguments292['id'] = NULL;
$arguments292['lang'] = NULL;
$arguments292['style'] = NULL;
$arguments292['title'] = NULL;
$arguments292['accesskey'] = NULL;
$arguments292['tabindex'] = NULL;
$arguments292['onclick'] = NULL;
$arguments292['route'] = 'site_configuration';
// Rendering Array
$array294 = array();
$array294['action'] = 'edit';
$array295 = array (
);$array294['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array295);
$arguments292['parameters'] = $array294;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['key'] = NULL;
$arguments296['id'] = NULL;
$arguments296['default'] = NULL;
$arguments296['arguments'] = NULL;
$arguments296['extensionName'] = NULL;
$arguments296['languageKey'] = NULL;
$arguments296['alternativeLanguageKeys'] = NULL;
$arguments296['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments292['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output291 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output291 .= '
											';
return $output291;
};
$arguments289 = array();

$output288 .= '';

$output288 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
												';
$array304 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array304)]);

$output303 .= ' [ID: ';
$array305 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array305)]);

$output303 .= ']
											';
return $output303;
};
$arguments301 = array();
$arguments301['if'] = NULL;

$output288 .= '';

$output288 .= '
										';
return $output288;
};
$arguments270 = array();
$arguments270['then'] = NULL;
$arguments270['else'] = NULL;
$arguments270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array286);

$expression287 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments270['__thenClosure'] = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
													';
$array280 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array280)]);

$output279 .= ' [ID: ';
$array281 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array281)]);

$output279 .= ']
												';
return $output279;
};
$arguments273 = array();
$arguments273['additionalAttributes'] = NULL;
$arguments273['data'] = NULL;
$arguments273['route'] = NULL;
$arguments273['parameters'] = array (
);
$arguments273['referenceType'] = 'absolute';
$arguments273['name'] = NULL;
$arguments273['rel'] = NULL;
$arguments273['rev'] = NULL;
$arguments273['target'] = NULL;
$arguments273['class'] = NULL;
$arguments273['dir'] = NULL;
$arguments273['id'] = NULL;
$arguments273['lang'] = NULL;
$arguments273['style'] = NULL;
$arguments273['title'] = NULL;
$arguments273['accesskey'] = NULL;
$arguments273['tabindex'] = NULL;
$arguments273['onclick'] = NULL;
$arguments273['route'] = 'site_configuration';
// Rendering Array
$array275 = array();
$array275['action'] = 'edit';
$array276 = array (
);$array275['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array276);
$arguments273['parameters'] = $array275;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['key'] = NULL;
$arguments277['id'] = NULL;
$arguments277['default'] = NULL;
$arguments277['arguments'] = NULL;
$arguments277['extensionName'] = NULL;
$arguments277['languageKey'] = NULL;
$arguments277['alternativeLanguageKeys'] = NULL;
$arguments277['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments273['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output272 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output272 .= '
											';
return $output272;
};
$arguments270['__elseClosures'][] = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
												';
$array283 = array (
);
$output282 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array283)]);

$output282 .= ' [ID: ';
$array284 = array (
);
$output282 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array284)]);

$output282 .= ']
											';
return $output282;
};

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output265 .= '
									';
return $output265;
};
$arguments263['__elseClosures'][] = function() use ($renderingContext, $self) {
$output306 = '';

$output306 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['table'] = NULL;
$arguments307['row'] = NULL;
$arguments307['size'] = 'small';
$arguments307['alternativeMarkupIdentifier'] = NULL;
$arguments307['table'] = 'pages';
$array309 = array (
);$arguments307['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array309);

$output306 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output306 .= '
										';
$array310 = array (
);
$output306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array310)]);

$output306 .= '<br>
									';
return $output306;
};

$output261 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output261 .= '
							';
return $output261;
};
$arguments258 = array();
$arguments258['each'] = NULL;
$arguments258['as'] = NULL;
$arguments258['key'] = NULL;
$arguments258['reverse'] = false;
$arguments258['iteration'] = NULL;
$array260 = array (
);$arguments258['each'] = $renderingContext->getVariableProvider()->getByPath('page.rootline', $array260);
$arguments258['as'] = 'rootLinePage';
$arguments258['iteration'] = 'i';

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output257 .= '
						</td>
						<td>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
									<code>';
$array385 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array385)]);

$output384 .= '</code>
								';
return $output384;
};
$arguments382 = array();

$output381 .= '';

$output381 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
									<div>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['key'] = NULL;
$arguments394['id'] = NULL;
$arguments394['default'] = NULL;
$arguments394['arguments'] = NULL;
$arguments394['extensionName'] = NULL;
$arguments394['languageKey'] = NULL;
$arguments394['alternativeLanguageKeys'] = NULL;
$arguments394['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext)]);

$output393 .= '
										';
return $output393;
};
$arguments389 = array();
$arguments389['additionalAttributes'] = NULL;
$arguments389['data'] = NULL;
$arguments389['route'] = NULL;
$arguments389['parameters'] = array (
);
$arguments389['referenceType'] = 'absolute';
$arguments389['name'] = NULL;
$arguments389['rel'] = NULL;
$arguments389['rev'] = NULL;
$arguments389['target'] = NULL;
$arguments389['class'] = NULL;
$arguments389['dir'] = NULL;
$arguments389['id'] = NULL;
$arguments389['lang'] = NULL;
$arguments389['style'] = NULL;
$arguments389['title'] = NULL;
$arguments389['accesskey'] = NULL;
$arguments389['tabindex'] = NULL;
$arguments389['onclick'] = NULL;
$arguments389['route'] = 'site_configuration';
// Rendering Array
$array391 = array();
$array391['action'] = 'edit';
$array392 = array (
);$array391['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array392);
$arguments389['parameters'] = $array391;
$arguments389['title'] = 'Create configuration';
$arguments389['class'] = 'btn btn-primary';

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output388 .= '
									</div>
								';
return $output388;
};
$arguments386 = array();
$arguments386['if'] = NULL;

$output381 .= '';

$output381 .= '
							';
return $output381;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array379);

$expression380 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
									<code>';
$array369 = array (
);
$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array369)]);

$output368 .= '</code>
								';
return $output368;
};
$arguments366['__elseClosures'][] = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
									<div>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['key'] = NULL;
$arguments376['id'] = NULL;
$arguments376['default'] = NULL;
$arguments376['arguments'] = NULL;
$arguments376['extensionName'] = NULL;
$arguments376['languageKey'] = NULL;
$arguments376['alternativeLanguageKeys'] = NULL;
$arguments376['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext)]);

$output375 .= '
										';
return $output375;
};
$arguments371 = array();
$arguments371['additionalAttributes'] = NULL;
$arguments371['data'] = NULL;
$arguments371['route'] = NULL;
$arguments371['parameters'] = array (
);
$arguments371['referenceType'] = 'absolute';
$arguments371['name'] = NULL;
$arguments371['rel'] = NULL;
$arguments371['rev'] = NULL;
$arguments371['target'] = NULL;
$arguments371['class'] = NULL;
$arguments371['dir'] = NULL;
$arguments371['id'] = NULL;
$arguments371['lang'] = NULL;
$arguments371['style'] = NULL;
$arguments371['title'] = NULL;
$arguments371['accesskey'] = NULL;
$arguments371['tabindex'] = NULL;
$arguments371['onclick'] = NULL;
$arguments371['route'] = 'site_configuration';
// Rendering Array
$array373 = array();
$array373['action'] = 'edit';
$array374 = array (
);$array373['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array374);
$arguments371['parameters'] = $array373;
$arguments371['title'] = 'Create configuration';
$arguments371['class'] = 'btn btn-primary';

$output370 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output370 .= '
									</div>
								';
return $output370;
};

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output257 .= '
						</td>
						<td>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
								<table class="table table-striped table-no-borders">
									<tr>
										<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['key'] = NULL;
$arguments402['id'] = NULL;
$arguments402['default'] = NULL;
$arguments402['arguments'] = NULL;
$arguments402['extensionName'] = NULL;
$arguments402['languageKey'] = NULL;
$arguments402['alternativeLanguageKeys'] = NULL;
$arguments402['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language';

$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext)]);

$output401 .= '</th>
										<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['key'] = NULL;
$arguments404['id'] = NULL;
$arguments404['default'] = NULL;
$arguments404['arguments'] = NULL;
$arguments404['extensionName'] = NULL;
$arguments404['languageKey'] = NULL;
$arguments404['alternativeLanguageKeys'] = NULL;
$arguments404['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.fullUrlPrefix';

$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext)]);

$output401 .= '</th>
									</tr>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['identifier'] = NULL;
$arguments431['size'] = 'small';
$arguments431['overlay'] = NULL;
$arguments431['state'] = 'default';
$arguments431['alternativeMarkupIdentifier'] = NULL;
$array433 = array (
);$arguments431['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array433);

$output430 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output430 .= ' ';
$array434 = array (
);
$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array434)]);

$output430 .= '
												';
return $output430;
};
$arguments428 = array();

$output427 .= '';

$output427 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output437 = '';

$output437 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['identifier'] = NULL;
$arguments438['size'] = 'small';
$arguments438['overlay'] = NULL;
$arguments438['state'] = 'default';
$arguments438['alternativeMarkupIdentifier'] = NULL;
$array440 = array (
);$arguments438['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array440);
$arguments438['overlay'] = 'overlay-hidden';

$output437 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output437 .= ' <span class="text-muted">';
$array441 = array (
);
$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array441)]);

$output437 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments442 = array();
$arguments442['key'] = NULL;
$arguments442['id'] = NULL;
$arguments442['default'] = NULL;
$arguments442['arguments'] = NULL;
$arguments442['extensionName'] = NULL;
$arguments442['languageKey'] = NULL;
$arguments442['alternativeLanguageKeys'] = NULL;
$arguments442['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext)]);

$output437 .= ')</span>
												';
return $output437;
};
$arguments435 = array();
$arguments435['if'] = NULL;

$output427 .= '';

$output427 .= '
											';
return $output427;
};
$arguments410 = array();
$arguments410['then'] = NULL;
$arguments410['else'] = NULL;
$arguments410['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array424 = array();
$array425 = array (
);$array424['0'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled', $array425);

$expression426 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments410['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression426(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array424)
					),
					$renderingContext
				);
$arguments410['__thenClosure'] = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['identifier'] = NULL;
$arguments413['size'] = 'small';
$arguments413['overlay'] = NULL;
$arguments413['state'] = 'default';
$arguments413['alternativeMarkupIdentifier'] = NULL;
$array415 = array (
);$arguments413['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array415);

$output412 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output412 .= ' ';
$array416 = array (
);
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array416)]);

$output412 .= '
												';
return $output412;
};
$arguments410['__elseClosures'][] = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['identifier'] = NULL;
$arguments418['size'] = 'small';
$arguments418['overlay'] = NULL;
$arguments418['state'] = 'default';
$arguments418['alternativeMarkupIdentifier'] = NULL;
$array420 = array (
);$arguments418['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array420);
$arguments418['overlay'] = 'overlay-hidden';

$output417 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output417 .= ' <span class="text-muted">';
$array421 = array (
);
$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array421)]);

$output417 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments422 = array();
$arguments422['key'] = NULL;
$arguments422['id'] = NULL;
$arguments422['default'] = NULL;
$arguments422['arguments'] = NULL;
$arguments422['extensionName'] = NULL;
$arguments422['languageKey'] = NULL;
$arguments422['alternativeLanguageKeys'] = NULL;
$arguments422['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext)]);

$output417 .= ')</span>
												';
return $output417;
};

$output409 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output409 .= '
										</td>
										<td><a href="';
$array444 = array (
);
$output409 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array444)]);

$output409 .= '" target="_blank">';
$array445 = array (
);
$output409 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array445)]);

$output409 .= '</a></td>
									</tr>
								';
return $output409;
};
$arguments406 = array();
$arguments406['each'] = NULL;
$arguments406['as'] = NULL;
$arguments406['key'] = NULL;
$arguments406['reverse'] = false;
$arguments406['iteration'] = NULL;
$array408 = array (
);$arguments406['each'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages', $array408);
$arguments406['as'] = 'siteLanguage';

$output401 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output401 .= '
								</table>
							';
return $output401;
};
$arguments396 = array();
$arguments396['then'] = NULL;
$arguments396['else'] = NULL;
$arguments396['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration', $array399);

$expression400 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments396['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments396['__thenClosure'] = $renderChildrenClosure397;

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output257 .= '
						</td>
						<td class="col-control nowrap">
							<div class="btn-group">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output458 = '';

$output458 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments459 = array();
$arguments459['identifier'] = NULL;
$arguments459['size'] = 'small';
$arguments459['overlay'] = NULL;
$arguments459['state'] = 'default';
$arguments459['alternativeMarkupIdentifier'] = NULL;
$arguments459['identifier'] = 'actions-open';

$output458 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output458 .= '
									';
return $output458;
};
$arguments452 = array();
$arguments452['additionalAttributes'] = NULL;
$arguments452['data'] = NULL;
$arguments452['route'] = NULL;
$arguments452['parameters'] = array (
);
$arguments452['referenceType'] = 'absolute';
$arguments452['name'] = NULL;
$arguments452['rel'] = NULL;
$arguments452['rev'] = NULL;
$arguments452['target'] = NULL;
$arguments452['class'] = NULL;
$arguments452['dir'] = NULL;
$arguments452['id'] = NULL;
$arguments452['lang'] = NULL;
$arguments452['style'] = NULL;
$arguments452['title'] = NULL;
$arguments452['accesskey'] = NULL;
$arguments452['tabindex'] = NULL;
$arguments452['onclick'] = NULL;
$arguments452['route'] = 'site_configuration';
// Rendering Array
$array454 = array();
$array454['action'] = 'edit';
$array455 = array (
);$array454['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array455);
$arguments452['parameters'] = $array454;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['key'] = NULL;
$arguments456['id'] = NULL;
$arguments456['default'] = NULL;
$arguments456['arguments'] = NULL;
$arguments456['extensionName'] = NULL;
$arguments456['languageKey'] = NULL;
$arguments456['alternativeLanguageKeys'] = NULL;
$arguments456['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments452['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);
$arguments452['class'] = 'btn btn-default';

$output451 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output451 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments473 = array();
$arguments473['identifier'] = NULL;
$arguments473['size'] = 'small';
$arguments473['overlay'] = NULL;
$arguments473['state'] = 'default';
$arguments473['alternativeMarkupIdentifier'] = NULL;
$arguments473['identifier'] = 'actions-delete';

$output472 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output472 .= '
									';
return $output472;
};
$arguments461 = array();
$arguments461['additionalAttributes'] = NULL;
$arguments461['data'] = NULL;
$arguments461['route'] = NULL;
$arguments461['parameters'] = array (
);
$arguments461['referenceType'] = 'absolute';
$arguments461['name'] = NULL;
$arguments461['rel'] = NULL;
$arguments461['rev'] = NULL;
$arguments461['target'] = NULL;
$arguments461['class'] = NULL;
$arguments461['dir'] = NULL;
$arguments461['id'] = NULL;
$arguments461['lang'] = NULL;
$arguments461['style'] = NULL;
$arguments461['title'] = NULL;
$arguments461['accesskey'] = NULL;
$arguments461['tabindex'] = NULL;
$arguments461['onclick'] = NULL;
$arguments461['route'] = 'site_configuration';
// Rendering Array
$array463 = array();
$array463['action'] = 'delete';
$array464 = array (
);$array463['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array464);
$arguments461['parameters'] = $array463;
$arguments461['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['key'] = NULL;
$arguments465['id'] = NULL;
$arguments465['default'] = NULL;
$arguments465['arguments'] = NULL;
$arguments465['extensionName'] = NULL;
$arguments465['languageKey'] = NULL;
$arguments465['alternativeLanguageKeys'] = NULL;
$arguments465['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments461['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);
// Rendering Array
$array467 = array();
$array467['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['key'] = NULL;
$arguments468['id'] = NULL;
$arguments468['default'] = NULL;
$arguments468['arguments'] = NULL;
$arguments468['extensionName'] = NULL;
$arguments468['languageKey'] = NULL;
$arguments468['alternativeLanguageKeys'] = NULL;
$arguments468['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array467['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['key'] = NULL;
$arguments470['id'] = NULL;
$arguments470['default'] = NULL;
$arguments470['arguments'] = NULL;
$arguments470['extensionName'] = NULL;
$arguments470['languageKey'] = NULL;
$arguments470['alternativeLanguageKeys'] = NULL;
$arguments470['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array467['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);
$arguments461['data'] = $array467;

$output451 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output451 .= '
								';
return $output451;
};
$arguments446 = array();
$arguments446['then'] = NULL;
$arguments446['else'] = NULL;
$arguments446['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array448 = array();
$array449 = array (
);$array448['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array449);

$expression450 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments446['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression450(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array448)
					),
					$renderingContext
				);
$arguments446['__thenClosure'] = $renderChildrenClosure447;

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output257 .= '
							</div>
						</td>
					</tr>
				';
return $output257;
};
$arguments254 = array();
$arguments254['each'] = NULL;
$arguments254['as'] = NULL;
$arguments254['key'] = NULL;
$arguments254['reverse'] = false;
$arguments254['iteration'] = NULL;
$array256 = array (
);$arguments254['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array256);
$arguments254['as'] = 'page';

$output247 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output247 .= '
				</tbody>
			</table>
		</div>
	';
return $output247;
};
$arguments245 = array();

$output244 .= '';

$output244 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output482 = '';

$output482 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['key'] = NULL;
$arguments483['id'] = NULL;
$arguments483['default'] = NULL;
$arguments483['arguments'] = NULL;
$arguments483['extensionName'] = NULL;
$arguments483['languageKey'] = NULL;
$arguments483['alternativeLanguageKeys'] = NULL;
$arguments483['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message';

$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext)]);

$output482 .= '</p>
		';
return $output482;
};
$arguments478 = array();
$arguments478['message'] = NULL;
$arguments478['title'] = NULL;
$arguments478['state'] = -2;
$arguments478['iconName'] = NULL;
$arguments478['disableIcon'] = false;
$arguments478['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['key'] = NULL;
$arguments480['id'] = NULL;
$arguments480['default'] = NULL;
$arguments480['arguments'] = NULL;
$arguments480['extensionName'] = NULL;
$arguments480['languageKey'] = NULL;
$arguments480['alternativeLanguageKeys'] = NULL;
$arguments480['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title';
$arguments478['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);
$renderChildrenClosure479 = ($arguments478['message'] !== null) ? function() use ($arguments478) { return $arguments478['message']; } : $renderChildrenClosure479;
$output477 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
	';
return $output477;
};
$arguments475 = array();
$arguments475['if'] = NULL;

$output244 .= '';

$output244 .= '
';
return $output244;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array241 = array();
$array242 = array (
);$array241['0'] = $renderingContext->getVariableProvider()->getByPath('pages', $array242);

$expression243 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression243(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
		<div class="table-fit">
			<table class="table table-striped table-hover table-condensed">
				<thead>
				<tr>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['languageKey'] = NULL;
$arguments6['alternativeLanguageKeys'] = NULL;
$arguments6['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output5 .= '</th>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output5 .= '</th>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['languageKey'] = NULL;
$arguments10['alternativeLanguageKeys'] = NULL;
$arguments10['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output5 .= '</th>
					<th>&nbsp;</th>
				</tr>
				</thead>
				<tbody>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
					<tr>
						<td nowrap valign="top">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
								<span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
$array20 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.margin', $array20)]);

$output19 .= 'px"></span>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
										<a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array77 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array77)]);

$output76 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['table'] = NULL;
$arguments78['row'] = NULL;
$arguments78['size'] = 'small';
$arguments78['alternativeMarkupIdentifier'] = NULL;
$arguments78['table'] = 'pages';
$array80 = array (
);$arguments78['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array80);

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output76 .= '
										</a>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
													';
$array110 = array (
);
$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array110)]);

$output109 .= ' [ID: ';
$array111 = array (
);
$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array111)]);

$output109 .= ']
												';
return $output109;
};
$arguments103 = array();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['route'] = NULL;
$arguments103['parameters'] = array (
);
$arguments103['referenceType'] = 'absolute';
$arguments103['name'] = NULL;
$arguments103['rel'] = NULL;
$arguments103['rev'] = NULL;
$arguments103['target'] = NULL;
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['route'] = 'site_configuration';
// Rendering Array
$array105 = array();
$array105['action'] = 'edit';
$array106 = array (
);$array105['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array106);
$arguments103['parameters'] = $array105;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['key'] = NULL;
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['languageKey'] = NULL;
$arguments107['alternativeLanguageKeys'] = NULL;
$arguments107['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments103['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
											';
return $output102;
};
$arguments100 = array();

$output99 .= '';

$output99 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
												';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array115)]);

$output114 .= ' [ID: ';
$array116 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array116)]);

$output114 .= ']
											';
return $output114;
};
$arguments112 = array();
$arguments112['if'] = NULL;

$output99 .= '';

$output99 .= '
										';
return $output99;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array97);

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
													';
$array91 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array91)]);

$output90 .= ' [ID: ';
$array92 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array92)]);

$output90 .= ']
												';
return $output90;
};
$arguments84 = array();
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['route'] = NULL;
$arguments84['parameters'] = array (
);
$arguments84['referenceType'] = 'absolute';
$arguments84['name'] = NULL;
$arguments84['rel'] = NULL;
$arguments84['rev'] = NULL;
$arguments84['target'] = NULL;
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['route'] = 'site_configuration';
// Rendering Array
$array86 = array();
$array86['action'] = 'edit';
$array87 = array (
);$array86['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array87);
$arguments84['parameters'] = $array86;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['languageKey'] = NULL;
$arguments88['alternativeLanguageKeys'] = NULL;
$arguments88['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments84['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
											';
return $output83;
};
$arguments81['__elseClosures'][] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
												';
$array94 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array94)]);

$output93 .= ' [ID: ';
$array95 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array95)]);

$output93 .= ']
											';
return $output93;
};

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output76 .= '
									';
return $output76;
};
$arguments74 = array();

$output73 .= '';

$output73 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['table'] = NULL;
$arguments120['row'] = NULL;
$arguments120['size'] = 'small';
$arguments120['alternativeMarkupIdentifier'] = NULL;
$arguments120['table'] = 'pages';
$array122 = array (
);$arguments120['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array122);

$output119 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
										';
$array123 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array123)]);

$output119 .= '<br>
									';
return $output119;
};
$arguments117 = array();
$arguments117['if'] = NULL;

$output73 .= '';

$output73 .= '
								';
return $output73;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array70);
$array69['1'] = ' == ';
$array71 = array (
);$array69['2'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array71);

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
										<a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array24)]);

$output23 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['table'] = NULL;
$arguments25['row'] = NULL;
$arguments25['size'] = 'small';
$arguments25['alternativeMarkupIdentifier'] = NULL;
$arguments25['table'] = 'pages';
$array27 = array (
);$arguments25['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array27);

$output23 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output23 .= '
										</a>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
													';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array57)]);

$output56 .= ' [ID: ';
$array58 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array58)]);

$output56 .= ']
												';
return $output56;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['route'] = NULL;
$arguments50['parameters'] = array (
);
$arguments50['referenceType'] = 'absolute';
$arguments50['name'] = NULL;
$arguments50['rel'] = NULL;
$arguments50['rev'] = NULL;
$arguments50['target'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['route'] = 'site_configuration';
// Rendering Array
$array52 = array();
$array52['action'] = 'edit';
$array53 = array (
);$array52['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array53);
$arguments50['parameters'] = $array52;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments50['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
											';
return $output49;
};
$arguments47 = array();

$output46 .= '';

$output46 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
												';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array62)]);

$output61 .= ' [ID: ';
$array63 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array63)]);

$output61 .= ']
											';
return $output61;
};
$arguments59 = array();
$arguments59['if'] = NULL;

$output46 .= '';

$output46 .= '
										';
return $output46;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
													';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array38)]);

$output37 .= ' [ID: ';
$array39 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array39)]);

$output37 .= ']
												';
return $output37;
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['route'] = NULL;
$arguments31['parameters'] = array (
);
$arguments31['referenceType'] = 'absolute';
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['route'] = 'site_configuration';
// Rendering Array
$array33 = array();
$array33['action'] = 'edit';
$array34 = array (
);$array33['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array34);
$arguments31['parameters'] = $array33;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['languageKey'] = NULL;
$arguments35['alternativeLanguageKeys'] = NULL;
$arguments35['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments31['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
											';
return $output30;
};
$arguments28['__elseClosures'][] = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
												';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array41)]);

$output40 .= ' [ID: ';
$array42 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array42)]);

$output40 .= ']
											';
return $output40;
};

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output23 .= '
									';
return $output23;
};
$arguments21['__elseClosures'][] = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['table'] = NULL;
$arguments65['row'] = NULL;
$arguments65['size'] = 'small';
$arguments65['alternativeMarkupIdentifier'] = NULL;
$arguments65['table'] = 'pages';
$array67 = array (
);$arguments65['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array67);

$output64 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
										';
$array68 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array68)]);

$output64 .= '<br>
									';
return $output64;
};

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output19 .= '
							';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('page.rootline', $array18);
$arguments16['as'] = 'rootLinePage';
$arguments16['iteration'] = 'i';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
						</td>
						<td>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
									<code>';
$array143 = array (
);
$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array143)]);

$output142 .= '</code>
								';
return $output142;
};
$arguments140 = array();

$output139 .= '';

$output139 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
									<div>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['languageKey'] = NULL;
$arguments152['alternativeLanguageKeys'] = NULL;
$arguments152['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output151 .= '
										';
return $output151;
};
$arguments147 = array();
$arguments147['additionalAttributes'] = NULL;
$arguments147['data'] = NULL;
$arguments147['route'] = NULL;
$arguments147['parameters'] = array (
);
$arguments147['referenceType'] = 'absolute';
$arguments147['name'] = NULL;
$arguments147['rel'] = NULL;
$arguments147['rev'] = NULL;
$arguments147['target'] = NULL;
$arguments147['class'] = NULL;
$arguments147['dir'] = NULL;
$arguments147['id'] = NULL;
$arguments147['lang'] = NULL;
$arguments147['style'] = NULL;
$arguments147['title'] = NULL;
$arguments147['accesskey'] = NULL;
$arguments147['tabindex'] = NULL;
$arguments147['onclick'] = NULL;
$arguments147['route'] = 'site_configuration';
// Rendering Array
$array149 = array();
$array149['action'] = 'edit';
$array150 = array (
);$array149['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array150);
$arguments147['parameters'] = $array149;
$arguments147['title'] = 'Create configuration';
$arguments147['class'] = 'btn btn-primary';

$output146 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
									</div>
								';
return $output146;
};
$arguments144 = array();
$arguments144['if'] = NULL;

$output139 .= '';

$output139 .= '
							';
return $output139;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array137);

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
									<code>';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array127)]);

$output126 .= '</code>
								';
return $output126;
};
$arguments124['__elseClosures'][] = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
									<div>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['key'] = NULL;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['languageKey'] = NULL;
$arguments134['alternativeLanguageKeys'] = NULL;
$arguments134['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output133 .= '
										';
return $output133;
};
$arguments129 = array();
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['route'] = NULL;
$arguments129['parameters'] = array (
);
$arguments129['referenceType'] = 'absolute';
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['route'] = 'site_configuration';
// Rendering Array
$array131 = array();
$array131['action'] = 'edit';
$array132 = array (
);$array131['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array132);
$arguments129['parameters'] = $array131;
$arguments129['title'] = 'Create configuration';
$arguments129['class'] = 'btn btn-primary';

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
									</div>
								';
return $output128;
};

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output15 .= '
						</td>
						<td>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
								<table class="table table-striped table-no-borders">
									<tr>
										<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['key'] = NULL;
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$arguments160['languageKey'] = NULL;
$arguments160['alternativeLanguageKeys'] = NULL;
$arguments160['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language';

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output159 .= '</th>
										<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['key'] = NULL;
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$arguments162['languageKey'] = NULL;
$arguments162['alternativeLanguageKeys'] = NULL;
$arguments162['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.fullUrlPrefix';

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output159 .= '</th>
									</tr>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['identifier'] = NULL;
$arguments189['size'] = 'small';
$arguments189['overlay'] = NULL;
$arguments189['state'] = 'default';
$arguments189['alternativeMarkupIdentifier'] = NULL;
$array191 = array (
);$arguments189['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array191);

$output188 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= ' ';
$array192 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array192)]);

$output188 .= '
												';
return $output188;
};
$arguments186 = array();

$output185 .= '';

$output185 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['identifier'] = NULL;
$arguments196['size'] = 'small';
$arguments196['overlay'] = NULL;
$arguments196['state'] = 'default';
$arguments196['alternativeMarkupIdentifier'] = NULL;
$array198 = array (
);$arguments196['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array198);
$arguments196['overlay'] = 'overlay-hidden';

$output195 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= ' <span class="text-muted">';
$array199 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array199)]);

$output195 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments200 = array();
$arguments200['key'] = NULL;
$arguments200['id'] = NULL;
$arguments200['default'] = NULL;
$arguments200['arguments'] = NULL;
$arguments200['extensionName'] = NULL;
$arguments200['languageKey'] = NULL;
$arguments200['alternativeLanguageKeys'] = NULL;
$arguments200['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext)]);

$output195 .= ')</span>
												';
return $output195;
};
$arguments193 = array();
$arguments193['if'] = NULL;

$output185 .= '';

$output185 .= '
											';
return $output185;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments168['__thenClosure'] = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['identifier'] = NULL;
$arguments171['size'] = 'small';
$arguments171['overlay'] = NULL;
$arguments171['state'] = 'default';
$arguments171['alternativeMarkupIdentifier'] = NULL;
$array173 = array (
);$arguments171['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array173);

$output170 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= ' ';
$array174 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array174)]);

$output170 .= '
												';
return $output170;
};
$arguments168['__elseClosures'][] = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['identifier'] = NULL;
$arguments176['size'] = 'small';
$arguments176['overlay'] = NULL;
$arguments176['state'] = 'default';
$arguments176['alternativeMarkupIdentifier'] = NULL;
$array178 = array (
);$arguments176['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array178);
$arguments176['overlay'] = 'overlay-hidden';

$output175 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= ' <span class="text-muted">';
$array179 = array (
);
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array179)]);

$output175 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output175 .= ')</span>
												';
return $output175;
};

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
										</td>
										<td><a href="';
$array202 = array (
);
$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array202)]);

$output167 .= '" target="_blank">';
$array203 = array (
);
$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array203)]);

$output167 .= '</a></td>
									</tr>
								';
return $output167;
};
$arguments164 = array();
$arguments164['each'] = NULL;
$arguments164['as'] = NULL;
$arguments164['key'] = NULL;
$arguments164['reverse'] = false;
$arguments164['iteration'] = NULL;
$array166 = array (
);$arguments164['each'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages', $array166);
$arguments164['as'] = 'siteLanguage';

$output159 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output159 .= '
								</table>
							';
return $output159;
};
$arguments154 = array();
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$arguments154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration', $array157);

$expression158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);
$arguments154['__thenClosure'] = $renderChildrenClosure155;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output15 .= '
						</td>
						<td class="col-control nowrap">
							<div class="btn-group">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['identifier'] = NULL;
$arguments217['size'] = 'small';
$arguments217['overlay'] = NULL;
$arguments217['state'] = 'default';
$arguments217['alternativeMarkupIdentifier'] = NULL;
$arguments217['identifier'] = 'actions-open';

$output216 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
									';
return $output216;
};
$arguments210 = array();
$arguments210['additionalAttributes'] = NULL;
$arguments210['data'] = NULL;
$arguments210['route'] = NULL;
$arguments210['parameters'] = array (
);
$arguments210['referenceType'] = 'absolute';
$arguments210['name'] = NULL;
$arguments210['rel'] = NULL;
$arguments210['rev'] = NULL;
$arguments210['target'] = NULL;
$arguments210['class'] = NULL;
$arguments210['dir'] = NULL;
$arguments210['id'] = NULL;
$arguments210['lang'] = NULL;
$arguments210['style'] = NULL;
$arguments210['title'] = NULL;
$arguments210['accesskey'] = NULL;
$arguments210['tabindex'] = NULL;
$arguments210['onclick'] = NULL;
$arguments210['route'] = 'site_configuration';
// Rendering Array
$array212 = array();
$array212['action'] = 'edit';
$array213 = array (
);$array212['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array213);
$arguments210['parameters'] = $array212;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['key'] = NULL;
$arguments214['id'] = NULL;
$arguments214['default'] = NULL;
$arguments214['arguments'] = NULL;
$arguments214['extensionName'] = NULL;
$arguments214['languageKey'] = NULL;
$arguments214['alternativeLanguageKeys'] = NULL;
$arguments214['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments210['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);
$arguments210['class'] = 'btn btn-default';

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['identifier'] = NULL;
$arguments231['size'] = 'small';
$arguments231['overlay'] = NULL;
$arguments231['state'] = 'default';
$arguments231['alternativeMarkupIdentifier'] = NULL;
$arguments231['identifier'] = 'actions-delete';

$output230 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
									';
return $output230;
};
$arguments219 = array();
$arguments219['additionalAttributes'] = NULL;
$arguments219['data'] = NULL;
$arguments219['route'] = NULL;
$arguments219['parameters'] = array (
);
$arguments219['referenceType'] = 'absolute';
$arguments219['name'] = NULL;
$arguments219['rel'] = NULL;
$arguments219['rev'] = NULL;
$arguments219['target'] = NULL;
$arguments219['class'] = NULL;
$arguments219['dir'] = NULL;
$arguments219['id'] = NULL;
$arguments219['lang'] = NULL;
$arguments219['style'] = NULL;
$arguments219['title'] = NULL;
$arguments219['accesskey'] = NULL;
$arguments219['tabindex'] = NULL;
$arguments219['onclick'] = NULL;
$arguments219['route'] = 'site_configuration';
// Rendering Array
$array221 = array();
$array221['action'] = 'delete';
$array222 = array (
);$array221['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array222);
$arguments219['parameters'] = $array221;
$arguments219['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['key'] = NULL;
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['languageKey'] = NULL;
$arguments223['alternativeLanguageKeys'] = NULL;
$arguments223['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments219['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);
// Rendering Array
$array225 = array();
$array225['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['key'] = NULL;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$arguments226['languageKey'] = NULL;
$arguments226['alternativeLanguageKeys'] = NULL;
$arguments226['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array225['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['key'] = NULL;
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['languageKey'] = NULL;
$arguments228['alternativeLanguageKeys'] = NULL;
$arguments228['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array225['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);
$arguments219['data'] = $array225;

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output209 .= '
								';
return $output209;
};
$arguments204 = array();
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$arguments204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array207);

$expression208 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array206)
					),
					$renderingContext
				);
$arguments204['__thenClosure'] = $renderChildrenClosure205;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output15 .= '
							</div>
						</td>
					</tr>
				';
return $output15;
};
$arguments12 = array();
$arguments12['each'] = NULL;
$arguments12['as'] = NULL;
$arguments12['key'] = NULL;
$arguments12['reverse'] = false;
$arguments12['iteration'] = NULL;
$array14 = array (
);$arguments12['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array14);
$arguments12['as'] = 'page';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output5 .= '
				</tbody>
			</table>
		</div>
	';
return $output5;
};
$arguments3['__elseClosures'][] = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['key'] = NULL;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['languageKey'] = NULL;
$arguments239['alternativeLanguageKeys'] = NULL;
$arguments239['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext)]);

$output238 .= '</p>
		';
return $output238;
};
$arguments234 = array();
$arguments234['message'] = NULL;
$arguments234['title'] = NULL;
$arguments234['state'] = -2;
$arguments234['iconName'] = NULL;
$arguments234['disableIcon'] = false;
$arguments234['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['key'] = NULL;
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['languageKey'] = NULL;
$arguments236['alternativeLanguageKeys'] = NULL;
$arguments236['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title';
$arguments234['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);
$renderChildrenClosure235 = ($arguments234['message'] !== null) ? function() use ($arguments234) { return $arguments234['message']; } : $renderChildrenClosure235;
$output233 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output233 .= '
	';
return $output233;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['key'] = NULL;
$arguments491['id'] = NULL;
$arguments491['default'] = NULL;
$arguments491['arguments'] = NULL;
$arguments491['extensionName'] = NULL;
$arguments491['languageKey'] = NULL;
$arguments491['alternativeLanguageKeys'] = NULL;
$arguments491['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.title';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output490 .= '</h3>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['key'] = NULL;
$arguments493['id'] = NULL;
$arguments493['default'] = NULL;
$arguments493['arguments'] = NULL;
$arguments493['extensionName'] = NULL;
$arguments493['languageKey'] = NULL;
$arguments493['alternativeLanguageKeys'] = NULL;
$arguments493['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.description';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext)]);

$output490 .= '</p>

	<table class="table table-striped table-hover table-condensed">
		<thead>
		<tr>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['key'] = NULL;
$arguments495['id'] = NULL;
$arguments495['default'] = NULL;
$arguments495['arguments'] = NULL;
$arguments495['extensionName'] = NULL;
$arguments495['languageKey'] = NULL;
$arguments495['alternativeLanguageKeys'] = NULL;
$arguments495['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext)]);

$output490 .= '</th>
			<th>&nbsp;</th>
		</tr>
		</thead>
		<tbody>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
			<tr>
				<td>	<code>';
$array501 = array (
);
$output500 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier', $array501)]);

$output500 .= '</code></td>
				<td class="col-control nowrap">
					<div class="btn-group">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments514 = array();
$arguments514['identifier'] = NULL;
$arguments514['size'] = 'small';
$arguments514['overlay'] = NULL;
$arguments514['state'] = 'default';
$arguments514['alternativeMarkupIdentifier'] = NULL;
$arguments514['identifier'] = 'actions-delete';

$output513 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output513 .= '
							';
return $output513;
};
$arguments502 = array();
$arguments502['additionalAttributes'] = NULL;
$arguments502['data'] = NULL;
$arguments502['route'] = NULL;
$arguments502['parameters'] = array (
);
$arguments502['referenceType'] = 'absolute';
$arguments502['name'] = NULL;
$arguments502['rel'] = NULL;
$arguments502['rev'] = NULL;
$arguments502['target'] = NULL;
$arguments502['class'] = NULL;
$arguments502['dir'] = NULL;
$arguments502['id'] = NULL;
$arguments502['lang'] = NULL;
$arguments502['style'] = NULL;
$arguments502['title'] = NULL;
$arguments502['accesskey'] = NULL;
$arguments502['tabindex'] = NULL;
$arguments502['onclick'] = NULL;
$arguments502['route'] = 'site_configuration';
// Rendering Array
$array504 = array();
$array504['action'] = 'delete';
$array505 = array (
);$array504['site'] = $renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier', $array505);
$arguments502['parameters'] = $array504;
$arguments502['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['key'] = NULL;
$arguments506['id'] = NULL;
$arguments506['default'] = NULL;
$arguments506['arguments'] = NULL;
$arguments506['extensionName'] = NULL;
$arguments506['languageKey'] = NULL;
$arguments506['alternativeLanguageKeys'] = NULL;
$arguments506['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments502['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);
// Rendering Array
$array508 = array();
$array508['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['key'] = NULL;
$arguments509['id'] = NULL;
$arguments509['default'] = NULL;
$arguments509['arguments'] = NULL;
$arguments509['extensionName'] = NULL;
$arguments509['languageKey'] = NULL;
$arguments509['alternativeLanguageKeys'] = NULL;
$arguments509['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array508['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['key'] = NULL;
$arguments511['id'] = NULL;
$arguments511['default'] = NULL;
$arguments511['arguments'] = NULL;
$arguments511['extensionName'] = NULL;
$arguments511['languageKey'] = NULL;
$arguments511['alternativeLanguageKeys'] = NULL;
$arguments511['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array508['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);
$arguments502['data'] = $array508;

$output500 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext);

$output500 .= '
					</div>
				</td>
			</tr>
		';
return $output500;
};
$arguments497 = array();
$arguments497['each'] = NULL;
$arguments497['as'] = NULL;
$arguments497['key'] = NULL;
$arguments497['reverse'] = false;
$arguments497['iteration'] = NULL;
$array499 = array (
);$arguments497['each'] = $renderingContext->getVariableProvider()->getByPath('unassignedSites', $array499);
$arguments497['as'] = 'unassignedSite';

$output490 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output490 .= '
		</tbody>
	</table>
';
return $output490;
};
$arguments485 = array();
$arguments485['then'] = NULL;
$arguments485['else'] = NULL;
$arguments485['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array487 = array();
$array488 = array (
);$array487['0'] = $renderingContext->getVariableProvider()->getByPath('unassignedSites', $array488);

$expression489 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments485['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression489(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array487)
					),
					$renderingContext
				);
$arguments485['__thenClosure'] = $renderChildrenClosure486;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#