<?php

class List_action_index_96224e878cc59704c45e3756cd96fd5bd77022cd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'main';
}
public function hasLayout() {
return TRUE;
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'installedExtensions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
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
$arguments4['partial'] = 'List/UploadForm';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['placeholder'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'extensionList.search';
$arguments6['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments6['id'] = 'Tx_Extensionmanager_extensionkey';
$array10 = array (
);$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array10);
$arguments6['class'] = 'form-control';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'extensionList.header.title.update';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'extensionList.header.update';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output3 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'extensionList.header.title.activate';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'extensionList.header.activate';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'extensionList.header.extensionName';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'extensionList.header.extensionKey';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'extensionList.header.extensionVersion';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'extensionList.header.extensionState';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'extensionList.header.extensionType';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output3 .= '</th>
				<th>';
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
$arguments29['key'] = 'extensionList.header.extensionActions';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output3 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
						<tr id="';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array68)]);

$output67 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array72);
$array71['1'] = ' == -1';

$expression73 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['then'] = 'insecure';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array77);
$array76['1'] = ' == -2';

$expression78 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['then'] = 'outdated';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output67 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['then'] = '';
$arguments79['else'] = 'inactive';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output67 .= '">
					';
return $output67;
};
$arguments65 = array();

$output64 .= '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
						<tr id="';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array87)]);

$output86 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['then'] = '';
$arguments88['else'] = 'inactive';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output86 .= '">
					';
return $output86;
};
$arguments84 = array();
$arguments84['if'] = NULL;

$output64 .= '';

$output64 .= '
				';
return $output64;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
						<tr id="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array38)]);

$output37 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array42);
$array41['1'] = ' == -1';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = 'insecure';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array47);
$array46['1'] = ' == -2';

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['then'] = 'outdated';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output37 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['then'] = '';
$arguments49['else'] = 'inactive';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output37 .= '">
					';
return $output37;
};
$arguments35['__elseClosures'][] = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
						<tr id="';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array55)]);

$output54 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array59);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['then'] = '';
$arguments56['else'] = 'inactive';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output54 .= '">
					';
return $output54;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
								<span class="btn btn-default disabled" title="';
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
$arguments130['key'] = 'extensionList.updateDisabled';

$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext)]);

$output129 .= '">
									';
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
$arguments132['identifier'] = 'actions-system-extension-update';

$output129 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output129 .= '
								</span>
							';
return $output129;
};
$arguments127 = array();

$output126 .= '';

$output126 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['identifier'] = NULL;
$arguments149['size'] = 'small';
$arguments149['overlay'] = NULL;
$arguments149['state'] = 'default';
$arguments149['alternativeMarkupIdentifier'] = NULL;
$arguments149['identifier'] = 'actions-system-extension-update';

$output148 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
									';
return $output148;
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['name'] = NULL;
$arguments137['rel'] = NULL;
$arguments137['rev'] = NULL;
$arguments137['target'] = NULL;
$arguments137['action'] = NULL;
$arguments137['controller'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['pluginName'] = NULL;
$arguments137['pageUid'] = NULL;
$arguments137['pageType'] = NULL;
$arguments137['noCache'] = NULL;
$arguments137['noCacheHash'] = NULL;
$arguments137['section'] = NULL;
$arguments137['format'] = NULL;
$arguments137['linkAccessRestrictedPages'] = NULL;
$arguments137['additionalParams'] = NULL;
$arguments137['absolute'] = NULL;
$arguments137['addQueryString'] = NULL;
$arguments137['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments137['addQueryStringMethod'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['action'] = 'updateCommentForUpdatableVersions';
$arguments137['class'] = 'btn btn-default';
// Rendering Array
$array139 = array();
$array139['data-action'] = 'update-extension';
$arguments137['additionalAttributes'] = $array139;
$arguments137['format'] = 'json';
$arguments137['controller'] = 'Download';
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array141);
$array142 = array (
);$array140['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array142);
$array143 = array (
);$array140['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array143);
$arguments137['arguments'] = $array140;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['key'] = NULL;
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['languageKey'] = NULL;
$arguments144['alternativeLanguageKeys'] = NULL;
$arguments144['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array147);
$arguments144['arguments'] = $array146;
$arguments137['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
							';
return $output136;
};
$arguments134 = array();
$arguments134['if'] = NULL;

$output126 .= '';

$output126 .= '
						';
return $output126;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array122);
$array121['1'] = ' || ';
$array123 = array (
);$array121['2'] = $renderingContext->getVariableProvider()->getByPath('settings.offlineMode', $array123);
$array121['3'] = ' || ';
$array124 = array (
);$array121['4'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array124);
$array121['5'] = ' == \'excludeFromUpdates\'';

$expression125 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == 'excludeFromUpdates'));};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
								<span class="btn btn-default disabled" title="';
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
$arguments102['key'] = 'extensionList.updateDisabled';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= '">
									';
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
$arguments104['identifier'] = 'actions-system-extension-update';

$output101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output101 .= '
								</span>
							';
return $output101;
};
$arguments99['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['identifier'] = NULL;
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$arguments119['identifier'] = 'actions-system-extension-update';

$output118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
									';
return $output118;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$arguments107['action'] = NULL;
$arguments107['controller'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['pluginName'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = NULL;
$arguments107['noCache'] = NULL;
$arguments107['noCacheHash'] = NULL;
$arguments107['section'] = NULL;
$arguments107['format'] = NULL;
$arguments107['linkAccessRestrictedPages'] = NULL;
$arguments107['additionalParams'] = NULL;
$arguments107['absolute'] = NULL;
$arguments107['addQueryString'] = NULL;
$arguments107['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['action'] = 'updateCommentForUpdatableVersions';
$arguments107['class'] = 'btn btn-default';
// Rendering Array
$array109 = array();
$array109['data-action'] = 'update-extension';
$arguments107['additionalAttributes'] = $array109;
$arguments107['format'] = 'json';
$arguments107['controller'] = 'Download';
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array111);
$array112 = array (
);$array110['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array112);
$array113 = array (
);$array110['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array113);
$arguments107['arguments'] = $array110;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array117);
$arguments114['arguments'] = $array116;
$arguments107['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
							';
return $output106;
};

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
					';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output34 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$arguments151['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array154);

$expression155 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments151['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
$arguments151['then'] = 'active';
$arguments151['else'] = 'inactive';

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output34 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['title'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$arguments156['name'] = NULL;
$arguments156['rel'] = NULL;
$arguments156['rev'] = NULL;
$arguments156['target'] = NULL;
$arguments156['action'] = NULL;
$arguments156['controller'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['pluginName'] = NULL;
$arguments156['pageUid'] = NULL;
$arguments156['pageType'] = NULL;
$arguments156['noCache'] = NULL;
$arguments156['noCacheHash'] = NULL;
$arguments156['section'] = NULL;
$arguments156['format'] = NULL;
$arguments156['linkAccessRestrictedPages'] = NULL;
$arguments156['additionalParams'] = NULL;
$arguments156['absolute'] = NULL;
$arguments156['addQueryString'] = NULL;
$arguments156['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments156['addQueryStringMethod'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extension'] = NULL;
$array158 = array (
);$arguments156['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array158);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output34 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
						<img class="ext-icon" src="../';
$array165 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array165)]);
$array166 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array166)]);

$output164 .= '" alt="" />
					';
return $output164;
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output34 .= '
					<span title="';
$array167 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array167)]);

$output34 .= '">';
$array168 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array168)]);

$output34 .= '</span>
				</td>
				<td>
					';
$array169 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array169)]);

$output34 .= '
				</td>
				<td>
					';
$array170 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array170)]);

$output34 .= '
				</td>
				<td>
					<span class="label label-';
$array171 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array171)]);

$output34 .= '">';
$array172 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array172)]);

$output34 .= '</span>
				</td>
				<td>
					';
$array173 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array173)]);

$output34 .= '
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['class'] = NULL;
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
$arguments178['name'] = NULL;
$arguments178['rel'] = NULL;
$arguments178['rev'] = NULL;
$arguments178['target'] = NULL;
$arguments178['action'] = NULL;
$arguments178['controller'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['pluginName'] = NULL;
$arguments178['pageUid'] = NULL;
$arguments178['pageType'] = NULL;
$arguments178['noCache'] = NULL;
$arguments178['noCacheHash'] = NULL;
$arguments178['section'] = NULL;
$arguments178['format'] = NULL;
$arguments178['linkAccessRestrictedPages'] = NULL;
$arguments178['additionalParams'] = NULL;
$arguments178['absolute'] = NULL;
$arguments178['addQueryString'] = NULL;
$arguments178['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments178['addQueryStringMethod'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionKey'] = NULL;
$arguments178['class'] = 'btn btn-default';
$array180 = array (
);$arguments178['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array180);

$output177 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
							  ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['additionalAttributes'] = NULL;
$arguments187['data'] = NULL;
$arguments187['class'] = NULL;
$arguments187['dir'] = NULL;
$arguments187['id'] = NULL;
$arguments187['lang'] = NULL;
$arguments187['style'] = NULL;
$arguments187['title'] = NULL;
$arguments187['accesskey'] = NULL;
$arguments187['tabindex'] = NULL;
$arguments187['onclick'] = NULL;
$arguments187['name'] = NULL;
$arguments187['rel'] = NULL;
$arguments187['rev'] = NULL;
$arguments187['target'] = NULL;
$arguments187['action'] = NULL;
$arguments187['controller'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['pluginName'] = NULL;
$arguments187['pageUid'] = NULL;
$arguments187['pageType'] = NULL;
$arguments187['noCache'] = NULL;
$arguments187['noCacheHash'] = NULL;
$arguments187['section'] = NULL;
$arguments187['format'] = NULL;
$arguments187['linkAccessRestrictedPages'] = NULL;
$arguments187['additionalParams'] = NULL;
$arguments187['absolute'] = NULL;
$arguments187['addQueryString'] = NULL;
$arguments187['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments187['addQueryStringMethod'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extension'] = NULL;
$arguments187['class'] = 'btn btn-default';
$array189 = array (
);$arguments187['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array189);

$output186 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
							';
return $output186;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array183['0'] = '!';
$array184 = array (
);$array183['1'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array184);

$expression185 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$arguments181['__thenClosure'] = $renderChildrenClosure182;

$output177 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output177 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['identifier'] = NULL;
$arguments197['size'] = 'small';
$arguments197['overlay'] = NULL;
$arguments197['state'] = 'default';
$arguments197['alternativeMarkupIdentifier'] = NULL;
$arguments197['identifier'] = 'actions-system-extension-download';

$output196 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
							';
return $output196;
};
$arguments190 = array();
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['class'] = NULL;
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['name'] = NULL;
$arguments190['rel'] = NULL;
$arguments190['rev'] = NULL;
$arguments190['target'] = NULL;
$arguments190['action'] = NULL;
$arguments190['controller'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['pluginName'] = NULL;
$arguments190['pageUid'] = NULL;
$arguments190['pageType'] = NULL;
$arguments190['noCache'] = NULL;
$arguments190['noCacheHash'] = NULL;
$arguments190['section'] = NULL;
$arguments190['format'] = NULL;
$arguments190['linkAccessRestrictedPages'] = NULL;
$arguments190['additionalParams'] = NULL;
$arguments190['absolute'] = NULL;
$arguments190['addQueryString'] = NULL;
$arguments190['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments190['addQueryStringMethod'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['action'] = 'downloadExtensionZip';
$arguments190['controller'] = 'Action';
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array193);
$arguments190['arguments'] = $array192;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['languageKey'] = NULL;
$arguments194['alternativeLanguageKeys'] = NULL;
$arguments194['key'] = 'extensionList.downloadzip';
$arguments190['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);
$arguments190['class'] = 'btn btn-default';

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output177 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['additionalAttributes'] = NULL;
$arguments199['data'] = NULL;
$arguments199['class'] = NULL;
$arguments199['dir'] = NULL;
$arguments199['id'] = NULL;
$arguments199['lang'] = NULL;
$arguments199['style'] = NULL;
$arguments199['title'] = NULL;
$arguments199['accesskey'] = NULL;
$arguments199['tabindex'] = NULL;
$arguments199['onclick'] = NULL;
$arguments199['name'] = NULL;
$arguments199['rel'] = NULL;
$arguments199['rev'] = NULL;
$arguments199['target'] = NULL;
$arguments199['action'] = NULL;
$arguments199['controller'] = NULL;
$arguments199['extensionName'] = NULL;
$arguments199['pluginName'] = NULL;
$arguments199['pageUid'] = NULL;
$arguments199['pageType'] = NULL;
$arguments199['noCache'] = NULL;
$arguments199['noCacheHash'] = NULL;
$arguments199['section'] = NULL;
$arguments199['format'] = NULL;
$arguments199['linkAccessRestrictedPages'] = NULL;
$arguments199['additionalParams'] = NULL;
$arguments199['absolute'] = NULL;
$arguments199['addQueryString'] = NULL;
$arguments199['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments199['addQueryStringMethod'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['extension'] = NULL;
$arguments199['class'] = 'btn btn-default';
$array201 = array (
);$arguments199['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array201);

$output177 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output177 .= '
						';
return $output177;
};
$arguments174 = array();
$arguments174['additionalAttributes'] = NULL;
$arguments174['data'] = NULL;
$arguments174['extension'] = NULL;
$array176 = array (
);$arguments174['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array176);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output34 .= '
					</div>
				</td>
				</tr>
			';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array33);
$arguments31['as'] = 'extension';
$arguments31['key'] = 'extensionKey';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output3 .= '
		</tbody>
	</table>
	</div>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output202 = '';

$output202 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['name'] = NULL;
$arguments203['name'] = 'main';

$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output202 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['key'] = NULL;
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$arguments208['languageKey'] = NULL;
$arguments208['alternativeLanguageKeys'] = NULL;
$arguments208['key'] = 'installedExtensions';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext)]);

$output207 .= '</h1>
';
return $output207;
};
$arguments205 = array();
$arguments205['name'] = NULL;
$arguments205['name'] = 'headline';

$output202 .= NULL;

$output202 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['section'] = NULL;
$arguments213['partial'] = NULL;
$arguments213['delegate'] = NULL;
$arguments213['renderable'] = NULL;
$arguments213['arguments'] = array (
);
$arguments213['optional'] = false;
$arguments213['default'] = NULL;
$arguments213['contentAs'] = NULL;
$arguments213['debug'] = true;
$arguments213['partial'] = 'List/UploadForm';

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['name'] = NULL;
$arguments215['value'] = NULL;
$arguments215['property'] = NULL;
$arguments215['autofocus'] = NULL;
$arguments215['disabled'] = NULL;
$arguments215['maxlength'] = NULL;
$arguments215['readonly'] = NULL;
$arguments215['size'] = NULL;
$arguments215['placeholder'] = NULL;
$arguments215['pattern'] = NULL;
$arguments215['errorClass'] = 'f3-form-error';
$arguments215['class'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['title'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$arguments215['required'] = false;
$arguments215['type'] = 'text';
$arguments215['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$arguments217['key'] = 'extensionList.search';
$arguments215['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);
$arguments215['id'] = 'Tx_Extensionmanager_extensionkey';
$array219 = array (
);$arguments215['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array219);
$arguments215['class'] = 'form-control';

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output212 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['key'] = NULL;
$arguments220['id'] = NULL;
$arguments220['default'] = NULL;
$arguments220['arguments'] = NULL;
$arguments220['extensionName'] = NULL;
$arguments220['languageKey'] = NULL;
$arguments220['alternativeLanguageKeys'] = NULL;
$arguments220['key'] = 'extensionList.header.title.update';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext)]);

$output212 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['key'] = NULL;
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$arguments222['languageKey'] = NULL;
$arguments222['alternativeLanguageKeys'] = NULL;
$arguments222['key'] = 'extensionList.header.update';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext)]);

$output212 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['key'] = NULL;
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$arguments224['languageKey'] = NULL;
$arguments224['alternativeLanguageKeys'] = NULL;
$arguments224['key'] = 'extensionList.header.title.activate';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext)]);

$output212 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['key'] = NULL;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$arguments226['languageKey'] = NULL;
$arguments226['alternativeLanguageKeys'] = NULL;
$arguments226['key'] = 'extensionList.header.activate';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext)]);

$output212 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['key'] = NULL;
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['languageKey'] = NULL;
$arguments228['alternativeLanguageKeys'] = NULL;
$arguments228['key'] = 'extensionList.header.extensionName';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext)]);

$output212 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['key'] = NULL;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$arguments230['languageKey'] = NULL;
$arguments230['alternativeLanguageKeys'] = NULL;
$arguments230['key'] = 'extensionList.header.extensionKey';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output212 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['key'] = NULL;
$arguments232['id'] = NULL;
$arguments232['default'] = NULL;
$arguments232['arguments'] = NULL;
$arguments232['extensionName'] = NULL;
$arguments232['languageKey'] = NULL;
$arguments232['alternativeLanguageKeys'] = NULL;
$arguments232['key'] = 'extensionList.header.extensionVersion';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext)]);

$output212 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['key'] = NULL;
$arguments234['id'] = NULL;
$arguments234['default'] = NULL;
$arguments234['arguments'] = NULL;
$arguments234['extensionName'] = NULL;
$arguments234['languageKey'] = NULL;
$arguments234['alternativeLanguageKeys'] = NULL;
$arguments234['key'] = 'extensionList.header.extensionState';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext)]);

$output212 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['key'] = NULL;
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['languageKey'] = NULL;
$arguments236['alternativeLanguageKeys'] = NULL;
$arguments236['key'] = 'extensionList.header.extensionType';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext)]);

$output212 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['key'] = NULL;
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$arguments238['languageKey'] = NULL;
$arguments238['alternativeLanguageKeys'] = NULL;
$arguments238['key'] = 'extensionList.header.extensionActions';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext)]);

$output212 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
						<tr id="';
$array277 = array (
);
$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array277)]);

$output276 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$arguments278['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array281);
$array280['1'] = ' == -1';

$expression282 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$arguments278['then'] = 'insecure';

$output276 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$arguments283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array286);
$array285['1'] = ' == -2';

$expression287 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments283['then'] = 'outdated';

$output276 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output276 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$arguments288['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array291);

$expression292 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments288['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array290)
					),
					$renderingContext
				);
$arguments288['then'] = '';
$arguments288['else'] = 'inactive';

$output276 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output276 .= '">
					';
return $output276;
};
$arguments274 = array();

$output273 .= '';

$output273 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
						<tr id="';
$array296 = array (
);
$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array296)]);

$output295 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['then'] = NULL;
$arguments297['else'] = NULL;
$arguments297['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array299 = array();
$array300 = array (
);$array299['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array300);

$expression301 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments297['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array299)
					),
					$renderingContext
				);
$arguments297['then'] = '';
$arguments297['else'] = 'inactive';

$output295 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output295 .= '">
					';
return $output295;
};
$arguments293 = array();
$arguments293['if'] = NULL;

$output273 .= '';

$output273 .= '
				';
return $output273;
};
$arguments244 = array();
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$arguments244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array271);

$expression272 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression272(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);
$arguments244['__thenClosure'] = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
						<tr id="';
$array247 = array (
);
$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array247)]);

$output246 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['then'] = NULL;
$arguments248['else'] = NULL;
$arguments248['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array251);
$array250['1'] = ' == -1';

$expression252 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments248['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression252(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array250)
					),
					$renderingContext
				);
$arguments248['then'] = 'insecure';

$output246 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array256);
$array255['1'] = ' == -2';

$expression257 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['then'] = 'outdated';

$output246 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output246 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array261);

$expression262 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments258['then'] = '';
$arguments258['else'] = 'inactive';

$output246 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output246 .= '">
					';
return $output246;
};
$arguments244['__elseClosures'][] = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
						<tr id="';
$array264 = array (
);
$output263 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array264)]);

$output263 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['then'] = NULL;
$arguments265['else'] = NULL;
$arguments265['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array267 = array();
$array268 = array (
);$array267['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array268);

$expression269 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments265['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression269(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array267)
					),
					$renderingContext
				);
$arguments265['then'] = '';
$arguments265['else'] = 'inactive';

$output263 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output263 .= '">
					';
return $output263;
};

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['key'] = NULL;
$arguments339['id'] = NULL;
$arguments339['default'] = NULL;
$arguments339['arguments'] = NULL;
$arguments339['extensionName'] = NULL;
$arguments339['languageKey'] = NULL;
$arguments339['alternativeLanguageKeys'] = NULL;
$arguments339['key'] = 'extensionList.updateDisabled';

$output338 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext)]);

$output338 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['identifier'] = NULL;
$arguments341['size'] = 'small';
$arguments341['overlay'] = NULL;
$arguments341['state'] = 'default';
$arguments341['alternativeMarkupIdentifier'] = NULL;
$arguments341['identifier'] = 'actions-system-extension-update';

$output338 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output338 .= '
								</span>
							';
return $output338;
};
$arguments336 = array();

$output335 .= '';

$output335 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['identifier'] = NULL;
$arguments358['size'] = 'small';
$arguments358['overlay'] = NULL;
$arguments358['state'] = 'default';
$arguments358['alternativeMarkupIdentifier'] = NULL;
$arguments358['identifier'] = 'actions-system-extension-update';

$output357 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output357 .= '
									';
return $output357;
};
$arguments346 = array();
$arguments346['additionalAttributes'] = NULL;
$arguments346['data'] = NULL;
$arguments346['class'] = NULL;
$arguments346['dir'] = NULL;
$arguments346['id'] = NULL;
$arguments346['lang'] = NULL;
$arguments346['style'] = NULL;
$arguments346['title'] = NULL;
$arguments346['accesskey'] = NULL;
$arguments346['tabindex'] = NULL;
$arguments346['onclick'] = NULL;
$arguments346['name'] = NULL;
$arguments346['rel'] = NULL;
$arguments346['rev'] = NULL;
$arguments346['target'] = NULL;
$arguments346['action'] = NULL;
$arguments346['controller'] = NULL;
$arguments346['extensionName'] = NULL;
$arguments346['pluginName'] = NULL;
$arguments346['pageUid'] = NULL;
$arguments346['pageType'] = NULL;
$arguments346['noCache'] = NULL;
$arguments346['noCacheHash'] = NULL;
$arguments346['section'] = NULL;
$arguments346['format'] = NULL;
$arguments346['linkAccessRestrictedPages'] = NULL;
$arguments346['additionalParams'] = NULL;
$arguments346['absolute'] = NULL;
$arguments346['addQueryString'] = NULL;
$arguments346['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments346['addQueryStringMethod'] = NULL;
$arguments346['arguments'] = NULL;
$arguments346['action'] = 'updateCommentForUpdatableVersions';
$arguments346['class'] = 'btn btn-default';
// Rendering Array
$array348 = array();
$array348['data-action'] = 'update-extension';
$arguments346['additionalAttributes'] = $array348;
$arguments346['format'] = 'json';
$arguments346['controller'] = 'Download';
// Rendering Array
$array349 = array();
$array350 = array (
);$array349['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array350);
$array351 = array (
);$array349['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array351);
$array352 = array (
);$array349['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array352);
$arguments346['arguments'] = $array349;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['key'] = NULL;
$arguments353['id'] = NULL;
$arguments353['default'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['languageKey'] = NULL;
$arguments353['alternativeLanguageKeys'] = NULL;
$arguments353['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array356);
$arguments353['arguments'] = $array355;
$arguments346['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output345 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
							';
return $output345;
};
$arguments343 = array();
$arguments343['if'] = NULL;

$output335 .= '';

$output335 .= '
						';
return $output335;
};
$arguments308 = array();
$arguments308['then'] = NULL;
$arguments308['else'] = NULL;
$arguments308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array331);
$array330['1'] = ' || ';
$array332 = array (
);$array330['2'] = $renderingContext->getVariableProvider()->getByPath('settings.offlineMode', $array332);
$array330['3'] = ' || ';
$array333 = array (
);$array330['4'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array333);
$array330['5'] = ' == \'excludeFromUpdates\'';

$expression334 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == 'excludeFromUpdates'));};
$arguments308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression334(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments308['__thenClosure'] = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['key'] = NULL;
$arguments311['id'] = NULL;
$arguments311['default'] = NULL;
$arguments311['arguments'] = NULL;
$arguments311['extensionName'] = NULL;
$arguments311['languageKey'] = NULL;
$arguments311['alternativeLanguageKeys'] = NULL;
$arguments311['key'] = 'extensionList.updateDisabled';

$output310 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext)]);

$output310 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['identifier'] = NULL;
$arguments313['size'] = 'small';
$arguments313['overlay'] = NULL;
$arguments313['state'] = 'default';
$arguments313['alternativeMarkupIdentifier'] = NULL;
$arguments313['identifier'] = 'actions-system-extension-update';

$output310 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output310 .= '
								</span>
							';
return $output310;
};
$arguments308['__elseClosures'][] = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['identifier'] = NULL;
$arguments328['size'] = 'small';
$arguments328['overlay'] = NULL;
$arguments328['state'] = 'default';
$arguments328['alternativeMarkupIdentifier'] = NULL;
$arguments328['identifier'] = 'actions-system-extension-update';

$output327 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
									';
return $output327;
};
$arguments316 = array();
$arguments316['additionalAttributes'] = NULL;
$arguments316['data'] = NULL;
$arguments316['class'] = NULL;
$arguments316['dir'] = NULL;
$arguments316['id'] = NULL;
$arguments316['lang'] = NULL;
$arguments316['style'] = NULL;
$arguments316['title'] = NULL;
$arguments316['accesskey'] = NULL;
$arguments316['tabindex'] = NULL;
$arguments316['onclick'] = NULL;
$arguments316['name'] = NULL;
$arguments316['rel'] = NULL;
$arguments316['rev'] = NULL;
$arguments316['target'] = NULL;
$arguments316['action'] = NULL;
$arguments316['controller'] = NULL;
$arguments316['extensionName'] = NULL;
$arguments316['pluginName'] = NULL;
$arguments316['pageUid'] = NULL;
$arguments316['pageType'] = NULL;
$arguments316['noCache'] = NULL;
$arguments316['noCacheHash'] = NULL;
$arguments316['section'] = NULL;
$arguments316['format'] = NULL;
$arguments316['linkAccessRestrictedPages'] = NULL;
$arguments316['additionalParams'] = NULL;
$arguments316['absolute'] = NULL;
$arguments316['addQueryString'] = NULL;
$arguments316['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments316['addQueryStringMethod'] = NULL;
$arguments316['arguments'] = NULL;
$arguments316['action'] = 'updateCommentForUpdatableVersions';
$arguments316['class'] = 'btn btn-default';
// Rendering Array
$array318 = array();
$array318['data-action'] = 'update-extension';
$arguments316['additionalAttributes'] = $array318;
$arguments316['format'] = 'json';
$arguments316['controller'] = 'Download';
// Rendering Array
$array319 = array();
$array320 = array (
);$array319['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array320);
$array321 = array (
);$array319['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array321);
$array322 = array (
);$array319['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array322);
$arguments316['arguments'] = $array319;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['key'] = NULL;
$arguments323['id'] = NULL;
$arguments323['default'] = NULL;
$arguments323['arguments'] = NULL;
$arguments323['extensionName'] = NULL;
$arguments323['languageKey'] = NULL;
$arguments323['alternativeLanguageKeys'] = NULL;
$arguments323['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array325 = array();
$array326 = array (
);$array325['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array326);
$arguments323['arguments'] = $array325;
$arguments316['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
							';
return $output315;
};

$output307 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
					';
return $output307;
};
$arguments302 = array();
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$arguments302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array305);

$expression306 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['__thenClosure'] = $renderChildrenClosure303;

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output243 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['then'] = NULL;
$arguments360['else'] = NULL;
$arguments360['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array362 = array();
$array363 = array (
);$array362['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array363);

$expression364 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments360['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression364(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array362)
					),
					$renderingContext
				);
$arguments360['then'] = 'active';
$arguments360['else'] = 'inactive';

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output243 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['additionalAttributes'] = NULL;
$arguments365['data'] = NULL;
$arguments365['class'] = NULL;
$arguments365['dir'] = NULL;
$arguments365['id'] = NULL;
$arguments365['lang'] = NULL;
$arguments365['style'] = NULL;
$arguments365['title'] = NULL;
$arguments365['accesskey'] = NULL;
$arguments365['tabindex'] = NULL;
$arguments365['onclick'] = NULL;
$arguments365['name'] = NULL;
$arguments365['rel'] = NULL;
$arguments365['rev'] = NULL;
$arguments365['target'] = NULL;
$arguments365['action'] = NULL;
$arguments365['controller'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['pluginName'] = NULL;
$arguments365['pageUid'] = NULL;
$arguments365['pageType'] = NULL;
$arguments365['noCache'] = NULL;
$arguments365['noCacheHash'] = NULL;
$arguments365['section'] = NULL;
$arguments365['format'] = NULL;
$arguments365['linkAccessRestrictedPages'] = NULL;
$arguments365['additionalParams'] = NULL;
$arguments365['absolute'] = NULL;
$arguments365['addQueryString'] = NULL;
$arguments365['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments365['addQueryStringMethod'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['extension'] = NULL;
$array367 = array (
);$arguments365['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array367);

$output243 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output243 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
						<img class="ext-icon" src="../';
$array374 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array374)]);
$array375 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array375)]);

$output373 .= '" alt="" />
					';
return $output373;
};
$arguments368 = array();
$arguments368['then'] = NULL;
$arguments368['else'] = NULL;
$arguments368['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array371);

$expression372 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments368['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array370)
					),
					$renderingContext
				);
$arguments368['__thenClosure'] = $renderChildrenClosure369;

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output243 .= '
					<span title="';
$array376 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array376)]);

$output243 .= '">';
$array377 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array377)]);

$output243 .= '</span>
				</td>
				<td>
					';
$array378 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array378)]);

$output243 .= '
				</td>
				<td>
					';
$array379 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array379)]);

$output243 .= '
				</td>
				<td>
					<span class="label label-';
$array380 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array380)]);

$output243 .= '">';
$array381 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array381)]);

$output243 .= '</span>
				</td>
				<td>
					';
$array382 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array382)]);

$output243 .= '
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments387 = array();
$arguments387['additionalAttributes'] = NULL;
$arguments387['data'] = NULL;
$arguments387['class'] = NULL;
$arguments387['dir'] = NULL;
$arguments387['id'] = NULL;
$arguments387['lang'] = NULL;
$arguments387['style'] = NULL;
$arguments387['title'] = NULL;
$arguments387['accesskey'] = NULL;
$arguments387['tabindex'] = NULL;
$arguments387['onclick'] = NULL;
$arguments387['name'] = NULL;
$arguments387['rel'] = NULL;
$arguments387['rev'] = NULL;
$arguments387['target'] = NULL;
$arguments387['action'] = NULL;
$arguments387['controller'] = NULL;
$arguments387['extensionName'] = NULL;
$arguments387['pluginName'] = NULL;
$arguments387['pageUid'] = NULL;
$arguments387['pageType'] = NULL;
$arguments387['noCache'] = NULL;
$arguments387['noCacheHash'] = NULL;
$arguments387['section'] = NULL;
$arguments387['format'] = NULL;
$arguments387['linkAccessRestrictedPages'] = NULL;
$arguments387['additionalParams'] = NULL;
$arguments387['absolute'] = NULL;
$arguments387['addQueryString'] = NULL;
$arguments387['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments387['addQueryStringMethod'] = NULL;
$arguments387['arguments'] = NULL;
$arguments387['extensionKey'] = NULL;
$arguments387['class'] = 'btn btn-default';
$array389 = array (
);$arguments387['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array389);

$output386 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output386 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
							  ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['additionalAttributes'] = NULL;
$arguments396['data'] = NULL;
$arguments396['class'] = NULL;
$arguments396['dir'] = NULL;
$arguments396['id'] = NULL;
$arguments396['lang'] = NULL;
$arguments396['style'] = NULL;
$arguments396['title'] = NULL;
$arguments396['accesskey'] = NULL;
$arguments396['tabindex'] = NULL;
$arguments396['onclick'] = NULL;
$arguments396['name'] = NULL;
$arguments396['rel'] = NULL;
$arguments396['rev'] = NULL;
$arguments396['target'] = NULL;
$arguments396['action'] = NULL;
$arguments396['controller'] = NULL;
$arguments396['extensionName'] = NULL;
$arguments396['pluginName'] = NULL;
$arguments396['pageUid'] = NULL;
$arguments396['pageType'] = NULL;
$arguments396['noCache'] = NULL;
$arguments396['noCacheHash'] = NULL;
$arguments396['section'] = NULL;
$arguments396['format'] = NULL;
$arguments396['linkAccessRestrictedPages'] = NULL;
$arguments396['additionalParams'] = NULL;
$arguments396['absolute'] = NULL;
$arguments396['addQueryString'] = NULL;
$arguments396['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments396['addQueryStringMethod'] = NULL;
$arguments396['arguments'] = NULL;
$arguments396['extension'] = NULL;
$arguments396['class'] = 'btn btn-default';
$array398 = array (
);$arguments396['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array398);

$output395 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
							';
return $output395;
};
$arguments390 = array();
$arguments390['then'] = NULL;
$arguments390['else'] = NULL;
$arguments390['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array392 = array();
$array392['0'] = '!';
$array393 = array (
);$array392['1'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array393);

$expression394 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments390['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array392)
					),
					$renderingContext
				);
$arguments390['__thenClosure'] = $renderChildrenClosure391;

$output386 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output386 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['identifier'] = NULL;
$arguments406['size'] = 'small';
$arguments406['overlay'] = NULL;
$arguments406['state'] = 'default';
$arguments406['alternativeMarkupIdentifier'] = NULL;
$arguments406['identifier'] = 'actions-system-extension-download';

$output405 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output405 .= '
							';
return $output405;
};
$arguments399 = array();
$arguments399['additionalAttributes'] = NULL;
$arguments399['data'] = NULL;
$arguments399['class'] = NULL;
$arguments399['dir'] = NULL;
$arguments399['id'] = NULL;
$arguments399['lang'] = NULL;
$arguments399['style'] = NULL;
$arguments399['title'] = NULL;
$arguments399['accesskey'] = NULL;
$arguments399['tabindex'] = NULL;
$arguments399['onclick'] = NULL;
$arguments399['name'] = NULL;
$arguments399['rel'] = NULL;
$arguments399['rev'] = NULL;
$arguments399['target'] = NULL;
$arguments399['action'] = NULL;
$arguments399['controller'] = NULL;
$arguments399['extensionName'] = NULL;
$arguments399['pluginName'] = NULL;
$arguments399['pageUid'] = NULL;
$arguments399['pageType'] = NULL;
$arguments399['noCache'] = NULL;
$arguments399['noCacheHash'] = NULL;
$arguments399['section'] = NULL;
$arguments399['format'] = NULL;
$arguments399['linkAccessRestrictedPages'] = NULL;
$arguments399['additionalParams'] = NULL;
$arguments399['absolute'] = NULL;
$arguments399['addQueryString'] = NULL;
$arguments399['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments399['addQueryStringMethod'] = NULL;
$arguments399['arguments'] = NULL;
$arguments399['action'] = 'downloadExtensionZip';
$arguments399['controller'] = 'Action';
// Rendering Array
$array401 = array();
$array402 = array (
);$array401['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array402);
$arguments399['arguments'] = $array401;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['key'] = NULL;
$arguments403['id'] = NULL;
$arguments403['default'] = NULL;
$arguments403['arguments'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['languageKey'] = NULL;
$arguments403['alternativeLanguageKeys'] = NULL;
$arguments403['key'] = 'extensionList.downloadzip';
$arguments399['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);
$arguments399['class'] = 'btn btn-default';

$output386 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output386 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['additionalAttributes'] = NULL;
$arguments408['data'] = NULL;
$arguments408['class'] = NULL;
$arguments408['dir'] = NULL;
$arguments408['id'] = NULL;
$arguments408['lang'] = NULL;
$arguments408['style'] = NULL;
$arguments408['title'] = NULL;
$arguments408['accesskey'] = NULL;
$arguments408['tabindex'] = NULL;
$arguments408['onclick'] = NULL;
$arguments408['name'] = NULL;
$arguments408['rel'] = NULL;
$arguments408['rev'] = NULL;
$arguments408['target'] = NULL;
$arguments408['action'] = NULL;
$arguments408['controller'] = NULL;
$arguments408['extensionName'] = NULL;
$arguments408['pluginName'] = NULL;
$arguments408['pageUid'] = NULL;
$arguments408['pageType'] = NULL;
$arguments408['noCache'] = NULL;
$arguments408['noCacheHash'] = NULL;
$arguments408['section'] = NULL;
$arguments408['format'] = NULL;
$arguments408['linkAccessRestrictedPages'] = NULL;
$arguments408['additionalParams'] = NULL;
$arguments408['absolute'] = NULL;
$arguments408['addQueryString'] = NULL;
$arguments408['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments408['addQueryStringMethod'] = NULL;
$arguments408['arguments'] = NULL;
$arguments408['extension'] = NULL;
$arguments408['class'] = 'btn btn-default';
$array410 = array (
);$arguments408['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array410);

$output386 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output386 .= '
						';
return $output386;
};
$arguments383 = array();
$arguments383['additionalAttributes'] = NULL;
$arguments383['data'] = NULL;
$arguments383['extension'] = NULL;
$array385 = array (
);$arguments383['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array385);

$output243 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output243 .= '
					</div>
				</td>
				</tr>
			';
return $output243;
};
$arguments240 = array();
$arguments240['each'] = NULL;
$arguments240['as'] = NULL;
$arguments240['key'] = NULL;
$arguments240['reverse'] = false;
$arguments240['iteration'] = NULL;
$array242 = array (
);$arguments240['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array242);
$arguments240['as'] = 'extension';
$arguments240['key'] = 'extensionKey';

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output212 .= '
		</tbody>
	</table>
	</div>
';
return $output212;
};
$arguments210 = array();
$arguments210['name'] = NULL;
$arguments210['name'] = 'content';

$output202 .= NULL;

$output202 .= '
';

return $output202;
}


}
#