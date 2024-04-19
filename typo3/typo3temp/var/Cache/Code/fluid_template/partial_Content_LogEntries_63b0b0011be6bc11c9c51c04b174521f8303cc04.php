<?php

class partial_Content_LogEntries_63b0b0011be6bc11c9c51c04b174521f8303cc04 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'belog' => 
  array (
    0 => 'TYPO3\\CMS\\Belog\\ViewHelpers',
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

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
	<div>
		<h2>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'overview';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
		</h2>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'timeInfo';
// Rendering Array
$array11 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['date'] = NULL;
$arguments12['format'] = '';
$arguments12['base'] = NULL;
$output14 = '';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array15);

$output14 .= ' ';
$array16 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array16);
$arguments12['format'] = $output14;
$output17 = '';

$output17 .= '@';
$array18 = array (
);
$output17 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array18);
$arguments12['date'] = $output17;
$renderChildrenClosure13 = ($arguments12['date'] !== null) ? function() use ($arguments12) { return $arguments12['date']; } : $renderChildrenClosure13;$array11['0'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['date'] = NULL;
$arguments19['format'] = '';
$arguments19['base'] = NULL;
$output21 = '';
$array22 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array22);

$output21 .= ' ';
$array23 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array23);
$arguments19['format'] = $output21;
$output24 = '';

$output24 .= '@';
$array25 = array (
);
$output24 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array25);
$arguments19['date'] = $output24;
$renderChildrenClosure20 = ($arguments19['date'] !== null) ? function() use ($arguments19) { return $arguments19['date']; } : $renderChildrenClosure20;$array11['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
$arguments9['arguments'] = $array11;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output6 .= '
		<p>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
					<br />
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$arguments36['key'] = 'pagenameWithUID';
// Rendering Array
$array38 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['pid'] = NULL;
$arguments39['titleLimit'] = 20;
$array41 = array (
);$arguments39['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array41);
$array38['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
$array42 = array (
);$array38['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array42);
$arguments36['arguments'] = $array38;

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
				';
return $output35;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array33);
$array32['1'] = ' > 0';

$expression34 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
			';
return $output29;
};
$arguments26 = array();
$arguments26['each'] = NULL;
$arguments26['as'] = NULL;
$arguments26['key'] = NULL;
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$array28 = array (
);$arguments26['each'] = $renderingContext->getVariableProvider()->getByPath('groupedLogEntries', $array28);
$arguments26['as'] = 'pidEntry';
$arguments26['key'] = 'pid';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output6 .= '
		</p>
	</div>
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.groupByPage', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
	<div>
		<h2>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['key'] = NULL;
$arguments334['id'] = NULL;
$arguments334['default'] = NULL;
$arguments334['arguments'] = NULL;
$arguments334['extensionName'] = NULL;
$arguments334['languageKey'] = NULL;
$arguments334['alternativeLanguageKeys'] = NULL;
$arguments334['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array336 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['key'] = NULL;
$arguments337['id'] = NULL;
$arguments337['default'] = NULL;
$arguments337['arguments'] = NULL;
$arguments337['extensionName'] = NULL;
$arguments337['languageKey'] = NULL;
$arguments337['alternativeLanguageKeys'] = NULL;
$arguments337['key'] = 'forNonPageRelatedActions';
$array336['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['date'] = NULL;
$arguments339['format'] = '';
$arguments339['base'] = NULL;
$output341 = '';
$array342 = array (
);
$output341 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array342);

$output341 .= ' ';
$array343 = array (
);
$output341 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array343);
$arguments339['format'] = $output341;
$output344 = '';

$output344 .= '@';
$array345 = array (
);
$output344 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array345);
$arguments339['date'] = $output344;
$renderChildrenClosure340 = ($arguments339['date'] !== null) ? function() use ($arguments339) { return $arguments339['date']; } : $renderChildrenClosure340;$array336['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['date'] = NULL;
$arguments346['format'] = '';
$arguments346['base'] = NULL;
$output348 = '';
$array349 = array (
);
$output348 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array349);

$output348 .= ' ';
$array350 = array (
);
$output348 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array350);
$arguments346['format'] = $output348;
$output351 = '';

$output351 .= '@';
$array352 = array (
);
$output351 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array352);
$arguments346['date'] = $output351;
$renderChildrenClosure347 = ($arguments346['date'] !== null) ? function() use ($arguments346) { return $arguments346['date']; } : $renderChildrenClosure347;$array336['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);
$arguments334['arguments'] = $array336;

$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext)]);

$output333 .= '
							';
return $output333;
};
$arguments328 = array();
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$arguments328['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array331);
$array330['1'] = ' == -1';

$expression332 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments328['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments328['__thenClosure'] = $renderChildrenClosure329;

$output327 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments359 = array();
$arguments359['key'] = NULL;
$arguments359['id'] = NULL;
$arguments359['default'] = NULL;
$arguments359['arguments'] = NULL;
$arguments359['extensionName'] = NULL;
$arguments359['languageKey'] = NULL;
$arguments359['alternativeLanguageKeys'] = NULL;
$arguments359['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array361 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['key'] = NULL;
$arguments362['id'] = NULL;
$arguments362['default'] = NULL;
$arguments362['arguments'] = NULL;
$arguments362['extensionName'] = NULL;
$arguments362['languageKey'] = NULL;
$arguments362['alternativeLanguageKeys'] = NULL;
$arguments362['key'] = 'forRootLevel';
$array361['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['date'] = NULL;
$arguments364['format'] = '';
$arguments364['base'] = NULL;
$output366 = '';
$array367 = array (
);
$output366 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array367);

$output366 .= ' ';
$array368 = array (
);
$output366 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array368);
$arguments364['format'] = $output366;
$output369 = '';

$output369 .= '@';
$array370 = array (
);
$output369 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array370);
$arguments364['date'] = $output369;
$renderChildrenClosure365 = ($arguments364['date'] !== null) ? function() use ($arguments364) { return $arguments364['date']; } : $renderChildrenClosure365;$array361['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments371 = array();
$arguments371['date'] = NULL;
$arguments371['format'] = '';
$arguments371['base'] = NULL;
$output373 = '';
$array374 = array (
);
$output373 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array374);

$output373 .= ' ';
$array375 = array (
);
$output373 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array375);
$arguments371['format'] = $output373;
$output376 = '';

$output376 .= '@';
$array377 = array (
);
$output376 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array377);
$arguments371['date'] = $output376;
$renderChildrenClosure372 = ($arguments371['date'] !== null) ? function() use ($arguments371) { return $arguments371['date']; } : $renderChildrenClosure372;$array361['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);
$arguments359['arguments'] = $array361;

$output358 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext)]);

$output358 .= '
							';
return $output358;
};
$arguments353 = array();
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$arguments353['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array356);
$array355['1'] = ' == 0';

$expression357 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments353['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array355)
					),
					$renderingContext
				);
$arguments353['__thenClosure'] = $renderChildrenClosure354;

$output327 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output327 .= '
						';
return $output327;
};
$arguments325 = array();

$output324 .= '';

$output324 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments381 = array();

$output380 .= NULL;

$output380 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments383 = array();
$arguments383['key'] = NULL;
$arguments383['id'] = NULL;
$arguments383['default'] = NULL;
$arguments383['arguments'] = NULL;
$arguments383['extensionName'] = NULL;
$arguments383['languageKey'] = NULL;
$arguments383['alternativeLanguageKeys'] = NULL;
$arguments383['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array385 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments386 = array();
$arguments386['key'] = NULL;
$arguments386['id'] = NULL;
$arguments386['default'] = NULL;
$arguments386['arguments'] = NULL;
$arguments386['extensionName'] = NULL;
$arguments386['languageKey'] = NULL;
$arguments386['alternativeLanguageKeys'] = NULL;
$arguments386['key'] = 'forPage';
// Rendering Array
$array388 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['pid'] = NULL;
$arguments389['titleLimit'] = 20;
$array391 = array (
);$arguments389['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array391);
$array388['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);
$array392 = array (
);$array388['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array392);
$arguments386['arguments'] = $array388;
$array385['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['date'] = NULL;
$arguments393['format'] = '';
$arguments393['base'] = NULL;
$output395 = '';
$array396 = array (
);
$output395 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array396);

$output395 .= ' ';
$array397 = array (
);
$output395 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array397);
$arguments393['format'] = $output395;
$output398 = '';

$output398 .= '@';
$array399 = array (
);
$output398 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array399);
$arguments393['date'] = $output398;
$renderChildrenClosure394 = ($arguments393['date'] !== null) ? function() use ($arguments393) { return $arguments393['date']; } : $renderChildrenClosure394;$array385['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['date'] = NULL;
$arguments400['format'] = '';
$arguments400['base'] = NULL;
$output402 = '';
$array403 = array (
);
$output402 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array403);

$output402 .= ' ';
$array404 = array (
);
$output402 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array404);
$arguments400['format'] = $output402;
$output405 = '';

$output405 .= '@';
$array406 = array (
);
$output405 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array406);
$arguments400['date'] = $output405;
$renderChildrenClosure401 = ($arguments400['date'] !== null) ? function() use ($arguments400) { return $arguments400['date']; } : $renderChildrenClosure401;$array385['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);
$arguments383['arguments'] = $array385;

$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext)]);

$output380 .= '
						';
return $output380;
};
$arguments378 = array();
$arguments378['if'] = NULL;

$output324 .= '';

$output324 .= '
					';
return $output324;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array321 = array();
$array322 = array (
);$array321['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array322);
$array321['1'] = ' < 1';

$expression323 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 1);};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression323(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array321)
					),
					$renderingContext
				);
$arguments241['__thenClosure'] = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
								';
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
$arguments250['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array252 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$arguments253['key'] = 'forNonPageRelatedActions';
$array252['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['date'] = NULL;
$arguments255['format'] = '';
$arguments255['base'] = NULL;
$output257 = '';
$array258 = array (
);
$output257 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array258);

$output257 .= ' ';
$array259 = array (
);
$output257 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array259);
$arguments255['format'] = $output257;
$output260 = '';

$output260 .= '@';
$array261 = array (
);
$output260 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array261);
$arguments255['date'] = $output260;
$renderChildrenClosure256 = ($arguments255['date'] !== null) ? function() use ($arguments255) { return $arguments255['date']; } : $renderChildrenClosure256;$array252['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['date'] = NULL;
$arguments262['format'] = '';
$arguments262['base'] = NULL;
$output264 = '';
$array265 = array (
);
$output264 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array265);

$output264 .= ' ';
$array266 = array (
);
$output264 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array266);
$arguments262['format'] = $output264;
$output267 = '';

$output267 .= '@';
$array268 = array (
);
$output267 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array268);
$arguments262['date'] = $output267;
$renderChildrenClosure263 = ($arguments262['date'] !== null) ? function() use ($arguments262) { return $arguments262['date']; } : $renderChildrenClosure263;$array252['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);
$arguments250['arguments'] = $array252;

$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output249 .= '
							';
return $output249;
};
$arguments244 = array();
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$arguments244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array247);
$array246['1'] = ' == -1';

$expression248 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array246)
					),
					$renderingContext
				);
$arguments244['__thenClosure'] = $renderChildrenClosure245;

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['key'] = NULL;
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['languageKey'] = NULL;
$arguments275['alternativeLanguageKeys'] = NULL;
$arguments275['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array277 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['key'] = NULL;
$arguments278['id'] = NULL;
$arguments278['default'] = NULL;
$arguments278['arguments'] = NULL;
$arguments278['extensionName'] = NULL;
$arguments278['languageKey'] = NULL;
$arguments278['alternativeLanguageKeys'] = NULL;
$arguments278['key'] = 'forRootLevel';
$array277['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['date'] = NULL;
$arguments280['format'] = '';
$arguments280['base'] = NULL;
$output282 = '';
$array283 = array (
);
$output282 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array283);

$output282 .= ' ';
$array284 = array (
);
$output282 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array284);
$arguments280['format'] = $output282;
$output285 = '';

$output285 .= '@';
$array286 = array (
);
$output285 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array286);
$arguments280['date'] = $output285;
$renderChildrenClosure281 = ($arguments280['date'] !== null) ? function() use ($arguments280) { return $arguments280['date']; } : $renderChildrenClosure281;$array277['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['date'] = NULL;
$arguments287['format'] = '';
$arguments287['base'] = NULL;
$output289 = '';
$array290 = array (
);
$output289 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array290);

$output289 .= ' ';
$array291 = array (
);
$output289 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array291);
$arguments287['format'] = $output289;
$output292 = '';

$output292 .= '@';
$array293 = array (
);
$output292 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array293);
$arguments287['date'] = $output292;
$renderChildrenClosure288 = ($arguments287['date'] !== null) ? function() use ($arguments287) { return $arguments287['date']; } : $renderChildrenClosure288;$array277['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);
$arguments275['arguments'] = $array277;

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext)]);

$output274 .= '
							';
return $output274;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array272);
$array271['1'] = ' == 0';

$expression273 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = $renderChildrenClosure270;

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output243 .= '
						';
return $output243;
};
$arguments241['__elseClosures'][] = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments295 = array();

$output294 .= NULL;

$output294 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['key'] = NULL;
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$arguments297['languageKey'] = NULL;
$arguments297['alternativeLanguageKeys'] = NULL;
$arguments297['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array299 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['key'] = NULL;
$arguments300['id'] = NULL;
$arguments300['default'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['languageKey'] = NULL;
$arguments300['alternativeLanguageKeys'] = NULL;
$arguments300['key'] = 'forPage';
// Rendering Array
$array302 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['pid'] = NULL;
$arguments303['titleLimit'] = 20;
$array305 = array (
);$arguments303['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array305);
$array302['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);
$array306 = array (
);$array302['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array306);
$arguments300['arguments'] = $array302;
$array299['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['date'] = NULL;
$arguments307['format'] = '';
$arguments307['base'] = NULL;
$output309 = '';
$array310 = array (
);
$output309 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array310);

$output309 .= ' ';
$array311 = array (
);
$output309 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array311);
$arguments307['format'] = $output309;
$output312 = '';

$output312 .= '@';
$array313 = array (
);
$output312 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array313);
$arguments307['date'] = $output312;
$renderChildrenClosure308 = ($arguments307['date'] !== null) ? function() use ($arguments307) { return $arguments307['date']; } : $renderChildrenClosure308;$array299['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['date'] = NULL;
$arguments314['format'] = '';
$arguments314['base'] = NULL;
$output316 = '';
$array317 = array (
);
$output316 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array317);

$output316 .= ' ';
$array318 = array (
);
$output316 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array318);
$arguments314['format'] = $output316;
$output319 = '';

$output319 .= '@';
$array320 = array (
);
$output319 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array320);
$arguments314['date'] = $output319;
$renderChildrenClosure315 = ($arguments314['date'] !== null) ? function() use ($arguments314) { return $arguments314['date']; } : $renderChildrenClosure315;$array299['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);
$arguments297['arguments'] = $array299;

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output294 .= '
						';
return $output294;
};

$output240 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
				';
return $output240;
};
$arguments238 = array();

$output237 .= '';

$output237 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['key'] = NULL;
$arguments410['id'] = NULL;
$arguments410['default'] = NULL;
$arguments410['arguments'] = NULL;
$arguments410['extensionName'] = NULL;
$arguments410['languageKey'] = NULL;
$arguments410['alternativeLanguageKeys'] = NULL;
$arguments410['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array412 = array();
$array412['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['date'] = NULL;
$arguments413['format'] = '';
$arguments413['base'] = NULL;
$output415 = '';
$array416 = array (
);
$output415 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array416);

$output415 .= ' ';
$array417 = array (
);
$output415 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array417);
$arguments413['format'] = $output415;
$output418 = '';

$output418 .= '@';
$array419 = array (
);
$output418 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array419);
$arguments413['date'] = $output418;
$renderChildrenClosure414 = ($arguments413['date'] !== null) ? function() use ($arguments413) { return $arguments413['date']; } : $renderChildrenClosure414;$array412['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['date'] = NULL;
$arguments420['format'] = '';
$arguments420['base'] = NULL;
$output422 = '';
$array423 = array (
);
$output422 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array423);

$output422 .= ' ';
$array424 = array (
);
$output422 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array424);
$arguments420['format'] = $output422;
$output425 = '';

$output425 .= '@';
$array426 = array (
);
$output425 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array426);
$arguments420['date'] = $output425;
$renderChildrenClosure421 = ($arguments420['date'] !== null) ? function() use ($arguments420) { return $arguments420['date']; } : $renderChildrenClosure421;$array412['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);
$arguments410['arguments'] = $array412;

$output409 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext)]);

$output409 .= '
				';
return $output409;
};
$arguments407 = array();
$arguments407['if'] = NULL;

$output237 .= '';

$output237 .= '
			';
return $output237;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array234 = array();
$array235 = array (
);$array234['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.groupByPage', $array235);

$expression236 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression236(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array234)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['key'] = NULL;
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$arguments143['languageKey'] = NULL;
$arguments143['alternativeLanguageKeys'] = NULL;
$arguments143['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array145 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['languageKey'] = NULL;
$arguments146['alternativeLanguageKeys'] = NULL;
$arguments146['key'] = 'forNonPageRelatedActions';
$array145['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['date'] = NULL;
$arguments148['format'] = '';
$arguments148['base'] = NULL;
$output150 = '';
$array151 = array (
);
$output150 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array151);

$output150 .= ' ';
$array152 = array (
);
$output150 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array152);
$arguments148['format'] = $output150;
$output153 = '';

$output153 .= '@';
$array154 = array (
);
$output153 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array154);
$arguments148['date'] = $output153;
$renderChildrenClosure149 = ($arguments148['date'] !== null) ? function() use ($arguments148) { return $arguments148['date']; } : $renderChildrenClosure149;$array145['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['date'] = NULL;
$arguments155['format'] = '';
$arguments155['base'] = NULL;
$output157 = '';
$array158 = array (
);
$output157 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array158);

$output157 .= ' ';
$array159 = array (
);
$output157 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array159);
$arguments155['format'] = $output157;
$output160 = '';

$output160 .= '@';
$array161 = array (
);
$output160 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array161);
$arguments155['date'] = $output160;
$renderChildrenClosure156 = ($arguments155['date'] !== null) ? function() use ($arguments155) { return $arguments155['date']; } : $renderChildrenClosure156;$array145['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);
$arguments143['arguments'] = $array145;

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output142 .= '
							';
return $output142;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array140);
$array139['1'] = ' == -1';

$expression141 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments137['__thenClosure'] = $renderChildrenClosure138;

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['key'] = NULL;
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$arguments168['languageKey'] = NULL;
$arguments168['alternativeLanguageKeys'] = NULL;
$arguments168['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array170 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['languageKey'] = NULL;
$arguments171['alternativeLanguageKeys'] = NULL;
$arguments171['key'] = 'forRootLevel';
$array170['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['date'] = NULL;
$arguments173['format'] = '';
$arguments173['base'] = NULL;
$output175 = '';
$array176 = array (
);
$output175 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array176);

$output175 .= ' ';
$array177 = array (
);
$output175 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array177);
$arguments173['format'] = $output175;
$output178 = '';

$output178 .= '@';
$array179 = array (
);
$output178 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array179);
$arguments173['date'] = $output178;
$renderChildrenClosure174 = ($arguments173['date'] !== null) ? function() use ($arguments173) { return $arguments173['date']; } : $renderChildrenClosure174;$array170['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['date'] = NULL;
$arguments180['format'] = '';
$arguments180['base'] = NULL;
$output182 = '';
$array183 = array (
);
$output182 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array183);

$output182 .= ' ';
$array184 = array (
);
$output182 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array184);
$arguments180['format'] = $output182;
$output185 = '';

$output185 .= '@';
$array186 = array (
);
$output185 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array186);
$arguments180['date'] = $output185;
$renderChildrenClosure181 = ($arguments180['date'] !== null) ? function() use ($arguments180) { return $arguments180['date']; } : $renderChildrenClosure181;$array170['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);
$arguments168['arguments'] = $array170;

$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output167 .= '
							';
return $output167;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array165);
$array164['1'] = ' == 0';

$expression166 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = $renderChildrenClosure163;

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output136 .= '
						';
return $output136;
};
$arguments134 = array();

$output133 .= '';

$output133 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments190 = array();

$output189 .= NULL;

$output189 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['key'] = NULL;
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['languageKey'] = NULL;
$arguments192['alternativeLanguageKeys'] = NULL;
$arguments192['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array194 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['languageKey'] = NULL;
$arguments195['alternativeLanguageKeys'] = NULL;
$arguments195['key'] = 'forPage';
// Rendering Array
$array197 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['pid'] = NULL;
$arguments198['titleLimit'] = 20;
$array200 = array (
);$arguments198['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array200);
$array197['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);
$array201 = array (
);$array197['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array201);
$arguments195['arguments'] = $array197;
$array194['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['date'] = NULL;
$arguments202['format'] = '';
$arguments202['base'] = NULL;
$output204 = '';
$array205 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array205);

$output204 .= ' ';
$array206 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array206);
$arguments202['format'] = $output204;
$output207 = '';

$output207 .= '@';
$array208 = array (
);
$output207 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array208);
$arguments202['date'] = $output207;
$renderChildrenClosure203 = ($arguments202['date'] !== null) ? function() use ($arguments202) { return $arguments202['date']; } : $renderChildrenClosure203;$array194['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['date'] = NULL;
$arguments209['format'] = '';
$arguments209['base'] = NULL;
$output211 = '';
$array212 = array (
);
$output211 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array212);

$output211 .= ' ';
$array213 = array (
);
$output211 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array213);
$arguments209['format'] = $output211;
$output214 = '';

$output214 .= '@';
$array215 = array (
);
$output214 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array215);
$arguments209['date'] = $output214;
$renderChildrenClosure210 = ($arguments209['date'] !== null) ? function() use ($arguments209) { return $arguments209['date']; } : $renderChildrenClosure210;$array194['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);
$arguments192['arguments'] = $array194;

$output189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext)]);

$output189 .= '
						';
return $output189;
};
$arguments187 = array();
$arguments187['if'] = NULL;

$output133 .= '';

$output133 .= '
					';
return $output133;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array131);
$array130['1'] = ' < 1';

$expression132 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 1);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['key'] = NULL;
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['languageKey'] = NULL;
$arguments59['alternativeLanguageKeys'] = NULL;
$arguments59['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array61 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'forNonPageRelatedActions';
$array61['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['date'] = NULL;
$arguments64['format'] = '';
$arguments64['base'] = NULL;
$output66 = '';
$array67 = array (
);
$output66 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array67);

$output66 .= ' ';
$array68 = array (
);
$output66 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array68);
$arguments64['format'] = $output66;
$output69 = '';

$output69 .= '@';
$array70 = array (
);
$output69 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array70);
$arguments64['date'] = $output69;
$renderChildrenClosure65 = ($arguments64['date'] !== null) ? function() use ($arguments64) { return $arguments64['date']; } : $renderChildrenClosure65;$array61['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['date'] = NULL;
$arguments71['format'] = '';
$arguments71['base'] = NULL;
$output73 = '';
$array74 = array (
);
$output73 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array74);

$output73 .= ' ';
$array75 = array (
);
$output73 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array75);
$arguments71['format'] = $output73;
$output76 = '';

$output76 .= '@';
$array77 = array (
);
$output76 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array77);
$arguments71['date'] = $output76;
$renderChildrenClosure72 = ($arguments71['date'] !== null) ? function() use ($arguments71) { return $arguments71['date']; } : $renderChildrenClosure72;$array61['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
$arguments59['arguments'] = $array61;

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output58 .= '
							';
return $output58;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array56);
$array55['1'] = ' == -1';

$expression57 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$arguments84['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array86 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'forRootLevel';
$array86['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['date'] = NULL;
$arguments89['format'] = '';
$arguments89['base'] = NULL;
$output91 = '';
$array92 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array92);

$output91 .= ' ';
$array93 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array93);
$arguments89['format'] = $output91;
$output94 = '';

$output94 .= '@';
$array95 = array (
);
$output94 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array95);
$arguments89['date'] = $output94;
$renderChildrenClosure90 = ($arguments89['date'] !== null) ? function() use ($arguments89) { return $arguments89['date']; } : $renderChildrenClosure90;$array86['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['date'] = NULL;
$arguments96['format'] = '';
$arguments96['base'] = NULL;
$output98 = '';
$array99 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array99);

$output98 .= ' ';
$array100 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array100);
$arguments96['format'] = $output98;
$output101 = '';

$output101 .= '@';
$array102 = array (
);
$output101 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array102);
$arguments96['date'] = $output101;
$renderChildrenClosure97 = ($arguments96['date'] !== null) ? function() use ($arguments96) { return $arguments96['date']; } : $renderChildrenClosure97;$array86['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);
$arguments84['arguments'] = $array86;

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output83 .= '
							';
return $output83;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array81);
$array80['1'] = ' == 0';

$expression82 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = $renderChildrenClosure79;

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output52 .= '
						';
return $output52;
};
$arguments50['__elseClosures'][] = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments104 = array();

$output103 .= NULL;

$output103 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['key'] = NULL;
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['languageKey'] = NULL;
$arguments106['alternativeLanguageKeys'] = NULL;
$arguments106['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array108 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['languageKey'] = NULL;
$arguments109['alternativeLanguageKeys'] = NULL;
$arguments109['key'] = 'forPage';
// Rendering Array
$array111 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['pid'] = NULL;
$arguments112['titleLimit'] = 20;
$array114 = array (
);$arguments112['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array114);
$array111['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);
$array115 = array (
);$array111['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array115);
$arguments109['arguments'] = $array111;
$array108['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['date'] = NULL;
$arguments116['format'] = '';
$arguments116['base'] = NULL;
$output118 = '';
$array119 = array (
);
$output118 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array119);

$output118 .= ' ';
$array120 = array (
);
$output118 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array120);
$arguments116['format'] = $output118;
$output121 = '';

$output121 .= '@';
$array122 = array (
);
$output121 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array122);
$arguments116['date'] = $output121;
$renderChildrenClosure117 = ($arguments116['date'] !== null) ? function() use ($arguments116) { return $arguments116['date']; } : $renderChildrenClosure117;$array108['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['date'] = NULL;
$arguments123['format'] = '';
$arguments123['base'] = NULL;
$output125 = '';
$array126 = array (
);
$output125 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array126);

$output125 .= ' ';
$array127 = array (
);
$output125 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array127);
$arguments123['format'] = $output125;
$output128 = '';

$output128 .= '@';
$array129 = array (
);
$output128 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array129);
$arguments123['date'] = $output128;
$renderChildrenClosure124 = ($arguments123['date'] !== null) ? function() use ($arguments123) { return $arguments123['date']; } : $renderChildrenClosure124;$array108['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);
$arguments106['arguments'] = $array108;

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output103 .= '
						';
return $output103;
};

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
				';
return $output49;
};
$arguments47['__elseClosures'][] = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$arguments217['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array219 = array();
$array219['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['date'] = NULL;
$arguments220['format'] = '';
$arguments220['base'] = NULL;
$output222 = '';
$array223 = array (
);
$output222 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array223);

$output222 .= ' ';
$array224 = array (
);
$output222 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array224);
$arguments220['format'] = $output222;
$output225 = '';

$output225 .= '@';
$array226 = array (
);
$output225 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array226);
$arguments220['date'] = $output225;
$renderChildrenClosure221 = ($arguments220['date'] !== null) ? function() use ($arguments220) { return $arguments220['date']; } : $renderChildrenClosure221;$array219['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['date'] = NULL;
$arguments227['format'] = '';
$arguments227['base'] = NULL;
$output229 = '';
$array230 = array (
);
$output229 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array230);

$output229 .= ' ';
$array231 = array (
);
$output229 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array231);
$arguments227['format'] = $output229;
$output232 = '';

$output232 .= '@';
$array233 = array (
);
$output232 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array233);
$arguments227['date'] = $output232;
$renderChildrenClosure228 = ($arguments227['date'] !== null) ? function() use ($arguments227) { return $arguments227['date']; } : $renderChildrenClosure228;$array219['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);
$arguments217['arguments'] = $array219;

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output216 .= '
				';
return $output216;
};

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
		</h2>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
			<h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '@';
$array435 = array (
);
$output434 .= $renderingContext->getVariableProvider()->getByPath('dayTimestamp', $array435);
return $output434;
};
$arguments431 = array();
$arguments431['date'] = NULL;
$arguments431['format'] = '';
$arguments431['base'] = NULL;
$array433 = array (
);$arguments431['format'] = $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array433);
$renderChildrenClosure432 = ($arguments431['date'] !== null) ? function() use ($arguments431) { return $arguments431['date']; } : $renderChildrenClosure432;
$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext)]);

$output430 .= '
			</h3>

			<div class="table-fit">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								';
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
$arguments436['key'] = 'chLog_l_error';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext)]);

$output430 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['key'] = NULL;
$arguments438['id'] = NULL;
$arguments438['default'] = NULL;
$arguments438['arguments'] = NULL;
$arguments438['extensionName'] = NULL;
$arguments438['languageKey'] = NULL;
$arguments438['alternativeLanguageKeys'] = NULL;
$arguments438['key'] = 'chLog_l_time';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext)]);

$output430 .= '
							</th>
							<th colspan="2">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments440 = array();
$arguments440['key'] = NULL;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$arguments440['languageKey'] = NULL;
$arguments440['alternativeLanguageKeys'] = NULL;
$arguments440['key'] = 'chLog_l_user';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext)]);

$output430 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['key'] = NULL;
$arguments457['id'] = NULL;
$arguments457['default'] = NULL;
$arguments457['arguments'] = NULL;
$arguments457['extensionName'] = NULL;
$arguments457['languageKey'] = NULL;
$arguments457['alternativeLanguageKeys'] = NULL;
$arguments457['key'] = 'chLog_l_table';

$output456 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext)]);

$output456 .= '
									';
return $output456;
};
$arguments454 = array();

$output453 .= '';

$output453 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['key'] = NULL;
$arguments462['id'] = NULL;
$arguments462['default'] = NULL;
$arguments462['arguments'] = NULL;
$arguments462['extensionName'] = NULL;
$arguments462['languageKey'] = NULL;
$arguments462['alternativeLanguageKeys'] = NULL;
$arguments462['key'] = 'chLog_l_types';

$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext)]);

$output461 .= '
									';
return $output461;
};
$arguments459 = array();
$arguments459['if'] = NULL;

$output453 .= '';

$output453 .= '
								';
return $output453;
};
$arguments442 = array();
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$arguments442['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array450 = array();
$array451 = array (
);$array450['0'] = $renderingContext->getVariableProvider()->getByPath('isSubmoduleLayout', $array451);

$expression452 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression452(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array450)
					),
					$renderingContext
				);
$arguments442['__thenClosure'] = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments445 = array();
$arguments445['key'] = NULL;
$arguments445['id'] = NULL;
$arguments445['default'] = NULL;
$arguments445['arguments'] = NULL;
$arguments445['extensionName'] = NULL;
$arguments445['languageKey'] = NULL;
$arguments445['alternativeLanguageKeys'] = NULL;
$arguments445['key'] = 'chLog_l_table';

$output444 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext)]);

$output444 .= '
									';
return $output444;
};
$arguments442['__elseClosures'][] = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['languageKey'] = NULL;
$arguments448['alternativeLanguageKeys'] = NULL;
$arguments448['key'] = 'chLog_l_types';

$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output447 .= '
									';
return $output447;
};

$output430 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output430 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments464 = array();
$arguments464['key'] = NULL;
$arguments464['id'] = NULL;
$arguments464['default'] = NULL;
$arguments464['arguments'] = NULL;
$arguments464['extensionName'] = NULL;
$arguments464['languageKey'] = NULL;
$arguments464['alternativeLanguageKeys'] = NULL;
$arguments464['key'] = 'chLog_l_action';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext)]);

$output430 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['key'] = NULL;
$arguments466['id'] = NULL;
$arguments466['default'] = NULL;
$arguments466['arguments'] = NULL;
$arguments466['extensionName'] = NULL;
$arguments466['languageKey'] = NULL;
$arguments466['alternativeLanguageKeys'] = NULL;
$arguments466['key'] = 'chLog_l_details';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext)]);

$output430 .= '
							</th>
							<th>
								';
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
$arguments468['key'] = 'actions';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext)]);

$output430 .= '
							</th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
							<tr>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
$output479 = '';

$output479 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['identifier'] = NULL;
$arguments480['size'] = 'small';
$arguments480['overlay'] = NULL;
$arguments480['state'] = 'default';
$arguments480['alternativeMarkupIdentifier'] = NULL;
$array482 = array (
);$arguments480['identifier'] = $renderingContext->getVariableProvider()->getByPath('logItem.errorIconClass', $array482);

$output479 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output479 .= '
									';
return $output479;
};
$arguments474 = array();
$arguments474['then'] = NULL;
$arguments474['else'] = NULL;
$arguments474['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array476 = array();
$array477 = array (
);$array476['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.errorIconClass', $array477);

$expression478 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments474['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression478(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array476)
					),
					$renderingContext
				);
$arguments474['__thenClosure'] = $renderChildrenClosure475;

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output473 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '@';
$array486 = array (
);
$output485 .= $renderingContext->getVariableProvider()->getByPath('logItem.tstamp', $array486);
return $output485;
};
$arguments483 = array();
$arguments483['date'] = NULL;
$arguments483['format'] = '';
$arguments483['base'] = NULL;
$arguments483['format'] = 'H:i:s';
$renderChildrenClosure484 = ($arguments483['date'] !== null) ? function() use ($arguments483) { return $arguments483['date']; } : $renderChildrenClosure484;
$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext)]);

$output473 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['backendUser'] = 0;
$arguments495['size'] = 32;
$arguments495['showIcon'] = false;
$array497 = array (
);$arguments495['backendUser'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array497);
// Rendering Boolean node
// Rendering Array
$array498 = array();
$array498['0'] = 'true';

$expression499 = function($context) {return TRUE;};
$arguments495['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array498)
					),
					$renderingContext
				);

$output494 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output494 .= '
									';
return $output494;
};
$arguments487 = array();
$arguments487['then'] = NULL;
$arguments487['else'] = NULL;
$arguments487['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array489 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['uid'] = NULL;
$array492 = array (
);$arguments490['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array492);
$array489['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$expression493 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments487['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression493(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array489)
					),
					$renderingContext
				);
$arguments487['__thenClosure'] = $renderChildrenClosure488;

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output473 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$output516 = '';

$output516 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments517 = array();
$arguments517['uid'] = NULL;
$array519 = array (
);$arguments517['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array519);

$output516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext)]);

$output516 .= '
										';
return $output516;
};
$arguments514 = array();

$output513 .= '';

$output513 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$output522 = '';

$output522 .= '[';
$array523 = array (
);
$output522 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array523)]);

$output522 .= ']';
return $output522;
};
$arguments520 = array();
$arguments520['if'] = NULL;

$output513 .= '';

$output513 .= '
									';
return $output513;
};
$arguments500 = array();
$arguments500['then'] = NULL;
$arguments500['else'] = NULL;
$arguments500['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array508 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['uid'] = NULL;
$array511 = array (
);$arguments509['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array511);
$array508['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$expression512 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments500['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression512(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array508)
					),
					$renderingContext
				);
$arguments500['__thenClosure'] = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['uid'] = NULL;
$array505 = array (
);$arguments503['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array505);

$output502 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext)]);

$output502 .= '
										';
return $output502;
};
$arguments500['__elseClosures'][] = function() use ($renderingContext, $self) {
$output506 = '';

$output506 .= '[';
$array507 = array (
);
$output506 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array507)]);

$output506 .= ']';
return $output506;
};

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output473 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output529 = '';

$output529 .= '
										(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['key'] = NULL;
$arguments530['id'] = NULL;
$arguments530['default'] = NULL;
$arguments530['arguments'] = NULL;
$arguments530['extensionName'] = NULL;
$arguments530['languageKey'] = NULL;
$arguments530['alternativeLanguageKeys'] = NULL;
$arguments530['key'] = 'viaUser';

$output529 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext)]);

$output529 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$output545 = '';

$output545 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['uid'] = NULL;
$array551 = array (
);$arguments549['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array551);

$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext)]);

$output548 .= '
											';
return $output548;
};
$arguments546 = array();

$output545 .= '';

$output545 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '[';
$array555 = array (
);
$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array555)]);

$output554 .= ']';
return $output554;
};
$arguments552 = array();
$arguments552['if'] = NULL;

$output545 .= '';

$output545 .= '
										';
return $output545;
};
$arguments532 = array();
$arguments532['then'] = NULL;
$arguments532['else'] = NULL;
$arguments532['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array540 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['uid'] = NULL;
$array543 = array (
);$arguments541['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array543);
$array540['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$expression544 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments532['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression544(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array540)
					),
					$renderingContext
				);
$arguments532['__thenClosure'] = function() use ($renderingContext, $self) {
$output534 = '';

$output534 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments535 = array();
$arguments535['uid'] = NULL;
$array537 = array (
);$arguments535['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array537);

$output534 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext)]);

$output534 .= '
											';
return $output534;
};
$arguments532['__elseClosures'][] = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '[';
$array539 = array (
);
$output538 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array539)]);

$output538 .= ']';
return $output538;
};

$output529 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output529 .= '
										)
									';
return $output529;
};
$arguments524 = array();
$arguments524['then'] = NULL;
$arguments524['else'] = NULL;
$arguments524['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array526 = array();
$array527 = array (
);$array526['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array527);

$expression528 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments524['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression528(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array526)
					),
					$renderingContext
				);
$arguments524['__thenClosure'] = $renderChildrenClosure525;

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output473 .= '
									<br>
									<span class="text-muted">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['uid'] = NULL;
$array573 = array (
);$arguments571['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array573);
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext)]);
};
$arguments569 = array();

$output568 .= '';

$output568 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
$output576 = '';

$output576 .= '[';
$array577 = array (
);
$output576 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array577)]);

$output576 .= ']';
return $output576;
};
$arguments574 = array();
$arguments574['if'] = NULL;

$output568 .= '';

$output568 .= '
										';
return $output568;
};
$arguments556 = array();
$arguments556['then'] = NULL;
$arguments556['else'] = NULL;
$arguments556['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array563 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments564 = array();
$arguments564['uid'] = NULL;
$array566 = array (
);$arguments564['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array566);
$array563['0'] = TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$expression567 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments556['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression567(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array563)
					),
					$renderingContext
				);
$arguments556['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['uid'] = NULL;
$array560 = array (
);$arguments558['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array560);
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext)]);
};
$arguments556['__elseClosures'][] = function() use ($renderingContext, $self) {
$output561 = '';

$output561 .= '[';
$array562 = array (
);
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array562)]);

$output561 .= ']';
return $output561;
};

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output473 .= '
									</span>
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$output613 = '';

$output613 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
$output616 = '';

$output616 .= '
											';
$array617 = array (
);
$output616 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.tableName', $array617)]);

$output616 .= '
										';
return $output616;
};
$arguments614 = array();

$output613 .= '';

$output613 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$output636 = '';

$output636 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
$output639 = '';

$output639 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['key'] = NULL;
$arguments640['id'] = NULL;
$arguments640['default'] = NULL;
$arguments640['arguments'] = NULL;
$arguments640['extensionName'] = NULL;
$arguments640['languageKey'] = NULL;
$arguments640['alternativeLanguageKeys'] = NULL;
$output642 = '';

$output642 .= 'type_';
$array643 = array (
);
$output642 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array643);
$arguments640['key'] = $output642;

$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext)]);

$output639 .= '
												';
return $output639;
};
$arguments637 = array();

$output636 .= '';

$output636 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure645 = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
													[';
$array647 = array (
);
$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array647)]);

$output646 .= ']
												';
return $output646;
};
$arguments644 = array();
$arguments644['if'] = NULL;

$output636 .= '';

$output636 .= '
											';
return $output636;
};
$arguments621 = array();
$arguments621['then'] = NULL;
$arguments621['else'] = NULL;
$arguments621['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array630 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments631 = array();
$arguments631['key'] = NULL;
$arguments631['id'] = NULL;
$arguments631['default'] = NULL;
$arguments631['arguments'] = NULL;
$arguments631['extensionName'] = NULL;
$arguments631['languageKey'] = NULL;
$arguments631['alternativeLanguageKeys'] = NULL;
$output633 = '';

$output633 .= 'type_';
$array634 = array (
);
$output633 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array634);
$arguments631['key'] = $output633;
$array630['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments631, $renderChildrenClosure632, $renderingContext);

$expression635 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments621['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression635(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array630)
					),
					$renderingContext
				);
$arguments621['__thenClosure'] = function() use ($renderingContext, $self) {
$output623 = '';

$output623 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['key'] = NULL;
$arguments624['id'] = NULL;
$arguments624['default'] = NULL;
$arguments624['arguments'] = NULL;
$arguments624['extensionName'] = NULL;
$arguments624['languageKey'] = NULL;
$arguments624['alternativeLanguageKeys'] = NULL;
$output626 = '';

$output626 .= 'type_';
$array627 = array (
);
$output626 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array627);
$arguments624['key'] = $output626;

$output623 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext)]);

$output623 .= '
												';
return $output623;
};
$arguments621['__elseClosures'][] = function() use ($renderingContext, $self) {
$output628 = '';

$output628 .= '
													[';
$array629 = array (
);
$output628 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array629)]);

$output628 .= ']
												';
return $output628;
};

$output620 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);

$output620 .= '
										';
return $output620;
};
$arguments618 = array();
$arguments618['if'] = NULL;

$output613 .= '';

$output613 .= '
									';
return $output613;
};
$arguments578 = array();
$arguments578['then'] = NULL;
$arguments578['else'] = NULL;
$arguments578['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array610 = array();
$array611 = array (
);$array610['0'] = $renderingContext->getVariableProvider()->getByPath('isSubmoduleLayout', $array611);

$expression612 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments578['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression612(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array610)
					),
					$renderingContext
				);
$arguments578['__thenClosure'] = function() use ($renderingContext, $self) {
$output580 = '';

$output580 .= '
											';
$array581 = array (
);
$output580 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.tableName', $array581)]);

$output580 .= '
										';
return $output580;
};
$arguments578['__elseClosures'][] = function() use ($renderingContext, $self) {
$output582 = '';

$output582 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
$output598 = '';

$output598 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
$output601 = '';

$output601 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['key'] = NULL;
$arguments602['id'] = NULL;
$arguments602['default'] = NULL;
$arguments602['arguments'] = NULL;
$arguments602['extensionName'] = NULL;
$arguments602['languageKey'] = NULL;
$arguments602['alternativeLanguageKeys'] = NULL;
$output604 = '';

$output604 .= 'type_';
$array605 = array (
);
$output604 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array605);
$arguments602['key'] = $output604;

$output601 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext)]);

$output601 .= '
												';
return $output601;
};
$arguments599 = array();

$output598 .= '';

$output598 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
													[';
$array609 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array609)]);

$output608 .= ']
												';
return $output608;
};
$arguments606 = array();
$arguments606['if'] = NULL;

$output598 .= '';

$output598 .= '
											';
return $output598;
};
$arguments583 = array();
$arguments583['then'] = NULL;
$arguments583['else'] = NULL;
$arguments583['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array592 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments593 = array();
$arguments593['key'] = NULL;
$arguments593['id'] = NULL;
$arguments593['default'] = NULL;
$arguments593['arguments'] = NULL;
$arguments593['extensionName'] = NULL;
$arguments593['languageKey'] = NULL;
$arguments593['alternativeLanguageKeys'] = NULL;
$output595 = '';

$output595 .= 'type_';
$array596 = array (
);
$output595 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array596);
$arguments593['key'] = $output595;
$array592['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$expression597 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments583['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression597(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array592)
					),
					$renderingContext
				);
$arguments583['__thenClosure'] = function() use ($renderingContext, $self) {
$output585 = '';

$output585 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments586 = array();
$arguments586['key'] = NULL;
$arguments586['id'] = NULL;
$arguments586['default'] = NULL;
$arguments586['arguments'] = NULL;
$arguments586['extensionName'] = NULL;
$arguments586['languageKey'] = NULL;
$arguments586['alternativeLanguageKeys'] = NULL;
$output588 = '';

$output588 .= 'type_';
$array589 = array (
);
$output588 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array589);
$arguments586['key'] = $output588;

$output585 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext)]);

$output585 .= '
												';
return $output585;
};
$arguments583['__elseClosures'][] = function() use ($renderingContext, $self) {
$output590 = '';

$output590 .= '
													[';
$array591 = array (
);
$output590 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array591)]);

$output590 .= ']
												';
return $output590;
};

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext);

$output582 .= '
										';
return $output582;
};

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output473 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
$output665 = '';

$output665 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
$output668 = '';

$output668 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments669 = array();
$arguments669['key'] = NULL;
$arguments669['id'] = NULL;
$arguments669['default'] = NULL;
$arguments669['arguments'] = NULL;
$arguments669['extensionName'] = NULL;
$arguments669['languageKey'] = NULL;
$arguments669['alternativeLanguageKeys'] = NULL;
$output671 = '';

$output671 .= 'action_';
$array672 = array (
);
$output671 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array672);

$output671 .= '_';
$array673 = array (
);
$output671 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array673);
$arguments669['key'] = $output671;

$output668 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext)]);

$output668 .= '
										';
return $output668;
};
$arguments666 = array();

$output665 .= '';

$output665 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
$output676 = '';

$output676 .= '
											[';
$array677 = array (
);
$output676 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array677)]);

$output676 .= ']
										';
return $output676;
};
$arguments674 = array();
$arguments674['if'] = NULL;

$output665 .= '';

$output665 .= '
									';
return $output665;
};
$arguments648 = array();
$arguments648['then'] = NULL;
$arguments648['else'] = NULL;
$arguments648['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array658 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments659 = array();
$arguments659['key'] = NULL;
$arguments659['id'] = NULL;
$arguments659['default'] = NULL;
$arguments659['arguments'] = NULL;
$arguments659['extensionName'] = NULL;
$arguments659['languageKey'] = NULL;
$arguments659['alternativeLanguageKeys'] = NULL;
$output661 = '';

$output661 .= 'action_';
$array662 = array (
);
$output661 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array662);

$output661 .= '_';
$array663 = array (
);
$output661 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array663);
$arguments659['key'] = $output661;
$array658['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments659, $renderChildrenClosure660, $renderingContext);

$expression664 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments648['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression664(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array658)
					),
					$renderingContext
				);
$arguments648['__thenClosure'] = function() use ($renderingContext, $self) {
$output650 = '';

$output650 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments651 = array();
$arguments651['key'] = NULL;
$arguments651['id'] = NULL;
$arguments651['default'] = NULL;
$arguments651['arguments'] = NULL;
$arguments651['extensionName'] = NULL;
$arguments651['languageKey'] = NULL;
$arguments651['alternativeLanguageKeys'] = NULL;
$output653 = '';

$output653 .= 'action_';
$array654 = array (
);
$output653 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array654);

$output653 .= '_';
$array655 = array (
);
$output653 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array655);
$arguments651['key'] = $output653;

$output650 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext)]);

$output650 .= '
										';
return $output650;
};
$arguments648['__elseClosures'][] = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
											[';
$array657 = array (
);
$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array657)]);

$output656 .= ']
										';
return $output656;
};

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output473 .= '
								</td>
								<td class="col-word-break">
									';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments678 = array();
$arguments678['logEntry'] = NULL;
$array680 = array (
);$arguments678['logEntry'] = $renderingContext->getVariableProvider()->getByPath('logItem', $array680);

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper::renderStatic($arguments678, $renderChildrenClosure679, $renderingContext)]);

$output473 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
$output686 = '';

$output686 .= '
										(msg#';
$array687 = array (
);
$output686 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array687)]);

$output686 .= '.';
$array688 = array (
);
$output686 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array688)]);

$output686 .= '.';
$array689 = array (
);
$output686 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.detailsNumber', $array689)]);

$output686 .= ')
									';
return $output686;
};
$arguments681 = array();
$arguments681['then'] = NULL;
$arguments681['else'] = NULL;
$arguments681['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array683 = array();
$array684 = array (
);$array683['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.detailsNumber', $array684);
$array683['1'] = ' > 0';

$expression685 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments681['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression685(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array683)
					),
					$renderingContext
				);
$arguments681['__thenClosure'] = $renderChildrenClosure682;

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext);

$output473 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
$output695 = '';

$output695 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure697 = function() use ($renderingContext, $self) {
$output700 = '';

$output700 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments701 = array();
$arguments701['key'] = NULL;
$arguments701['id'] = NULL;
$arguments701['default'] = NULL;
$arguments701['arguments'] = NULL;
$arguments701['extensionName'] = NULL;
$arguments701['languageKey'] = NULL;
$arguments701['alternativeLanguageKeys'] = NULL;
$arguments701['key'] = 'actions.deleteWarnings';

$output700 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext)]);

$output700 .= '
										';
return $output700;
};
$arguments696 = array();
$arguments696['additionalAttributes'] = NULL;
$arguments696['data'] = NULL;
$arguments696['class'] = NULL;
$arguments696['dir'] = NULL;
$arguments696['id'] = NULL;
$arguments696['lang'] = NULL;
$arguments696['style'] = NULL;
$arguments696['title'] = NULL;
$arguments696['accesskey'] = NULL;
$arguments696['tabindex'] = NULL;
$arguments696['onclick'] = NULL;
$arguments696['name'] = NULL;
$arguments696['rel'] = NULL;
$arguments696['rev'] = NULL;
$arguments696['target'] = NULL;
$arguments696['action'] = NULL;
$arguments696['controller'] = NULL;
$arguments696['extensionName'] = NULL;
$arguments696['pluginName'] = NULL;
$arguments696['pageUid'] = NULL;
$arguments696['pageType'] = NULL;
$arguments696['noCache'] = NULL;
$arguments696['noCacheHash'] = NULL;
$arguments696['section'] = NULL;
$arguments696['format'] = NULL;
$arguments696['linkAccessRestrictedPages'] = NULL;
$arguments696['additionalParams'] = NULL;
$arguments696['absolute'] = NULL;
$arguments696['addQueryString'] = NULL;
$arguments696['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments696['addQueryStringMethod'] = NULL;
$arguments696['arguments'] = NULL;
$arguments696['action'] = 'deleteMessage';
// Rendering Array
$array698 = array();
$array699 = array (
);$array698['errorUid'] = $renderingContext->getVariableProvider()->getByPath('logItem.uid', $array699);
$arguments696['arguments'] = $array698;
$arguments696['class'] = 'btn btn-warning';

$output695 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments696, $renderChildrenClosure697, $renderingContext);

$output695 .= '
									';
return $output695;
};
$arguments690 = array();
$arguments690['then'] = NULL;
$arguments690['else'] = NULL;
$arguments690['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array692 = array();
$array693 = array (
);$array692['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.error', $array693);
$array692['1'] = ' == 1';

$expression694 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments690['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression694(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array692)
					),
					$renderingContext
				);
$arguments690['__thenClosure'] = $renderChildrenClosure691;

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext);

$output473 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure704 = function() use ($renderingContext, $self) {
$output708 = '';

$output708 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure710 = function() use ($renderingContext, $self) {
$output713 = '';

$output713 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure715 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments714 = array();
$arguments714['key'] = NULL;
$arguments714['id'] = NULL;
$arguments714['default'] = NULL;
$arguments714['arguments'] = NULL;
$arguments714['extensionName'] = NULL;
$arguments714['languageKey'] = NULL;
$arguments714['alternativeLanguageKeys'] = NULL;
$arguments714['key'] = 'actions.delete';

$output713 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments714, $renderChildrenClosure715, $renderingContext)]);

$output713 .= '
										';
return $output713;
};
$arguments709 = array();
$arguments709['additionalAttributes'] = NULL;
$arguments709['data'] = NULL;
$arguments709['class'] = NULL;
$arguments709['dir'] = NULL;
$arguments709['id'] = NULL;
$arguments709['lang'] = NULL;
$arguments709['style'] = NULL;
$arguments709['title'] = NULL;
$arguments709['accesskey'] = NULL;
$arguments709['tabindex'] = NULL;
$arguments709['onclick'] = NULL;
$arguments709['name'] = NULL;
$arguments709['rel'] = NULL;
$arguments709['rev'] = NULL;
$arguments709['target'] = NULL;
$arguments709['action'] = NULL;
$arguments709['controller'] = NULL;
$arguments709['extensionName'] = NULL;
$arguments709['pluginName'] = NULL;
$arguments709['pageUid'] = NULL;
$arguments709['pageType'] = NULL;
$arguments709['noCache'] = NULL;
$arguments709['noCacheHash'] = NULL;
$arguments709['section'] = NULL;
$arguments709['format'] = NULL;
$arguments709['linkAccessRestrictedPages'] = NULL;
$arguments709['additionalParams'] = NULL;
$arguments709['absolute'] = NULL;
$arguments709['addQueryString'] = NULL;
$arguments709['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments709['addQueryStringMethod'] = NULL;
$arguments709['arguments'] = NULL;
$arguments709['action'] = 'deleteMessage';
// Rendering Array
$array711 = array();
$array712 = array (
);$array711['errorUid'] = $renderingContext->getVariableProvider()->getByPath('logItem.uid', $array712);
$arguments709['arguments'] = $array711;
$arguments709['class'] = 'btn btn-danger';

$output708 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext);

$output708 .= '
									';
return $output708;
};
$arguments703 = array();
$arguments703['then'] = NULL;
$arguments703['else'] = NULL;
$arguments703['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array705 = array();
$array706 = array (
);$array705['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.error', $array706);
$array705['1'] = ' == 2';

$expression707 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments703['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression707(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array705)
					),
					$renderingContext
				);
$arguments703['__thenClosure'] = $renderChildrenClosure704;

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments703, $renderChildrenClosure704, $renderingContext);

$output473 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
$output721 = '';

$output721 .= '
										<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['route'] = NULL;
$arguments722['arguments'] = array (
);
$arguments722['query'] = NULL;
$arguments722['currentUrlParameterName'] = NULL;
$arguments722['route'] = 'record_history';
// Rendering Array
$array724 = array();
$array725 = array (
);$array724['historyEntry'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.history', $array725);
$arguments722['arguments'] = $array724;

$output721 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext)]);

$output721 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments726 = array();
$arguments726['key'] = NULL;
$arguments726['id'] = NULL;
$arguments726['default'] = NULL;
$arguments726['arguments'] = NULL;
$arguments726['extensionName'] = NULL;
$arguments726['languageKey'] = NULL;
$arguments726['alternativeLanguageKeys'] = NULL;
$arguments726['key'] = 'showHistory';

$output721 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext)]);

$output721 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments728 = array();
$arguments728['identifier'] = NULL;
$arguments728['size'] = 'small';
$arguments728['overlay'] = NULL;
$arguments728['state'] = 'default';
$arguments728['alternativeMarkupIdentifier'] = NULL;
$arguments728['identifier'] = 'actions-document-history-open';

$output721 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);

$output721 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments730 = array();
$arguments730['key'] = NULL;
$arguments730['id'] = NULL;
$arguments730['default'] = NULL;
$arguments730['arguments'] = NULL;
$arguments730['extensionName'] = NULL;
$arguments730['languageKey'] = NULL;
$arguments730['alternativeLanguageKeys'] = NULL;
$arguments730['id'] = 'showHistory';

$output721 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments730, $renderChildrenClosure731, $renderingContext)]);

$output721 .= '
										</a>
									';
return $output721;
};
$arguments716 = array();
$arguments716['then'] = NULL;
$arguments716['else'] = NULL;
$arguments716['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array718 = array();
$array719 = array (
);$array718['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.history', $array719);

$expression720 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments716['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression720(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array718)
					),
					$renderingContext
				);
$arguments716['__thenClosure'] = $renderChildrenClosure717;

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output473 .= '
								</td>
							</tr>
						';
return $output473;
};
$arguments470 = array();
$arguments470['each'] = NULL;
$arguments470['as'] = NULL;
$arguments470['key'] = NULL;
$arguments470['reverse'] = false;
$arguments470['iteration'] = NULL;
$array472 = array (
);$arguments470['each'] = $renderingContext->getVariableProvider()->getByPath('day', $array472);
$arguments470['as'] = 'logItem';

$output430 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output430 .= '
					</tbody>
				</table>
			</div>
		';
return $output430;
};
$arguments427 = array();
$arguments427['each'] = NULL;
$arguments427['as'] = NULL;
$arguments427['key'] = NULL;
$arguments427['reverse'] = false;
$arguments427['iteration'] = NULL;
$array429 = array (
);$arguments427['each'] = $renderingContext->getVariableProvider()->getByPath('pidEntry', $array429);
$arguments427['as'] = 'day';
$arguments427['key'] = 'dayTimestamp';

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output46 .= '
	</div>
';
return $output46;
};
$arguments43 = array();
$arguments43['each'] = NULL;
$arguments43['as'] = NULL;
$arguments43['key'] = NULL;
$arguments43['reverse'] = false;
$arguments43['iteration'] = NULL;
$array45 = array (
);$arguments43['each'] = $renderingContext->getVariableProvider()->getByPath('groupedLogEntries', $array45);
$arguments43['as'] = 'pidEntry';
$arguments43['key'] = 'pid';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#