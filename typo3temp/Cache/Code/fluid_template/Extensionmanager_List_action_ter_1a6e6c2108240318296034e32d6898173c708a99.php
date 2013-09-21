<?php
class FluidCache_Extensionmanager_List_action_ter_1a6e6c2108240318296034e32d6898173c708a99 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section docheader-buttons
 */
public function section_82416aa889dc891ac3382685ebae30417e96849a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
';
}
/**
 * section module-headline
 */
public function section_448d1ad99edd62d80682fc5d4e038788bb925e4c(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'getExtensions';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Get Extensions';
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '</h2>
';

return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';

$output4 .= '
	<div class="headerRow ui-helper-clearfix">
		<div class="typo3-extensionmanager-headerRowLeft">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments5 = array();
$arguments5['class'] = 'typo3-extensionmanager-searchTerForm';
$arguments5['action'] = 'ter';
$arguments5['additionalAttributes'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['object'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = false;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['fieldNamePrefix'] = NULL;
$arguments5['actionUri'] = NULL;
$arguments5['objectName'] = NULL;
$arguments5['hiddenFieldClassName'] = NULL;
$arguments5['enctype'] = NULL;
$arguments5['method'] = NULL;
$arguments5['name'] = NULL;
$arguments5['onreset'] = NULL;
$arguments5['onsubmit'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments8 = array();
$arguments8['name'] = 'search';
$arguments8['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'search', $renderingContext);
$arguments8['additionalAttributes'] = NULL;
$arguments8['required'] = NULL;
$arguments8['type'] = 'text';
$arguments8['placeholder'] = NULL;
$arguments8['property'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper10->setArguments($arguments8);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output7 .= $viewHelper10->initializeArgumentsAndRender();

$output7 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments11 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'searchTemplate.submitButton';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11['value'] = $viewHelper14->initializeArgumentsAndRender();
$arguments11['additionalAttributes'] = NULL;
$arguments11['name'] = NULL;
$arguments11['property'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper16->setArguments($arguments11);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output7 .= $viewHelper16->initializeArgumentsAndRender();

$output7 .= '
			';
return $output7;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper17->setArguments($arguments5);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output4 .= $viewHelper17->initializeArgumentsAndRender();

$output4 .= '
		</div>
		<div class="typo3-extensionmanager-headerRowRight">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments18 = array();
$arguments18['partial'] = 'List/UpdateFromTer';
$arguments18['section'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output4 .= $viewHelper20->initializeArgumentsAndRender();

$output4 .= '
		</div>
	</div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments21 = array();
// Rendering Boolean node
$arguments21['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'search', $renderingContext));
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments24 = array();
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
			<table id="terSearchTable" class="typo3-extension-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments27 = array();
$arguments27['partial'] = 'List/TerTable';
// Rendering Array
$array28 = array();
$array28['paginatedExtensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array28['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments27['arguments'] = $array28;
$arguments27['section'] = NULL;
$arguments27['optional'] = false;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper30->setArguments($arguments27);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output26 .= $viewHelper30->initializeArgumentsAndRender();

$output26 .= '
			</table>
		';
return $output26;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper31->setArguments($arguments24);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output23 .= $viewHelper31->initializeArgumentsAndRender();

$output23 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments32 = array();
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
			<div id="terTableWrapper">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments35 = array();
$arguments35['partial'] = 'List/TerPaginator';
// Rendering Array
$array36 = array();
$array36['extensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array36['showVersionList'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'showVersionList', $renderingContext);
$array36['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments35['arguments'] = $array36;
$arguments35['section'] = NULL;
$arguments35['optional'] = false;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper38->setArguments($arguments35);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output34 .= $viewHelper38->initializeArgumentsAndRender();

$output34 .= '
				<div class="splash-receivedata x-mask-loading"><div class="spinner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39 = array();
$arguments39['key'] = 'extensionList.updateFromTer.label';
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output34 .= $viewHelper41->initializeArgumentsAndRender();

$output34 .= '</div></div>
			</div>
		';
return $output34;
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper42->setArguments($arguments32);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output23 .= $viewHelper42->initializeArgumentsAndRender();

$output23 .= '
	';
return $output23;
};
$arguments21['__thenClosure'] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
			<table id="terSearchTable" class="typo3-extension-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments44 = array();
$arguments44['partial'] = 'List/TerTable';
// Rendering Array
$array45 = array();
$array45['paginatedExtensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array45['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments44['arguments'] = $array45;
$arguments44['section'] = NULL;
$arguments44['optional'] = false;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper47->setArguments($arguments44);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output43 .= $viewHelper47->initializeArgumentsAndRender();

$output43 .= '
			</table>
		';
return $output43;
};
$arguments21['__elseClosure'] = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
			<div id="terTableWrapper">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments49 = array();
$arguments49['partial'] = 'List/TerPaginator';
// Rendering Array
$array50 = array();
$array50['extensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array50['showVersionList'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'showVersionList', $renderingContext);
$array50['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments49['arguments'] = $array50;
$arguments49['section'] = NULL;
$arguments49['optional'] = false;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper52->setArguments($arguments49);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output48 .= $viewHelper52->initializeArgumentsAndRender();

$output48 .= '
				<div class="splash-receivedata x-mask-loading"><div class="spinner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = 'extensionList.updateFromTer.label';
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output48 .= $viewHelper55->initializeArgumentsAndRender();

$output48 .= '</div></div>
			</div>
		';
return $output48;
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper56->setArguments($arguments21);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output4 .= $viewHelper56->initializeArgumentsAndRender();

$output4 .= '

';

return $output4;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output57 = '';

$output57 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments58 = array();
$arguments58['name'] = 'main';
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output57 .= $viewHelper60->initializeArgumentsAndRender();

$output57 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments61 = array();
$arguments61['name'] = 'docheader-buttons';
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return '
';
};

$output57 .= '';

$output57 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments63 = array();
$arguments63['name'] = 'module-headline';
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = 'getExtensions';
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return 'Get Extensions';
};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper68->setArguments($arguments66);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output65 .= $viewHelper68->initializeArgumentsAndRender();

$output65 .= '</h2>
';
return $output65;
};

$output57 .= '';

$output57 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments69 = array();
$arguments69['name'] = 'Content';
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
	<div class="headerRow ui-helper-clearfix">
		<div class="typo3-extensionmanager-headerRowLeft">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments72 = array();
$arguments72['class'] = 'typo3-extensionmanager-searchTerForm';
$arguments72['action'] = 'ter';
$arguments72['additionalAttributes'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['controller'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['pluginName'] = NULL;
$arguments72['pageUid'] = NULL;
$arguments72['object'] = NULL;
$arguments72['pageType'] = 0;
$arguments72['noCache'] = false;
$arguments72['noCacheHash'] = false;
$arguments72['section'] = '';
$arguments72['format'] = '';
$arguments72['additionalParams'] = array (
);
$arguments72['absolute'] = false;
$arguments72['addQueryString'] = false;
$arguments72['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments72['fieldNamePrefix'] = NULL;
$arguments72['actionUri'] = NULL;
$arguments72['objectName'] = NULL;
$arguments72['hiddenFieldClassName'] = NULL;
$arguments72['enctype'] = NULL;
$arguments72['method'] = NULL;
$arguments72['name'] = NULL;
$arguments72['onreset'] = NULL;
$arguments72['onsubmit'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments75 = array();
$arguments75['name'] = 'search';
$arguments75['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'search', $renderingContext);
$arguments75['additionalAttributes'] = NULL;
$arguments75['required'] = NULL;
$arguments75['type'] = 'text';
$arguments75['placeholder'] = NULL;
$arguments75['property'] = NULL;
$arguments75['disabled'] = NULL;
$arguments75['maxlength'] = NULL;
$arguments75['readonly'] = NULL;
$arguments75['size'] = NULL;
$arguments75['errorClass'] = 'f3-form-error';
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper77->setArguments($arguments75);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output74 .= $viewHelper77->initializeArgumentsAndRender();

$output74 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments78 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments79 = array();
$arguments79['key'] = 'searchTemplate.submitButton';
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['htmlEscape'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments78['value'] = $viewHelper81->initializeArgumentsAndRender();
$arguments78['additionalAttributes'] = NULL;
$arguments78['name'] = NULL;
$arguments78['property'] = NULL;
$arguments78['disabled'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper83->setArguments($arguments78);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output74 .= $viewHelper83->initializeArgumentsAndRender();

$output74 .= '
			';
return $output74;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper84->setArguments($arguments72);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output71 .= $viewHelper84->initializeArgumentsAndRender();

$output71 .= '
		</div>
		<div class="typo3-extensionmanager-headerRowRight">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments85 = array();
$arguments85['partial'] = 'List/UpdateFromTer';
$arguments85['section'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['optional'] = false;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper87->setArguments($arguments85);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output71 .= $viewHelper87->initializeArgumentsAndRender();

$output71 .= '
		</div>
	</div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments88 = array();
// Rendering Boolean node
$arguments88['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'search', $renderingContext));
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments91 = array();
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
			<table id="terSearchTable" class="typo3-extension-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments94 = array();
$arguments94['partial'] = 'List/TerTable';
// Rendering Array
$array95 = array();
$array95['paginatedExtensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array95['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments94['arguments'] = $array95;
$arguments94['section'] = NULL;
$arguments94['optional'] = false;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper97->setArguments($arguments94);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output93 .= $viewHelper97->initializeArgumentsAndRender();

$output93 .= '
			</table>
		';
return $output93;
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper98->setArguments($arguments91);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output90 .= $viewHelper98->initializeArgumentsAndRender();

$output90 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments99 = array();
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
			<div id="terTableWrapper">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments102 = array();
$arguments102['partial'] = 'List/TerPaginator';
// Rendering Array
$array103 = array();
$array103['extensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array103['showVersionList'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'showVersionList', $renderingContext);
$array103['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments102['arguments'] = $array103;
$arguments102['section'] = NULL;
$arguments102['optional'] = false;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper105->setArguments($arguments102);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output101 .= $viewHelper105->initializeArgumentsAndRender();

$output101 .= '
				<div class="splash-receivedata x-mask-loading"><div class="spinner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments106 = array();
$arguments106['key'] = 'extensionList.updateFromTer.label';
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['htmlEscape'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper108->setArguments($arguments106);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output101 .= $viewHelper108->initializeArgumentsAndRender();

$output101 .= '</div></div>
			</div>
		';
return $output101;
};
$viewHelper109 = $self->getViewHelper('$viewHelper109', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper109->setArguments($arguments99);
$viewHelper109->setRenderingContext($renderingContext);
$viewHelper109->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output90 .= $viewHelper109->initializeArgumentsAndRender();

$output90 .= '
	';
return $output90;
};
$arguments88['__thenClosure'] = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
			<table id="terSearchTable" class="typo3-extension-list">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments111 = array();
$arguments111['partial'] = 'List/TerTable';
// Rendering Array
$array112 = array();
$array112['paginatedExtensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array112['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments111['arguments'] = $array112;
$arguments111['section'] = NULL;
$arguments111['optional'] = false;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper114->setArguments($arguments111);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output110 .= $viewHelper114->initializeArgumentsAndRender();

$output110 .= '
			</table>
		';
return $output110;
};
$arguments88['__elseClosure'] = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
			<div id="terTableWrapper">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments116 = array();
$arguments116['partial'] = 'List/TerPaginator';
// Rendering Array
$array117 = array();
$array117['extensions'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$array117['showVersionList'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'showVersionList', $renderingContext);
$array117['availableAndInstalled'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'availableAndInstalled', $renderingContext);
$arguments116['arguments'] = $array117;
$arguments116['section'] = NULL;
$arguments116['optional'] = false;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper119->setArguments($arguments116);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output115 .= $viewHelper119->initializeArgumentsAndRender();

$output115 .= '
				<div class="splash-receivedata x-mask-loading"><div class="spinner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments120 = array();
$arguments120['key'] = 'extensionList.updateFromTer.label';
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['htmlEscape'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper122->setArguments($arguments120);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output115 .= $viewHelper122->initializeArgumentsAndRender();

$output115 .= '</div></div>
			</div>
		';
return $output115;
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper123->setArguments($arguments88);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output71 .= $viewHelper123->initializeArgumentsAndRender();

$output71 .= '

';
return $output71;
};

$output57 .= '';

return $output57;
}


}
#1379767691    36656     