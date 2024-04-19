<?php

class BackendUser_action_index_36571309118409d30fa40fb64230f422f925a7fa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * section Buttons
 */
public function section_503d46db37b0db45db898aabed77244252918ca2(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['icon'] = NULL;
$arguments1['title'] = NULL;
$arguments1['disabled'] = false;
$arguments1['showLabel'] = false;
$arguments1['position'] = NULL;
$arguments1['group'] = NULL;
$arguments1['link'] = NULL;
$arguments1['icon'] = 'actions-add';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['id'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:newRecordGeneral';
$arguments1['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['uid'] = NULL;
$arguments5['pid'] = NULL;
$arguments5['table'] = NULL;
$arguments5['returnUrl'] = '';
$arguments5['table'] = 'be_users';
$arguments1['link'] = TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';

return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output7 = '';

$output7 .= '
	<h1>';
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
$arguments8['key'] = 'backendUserListing';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '</h1>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return '
		Listing of users on compare list
	';
};
$arguments10 = array();

$output7 .= NULL;

$output7 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
		<h3>';
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
$arguments18['key'] = 'section.compare';
$arguments18['default'] = 'Compare';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '</h3>
		<div class="table-fit">
			<table id="typo3-backend-user-list-compare" class="table table-hover">
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
						<tr>
							<td>
								<a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array24)]);

$output23 .= '" title="id=';
$array25 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array25)]);

$output23 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['backendUser'] = 0;
$arguments26['size'] = 32;
$arguments26['showIcon'] = false;
$array28 = array (
);$arguments26['backendUser'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array28);
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array29['0'] = 'TRUE';

$expression30 = function($context) {return TRUE;};
$arguments26['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);

$output23 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output23 .= '
								</a>
							</td>
							<td class="col-title">
								';
$array31 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.userName', $array31)]);

$output23 .= '
							</td>
							<td>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['identifier'] = NULL;
$arguments37['size'] = 'small';
$arguments37['overlay'] = NULL;
$arguments37['state'] = 'default';
$arguments37['alternativeMarkupIdentifier'] = NULL;
$arguments37['identifier'] = 'actions-remove';

$output36 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
								';
return $output36;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['name'] = NULL;
$arguments32['rel'] = NULL;
$arguments32['rev'] = NULL;
$arguments32['target'] = NULL;
$arguments32['action'] = NULL;
$arguments32['controller'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['pluginName'] = NULL;
$arguments32['pageUid'] = NULL;
$arguments32['pageType'] = NULL;
$arguments32['noCache'] = NULL;
$arguments32['noCacheHash'] = NULL;
$arguments32['section'] = NULL;
$arguments32['format'] = NULL;
$arguments32['linkAccessRestrictedPages'] = NULL;
$arguments32['additionalParams'] = NULL;
$arguments32['absolute'] = NULL;
$arguments32['addQueryString'] = NULL;
$arguments32['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments32['addQueryStringMethod'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['action'] = 'removeFromCompareList';
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array35);
$arguments32['arguments'] = $array34;
$arguments32['class'] = 'pull-right btn btn-default';

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output23 .= '
							</td>
						</tr>
					';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$array22 = array (
);$arguments20['each'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array22);
$arguments20['as'] = 'compareUser';

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
				</tbody>
			</table>
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['name'] = NULL;
$arguments42['value'] = NULL;
$arguments42['property'] = NULL;
$arguments42['disabled'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'compareUserList';
$arguments44['default'] = 'Compare user list';
$arguments42['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
$arguments42['class'] = 'btn btn-default';

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
		';
return $output41;
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['action'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['controller'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['pluginName'] = NULL;
$arguments39['pageUid'] = NULL;
$arguments39['object'] = NULL;
$arguments39['pageType'] = 0;
$arguments39['noCache'] = false;
$arguments39['noCacheHash'] = false;
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['additionalParams'] = array (
);
$arguments39['absolute'] = false;
$arguments39['addQueryString'] = false;
$arguments39['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments39['addQueryStringMethod'] = 'GET';
$arguments39['fieldNamePrefix'] = NULL;
$arguments39['actionUri'] = NULL;
$arguments39['objectName'] = NULL;
$arguments39['hiddenFieldClassName'] = NULL;
$arguments39['enctype'] = NULL;
$arguments39['method'] = NULL;
$arguments39['name'] = NULL;
$arguments39['onreset'] = NULL;
$arguments39['onsubmit'] = NULL;
$arguments39['target'] = NULL;
$arguments39['novalidate'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['action'] = 'compare';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output17 .= '
		<hr>
	';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array15);

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output7 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return '
		Filter section
	';
};
$arguments46 = array();

$output7 .= NULL;

$output7 .= '
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
$arguments48['partial'] = 'Filters/BackendUser/Index';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array51);
$array52 = array (
);$array50['backendUserGroups'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroups', $array52);
$arguments48['arguments'] = $array50;

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output7 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['section'] = NULL;
$arguments53['partial'] = NULL;
$arguments53['delegate'] = NULL;
$arguments53['renderable'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['optional'] = false;
$arguments53['default'] = NULL;
$arguments53['contentAs'] = NULL;
$arguments53['debug'] = true;
$arguments53['partial'] = 'BackendUser/PaginatedListWidget';
$arguments53['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output7 .= '

';

return $output7;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output56 = '';

$output56 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['name'] = NULL;
$arguments57['name'] = 'Default';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output56 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['icon'] = NULL;
$arguments62['title'] = NULL;
$arguments62['disabled'] = false;
$arguments62['showLabel'] = false;
$arguments62['position'] = NULL;
$arguments62['group'] = NULL;
$arguments62['link'] = NULL;
$arguments62['icon'] = 'actions-add';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['id'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:newRecordGeneral';
$arguments62['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['uid'] = NULL;
$arguments66['pid'] = NULL;
$arguments66['table'] = NULL;
$arguments66['returnUrl'] = '';
$arguments66['table'] = 'be_users';
$arguments62['link'] = TYPO3\CMS\Backend\ViewHelpers\Uri\NewRecordViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLayout\Button\LinkButtonViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output61 .= '
';
return $output61;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['name'] = 'Buttons';

$output56 .= NULL;

$output56 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
	<h1>';
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
$arguments71['key'] = 'backendUserListing';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '</h1>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return '
		Listing of users on compare list
	';
};
$arguments73 = array();

$output70 .= NULL;

$output70 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
		<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'section.compare';
$arguments81['default'] = 'Compare';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output80 .= '</h3>
		<div class="table-fit">
			<table id="typo3-backend-user-list-compare" class="table table-hover">
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
						<tr>
							<td>
								<a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array87)]);

$output86 .= '" title="id=';
$array88 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array88)]);

$output86 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['backendUser'] = 0;
$arguments89['size'] = 32;
$arguments89['showIcon'] = false;
$array91 = array (
);$arguments89['backendUser'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array91);
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array92['0'] = 'TRUE';

$expression93 = function($context) {return TRUE;};
$arguments89['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);

$output86 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output86 .= '
								</a>
							</td>
							<td class="col-title">
								';
$array94 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.userName', $array94)]);

$output86 .= '
							</td>
							<td>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['identifier'] = NULL;
$arguments100['size'] = 'small';
$arguments100['overlay'] = NULL;
$arguments100['state'] = 'default';
$arguments100['alternativeMarkupIdentifier'] = NULL;
$arguments100['identifier'] = 'actions-remove';

$output99 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
								';
return $output99;
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$arguments95['action'] = NULL;
$arguments95['controller'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['pluginName'] = NULL;
$arguments95['pageUid'] = NULL;
$arguments95['pageType'] = NULL;
$arguments95['noCache'] = NULL;
$arguments95['noCacheHash'] = NULL;
$arguments95['section'] = NULL;
$arguments95['format'] = NULL;
$arguments95['linkAccessRestrictedPages'] = NULL;
$arguments95['additionalParams'] = NULL;
$arguments95['absolute'] = NULL;
$arguments95['addQueryString'] = NULL;
$arguments95['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments95['addQueryStringMethod'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['action'] = 'removeFromCompareList';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array98);
$arguments95['arguments'] = $array97;
$arguments95['class'] = 'pull-right btn btn-default';

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output86 .= '
							</td>
						</tr>
					';
return $output86;
};
$arguments83 = array();
$arguments83['each'] = NULL;
$arguments83['as'] = NULL;
$arguments83['key'] = NULL;
$arguments83['reverse'] = false;
$arguments83['iteration'] = NULL;
$array85 = array (
);$arguments83['each'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array85);
$arguments83['as'] = 'compareUser';

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output80 .= '
				</tbody>
			</table>
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['name'] = NULL;
$arguments105['value'] = NULL;
$arguments105['property'] = NULL;
$arguments105['disabled'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['key'] = NULL;
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['languageKey'] = NULL;
$arguments107['alternativeLanguageKeys'] = NULL;
$arguments107['key'] = 'compareUserList';
$arguments107['default'] = 'Compare user list';
$arguments105['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$arguments105['class'] = 'btn btn-default';

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
		';
return $output104;
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['action'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['controller'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['pluginName'] = NULL;
$arguments102['pageUid'] = NULL;
$arguments102['object'] = NULL;
$arguments102['pageType'] = 0;
$arguments102['noCache'] = false;
$arguments102['noCacheHash'] = false;
$arguments102['section'] = '';
$arguments102['format'] = '';
$arguments102['additionalParams'] = array (
);
$arguments102['absolute'] = false;
$arguments102['addQueryString'] = false;
$arguments102['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments102['addQueryStringMethod'] = 'GET';
$arguments102['fieldNamePrefix'] = NULL;
$arguments102['actionUri'] = NULL;
$arguments102['objectName'] = NULL;
$arguments102['hiddenFieldClassName'] = NULL;
$arguments102['enctype'] = NULL;
$arguments102['method'] = NULL;
$arguments102['name'] = NULL;
$arguments102['onreset'] = NULL;
$arguments102['onsubmit'] = NULL;
$arguments102['target'] = NULL;
$arguments102['novalidate'] = NULL;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['action'] = 'compare';

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output80 .= '
		<hr>
	';
return $output80;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array78);

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output70 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return '
		Filter section
	';
};
$arguments109 = array();

$output70 .= NULL;

$output70 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['section'] = NULL;
$arguments111['partial'] = NULL;
$arguments111['delegate'] = NULL;
$arguments111['renderable'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['optional'] = false;
$arguments111['default'] = NULL;
$arguments111['contentAs'] = NULL;
$arguments111['debug'] = true;
$arguments111['partial'] = 'Filters/BackendUser/Index';
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array114);
$array115 = array (
);$array113['backendUserGroups'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroups', $array115);
$arguments111['arguments'] = $array113;

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output70 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['section'] = NULL;
$arguments116['partial'] = NULL;
$arguments116['delegate'] = NULL;
$arguments116['renderable'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['optional'] = false;
$arguments116['default'] = NULL;
$arguments116['contentAs'] = NULL;
$arguments116['debug'] = true;
$arguments116['partial'] = 'BackendUser/PaginatedListWidget';
$arguments116['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output70 .= '

';
return $output70;
};
$arguments68 = array();
$arguments68['name'] = NULL;
$arguments68['name'] = 'Content';

$output56 .= NULL;

$output56 .= '


';

return $output56;
}


}
#