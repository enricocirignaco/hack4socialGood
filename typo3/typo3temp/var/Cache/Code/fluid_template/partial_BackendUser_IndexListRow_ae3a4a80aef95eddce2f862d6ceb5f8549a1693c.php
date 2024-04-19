<?php

class partial_BackendUser_IndexListRow_ae3a4a80aef95eddce2f862d6ceb5f8549a1693c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'bu' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
  ),
));
}

/**
 * section list_row
 */
public function section_e490b8b1053373d1e4badbae4af5cf284c69881a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<tr>
	<td>
		<a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array1)]);

$output0 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.description', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$output7 = '';
$array8 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description', $array8)]);

$output7 .= ' ';
$arguments2['then'] = $output7;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '(id=';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array9)]);

$output0 .= ')">
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['backendUser'] = 0;
$arguments10['size'] = 32;
$arguments10['showIcon'] = false;
$array12 = array (
);$arguments10['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array12);
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array13['0'] = 'TRUE';

$expression14 = function($context) {return TRUE;};
$arguments10['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
		</a>
	</td>
	<td class="col-title">
		';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
			<b>';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array19)]);

$output18 .= '</b>
		';
return $output18;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['uid'] = NULL;
$arguments15['table'] = NULL;
$arguments15['returnUrl'] = '';
$arguments15['table'] = 'be_users';
$array17 = array (
);$arguments15['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array17);
$arguments15['title'] = 'edit';

$output0 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
			<span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'online';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '</span>
		';
return $output28;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['array'] = NULL;
$arguments23['key'] = NULL;
$arguments23['subKey'] = '';
$array25 = array (
);$arguments23['array'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers', $array25);
$array26 = array (
);$arguments23['key'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array26);
$array22['0'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
		<br />
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
				';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array41)]);

$output40 .= '
			';
return $output40;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['uid'] = NULL;
$arguments37['table'] = NULL;
$arguments37['returnUrl'] = '';
$arguments37['table'] = 'be_users';
$array39 = array (
);$arguments37['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array39);
$arguments37['title'] = 'edit';

$output36 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
		';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
	</td>
	<td>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$array66 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array66);
};
$arguments61 = array();
$arguments61['date'] = NULL;
$arguments61['format'] = '';
$arguments61['base'] = NULL;
$output63 = '';
$array64 = array (
);
$output63 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array64);

$output63 .= ' ';
$array65 = array (
);
$output63 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array65);
$arguments61['format'] = $output63;
$renderChildrenClosure62 = ($arguments61['date'] !== null) ? function() use ($arguments61) { return $arguments61['date']; } : $renderChildrenClosure62;
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '
			';
return $output60;
};
$arguments58 = array();

$output57 .= '';

$output57 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$arguments70['key'] = 'never';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output69 .= '
			';
return $output69;
};
$arguments67 = array();
$arguments67['if'] = NULL;

$output57 .= '';

$output57 .= '
		';
return $output57;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array50);
};
$arguments45 = array();
$arguments45['date'] = NULL;
$arguments45['format'] = '';
$arguments45['base'] = NULL;
$output47 = '';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array48);

$output47 .= ' ';
$array49 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array49);
$arguments45['format'] = $output47;
$renderChildrenClosure46 = ($arguments45['date'] !== null) ? function() use ($arguments45) { return $arguments45['date']; } : $renderChildrenClosure46;
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '
			';
return $output44;
};
$arguments42['__elseClosures'][] = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$arguments52['key'] = 'never';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '
			';
return $output51;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output0 .= '
	</td>
	<td class="col-control">
		<div class="btn-group" role="group">
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['identifier'] = NULL;
$arguments76['size'] = 'small';
$arguments76['overlay'] = NULL;
$arguments76['state'] = 'default';
$arguments76['alternativeMarkupIdentifier'] = NULL;
$arguments76['identifier'] = 'actions-open';

$output75 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
			';
return $output75;
};
$arguments72 = array();
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$arguments72['uid'] = NULL;
$arguments72['table'] = NULL;
$arguments72['returnUrl'] = '';
$arguments72['class'] = 'btn btn-default';
$arguments72['table'] = 'be_users';
$array74 = array (
);$arguments72['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array74);
$arguments72['title'] = 'edit';

$output0 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['identifier'] = NULL;
$arguments141['size'] = 'small';
$arguments141['overlay'] = NULL;
$arguments141['state'] = 'default';
$arguments141['alternativeMarkupIdentifier'] = NULL;
$arguments141['identifier'] = 'empty-empty';

$output140 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '</span>
				';
return $output140;
};
$arguments138 = array();

$output137 .= '';

$output137 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['parameters'] = NULL;
$arguments175['redirectUrl'] = '';
$output177 = '';

$output177 .= 'data[be_users][';
$array178 = array (
);
$output177 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array178);

$output177 .= '][disable]=0';
$arguments175['parameters'] = $output177;
$array179 = array (
);$arguments175['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array179);

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);

$output174 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'visibility.unhide';

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output174 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['identifier'] = NULL;
$arguments182['size'] = 'small';
$arguments182['overlay'] = NULL;
$arguments182['state'] = 'default';
$arguments182['alternativeMarkupIdentifier'] = NULL;
$arguments182['identifier'] = 'actions-edit-unhide';

$output174 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output174 .= '</a>
						';
return $output174;
};
$arguments172 = array();

$output171 .= '';

$output171 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['parameters'] = NULL;
$arguments187['redirectUrl'] = '';
$output189 = '';

$output189 .= 'data[be_users][';
$array190 = array (
);
$output189 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array190);

$output189 .= '][disable]=1';
$arguments187['parameters'] = $output189;
$array191 = array (
);$arguments187['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array191);

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output186 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['key'] = NULL;
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['languageKey'] = NULL;
$arguments192['alternativeLanguageKeys'] = NULL;
$arguments192['key'] = 'visibility.hide';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext)]);

$output186 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['identifier'] = NULL;
$arguments194['size'] = 'small';
$arguments194['overlay'] = NULL;
$arguments194['state'] = 'default';
$arguments194['alternativeMarkupIdentifier'] = NULL;
$arguments194['identifier'] = 'actions-edit-hide';

$output186 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output186 .= '</a>
						';
return $output186;
};
$arguments184 = array();
$arguments184['if'] = NULL;

$output171 .= '';

$output171 .= '
					';
return $output171;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array169);
$array168['1'] = ' == 1';

$expression170 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['parameters'] = NULL;
$arguments149['redirectUrl'] = '';
$output151 = '';

$output151 .= 'data[be_users][';
$array152 = array (
);
$output151 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array152);

$output151 .= '][disable]=0';
$arguments149['parameters'] = $output151;
$array153 = array (
);$arguments149['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array153);

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output148 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['key'] = NULL;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['languageKey'] = NULL;
$arguments154['alternativeLanguageKeys'] = NULL;
$arguments154['key'] = 'visibility.unhide';

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext)]);

$output148 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['identifier'] = NULL;
$arguments156['size'] = 'small';
$arguments156['overlay'] = NULL;
$arguments156['state'] = 'default';
$arguments156['alternativeMarkupIdentifier'] = NULL;
$arguments156['identifier'] = 'actions-edit-unhide';

$output148 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output148 .= '</a>
						';
return $output148;
};
$arguments146['__elseClosures'][] = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['parameters'] = NULL;
$arguments159['redirectUrl'] = '';
$output161 = '';

$output161 .= 'data[be_users][';
$array162 = array (
);
$output161 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array162);

$output161 .= '][disable]=1';
$arguments159['parameters'] = $output161;
$array163 = array (
);$arguments159['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array163);

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output158 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['key'] = NULL;
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$arguments164['languageKey'] = NULL;
$arguments164['alternativeLanguageKeys'] = NULL;
$arguments164['key'] = 'visibility.hide';

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output158 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['identifier'] = NULL;
$arguments166['size'] = 'small';
$arguments166['overlay'] = NULL;
$arguments166['state'] = 'default';
$arguments166['alternativeMarkupIdentifier'] = NULL;
$arguments166['identifier'] = 'actions-edit-hide';

$output158 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output158 .= '</a>
						';
return $output158;
};

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
				';
return $output145;
};
$arguments143 = array();
$arguments143['if'] = NULL;

$output137 .= '';

$output137 .= '
			';
return $output137;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.currentlyLoggedIn', $array135);
$array134['1'] = ' == 1';

$expression136 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['identifier'] = NULL;
$arguments81['size'] = 'small';
$arguments81['overlay'] = NULL;
$arguments81['state'] = 'default';
$arguments81['alternativeMarkupIdentifier'] = NULL;
$arguments81['identifier'] = 'empty-empty';

$output80 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '</span>
				';
return $output80;
};
$arguments78['__elseClosures'][] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['parameters'] = NULL;
$arguments113['redirectUrl'] = '';
$output115 = '';

$output115 .= 'data[be_users][';
$array116 = array (
);
$output115 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array116);

$output115 .= '][disable]=0';
$arguments113['parameters'] = $output115;
$array117 = array (
);$arguments113['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array117);

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output112 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$arguments118['key'] = 'visibility.unhide';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output112 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['identifier'] = NULL;
$arguments120['size'] = 'small';
$arguments120['overlay'] = NULL;
$arguments120['state'] = 'default';
$arguments120['alternativeMarkupIdentifier'] = NULL;
$arguments120['identifier'] = 'actions-edit-unhide';

$output112 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output112 .= '</a>
						';
return $output112;
};
$arguments110 = array();

$output109 .= '';

$output109 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['parameters'] = NULL;
$arguments125['redirectUrl'] = '';
$output127 = '';

$output127 .= 'data[be_users][';
$array128 = array (
);
$output127 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array128);

$output127 .= '][disable]=1';
$arguments125['parameters'] = $output127;
$array129 = array (
);$arguments125['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array129);

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output124 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['key'] = NULL;
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['languageKey'] = NULL;
$arguments130['alternativeLanguageKeys'] = NULL;
$arguments130['key'] = 'visibility.hide';

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext)]);

$output124 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['identifier'] = NULL;
$arguments132['size'] = 'small';
$arguments132['overlay'] = NULL;
$arguments132['state'] = 'default';
$arguments132['alternativeMarkupIdentifier'] = NULL;
$arguments132['identifier'] = 'actions-edit-hide';

$output124 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output124 .= '</a>
						';
return $output124;
};
$arguments122 = array();
$arguments122['if'] = NULL;

$output109 .= '';

$output109 .= '
					';
return $output109;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array107);
$array106['1'] = ' == 1';

$expression108 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['parameters'] = NULL;
$arguments87['redirectUrl'] = '';
$output89 = '';

$output89 .= 'data[be_users][';
$array90 = array (
);
$output89 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array90);

$output89 .= '][disable]=0';
$arguments87['parameters'] = $output89;
$array91 = array (
);$arguments87['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array91);

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output86 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['languageKey'] = NULL;
$arguments92['alternativeLanguageKeys'] = NULL;
$arguments92['key'] = 'visibility.unhide';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output86 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['identifier'] = NULL;
$arguments94['size'] = 'small';
$arguments94['overlay'] = NULL;
$arguments94['state'] = 'default';
$arguments94['alternativeMarkupIdentifier'] = NULL;
$arguments94['identifier'] = 'actions-edit-unhide';

$output86 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output86 .= '</a>
						';
return $output86;
};
$arguments84['__elseClosures'][] = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['parameters'] = NULL;
$arguments97['redirectUrl'] = '';
$output99 = '';

$output99 .= 'data[be_users][';
$array100 = array (
);
$output99 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array100);

$output99 .= '][disable]=1';
$arguments97['parameters'] = $output99;
$array101 = array (
);$arguments97['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array101);

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output96 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['languageKey'] = NULL;
$arguments102['alternativeLanguageKeys'] = NULL;
$arguments102['key'] = 'visibility.hide';

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output96 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['identifier'] = NULL;
$arguments104['size'] = 'small';
$arguments104['overlay'] = NULL;
$arguments104['state'] = 'default';
$arguments104['alternativeMarkupIdentifier'] = NULL;
$arguments104['identifier'] = 'actions-edit-hide';

$output96 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output96 .= '</a>
						';
return $output96;
};

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
				';
return $output83;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['identifier'] = NULL;
$arguments225['size'] = 'small';
$arguments225['overlay'] = NULL;
$arguments225['state'] = 'default';
$arguments225['alternativeMarkupIdentifier'] = NULL;
$arguments225['identifier'] = 'empty-empty';

$output224 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output224 .= '</span>
				';
return $output224;
};
$arguments222 = array();

$output221 .= '';

$output221 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
					<a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['backendUser'] = NULL;
$array232 = array (
);$arguments230['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array232);

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output229 .= '"
						 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['languageKey'] = NULL;
$arguments233['alternativeLanguageKeys'] = NULL;
$arguments233['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang.xlf:delete';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output229 .= '"
						 data-severity="warning"
						 data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['languageKey'] = NULL;
$arguments235['alternativeLanguageKeys'] = NULL;
$arguments235['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext)]);

$output229 .= '"
						 data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$arguments237['key'] = 'confirm';
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array240);
$arguments237['arguments'] = $array239;

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output229 .= '"
						 data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['languageKey'] = NULL;
$arguments241['alternativeLanguageKeys'] = NULL;
$arguments241['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext)]);

$output229 .= '">
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['identifier'] = NULL;
$arguments243['size'] = 'small';
$arguments243['overlay'] = NULL;
$arguments243['state'] = 'default';
$arguments243['alternativeMarkupIdentifier'] = NULL;
$arguments243['identifier'] = 'actions-edit-delete';

$output229 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output229 .= '
					</a>
				';
return $output229;
};
$arguments227 = array();
$arguments227['if'] = NULL;

$output221 .= '';

$output221 .= '
			';
return $output221;
};
$arguments196 = array();
$arguments196['then'] = NULL;
$arguments196['else'] = NULL;
$arguments196['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array218 = array (
);$array217['0'] = $renderingContext->getVariableProvider()->getByPath('currentUserUid', $array218);
$array217['1'] = ' == ';
$array219 = array (
);$array217['2'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array219);

$expression220 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments196['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);
$arguments196['__thenClosure'] = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['identifier'] = NULL;
$arguments199['size'] = 'small';
$arguments199['overlay'] = NULL;
$arguments199['state'] = 'default';
$arguments199['alternativeMarkupIdentifier'] = NULL;
$arguments199['identifier'] = 'empty-empty';

$output198 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '</span>
				';
return $output198;
};
$arguments196['__elseClosures'][] = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
					<a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['backendUser'] = NULL;
$array204 = array (
);$arguments202['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array204);

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output201 .= '"
						 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['key'] = NULL;
$arguments205['id'] = NULL;
$arguments205['default'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['extensionName'] = NULL;
$arguments205['languageKey'] = NULL;
$arguments205['alternativeLanguageKeys'] = NULL;
$arguments205['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang.xlf:delete';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext)]);

$output201 .= '"
						 data-severity="warning"
						 data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['languageKey'] = NULL;
$arguments207['alternativeLanguageKeys'] = NULL;
$arguments207['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output201 .= '"
						 data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['languageKey'] = NULL;
$arguments209['alternativeLanguageKeys'] = NULL;
$arguments209['key'] = 'confirm';
// Rendering Array
$array211 = array();
$array212 = array (
);$array211['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array212);
$arguments209['arguments'] = $array211;

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);

$output201 .= '"
						 data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['key'] = NULL;
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$arguments213['languageKey'] = NULL;
$arguments213['alternativeLanguageKeys'] = NULL;
$arguments213['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext)]);

$output201 .= '">
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['identifier'] = NULL;
$arguments215['size'] = 'small';
$arguments215['overlay'] = NULL;
$arguments215['state'] = 'default';
$arguments215['alternativeMarkupIdentifier'] = NULL;
$arguments215['identifier'] = 'actions-edit-delete';

$output201 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output201 .= '
					</a>
				';
return $output201;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output0 .= '
		</div>
		<div class="btn-group" role="group">
			<a class="btn btn-default" href="#" onclick="top.TYPO3.InfoWindow.showItem(\'be_users\', \'';
$array245 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array245)]);

$output0 .= '\'); return false;">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['identifier'] = NULL;
$arguments246['size'] = 'small';
$arguments246['overlay'] = NULL;
$arguments246['state'] = 'default';
$arguments246['alternativeMarkupIdentifier'] = NULL;
$arguments246['identifier'] = 'actions-document-info';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output0 .= '</a>
		</div>
		<div class="btn-group" role="group">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['identifier'] = NULL;
$arguments282['size'] = 'small';
$arguments282['overlay'] = NULL;
$arguments282['state'] = 'default';
$arguments282['alternativeMarkupIdentifier'] = NULL;
$arguments282['identifier'] = 'actions-remove';
$arguments282['size'] = 'small';

$output281 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['key'] = NULL;
$arguments284['id'] = NULL;
$arguments284['default'] = NULL;
$arguments284['arguments'] = NULL;
$arguments284['extensionName'] = NULL;
$arguments284['languageKey'] = NULL;
$arguments284['alternativeLanguageKeys'] = NULL;
$arguments284['key'] = 'compare';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext)]);

$output281 .= '
					';
return $output281;
};
$arguments277 = array();
$arguments277['additionalAttributes'] = NULL;
$arguments277['data'] = NULL;
$arguments277['class'] = NULL;
$arguments277['dir'] = NULL;
$arguments277['id'] = NULL;
$arguments277['lang'] = NULL;
$arguments277['style'] = NULL;
$arguments277['title'] = NULL;
$arguments277['accesskey'] = NULL;
$arguments277['tabindex'] = NULL;
$arguments277['onclick'] = NULL;
$arguments277['name'] = NULL;
$arguments277['rel'] = NULL;
$arguments277['rev'] = NULL;
$arguments277['target'] = NULL;
$arguments277['action'] = NULL;
$arguments277['controller'] = NULL;
$arguments277['extensionName'] = NULL;
$arguments277['pluginName'] = NULL;
$arguments277['pageUid'] = NULL;
$arguments277['pageType'] = NULL;
$arguments277['noCache'] = NULL;
$arguments277['noCacheHash'] = NULL;
$arguments277['section'] = NULL;
$arguments277['format'] = NULL;
$arguments277['linkAccessRestrictedPages'] = NULL;
$arguments277['additionalParams'] = NULL;
$arguments277['absolute'] = NULL;
$arguments277['addQueryString'] = NULL;
$arguments277['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments277['addQueryStringMethod'] = NULL;
$arguments277['arguments'] = NULL;
$arguments277['action'] = 'removeFromCompareList';
// Rendering Array
$array279 = array();
$array280 = array (
);$array279['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array280);
$arguments277['arguments'] = $array279;
$arguments277['class'] = 'btn btn-default';

$output276 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output276 .= '
				';
return $output276;
};
$arguments274 = array();

$output273 .= '';

$output273 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$output293 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['identifier'] = NULL;
$arguments294['size'] = 'small';
$arguments294['overlay'] = NULL;
$arguments294['state'] = 'default';
$arguments294['alternativeMarkupIdentifier'] = NULL;
$arguments294['identifier'] = 'actions-add';
$arguments294['size'] = 'small';

$output293 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['key'] = NULL;
$arguments296['id'] = NULL;
$arguments296['default'] = NULL;
$arguments296['arguments'] = NULL;
$arguments296['extensionName'] = NULL;
$arguments296['languageKey'] = NULL;
$arguments296['alternativeLanguageKeys'] = NULL;
$arguments296['key'] = 'compare';

$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext)]);
return $output293;
};
$arguments289 = array();
$arguments289['additionalAttributes'] = NULL;
$arguments289['data'] = NULL;
$arguments289['class'] = NULL;
$arguments289['dir'] = NULL;
$arguments289['id'] = NULL;
$arguments289['lang'] = NULL;
$arguments289['style'] = NULL;
$arguments289['title'] = NULL;
$arguments289['accesskey'] = NULL;
$arguments289['tabindex'] = NULL;
$arguments289['onclick'] = NULL;
$arguments289['name'] = NULL;
$arguments289['rel'] = NULL;
$arguments289['rev'] = NULL;
$arguments289['target'] = NULL;
$arguments289['action'] = NULL;
$arguments289['controller'] = NULL;
$arguments289['extensionName'] = NULL;
$arguments289['pluginName'] = NULL;
$arguments289['pageUid'] = NULL;
$arguments289['pageType'] = NULL;
$arguments289['noCache'] = NULL;
$arguments289['noCacheHash'] = NULL;
$arguments289['section'] = NULL;
$arguments289['format'] = NULL;
$arguments289['linkAccessRestrictedPages'] = NULL;
$arguments289['additionalParams'] = NULL;
$arguments289['absolute'] = NULL;
$arguments289['addQueryString'] = NULL;
$arguments289['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments289['addQueryStringMethod'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['action'] = 'addToCompareList';
// Rendering Array
$array291 = array();
$array292 = array (
);$array291['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array292);
$arguments289['arguments'] = $array291;
$arguments289['class'] = 'btn btn-default';

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '
				';
return $output288;
};
$arguments286 = array();
$arguments286['if'] = NULL;

$output273 .= '';

$output273 .= '
			';
return $output273;
};
$arguments248 = array();
$arguments248['then'] = NULL;
$arguments248['else'] = NULL;
$arguments248['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserUidList.{backendUser.uid}', $array271);

$expression272 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments248['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression272(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);
$arguments248['__thenClosure'] = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['identifier'] = NULL;
$arguments256['size'] = 'small';
$arguments256['overlay'] = NULL;
$arguments256['state'] = 'default';
$arguments256['alternativeMarkupIdentifier'] = NULL;
$arguments256['identifier'] = 'actions-remove';
$arguments256['size'] = 'small';

$output255 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'compare';

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output255 .= '
					';
return $output255;
};
$arguments251 = array();
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['class'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['name'] = NULL;
$arguments251['rel'] = NULL;
$arguments251['rev'] = NULL;
$arguments251['target'] = NULL;
$arguments251['action'] = NULL;
$arguments251['controller'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['pluginName'] = NULL;
$arguments251['pageUid'] = NULL;
$arguments251['pageType'] = NULL;
$arguments251['noCache'] = NULL;
$arguments251['noCacheHash'] = NULL;
$arguments251['section'] = NULL;
$arguments251['format'] = NULL;
$arguments251['linkAccessRestrictedPages'] = NULL;
$arguments251['additionalParams'] = NULL;
$arguments251['absolute'] = NULL;
$arguments251['addQueryString'] = NULL;
$arguments251['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments251['addQueryStringMethod'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['action'] = 'removeFromCompareList';
// Rendering Array
$array253 = array();
$array254 = array (
);$array253['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array254);
$arguments251['arguments'] = $array253;
$arguments251['class'] = 'btn btn-default';

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
				';
return $output250;
};
$arguments248['__elseClosures'][] = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$output265 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['identifier'] = NULL;
$arguments266['size'] = 'small';
$arguments266['overlay'] = NULL;
$arguments266['state'] = 'default';
$arguments266['alternativeMarkupIdentifier'] = NULL;
$arguments266['identifier'] = 'actions-add';
$arguments266['size'] = 'small';

$output265 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['key'] = NULL;
$arguments268['id'] = NULL;
$arguments268['default'] = NULL;
$arguments268['arguments'] = NULL;
$arguments268['extensionName'] = NULL;
$arguments268['languageKey'] = NULL;
$arguments268['alternativeLanguageKeys'] = NULL;
$arguments268['key'] = 'compare';

$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext)]);
return $output265;
};
$arguments261 = array();
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['name'] = NULL;
$arguments261['rel'] = NULL;
$arguments261['rev'] = NULL;
$arguments261['target'] = NULL;
$arguments261['action'] = NULL;
$arguments261['controller'] = NULL;
$arguments261['extensionName'] = NULL;
$arguments261['pluginName'] = NULL;
$arguments261['pageUid'] = NULL;
$arguments261['pageType'] = NULL;
$arguments261['noCache'] = NULL;
$arguments261['noCacheHash'] = NULL;
$arguments261['section'] = NULL;
$arguments261['format'] = NULL;
$arguments261['linkAccessRestrictedPages'] = NULL;
$arguments261['additionalParams'] = NULL;
$arguments261['absolute'] = NULL;
$arguments261['addQueryString'] = NULL;
$arguments261['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments261['addQueryStringMethod'] = NULL;
$arguments261['arguments'] = NULL;
$arguments261['action'] = 'addToCompareList';
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array264);
$arguments261['arguments'] = $array263;
$arguments261['class'] = 'btn btn-default';

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
				';
return $output260;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['backendUser'] = NULL;
$array300 = array (
);$arguments298['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array300);

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output0 .= '
		</div>
	</td>
</tr>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output301 = '';

$output301 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
	  xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers"
	  xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers"
	  xmlns:bu="http://typo3.org/ns/TYPO3/CMS/Beuser/ViewHelpers">

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
<tr>
	<td>
		<a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array305 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array305)]);

$output304 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array309 = array (
);$array308['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.description', $array309);

$expression310 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$output311 = '';
$array312 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description', $array312)]);

$output311 .= ' ';
$arguments306['then'] = $output311;

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output304 .= '(id=';
$array313 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array313)]);

$output304 .= ')">
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['backendUser'] = 0;
$arguments314['size'] = 32;
$arguments314['showIcon'] = false;
$array316 = array (
);$arguments314['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array316);
// Rendering Boolean node
// Rendering Array
$array317 = array();
$array317['0'] = 'TRUE';

$expression318 = function($context) {return TRUE;};
$arguments314['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression318(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);

$output304 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output304 .= '
		</a>
	</td>
	<td class="col-title">
		';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
			<b>';
$array323 = array (
);
$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array323)]);

$output322 .= '</b>
		';
return $output322;
};
$arguments319 = array();
$arguments319['additionalAttributes'] = NULL;
$arguments319['data'] = NULL;
$arguments319['class'] = NULL;
$arguments319['dir'] = NULL;
$arguments319['id'] = NULL;
$arguments319['lang'] = NULL;
$arguments319['style'] = NULL;
$arguments319['title'] = NULL;
$arguments319['accesskey'] = NULL;
$arguments319['tabindex'] = NULL;
$arguments319['onclick'] = NULL;
$arguments319['uid'] = NULL;
$arguments319['table'] = NULL;
$arguments319['returnUrl'] = '';
$arguments319['table'] = 'be_users';
$array321 = array (
);$arguments319['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array321);
$arguments319['title'] = 'edit';

$output304 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output304 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
			<span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments333 = array();
$arguments333['key'] = NULL;
$arguments333['id'] = NULL;
$arguments333['default'] = NULL;
$arguments333['arguments'] = NULL;
$arguments333['extensionName'] = NULL;
$arguments333['languageKey'] = NULL;
$arguments333['alternativeLanguageKeys'] = NULL;
$arguments333['key'] = 'online';

$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext)]);

$output332 .= '</span>
		';
return $output332;
};
$arguments324 = array();
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$arguments324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['array'] = NULL;
$arguments327['key'] = NULL;
$arguments327['subKey'] = '';
$array329 = array (
);$arguments327['array'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers', $array329);
$array330 = array (
);$arguments327['key'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array330);
$array326['0'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$expression331 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression331(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments324['__thenClosure'] = $renderChildrenClosure325;

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output304 .= '
		<br />
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
				';
$array345 = array (
);
$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array345)]);

$output344 .= '
			';
return $output344;
};
$arguments341 = array();
$arguments341['additionalAttributes'] = NULL;
$arguments341['data'] = NULL;
$arguments341['class'] = NULL;
$arguments341['dir'] = NULL;
$arguments341['id'] = NULL;
$arguments341['lang'] = NULL;
$arguments341['style'] = NULL;
$arguments341['title'] = NULL;
$arguments341['accesskey'] = NULL;
$arguments341['tabindex'] = NULL;
$arguments341['onclick'] = NULL;
$arguments341['uid'] = NULL;
$arguments341['table'] = NULL;
$arguments341['returnUrl'] = '';
$arguments341['table'] = 'be_users';
$array343 = array (
);$arguments341['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array343);
$arguments341['title'] = 'edit';

$output340 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
		';
return $output340;
};
$arguments335 = array();
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$arguments335['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array338);

$expression339 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments335['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array337)
					),
					$renderingContext
				);
$arguments335['__thenClosure'] = $renderChildrenClosure336;

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output304 .= '
	</td>
	<td>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$array370 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array370);
};
$arguments365 = array();
$arguments365['date'] = NULL;
$arguments365['format'] = '';
$arguments365['base'] = NULL;
$output367 = '';
$array368 = array (
);
$output367 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array368);

$output367 .= ' ';
$array369 = array (
);
$output367 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array369);
$arguments365['format'] = $output367;
$renderChildrenClosure366 = ($arguments365['date'] !== null) ? function() use ($arguments365) { return $arguments365['date']; } : $renderChildrenClosure366;
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output364 .= '
			';
return $output364;
};
$arguments362 = array();

$output361 .= '';

$output361 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['key'] = NULL;
$arguments374['id'] = NULL;
$arguments374['default'] = NULL;
$arguments374['arguments'] = NULL;
$arguments374['extensionName'] = NULL;
$arguments374['languageKey'] = NULL;
$arguments374['alternativeLanguageKeys'] = NULL;
$arguments374['key'] = 'never';

$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output373 .= '
			';
return $output373;
};
$arguments371 = array();
$arguments371['if'] = NULL;

$output361 .= '';

$output361 .= '
		';
return $output361;
};
$arguments346 = array();
$arguments346['then'] = NULL;
$arguments346['else'] = NULL;
$arguments346['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array359);

$expression360 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments346['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array358)
					),
					$renderingContext
				);
$arguments346['__thenClosure'] = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$array354 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array354);
};
$arguments349 = array();
$arguments349['date'] = NULL;
$arguments349['format'] = '';
$arguments349['base'] = NULL;
$output351 = '';
$array352 = array (
);
$output351 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array352);

$output351 .= ' ';
$array353 = array (
);
$output351 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array353);
$arguments349['format'] = $output351;
$renderChildrenClosure350 = ($arguments349['date'] !== null) ? function() use ($arguments349) { return $arguments349['date']; } : $renderChildrenClosure350;
$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext)]);

$output348 .= '
			';
return $output348;
};
$arguments346['__elseClosures'][] = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['key'] = NULL;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['languageKey'] = NULL;
$arguments356['alternativeLanguageKeys'] = NULL;
$arguments356['key'] = 'never';

$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output355 .= '
			';
return $output355;
};

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output304 .= '
	</td>
	<td class="col-control">
		<div class="btn-group" role="group">
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['identifier'] = NULL;
$arguments380['size'] = 'small';
$arguments380['overlay'] = NULL;
$arguments380['state'] = 'default';
$arguments380['alternativeMarkupIdentifier'] = NULL;
$arguments380['identifier'] = 'actions-open';

$output379 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output379 .= '
			';
return $output379;
};
$arguments376 = array();
$arguments376['additionalAttributes'] = NULL;
$arguments376['data'] = NULL;
$arguments376['class'] = NULL;
$arguments376['dir'] = NULL;
$arguments376['id'] = NULL;
$arguments376['lang'] = NULL;
$arguments376['style'] = NULL;
$arguments376['title'] = NULL;
$arguments376['accesskey'] = NULL;
$arguments376['tabindex'] = NULL;
$arguments376['onclick'] = NULL;
$arguments376['uid'] = NULL;
$arguments376['table'] = NULL;
$arguments376['returnUrl'] = '';
$arguments376['class'] = 'btn btn-default';
$arguments376['table'] = 'be_users';
$array378 = array (
);$arguments376['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array378);
$arguments376['title'] = 'edit';

$output304 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output304 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments445 = array();
$arguments445['identifier'] = NULL;
$arguments445['size'] = 'small';
$arguments445['overlay'] = NULL;
$arguments445['state'] = 'default';
$arguments445['alternativeMarkupIdentifier'] = NULL;
$arguments445['identifier'] = 'empty-empty';

$output444 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output444 .= '</span>
				';
return $output444;
};
$arguments442 = array();

$output441 .= '';

$output441 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output475 = '';

$output475 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments479 = array();
$arguments479['parameters'] = NULL;
$arguments479['redirectUrl'] = '';
$output481 = '';

$output481 .= 'data[be_users][';
$array482 = array (
);
$output481 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array482);

$output481 .= '][disable]=0';
$arguments479['parameters'] = $output481;
$array483 = array (
);$arguments479['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array483);

$output478 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext)]);

$output478 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments484 = array();
$arguments484['key'] = NULL;
$arguments484['id'] = NULL;
$arguments484['default'] = NULL;
$arguments484['arguments'] = NULL;
$arguments484['extensionName'] = NULL;
$arguments484['languageKey'] = NULL;
$arguments484['alternativeLanguageKeys'] = NULL;
$arguments484['key'] = 'visibility.unhide';

$output478 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext)]);

$output478 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['identifier'] = NULL;
$arguments486['size'] = 'small';
$arguments486['overlay'] = NULL;
$arguments486['state'] = 'default';
$arguments486['alternativeMarkupIdentifier'] = NULL;
$arguments486['identifier'] = 'actions-edit-unhide';

$output478 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output478 .= '</a>
						';
return $output478;
};
$arguments476 = array();

$output475 .= '';

$output475 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['parameters'] = NULL;
$arguments491['redirectUrl'] = '';
$output493 = '';

$output493 .= 'data[be_users][';
$array494 = array (
);
$output493 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array494);

$output493 .= '][disable]=1';
$arguments491['parameters'] = $output493;
$array495 = array (
);$arguments491['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array495);

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output490 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['key'] = NULL;
$arguments496['id'] = NULL;
$arguments496['default'] = NULL;
$arguments496['arguments'] = NULL;
$arguments496['extensionName'] = NULL;
$arguments496['languageKey'] = NULL;
$arguments496['alternativeLanguageKeys'] = NULL;
$arguments496['key'] = 'visibility.hide';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext)]);

$output490 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['identifier'] = NULL;
$arguments498['size'] = 'small';
$arguments498['overlay'] = NULL;
$arguments498['state'] = 'default';
$arguments498['alternativeMarkupIdentifier'] = NULL;
$arguments498['identifier'] = 'actions-edit-hide';

$output490 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output490 .= '</a>
						';
return $output490;
};
$arguments488 = array();
$arguments488['if'] = NULL;

$output475 .= '';

$output475 .= '
					';
return $output475;
};
$arguments450 = array();
$arguments450['then'] = NULL;
$arguments450['else'] = NULL;
$arguments450['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array472 = array();
$array473 = array (
);$array472['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array473);
$array472['1'] = ' == 1';

$expression474 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments450['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression474(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array472)
					),
					$renderingContext
				);
$arguments450['__thenClosure'] = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['parameters'] = NULL;
$arguments453['redirectUrl'] = '';
$output455 = '';

$output455 .= 'data[be_users][';
$array456 = array (
);
$output455 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array456);

$output455 .= '][disable]=0';
$arguments453['parameters'] = $output455;
$array457 = array (
);$arguments453['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array457);

$output452 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext)]);

$output452 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['key'] = NULL;
$arguments458['id'] = NULL;
$arguments458['default'] = NULL;
$arguments458['arguments'] = NULL;
$arguments458['extensionName'] = NULL;
$arguments458['languageKey'] = NULL;
$arguments458['alternativeLanguageKeys'] = NULL;
$arguments458['key'] = 'visibility.unhide';

$output452 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext)]);

$output452 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['identifier'] = NULL;
$arguments460['size'] = 'small';
$arguments460['overlay'] = NULL;
$arguments460['state'] = 'default';
$arguments460['alternativeMarkupIdentifier'] = NULL;
$arguments460['identifier'] = 'actions-edit-unhide';

$output452 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output452 .= '</a>
						';
return $output452;
};
$arguments450['__elseClosures'][] = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['parameters'] = NULL;
$arguments463['redirectUrl'] = '';
$output465 = '';

$output465 .= 'data[be_users][';
$array466 = array (
);
$output465 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array466);

$output465 .= '][disable]=1';
$arguments463['parameters'] = $output465;
$array467 = array (
);$arguments463['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array467);

$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext)]);

$output462 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['key'] = NULL;
$arguments468['id'] = NULL;
$arguments468['default'] = NULL;
$arguments468['arguments'] = NULL;
$arguments468['extensionName'] = NULL;
$arguments468['languageKey'] = NULL;
$arguments468['alternativeLanguageKeys'] = NULL;
$arguments468['key'] = 'visibility.hide';

$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext)]);

$output462 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['identifier'] = NULL;
$arguments470['size'] = 'small';
$arguments470['overlay'] = NULL;
$arguments470['state'] = 'default';
$arguments470['alternativeMarkupIdentifier'] = NULL;
$arguments470['identifier'] = 'actions-edit-hide';

$output462 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output462 .= '</a>
						';
return $output462;
};

$output449 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
				';
return $output449;
};
$arguments447 = array();
$arguments447['if'] = NULL;

$output441 .= '';

$output441 .= '
			';
return $output441;
};
$arguments382 = array();
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array438 = array();
$array439 = array (
);$array438['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.currentlyLoggedIn', $array439);
$array438['1'] = ' == 1';

$expression440 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression440(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array438)
					),
					$renderingContext
				);
$arguments382['__thenClosure'] = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['identifier'] = NULL;
$arguments385['size'] = 'small';
$arguments385['overlay'] = NULL;
$arguments385['state'] = 'default';
$arguments385['alternativeMarkupIdentifier'] = NULL;
$arguments385['identifier'] = 'empty-empty';

$output384 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output384 .= '</span>
				';
return $output384;
};
$arguments382['__elseClosures'][] = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$output413 = '';

$output413 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['parameters'] = NULL;
$arguments417['redirectUrl'] = '';
$output419 = '';

$output419 .= 'data[be_users][';
$array420 = array (
);
$output419 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array420);

$output419 .= '][disable]=0';
$arguments417['parameters'] = $output419;
$array421 = array (
);$arguments417['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array421);

$output416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext)]);

$output416 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['key'] = NULL;
$arguments422['id'] = NULL;
$arguments422['default'] = NULL;
$arguments422['arguments'] = NULL;
$arguments422['extensionName'] = NULL;
$arguments422['languageKey'] = NULL;
$arguments422['alternativeLanguageKeys'] = NULL;
$arguments422['key'] = 'visibility.unhide';

$output416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext)]);

$output416 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments424 = array();
$arguments424['identifier'] = NULL;
$arguments424['size'] = 'small';
$arguments424['overlay'] = NULL;
$arguments424['state'] = 'default';
$arguments424['alternativeMarkupIdentifier'] = NULL;
$arguments424['identifier'] = 'actions-edit-unhide';

$output416 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output416 .= '</a>
						';
return $output416;
};
$arguments414 = array();

$output413 .= '';

$output413 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['parameters'] = NULL;
$arguments429['redirectUrl'] = '';
$output431 = '';

$output431 .= 'data[be_users][';
$array432 = array (
);
$output431 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array432);

$output431 .= '][disable]=1';
$arguments429['parameters'] = $output431;
$array433 = array (
);$arguments429['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array433);

$output428 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext)]);

$output428 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['key'] = NULL;
$arguments434['id'] = NULL;
$arguments434['default'] = NULL;
$arguments434['arguments'] = NULL;
$arguments434['extensionName'] = NULL;
$arguments434['languageKey'] = NULL;
$arguments434['alternativeLanguageKeys'] = NULL;
$arguments434['key'] = 'visibility.hide';

$output428 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext)]);

$output428 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['identifier'] = NULL;
$arguments436['size'] = 'small';
$arguments436['overlay'] = NULL;
$arguments436['state'] = 'default';
$arguments436['alternativeMarkupIdentifier'] = NULL;
$arguments436['identifier'] = 'actions-edit-hide';

$output428 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output428 .= '</a>
						';
return $output428;
};
$arguments426 = array();
$arguments426['if'] = NULL;

$output413 .= '';

$output413 .= '
					';
return $output413;
};
$arguments388 = array();
$arguments388['then'] = NULL;
$arguments388['else'] = NULL;
$arguments388['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array410 = array();
$array411 = array (
);$array410['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array411);
$array410['1'] = ' == 1';

$expression412 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments388['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression412(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array410)
					),
					$renderingContext
				);
$arguments388['__thenClosure'] = function() use ($renderingContext, $self) {
$output390 = '';

$output390 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['parameters'] = NULL;
$arguments391['redirectUrl'] = '';
$output393 = '';

$output393 .= 'data[be_users][';
$array394 = array (
);
$output393 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array394);

$output393 .= '][disable]=0';
$arguments391['parameters'] = $output393;
$array395 = array (
);$arguments391['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array395);

$output390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext)]);

$output390 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['key'] = NULL;
$arguments396['id'] = NULL;
$arguments396['default'] = NULL;
$arguments396['arguments'] = NULL;
$arguments396['extensionName'] = NULL;
$arguments396['languageKey'] = NULL;
$arguments396['alternativeLanguageKeys'] = NULL;
$arguments396['key'] = 'visibility.unhide';

$output390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext)]);

$output390 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments398 = array();
$arguments398['identifier'] = NULL;
$arguments398['size'] = 'small';
$arguments398['overlay'] = NULL;
$arguments398['state'] = 'default';
$arguments398['alternativeMarkupIdentifier'] = NULL;
$arguments398['identifier'] = 'actions-edit-unhide';

$output390 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output390 .= '</a>
						';
return $output390;
};
$arguments388['__elseClosures'][] = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['parameters'] = NULL;
$arguments401['redirectUrl'] = '';
$output403 = '';

$output403 .= 'data[be_users][';
$array404 = array (
);
$output403 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array404);

$output403 .= '][disable]=1';
$arguments401['parameters'] = $output403;
$array405 = array (
);$arguments401['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array405);

$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext)]);

$output400 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['key'] = NULL;
$arguments406['id'] = NULL;
$arguments406['default'] = NULL;
$arguments406['arguments'] = NULL;
$arguments406['extensionName'] = NULL;
$arguments406['languageKey'] = NULL;
$arguments406['alternativeLanguageKeys'] = NULL;
$arguments406['key'] = 'visibility.hide';

$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext)]);

$output400 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['identifier'] = NULL;
$arguments408['size'] = 'small';
$arguments408['overlay'] = NULL;
$arguments408['state'] = 'default';
$arguments408['alternativeMarkupIdentifier'] = NULL;
$arguments408['identifier'] = 'actions-edit-hide';

$output400 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output400 .= '</a>
						';
return $output400;
};

$output387 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output387 .= '
				';
return $output387;
};

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output304 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output525 = '';

$output525 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['identifier'] = NULL;
$arguments529['size'] = 'small';
$arguments529['overlay'] = NULL;
$arguments529['state'] = 'default';
$arguments529['alternativeMarkupIdentifier'] = NULL;
$arguments529['identifier'] = 'empty-empty';

$output528 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output528 .= '</span>
				';
return $output528;
};
$arguments526 = array();

$output525 .= '';

$output525 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
$output533 = '';

$output533 .= '
					<a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['backendUser'] = NULL;
$array536 = array (
);$arguments534['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array536);

$output533 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext)]);

$output533 .= '"
						 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments537 = array();
$arguments537['key'] = NULL;
$arguments537['id'] = NULL;
$arguments537['default'] = NULL;
$arguments537['arguments'] = NULL;
$arguments537['extensionName'] = NULL;
$arguments537['languageKey'] = NULL;
$arguments537['alternativeLanguageKeys'] = NULL;
$arguments537['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang.xlf:delete';

$output533 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext)]);

$output533 .= '"
						 data-severity="warning"
						 data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments539 = array();
$arguments539['key'] = NULL;
$arguments539['id'] = NULL;
$arguments539['default'] = NULL;
$arguments539['arguments'] = NULL;
$arguments539['extensionName'] = NULL;
$arguments539['languageKey'] = NULL;
$arguments539['alternativeLanguageKeys'] = NULL;
$arguments539['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output533 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext)]);

$output533 .= '"
						 data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['key'] = NULL;
$arguments541['id'] = NULL;
$arguments541['default'] = NULL;
$arguments541['arguments'] = NULL;
$arguments541['extensionName'] = NULL;
$arguments541['languageKey'] = NULL;
$arguments541['alternativeLanguageKeys'] = NULL;
$arguments541['key'] = 'confirm';
// Rendering Array
$array543 = array();
$array544 = array (
);$array543['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array544);
$arguments541['arguments'] = $array543;

$output533 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext)]);

$output533 .= '"
						 data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments545 = array();
$arguments545['key'] = NULL;
$arguments545['id'] = NULL;
$arguments545['default'] = NULL;
$arguments545['arguments'] = NULL;
$arguments545['extensionName'] = NULL;
$arguments545['languageKey'] = NULL;
$arguments545['alternativeLanguageKeys'] = NULL;
$arguments545['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output533 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext)]);

$output533 .= '">
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments547 = array();
$arguments547['identifier'] = NULL;
$arguments547['size'] = 'small';
$arguments547['overlay'] = NULL;
$arguments547['state'] = 'default';
$arguments547['alternativeMarkupIdentifier'] = NULL;
$arguments547['identifier'] = 'actions-edit-delete';

$output533 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output533 .= '
					</a>
				';
return $output533;
};
$arguments531 = array();
$arguments531['if'] = NULL;

$output525 .= '';

$output525 .= '
			';
return $output525;
};
$arguments500 = array();
$arguments500['then'] = NULL;
$arguments500['else'] = NULL;
$arguments500['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array521 = array();
$array522 = array (
);$array521['0'] = $renderingContext->getVariableProvider()->getByPath('currentUserUid', $array522);
$array521['1'] = ' == ';
$array523 = array (
);$array521['2'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array523);

$expression524 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments500['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression524(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array521)
					),
					$renderingContext
				);
$arguments500['__thenClosure'] = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['identifier'] = NULL;
$arguments503['size'] = 'small';
$arguments503['overlay'] = NULL;
$arguments503['state'] = 'default';
$arguments503['alternativeMarkupIdentifier'] = NULL;
$arguments503['identifier'] = 'empty-empty';

$output502 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output502 .= '</span>
				';
return $output502;
};
$arguments500['__elseClosures'][] = function() use ($renderingContext, $self) {
$output505 = '';

$output505 .= '
					<a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['backendUser'] = NULL;
$array508 = array (
);$arguments506['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array508);

$output505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext)]);

$output505 .= '"
						 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['key'] = NULL;
$arguments509['id'] = NULL;
$arguments509['default'] = NULL;
$arguments509['arguments'] = NULL;
$arguments509['extensionName'] = NULL;
$arguments509['languageKey'] = NULL;
$arguments509['alternativeLanguageKeys'] = NULL;
$arguments509['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang.xlf:delete';

$output505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext)]);

$output505 .= '"
						 data-severity="warning"
						 data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['key'] = NULL;
$arguments511['id'] = NULL;
$arguments511['default'] = NULL;
$arguments511['arguments'] = NULL;
$arguments511['extensionName'] = NULL;
$arguments511['languageKey'] = NULL;
$arguments511['alternativeLanguageKeys'] = NULL;
$arguments511['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext)]);

$output505 .= '"
						 data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['key'] = NULL;
$arguments513['id'] = NULL;
$arguments513['default'] = NULL;
$arguments513['arguments'] = NULL;
$arguments513['extensionName'] = NULL;
$arguments513['languageKey'] = NULL;
$arguments513['alternativeLanguageKeys'] = NULL;
$arguments513['key'] = 'confirm';
// Rendering Array
$array515 = array();
$array516 = array (
);$array515['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array516);
$arguments513['arguments'] = $array515;

$output505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext)]);

$output505 .= '"
						 data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments517 = array();
$arguments517['key'] = NULL;
$arguments517['id'] = NULL;
$arguments517['default'] = NULL;
$arguments517['arguments'] = NULL;
$arguments517['extensionName'] = NULL;
$arguments517['languageKey'] = NULL;
$arguments517['alternativeLanguageKeys'] = NULL;
$arguments517['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext)]);

$output505 .= '">
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments519 = array();
$arguments519['identifier'] = NULL;
$arguments519['size'] = 'small';
$arguments519['overlay'] = NULL;
$arguments519['state'] = 'default';
$arguments519['alternativeMarkupIdentifier'] = NULL;
$arguments519['identifier'] = 'actions-edit-delete';

$output505 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$output505 .= '
					</a>
				';
return $output505;
};

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output304 .= '
		</div>
		<div class="btn-group" role="group">
			<a class="btn btn-default" href="#" onclick="top.TYPO3.InfoWindow.showItem(\'be_users\', \'';
$array549 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array549)]);

$output304 .= '\'); return false;">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['identifier'] = NULL;
$arguments550['size'] = 'small';
$arguments550['overlay'] = NULL;
$arguments550['state'] = 'default';
$arguments550['alternativeMarkupIdentifier'] = NULL;
$arguments550['identifier'] = 'actions-document-info';

$output304 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output304 .= '</a>
		</div>
		<div class="btn-group" role="group">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$output580 = '';

$output580 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$output585 = '';

$output585 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments586 = array();
$arguments586['identifier'] = NULL;
$arguments586['size'] = 'small';
$arguments586['overlay'] = NULL;
$arguments586['state'] = 'default';
$arguments586['alternativeMarkupIdentifier'] = NULL;
$arguments586['identifier'] = 'actions-remove';
$arguments586['size'] = 'small';

$output585 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output585 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments588 = array();
$arguments588['key'] = NULL;
$arguments588['id'] = NULL;
$arguments588['default'] = NULL;
$arguments588['arguments'] = NULL;
$arguments588['extensionName'] = NULL;
$arguments588['languageKey'] = NULL;
$arguments588['alternativeLanguageKeys'] = NULL;
$arguments588['key'] = 'compare';

$output585 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext)]);

$output585 .= '
					';
return $output585;
};
$arguments581 = array();
$arguments581['additionalAttributes'] = NULL;
$arguments581['data'] = NULL;
$arguments581['class'] = NULL;
$arguments581['dir'] = NULL;
$arguments581['id'] = NULL;
$arguments581['lang'] = NULL;
$arguments581['style'] = NULL;
$arguments581['title'] = NULL;
$arguments581['accesskey'] = NULL;
$arguments581['tabindex'] = NULL;
$arguments581['onclick'] = NULL;
$arguments581['name'] = NULL;
$arguments581['rel'] = NULL;
$arguments581['rev'] = NULL;
$arguments581['target'] = NULL;
$arguments581['action'] = NULL;
$arguments581['controller'] = NULL;
$arguments581['extensionName'] = NULL;
$arguments581['pluginName'] = NULL;
$arguments581['pageUid'] = NULL;
$arguments581['pageType'] = NULL;
$arguments581['noCache'] = NULL;
$arguments581['noCacheHash'] = NULL;
$arguments581['section'] = NULL;
$arguments581['format'] = NULL;
$arguments581['linkAccessRestrictedPages'] = NULL;
$arguments581['additionalParams'] = NULL;
$arguments581['absolute'] = NULL;
$arguments581['addQueryString'] = NULL;
$arguments581['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments581['addQueryStringMethod'] = NULL;
$arguments581['arguments'] = NULL;
$arguments581['action'] = 'removeFromCompareList';
// Rendering Array
$array583 = array();
$array584 = array (
);$array583['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array584);
$arguments581['arguments'] = $array583;
$arguments581['class'] = 'btn btn-default';

$output580 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output580 .= '
				';
return $output580;
};
$arguments578 = array();

$output577 .= '';

$output577 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
$output592 = '';

$output592 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
$output597 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['identifier'] = NULL;
$arguments598['size'] = 'small';
$arguments598['overlay'] = NULL;
$arguments598['state'] = 'default';
$arguments598['alternativeMarkupIdentifier'] = NULL;
$arguments598['identifier'] = 'actions-add';
$arguments598['size'] = 'small';

$output597 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext);

$output597 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['key'] = NULL;
$arguments600['id'] = NULL;
$arguments600['default'] = NULL;
$arguments600['arguments'] = NULL;
$arguments600['extensionName'] = NULL;
$arguments600['languageKey'] = NULL;
$arguments600['alternativeLanguageKeys'] = NULL;
$arguments600['key'] = 'compare';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext)]);
return $output597;
};
$arguments593 = array();
$arguments593['additionalAttributes'] = NULL;
$arguments593['data'] = NULL;
$arguments593['class'] = NULL;
$arguments593['dir'] = NULL;
$arguments593['id'] = NULL;
$arguments593['lang'] = NULL;
$arguments593['style'] = NULL;
$arguments593['title'] = NULL;
$arguments593['accesskey'] = NULL;
$arguments593['tabindex'] = NULL;
$arguments593['onclick'] = NULL;
$arguments593['name'] = NULL;
$arguments593['rel'] = NULL;
$arguments593['rev'] = NULL;
$arguments593['target'] = NULL;
$arguments593['action'] = NULL;
$arguments593['controller'] = NULL;
$arguments593['extensionName'] = NULL;
$arguments593['pluginName'] = NULL;
$arguments593['pageUid'] = NULL;
$arguments593['pageType'] = NULL;
$arguments593['noCache'] = NULL;
$arguments593['noCacheHash'] = NULL;
$arguments593['section'] = NULL;
$arguments593['format'] = NULL;
$arguments593['linkAccessRestrictedPages'] = NULL;
$arguments593['additionalParams'] = NULL;
$arguments593['absolute'] = NULL;
$arguments593['addQueryString'] = NULL;
$arguments593['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments593['addQueryStringMethod'] = NULL;
$arguments593['arguments'] = NULL;
$arguments593['action'] = 'addToCompareList';
// Rendering Array
$array595 = array();
$array596 = array (
);$array595['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array596);
$arguments593['arguments'] = $array595;
$arguments593['class'] = 'btn btn-default';

$output592 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$output592 .= '
				';
return $output592;
};
$arguments590 = array();
$arguments590['if'] = NULL;

$output577 .= '';

$output577 .= '
			';
return $output577;
};
$arguments552 = array();
$arguments552['then'] = NULL;
$arguments552['else'] = NULL;
$arguments552['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array574 = array();
$array575 = array (
);$array574['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserUidList.{backendUser.uid}', $array575);

$expression576 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments552['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression576(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array574)
					),
					$renderingContext
				);
$arguments552['__thenClosure'] = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$output559 = '';

$output559 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments560 = array();
$arguments560['identifier'] = NULL;
$arguments560['size'] = 'small';
$arguments560['overlay'] = NULL;
$arguments560['state'] = 'default';
$arguments560['alternativeMarkupIdentifier'] = NULL;
$arguments560['identifier'] = 'actions-remove';
$arguments560['size'] = 'small';

$output559 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output559 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['key'] = NULL;
$arguments562['id'] = NULL;
$arguments562['default'] = NULL;
$arguments562['arguments'] = NULL;
$arguments562['extensionName'] = NULL;
$arguments562['languageKey'] = NULL;
$arguments562['alternativeLanguageKeys'] = NULL;
$arguments562['key'] = 'compare';

$output559 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext)]);

$output559 .= '
					';
return $output559;
};
$arguments555 = array();
$arguments555['additionalAttributes'] = NULL;
$arguments555['data'] = NULL;
$arguments555['class'] = NULL;
$arguments555['dir'] = NULL;
$arguments555['id'] = NULL;
$arguments555['lang'] = NULL;
$arguments555['style'] = NULL;
$arguments555['title'] = NULL;
$arguments555['accesskey'] = NULL;
$arguments555['tabindex'] = NULL;
$arguments555['onclick'] = NULL;
$arguments555['name'] = NULL;
$arguments555['rel'] = NULL;
$arguments555['rev'] = NULL;
$arguments555['target'] = NULL;
$arguments555['action'] = NULL;
$arguments555['controller'] = NULL;
$arguments555['extensionName'] = NULL;
$arguments555['pluginName'] = NULL;
$arguments555['pageUid'] = NULL;
$arguments555['pageType'] = NULL;
$arguments555['noCache'] = NULL;
$arguments555['noCacheHash'] = NULL;
$arguments555['section'] = NULL;
$arguments555['format'] = NULL;
$arguments555['linkAccessRestrictedPages'] = NULL;
$arguments555['additionalParams'] = NULL;
$arguments555['absolute'] = NULL;
$arguments555['addQueryString'] = NULL;
$arguments555['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments555['addQueryStringMethod'] = NULL;
$arguments555['arguments'] = NULL;
$arguments555['action'] = 'removeFromCompareList';
// Rendering Array
$array557 = array();
$array558 = array (
);$array557['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array558);
$arguments555['arguments'] = $array557;
$arguments555['class'] = 'btn btn-default';

$output554 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output554 .= '
				';
return $output554;
};
$arguments552['__elseClosures'][] = function() use ($renderingContext, $self) {
$output564 = '';

$output564 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
$output569 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['identifier'] = NULL;
$arguments570['size'] = 'small';
$arguments570['overlay'] = NULL;
$arguments570['state'] = 'default';
$arguments570['alternativeMarkupIdentifier'] = NULL;
$arguments570['identifier'] = 'actions-add';
$arguments570['size'] = 'small';

$output569 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output569 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments572 = array();
$arguments572['key'] = NULL;
$arguments572['id'] = NULL;
$arguments572['default'] = NULL;
$arguments572['arguments'] = NULL;
$arguments572['extensionName'] = NULL;
$arguments572['languageKey'] = NULL;
$arguments572['alternativeLanguageKeys'] = NULL;
$arguments572['key'] = 'compare';

$output569 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext)]);
return $output569;
};
$arguments565 = array();
$arguments565['additionalAttributes'] = NULL;
$arguments565['data'] = NULL;
$arguments565['class'] = NULL;
$arguments565['dir'] = NULL;
$arguments565['id'] = NULL;
$arguments565['lang'] = NULL;
$arguments565['style'] = NULL;
$arguments565['title'] = NULL;
$arguments565['accesskey'] = NULL;
$arguments565['tabindex'] = NULL;
$arguments565['onclick'] = NULL;
$arguments565['name'] = NULL;
$arguments565['rel'] = NULL;
$arguments565['rev'] = NULL;
$arguments565['target'] = NULL;
$arguments565['action'] = NULL;
$arguments565['controller'] = NULL;
$arguments565['extensionName'] = NULL;
$arguments565['pluginName'] = NULL;
$arguments565['pageUid'] = NULL;
$arguments565['pageType'] = NULL;
$arguments565['noCache'] = NULL;
$arguments565['noCacheHash'] = NULL;
$arguments565['section'] = NULL;
$arguments565['format'] = NULL;
$arguments565['linkAccessRestrictedPages'] = NULL;
$arguments565['additionalParams'] = NULL;
$arguments565['absolute'] = NULL;
$arguments565['addQueryString'] = NULL;
$arguments565['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments565['addQueryStringMethod'] = NULL;
$arguments565['arguments'] = NULL;
$arguments565['action'] = 'addToCompareList';
// Rendering Array
$array567 = array();
$array568 = array (
);$array567['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array568);
$arguments565['arguments'] = $array567;
$arguments565['class'] = 'btn btn-default';

$output564 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output564 .= '
				';
return $output564;
};

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output304 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['backendUser'] = NULL;
$array604 = array (
);$arguments602['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array604);

$output304 .= TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output304 .= '
		</div>
	</td>
</tr>
';
return $output304;
};
$arguments302 = array();
$arguments302['name'] = NULL;
$arguments302['name'] = 'list_row';

$output301 .= NULL;

$output301 .= '
</html>
';

return $output301;
}


}
#