<?php

class Standard_action_index_28750beb5d6ee13fd7da47893979b1ee4d97b90f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="scaffold t3js-scaffold ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array3['0'] = '!';
$array4 = array (
);$array3['1'] = $renderingContext->getVariableProvider()->getByPath('moduleMenuCollapsed', $array4);

$expression5 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['then'] = 'scaffold-modulemenu-expanded';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '">
	<div class="t3js-scaffold-header">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$array8 = array (
);return $renderingContext->getVariableProvider()->getByPath('topbar', $array8);
};
$arguments6 = array();
$arguments6['value'] = NULL;

$output0 .= isset($arguments6['value']) ? $arguments6['value'] : $renderChildrenClosure7();

$output0 .= '
	</div>
	<div class="scaffold-modulemenu t3js-scaffold-modulemenu">
		<div class="modulemenu t3js-modulemenu">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('moduleMenu', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output0 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output0 .= '
		</div>
	</div>
	<div class="scaffold-content t3js-scaffold-content">
		<div class="scaffold-content-navigation t3js-scaffold-content-navigation">
			<div class="scaffold-content-navigation-component" data-component="typo3-navigationIframe">
				<iframe name="nav_frame" src="about:blank" id="typo3-navigationContainerIframe"  scrolling="no" class="scaffold-content-navigation-iframe t3js-scaffold-content-navigation-iframe"></iframe>
			</div>
		</div>
		<div class="scaffold-content-module t3js-scaffold-content-module">
			<iframe name="list_frame" id="typo3-contentIframe" scrolling="no" class="scaffold-content-module-iframe t3js-scaffold-content-module-iframe"></iframe>
		</div>
		<div class="scaffold-content-overlay t3js-scaffold-content-overlay"></div>
	</div>
</div>
';

return $output0;
}


}
#