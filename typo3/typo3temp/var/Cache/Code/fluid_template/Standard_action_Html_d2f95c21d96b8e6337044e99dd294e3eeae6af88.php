<?php

class Standard_action_Html_d2f95c21d96b8e6337044e99dd294e3eeae6af88 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="format-detection" content="telephone=no">
</head>
<body>
	<table width="600" cellpadding="0" cellspacing="0" border="0">
		';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
			<tr>
				<td width="600" valign="top" align="left">';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['element'] = NULL;
$arguments5['property'] = NULL;
$arguments5['renderingOptionProperty'] = NULL;
$array7 = array (
);$arguments5['element'] = $renderingContext->getVariableProvider()->getByPath('formValue.element', $array7);
$arguments5['property'] = 'label';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output4 .= '</td>
				<td width="600" valign="top" align="left">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
									<table cellspacing="0" border="0">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
											<tr>
												<td>';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array71)]);

$output70 .= '</td>
											</tr>
										';
return $output70;
};
$arguments67 = array();
$arguments67['each'] = NULL;
$arguments67['as'] = NULL;
$arguments67['key'] = NULL;
$arguments67['reverse'] = false;
$arguments67['iteration'] = NULL;
$array69 = array (
);$arguments67['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array69);
$arguments67['as'] = 'value';

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
									</table>
								';
return $output66;
};
$arguments64 = array();

$output63 .= '';

$output63 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
									<table cellspacing="0" border="0">
										<tr>
											<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$array77 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array77)]);
};
$arguments75 = array();
$arguments75['value'] = NULL;
$renderChildrenClosure76 = ($arguments75['value'] !== null) ? function() use ($arguments75) { return $arguments75['value']; } : $renderChildrenClosure76;
$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '</td>
										</tr>
									</table>
								';
return $output74;
};
$arguments72 = array();
$arguments72['if'] = NULL;

$output63 .= '';

$output63 .= '
							';
return $output63;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
									<table cellspacing="0" border="0">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
											<tr>
												<td>';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array55)]);

$output54 .= '</td>
											</tr>
										';
return $output54;
};
$arguments51 = array();
$arguments51['each'] = NULL;
$arguments51['as'] = NULL;
$arguments51['key'] = NULL;
$arguments51['reverse'] = false;
$arguments51['iteration'] = NULL;
$array53 = array (
);$arguments51['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array53);
$arguments51['as'] = 'value';

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
									</table>
								';
return $output50;
};
$arguments48['__elseClosures'][] = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
									<table cellspacing="0" border="0">
										<tr>
											<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array59 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array59)]);
};
$arguments57 = array();
$arguments57['value'] = NULL;
$renderChildrenClosure58 = ($arguments57['value'] !== null) ? function() use ($arguments57) { return $arguments57['value']; } : $renderChildrenClosure58;
$output56 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '</td>
										</tr>
									</table>
								';
return $output56;
};

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
						';
return $output47;
};
$arguments45 = array();

$output44 .= '';

$output44 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return '
							-
						';
};
$arguments78 = array();
$arguments78['if'] = NULL;

$output44 .= '';

$output44 .= '
					';
return $output44;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.value', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
									<table cellspacing="0" border="0">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
											<tr>
												<td>';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array34)]);

$output33 .= '</td>
											</tr>
										';
return $output33;
};
$arguments30 = array();
$arguments30['each'] = NULL;
$arguments30['as'] = NULL;
$arguments30['key'] = NULL;
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$array32 = array (
);$arguments30['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array32);
$arguments30['as'] = 'value';

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
									</table>
								';
return $output29;
};
$arguments27 = array();

$output26 .= '';

$output26 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
									<table cellspacing="0" border="0">
										<tr>
											<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array40)]);
};
$arguments38 = array();
$arguments38['value'] = NULL;
$renderChildrenClosure39 = ($arguments38['value'] !== null) ? function() use ($arguments38) { return $arguments38['value']; } : $renderChildrenClosure39;
$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '</td>
										</tr>
									</table>
								';
return $output37;
};
$arguments35 = array();
$arguments35['if'] = NULL;

$output26 .= '';

$output26 .= '
							';
return $output26;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('formValue.isMultiValue', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
									<table cellspacing="0" border="0">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
											<tr>
												<td>';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array18)]);

$output17 .= '</td>
											</tr>
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
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array16);
$arguments14['as'] = 'value';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
									</table>
								';
return $output13;
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
									<table cellspacing="0" border="0">
										<tr>
											<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formValue.processedValue', $array22)]);
};
$arguments20 = array();
$arguments20['value'] = NULL;
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '</td>
										</tr>
									</table>
								';
return $output19;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
						';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
							-
						';
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output4 .= '
				</td>
			</tr>
		';
return $output4;
};
$arguments1 = array();
$arguments1['renderable'] = NULL;
$arguments1['as'] = 'formValue';
$array3 = array (
);$arguments1['renderable'] = $renderingContext->getVariableProvider()->getByPath('form.formDefinition', $array3);
$arguments1['as'] = 'formValue';

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderAllFormValuesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	</table>
</body>
</html>
';

return $output0;
}


}
#