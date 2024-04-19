<?php

class partial_DocHeader_a91345f9dbaa258e9e5a65e2b2fcfa8426cc1db9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="module-loading-indicator"></div>
<div class="module-docheader t3js-module-docheader">
	<div class="module-docheader-bar module-docheader-bar-navigation t3js-module-docheader-bar t3js-module-docheader-bar-navigation row">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'module-docheader-bar-column-left col-xs-12 text-right';
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'columnCssClass';
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return 'module-docheader-bar-column-right col-xs-12 col-sm-7 col-md-6 col-lg-8 text-right';
};
$arguments42 = array();
$arguments42['value'] = NULL;
$arguments42['name'] = NULL;
$arguments42['name'] = 'columnCssClass';
$renderChildrenClosure43 = ($arguments42['value'] !== null) ? function() use ($arguments42) { return $arguments42['value']; } : $renderChildrenClosure43;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output41 .= '
					<div class="module-docheader-bar-column-left col-xs-12 col-sm-5 col-md-6 col-lg-4">
						<div class="form-inline row">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
								<div class="form-group form-group-sm col-xs-6">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array51);
$arguments48['arguments'] = $array50;

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
								</div>
							';
return $output47;
};
$arguments44 = array();
$arguments44['each'] = NULL;
$arguments44['as'] = NULL;
$arguments44['key'] = NULL;
$arguments44['reverse'] = false;
$arguments44['iteration'] = NULL;
$array46 = array (
);$arguments44['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array46);
$arguments44['as'] = 'menu';

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output41 .= '
						</div>
					</div>
				';
return $output41;
};
$arguments39 = array();

$output38 .= '';

$output38 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return 'module-docheader-bar-column-right col-xs-12 col-sm-9 text-right';
};
$arguments55 = array();
$arguments55['value'] = NULL;
$arguments55['name'] = NULL;
$arguments55['name'] = 'columnCssClass';
$renderChildrenClosure56 = ($arguments55['value'] !== null) ? function() use ($arguments55) { return $arguments55['value']; } : $renderChildrenClosure56;
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output54 .= '
					<div class="module-docheader-bar-column-left col-xs-12 col-sm-3">
						<div class="form-inline">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
								<div class="form-group form-group-sm">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['section'] = NULL;
$arguments61['partial'] = NULL;
$arguments61['delegate'] = NULL;
$arguments61['renderable'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['optional'] = false;
$arguments61['default'] = NULL;
$arguments61['contentAs'] = NULL;
$arguments61['debug'] = true;
$arguments61['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array64);
$arguments61['arguments'] = $array63;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
								</div>
							';
return $output60;
};
$arguments57 = array();
$arguments57['each'] = NULL;
$arguments57['as'] = NULL;
$arguments57['key'] = NULL;
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$array59 = array (
);$arguments57['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array59);
$arguments57['as'] = 'menu';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output54 .= '
						</div>
					</div>
				';
return $output54;
};
$arguments52 = array();
$arguments52['if'] = NULL;

$output38 .= '';

$output38 .= '
			';
return $output38;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array36 = array (
);return $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array36);
};
$arguments34 = array();
$arguments34['subject'] = NULL;
$renderChildrenClosure35 = ($arguments34['subject'] !== null) ? function() use ($arguments34) { return $arguments34['subject']; } : $renderChildrenClosure35;$array33['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);
$array33['1'] = ' > 1';

$expression37 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return 'module-docheader-bar-column-right col-xs-12 col-sm-7 col-md-6 col-lg-8 text-right';
};
$arguments12 = array();
$arguments12['value'] = NULL;
$arguments12['name'] = NULL;
$arguments12['name'] = 'columnCssClass';
$renderChildrenClosure13 = ($arguments12['value'] !== null) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '
					<div class="module-docheader-bar-column-left col-xs-12 col-sm-5 col-md-6 col-lg-4">
						<div class="form-inline row">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
								<div class="form-group form-group-sm col-xs-6">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['debug'] = true;
$arguments18['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array21);
$arguments18['arguments'] = $array20;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
								</div>
							';
return $output17;
};
$arguments14 = array();
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$array16 = array (
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array16);
$arguments14['as'] = 'menu';

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '
						</div>
					</div>
				';
return $output11;
};
$arguments9['__elseClosures'][] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return 'module-docheader-bar-column-right col-xs-12 col-sm-9 text-right';
};
$arguments23 = array();
$arguments23['value'] = NULL;
$arguments23['name'] = NULL;
$arguments23['name'] = 'columnCssClass';
$renderChildrenClosure24 = ($arguments23['value'] !== null) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
					<div class="module-docheader-bar-column-left col-xs-12 col-sm-3">
						<div class="form-inline">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
								<div class="form-group form-group-sm">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['section'] = NULL;
$arguments29['partial'] = NULL;
$arguments29['delegate'] = NULL;
$arguments29['renderable'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['optional'] = false;
$arguments29['default'] = NULL;
$arguments29['contentAs'] = NULL;
$arguments29['debug'] = true;
$arguments29['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array32);
$arguments29['arguments'] = $array31;

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
								</div>
							';
return $output28;
};
$arguments25 = array();
$arguments25['each'] = NULL;
$arguments25['as'] = NULL;
$arguments25['key'] = NULL;
$arguments25['reverse'] = false;
$arguments25['iteration'] = NULL;
$array27 = array (
);$arguments25['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array27);
$arguments25['as'] = 'menu';

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output22 .= '
						</div>
					</div>
				';
return $output22;
};

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
		';
return $output8;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
		<div class="';
$array65 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnCssClass', $array65)]);

$output0 .= '">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
				<span class="typo3-docheader-pagePath">
				 	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$arguments72['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output71 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path', $array76);
};
$arguments74 = array();
$arguments74['value'] = NULL;

$output71 .= isset($arguments74['value']) ? $arguments74['value'] : $renderChildrenClosure75();

$output71 .= '
				</span>
				<strong>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
						';
$array80 = array (
);
$output79 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationIcon', $array80);

$output79 .= ' ';
$array81 = array (
);
$output79 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationTitle', $array81);

$output79 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '[';
$array88 = array (
);
$output87 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationUid', $array88);

$output87 .= ']';
return $output87;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationUid', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output79 .= '
					';
return $output79;
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output71 .= isset($arguments77['value']) ? $arguments77['value'] : $renderChildrenClosure78();

$output71 .= '
				</strong>
				';
$array89 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationAdditionalInfo', $array89)]);

$output71 .= '
			';
return $output71;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformation', $array69);

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments66['__thenClosure'] = $renderChildrenClosure67;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="module-docheader-bar module-docheader-bar-buttons t3js-module-docheader-bar t3js-module-docheader-bar-buttons">
		<div class="module-docheader-bar-column-left">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['renderable'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['debug'] = true;
$arguments90['partial'] = 'ButtonBar';
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['buttons'] = $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.left', $array93);
$arguments90['arguments'] = $array92;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output0 .= '
		</div>
		<div class="module-docheader-bar-column-right">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['section'] = NULL;
$arguments94['partial'] = NULL;
$arguments94['delegate'] = NULL;
$arguments94['renderable'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['optional'] = false;
$arguments94['default'] = NULL;
$arguments94['contentAs'] = NULL;
$arguments94['debug'] = true;
$arguments94['partial'] = 'ButtonBar';
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['buttons'] = $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.right', $array97);
$arguments94['arguments'] = $array96;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
';

return $output0;
}


}
#