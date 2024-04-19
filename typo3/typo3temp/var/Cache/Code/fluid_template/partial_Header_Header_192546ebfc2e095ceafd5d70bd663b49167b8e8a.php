<?php

class partial_Header_Header_192546ebfc2e095ceafd5d70bd663b49167b8e8a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output6 = '';

$output6 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
			<h1 class="';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array120)]);

$output119 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$array124 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array124)]);
};
$arguments121 = array();
$arguments121['parameter'] = NULL;
$arguments121['target'] = '';
$arguments121['class'] = '';
$arguments121['title'] = '';
$arguments121['additionalParams'] = '';
$arguments121['additionalAttributes'] = array (
);
$arguments121['useCacheHash'] = false;
$arguments121['addQueryString'] = false;
$arguments121['addQueryStringMethod'] = 'GET';
$arguments121['addQueryStringExclude'] = '';
$arguments121['absolute'] = false;
$array123 = array (
);$arguments121['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array123);

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output119 .= '
			</h1>
		';
return $output119;
};
$arguments117 = array();
$arguments117['value'] = NULL;
$arguments117['value'] = 1;

$output116 .= '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
			<h2 class="';
$array128 = array (
);
$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array128)]);

$output127 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$array132 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array132)]);
};
$arguments129 = array();
$arguments129['parameter'] = NULL;
$arguments129['target'] = '';
$arguments129['class'] = '';
$arguments129['title'] = '';
$arguments129['additionalParams'] = '';
$arguments129['additionalAttributes'] = array (
);
$arguments129['useCacheHash'] = false;
$arguments129['addQueryString'] = false;
$arguments129['addQueryStringMethod'] = 'GET';
$arguments129['addQueryStringExclude'] = '';
$arguments129['absolute'] = false;
$array131 = array (
);$arguments129['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array131);

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output127 .= '
			</h2>
		';
return $output127;
};
$arguments125 = array();
$arguments125['value'] = NULL;
$arguments125['value'] = 2;

$output116 .= '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
			<h3 class="';
$array136 = array (
);
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array136)]);

$output135 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$array140 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array140)]);
};
$arguments137 = array();
$arguments137['parameter'] = NULL;
$arguments137['target'] = '';
$arguments137['class'] = '';
$arguments137['title'] = '';
$arguments137['additionalParams'] = '';
$arguments137['additionalAttributes'] = array (
);
$arguments137['useCacheHash'] = false;
$arguments137['addQueryString'] = false;
$arguments137['addQueryStringMethod'] = 'GET';
$arguments137['addQueryStringExclude'] = '';
$arguments137['absolute'] = false;
$array139 = array (
);$arguments137['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array139);

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output135 .= '
			</h3>
		';
return $output135;
};
$arguments133 = array();
$arguments133['value'] = NULL;
$arguments133['value'] = 3;

$output116 .= '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
			<h4 class="';
$array144 = array (
);
$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array144)]);

$output143 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$array148 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array148)]);
};
$arguments145 = array();
$arguments145['parameter'] = NULL;
$arguments145['target'] = '';
$arguments145['class'] = '';
$arguments145['title'] = '';
$arguments145['additionalParams'] = '';
$arguments145['additionalAttributes'] = array (
);
$arguments145['useCacheHash'] = false;
$arguments145['addQueryString'] = false;
$arguments145['addQueryStringMethod'] = 'GET';
$arguments145['addQueryStringExclude'] = '';
$arguments145['absolute'] = false;
$array147 = array (
);$arguments145['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array147);

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output143 .= '
			</h4>
		';
return $output143;
};
$arguments141 = array();
$arguments141['value'] = NULL;
$arguments141['value'] = 4;

$output116 .= '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
			<h5 class="';
$array152 = array (
);
$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array152)]);

$output151 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$array156 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array156)]);
};
$arguments153 = array();
$arguments153['parameter'] = NULL;
$arguments153['target'] = '';
$arguments153['class'] = '';
$arguments153['title'] = '';
$arguments153['additionalParams'] = '';
$arguments153['additionalAttributes'] = array (
);
$arguments153['useCacheHash'] = false;
$arguments153['addQueryString'] = false;
$arguments153['addQueryStringMethod'] = 'GET';
$arguments153['addQueryStringExclude'] = '';
$arguments153['absolute'] = false;
$array155 = array (
);$arguments153['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array155);

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output151 .= '
			</h5>
		';
return $output151;
};
$arguments149 = array();
$arguments149['value'] = NULL;
$arguments149['value'] = 5;

$output116 .= '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
			<h6 class="';
$array160 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array160)]);

$output159 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$array164 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array164)]);
};
$arguments161 = array();
$arguments161['parameter'] = NULL;
$arguments161['target'] = '';
$arguments161['class'] = '';
$arguments161['title'] = '';
$arguments161['additionalParams'] = '';
$arguments161['additionalAttributes'] = array (
);
$arguments161['useCacheHash'] = false;
$arguments161['addQueryString'] = false;
$arguments161['addQueryStringMethod'] = 'GET';
$arguments161['addQueryStringExclude'] = '';
$arguments161['absolute'] = false;
$array163 = array (
);$arguments161['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array163);

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output159 .= '
			</h6>
		';
return $output159;
};
$arguments157 = array();
$arguments157['value'] = NULL;
$arguments157['value'] = 6;

$output116 .= '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments168 = array();

$output167 .= NULL;

$output167 .= '
		';
return $output167;
};
$arguments165 = array();
$arguments165['value'] = NULL;
$arguments165['value'] = 100;

$output116 .= '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['section'] = NULL;
$arguments179['partial'] = NULL;
$arguments179['delegate'] = NULL;
$arguments179['renderable'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['optional'] = false;
$arguments179['default'] = NULL;
$arguments179['contentAs'] = NULL;
$arguments179['debug'] = true;
$arguments179['partial'] = 'Header/Header';
// Rendering Array
$array181 = array();
$array182 = array (
);$array181['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array182);
$array183 = array (
);$array181['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array183);
$array184 = array (
);$array181['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array184);
$array185 = array (
);$array181['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array185);
$arguments179['arguments'] = $array181;

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
			';
return $output178;
};
$arguments173 = array();
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$arguments173['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array176);

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments173['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments173['__thenClosure'] = $renderChildrenClosure174;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
		';
return $output172;
};
$arguments170 = array();

$output116 .= '';

$output116 .= '
	';
return $output116;
};
$arguments7 = array();
$arguments7['expression'] = NULL;
$array115 = array (
);$arguments7['expression'] = $renderingContext->getVariableProvider()->getByPath('layout', $array115);

$output6 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			<h1 class="';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array10)]);

$output9 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array14 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array14)]);
};
$arguments11 = array();
$arguments11['parameter'] = NULL;
$arguments11['target'] = '';
$arguments11['class'] = '';
$arguments11['title'] = '';
$arguments11['additionalParams'] = '';
$arguments11['additionalAttributes'] = array (
);
$arguments11['useCacheHash'] = false;
$arguments11['addQueryString'] = false;
$arguments11['addQueryStringMethod'] = 'GET';
$arguments11['addQueryStringExclude'] = '';
$arguments11['absolute'] = false;
$array13 = array (
);$arguments11['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array13);

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output9 .= '
			</h1>
		';
return $output9;
});
case call_user_func(function() use ($renderingContext, $self) {

return 2;
}): return call_user_func(function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
			<h2 class="';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array24)]);

$output23 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array28 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array28)]);
};
$arguments25 = array();
$arguments25['parameter'] = NULL;
$arguments25['target'] = '';
$arguments25['class'] = '';
$arguments25['title'] = '';
$arguments25['additionalParams'] = '';
$arguments25['additionalAttributes'] = array (
);
$arguments25['useCacheHash'] = false;
$arguments25['addQueryString'] = false;
$arguments25['addQueryStringMethod'] = 'GET';
$arguments25['addQueryStringExclude'] = '';
$arguments25['absolute'] = false;
$array27 = array (
);$arguments25['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array27);

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output23 .= '
			</h2>
		';
return $output23;
});
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
			<h3 class="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array38)]);

$output37 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array42 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array42)]);
};
$arguments39 = array();
$arguments39['parameter'] = NULL;
$arguments39['target'] = '';
$arguments39['class'] = '';
$arguments39['title'] = '';
$arguments39['additionalParams'] = '';
$arguments39['additionalAttributes'] = array (
);
$arguments39['useCacheHash'] = false;
$arguments39['addQueryString'] = false;
$arguments39['addQueryStringMethod'] = 'GET';
$arguments39['addQueryStringExclude'] = '';
$arguments39['absolute'] = false;
$array41 = array (
);$arguments39['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array41);

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output37 .= '
			</h3>
		';
return $output37;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
			<h4 class="';
$array52 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array52)]);

$output51 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array56 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array56)]);
};
$arguments53 = array();
$arguments53['parameter'] = NULL;
$arguments53['target'] = '';
$arguments53['class'] = '';
$arguments53['title'] = '';
$arguments53['additionalParams'] = '';
$arguments53['additionalAttributes'] = array (
);
$arguments53['useCacheHash'] = false;
$arguments53['addQueryString'] = false;
$arguments53['addQueryStringMethod'] = 'GET';
$arguments53['addQueryStringExclude'] = '';
$arguments53['absolute'] = false;
$array55 = array (
);$arguments53['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array55);

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output51 .= '
			</h4>
		';
return $output51;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
			<h5 class="';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array66)]);

$output65 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$array70 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array70)]);
};
$arguments67 = array();
$arguments67['parameter'] = NULL;
$arguments67['target'] = '';
$arguments67['class'] = '';
$arguments67['title'] = '';
$arguments67['additionalParams'] = '';
$arguments67['additionalAttributes'] = array (
);
$arguments67['useCacheHash'] = false;
$arguments67['addQueryString'] = false;
$arguments67['addQueryStringMethod'] = 'GET';
$arguments67['addQueryStringExclude'] = '';
$arguments67['absolute'] = false;
$array69 = array (
);$arguments67['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array69);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output65 .= '
			</h5>
		';
return $output65;
});
case call_user_func(function() use ($renderingContext, $self) {

return 6;
}): return call_user_func(function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
			<h6 class="';
$array80 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array80)]);

$output79 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array84 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array84)]);
};
$arguments81 = array();
$arguments81['parameter'] = NULL;
$arguments81['target'] = '';
$arguments81['class'] = '';
$arguments81['title'] = '';
$arguments81['additionalParams'] = '';
$arguments81['additionalAttributes'] = array (
);
$arguments81['useCacheHash'] = false;
$arguments81['addQueryString'] = false;
$arguments81['addQueryStringMethod'] = 'GET';
$arguments81['addQueryStringExclude'] = '';
$arguments81['absolute'] = false;
$array83 = array (
);$arguments81['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array83);

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output79 .= '
			</h6>
		';
return $output79;
});
case call_user_func(function() use ($renderingContext, $self) {

return 100;
}): return call_user_func(function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments94 = array();

$output93 .= NULL;

$output93 .= '
		';
return $output93;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['section'] = NULL;
$arguments108['partial'] = NULL;
$arguments108['delegate'] = NULL;
$arguments108['renderable'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['optional'] = false;
$arguments108['default'] = NULL;
$arguments108['contentAs'] = NULL;
$arguments108['debug'] = true;
$arguments108['partial'] = 'Header/Header';
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array111);
$array112 = array (
);$array110['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array112);
$array113 = array (
);$array110['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array113);
$array114 = array (
);$array110['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array114);
$arguments108['arguments'] = $array110;

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
			';
return $output107;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array105);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
		';
return $output101;
});
}
}, array($arguments7));

$output6 .= '
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('header', $array4);

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

return $output0;
}


}
#