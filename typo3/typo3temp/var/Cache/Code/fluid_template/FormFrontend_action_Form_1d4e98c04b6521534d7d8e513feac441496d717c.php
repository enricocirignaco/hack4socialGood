<?php

class FormFrontend_action_Form_1d4e98c04b6521534d7d8e513feac441496d717c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\FormViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$array21 = array (
);$arguments19['partial'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage.templateName', $array21);
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['page'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array23);
$arguments19['arguments'] = $array22;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
			<div class="actions">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['section'] = NULL;
$arguments24['partial'] = NULL;
$arguments24['delegate'] = NULL;
$arguments24['renderable'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['optional'] = false;
$arguments24['default'] = NULL;
$arguments24['contentAs'] = NULL;
$arguments24['debug'] = true;
$arguments24['partial'] = 'Form/Navigation';
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array27);
$arguments24['arguments'] = $array26;

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output18 .= '
			</div>
		';
return $output18;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['object'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = false;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['addQueryStringMethod'] = 'GET';
$arguments5['fieldNamePrefix'] = NULL;
$arguments5['actionUri'] = NULL;
$arguments5['objectName'] = NULL;
$arguments5['hiddenFieldClassName'] = NULL;
$arguments5['enctype'] = NULL;
$arguments5['method'] = NULL;
$arguments5['name'] = NULL;
$arguments5['onreset'] = NULL;
$arguments5['onsubmit'] = NULL;
$arguments5['target'] = NULL;
$arguments5['novalidate'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$array7 = array (
);$arguments5['object'] = $renderingContext->getVariableProvider()->getByPath('form', $array7);
$array8 = array (
);$arguments5['action'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.controllerAction', $array8);
$array9 = array (
);$arguments5['method'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpMethod', $array9);
$array10 = array (
);$arguments5['id'] = $renderingContext->getVariableProvider()->getByPath('form.identifier', $array10);
$array11 = array (
);$arguments5['section'] = $renderingContext->getVariableProvider()->getByPath('form.identifier', $array11);
$array12 = array (
);$arguments5['enctype'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpEnctype', $array12);
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.addQueryString', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$array16 = array (
);$arguments5['argumentsToBeExcludedFromQueryString'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.argumentsToBeExcludedFromQueryString', $array16);
$array17 = array (
);$arguments5['additionalParams'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.additionalParams', $array17);

$output4 .= TYPO3\CMS\Form\ViewHelpers\FormViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
';
return $output4;
};
$arguments1 = array();
$arguments1['renderable'] = NULL;
$array3 = array (
);$arguments1['renderable'] = $renderingContext->getVariableProvider()->getByPath('form', $array3);

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#