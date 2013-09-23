<?php
class FluidCache_SysNote_Note_action_list_5e4a1d73b3623397508501c97d2ef6e1e6f52374 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'notes', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '

		<div id="typo3-dblist-sysnotes">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'notes', $renderingContext);
$arguments4['as'] = 'note';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
				<div class="single-note category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.category', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output6 .= '">
					<div class="header">
						<span class="typeicon" oncontextmenu="showClickmenu(\'sys_note\', \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.uid', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output6 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output6 .= '\', \'1\', \'\', \'\', \'\'); return false;" onclick="showClickmenu(\'sys_note\', \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.uid', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output6 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output6 .= '\', \'1\', \'\',\'\', \'\'); return false;"></span>
						<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments16 = array();
$arguments16['key'] = 'author';
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output6 .= $viewHelper18->initializeArgumentsAndRender();

$output6 .= '</span>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments19 = array();
// Rendering Boolean node
$arguments19['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.realName', $renderingContext));
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments22 = array();
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments24 = array();
$arguments24['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.realName', $renderingContext);
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = NULL;
$arguments24['doubleEncode'] = true;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());
return (!is_string($value26) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments24['encoding'] !== NULL ? $arguments24['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments24['doubleEncode']));
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper27->setArguments($arguments22);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output21 .= $viewHelper27->initializeArgumentsAndRender();

$output21 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments28 = array();
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.userName', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());
return (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper33->setArguments($arguments28);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output21 .= $viewHelper33->initializeArgumentsAndRender();

$output21 .= '
						';
return $output21;
};
$arguments19['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.realName', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());
return (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));
};
$arguments19['__elseClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.userName', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());
return (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper40->setArguments($arguments19);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output6 .= $viewHelper40->initializeArgumentsAndRender();

$output6 .= '
						&middot;

						<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments41 = array();
$arguments41['key'] = 'date';
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output6 .= $viewHelper43->initializeArgumentsAndRender();

$output6 .= '</span>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments44 = array();
$arguments44['date'] = NULL;
$arguments44['format'] = 'Y-m-d';
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.modificationDate', $renderingContext);
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper46->setArguments($arguments44);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper

$output6 .= $viewHelper46->initializeArgumentsAndRender();

$output6 .= '

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments47 = array();
// Rendering Boolean node
$arguments47['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.personal', $renderingContext));
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
							&middot;
							<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments50 = array();
$arguments50['key'] = 'personal';
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output49 .= $viewHelper52->initializeArgumentsAndRender();

$output49 .= '</span>&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = 'yes';
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

$output49 .= $viewHelper55->initializeArgumentsAndRender();

$output49 .= '
						';
return $output49;
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper56->setArguments($arguments47);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output6 .= $viewHelper56->initializeArgumentsAndRender();

$output6 .= '

						<div class="right icons">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments57 = array();
// Rendering ViewHelper TYPO3\CMS\SysNote\ViewHelpers\EditLinkViewHelper
$arguments58 = array();
$arguments58['id'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.uid', $renderingContext);
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\SysNote\ViewHelpers\EditLinkViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\CMS\SysNote\ViewHelpers\EditLinkViewHelper
$arguments57['uri'] = $viewHelper60->initializeArgumentsAndRender();
$arguments57['icon'] = 'actions-document-open';
$arguments57['title'] = '';
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper62->setArguments($arguments57);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output6 .= $viewHelper62->initializeArgumentsAndRender();

$output6 .= '
						</div>
					</div>
					<div class="content">
						<div class="title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments63 = array();
// Rendering Boolean node
$arguments63['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.category', $renderingContext));
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$output67 = '';

$output67 .= 'category.';

$output67 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.category', $renderingContext);
$arguments66['key'] = $output67;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper69->setArguments($arguments66);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output65 .= $viewHelper69->initializeArgumentsAndRender();

$output65 .= ':';
return $output65;
};
$viewHelper70 = $self->getViewHelper('$viewHelper70', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper70->setArguments($arguments63);
$viewHelper70->setRenderingContext($renderingContext);
$viewHelper70->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output6 .= $viewHelper70->initializeArgumentsAndRender();

$output6 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.subject', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output6 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));

$output6 .= '
						</div>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments74 = array();
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.message', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());
return (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper');
$viewHelper79->setArguments($arguments74);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper

$output6 .= $viewHelper79->initializeArgumentsAndRender();

$output6 .= '
					</div>
				</div>
			';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		</div>

	';
return $output3;
};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper80->setArguments($arguments1);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper80->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output81 = '';

$output81 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments82 = array();
$arguments82['name'] = 'Default';
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper84->setArguments($arguments82);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output81 .= $viewHelper84->initializeArgumentsAndRender();

$output81 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments85 = array();
$arguments85['name'] = 'Content';
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments88 = array();
// Rendering Boolean node
$arguments88['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'notes', $renderingContext));
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '

		<div id="typo3-dblist-sysnotes">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments91 = array();
$arguments91['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'notes', $renderingContext);
$arguments91['as'] = 'note';
$arguments91['key'] = '';
$arguments91['reverse'] = false;
$arguments91['iteration'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
				<div class="single-note category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments94 = array();
$arguments94['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.category', $renderingContext);
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = NULL;
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$value96 = ($arguments94['value'] !== NULL ? $arguments94['value'] : $renderChildrenClosure95());

$output93 .= (!is_string($value96) ? $value96 : htmlspecialchars($value96, ($arguments94['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments94['encoding'] !== NULL ? $arguments94['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments94['doubleEncode']));

$output93 .= '">
					<div class="header">
						<span class="typeicon" oncontextmenu="showClickmenu(\'sys_note\', \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.uid', $renderingContext);
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output93 .= (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output93 .= '\', \'1\', \'\', \'\', \'\'); return false;" onclick="showClickmenu(\'sys_note\', \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.uid', $renderingContext);
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output93 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output93 .= '\', \'1\', \'\',\'\', \'\'); return false;"></span>
						<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments103 = array();
$arguments103['key'] = 'author';
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['htmlEscape'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper105->setArguments($arguments103);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output93 .= $viewHelper105->initializeArgumentsAndRender();

$output93 .= '</span>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments106 = array();
// Rendering Boolean node
$arguments106['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.realName', $renderingContext));
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments109 = array();
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.realName', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());
return (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper114->setArguments($arguments109);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure110);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output108 .= $viewHelper114->initializeArgumentsAndRender();

$output108 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments115 = array();
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.userName', $renderingContext);
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = NULL;
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());
return (!is_string($value119) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments117['encoding'] !== NULL ? $arguments117['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments117['doubleEncode']));
};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper120->setArguments($arguments115);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output108 .= $viewHelper120->initializeArgumentsAndRender();

$output108 .= '
						';
return $output108;
};
$arguments106['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments121 = array();
$arguments121['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.realName', $renderingContext);
$arguments121['keepQuotes'] = false;
$arguments121['encoding'] = NULL;
$arguments121['doubleEncode'] = true;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$value123 = ($arguments121['value'] !== NULL ? $arguments121['value'] : $renderChildrenClosure122());
return (!is_string($value123) ? $value123 : htmlspecialchars($value123, ($arguments121['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments121['encoding'] !== NULL ? $arguments121['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments121['doubleEncode']));
};
$arguments106['__elseClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments124 = array();
$arguments124['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.author.userName', $renderingContext);
$arguments124['keepQuotes'] = false;
$arguments124['encoding'] = NULL;
$arguments124['doubleEncode'] = true;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$value126 = ($arguments124['value'] !== NULL ? $arguments124['value'] : $renderChildrenClosure125());
return (!is_string($value126) ? $value126 : htmlspecialchars($value126, ($arguments124['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments124['encoding'] !== NULL ? $arguments124['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments124['doubleEncode']));
};
$viewHelper127 = $self->getViewHelper('$viewHelper127', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper127->setArguments($arguments106);
$viewHelper127->setRenderingContext($renderingContext);
$viewHelper127->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output93 .= $viewHelper127->initializeArgumentsAndRender();

$output93 .= '
						&middot;

						<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments128 = array();
$arguments128['key'] = 'date';
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['htmlEscape'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper130->setArguments($arguments128);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output93 .= $viewHelper130->initializeArgumentsAndRender();

$output93 .= '</span>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments131 = array();
$arguments131['date'] = NULL;
$arguments131['format'] = 'Y-m-d';
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.modificationDate', $renderingContext);
};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper133->setArguments($arguments131);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper

$output93 .= $viewHelper133->initializeArgumentsAndRender();

$output93 .= '

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments134 = array();
// Rendering Boolean node
$arguments134['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.personal', $renderingContext));
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
							&middot;
							<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments137 = array();
$arguments137['key'] = 'personal';
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['htmlEscape'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper139 = $self->getViewHelper('$viewHelper139', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper139->setArguments($arguments137);
$viewHelper139->setRenderingContext($renderingContext);
$viewHelper139->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output136 .= $viewHelper139->initializeArgumentsAndRender();

$output136 .= '</span>&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments140 = array();
$arguments140['key'] = 'yes';
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['htmlEscape'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper142 = $self->getViewHelper('$viewHelper142', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper142->setArguments($arguments140);
$viewHelper142->setRenderingContext($renderingContext);
$viewHelper142->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output136 .= $viewHelper142->initializeArgumentsAndRender();

$output136 .= '
						';
return $output136;
};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper143->setArguments($arguments134);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output93 .= $viewHelper143->initializeArgumentsAndRender();

$output93 .= '

						<div class="right icons">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments144 = array();
// Rendering ViewHelper TYPO3\CMS\SysNote\ViewHelpers\EditLinkViewHelper
$arguments145 = array();
$arguments145['id'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.uid', $renderingContext);
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'TYPO3\CMS\SysNote\ViewHelpers\EditLinkViewHelper');
$viewHelper147->setArguments($arguments145);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure146);
// End of ViewHelper TYPO3\CMS\SysNote\ViewHelpers\EditLinkViewHelper
$arguments144['uri'] = $viewHelper147->initializeArgumentsAndRender();
$arguments144['icon'] = 'actions-document-open';
$arguments144['title'] = '';
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper149 = $self->getViewHelper('$viewHelper149', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper149->setArguments($arguments144);
$viewHelper149->setRenderingContext($renderingContext);
$viewHelper149->setRenderChildrenClosure($renderChildrenClosure148);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output93 .= $viewHelper149->initializeArgumentsAndRender();

$output93 .= '
						</div>
					</div>
					<div class="content">
						<div class="title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments150 = array();
// Rendering Boolean node
$arguments150['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.category', $renderingContext));
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments153 = array();
$output154 = '';

$output154 .= 'category.';

$output154 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.category', $renderingContext);
$arguments153['key'] = $output154;
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['htmlEscape'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper156 = $self->getViewHelper('$viewHelper156', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper156->setArguments($arguments153);
$viewHelper156->setRenderingContext($renderingContext);
$viewHelper156->setRenderChildrenClosure($renderChildrenClosure155);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output152 .= $viewHelper156->initializeArgumentsAndRender();

$output152 .= ':';
return $output152;
};
$viewHelper157 = $self->getViewHelper('$viewHelper157', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper157->setArguments($arguments150);
$viewHelper157->setRenderingContext($renderingContext);
$viewHelper157->setRenderChildrenClosure($renderChildrenClosure151);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output93 .= $viewHelper157->initializeArgumentsAndRender();

$output93 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.subject', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = NULL;
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());

$output93 .= (!is_string($value160) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments158['encoding'] !== NULL ? $arguments158['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments158['doubleEncode']));

$output93 .= '
						</div>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments161 = array();
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments163 = array();
$arguments163['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'note.message', $renderingContext);
$arguments163['keepQuotes'] = false;
$arguments163['encoding'] = NULL;
$arguments163['doubleEncode'] = true;
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$value165 = ($arguments163['value'] !== NULL ? $arguments163['value'] : $renderChildrenClosure164());
return (!is_string($value165) ? $value165 : htmlspecialchars($value165, ($arguments163['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments163['encoding'] !== NULL ? $arguments163['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments163['doubleEncode']));
};
$viewHelper166 = $self->getViewHelper('$viewHelper166', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper');
$viewHelper166->setArguments($arguments161);
$viewHelper166->setRenderingContext($renderingContext);
$viewHelper166->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper

$output93 .= $viewHelper166->initializeArgumentsAndRender();

$output93 .= '
					</div>
				</div>
			';
return $output93;
};

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
		</div>

	';
return $output90;
};
$viewHelper167 = $self->getViewHelper('$viewHelper167', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper167->setArguments($arguments88);
$viewHelper167->setRenderingContext($renderingContext);
$viewHelper167->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output87 .= $viewHelper167->initializeArgumentsAndRender();

$output87 .= '
';
return $output87;
};

$output81 .= '';

return $output81;
}


}
#1379965454    46202     