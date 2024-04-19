<?php

class partial_Textarea_902327f84f83e3cf1474fd0cd0a9230c0be88c2e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['rows'] = NULL;
$arguments10['cols'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['placeholder'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['readonly'] = NULL;
$arguments10['required'] = false;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$array12 = array (
);$arguments10['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array12);
$array13 = array (
);$arguments10['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array13);
$output14 = '';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array15);

$output14 .= ' form-control';
$arguments10['class'] = $output14;
$array16 = array (
);$arguments10['rows'] = $renderingContext->getVariableProvider()->getByPath('element.properties.rows', $array16);
$array17 = array (
);$arguments10['cols'] = $renderingContext->getVariableProvider()->getByPath('element.properties.cols', $array17);
$array18 = array (
);$arguments10['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array18);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['element'] = NULL;
$arguments19['property'] = NULL;
$arguments19['renderingOptionProperty'] = NULL;
$array21 = array (
);$arguments19['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array21);
$arguments19['property'] = 'fluidAdditionalAttributes';
$arguments10['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
	';
return $output9;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['renderable'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['debug'] = true;
$arguments5['partial'] = 'Field/Field';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array8);
$arguments5['arguments'] = $array7;
$arguments5['contentAs'] = 'elementContent';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
';
return $output4;
};
$arguments1 = array();
$arguments1['renderable'] = NULL;
$array3 = array (
);$arguments1['renderable'] = $renderingContext->getVariableProvider()->getByPath('element', $array3);

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#