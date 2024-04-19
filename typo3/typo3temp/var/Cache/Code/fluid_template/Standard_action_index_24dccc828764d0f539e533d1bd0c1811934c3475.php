<?php

class Standard_action_index_24dccc828764d0f539e533d1bd0c1811934c3475 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section extraFieldRow
 */
public function section_91130078e287141a81f2cb3ac13c70e69d20e731(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <tr>
        <th class="col-nowrap">';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel', $array1)]);

$output0 .= '</th>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                <div class="media">
                    <div class="media-left">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.creatorRecord.icon', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output7 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output7 .= '
                    </div>
                    <div class="media-body">
                        <strong>';
$array11 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.creatorRecord.username', $array11)]);

$output7 .= '</strong><br>
                        ';
$array12 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.creatorRecord.realName', $array12)]);

$output7 .= '
                    </div>
                </div>
            ';
return $output7;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('row.creatorRecord', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['__thenClosure'] = $renderChildrenClosure3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                ';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.value', $array19)]);

$output18 .= '
            ';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('row.value', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
        </td>
    </tr>
';

return $output0;
}
/**
 * section fieldRow
 */
public function section_98d2d4b6b7669016b2f2b086cbef3478c9ff911e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output20 = '';

$output20 .= '
    <tr>
        <th class="col-nowrap">';
$array21 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel', $array21)]);

$output20 .= '</th>
        <td>';
$array22 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldValue', $array22)]);

$output20 .= '</td>
    </tr>
';

return $output20;
}
/**
 * section refLineRow
 */
public function section_bf6c41c48a38f988455b8309d12e9080996c546e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output23 = '';

$output23 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                <td class="col-icon"><a href="';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array57)]);

$output56 .= '" title="id=';
$array58 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array58)]);

$output56 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$array61 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array61);
};
$arguments59 = array();
$arguments59['value'] = NULL;

$output56 .= isset($arguments59['value']) ? $arguments59['value'] : $renderChildrenClosure60();

$output56 .= '</a></td>
                <td class="col-title"><a href="';
$array62 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array62)]);

$output56 .= '" title="[id=';
$array63 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array63)]);

$output56 .= '] ';
$array64 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array64)]);

$output56 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$array68 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array68)]);
};
$arguments65 = array();
$arguments65['maxCharacters'] = NULL;
$arguments65['append'] = '&hellip;';
$arguments65['respectWordBoundaries'] = true;
$arguments65['respectHtml'] = true;
$array67 = array (
);$arguments65['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array67);

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output56 .= '</a></td>
                <td>';
$array69 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array69)]);

$output56 .= '</td>
                <td><span title="';
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
$arguments70['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output56 .= ': ';
$array72 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array72)]);

$output56 .= ' (uid=';
$array73 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array73)]);

$output56 .= ')">
                        ';
$array74 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array74)]);

$output56 .= '
                    </span></td>
            ';
return $output56;
};
$arguments54 = array();

$output53 .= '';

$output53 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['key'] = NULL;
$arguments78['id'] = NULL;
$arguments78['default'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['languageKey'] = NULL;
$arguments78['alternativeLanguageKeys'] = NULL;
$arguments78['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output77 .= ' (uid=';
$array80 = array (
);
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array80)]);

$output77 .= '</td>
                <td>';
$array81 = array (
);
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array81)]);

$output77 .= '</td>
                <td></td>
            ';
return $output77;
};
$arguments75 = array();
$arguments75['if'] = NULL;

$output53 .= '';

$output53 .= '
        ';
return $output53;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                <td class="col-icon"><a href="';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array27)]);

$output26 .= '" title="id=';
$array28 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array28)]);

$output26 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array31);
};
$arguments29 = array();
$arguments29['value'] = NULL;

$output26 .= isset($arguments29['value']) ? $arguments29['value'] : $renderChildrenClosure30();

$output26 .= '</a></td>
                <td class="col-title"><a href="';
$array32 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array32)]);

$output26 .= '" title="[id=';
$array33 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array33)]);

$output26 .= '] ';
$array34 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array34)]);

$output26 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array38 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array38)]);
};
$arguments35 = array();
$arguments35['maxCharacters'] = NULL;
$arguments35['append'] = '&hellip;';
$arguments35['respectWordBoundaries'] = true;
$arguments35['respectHtml'] = true;
$array37 = array (
);$arguments35['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array37);

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output26 .= '</a></td>
                <td>';
$array39 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array39)]);

$output26 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output26 .= ': ';
$array42 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array42)]);

$output26 .= ' (uid=';
$array43 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array43)]);

$output26 .= ')">
                        ';
$array44 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array44)]);

$output26 .= '
                    </span></td>
            ';
return $output26;
};
$arguments24['__elseClosures'][] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['key'] = NULL;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['languageKey'] = NULL;
$arguments46['alternativeLanguageKeys'] = NULL;
$arguments46['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output45 .= ' (uid=';
$array48 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array48)]);

$output45 .= '</td>
                <td>';
$array49 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array49)]);

$output45 .= '</td>
                <td></td>
            ';
return $output45;
};

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
        <td title="';
$array82 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array82)]);

$output23 .= '" class="col-responsive">';
$array83 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array83)]);

$output23 .= '</td>
        <td>';
$array84 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array84)]);

$output23 .= '</td>
        <td>';
$array85 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array85)]);

$output23 .= '</td>
        <td>';
$array86 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array86)]);

$output23 .= '</td>
        <td>';
$array87 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array87)]);

$output23 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['debug'] = true;
$arguments88['section'] = 'action';
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array91);
$arguments88['arguments'] = $array90;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output23 .= '
        </td>
    </tr>
';

return $output23;
}
/**
 * section refFromLineRow
 */
public function section_259ffcb6cbf483b74437a8f396e954e06c115a04(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output92 = '';

$output92 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                <td class="col-icon"><a href="';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array122)]);

$output121 .= '" title="id=';
$array123 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array123)]);

$output121 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$array126 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array126);
};
$arguments124 = array();
$arguments124['value'] = NULL;

$output121 .= isset($arguments124['value']) ? $arguments124['value'] : $renderChildrenClosure125();

$output121 .= '</a></td>
                <td class="col-title"><a href="';
$array127 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array127)]);

$output121 .= '" title="[id=';
$array128 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array128)]);

$output121 .= '] ';
$array129 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array129)]);

$output121 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array133 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array133)]);
};
$arguments130 = array();
$arguments130['maxCharacters'] = NULL;
$arguments130['append'] = '&hellip;';
$arguments130['respectWordBoundaries'] = true;
$arguments130['respectHtml'] = true;
$array132 = array (
);$arguments130['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array132);

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output121 .= '</a></td>
                <td>';
$array134 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array134)]);

$output121 .= '</td>
                <td>';
$array135 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array135)]);

$output121 .= '</td>
            ';
return $output121;
};
$arguments119 = array();

$output118 .= '';

$output118 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['key'] = NULL;
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['languageKey'] = NULL;
$arguments139['alternativeLanguageKeys'] = NULL;
$arguments139['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output138 .= ' (uid=';
$array141 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array141)]);

$output138 .= '</td>
                <td>';
$array142 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array142)]);

$output138 .= '</td>
                <td></td>
            ';
return $output138;
};
$arguments136 = array();
$arguments136['if'] = NULL;

$output118 .= '';

$output118 .= '
        ';
return $output118;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array116);

$expression117 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
                <td class="col-icon"><a href="';
$array96 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array96)]);

$output95 .= '" title="id=';
$array97 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array97)]);

$output95 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array100 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array100);
};
$arguments98 = array();
$arguments98['value'] = NULL;

$output95 .= isset($arguments98['value']) ? $arguments98['value'] : $renderChildrenClosure99();

$output95 .= '</a></td>
                <td class="col-title"><a href="';
$array101 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array101)]);

$output95 .= '" title="[id=';
$array102 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array102)]);

$output95 .= '] ';
$array103 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array103)]);

$output95 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array107 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array107)]);
};
$arguments104 = array();
$arguments104['maxCharacters'] = NULL;
$arguments104['append'] = '&hellip;';
$arguments104['respectWordBoundaries'] = true;
$arguments104['respectHtml'] = true;
$array106 = array (
);$arguments104['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array106);

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output95 .= '</a></td>
                <td>';
$array108 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array108)]);

$output95 .= '</td>
                <td>';
$array109 = array (
);
$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array109)]);

$output95 .= '</td>
            ';
return $output95;
};
$arguments93['__elseClosures'][] = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['key'] = NULL;
$arguments111['id'] = NULL;
$arguments111['default'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['languageKey'] = NULL;
$arguments111['alternativeLanguageKeys'] = NULL;
$arguments111['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= ' (uid=';
$array113 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array113)]);

$output110 .= '</td>
                <td>';
$array114 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array114)]);

$output110 .= '</td>
                <td></td>
            ';
return $output110;
};

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
        <td title="';
$array143 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array143)]);

$output92 .= '" class="col-responsive">';
$array144 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array144)]);

$output92 .= '</td>
        <td>';
$array145 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array145)]);

$output92 .= '</td>
        <td>';
$array146 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array146)]);

$output92 .= '</td>
        <td>';
$array147 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array147)]);

$output92 .= '</td>
        <td>';
$array148 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array148)]);

$output92 .= '</td>
        <td>';
$array149 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_string', $array149)]);

$output92 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['section'] = NULL;
$arguments150['partial'] = NULL;
$arguments150['delegate'] = NULL;
$arguments150['renderable'] = NULL;
$arguments150['arguments'] = array (
);
$arguments150['optional'] = false;
$arguments150['default'] = NULL;
$arguments150['contentAs'] = NULL;
$arguments150['debug'] = true;
$arguments150['section'] = 'action';
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array153);
$arguments150['arguments'] = $array152;

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output92 .= '
        </td>
    </tr>
';

return $output92;
}
/**
 * section action
 */
public function section_34eb4c4ef005207e8b8f916b9f1fffacccd6945e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output154 = '';

$output154 .= '
    <div class="btn-group" role="group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
            <a class="btn btn-default btn-sm" href="#" onclick="';
$array161 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.viewOnClick', $array161)]);

$output160 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['key'] = NULL;
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$arguments162['languageKey'] = NULL;
$arguments162['alternativeLanguageKeys'] = NULL;
$arguments162['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showPage';

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output160 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['identifier'] = NULL;
$arguments164['size'] = 'small';
$arguments164['overlay'] = NULL;
$arguments164['state'] = 'default';
$arguments164['alternativeMarkupIdentifier'] = NULL;
$arguments164['identifier'] = 'actions-document-view';
$arguments164['size'] = 'small';

$output160 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output160 .= '
            </a>
        ';
return $output160;
};
$arguments155 = array();
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array158);

$expression159 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = $renderChildrenClosure156;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
        <a class="btn btn-default btn-sm" href="';
$array166 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordEditUrl', $array166)]);

$output154 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['identifier'] = NULL;
$arguments167['size'] = 'small';
$arguments167['overlay'] = NULL;
$arguments167['state'] = 'default';
$arguments167['alternativeMarkupIdentifier'] = NULL;
$arguments167['identifier'] = 'actions-open';
$arguments167['size'] = 'small';

$output154 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output154 .= '
        </a>
    </div>
    <div class="btn-group" role="group">
        <a class="btn btn-default btn-sm" href="';
$array169 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordHistoryUrl', $array169)]);

$output154 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['identifier'] = NULL;
$arguments170['size'] = 'small';
$arguments170['overlay'] = NULL;
$arguments170['state'] = 'default';
$arguments170['alternativeMarkupIdentifier'] = NULL;
$arguments170['identifier'] = 'actions-document-history-open';
$arguments170['size'] = 'small';

$output154 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output154 .= '
        </a>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
        <div class="btn-group" role="group">
            <a class="btn btn-default btn-sm" href="';
$array178 = array (
);
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array178)]);

$output177 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['key'] = NULL;
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['languageKey'] = NULL;
$arguments179['alternativeLanguageKeys'] = NULL;
$arguments179['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showList';

$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output177 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['identifier'] = NULL;
$arguments181['size'] = 'small';
$arguments181['overlay'] = NULL;
$arguments181['state'] = 'default';
$arguments181['alternativeMarkupIdentifier'] = NULL;
$arguments181['identifier'] = 'actions-system-list-open';
$arguments181['size'] = 'small';

$output177 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output177 .= '
            </a>
        </div>
    ';
return $output177;
};
$arguments172 = array();
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments172['__thenClosure'] = $renderChildrenClosure173;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output154 .= '
';

return $output154;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output183 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output347 = '';

$output347 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
		<h1>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
				<small>';
$array357 = array (
);
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('table', $array357)]);

$output356 .= '</small><br />';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$array360 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array360);
};
$arguments358 = array();
$arguments358['value'] = NULL;

$output356 .= isset($arguments358['value']) ? $arguments358['value'] : $renderChildrenClosure359();

$output356 .= '
				<span title="';
$array361 = array (
);
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array361)]);

$output356 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$array365 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array365)]);
};
$arguments362 = array();
$arguments362['maxCharacters'] = NULL;
$arguments362['append'] = '&hellip;';
$arguments362['respectWordBoundaries'] = true;
$arguments362['respectHtml'] = true;
$array364 = array (
);$arguments362['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array364);

$output356 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output356 .= '</span>
			';
return $output356;
};
$arguments351 = array();
$arguments351['then'] = NULL;
$arguments351['else'] = NULL;
$arguments351['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array353 = array();
$array354 = array (
);$array353['0'] = $renderingContext->getVariableProvider()->getByPath('table', $array354);

$expression355 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression355(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array353)
					),
					$renderingContext
				);
$arguments351['__thenClosure'] = $renderChildrenClosure352;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
		</h1>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$array376 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingFile', $array376)]);
};
$arguments372 = array();
$arguments372['message'] = NULL;
$arguments372['title'] = NULL;
$arguments372['state'] = -2;
$arguments372['iconName'] = NULL;
$arguments372['disableIcon'] = false;
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
$arguments374['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:warning.file_missing';
$arguments372['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);
$arguments372['state'] = 1;
$renderChildrenClosure373 = ($arguments372['message'] !== null) ? function() use ($arguments372) { return $arguments372['message']; } : $renderChildrenClosure373;
$output371 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '
		';
return $output371;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('missingFile', $array369);

$expression370 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression370(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = $renderChildrenClosure367;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output350 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
			<p>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$array385 = array (
);return $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array385);
};
$arguments383 = array();
$arguments383['value'] = NULL;

$output382 .= isset($arguments383['value']) ? $arguments383['value'] : $renderChildrenClosure384();

$output382 .= '
			</p>
		';
return $output382;
};
$arguments377 = array();
$arguments377['then'] = NULL;
$arguments377['else'] = NULL;
$arguments377['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['0'] = $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array380);

$expression381 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments377['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression381(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array379)
					),
					$renderingContext
				);
$arguments377['__thenClosure'] = $renderChildrenClosure378;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output350 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
			<p>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments392 = array();
$arguments392['additionalAttributes'] = NULL;
$arguments392['data'] = NULL;
$arguments392['class'] = NULL;
$arguments392['dir'] = NULL;
$arguments392['id'] = NULL;
$arguments392['lang'] = NULL;
$arguments392['style'] = NULL;
$arguments392['title'] = NULL;
$arguments392['accesskey'] = NULL;
$arguments392['tabindex'] = NULL;
$arguments392['onclick'] = NULL;
$arguments392['alt'] = NULL;
$arguments392['file'] = NULL;
$arguments392['additionalConfig'] = array (
);
$arguments392['width'] = NULL;
$arguments392['height'] = NULL;
$arguments392['cropVariant'] = 'default';
$array394 = array (
);$arguments392['file'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array394);
$array395 = array (
);$arguments392['width'] = $renderingContext->getVariableProvider()->getByPath('width', $array395);
$array396 = array (
);$arguments392['height'] = $renderingContext->getVariableProvider()->getByPath('height', $array396);

$output391 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output391 .= '
			</p>
		';
return $output391;
};
$arguments386 = array();
$arguments386['then'] = NULL;
$arguments386['else'] = NULL;
$arguments386['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array388 = array();
$array389 = array (
);$array388['0'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array389);

$expression390 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments386['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression390(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array388)
					),
					$renderingContext
				);
$arguments386['__thenClosure'] = $renderChildrenClosure387;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output350 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
			<p>
				<a class="btn btn-default" href="';
$array403 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array403)]);

$output402 .= '" target="_blank">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['identifier'] = NULL;
$arguments404['size'] = 'small';
$arguments404['overlay'] = NULL;
$arguments404['state'] = 'default';
$arguments404['alternativeMarkupIdentifier'] = NULL;
$arguments404['identifier'] = 'actions-document-view';
$arguments404['size'] = 'small';
$arguments404['alternativeMarkupIdentifier'] = 'inline';

$output402 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output402 .= '
					';
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
$arguments406['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext)]);

$output402 .= '
				</a>
			</p>
		';
return $output402;
};
$arguments397 = array();
$arguments397['then'] = NULL;
$arguments397['else'] = NULL;
$arguments397['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array400);

$expression401 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments397['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression401(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array399)
					),
					$renderingContext
				);
$arguments397['__thenClosure'] = $renderChildrenClosure398;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output350 .= '
		<div class="table-fit table-fit-wrap">
			<table class="table table-striped table-hover">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['section'] = NULL;
$arguments412['partial'] = NULL;
$arguments412['delegate'] = NULL;
$arguments412['renderable'] = NULL;
$arguments412['arguments'] = array (
);
$arguments412['optional'] = false;
$arguments412['default'] = NULL;
$arguments412['contentAs'] = NULL;
$arguments412['debug'] = true;
$arguments412['section'] = 'extraFieldRow';
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['row'] = $renderingContext->getVariableProvider()->getByPath('extraField', $array415);
$arguments412['arguments'] = $array414;

$output411 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output411 .= '
				';
return $output411;
};
$arguments408 = array();
$arguments408['each'] = NULL;
$arguments408['as'] = NULL;
$arguments408['key'] = NULL;
$arguments408['reverse'] = false;
$arguments408['iteration'] = NULL;
$array410 = array (
);$arguments408['each'] = $renderingContext->getVariableProvider()->getByPath('extraFields', $array410);
$arguments408['as'] = 'extraField';

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output350 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['section'] = NULL;
$arguments420['partial'] = NULL;
$arguments420['delegate'] = NULL;
$arguments420['renderable'] = NULL;
$arguments420['arguments'] = array (
);
$arguments420['optional'] = false;
$arguments420['default'] = NULL;
$arguments420['contentAs'] = NULL;
$arguments420['debug'] = true;
$arguments420['section'] = 'fieldRow';
// Rendering Array
$array422 = array();
$array423 = array (
);$array422['row'] = $renderingContext->getVariableProvider()->getByPath('field', $array423);
$arguments420['arguments'] = $array422;

$output419 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
				';
return $output419;
};
$arguments416 = array();
$arguments416['each'] = NULL;
$arguments416['as'] = NULL;
$arguments416['key'] = NULL;
$arguments416['reverse'] = false;
$arguments416['iteration'] = NULL;
$array418 = array (
);$arguments416['each'] = $renderingContext->getVariableProvider()->getByPath('fields', $array418);
$arguments416['as'] = 'field';

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output350 .= '
			</table>
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
			<a class="btn btn-primary" href="';
$array430 = array (
);
$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array430)]);

$output429 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['identifier'] = NULL;
$arguments431['size'] = 'small';
$arguments431['overlay'] = NULL;
$arguments431['state'] = 'default';
$arguments431['alternativeMarkupIdentifier'] = NULL;
$arguments431['identifier'] = 'actions-view-go-back';
$arguments431['size'] = 'small';

$output429 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output429 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['key'] = NULL;
$arguments433['id'] = NULL;
$arguments433['default'] = NULL;
$arguments433['arguments'] = NULL;
$arguments433['extensionName'] = NULL;
$arguments433['languageKey'] = NULL;
$arguments433['alternativeLanguageKeys'] = NULL;
$arguments433['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext)]);

$output429 .= '
			</a>
		';
return $output429;
};
$arguments424 = array();
$arguments424['then'] = NULL;
$arguments424['else'] = NULL;
$arguments424['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array426 = array();
$array427 = array (
);$array426['0'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array427);

$expression428 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments424['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression428(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array426)
					),
					$renderingContext
				);
$arguments424['__thenClosure'] = $renderChildrenClosure425;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output350 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
			<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['key'] = NULL;
$arguments441['id'] = NULL;
$arguments441['default'] = NULL;
$arguments441['arguments'] = NULL;
$arguments441['extensionName'] = NULL;
$arguments441['languageKey'] = NULL;
$arguments441['alternativeLanguageKeys'] = NULL;
$arguments441['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesToThisItem';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext)]);

$output440 .= '</h3>
			<div class="table-fit">
				<table class="table table-striped table-hover">
					<thead>
					<tr>
						<th class="col-icon"></th>
						<th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['key'] = NULL;
$arguments443['id'] = NULL;
$arguments443['default'] = NULL;
$arguments443['arguments'] = NULL;
$arguments443['extensionName'] = NULL;
$arguments443['languageKey'] = NULL;
$arguments443['alternativeLanguageKeys'] = NULL;
$arguments443['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext)]);

$output440 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments445 = array();
$arguments445['key'] = NULL;
$arguments445['id'] = NULL;
$arguments445['default'] = NULL;
$arguments445['arguments'] = NULL;
$arguments445['extensionName'] = NULL;
$arguments445['languageKey'] = NULL;
$arguments445['alternativeLanguageKeys'] = NULL;
$arguments445['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext)]);

$output440 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['key'] = NULL;
$arguments447['id'] = NULL;
$arguments447['default'] = NULL;
$arguments447['arguments'] = NULL;
$arguments447['extensionName'] = NULL;
$arguments447['languageKey'] = NULL;
$arguments447['alternativeLanguageKeys'] = NULL;
$arguments447['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext)]);

$output440 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments449 = array();
$arguments449['key'] = NULL;
$arguments449['id'] = NULL;
$arguments449['default'] = NULL;
$arguments449['arguments'] = NULL;
$arguments449['extensionName'] = NULL;
$arguments449['languageKey'] = NULL;
$arguments449['alternativeLanguageKeys'] = NULL;
$arguments449['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext)]);

$output440 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['key'] = NULL;
$arguments451['id'] = NULL;
$arguments451['default'] = NULL;
$arguments451['arguments'] = NULL;
$arguments451['extensionName'] = NULL;
$arguments451['languageKey'] = NULL;
$arguments451['alternativeLanguageKeys'] = NULL;
$arguments451['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext)]);

$output440 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['key'] = NULL;
$arguments453['id'] = NULL;
$arguments453['default'] = NULL;
$arguments453['arguments'] = NULL;
$arguments453['extensionName'] = NULL;
$arguments453['languageKey'] = NULL;
$arguments453['alternativeLanguageKeys'] = NULL;
$arguments453['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext)]);

$output440 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['key'] = NULL;
$arguments455['id'] = NULL;
$arguments455['default'] = NULL;
$arguments455['arguments'] = NULL;
$arguments455['extensionName'] = NULL;
$arguments455['languageKey'] = NULL;
$arguments455['alternativeLanguageKeys'] = NULL;
$arguments455['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext)]);

$output440 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['key'] = NULL;
$arguments457['id'] = NULL;
$arguments457['default'] = NULL;
$arguments457['arguments'] = NULL;
$arguments457['extensionName'] = NULL;
$arguments457['languageKey'] = NULL;
$arguments457['alternativeLanguageKeys'] = NULL;
$arguments457['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext)]);

$output440 .= '</th>
						<th class="col-control"></th>
					</tr>
					</thead>
					<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['section'] = NULL;
$arguments463['partial'] = NULL;
$arguments463['delegate'] = NULL;
$arguments463['renderable'] = NULL;
$arguments463['arguments'] = array (
);
$arguments463['optional'] = false;
$arguments463['default'] = NULL;
$arguments463['contentAs'] = NULL;
$arguments463['debug'] = true;
$arguments463['section'] = 'refLineRow';
// Rendering Array
$array465 = array();
$array466 = array (
);$array465['line'] = $renderingContext->getVariableProvider()->getByPath('refLine', $array466);
$array467 = array (
);$array465['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array467);
$arguments463['arguments'] = $array465;

$output462 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output462 .= '
					';
return $output462;
};
$arguments459 = array();
$arguments459['each'] = NULL;
$arguments459['as'] = NULL;
$arguments459['key'] = NULL;
$arguments459['reverse'] = false;
$arguments459['iteration'] = NULL;
$array461 = array (
);$arguments459['each'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array461);
$arguments459['as'] = 'refLine';

$output440 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output440 .= '
					</tbody>
				</table>
			</div>
		';
return $output440;
};
$arguments435 = array();
$arguments435['then'] = NULL;
$arguments435['else'] = NULL;
$arguments435['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array437 = array();
$array438 = array (
);$array437['0'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array438);

$expression439 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments435['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression439(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array437)
					),
					$renderingContext
				);
$arguments435['__thenClosure'] = $renderChildrenClosure436;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output350 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
			<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments474 = array();
$arguments474['key'] = NULL;
$arguments474['id'] = NULL;
$arguments474['default'] = NULL;
$arguments474['arguments'] = NULL;
$arguments474['extensionName'] = NULL;
$arguments474['languageKey'] = NULL;
$arguments474['alternativeLanguageKeys'] = NULL;
$arguments474['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesFromThisItem';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext)]);

$output473 .= '</h3>
			<div class="table-fit">
				<table class="table table-striped table-hover">
					<thead>
					<tr>
						<th class="col-icon"></th>
						<th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['key'] = NULL;
$arguments476['id'] = NULL;
$arguments476['default'] = NULL;
$arguments476['arguments'] = NULL;
$arguments476['extensionName'] = NULL;
$arguments476['languageKey'] = NULL;
$arguments476['alternativeLanguageKeys'] = NULL;
$arguments476['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext)]);

$output473 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['key'] = NULL;
$arguments478['id'] = NULL;
$arguments478['default'] = NULL;
$arguments478['arguments'] = NULL;
$arguments478['extensionName'] = NULL;
$arguments478['languageKey'] = NULL;
$arguments478['alternativeLanguageKeys'] = NULL;
$arguments478['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext)]);

$output473 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['key'] = NULL;
$arguments480['id'] = NULL;
$arguments480['default'] = NULL;
$arguments480['arguments'] = NULL;
$arguments480['extensionName'] = NULL;
$arguments480['languageKey'] = NULL;
$arguments480['alternativeLanguageKeys'] = NULL;
$arguments480['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext)]);

$output473 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments482 = array();
$arguments482['key'] = NULL;
$arguments482['id'] = NULL;
$arguments482['default'] = NULL;
$arguments482['arguments'] = NULL;
$arguments482['extensionName'] = NULL;
$arguments482['languageKey'] = NULL;
$arguments482['alternativeLanguageKeys'] = NULL;
$arguments482['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext)]);

$output473 .= '</th>
						<th>';
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
$arguments484['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext)]);

$output473 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['key'] = NULL;
$arguments486['id'] = NULL;
$arguments486['default'] = NULL;
$arguments486['arguments'] = NULL;
$arguments486['extensionName'] = NULL;
$arguments486['languageKey'] = NULL;
$arguments486['alternativeLanguageKeys'] = NULL;
$arguments486['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext)]);

$output473 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments488 = array();
$arguments488['key'] = NULL;
$arguments488['id'] = NULL;
$arguments488['default'] = NULL;
$arguments488['arguments'] = NULL;
$arguments488['extensionName'] = NULL;
$arguments488['languageKey'] = NULL;
$arguments488['alternativeLanguageKeys'] = NULL;
$arguments488['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext)]);

$output473 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['key'] = NULL;
$arguments490['id'] = NULL;
$arguments490['default'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['languageKey'] = NULL;
$arguments490['alternativeLanguageKeys'] = NULL;
$arguments490['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext)]);

$output473 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['key'] = NULL;
$arguments492['id'] = NULL;
$arguments492['default'] = NULL;
$arguments492['arguments'] = NULL;
$arguments492['extensionName'] = NULL;
$arguments492['languageKey'] = NULL;
$arguments492['alternativeLanguageKeys'] = NULL;
$arguments492['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.refString';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext)]);

$output473 .= '</th>
						<th class="col-control"></th>
					</tr>
					</thead>
					<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output497 = '';

$output497 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['section'] = NULL;
$arguments498['partial'] = NULL;
$arguments498['delegate'] = NULL;
$arguments498['renderable'] = NULL;
$arguments498['arguments'] = array (
);
$arguments498['optional'] = false;
$arguments498['default'] = NULL;
$arguments498['contentAs'] = NULL;
$arguments498['debug'] = true;
$arguments498['section'] = 'refFromLineRow';
// Rendering Array
$array500 = array();
$array501 = array (
);$array500['line'] = $renderingContext->getVariableProvider()->getByPath('refFromLine', $array501);
$array502 = array (
);$array500['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array502);
$arguments498['arguments'] = $array500;

$output497 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output497 .= '
					';
return $output497;
};
$arguments494 = array();
$arguments494['each'] = NULL;
$arguments494['as'] = NULL;
$arguments494['key'] = NULL;
$arguments494['reverse'] = false;
$arguments494['iteration'] = NULL;
$array496 = array (
);$arguments494['each'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array496);
$arguments494['as'] = 'refFromLine';

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output473 .= '
					</tbody>
				</table>
			</div>
		';
return $output473;
};
$arguments468 = array();
$arguments468['then'] = NULL;
$arguments468['else'] = NULL;
$arguments468['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array470 = array();
$array471 = array (
);$array470['0'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array471);

$expression472 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments468['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression472(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array470)
					),
					$renderingContext
				);
$arguments468['__thenClosure'] = $renderChildrenClosure469;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output350 .= '
	';
return $output350;
};
$arguments348 = array();

$output347 .= '';

$output347 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
$output505 = '';

$output505 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['key'] = NULL;
$arguments508['id'] = NULL;
$arguments508['default'] = NULL;
$arguments508['arguments'] = NULL;
$arguments508['extensionName'] = NULL;
$arguments508['languageKey'] = NULL;
$arguments508['alternativeLanguageKeys'] = NULL;
$arguments508['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.noEditPermission';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext)]);
};
$arguments506 = array();
$arguments506['message'] = NULL;
$arguments506['title'] = NULL;
$arguments506['state'] = -2;
$arguments506['iconName'] = NULL;
$arguments506['disableIcon'] = false;
$arguments506['state'] = 2;
$renderChildrenClosure507 = ($arguments506['message'] !== null) ? function() use ($arguments506) { return $arguments506['message']; } : $renderChildrenClosure507;
$output505 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output505 .= '
	';
return $output505;
};
$arguments503 = array();
$arguments503['if'] = NULL;

$output347 .= '';

$output347 .= '
';
return $output347;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array344 = array();
$array345 = array (
);$array344['0'] = $renderingContext->getVariableProvider()->getByPath('accessAllowed', $array345);

$expression346 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression346(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array344)
					),
					$renderingContext
				);
$arguments184['__thenClosure'] = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
		<h1>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
				<small>';
$array193 = array (
);
$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('table', $array193)]);

$output192 .= '</small><br />';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$array196 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array196);
};
$arguments194 = array();
$arguments194['value'] = NULL;

$output192 .= isset($arguments194['value']) ? $arguments194['value'] : $renderChildrenClosure195();

$output192 .= '
				<span title="';
$array197 = array (
);
$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array197)]);

$output192 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$array201 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array201)]);
};
$arguments198 = array();
$arguments198['maxCharacters'] = NULL;
$arguments198['append'] = '&hellip;';
$arguments198['respectWordBoundaries'] = true;
$arguments198['respectHtml'] = true;
$array200 = array (
);$arguments198['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array200);

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output192 .= '</span>
			';
return $output192;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('table', $array190);

$expression191 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression191(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = $renderChildrenClosure188;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
		</h1>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$array212 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingFile', $array212)]);
};
$arguments208 = array();
$arguments208['message'] = NULL;
$arguments208['title'] = NULL;
$arguments208['state'] = -2;
$arguments208['iconName'] = NULL;
$arguments208['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$arguments210['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:warning.file_missing';
$arguments208['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);
$arguments208['state'] = 1;
$renderChildrenClosure209 = ($arguments208['message'] !== null) ? function() use ($arguments208) { return $arguments208['message']; } : $renderChildrenClosure209;
$output207 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

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
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('missingFile', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output186 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
			<p>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$array221 = array (
);return $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array221);
};
$arguments219 = array();
$arguments219['value'] = NULL;

$output218 .= isset($arguments219['value']) ? $arguments219['value'] : $renderChildrenClosure220();

$output218 .= '
			</p>
		';
return $output218;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array216);

$expression217 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = $renderChildrenClosure214;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output186 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
			<p>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['additionalAttributes'] = NULL;
$arguments228['data'] = NULL;
$arguments228['class'] = NULL;
$arguments228['dir'] = NULL;
$arguments228['id'] = NULL;
$arguments228['lang'] = NULL;
$arguments228['style'] = NULL;
$arguments228['title'] = NULL;
$arguments228['accesskey'] = NULL;
$arguments228['tabindex'] = NULL;
$arguments228['onclick'] = NULL;
$arguments228['alt'] = NULL;
$arguments228['file'] = NULL;
$arguments228['additionalConfig'] = array (
);
$arguments228['width'] = NULL;
$arguments228['height'] = NULL;
$arguments228['cropVariant'] = 'default';
$array230 = array (
);$arguments228['file'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array230);
$array231 = array (
);$arguments228['width'] = $renderingContext->getVariableProvider()->getByPath('width', $array231);
$array232 = array (
);$arguments228['height'] = $renderingContext->getVariableProvider()->getByPath('height', $array232);

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
			</p>
		';
return $output227;
};
$arguments222 = array();
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$arguments222['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array224 = array();
$array225 = array (
);$array224['0'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array225);

$expression226 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments222['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array224)
					),
					$renderingContext
				);
$arguments222['__thenClosure'] = $renderChildrenClosure223;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output186 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
			<p>
				<a class="btn btn-default" href="';
$array239 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array239)]);

$output238 .= '" target="_blank">
					';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['identifier'] = NULL;
$arguments240['size'] = 'small';
$arguments240['overlay'] = NULL;
$arguments240['state'] = 'default';
$arguments240['alternativeMarkupIdentifier'] = NULL;
$arguments240['identifier'] = 'actions-document-view';
$arguments240['size'] = 'small';
$arguments240['alternativeMarkupIdentifier'] = 'inline';

$output238 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output238 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['key'] = NULL;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$arguments242['languageKey'] = NULL;
$arguments242['alternativeLanguageKeys'] = NULL;
$arguments242['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext)]);

$output238 .= '
				</a>
			</p>
		';
return $output238;
};
$arguments233 = array();
$arguments233['then'] = NULL;
$arguments233['else'] = NULL;
$arguments233['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array235 = array();
$array236 = array (
);$array235['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array236);

$expression237 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments233['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array235)
					),
					$renderingContext
				);
$arguments233['__thenClosure'] = $renderChildrenClosure234;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output186 .= '
		<div class="table-fit table-fit-wrap">
			<table class="table table-striped table-hover">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['section'] = NULL;
$arguments248['partial'] = NULL;
$arguments248['delegate'] = NULL;
$arguments248['renderable'] = NULL;
$arguments248['arguments'] = array (
);
$arguments248['optional'] = false;
$arguments248['default'] = NULL;
$arguments248['contentAs'] = NULL;
$arguments248['debug'] = true;
$arguments248['section'] = 'extraFieldRow';
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['row'] = $renderingContext->getVariableProvider()->getByPath('extraField', $array251);
$arguments248['arguments'] = $array250;

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
				';
return $output247;
};
$arguments244 = array();
$arguments244['each'] = NULL;
$arguments244['as'] = NULL;
$arguments244['key'] = NULL;
$arguments244['reverse'] = false;
$arguments244['iteration'] = NULL;
$array246 = array (
);$arguments244['each'] = $renderingContext->getVariableProvider()->getByPath('extraFields', $array246);
$arguments244['as'] = 'extraField';

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output186 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['section'] = NULL;
$arguments256['partial'] = NULL;
$arguments256['delegate'] = NULL;
$arguments256['renderable'] = NULL;
$arguments256['arguments'] = array (
);
$arguments256['optional'] = false;
$arguments256['default'] = NULL;
$arguments256['contentAs'] = NULL;
$arguments256['debug'] = true;
$arguments256['section'] = 'fieldRow';
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['row'] = $renderingContext->getVariableProvider()->getByPath('field', $array259);
$arguments256['arguments'] = $array258;

$output255 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
				';
return $output255;
};
$arguments252 = array();
$arguments252['each'] = NULL;
$arguments252['as'] = NULL;
$arguments252['key'] = NULL;
$arguments252['reverse'] = false;
$arguments252['iteration'] = NULL;
$array254 = array (
);$arguments252['each'] = $renderingContext->getVariableProvider()->getByPath('fields', $array254);
$arguments252['as'] = 'field';

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output186 .= '
			</table>
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
			<a class="btn btn-primary" href="';
$array266 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array266)]);

$output265 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['identifier'] = NULL;
$arguments267['size'] = 'small';
$arguments267['overlay'] = NULL;
$arguments267['state'] = 'default';
$arguments267['alternativeMarkupIdentifier'] = NULL;
$arguments267['identifier'] = 'actions-view-go-back';
$arguments267['size'] = 'small';

$output265 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output265 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['key'] = NULL;
$arguments269['id'] = NULL;
$arguments269['default'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['extensionName'] = NULL;
$arguments269['languageKey'] = NULL;
$arguments269['alternativeLanguageKeys'] = NULL;
$arguments269['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext)]);

$output265 .= '
			</a>
		';
return $output265;
};
$arguments260 = array();
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array263);

$expression264 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['__thenClosure'] = $renderChildrenClosure261;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output186 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
			<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['key'] = NULL;
$arguments277['id'] = NULL;
$arguments277['default'] = NULL;
$arguments277['arguments'] = NULL;
$arguments277['extensionName'] = NULL;
$arguments277['languageKey'] = NULL;
$arguments277['alternativeLanguageKeys'] = NULL;
$arguments277['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesToThisItem';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext)]);

$output276 .= '</h3>
			<div class="table-fit">
				<table class="table table-striped table-hover">
					<thead>
					<tr>
						<th class="col-icon"></th>
						<th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['key'] = NULL;
$arguments279['id'] = NULL;
$arguments279['default'] = NULL;
$arguments279['arguments'] = NULL;
$arguments279['extensionName'] = NULL;
$arguments279['languageKey'] = NULL;
$arguments279['alternativeLanguageKeys'] = NULL;
$arguments279['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output276 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$arguments281['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output276 .= '</th>
						<th>';
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
$arguments283['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext)]);

$output276 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['key'] = NULL;
$arguments285['id'] = NULL;
$arguments285['default'] = NULL;
$arguments285['arguments'] = NULL;
$arguments285['extensionName'] = NULL;
$arguments285['languageKey'] = NULL;
$arguments285['alternativeLanguageKeys'] = NULL;
$arguments285['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext)]);

$output276 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['key'] = NULL;
$arguments287['id'] = NULL;
$arguments287['default'] = NULL;
$arguments287['arguments'] = NULL;
$arguments287['extensionName'] = NULL;
$arguments287['languageKey'] = NULL;
$arguments287['alternativeLanguageKeys'] = NULL;
$arguments287['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext)]);

$output276 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['key'] = NULL;
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$arguments289['languageKey'] = NULL;
$arguments289['alternativeLanguageKeys'] = NULL;
$arguments289['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext)]);

$output276 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['key'] = NULL;
$arguments291['id'] = NULL;
$arguments291['default'] = NULL;
$arguments291['arguments'] = NULL;
$arguments291['extensionName'] = NULL;
$arguments291['languageKey'] = NULL;
$arguments291['alternativeLanguageKeys'] = NULL;
$arguments291['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output276 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['key'] = NULL;
$arguments293['id'] = NULL;
$arguments293['default'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['languageKey'] = NULL;
$arguments293['alternativeLanguageKeys'] = NULL;
$arguments293['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext)]);

$output276 .= '</th>
						<th class="col-control"></th>
					</tr>
					</thead>
					<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['section'] = NULL;
$arguments299['partial'] = NULL;
$arguments299['delegate'] = NULL;
$arguments299['renderable'] = NULL;
$arguments299['arguments'] = array (
);
$arguments299['optional'] = false;
$arguments299['default'] = NULL;
$arguments299['contentAs'] = NULL;
$arguments299['debug'] = true;
$arguments299['section'] = 'refLineRow';
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['line'] = $renderingContext->getVariableProvider()->getByPath('refLine', $array302);
$array303 = array (
);$array301['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array303);
$arguments299['arguments'] = $array301;

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
					';
return $output298;
};
$arguments295 = array();
$arguments295['each'] = NULL;
$arguments295['as'] = NULL;
$arguments295['key'] = NULL;
$arguments295['reverse'] = false;
$arguments295['iteration'] = NULL;
$array297 = array (
);$arguments295['each'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array297);
$arguments295['as'] = 'refLine';

$output276 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output276 .= '
					</tbody>
				</table>
			</div>
		';
return $output276;
};
$arguments271 = array();
$arguments271['then'] = NULL;
$arguments271['else'] = NULL;
$arguments271['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['0'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array274);

$expression275 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments271['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression275(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array273)
					),
					$renderingContext
				);
$arguments271['__thenClosure'] = $renderChildrenClosure272;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output186 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
			<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['key'] = NULL;
$arguments310['id'] = NULL;
$arguments310['default'] = NULL;
$arguments310['arguments'] = NULL;
$arguments310['extensionName'] = NULL;
$arguments310['languageKey'] = NULL;
$arguments310['alternativeLanguageKeys'] = NULL;
$arguments310['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesFromThisItem';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext)]);

$output309 .= '</h3>
			<div class="table-fit">
				<table class="table table-striped table-hover">
					<thead>
					<tr>
						<th class="col-icon"></th>
						<th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['key'] = NULL;
$arguments312['id'] = NULL;
$arguments312['default'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['extensionName'] = NULL;
$arguments312['languageKey'] = NULL;
$arguments312['alternativeLanguageKeys'] = NULL;
$arguments312['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output309 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['key'] = NULL;
$arguments314['id'] = NULL;
$arguments314['default'] = NULL;
$arguments314['arguments'] = NULL;
$arguments314['extensionName'] = NULL;
$arguments314['languageKey'] = NULL;
$arguments314['alternativeLanguageKeys'] = NULL;
$arguments314['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext)]);

$output309 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['key'] = NULL;
$arguments316['id'] = NULL;
$arguments316['default'] = NULL;
$arguments316['arguments'] = NULL;
$arguments316['extensionName'] = NULL;
$arguments316['languageKey'] = NULL;
$arguments316['alternativeLanguageKeys'] = NULL;
$arguments316['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext)]);

$output309 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output309 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$arguments320['languageKey'] = NULL;
$arguments320['alternativeLanguageKeys'] = NULL;
$arguments320['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output309 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['key'] = NULL;
$arguments322['id'] = NULL;
$arguments322['default'] = NULL;
$arguments322['arguments'] = NULL;
$arguments322['extensionName'] = NULL;
$arguments322['languageKey'] = NULL;
$arguments322['alternativeLanguageKeys'] = NULL;
$arguments322['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext)]);

$output309 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['key'] = NULL;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['languageKey'] = NULL;
$arguments324['alternativeLanguageKeys'] = NULL;
$arguments324['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext)]);

$output309 .= '</th>
						<th>';
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
$arguments326['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext)]);

$output309 .= '</th>
						<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['key'] = NULL;
$arguments328['id'] = NULL;
$arguments328['default'] = NULL;
$arguments328['arguments'] = NULL;
$arguments328['extensionName'] = NULL;
$arguments328['languageKey'] = NULL;
$arguments328['alternativeLanguageKeys'] = NULL;
$arguments328['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.refString';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext)]);

$output309 .= '</th>
						<th class="col-control"></th>
					</tr>
					</thead>
					<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['section'] = NULL;
$arguments334['partial'] = NULL;
$arguments334['delegate'] = NULL;
$arguments334['renderable'] = NULL;
$arguments334['arguments'] = array (
);
$arguments334['optional'] = false;
$arguments334['default'] = NULL;
$arguments334['contentAs'] = NULL;
$arguments334['debug'] = true;
$arguments334['section'] = 'refFromLineRow';
// Rendering Array
$array336 = array();
$array337 = array (
);$array336['line'] = $renderingContext->getVariableProvider()->getByPath('refFromLine', $array337);
$array338 = array (
);$array336['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array338);
$arguments334['arguments'] = $array336;

$output333 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output333 .= '
					';
return $output333;
};
$arguments330 = array();
$arguments330['each'] = NULL;
$arguments330['as'] = NULL;
$arguments330['key'] = NULL;
$arguments330['reverse'] = false;
$arguments330['iteration'] = NULL;
$array332 = array (
);$arguments330['each'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array332);
$arguments330['as'] = 'refFromLine';

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output309 .= '
					</tbody>
				</table>
			</div>
		';
return $output309;
};
$arguments304 = array();
$arguments304['then'] = NULL;
$arguments304['else'] = NULL;
$arguments304['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array306 = array();
$array307 = array (
);$array306['0'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array307);

$expression308 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments304['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array306)
					),
					$renderingContext
				);
$arguments304['__thenClosure'] = $renderChildrenClosure305;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output186 .= '
	';
return $output186;
};
$arguments184['__elseClosures'][] = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['key'] = NULL;
$arguments342['id'] = NULL;
$arguments342['default'] = NULL;
$arguments342['arguments'] = NULL;
$arguments342['extensionName'] = NULL;
$arguments342['languageKey'] = NULL;
$arguments342['alternativeLanguageKeys'] = NULL;
$arguments342['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.noEditPermission';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext)]);
};
$arguments340 = array();
$arguments340['message'] = NULL;
$arguments340['title'] = NULL;
$arguments340['state'] = -2;
$arguments340['iconName'] = NULL;
$arguments340['disableIcon'] = false;
$arguments340['state'] = 2;
$renderChildrenClosure341 = ($arguments340['message'] !== null) ? function() use ($arguments340) { return $arguments340['message']; } : $renderChildrenClosure341;
$output339 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output339 .= '
	';
return $output339;
};

$output183 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '



';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '
    <tr>
        <th class="col-nowrap">';
$array513 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel', $array513)]);

$output512 .= '</th>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$output519 = '';

$output519 .= '
                <div class="media">
                    <div class="media-left">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$array522 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.creatorRecord.icon', $array522);
};
$arguments520 = array();
$arguments520['value'] = NULL;

$output519 .= isset($arguments520['value']) ? $arguments520['value'] : $renderChildrenClosure521();

$output519 .= '
                    </div>
                    <div class="media-body">
                        <strong>';
$array523 = array (
);
$output519 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.creatorRecord.username', $array523)]);

$output519 .= '</strong><br>
                        ';
$array524 = array (
);
$output519 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.creatorRecord.realName', $array524)]);

$output519 .= '
                    </div>
                </div>
            ';
return $output519;
};
$arguments514 = array();
$arguments514['then'] = NULL;
$arguments514['else'] = NULL;
$arguments514['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array516 = array();
$array517 = array (
);$array516['0'] = $renderingContext->getVariableProvider()->getByPath('row.creatorRecord', $array517);

$expression518 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments514['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression518(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array516)
					),
					$renderingContext
				);
$arguments514['__thenClosure'] = $renderChildrenClosure515;

$output512 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output512 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
$output530 = '';

$output530 .= '
                ';
$array531 = array (
);
$output530 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.value', $array531)]);

$output530 .= '
            ';
return $output530;
};
$arguments525 = array();
$arguments525['then'] = NULL;
$arguments525['else'] = NULL;
$arguments525['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array527 = array();
$array528 = array (
);$array527['0'] = $renderingContext->getVariableProvider()->getByPath('row.value', $array528);

$expression529 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments525['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression529(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array527)
					),
					$renderingContext
				);
$arguments525['__thenClosure'] = $renderChildrenClosure526;

$output512 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output512 .= '
        </td>
    </tr>
';
return $output512;
};
$arguments510 = array();
$arguments510['name'] = NULL;
$arguments510['name'] = 'extraFieldRow';

$output183 .= NULL;

$output183 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$output534 = '';

$output534 .= '
    <tr>
        <th class="col-nowrap">';
$array535 = array (
);
$output534 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel', $array535)]);

$output534 .= '</th>
        <td>';
$array536 = array (
);
$output534 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldValue', $array536)]);

$output534 .= '</td>
    </tr>
';
return $output534;
};
$arguments532 = array();
$arguments532['name'] = NULL;
$arguments532['name'] = 'fieldRow';

$output183 .= NULL;

$output183 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
$output539 = '';

$output539 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
$output572 = '';

$output572 .= '
                <td class="col-icon"><a href="';
$array573 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array573)]);

$output572 .= '" title="id=';
$array574 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array574)]);

$output572 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$array577 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array577);
};
$arguments575 = array();
$arguments575['value'] = NULL;

$output572 .= isset($arguments575['value']) ? $arguments575['value'] : $renderChildrenClosure576();

$output572 .= '</a></td>
                <td class="col-title"><a href="';
$array578 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array578)]);

$output572 .= '" title="[id=';
$array579 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array579)]);

$output572 .= '] ';
$array580 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array580)]);

$output572 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$array584 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array584)]);
};
$arguments581 = array();
$arguments581['maxCharacters'] = NULL;
$arguments581['append'] = '&hellip;';
$arguments581['respectWordBoundaries'] = true;
$arguments581['respectHtml'] = true;
$array583 = array (
);$arguments581['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array583);

$output572 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output572 .= '</a></td>
                <td>';
$array585 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array585)]);

$output572 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments586 = array();
$arguments586['key'] = NULL;
$arguments586['id'] = NULL;
$arguments586['default'] = NULL;
$arguments586['arguments'] = NULL;
$arguments586['extensionName'] = NULL;
$arguments586['languageKey'] = NULL;
$arguments586['alternativeLanguageKeys'] = NULL;
$arguments586['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext)]);

$output572 .= ': ';
$array588 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array588)]);

$output572 .= ' (uid=';
$array589 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array589)]);

$output572 .= ')">
                        ';
$array590 = array (
);
$output572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array590)]);

$output572 .= '
                    </span></td>
            ';
return $output572;
};
$arguments570 = array();

$output569 .= '';

$output569 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
$output593 = '';

$output593 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments594 = array();
$arguments594['key'] = NULL;
$arguments594['id'] = NULL;
$arguments594['default'] = NULL;
$arguments594['arguments'] = NULL;
$arguments594['extensionName'] = NULL;
$arguments594['languageKey'] = NULL;
$arguments594['alternativeLanguageKeys'] = NULL;
$arguments594['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext)]);

$output593 .= ' (uid=';
$array596 = array (
);
$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array596)]);

$output593 .= '</td>
                <td>';
$array597 = array (
);
$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array597)]);

$output593 .= '</td>
                <td></td>
            ';
return $output593;
};
$arguments591 = array();
$arguments591['if'] = NULL;

$output569 .= '';

$output569 .= '
        ';
return $output569;
};
$arguments540 = array();
$arguments540['then'] = NULL;
$arguments540['else'] = NULL;
$arguments540['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array566 = array();
$array567 = array (
);$array566['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array567);

$expression568 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments540['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression568(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array566)
					),
					$renderingContext
				);
$arguments540['__thenClosure'] = function() use ($renderingContext, $self) {
$output542 = '';

$output542 .= '
                <td class="col-icon"><a href="';
$array543 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array543)]);

$output542 .= '" title="id=';
$array544 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array544)]);

$output542 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
$array547 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array547);
};
$arguments545 = array();
$arguments545['value'] = NULL;

$output542 .= isset($arguments545['value']) ? $arguments545['value'] : $renderChildrenClosure546();

$output542 .= '</a></td>
                <td class="col-title"><a href="';
$array548 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array548)]);

$output542 .= '" title="[id=';
$array549 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array549)]);

$output542 .= '] ';
$array550 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array550)]);

$output542 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
$array554 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array554)]);
};
$arguments551 = array();
$arguments551['maxCharacters'] = NULL;
$arguments551['append'] = '&hellip;';
$arguments551['respectWordBoundaries'] = true;
$arguments551['respectHtml'] = true;
$array553 = array (
);$arguments551['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array553);

$output542 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext);

$output542 .= '</a></td>
                <td>';
$array555 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array555)]);

$output542 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments556 = array();
$arguments556['key'] = NULL;
$arguments556['id'] = NULL;
$arguments556['default'] = NULL;
$arguments556['arguments'] = NULL;
$arguments556['extensionName'] = NULL;
$arguments556['languageKey'] = NULL;
$arguments556['alternativeLanguageKeys'] = NULL;
$arguments556['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext)]);

$output542 .= ': ';
$array558 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array558)]);

$output542 .= ' (uid=';
$array559 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array559)]);

$output542 .= ')">
                        ';
$array560 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array560)]);

$output542 .= '
                    </span></td>
            ';
return $output542;
};
$arguments540['__elseClosures'][] = function() use ($renderingContext, $self) {
$output561 = '';

$output561 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
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
$arguments562['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext)]);

$output561 .= ' (uid=';
$array564 = array (
);
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array564)]);

$output561 .= '</td>
                <td>';
$array565 = array (
);
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array565)]);

$output561 .= '</td>
                <td></td>
            ';
return $output561;
};

$output539 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output539 .= '
        <td title="';
$array598 = array (
);
$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array598)]);

$output539 .= '" class="col-responsive">';
$array599 = array (
);
$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array599)]);

$output539 .= '</td>
        <td>';
$array600 = array (
);
$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array600)]);

$output539 .= '</td>
        <td>';
$array601 = array (
);
$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array601)]);

$output539 .= '</td>
        <td>';
$array602 = array (
);
$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array602)]);

$output539 .= '</td>
        <td>';
$array603 = array (
);
$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array603)]);

$output539 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['section'] = NULL;
$arguments604['partial'] = NULL;
$arguments604['delegate'] = NULL;
$arguments604['renderable'] = NULL;
$arguments604['arguments'] = array (
);
$arguments604['optional'] = false;
$arguments604['default'] = NULL;
$arguments604['contentAs'] = NULL;
$arguments604['debug'] = true;
$arguments604['section'] = 'action';
// Rendering Array
$array606 = array();
$array607 = array (
);$array606['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array607);
$arguments604['arguments'] = $array606;

$output539 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext);

$output539 .= '
        </td>
    </tr>
';
return $output539;
};
$arguments537 = array();
$arguments537['name'] = NULL;
$arguments537['name'] = 'refLineRow';

$output183 .= NULL;

$output183 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$output610 = '';

$output610 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$output636 = '';

$output636 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
$output639 = '';

$output639 .= '
                <td class="col-icon"><a href="';
$array640 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array640)]);

$output639 .= '" title="id=';
$array641 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array641)]);

$output639 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$array644 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array644);
};
$arguments642 = array();
$arguments642['value'] = NULL;

$output639 .= isset($arguments642['value']) ? $arguments642['value'] : $renderChildrenClosure643();

$output639 .= '</a></td>
                <td class="col-title"><a href="';
$array645 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array645)]);

$output639 .= '" title="[id=';
$array646 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array646)]);

$output639 .= '] ';
$array647 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array647)]);

$output639 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
$array651 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array651)]);
};
$arguments648 = array();
$arguments648['maxCharacters'] = NULL;
$arguments648['append'] = '&hellip;';
$arguments648['respectWordBoundaries'] = true;
$arguments648['respectHtml'] = true;
$array650 = array (
);$arguments648['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array650);

$output639 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output639 .= '</a></td>
                <td>';
$array652 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array652)]);

$output639 .= '</td>
                <td>';
$array653 = array (
);
$output639 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array653)]);

$output639 .= '</td>
            ';
return $output639;
};
$arguments637 = array();

$output636 .= '';

$output636 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['key'] = NULL;
$arguments657['id'] = NULL;
$arguments657['default'] = NULL;
$arguments657['arguments'] = NULL;
$arguments657['extensionName'] = NULL;
$arguments657['languageKey'] = NULL;
$arguments657['alternativeLanguageKeys'] = NULL;
$arguments657['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext)]);

$output656 .= ' (uid=';
$array659 = array (
);
$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array659)]);

$output656 .= '</td>
                <td>';
$array660 = array (
);
$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array660)]);

$output656 .= '</td>
                <td></td>
            ';
return $output656;
};
$arguments654 = array();
$arguments654['if'] = NULL;

$output636 .= '';

$output636 .= '
        ';
return $output636;
};
$arguments611 = array();
$arguments611['then'] = NULL;
$arguments611['else'] = NULL;
$arguments611['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array633 = array();
$array634 = array (
);$array633['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array634);

$expression635 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments611['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression635(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array633)
					),
					$renderingContext
				);
$arguments611['__thenClosure'] = function() use ($renderingContext, $self) {
$output613 = '';

$output613 .= '
                <td class="col-icon"><a href="';
$array614 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array614)]);

$output613 .= '" title="id=';
$array615 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array615)]);

$output613 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
$array618 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array618);
};
$arguments616 = array();
$arguments616['value'] = NULL;

$output613 .= isset($arguments616['value']) ? $arguments616['value'] : $renderChildrenClosure617();

$output613 .= '</a></td>
                <td class="col-title"><a href="';
$array619 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array619)]);

$output613 .= '" title="[id=';
$array620 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array620)]);

$output613 .= '] ';
$array621 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array621)]);

$output613 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
$array625 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array625)]);
};
$arguments622 = array();
$arguments622['maxCharacters'] = NULL;
$arguments622['append'] = '&hellip;';
$arguments622['respectWordBoundaries'] = true;
$arguments622['respectHtml'] = true;
$array624 = array (
);$arguments622['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array624);

$output613 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);

$output613 .= '</a></td>
                <td>';
$array626 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array626)]);

$output613 .= '</td>
                <td>';
$array627 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array627)]);

$output613 .= '</td>
            ';
return $output613;
};
$arguments611['__elseClosures'][] = function() use ($renderingContext, $self) {
$output628 = '';

$output628 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments629 = array();
$arguments629['key'] = NULL;
$arguments629['id'] = NULL;
$arguments629['default'] = NULL;
$arguments629['arguments'] = NULL;
$arguments629['extensionName'] = NULL;
$arguments629['languageKey'] = NULL;
$arguments629['alternativeLanguageKeys'] = NULL;
$arguments629['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output628 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext)]);

$output628 .= ' (uid=';
$array631 = array (
);
$output628 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array631)]);

$output628 .= '</td>
                <td>';
$array632 = array (
);
$output628 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array632)]);

$output628 .= '</td>
                <td></td>
            ';
return $output628;
};

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);

$output610 .= '
        <td title="';
$array661 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array661)]);

$output610 .= '" class="col-responsive">';
$array662 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array662)]);

$output610 .= '</td>
        <td>';
$array663 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array663)]);

$output610 .= '</td>
        <td>';
$array664 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array664)]);

$output610 .= '</td>
        <td>';
$array665 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array665)]);

$output610 .= '</td>
        <td>';
$array666 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array666)]);

$output610 .= '</td>
        <td>';
$array667 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_string', $array667)]);

$output610 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments668 = array();
$arguments668['section'] = NULL;
$arguments668['partial'] = NULL;
$arguments668['delegate'] = NULL;
$arguments668['renderable'] = NULL;
$arguments668['arguments'] = array (
);
$arguments668['optional'] = false;
$arguments668['default'] = NULL;
$arguments668['contentAs'] = NULL;
$arguments668['debug'] = true;
$arguments668['section'] = 'action';
// Rendering Array
$array670 = array();
$array671 = array (
);$array670['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array671);
$arguments668['arguments'] = $array670;

$output610 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext);

$output610 .= '
        </td>
    </tr>
';
return $output610;
};
$arguments608 = array();
$arguments608['name'] = NULL;
$arguments608['name'] = 'refFromLineRow';

$output183 .= NULL;

$output183 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure673 = function() use ($renderingContext, $self) {
$output674 = '';

$output674 .= '
    <div class="btn-group" role="group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
$output680 = '';

$output680 .= '
            <a class="btn btn-default btn-sm" href="#" onclick="';
$array681 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.viewOnClick', $array681)]);

$output680 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments682 = array();
$arguments682['key'] = NULL;
$arguments682['id'] = NULL;
$arguments682['default'] = NULL;
$arguments682['arguments'] = NULL;
$arguments682['extensionName'] = NULL;
$arguments682['languageKey'] = NULL;
$arguments682['alternativeLanguageKeys'] = NULL;
$arguments682['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showPage';

$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext)]);

$output680 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments684 = array();
$arguments684['identifier'] = NULL;
$arguments684['size'] = 'small';
$arguments684['overlay'] = NULL;
$arguments684['state'] = 'default';
$arguments684['alternativeMarkupIdentifier'] = NULL;
$arguments684['identifier'] = 'actions-document-view';
$arguments684['size'] = 'small';

$output680 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments684, $renderChildrenClosure685, $renderingContext);

$output680 .= '
            </a>
        ';
return $output680;
};
$arguments675 = array();
$arguments675['then'] = NULL;
$arguments675['else'] = NULL;
$arguments675['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array677 = array();
$array678 = array (
);$array677['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array678);

$expression679 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments675['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression679(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array677)
					),
					$renderingContext
				);
$arguments675['__thenClosure'] = $renderChildrenClosure676;

$output674 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext);

$output674 .= '
        <a class="btn btn-default btn-sm" href="';
$array686 = array (
);
$output674 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordEditUrl', $array686)]);

$output674 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments687 = array();
$arguments687['identifier'] = NULL;
$arguments687['size'] = 'small';
$arguments687['overlay'] = NULL;
$arguments687['state'] = 'default';
$arguments687['alternativeMarkupIdentifier'] = NULL;
$arguments687['identifier'] = 'actions-open';
$arguments687['size'] = 'small';

$output674 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output674 .= '
        </a>
    </div>
    <div class="btn-group" role="group">
        <a class="btn btn-default btn-sm" href="';
$array689 = array (
);
$output674 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordHistoryUrl', $array689)]);

$output674 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments690 = array();
$arguments690['identifier'] = NULL;
$arguments690['size'] = 'small';
$arguments690['overlay'] = NULL;
$arguments690['state'] = 'default';
$arguments690['alternativeMarkupIdentifier'] = NULL;
$arguments690['identifier'] = 'actions-document-history-open';
$arguments690['size'] = 'small';

$output674 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext);

$output674 .= '
        </a>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
$output697 = '';

$output697 .= '
        <div class="btn-group" role="group">
            <a class="btn btn-default btn-sm" href="';
$array698 = array (
);
$output697 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array698)]);

$output697 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure700 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments699 = array();
$arguments699['key'] = NULL;
$arguments699['id'] = NULL;
$arguments699['default'] = NULL;
$arguments699['arguments'] = NULL;
$arguments699['extensionName'] = NULL;
$arguments699['languageKey'] = NULL;
$arguments699['alternativeLanguageKeys'] = NULL;
$arguments699['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showList';

$output697 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments699, $renderChildrenClosure700, $renderingContext)]);

$output697 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments701 = array();
$arguments701['identifier'] = NULL;
$arguments701['size'] = 'small';
$arguments701['overlay'] = NULL;
$arguments701['state'] = 'default';
$arguments701['alternativeMarkupIdentifier'] = NULL;
$arguments701['identifier'] = 'actions-system-list-open';
$arguments701['size'] = 'small';

$output697 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext);

$output697 .= '
            </a>
        </div>
    ';
return $output697;
};
$arguments692 = array();
$arguments692['then'] = NULL;
$arguments692['else'] = NULL;
$arguments692['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array694 = array();
$array695 = array (
);$array694['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array695);

$expression696 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments692['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression696(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array694)
					),
					$renderingContext
				);
$arguments692['__thenClosure'] = $renderChildrenClosure693;

$output674 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);

$output674 .= '
';
return $output674;
};
$arguments672 = array();
$arguments672['name'] = NULL;
$arguments672['name'] = 'action';

$output183 .= NULL;

$output183 .= '
';

return $output183;
}


}
#