<?php

class Standard_action_PageZero_4409d8ee3f55a1611ba88bc0c1eb7e17fe1a904c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section PageZeroTableRow
 */
public function section_b1edc275d881f3156f547d1f0d6261281c53f832(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'maxCharacters';
$arguments1['value'] = 30;
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('page.hidden', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['then'] = 'inactive';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '">
        <td class="nowrap">
            <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string8 = '{level * 20}';
$array9 = array (
  0 => '{level * 20}',
  1 => '{level * 20}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string8, $array9)]);

$output0 .= 'px"></span>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['route'] = NULL;
$arguments105['parameters'] = array (
);
$arguments105['referenceType'] = 'absolute';
$arguments105['route'] = 'web_ts';
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array108);
$arguments105['parameters'] = $array107;

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output104 .= '"
                               title="ID: ';
$array109 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array109)]);

$output104 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['table'] = NULL;
$arguments110['row'] = NULL;
$arguments110['size'] = 'small';
$arguments110['alternativeMarkupIdentifier'] = NULL;
$arguments110['table'] = 'pages';
$array112 = array (
);$arguments110['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array112);

$output104 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output104 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array116 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array116)]);
};
$arguments113 = array();
$arguments113['maxCharacters'] = NULL;
$arguments113['append'] = '&hellip;';
$arguments113['respectWordBoundaries'] = true;
$arguments113['respectHtml'] = true;
$array115 = array (
);$arguments113['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array115);

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output104 .= '
                            </a>
                        ';
return $output104;
};
$arguments102 = array();

$output101 .= '';

$output101 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                            <span title="ID: ';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array120)]);

$output119 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['table'] = NULL;
$arguments121['row'] = NULL;
$arguments121['size'] = 'small';
$arguments121['alternativeMarkupIdentifier'] = NULL;
$arguments121['table'] = 'pages';
$array123 = array (
);$arguments121['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array123);

$output119 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output119 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$array127 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array127)]);
};
$arguments124 = array();
$arguments124['maxCharacters'] = NULL;
$arguments124['append'] = '&hellip;';
$arguments124['respectWordBoundaries'] = true;
$arguments124['respectHtml'] = true;
$array126 = array (
);$arguments124['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array126);

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output119 .= '
                            </span>
                        ';
return $output119;
};
$arguments117 = array();
$arguments117['if'] = NULL;

$output101 .= '';

$output101 .= '
                    ';
return $output101;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['route'] = NULL;
$arguments77['parameters'] = array (
);
$arguments77['referenceType'] = 'absolute';
$arguments77['route'] = 'web_ts';
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array80);
$arguments77['parameters'] = $array79;

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output76 .= '"
                               title="ID: ';
$array81 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array81)]);

$output76 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['table'] = NULL;
$arguments82['row'] = NULL;
$arguments82['size'] = 'small';
$arguments82['alternativeMarkupIdentifier'] = NULL;
$arguments82['table'] = 'pages';
$array84 = array (
);$arguments82['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array84);

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output76 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array88 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array88)]);
};
$arguments85 = array();
$arguments85['maxCharacters'] = NULL;
$arguments85['append'] = '&hellip;';
$arguments85['respectWordBoundaries'] = true;
$arguments85['respectHtml'] = true;
$array87 = array (
);$arguments85['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array87);

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output76 .= '
                            </a>
                        ';
return $output76;
};
$arguments74['__elseClosures'][] = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                            <span title="ID: ';
$array90 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array90)]);

$output89 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['table'] = NULL;
$arguments91['row'] = NULL;
$arguments91['size'] = 'small';
$arguments91['alternativeMarkupIdentifier'] = NULL;
$arguments91['table'] = 'pages';
$array93 = array (
);$arguments91['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array93);

$output89 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output89 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array97 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array97)]);
};
$arguments94 = array();
$arguments94['maxCharacters'] = NULL;
$arguments94['append'] = '&hellip;';
$arguments94['respectWordBoundaries'] = true;
$arguments94['respectHtml'] = true;
$array96 = array (
);$arguments94['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array96);

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output89 .= '
                            </span>
                        ';
return $output89;
};

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output70 .= '';

$output70 .= '
            ';
return $output70;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['route'] = NULL;
$arguments44['parameters'] = array (
);
$arguments44['referenceType'] = 'absolute';
$arguments44['route'] = 'web_ts';
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array47);
$arguments44['parameters'] = $array46;

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '"
                               title="ID: ';
$array48 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array48)]);

$output43 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['table'] = NULL;
$arguments49['row'] = NULL;
$arguments49['size'] = 'small';
$arguments49['alternativeMarkupIdentifier'] = NULL;
$arguments49['table'] = 'pages';
$array51 = array (
);$arguments49['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array51);

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output43 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array55 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array55)]);
};
$arguments52 = array();
$arguments52['maxCharacters'] = NULL;
$arguments52['append'] = '&hellip;';
$arguments52['respectWordBoundaries'] = true;
$arguments52['respectHtml'] = true;
$array54 = array (
);$arguments52['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array54);

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output43 .= '
                            </a>
                        ';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                            <span title="ID: ';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array59)]);

$output58 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['table'] = NULL;
$arguments60['row'] = NULL;
$arguments60['size'] = 'small';
$arguments60['alternativeMarkupIdentifier'] = NULL;
$arguments60['table'] = 'pages';
$array62 = array (
);$arguments60['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array62);

$output58 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output58 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$array66 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array66)]);
};
$arguments63 = array();
$arguments63['maxCharacters'] = NULL;
$arguments63['append'] = '&hellip;';
$arguments63['respectWordBoundaries'] = true;
$arguments63['respectHtml'] = true;
$array65 = array (
);$arguments63['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array65);

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output58 .= '
                            </span>
                        ';
return $output58;
};
$arguments56 = array();
$arguments56['if'] = NULL;

$output40 .= '';

$output40 .= '
                    ';
return $output40;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['route'] = NULL;
$arguments16['parameters'] = array (
);
$arguments16['referenceType'] = 'absolute';
$arguments16['route'] = 'web_ts';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array19);
$arguments16['parameters'] = $array18;

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output15 .= '"
                               title="ID: ';
$array20 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array20)]);

$output15 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['table'] = NULL;
$arguments21['row'] = NULL;
$arguments21['size'] = 'small';
$arguments21['alternativeMarkupIdentifier'] = NULL;
$arguments21['table'] = 'pages';
$array23 = array (
);$arguments21['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array23);

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output15 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array27 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array27)]);
};
$arguments24 = array();
$arguments24['maxCharacters'] = NULL;
$arguments24['append'] = '&hellip;';
$arguments24['respectWordBoundaries'] = true;
$arguments24['respectHtml'] = true;
$array26 = array (
);$arguments24['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array26);

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output15 .= '
                            </a>
                        ';
return $output15;
};
$arguments13['__elseClosures'][] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                            <span title="ID: ';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array29)]);

$output28 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['table'] = NULL;
$arguments30['row'] = NULL;
$arguments30['size'] = 'small';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['table'] = 'pages';
$array32 = array (
);$arguments30['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array32);

$output28 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output28 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$array36 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array36)]);
};
$arguments33 = array();
$arguments33['maxCharacters'] = NULL;
$arguments33['append'] = '&hellip;';
$arguments33['respectWordBoundaries'] = true;
$arguments33['respectHtml'] = true;
$array35 = array (
);$arguments33['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array35);

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output28 .= '
                            </span>
                        ';
return $output28;
};

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
                ';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['value'] = NULL;
$arguments157['name'] = NULL;
$arguments157['name'] = 'web_ts_parameters';
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array160);
$array161 = array (
);$array159['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array161);
$arguments157['value'] = $array159;
$renderChildrenClosure158 = ($arguments157['value'] !== null) ? function() use ($arguments157) { return $arguments157['value']; } : $renderChildrenClosure158;
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output156 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['route'] = NULL;
$arguments162['parameters'] = array (
);
$arguments162['referenceType'] = 'absolute';
$arguments162['route'] = 'web_ts';
$array164 = array (
);$arguments162['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array164);

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output156 .= '"
                       title="ID: ';
$array165 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array165)]);

$output156 .= ' ';
$array166 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.sitetitle', $array166)]);

$output156 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['table'] = NULL;
$arguments167['row'] = NULL;
$arguments167['size'] = 'small';
$arguments167['alternativeMarkupIdentifier'] = NULL;
$arguments167['table'] = 'sys_template';
$array169 = array (
);$arguments167['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array169);

$output156 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output156 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array173 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array173)]);
};
$arguments170 = array();
$arguments170['maxCharacters'] = NULL;
$arguments170['append'] = '&hellip;';
$arguments170['respectWordBoundaries'] = true;
$arguments170['respectHtml'] = true;
$array172 = array (
);$arguments170['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array172);

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output156 .= '
                    </a>
                ';
return $output156;
};
$arguments154 = array();

$output153 .= '';

$output153 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments174 = array();
$arguments174['if'] = NULL;

$output153 .= '';

$output153 .= '
            ';
return $output153;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array151);

$expression152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['value'] = NULL;
$arguments133['name'] = NULL;
$arguments133['name'] = 'web_ts_parameters';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array136);
$array137 = array (
);$array135['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array137);
$arguments133['value'] = $array135;
$renderChildrenClosure134 = ($arguments133['value'] !== null) ? function() use ($arguments133) { return $arguments133['value']; } : $renderChildrenClosure134;
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output132 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['route'] = NULL;
$arguments138['parameters'] = array (
);
$arguments138['referenceType'] = 'absolute';
$arguments138['route'] = 'web_ts';
$array140 = array (
);$arguments138['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array140);

$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext)]);

$output132 .= '"
                       title="ID: ';
$array141 = array (
);
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array141)]);

$output132 .= ' ';
$array142 = array (
);
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.sitetitle', $array142)]);

$output132 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['table'] = NULL;
$arguments143['row'] = NULL;
$arguments143['size'] = 'small';
$arguments143['alternativeMarkupIdentifier'] = NULL;
$arguments143['table'] = 'sys_template';
$array145 = array (
);$arguments143['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array145);

$output132 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output132 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array149 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array149)]);
};
$arguments146 = array();
$arguments146['maxCharacters'] = NULL;
$arguments146['append'] = '&hellip;';
$arguments146['respectWordBoundaries'] = true;
$arguments146['respectHtml'] = true;
$array148 = array (
);$arguments146['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array148);

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output132 .= '
                    </a>
                ';
return $output132;
};
$arguments130['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$arguments182['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array185 = array (
);$array184['0'] = $renderingContext->getVariableProvider()->getByPath('template.root', $array185);

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments182['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['identifier'] = NULL;
$arguments187['size'] = 'small';
$arguments187['overlay'] = NULL;
$arguments187['state'] = 'default';
$arguments187['alternativeMarkupIdentifier'] = NULL;
$arguments187['identifier'] = 'status-status-checked';
$arguments182['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
            ';
return $output181;
};
$arguments176 = array();
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments176['__thenClosure'] = $renderChildrenClosure177;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array197['0'] = '!';
$array198 = array (
);$array197['1'] = $renderingContext->getVariableProvider()->getByPath('template.root', $array198);

$expression199 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['identifier'] = NULL;
$arguments200['size'] = 'small';
$arguments200['overlay'] = NULL;
$arguments200['state'] = 'default';
$arguments200['alternativeMarkupIdentifier'] = NULL;
$arguments200['identifier'] = 'status-status-checked';
$arguments195['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
            ';
return $output194;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array192);

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$arguments189['__thenClosure'] = $renderChildrenClosure190;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output0 .= '
        </td>
    </tr>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
        <!-- Additional templates -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['section'] = NULL;
$arguments226['partial'] = NULL;
$arguments226['delegate'] = NULL;
$arguments226['renderable'] = NULL;
$arguments226['arguments'] = array (
);
$arguments226['optional'] = false;
$arguments226['default'] = NULL;
$arguments226['contentAs'] = NULL;
$arguments226['debug'] = true;
$arguments226['section'] = 'PageZeroTableRow';
// Rendering Array
$array228 = array();
$array228['page'] = 0;
$array229 = array (
);$array228['level'] = $renderingContext->getVariableProvider()->getByPath('level', $array229);
$array230 = array (
);$array228['template'] = $renderingContext->getVariableProvider()->getByPath('template', $array230);
$arguments226['arguments'] = $array228;

$output225 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
                ';
return $output225;
};
$arguments220 = array();
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$arguments220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array223);
$array222['1'] = ' > 0';

$expression224 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
$arguments220['__thenClosure'] = $renderChildrenClosure221;

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
            ';
return $output219;
};
$arguments216 = array();
$arguments216['each'] = NULL;
$arguments216['as'] = NULL;
$arguments216['key'] = NULL;
$arguments216['reverse'] = false;
$arguments216['iteration'] = NULL;
$array218 = array (
);$arguments216['each'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array218);
$arguments216['as'] = 'template';
$arguments216['iteration'] = 'i';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '
        ';
return $output215;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array210 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$array213 = array (
);return $renderingContext->getVariableProvider()->getByPath('page._templates', $array213);
};
$arguments211 = array();
$arguments211['subject'] = NULL;
$renderChildrenClosure212 = ($arguments211['subject'] !== null) ? function() use ($arguments211) { return $arguments211['subject']; } : $renderChildrenClosure212;$array210['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$expression214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = $renderChildrenClosure209;

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
        <!-- Subpages -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['section'] = NULL;
$arguments243['partial'] = NULL;
$arguments243['delegate'] = NULL;
$arguments243['renderable'] = NULL;
$arguments243['arguments'] = array (
);
$arguments243['optional'] = false;
$arguments243['default'] = NULL;
$arguments243['contentAs'] = NULL;
$arguments243['debug'] = true;
$arguments243['section'] = 'PageZeroTableRow';
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array246);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string247 = '{level + 1}';
$array248 = array (
  0 => '{level + 1}',
  1 => '{level + 1}',
);
$array245['level'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string247, $array248);
$array249 = array (
);$array245['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array249);
$arguments243['arguments'] = $array245;

$output242 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output242 .= '
            ';
return $output242;
};
$arguments239 = array();
$arguments239['each'] = NULL;
$arguments239['as'] = NULL;
$arguments239['key'] = NULL;
$arguments239['reverse'] = false;
$arguments239['iteration'] = NULL;
$array241 = array (
);$arguments239['each'] = $renderingContext->getVariableProvider()->getByPath('page._nodes', $array241);
$arguments239['as'] = 'page';

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
        ';
return $output238;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$array236 = array (
);return $renderingContext->getVariableProvider()->getByPath('page._nodes', $array236);
};
$arguments234 = array();
$arguments234['subject'] = NULL;
$renderChildrenClosure235 = ($arguments234['subject'] !== null) ? function() use ($arguments234) { return $arguments234['subject']; } : $renderChildrenClosure235;$array233['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$expression237 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = $renderChildrenClosure232;

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output207 .= '
    ';
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output250 = '';

$output250 .= '
<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'moduleTitle';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output250 .= '</h1>
<div>
    <p class="lead">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$arguments253['key'] = 'overview';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output250 .= '</p>
    <div class="table-fit">
        <table class="table table-striped table-hover" id="ts-overview">
        <thead>
            <tr>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['key'] = NULL;
$arguments255['id'] = NULL;
$arguments255['default'] = NULL;
$arguments255['arguments'] = NULL;
$arguments255['extensionName'] = NULL;
$arguments255['languageKey'] = NULL;
$arguments255['alternativeLanguageKeys'] = NULL;
$arguments255['key'] = 'pageName';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext)]);

$output250 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['key'] = NULL;
$arguments257['id'] = NULL;
$arguments257['default'] = NULL;
$arguments257['arguments'] = NULL;
$arguments257['extensionName'] = NULL;
$arguments257['languageKey'] = NULL;
$arguments257['alternativeLanguageKeys'] = NULL;
$arguments257['key'] = 'templates';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext)]);

$output250 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['key'] = NULL;
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['languageKey'] = NULL;
$arguments259['alternativeLanguageKeys'] = NULL;
$arguments259['key'] = 'isRoot';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output250 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['key'] = NULL;
$arguments261['id'] = NULL;
$arguments261['default'] = NULL;
$arguments261['arguments'] = NULL;
$arguments261['extensionName'] = NULL;
$arguments261['languageKey'] = NULL;
$arguments261['alternativeLanguageKeys'] = NULL;
$arguments261['key'] = 'isExt';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext)]);

$output250 .= '</th>
            </tr>
        </thead>
        <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['section'] = NULL;
$arguments267['partial'] = NULL;
$arguments267['delegate'] = NULL;
$arguments267['renderable'] = NULL;
$arguments267['arguments'] = array (
);
$arguments267['optional'] = false;
$arguments267['default'] = NULL;
$arguments267['contentAs'] = NULL;
$arguments267['debug'] = true;
$arguments267['section'] = 'PageZeroTableRow';
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array270);
$array269['level'] = 0;
$array271 = array (
);$array269['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array271);
$arguments267['arguments'] = $array269;

$output266 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output266 .= '
            ';
return $output266;
};
$arguments263 = array();
$arguments263['each'] = NULL;
$arguments263['as'] = NULL;
$arguments263['key'] = NULL;
$arguments263['reverse'] = false;
$arguments263['iteration'] = NULL;
$array265 = array (
);$arguments263['each'] = $renderingContext->getVariableProvider()->getByPath('pageTree', $array265);
$arguments263['as'] = 'page';

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output250 .= '
        </tbody>
        </table>
    </div>
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['value'] = NULL;
$arguments275['name'] = NULL;
$arguments275['name'] = 'maxCharacters';
$arguments275['value'] = 30;
$renderChildrenClosure276 = ($arguments275['value'] !== null) ? function() use ($arguments275) { return $arguments275['value']; } : $renderChildrenClosure276;
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext)]);

$output274 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['then'] = NULL;
$arguments277['else'] = NULL;
$arguments277['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array279 = array();
$array280 = array (
);$array279['0'] = $renderingContext->getVariableProvider()->getByPath('page.hidden', $array280);

$expression281 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments277['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression281(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array279)
					),
					$renderingContext
				);
$arguments277['then'] = 'inactive';

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output274 .= '">
        <td class="nowrap">
            <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string282 = '{level * 20}';
$array283 = array (
  0 => '{level * 20}',
  1 => '{level * 20}',
);

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string282, $array283)]);

$output274 .= 'px"></span>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output347 = '';

$output347 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments379 = array();
$arguments379['route'] = NULL;
$arguments379['parameters'] = array (
);
$arguments379['referenceType'] = 'absolute';
$arguments379['route'] = 'web_ts';
// Rendering Array
$array381 = array();
$array382 = array (
);$array381['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array382);
$arguments379['parameters'] = $array381;

$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext)]);

$output378 .= '"
                               title="ID: ';
$array383 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array383)]);

$output378 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['table'] = NULL;
$arguments384['row'] = NULL;
$arguments384['size'] = 'small';
$arguments384['alternativeMarkupIdentifier'] = NULL;
$arguments384['table'] = 'pages';
$array386 = array (
);$arguments384['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array386);

$output378 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output378 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$array390 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array390)]);
};
$arguments387 = array();
$arguments387['maxCharacters'] = NULL;
$arguments387['append'] = '&hellip;';
$arguments387['respectWordBoundaries'] = true;
$arguments387['respectHtml'] = true;
$array389 = array (
);$arguments387['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array389);

$output378 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output378 .= '
                            </a>
                        ';
return $output378;
};
$arguments376 = array();

$output375 .= '';

$output375 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
                            <span title="ID: ';
$array394 = array (
);
$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array394)]);

$output393 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments395 = array();
$arguments395['table'] = NULL;
$arguments395['row'] = NULL;
$arguments395['size'] = 'small';
$arguments395['alternativeMarkupIdentifier'] = NULL;
$arguments395['table'] = 'pages';
$array397 = array (
);$arguments395['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array397);

$output393 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output393 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$array401 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array401)]);
};
$arguments398 = array();
$arguments398['maxCharacters'] = NULL;
$arguments398['append'] = '&hellip;';
$arguments398['respectWordBoundaries'] = true;
$arguments398['respectHtml'] = true;
$array400 = array (
);$arguments398['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array400);

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output393 .= '
                            </span>
                        ';
return $output393;
};
$arguments391 = array();
$arguments391['if'] = NULL;

$output375 .= '';

$output375 .= '
                    ';
return $output375;
};
$arguments348 = array();
$arguments348['then'] = NULL;
$arguments348['else'] = NULL;
$arguments348['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array372 = array();
$array373 = array (
);$array372['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array373);

$expression374 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments348['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);
$arguments348['__thenClosure'] = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['route'] = NULL;
$arguments351['parameters'] = array (
);
$arguments351['referenceType'] = 'absolute';
$arguments351['route'] = 'web_ts';
// Rendering Array
$array353 = array();
$array354 = array (
);$array353['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array354);
$arguments351['parameters'] = $array353;

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output350 .= '"
                               title="ID: ';
$array355 = array (
);
$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array355)]);

$output350 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['table'] = NULL;
$arguments356['row'] = NULL;
$arguments356['size'] = 'small';
$arguments356['alternativeMarkupIdentifier'] = NULL;
$arguments356['table'] = 'pages';
$array358 = array (
);$arguments356['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array358);

$output350 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output350 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$array362 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array362)]);
};
$arguments359 = array();
$arguments359['maxCharacters'] = NULL;
$arguments359['append'] = '&hellip;';
$arguments359['respectWordBoundaries'] = true;
$arguments359['respectHtml'] = true;
$array361 = array (
);$arguments359['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array361);

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output350 .= '
                            </a>
                        ';
return $output350;
};
$arguments348['__elseClosures'][] = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
                            <span title="ID: ';
$array364 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array364)]);

$output363 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['table'] = NULL;
$arguments365['row'] = NULL;
$arguments365['size'] = 'small';
$arguments365['alternativeMarkupIdentifier'] = NULL;
$arguments365['table'] = 'pages';
$array367 = array (
);$arguments365['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array367);

$output363 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output363 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$array371 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array371)]);
};
$arguments368 = array();
$arguments368['maxCharacters'] = NULL;
$arguments368['append'] = '&hellip;';
$arguments368['respectWordBoundaries'] = true;
$arguments368['respectHtml'] = true;
$array370 = array (
);$arguments368['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array370);

$output363 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output363 .= '
                            </span>
                        ';
return $output363;
};

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output347 .= '
                ';
return $output347;
};
$arguments345 = array();

$output344 .= '';

$output344 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments402 = array();
$arguments402['if'] = NULL;

$output344 .= '';

$output344 .= '
            ';
return $output344;
};
$arguments284 = array();
$arguments284['then'] = NULL;
$arguments284['else'] = NULL;
$arguments284['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array341 = array();
$array342 = array (
);$array341['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array342);

$expression343 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments284['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression343(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array341)
					),
					$renderingContext
				);
$arguments284['__thenClosure'] = function() use ($renderingContext, $self) {
$output286 = '';

$output286 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['route'] = NULL;
$arguments318['parameters'] = array (
);
$arguments318['referenceType'] = 'absolute';
$arguments318['route'] = 'web_ts';
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array321);
$arguments318['parameters'] = $array320;

$output317 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output317 .= '"
                               title="ID: ';
$array322 = array (
);
$output317 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array322)]);

$output317 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['table'] = NULL;
$arguments323['row'] = NULL;
$arguments323['size'] = 'small';
$arguments323['alternativeMarkupIdentifier'] = NULL;
$arguments323['table'] = 'pages';
$array325 = array (
);$arguments323['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array325);

$output317 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output317 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$array329 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array329)]);
};
$arguments326 = array();
$arguments326['maxCharacters'] = NULL;
$arguments326['append'] = '&hellip;';
$arguments326['respectWordBoundaries'] = true;
$arguments326['respectHtml'] = true;
$array328 = array (
);$arguments326['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array328);

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output317 .= '
                            </a>
                        ';
return $output317;
};
$arguments315 = array();

$output314 .= '';

$output314 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
                            <span title="ID: ';
$array333 = array (
);
$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array333)]);

$output332 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['table'] = NULL;
$arguments334['row'] = NULL;
$arguments334['size'] = 'small';
$arguments334['alternativeMarkupIdentifier'] = NULL;
$arguments334['table'] = 'pages';
$array336 = array (
);$arguments334['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array336);

$output332 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output332 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$array340 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array340)]);
};
$arguments337 = array();
$arguments337['maxCharacters'] = NULL;
$arguments337['append'] = '&hellip;';
$arguments337['respectWordBoundaries'] = true;
$arguments337['respectHtml'] = true;
$array339 = array (
);$arguments337['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array339);

$output332 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output332 .= '
                            </span>
                        ';
return $output332;
};
$arguments330 = array();
$arguments330['if'] = NULL;

$output314 .= '';

$output314 .= '
                    ';
return $output314;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array312);

$expression313 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);
$arguments287['__thenClosure'] = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['route'] = NULL;
$arguments290['parameters'] = array (
);
$arguments290['referenceType'] = 'absolute';
$arguments290['route'] = 'web_ts';
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array293);
$arguments290['parameters'] = $array292;

$output289 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext)]);

$output289 .= '"
                               title="ID: ';
$array294 = array (
);
$output289 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array294)]);

$output289 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['table'] = NULL;
$arguments295['row'] = NULL;
$arguments295['size'] = 'small';
$arguments295['alternativeMarkupIdentifier'] = NULL;
$arguments295['table'] = 'pages';
$array297 = array (
);$arguments295['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array297);

$output289 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output289 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$array301 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array301)]);
};
$arguments298 = array();
$arguments298['maxCharacters'] = NULL;
$arguments298['append'] = '&hellip;';
$arguments298['respectWordBoundaries'] = true;
$arguments298['respectHtml'] = true;
$array300 = array (
);$arguments298['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array300);

$output289 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output289 .= '
                            </a>
                        ';
return $output289;
};
$arguments287['__elseClosures'][] = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                            <span title="ID: ';
$array303 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array303)]);

$output302 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['table'] = NULL;
$arguments304['row'] = NULL;
$arguments304['size'] = 'small';
$arguments304['alternativeMarkupIdentifier'] = NULL;
$arguments304['table'] = 'pages';
$array306 = array (
);$arguments304['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array306);

$output302 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output302 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$array310 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array310)]);
};
$arguments307 = array();
$arguments307['maxCharacters'] = NULL;
$arguments307['append'] = '&hellip;';
$arguments307['respectWordBoundaries'] = true;
$arguments307['respectHtml'] = true;
$array309 = array (
);$arguments307['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array309);

$output302 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output302 .= '
                            </span>
                        ';
return $output302;
};

$output286 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output286 .= '
                ';
return $output286;
};
$arguments284['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output274 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['value'] = NULL;
$arguments431['name'] = NULL;
$arguments431['name'] = 'web_ts_parameters';
// Rendering Array
$array433 = array();
$array434 = array (
);$array433['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array434);
$array435 = array (
);$array433['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array435);
$arguments431['value'] = $array433;
$renderChildrenClosure432 = ($arguments431['value'] !== null) ? function() use ($arguments431) { return $arguments431['value']; } : $renderChildrenClosure432;
$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext)]);

$output430 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['route'] = NULL;
$arguments436['parameters'] = array (
);
$arguments436['referenceType'] = 'absolute';
$arguments436['route'] = 'web_ts';
$array438 = array (
);$arguments436['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array438);

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext)]);

$output430 .= '"
                       title="ID: ';
$array439 = array (
);
$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array439)]);

$output430 .= ' ';
$array440 = array (
);
$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.sitetitle', $array440)]);

$output430 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['table'] = NULL;
$arguments441['row'] = NULL;
$arguments441['size'] = 'small';
$arguments441['alternativeMarkupIdentifier'] = NULL;
$arguments441['table'] = 'sys_template';
$array443 = array (
);$arguments441['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array443);

$output430 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output430 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$array447 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array447)]);
};
$arguments444 = array();
$arguments444['maxCharacters'] = NULL;
$arguments444['append'] = '&hellip;';
$arguments444['respectWordBoundaries'] = true;
$arguments444['respectHtml'] = true;
$array446 = array (
);$arguments444['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array446);

$output430 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output430 .= '
                    </a>
                ';
return $output430;
};
$arguments428 = array();

$output427 .= '';

$output427 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments448 = array();
$arguments448['if'] = NULL;

$output427 .= '';

$output427 .= '
            ';
return $output427;
};
$arguments404 = array();
$arguments404['then'] = NULL;
$arguments404['else'] = NULL;
$arguments404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array424 = array();
$array425 = array (
);$array424['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array425);

$expression426 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression426(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array424)
					),
					$renderingContext
				);
$arguments404['__thenClosure'] = function() use ($renderingContext, $self) {
$output406 = '';

$output406 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments407 = array();
$arguments407['value'] = NULL;
$arguments407['name'] = NULL;
$arguments407['name'] = 'web_ts_parameters';
// Rendering Array
$array409 = array();
$array410 = array (
);$array409['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array410);
$array411 = array (
);$array409['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array411);
$arguments407['value'] = $array409;
$renderChildrenClosure408 = ($arguments407['value'] !== null) ? function() use ($arguments407) { return $arguments407['value']; } : $renderChildrenClosure408;
$output406 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext)]);

$output406 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['route'] = NULL;
$arguments412['parameters'] = array (
);
$arguments412['referenceType'] = 'absolute';
$arguments412['route'] = 'web_ts';
$array414 = array (
);$arguments412['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array414);

$output406 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext)]);

$output406 .= '"
                       title="ID: ';
$array415 = array (
);
$output406 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array415)]);

$output406 .= ' ';
$array416 = array (
);
$output406 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.sitetitle', $array416)]);

$output406 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['table'] = NULL;
$arguments417['row'] = NULL;
$arguments417['size'] = 'small';
$arguments417['alternativeMarkupIdentifier'] = NULL;
$arguments417['table'] = 'sys_template';
$array419 = array (
);$arguments417['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array419);

$output406 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output406 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$array423 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array423)]);
};
$arguments420 = array();
$arguments420['maxCharacters'] = NULL;
$arguments420['append'] = '&hellip;';
$arguments420['respectWordBoundaries'] = true;
$arguments420['respectHtml'] = true;
$array422 = array (
);$arguments420['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array422);

$output406 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output406 .= '
                    </a>
                ';
return $output406;
};
$arguments404['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output274 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['then'] = NULL;
$arguments456['else'] = NULL;
$arguments456['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array458 = array();
$array459 = array (
);$array458['0'] = $renderingContext->getVariableProvider()->getByPath('template.root', $array459);

$expression460 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments456['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression460(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array458)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments461 = array();
$arguments461['identifier'] = NULL;
$arguments461['size'] = 'small';
$arguments461['overlay'] = NULL;
$arguments461['state'] = 'default';
$arguments461['alternativeMarkupIdentifier'] = NULL;
$arguments461['identifier'] = 'status-status-checked';
$arguments456['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
            ';
return $output455;
};
$arguments450 = array();
$arguments450['then'] = NULL;
$arguments450['else'] = NULL;
$arguments450['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array452 = array();
$array453 = array (
);$array452['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array453);

$expression454 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments450['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression454(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array452)
					),
					$renderingContext
				);
$arguments450['__thenClosure'] = $renderChildrenClosure451;

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output274 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$output468 = '';

$output468 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments469 = array();
$arguments469['then'] = NULL;
$arguments469['else'] = NULL;
$arguments469['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array471 = array();
$array471['0'] = '!';
$array472 = array (
);$array471['1'] = $renderingContext->getVariableProvider()->getByPath('template.root', $array472);

$expression473 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments469['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression473(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array471)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments474 = array();
$arguments474['identifier'] = NULL;
$arguments474['size'] = 'small';
$arguments474['overlay'] = NULL;
$arguments474['state'] = 'default';
$arguments474['alternativeMarkupIdentifier'] = NULL;
$arguments474['identifier'] = 'status-status-checked';
$arguments469['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output468 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext);

$output468 .= '
            ';
return $output468;
};
$arguments463 = array();
$arguments463['then'] = NULL;
$arguments463['else'] = NULL;
$arguments463['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array465 = array();
$array466 = array (
);$array465['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array466);

$expression467 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments463['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression467(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array465)
					),
					$renderingContext
				);
$arguments463['__thenClosure'] = $renderChildrenClosure464;

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output274 .= '
        </td>
    </tr>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
        <!-- Additional templates -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$output493 = '';

$output493 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output499 = '';

$output499 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['section'] = NULL;
$arguments500['partial'] = NULL;
$arguments500['delegate'] = NULL;
$arguments500['renderable'] = NULL;
$arguments500['arguments'] = array (
);
$arguments500['optional'] = false;
$arguments500['default'] = NULL;
$arguments500['contentAs'] = NULL;
$arguments500['debug'] = true;
$arguments500['section'] = 'PageZeroTableRow';
// Rendering Array
$array502 = array();
$array502['page'] = 0;
$array503 = array (
);$array502['level'] = $renderingContext->getVariableProvider()->getByPath('level', $array503);
$array504 = array (
);$array502['template'] = $renderingContext->getVariableProvider()->getByPath('template', $array504);
$arguments500['arguments'] = $array502;

$output499 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output499 .= '
                ';
return $output499;
};
$arguments494 = array();
$arguments494['then'] = NULL;
$arguments494['else'] = NULL;
$arguments494['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array496 = array();
$array497 = array (
);$array496['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array497);
$array496['1'] = ' > 0';

$expression498 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments494['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression498(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array496)
					),
					$renderingContext
				);
$arguments494['__thenClosure'] = $renderChildrenClosure495;

$output493 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output493 .= '
            ';
return $output493;
};
$arguments490 = array();
$arguments490['each'] = NULL;
$arguments490['as'] = NULL;
$arguments490['key'] = NULL;
$arguments490['reverse'] = false;
$arguments490['iteration'] = NULL;
$array492 = array (
);$arguments490['each'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array492);
$arguments490['as'] = 'template';
$arguments490['iteration'] = 'i';

$output489 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
        ';
return $output489;
};
$arguments482 = array();
$arguments482['then'] = NULL;
$arguments482['else'] = NULL;
$arguments482['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array484 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
$array487 = array (
);return $renderingContext->getVariableProvider()->getByPath('page._templates', $array487);
};
$arguments485 = array();
$arguments485['subject'] = NULL;
$renderChildrenClosure486 = ($arguments485['subject'] !== null) ? function() use ($arguments485) { return $arguments485['subject']; } : $renderChildrenClosure486;$array484['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$expression488 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments482['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array484)
					),
					$renderingContext
				);
$arguments482['__thenClosure'] = $renderChildrenClosure483;

$output481 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output481 .= '
        <!-- Subpages -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
$output516 = '';

$output516 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments517 = array();
$arguments517['section'] = NULL;
$arguments517['partial'] = NULL;
$arguments517['delegate'] = NULL;
$arguments517['renderable'] = NULL;
$arguments517['arguments'] = array (
);
$arguments517['optional'] = false;
$arguments517['default'] = NULL;
$arguments517['contentAs'] = NULL;
$arguments517['debug'] = true;
$arguments517['section'] = 'PageZeroTableRow';
// Rendering Array
$array519 = array();
$array520 = array (
);$array519['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array520);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string521 = '{level + 1}';
$array522 = array (
  0 => '{level + 1}',
  1 => '{level + 1}',
);
$array519['level'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string521, $array522);
$array523 = array (
);$array519['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array523);
$arguments517['arguments'] = $array519;

$output516 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output516 .= '
            ';
return $output516;
};
$arguments513 = array();
$arguments513['each'] = NULL;
$arguments513['as'] = NULL;
$arguments513['key'] = NULL;
$arguments513['reverse'] = false;
$arguments513['iteration'] = NULL;
$array515 = array (
);$arguments513['each'] = $renderingContext->getVariableProvider()->getByPath('page._nodes', $array515);
$arguments513['as'] = 'page';

$output512 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output512 .= '
        ';
return $output512;
};
$arguments505 = array();
$arguments505['then'] = NULL;
$arguments505['else'] = NULL;
$arguments505['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array507 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$array510 = array (
);return $renderingContext->getVariableProvider()->getByPath('page._nodes', $array510);
};
$arguments508 = array();
$arguments508['subject'] = NULL;
$renderChildrenClosure509 = ($arguments508['subject'] !== null) ? function() use ($arguments508) { return $arguments508['subject']; } : $renderChildrenClosure509;$array507['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$expression511 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments505['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression511(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array507)
					),
					$renderingContext
				);
$arguments505['__thenClosure'] = $renderChildrenClosure506;

$output481 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output481 .= '
    ';
return $output481;
};
$arguments476 = array();
$arguments476['then'] = NULL;
$arguments476['else'] = NULL;
$arguments476['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array478 = array();
$array479 = array (
);$array478['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array479);

$expression480 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments476['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression480(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array478)
					),
					$renderingContext
				);
$arguments476['__thenClosure'] = $renderChildrenClosure477;

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output274 .= '
';
return $output274;
};
$arguments272 = array();
$arguments272['name'] = NULL;
$arguments272['name'] = 'PageZeroTableRow';

$output250 .= NULL;

$output250 .= '

';

return $output250;
}


}
#