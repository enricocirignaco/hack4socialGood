<?php

class ViewHelpers_Be_Widget_Paginate_action_index_d54b9a2ebcd737334d0a93a3b057ea3846f59af6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<nav class="pagination-wrap">
		<ul class="pagination pagination-block">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['useCacheHash'] = false;
$arguments31['addQueryStringMethod'] = NULL;
$arguments31['action'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['ajax'] = false;
// Rendering Array
$array33 = array();
$array33['currentPage'] = 1;
$arguments31['arguments'] = $array33;

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$arguments34['key'] = 'widget.pagination.first';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output30 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['identifier'] = NULL;
$arguments36['size'] = 'small';
$arguments36['overlay'] = NULL;
$arguments36['state'] = 'default';
$arguments36['alternativeMarkupIdentifier'] = NULL;
$arguments36['identifier'] = 'actions-view-paging-first';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output30 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['useCacheHash'] = false;
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['action'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['ajax'] = false;
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array41);
$arguments38['arguments'] = $array40;

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output30 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$arguments42['key'] = 'widget.pagination.previous';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output30 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['identifier'] = NULL;
$arguments44['size'] = 'small';
$arguments44['overlay'] = NULL;
$arguments44['state'] = 'default';
$arguments44['alternativeMarkupIdentifier'] = NULL;
$arguments44['identifier'] = 'actions-view-paging-previous';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output30 .= '
						</a>
					</li>
				';
return $output30;
};
$arguments28 = array();

$output27 .= '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['identifier'] = NULL;
$arguments49['size'] = 'small';
$arguments49['overlay'] = NULL;
$arguments49['state'] = 'default';
$arguments49['alternativeMarkupIdentifier'] = NULL;
$arguments49['identifier'] = 'actions-view-paging-first';

$output48 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['identifier'] = NULL;
$arguments51['size'] = 'small';
$arguments51['overlay'] = NULL;
$arguments51['state'] = 'default';
$arguments51['alternativeMarkupIdentifier'] = NULL;
$arguments51['identifier'] = 'actions-view-paging-previous';

$output48 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output48 .= '
						</span>
					</li>
				';
return $output48;
};
$arguments46 = array();
$arguments46['if'] = NULL;

$output27 .= '';

$output27 .= '
			';
return $output27;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['useCacheHash'] = false;
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['action'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['ajax'] = false;
// Rendering Array
$array6 = array();
$array6['currentPage'] = 1;
$arguments4['arguments'] = $array6;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'widget.pagination.first';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output3 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['identifier'] = NULL;
$arguments9['size'] = 'small';
$arguments9['overlay'] = NULL;
$arguments9['state'] = 'default';
$arguments9['alternativeMarkupIdentifier'] = NULL;
$arguments9['identifier'] = 'actions-view-paging-first';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output3 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['useCacheHash'] = false;
$arguments11['addQueryStringMethod'] = NULL;
$arguments11['action'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['ajax'] = false;
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array14);
$arguments11['arguments'] = $array13;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output3 .= '" title="';
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
$arguments15['key'] = 'widget.pagination.previous';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output3 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['identifier'] = NULL;
$arguments17['size'] = 'small';
$arguments17['overlay'] = NULL;
$arguments17['state'] = 'default';
$arguments17['alternativeMarkupIdentifier'] = NULL;
$arguments17['identifier'] = 'actions-view-paging-previous';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '
						</a>
					</li>
				';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['identifier'] = NULL;
$arguments20['size'] = 'small';
$arguments20['overlay'] = NULL;
$arguments20['state'] = 'default';
$arguments20['alternativeMarkupIdentifier'] = NULL;
$arguments20['identifier'] = 'actions-view-paging-first';

$output19 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['identifier'] = NULL;
$arguments22['size'] = 'small';
$arguments22['overlay'] = NULL;
$arguments22['state'] = 'default';
$arguments22['alternativeMarkupIdentifier'] = NULL;
$arguments22['identifier'] = 'actions-view-paging-previous';

$output19 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output19 .= '
						</span>
					</li>
				';
return $output19;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
			<li>
				<span>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
							';
$array67 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordsLabel', $array67)]);

$output66 .= '
						';
return $output66;
};
$arguments64 = array();

$output63 .= '';

$output63 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'widget.pagination.records';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '
						';
return $output70;
};
$arguments68 = array();
$arguments68['if'] = NULL;

$output63 .= '';

$output63 .= '
					';
return $output63;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('recordsLabel', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
							';
$array56 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordsLabel', $array56)]);

$output55 .= '
						';
return $output55;
};
$arguments53['__elseClosures'][] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'widget.pagination.records';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
						';
return $output57;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output0 .= '
					';
$array73 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.startRecord', $array73)]);

$output0 .= ' - ';
$array74 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.endRecord', $array74)]);

$output0 .= '
				</span>
			</li>
			<li>
				<span>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['languageKey'] = NULL;
$arguments75['alternativeLanguageKeys'] = NULL;
$arguments75['key'] = 'widget.pagination.page';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output0 .= '

					<form onsubmit="return goToPage(this);" style="display:inline;">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['name'] = NULL;
$arguments77['value'] = NULL;
$arguments77['property'] = NULL;
$arguments77['autofocus'] = NULL;
$arguments77['disabled'] = NULL;
$arguments77['maxlength'] = NULL;
$arguments77['readonly'] = NULL;
$arguments77['size'] = NULL;
$arguments77['placeholder'] = NULL;
$arguments77['pattern'] = NULL;
$arguments77['errorClass'] = 'f3-form-error';
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['required'] = false;
$arguments77['type'] = 'text';
// Rendering Array
$array79 = array();
$array79['min'] = 1;
$array80 = array (
);$array79['data-number-of-pages'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array80);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['useCacheHash'] = false;
$arguments81['addQueryStringMethod'] = NULL;
$arguments81['action'] = NULL;
$arguments81['arguments'] = array (
);
$arguments81['section'] = '';
$arguments81['format'] = '';
$arguments81['ajax'] = false;
// Rendering Array
$array83 = array();
$array83['currentPage'] = 987654321;
$arguments81['arguments'] = $array83;
$array79['data-url'] = TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);
$arguments77['additionalAttributes'] = $array79;
$arguments77['name'] = 'paginator-target-page';
$arguments77['class'] = 'form-control input-sm paginator-input';
$arguments77['size'] = 5;
$array84 = array (
);$arguments77['value'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array84);
$arguments77['type'] = 'number';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output0 .= '
					</form>

					/ ';
$array85 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array85)]);

$output0 .= '
				</span>
			</li>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['useCacheHash'] = false;
$arguments117['addQueryStringMethod'] = NULL;
$arguments117['action'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['section'] = '';
$arguments117['format'] = '';
$arguments117['ajax'] = false;
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array120);
$arguments117['arguments'] = $array119;

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['key'] = NULL;
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['languageKey'] = NULL;
$arguments121['alternativeLanguageKeys'] = NULL;
$arguments121['key'] = 'widget.pagination.next';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output116 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['identifier'] = NULL;
$arguments123['size'] = 'small';
$arguments123['overlay'] = NULL;
$arguments123['state'] = 'default';
$arguments123['alternativeMarkupIdentifier'] = NULL;
$arguments123['identifier'] = 'actions-view-paging-next';

$output116 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output116 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['useCacheHash'] = false;
$arguments125['addQueryStringMethod'] = NULL;
$arguments125['action'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['section'] = '';
$arguments125['format'] = '';
$arguments125['ajax'] = false;
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array128);
$arguments125['arguments'] = $array127;

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output116 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['key'] = NULL;
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['languageKey'] = NULL;
$arguments129['alternativeLanguageKeys'] = NULL;
$arguments129['key'] = 'widget.pagination.last';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output116 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['identifier'] = NULL;
$arguments131['size'] = 'small';
$arguments131['overlay'] = NULL;
$arguments131['state'] = 'default';
$arguments131['alternativeMarkupIdentifier'] = NULL;
$arguments131['identifier'] = 'actions-view-paging-last';

$output116 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output116 .= '
						</a>
					</li>
				';
return $output116;
};
$arguments114 = array();

$output113 .= '';

$output113 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['identifier'] = NULL;
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$arguments136['alternativeMarkupIdentifier'] = NULL;
$arguments136['identifier'] = 'actions-view-paging-next';

$output135 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['identifier'] = NULL;
$arguments138['size'] = 'small';
$arguments138['overlay'] = NULL;
$arguments138['state'] = 'default';
$arguments138['alternativeMarkupIdentifier'] = NULL;
$arguments138['identifier'] = 'actions-view-paging-last';

$output135 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output135 .= '
						</span>
					</li>
				';
return $output135;
};
$arguments133 = array();
$arguments133['if'] = NULL;

$output113 .= '';

$output113 .= '
			';
return $output113;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array111);

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$arguments86['__thenClosure'] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['useCacheHash'] = false;
$arguments89['addQueryStringMethod'] = NULL;
$arguments89['action'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['section'] = '';
$arguments89['format'] = '';
$arguments89['ajax'] = false;
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array92);
$arguments89['arguments'] = $array91;

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output88 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'widget.pagination.next';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output88 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['identifier'] = NULL;
$arguments95['size'] = 'small';
$arguments95['overlay'] = NULL;
$arguments95['state'] = 'default';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$arguments95['identifier'] = 'actions-view-paging-next';

$output88 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output88 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['useCacheHash'] = false;
$arguments97['addQueryStringMethod'] = NULL;
$arguments97['action'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['section'] = '';
$arguments97['format'] = '';
$arguments97['ajax'] = false;
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array100);
$arguments97['arguments'] = $array99;

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output88 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$arguments101['key'] = 'widget.pagination.last';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output88 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['identifier'] = NULL;
$arguments103['size'] = 'small';
$arguments103['overlay'] = NULL;
$arguments103['state'] = 'default';
$arguments103['alternativeMarkupIdentifier'] = NULL;
$arguments103['identifier'] = 'actions-view-paging-last';

$output88 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output88 .= '
						</a>
					</li>
				';
return $output88;
};
$arguments86['__elseClosures'][] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['identifier'] = NULL;
$arguments106['size'] = 'small';
$arguments106['overlay'] = NULL;
$arguments106['state'] = 'default';
$arguments106['alternativeMarkupIdentifier'] = NULL;
$arguments106['identifier'] = 'actions-view-paging-next';

$output105 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['identifier'] = NULL;
$arguments108['size'] = 'small';
$arguments108['overlay'] = NULL;
$arguments108['state'] = 'default';
$arguments108['alternativeMarkupIdentifier'] = NULL;
$arguments108['identifier'] = 'actions-view-paging-last';

$output105 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output105 .= '
						</span>
					</li>
				';
return $output105;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output0 .= '
			<li>
				<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['useCacheHash'] = false;
$arguments140['addQueryStringMethod'] = NULL;
$arguments140['action'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['section'] = '';
$arguments140['format'] = '';
$arguments140['ajax'] = false;
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array143);
$arguments140['arguments'] = $array142;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output0 .= '" title="';
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
$arguments144['key'] = 'widget.pagination.refresh';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output0 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['identifier'] = NULL;
$arguments146['size'] = 'small';
$arguments146['overlay'] = NULL;
$arguments146['state'] = 'default';
$arguments146['alternativeMarkupIdentifier'] = NULL;
$arguments146['identifier'] = 'actions-refresh';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output0 .= '
				</a>
			</li>
		</ul>
	</nav>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output148 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['section'] = NULL;
$arguments155['partial'] = NULL;
$arguments155['delegate'] = NULL;
$arguments155['renderable'] = NULL;
$arguments155['arguments'] = array (
);
$arguments155['optional'] = false;
$arguments155['default'] = NULL;
$arguments155['contentAs'] = NULL;
$arguments155['debug'] = true;
$arguments155['section'] = 'paginator';
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array158);
$array159 = array (
);$array157['recordsLabel'] = $renderingContext->getVariableProvider()->getByPath('configuration.recordsLabel', $array159);
$arguments155['arguments'] = $array157;

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
';
return $output154;
};
$arguments149 = array();
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertAbove', $array152);

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);
$arguments149['__thenClosure'] = $renderChildrenClosure150;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return '
	<script type="text/javascript">
		function goToPage(formObject) {
			var formField = formObject.elements[\'paginator-target-page\'];
			var url = formField.dataset.url;
			var numberOfPages = parseInt(formField.dataset.numberOfPages);
			var page = parseInt(formField.value);
			if (page > numberOfPages) {
				page = numberOfPages;
			} else if (page < 1) {
				page = 1;
			}
			url = url.replace(\'987654321\', page);
			self.location.href = url;
			return false;
		}
	</script>
';
};
$arguments160 = array();
$arguments160['then'] = NULL;
$arguments160['else'] = NULL;
$arguments160['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertAbove', $array163);
$array162['1'] = ' || ';
$array164 = array (
);$array162['2'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertBelow', $array164);

$expression165 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments160['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array162)
					),
					$renderingContext
				);
$arguments160['__thenClosure'] = $renderChildrenClosure161;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output148 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['arguments'] = array (
);
$array168 = array (
);$arguments166['arguments'] = $renderingContext->getVariableProvider()->getByPath('contentArguments', $array168);

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output148 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['section'] = NULL;
$arguments175['partial'] = NULL;
$arguments175['delegate'] = NULL;
$arguments175['renderable'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['optional'] = false;
$arguments175['default'] = NULL;
$arguments175['contentAs'] = NULL;
$arguments175['debug'] = true;
$arguments175['section'] = 'paginator';
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array178);
$array179 = array (
);$array177['recordsLabel'] = $renderingContext->getVariableProvider()->getByPath('configuration.recordsLabel', $array179);
$arguments175['arguments'] = $array177;

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
';
return $output174;
};
$arguments169 = array();
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$arguments169['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertBelow', $array172);

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments169['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);
$arguments169['__thenClosure'] = $renderChildrenClosure170;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output148 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
	<nav class="pagination-wrap">
		<ul class="pagination pagination-block">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['useCacheHash'] = false;
$arguments213['addQueryStringMethod'] = NULL;
$arguments213['action'] = NULL;
$arguments213['arguments'] = array (
);
$arguments213['section'] = '';
$arguments213['format'] = '';
$arguments213['ajax'] = false;
// Rendering Array
$array215 = array();
$array215['currentPage'] = 1;
$arguments213['arguments'] = $array215;

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext)]);

$output212 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['languageKey'] = NULL;
$arguments216['alternativeLanguageKeys'] = NULL;
$arguments216['key'] = 'widget.pagination.first';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output212 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['identifier'] = NULL;
$arguments218['size'] = 'small';
$arguments218['overlay'] = NULL;
$arguments218['state'] = 'default';
$arguments218['alternativeMarkupIdentifier'] = NULL;
$arguments218['identifier'] = 'actions-view-paging-first';

$output212 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output212 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['useCacheHash'] = false;
$arguments220['addQueryStringMethod'] = NULL;
$arguments220['action'] = NULL;
$arguments220['arguments'] = array (
);
$arguments220['section'] = '';
$arguments220['format'] = '';
$arguments220['ajax'] = false;
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array223);
$arguments220['arguments'] = $array222;

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext)]);

$output212 .= '" title="';
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
$arguments224['key'] = 'widget.pagination.previous';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext)]);

$output212 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['identifier'] = NULL;
$arguments226['size'] = 'small';
$arguments226['overlay'] = NULL;
$arguments226['state'] = 'default';
$arguments226['alternativeMarkupIdentifier'] = NULL;
$arguments226['identifier'] = 'actions-view-paging-previous';

$output212 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output212 .= '
						</a>
					</li>
				';
return $output212;
};
$arguments210 = array();

$output209 .= '';

$output209 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['identifier'] = NULL;
$arguments231['size'] = 'small';
$arguments231['overlay'] = NULL;
$arguments231['state'] = 'default';
$arguments231['alternativeMarkupIdentifier'] = NULL;
$arguments231['identifier'] = 'actions-view-paging-first';

$output230 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['identifier'] = NULL;
$arguments233['size'] = 'small';
$arguments233['overlay'] = NULL;
$arguments233['state'] = 'default';
$arguments233['alternativeMarkupIdentifier'] = NULL;
$arguments233['identifier'] = 'actions-view-paging-previous';

$output230 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output230 .= '
						</span>
					</li>
				';
return $output230;
};
$arguments228 = array();
$arguments228['if'] = NULL;

$output209 .= '';

$output209 .= '
			';
return $output209;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array207);

$expression208 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array206)
					),
					$renderingContext
				);
$arguments183['__thenClosure'] = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['useCacheHash'] = false;
$arguments186['addQueryStringMethod'] = NULL;
$arguments186['action'] = NULL;
$arguments186['arguments'] = array (
);
$arguments186['section'] = '';
$arguments186['format'] = '';
$arguments186['ajax'] = false;
// Rendering Array
$array188 = array();
$array188['currentPage'] = 1;
$arguments186['arguments'] = $array188;

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output185 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['languageKey'] = NULL;
$arguments189['alternativeLanguageKeys'] = NULL;
$arguments189['key'] = 'widget.pagination.first';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output185 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['identifier'] = NULL;
$arguments191['size'] = 'small';
$arguments191['overlay'] = NULL;
$arguments191['state'] = 'default';
$arguments191['alternativeMarkupIdentifier'] = NULL;
$arguments191['identifier'] = 'actions-view-paging-first';

$output185 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output185 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['useCacheHash'] = false;
$arguments193['addQueryStringMethod'] = NULL;
$arguments193['action'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['section'] = '';
$arguments193['format'] = '';
$arguments193['ajax'] = false;
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array196);
$arguments193['arguments'] = $array195;

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output185 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['languageKey'] = NULL;
$arguments197['alternativeLanguageKeys'] = NULL;
$arguments197['key'] = 'widget.pagination.previous';

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output185 .= '">
							';
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
$arguments199['identifier'] = 'actions-view-paging-previous';

$output185 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output185 .= '
						</a>
					</li>
				';
return $output185;
};
$arguments183['__elseClosures'][] = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['identifier'] = NULL;
$arguments202['size'] = 'small';
$arguments202['overlay'] = NULL;
$arguments202['state'] = 'default';
$arguments202['alternativeMarkupIdentifier'] = NULL;
$arguments202['identifier'] = 'actions-view-paging-first';

$output201 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['identifier'] = NULL;
$arguments204['size'] = 'small';
$arguments204['overlay'] = NULL;
$arguments204['state'] = 'default';
$arguments204['alternativeMarkupIdentifier'] = NULL;
$arguments204['identifier'] = 'actions-view-paging-previous';

$output201 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output201 .= '
						</span>
					</li>
				';
return $output201;
};

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
			<li>
				<span>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
							';
$array249 = array (
);
$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordsLabel', $array249)]);

$output248 .= '
						';
return $output248;
};
$arguments246 = array();

$output245 .= '';

$output245 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
							';
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
$arguments253['key'] = 'widget.pagination.records';

$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output252 .= '
						';
return $output252;
};
$arguments250 = array();
$arguments250['if'] = NULL;

$output245 .= '';

$output245 .= '
					';
return $output245;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array242 = array();
$array243 = array (
);$array242['0'] = $renderingContext->getVariableProvider()->getByPath('recordsLabel', $array243);

$expression244 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression244(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array242)
					),
					$renderingContext
				);
$arguments235['__thenClosure'] = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
							';
$array238 = array (
);
$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordsLabel', $array238)]);

$output237 .= '
						';
return $output237;
};
$arguments235['__elseClosures'][] = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['languageKey'] = NULL;
$arguments240['alternativeLanguageKeys'] = NULL;
$arguments240['key'] = 'widget.pagination.records';

$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output239 .= '
						';
return $output239;
};

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output182 .= '
					';
$array255 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.startRecord', $array255)]);

$output182 .= ' - ';
$array256 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.endRecord', $array256)]);

$output182 .= '
				</span>
			</li>
			<li>
				<span>
					';
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
$arguments257['key'] = 'widget.pagination.page';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext)]);

$output182 .= '

					<form onsubmit="return goToPage(this);" style="display:inline;">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['additionalAttributes'] = NULL;
$arguments259['data'] = NULL;
$arguments259['name'] = NULL;
$arguments259['value'] = NULL;
$arguments259['property'] = NULL;
$arguments259['autofocus'] = NULL;
$arguments259['disabled'] = NULL;
$arguments259['maxlength'] = NULL;
$arguments259['readonly'] = NULL;
$arguments259['size'] = NULL;
$arguments259['placeholder'] = NULL;
$arguments259['pattern'] = NULL;
$arguments259['errorClass'] = 'f3-form-error';
$arguments259['class'] = NULL;
$arguments259['dir'] = NULL;
$arguments259['id'] = NULL;
$arguments259['lang'] = NULL;
$arguments259['style'] = NULL;
$arguments259['title'] = NULL;
$arguments259['accesskey'] = NULL;
$arguments259['tabindex'] = NULL;
$arguments259['onclick'] = NULL;
$arguments259['required'] = false;
$arguments259['type'] = 'text';
// Rendering Array
$array261 = array();
$array261['min'] = 1;
$array262 = array (
);$array261['data-number-of-pages'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array262);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['useCacheHash'] = false;
$arguments263['addQueryStringMethod'] = NULL;
$arguments263['action'] = NULL;
$arguments263['arguments'] = array (
);
$arguments263['section'] = '';
$arguments263['format'] = '';
$arguments263['ajax'] = false;
// Rendering Array
$array265 = array();
$array265['currentPage'] = 987654321;
$arguments263['arguments'] = $array265;
$array261['data-url'] = TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);
$arguments259['additionalAttributes'] = $array261;
$arguments259['name'] = 'paginator-target-page';
$arguments259['class'] = 'form-control input-sm paginator-input';
$arguments259['size'] = 5;
$array266 = array (
);$arguments259['value'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array266);
$arguments259['type'] = 'number';

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output182 .= '
					</form>

					/ ';
$array267 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array267)]);

$output182 .= '
				</span>
			</li>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['useCacheHash'] = false;
$arguments299['addQueryStringMethod'] = NULL;
$arguments299['action'] = NULL;
$arguments299['arguments'] = array (
);
$arguments299['section'] = '';
$arguments299['format'] = '';
$arguments299['ajax'] = false;
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array302);
$arguments299['arguments'] = $array301;

$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext)]);

$output298 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['key'] = NULL;
$arguments303['id'] = NULL;
$arguments303['default'] = NULL;
$arguments303['arguments'] = NULL;
$arguments303['extensionName'] = NULL;
$arguments303['languageKey'] = NULL;
$arguments303['alternativeLanguageKeys'] = NULL;
$arguments303['key'] = 'widget.pagination.next';

$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext)]);

$output298 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['identifier'] = NULL;
$arguments305['size'] = 'small';
$arguments305['overlay'] = NULL;
$arguments305['state'] = 'default';
$arguments305['alternativeMarkupIdentifier'] = NULL;
$arguments305['identifier'] = 'actions-view-paging-next';

$output298 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output298 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['useCacheHash'] = false;
$arguments307['addQueryStringMethod'] = NULL;
$arguments307['action'] = NULL;
$arguments307['arguments'] = array (
);
$arguments307['section'] = '';
$arguments307['format'] = '';
$arguments307['ajax'] = false;
// Rendering Array
$array309 = array();
$array310 = array (
);$array309['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array310);
$arguments307['arguments'] = $array309;

$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output298 .= '" title="';
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
$arguments311['key'] = 'widget.pagination.last';

$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext)]);

$output298 .= '">
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
$arguments313['identifier'] = 'actions-view-paging-last';

$output298 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output298 .= '
						</a>
					</li>
				';
return $output298;
};
$arguments296 = array();

$output295 .= '';

$output295 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['identifier'] = NULL;
$arguments318['size'] = 'small';
$arguments318['overlay'] = NULL;
$arguments318['state'] = 'default';
$arguments318['alternativeMarkupIdentifier'] = NULL;
$arguments318['identifier'] = 'actions-view-paging-next';

$output317 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output317 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['identifier'] = NULL;
$arguments320['size'] = 'small';
$arguments320['overlay'] = NULL;
$arguments320['state'] = 'default';
$arguments320['alternativeMarkupIdentifier'] = NULL;
$arguments320['identifier'] = 'actions-view-paging-last';

$output317 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output317 .= '
						</span>
					</li>
				';
return $output317;
};
$arguments315 = array();
$arguments315['if'] = NULL;

$output295 .= '';

$output295 .= '
			';
return $output295;
};
$arguments268 = array();
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$arguments268['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array293);

$expression294 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments268['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression294(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);
$arguments268['__thenClosure'] = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['useCacheHash'] = false;
$arguments271['addQueryStringMethod'] = NULL;
$arguments271['action'] = NULL;
$arguments271['arguments'] = array (
);
$arguments271['section'] = '';
$arguments271['format'] = '';
$arguments271['ajax'] = false;
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array274);
$arguments271['arguments'] = $array273;

$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext)]);

$output270 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['key'] = NULL;
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['languageKey'] = NULL;
$arguments275['alternativeLanguageKeys'] = NULL;
$arguments275['key'] = 'widget.pagination.next';

$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext)]);

$output270 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['identifier'] = NULL;
$arguments277['size'] = 'small';
$arguments277['overlay'] = NULL;
$arguments277['state'] = 'default';
$arguments277['alternativeMarkupIdentifier'] = NULL;
$arguments277['identifier'] = 'actions-view-paging-next';

$output270 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output270 .= '
						</a>
					</li>
					<li>
						<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['useCacheHash'] = false;
$arguments279['addQueryStringMethod'] = NULL;
$arguments279['action'] = NULL;
$arguments279['arguments'] = array (
);
$arguments279['section'] = '';
$arguments279['format'] = '';
$arguments279['ajax'] = false;
// Rendering Array
$array281 = array();
$array282 = array (
);$array281['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array282);
$arguments279['arguments'] = $array281;

$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output270 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['key'] = NULL;
$arguments283['id'] = NULL;
$arguments283['default'] = NULL;
$arguments283['arguments'] = NULL;
$arguments283['extensionName'] = NULL;
$arguments283['languageKey'] = NULL;
$arguments283['alternativeLanguageKeys'] = NULL;
$arguments283['key'] = 'widget.pagination.last';

$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext)]);

$output270 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['identifier'] = NULL;
$arguments285['size'] = 'small';
$arguments285['overlay'] = NULL;
$arguments285['state'] = 'default';
$arguments285['alternativeMarkupIdentifier'] = NULL;
$arguments285['identifier'] = 'actions-view-paging-last';

$output270 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output270 .= '
						</a>
					</li>
				';
return $output270;
};
$arguments268['__elseClosures'][] = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['identifier'] = NULL;
$arguments288['size'] = 'small';
$arguments288['overlay'] = NULL;
$arguments288['state'] = 'default';
$arguments288['alternativeMarkupIdentifier'] = NULL;
$arguments288['identifier'] = 'actions-view-paging-next';

$output287 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
						</span>
					</li>
					<li class="disabled">
						<span>
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['identifier'] = NULL;
$arguments290['size'] = 'small';
$arguments290['overlay'] = NULL;
$arguments290['state'] = 'default';
$arguments290['alternativeMarkupIdentifier'] = NULL;
$arguments290['identifier'] = 'actions-view-paging-last';

$output287 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output287 .= '
						</span>
					</li>
				';
return $output287;
};

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output182 .= '
			<li>
				<a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['useCacheHash'] = false;
$arguments322['addQueryStringMethod'] = NULL;
$arguments322['action'] = NULL;
$arguments322['arguments'] = array (
);
$arguments322['section'] = '';
$arguments322['format'] = '';
$arguments322['ajax'] = false;
// Rendering Array
$array324 = array();
$array325 = array (
);$array324['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array325);
$arguments322['arguments'] = $array324;

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext)]);

$output182 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['key'] = NULL;
$arguments326['id'] = NULL;
$arguments326['default'] = NULL;
$arguments326['arguments'] = NULL;
$arguments326['extensionName'] = NULL;
$arguments326['languageKey'] = NULL;
$arguments326['alternativeLanguageKeys'] = NULL;
$arguments326['key'] = 'widget.pagination.refresh';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext)]);

$output182 .= '">
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
$arguments328['identifier'] = 'actions-refresh';

$output182 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output182 .= '
				</a>
			</li>
		</ul>
	</nav>
';
return $output182;
};
$arguments180 = array();
$arguments180['name'] = NULL;
$arguments180['name'] = 'paginator';

$output148 .= NULL;

$output148 .= '
';

return $output148;
}


}
#