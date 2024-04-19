<?php

class partial_Media_Type_Image_ca5aeef9ae9413475e45f931899c060354163cfd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'ce' => 
  array (
    0 => 'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers',
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
<figure class="image">
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['section'] = NULL;
$arguments76['partial'] = NULL;
$arguments76['delegate'] = NULL;
$arguments76['renderable'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['optional'] = false;
$arguments76['default'] = NULL;
$arguments76['contentAs'] = NULL;
$arguments76['debug'] = true;
$arguments76['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array79);
$array80 = array (
);$array78['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array80);
$array81 = array (
);$array78['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array81);
$arguments76['arguments'] = $array78;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
			';
return $output75;
};
$arguments71 = array();
$arguments71['parameter'] = NULL;
$arguments71['target'] = '';
$arguments71['class'] = '';
$arguments71['title'] = '';
$arguments71['additionalParams'] = '';
$arguments71['additionalAttributes'] = array (
);
$arguments71['useCacheHash'] = false;
$arguments71['addQueryString'] = false;
$arguments71['addQueryStringMethod'] = 'GET';
$arguments71['addQueryStringExclude'] = '';
$arguments71['absolute'] = false;
$array73 = array (
);$arguments71['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array73);
$array74 = array (
);$arguments71['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array74);

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
		';
return $output70;
};
$arguments68 = array();

$output67 .= '';

$output67 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['section'] = NULL;
$arguments118['partial'] = NULL;
$arguments118['delegate'] = NULL;
$arguments118['renderable'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['optional'] = false;
$arguments118['default'] = NULL;
$arguments118['contentAs'] = NULL;
$arguments118['debug'] = true;
$arguments118['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array121);
$array122 = array (
);$array120['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array122);
$array123 = array (
);$array120['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array123);
$arguments118['arguments'] = $array120;

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
					';
return $output117;
};
$arguments113 = array();
$arguments113['image'] = NULL;
$arguments113['configuration'] = NULL;
$array115 = array (
);$arguments113['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array115);
$array116 = array (
);$arguments113['configuration'] = $renderingContext->getVariableProvider()->getByPath('settings.media.popup', $array116);

$output112 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
				';
return $output112;
};
$arguments110 = array();

$output109 .= '';

$output109 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['section'] = NULL;
$arguments127['partial'] = NULL;
$arguments127['delegate'] = NULL;
$arguments127['renderable'] = NULL;
$arguments127['arguments'] = array (
);
$arguments127['optional'] = false;
$arguments127['default'] = NULL;
$arguments127['contentAs'] = NULL;
$arguments127['debug'] = true;
$arguments127['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array130);
$array131 = array (
);$array129['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array131);
$array132 = array (
);$array129['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array132);
$arguments127['arguments'] = $array129;

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
				';
return $output126;
};
$arguments124 = array();
$arguments124['if'] = NULL;

$output109 .= '';

$output109 .= '
			';
return $output109;
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array107);

$expression108 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['section'] = NULL;
$arguments93['partial'] = NULL;
$arguments93['delegate'] = NULL;
$arguments93['renderable'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['optional'] = false;
$arguments93['default'] = NULL;
$arguments93['contentAs'] = NULL;
$arguments93['debug'] = true;
$arguments93['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array96);
$array97 = array (
);$array95['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array97);
$array98 = array (
);$array95['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array98);
$arguments93['arguments'] = $array95;

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
					';
return $output92;
};
$arguments88 = array();
$arguments88['image'] = NULL;
$arguments88['configuration'] = NULL;
$array90 = array (
);$arguments88['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array90);
$array91 = array (
);$arguments88['configuration'] = $renderingContext->getVariableProvider()->getByPath('settings.media.popup', $array91);

$output87 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
				';
return $output87;
};
$arguments85['__elseClosures'][] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['debug'] = true;
$arguments100['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array103);
$array104 = array (
);$array102['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array104);
$array105 = array (
);$array102['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array105);
$arguments100['arguments'] = $array102;

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
				';
return $output99;
};

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
		';
return $output84;
};
$arguments82 = array();
$arguments82['if'] = NULL;

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
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array65);

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['section'] = NULL;
$arguments9['partial'] = NULL;
$arguments9['delegate'] = NULL;
$arguments9['renderable'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$arguments9['default'] = NULL;
$arguments9['contentAs'] = NULL;
$arguments9['debug'] = true;
$arguments9['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array12);
$array13 = array (
);$array11['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array13);
$array14 = array (
);$array11['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array14);
$arguments9['arguments'] = $array11;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
			';
return $output8;
};
$arguments4 = array();
$arguments4['parameter'] = NULL;
$arguments4['target'] = '';
$arguments4['class'] = '';
$arguments4['title'] = '';
$arguments4['additionalParams'] = '';
$arguments4['additionalAttributes'] = array (
);
$arguments4['useCacheHash'] = false;
$arguments4['addQueryString'] = false;
$arguments4['addQueryStringMethod'] = 'GET';
$arguments4['addQueryStringExclude'] = '';
$arguments4['absolute'] = false;
$array6 = array (
);$arguments4['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array6);
$array7 = array (
);$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array7);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['section'] = NULL;
$arguments49['partial'] = NULL;
$arguments49['delegate'] = NULL;
$arguments49['renderable'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['optional'] = false;
$arguments49['default'] = NULL;
$arguments49['contentAs'] = NULL;
$arguments49['debug'] = true;
$arguments49['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array52);
$array53 = array (
);$array51['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array53);
$array54 = array (
);$array51['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array54);
$arguments49['arguments'] = $array51;

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
					';
return $output48;
};
$arguments44 = array();
$arguments44['image'] = NULL;
$arguments44['configuration'] = NULL;
$array46 = array (
);$arguments44['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array46);
$array47 = array (
);$arguments44['configuration'] = $renderingContext->getVariableProvider()->getByPath('settings.media.popup', $array47);

$output43 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
				';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['section'] = NULL;
$arguments58['partial'] = NULL;
$arguments58['delegate'] = NULL;
$arguments58['renderable'] = NULL;
$arguments58['arguments'] = array (
);
$arguments58['optional'] = false;
$arguments58['default'] = NULL;
$arguments58['contentAs'] = NULL;
$arguments58['debug'] = true;
$arguments58['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array61);
$array62 = array (
);$array60['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array62);
$array63 = array (
);$array60['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array63);
$arguments58['arguments'] = $array60;

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
				';
return $output57;
};
$arguments55 = array();
$arguments55['if'] = NULL;

$output40 .= '';

$output40 .= '
			';
return $output40;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
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
$arguments24['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array27);
$array28 = array (
);$array26['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array28);
$array29 = array (
);$array26['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array29);
$arguments24['arguments'] = $array26;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
					';
return $output23;
};
$arguments19 = array();
$arguments19['image'] = NULL;
$arguments19['configuration'] = NULL;
$array21 = array (
);$arguments19['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array21);
$array22 = array (
);$arguments19['configuration'] = $renderingContext->getVariableProvider()->getByPath('settings.media.popup', $array22);

$output18 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
				';
return $output18;
};
$arguments16['__elseClosures'][] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['debug'] = true;
$arguments31['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array34);
$array35 = array (
);$array33['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array35);
$array36 = array (
);$array33['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array36);
$arguments31['arguments'] = $array33;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
				';
return $output30;
};

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
		';
return $output15;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
		<figcaption class="image-caption">
			';
$array139 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.description', $array139)]);

$output138 .= '
		</figcaption>
	';
return $output138;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('file.description', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$arguments133['__thenClosure'] = $renderChildrenClosure134;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output0 .= '
</figure>

';

return $output0;
}


}
#