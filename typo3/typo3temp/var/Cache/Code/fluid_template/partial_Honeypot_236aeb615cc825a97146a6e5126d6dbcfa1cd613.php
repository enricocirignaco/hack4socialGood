<?php

class partial_Honeypot_236aeb615cc825a97146a6e5126d6dbcfa1cd613 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output22 = '';

$output22 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['property'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$array28 = array (
);$arguments26['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array28);
$array29 = array (
);$arguments26['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array29);
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array31);
$arguments26['additionalAttributes'] = $array30;

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
	';
return $output25;
};
$arguments23 = array();

$output22 .= '';

$output22 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['name'] = NULL;
$arguments35['value'] = NULL;
$arguments35['property'] = NULL;
$arguments35['autofocus'] = NULL;
$arguments35['disabled'] = NULL;
$arguments35['maxlength'] = NULL;
$arguments35['readonly'] = NULL;
$arguments35['size'] = NULL;
$arguments35['placeholder'] = NULL;
$arguments35['pattern'] = NULL;
$arguments35['errorClass'] = 'f3-form-error';
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['required'] = false;
$arguments35['type'] = 'text';
$array37 = array (
);$arguments35['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array37);
$array38 = array (
);$arguments35['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array38);
$array39 = array (
);$arguments35['class'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array39);
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array41);
$array40['aria-hidden'] = 'true';
$arguments35['additionalAttributes'] = $array40;
$arguments35['tabindex'] = -1;
$array42 = array (
);$arguments35['style'] = $renderingContext->getVariableProvider()->getByPath('element.properties.styleAttribute', $array42);

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
	';
return $output34;
};
$arguments32 = array();
$arguments32['if'] = NULL;

$output22 .= '';

$output22 .= '
';
return $output22;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('element.properties.renderAsHiddenField', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['name'] = NULL;
$arguments4['value'] = NULL;
$arguments4['property'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$array6 = array (
);$arguments4['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array6);
$array7 = array (
);$arguments4['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array7);
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array9);
$arguments4['additionalAttributes'] = $array8;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['name'] = NULL;
$arguments11['value'] = NULL;
$arguments11['property'] = NULL;
$arguments11['autofocus'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['maxlength'] = NULL;
$arguments11['readonly'] = NULL;
$arguments11['size'] = NULL;
$arguments11['placeholder'] = NULL;
$arguments11['pattern'] = NULL;
$arguments11['errorClass'] = 'f3-form-error';
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['required'] = false;
$arguments11['type'] = 'text';
$array13 = array (
);$arguments11['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array13);
$array14 = array (
);$arguments11['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array14);
$array15 = array (
);$arguments11['class'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array15);
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array17);
$array16['aria-hidden'] = 'true';
$arguments11['additionalAttributes'] = $array16;
$arguments11['tabindex'] = -1;
$array18 = array (
);$arguments11['style'] = $renderingContext->getVariableProvider()->getByPath('element.properties.styleAttribute', $array18);

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
	';
return $output10;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#