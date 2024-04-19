<?php

class partial_Media_Type_9ba629d37b9a604710fa2b1795b0717eeb5cec1a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['partial'] = 'Media/Type/Audio';
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array55);
$array56 = array (
);$array54['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array56);
$array57 = array (
);$array54['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array57);
$array58 = array (
);$array54['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array58);
$arguments52['arguments'] = $array54;

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
	';
return $output51;
};
$arguments49 = array();
$arguments49['value'] = NULL;
$arguments49['value'] = 3;

$output48 .= '';

$output48 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['section'] = NULL;
$arguments62['partial'] = NULL;
$arguments62['delegate'] = NULL;
$arguments62['renderable'] = NULL;
$arguments62['arguments'] = array (
);
$arguments62['optional'] = false;
$arguments62['default'] = NULL;
$arguments62['contentAs'] = NULL;
$arguments62['debug'] = true;
$arguments62['partial'] = 'Media/Type/Video';
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array65);
$array66 = array (
);$array64['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array66);
$array67 = array (
);$array64['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array67);
$array68 = array (
);$array64['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array68);
$arguments62['arguments'] = $array64;

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
	';
return $output61;
};
$arguments59 = array();
$arguments59['value'] = NULL;
$arguments59['value'] = 4;

$output48 .= '';

$output48 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['section'] = NULL;
$arguments72['partial'] = NULL;
$arguments72['delegate'] = NULL;
$arguments72['renderable'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['optional'] = false;
$arguments72['default'] = NULL;
$arguments72['contentAs'] = NULL;
$arguments72['debug'] = true;
$arguments72['partial'] = 'Media/Type/Image';
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array75);
$array76 = array (
);$array74['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array76);
$array77 = array (
);$array74['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array77);
$array78 = array (
);$array74['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array78);
$arguments72['arguments'] = $array74;

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
	';
return $output71;
};
$arguments69 = array();

$output48 .= '';

$output48 .= '
';
return $output48;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array47 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('file.type', $array47);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'Media/Type/Audio';
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array7);
$array8 = array (
);$array6['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array8);
$array9 = array (
);$array6['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array9);
$array10 = array (
);$array6['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array10);
$arguments4['arguments'] = $array6;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['debug'] = true;
$arguments22['partial'] = 'Media/Type/Video';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array25);
$array26 = array (
);$array24['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array26);
$array27 = array (
);$array24['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array27);
$array28 = array (
);$array24['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array28);
$arguments22['arguments'] = $array24;

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
	';
return $output21;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['debug'] = true;
$arguments40['partial'] = 'Media/Type/Image';
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array43);
$array44 = array (
);$array42['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array44);
$array45 = array (
);$array42['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array45);
$array46 = array (
);$array42['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array46);
$arguments40['arguments'] = $array42;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
	';
return $output39;
});
}
}, array($arguments1));

$output0 .= '

';

return $output0;
}


}
#