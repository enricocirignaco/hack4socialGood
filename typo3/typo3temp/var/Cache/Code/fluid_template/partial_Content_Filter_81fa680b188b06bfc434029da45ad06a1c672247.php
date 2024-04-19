<?php

class partial_Content_Filter_81fa680b188b06bfc434029da45ad06a1c672247 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'belog' => 
  array (
    0 => 'TYPO3\\CMS\\Belog\\ViewHelpers',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '
	This is an ugly workaround.
	The function module in Web->Info already renders a form tag, and there is
	no easy way to circumvent this. The page id is needed for the info module
	that is not extbase based to figure the permissions. Thus, we have to add
	the page Id manually to hint the info module about that.
';
};
$arguments1 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
	<input type="hidden" name="id" value="';
$array9 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constraint.pageId', $array9)]);

$output8 .= '" />
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
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('isSubmoduleLayout', $array6);

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

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
	<div class="form-group">
		<label for="belog-users">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'users';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['value'] = NULL;
$arguments16['property'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['size'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['options'] = NULL;
$arguments16['optionsAfterContent'] = false;
$arguments16['optionValueField'] = NULL;
$arguments16['optionLabelField'] = NULL;
$arguments16['sortByOptionLabel'] = false;
$arguments16['selectAllByDefault'] = false;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['prependOptionLabel'] = NULL;
$arguments16['prependOptionValue'] = NULL;
$arguments16['multiple'] = false;
$arguments16['required'] = false;
$arguments16['property'] = 'userOrGroup';
$array18 = array (
);$arguments16['options'] = $renderingContext->getVariableProvider()->getByPath('userGroups', $array18);
// Rendering Array
$array19 = array();
$array19['onchange'] = 'submit()';
$arguments16['additionalAttributes'] = $array19;
$arguments16['class'] = 'form-control input-sm';
$arguments16['id'] = 'belog-users';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '
	</div>

	<div class="form-group">
		<label for="belog-max">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['languageKey'] = NULL;
$arguments20['alternativeLanguageKeys'] = NULL;
$arguments20['key'] = 'max';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['size'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['options'] = NULL;
$arguments22['optionsAfterContent'] = false;
$arguments22['optionValueField'] = NULL;
$arguments22['optionLabelField'] = NULL;
$arguments22['sortByOptionLabel'] = false;
$arguments22['selectAllByDefault'] = false;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['prependOptionLabel'] = NULL;
$arguments22['prependOptionValue'] = NULL;
$arguments22['multiple'] = false;
$arguments22['required'] = false;
$arguments22['optionLabelPrefix'] = NULL;
$arguments22['property'] = 'number';
$array24 = array (
);$arguments22['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableNumberOfLogEntries', $array24);
$arguments22['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array25 = array();
$array25['onchange'] = 'submit()';
$arguments22['additionalAttributes'] = $array25;
$arguments22['class'] = 'form-control input-sm';
$arguments22['id'] = 'belog-max';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output13 .= '
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
				<div class="form-group">
					<label for="belog-workspaces">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$arguments38['key'] = 'workspace';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output37 .= '</label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['name'] = NULL;
$arguments40['value'] = NULL;
$arguments40['property'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['size'] = NULL;
$arguments40['disabled'] = NULL;
$arguments40['options'] = NULL;
$arguments40['optionsAfterContent'] = false;
$arguments40['optionValueField'] = NULL;
$arguments40['optionLabelField'] = NULL;
$arguments40['sortByOptionLabel'] = false;
$arguments40['selectAllByDefault'] = false;
$arguments40['errorClass'] = 'f3-form-error';
$arguments40['prependOptionLabel'] = NULL;
$arguments40['prependOptionValue'] = NULL;
$arguments40['multiple'] = false;
$arguments40['required'] = false;
$arguments40['property'] = 'workspaceUid';
$array42 = array (
);$arguments40['options'] = $renderingContext->getVariableProvider()->getByPath('workspaces', $array42);
// Rendering Array
$array43 = array();
$array43['onchange'] = 'submit()';
$arguments40['additionalAttributes'] = $array43;
$arguments40['class'] = 'form-control input-sm';
$arguments40['id'] = 'belog-workspaces';

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output37 .= '
				</div>
		';
return $output37;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('showWorkspaceSelector', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
	';
return $output31;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('workspacesExtensionLoaded', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
		<div class="form-group">
			<label for="belog-depth">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'chLog_menuDepth';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output49 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['name'] = NULL;
$arguments52['value'] = NULL;
$arguments52['property'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['size'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['options'] = NULL;
$arguments52['optionsAfterContent'] = false;
$arguments52['optionValueField'] = NULL;
$arguments52['optionLabelField'] = NULL;
$arguments52['sortByOptionLabel'] = false;
$arguments52['selectAllByDefault'] = false;
$arguments52['errorClass'] = 'f3-form-error';
$arguments52['prependOptionLabel'] = NULL;
$arguments52['prependOptionValue'] = NULL;
$arguments52['multiple'] = false;
$arguments52['required'] = false;
$arguments52['property'] = 'depth';
$array54 = array (
);$arguments52['options'] = $renderingContext->getVariableProvider()->getByPath('pageDepths', $array54);
// Rendering Array
$array55 = array();
$array55['onchange'] = 'submit()';
$arguments52['additionalAttributes'] = $array55;
$arguments52['class'] = 'form-control input-sm';
$arguments52['id'] = 'belog-depth';

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output49 .= '
		</div>
	';
return $output49;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('isSubmoduleLayout', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '

	<div class="form-group">
		<label for="belog-time">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'time';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['name'] = NULL;
$arguments58['value'] = NULL;
$arguments58['property'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['size'] = NULL;
$arguments58['disabled'] = NULL;
$arguments58['options'] = NULL;
$arguments58['optionsAfterContent'] = false;
$arguments58['optionValueField'] = NULL;
$arguments58['optionLabelField'] = NULL;
$arguments58['sortByOptionLabel'] = false;
$arguments58['selectAllByDefault'] = false;
$arguments58['errorClass'] = 'f3-form-error';
$arguments58['prependOptionLabel'] = NULL;
$arguments58['prependOptionValue'] = NULL;
$arguments58['multiple'] = false;
$arguments58['required'] = false;
$arguments58['optionLabelPrefix'] = NULL;
$arguments58['property'] = 'timeFrame';
$array60 = array (
);$arguments58['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableTimeFrames', $array60);
$arguments58['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array61 = array();
$array61['onchange'] = 'submit()';
$arguments58['additionalAttributes'] = $array61;
$arguments58['class'] = 'form-control input-sm';
$arguments58['id'] = 'belog-time';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output13 .= '
	</div>

	<div class="form-group">
		<label for="belog-action">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'action';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['name'] = NULL;
$arguments64['value'] = NULL;
$arguments64['property'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['size'] = NULL;
$arguments64['disabled'] = NULL;
$arguments64['options'] = NULL;
$arguments64['optionsAfterContent'] = false;
$arguments64['optionValueField'] = NULL;
$arguments64['optionLabelField'] = NULL;
$arguments64['sortByOptionLabel'] = false;
$arguments64['selectAllByDefault'] = false;
$arguments64['errorClass'] = 'f3-form-error';
$arguments64['prependOptionLabel'] = NULL;
$arguments64['prependOptionValue'] = NULL;
$arguments64['multiple'] = false;
$arguments64['required'] = false;
$arguments64['optionLabelPrefix'] = NULL;
$arguments64['property'] = 'action';
$array66 = array (
);$arguments64['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableActions', $array66);
$arguments64['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array67 = array();
$array67['onchange'] = 'submit()';
$arguments64['additionalAttributes'] = $array67;
$arguments64['class'] = 'form-control input-sm';
$arguments64['id'] = 'belog-action';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output13 .= '
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
		<div class="form-group">
			<label for="belog-group">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['languageKey'] = NULL;
$arguments74['alternativeLanguageKeys'] = NULL;
$arguments74['key'] = 'groupByPage';

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output73 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['name'] = NULL;
$arguments76['value'] = NULL;
$arguments76['property'] = NULL;
$arguments76['disabled'] = NULL;
$arguments76['errorClass'] = 'f3-form-error';
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['checked'] = NULL;
$arguments76['multiple'] = false;
$arguments76['property'] = 'groupByPage';
$arguments76['value'] = 1;
// Rendering Array
$array78 = array();
$array78['onchange'] = 'submit()';
$arguments76['additionalAttributes'] = $array78;
$arguments76['id'] = 'belog-group';

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output73 .= '
		</div>
	';
return $output73;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.depth', $array71);
$array70['1'] = ' > 0';

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = $renderChildrenClosure69;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output13 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return '
		Date time fields for manual date selection
	';
};
$arguments79 = array();

$output13 .= NULL;

$output13 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['pageTitle'] = '';
$arguments87['includeCssFiles'] = NULL;
$arguments87['includeJsFiles'] = NULL;
$arguments87['addJsInlineLabels'] = NULL;
$arguments87['includeRequireJsModules'] = NULL;
$arguments87['addInlineSettings'] = NULL;
// Rendering Array
$array89 = array();
$array89['0'] = 'TYPO3/CMS/Backend/DateTimePicker';
$arguments87['includeRequireJsModules'] = $array89;

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output86 .= '
		<div class="form-group">
			<label for="manualDateStart">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['languageKey'] = NULL;
$arguments90['alternativeLanguageKeys'] = NULL;
$arguments90['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:from';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output86 .= '</label>
			<div class="input-group input-group-sm">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['additionalAttributes'] = NULL;
$arguments92['data'] = NULL;
$arguments92['name'] = NULL;
$arguments92['value'] = NULL;
$arguments92['property'] = NULL;
$arguments92['autofocus'] = NULL;
$arguments92['disabled'] = NULL;
$arguments92['maxlength'] = NULL;
$arguments92['readonly'] = NULL;
$arguments92['size'] = NULL;
$arguments92['placeholder'] = NULL;
$arguments92['pattern'] = NULL;
$arguments92['errorClass'] = 'f3-form-error';
$arguments92['class'] = NULL;
$arguments92['dir'] = NULL;
$arguments92['id'] = NULL;
$arguments92['lang'] = NULL;
$arguments92['style'] = NULL;
$arguments92['title'] = NULL;
$arguments92['accesskey'] = NULL;
$arguments92['tabindex'] = NULL;
$arguments92['onclick'] = NULL;
$arguments92['required'] = false;
$arguments92['type'] = 'text';
$arguments92['name'] = 'manualDateStart';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array97);

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['date'] = NULL;
$arguments99['format'] = '';
$arguments99['base'] = NULL;
$output101 = '';
$array102 = array (
);
$output101 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array102);

$output101 .= ' ';
$array103 = array (
);
$output101 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array103);
$arguments99['format'] = $output101;
$array104 = array (
);$arguments99['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array104);
$renderChildrenClosure100 = ($arguments99['date'] !== null) ? function() use ($arguments99) { return $arguments99['date']; } : $renderChildrenClosure100;$arguments94['then'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);
$arguments92['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);
$arguments92['id'] = 'manualDateStart';
$arguments92['class'] = 'form-control input-sm t3js-datetimepicker t3js-clearable';
// Rendering Array
$array105 = array();
$array105['date-type'] = 'datetime';
$arguments92['data'] = $array105;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output86 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['name'] = NULL;
$arguments106['value'] = NULL;
$arguments106['property'] = NULL;
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$arguments106['property'] = 'manualDateStart';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array111);

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['date'] = NULL;
$arguments113['format'] = '';
$arguments113['base'] = NULL;
$arguments113['format'] = 'c';
$array115 = array (
);$arguments113['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array115);
$renderChildrenClosure114 = ($arguments113['date'] !== null) ? function() use ($arguments113) { return $arguments113['date']; } : $renderChildrenClosure114;$arguments108['then'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);
$arguments106['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output86 .= '
				<span class="input-group-btn">
					<label class="btn btn-default" for="manualDateStart">
						<span class="fa fa-calendar"></span>
					</label>
				</span>
			</div>
		</div>

		<div class="form-group">
			<label for="manualDateStop">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:to';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output86 .= '</label>
			<div class="input-group input-group-sm">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['name'] = NULL;
$arguments118['value'] = NULL;
$arguments118['property'] = NULL;
$arguments118['autofocus'] = NULL;
$arguments118['disabled'] = NULL;
$arguments118['maxlength'] = NULL;
$arguments118['readonly'] = NULL;
$arguments118['size'] = NULL;
$arguments118['placeholder'] = NULL;
$arguments118['pattern'] = NULL;
$arguments118['errorClass'] = 'f3-form-error';
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['required'] = false;
$arguments118['type'] = 'text';
$arguments118['name'] = 'manualDateStop';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['date'] = NULL;
$arguments120['format'] = '';
$arguments120['base'] = NULL;
$output122 = '';
$array123 = array (
);
$output122 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array123);

$output122 .= ' ';
$array124 = array (
);
$output122 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array124);
$arguments120['format'] = $output122;
$array125 = array (
);$arguments120['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array125);
$renderChildrenClosure121 = ($arguments120['date'] !== null) ? function() use ($arguments120) { return $arguments120['date']; } : $renderChildrenClosure121;$arguments118['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);
$arguments118['id'] = 'manualDateStop';
$arguments118['class'] = 'form-control input-sm t3js-datetimepicker t3js-clearable';
// Rendering Array
$array126 = array();
$array126['date-type'] = 'datetime';
$arguments118['data'] = $array126;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output86 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['name'] = NULL;
$arguments127['value'] = NULL;
$arguments127['property'] = NULL;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['property'] = 'manualDateStop';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['date'] = NULL;
$arguments129['format'] = '';
$arguments129['base'] = NULL;
$arguments129['format'] = 'c';
$array131 = array (
);$arguments129['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array131);
$renderChildrenClosure130 = ($arguments129['date'] !== null) ? function() use ($arguments129) { return $arguments129['date']; } : $renderChildrenClosure130;$arguments127['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output86 .= '
				<span class="input-group-btn">
					<label class="btn btn-default" for="manualDateStop">
						<span class="fa fa-calendar"></span>
					</label>
				</span>
			</div>
		</div>

		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['name'] = NULL;
$arguments132['value'] = NULL;
$arguments132['property'] = NULL;
$arguments132['disabled'] = NULL;
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['id'] = 'submit-constraint';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['key'] = NULL;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['languageKey'] = NULL;
$arguments134['alternativeLanguageKeys'] = NULL;
$arguments134['key'] = 'set';
$arguments132['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);
$arguments132['class'] = 'btn btn-default btn-sm';

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output86 .= '
		</div>
	';
return $output86;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.timeFrame', $array84);
$array83['1'] = ' == 30';

$expression85 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 30);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = $renderChildrenClosure82;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output13 .= '
';
return $output13;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['action'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['controller'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['pluginName'] = NULL;
$arguments10['pageUid'] = NULL;
$arguments10['object'] = NULL;
$arguments10['pageType'] = 0;
$arguments10['noCache'] = false;
$arguments10['noCacheHash'] = false;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['addQueryStringMethod'] = 'GET';
$arguments10['fieldNamePrefix'] = NULL;
$arguments10['actionUri'] = NULL;
$arguments10['objectName'] = NULL;
$arguments10['hiddenFieldClassName'] = NULL;
$arguments10['enctype'] = NULL;
$arguments10['method'] = NULL;
$arguments10['name'] = NULL;
$arguments10['onreset'] = NULL;
$arguments10['onsubmit'] = NULL;
$arguments10['target'] = NULL;
$arguments10['novalidate'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$array12 = array (
);$arguments10['object'] = $renderingContext->getVariableProvider()->getByPath('constraint', $array12);
$arguments10['action'] = 'list';
$arguments10['name'] = 'constraint';
$arguments10['class'] = 'form-inline form-inline-spaced';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#