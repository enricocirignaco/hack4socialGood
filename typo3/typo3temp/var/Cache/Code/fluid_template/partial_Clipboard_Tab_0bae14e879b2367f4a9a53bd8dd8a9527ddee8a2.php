<?php

class partial_Clipboard_Tab_0bae14e879b2367f4a9a53bd8dd8a9527ddee8a2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<tr>
	<td colspan="3"><a href="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tab.url', $array1)]);

$output0 .= '#clip_head"
										 title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['key'] = NULL;
$arguments2['id'] = NULL;
$arguments2['default'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['extensionName'] = NULL;
$arguments2['languageKey'] = NULL;
$arguments2['alternativeLanguageKeys'] = NULL;
$output4 = '';

$output4 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array5 = array (
);
$output4 .= $renderingContext->getVariableProvider()->getByPath('tab.description', $array5);
$arguments2['key'] = $output4;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext)]);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
				<span class="t3-icon fa fa-check-circle"></span><strong>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output54 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['languageKey'] = NULL;
$arguments55['alternativeLanguageKeys'] = NULL;
$output57 = '';

$output57 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array58 = array (
);
$output57 .= $renderingContext->getVariableProvider()->getByPath('tab.label', $array58);
$arguments55['key'] = $output57;

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
				';
return $output54;
};
$arguments46 = array();
$arguments46['value'] = NULL;
$arguments46['arguments'] = array (
);
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['1'] = $renderingContext->getVariableProvider()->getByPath('tab.number', $array49);
$arguments46['arguments'] = $array48;
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
$output52 = '';

$output52 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array53 = array (
);
$output52 .= $renderingContext->getVariableProvider()->getByPath('tab.label', $array53);
$arguments50['key'] = $output52;
$arguments46['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
$renderChildrenClosure47 = ($arguments46['value'] !== null) ? function() use ($arguments46) { return $arguments46['value']; } : $renderChildrenClosure47;
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output45 .= '
				';
$array59 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tab.padding', $array59)]);

$output45 .= '
			</strong>
			';
return $output45;
};
$arguments43 = array();

$output42 .= '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
				<span class="t3-icon fa fa-circle-o"></span><span class="text-muted">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output71 = '';
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
$output74 = '';

$output74 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array75 = array (
);
$output74 .= $renderingContext->getVariableProvider()->getByPath('tab.label', $array75);
$arguments72['key'] = $output74;

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
			';
return $output71;
};
$arguments63 = array();
$arguments63['value'] = NULL;
$arguments63['arguments'] = array (
);
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['1'] = $renderingContext->getVariableProvider()->getByPath('tab.number', $array66);
$arguments63['arguments'] = $array65;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$output69 = '';

$output69 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array70 = array (
);
$output69 .= $renderingContext->getVariableProvider()->getByPath('tab.label', $array70);
$arguments67['key'] = $output69;
$arguments63['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
$renderChildrenClosure64 = ($arguments63['value'] !== null) ? function() use ($arguments63) { return $arguments63['value']; } : $renderChildrenClosure64;
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);
$array76 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tab.padding', $array76)]);

$output62 .= '</span>
			';
return $output62;
};
$arguments60 = array();
$arguments60['if'] = NULL;

$output42 .= '';

$output42 .= '
		';
return $output42;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('current', $array39);
$array38['1'] = ' == ';
$array40 = array (
);$array38['2'] = $renderingContext->getVariableProvider()->getByPath('tab.id', $array40);

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
				<span class="t3-icon fa fa-check-circle"></span><strong>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output17 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$output20 = '';

$output20 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array21 = array (
);
$output20 .= $renderingContext->getVariableProvider()->getByPath('tab.label', $array21);
$arguments18['key'] = $output20;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
				';
return $output17;
};
$arguments9 = array();
$arguments9['value'] = NULL;
$arguments9['arguments'] = array (
);
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['1'] = $renderingContext->getVariableProvider()->getByPath('tab.number', $array12);
$arguments9['arguments'] = $array11;
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
$output15 = '';

$output15 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array16 = array (
);
$output15 .= $renderingContext->getVariableProvider()->getByPath('tab.label', $array16);
$arguments13['key'] = $output15;
$arguments9['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '
				';
$array22 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tab.padding', $array22)]);

$output8 .= '
			</strong>
			';
return $output8;
};
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
				<span class="t3-icon fa fa-circle-o"></span><span class="text-muted">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output32 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['languageKey'] = NULL;
$arguments33['alternativeLanguageKeys'] = NULL;
$output35 = '';

$output35 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array36 = array (
);
$output35 .= $renderingContext->getVariableProvider()->getByPath('tab.label', $array36);
$arguments33['key'] = $output35;

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
			';
return $output32;
};
$arguments24 = array();
$arguments24['value'] = NULL;
$arguments24['arguments'] = array (
);
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['1'] = $renderingContext->getVariableProvider()->getByPath('tab.number', $array27);
$arguments24['arguments'] = $array26;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$output30 = '';

$output30 .= 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:';
$array31 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('tab.label', $array31);
$arguments28['key'] = $output30;
$arguments24['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);
$array37 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tab.padding', $array37)]);

$output23 .= '</span>
			';
return $output23;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
	</a></td>
</tr>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array86 = array (
);return $renderingContext->getVariableProvider()->getByPath('tab.content_old', $array86);
};
$arguments84 = array();
$arguments84['value'] = NULL;

$output83 .= isset($arguments84['value']) ? $arguments84['value'] : $renderChildrenClosure85();

$output83 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
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
$arguments97['partial'] = 'Clipboard/TabContent';
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['tab'] = $renderingContext->getVariableProvider()->getByPath('tab', $array100);
$array101 = array (
);$array99['content'] = $renderingContext->getVariableProvider()->getByPath('content', $array101);
$array102 = array (
);$array99['currentMode'] = $renderingContext->getVariableProvider()->getByPath('currentMode', $array102);
$arguments97['arguments'] = $array99;

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
		';
return $output96;
};
$arguments93 = array();
$arguments93['each'] = NULL;
$arguments93['as'] = NULL;
$arguments93['key'] = NULL;
$arguments93['reverse'] = false;
$arguments93['iteration'] = NULL;
$array95 = array (
);$arguments93['each'] = $renderingContext->getVariableProvider()->getByPath('tab.content', $array95);
$arguments93['as'] = 'content';
$arguments93['key'] = 'key';

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
	';
return $output92;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('tab.content', $array90);

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = $renderChildrenClosure88;

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output83 .= '
';
return $output83;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('current', $array80);
$array79['1'] = ' == ';
$array81 = array (
);$array79['2'] = $renderingContext->getVariableProvider()->getByPath('tab.id', $array81);

$expression82 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#