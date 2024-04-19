<?php

class Standard_action_index_6b9f1437023d4df4053d1dcb44503a0cd6a97945 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output67 = '';

$output67 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['name'] = NULL;
$arguments74['value'] = NULL;
$arguments74['property'] = NULL;
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['name'] = 'defValues';
$arguments74['value'] = '';

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
					<script type="text/javascript">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output105 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output105 .= '
					</script>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array111);
};
$arguments109 = array();
$arguments109['value'] = NULL;

$output105 .= isset($arguments109['value']) ? $arguments109['value'] : $renderChildrenClosure110();

$output105 .= '
				';
return $output105;
};
$arguments103 = array();

$output102 .= '';

$output102 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
					<div id="new-content-element-wizard-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
						<div class="carousel-inner" role="listbox">
							<div class="item active" data-slide="next">
								<div class="t3-new-content-element-wizard-title">
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['languageKey'] = NULL;
$arguments115['alternativeLanguageKeys'] = NULL;
$arguments115['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output114 .= '</h2>
								</div>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$array119 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array119);
};
$arguments117 = array();
$arguments117['value'] = NULL;

$output114 .= isset($arguments117['value']) ? $arguments117['value'] : $renderChildrenClosure118();

$output114 .= '
							</div>
							<div class="item">
								<div class="t3-new-content-element-wizard-title">
									<h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);
};
$arguments120 = array();
$arguments120['value'] = NULL;
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = 'UTF-8';
$arguments120['doubleEncode'] = true;
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output114 .= !is_string($value122) && !(is_object($value122) && method_exists($value122, '__toString')) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments120['encoding'], $arguments120['doubleEncode']);

$output114 .= '</h2>
								</div>
								<div class="t3-new-content-element-wizard-body">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$array127 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array127);
};
$arguments125 = array();
$arguments125['value'] = NULL;

$output114 .= isset($arguments125['value']) ? $arguments125['value'] : $renderChildrenClosure126();

$output114 .= '
								</div>
							</div>
						</div>
					</div>
				';
return $output114;
};
$arguments112 = array();
$arguments112['if'] = NULL;

$output102 .= '';

$output102 .= '
			';
return $output102;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('hasClickEvent', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
					<script type="text/javascript">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array81 = array (
);return $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array81);
};
$arguments79 = array();
$arguments79['value'] = NULL;

$output78 .= isset($arguments79['value']) ? $arguments79['value'] : $renderChildrenClosure80();

$output78 .= '
					</script>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array84);
};
$arguments82 = array();
$arguments82['value'] = NULL;

$output78 .= isset($arguments82['value']) ? $arguments82['value'] : $renderChildrenClosure83();

$output78 .= '
				';
return $output78;
};
$arguments76['__elseClosures'][] = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
					<div id="new-content-element-wizard-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
						<div class="carousel-inner" role="listbox">
							<div class="item active" data-slide="next">
								<div class="t3-new-content-element-wizard-title">
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$arguments86['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '</h2>
								</div>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array90 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array90);
};
$arguments88 = array();
$arguments88['value'] = NULL;

$output85 .= isset($arguments88['value']) ? $arguments88['value'] : $renderChildrenClosure89();

$output85 .= '
							</div>
							<div class="item">
								<div class="t3-new-content-element-wizard-title">
									<h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['key'] = NULL;
$arguments94['id'] = NULL;
$arguments94['default'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['languageKey'] = NULL;
$arguments94['alternativeLanguageKeys'] = NULL;
$arguments94['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);
};
$arguments91 = array();
$arguments91['value'] = NULL;
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = 'UTF-8';
$arguments91['doubleEncode'] = true;
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());

$output85 .= !is_string($value93) && !(is_object($value93) && method_exists($value93, '__toString')) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments91['encoding'], $arguments91['doubleEncode']);

$output85 .= '</h2>
								</div>
								<div class="t3-new-content-element-wizard-body">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$array98 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array98);
};
$arguments96 = array();
$arguments96['value'] = NULL;

$output85 .= isset($arguments96['value']) ? $arguments96['value'] : $renderChildrenClosure97();

$output85 .= '
								</div>
							</div>
						</div>
					</div>
				';
return $output85;
};

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output73 .= '
		';
return $output73;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['action'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['object'] = NULL;
$arguments71['pageType'] = 0;
$arguments71['noCache'] = false;
$arguments71['noCacheHash'] = false;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['additionalParams'] = array (
);
$arguments71['absolute'] = false;
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['addQueryStringMethod'] = 'GET';
$arguments71['fieldNamePrefix'] = NULL;
$arguments71['actionUri'] = NULL;
$arguments71['objectName'] = NULL;
$arguments71['hiddenFieldClassName'] = NULL;
$arguments71['enctype'] = NULL;
$arguments71['method'] = NULL;
$arguments71['name'] = NULL;
$arguments71['onreset'] = NULL;
$arguments71['onsubmit'] = NULL;
$arguments71['target'] = NULL;
$arguments71['novalidate'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['action'] = '';
$arguments71['name'] = 'editForm';
$arguments71['id'] = 'NewContentElementController';

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
	';
return $output70;
};
$arguments68 = array();

$output67 .= '';

$output67 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
		<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['key'] = NULL;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['languageKey'] = NULL;
$arguments131['alternativeLanguageKeys'] = NULL;
$arguments131['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement';

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output130 .= '</h1>
	';
return $output130;
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output67 .= '';

$output67 .= '
';
return $output67;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('hasAccess', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = 'defValues';
$arguments7['value'] = '';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
					<script type="text/javascript">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;

$output38 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output38 .= '
					</script>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array44 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array44);
};
$arguments42 = array();
$arguments42['value'] = NULL;

$output38 .= isset($arguments42['value']) ? $arguments42['value'] : $renderChildrenClosure43();

$output38 .= '
				';
return $output38;
};
$arguments36 = array();

$output35 .= '';

$output35 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
					<div id="new-content-element-wizard-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
						<div class="carousel-inner" role="listbox">
							<div class="item active" data-slide="next">
								<div class="t3-new-content-element-wizard-title">
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$arguments48['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '</h2>
								</div>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$array52 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array52);
};
$arguments50 = array();
$arguments50['value'] = NULL;

$output47 .= isset($arguments50['value']) ? $arguments50['value'] : $renderChildrenClosure51();

$output47 .= '
							</div>
							<div class="item">
								<div class="t3-new-content-element-wizard-title">
									<h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);
};
$arguments53 = array();
$arguments53['value'] = NULL;
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = 'UTF-8';
$arguments53['doubleEncode'] = true;
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output47 .= !is_string($value55) && !(is_object($value55) && method_exists($value55, '__toString')) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments53['encoding'], $arguments53['doubleEncode']);

$output47 .= '</h2>
								</div>
								<div class="t3-new-content-element-wizard-body">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array60 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array60);
};
$arguments58 = array();
$arguments58['value'] = NULL;

$output47 .= isset($arguments58['value']) ? $arguments58['value'] : $renderChildrenClosure59();

$output47 .= '
								</div>
							</div>
						</div>
					</div>
				';
return $output47;
};
$arguments45 = array();
$arguments45['if'] = NULL;

$output35 .= '';

$output35 .= '
			';
return $output35;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('hasClickEvent', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
					<script type="text/javascript">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array14);
};
$arguments12 = array();
$arguments12['value'] = NULL;

$output11 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

$output11 .= '
					</script>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array17);
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output11 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output11 .= '
				';
return $output11;
};
$arguments9['__elseClosures'][] = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
					<div id="new-content-element-wizard-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
						<div class="carousel-inner" role="listbox">
							<div class="item active" data-slide="next">
								<div class="t3-new-content-element-wizard-title">
									<h2>';
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
$arguments19['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '</h2>
								</div>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array23 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array23);
};
$arguments21 = array();
$arguments21['value'] = NULL;

$output18 .= isset($arguments21['value']) ? $arguments21['value'] : $renderChildrenClosure22();

$output18 .= '
							</div>
							<div class="item">
								<div class="t3-new-content-element-wizard-title">
									<h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};
$arguments24 = array();
$arguments24['value'] = NULL;
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = 'UTF-8';
$arguments24['doubleEncode'] = true;
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());

$output18 .= !is_string($value26) && !(is_object($value26) && method_exists($value26, '__toString')) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments24['encoding'], $arguments24['doubleEncode']);

$output18 .= '</h2>
								</div>
								<div class="t3-new-content-element-wizard-body">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array31);
};
$arguments29 = array();
$arguments29['value'] = NULL;

$output18 .= isset($arguments29['value']) ? $arguments29['value'] : $renderChildrenClosure30();

$output18 .= '
								</div>
							</div>
						</div>
					</div>
				';
return $output18;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '
		';
return $output6;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['action'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['object'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['addQueryStringMethod'] = 'GET';
$arguments4['fieldNamePrefix'] = NULL;
$arguments4['actionUri'] = NULL;
$arguments4['objectName'] = NULL;
$arguments4['hiddenFieldClassName'] = NULL;
$arguments4['enctype'] = NULL;
$arguments4['method'] = NULL;
$arguments4['name'] = NULL;
$arguments4['onreset'] = NULL;
$arguments4['onsubmit'] = NULL;
$arguments4['target'] = NULL;
$arguments4['novalidate'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['action'] = '';
$arguments4['name'] = 'editForm';
$arguments4['id'] = 'NewContentElementController';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
		<h1>';
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
$arguments62['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output61 .= '</h1>
	';
return $output61;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#