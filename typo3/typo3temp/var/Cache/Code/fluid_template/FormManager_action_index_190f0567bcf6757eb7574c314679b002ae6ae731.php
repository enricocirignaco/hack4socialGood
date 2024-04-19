<?php

class FormManager_action_index_190f0567bcf6757eb7574c314679b002ae6ae731 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'FormManager';
}
public function hasLayout() {
return TRUE;
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
));
}

/**
 * section MainContent
 */
public function section_186817d730a4234a5cb5db37d7099a3440fc5dea(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	<script type="text/javascript">
		require([\'';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array1)]);

$output0 .= '\', \'';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array2)]);

$output0 .= '\'], function (formManagerApp, viewModel) {
			var FORMMANAGER_APP = formManagerApp.getInstance(
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('formManagerAppInitialData', $array5);
};
$arguments3 = array();
$arguments3['value'] = NULL;
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$renderChildrenClosure4 = ($arguments3['value'] !== null) ? function() use ($arguments3) { return $arguments3['value']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= ',
				viewModel
			).run();
		});
	</script>
	<h1>';
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
$arguments6['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '</h1>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['key'] = NULL;
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$arguments347['languageKey'] = NULL;
$arguments347['alternativeLanguageKeys'] = NULL;
$arguments347['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext)]);

$output346 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['identifier'] = NULL;
$arguments349['size'] = 'small';
$arguments349['overlay'] = NULL;
$arguments349['state'] = 'default';
$arguments349['alternativeMarkupIdentifier'] = NULL;
$arguments349['identifier'] = 'actions-add';

$output346 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output346 .= '</a></th>
									<th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['key'] = NULL;
$arguments351['id'] = NULL;
$arguments351['default'] = NULL;
$arguments351['arguments'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['languageKey'] = NULL;
$arguments351['alternativeLanguageKeys'] = NULL;
$arguments351['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output346 .= '</th>
									<th class="col-control nowrap"></th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['key'] = NULL;
$arguments353['id'] = NULL;
$arguments353['default'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['languageKey'] = NULL;
$arguments353['alternativeLanguageKeys'] = NULL;
$arguments353['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext)]);

$output346 .= '</th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['key'] = NULL;
$arguments355['id'] = NULL;
$arguments355['default'] = NULL;
$arguments355['arguments'] = NULL;
$arguments355['extensionName'] = NULL;
$arguments355['languageKey'] = NULL;
$arguments355['alternativeLanguageKeys'] = NULL;
$arguments355['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext)]);

$output346 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
								<tr>
									<td class="col-icon nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$output414 = '';

$output414 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments415 = array();
$arguments415['key'] = NULL;
$arguments415['id'] = NULL;
$arguments415['default'] = NULL;
$arguments415['arguments'] = NULL;
$arguments415['extensionName'] = NULL;
$arguments415['languageKey'] = NULL;
$arguments415['alternativeLanguageKeys'] = NULL;
$arguments415['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output414 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext)]);

$output414 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['identifier'] = NULL;
$arguments417['size'] = 'small';
$arguments417['overlay'] = NULL;
$arguments417['state'] = 'default';
$arguments417['alternativeMarkupIdentifier'] = NULL;
$arguments417['identifier'] = 'overlay-missing';

$output414 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output414 .= '
												</span>
											';
return $output414;
};
$arguments412 = array();

$output411 .= '';

$output411 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['key'] = NULL;
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['languageKey'] = NULL;
$arguments425['alternativeLanguageKeys'] = NULL;
$arguments425['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext)]);

$output424 .= ' ';
$array427 = array (
);
$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array427)]);

$output424 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['identifier'] = NULL;
$arguments428['size'] = 'small';
$arguments428['overlay'] = NULL;
$arguments428['state'] = 'default';
$arguments428['alternativeMarkupIdentifier'] = NULL;
$arguments428['identifier'] = 'overlay-missing';

$output424 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output424 .= '
												</span>
											';
return $output424;
};
$arguments419 = array();
$arguments419['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array421 = array();
$array422 = array (
);$array421['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array422);

$expression423 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments419['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression423(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array421)
					),
					$renderingContext
				);

$output411 .= '';

$output411 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$output448 = '';

$output448 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments452 = array();
$arguments452['key'] = NULL;
$arguments452['id'] = NULL;
$arguments452['default'] = NULL;
$arguments452['arguments'] = NULL;
$arguments452['extensionName'] = NULL;
$arguments452['languageKey'] = NULL;
$arguments452['alternativeLanguageKeys'] = NULL;
$arguments452['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext)]);

$output451 .= ' ';
$array454 = array (
);
$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array454)]);

$output451 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['identifier'] = NULL;
$arguments455['size'] = 'small';
$arguments455['overlay'] = NULL;
$arguments455['state'] = 'default';
$arguments455['alternativeMarkupIdentifier'] = NULL;
$arguments455['identifier'] = 'overlay-missing';

$output451 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output451 .= '
														</span>
													';
return $output451;
};
$arguments449 = array();

$output448 .= '';

$output448 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
														<span title="id=';
$array460 = array (
);
$output459 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array460)]);

$output459 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments461 = array();
$arguments461['identifier'] = NULL;
$arguments461['size'] = 'small';
$arguments461['overlay'] = NULL;
$arguments461['state'] = 'default';
$arguments461['alternativeMarkupIdentifier'] = NULL;
$arguments461['identifier'] = 'content-form';

$output459 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output459 .= '
														</span>
													';
return $output459;
};
$arguments457 = array();
$arguments457['if'] = NULL;

$output448 .= '';

$output448 .= '
												';
return $output448;
};
$arguments433 = array();
$arguments433['then'] = NULL;
$arguments433['else'] = NULL;
$arguments433['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array445 = array();
$array446 = array (
);$array445['0'] = $renderingContext->getVariableProvider()->getByPath('form.deprecatedFileExtension', $array446);

$expression447 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments433['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression447(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array445)
					),
					$renderingContext
				);
$arguments433['__thenClosure'] = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['key'] = NULL;
$arguments436['id'] = NULL;
$arguments436['default'] = NULL;
$arguments436['arguments'] = NULL;
$arguments436['extensionName'] = NULL;
$arguments436['languageKey'] = NULL;
$arguments436['alternativeLanguageKeys'] = NULL;
$arguments436['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext)]);

$output435 .= ' ';
$array438 = array (
);
$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array438)]);

$output435 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['identifier'] = NULL;
$arguments439['size'] = 'small';
$arguments439['overlay'] = NULL;
$arguments439['state'] = 'default';
$arguments439['alternativeMarkupIdentifier'] = NULL;
$arguments439['identifier'] = 'overlay-missing';

$output435 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output435 .= '
														</span>
													';
return $output435;
};
$arguments433['__elseClosures'][] = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
														<span title="id=';
$array442 = array (
);
$output441 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array442)]);

$output441 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['identifier'] = NULL;
$arguments443['size'] = 'small';
$arguments443['overlay'] = NULL;
$arguments443['state'] = 'default';
$arguments443['alternativeMarkupIdentifier'] = NULL;
$arguments443['identifier'] = 'content-form';

$output441 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output441 .= '
														</span>
													';
return $output441;
};

$output432 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output432 .= '
											';
return $output432;
};
$arguments430 = array();
$arguments430['if'] = NULL;

$output411 .= '';

$output411 .= '
										';
return $output411;
};
$arguments361 = array();
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$arguments361['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array408 = array();
$array409 = array (
);$array408['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array409);

$expression410 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments361['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression410(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array408)
					),
					$renderingContext
				);
$arguments361['__thenClosure'] = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['key'] = NULL;
$arguments364['id'] = NULL;
$arguments364['default'] = NULL;
$arguments364['arguments'] = NULL;
$arguments364['extensionName'] = NULL;
$arguments364['languageKey'] = NULL;
$arguments364['alternativeLanguageKeys'] = NULL;
$arguments364['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output363 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['identifier'] = NULL;
$arguments366['size'] = 'small';
$arguments366['overlay'] = NULL;
$arguments366['state'] = 'default';
$arguments366['alternativeMarkupIdentifier'] = NULL;
$arguments366['identifier'] = 'overlay-missing';

$output363 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output363 .= '
												</span>
											';
return $output363;
};
$arguments361['__elseClosures'][] = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['key'] = NULL;
$arguments369['id'] = NULL;
$arguments369['default'] = NULL;
$arguments369['arguments'] = NULL;
$arguments369['extensionName'] = NULL;
$arguments369['languageKey'] = NULL;
$arguments369['alternativeLanguageKeys'] = NULL;
$arguments369['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext)]);

$output368 .= ' ';
$array371 = array (
);
$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array371)]);

$output368 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments372 = array();
$arguments372['identifier'] = NULL;
$arguments372['size'] = 'small';
$arguments372['overlay'] = NULL;
$arguments372['state'] = 'default';
$arguments372['alternativeMarkupIdentifier'] = NULL;
$arguments372['identifier'] = 'overlay-missing';

$output368 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output368 .= '
												</span>
											';
return $output368;
};
$arguments361['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array375);

$expression376 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression376(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array374)
					),
					$renderingContext
				);
};
$arguments361['__elseClosures'][] = function() use ($renderingContext, $self) {
$output377 = '';

$output377 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['key'] = NULL;
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$arguments397['languageKey'] = NULL;
$arguments397['alternativeLanguageKeys'] = NULL;
$arguments397['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output396 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext)]);

$output396 .= ' ';
$array399 = array (
);
$output396 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array399)]);

$output396 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['identifier'] = NULL;
$arguments400['size'] = 'small';
$arguments400['overlay'] = NULL;
$arguments400['state'] = 'default';
$arguments400['alternativeMarkupIdentifier'] = NULL;
$arguments400['identifier'] = 'overlay-missing';

$output396 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output396 .= '
														</span>
													';
return $output396;
};
$arguments394 = array();

$output393 .= '';

$output393 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
														<span title="id=';
$array405 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array405)]);

$output404 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['identifier'] = NULL;
$arguments406['size'] = 'small';
$arguments406['overlay'] = NULL;
$arguments406['state'] = 'default';
$arguments406['alternativeMarkupIdentifier'] = NULL;
$arguments406['identifier'] = 'content-form';

$output404 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output404 .= '
														</span>
													';
return $output404;
};
$arguments402 = array();
$arguments402['if'] = NULL;

$output393 .= '';

$output393 .= '
												';
return $output393;
};
$arguments378 = array();
$arguments378['then'] = NULL;
$arguments378['else'] = NULL;
$arguments378['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array390 = array();
$array391 = array (
);$array390['0'] = $renderingContext->getVariableProvider()->getByPath('form.deprecatedFileExtension', $array391);

$expression392 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments378['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression392(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array390)
					),
					$renderingContext
				);
$arguments378['__thenClosure'] = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments381 = array();
$arguments381['key'] = NULL;
$arguments381['id'] = NULL;
$arguments381['default'] = NULL;
$arguments381['arguments'] = NULL;
$arguments381['extensionName'] = NULL;
$arguments381['languageKey'] = NULL;
$arguments381['alternativeLanguageKeys'] = NULL;
$arguments381['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext)]);

$output380 .= ' ';
$array383 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array383)]);

$output380 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['identifier'] = NULL;
$arguments384['size'] = 'small';
$arguments384['overlay'] = NULL;
$arguments384['state'] = 'default';
$arguments384['alternativeMarkupIdentifier'] = NULL;
$arguments384['identifier'] = 'overlay-missing';

$output380 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output380 .= '
														</span>
													';
return $output380;
};
$arguments378['__elseClosures'][] = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
														<span title="id=';
$array387 = array (
);
$output386 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array387)]);

$output386 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['identifier'] = NULL;
$arguments388['size'] = 'small';
$arguments388['overlay'] = NULL;
$arguments388['state'] = 'default';
$arguments388['alternativeMarkupIdentifier'] = NULL;
$arguments388['identifier'] = 'content-form';

$output386 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output386 .= '
														</span>
													';
return $output386;
};

$output377 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output377 .= '
											';
return $output377;
};

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output360 .= '
									</td>
									<td class="col-title col-responsive nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
													<div title="';
$array485 = array (
);
$output484 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array485)]);

$output484 .= '">';
$array486 = array (
);
$output484 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array486)]);

$output484 .= '</div>
												';
return $output484;
};
$arguments482 = array();

$output481 .= '';

$output481 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$array497 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array497)]);
};
$arguments490 = array();
$arguments490['additionalAttributes'] = NULL;
$arguments490['data'] = NULL;
$arguments490['class'] = NULL;
$arguments490['dir'] = NULL;
$arguments490['id'] = NULL;
$arguments490['lang'] = NULL;
$arguments490['style'] = NULL;
$arguments490['title'] = NULL;
$arguments490['accesskey'] = NULL;
$arguments490['tabindex'] = NULL;
$arguments490['onclick'] = NULL;
$arguments490['name'] = NULL;
$arguments490['rel'] = NULL;
$arguments490['rev'] = NULL;
$arguments490['target'] = NULL;
$arguments490['action'] = NULL;
$arguments490['controller'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['pluginName'] = NULL;
$arguments490['pageUid'] = NULL;
$arguments490['pageType'] = NULL;
$arguments490['noCache'] = NULL;
$arguments490['noCacheHash'] = NULL;
$arguments490['section'] = NULL;
$arguments490['format'] = NULL;
$arguments490['linkAccessRestrictedPages'] = NULL;
$arguments490['additionalParams'] = NULL;
$arguments490['absolute'] = NULL;
$arguments490['addQueryString'] = NULL;
$arguments490['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments490['addQueryStringMethod'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['controller'] = 'FormEditor';
$arguments490['action'] = 'index';
// Rendering Array
$array492 = array();
$array493 = array (
);$array492['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array493);
$arguments490['arguments'] = $array492;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments494 = array();
$arguments494['key'] = NULL;
$arguments494['id'] = NULL;
$arguments494['default'] = NULL;
$arguments494['arguments'] = NULL;
$arguments494['extensionName'] = NULL;
$arguments494['languageKey'] = NULL;
$arguments494['alternativeLanguageKeys'] = NULL;
$arguments494['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments490['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);
// Rendering Array
$array496 = array();
$array496['toggle'] = 'tooltip';
$array496['placement'] = 'right';
$arguments490['data'] = $array496;

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
												';
return $output489;
};
$arguments487 = array();
$arguments487['if'] = NULL;

$output481 .= '';

$output481 .= '
										';
return $output481;
};
$arguments463 = array();
$arguments463['then'] = NULL;
$arguments463['else'] = NULL;
$arguments463['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array477 = array();
$array478 = array (
);$array477['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array478);
$array477['1'] = ' || ';
$array479 = array (
);$array477['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array479);

$expression480 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments463['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression480(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array477)
					),
					$renderingContext
				);
$arguments463['__thenClosure'] = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '
													<div title="';
$array466 = array (
);
$output465 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array466)]);

$output465 .= '">';
$array467 = array (
);
$output465 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array467)]);

$output465 .= '</div>
												';
return $output465;
};
$arguments463['__elseClosures'][] = function() use ($renderingContext, $self) {
$output468 = '';

$output468 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
$array476 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array476)]);
};
$arguments469 = array();
$arguments469['additionalAttributes'] = NULL;
$arguments469['data'] = NULL;
$arguments469['class'] = NULL;
$arguments469['dir'] = NULL;
$arguments469['id'] = NULL;
$arguments469['lang'] = NULL;
$arguments469['style'] = NULL;
$arguments469['title'] = NULL;
$arguments469['accesskey'] = NULL;
$arguments469['tabindex'] = NULL;
$arguments469['onclick'] = NULL;
$arguments469['name'] = NULL;
$arguments469['rel'] = NULL;
$arguments469['rev'] = NULL;
$arguments469['target'] = NULL;
$arguments469['action'] = NULL;
$arguments469['controller'] = NULL;
$arguments469['extensionName'] = NULL;
$arguments469['pluginName'] = NULL;
$arguments469['pageUid'] = NULL;
$arguments469['pageType'] = NULL;
$arguments469['noCache'] = NULL;
$arguments469['noCacheHash'] = NULL;
$arguments469['section'] = NULL;
$arguments469['format'] = NULL;
$arguments469['linkAccessRestrictedPages'] = NULL;
$arguments469['additionalParams'] = NULL;
$arguments469['absolute'] = NULL;
$arguments469['addQueryString'] = NULL;
$arguments469['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments469['addQueryStringMethod'] = NULL;
$arguments469['arguments'] = NULL;
$arguments469['controller'] = 'FormEditor';
$arguments469['action'] = 'index';
// Rendering Array
$array471 = array();
$array472 = array (
);$array471['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array472);
$arguments469['arguments'] = $array471;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments473 = array();
$arguments473['key'] = NULL;
$arguments473['id'] = NULL;
$arguments473['default'] = NULL;
$arguments473['arguments'] = NULL;
$arguments473['extensionName'] = NULL;
$arguments473['languageKey'] = NULL;
$arguments473['alternativeLanguageKeys'] = NULL;
$arguments473['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments469['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);
// Rendering Array
$array475 = array();
$array475['toggle'] = 'tooltip';
$array475['placement'] = 'right';
$arguments469['data'] = $array475;

$output468 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext);

$output468 .= '
												';
return $output468;
};

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output360 .= '
									</td>
									<td class="col-control nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
$output521 = '';

$output521 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['key'] = NULL;
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$arguments522['languageKey'] = NULL;
$arguments522['alternativeLanguageKeys'] = NULL;
$arguments522['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output521 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext)]);

$output521 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['identifier'] = NULL;
$arguments524['size'] = 'small';
$arguments524['overlay'] = NULL;
$arguments524['state'] = 'default';
$arguments524['alternativeMarkupIdentifier'] = NULL;
$arguments524['identifier'] = 'actions-open';

$output521 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output521 .= '</button>
												';
return $output521;
};
$arguments519 = array();

$output518 .= '';

$output518 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments535 = array();
$arguments535['identifier'] = NULL;
$arguments535['size'] = 'small';
$arguments535['overlay'] = NULL;
$arguments535['state'] = 'default';
$arguments535['alternativeMarkupIdentifier'] = NULL;
$arguments535['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext);
};
$arguments529 = array();
$arguments529['additionalAttributes'] = NULL;
$arguments529['data'] = NULL;
$arguments529['class'] = NULL;
$arguments529['dir'] = NULL;
$arguments529['id'] = NULL;
$arguments529['lang'] = NULL;
$arguments529['style'] = NULL;
$arguments529['title'] = NULL;
$arguments529['accesskey'] = NULL;
$arguments529['tabindex'] = NULL;
$arguments529['onclick'] = NULL;
$arguments529['name'] = NULL;
$arguments529['rel'] = NULL;
$arguments529['rev'] = NULL;
$arguments529['target'] = NULL;
$arguments529['action'] = NULL;
$arguments529['controller'] = NULL;
$arguments529['extensionName'] = NULL;
$arguments529['pluginName'] = NULL;
$arguments529['pageUid'] = NULL;
$arguments529['pageType'] = NULL;
$arguments529['noCache'] = NULL;
$arguments529['noCacheHash'] = NULL;
$arguments529['section'] = NULL;
$arguments529['format'] = NULL;
$arguments529['linkAccessRestrictedPages'] = NULL;
$arguments529['additionalParams'] = NULL;
$arguments529['absolute'] = NULL;
$arguments529['addQueryString'] = NULL;
$arguments529['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments529['addQueryStringMethod'] = NULL;
$arguments529['arguments'] = NULL;
$arguments529['controller'] = 'FormEditor';
$arguments529['action'] = 'index';
// Rendering Array
$array531 = array();
$array532 = array (
);$array531['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array532);
$arguments529['arguments'] = $array531;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments533 = array();
$arguments533['key'] = NULL;
$arguments533['id'] = NULL;
$arguments533['default'] = NULL;
$arguments533['arguments'] = NULL;
$arguments533['extensionName'] = NULL;
$arguments533['languageKey'] = NULL;
$arguments533['alternativeLanguageKeys'] = NULL;
$arguments533['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments529['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);
$arguments529['class'] = 'btn btn-default form-record-open';

$output528 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output528 .= '
												';
return $output528;
};
$arguments526 = array();
$arguments526['if'] = NULL;

$output518 .= '';

$output518 .= '
											';
return $output518;
};
$arguments498 = array();
$arguments498['then'] = NULL;
$arguments498['else'] = NULL;
$arguments498['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array515);
$array514['1'] = ' || ';
$array516 = array (
);$array514['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array516);

$expression517 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments498['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression517(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array514)
					),
					$renderingContext
				);
$arguments498['__thenClosure'] = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['key'] = NULL;
$arguments501['id'] = NULL;
$arguments501['default'] = NULL;
$arguments501['arguments'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['languageKey'] = NULL;
$arguments501['alternativeLanguageKeys'] = NULL;
$arguments501['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output500 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext)]);

$output500 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['identifier'] = NULL;
$arguments503['size'] = 'small';
$arguments503['overlay'] = NULL;
$arguments503['state'] = 'default';
$arguments503['alternativeMarkupIdentifier'] = NULL;
$arguments503['identifier'] = 'actions-open';

$output500 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output500 .= '</button>
												';
return $output500;
};
$arguments498['__elseClosures'][] = function() use ($renderingContext, $self) {
$output505 = '';

$output505 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['identifier'] = NULL;
$arguments512['size'] = 'small';
$arguments512['overlay'] = NULL;
$arguments512['state'] = 'default';
$arguments512['alternativeMarkupIdentifier'] = NULL;
$arguments512['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);
};
$arguments506 = array();
$arguments506['additionalAttributes'] = NULL;
$arguments506['data'] = NULL;
$arguments506['class'] = NULL;
$arguments506['dir'] = NULL;
$arguments506['id'] = NULL;
$arguments506['lang'] = NULL;
$arguments506['style'] = NULL;
$arguments506['title'] = NULL;
$arguments506['accesskey'] = NULL;
$arguments506['tabindex'] = NULL;
$arguments506['onclick'] = NULL;
$arguments506['name'] = NULL;
$arguments506['rel'] = NULL;
$arguments506['rev'] = NULL;
$arguments506['target'] = NULL;
$arguments506['action'] = NULL;
$arguments506['controller'] = NULL;
$arguments506['extensionName'] = NULL;
$arguments506['pluginName'] = NULL;
$arguments506['pageUid'] = NULL;
$arguments506['pageType'] = NULL;
$arguments506['noCache'] = NULL;
$arguments506['noCacheHash'] = NULL;
$arguments506['section'] = NULL;
$arguments506['format'] = NULL;
$arguments506['linkAccessRestrictedPages'] = NULL;
$arguments506['additionalParams'] = NULL;
$arguments506['absolute'] = NULL;
$arguments506['addQueryString'] = NULL;
$arguments506['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments506['addQueryStringMethod'] = NULL;
$arguments506['arguments'] = NULL;
$arguments506['controller'] = 'FormEditor';
$arguments506['action'] = 'index';
// Rendering Array
$array508 = array();
$array509 = array (
);$array508['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array509);
$arguments506['arguments'] = $array508;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['key'] = NULL;
$arguments510['id'] = NULL;
$arguments510['default'] = NULL;
$arguments510['arguments'] = NULL;
$arguments510['extensionName'] = NULL;
$arguments510['languageKey'] = NULL;
$arguments510['alternativeLanguageKeys'] = NULL;
$arguments510['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments506['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);
$arguments506['class'] = 'btn btn-default form-record-open';

$output505 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output505 .= '
												';
return $output505;
};

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output360 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
$output590 = '';

$output590 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
$output593 = '';

$output593 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments594 = array();
$arguments594['key'] = NULL;
$arguments594['id'] = NULL;
$arguments594['default'] = NULL;
$arguments594['arguments'] = NULL;
$arguments594['extensionName'] = NULL;
$arguments594['languageKey'] = NULL;
$arguments594['alternativeLanguageKeys'] = NULL;
$arguments594['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext)]);

$output593 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments596 = array();
$arguments596['identifier'] = NULL;
$arguments596['size'] = 'small';
$arguments596['overlay'] = NULL;
$arguments596['state'] = 'default';
$arguments596['alternativeMarkupIdentifier'] = NULL;
$arguments596['identifier'] = 'actions-duplicate';

$output593 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output593 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['key'] = NULL;
$arguments598['id'] = NULL;
$arguments598['default'] = NULL;
$arguments598['arguments'] = NULL;
$arguments598['extensionName'] = NULL;
$arguments598['languageKey'] = NULL;
$arguments598['alternativeLanguageKeys'] = NULL;
$arguments598['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext)]);

$output593 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['identifier'] = NULL;
$arguments600['size'] = 'small';
$arguments600['overlay'] = NULL;
$arguments600['state'] = 'default';
$arguments600['alternativeMarkupIdentifier'] = NULL;
$arguments600['identifier'] = 'actions-edit-delete';

$output593 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);

$output593 .= '</button>
												';
return $output593;
};
$arguments591 = array();

$output590 .= '';

$output590 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
$output604 = '';

$output604 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array605 = array (
);
$output604 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array605)]);

$output604 .= '" data-form-name="';
$array606 = array (
);
$output604 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array606)]);

$output604 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments607 = array();
$arguments607['key'] = NULL;
$arguments607['id'] = NULL;
$arguments607['default'] = NULL;
$arguments607['arguments'] = NULL;
$arguments607['extensionName'] = NULL;
$arguments607['languageKey'] = NULL;
$arguments607['alternativeLanguageKeys'] = NULL;
$arguments607['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output604 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments607, $renderChildrenClosure608, $renderingContext)]);

$output604 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['identifier'] = NULL;
$arguments609['size'] = 'small';
$arguments609['overlay'] = NULL;
$arguments609['state'] = 'default';
$arguments609['alternativeMarkupIdentifier'] = NULL;
$arguments609['identifier'] = 'actions-duplicate';

$output604 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output604 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$output627 = '';

$output627 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$output630 = '';

$output630 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array631 = array (
);
$output630 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array631)]);

$output630 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments632 = array();
$arguments632['key'] = NULL;
$arguments632['id'] = NULL;
$arguments632['default'] = NULL;
$arguments632['arguments'] = NULL;
$arguments632['extensionName'] = NULL;
$arguments632['languageKey'] = NULL;
$arguments632['alternativeLanguageKeys'] = NULL;
$arguments632['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output630 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext)]);

$output630 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments634 = array();
$arguments634['identifier'] = NULL;
$arguments634['size'] = 'small';
$arguments634['overlay'] = NULL;
$arguments634['state'] = 'default';
$arguments634['alternativeMarkupIdentifier'] = NULL;
$arguments634['identifier'] = 'actions-edit-delete';

$output630 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext);

$output630 .= '</a>
														';
return $output630;
};
$arguments628 = array();

$output627 .= '';

$output627 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments639 = array();
$arguments639['key'] = NULL;
$arguments639['id'] = NULL;
$arguments639['default'] = NULL;
$arguments639['arguments'] = NULL;
$arguments639['extensionName'] = NULL;
$arguments639['languageKey'] = NULL;
$arguments639['alternativeLanguageKeys'] = NULL;
$arguments639['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext)]);

$output638 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments641 = array();
$arguments641['identifier'] = NULL;
$arguments641['size'] = 'small';
$arguments641['overlay'] = NULL;
$arguments641['state'] = 'default';
$arguments641['alternativeMarkupIdentifier'] = NULL;
$arguments641['identifier'] = 'actions-edit-delete';

$output638 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext);

$output638 .= '</button>
														';
return $output638;
};
$arguments636 = array();
$arguments636['if'] = NULL;

$output627 .= '';

$output627 .= '
													';
return $output627;
};
$arguments611 = array();
$arguments611['then'] = NULL;
$arguments611['else'] = NULL;
$arguments611['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array624 = array();
$array625 = array (
);$array624['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array625);

$expression626 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments611['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression626(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array624)
					),
					$renderingContext
				);
$arguments611['__thenClosure'] = function() use ($renderingContext, $self) {
$output613 = '';

$output613 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array614 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array614)]);

$output613 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['key'] = NULL;
$arguments615['id'] = NULL;
$arguments615['default'] = NULL;
$arguments615['arguments'] = NULL;
$arguments615['extensionName'] = NULL;
$arguments615['languageKey'] = NULL;
$arguments615['alternativeLanguageKeys'] = NULL;
$arguments615['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext)]);

$output613 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['identifier'] = NULL;
$arguments617['size'] = 'small';
$arguments617['overlay'] = NULL;
$arguments617['state'] = 'default';
$arguments617['alternativeMarkupIdentifier'] = NULL;
$arguments617['identifier'] = 'actions-edit-delete';

$output613 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output613 .= '</a>
														';
return $output613;
};
$arguments611['__elseClosures'][] = function() use ($renderingContext, $self) {
$output619 = '';

$output619 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments620 = array();
$arguments620['key'] = NULL;
$arguments620['id'] = NULL;
$arguments620['default'] = NULL;
$arguments620['arguments'] = NULL;
$arguments620['extensionName'] = NULL;
$arguments620['languageKey'] = NULL;
$arguments620['alternativeLanguageKeys'] = NULL;
$arguments620['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output619 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext)]);

$output619 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments622 = array();
$arguments622['identifier'] = NULL;
$arguments622['size'] = 'small';
$arguments622['overlay'] = NULL;
$arguments622['state'] = 'default';
$arguments622['alternativeMarkupIdentifier'] = NULL;
$arguments622['identifier'] = 'actions-edit-delete';

$output619 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);

$output619 .= '</button>
														';
return $output619;
};

$output604 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);

$output604 .= '
												';
return $output604;
};
$arguments602 = array();
$arguments602['if'] = NULL;

$output590 .= '';

$output590 .= '
											';
return $output590;
};
$arguments537 = array();
$arguments537['then'] = NULL;
$arguments537['else'] = NULL;
$arguments537['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array587 = array();
$array588 = array (
);$array587['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array588);

$expression589 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments537['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression589(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array587)
					),
					$renderingContext
				);
$arguments537['__thenClosure'] = function() use ($renderingContext, $self) {
$output539 = '';

$output539 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['key'] = NULL;
$arguments540['id'] = NULL;
$arguments540['default'] = NULL;
$arguments540['arguments'] = NULL;
$arguments540['extensionName'] = NULL;
$arguments540['languageKey'] = NULL;
$arguments540['alternativeLanguageKeys'] = NULL;
$arguments540['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext)]);

$output539 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['identifier'] = NULL;
$arguments542['size'] = 'small';
$arguments542['overlay'] = NULL;
$arguments542['state'] = 'default';
$arguments542['alternativeMarkupIdentifier'] = NULL;
$arguments542['identifier'] = 'actions-duplicate';

$output539 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output539 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['key'] = NULL;
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$arguments544['languageKey'] = NULL;
$arguments544['alternativeLanguageKeys'] = NULL;
$arguments544['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output539 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments546 = array();
$arguments546['identifier'] = NULL;
$arguments546['size'] = 'small';
$arguments546['overlay'] = NULL;
$arguments546['state'] = 'default';
$arguments546['alternativeMarkupIdentifier'] = NULL;
$arguments546['identifier'] = 'actions-edit-delete';

$output539 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext);

$output539 .= '</button>
												';
return $output539;
};
$arguments537['__elseClosures'][] = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array549 = array (
);
$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array549)]);

$output548 .= '" data-form-name="';
$array550 = array (
);
$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array550)]);

$output548 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments551 = array();
$arguments551['key'] = NULL;
$arguments551['id'] = NULL;
$arguments551['default'] = NULL;
$arguments551['arguments'] = NULL;
$arguments551['extensionName'] = NULL;
$arguments551['languageKey'] = NULL;
$arguments551['alternativeLanguageKeys'] = NULL;
$arguments551['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext)]);

$output548 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['identifier'] = NULL;
$arguments553['size'] = 'small';
$arguments553['overlay'] = NULL;
$arguments553['state'] = 'default';
$arguments553['alternativeMarkupIdentifier'] = NULL;
$arguments553['identifier'] = 'actions-duplicate';

$output548 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output548 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$output571 = '';

$output571 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array575 = array (
);
$output574 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array575)]);

$output574 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments576 = array();
$arguments576['key'] = NULL;
$arguments576['id'] = NULL;
$arguments576['default'] = NULL;
$arguments576['arguments'] = NULL;
$arguments576['extensionName'] = NULL;
$arguments576['languageKey'] = NULL;
$arguments576['alternativeLanguageKeys'] = NULL;
$arguments576['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output574 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext)]);

$output574 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['identifier'] = NULL;
$arguments578['size'] = 'small';
$arguments578['overlay'] = NULL;
$arguments578['state'] = 'default';
$arguments578['alternativeMarkupIdentifier'] = NULL;
$arguments578['identifier'] = 'actions-edit-delete';

$output574 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output574 .= '</a>
														';
return $output574;
};
$arguments572 = array();

$output571 .= '';

$output571 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$output582 = '';

$output582 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments583 = array();
$arguments583['key'] = NULL;
$arguments583['id'] = NULL;
$arguments583['default'] = NULL;
$arguments583['arguments'] = NULL;
$arguments583['extensionName'] = NULL;
$arguments583['languageKey'] = NULL;
$arguments583['alternativeLanguageKeys'] = NULL;
$arguments583['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output582 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext)]);

$output582 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments585 = array();
$arguments585['identifier'] = NULL;
$arguments585['size'] = 'small';
$arguments585['overlay'] = NULL;
$arguments585['state'] = 'default';
$arguments585['alternativeMarkupIdentifier'] = NULL;
$arguments585['identifier'] = 'actions-edit-delete';

$output582 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext);

$output582 .= '</button>
														';
return $output582;
};
$arguments580 = array();
$arguments580['if'] = NULL;

$output571 .= '';

$output571 .= '
													';
return $output571;
};
$arguments555 = array();
$arguments555['then'] = NULL;
$arguments555['else'] = NULL;
$arguments555['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array568 = array();
$array569 = array (
);$array568['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array569);

$expression570 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments555['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression570(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array568)
					),
					$renderingContext
				);
$arguments555['__thenClosure'] = function() use ($renderingContext, $self) {
$output557 = '';

$output557 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array558 = array (
);
$output557 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array558)]);

$output557 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments559 = array();
$arguments559['key'] = NULL;
$arguments559['id'] = NULL;
$arguments559['default'] = NULL;
$arguments559['arguments'] = NULL;
$arguments559['extensionName'] = NULL;
$arguments559['languageKey'] = NULL;
$arguments559['alternativeLanguageKeys'] = NULL;
$arguments559['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output557 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext)]);

$output557 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments561 = array();
$arguments561['identifier'] = NULL;
$arguments561['size'] = 'small';
$arguments561['overlay'] = NULL;
$arguments561['state'] = 'default';
$arguments561['alternativeMarkupIdentifier'] = NULL;
$arguments561['identifier'] = 'actions-edit-delete';

$output557 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);

$output557 .= '</a>
														';
return $output557;
};
$arguments555['__elseClosures'][] = function() use ($renderingContext, $self) {
$output563 = '';

$output563 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments564 = array();
$arguments564['key'] = NULL;
$arguments564['id'] = NULL;
$arguments564['default'] = NULL;
$arguments564['arguments'] = NULL;
$arguments564['extensionName'] = NULL;
$arguments564['languageKey'] = NULL;
$arguments564['alternativeLanguageKeys'] = NULL;
$arguments564['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output563 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext)]);

$output563 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['identifier'] = NULL;
$arguments566['size'] = 'small';
$arguments566['overlay'] = NULL;
$arguments566['state'] = 'default';
$arguments566['alternativeMarkupIdentifier'] = NULL;
$arguments566['identifier'] = 'actions-edit-delete';

$output563 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output563 .= '</button>
														';
return $output563;
};

$output548 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output548 .= '
												';
return $output548;
};

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext);

$output360 .= '
										</div>
									</td>
									<td class="nowrap">';
$array643 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array643)]);

$output360 .= '</td>
									<td class="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure645 = function() use ($renderingContext, $self) {
$output655 = '';

$output655 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure657 = function() use ($renderingContext, $self) {
$output658 = '';

$output658 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array659 = array (
);
$output658 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array659)]);

$output658 .= '" data-form-name="';
$array660 = array (
);
$output658 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array660)]);

$output658 .= '">';
$array661 = array (
);
$output658 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array661)]);

$output658 .= '</a>
											';
return $output658;
};
$arguments656 = array();

$output655 .= '';

$output655 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$output664 = '';

$output664 .= '
												';
$array665 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array665)]);

$output664 .= '
											';
return $output664;
};
$arguments662 = array();
$arguments662['if'] = NULL;

$output655 .= '';

$output655 .= '
										';
return $output655;
};
$arguments644 = array();
$arguments644['then'] = NULL;
$arguments644['else'] = NULL;
$arguments644['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array652 = array();
$array653 = array (
);$array652['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array653);

$expression654 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments644['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression654(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array652)
					),
					$renderingContext
				);
$arguments644['__thenClosure'] = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array647 = array (
);
$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array647)]);

$output646 .= '" data-form-name="';
$array648 = array (
);
$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array648)]);

$output646 .= '">';
$array649 = array (
);
$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array649)]);

$output646 .= '</a>
											';
return $output646;
};
$arguments644['__elseClosures'][] = function() use ($renderingContext, $self) {
$output650 = '';

$output650 .= '
												';
$array651 = array (
);
$output650 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array651)]);

$output650 .= '
											';
return $output650;
};

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments644, $renderChildrenClosure645, $renderingContext);

$output360 .= '
									</td>
								</tr>
							';
return $output360;
};
$arguments357 = array();
$arguments357['each'] = NULL;
$arguments357['as'] = NULL;
$arguments357['key'] = NULL;
$arguments357['reverse'] = false;
$arguments357['iteration'] = NULL;
$array359 = array (
);$arguments357['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array359);
$arguments357['as'] = 'form';

$output346 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output346 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output346;
};
$arguments344 = array();

$output343 .= '';

$output343 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
$output668 = '';

$output668 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
$output673 = '';

$output673 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments674 = array();
$arguments674['key'] = NULL;
$arguments674['id'] = NULL;
$arguments674['default'] = NULL;
$arguments674['arguments'] = NULL;
$arguments674['extensionName'] = NULL;
$arguments674['languageKey'] = NULL;
$arguments674['alternativeLanguageKeys'] = NULL;
$arguments674['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message';

$output673 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext)]);

$output673 .= '</p>
			<a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments676 = array();
$arguments676['key'] = NULL;
$arguments676['id'] = NULL;
$arguments676['default'] = NULL;
$arguments676['arguments'] = NULL;
$arguments676['extensionName'] = NULL;
$arguments676['languageKey'] = NULL;
$arguments676['alternativeLanguageKeys'] = NULL;
$arguments676['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output673 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext)]);

$output673 .= '</a>
		';
return $output673;
};
$arguments669 = array();
$arguments669['message'] = NULL;
$arguments669['title'] = NULL;
$arguments669['state'] = -2;
$arguments669['iconName'] = NULL;
$arguments669['disableIcon'] = false;
$arguments669['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['key'] = NULL;
$arguments671['id'] = NULL;
$arguments671['default'] = NULL;
$arguments671['arguments'] = NULL;
$arguments671['extensionName'] = NULL;
$arguments671['languageKey'] = NULL;
$arguments671['alternativeLanguageKeys'] = NULL;
$arguments671['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title';
$arguments669['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);
$renderChildrenClosure670 = ($arguments669['message'] !== null) ? function() use ($arguments669) { return $arguments669['message']; } : $renderChildrenClosure670;
$output668 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext);

$output668 .= '
	';
return $output668;
};
$arguments666 = array();
$arguments666['if'] = NULL;

$output343 .= '';

$output343 .= '
';
return $output343;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['0'] = $renderingContext->getVariableProvider()->getByPath('forms', $array341);

$expression342 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression342(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array340)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['identifier'] = NULL;
$arguments13['size'] = 'small';
$arguments13['overlay'] = NULL;
$arguments13['state'] = 'default';
$arguments13['alternativeMarkupIdentifier'] = NULL;
$arguments13['identifier'] = 'actions-add';

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '</a></th>
									<th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output10 .= '</th>
									<th class="col-control nowrap"></th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output10 .= '</th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output10 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
								<tr>
									<td class="col-icon nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['languageKey'] = NULL;
$arguments79['alternativeLanguageKeys'] = NULL;
$arguments79['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output78 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['identifier'] = NULL;
$arguments81['size'] = 'small';
$arguments81['overlay'] = NULL;
$arguments81['state'] = 'default';
$arguments81['alternativeMarkupIdentifier'] = NULL;
$arguments81['identifier'] = 'overlay-missing';

$output78 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output78 .= '
												</span>
											';
return $output78;
};
$arguments76 = array();

$output75 .= '';

$output75 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$arguments89['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output88 .= ' ';
$array91 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array91)]);

$output88 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['identifier'] = NULL;
$arguments92['size'] = 'small';
$arguments92['overlay'] = NULL;
$arguments92['state'] = 'default';
$arguments92['alternativeMarkupIdentifier'] = NULL;
$arguments92['identifier'] = 'overlay-missing';

$output88 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output88 .= '
												</span>
											';
return $output88;
};
$arguments83 = array();
$arguments83['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array86);

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments83['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);

$output75 .= '';

$output75 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output115 .= ' ';
$array118 = array (
);
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array118)]);

$output115 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['identifier'] = NULL;
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$arguments119['identifier'] = 'overlay-missing';

$output115 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output115 .= '
														</span>
													';
return $output115;
};
$arguments113 = array();

$output112 .= '';

$output112 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
														<span title="id=';
$array124 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array124)]);

$output123 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['identifier'] = NULL;
$arguments125['size'] = 'small';
$arguments125['overlay'] = NULL;
$arguments125['state'] = 'default';
$arguments125['alternativeMarkupIdentifier'] = NULL;
$arguments125['identifier'] = 'content-form';

$output123 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output123 .= '
														</span>
													';
return $output123;
};
$arguments121 = array();
$arguments121['if'] = NULL;

$output112 .= '';

$output112 .= '
												';
return $output112;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('form.deprecatedFileExtension', $array110);

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['languageKey'] = NULL;
$arguments100['alternativeLanguageKeys'] = NULL;
$arguments100['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= ' ';
$array102 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array102)]);

$output99 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['identifier'] = NULL;
$arguments103['size'] = 'small';
$arguments103['overlay'] = NULL;
$arguments103['state'] = 'default';
$arguments103['alternativeMarkupIdentifier'] = NULL;
$arguments103['identifier'] = 'overlay-missing';

$output99 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output99 .= '
														</span>
													';
return $output99;
};
$arguments97['__elseClosures'][] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
														<span title="id=';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array106)]);

$output105 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['identifier'] = NULL;
$arguments107['size'] = 'small';
$arguments107['overlay'] = NULL;
$arguments107['state'] = 'default';
$arguments107['alternativeMarkupIdentifier'] = NULL;
$arguments107['identifier'] = 'content-form';

$output105 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output105 .= '
														</span>
													';
return $output105;
};

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
											';
return $output96;
};
$arguments94 = array();
$arguments94['if'] = NULL;

$output75 .= '';

$output75 .= '
										';
return $output75;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['identifier'] = NULL;
$arguments30['size'] = 'small';
$arguments30['overlay'] = NULL;
$arguments30['state'] = 'default';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['identifier'] = 'overlay-missing';

$output27 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '
												</span>
											';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['languageKey'] = NULL;
$arguments33['alternativeLanguageKeys'] = NULL;
$arguments33['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= ' ';
$array35 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array35)]);

$output32 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['identifier'] = NULL;
$arguments36['size'] = 'small';
$arguments36['overlay'] = NULL;
$arguments36['state'] = 'default';
$arguments36['alternativeMarkupIdentifier'] = NULL;
$arguments36['identifier'] = 'overlay-missing';

$output32 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output32 .= '
												</span>
											';
return $output32;
};
$arguments25['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array39);

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['languageKey'] = NULL;
$arguments61['alternativeLanguageKeys'] = NULL;
$arguments61['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= ' ';
$array63 = array (
);
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array63)]);

$output60 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['identifier'] = NULL;
$arguments64['size'] = 'small';
$arguments64['overlay'] = NULL;
$arguments64['state'] = 'default';
$arguments64['alternativeMarkupIdentifier'] = NULL;
$arguments64['identifier'] = 'overlay-missing';

$output60 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output60 .= '
														</span>
													';
return $output60;
};
$arguments58 = array();

$output57 .= '';

$output57 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
														<span title="id=';
$array69 = array (
);
$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array69)]);

$output68 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['identifier'] = NULL;
$arguments70['size'] = 'small';
$arguments70['overlay'] = NULL;
$arguments70['state'] = 'default';
$arguments70['alternativeMarkupIdentifier'] = NULL;
$arguments70['identifier'] = 'content-form';

$output68 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output68 .= '
														</span>
													';
return $output68;
};
$arguments66 = array();
$arguments66['if'] = NULL;

$output57 .= '';

$output57 .= '
												';
return $output57;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('form.deprecatedFileExtension', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['key'] = NULL;
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['languageKey'] = NULL;
$arguments45['alternativeLanguageKeys'] = NULL;
$arguments45['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= ' ';
$array47 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array47)]);

$output44 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['identifier'] = NULL;
$arguments48['size'] = 'small';
$arguments48['overlay'] = NULL;
$arguments48['state'] = 'default';
$arguments48['alternativeMarkupIdentifier'] = NULL;
$arguments48['identifier'] = 'overlay-missing';

$output44 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output44 .= '
														</span>
													';
return $output44;
};
$arguments42['__elseClosures'][] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
														<span title="id=';
$array51 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array51)]);

$output50 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['identifier'] = NULL;
$arguments52['size'] = 'small';
$arguments52['overlay'] = NULL;
$arguments52['state'] = 'default';
$arguments52['alternativeMarkupIdentifier'] = NULL;
$arguments52['identifier'] = 'content-form';

$output50 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output50 .= '
														</span>
													';
return $output50;
};

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
											';
return $output41;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
									</td>
									<td class="col-title col-responsive nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
													<div title="';
$array149 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array149)]);

$output148 .= '">';
$array150 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array150)]);

$output148 .= '</div>
												';
return $output148;
};
$arguments146 = array();

$output145 .= '';

$output145 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$array161 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array161)]);
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$arguments154['action'] = NULL;
$arguments154['controller'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['pluginName'] = NULL;
$arguments154['pageUid'] = NULL;
$arguments154['pageType'] = NULL;
$arguments154['noCache'] = NULL;
$arguments154['noCacheHash'] = NULL;
$arguments154['section'] = NULL;
$arguments154['format'] = NULL;
$arguments154['linkAccessRestrictedPages'] = NULL;
$arguments154['additionalParams'] = NULL;
$arguments154['absolute'] = NULL;
$arguments154['addQueryString'] = NULL;
$arguments154['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments154['addQueryStringMethod'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['controller'] = 'FormEditor';
$arguments154['action'] = 'index';
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array157);
$arguments154['arguments'] = $array156;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments154['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
// Rendering Array
$array160 = array();
$array160['toggle'] = 'tooltip';
$array160['placement'] = 'right';
$arguments154['data'] = $array160;

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
												';
return $output153;
};
$arguments151 = array();
$arguments151['if'] = NULL;

$output145 .= '';

$output145 .= '
										';
return $output145;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array142);
$array141['1'] = ' || ';
$array143 = array (
);$array141['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array143);

$expression144 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments127['__thenClosure'] = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
													<div title="';
$array130 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array130)]);

$output129 .= '">';
$array131 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array131)]);

$output129 .= '</div>
												';
return $output129;
};
$arguments127['__elseClosures'][] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$array140 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array140)]);
};
$arguments133 = array();
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$arguments133['action'] = NULL;
$arguments133['controller'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['pluginName'] = NULL;
$arguments133['pageUid'] = NULL;
$arguments133['pageType'] = NULL;
$arguments133['noCache'] = NULL;
$arguments133['noCacheHash'] = NULL;
$arguments133['section'] = NULL;
$arguments133['format'] = NULL;
$arguments133['linkAccessRestrictedPages'] = NULL;
$arguments133['additionalParams'] = NULL;
$arguments133['absolute'] = NULL;
$arguments133['addQueryString'] = NULL;
$arguments133['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments133['addQueryStringMethod'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['controller'] = 'FormEditor';
$arguments133['action'] = 'index';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array136);
$arguments133['arguments'] = $array135;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments133['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);
// Rendering Array
$array139 = array();
$array139['toggle'] = 'tooltip';
$array139['placement'] = 'right';
$arguments133['data'] = $array139;

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
												';
return $output132;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output24 .= '
									</td>
									<td class="col-control nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$arguments186['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output185 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['identifier'] = NULL;
$arguments188['size'] = 'small';
$arguments188['overlay'] = NULL;
$arguments188['state'] = 'default';
$arguments188['alternativeMarkupIdentifier'] = NULL;
$arguments188['identifier'] = 'actions-open';

$output185 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output185 .= '</button>
												';
return $output185;
};
$arguments183 = array();

$output182 .= '';

$output182 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['identifier'] = NULL;
$arguments199['size'] = 'small';
$arguments199['overlay'] = NULL;
$arguments199['state'] = 'default';
$arguments199['alternativeMarkupIdentifier'] = NULL;
$arguments199['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);
};
$arguments193 = array();
$arguments193['additionalAttributes'] = NULL;
$arguments193['data'] = NULL;
$arguments193['class'] = NULL;
$arguments193['dir'] = NULL;
$arguments193['id'] = NULL;
$arguments193['lang'] = NULL;
$arguments193['style'] = NULL;
$arguments193['title'] = NULL;
$arguments193['accesskey'] = NULL;
$arguments193['tabindex'] = NULL;
$arguments193['onclick'] = NULL;
$arguments193['name'] = NULL;
$arguments193['rel'] = NULL;
$arguments193['rev'] = NULL;
$arguments193['target'] = NULL;
$arguments193['action'] = NULL;
$arguments193['controller'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['pluginName'] = NULL;
$arguments193['pageUid'] = NULL;
$arguments193['pageType'] = NULL;
$arguments193['noCache'] = NULL;
$arguments193['noCacheHash'] = NULL;
$arguments193['section'] = NULL;
$arguments193['format'] = NULL;
$arguments193['linkAccessRestrictedPages'] = NULL;
$arguments193['additionalParams'] = NULL;
$arguments193['absolute'] = NULL;
$arguments193['addQueryString'] = NULL;
$arguments193['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments193['addQueryStringMethod'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['controller'] = 'FormEditor';
$arguments193['action'] = 'index';
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array196);
$arguments193['arguments'] = $array195;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['languageKey'] = NULL;
$arguments197['alternativeLanguageKeys'] = NULL;
$arguments197['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments193['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);
$arguments193['class'] = 'btn btn-default form-record-open';

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
												';
return $output192;
};
$arguments190 = array();
$arguments190['if'] = NULL;

$output182 .= '';

$output182 .= '
											';
return $output182;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array179);
$array178['1'] = ' || ';
$array180 = array (
);$array178['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array180);

$expression181 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['key'] = NULL;
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['languageKey'] = NULL;
$arguments165['alternativeLanguageKeys'] = NULL;
$arguments165['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext)]);

$output164 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['identifier'] = NULL;
$arguments167['size'] = 'small';
$arguments167['overlay'] = NULL;
$arguments167['state'] = 'default';
$arguments167['alternativeMarkupIdentifier'] = NULL;
$arguments167['identifier'] = 'actions-open';

$output164 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output164 .= '</button>
												';
return $output164;
};
$arguments162['__elseClosures'][] = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
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
$arguments176['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
};
$arguments170 = array();
$arguments170['additionalAttributes'] = NULL;
$arguments170['data'] = NULL;
$arguments170['class'] = NULL;
$arguments170['dir'] = NULL;
$arguments170['id'] = NULL;
$arguments170['lang'] = NULL;
$arguments170['style'] = NULL;
$arguments170['title'] = NULL;
$arguments170['accesskey'] = NULL;
$arguments170['tabindex'] = NULL;
$arguments170['onclick'] = NULL;
$arguments170['name'] = NULL;
$arguments170['rel'] = NULL;
$arguments170['rev'] = NULL;
$arguments170['target'] = NULL;
$arguments170['action'] = NULL;
$arguments170['controller'] = NULL;
$arguments170['extensionName'] = NULL;
$arguments170['pluginName'] = NULL;
$arguments170['pageUid'] = NULL;
$arguments170['pageType'] = NULL;
$arguments170['noCache'] = NULL;
$arguments170['noCacheHash'] = NULL;
$arguments170['section'] = NULL;
$arguments170['format'] = NULL;
$arguments170['linkAccessRestrictedPages'] = NULL;
$arguments170['additionalParams'] = NULL;
$arguments170['absolute'] = NULL;
$arguments170['addQueryString'] = NULL;
$arguments170['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments170['addQueryStringMethod'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['controller'] = 'FormEditor';
$arguments170['action'] = 'index';
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array173);
$arguments170['arguments'] = $array172;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$arguments174['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments170['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
$arguments170['class'] = 'btn btn-default form-record-open';

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '
												';
return $output169;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output24 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output257 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['identifier'] = NULL;
$arguments260['size'] = 'small';
$arguments260['overlay'] = NULL;
$arguments260['state'] = 'default';
$arguments260['alternativeMarkupIdentifier'] = NULL;
$arguments260['identifier'] = 'actions-duplicate';

$output257 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output257 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['key'] = NULL;
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$arguments262['languageKey'] = NULL;
$arguments262['alternativeLanguageKeys'] = NULL;
$arguments262['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext)]);

$output257 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['identifier'] = NULL;
$arguments264['size'] = 'small';
$arguments264['overlay'] = NULL;
$arguments264['state'] = 'default';
$arguments264['alternativeMarkupIdentifier'] = NULL;
$arguments264['identifier'] = 'actions-edit-delete';

$output257 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output257 .= '</button>
												';
return $output257;
};
$arguments255 = array();

$output254 .= '';

$output254 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array269 = array (
);
$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array269)]);

$output268 .= '" data-form-name="';
$array270 = array (
);
$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array270)]);

$output268 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['key'] = NULL;
$arguments271['id'] = NULL;
$arguments271['default'] = NULL;
$arguments271['arguments'] = NULL;
$arguments271['extensionName'] = NULL;
$arguments271['languageKey'] = NULL;
$arguments271['alternativeLanguageKeys'] = NULL;
$arguments271['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext)]);

$output268 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['identifier'] = NULL;
$arguments273['size'] = 'small';
$arguments273['overlay'] = NULL;
$arguments273['state'] = 'default';
$arguments273['alternativeMarkupIdentifier'] = NULL;
$arguments273['identifier'] = 'actions-duplicate';

$output268 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output268 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array295 = array (
);
$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array295)]);

$output294 .= '" title="';
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
$arguments296['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext)]);

$output294 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['identifier'] = NULL;
$arguments298['size'] = 'small';
$arguments298['overlay'] = NULL;
$arguments298['state'] = 'default';
$arguments298['alternativeMarkupIdentifier'] = NULL;
$arguments298['identifier'] = 'actions-edit-delete';

$output294 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output294 .= '</a>
														';
return $output294;
};
$arguments292 = array();

$output291 .= '';

$output291 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['key'] = NULL;
$arguments303['id'] = NULL;
$arguments303['default'] = NULL;
$arguments303['arguments'] = NULL;
$arguments303['extensionName'] = NULL;
$arguments303['languageKey'] = NULL;
$arguments303['alternativeLanguageKeys'] = NULL;
$arguments303['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext)]);

$output302 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['identifier'] = NULL;
$arguments305['size'] = 'small';
$arguments305['overlay'] = NULL;
$arguments305['state'] = 'default';
$arguments305['alternativeMarkupIdentifier'] = NULL;
$arguments305['identifier'] = 'actions-edit-delete';

$output302 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output302 .= '</button>
														';
return $output302;
};
$arguments300 = array();
$arguments300['if'] = NULL;

$output291 .= '';

$output291 .= '
													';
return $output291;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array289);

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$arguments275['__thenClosure'] = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array278 = array (
);
$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array278)]);

$output277 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['key'] = NULL;
$arguments279['id'] = NULL;
$arguments279['default'] = NULL;
$arguments279['arguments'] = NULL;
$arguments279['extensionName'] = NULL;
$arguments279['languageKey'] = NULL;
$arguments279['alternativeLanguageKeys'] = NULL;
$arguments279['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output277 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['identifier'] = NULL;
$arguments281['size'] = 'small';
$arguments281['overlay'] = NULL;
$arguments281['state'] = 'default';
$arguments281['alternativeMarkupIdentifier'] = NULL;
$arguments281['identifier'] = 'actions-edit-delete';

$output277 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output277 .= '</a>
														';
return $output277;
};
$arguments275['__elseClosures'][] = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['key'] = NULL;
$arguments284['id'] = NULL;
$arguments284['default'] = NULL;
$arguments284['arguments'] = NULL;
$arguments284['extensionName'] = NULL;
$arguments284['languageKey'] = NULL;
$arguments284['alternativeLanguageKeys'] = NULL;
$arguments284['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext)]);

$output283 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['identifier'] = NULL;
$arguments286['size'] = 'small';
$arguments286['overlay'] = NULL;
$arguments286['state'] = 'default';
$arguments286['alternativeMarkupIdentifier'] = NULL;
$arguments286['identifier'] = 'actions-edit-delete';

$output283 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output283 .= '</button>
														';
return $output283;
};

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output268 .= '
												';
return $output268;
};
$arguments266 = array();
$arguments266['if'] = NULL;

$output254 .= '';

$output254 .= '
											';
return $output254;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array252);

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['key'] = NULL;
$arguments204['id'] = NULL;
$arguments204['default'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['languageKey'] = NULL;
$arguments204['alternativeLanguageKeys'] = NULL;
$arguments204['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);

$output203 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['identifier'] = NULL;
$arguments206['size'] = 'small';
$arguments206['overlay'] = NULL;
$arguments206['state'] = 'default';
$arguments206['alternativeMarkupIdentifier'] = NULL;
$arguments206['identifier'] = 'actions-duplicate';

$output203 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output203 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['key'] = NULL;
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$arguments208['languageKey'] = NULL;
$arguments208['alternativeLanguageKeys'] = NULL;
$arguments208['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext)]);

$output203 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['identifier'] = NULL;
$arguments210['size'] = 'small';
$arguments210['overlay'] = NULL;
$arguments210['state'] = 'default';
$arguments210['alternativeMarkupIdentifier'] = NULL;
$arguments210['identifier'] = 'actions-edit-delete';

$output203 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output203 .= '</button>
												';
return $output203;
};
$arguments201['__elseClosures'][] = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array213 = array (
);
$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array213)]);

$output212 .= '" data-form-name="';
$array214 = array (
);
$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array214)]);

$output212 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['languageKey'] = NULL;
$arguments215['alternativeLanguageKeys'] = NULL;
$arguments215['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output212 .= '" class="btn btn-default form-record-duplicate">';
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
$arguments217['identifier'] = 'actions-duplicate';

$output212 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output212 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array239 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array239)]);

$output238 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['languageKey'] = NULL;
$arguments240['alternativeLanguageKeys'] = NULL;
$arguments240['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output238 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['identifier'] = NULL;
$arguments242['size'] = 'small';
$arguments242['overlay'] = NULL;
$arguments242['state'] = 'default';
$arguments242['alternativeMarkupIdentifier'] = NULL;
$arguments242['identifier'] = 'actions-edit-delete';

$output238 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output238 .= '</a>
														';
return $output238;
};
$arguments236 = array();

$output235 .= '';

$output235 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['key'] = NULL;
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$arguments247['languageKey'] = NULL;
$arguments247['alternativeLanguageKeys'] = NULL;
$arguments247['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output246 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['identifier'] = NULL;
$arguments249['size'] = 'small';
$arguments249['overlay'] = NULL;
$arguments249['state'] = 'default';
$arguments249['alternativeMarkupIdentifier'] = NULL;
$arguments249['identifier'] = 'actions-edit-delete';

$output246 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output246 .= '</button>
														';
return $output246;
};
$arguments244 = array();
$arguments244['if'] = NULL;

$output235 .= '';

$output235 .= '
													';
return $output235;
};
$arguments219 = array();
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array233);

$expression234 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$arguments219['__thenClosure'] = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array222 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array222)]);

$output221 .= '" title="';
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
$arguments223['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);

$output221 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['identifier'] = NULL;
$arguments225['size'] = 'small';
$arguments225['overlay'] = NULL;
$arguments225['state'] = 'default';
$arguments225['alternativeMarkupIdentifier'] = NULL;
$arguments225['identifier'] = 'actions-edit-delete';

$output221 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output221 .= '</a>
														';
return $output221;
};
$arguments219['__elseClosures'][] = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
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
$arguments228['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext)]);

$output227 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['identifier'] = NULL;
$arguments230['size'] = 'small';
$arguments230['overlay'] = NULL;
$arguments230['state'] = 'default';
$arguments230['alternativeMarkupIdentifier'] = NULL;
$arguments230['identifier'] = 'actions-edit-delete';

$output227 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output227 .= '</button>
														';
return $output227;
};

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output212 .= '
												';
return $output212;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output24 .= '
										</div>
									</td>
									<td class="nowrap">';
$array307 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array307)]);

$output24 .= '</td>
									<td class="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array323 = array (
);
$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array323)]);

$output322 .= '" data-form-name="';
$array324 = array (
);
$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array324)]);

$output322 .= '">';
$array325 = array (
);
$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array325)]);

$output322 .= '</a>
											';
return $output322;
};
$arguments320 = array();

$output319 .= '';

$output319 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
												';
$array329 = array (
);
$output328 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array329)]);

$output328 .= '
											';
return $output328;
};
$arguments326 = array();
$arguments326['if'] = NULL;

$output319 .= '';

$output319 .= '
										';
return $output319;
};
$arguments308 = array();
$arguments308['then'] = NULL;
$arguments308['else'] = NULL;
$arguments308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array316 = array();
$array317 = array (
);$array316['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array317);

$expression318 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression318(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array316)
					),
					$renderingContext
				);
$arguments308['__thenClosure'] = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array311 = array (
);
$output310 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array311)]);

$output310 .= '" data-form-name="';
$array312 = array (
);
$output310 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array312)]);

$output310 .= '">';
$array313 = array (
);
$output310 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array313)]);

$output310 .= '</a>
											';
return $output310;
};
$arguments308['__elseClosures'][] = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
												';
$array315 = array (
);
$output314 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array315)]);

$output314 .= '
											';
return $output314;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output24 .= '
									</td>
								</tr>
							';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array23);
$arguments21['as'] = 'form';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output10 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments336 = array();
$arguments336['key'] = NULL;
$arguments336['id'] = NULL;
$arguments336['default'] = NULL;
$arguments336['arguments'] = NULL;
$arguments336['extensionName'] = NULL;
$arguments336['languageKey'] = NULL;
$arguments336['alternativeLanguageKeys'] = NULL;
$arguments336['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message';

$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext)]);

$output335 .= '</p>
			<a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['key'] = NULL;
$arguments338['id'] = NULL;
$arguments338['default'] = NULL;
$arguments338['arguments'] = NULL;
$arguments338['extensionName'] = NULL;
$arguments338['languageKey'] = NULL;
$arguments338['alternativeLanguageKeys'] = NULL;
$arguments338['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext)]);

$output335 .= '</a>
		';
return $output335;
};
$arguments331 = array();
$arguments331['message'] = NULL;
$arguments331['title'] = NULL;
$arguments331['state'] = -2;
$arguments331['iconName'] = NULL;
$arguments331['disableIcon'] = false;
$arguments331['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments333 = array();
$arguments333['key'] = NULL;
$arguments333['id'] = NULL;
$arguments333['default'] = NULL;
$arguments333['arguments'] = NULL;
$arguments333['extensionName'] = NULL;
$arguments333['languageKey'] = NULL;
$arguments333['alternativeLanguageKeys'] = NULL;
$arguments333['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title';
$arguments331['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);
$renderChildrenClosure332 = ($arguments331['message'] !== null) ? function() use ($arguments331) { return $arguments331['message']; } : $renderChildrenClosure332;
$output330 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output330 .= '
	';
return $output330;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output678 = '';

$output678 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments679 = array();
$arguments679['name'] = NULL;
$arguments679['name'] = 'FormManager';

$output678 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output678 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
$output683 = '';

$output683 .= '

	<script type="text/javascript">
		require([\'';
$array684 = array (
);
$output683 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array684)]);

$output683 .= '\', \'';
$array685 = array (
);
$output683 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array685)]);

$output683 .= '\'], function (formManagerApp, viewModel) {
			var FORMMANAGER_APP = formManagerApp.getInstance(
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
$array688 = array (
);return $renderingContext->getVariableProvider()->getByPath('formManagerAppInitialData', $array688);
};
$arguments686 = array();
$arguments686['value'] = NULL;
$arguments686['keepQuotes'] = false;
$arguments686['encoding'] = NULL;
$renderChildrenClosure687 = ($arguments686['value'] !== null) ? function() use ($arguments686) { return $arguments686['value']; } : $renderChildrenClosure687;
$output683 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);

$output683 .= ',
				viewModel
			).run();
		});
	</script>
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments689 = array();
$arguments689['key'] = NULL;
$arguments689['id'] = NULL;
$arguments689['default'] = NULL;
$arguments689['arguments'] = NULL;
$arguments689['extensionName'] = NULL;
$arguments689['languageKey'] = NULL;
$arguments689['alternativeLanguageKeys'] = NULL;
$arguments689['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline';

$output683 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext)]);

$output683 .= '</h1>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
$output1026 = '';

$output1026 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1028 = function() use ($renderingContext, $self) {
$output1029 = '';

$output1029 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1031 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1030 = array();
$arguments1030['key'] = NULL;
$arguments1030['id'] = NULL;
$arguments1030['default'] = NULL;
$arguments1030['arguments'] = NULL;
$arguments1030['extensionName'] = NULL;
$arguments1030['languageKey'] = NULL;
$arguments1030['alternativeLanguageKeys'] = NULL;
$arguments1030['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output1029 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1030, $renderChildrenClosure1031, $renderingContext)]);

$output1029 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1033 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1032 = array();
$arguments1032['identifier'] = NULL;
$arguments1032['size'] = 'small';
$arguments1032['overlay'] = NULL;
$arguments1032['state'] = 'default';
$arguments1032['alternativeMarkupIdentifier'] = NULL;
$arguments1032['identifier'] = 'actions-add';

$output1029 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1032, $renderChildrenClosure1033, $renderingContext);

$output1029 .= '</a></th>
									<th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1035 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1034 = array();
$arguments1034['key'] = NULL;
$arguments1034['id'] = NULL;
$arguments1034['default'] = NULL;
$arguments1034['arguments'] = NULL;
$arguments1034['extensionName'] = NULL;
$arguments1034['languageKey'] = NULL;
$arguments1034['alternativeLanguageKeys'] = NULL;
$arguments1034['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output1029 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1034, $renderChildrenClosure1035, $renderingContext)]);

$output1029 .= '</th>
									<th class="col-control nowrap"></th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1036 = array();
$arguments1036['key'] = NULL;
$arguments1036['id'] = NULL;
$arguments1036['default'] = NULL;
$arguments1036['arguments'] = NULL;
$arguments1036['extensionName'] = NULL;
$arguments1036['languageKey'] = NULL;
$arguments1036['alternativeLanguageKeys'] = NULL;
$arguments1036['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output1029 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext)]);

$output1029 .= '</th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1039 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1038 = array();
$arguments1038['key'] = NULL;
$arguments1038['id'] = NULL;
$arguments1038['default'] = NULL;
$arguments1038['arguments'] = NULL;
$arguments1038['extensionName'] = NULL;
$arguments1038['languageKey'] = NULL;
$arguments1038['alternativeLanguageKeys'] = NULL;
$arguments1038['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output1029 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1038, $renderChildrenClosure1039, $renderingContext)]);

$output1029 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1041 = function() use ($renderingContext, $self) {
$output1043 = '';

$output1043 .= '
								<tr>
									<td class="col-icon nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1045 = function() use ($renderingContext, $self) {
$output1094 = '';

$output1094 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1096 = function() use ($renderingContext, $self) {
$output1097 = '';

$output1097 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1099 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1098 = array();
$arguments1098['key'] = NULL;
$arguments1098['id'] = NULL;
$arguments1098['default'] = NULL;
$arguments1098['arguments'] = NULL;
$arguments1098['extensionName'] = NULL;
$arguments1098['languageKey'] = NULL;
$arguments1098['alternativeLanguageKeys'] = NULL;
$arguments1098['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output1097 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1098, $renderChildrenClosure1099, $renderingContext)]);

$output1097 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1100 = array();
$arguments1100['identifier'] = NULL;
$arguments1100['size'] = 'small';
$arguments1100['overlay'] = NULL;
$arguments1100['state'] = 'default';
$arguments1100['alternativeMarkupIdentifier'] = NULL;
$arguments1100['identifier'] = 'overlay-missing';

$output1097 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1100, $renderChildrenClosure1101, $renderingContext);

$output1097 .= '
												</span>
											';
return $output1097;
};
$arguments1095 = array();

$output1094 .= '';

$output1094 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1103 = function() use ($renderingContext, $self) {
$output1107 = '';

$output1107 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1108 = array();
$arguments1108['key'] = NULL;
$arguments1108['id'] = NULL;
$arguments1108['default'] = NULL;
$arguments1108['arguments'] = NULL;
$arguments1108['extensionName'] = NULL;
$arguments1108['languageKey'] = NULL;
$arguments1108['alternativeLanguageKeys'] = NULL;
$arguments1108['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output1107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1108, $renderChildrenClosure1109, $renderingContext)]);

$output1107 .= ' ';
$array1110 = array (
);
$output1107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1110)]);

$output1107 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1111 = array();
$arguments1111['identifier'] = NULL;
$arguments1111['size'] = 'small';
$arguments1111['overlay'] = NULL;
$arguments1111['state'] = 'default';
$arguments1111['alternativeMarkupIdentifier'] = NULL;
$arguments1111['identifier'] = 'overlay-missing';

$output1107 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1111, $renderChildrenClosure1112, $renderingContext);

$output1107 .= '
												</span>
											';
return $output1107;
};
$arguments1102 = array();
$arguments1102['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array1104 = array();
$array1105 = array (
);$array1104['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array1105);

$expression1106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1102['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1104)
					),
					$renderingContext
				);

$output1094 .= '';

$output1094 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1114 = function() use ($renderingContext, $self) {
$output1115 = '';

$output1115 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1117 = function() use ($renderingContext, $self) {
$output1131 = '';

$output1131 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
$output1134 = '';

$output1134 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1135 = array();
$arguments1135['key'] = NULL;
$arguments1135['id'] = NULL;
$arguments1135['default'] = NULL;
$arguments1135['arguments'] = NULL;
$arguments1135['extensionName'] = NULL;
$arguments1135['languageKey'] = NULL;
$arguments1135['alternativeLanguageKeys'] = NULL;
$arguments1135['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output1134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1135, $renderChildrenClosure1136, $renderingContext)]);

$output1134 .= ' ';
$array1137 = array (
);
$output1134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1137)]);

$output1134 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1138 = array();
$arguments1138['identifier'] = NULL;
$arguments1138['size'] = 'small';
$arguments1138['overlay'] = NULL;
$arguments1138['state'] = 'default';
$arguments1138['alternativeMarkupIdentifier'] = NULL;
$arguments1138['identifier'] = 'overlay-missing';

$output1134 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1138, $renderChildrenClosure1139, $renderingContext);

$output1134 .= '
														</span>
													';
return $output1134;
};
$arguments1132 = array();

$output1131 .= '';

$output1131 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1141 = function() use ($renderingContext, $self) {
$output1142 = '';

$output1142 .= '
														<span title="id=';
$array1143 = array (
);
$output1142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1143)]);

$output1142 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1144 = array();
$arguments1144['identifier'] = NULL;
$arguments1144['size'] = 'small';
$arguments1144['overlay'] = NULL;
$arguments1144['state'] = 'default';
$arguments1144['alternativeMarkupIdentifier'] = NULL;
$arguments1144['identifier'] = 'content-form';

$output1142 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1144, $renderChildrenClosure1145, $renderingContext);

$output1142 .= '
														</span>
													';
return $output1142;
};
$arguments1140 = array();
$arguments1140['if'] = NULL;

$output1131 .= '';

$output1131 .= '
												';
return $output1131;
};
$arguments1116 = array();
$arguments1116['then'] = NULL;
$arguments1116['else'] = NULL;
$arguments1116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1128 = array();
$array1129 = array (
);$array1128['0'] = $renderingContext->getVariableProvider()->getByPath('form.deprecatedFileExtension', $array1129);

$expression1130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1128)
					),
					$renderingContext
				);
$arguments1116['__thenClosure'] = function() use ($renderingContext, $self) {
$output1118 = '';

$output1118 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1119 = array();
$arguments1119['key'] = NULL;
$arguments1119['id'] = NULL;
$arguments1119['default'] = NULL;
$arguments1119['arguments'] = NULL;
$arguments1119['extensionName'] = NULL;
$arguments1119['languageKey'] = NULL;
$arguments1119['alternativeLanguageKeys'] = NULL;
$arguments1119['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output1118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1119, $renderChildrenClosure1120, $renderingContext)]);

$output1118 .= ' ';
$array1121 = array (
);
$output1118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1121)]);

$output1118 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1122 = array();
$arguments1122['identifier'] = NULL;
$arguments1122['size'] = 'small';
$arguments1122['overlay'] = NULL;
$arguments1122['state'] = 'default';
$arguments1122['alternativeMarkupIdentifier'] = NULL;
$arguments1122['identifier'] = 'overlay-missing';

$output1118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1122, $renderChildrenClosure1123, $renderingContext);

$output1118 .= '
														</span>
													';
return $output1118;
};
$arguments1116['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1124 = '';

$output1124 .= '
														<span title="id=';
$array1125 = array (
);
$output1124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1125)]);

$output1124 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1126 = array();
$arguments1126['identifier'] = NULL;
$arguments1126['size'] = 'small';
$arguments1126['overlay'] = NULL;
$arguments1126['state'] = 'default';
$arguments1126['alternativeMarkupIdentifier'] = NULL;
$arguments1126['identifier'] = 'content-form';

$output1124 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1126, $renderChildrenClosure1127, $renderingContext);

$output1124 .= '
														</span>
													';
return $output1124;
};

$output1115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1116, $renderChildrenClosure1117, $renderingContext);

$output1115 .= '
											';
return $output1115;
};
$arguments1113 = array();
$arguments1113['if'] = NULL;

$output1094 .= '';

$output1094 .= '
										';
return $output1094;
};
$arguments1044 = array();
$arguments1044['then'] = NULL;
$arguments1044['else'] = NULL;
$arguments1044['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1091 = array();
$array1092 = array (
);$array1091['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array1092);

$expression1093 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1044['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1093(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1091)
					),
					$renderingContext
				);
$arguments1044['__thenClosure'] = function() use ($renderingContext, $self) {
$output1046 = '';

$output1046 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1048 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1047 = array();
$arguments1047['key'] = NULL;
$arguments1047['id'] = NULL;
$arguments1047['default'] = NULL;
$arguments1047['arguments'] = NULL;
$arguments1047['extensionName'] = NULL;
$arguments1047['languageKey'] = NULL;
$arguments1047['alternativeLanguageKeys'] = NULL;
$arguments1047['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output1046 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1047, $renderChildrenClosure1048, $renderingContext)]);

$output1046 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1050 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1049 = array();
$arguments1049['identifier'] = NULL;
$arguments1049['size'] = 'small';
$arguments1049['overlay'] = NULL;
$arguments1049['state'] = 'default';
$arguments1049['alternativeMarkupIdentifier'] = NULL;
$arguments1049['identifier'] = 'overlay-missing';

$output1046 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1049, $renderChildrenClosure1050, $renderingContext);

$output1046 .= '
												</span>
											';
return $output1046;
};
$arguments1044['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1051 = '';

$output1051 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1053 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1052 = array();
$arguments1052['key'] = NULL;
$arguments1052['id'] = NULL;
$arguments1052['default'] = NULL;
$arguments1052['arguments'] = NULL;
$arguments1052['extensionName'] = NULL;
$arguments1052['languageKey'] = NULL;
$arguments1052['alternativeLanguageKeys'] = NULL;
$arguments1052['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output1051 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1052, $renderChildrenClosure1053, $renderingContext)]);

$output1051 .= ' ';
$array1054 = array (
);
$output1051 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1054)]);

$output1051 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1056 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1055 = array();
$arguments1055['identifier'] = NULL;
$arguments1055['size'] = 'small';
$arguments1055['overlay'] = NULL;
$arguments1055['state'] = 'default';
$arguments1055['alternativeMarkupIdentifier'] = NULL;
$arguments1055['identifier'] = 'overlay-missing';

$output1051 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1055, $renderChildrenClosure1056, $renderingContext);

$output1051 .= '
												</span>
											';
return $output1051;
};
$arguments1044['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array1057 = array();
$array1058 = array (
);$array1057['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array1058);

$expression1059 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1059(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1057)
					),
					$renderingContext
				);
};
$arguments1044['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1060 = '';

$output1060 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1062 = function() use ($renderingContext, $self) {
$output1076 = '';

$output1076 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1078 = function() use ($renderingContext, $self) {
$output1079 = '';

$output1079 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1081 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1080 = array();
$arguments1080['key'] = NULL;
$arguments1080['id'] = NULL;
$arguments1080['default'] = NULL;
$arguments1080['arguments'] = NULL;
$arguments1080['extensionName'] = NULL;
$arguments1080['languageKey'] = NULL;
$arguments1080['alternativeLanguageKeys'] = NULL;
$arguments1080['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output1079 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1080, $renderChildrenClosure1081, $renderingContext)]);

$output1079 .= ' ';
$array1082 = array (
);
$output1079 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1082)]);

$output1079 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1084 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1083 = array();
$arguments1083['identifier'] = NULL;
$arguments1083['size'] = 'small';
$arguments1083['overlay'] = NULL;
$arguments1083['state'] = 'default';
$arguments1083['alternativeMarkupIdentifier'] = NULL;
$arguments1083['identifier'] = 'overlay-missing';

$output1079 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1083, $renderChildrenClosure1084, $renderingContext);

$output1079 .= '
														</span>
													';
return $output1079;
};
$arguments1077 = array();

$output1076 .= '';

$output1076 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1086 = function() use ($renderingContext, $self) {
$output1087 = '';

$output1087 .= '
														<span title="id=';
$array1088 = array (
);
$output1087 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1088)]);

$output1087 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1090 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1089 = array();
$arguments1089['identifier'] = NULL;
$arguments1089['size'] = 'small';
$arguments1089['overlay'] = NULL;
$arguments1089['state'] = 'default';
$arguments1089['alternativeMarkupIdentifier'] = NULL;
$arguments1089['identifier'] = 'content-form';

$output1087 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1089, $renderChildrenClosure1090, $renderingContext);

$output1087 .= '
														</span>
													';
return $output1087;
};
$arguments1085 = array();
$arguments1085['if'] = NULL;

$output1076 .= '';

$output1076 .= '
												';
return $output1076;
};
$arguments1061 = array();
$arguments1061['then'] = NULL;
$arguments1061['else'] = NULL;
$arguments1061['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1073 = array();
$array1074 = array (
);$array1073['0'] = $renderingContext->getVariableProvider()->getByPath('form.deprecatedFileExtension', $array1074);

$expression1075 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1061['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1075(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1073)
					),
					$renderingContext
				);
$arguments1061['__thenClosure'] = function() use ($renderingContext, $self) {
$output1063 = '';

$output1063 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1065 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1064 = array();
$arguments1064['key'] = NULL;
$arguments1064['id'] = NULL;
$arguments1064['default'] = NULL;
$arguments1064['arguments'] = NULL;
$arguments1064['extensionName'] = NULL;
$arguments1064['languageKey'] = NULL;
$arguments1064['alternativeLanguageKeys'] = NULL;
$arguments1064['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output1063 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1064, $renderChildrenClosure1065, $renderingContext)]);

$output1063 .= ' ';
$array1066 = array (
);
$output1063 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1066)]);

$output1063 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1068 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1067 = array();
$arguments1067['identifier'] = NULL;
$arguments1067['size'] = 'small';
$arguments1067['overlay'] = NULL;
$arguments1067['state'] = 'default';
$arguments1067['alternativeMarkupIdentifier'] = NULL;
$arguments1067['identifier'] = 'overlay-missing';

$output1063 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1067, $renderChildrenClosure1068, $renderingContext);

$output1063 .= '
														</span>
													';
return $output1063;
};
$arguments1061['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1069 = '';

$output1069 .= '
														<span title="id=';
$array1070 = array (
);
$output1069 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array1070)]);

$output1069 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1072 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1071 = array();
$arguments1071['identifier'] = NULL;
$arguments1071['size'] = 'small';
$arguments1071['overlay'] = NULL;
$arguments1071['state'] = 'default';
$arguments1071['alternativeMarkupIdentifier'] = NULL;
$arguments1071['identifier'] = 'content-form';

$output1069 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1071, $renderChildrenClosure1072, $renderingContext);

$output1069 .= '
														</span>
													';
return $output1069;
};

$output1060 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1061, $renderChildrenClosure1062, $renderingContext);

$output1060 .= '
											';
return $output1060;
};

$output1043 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1044, $renderChildrenClosure1045, $renderingContext);

$output1043 .= '
									</td>
									<td class="col-title col-responsive nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1147 = function() use ($renderingContext, $self) {
$output1164 = '';

$output1164 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1166 = function() use ($renderingContext, $self) {
$output1167 = '';

$output1167 .= '
													<div title="';
$array1168 = array (
);
$output1167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1168)]);

$output1167 .= '">';
$array1169 = array (
);
$output1167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1169)]);

$output1167 .= '</div>
												';
return $output1167;
};
$arguments1165 = array();

$output1164 .= '';

$output1164 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1171 = function() use ($renderingContext, $self) {
$output1172 = '';

$output1172 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1174 = function() use ($renderingContext, $self) {
$array1180 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1180)]);
};
$arguments1173 = array();
$arguments1173['additionalAttributes'] = NULL;
$arguments1173['data'] = NULL;
$arguments1173['class'] = NULL;
$arguments1173['dir'] = NULL;
$arguments1173['id'] = NULL;
$arguments1173['lang'] = NULL;
$arguments1173['style'] = NULL;
$arguments1173['title'] = NULL;
$arguments1173['accesskey'] = NULL;
$arguments1173['tabindex'] = NULL;
$arguments1173['onclick'] = NULL;
$arguments1173['name'] = NULL;
$arguments1173['rel'] = NULL;
$arguments1173['rev'] = NULL;
$arguments1173['target'] = NULL;
$arguments1173['action'] = NULL;
$arguments1173['controller'] = NULL;
$arguments1173['extensionName'] = NULL;
$arguments1173['pluginName'] = NULL;
$arguments1173['pageUid'] = NULL;
$arguments1173['pageType'] = NULL;
$arguments1173['noCache'] = NULL;
$arguments1173['noCacheHash'] = NULL;
$arguments1173['section'] = NULL;
$arguments1173['format'] = NULL;
$arguments1173['linkAccessRestrictedPages'] = NULL;
$arguments1173['additionalParams'] = NULL;
$arguments1173['absolute'] = NULL;
$arguments1173['addQueryString'] = NULL;
$arguments1173['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1173['addQueryStringMethod'] = NULL;
$arguments1173['arguments'] = NULL;
$arguments1173['controller'] = 'FormEditor';
$arguments1173['action'] = 'index';
// Rendering Array
$array1175 = array();
$array1176 = array (
);$array1175['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1176);
$arguments1173['arguments'] = $array1175;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1177 = array();
$arguments1177['key'] = NULL;
$arguments1177['id'] = NULL;
$arguments1177['default'] = NULL;
$arguments1177['arguments'] = NULL;
$arguments1177['extensionName'] = NULL;
$arguments1177['languageKey'] = NULL;
$arguments1177['alternativeLanguageKeys'] = NULL;
$arguments1177['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments1173['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1177, $renderChildrenClosure1178, $renderingContext);
// Rendering Array
$array1179 = array();
$array1179['toggle'] = 'tooltip';
$array1179['placement'] = 'right';
$arguments1173['data'] = $array1179;

$output1172 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1173, $renderChildrenClosure1174, $renderingContext);

$output1172 .= '
												';
return $output1172;
};
$arguments1170 = array();
$arguments1170['if'] = NULL;

$output1164 .= '';

$output1164 .= '
										';
return $output1164;
};
$arguments1146 = array();
$arguments1146['then'] = NULL;
$arguments1146['else'] = NULL;
$arguments1146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1160 = array();
$array1161 = array (
);$array1160['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array1161);
$array1160['1'] = ' || ';
$array1162 = array (
);$array1160['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array1162);

$expression1163 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1160)
					),
					$renderingContext
				);
$arguments1146['__thenClosure'] = function() use ($renderingContext, $self) {
$output1148 = '';

$output1148 .= '
													<div title="';
$array1149 = array (
);
$output1148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1149)]);

$output1148 .= '">';
$array1150 = array (
);
$output1148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1150)]);

$output1148 .= '</div>
												';
return $output1148;
};
$arguments1146['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1151 = '';

$output1151 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1153 = function() use ($renderingContext, $self) {
$array1159 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1159)]);
};
$arguments1152 = array();
$arguments1152['additionalAttributes'] = NULL;
$arguments1152['data'] = NULL;
$arguments1152['class'] = NULL;
$arguments1152['dir'] = NULL;
$arguments1152['id'] = NULL;
$arguments1152['lang'] = NULL;
$arguments1152['style'] = NULL;
$arguments1152['title'] = NULL;
$arguments1152['accesskey'] = NULL;
$arguments1152['tabindex'] = NULL;
$arguments1152['onclick'] = NULL;
$arguments1152['name'] = NULL;
$arguments1152['rel'] = NULL;
$arguments1152['rev'] = NULL;
$arguments1152['target'] = NULL;
$arguments1152['action'] = NULL;
$arguments1152['controller'] = NULL;
$arguments1152['extensionName'] = NULL;
$arguments1152['pluginName'] = NULL;
$arguments1152['pageUid'] = NULL;
$arguments1152['pageType'] = NULL;
$arguments1152['noCache'] = NULL;
$arguments1152['noCacheHash'] = NULL;
$arguments1152['section'] = NULL;
$arguments1152['format'] = NULL;
$arguments1152['linkAccessRestrictedPages'] = NULL;
$arguments1152['additionalParams'] = NULL;
$arguments1152['absolute'] = NULL;
$arguments1152['addQueryString'] = NULL;
$arguments1152['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1152['addQueryStringMethod'] = NULL;
$arguments1152['arguments'] = NULL;
$arguments1152['controller'] = 'FormEditor';
$arguments1152['action'] = 'index';
// Rendering Array
$array1154 = array();
$array1155 = array (
);$array1154['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1155);
$arguments1152['arguments'] = $array1154;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1156 = array();
$arguments1156['key'] = NULL;
$arguments1156['id'] = NULL;
$arguments1156['default'] = NULL;
$arguments1156['arguments'] = NULL;
$arguments1156['extensionName'] = NULL;
$arguments1156['languageKey'] = NULL;
$arguments1156['alternativeLanguageKeys'] = NULL;
$arguments1156['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments1152['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1156, $renderChildrenClosure1157, $renderingContext);
// Rendering Array
$array1158 = array();
$array1158['toggle'] = 'tooltip';
$array1158['placement'] = 'right';
$arguments1152['data'] = $array1158;

$output1151 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1152, $renderChildrenClosure1153, $renderingContext);

$output1151 .= '
												';
return $output1151;
};

$output1043 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1146, $renderChildrenClosure1147, $renderingContext);

$output1043 .= '
									</td>
									<td class="col-control nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1182 = function() use ($renderingContext, $self) {
$output1201 = '';

$output1201 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1203 = function() use ($renderingContext, $self) {
$output1204 = '';

$output1204 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1205 = array();
$arguments1205['key'] = NULL;
$arguments1205['id'] = NULL;
$arguments1205['default'] = NULL;
$arguments1205['arguments'] = NULL;
$arguments1205['extensionName'] = NULL;
$arguments1205['languageKey'] = NULL;
$arguments1205['alternativeLanguageKeys'] = NULL;
$arguments1205['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output1204 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1205, $renderChildrenClosure1206, $renderingContext)]);

$output1204 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1207 = array();
$arguments1207['identifier'] = NULL;
$arguments1207['size'] = 'small';
$arguments1207['overlay'] = NULL;
$arguments1207['state'] = 'default';
$arguments1207['alternativeMarkupIdentifier'] = NULL;
$arguments1207['identifier'] = 'actions-open';

$output1204 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1207, $renderChildrenClosure1208, $renderingContext);

$output1204 .= '</button>
												';
return $output1204;
};
$arguments1202 = array();

$output1201 .= '';

$output1201 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1210 = function() use ($renderingContext, $self) {
$output1211 = '';

$output1211 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1213 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1218 = array();
$arguments1218['identifier'] = NULL;
$arguments1218['size'] = 'small';
$arguments1218['overlay'] = NULL;
$arguments1218['state'] = 'default';
$arguments1218['alternativeMarkupIdentifier'] = NULL;
$arguments1218['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1218, $renderChildrenClosure1219, $renderingContext);
};
$arguments1212 = array();
$arguments1212['additionalAttributes'] = NULL;
$arguments1212['data'] = NULL;
$arguments1212['class'] = NULL;
$arguments1212['dir'] = NULL;
$arguments1212['id'] = NULL;
$arguments1212['lang'] = NULL;
$arguments1212['style'] = NULL;
$arguments1212['title'] = NULL;
$arguments1212['accesskey'] = NULL;
$arguments1212['tabindex'] = NULL;
$arguments1212['onclick'] = NULL;
$arguments1212['name'] = NULL;
$arguments1212['rel'] = NULL;
$arguments1212['rev'] = NULL;
$arguments1212['target'] = NULL;
$arguments1212['action'] = NULL;
$arguments1212['controller'] = NULL;
$arguments1212['extensionName'] = NULL;
$arguments1212['pluginName'] = NULL;
$arguments1212['pageUid'] = NULL;
$arguments1212['pageType'] = NULL;
$arguments1212['noCache'] = NULL;
$arguments1212['noCacheHash'] = NULL;
$arguments1212['section'] = NULL;
$arguments1212['format'] = NULL;
$arguments1212['linkAccessRestrictedPages'] = NULL;
$arguments1212['additionalParams'] = NULL;
$arguments1212['absolute'] = NULL;
$arguments1212['addQueryString'] = NULL;
$arguments1212['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1212['addQueryStringMethod'] = NULL;
$arguments1212['arguments'] = NULL;
$arguments1212['controller'] = 'FormEditor';
$arguments1212['action'] = 'index';
// Rendering Array
$array1214 = array();
$array1215 = array (
);$array1214['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1215);
$arguments1212['arguments'] = $array1214;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1216 = array();
$arguments1216['key'] = NULL;
$arguments1216['id'] = NULL;
$arguments1216['default'] = NULL;
$arguments1216['arguments'] = NULL;
$arguments1216['extensionName'] = NULL;
$arguments1216['languageKey'] = NULL;
$arguments1216['alternativeLanguageKeys'] = NULL;
$arguments1216['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments1212['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1216, $renderChildrenClosure1217, $renderingContext);
$arguments1212['class'] = 'btn btn-default form-record-open';

$output1211 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1212, $renderChildrenClosure1213, $renderingContext);

$output1211 .= '
												';
return $output1211;
};
$arguments1209 = array();
$arguments1209['if'] = NULL;

$output1201 .= '';

$output1201 .= '
											';
return $output1201;
};
$arguments1181 = array();
$arguments1181['then'] = NULL;
$arguments1181['else'] = NULL;
$arguments1181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1197 = array();
$array1198 = array (
);$array1197['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array1198);
$array1197['1'] = ' || ';
$array1199 = array (
);$array1197['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array1199);

$expression1200 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1200(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1197)
					),
					$renderingContext
				);
$arguments1181['__thenClosure'] = function() use ($renderingContext, $self) {
$output1183 = '';

$output1183 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1184 = array();
$arguments1184['key'] = NULL;
$arguments1184['id'] = NULL;
$arguments1184['default'] = NULL;
$arguments1184['arguments'] = NULL;
$arguments1184['extensionName'] = NULL;
$arguments1184['languageKey'] = NULL;
$arguments1184['alternativeLanguageKeys'] = NULL;
$arguments1184['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output1183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1184, $renderChildrenClosure1185, $renderingContext)]);

$output1183 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1186 = array();
$arguments1186['identifier'] = NULL;
$arguments1186['size'] = 'small';
$arguments1186['overlay'] = NULL;
$arguments1186['state'] = 'default';
$arguments1186['alternativeMarkupIdentifier'] = NULL;
$arguments1186['identifier'] = 'actions-open';

$output1183 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1186, $renderChildrenClosure1187, $renderingContext);

$output1183 .= '</button>
												';
return $output1183;
};
$arguments1181['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1188 = '';

$output1188 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1190 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1195 = array();
$arguments1195['identifier'] = NULL;
$arguments1195['size'] = 'small';
$arguments1195['overlay'] = NULL;
$arguments1195['state'] = 'default';
$arguments1195['alternativeMarkupIdentifier'] = NULL;
$arguments1195['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1195, $renderChildrenClosure1196, $renderingContext);
};
$arguments1189 = array();
$arguments1189['additionalAttributes'] = NULL;
$arguments1189['data'] = NULL;
$arguments1189['class'] = NULL;
$arguments1189['dir'] = NULL;
$arguments1189['id'] = NULL;
$arguments1189['lang'] = NULL;
$arguments1189['style'] = NULL;
$arguments1189['title'] = NULL;
$arguments1189['accesskey'] = NULL;
$arguments1189['tabindex'] = NULL;
$arguments1189['onclick'] = NULL;
$arguments1189['name'] = NULL;
$arguments1189['rel'] = NULL;
$arguments1189['rev'] = NULL;
$arguments1189['target'] = NULL;
$arguments1189['action'] = NULL;
$arguments1189['controller'] = NULL;
$arguments1189['extensionName'] = NULL;
$arguments1189['pluginName'] = NULL;
$arguments1189['pageUid'] = NULL;
$arguments1189['pageType'] = NULL;
$arguments1189['noCache'] = NULL;
$arguments1189['noCacheHash'] = NULL;
$arguments1189['section'] = NULL;
$arguments1189['format'] = NULL;
$arguments1189['linkAccessRestrictedPages'] = NULL;
$arguments1189['additionalParams'] = NULL;
$arguments1189['absolute'] = NULL;
$arguments1189['addQueryString'] = NULL;
$arguments1189['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1189['addQueryStringMethod'] = NULL;
$arguments1189['arguments'] = NULL;
$arguments1189['controller'] = 'FormEditor';
$arguments1189['action'] = 'index';
// Rendering Array
$array1191 = array();
$array1192 = array (
);$array1191['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1192);
$arguments1189['arguments'] = $array1191;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1193 = array();
$arguments1193['key'] = NULL;
$arguments1193['id'] = NULL;
$arguments1193['default'] = NULL;
$arguments1193['arguments'] = NULL;
$arguments1193['extensionName'] = NULL;
$arguments1193['languageKey'] = NULL;
$arguments1193['alternativeLanguageKeys'] = NULL;
$arguments1193['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments1189['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1193, $renderChildrenClosure1194, $renderingContext);
$arguments1189['class'] = 'btn btn-default form-record-open';

$output1188 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1189, $renderChildrenClosure1190, $renderingContext);

$output1188 .= '
												';
return $output1188;
};

$output1043 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1181, $renderChildrenClosure1182, $renderingContext);

$output1043 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1221 = function() use ($renderingContext, $self) {
$output1273 = '';

$output1273 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1275 = function() use ($renderingContext, $self) {
$output1276 = '';

$output1276 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1277 = array();
$arguments1277['key'] = NULL;
$arguments1277['id'] = NULL;
$arguments1277['default'] = NULL;
$arguments1277['arguments'] = NULL;
$arguments1277['extensionName'] = NULL;
$arguments1277['languageKey'] = NULL;
$arguments1277['alternativeLanguageKeys'] = NULL;
$arguments1277['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output1276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1277, $renderChildrenClosure1278, $renderingContext)]);

$output1276 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1279 = array();
$arguments1279['identifier'] = NULL;
$arguments1279['size'] = 'small';
$arguments1279['overlay'] = NULL;
$arguments1279['state'] = 'default';
$arguments1279['alternativeMarkupIdentifier'] = NULL;
$arguments1279['identifier'] = 'actions-duplicate';

$output1276 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1279, $renderChildrenClosure1280, $renderingContext);

$output1276 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1281 = array();
$arguments1281['key'] = NULL;
$arguments1281['id'] = NULL;
$arguments1281['default'] = NULL;
$arguments1281['arguments'] = NULL;
$arguments1281['extensionName'] = NULL;
$arguments1281['languageKey'] = NULL;
$arguments1281['alternativeLanguageKeys'] = NULL;
$arguments1281['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1281, $renderChildrenClosure1282, $renderingContext)]);

$output1276 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1283 = array();
$arguments1283['identifier'] = NULL;
$arguments1283['size'] = 'small';
$arguments1283['overlay'] = NULL;
$arguments1283['state'] = 'default';
$arguments1283['alternativeMarkupIdentifier'] = NULL;
$arguments1283['identifier'] = 'actions-edit-delete';

$output1276 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1283, $renderChildrenClosure1284, $renderingContext);

$output1276 .= '</button>
												';
return $output1276;
};
$arguments1274 = array();

$output1273 .= '';

$output1273 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1286 = function() use ($renderingContext, $self) {
$output1287 = '';

$output1287 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array1288 = array (
);
$output1287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1288)]);

$output1287 .= '" data-form-name="';
$array1289 = array (
);
$output1287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1289)]);

$output1287 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1290 = array();
$arguments1290['key'] = NULL;
$arguments1290['id'] = NULL;
$arguments1290['default'] = NULL;
$arguments1290['arguments'] = NULL;
$arguments1290['extensionName'] = NULL;
$arguments1290['languageKey'] = NULL;
$arguments1290['alternativeLanguageKeys'] = NULL;
$arguments1290['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output1287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1290, $renderChildrenClosure1291, $renderingContext)]);

$output1287 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1292 = array();
$arguments1292['identifier'] = NULL;
$arguments1292['size'] = 'small';
$arguments1292['overlay'] = NULL;
$arguments1292['state'] = 'default';
$arguments1292['alternativeMarkupIdentifier'] = NULL;
$arguments1292['identifier'] = 'actions-duplicate';

$output1287 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1292, $renderChildrenClosure1293, $renderingContext);

$output1287 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1295 = function() use ($renderingContext, $self) {
$output1310 = '';

$output1310 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1312 = function() use ($renderingContext, $self) {
$output1313 = '';

$output1313 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1314 = array (
);
$output1313 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1314)]);

$output1313 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1315 = array();
$arguments1315['key'] = NULL;
$arguments1315['id'] = NULL;
$arguments1315['default'] = NULL;
$arguments1315['arguments'] = NULL;
$arguments1315['extensionName'] = NULL;
$arguments1315['languageKey'] = NULL;
$arguments1315['alternativeLanguageKeys'] = NULL;
$arguments1315['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1313 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1315, $renderChildrenClosure1316, $renderingContext)]);

$output1313 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1317 = array();
$arguments1317['identifier'] = NULL;
$arguments1317['size'] = 'small';
$arguments1317['overlay'] = NULL;
$arguments1317['state'] = 'default';
$arguments1317['alternativeMarkupIdentifier'] = NULL;
$arguments1317['identifier'] = 'actions-edit-delete';

$output1313 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1317, $renderChildrenClosure1318, $renderingContext);

$output1313 .= '</a>
														';
return $output1313;
};
$arguments1311 = array();

$output1310 .= '';

$output1310 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1320 = function() use ($renderingContext, $self) {
$output1321 = '';

$output1321 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1322 = array();
$arguments1322['key'] = NULL;
$arguments1322['id'] = NULL;
$arguments1322['default'] = NULL;
$arguments1322['arguments'] = NULL;
$arguments1322['extensionName'] = NULL;
$arguments1322['languageKey'] = NULL;
$arguments1322['alternativeLanguageKeys'] = NULL;
$arguments1322['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1321 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1322, $renderChildrenClosure1323, $renderingContext)]);

$output1321 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1324 = array();
$arguments1324['identifier'] = NULL;
$arguments1324['size'] = 'small';
$arguments1324['overlay'] = NULL;
$arguments1324['state'] = 'default';
$arguments1324['alternativeMarkupIdentifier'] = NULL;
$arguments1324['identifier'] = 'actions-edit-delete';

$output1321 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1324, $renderChildrenClosure1325, $renderingContext);

$output1321 .= '</button>
														';
return $output1321;
};
$arguments1319 = array();
$arguments1319['if'] = NULL;

$output1310 .= '';

$output1310 .= '
													';
return $output1310;
};
$arguments1294 = array();
$arguments1294['then'] = NULL;
$arguments1294['else'] = NULL;
$arguments1294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1307 = array();
$array1308 = array (
);$array1307['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array1308);

$expression1309 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1309(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1307)
					),
					$renderingContext
				);
$arguments1294['__thenClosure'] = function() use ($renderingContext, $self) {
$output1296 = '';

$output1296 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1297 = array (
);
$output1296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1297)]);

$output1296 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1298 = array();
$arguments1298['key'] = NULL;
$arguments1298['id'] = NULL;
$arguments1298['default'] = NULL;
$arguments1298['arguments'] = NULL;
$arguments1298['extensionName'] = NULL;
$arguments1298['languageKey'] = NULL;
$arguments1298['alternativeLanguageKeys'] = NULL;
$arguments1298['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1298, $renderChildrenClosure1299, $renderingContext)]);

$output1296 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1300 = array();
$arguments1300['identifier'] = NULL;
$arguments1300['size'] = 'small';
$arguments1300['overlay'] = NULL;
$arguments1300['state'] = 'default';
$arguments1300['alternativeMarkupIdentifier'] = NULL;
$arguments1300['identifier'] = 'actions-edit-delete';

$output1296 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1300, $renderChildrenClosure1301, $renderingContext);

$output1296 .= '</a>
														';
return $output1296;
};
$arguments1294['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1302 = '';

$output1302 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1303 = array();
$arguments1303['key'] = NULL;
$arguments1303['id'] = NULL;
$arguments1303['default'] = NULL;
$arguments1303['arguments'] = NULL;
$arguments1303['extensionName'] = NULL;
$arguments1303['languageKey'] = NULL;
$arguments1303['alternativeLanguageKeys'] = NULL;
$arguments1303['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1303, $renderChildrenClosure1304, $renderingContext)]);

$output1302 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1305 = array();
$arguments1305['identifier'] = NULL;
$arguments1305['size'] = 'small';
$arguments1305['overlay'] = NULL;
$arguments1305['state'] = 'default';
$arguments1305['alternativeMarkupIdentifier'] = NULL;
$arguments1305['identifier'] = 'actions-edit-delete';

$output1302 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1305, $renderChildrenClosure1306, $renderingContext);

$output1302 .= '</button>
														';
return $output1302;
};

$output1287 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1294, $renderChildrenClosure1295, $renderingContext);

$output1287 .= '
												';
return $output1287;
};
$arguments1285 = array();
$arguments1285['if'] = NULL;

$output1273 .= '';

$output1273 .= '
											';
return $output1273;
};
$arguments1220 = array();
$arguments1220['then'] = NULL;
$arguments1220['else'] = NULL;
$arguments1220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1270 = array();
$array1271 = array (
);$array1270['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array1271);

$expression1272 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1272(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1270)
					),
					$renderingContext
				);
$arguments1220['__thenClosure'] = function() use ($renderingContext, $self) {
$output1222 = '';

$output1222 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1223 = array();
$arguments1223['key'] = NULL;
$arguments1223['id'] = NULL;
$arguments1223['default'] = NULL;
$arguments1223['arguments'] = NULL;
$arguments1223['extensionName'] = NULL;
$arguments1223['languageKey'] = NULL;
$arguments1223['alternativeLanguageKeys'] = NULL;
$arguments1223['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output1222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1223, $renderChildrenClosure1224, $renderingContext)]);

$output1222 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1225 = array();
$arguments1225['identifier'] = NULL;
$arguments1225['size'] = 'small';
$arguments1225['overlay'] = NULL;
$arguments1225['state'] = 'default';
$arguments1225['alternativeMarkupIdentifier'] = NULL;
$arguments1225['identifier'] = 'actions-duplicate';

$output1222 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1225, $renderChildrenClosure1226, $renderingContext);

$output1222 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1227 = array();
$arguments1227['key'] = NULL;
$arguments1227['id'] = NULL;
$arguments1227['default'] = NULL;
$arguments1227['arguments'] = NULL;
$arguments1227['extensionName'] = NULL;
$arguments1227['languageKey'] = NULL;
$arguments1227['alternativeLanguageKeys'] = NULL;
$arguments1227['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1227, $renderChildrenClosure1228, $renderingContext)]);

$output1222 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1229 = array();
$arguments1229['identifier'] = NULL;
$arguments1229['size'] = 'small';
$arguments1229['overlay'] = NULL;
$arguments1229['state'] = 'default';
$arguments1229['alternativeMarkupIdentifier'] = NULL;
$arguments1229['identifier'] = 'actions-edit-delete';

$output1222 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1229, $renderChildrenClosure1230, $renderingContext);

$output1222 .= '</button>
												';
return $output1222;
};
$arguments1220['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1231 = '';

$output1231 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array1232 = array (
);
$output1231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1232)]);

$output1231 .= '" data-form-name="';
$array1233 = array (
);
$output1231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1233)]);

$output1231 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1234 = array();
$arguments1234['key'] = NULL;
$arguments1234['id'] = NULL;
$arguments1234['default'] = NULL;
$arguments1234['arguments'] = NULL;
$arguments1234['extensionName'] = NULL;
$arguments1234['languageKey'] = NULL;
$arguments1234['alternativeLanguageKeys'] = NULL;
$arguments1234['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output1231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1234, $renderChildrenClosure1235, $renderingContext)]);

$output1231 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1236 = array();
$arguments1236['identifier'] = NULL;
$arguments1236['size'] = 'small';
$arguments1236['overlay'] = NULL;
$arguments1236['state'] = 'default';
$arguments1236['alternativeMarkupIdentifier'] = NULL;
$arguments1236['identifier'] = 'actions-duplicate';

$output1231 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1236, $renderChildrenClosure1237, $renderingContext);

$output1231 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1239 = function() use ($renderingContext, $self) {
$output1254 = '';

$output1254 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1256 = function() use ($renderingContext, $self) {
$output1257 = '';

$output1257 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1258 = array (
);
$output1257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1258)]);

$output1257 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1259 = array();
$arguments1259['key'] = NULL;
$arguments1259['id'] = NULL;
$arguments1259['default'] = NULL;
$arguments1259['arguments'] = NULL;
$arguments1259['extensionName'] = NULL;
$arguments1259['languageKey'] = NULL;
$arguments1259['alternativeLanguageKeys'] = NULL;
$arguments1259['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1259, $renderChildrenClosure1260, $renderingContext)]);

$output1257 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1261 = array();
$arguments1261['identifier'] = NULL;
$arguments1261['size'] = 'small';
$arguments1261['overlay'] = NULL;
$arguments1261['state'] = 'default';
$arguments1261['alternativeMarkupIdentifier'] = NULL;
$arguments1261['identifier'] = 'actions-edit-delete';

$output1257 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1261, $renderChildrenClosure1262, $renderingContext);

$output1257 .= '</a>
														';
return $output1257;
};
$arguments1255 = array();

$output1254 .= '';

$output1254 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1264 = function() use ($renderingContext, $self) {
$output1265 = '';

$output1265 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1266 = array();
$arguments1266['key'] = NULL;
$arguments1266['id'] = NULL;
$arguments1266['default'] = NULL;
$arguments1266['arguments'] = NULL;
$arguments1266['extensionName'] = NULL;
$arguments1266['languageKey'] = NULL;
$arguments1266['alternativeLanguageKeys'] = NULL;
$arguments1266['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1266, $renderChildrenClosure1267, $renderingContext)]);

$output1265 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1268 = array();
$arguments1268['identifier'] = NULL;
$arguments1268['size'] = 'small';
$arguments1268['overlay'] = NULL;
$arguments1268['state'] = 'default';
$arguments1268['alternativeMarkupIdentifier'] = NULL;
$arguments1268['identifier'] = 'actions-edit-delete';

$output1265 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1268, $renderChildrenClosure1269, $renderingContext);

$output1265 .= '</button>
														';
return $output1265;
};
$arguments1263 = array();
$arguments1263['if'] = NULL;

$output1254 .= '';

$output1254 .= '
													';
return $output1254;
};
$arguments1238 = array();
$arguments1238['then'] = NULL;
$arguments1238['else'] = NULL;
$arguments1238['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1251 = array();
$array1252 = array (
);$array1251['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array1252);

$expression1253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1238['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1251)
					),
					$renderingContext
				);
$arguments1238['__thenClosure'] = function() use ($renderingContext, $self) {
$output1240 = '';

$output1240 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1241 = array (
);
$output1240 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1241)]);

$output1240 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1242 = array();
$arguments1242['key'] = NULL;
$arguments1242['id'] = NULL;
$arguments1242['default'] = NULL;
$arguments1242['arguments'] = NULL;
$arguments1242['extensionName'] = NULL;
$arguments1242['languageKey'] = NULL;
$arguments1242['alternativeLanguageKeys'] = NULL;
$arguments1242['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1240 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1242, $renderChildrenClosure1243, $renderingContext)]);

$output1240 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1244 = array();
$arguments1244['identifier'] = NULL;
$arguments1244['size'] = 'small';
$arguments1244['overlay'] = NULL;
$arguments1244['state'] = 'default';
$arguments1244['alternativeMarkupIdentifier'] = NULL;
$arguments1244['identifier'] = 'actions-edit-delete';

$output1240 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1244, $renderChildrenClosure1245, $renderingContext);

$output1240 .= '</a>
														';
return $output1240;
};
$arguments1238['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1246 = '';

$output1246 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1247 = array();
$arguments1247['key'] = NULL;
$arguments1247['id'] = NULL;
$arguments1247['default'] = NULL;
$arguments1247['arguments'] = NULL;
$arguments1247['extensionName'] = NULL;
$arguments1247['languageKey'] = NULL;
$arguments1247['alternativeLanguageKeys'] = NULL;
$arguments1247['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1247, $renderChildrenClosure1248, $renderingContext)]);

$output1246 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1249 = array();
$arguments1249['identifier'] = NULL;
$arguments1249['size'] = 'small';
$arguments1249['overlay'] = NULL;
$arguments1249['state'] = 'default';
$arguments1249['alternativeMarkupIdentifier'] = NULL;
$arguments1249['identifier'] = 'actions-edit-delete';

$output1246 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1249, $renderChildrenClosure1250, $renderingContext);

$output1246 .= '</button>
														';
return $output1246;
};

$output1231 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1238, $renderChildrenClosure1239, $renderingContext);

$output1231 .= '
												';
return $output1231;
};

$output1043 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1220, $renderChildrenClosure1221, $renderingContext);

$output1043 .= '
										</div>
									</td>
									<td class="nowrap">';
$array1326 = array (
);
$output1043 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1326)]);

$output1043 .= '</td>
									<td class="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1328 = function() use ($renderingContext, $self) {
$output1338 = '';

$output1338 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1340 = function() use ($renderingContext, $self) {
$output1341 = '';

$output1341 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array1342 = array (
);
$output1341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1342)]);

$output1341 .= '" data-form-name="';
$array1343 = array (
);
$output1341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1343)]);

$output1341 .= '">';
$array1344 = array (
);
$output1341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1344)]);

$output1341 .= '</a>
											';
return $output1341;
};
$arguments1339 = array();

$output1338 .= '';

$output1338 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1346 = function() use ($renderingContext, $self) {
$output1347 = '';

$output1347 .= '
												';
$array1348 = array (
);
$output1347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1348)]);

$output1347 .= '
											';
return $output1347;
};
$arguments1345 = array();
$arguments1345['if'] = NULL;

$output1338 .= '';

$output1338 .= '
										';
return $output1338;
};
$arguments1327 = array();
$arguments1327['then'] = NULL;
$arguments1327['else'] = NULL;
$arguments1327['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1335 = array();
$array1336 = array (
);$array1335['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1336);

$expression1337 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1327['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1335)
					),
					$renderingContext
				);
$arguments1327['__thenClosure'] = function() use ($renderingContext, $self) {
$output1329 = '';

$output1329 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array1330 = array (
);
$output1329 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1330)]);

$output1329 .= '" data-form-name="';
$array1331 = array (
);
$output1329 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1331)]);

$output1329 .= '">';
$array1332 = array (
);
$output1329 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1332)]);

$output1329 .= '</a>
											';
return $output1329;
};
$arguments1327['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1333 = '';

$output1333 .= '
												';
$array1334 = array (
);
$output1333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1334)]);

$output1333 .= '
											';
return $output1333;
};

$output1043 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1327, $renderChildrenClosure1328, $renderingContext);

$output1043 .= '
									</td>
								</tr>
							';
return $output1043;
};
$arguments1040 = array();
$arguments1040['each'] = NULL;
$arguments1040['as'] = NULL;
$arguments1040['key'] = NULL;
$arguments1040['reverse'] = false;
$arguments1040['iteration'] = NULL;
$array1042 = array (
);$arguments1040['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array1042);
$arguments1040['as'] = 'form';

$output1029 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1040, $renderChildrenClosure1041, $renderingContext);

$output1029 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output1029;
};
$arguments1027 = array();

$output1026 .= '';

$output1026 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1350 = function() use ($renderingContext, $self) {
$output1351 = '';

$output1351 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure1353 = function() use ($renderingContext, $self) {
$output1356 = '';

$output1356 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1357 = array();
$arguments1357['key'] = NULL;
$arguments1357['id'] = NULL;
$arguments1357['default'] = NULL;
$arguments1357['arguments'] = NULL;
$arguments1357['extensionName'] = NULL;
$arguments1357['languageKey'] = NULL;
$arguments1357['alternativeLanguageKeys'] = NULL;
$arguments1357['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message';

$output1356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1357, $renderChildrenClosure1358, $renderingContext)]);

$output1356 .= '</p>
			<a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1360 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1359 = array();
$arguments1359['key'] = NULL;
$arguments1359['id'] = NULL;
$arguments1359['default'] = NULL;
$arguments1359['arguments'] = NULL;
$arguments1359['extensionName'] = NULL;
$arguments1359['languageKey'] = NULL;
$arguments1359['alternativeLanguageKeys'] = NULL;
$arguments1359['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output1356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1359, $renderChildrenClosure1360, $renderingContext)]);

$output1356 .= '</a>
		';
return $output1356;
};
$arguments1352 = array();
$arguments1352['message'] = NULL;
$arguments1352['title'] = NULL;
$arguments1352['state'] = -2;
$arguments1352['iconName'] = NULL;
$arguments1352['disableIcon'] = false;
$arguments1352['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1354 = array();
$arguments1354['key'] = NULL;
$arguments1354['id'] = NULL;
$arguments1354['default'] = NULL;
$arguments1354['arguments'] = NULL;
$arguments1354['extensionName'] = NULL;
$arguments1354['languageKey'] = NULL;
$arguments1354['alternativeLanguageKeys'] = NULL;
$arguments1354['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title';
$arguments1352['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1354, $renderChildrenClosure1355, $renderingContext);
$renderChildrenClosure1353 = ($arguments1352['message'] !== null) ? function() use ($arguments1352) { return $arguments1352['message']; } : $renderChildrenClosure1353;
$output1351 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments1352, $renderChildrenClosure1353, $renderingContext);

$output1351 .= '
	';
return $output1351;
};
$arguments1349 = array();
$arguments1349['if'] = NULL;

$output1026 .= '';

$output1026 .= '
';
return $output1026;
};
$arguments691 = array();
$arguments691['then'] = NULL;
$arguments691['else'] = NULL;
$arguments691['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1023 = array();
$array1024 = array (
);$array1023['0'] = $renderingContext->getVariableProvider()->getByPath('forms', $array1024);

$expression1025 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments691['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1025(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1023)
					),
					$renderingContext
				);
$arguments691['__thenClosure'] = function() use ($renderingContext, $self) {
$output693 = '';

$output693 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments694 = array();
$arguments694['key'] = NULL;
$arguments694['id'] = NULL;
$arguments694['default'] = NULL;
$arguments694['arguments'] = NULL;
$arguments694['extensionName'] = NULL;
$arguments694['languageKey'] = NULL;
$arguments694['alternativeLanguageKeys'] = NULL;
$arguments694['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments694, $renderChildrenClosure695, $renderingContext)]);

$output693 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure697 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments696 = array();
$arguments696['identifier'] = NULL;
$arguments696['size'] = 'small';
$arguments696['overlay'] = NULL;
$arguments696['state'] = 'default';
$arguments696['alternativeMarkupIdentifier'] = NULL;
$arguments696['identifier'] = 'actions-add';

$output693 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments696, $renderChildrenClosure697, $renderingContext);

$output693 .= '</a></th>
									<th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments698 = array();
$arguments698['key'] = NULL;
$arguments698['id'] = NULL;
$arguments698['default'] = NULL;
$arguments698['arguments'] = NULL;
$arguments698['extensionName'] = NULL;
$arguments698['languageKey'] = NULL;
$arguments698['alternativeLanguageKeys'] = NULL;
$arguments698['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments698, $renderChildrenClosure699, $renderingContext)]);

$output693 .= '</th>
									<th class="col-control nowrap"></th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['key'] = NULL;
$arguments700['id'] = NULL;
$arguments700['default'] = NULL;
$arguments700['arguments'] = NULL;
$arguments700['extensionName'] = NULL;
$arguments700['languageKey'] = NULL;
$arguments700['alternativeLanguageKeys'] = NULL;
$arguments700['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext)]);

$output693 .= '</th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments702 = array();
$arguments702['key'] = NULL;
$arguments702['id'] = NULL;
$arguments702['default'] = NULL;
$arguments702['arguments'] = NULL;
$arguments702['extensionName'] = NULL;
$arguments702['languageKey'] = NULL;
$arguments702['alternativeLanguageKeys'] = NULL;
$arguments702['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext)]);

$output693 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure705 = function() use ($renderingContext, $self) {
$output707 = '';

$output707 .= '
								<tr>
									<td class="col-icon nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$output758 = '';

$output758 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure760 = function() use ($renderingContext, $self) {
$output761 = '';

$output761 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments762 = array();
$arguments762['key'] = NULL;
$arguments762['id'] = NULL;
$arguments762['default'] = NULL;
$arguments762['arguments'] = NULL;
$arguments762['extensionName'] = NULL;
$arguments762['languageKey'] = NULL;
$arguments762['alternativeLanguageKeys'] = NULL;
$arguments762['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output761 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments762, $renderChildrenClosure763, $renderingContext)]);

$output761 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure765 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments764 = array();
$arguments764['identifier'] = NULL;
$arguments764['size'] = 'small';
$arguments764['overlay'] = NULL;
$arguments764['state'] = 'default';
$arguments764['alternativeMarkupIdentifier'] = NULL;
$arguments764['identifier'] = 'overlay-missing';

$output761 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments764, $renderChildrenClosure765, $renderingContext);

$output761 .= '
												</span>
											';
return $output761;
};
$arguments759 = array();

$output758 .= '';

$output758 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure767 = function() use ($renderingContext, $self) {
$output771 = '';

$output771 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure773 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments772 = array();
$arguments772['key'] = NULL;
$arguments772['id'] = NULL;
$arguments772['default'] = NULL;
$arguments772['arguments'] = NULL;
$arguments772['extensionName'] = NULL;
$arguments772['languageKey'] = NULL;
$arguments772['alternativeLanguageKeys'] = NULL;
$arguments772['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output771 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments772, $renderChildrenClosure773, $renderingContext)]);

$output771 .= ' ';
$array774 = array (
);
$output771 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array774)]);

$output771 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure776 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments775 = array();
$arguments775['identifier'] = NULL;
$arguments775['size'] = 'small';
$arguments775['overlay'] = NULL;
$arguments775['state'] = 'default';
$arguments775['alternativeMarkupIdentifier'] = NULL;
$arguments775['identifier'] = 'overlay-missing';

$output771 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments775, $renderChildrenClosure776, $renderingContext);

$output771 .= '
												</span>
											';
return $output771;
};
$arguments766 = array();
$arguments766['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array768 = array();
$array769 = array (
);$array768['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array769);

$expression770 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments766['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression770(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array768)
					),
					$renderingContext
				);

$output758 .= '';

$output758 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
$output779 = '';

$output779 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
$output795 = '';

$output795 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure797 = function() use ($renderingContext, $self) {
$output798 = '';

$output798 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure800 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments799 = array();
$arguments799['key'] = NULL;
$arguments799['id'] = NULL;
$arguments799['default'] = NULL;
$arguments799['arguments'] = NULL;
$arguments799['extensionName'] = NULL;
$arguments799['languageKey'] = NULL;
$arguments799['alternativeLanguageKeys'] = NULL;
$arguments799['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output798 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments799, $renderChildrenClosure800, $renderingContext)]);

$output798 .= ' ';
$array801 = array (
);
$output798 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array801)]);

$output798 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments802 = array();
$arguments802['identifier'] = NULL;
$arguments802['size'] = 'small';
$arguments802['overlay'] = NULL;
$arguments802['state'] = 'default';
$arguments802['alternativeMarkupIdentifier'] = NULL;
$arguments802['identifier'] = 'overlay-missing';

$output798 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments802, $renderChildrenClosure803, $renderingContext);

$output798 .= '
														</span>
													';
return $output798;
};
$arguments796 = array();

$output795 .= '';

$output795 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
$output806 = '';

$output806 .= '
														<span title="id=';
$array807 = array (
);
$output806 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array807)]);

$output806 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure809 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments808 = array();
$arguments808['identifier'] = NULL;
$arguments808['size'] = 'small';
$arguments808['overlay'] = NULL;
$arguments808['state'] = 'default';
$arguments808['alternativeMarkupIdentifier'] = NULL;
$arguments808['identifier'] = 'content-form';

$output806 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments808, $renderChildrenClosure809, $renderingContext);

$output806 .= '
														</span>
													';
return $output806;
};
$arguments804 = array();
$arguments804['if'] = NULL;

$output795 .= '';

$output795 .= '
												';
return $output795;
};
$arguments780 = array();
$arguments780['then'] = NULL;
$arguments780['else'] = NULL;
$arguments780['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array792 = array();
$array793 = array (
);$array792['0'] = $renderingContext->getVariableProvider()->getByPath('form.deprecatedFileExtension', $array793);

$expression794 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments780['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression794(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array792)
					),
					$renderingContext
				);
$arguments780['__thenClosure'] = function() use ($renderingContext, $self) {
$output782 = '';

$output782 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure784 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments783 = array();
$arguments783['key'] = NULL;
$arguments783['id'] = NULL;
$arguments783['default'] = NULL;
$arguments783['arguments'] = NULL;
$arguments783['extensionName'] = NULL;
$arguments783['languageKey'] = NULL;
$arguments783['alternativeLanguageKeys'] = NULL;
$arguments783['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output782 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments783, $renderChildrenClosure784, $renderingContext)]);

$output782 .= ' ';
$array785 = array (
);
$output782 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array785)]);

$output782 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure787 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments786 = array();
$arguments786['identifier'] = NULL;
$arguments786['size'] = 'small';
$arguments786['overlay'] = NULL;
$arguments786['state'] = 'default';
$arguments786['alternativeMarkupIdentifier'] = NULL;
$arguments786['identifier'] = 'overlay-missing';

$output782 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments786, $renderChildrenClosure787, $renderingContext);

$output782 .= '
														</span>
													';
return $output782;
};
$arguments780['__elseClosures'][] = function() use ($renderingContext, $self) {
$output788 = '';

$output788 .= '
														<span title="id=';
$array789 = array (
);
$output788 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array789)]);

$output788 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure791 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments790 = array();
$arguments790['identifier'] = NULL;
$arguments790['size'] = 'small';
$arguments790['overlay'] = NULL;
$arguments790['state'] = 'default';
$arguments790['alternativeMarkupIdentifier'] = NULL;
$arguments790['identifier'] = 'content-form';

$output788 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments790, $renderChildrenClosure791, $renderingContext);

$output788 .= '
														</span>
													';
return $output788;
};

$output779 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext);

$output779 .= '
											';
return $output779;
};
$arguments777 = array();
$arguments777['if'] = NULL;

$output758 .= '';

$output758 .= '
										';
return $output758;
};
$arguments708 = array();
$arguments708['then'] = NULL;
$arguments708['else'] = NULL;
$arguments708['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array755 = array();
$array756 = array (
);$array755['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array756);

$expression757 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments708['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression757(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array755)
					),
					$renderingContext
				);
$arguments708['__thenClosure'] = function() use ($renderingContext, $self) {
$output710 = '';

$output710 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments711 = array();
$arguments711['key'] = NULL;
$arguments711['id'] = NULL;
$arguments711['default'] = NULL;
$arguments711['arguments'] = NULL;
$arguments711['extensionName'] = NULL;
$arguments711['languageKey'] = NULL;
$arguments711['alternativeLanguageKeys'] = NULL;
$arguments711['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output710 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext)]);

$output710 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments713 = array();
$arguments713['identifier'] = NULL;
$arguments713['size'] = 'small';
$arguments713['overlay'] = NULL;
$arguments713['state'] = 'default';
$arguments713['alternativeMarkupIdentifier'] = NULL;
$arguments713['identifier'] = 'overlay-missing';

$output710 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output710 .= '
												</span>
											';
return $output710;
};
$arguments708['__elseClosures'][] = function() use ($renderingContext, $self) {
$output715 = '';

$output715 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments716 = array();
$arguments716['key'] = NULL;
$arguments716['id'] = NULL;
$arguments716['default'] = NULL;
$arguments716['arguments'] = NULL;
$arguments716['extensionName'] = NULL;
$arguments716['languageKey'] = NULL;
$arguments716['alternativeLanguageKeys'] = NULL;
$arguments716['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output715 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext)]);

$output715 .= ' ';
$array718 = array (
);
$output715 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array718)]);

$output715 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments719 = array();
$arguments719['identifier'] = NULL;
$arguments719['size'] = 'small';
$arguments719['overlay'] = NULL;
$arguments719['state'] = 'default';
$arguments719['alternativeMarkupIdentifier'] = NULL;
$arguments719['identifier'] = 'overlay-missing';

$output715 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext);

$output715 .= '
												</span>
											';
return $output715;
};
$arguments708['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array721 = array();
$array722 = array (
);$array721['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array722);

$expression723 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression723(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array721)
					),
					$renderingContext
				);
};
$arguments708['__elseClosures'][] = function() use ($renderingContext, $self) {
$output724 = '';

$output724 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure726 = function() use ($renderingContext, $self) {
$output740 = '';

$output740 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
$output743 = '';

$output743 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure745 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments744 = array();
$arguments744['key'] = NULL;
$arguments744['id'] = NULL;
$arguments744['default'] = NULL;
$arguments744['arguments'] = NULL;
$arguments744['extensionName'] = NULL;
$arguments744['languageKey'] = NULL;
$arguments744['alternativeLanguageKeys'] = NULL;
$arguments744['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments744, $renderChildrenClosure745, $renderingContext)]);

$output743 .= ' ';
$array746 = array (
);
$output743 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array746)]);

$output743 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure748 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments747 = array();
$arguments747['identifier'] = NULL;
$arguments747['size'] = 'small';
$arguments747['overlay'] = NULL;
$arguments747['state'] = 'default';
$arguments747['alternativeMarkupIdentifier'] = NULL;
$arguments747['identifier'] = 'overlay-missing';

$output743 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments747, $renderChildrenClosure748, $renderingContext);

$output743 .= '
														</span>
													';
return $output743;
};
$arguments741 = array();

$output740 .= '';

$output740 .= '
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure750 = function() use ($renderingContext, $self) {
$output751 = '';

$output751 .= '
														<span title="id=';
$array752 = array (
);
$output751 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array752)]);

$output751 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments753 = array();
$arguments753['identifier'] = NULL;
$arguments753['size'] = 'small';
$arguments753['overlay'] = NULL;
$arguments753['state'] = 'default';
$arguments753['alternativeMarkupIdentifier'] = NULL;
$arguments753['identifier'] = 'content-form';

$output751 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments753, $renderChildrenClosure754, $renderingContext);

$output751 .= '
														</span>
													';
return $output751;
};
$arguments749 = array();
$arguments749['if'] = NULL;

$output740 .= '';

$output740 .= '
												';
return $output740;
};
$arguments725 = array();
$arguments725['then'] = NULL;
$arguments725['else'] = NULL;
$arguments725['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array737 = array();
$array738 = array (
);$array737['0'] = $renderingContext->getVariableProvider()->getByPath('form.deprecatedFileExtension', $array738);

$expression739 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments725['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression739(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array737)
					),
					$renderingContext
				);
$arguments725['__thenClosure'] = function() use ($renderingContext, $self) {
$output727 = '';

$output727 .= '
														<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments728 = array();
$arguments728['key'] = NULL;
$arguments728['id'] = NULL;
$arguments728['default'] = NULL;
$arguments728['arguments'] = NULL;
$arguments728['extensionName'] = NULL;
$arguments728['languageKey'] = NULL;
$arguments728['alternativeLanguageKeys'] = NULL;
$arguments728['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.deprecated_file_extension';

$output727 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext)]);

$output727 .= ' ';
$array730 = array (
);
$output727 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array730)]);

$output727 .= '" data-toggle="tooltip" data-placement="top">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments731 = array();
$arguments731['identifier'] = NULL;
$arguments731['size'] = 'small';
$arguments731['overlay'] = NULL;
$arguments731['state'] = 'default';
$arguments731['alternativeMarkupIdentifier'] = NULL;
$arguments731['identifier'] = 'overlay-missing';

$output727 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments731, $renderChildrenClosure732, $renderingContext);

$output727 .= '
														</span>
													';
return $output727;
};
$arguments725['__elseClosures'][] = function() use ($renderingContext, $self) {
$output733 = '';

$output733 .= '
														<span title="id=';
$array734 = array (
);
$output733 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array734)]);

$output733 .= '" data-toggle="tooltip" data-placement="right">
															';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments735 = array();
$arguments735['identifier'] = NULL;
$arguments735['size'] = 'small';
$arguments735['overlay'] = NULL;
$arguments735['state'] = 'default';
$arguments735['alternativeMarkupIdentifier'] = NULL;
$arguments735['identifier'] = 'content-form';

$output733 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);

$output733 .= '
														</span>
													';
return $output733;
};

$output724 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments725, $renderChildrenClosure726, $renderingContext);

$output724 .= '
											';
return $output724;
};

$output707 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);

$output707 .= '
									</td>
									<td class="col-title col-responsive nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
$output828 = '';

$output828 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure830 = function() use ($renderingContext, $self) {
$output831 = '';

$output831 .= '
													<div title="';
$array832 = array (
);
$output831 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array832)]);

$output831 .= '">';
$array833 = array (
);
$output831 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array833)]);

$output831 .= '</div>
												';
return $output831;
};
$arguments829 = array();

$output828 .= '';

$output828 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure835 = function() use ($renderingContext, $self) {
$output836 = '';

$output836 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure838 = function() use ($renderingContext, $self) {
$array844 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array844)]);
};
$arguments837 = array();
$arguments837['additionalAttributes'] = NULL;
$arguments837['data'] = NULL;
$arguments837['class'] = NULL;
$arguments837['dir'] = NULL;
$arguments837['id'] = NULL;
$arguments837['lang'] = NULL;
$arguments837['style'] = NULL;
$arguments837['title'] = NULL;
$arguments837['accesskey'] = NULL;
$arguments837['tabindex'] = NULL;
$arguments837['onclick'] = NULL;
$arguments837['name'] = NULL;
$arguments837['rel'] = NULL;
$arguments837['rev'] = NULL;
$arguments837['target'] = NULL;
$arguments837['action'] = NULL;
$arguments837['controller'] = NULL;
$arguments837['extensionName'] = NULL;
$arguments837['pluginName'] = NULL;
$arguments837['pageUid'] = NULL;
$arguments837['pageType'] = NULL;
$arguments837['noCache'] = NULL;
$arguments837['noCacheHash'] = NULL;
$arguments837['section'] = NULL;
$arguments837['format'] = NULL;
$arguments837['linkAccessRestrictedPages'] = NULL;
$arguments837['additionalParams'] = NULL;
$arguments837['absolute'] = NULL;
$arguments837['addQueryString'] = NULL;
$arguments837['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments837['addQueryStringMethod'] = NULL;
$arguments837['arguments'] = NULL;
$arguments837['controller'] = 'FormEditor';
$arguments837['action'] = 'index';
// Rendering Array
$array839 = array();
$array840 = array (
);$array839['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array840);
$arguments837['arguments'] = $array839;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure842 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments841 = array();
$arguments841['key'] = NULL;
$arguments841['id'] = NULL;
$arguments841['default'] = NULL;
$arguments841['arguments'] = NULL;
$arguments841['extensionName'] = NULL;
$arguments841['languageKey'] = NULL;
$arguments841['alternativeLanguageKeys'] = NULL;
$arguments841['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments837['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments841, $renderChildrenClosure842, $renderingContext);
// Rendering Array
$array843 = array();
$array843['toggle'] = 'tooltip';
$array843['placement'] = 'right';
$arguments837['data'] = $array843;

$output836 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments837, $renderChildrenClosure838, $renderingContext);

$output836 .= '
												';
return $output836;
};
$arguments834 = array();
$arguments834['if'] = NULL;

$output828 .= '';

$output828 .= '
										';
return $output828;
};
$arguments810 = array();
$arguments810['then'] = NULL;
$arguments810['else'] = NULL;
$arguments810['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array824 = array();
$array825 = array (
);$array824['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array825);
$array824['1'] = ' || ';
$array826 = array (
);$array824['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array826);

$expression827 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments810['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression827(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array824)
					),
					$renderingContext
				);
$arguments810['__thenClosure'] = function() use ($renderingContext, $self) {
$output812 = '';

$output812 .= '
													<div title="';
$array813 = array (
);
$output812 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array813)]);

$output812 .= '">';
$array814 = array (
);
$output812 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array814)]);

$output812 .= '</div>
												';
return $output812;
};
$arguments810['__elseClosures'][] = function() use ($renderingContext, $self) {
$output815 = '';

$output815 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure817 = function() use ($renderingContext, $self) {
$array823 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array823)]);
};
$arguments816 = array();
$arguments816['additionalAttributes'] = NULL;
$arguments816['data'] = NULL;
$arguments816['class'] = NULL;
$arguments816['dir'] = NULL;
$arguments816['id'] = NULL;
$arguments816['lang'] = NULL;
$arguments816['style'] = NULL;
$arguments816['title'] = NULL;
$arguments816['accesskey'] = NULL;
$arguments816['tabindex'] = NULL;
$arguments816['onclick'] = NULL;
$arguments816['name'] = NULL;
$arguments816['rel'] = NULL;
$arguments816['rev'] = NULL;
$arguments816['target'] = NULL;
$arguments816['action'] = NULL;
$arguments816['controller'] = NULL;
$arguments816['extensionName'] = NULL;
$arguments816['pluginName'] = NULL;
$arguments816['pageUid'] = NULL;
$arguments816['pageType'] = NULL;
$arguments816['noCache'] = NULL;
$arguments816['noCacheHash'] = NULL;
$arguments816['section'] = NULL;
$arguments816['format'] = NULL;
$arguments816['linkAccessRestrictedPages'] = NULL;
$arguments816['additionalParams'] = NULL;
$arguments816['absolute'] = NULL;
$arguments816['addQueryString'] = NULL;
$arguments816['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments816['addQueryStringMethod'] = NULL;
$arguments816['arguments'] = NULL;
$arguments816['controller'] = 'FormEditor';
$arguments816['action'] = 'index';
// Rendering Array
$array818 = array();
$array819 = array (
);$array818['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array819);
$arguments816['arguments'] = $array818;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure821 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments820 = array();
$arguments820['key'] = NULL;
$arguments820['id'] = NULL;
$arguments820['default'] = NULL;
$arguments820['arguments'] = NULL;
$arguments820['extensionName'] = NULL;
$arguments820['languageKey'] = NULL;
$arguments820['alternativeLanguageKeys'] = NULL;
$arguments820['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments816['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments820, $renderChildrenClosure821, $renderingContext);
// Rendering Array
$array822 = array();
$array822['toggle'] = 'tooltip';
$array822['placement'] = 'right';
$arguments816['data'] = $array822;

$output815 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments816, $renderChildrenClosure817, $renderingContext);

$output815 .= '
												';
return $output815;
};

$output707 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments810, $renderChildrenClosure811, $renderingContext);

$output707 .= '
									</td>
									<td class="col-control nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
$output865 = '';

$output865 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure867 = function() use ($renderingContext, $self) {
$output868 = '';

$output868 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure870 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments869 = array();
$arguments869['key'] = NULL;
$arguments869['id'] = NULL;
$arguments869['default'] = NULL;
$arguments869['arguments'] = NULL;
$arguments869['extensionName'] = NULL;
$arguments869['languageKey'] = NULL;
$arguments869['alternativeLanguageKeys'] = NULL;
$arguments869['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output868 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments869, $renderChildrenClosure870, $renderingContext)]);

$output868 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments871 = array();
$arguments871['identifier'] = NULL;
$arguments871['size'] = 'small';
$arguments871['overlay'] = NULL;
$arguments871['state'] = 'default';
$arguments871['alternativeMarkupIdentifier'] = NULL;
$arguments871['identifier'] = 'actions-open';

$output868 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments871, $renderChildrenClosure872, $renderingContext);

$output868 .= '</button>
												';
return $output868;
};
$arguments866 = array();

$output865 .= '';

$output865 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure874 = function() use ($renderingContext, $self) {
$output875 = '';

$output875 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure877 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments882 = array();
$arguments882['identifier'] = NULL;
$arguments882['size'] = 'small';
$arguments882['overlay'] = NULL;
$arguments882['state'] = 'default';
$arguments882['alternativeMarkupIdentifier'] = NULL;
$arguments882['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext);
};
$arguments876 = array();
$arguments876['additionalAttributes'] = NULL;
$arguments876['data'] = NULL;
$arguments876['class'] = NULL;
$arguments876['dir'] = NULL;
$arguments876['id'] = NULL;
$arguments876['lang'] = NULL;
$arguments876['style'] = NULL;
$arguments876['title'] = NULL;
$arguments876['accesskey'] = NULL;
$arguments876['tabindex'] = NULL;
$arguments876['onclick'] = NULL;
$arguments876['name'] = NULL;
$arguments876['rel'] = NULL;
$arguments876['rev'] = NULL;
$arguments876['target'] = NULL;
$arguments876['action'] = NULL;
$arguments876['controller'] = NULL;
$arguments876['extensionName'] = NULL;
$arguments876['pluginName'] = NULL;
$arguments876['pageUid'] = NULL;
$arguments876['pageType'] = NULL;
$arguments876['noCache'] = NULL;
$arguments876['noCacheHash'] = NULL;
$arguments876['section'] = NULL;
$arguments876['format'] = NULL;
$arguments876['linkAccessRestrictedPages'] = NULL;
$arguments876['additionalParams'] = NULL;
$arguments876['absolute'] = NULL;
$arguments876['addQueryString'] = NULL;
$arguments876['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments876['addQueryStringMethod'] = NULL;
$arguments876['arguments'] = NULL;
$arguments876['controller'] = 'FormEditor';
$arguments876['action'] = 'index';
// Rendering Array
$array878 = array();
$array879 = array (
);$array878['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array879);
$arguments876['arguments'] = $array878;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments880 = array();
$arguments880['key'] = NULL;
$arguments880['id'] = NULL;
$arguments880['default'] = NULL;
$arguments880['arguments'] = NULL;
$arguments880['extensionName'] = NULL;
$arguments880['languageKey'] = NULL;
$arguments880['alternativeLanguageKeys'] = NULL;
$arguments880['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments876['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments880, $renderChildrenClosure881, $renderingContext);
$arguments876['class'] = 'btn btn-default form-record-open';

$output875 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments876, $renderChildrenClosure877, $renderingContext);

$output875 .= '
												';
return $output875;
};
$arguments873 = array();
$arguments873['if'] = NULL;

$output865 .= '';

$output865 .= '
											';
return $output865;
};
$arguments845 = array();
$arguments845['then'] = NULL;
$arguments845['else'] = NULL;
$arguments845['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array861 = array();
$array862 = array (
);$array861['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array862);
$array861['1'] = ' || ';
$array863 = array (
);$array861['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array863);

$expression864 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments845['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression864(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array861)
					),
					$renderingContext
				);
$arguments845['__thenClosure'] = function() use ($renderingContext, $self) {
$output847 = '';

$output847 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure849 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments848 = array();
$arguments848['key'] = NULL;
$arguments848['id'] = NULL;
$arguments848['default'] = NULL;
$arguments848['arguments'] = NULL;
$arguments848['extensionName'] = NULL;
$arguments848['languageKey'] = NULL;
$arguments848['alternativeLanguageKeys'] = NULL;
$arguments848['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output847 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments848, $renderChildrenClosure849, $renderingContext)]);

$output847 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments850 = array();
$arguments850['identifier'] = NULL;
$arguments850['size'] = 'small';
$arguments850['overlay'] = NULL;
$arguments850['state'] = 'default';
$arguments850['alternativeMarkupIdentifier'] = NULL;
$arguments850['identifier'] = 'actions-open';

$output847 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments850, $renderChildrenClosure851, $renderingContext);

$output847 .= '</button>
												';
return $output847;
};
$arguments845['__elseClosures'][] = function() use ($renderingContext, $self) {
$output852 = '';

$output852 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure854 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure860 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments859 = array();
$arguments859['identifier'] = NULL;
$arguments859['size'] = 'small';
$arguments859['overlay'] = NULL;
$arguments859['state'] = 'default';
$arguments859['alternativeMarkupIdentifier'] = NULL;
$arguments859['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments859, $renderChildrenClosure860, $renderingContext);
};
$arguments853 = array();
$arguments853['additionalAttributes'] = NULL;
$arguments853['data'] = NULL;
$arguments853['class'] = NULL;
$arguments853['dir'] = NULL;
$arguments853['id'] = NULL;
$arguments853['lang'] = NULL;
$arguments853['style'] = NULL;
$arguments853['title'] = NULL;
$arguments853['accesskey'] = NULL;
$arguments853['tabindex'] = NULL;
$arguments853['onclick'] = NULL;
$arguments853['name'] = NULL;
$arguments853['rel'] = NULL;
$arguments853['rev'] = NULL;
$arguments853['target'] = NULL;
$arguments853['action'] = NULL;
$arguments853['controller'] = NULL;
$arguments853['extensionName'] = NULL;
$arguments853['pluginName'] = NULL;
$arguments853['pageUid'] = NULL;
$arguments853['pageType'] = NULL;
$arguments853['noCache'] = NULL;
$arguments853['noCacheHash'] = NULL;
$arguments853['section'] = NULL;
$arguments853['format'] = NULL;
$arguments853['linkAccessRestrictedPages'] = NULL;
$arguments853['additionalParams'] = NULL;
$arguments853['absolute'] = NULL;
$arguments853['addQueryString'] = NULL;
$arguments853['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments853['addQueryStringMethod'] = NULL;
$arguments853['arguments'] = NULL;
$arguments853['controller'] = 'FormEditor';
$arguments853['action'] = 'index';
// Rendering Array
$array855 = array();
$array856 = array (
);$array855['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array856);
$arguments853['arguments'] = $array855;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure858 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments857 = array();
$arguments857['key'] = NULL;
$arguments857['id'] = NULL;
$arguments857['default'] = NULL;
$arguments857['arguments'] = NULL;
$arguments857['extensionName'] = NULL;
$arguments857['languageKey'] = NULL;
$arguments857['alternativeLanguageKeys'] = NULL;
$arguments857['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments853['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments857, $renderChildrenClosure858, $renderingContext);
$arguments853['class'] = 'btn btn-default form-record-open';

$output852 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments853, $renderChildrenClosure854, $renderingContext);

$output852 .= '
												';
return $output852;
};

$output707 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output707 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure885 = function() use ($renderingContext, $self) {
$output937 = '';

$output937 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure939 = function() use ($renderingContext, $self) {
$output940 = '';

$output940 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure942 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments941 = array();
$arguments941['key'] = NULL;
$arguments941['id'] = NULL;
$arguments941['default'] = NULL;
$arguments941['arguments'] = NULL;
$arguments941['extensionName'] = NULL;
$arguments941['languageKey'] = NULL;
$arguments941['alternativeLanguageKeys'] = NULL;
$arguments941['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output940 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments941, $renderChildrenClosure942, $renderingContext)]);

$output940 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure944 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments943 = array();
$arguments943['identifier'] = NULL;
$arguments943['size'] = 'small';
$arguments943['overlay'] = NULL;
$arguments943['state'] = 'default';
$arguments943['alternativeMarkupIdentifier'] = NULL;
$arguments943['identifier'] = 'actions-duplicate';

$output940 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments943, $renderChildrenClosure944, $renderingContext);

$output940 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure946 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments945 = array();
$arguments945['key'] = NULL;
$arguments945['id'] = NULL;
$arguments945['default'] = NULL;
$arguments945['arguments'] = NULL;
$arguments945['extensionName'] = NULL;
$arguments945['languageKey'] = NULL;
$arguments945['alternativeLanguageKeys'] = NULL;
$arguments945['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output940 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments945, $renderChildrenClosure946, $renderingContext)]);

$output940 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments947 = array();
$arguments947['identifier'] = NULL;
$arguments947['size'] = 'small';
$arguments947['overlay'] = NULL;
$arguments947['state'] = 'default';
$arguments947['alternativeMarkupIdentifier'] = NULL;
$arguments947['identifier'] = 'actions-edit-delete';

$output940 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext);

$output940 .= '</button>
												';
return $output940;
};
$arguments938 = array();

$output937 .= '';

$output937 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure950 = function() use ($renderingContext, $self) {
$output951 = '';

$output951 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array952 = array (
);
$output951 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array952)]);

$output951 .= '" data-form-name="';
$array953 = array (
);
$output951 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array953)]);

$output951 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure955 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments954 = array();
$arguments954['key'] = NULL;
$arguments954['id'] = NULL;
$arguments954['default'] = NULL;
$arguments954['arguments'] = NULL;
$arguments954['extensionName'] = NULL;
$arguments954['languageKey'] = NULL;
$arguments954['alternativeLanguageKeys'] = NULL;
$arguments954['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output951 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments954, $renderChildrenClosure955, $renderingContext)]);

$output951 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure957 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments956 = array();
$arguments956['identifier'] = NULL;
$arguments956['size'] = 'small';
$arguments956['overlay'] = NULL;
$arguments956['state'] = 'default';
$arguments956['alternativeMarkupIdentifier'] = NULL;
$arguments956['identifier'] = 'actions-duplicate';

$output951 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments956, $renderChildrenClosure957, $renderingContext);

$output951 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
$output974 = '';

$output974 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure976 = function() use ($renderingContext, $self) {
$output977 = '';

$output977 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array978 = array (
);
$output977 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array978)]);

$output977 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure980 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments979 = array();
$arguments979['key'] = NULL;
$arguments979['id'] = NULL;
$arguments979['default'] = NULL;
$arguments979['arguments'] = NULL;
$arguments979['extensionName'] = NULL;
$arguments979['languageKey'] = NULL;
$arguments979['alternativeLanguageKeys'] = NULL;
$arguments979['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output977 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments979, $renderChildrenClosure980, $renderingContext)]);

$output977 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure982 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments981 = array();
$arguments981['identifier'] = NULL;
$arguments981['size'] = 'small';
$arguments981['overlay'] = NULL;
$arguments981['state'] = 'default';
$arguments981['alternativeMarkupIdentifier'] = NULL;
$arguments981['identifier'] = 'actions-edit-delete';

$output977 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments981, $renderChildrenClosure982, $renderingContext);

$output977 .= '</a>
														';
return $output977;
};
$arguments975 = array();

$output974 .= '';

$output974 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure984 = function() use ($renderingContext, $self) {
$output985 = '';

$output985 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['key'] = NULL;
$arguments986['id'] = NULL;
$arguments986['default'] = NULL;
$arguments986['arguments'] = NULL;
$arguments986['extensionName'] = NULL;
$arguments986['languageKey'] = NULL;
$arguments986['alternativeLanguageKeys'] = NULL;
$arguments986['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output985 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext)]);

$output985 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure989 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments988 = array();
$arguments988['identifier'] = NULL;
$arguments988['size'] = 'small';
$arguments988['overlay'] = NULL;
$arguments988['state'] = 'default';
$arguments988['alternativeMarkupIdentifier'] = NULL;
$arguments988['identifier'] = 'actions-edit-delete';

$output985 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments988, $renderChildrenClosure989, $renderingContext);

$output985 .= '</button>
														';
return $output985;
};
$arguments983 = array();
$arguments983['if'] = NULL;

$output974 .= '';

$output974 .= '
													';
return $output974;
};
$arguments958 = array();
$arguments958['then'] = NULL;
$arguments958['else'] = NULL;
$arguments958['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array971 = array();
$array972 = array (
);$array971['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array972);

$expression973 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments958['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression973(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array971)
					),
					$renderingContext
				);
$arguments958['__thenClosure'] = function() use ($renderingContext, $self) {
$output960 = '';

$output960 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array961 = array (
);
$output960 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array961)]);

$output960 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure963 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments962 = array();
$arguments962['key'] = NULL;
$arguments962['id'] = NULL;
$arguments962['default'] = NULL;
$arguments962['arguments'] = NULL;
$arguments962['extensionName'] = NULL;
$arguments962['languageKey'] = NULL;
$arguments962['alternativeLanguageKeys'] = NULL;
$arguments962['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output960 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments962, $renderChildrenClosure963, $renderingContext)]);

$output960 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure965 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments964 = array();
$arguments964['identifier'] = NULL;
$arguments964['size'] = 'small';
$arguments964['overlay'] = NULL;
$arguments964['state'] = 'default';
$arguments964['alternativeMarkupIdentifier'] = NULL;
$arguments964['identifier'] = 'actions-edit-delete';

$output960 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments964, $renderChildrenClosure965, $renderingContext);

$output960 .= '</a>
														';
return $output960;
};
$arguments958['__elseClosures'][] = function() use ($renderingContext, $self) {
$output966 = '';

$output966 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure968 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments967 = array();
$arguments967['key'] = NULL;
$arguments967['id'] = NULL;
$arguments967['default'] = NULL;
$arguments967['arguments'] = NULL;
$arguments967['extensionName'] = NULL;
$arguments967['languageKey'] = NULL;
$arguments967['alternativeLanguageKeys'] = NULL;
$arguments967['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output966 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments967, $renderChildrenClosure968, $renderingContext)]);

$output966 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure970 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments969 = array();
$arguments969['identifier'] = NULL;
$arguments969['size'] = 'small';
$arguments969['overlay'] = NULL;
$arguments969['state'] = 'default';
$arguments969['alternativeMarkupIdentifier'] = NULL;
$arguments969['identifier'] = 'actions-edit-delete';

$output966 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments969, $renderChildrenClosure970, $renderingContext);

$output966 .= '</button>
														';
return $output966;
};

$output951 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments958, $renderChildrenClosure959, $renderingContext);

$output951 .= '
												';
return $output951;
};
$arguments949 = array();
$arguments949['if'] = NULL;

$output937 .= '';

$output937 .= '
											';
return $output937;
};
$arguments884 = array();
$arguments884['then'] = NULL;
$arguments884['else'] = NULL;
$arguments884['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array934 = array();
$array935 = array (
);$array934['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array935);

$expression936 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments884['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression936(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array934)
					),
					$renderingContext
				);
$arguments884['__thenClosure'] = function() use ($renderingContext, $self) {
$output886 = '';

$output886 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments887 = array();
$arguments887['key'] = NULL;
$arguments887['id'] = NULL;
$arguments887['default'] = NULL;
$arguments887['arguments'] = NULL;
$arguments887['extensionName'] = NULL;
$arguments887['languageKey'] = NULL;
$arguments887['alternativeLanguageKeys'] = NULL;
$arguments887['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext)]);

$output886 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure890 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments889 = array();
$arguments889['identifier'] = NULL;
$arguments889['size'] = 'small';
$arguments889['overlay'] = NULL;
$arguments889['state'] = 'default';
$arguments889['alternativeMarkupIdentifier'] = NULL;
$arguments889['identifier'] = 'actions-duplicate';

$output886 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments889, $renderChildrenClosure890, $renderingContext);

$output886 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure892 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments891 = array();
$arguments891['key'] = NULL;
$arguments891['id'] = NULL;
$arguments891['default'] = NULL;
$arguments891['arguments'] = NULL;
$arguments891['extensionName'] = NULL;
$arguments891['languageKey'] = NULL;
$arguments891['alternativeLanguageKeys'] = NULL;
$arguments891['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments891, $renderChildrenClosure892, $renderingContext)]);

$output886 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure894 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments893 = array();
$arguments893['identifier'] = NULL;
$arguments893['size'] = 'small';
$arguments893['overlay'] = NULL;
$arguments893['state'] = 'default';
$arguments893['alternativeMarkupIdentifier'] = NULL;
$arguments893['identifier'] = 'actions-edit-delete';

$output886 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments893, $renderChildrenClosure894, $renderingContext);

$output886 .= '</button>
												';
return $output886;
};
$arguments884['__elseClosures'][] = function() use ($renderingContext, $self) {
$output895 = '';

$output895 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array896 = array (
);
$output895 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array896)]);

$output895 .= '" data-form-name="';
$array897 = array (
);
$output895 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array897)]);

$output895 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure899 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments898 = array();
$arguments898['key'] = NULL;
$arguments898['id'] = NULL;
$arguments898['default'] = NULL;
$arguments898['arguments'] = NULL;
$arguments898['extensionName'] = NULL;
$arguments898['languageKey'] = NULL;
$arguments898['alternativeLanguageKeys'] = NULL;
$arguments898['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output895 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments898, $renderChildrenClosure899, $renderingContext)]);

$output895 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure901 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments900 = array();
$arguments900['identifier'] = NULL;
$arguments900['size'] = 'small';
$arguments900['overlay'] = NULL;
$arguments900['state'] = 'default';
$arguments900['alternativeMarkupIdentifier'] = NULL;
$arguments900['identifier'] = 'actions-duplicate';

$output895 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments900, $renderChildrenClosure901, $renderingContext);

$output895 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
$output918 = '';

$output918 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure920 = function() use ($renderingContext, $self) {
$output921 = '';

$output921 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array922 = array (
);
$output921 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array922)]);

$output921 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure924 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments923 = array();
$arguments923['key'] = NULL;
$arguments923['id'] = NULL;
$arguments923['default'] = NULL;
$arguments923['arguments'] = NULL;
$arguments923['extensionName'] = NULL;
$arguments923['languageKey'] = NULL;
$arguments923['alternativeLanguageKeys'] = NULL;
$arguments923['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output921 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments923, $renderChildrenClosure924, $renderingContext)]);

$output921 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure926 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments925 = array();
$arguments925['identifier'] = NULL;
$arguments925['size'] = 'small';
$arguments925['overlay'] = NULL;
$arguments925['state'] = 'default';
$arguments925['alternativeMarkupIdentifier'] = NULL;
$arguments925['identifier'] = 'actions-edit-delete';

$output921 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments925, $renderChildrenClosure926, $renderingContext);

$output921 .= '</a>
														';
return $output921;
};
$arguments919 = array();

$output918 .= '';

$output918 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure928 = function() use ($renderingContext, $self) {
$output929 = '';

$output929 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure931 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments930 = array();
$arguments930['key'] = NULL;
$arguments930['id'] = NULL;
$arguments930['default'] = NULL;
$arguments930['arguments'] = NULL;
$arguments930['extensionName'] = NULL;
$arguments930['languageKey'] = NULL;
$arguments930['alternativeLanguageKeys'] = NULL;
$arguments930['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output929 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments930, $renderChildrenClosure931, $renderingContext)]);

$output929 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure933 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments932 = array();
$arguments932['identifier'] = NULL;
$arguments932['size'] = 'small';
$arguments932['overlay'] = NULL;
$arguments932['state'] = 'default';
$arguments932['alternativeMarkupIdentifier'] = NULL;
$arguments932['identifier'] = 'actions-edit-delete';

$output929 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments932, $renderChildrenClosure933, $renderingContext);

$output929 .= '</button>
														';
return $output929;
};
$arguments927 = array();
$arguments927['if'] = NULL;

$output918 .= '';

$output918 .= '
													';
return $output918;
};
$arguments902 = array();
$arguments902['then'] = NULL;
$arguments902['else'] = NULL;
$arguments902['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array915 = array();
$array916 = array (
);$array915['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array916);

$expression917 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments902['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression917(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array915)
					),
					$renderingContext
				);
$arguments902['__thenClosure'] = function() use ($renderingContext, $self) {
$output904 = '';

$output904 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array905 = array (
);
$output904 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array905)]);

$output904 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure907 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments906 = array();
$arguments906['key'] = NULL;
$arguments906['id'] = NULL;
$arguments906['default'] = NULL;
$arguments906['arguments'] = NULL;
$arguments906['extensionName'] = NULL;
$arguments906['languageKey'] = NULL;
$arguments906['alternativeLanguageKeys'] = NULL;
$arguments906['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output904 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments906, $renderChildrenClosure907, $renderingContext)]);

$output904 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure909 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments908 = array();
$arguments908['identifier'] = NULL;
$arguments908['size'] = 'small';
$arguments908['overlay'] = NULL;
$arguments908['state'] = 'default';
$arguments908['alternativeMarkupIdentifier'] = NULL;
$arguments908['identifier'] = 'actions-edit-delete';

$output904 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments908, $renderChildrenClosure909, $renderingContext);

$output904 .= '</a>
														';
return $output904;
};
$arguments902['__elseClosures'][] = function() use ($renderingContext, $self) {
$output910 = '';

$output910 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure912 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments911 = array();
$arguments911['key'] = NULL;
$arguments911['id'] = NULL;
$arguments911['default'] = NULL;
$arguments911['arguments'] = NULL;
$arguments911['extensionName'] = NULL;
$arguments911['languageKey'] = NULL;
$arguments911['alternativeLanguageKeys'] = NULL;
$arguments911['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output910 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments911, $renderChildrenClosure912, $renderingContext)]);

$output910 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure914 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments913 = array();
$arguments913['identifier'] = NULL;
$arguments913['size'] = 'small';
$arguments913['overlay'] = NULL;
$arguments913['state'] = 'default';
$arguments913['alternativeMarkupIdentifier'] = NULL;
$arguments913['identifier'] = 'actions-edit-delete';

$output910 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments913, $renderChildrenClosure914, $renderingContext);

$output910 .= '</button>
														';
return $output910;
};

$output895 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext);

$output895 .= '
												';
return $output895;
};

$output707 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments884, $renderChildrenClosure885, $renderingContext);

$output707 .= '
										</div>
									</td>
									<td class="nowrap">';
$array990 = array (
);
$output707 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array990)]);

$output707 .= '</td>
									<td class="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure992 = function() use ($renderingContext, $self) {
$output1002 = '';

$output1002 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1004 = function() use ($renderingContext, $self) {
$output1005 = '';

$output1005 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array1006 = array (
);
$output1005 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1006)]);

$output1005 .= '" data-form-name="';
$array1007 = array (
);
$output1005 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1007)]);

$output1005 .= '">';
$array1008 = array (
);
$output1005 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1008)]);

$output1005 .= '</a>
											';
return $output1005;
};
$arguments1003 = array();

$output1002 .= '';

$output1002 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1010 = function() use ($renderingContext, $self) {
$output1011 = '';

$output1011 .= '
												';
$array1012 = array (
);
$output1011 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1012)]);

$output1011 .= '
											';
return $output1011;
};
$arguments1009 = array();
$arguments1009['if'] = NULL;

$output1002 .= '';

$output1002 .= '
										';
return $output1002;
};
$arguments991 = array();
$arguments991['then'] = NULL;
$arguments991['else'] = NULL;
$arguments991['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array999 = array();
$array1000 = array (
);$array999['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1000);

$expression1001 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments991['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1001(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array999)
					),
					$renderingContext
				);
$arguments991['__thenClosure'] = function() use ($renderingContext, $self) {
$output993 = '';

$output993 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array994 = array (
);
$output993 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array994)]);

$output993 .= '" data-form-name="';
$array995 = array (
);
$output993 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array995)]);

$output993 .= '">';
$array996 = array (
);
$output993 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array996)]);

$output993 .= '</a>
											';
return $output993;
};
$arguments991['__elseClosures'][] = function() use ($renderingContext, $self) {
$output997 = '';

$output997 .= '
												';
$array998 = array (
);
$output997 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array998)]);

$output997 .= '
											';
return $output997;
};

$output707 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments991, $renderChildrenClosure992, $renderingContext);

$output707 .= '
									</td>
								</tr>
							';
return $output707;
};
$arguments704 = array();
$arguments704['each'] = NULL;
$arguments704['as'] = NULL;
$arguments704['key'] = NULL;
$arguments704['reverse'] = false;
$arguments704['iteration'] = NULL;
$array706 = array (
);$arguments704['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array706);
$arguments704['as'] = 'form';

$output693 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments704, $renderChildrenClosure705, $renderingContext);

$output693 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output693;
};
$arguments691['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1013 = '';

$output1013 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure1015 = function() use ($renderingContext, $self) {
$output1018 = '';

$output1018 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1020 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1019 = array();
$arguments1019['key'] = NULL;
$arguments1019['id'] = NULL;
$arguments1019['default'] = NULL;
$arguments1019['arguments'] = NULL;
$arguments1019['extensionName'] = NULL;
$arguments1019['languageKey'] = NULL;
$arguments1019['alternativeLanguageKeys'] = NULL;
$arguments1019['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message';

$output1018 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1019, $renderChildrenClosure1020, $renderingContext)]);

$output1018 .= '</p>
			<a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1022 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1021 = array();
$arguments1021['key'] = NULL;
$arguments1021['id'] = NULL;
$arguments1021['default'] = NULL;
$arguments1021['arguments'] = NULL;
$arguments1021['extensionName'] = NULL;
$arguments1021['languageKey'] = NULL;
$arguments1021['alternativeLanguageKeys'] = NULL;
$arguments1021['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output1018 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1021, $renderChildrenClosure1022, $renderingContext)]);

$output1018 .= '</a>
		';
return $output1018;
};
$arguments1014 = array();
$arguments1014['message'] = NULL;
$arguments1014['title'] = NULL;
$arguments1014['state'] = -2;
$arguments1014['iconName'] = NULL;
$arguments1014['disableIcon'] = false;
$arguments1014['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1017 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1016 = array();
$arguments1016['key'] = NULL;
$arguments1016['id'] = NULL;
$arguments1016['default'] = NULL;
$arguments1016['arguments'] = NULL;
$arguments1016['extensionName'] = NULL;
$arguments1016['languageKey'] = NULL;
$arguments1016['alternativeLanguageKeys'] = NULL;
$arguments1016['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title';
$arguments1014['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1016, $renderChildrenClosure1017, $renderingContext);
$renderChildrenClosure1015 = ($arguments1014['message'] !== null) ? function() use ($arguments1014) { return $arguments1014['message']; } : $renderChildrenClosure1015;
$output1013 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments1014, $renderChildrenClosure1015, $renderingContext);

$output1013 .= '
	';
return $output1013;
};

$output683 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext);

$output683 .= '

';
return $output683;
};
$arguments681 = array();
$arguments681['name'] = NULL;
$arguments681['name'] = 'MainContent';

$output678 .= NULL;

$output678 .= '

';

return $output678;
}


}
#