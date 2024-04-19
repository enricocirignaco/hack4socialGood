<?php

class Standard_action_index_c972bde9cba0765e8098c22166819f9d92c6fbc1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$array8 = array (
);return $renderingContext->getVariableProvider()->getByPath('message', $array8);
};
$arguments6 = array();
$arguments6['value'] = NULL;

$output5 .= isset($arguments6['value']) ? $arguments6['value'] : $renderChildrenClosure7();

$output5 .= '
';
return $output5;
};
$arguments1 = array();
$arguments1['message'] = NULL;
$arguments1['title'] = NULL;
$arguments1['state'] = -2;
$arguments1['iconName'] = NULL;
$arguments1['disableIcon'] = false;
$array3 = array (
);$arguments1['title'] = $renderingContext->getVariableProvider()->getByPath('title', $array3);
$array4 = array (
);$arguments1['state'] = $renderingContext->getVariableProvider()->getByPath('state', $array4);
$renderChildrenClosure2 = ($arguments1['message'] !== null) ? function() use ($arguments1) { return $arguments1['message']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#