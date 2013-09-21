<?php
class FluidCache_Extensionmanager_List_action_index_173de5725e8a3ab6fde9a895cb38d2e0d5f84a50 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments2 = array();
$arguments2['action'] = 'form';
$arguments2['controller'] = 'UploadExtensionFile';
$arguments2['arguments'] = array (
);
$arguments2['extensionName'] = NULL;
$arguments2['pluginName'] = NULL;
$arguments2['pageUid'] = NULL;
$arguments2['pageType'] = 0;
$arguments2['noCache'] = false;
$arguments2['noCacheHash'] = false;
$arguments2['section'] = '';
$arguments2['format'] = '';
$arguments2['linkAccessRestrictedPages'] = false;
$arguments2['additionalParams'] = array (
);
$arguments2['absolute'] = false;
$arguments2['addQueryString'] = false;
$arguments2['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper4->setArguments($arguments2);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments1['uri'] = $viewHelper4->initializeArgumentsAndRender();
$arguments1['icon'] = 'actions-edit-upload';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments5 = array();
$arguments5['key'] = 'extensionList.uploadExtension';
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1['title'] = $viewHelper7->initializeArgumentsAndRender();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper9->setArguments($arguments1);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * section module-headline
 */
public function section_448d1ad99edd62d80682fc5d4e038788bb925e4c(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output10 = '';

$output10 .= '
	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'manageExtensions';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return 'Manage extensions';
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output10 .= $viewHelper13->initializeArgumentsAndRender();

$output10 .= '</h2>
';

return $output10;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';

$output14 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments15 = array();
$arguments15['renderMode'] = 'div';
$arguments15['additionalAttributes'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output14 .= $viewHelper17->initializeArgumentsAndRender();

$output14 .= '

	<div class="uploadForm" style="display: none;">
		<span class="spinner"></span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'extensionList.loading';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper20->initializeArgumentsAndRender();

$output14 .= '
	</div>

	<div class="headerRow ui-helper-clearfix">
		<div class="typo3-extensionmanager-headerRowLeft">
		</div>
		<div class="typo3-extensionmanager-headerRowRight">
		</div>
	</div>
	<table id="typo3-extension-list" class="typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'extensionList.header.title.update';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper23->initializeArgumentsAndRender();

$output14 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'extensionList.header.update';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper26->initializeArgumentsAndRender();

$output14 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['key'] = 'extensionList.header.title.activate';
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper29->initializeArgumentsAndRender();

$output14 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments30 = array();
$arguments30['key'] = 'extensionList.header.activate';
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper32->initializeArgumentsAndRender();

$output14 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments33 = array();
$arguments33['key'] = 'extensionList.header.extensionName';
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper35->setArguments($arguments33);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper35->initializeArgumentsAndRender();

$output14 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments36 = array();
$arguments36['key'] = 'extensionList.header.extensionKey';
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper38->initializeArgumentsAndRender();

$output14 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39 = array();
$arguments39['key'] = 'extensionList.header.extensionVersion';
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

$output14 .= $viewHelper41->initializeArgumentsAndRender();

$output14 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments42 = array();
$arguments42['key'] = 'extensionList.header.extensionActions';
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['htmlEscape'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper44->initializeArgumentsAndRender();

$output14 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments45 = array();
$arguments45['key'] = 'extensionList.header.extensionState';
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['htmlEscape'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output14 .= $viewHelper47->initializeArgumentsAndRender();

$output14 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments48 = array();
$arguments48['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$arguments48['as'] = 'extension';
$arguments48['key'] = 'extensionKey';
$arguments48['reverse'] = false;
$arguments48['iteration'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments51 = array();
// Rendering Boolean node
$arguments51['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject', $renderingContext));
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments54 = array();
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output56 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));

$output56 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments60 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.reviewState', $renderingContext);
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());
$arguments60['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode'])), -1);
$arguments60['then'] = 'insecure';
$arguments60['else'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper65->setArguments($arguments60);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output56 .= $viewHelper65->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments66 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.reviewState', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());
$arguments66['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode'])), -2);
$arguments66['then'] = 'outdated';
$arguments66['else'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper71->setArguments($arguments66);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output56 .= $viewHelper71->initializeArgumentsAndRender();

$output56 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments72 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.installed', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());
$arguments72['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode'])));
$arguments72['then'] = '';
$arguments72['else'] = 'inactive';
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper77->setArguments($arguments72);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output56 .= $viewHelper77->initializeArgumentsAndRender();

$output56 .= '">
					';
return $output56;
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper78->setArguments($arguments54);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output53 .= $viewHelper78->initializeArgumentsAndRender();

$output53 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments79 = array();
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());

$output81 .= (!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode']));

$output81 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments85 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.installed', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());
$arguments85['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode'])));
$arguments85['then'] = '';
$arguments85['else'] = 'inactive';
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper90->setArguments($arguments85);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output81 .= $viewHelper90->initializeArgumentsAndRender();

$output81 .= '">
					';
return $output81;
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper91->setArguments($arguments79);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output53 .= $viewHelper91->initializeArgumentsAndRender();

$output53 .= '
				';
return $output53;
};
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output92 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output92 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments96 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.reviewState', $renderingContext);
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());
$arguments96['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode'])), -1);
$arguments96['then'] = 'insecure';
$arguments96['else'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper101->setArguments($arguments96);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output92 .= $viewHelper101->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments102 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments103 = array();
$arguments103['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.reviewState', $renderingContext);
$arguments103['keepQuotes'] = false;
$arguments103['encoding'] = NULL;
$arguments103['doubleEncode'] = true;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$value105 = ($arguments103['value'] !== NULL ? $arguments103['value'] : $renderChildrenClosure104());
$arguments102['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value105) ? $value105 : htmlspecialchars($value105, ($arguments103['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments103['encoding'] !== NULL ? $arguments103['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments103['doubleEncode'])), -2);
$arguments102['then'] = 'outdated';
$arguments102['else'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper107->setArguments($arguments102);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output92 .= $viewHelper107->initializeArgumentsAndRender();

$output92 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments108 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments109 = array();
$arguments109['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.installed', $renderingContext);
$arguments109['keepQuotes'] = false;
$arguments109['encoding'] = NULL;
$arguments109['doubleEncode'] = true;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$value111 = ($arguments109['value'] !== NULL ? $arguments109['value'] : $renderChildrenClosure110());
$arguments108['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value111) ? $value111 : htmlspecialchars($value111, ($arguments109['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments109['encoding'] !== NULL ? $arguments109['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments109['doubleEncode'])));
$arguments108['then'] = '';
$arguments108['else'] = 'inactive';
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper113->setArguments($arguments108);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output92 .= $viewHelper113->initializeArgumentsAndRender();

$output92 .= '">
					';
return $output92;
};
$arguments51['__elseClosure'] = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = NULL;
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());

$output114 .= (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments115['encoding'] !== NULL ? $arguments115['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments115['doubleEncode']));

$output114 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments118 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments119 = array();
$arguments119['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.installed', $renderingContext);
$arguments119['keepQuotes'] = false;
$arguments119['encoding'] = NULL;
$arguments119['doubleEncode'] = true;
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$value121 = ($arguments119['value'] !== NULL ? $arguments119['value'] : $renderChildrenClosure120());
$arguments118['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value121) ? $value121 : htmlspecialchars($value121, ($arguments119['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments119['encoding'] !== NULL ? $arguments119['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments119['doubleEncode'])));
$arguments118['then'] = '';
$arguments118['else'] = 'inactive';
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper123->setArguments($arguments118);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output114 .= $viewHelper123->initializeArgumentsAndRender();

$output114 .= '">
					';
return $output114;
};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper124->setArguments($arguments51);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output50 .= $viewHelper124->initializeArgumentsAndRender();

$output50 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments125 = array();
// Rendering Boolean node
$arguments125['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.updateAvailable', $renderingContext));
$arguments125['then'] = NULL;
$arguments125['else'] = NULL;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments128 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments129 = array();
$arguments129['action'] = 'updateCommentForUpdatableVersions';
$arguments129['controller'] = 'Download';
// Rendering Array
$array130 = array();
$array130['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$array130['integerVersion'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.integerVersion', $renderingContext);
$arguments129['arguments'] = $array130;
$arguments129['format'] = 'json';
$arguments129['extensionName'] = NULL;
$arguments129['pluginName'] = NULL;
$arguments129['pageUid'] = NULL;
$arguments129['pageType'] = 0;
$arguments129['noCache'] = false;
$arguments129['noCacheHash'] = false;
$arguments129['section'] = '';
$arguments129['linkAccessRestrictedPages'] = false;
$arguments129['additionalParams'] = array (
);
$arguments129['absolute'] = false;
$arguments129['addQueryString'] = false;
$arguments129['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper132->setArguments($arguments129);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure131);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments128['uri'] = $viewHelper132->initializeArgumentsAndRender();
$arguments128['icon'] = 'actions-system-extension-update';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments133 = array();
$arguments133['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array134 = array();
$array134['0'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.updateToVersion.version', $renderingContext);
$arguments133['arguments'] = $array134;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['htmlEscape'] = NULL;
$arguments133['extensionName'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper136->setArguments($arguments133);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments128['title'] = $viewHelper136->initializeArgumentsAndRender();
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper138->setArguments($arguments128);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output127 .= $viewHelper138->initializeArgumentsAndRender();

$output127 .= '
					';
return $output127;
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper139->setArguments($arguments125);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure126);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output50 .= $viewHelper139->initializeArgumentsAndRender();

$output50 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments140 = array();
$arguments140['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension', $renderingContext);
$arguments140['additionalAttributes'] = NULL;
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['name'] = NULL;
$arguments140['rel'] = NULL;
$arguments140['rev'] = NULL;
$arguments140['target'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper142 = $self->getViewHelper('$viewHelper142', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper142->setArguments($arguments140);
$viewHelper142->setRenderingContext($renderingContext);
$viewHelper142->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output50 .= $viewHelper142->initializeArgumentsAndRender();

$output50 .= '
				</td>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments143 = array();
// Rendering Boolean node
$arguments143['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.description', $renderingContext));
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments146 = array();
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments149 = array();
$arguments149['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.description', $renderingContext);
$arguments149['keepQuotes'] = false;
$arguments149['encoding'] = NULL;
$arguments149['doubleEncode'] = true;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$value151 = ($arguments149['value'] !== NULL ? $arguments149['value'] : $renderChildrenClosure150());

$output148 .= (!is_string($value151) ? $value151 : htmlspecialchars($value151, ($arguments149['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments149['encoding'] !== NULL ? $arguments149['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments149['doubleEncode']));

$output148 .= '">
					';
return $output148;
};
$viewHelper152 = $self->getViewHelper('$viewHelper152', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper152->setArguments($arguments146);
$viewHelper152->setRenderingContext($renderingContext);
$viewHelper152->setRenderChildrenClosure($renderChildrenClosure147);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output145 .= $viewHelper152->initializeArgumentsAndRender();

$output145 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments153 = array();
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$viewHelper155 = $self->getViewHelper('$viewHelper155', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper155->setArguments($arguments153);
$viewHelper155->setRenderingContext($renderingContext);
$viewHelper155->setRenderChildrenClosure($renderChildrenClosure154);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output145 .= $viewHelper155->initializeArgumentsAndRender();

$output145 .= '
				';
return $output145;
};
$arguments143['__thenClosure'] = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments157 = array();
$arguments157['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.description', $renderingContext);
$arguments157['keepQuotes'] = false;
$arguments157['encoding'] = NULL;
$arguments157['doubleEncode'] = true;
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$value159 = ($arguments157['value'] !== NULL ? $arguments157['value'] : $renderChildrenClosure158());

$output156 .= (!is_string($value159) ? $value159 : htmlspecialchars($value159, ($arguments157['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments157['encoding'] !== NULL ? $arguments157['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments157['doubleEncode']));

$output156 .= '">
					';
return $output156;
};
$arguments143['__elseClosure'] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$viewHelper160 = $self->getViewHelper('$viewHelper160', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper160->setArguments($arguments143);
$viewHelper160->setRenderingContext($renderingContext);
$viewHelper160->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output50 .= $viewHelper160->initializeArgumentsAndRender();

$output50 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$arguments161 = array();
$output162 = '';

$output162 .= '../';

$output162 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.siteRelPath', $renderingContext);

$output162 .= '/';

$output162 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.ext_icon', $renderingContext);
$arguments161['src'] = $output162;
$arguments161['alt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.title', $renderingContext);
$arguments161['height'] = '16';
$arguments161['additionalAttributes'] = NULL;
$arguments161['width'] = NULL;
$arguments161['minWidth'] = NULL;
$arguments161['minHeight'] = NULL;
$arguments161['maxWidth'] = NULL;
$arguments161['maxHeight'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['ismap'] = NULL;
$arguments161['longdesc'] = NULL;
$arguments161['usemap'] = NULL;
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper');
$viewHelper164->setArguments($arguments161);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure163);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper

$output50 .= $viewHelper164->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.title', $renderingContext);
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output50 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output50 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments168 = array();
$arguments168['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments168['keepQuotes'] = false;
$arguments168['encoding'] = NULL;
$arguments168['doubleEncode'] = true;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$value170 = ($arguments168['value'] !== NULL ? $arguments168['value'] : $renderChildrenClosure169());

$output50 .= (!is_string($value170) ? $value170 : htmlspecialchars($value170, ($arguments168['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments168['encoding'] !== NULL ? $arguments168['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments168['doubleEncode']));

$output50 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.version', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());

$output50 .= (!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode']));

$output50 .= '
				</td>
				<td class="icons">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments174 = array();
$arguments174['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension', $renderingContext);
$arguments174['additionalAttributes'] = NULL;
$arguments174['class'] = NULL;
$arguments174['dir'] = NULL;
$arguments174['id'] = NULL;
$arguments174['lang'] = NULL;
$arguments174['style'] = NULL;
$arguments174['title'] = NULL;
$arguments174['accesskey'] = NULL;
$arguments174['tabindex'] = NULL;
$arguments174['onclick'] = NULL;
$arguments174['name'] = NULL;
$arguments174['rel'] = NULL;
$arguments174['rev'] = NULL;
$arguments174['target'] = NULL;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper176 = $self->getViewHelper('$viewHelper176', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper176->setArguments($arguments174);
$viewHelper176->setRenderingContext($renderingContext);
$viewHelper176->setRenderChildrenClosure($renderChildrenClosure175);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output50 .= $viewHelper176->initializeArgumentsAndRender();

$output50 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments177 = array();
$arguments177['extensionKey'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments177['additionalAttributes'] = NULL;
$arguments177['class'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$arguments177['name'] = NULL;
$arguments177['rel'] = NULL;
$arguments177['rev'] = NULL;
$arguments177['target'] = NULL;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper179 = $self->getViewHelper('$viewHelper179', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper179->setArguments($arguments177);
$viewHelper179->setRenderingContext($renderingContext);
$viewHelper179->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output50 .= $viewHelper179->initializeArgumentsAndRender();

$output50 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments180 = array();
$arguments180['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension', $renderingContext);
$arguments180['additionalAttributes'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['name'] = NULL;
$arguments180['rel'] = NULL;
$arguments180['rev'] = NULL;
$arguments180['target'] = NULL;
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper182 = $self->getViewHelper('$viewHelper182', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper182->setArguments($arguments180);
$viewHelper182->setRenderingContext($renderingContext);
$viewHelper182->setRenderChildrenClosure($renderChildrenClosure181);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output50 .= $viewHelper182->initializeArgumentsAndRender();

$output50 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments183 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments184 = array();
$arguments184['action'] = 'downloadExtensionZip';
$arguments184['controller'] = 'Action';
// Rendering Array
$array185 = array();
$array185['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments184['arguments'] = $array185;
$arguments184['extensionName'] = NULL;
$arguments184['pluginName'] = NULL;
$arguments184['pageUid'] = NULL;
$arguments184['pageType'] = 0;
$arguments184['noCache'] = false;
$arguments184['noCacheHash'] = false;
$arguments184['section'] = '';
$arguments184['format'] = '';
$arguments184['linkAccessRestrictedPages'] = false;
$arguments184['additionalParams'] = array (
);
$arguments184['absolute'] = false;
$arguments184['addQueryString'] = false;
$arguments184['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper187 = $self->getViewHelper('$viewHelper187', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper187->setArguments($arguments184);
$viewHelper187->setRenderingContext($renderingContext);
$viewHelper187->setRenderChildrenClosure($renderChildrenClosure186);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments183['uri'] = $viewHelper187->initializeArgumentsAndRender();
$arguments183['icon'] = 'actions-system-extension-download';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments188 = array();
$arguments188['key'] = 'extensionList.downloadzip';
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['htmlEscape'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['extensionName'] = NULL;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper190 = $self->getViewHelper('$viewHelper190', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper190->setArguments($arguments188);
$viewHelper190->setRenderingContext($renderingContext);
$viewHelper190->setRenderChildrenClosure($renderChildrenClosure189);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments183['title'] = $viewHelper190->initializeArgumentsAndRender();
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper192 = $self->getViewHelper('$viewHelper192', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper192->setArguments($arguments183);
$viewHelper192->setRenderingContext($renderingContext);
$viewHelper192->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output50 .= $viewHelper192->initializeArgumentsAndRender();

$output50 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments193 = array();
$arguments193['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension', $renderingContext);
$arguments193['additionalAttributes'] = NULL;
$arguments193['class'] = NULL;
$arguments193['dir'] = NULL;
$arguments193['id'] = NULL;
$arguments193['lang'] = NULL;
$arguments193['style'] = NULL;
$arguments193['title'] = NULL;
$arguments193['accesskey'] = NULL;
$arguments193['tabindex'] = NULL;
$arguments193['onclick'] = NULL;
$arguments193['name'] = NULL;
$arguments193['rel'] = NULL;
$arguments193['rev'] = NULL;
$arguments193['target'] = NULL;
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper195 = $self->getViewHelper('$viewHelper195', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper195->setArguments($arguments193);
$viewHelper195->setRenderingContext($renderingContext);
$viewHelper195->setRenderChildrenClosure($renderChildrenClosure194);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output50 .= $viewHelper195->initializeArgumentsAndRender();

$output50 .= '
				</td>
				<td class="state ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments196 = array();
$arguments196['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.state', $renderingContext);
$arguments196['keepQuotes'] = false;
$arguments196['encoding'] = NULL;
$arguments196['doubleEncode'] = true;
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$value198 = ($arguments196['value'] !== NULL ? $arguments196['value'] : $renderChildrenClosure197());

$output50 .= (!is_string($value198) ? $value198 : htmlspecialchars($value198, ($arguments196['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments196['encoding'] !== NULL ? $arguments196['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments196['doubleEncode']));

$output50 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments199 = array();
$arguments199['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.state', $renderingContext);
$arguments199['keepQuotes'] = false;
$arguments199['encoding'] = NULL;
$arguments199['doubleEncode'] = true;
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$value201 = ($arguments199['value'] !== NULL ? $arguments199['value'] : $renderChildrenClosure200());

$output50 .= (!is_string($value201) ? $value201 : htmlspecialchars($value201, ($arguments199['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments199['encoding'] !== NULL ? $arguments199['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments199['doubleEncode']));

$output50 .= '
				</td>
				</tr>
			';
return $output50;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output14 .= '
		</tbody>
	</table>
';

return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output202 = '';

$output202 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments203 = array();
$arguments203['name'] = 'main';
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper205 = $self->getViewHelper('$viewHelper205', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper205->setArguments($arguments203);
$viewHelper205->setRenderingContext($renderingContext);
$viewHelper205->setRenderChildrenClosure($renderChildrenClosure204);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output202 .= $viewHelper205->initializeArgumentsAndRender();

$output202 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments206 = array();
$arguments206['name'] = 'docheader-buttons';
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments209 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments210 = array();
$arguments210['action'] = 'form';
$arguments210['controller'] = 'UploadExtensionFile';
$arguments210['arguments'] = array (
);
$arguments210['extensionName'] = NULL;
$arguments210['pluginName'] = NULL;
$arguments210['pageUid'] = NULL;
$arguments210['pageType'] = 0;
$arguments210['noCache'] = false;
$arguments210['noCacheHash'] = false;
$arguments210['section'] = '';
$arguments210['format'] = '';
$arguments210['linkAccessRestrictedPages'] = false;
$arguments210['additionalParams'] = array (
);
$arguments210['absolute'] = false;
$arguments210['addQueryString'] = false;
$arguments210['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper212 = $self->getViewHelper('$viewHelper212', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper212->setArguments($arguments210);
$viewHelper212->setRenderingContext($renderingContext);
$viewHelper212->setRenderChildrenClosure($renderChildrenClosure211);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments209['uri'] = $viewHelper212->initializeArgumentsAndRender();
$arguments209['icon'] = 'actions-edit-upload';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments213 = array();
$arguments213['key'] = 'extensionList.uploadExtension';
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['htmlEscape'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper215 = $self->getViewHelper('$viewHelper215', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper215->setArguments($arguments213);
$viewHelper215->setRenderingContext($renderingContext);
$viewHelper215->setRenderChildrenClosure($renderChildrenClosure214);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments209['title'] = $viewHelper215->initializeArgumentsAndRender();
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper217 = $self->getViewHelper('$viewHelper217', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper217->setArguments($arguments209);
$viewHelper217->setRenderingContext($renderingContext);
$viewHelper217->setRenderChildrenClosure($renderChildrenClosure216);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output208 .= $viewHelper217->initializeArgumentsAndRender();

$output208 .= '
';
return $output208;
};

$output202 .= '';

$output202 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments218 = array();
$arguments218['name'] = 'module-headline';
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
	<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments221 = array();
$arguments221['key'] = 'manageExtensions';
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['htmlEscape'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return 'Manage extensions';
};
$viewHelper223 = $self->getViewHelper('$viewHelper223', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper223->setArguments($arguments221);
$viewHelper223->setRenderingContext($renderingContext);
$viewHelper223->setRenderChildrenClosure($renderChildrenClosure222);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output220 .= $viewHelper223->initializeArgumentsAndRender();

$output220 .= '</h2>
';
return $output220;
};

$output202 .= '';

$output202 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments224 = array();
$arguments224['name'] = 'Content';
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments227 = array();
$arguments227['renderMode'] = 'div';
$arguments227['additionalAttributes'] = NULL;
$arguments227['class'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper229 = $self->getViewHelper('$viewHelper229', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper229->setArguments($arguments227);
$viewHelper229->setRenderingContext($renderingContext);
$viewHelper229->setRenderChildrenClosure($renderChildrenClosure228);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output226 .= $viewHelper229->initializeArgumentsAndRender();

$output226 .= '

	<div class="uploadForm" style="display: none;">
		<span class="spinner"></span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments230 = array();
$arguments230['key'] = 'extensionList.loading';
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['htmlEscape'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper232 = $self->getViewHelper('$viewHelper232', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper232->setArguments($arguments230);
$viewHelper232->setRenderingContext($renderingContext);
$viewHelper232->setRenderChildrenClosure($renderChildrenClosure231);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper232->initializeArgumentsAndRender();

$output226 .= '
	</div>

	<div class="headerRow ui-helper-clearfix">
		<div class="typo3-extensionmanager-headerRowLeft">
		</div>
		<div class="typo3-extensionmanager-headerRowRight">
		</div>
	</div>
	<table id="typo3-extension-list" class="typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments233 = array();
$arguments233['key'] = 'extensionList.header.title.update';
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['htmlEscape'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper235 = $self->getViewHelper('$viewHelper235', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper235->setArguments($arguments233);
$viewHelper235->setRenderingContext($renderingContext);
$viewHelper235->setRenderChildrenClosure($renderChildrenClosure234);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper235->initializeArgumentsAndRender();

$output226 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments236 = array();
$arguments236['key'] = 'extensionList.header.update';
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['htmlEscape'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper238 = $self->getViewHelper('$viewHelper238', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper238->setArguments($arguments236);
$viewHelper238->setRenderingContext($renderingContext);
$viewHelper238->setRenderChildrenClosure($renderChildrenClosure237);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper238->initializeArgumentsAndRender();

$output226 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments239 = array();
$arguments239['key'] = 'extensionList.header.title.activate';
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper241 = $self->getViewHelper('$viewHelper241', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper241->setArguments($arguments239);
$viewHelper241->setRenderingContext($renderingContext);
$viewHelper241->setRenderChildrenClosure($renderChildrenClosure240);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper241->initializeArgumentsAndRender();

$output226 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments242 = array();
$arguments242['key'] = 'extensionList.header.activate';
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['htmlEscape'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper244 = $self->getViewHelper('$viewHelper244', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper244->setArguments($arguments242);
$viewHelper244->setRenderingContext($renderingContext);
$viewHelper244->setRenderChildrenClosure($renderChildrenClosure243);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper244->initializeArgumentsAndRender();

$output226 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments245 = array();
$arguments245['key'] = 'extensionList.header.extensionName';
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['htmlEscape'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper247 = $self->getViewHelper('$viewHelper247', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper247->setArguments($arguments245);
$viewHelper247->setRenderingContext($renderingContext);
$viewHelper247->setRenderChildrenClosure($renderChildrenClosure246);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper247->initializeArgumentsAndRender();

$output226 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments248 = array();
$arguments248['key'] = 'extensionList.header.extensionKey';
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['htmlEscape'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper250 = $self->getViewHelper('$viewHelper250', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper250->setArguments($arguments248);
$viewHelper250->setRenderingContext($renderingContext);
$viewHelper250->setRenderChildrenClosure($renderChildrenClosure249);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper250->initializeArgumentsAndRender();

$output226 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments251 = array();
$arguments251['key'] = 'extensionList.header.extensionVersion';
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['htmlEscape'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper253 = $self->getViewHelper('$viewHelper253', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper253->setArguments($arguments251);
$viewHelper253->setRenderingContext($renderingContext);
$viewHelper253->setRenderChildrenClosure($renderChildrenClosure252);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper253->initializeArgumentsAndRender();

$output226 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments254 = array();
$arguments254['key'] = 'extensionList.header.extensionActions';
$arguments254['id'] = NULL;
$arguments254['default'] = NULL;
$arguments254['htmlEscape'] = NULL;
$arguments254['arguments'] = NULL;
$arguments254['extensionName'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper256 = $self->getViewHelper('$viewHelper256', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper256->setArguments($arguments254);
$viewHelper256->setRenderingContext($renderingContext);
$viewHelper256->setRenderChildrenClosure($renderChildrenClosure255);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper256->initializeArgumentsAndRender();

$output226 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments257 = array();
$arguments257['key'] = 'extensionList.header.extensionState';
$arguments257['id'] = NULL;
$arguments257['default'] = NULL;
$arguments257['htmlEscape'] = NULL;
$arguments257['arguments'] = NULL;
$arguments257['extensionName'] = NULL;
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper259 = $self->getViewHelper('$viewHelper259', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper259->setArguments($arguments257);
$viewHelper259->setRenderingContext($renderingContext);
$viewHelper259->setRenderChildrenClosure($renderChildrenClosure258);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output226 .= $viewHelper259->initializeArgumentsAndRender();

$output226 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments260 = array();
$arguments260['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensions', $renderingContext);
$arguments260['as'] = 'extension';
$arguments260['key'] = 'extensionKey';
$arguments260['reverse'] = false;
$arguments260['iteration'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments263 = array();
// Rendering Boolean node
$arguments263['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject', $renderingContext));
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments266 = array();
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments269 = array();
$arguments269['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments269['keepQuotes'] = false;
$arguments269['encoding'] = NULL;
$arguments269['doubleEncode'] = true;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$value271 = ($arguments269['value'] !== NULL ? $arguments269['value'] : $renderChildrenClosure270());

$output268 .= (!is_string($value271) ? $value271 : htmlspecialchars($value271, ($arguments269['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments269['encoding'] !== NULL ? $arguments269['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments269['doubleEncode']));

$output268 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments272 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments273 = array();
$arguments273['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.reviewState', $renderingContext);
$arguments273['keepQuotes'] = false;
$arguments273['encoding'] = NULL;
$arguments273['doubleEncode'] = true;
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$value275 = ($arguments273['value'] !== NULL ? $arguments273['value'] : $renderChildrenClosure274());
$arguments272['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value275) ? $value275 : htmlspecialchars($value275, ($arguments273['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments273['encoding'] !== NULL ? $arguments273['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments273['doubleEncode'])), -1);
$arguments272['then'] = 'insecure';
$arguments272['else'] = NULL;
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper277 = $self->getViewHelper('$viewHelper277', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper277->setArguments($arguments272);
$viewHelper277->setRenderingContext($renderingContext);
$viewHelper277->setRenderChildrenClosure($renderChildrenClosure276);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output268 .= $viewHelper277->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments278 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments279 = array();
$arguments279['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.reviewState', $renderingContext);
$arguments279['keepQuotes'] = false;
$arguments279['encoding'] = NULL;
$arguments279['doubleEncode'] = true;
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$value281 = ($arguments279['value'] !== NULL ? $arguments279['value'] : $renderChildrenClosure280());
$arguments278['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value281) ? $value281 : htmlspecialchars($value281, ($arguments279['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments279['encoding'] !== NULL ? $arguments279['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments279['doubleEncode'])), -2);
$arguments278['then'] = 'outdated';
$arguments278['else'] = NULL;
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper283 = $self->getViewHelper('$viewHelper283', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper283->setArguments($arguments278);
$viewHelper283->setRenderingContext($renderingContext);
$viewHelper283->setRenderChildrenClosure($renderChildrenClosure282);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output268 .= $viewHelper283->initializeArgumentsAndRender();

$output268 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments284 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments285 = array();
$arguments285['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.installed', $renderingContext);
$arguments285['keepQuotes'] = false;
$arguments285['encoding'] = NULL;
$arguments285['doubleEncode'] = true;
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$value287 = ($arguments285['value'] !== NULL ? $arguments285['value'] : $renderChildrenClosure286());
$arguments284['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value287) ? $value287 : htmlspecialchars($value287, ($arguments285['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments285['encoding'] !== NULL ? $arguments285['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments285['doubleEncode'])));
$arguments284['then'] = '';
$arguments284['else'] = 'inactive';
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper289 = $self->getViewHelper('$viewHelper289', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper289->setArguments($arguments284);
$viewHelper289->setRenderingContext($renderingContext);
$viewHelper289->setRenderChildrenClosure($renderChildrenClosure288);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output268 .= $viewHelper289->initializeArgumentsAndRender();

$output268 .= '">
					';
return $output268;
};
$viewHelper290 = $self->getViewHelper('$viewHelper290', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper290->setArguments($arguments266);
$viewHelper290->setRenderingContext($renderingContext);
$viewHelper290->setRenderChildrenClosure($renderChildrenClosure267);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output265 .= $viewHelper290->initializeArgumentsAndRender();

$output265 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments291 = array();
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments294 = array();
$arguments294['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments294['keepQuotes'] = false;
$arguments294['encoding'] = NULL;
$arguments294['doubleEncode'] = true;
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$value296 = ($arguments294['value'] !== NULL ? $arguments294['value'] : $renderChildrenClosure295());

$output293 .= (!is_string($value296) ? $value296 : htmlspecialchars($value296, ($arguments294['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments294['encoding'] !== NULL ? $arguments294['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments294['doubleEncode']));

$output293 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments297 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments298 = array();
$arguments298['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.installed', $renderingContext);
$arguments298['keepQuotes'] = false;
$arguments298['encoding'] = NULL;
$arguments298['doubleEncode'] = true;
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$value300 = ($arguments298['value'] !== NULL ? $arguments298['value'] : $renderChildrenClosure299());
$arguments297['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value300) ? $value300 : htmlspecialchars($value300, ($arguments298['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments298['encoding'] !== NULL ? $arguments298['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments298['doubleEncode'])));
$arguments297['then'] = '';
$arguments297['else'] = 'inactive';
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper302 = $self->getViewHelper('$viewHelper302', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper302->setArguments($arguments297);
$viewHelper302->setRenderingContext($renderingContext);
$viewHelper302->setRenderChildrenClosure($renderChildrenClosure301);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output293 .= $viewHelper302->initializeArgumentsAndRender();

$output293 .= '">
					';
return $output293;
};
$viewHelper303 = $self->getViewHelper('$viewHelper303', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper303->setArguments($arguments291);
$viewHelper303->setRenderingContext($renderingContext);
$viewHelper303->setRenderChildrenClosure($renderChildrenClosure292);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output265 .= $viewHelper303->initializeArgumentsAndRender();

$output265 .= '
				';
return $output265;
};
$arguments263['__thenClosure'] = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments305 = array();
$arguments305['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments305['keepQuotes'] = false;
$arguments305['encoding'] = NULL;
$arguments305['doubleEncode'] = true;
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$value307 = ($arguments305['value'] !== NULL ? $arguments305['value'] : $renderChildrenClosure306());

$output304 .= (!is_string($value307) ? $value307 : htmlspecialchars($value307, ($arguments305['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments305['encoding'] !== NULL ? $arguments305['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments305['doubleEncode']));

$output304 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments308 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments309 = array();
$arguments309['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.reviewState', $renderingContext);
$arguments309['keepQuotes'] = false;
$arguments309['encoding'] = NULL;
$arguments309['doubleEncode'] = true;
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$value311 = ($arguments309['value'] !== NULL ? $arguments309['value'] : $renderChildrenClosure310());
$arguments308['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value311) ? $value311 : htmlspecialchars($value311, ($arguments309['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments309['encoding'] !== NULL ? $arguments309['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments309['doubleEncode'])), -1);
$arguments308['then'] = 'insecure';
$arguments308['else'] = NULL;
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper313 = $self->getViewHelper('$viewHelper313', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper313->setArguments($arguments308);
$viewHelper313->setRenderingContext($renderingContext);
$viewHelper313->setRenderChildrenClosure($renderChildrenClosure312);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output304 .= $viewHelper313->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments314 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments315 = array();
$arguments315['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.reviewState', $renderingContext);
$arguments315['keepQuotes'] = false;
$arguments315['encoding'] = NULL;
$arguments315['doubleEncode'] = true;
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$value317 = ($arguments315['value'] !== NULL ? $arguments315['value'] : $renderChildrenClosure316());
$arguments314['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value317) ? $value317 : htmlspecialchars($value317, ($arguments315['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments315['encoding'] !== NULL ? $arguments315['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments315['doubleEncode'])), -2);
$arguments314['then'] = 'outdated';
$arguments314['else'] = NULL;
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper319 = $self->getViewHelper('$viewHelper319', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper319->setArguments($arguments314);
$viewHelper319->setRenderingContext($renderingContext);
$viewHelper319->setRenderChildrenClosure($renderChildrenClosure318);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output304 .= $viewHelper319->initializeArgumentsAndRender();

$output304 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments320 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments321 = array();
$arguments321['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.installed', $renderingContext);
$arguments321['keepQuotes'] = false;
$arguments321['encoding'] = NULL;
$arguments321['doubleEncode'] = true;
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$value323 = ($arguments321['value'] !== NULL ? $arguments321['value'] : $renderChildrenClosure322());
$arguments320['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value323) ? $value323 : htmlspecialchars($value323, ($arguments321['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments321['encoding'] !== NULL ? $arguments321['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments321['doubleEncode'])));
$arguments320['then'] = '';
$arguments320['else'] = 'inactive';
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper325 = $self->getViewHelper('$viewHelper325', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper325->setArguments($arguments320);
$viewHelper325->setRenderingContext($renderingContext);
$viewHelper325->setRenderChildrenClosure($renderChildrenClosure324);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output304 .= $viewHelper325->initializeArgumentsAndRender();

$output304 .= '">
					';
return $output304;
};
$arguments263['__elseClosure'] = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments327 = array();
$arguments327['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments327['keepQuotes'] = false;
$arguments327['encoding'] = NULL;
$arguments327['doubleEncode'] = true;
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$value329 = ($arguments327['value'] !== NULL ? $arguments327['value'] : $renderChildrenClosure328());

$output326 .= (!is_string($value329) ? $value329 : htmlspecialchars($value329, ($arguments327['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments327['encoding'] !== NULL ? $arguments327['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments327['doubleEncode']));

$output326 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments330 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments331 = array();
$arguments331['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.installed', $renderingContext);
$arguments331['keepQuotes'] = false;
$arguments331['encoding'] = NULL;
$arguments331['doubleEncode'] = true;
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$value333 = ($arguments331['value'] !== NULL ? $arguments331['value'] : $renderChildrenClosure332());
$arguments330['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value333) ? $value333 : htmlspecialchars($value333, ($arguments331['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments331['encoding'] !== NULL ? $arguments331['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments331['doubleEncode'])));
$arguments330['then'] = '';
$arguments330['else'] = 'inactive';
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper335 = $self->getViewHelper('$viewHelper335', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper335->setArguments($arguments330);
$viewHelper335->setRenderingContext($renderingContext);
$viewHelper335->setRenderChildrenClosure($renderChildrenClosure334);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output326 .= $viewHelper335->initializeArgumentsAndRender();

$output326 .= '">
					';
return $output326;
};
$viewHelper336 = $self->getViewHelper('$viewHelper336', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper336->setArguments($arguments263);
$viewHelper336->setRenderingContext($renderingContext);
$viewHelper336->setRenderChildrenClosure($renderChildrenClosure264);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output262 .= $viewHelper336->initializeArgumentsAndRender();

$output262 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments337 = array();
// Rendering Boolean node
$arguments337['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.updateAvailable', $renderingContext));
$arguments337['then'] = NULL;
$arguments337['else'] = NULL;
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments340 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments341 = array();
$arguments341['action'] = 'updateCommentForUpdatableVersions';
$arguments341['controller'] = 'Download';
// Rendering Array
$array342 = array();
$array342['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$array342['integerVersion'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.terObject.integerVersion', $renderingContext);
$arguments341['arguments'] = $array342;
$arguments341['format'] = 'json';
$arguments341['extensionName'] = NULL;
$arguments341['pluginName'] = NULL;
$arguments341['pageUid'] = NULL;
$arguments341['pageType'] = 0;
$arguments341['noCache'] = false;
$arguments341['noCacheHash'] = false;
$arguments341['section'] = '';
$arguments341['linkAccessRestrictedPages'] = false;
$arguments341['additionalParams'] = array (
);
$arguments341['absolute'] = false;
$arguments341['addQueryString'] = false;
$arguments341['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper344 = $self->getViewHelper('$viewHelper344', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper344->setArguments($arguments341);
$viewHelper344->setRenderingContext($renderingContext);
$viewHelper344->setRenderChildrenClosure($renderChildrenClosure343);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments340['uri'] = $viewHelper344->initializeArgumentsAndRender();
$arguments340['icon'] = 'actions-system-extension-update';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments345 = array();
$arguments345['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array346 = array();
$array346['0'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.updateToVersion.version', $renderingContext);
$arguments345['arguments'] = $array346;
$arguments345['id'] = NULL;
$arguments345['default'] = NULL;
$arguments345['htmlEscape'] = NULL;
$arguments345['extensionName'] = NULL;
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper348 = $self->getViewHelper('$viewHelper348', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper348->setArguments($arguments345);
$viewHelper348->setRenderingContext($renderingContext);
$viewHelper348->setRenderChildrenClosure($renderChildrenClosure347);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments340['title'] = $viewHelper348->initializeArgumentsAndRender();
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper350 = $self->getViewHelper('$viewHelper350', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper350->setArguments($arguments340);
$viewHelper350->setRenderingContext($renderingContext);
$viewHelper350->setRenderChildrenClosure($renderChildrenClosure349);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output339 .= $viewHelper350->initializeArgumentsAndRender();

$output339 .= '
					';
return $output339;
};
$viewHelper351 = $self->getViewHelper('$viewHelper351', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper351->setArguments($arguments337);
$viewHelper351->setRenderingContext($renderingContext);
$viewHelper351->setRenderChildrenClosure($renderChildrenClosure338);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output262 .= $viewHelper351->initializeArgumentsAndRender();

$output262 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments352 = array();
$arguments352['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension', $renderingContext);
$arguments352['additionalAttributes'] = NULL;
$arguments352['class'] = NULL;
$arguments352['dir'] = NULL;
$arguments352['id'] = NULL;
$arguments352['lang'] = NULL;
$arguments352['style'] = NULL;
$arguments352['title'] = NULL;
$arguments352['accesskey'] = NULL;
$arguments352['tabindex'] = NULL;
$arguments352['onclick'] = NULL;
$arguments352['name'] = NULL;
$arguments352['rel'] = NULL;
$arguments352['rev'] = NULL;
$arguments352['target'] = NULL;
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper354 = $self->getViewHelper('$viewHelper354', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper354->setArguments($arguments352);
$viewHelper354->setRenderingContext($renderingContext);
$viewHelper354->setRenderChildrenClosure($renderChildrenClosure353);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output262 .= $viewHelper354->initializeArgumentsAndRender();

$output262 .= '
				</td>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments355 = array();
// Rendering Boolean node
$arguments355['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.description', $renderingContext));
$arguments355['then'] = NULL;
$arguments355['else'] = NULL;
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments358 = array();
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments361 = array();
$arguments361['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.description', $renderingContext);
$arguments361['keepQuotes'] = false;
$arguments361['encoding'] = NULL;
$arguments361['doubleEncode'] = true;
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$value363 = ($arguments361['value'] !== NULL ? $arguments361['value'] : $renderChildrenClosure362());

$output360 .= (!is_string($value363) ? $value363 : htmlspecialchars($value363, ($arguments361['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments361['encoding'] !== NULL ? $arguments361['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments361['doubleEncode']));

$output360 .= '">
					';
return $output360;
};
$viewHelper364 = $self->getViewHelper('$viewHelper364', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper364->setArguments($arguments358);
$viewHelper364->setRenderingContext($renderingContext);
$viewHelper364->setRenderChildrenClosure($renderChildrenClosure359);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output357 .= $viewHelper364->initializeArgumentsAndRender();

$output357 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments365 = array();
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$viewHelper367 = $self->getViewHelper('$viewHelper367', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper367->setArguments($arguments365);
$viewHelper367->setRenderingContext($renderingContext);
$viewHelper367->setRenderChildrenClosure($renderChildrenClosure366);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output357 .= $viewHelper367->initializeArgumentsAndRender();

$output357 .= '
				';
return $output357;
};
$arguments355['__thenClosure'] = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
						<td title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments369 = array();
$arguments369['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.description', $renderingContext);
$arguments369['keepQuotes'] = false;
$arguments369['encoding'] = NULL;
$arguments369['doubleEncode'] = true;
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$value371 = ($arguments369['value'] !== NULL ? $arguments369['value'] : $renderChildrenClosure370());

$output368 .= (!is_string($value371) ? $value371 : htmlspecialchars($value371, ($arguments369['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments369['encoding'] !== NULL ? $arguments369['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments369['doubleEncode']));

$output368 .= '">
					';
return $output368;
};
$arguments355['__elseClosure'] = function() use ($renderingContext, $self) {
return '
						<td>
					';
};
$viewHelper372 = $self->getViewHelper('$viewHelper372', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper372->setArguments($arguments355);
$viewHelper372->setRenderingContext($renderingContext);
$viewHelper372->setRenderChildrenClosure($renderChildrenClosure356);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output262 .= $viewHelper372->initializeArgumentsAndRender();

$output262 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$arguments373 = array();
$output374 = '';

$output374 .= '../';

$output374 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.siteRelPath', $renderingContext);

$output374 .= '/';

$output374 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.ext_icon', $renderingContext);
$arguments373['src'] = $output374;
$arguments373['alt'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.title', $renderingContext);
$arguments373['height'] = '16';
$arguments373['additionalAttributes'] = NULL;
$arguments373['width'] = NULL;
$arguments373['minWidth'] = NULL;
$arguments373['minHeight'] = NULL;
$arguments373['maxWidth'] = NULL;
$arguments373['maxHeight'] = NULL;
$arguments373['class'] = NULL;
$arguments373['dir'] = NULL;
$arguments373['id'] = NULL;
$arguments373['lang'] = NULL;
$arguments373['style'] = NULL;
$arguments373['title'] = NULL;
$arguments373['accesskey'] = NULL;
$arguments373['tabindex'] = NULL;
$arguments373['onclick'] = NULL;
$arguments373['ismap'] = NULL;
$arguments373['longdesc'] = NULL;
$arguments373['usemap'] = NULL;
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper376 = $self->getViewHelper('$viewHelper376', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper');
$viewHelper376->setArguments($arguments373);
$viewHelper376->setRenderingContext($renderingContext);
$viewHelper376->setRenderChildrenClosure($renderChildrenClosure375);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper

$output262 .= $viewHelper376->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments377 = array();
$arguments377['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.title', $renderingContext);
$arguments377['keepQuotes'] = false;
$arguments377['encoding'] = NULL;
$arguments377['doubleEncode'] = true;
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$value379 = ($arguments377['value'] !== NULL ? $arguments377['value'] : $renderChildrenClosure378());

$output262 .= (!is_string($value379) ? $value379 : htmlspecialchars($value379, ($arguments377['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments377['encoding'] !== NULL ? $arguments377['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments377['doubleEncode']));

$output262 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments380 = array();
$arguments380['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$arguments380['keepQuotes'] = false;
$arguments380['encoding'] = NULL;
$arguments380['doubleEncode'] = true;
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$value382 = ($arguments380['value'] !== NULL ? $arguments380['value'] : $renderChildrenClosure381());

$output262 .= (!is_string($value382) ? $value382 : htmlspecialchars($value382, ($arguments380['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments380['encoding'] !== NULL ? $arguments380['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments380['doubleEncode']));

$output262 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments383 = array();
$arguments383['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.version', $renderingContext);
$arguments383['keepQuotes'] = false;
$arguments383['encoding'] = NULL;
$arguments383['doubleEncode'] = true;
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$value385 = ($arguments383['value'] !== NULL ? $arguments383['value'] : $renderChildrenClosure384());

$output262 .= (!is_string($value385) ? $value385 : htmlspecialchars($value385, ($arguments383['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments383['encoding'] !== NULL ? $arguments383['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments383['doubleEncode']));

$output262 .= '
				</td>
				<td class="icons">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments386 = array();
$arguments386['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension', $renderingContext);
$arguments386['additionalAttributes'] = NULL;
$arguments386['class'] = NULL;
$arguments386['dir'] = NULL;
$arguments386['id'] = NULL;
$arguments386['lang'] = NULL;
$arguments386['style'] = NULL;
$arguments386['title'] = NULL;
$arguments386['accesskey'] = NULL;
$arguments386['tabindex'] = NULL;
$arguments386['onclick'] = NULL;
$arguments386['name'] = NULL;
$arguments386['rel'] = NULL;
$arguments386['rev'] = NULL;
$arguments386['target'] = NULL;
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper388 = $self->getViewHelper('$viewHelper388', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper388->setArguments($arguments386);
$viewHelper388->setRenderingContext($renderingContext);
$viewHelper388->setRenderChildrenClosure($renderChildrenClosure387);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output262 .= $viewHelper388->initializeArgumentsAndRender();

$output262 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments389 = array();
$arguments389['extensionKey'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments389['additionalAttributes'] = NULL;
$arguments389['class'] = NULL;
$arguments389['dir'] = NULL;
$arguments389['id'] = NULL;
$arguments389['lang'] = NULL;
$arguments389['style'] = NULL;
$arguments389['title'] = NULL;
$arguments389['accesskey'] = NULL;
$arguments389['tabindex'] = NULL;
$arguments389['onclick'] = NULL;
$arguments389['name'] = NULL;
$arguments389['rel'] = NULL;
$arguments389['rev'] = NULL;
$arguments389['target'] = NULL;
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper391 = $self->getViewHelper('$viewHelper391', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper391->setArguments($arguments389);
$viewHelper391->setRenderingContext($renderingContext);
$viewHelper391->setRenderChildrenClosure($renderChildrenClosure390);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output262 .= $viewHelper391->initializeArgumentsAndRender();

$output262 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments392 = array();
$arguments392['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension', $renderingContext);
$arguments392['additionalAttributes'] = NULL;
$arguments392['class'] = NULL;
$arguments392['dir'] = NULL;
$arguments392['id'] = NULL;
$arguments392['lang'] = NULL;
$arguments392['style'] = NULL;
$arguments392['title'] = NULL;
$arguments392['accesskey'] = NULL;
$arguments392['tabindex'] = NULL;
$arguments392['onclick'] = NULL;
$arguments392['name'] = NULL;
$arguments392['rel'] = NULL;
$arguments392['rev'] = NULL;
$arguments392['target'] = NULL;
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper394 = $self->getViewHelper('$viewHelper394', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper394->setArguments($arguments392);
$viewHelper394->setRenderingContext($renderingContext);
$viewHelper394->setRenderChildrenClosure($renderChildrenClosure393);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output262 .= $viewHelper394->initializeArgumentsAndRender();

$output262 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments395 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments396 = array();
$arguments396['action'] = 'downloadExtensionZip';
$arguments396['controller'] = 'Action';
// Rendering Array
$array397 = array();
$array397['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments396['arguments'] = $array397;
$arguments396['extensionName'] = NULL;
$arguments396['pluginName'] = NULL;
$arguments396['pageUid'] = NULL;
$arguments396['pageType'] = 0;
$arguments396['noCache'] = false;
$arguments396['noCacheHash'] = false;
$arguments396['section'] = '';
$arguments396['format'] = '';
$arguments396['linkAccessRestrictedPages'] = false;
$arguments396['additionalParams'] = array (
);
$arguments396['absolute'] = false;
$arguments396['addQueryString'] = false;
$arguments396['argumentsToBeExcludedFromQueryString'] = array (
);
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper399 = $self->getViewHelper('$viewHelper399', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper399->setArguments($arguments396);
$viewHelper399->setRenderingContext($renderingContext);
$viewHelper399->setRenderChildrenClosure($renderChildrenClosure398);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments395['uri'] = $viewHelper399->initializeArgumentsAndRender();
$arguments395['icon'] = 'actions-system-extension-download';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments400 = array();
$arguments400['key'] = 'extensionList.downloadzip';
$arguments400['id'] = NULL;
$arguments400['default'] = NULL;
$arguments400['htmlEscape'] = NULL;
$arguments400['arguments'] = NULL;
$arguments400['extensionName'] = NULL;
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper402 = $self->getViewHelper('$viewHelper402', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper402->setArguments($arguments400);
$viewHelper402->setRenderingContext($renderingContext);
$viewHelper402->setRenderChildrenClosure($renderChildrenClosure401);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments395['title'] = $viewHelper402->initializeArgumentsAndRender();
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper404 = $self->getViewHelper('$viewHelper404', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper404->setArguments($arguments395);
$viewHelper404->setRenderingContext($renderingContext);
$viewHelper404->setRenderChildrenClosure($renderChildrenClosure403);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output262 .= $viewHelper404->initializeArgumentsAndRender();

$output262 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments405 = array();
$arguments405['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension', $renderingContext);
$arguments405['additionalAttributes'] = NULL;
$arguments405['class'] = NULL;
$arguments405['dir'] = NULL;
$arguments405['id'] = NULL;
$arguments405['lang'] = NULL;
$arguments405['style'] = NULL;
$arguments405['title'] = NULL;
$arguments405['accesskey'] = NULL;
$arguments405['tabindex'] = NULL;
$arguments405['onclick'] = NULL;
$arguments405['name'] = NULL;
$arguments405['rel'] = NULL;
$arguments405['rev'] = NULL;
$arguments405['target'] = NULL;
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper407 = $self->getViewHelper('$viewHelper407', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper407->setArguments($arguments405);
$viewHelper407->setRenderingContext($renderingContext);
$viewHelper407->setRenderChildrenClosure($renderChildrenClosure406);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output262 .= $viewHelper407->initializeArgumentsAndRender();

$output262 .= '
				</td>
				<td class="state ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments408 = array();
$arguments408['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.state', $renderingContext);
$arguments408['keepQuotes'] = false;
$arguments408['encoding'] = NULL;
$arguments408['doubleEncode'] = true;
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$value410 = ($arguments408['value'] !== NULL ? $arguments408['value'] : $renderChildrenClosure409());

$output262 .= (!is_string($value410) ? $value410 : htmlspecialchars($value410, ($arguments408['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments408['encoding'] !== NULL ? $arguments408['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments408['doubleEncode']));

$output262 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments411 = array();
$arguments411['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.state', $renderingContext);
$arguments411['keepQuotes'] = false;
$arguments411['encoding'] = NULL;
$arguments411['doubleEncode'] = true;
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$value413 = ($arguments411['value'] !== NULL ? $arguments411['value'] : $renderChildrenClosure412());

$output262 .= (!is_string($value413) ? $value413 : htmlspecialchars($value413, ($arguments411['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments411['encoding'] !== NULL ? $arguments411['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments411['doubleEncode']));

$output262 .= '
				</td>
				</tr>
			';
return $output262;
};

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output226 .= '
		</tbody>
	</table>
';
return $output226;
};

$output202 .= '';

$output202 .= '


';

return $output202;
}


}
#1379767531    123326    