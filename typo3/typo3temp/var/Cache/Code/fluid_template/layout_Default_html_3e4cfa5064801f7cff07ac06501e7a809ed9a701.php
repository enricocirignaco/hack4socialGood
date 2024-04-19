<?php

class layout_Default_html_3e4cfa5064801f7cff07ac06501e7a809ed9a701 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '

			<div id="c';
$array134 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array134)]);

$output133 .= '" class="frame frame-';
$array135 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.frame_class', $array135)]);

$output133 .= ' frame-type-';
$array136 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array136)]);

$output133 .= ' frame-layout-';
$array137 = array (
);
$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.layout', $array137)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array141);

$expression142 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression142(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array140)
					),
					$renderingContext
				);
$output143 = '';

$output143 .= ' frame-space-before-';
$array144 = array (
);
$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array144)]);
$arguments138['then'] = $output143;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array148);

$expression149 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$output150 = '';

$output150 .= ' frame-space-after-';
$array151 = array (
);
$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array151)]);
$arguments145['then'] = $output150;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output133 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
					<a id="c';
$array158 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array158)]);

$output157 .= '"></a>
				';
return $output157;
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array155);

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['__thenClosure'] = $renderChildrenClosure153;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output133 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['section'] = NULL;
$arguments164['partial'] = NULL;
$arguments164['delegate'] = NULL;
$arguments164['renderable'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['optional'] = false;
$arguments164['default'] = NULL;
$arguments164['contentAs'] = NULL;
$arguments164['debug'] = true;
$arguments164['partial'] = 'DropIn/Before/All';
$arguments164['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
				';
return $output163;
};
$arguments159 = array();
$arguments159['section'] = NULL;
$arguments159['partial'] = NULL;
$arguments159['delegate'] = NULL;
$arguments159['renderable'] = NULL;
$arguments159['arguments'] = array (
);
$arguments159['optional'] = false;
$arguments159['default'] = NULL;
$arguments159['contentAs'] = NULL;
$arguments159['debug'] = true;
$arguments159['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array161['0'] = 'true';

$expression162 = function($context) {return TRUE;};
$arguments159['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output133 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['section'] = NULL;
$arguments172['partial'] = NULL;
$arguments172['delegate'] = NULL;
$arguments172['renderable'] = NULL;
$arguments172['arguments'] = array (
);
$arguments172['optional'] = false;
$arguments172['default'] = NULL;
$arguments172['contentAs'] = NULL;
$arguments172['debug'] = true;
$arguments172['partial'] = 'Header/All';
$arguments172['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
				';
return $output171;
};
$arguments167 = array();
$arguments167['section'] = NULL;
$arguments167['partial'] = NULL;
$arguments167['delegate'] = NULL;
$arguments167['renderable'] = NULL;
$arguments167['arguments'] = array (
);
$arguments167['optional'] = false;
$arguments167['default'] = NULL;
$arguments167['contentAs'] = NULL;
$arguments167['debug'] = true;
$arguments167['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array169['0'] = 'true';

$expression170 = function($context) {return TRUE;};
$arguments167['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output133 .= '
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
$arguments175['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array177['0'] = 'true';

$expression178 = function($context) {return TRUE;};
$arguments175['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output133 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['section'] = NULL;
$arguments184['partial'] = NULL;
$arguments184['delegate'] = NULL;
$arguments184['renderable'] = NULL;
$arguments184['arguments'] = array (
);
$arguments184['optional'] = false;
$arguments184['default'] = NULL;
$arguments184['contentAs'] = NULL;
$arguments184['debug'] = true;
$arguments184['partial'] = 'Footer/All';
$arguments184['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
				';
return $output183;
};
$arguments179 = array();
$arguments179['section'] = NULL;
$arguments179['partial'] = NULL;
$arguments179['delegate'] = NULL;
$arguments179['renderable'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['optional'] = false;
$arguments179['default'] = NULL;
$arguments179['contentAs'] = NULL;
$arguments179['debug'] = true;
$arguments179['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array181 = array();
$array181['0'] = 'true';

$expression182 = function($context) {return TRUE;};
$arguments179['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output133 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['section'] = NULL;
$arguments192['partial'] = NULL;
$arguments192['delegate'] = NULL;
$arguments192['renderable'] = NULL;
$arguments192['arguments'] = array (
);
$arguments192['optional'] = false;
$arguments192['default'] = NULL;
$arguments192['contentAs'] = NULL;
$arguments192['debug'] = true;
$arguments192['partial'] = 'DropIn/After/All';
$arguments192['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
				';
return $output191;
};
$arguments187 = array();
$arguments187['section'] = NULL;
$arguments187['partial'] = NULL;
$arguments187['delegate'] = NULL;
$arguments187['renderable'] = NULL;
$arguments187['arguments'] = array (
);
$arguments187['optional'] = false;
$arguments187['default'] = NULL;
$arguments187['contentAs'] = NULL;
$arguments187['debug'] = true;
$arguments187['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array189['0'] = 'true';

$expression190 = function($context) {return TRUE;};
$arguments187['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output133 .= '
			</div>

		';
return $output133;
};
$arguments131 = array();

$output130 .= '';

$output130 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '

			<a id="c';
$array198 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array198)]);

$output197 .= '"></a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
				<a id="c';
$array205 = array (
);
$output204 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array205)]);

$output204 .= '"></a>
			';
return $output204;
};
$arguments199 = array();
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$arguments199['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array201 = array();
$array202 = array (
);$array201['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array202);

$expression203 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments199['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression203(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)
					),
					$renderingContext
				);
$arguments199['__thenClosure'] = $renderChildrenClosure200;

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output197 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
				<div class="frame-space-before-';
$array212 = array (
);
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array212)]);

$output211 .= '"></div>
			';
return $output211;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array209 = array (
);$array208['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array209);

$expression210 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = $renderChildrenClosure207;

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output197 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['section'] = NULL;
$arguments218['partial'] = NULL;
$arguments218['delegate'] = NULL;
$arguments218['renderable'] = NULL;
$arguments218['arguments'] = array (
);
$arguments218['optional'] = false;
$arguments218['default'] = NULL;
$arguments218['contentAs'] = NULL;
$arguments218['debug'] = true;
$arguments218['partial'] = 'DropIn/Before/All';
$arguments218['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
			';
return $output217;
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
$arguments213['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array215['0'] = 'true';

$expression216 = function($context) {return TRUE;};
$arguments213['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression216(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output197 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
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
$arguments226['partial'] = 'Header/All';
$arguments226['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output225 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
			';
return $output225;
};
$arguments221 = array();
$arguments221['section'] = NULL;
$arguments221['partial'] = NULL;
$arguments221['delegate'] = NULL;
$arguments221['renderable'] = NULL;
$arguments221['arguments'] = array (
);
$arguments221['optional'] = false;
$arguments221['default'] = NULL;
$arguments221['contentAs'] = NULL;
$arguments221['debug'] = true;
$arguments221['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array223['0'] = 'true';

$expression224 = function($context) {return TRUE;};
$arguments221['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output197 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['section'] = NULL;
$arguments229['partial'] = NULL;
$arguments229['delegate'] = NULL;
$arguments229['renderable'] = NULL;
$arguments229['arguments'] = array (
);
$arguments229['optional'] = false;
$arguments229['default'] = NULL;
$arguments229['contentAs'] = NULL;
$arguments229['debug'] = true;
$arguments229['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array231['0'] = 'true';

$expression232 = function($context) {return TRUE;};
$arguments229['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression232(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output197 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['section'] = NULL;
$arguments238['partial'] = NULL;
$arguments238['delegate'] = NULL;
$arguments238['renderable'] = NULL;
$arguments238['arguments'] = array (
);
$arguments238['optional'] = false;
$arguments238['default'] = NULL;
$arguments238['contentAs'] = NULL;
$arguments238['debug'] = true;
$arguments238['partial'] = 'Footer/All';
$arguments238['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '
			';
return $output237;
};
$arguments233 = array();
$arguments233['section'] = NULL;
$arguments233['partial'] = NULL;
$arguments233['delegate'] = NULL;
$arguments233['renderable'] = NULL;
$arguments233['arguments'] = array (
);
$arguments233['optional'] = false;
$arguments233['default'] = NULL;
$arguments233['contentAs'] = NULL;
$arguments233['debug'] = true;
$arguments233['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array235 = array();
$array235['0'] = 'true';

$expression236 = function($context) {return TRUE;};
$arguments233['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression236(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array235)
					),
					$renderingContext
				);

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output197 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['section'] = NULL;
$arguments246['partial'] = NULL;
$arguments246['delegate'] = NULL;
$arguments246['renderable'] = NULL;
$arguments246['arguments'] = array (
);
$arguments246['optional'] = false;
$arguments246['default'] = NULL;
$arguments246['contentAs'] = NULL;
$arguments246['debug'] = true;
$arguments246['partial'] = 'DropIn/After/All';
$arguments246['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output245 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output245 .= '
			';
return $output245;
};
$arguments241 = array();
$arguments241['section'] = NULL;
$arguments241['partial'] = NULL;
$arguments241['delegate'] = NULL;
$arguments241['renderable'] = NULL;
$arguments241['arguments'] = array (
);
$arguments241['optional'] = false;
$arguments241['default'] = NULL;
$arguments241['contentAs'] = NULL;
$arguments241['debug'] = true;
$arguments241['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array243 = array();
$array243['0'] = 'true';

$expression244 = function($context) {return TRUE;};
$arguments241['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression244(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array243)
					),
					$renderingContext
				);

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output197 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
				<div class="frame-space-after-';
$array255 = array (
);
$output254 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array255)]);

$output254 .= '"></div>
			';
return $output254;
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array252);

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = $renderChildrenClosure250;

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output197 .= '

		';
return $output197;
};
$arguments195 = array();
$arguments195['if'] = NULL;

$output130 .= '';

$output130 .= '
	';
return $output130;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array128);
$array127['1'] = ' != none';

$expression129 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '

			<div id="c';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array7)]);

$output6 .= '" class="frame frame-';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.frame_class', $array8)]);

$output6 .= ' frame-type-';
$array9 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array9)]);

$output6 .= ' frame-layout-';
$array10 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.layout', $array10)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$output16 = '';

$output16 .= ' frame-space-before-';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array17)]);
$arguments11['then'] = $output16;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$output23 = '';

$output23 .= ' frame-space-after-';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array24)]);
$arguments18['then'] = $output23;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output6 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
					<a id="c';
$array31 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array31)]);

$output30 .= '"></a>
				';
return $output30;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = $renderChildrenClosure26;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['section'] = NULL;
$arguments37['partial'] = NULL;
$arguments37['delegate'] = NULL;
$arguments37['renderable'] = NULL;
$arguments37['arguments'] = array (
);
$arguments37['optional'] = false;
$arguments37['default'] = NULL;
$arguments37['contentAs'] = NULL;
$arguments37['debug'] = true;
$arguments37['partial'] = 'DropIn/Before/All';
$arguments37['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
				';
return $output36;
};
$arguments32 = array();
$arguments32['section'] = NULL;
$arguments32['partial'] = NULL;
$arguments32['delegate'] = NULL;
$arguments32['renderable'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$arguments32['default'] = NULL;
$arguments32['contentAs'] = NULL;
$arguments32['debug'] = true;
$arguments32['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array34['0'] = 'true';

$expression35 = function($context) {return TRUE;};
$arguments32['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['section'] = NULL;
$arguments45['partial'] = NULL;
$arguments45['delegate'] = NULL;
$arguments45['renderable'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$arguments45['default'] = NULL;
$arguments45['contentAs'] = NULL;
$arguments45['debug'] = true;
$arguments45['partial'] = 'Header/All';
$arguments45['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
				';
return $output44;
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
$arguments40['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array42['0'] = 'true';

$expression43 = function($context) {return TRUE;};
$arguments40['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output6 .= '
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
$arguments48['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array50['0'] = 'true';

$expression51 = function($context) {return TRUE;};
$arguments48['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['section'] = NULL;
$arguments57['partial'] = NULL;
$arguments57['delegate'] = NULL;
$arguments57['renderable'] = NULL;
$arguments57['arguments'] = array (
);
$arguments57['optional'] = false;
$arguments57['default'] = NULL;
$arguments57['contentAs'] = NULL;
$arguments57['debug'] = true;
$arguments57['partial'] = 'Footer/All';
$arguments57['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
				';
return $output56;
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
$arguments52['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array54['0'] = 'true';

$expression55 = function($context) {return TRUE;};
$arguments52['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['section'] = NULL;
$arguments65['partial'] = NULL;
$arguments65['delegate'] = NULL;
$arguments65['renderable'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['optional'] = false;
$arguments65['default'] = NULL;
$arguments65['contentAs'] = NULL;
$arguments65['debug'] = true;
$arguments65['partial'] = 'DropIn/After/All';
$arguments65['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
				';
return $output64;
};
$arguments60 = array();
$arguments60['section'] = NULL;
$arguments60['partial'] = NULL;
$arguments60['delegate'] = NULL;
$arguments60['renderable'] = NULL;
$arguments60['arguments'] = array (
);
$arguments60['optional'] = false;
$arguments60['default'] = NULL;
$arguments60['contentAs'] = NULL;
$arguments60['debug'] = true;
$arguments60['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array62['0'] = 'true';

$expression63 = function($context) {return TRUE;};
$arguments60['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output6 .= '
			</div>

		';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '

			<a id="c';
$array69 = array (
);
$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array69)]);

$output68 .= '"></a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
				<a id="c';
$array76 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array76)]);

$output75 .= '"></a>
			';
return $output75;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = $renderChildrenClosure71;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output68 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
				<div class="frame-space-before-';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array83)]);

$output82 .= '"></div>
			';
return $output82;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output68 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['section'] = NULL;
$arguments89['partial'] = NULL;
$arguments89['delegate'] = NULL;
$arguments89['renderable'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['optional'] = false;
$arguments89['default'] = NULL;
$arguments89['contentAs'] = NULL;
$arguments89['debug'] = true;
$arguments89['partial'] = 'DropIn/Before/All';
$arguments89['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
			';
return $output88;
};
$arguments84 = array();
$arguments84['section'] = NULL;
$arguments84['partial'] = NULL;
$arguments84['delegate'] = NULL;
$arguments84['renderable'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['optional'] = false;
$arguments84['default'] = NULL;
$arguments84['contentAs'] = NULL;
$arguments84['debug'] = true;
$arguments84['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array86['0'] = 'true';

$expression87 = function($context) {return TRUE;};
$arguments84['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output68 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['debug'] = true;
$arguments97['partial'] = 'Header/All';
$arguments97['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
			';
return $output96;
};
$arguments92 = array();
$arguments92['section'] = NULL;
$arguments92['partial'] = NULL;
$arguments92['delegate'] = NULL;
$arguments92['renderable'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['optional'] = false;
$arguments92['default'] = NULL;
$arguments92['contentAs'] = NULL;
$arguments92['debug'] = true;
$arguments92['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array94['0'] = 'true';

$expression95 = function($context) {return TRUE;};
$arguments92['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output68 .= '
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
$arguments100['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array102['0'] = 'true';

$expression103 = function($context) {return TRUE;};
$arguments100['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output68 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['partial'] = 'Footer/All';
$arguments109['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
			';
return $output108;
};
$arguments104 = array();
$arguments104['section'] = NULL;
$arguments104['partial'] = NULL;
$arguments104['delegate'] = NULL;
$arguments104['renderable'] = NULL;
$arguments104['arguments'] = array (
);
$arguments104['optional'] = false;
$arguments104['default'] = NULL;
$arguments104['contentAs'] = NULL;
$arguments104['debug'] = true;
$arguments104['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array106['0'] = 'true';

$expression107 = function($context) {return TRUE;};
$arguments104['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output68 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['section'] = NULL;
$arguments117['partial'] = NULL;
$arguments117['delegate'] = NULL;
$arguments117['renderable'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['optional'] = false;
$arguments117['default'] = NULL;
$arguments117['contentAs'] = NULL;
$arguments117['debug'] = true;
$arguments117['partial'] = 'DropIn/After/All';
$arguments117['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
			';
return $output116;
};
$arguments112 = array();
$arguments112['section'] = NULL;
$arguments112['partial'] = NULL;
$arguments112['delegate'] = NULL;
$arguments112['renderable'] = NULL;
$arguments112['arguments'] = array (
);
$arguments112['optional'] = false;
$arguments112['default'] = NULL;
$arguments112['contentAs'] = NULL;
$arguments112['debug'] = true;
$arguments112['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array114['0'] = 'true';

$expression115 = function($context) {return TRUE;};
$arguments112['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output68 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
				<div class="frame-space-after-';
$array126 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array126)]);

$output125 .= '"></div>
			';
return $output125;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = $renderChildrenClosure121;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output68 .= '

		';
return $output68;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#