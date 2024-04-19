<?php

class Standard_action_index_cc37b211ed44030a9fac2ae27d02609b8d30d384 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="media media-new-content-element-wizard">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
			<a href="#" onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('aOnClick', $array75);
};
$arguments72 = array();
$arguments72['value'] = NULL;
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = 'UTF-8';
$arguments72['doubleEncode'] = true;
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());

$output71 .= !is_string($value74) && !(is_object($value74) && method_exists($value74, '__toString')) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments72['encoding'], $arguments72['doubleEncode']);

$output71 .= '" data-dismiss="modal">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array84);
};
$arguments82 = array();
$arguments82['value'] = NULL;

$output81 .= isset($arguments82['value']) ? $arguments82['value'] : $renderChildrenClosure83();

$output81 .= '
				';
return $output81;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('content', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = $renderChildrenClosure77;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output71 .= '
				<div class="media-left">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array87 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array87);
};
$arguments85 = array();
$arguments85['value'] = NULL;

$output71 .= isset($arguments85['value']) ? $arguments85['value'] : $renderChildrenClosure86();

$output71 .= '
				</div>
				<div class="media-body">
					<strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.title', $array91);
};
$arguments88 = array();
$arguments88['value'] = NULL;
$arguments88['keepQuotes'] = false;
$arguments88['encoding'] = 'UTF-8';
$arguments88['doubleEncode'] = true;
$value90 = ($arguments88['value'] !== NULL ? $arguments88['value'] : $renderChildrenClosure89());

$output71 .= !is_string($value90) && !(is_object($value90) && method_exists($value90, '__toString')) ? $value90 : htmlspecialchars($value90, ($arguments88['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments88['encoding'], $arguments88['doubleEncode']);

$output71 .= '</strong>
					<br/>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$array97 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.description', $array97);
};
$arguments95 = array();
$arguments95['value'] = NULL;
$renderChildrenClosure96 = ($arguments95['value'] !== null) ? function() use ($arguments95) { return $arguments95['value']; } : $renderChildrenClosure96;return TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
};
$arguments92 = array();
$arguments92['value'] = NULL;
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = 'UTF-8';
$arguments92['doubleEncode'] = true;
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());

$output71 .= !is_string($value94) && !(is_object($value94) && method_exists($value94, '__toString')) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments92['encoding'], $arguments92['doubleEncode']);

$output71 .= '
				</div>
			</a>
		';
return $output71;
};
$arguments69 = array();

$output68 .= '';

$output68 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
			<input type="radio" class="hide" name="tempB" value="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array104 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardKey', $array104);
};
$arguments101 = array();
$arguments101['value'] = NULL;
$arguments101['keepQuotes'] = false;
$arguments101['encoding'] = 'UTF-8';
$arguments101['doubleEncode'] = true;
$value103 = ($arguments101['value'] !== NULL ? $arguments101['value'] : $renderChildrenClosure102());

$output100 .= !is_string($value103) && !(is_object($value103) && method_exists($value103, '__toString')) ? $value103 : htmlspecialchars($value103, ($arguments101['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments101['encoding'], $arguments101['doubleEncode']);

$output100 .= '"
						 onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardOnClick', $array108);
};
$arguments105 = array();
$arguments105['value'] = NULL;
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = 'UTF-8';
$arguments105['doubleEncode'] = true;
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output100 .= !is_string($value107) && !(is_object($value107) && method_exists($value107, '__toString')) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments105['encoding'], $arguments105['doubleEncode']);

$output100 .= '"/>
			<a href="#new-content-element-wizard-carousel" onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array112 = array (
);return $renderingContext->getVariableProvider()->getByPath('aOnClick', $array112);
};
$arguments109 = array();
$arguments109['value'] = NULL;
$arguments109['keepQuotes'] = false;
$arguments109['encoding'] = 'UTF-8';
$arguments109['doubleEncode'] = true;
$value111 = ($arguments109['value'] !== NULL ? $arguments109['value'] : $renderChildrenClosure110());

$output100 .= !is_string($value111) && !(is_object($value111) && method_exists($value111, '__toString')) ? $value111 : htmlspecialchars($value111, ($arguments109['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments109['encoding'], $arguments109['doubleEncode']);

$output100 .= '"
				 data-slide="next">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array121);
};
$arguments119 = array();
$arguments119['value'] = NULL;

$output118 .= isset($arguments119['value']) ? $arguments119['value'] : $renderChildrenClosure120();

$output118 .= '
				';
return $output118;
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('content', $array116);

$expression117 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments113['__thenClosure'] = $renderChildrenClosure114;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output100 .= '
				<div class="media-left">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output100 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output100 .= '
				</div>
				<div class="media-body">
					<strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$array128 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.title', $array128);
};
$arguments125 = array();
$arguments125['value'] = NULL;
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = 'UTF-8';
$arguments125['doubleEncode'] = true;
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());

$output100 .= !is_string($value127) && !(is_object($value127) && method_exists($value127, '__toString')) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments125['encoding'], $arguments125['doubleEncode']);

$output100 .= '</strong>
					<br/>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$array134 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.description', $array134);
};
$arguments132 = array();
$arguments132['value'] = NULL;
$renderChildrenClosure133 = ($arguments132['value'] !== null) ? function() use ($arguments132) { return $arguments132['value']; } : $renderChildrenClosure133;return TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);
};
$arguments129 = array();
$arguments129['value'] = NULL;
$arguments129['keepQuotes'] = false;
$arguments129['encoding'] = 'UTF-8';
$arguments129['doubleEncode'] = true;
$value131 = ($arguments129['value'] !== NULL ? $arguments129['value'] : $renderChildrenClosure130());

$output100 .= !is_string($value131) && !(is_object($value131) && method_exists($value131, '__toString')) ? $value131 : htmlspecialchars($value131, ($arguments129['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments129['encoding'], $arguments129['doubleEncode']);

$output100 .= '
				</div>
			</a>
		';
return $output100;
};
$arguments98 = array();
$arguments98['if'] = NULL;

$output68 .= '';

$output68 .= '
	';
return $output68;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array66);

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			<a href="#" onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('aOnClick', $array7);
};
$arguments4 = array();
$arguments4['value'] = NULL;
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = 'UTF-8';
$arguments4['doubleEncode'] = true;
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= !is_string($value6) && !(is_object($value6) && method_exists($value6, '__toString')) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments4['encoding'], $arguments4['doubleEncode']);

$output3 .= '" data-dismiss="modal">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;

$output13 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output13 .= '
				';
return $output13;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('content', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '
				<div class="media-left">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array19);
};
$arguments17 = array();
$arguments17['value'] = NULL;

$output3 .= isset($arguments17['value']) ? $arguments17['value'] : $renderChildrenClosure18();

$output3 .= '
				</div>
				<div class="media-body">
					<strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array23 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.title', $array23);
};
$arguments20 = array();
$arguments20['value'] = NULL;
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = 'UTF-8';
$arguments20['doubleEncode'] = true;
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output3 .= !is_string($value22) && !(is_object($value22) && method_exists($value22, '__toString')) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments20['encoding'], $arguments20['doubleEncode']);

$output3 .= '</strong>
					<br/>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.description', $array29);
};
$arguments27 = array();
$arguments27['value'] = NULL;
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;return TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};
$arguments24 = array();
$arguments24['value'] = NULL;
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = 'UTF-8';
$arguments24['doubleEncode'] = true;
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());

$output3 .= !is_string($value26) && !(is_object($value26) && method_exists($value26, '__toString')) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments24['encoding'], $arguments24['doubleEncode']);

$output3 .= '
				</div>
			</a>
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
			<input type="radio" class="hide" name="tempB" value="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardKey', $array34);
};
$arguments31 = array();
$arguments31['value'] = NULL;
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = 'UTF-8';
$arguments31['doubleEncode'] = true;
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output30 .= !is_string($value33) && !(is_object($value33) && method_exists($value33, '__toString')) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments31['encoding'], $arguments31['doubleEncode']);

$output30 .= '"
						 onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array38 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardOnClick', $array38);
};
$arguments35 = array();
$arguments35['value'] = NULL;
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = 'UTF-8';
$arguments35['doubleEncode'] = true;
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output30 .= !is_string($value37) && !(is_object($value37) && method_exists($value37, '__toString')) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments35['encoding'], $arguments35['doubleEncode']);

$output30 .= '"/>
			<a href="#new-content-element-wizard-carousel" onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array42 = array (
);return $renderingContext->getVariableProvider()->getByPath('aOnClick', $array42);
};
$arguments39 = array();
$arguments39['value'] = NULL;
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = 'UTF-8';
$arguments39['doubleEncode'] = true;
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output30 .= !is_string($value41) && !(is_object($value41) && method_exists($value41, '__toString')) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments39['encoding'], $arguments39['doubleEncode']);

$output30 .= '"
				 data-slide="next">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output48 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output48 .= '
				';
return $output48;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('content', $array46);

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output30 .= '
				<div class="media-left">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array54);
};
$arguments52 = array();
$arguments52['value'] = NULL;

$output30 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output30 .= '
				</div>
				<div class="media-body">
					<strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.title', $array58);
};
$arguments55 = array();
$arguments55['value'] = NULL;
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = 'UTF-8';
$arguments55['doubleEncode'] = true;
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output30 .= !is_string($value57) && !(is_object($value57) && method_exists($value57, '__toString')) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments55['encoding'], $arguments55['doubleEncode']);

$output30 .= '</strong>
					<br/>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$array64 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.description', $array64);
};
$arguments62 = array();
$arguments62['value'] = NULL;
$renderChildrenClosure63 = ($arguments62['value'] !== null) ? function() use ($arguments62) { return $arguments62['value']; } : $renderChildrenClosure63;return TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
};
$arguments59 = array();
$arguments59['value'] = NULL;
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output30 .= !is_string($value61) && !(is_object($value61) && method_exists($value61, '__toString')) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments59['encoding'], $arguments59['doubleEncode']);

$output30 .= '
				</div>
			</a>
		';
return $output30;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>

';

return $output0;
}


}
#