<?php
class FluidCache_Fluid_ViewHelpers_Be_Widget_Paginate_action_index_30ab226a9db87e580a05e3aa5fa028d6e52200b3 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div id="typo3-dblist-pagination">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasLessPages', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments7 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments8 = array();
// Rendering Array
$array9 = array();
$array9['currentPage'] = 1;
$arguments8['arguments'] = $array9;
$arguments8['action'] = NULL;
$arguments8['section'] = '';
$arguments8['format'] = '';
$arguments8['ajax'] = false;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper11->setArguments($arguments8);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments7['uri'] = $viewHelper11->initializeArgumentsAndRender();
$arguments7['icon'] = 'actions-view-paging-first';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'widget.pagination.first';
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
$arguments7['title'] = $viewHelper14->initializeArgumentsAndRender();
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper16->setArguments($arguments7);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output6 .= $viewHelper16->initializeArgumentsAndRender();

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments17 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments18 = array();
// Rendering Array
$array19 = array();
$array19['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments18['arguments'] = $array19;
$arguments18['action'] = NULL;
$arguments18['section'] = '';
$arguments18['format'] = '';
$arguments18['ajax'] = false;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper21->setArguments($arguments18);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments17['uri'] = $viewHelper21->initializeArgumentsAndRender();
$arguments17['icon'] = 'actions-view-paging-previous';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'widget.pagination.previous';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17['title'] = $viewHelper24->initializeArgumentsAndRender();
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper26->setArguments($arguments17);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output6 .= $viewHelper26->initializeArgumentsAndRender();

$output6 .= '
			';
return $output6;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper27->setArguments($arguments4);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output3 .= $viewHelper27->initializeArgumentsAndRender();

$output3 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments28 = array();
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments31 = array();
$arguments31['uri'] = '';
$arguments31['icon'] = 'actions-view-paging-first-disabled';
$arguments31['title'] = '';
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output30 .= $viewHelper33->initializeArgumentsAndRender();

$output30 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments34 = array();
$arguments34['uri'] = '';
$arguments34['icon'] = 'actions-view-paging-previous-disabled';
$arguments34['title'] = '';
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output30 .= $viewHelper36->initializeArgumentsAndRender();

$output30 .= '
			';
return $output30;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper37->setArguments($arguments28);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output3 .= $viewHelper37->initializeArgumentsAndRender();

$output3 .= '
		';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments39 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments40 = array();
// Rendering Array
$array41 = array();
$array41['currentPage'] = 1;
$arguments40['arguments'] = $array41;
$arguments40['action'] = NULL;
$arguments40['section'] = '';
$arguments40['format'] = '';
$arguments40['ajax'] = false;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper43->setArguments($arguments40);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments39['uri'] = $viewHelper43->initializeArgumentsAndRender();
$arguments39['icon'] = 'actions-view-paging-first';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'widget.pagination.first';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper46->setArguments($arguments44);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments39['title'] = $viewHelper46->initializeArgumentsAndRender();
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper48->setArguments($arguments39);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output38 .= $viewHelper48->initializeArgumentsAndRender();

$output38 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments49 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments50 = array();
// Rendering Array
$array51 = array();
$array51['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments50['arguments'] = $array51;
$arguments50['action'] = NULL;
$arguments50['section'] = '';
$arguments50['format'] = '';
$arguments50['ajax'] = false;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper53->setArguments($arguments50);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments49['uri'] = $viewHelper53->initializeArgumentsAndRender();
$arguments49['icon'] = 'actions-view-paging-previous';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'widget.pagination.previous';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49['title'] = $viewHelper56->initializeArgumentsAndRender();
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper58->setArguments($arguments49);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output38 .= $viewHelper58->initializeArgumentsAndRender();

$output38 .= '
			';
return $output38;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments60 = array();
$arguments60['uri'] = '';
$arguments60['icon'] = 'actions-view-paging-first-disabled';
$arguments60['title'] = '';
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper62->setArguments($arguments60);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output59 .= $viewHelper62->initializeArgumentsAndRender();

$output59 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments63 = array();
$arguments63['uri'] = '';
$arguments63['icon'] = 'actions-view-paging-previous-disabled';
$arguments63['title'] = '';
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output59 .= $viewHelper65->initializeArgumentsAndRender();

$output59 .= '
			';
return $output59;
};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper66->setArguments($arguments1);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper66->initializeArgumentsAndRender();

$output0 .= '
		<span class="bar"> </span>
		<span class="pageIndicator">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments67 = array();
// Rendering Boolean node
$arguments67['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext));
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments70 = array();
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output72 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output72 .= '
				';
return $output72;
};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper76->setArguments($arguments70);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output69 .= $viewHelper76->initializeArgumentsAndRender();

$output69 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments77 = array();
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments80 = array();
$arguments80['key'] = 'widget.pagination.records';
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper82->setArguments($arguments80);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output79 .= $viewHelper82->initializeArgumentsAndRender();

$output79 .= '
				';
return $output79;
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper83->setArguments($arguments77);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output69 .= $viewHelper83->initializeArgumentsAndRender();

$output69 .= '
			';
return $output69;
};
$arguments67['__thenClosure'] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments85 = array();
$arguments85['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext);
$arguments85['keepQuotes'] = false;
$arguments85['encoding'] = NULL;
$arguments85['doubleEncode'] = true;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$value87 = ($arguments85['value'] !== NULL ? $arguments85['value'] : $renderChildrenClosure86());

$output84 .= (!is_string($value87) ? $value87 : htmlspecialchars($value87, ($arguments85['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments85['encoding'] !== NULL ? $arguments85['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments85['doubleEncode']));

$output84 .= '
				';
return $output84;
};
$arguments67['__elseClosure'] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments89 = array();
$arguments89['key'] = 'widget.pagination.records';
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['htmlEscape'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= '
				';
return $output88;
};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper92->setArguments($arguments67);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper92->initializeArgumentsAndRender();

$output0 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.startRecord', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output0 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output0 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.endRecord', $renderingContext);
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = NULL;
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output0 .= (!is_string($value98) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments96['encoding'] !== NULL ? $arguments96['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments96['doubleEncode']));

$output0 .= '</span>
		<span class="bar"> </span>
		<span class="pageIndicator">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments99 = array();
$arguments99['key'] = 'widget.pagination.page';
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['htmlEscape'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output0 .= $viewHelper101->initializeArgumentsAndRender();

$output0 .= '
			<span>
				<form id="paginator-form-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments102 = array();
$arguments102['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments102['keepQuotes'] = false;
$arguments102['encoding'] = NULL;
$arguments102['doubleEncode'] = true;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$value104 = ($arguments102['value'] !== NULL ? $arguments102['value'] : $renderChildrenClosure103());

$output0 .= (!is_string($value104) ? $value104 : htmlspecialchars($value104, ($arguments102['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments102['encoding'] !== NULL ? $arguments102['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments102['doubleEncode']));

$output0 .= '" onsubmit="goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output0 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output0 .= '(this); return false;" style="display:inline;">
				<script type="text/javascript">
					function goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output0 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output0 .= '(formObject) {
						var url = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments111 = array();
// Rendering Array
$array112 = array();
$array112['currentPage'] = 987654321;
$arguments111['arguments'] = $array112;
$arguments111['action'] = NULL;
$arguments111['section'] = '';
$arguments111['format'] = '';
$arguments111['ajax'] = false;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper114->setArguments($arguments111);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output0 .= $viewHelper114->initializeArgumentsAndRender();

$output0 .= '\';
						var page = formObject.elements[\'paginator-target-page\'].value;
						if (page > ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = NULL;
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());

$output0 .= (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments115['encoding'] !== NULL ? $arguments115['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments115['doubleEncode']));

$output0 .= ') {
							page = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments118 = array();
$arguments118['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments118['keepQuotes'] = false;
$arguments118['encoding'] = NULL;
$arguments118['doubleEncode'] = true;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$value120 = ($arguments118['value'] !== NULL ? $arguments118['value'] : $renderChildrenClosure119());

$output0 .= (!is_string($value120) ? $value120 : htmlspecialchars($value120, ($arguments118['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments118['encoding'] !== NULL ? $arguments118['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments118['doubleEncode']));

$output0 .= ';
						} else if (page < 1) {
							page = 1;
						}
						url = url.replace(\'987654321\', page);
						self.location.href= url;
					}
				</script>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments121 = array();
$output122 = '';

$output122 .= 'paginator-';

$output122 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments121['id'] = $output122;
$arguments121['name'] = 'paginator-target-page';
$arguments121['size'] = '5';
$arguments121['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.current', $renderingContext);
$arguments121['additionalAttributes'] = NULL;
$arguments121['required'] = NULL;
$arguments121['type'] = 'text';
$arguments121['placeholder'] = NULL;
$arguments121['property'] = NULL;
$arguments121['disabled'] = NULL;
$arguments121['maxlength'] = NULL;
$arguments121['readonly'] = NULL;
$arguments121['errorClass'] = 'f3-form-error';
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper124 = $self->getViewHelper('$viewHelper124', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper124->setArguments($arguments121);
$viewHelper124->setRenderingContext($renderingContext);
$viewHelper124->setRenderChildrenClosure($renderChildrenClosure123);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper124->initializeArgumentsAndRender();

$output0 .= '
				</form>
			</span>
			/ ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments125 = array();
$arguments125['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = NULL;
$arguments125['doubleEncode'] = true;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());

$output0 .= (!is_string($value127) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments125['encoding'] !== NULL ? $arguments125['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments125['doubleEncode']));

$output0 .= '
		</span>
		<span class="bar"> </span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments128 = array();
// Rendering Boolean node
$arguments128['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasMorePages', $renderingContext));
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments131 = array();
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments134 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments135 = array();
// Rendering Array
$array136 = array();
$array136['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments135['arguments'] = $array136;
$arguments135['action'] = NULL;
$arguments135['section'] = '';
$arguments135['format'] = '';
$arguments135['ajax'] = false;
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper138->setArguments($arguments135);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments134['uri'] = $viewHelper138->initializeArgumentsAndRender();
$arguments134['icon'] = 'actions-view-paging-next';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments139 = array();
$arguments139['key'] = 'widget.pagination.next';
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['htmlEscape'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper141->setArguments($arguments139);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments134['title'] = $viewHelper141->initializeArgumentsAndRender();
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper143->setArguments($arguments134);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output133 .= $viewHelper143->initializeArgumentsAndRender();

$output133 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments144 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments145 = array();
// Rendering Array
$array146 = array();
$array146['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments145['arguments'] = $array146;
$arguments145['action'] = NULL;
$arguments145['section'] = '';
$arguments145['format'] = '';
$arguments145['ajax'] = false;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper148 = $self->getViewHelper('$viewHelper148', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper148->setArguments($arguments145);
$viewHelper148->setRenderingContext($renderingContext);
$viewHelper148->setRenderChildrenClosure($renderChildrenClosure147);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments144['uri'] = $viewHelper148->initializeArgumentsAndRender();
$arguments144['icon'] = 'actions-view-paging-last';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments149 = array();
$arguments149['key'] = 'widget.pagination.last';
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['htmlEscape'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper151->setArguments($arguments149);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments144['title'] = $viewHelper151->initializeArgumentsAndRender();
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper153 = $self->getViewHelper('$viewHelper153', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper153->setArguments($arguments144);
$viewHelper153->setRenderingContext($renderingContext);
$viewHelper153->setRenderChildrenClosure($renderChildrenClosure152);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output133 .= $viewHelper153->initializeArgumentsAndRender();

$output133 .= '
			';
return $output133;
};
$viewHelper154 = $self->getViewHelper('$viewHelper154', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper154->setArguments($arguments131);
$viewHelper154->setRenderingContext($renderingContext);
$viewHelper154->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output130 .= $viewHelper154->initializeArgumentsAndRender();

$output130 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments155 = array();
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments158 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments159 = array();
// Rendering Array
$array160 = array();
$array160['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments159['arguments'] = $array160;
$arguments159['action'] = NULL;
$arguments159['section'] = '';
$arguments159['format'] = '';
$arguments159['ajax'] = false;
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper162->setArguments($arguments159);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure161);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments158['uri'] = $viewHelper162->initializeArgumentsAndRender();
$arguments158['icon'] = 'actions-view-paging-next-disabled';
$arguments158['title'] = '';
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper164->setArguments($arguments158);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure163);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output157 .= $viewHelper164->initializeArgumentsAndRender();

$output157 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments165 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments166 = array();
// Rendering Array
$array167 = array();
$array167['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments166['arguments'] = $array167;
$arguments166['action'] = NULL;
$arguments166['section'] = '';
$arguments166['format'] = '';
$arguments166['ajax'] = false;
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper169 = $self->getViewHelper('$viewHelper169', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper169->setArguments($arguments166);
$viewHelper169->setRenderingContext($renderingContext);
$viewHelper169->setRenderChildrenClosure($renderChildrenClosure168);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments165['uri'] = $viewHelper169->initializeArgumentsAndRender();
$arguments165['icon'] = 'actions-view-paging-last-disabled';
$arguments165['title'] = '';
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper171->setArguments($arguments165);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure170);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output157 .= $viewHelper171->initializeArgumentsAndRender();

$output157 .= '
			';
return $output157;
};
$viewHelper172 = $self->getViewHelper('$viewHelper172', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper172->setArguments($arguments155);
$viewHelper172->setRenderingContext($renderingContext);
$viewHelper172->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output130 .= $viewHelper172->initializeArgumentsAndRender();

$output130 .= '
		';
return $output130;
};
$arguments128['__thenClosure'] = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments174 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments175 = array();
// Rendering Array
$array176 = array();
$array176['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments175['arguments'] = $array176;
$arguments175['action'] = NULL;
$arguments175['section'] = '';
$arguments175['format'] = '';
$arguments175['ajax'] = false;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper178 = $self->getViewHelper('$viewHelper178', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper178->setArguments($arguments175);
$viewHelper178->setRenderingContext($renderingContext);
$viewHelper178->setRenderChildrenClosure($renderChildrenClosure177);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments174['uri'] = $viewHelper178->initializeArgumentsAndRender();
$arguments174['icon'] = 'actions-view-paging-next';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments179 = array();
$arguments179['key'] = 'widget.pagination.next';
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['htmlEscape'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper181 = $self->getViewHelper('$viewHelper181', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper181->setArguments($arguments179);
$viewHelper181->setRenderingContext($renderingContext);
$viewHelper181->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments174['title'] = $viewHelper181->initializeArgumentsAndRender();
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper183->setArguments($arguments174);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure182);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output173 .= $viewHelper183->initializeArgumentsAndRender();

$output173 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments184 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments185 = array();
// Rendering Array
$array186 = array();
$array186['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments185['arguments'] = $array186;
$arguments185['action'] = NULL;
$arguments185['section'] = '';
$arguments185['format'] = '';
$arguments185['ajax'] = false;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper188 = $self->getViewHelper('$viewHelper188', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper188->setArguments($arguments185);
$viewHelper188->setRenderingContext($renderingContext);
$viewHelper188->setRenderChildrenClosure($renderChildrenClosure187);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments184['uri'] = $viewHelper188->initializeArgumentsAndRender();
$arguments184['icon'] = 'actions-view-paging-last';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments189 = array();
$arguments189['key'] = 'widget.pagination.last';
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['htmlEscape'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper191 = $self->getViewHelper('$viewHelper191', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper191->setArguments($arguments189);
$viewHelper191->setRenderingContext($renderingContext);
$viewHelper191->setRenderChildrenClosure($renderChildrenClosure190);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments184['title'] = $viewHelper191->initializeArgumentsAndRender();
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper193 = $self->getViewHelper('$viewHelper193', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper193->setArguments($arguments184);
$viewHelper193->setRenderingContext($renderingContext);
$viewHelper193->setRenderChildrenClosure($renderChildrenClosure192);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output173 .= $viewHelper193->initializeArgumentsAndRender();

$output173 .= '
			';
return $output173;
};
$arguments128['__elseClosure'] = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments195 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments196 = array();
// Rendering Array
$array197 = array();
$array197['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments196['arguments'] = $array197;
$arguments196['action'] = NULL;
$arguments196['section'] = '';
$arguments196['format'] = '';
$arguments196['ajax'] = false;
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper199->setArguments($arguments196);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure198);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments195['uri'] = $viewHelper199->initializeArgumentsAndRender();
$arguments195['icon'] = 'actions-view-paging-next-disabled';
$arguments195['title'] = '';
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper201 = $self->getViewHelper('$viewHelper201', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper201->setArguments($arguments195);
$viewHelper201->setRenderingContext($renderingContext);
$viewHelper201->setRenderChildrenClosure($renderChildrenClosure200);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output194 .= $viewHelper201->initializeArgumentsAndRender();

$output194 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments202 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments203 = array();
// Rendering Array
$array204 = array();
$array204['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments203['arguments'] = $array204;
$arguments203['action'] = NULL;
$arguments203['section'] = '';
$arguments203['format'] = '';
$arguments203['ajax'] = false;
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper206->setArguments($arguments203);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments202['uri'] = $viewHelper206->initializeArgumentsAndRender();
$arguments202['icon'] = 'actions-view-paging-last-disabled';
$arguments202['title'] = '';
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper208 = $self->getViewHelper('$viewHelper208', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper208->setArguments($arguments202);
$viewHelper208->setRenderingContext($renderingContext);
$viewHelper208->setRenderChildrenClosure($renderChildrenClosure207);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output194 .= $viewHelper208->initializeArgumentsAndRender();

$output194 .= '
			';
return $output194;
};
$viewHelper209 = $self->getViewHelper('$viewHelper209', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper209->setArguments($arguments128);
$viewHelper209->setRenderingContext($renderingContext);
$viewHelper209->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper209->initializeArgumentsAndRender();

$output0 .= '
		<span class="bar"> </span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments210 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments211 = array();
// Rendering Array
$array212 = array();
$array212['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.current', $renderingContext);
$arguments211['arguments'] = $array212;
$arguments211['action'] = NULL;
$arguments211['section'] = '';
$arguments211['format'] = '';
$arguments211['ajax'] = false;
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper214->setArguments($arguments211);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure213);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments210['uri'] = $viewHelper214->initializeArgumentsAndRender();
$arguments210['icon'] = 'actions-system-refresh';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments215 = array();
$arguments215['key'] = 'widget.pagination.refresh';
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper217 = $self->getViewHelper('$viewHelper217', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper217->setArguments($arguments215);
$viewHelper217->setRenderingContext($renderingContext);
$viewHelper217->setRenderChildrenClosure($renderChildrenClosure216);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments210['title'] = $viewHelper217->initializeArgumentsAndRender();
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper219 = $self->getViewHelper('$viewHelper219', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper219->setArguments($arguments210);
$viewHelper219->setRenderingContext($renderingContext);
$viewHelper219->setRenderChildrenClosure($renderChildrenClosure218);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output0 .= $viewHelper219->initializeArgumentsAndRender();

$output0 .= '
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output220 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments221 = array();
// Rendering Boolean node
$arguments221['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.insertAbove', $renderingContext));
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments224 = array();
$arguments224['section'] = 'paginator';
// Rendering Array
$array225 = array();
$array225['pagination'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination', $renderingContext);
$array225['position'] = 'top';
$array225['recordsLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.recordsLabel', $renderingContext);
$arguments224['arguments'] = $array225;
$arguments224['partial'] = NULL;
$arguments224['optional'] = false;
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper227 = $self->getViewHelper('$viewHelper227', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper227->setArguments($arguments224);
$viewHelper227->setRenderingContext($renderingContext);
$viewHelper227->setRenderChildrenClosure($renderChildrenClosure226);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output223 .= $viewHelper227->initializeArgumentsAndRender();

$output223 .= '
';
return $output223;
};
$viewHelper228 = $self->getViewHelper('$viewHelper228', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper228->setArguments($arguments221);
$viewHelper228->setRenderingContext($renderingContext);
$viewHelper228->setRenderChildrenClosure($renderChildrenClosure222);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output220 .= $viewHelper228->initializeArgumentsAndRender();

$output220 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$arguments229 = array();
$arguments229['arguments'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'contentArguments', $renderingContext);
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper231 = $self->getViewHelper('$viewHelper231', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper');
$viewHelper231->setArguments($arguments229);
$viewHelper231->setRenderingContext($renderingContext);
$viewHelper231->setRenderChildrenClosure($renderChildrenClosure230);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper

$output220 .= $viewHelper231->initializeArgumentsAndRender();

$output220 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments232 = array();
// Rendering Boolean node
$arguments232['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.insertBelow', $renderingContext));
$arguments232['then'] = NULL;
$arguments232['else'] = NULL;
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments235 = array();
$arguments235['section'] = 'paginator';
// Rendering Array
$array236 = array();
$array236['pagination'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination', $renderingContext);
$array236['position'] = 'bottom';
$array236['recordsLabel'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration.recordsLabel', $renderingContext);
$arguments235['arguments'] = $array236;
$arguments235['partial'] = NULL;
$arguments235['optional'] = false;
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper238 = $self->getViewHelper('$viewHelper238', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper238->setArguments($arguments235);
$viewHelper238->setRenderingContext($renderingContext);
$viewHelper238->setRenderChildrenClosure($renderChildrenClosure237);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output234 .= $viewHelper238->initializeArgumentsAndRender();

$output234 .= '
';
return $output234;
};
$viewHelper239 = $self->getViewHelper('$viewHelper239', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper239->setArguments($arguments232);
$viewHelper239->setRenderingContext($renderingContext);
$viewHelper239->setRenderChildrenClosure($renderChildrenClosure233);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output220 .= $viewHelper239->initializeArgumentsAndRender();

$output220 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments240 = array();
$arguments240['name'] = 'paginator';
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
	<div id="typo3-dblist-pagination">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments243 = array();
// Rendering Boolean node
$arguments243['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasLessPages', $renderingContext));
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments246 = array();
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments249 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments250 = array();
// Rendering Array
$array251 = array();
$array251['currentPage'] = 1;
$arguments250['arguments'] = $array251;
$arguments250['action'] = NULL;
$arguments250['section'] = '';
$arguments250['format'] = '';
$arguments250['ajax'] = false;
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper253 = $self->getViewHelper('$viewHelper253', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper253->setArguments($arguments250);
$viewHelper253->setRenderingContext($renderingContext);
$viewHelper253->setRenderChildrenClosure($renderChildrenClosure252);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments249['uri'] = $viewHelper253->initializeArgumentsAndRender();
$arguments249['icon'] = 'actions-view-paging-first';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments254 = array();
$arguments254['key'] = 'widget.pagination.first';
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
$arguments249['title'] = $viewHelper256->initializeArgumentsAndRender();
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper258 = $self->getViewHelper('$viewHelper258', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper258->setArguments($arguments249);
$viewHelper258->setRenderingContext($renderingContext);
$viewHelper258->setRenderChildrenClosure($renderChildrenClosure257);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output248 .= $viewHelper258->initializeArgumentsAndRender();

$output248 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments259 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments260 = array();
// Rendering Array
$array261 = array();
$array261['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments260['arguments'] = $array261;
$arguments260['action'] = NULL;
$arguments260['section'] = '';
$arguments260['format'] = '';
$arguments260['ajax'] = false;
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper263 = $self->getViewHelper('$viewHelper263', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper263->setArguments($arguments260);
$viewHelper263->setRenderingContext($renderingContext);
$viewHelper263->setRenderChildrenClosure($renderChildrenClosure262);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments259['uri'] = $viewHelper263->initializeArgumentsAndRender();
$arguments259['icon'] = 'actions-view-paging-previous';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments264 = array();
$arguments264['key'] = 'widget.pagination.previous';
$arguments264['id'] = NULL;
$arguments264['default'] = NULL;
$arguments264['htmlEscape'] = NULL;
$arguments264['arguments'] = NULL;
$arguments264['extensionName'] = NULL;
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper266 = $self->getViewHelper('$viewHelper266', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper266->setArguments($arguments264);
$viewHelper266->setRenderingContext($renderingContext);
$viewHelper266->setRenderChildrenClosure($renderChildrenClosure265);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments259['title'] = $viewHelper266->initializeArgumentsAndRender();
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper268 = $self->getViewHelper('$viewHelper268', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper268->setArguments($arguments259);
$viewHelper268->setRenderingContext($renderingContext);
$viewHelper268->setRenderChildrenClosure($renderChildrenClosure267);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output248 .= $viewHelper268->initializeArgumentsAndRender();

$output248 .= '
			';
return $output248;
};
$viewHelper269 = $self->getViewHelper('$viewHelper269', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper269->setArguments($arguments246);
$viewHelper269->setRenderingContext($renderingContext);
$viewHelper269->setRenderChildrenClosure($renderChildrenClosure247);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output245 .= $viewHelper269->initializeArgumentsAndRender();

$output245 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments270 = array();
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments273 = array();
$arguments273['uri'] = '';
$arguments273['icon'] = 'actions-view-paging-first-disabled';
$arguments273['title'] = '';
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper275 = $self->getViewHelper('$viewHelper275', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper275->setArguments($arguments273);
$viewHelper275->setRenderingContext($renderingContext);
$viewHelper275->setRenderChildrenClosure($renderChildrenClosure274);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output272 .= $viewHelper275->initializeArgumentsAndRender();

$output272 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments276 = array();
$arguments276['uri'] = '';
$arguments276['icon'] = 'actions-view-paging-previous-disabled';
$arguments276['title'] = '';
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper278 = $self->getViewHelper('$viewHelper278', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper278->setArguments($arguments276);
$viewHelper278->setRenderingContext($renderingContext);
$viewHelper278->setRenderChildrenClosure($renderChildrenClosure277);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output272 .= $viewHelper278->initializeArgumentsAndRender();

$output272 .= '
			';
return $output272;
};
$viewHelper279 = $self->getViewHelper('$viewHelper279', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper279->setArguments($arguments270);
$viewHelper279->setRenderingContext($renderingContext);
$viewHelper279->setRenderChildrenClosure($renderChildrenClosure271);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output245 .= $viewHelper279->initializeArgumentsAndRender();

$output245 .= '
		';
return $output245;
};
$arguments243['__thenClosure'] = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments281 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments282 = array();
// Rendering Array
$array283 = array();
$array283['currentPage'] = 1;
$arguments282['arguments'] = $array283;
$arguments282['action'] = NULL;
$arguments282['section'] = '';
$arguments282['format'] = '';
$arguments282['ajax'] = false;
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper285 = $self->getViewHelper('$viewHelper285', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper285->setArguments($arguments282);
$viewHelper285->setRenderingContext($renderingContext);
$viewHelper285->setRenderChildrenClosure($renderChildrenClosure284);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments281['uri'] = $viewHelper285->initializeArgumentsAndRender();
$arguments281['icon'] = 'actions-view-paging-first';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments286 = array();
$arguments286['key'] = 'widget.pagination.first';
$arguments286['id'] = NULL;
$arguments286['default'] = NULL;
$arguments286['htmlEscape'] = NULL;
$arguments286['arguments'] = NULL;
$arguments286['extensionName'] = NULL;
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper288 = $self->getViewHelper('$viewHelper288', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper288->setArguments($arguments286);
$viewHelper288->setRenderingContext($renderingContext);
$viewHelper288->setRenderChildrenClosure($renderChildrenClosure287);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments281['title'] = $viewHelper288->initializeArgumentsAndRender();
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper290 = $self->getViewHelper('$viewHelper290', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper290->setArguments($arguments281);
$viewHelper290->setRenderingContext($renderingContext);
$viewHelper290->setRenderChildrenClosure($renderChildrenClosure289);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output280 .= $viewHelper290->initializeArgumentsAndRender();

$output280 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments291 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments292 = array();
// Rendering Array
$array293 = array();
$array293['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.previousPage', $renderingContext);
$arguments292['arguments'] = $array293;
$arguments292['action'] = NULL;
$arguments292['section'] = '';
$arguments292['format'] = '';
$arguments292['ajax'] = false;
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper295 = $self->getViewHelper('$viewHelper295', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper295->setArguments($arguments292);
$viewHelper295->setRenderingContext($renderingContext);
$viewHelper295->setRenderChildrenClosure($renderChildrenClosure294);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments291['uri'] = $viewHelper295->initializeArgumentsAndRender();
$arguments291['icon'] = 'actions-view-paging-previous';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments296 = array();
$arguments296['key'] = 'widget.pagination.previous';
$arguments296['id'] = NULL;
$arguments296['default'] = NULL;
$arguments296['htmlEscape'] = NULL;
$arguments296['arguments'] = NULL;
$arguments296['extensionName'] = NULL;
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper298 = $self->getViewHelper('$viewHelper298', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper298->setArguments($arguments296);
$viewHelper298->setRenderingContext($renderingContext);
$viewHelper298->setRenderChildrenClosure($renderChildrenClosure297);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments291['title'] = $viewHelper298->initializeArgumentsAndRender();
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper300 = $self->getViewHelper('$viewHelper300', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper300->setArguments($arguments291);
$viewHelper300->setRenderingContext($renderingContext);
$viewHelper300->setRenderChildrenClosure($renderChildrenClosure299);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output280 .= $viewHelper300->initializeArgumentsAndRender();

$output280 .= '
			';
return $output280;
};
$arguments243['__elseClosure'] = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments302 = array();
$arguments302['uri'] = '';
$arguments302['icon'] = 'actions-view-paging-first-disabled';
$arguments302['title'] = '';
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper304 = $self->getViewHelper('$viewHelper304', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper304->setArguments($arguments302);
$viewHelper304->setRenderingContext($renderingContext);
$viewHelper304->setRenderChildrenClosure($renderChildrenClosure303);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output301 .= $viewHelper304->initializeArgumentsAndRender();

$output301 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments305 = array();
$arguments305['uri'] = '';
$arguments305['icon'] = 'actions-view-paging-previous-disabled';
$arguments305['title'] = '';
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper307 = $self->getViewHelper('$viewHelper307', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper307->setArguments($arguments305);
$viewHelper307->setRenderingContext($renderingContext);
$viewHelper307->setRenderChildrenClosure($renderChildrenClosure306);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output301 .= $viewHelper307->initializeArgumentsAndRender();

$output301 .= '
			';
return $output301;
};
$viewHelper308 = $self->getViewHelper('$viewHelper308', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper308->setArguments($arguments243);
$viewHelper308->setRenderingContext($renderingContext);
$viewHelper308->setRenderChildrenClosure($renderChildrenClosure244);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output242 .= $viewHelper308->initializeArgumentsAndRender();

$output242 .= '
		<span class="bar"> </span>
		<span class="pageIndicator">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments309 = array();
// Rendering Boolean node
$arguments309['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext));
$arguments309['then'] = NULL;
$arguments309['else'] = NULL;
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments312 = array();
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments315 = array();
$arguments315['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext);
$arguments315['keepQuotes'] = false;
$arguments315['encoding'] = NULL;
$arguments315['doubleEncode'] = true;
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$value317 = ($arguments315['value'] !== NULL ? $arguments315['value'] : $renderChildrenClosure316());

$output314 .= (!is_string($value317) ? $value317 : htmlspecialchars($value317, ($arguments315['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments315['encoding'] !== NULL ? $arguments315['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments315['doubleEncode']));

$output314 .= '
				';
return $output314;
};
$viewHelper318 = $self->getViewHelper('$viewHelper318', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper318->setArguments($arguments312);
$viewHelper318->setRenderingContext($renderingContext);
$viewHelper318->setRenderChildrenClosure($renderChildrenClosure313);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output311 .= $viewHelper318->initializeArgumentsAndRender();

$output311 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments319 = array();
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments322 = array();
$arguments322['key'] = 'widget.pagination.records';
$arguments322['id'] = NULL;
$arguments322['default'] = NULL;
$arguments322['htmlEscape'] = NULL;
$arguments322['arguments'] = NULL;
$arguments322['extensionName'] = NULL;
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper324 = $self->getViewHelper('$viewHelper324', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper324->setArguments($arguments322);
$viewHelper324->setRenderingContext($renderingContext);
$viewHelper324->setRenderChildrenClosure($renderChildrenClosure323);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output321 .= $viewHelper324->initializeArgumentsAndRender();

$output321 .= '
				';
return $output321;
};
$viewHelper325 = $self->getViewHelper('$viewHelper325', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper325->setArguments($arguments319);
$viewHelper325->setRenderingContext($renderingContext);
$viewHelper325->setRenderChildrenClosure($renderChildrenClosure320);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output311 .= $viewHelper325->initializeArgumentsAndRender();

$output311 .= '
			';
return $output311;
};
$arguments309['__thenClosure'] = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments327 = array();
$arguments327['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'recordsLabel', $renderingContext);
$arguments327['keepQuotes'] = false;
$arguments327['encoding'] = NULL;
$arguments327['doubleEncode'] = true;
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$value329 = ($arguments327['value'] !== NULL ? $arguments327['value'] : $renderChildrenClosure328());

$output326 .= (!is_string($value329) ? $value329 : htmlspecialchars($value329, ($arguments327['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments327['encoding'] !== NULL ? $arguments327['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments327['doubleEncode']));

$output326 .= '
				';
return $output326;
};
$arguments309['__elseClosure'] = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments331 = array();
$arguments331['key'] = 'widget.pagination.records';
$arguments331['id'] = NULL;
$arguments331['default'] = NULL;
$arguments331['htmlEscape'] = NULL;
$arguments331['arguments'] = NULL;
$arguments331['extensionName'] = NULL;
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper333 = $self->getViewHelper('$viewHelper333', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper333->setArguments($arguments331);
$viewHelper333->setRenderingContext($renderingContext);
$viewHelper333->setRenderChildrenClosure($renderChildrenClosure332);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output330 .= $viewHelper333->initializeArgumentsAndRender();

$output330 .= '
				';
return $output330;
};
$viewHelper334 = $self->getViewHelper('$viewHelper334', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper334->setArguments($arguments309);
$viewHelper334->setRenderingContext($renderingContext);
$viewHelper334->setRenderChildrenClosure($renderChildrenClosure310);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output242 .= $viewHelper334->initializeArgumentsAndRender();

$output242 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments335 = array();
$arguments335['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.startRecord', $renderingContext);
$arguments335['keepQuotes'] = false;
$arguments335['encoding'] = NULL;
$arguments335['doubleEncode'] = true;
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$value337 = ($arguments335['value'] !== NULL ? $arguments335['value'] : $renderChildrenClosure336());

$output242 .= (!is_string($value337) ? $value337 : htmlspecialchars($value337, ($arguments335['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments335['encoding'] !== NULL ? $arguments335['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments335['doubleEncode']));

$output242 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments338 = array();
$arguments338['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.endRecord', $renderingContext);
$arguments338['keepQuotes'] = false;
$arguments338['encoding'] = NULL;
$arguments338['doubleEncode'] = true;
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$value340 = ($arguments338['value'] !== NULL ? $arguments338['value'] : $renderChildrenClosure339());

$output242 .= (!is_string($value340) ? $value340 : htmlspecialchars($value340, ($arguments338['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments338['encoding'] !== NULL ? $arguments338['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments338['doubleEncode']));

$output242 .= '</span>
		<span class="bar"> </span>
		<span class="pageIndicator">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments341 = array();
$arguments341['key'] = 'widget.pagination.page';
$arguments341['id'] = NULL;
$arguments341['default'] = NULL;
$arguments341['htmlEscape'] = NULL;
$arguments341['arguments'] = NULL;
$arguments341['extensionName'] = NULL;
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper343 = $self->getViewHelper('$viewHelper343', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper343->setArguments($arguments341);
$viewHelper343->setRenderingContext($renderingContext);
$viewHelper343->setRenderChildrenClosure($renderChildrenClosure342);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output242 .= $viewHelper343->initializeArgumentsAndRender();

$output242 .= '
			<span>
				<form id="paginator-form-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments344 = array();
$arguments344['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments344['keepQuotes'] = false;
$arguments344['encoding'] = NULL;
$arguments344['doubleEncode'] = true;
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$value346 = ($arguments344['value'] !== NULL ? $arguments344['value'] : $renderChildrenClosure345());

$output242 .= (!is_string($value346) ? $value346 : htmlspecialchars($value346, ($arguments344['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments344['encoding'] !== NULL ? $arguments344['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments344['doubleEncode']));

$output242 .= '" onsubmit="goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments347 = array();
$arguments347['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments347['keepQuotes'] = false;
$arguments347['encoding'] = NULL;
$arguments347['doubleEncode'] = true;
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$value349 = ($arguments347['value'] !== NULL ? $arguments347['value'] : $renderChildrenClosure348());

$output242 .= (!is_string($value349) ? $value349 : htmlspecialchars($value349, ($arguments347['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments347['encoding'] !== NULL ? $arguments347['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments347['doubleEncode']));

$output242 .= '(this); return false;" style="display:inline;">
				<script type="text/javascript">
					function goToPage';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments350 = array();
$arguments350['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments350['keepQuotes'] = false;
$arguments350['encoding'] = NULL;
$arguments350['doubleEncode'] = true;
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
return NULL;
};
$value352 = ($arguments350['value'] !== NULL ? $arguments350['value'] : $renderChildrenClosure351());

$output242 .= (!is_string($value352) ? $value352 : htmlspecialchars($value352, ($arguments350['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments350['encoding'] !== NULL ? $arguments350['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments350['doubleEncode']));

$output242 .= '(formObject) {
						var url = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments353 = array();
// Rendering Array
$array354 = array();
$array354['currentPage'] = 987654321;
$arguments353['arguments'] = $array354;
$arguments353['action'] = NULL;
$arguments353['section'] = '';
$arguments353['format'] = '';
$arguments353['ajax'] = false;
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper356 = $self->getViewHelper('$viewHelper356', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper356->setArguments($arguments353);
$viewHelper356->setRenderingContext($renderingContext);
$viewHelper356->setRenderChildrenClosure($renderChildrenClosure355);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper

$output242 .= $viewHelper356->initializeArgumentsAndRender();

$output242 .= '\';
						var page = formObject.elements[\'paginator-target-page\'].value;
						if (page > ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments357 = array();
$arguments357['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments357['keepQuotes'] = false;
$arguments357['encoding'] = NULL;
$arguments357['doubleEncode'] = true;
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$value359 = ($arguments357['value'] !== NULL ? $arguments357['value'] : $renderChildrenClosure358());

$output242 .= (!is_string($value359) ? $value359 : htmlspecialchars($value359, ($arguments357['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments357['encoding'] !== NULL ? $arguments357['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments357['doubleEncode']));

$output242 .= ') {
							page = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments360 = array();
$arguments360['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments360['keepQuotes'] = false;
$arguments360['encoding'] = NULL;
$arguments360['doubleEncode'] = true;
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$value362 = ($arguments360['value'] !== NULL ? $arguments360['value'] : $renderChildrenClosure361());

$output242 .= (!is_string($value362) ? $value362 : htmlspecialchars($value362, ($arguments360['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments360['encoding'] !== NULL ? $arguments360['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments360['doubleEncode']));

$output242 .= ';
						} else if (page < 1) {
							page = 1;
						}
						url = url.replace(\'987654321\', page);
						self.location.href= url;
					}
				</script>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments363 = array();
$output364 = '';

$output364 .= 'paginator-';

$output364 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'position', $renderingContext);
$arguments363['id'] = $output364;
$arguments363['name'] = 'paginator-target-page';
$arguments363['size'] = '5';
$arguments363['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.current', $renderingContext);
$arguments363['additionalAttributes'] = NULL;
$arguments363['required'] = NULL;
$arguments363['type'] = 'text';
$arguments363['placeholder'] = NULL;
$arguments363['property'] = NULL;
$arguments363['disabled'] = NULL;
$arguments363['maxlength'] = NULL;
$arguments363['readonly'] = NULL;
$arguments363['errorClass'] = 'f3-form-error';
$arguments363['class'] = NULL;
$arguments363['dir'] = NULL;
$arguments363['lang'] = NULL;
$arguments363['style'] = NULL;
$arguments363['title'] = NULL;
$arguments363['accesskey'] = NULL;
$arguments363['tabindex'] = NULL;
$arguments363['onclick'] = NULL;
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper366 = $self->getViewHelper('$viewHelper366', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper366->setArguments($arguments363);
$viewHelper366->setRenderingContext($renderingContext);
$viewHelper366->setRenderChildrenClosure($renderChildrenClosure365);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output242 .= $viewHelper366->initializeArgumentsAndRender();

$output242 .= '
				</form>
			</span>
			/ ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments367 = array();
$arguments367['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments367['keepQuotes'] = false;
$arguments367['encoding'] = NULL;
$arguments367['doubleEncode'] = true;
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$value369 = ($arguments367['value'] !== NULL ? $arguments367['value'] : $renderChildrenClosure368());

$output242 .= (!is_string($value369) ? $value369 : htmlspecialchars($value369, ($arguments367['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments367['encoding'] !== NULL ? $arguments367['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments367['doubleEncode']));

$output242 .= '
		</span>
		<span class="bar"> </span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments370 = array();
// Rendering Boolean node
$arguments370['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.hasMorePages', $renderingContext));
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments373 = array();
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments376 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments377 = array();
// Rendering Array
$array378 = array();
$array378['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments377['arguments'] = $array378;
$arguments377['action'] = NULL;
$arguments377['section'] = '';
$arguments377['format'] = '';
$arguments377['ajax'] = false;
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper380 = $self->getViewHelper('$viewHelper380', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper380->setArguments($arguments377);
$viewHelper380->setRenderingContext($renderingContext);
$viewHelper380->setRenderChildrenClosure($renderChildrenClosure379);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments376['uri'] = $viewHelper380->initializeArgumentsAndRender();
$arguments376['icon'] = 'actions-view-paging-next';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments381 = array();
$arguments381['key'] = 'widget.pagination.next';
$arguments381['id'] = NULL;
$arguments381['default'] = NULL;
$arguments381['htmlEscape'] = NULL;
$arguments381['arguments'] = NULL;
$arguments381['extensionName'] = NULL;
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper383 = $self->getViewHelper('$viewHelper383', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper383->setArguments($arguments381);
$viewHelper383->setRenderingContext($renderingContext);
$viewHelper383->setRenderChildrenClosure($renderChildrenClosure382);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments376['title'] = $viewHelper383->initializeArgumentsAndRender();
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper385 = $self->getViewHelper('$viewHelper385', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper385->setArguments($arguments376);
$viewHelper385->setRenderingContext($renderingContext);
$viewHelper385->setRenderChildrenClosure($renderChildrenClosure384);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output375 .= $viewHelper385->initializeArgumentsAndRender();

$output375 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments386 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments387 = array();
// Rendering Array
$array388 = array();
$array388['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments387['arguments'] = $array388;
$arguments387['action'] = NULL;
$arguments387['section'] = '';
$arguments387['format'] = '';
$arguments387['ajax'] = false;
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper390 = $self->getViewHelper('$viewHelper390', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper390->setArguments($arguments387);
$viewHelper390->setRenderingContext($renderingContext);
$viewHelper390->setRenderChildrenClosure($renderChildrenClosure389);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments386['uri'] = $viewHelper390->initializeArgumentsAndRender();
$arguments386['icon'] = 'actions-view-paging-last';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments391 = array();
$arguments391['key'] = 'widget.pagination.last';
$arguments391['id'] = NULL;
$arguments391['default'] = NULL;
$arguments391['htmlEscape'] = NULL;
$arguments391['arguments'] = NULL;
$arguments391['extensionName'] = NULL;
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper393 = $self->getViewHelper('$viewHelper393', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper393->setArguments($arguments391);
$viewHelper393->setRenderingContext($renderingContext);
$viewHelper393->setRenderChildrenClosure($renderChildrenClosure392);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments386['title'] = $viewHelper393->initializeArgumentsAndRender();
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper395 = $self->getViewHelper('$viewHelper395', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper395->setArguments($arguments386);
$viewHelper395->setRenderingContext($renderingContext);
$viewHelper395->setRenderChildrenClosure($renderChildrenClosure394);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output375 .= $viewHelper395->initializeArgumentsAndRender();

$output375 .= '
			';
return $output375;
};
$viewHelper396 = $self->getViewHelper('$viewHelper396', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper396->setArguments($arguments373);
$viewHelper396->setRenderingContext($renderingContext);
$viewHelper396->setRenderChildrenClosure($renderChildrenClosure374);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output372 .= $viewHelper396->initializeArgumentsAndRender();

$output372 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments397 = array();
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output399 = '';

$output399 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments400 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments401 = array();
// Rendering Array
$array402 = array();
$array402['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments401['arguments'] = $array402;
$arguments401['action'] = NULL;
$arguments401['section'] = '';
$arguments401['format'] = '';
$arguments401['ajax'] = false;
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper404 = $self->getViewHelper('$viewHelper404', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper404->setArguments($arguments401);
$viewHelper404->setRenderingContext($renderingContext);
$viewHelper404->setRenderChildrenClosure($renderChildrenClosure403);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments400['uri'] = $viewHelper404->initializeArgumentsAndRender();
$arguments400['icon'] = 'actions-view-paging-next-disabled';
$arguments400['title'] = '';
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper406 = $self->getViewHelper('$viewHelper406', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper406->setArguments($arguments400);
$viewHelper406->setRenderingContext($renderingContext);
$viewHelper406->setRenderChildrenClosure($renderChildrenClosure405);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output399 .= $viewHelper406->initializeArgumentsAndRender();

$output399 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments407 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments408 = array();
// Rendering Array
$array409 = array();
$array409['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments408['arguments'] = $array409;
$arguments408['action'] = NULL;
$arguments408['section'] = '';
$arguments408['format'] = '';
$arguments408['ajax'] = false;
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper411 = $self->getViewHelper('$viewHelper411', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper411->setArguments($arguments408);
$viewHelper411->setRenderingContext($renderingContext);
$viewHelper411->setRenderChildrenClosure($renderChildrenClosure410);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments407['uri'] = $viewHelper411->initializeArgumentsAndRender();
$arguments407['icon'] = 'actions-view-paging-last-disabled';
$arguments407['title'] = '';
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper413 = $self->getViewHelper('$viewHelper413', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper413->setArguments($arguments407);
$viewHelper413->setRenderingContext($renderingContext);
$viewHelper413->setRenderChildrenClosure($renderChildrenClosure412);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output399 .= $viewHelper413->initializeArgumentsAndRender();

$output399 .= '
			';
return $output399;
};
$viewHelper414 = $self->getViewHelper('$viewHelper414', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper414->setArguments($arguments397);
$viewHelper414->setRenderingContext($renderingContext);
$viewHelper414->setRenderChildrenClosure($renderChildrenClosure398);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output372 .= $viewHelper414->initializeArgumentsAndRender();

$output372 .= '
		';
return $output372;
};
$arguments370['__thenClosure'] = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments416 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments417 = array();
// Rendering Array
$array418 = array();
$array418['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments417['arguments'] = $array418;
$arguments417['action'] = NULL;
$arguments417['section'] = '';
$arguments417['format'] = '';
$arguments417['ajax'] = false;
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper420 = $self->getViewHelper('$viewHelper420', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper420->setArguments($arguments417);
$viewHelper420->setRenderingContext($renderingContext);
$viewHelper420->setRenderChildrenClosure($renderChildrenClosure419);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments416['uri'] = $viewHelper420->initializeArgumentsAndRender();
$arguments416['icon'] = 'actions-view-paging-next';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments421 = array();
$arguments421['key'] = 'widget.pagination.next';
$arguments421['id'] = NULL;
$arguments421['default'] = NULL;
$arguments421['htmlEscape'] = NULL;
$arguments421['arguments'] = NULL;
$arguments421['extensionName'] = NULL;
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper423 = $self->getViewHelper('$viewHelper423', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper423->setArguments($arguments421);
$viewHelper423->setRenderingContext($renderingContext);
$viewHelper423->setRenderChildrenClosure($renderChildrenClosure422);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments416['title'] = $viewHelper423->initializeArgumentsAndRender();
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper425 = $self->getViewHelper('$viewHelper425', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper425->setArguments($arguments416);
$viewHelper425->setRenderingContext($renderingContext);
$viewHelper425->setRenderChildrenClosure($renderChildrenClosure424);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output415 .= $viewHelper425->initializeArgumentsAndRender();

$output415 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments426 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments427 = array();
// Rendering Array
$array428 = array();
$array428['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments427['arguments'] = $array428;
$arguments427['action'] = NULL;
$arguments427['section'] = '';
$arguments427['format'] = '';
$arguments427['ajax'] = false;
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper430 = $self->getViewHelper('$viewHelper430', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper430->setArguments($arguments427);
$viewHelper430->setRenderingContext($renderingContext);
$viewHelper430->setRenderChildrenClosure($renderChildrenClosure429);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments426['uri'] = $viewHelper430->initializeArgumentsAndRender();
$arguments426['icon'] = 'actions-view-paging-last';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments431 = array();
$arguments431['key'] = 'widget.pagination.last';
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['htmlEscape'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper433 = $self->getViewHelper('$viewHelper433', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper433->setArguments($arguments431);
$viewHelper433->setRenderingContext($renderingContext);
$viewHelper433->setRenderChildrenClosure($renderChildrenClosure432);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments426['title'] = $viewHelper433->initializeArgumentsAndRender();
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper435 = $self->getViewHelper('$viewHelper435', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper435->setArguments($arguments426);
$viewHelper435->setRenderingContext($renderingContext);
$viewHelper435->setRenderChildrenClosure($renderChildrenClosure434);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output415 .= $viewHelper435->initializeArgumentsAndRender();

$output415 .= '
			';
return $output415;
};
$arguments370['__elseClosure'] = function() use ($renderingContext, $self) {
$output436 = '';

$output436 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments437 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments438 = array();
// Rendering Array
$array439 = array();
$array439['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.nextPage', $renderingContext);
$arguments438['arguments'] = $array439;
$arguments438['action'] = NULL;
$arguments438['section'] = '';
$arguments438['format'] = '';
$arguments438['ajax'] = false;
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper441 = $self->getViewHelper('$viewHelper441', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper441->setArguments($arguments438);
$viewHelper441->setRenderingContext($renderingContext);
$viewHelper441->setRenderChildrenClosure($renderChildrenClosure440);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments437['uri'] = $viewHelper441->initializeArgumentsAndRender();
$arguments437['icon'] = 'actions-view-paging-next-disabled';
$arguments437['title'] = '';
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper443 = $self->getViewHelper('$viewHelper443', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper443->setArguments($arguments437);
$viewHelper443->setRenderingContext($renderingContext);
$viewHelper443->setRenderChildrenClosure($renderChildrenClosure442);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output436 .= $viewHelper443->initializeArgumentsAndRender();

$output436 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments444 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments445 = array();
// Rendering Array
$array446 = array();
$array446['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.numberOfPages', $renderingContext);
$arguments445['arguments'] = $array446;
$arguments445['action'] = NULL;
$arguments445['section'] = '';
$arguments445['format'] = '';
$arguments445['ajax'] = false;
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper448 = $self->getViewHelper('$viewHelper448', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper448->setArguments($arguments445);
$viewHelper448->setRenderingContext($renderingContext);
$viewHelper448->setRenderChildrenClosure($renderChildrenClosure447);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments444['uri'] = $viewHelper448->initializeArgumentsAndRender();
$arguments444['icon'] = 'actions-view-paging-last-disabled';
$arguments444['title'] = '';
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper450 = $self->getViewHelper('$viewHelper450', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper450->setArguments($arguments444);
$viewHelper450->setRenderingContext($renderingContext);
$viewHelper450->setRenderChildrenClosure($renderChildrenClosure449);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output436 .= $viewHelper450->initializeArgumentsAndRender();

$output436 .= '
			';
return $output436;
};
$viewHelper451 = $self->getViewHelper('$viewHelper451', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper451->setArguments($arguments370);
$viewHelper451->setRenderingContext($renderingContext);
$viewHelper451->setRenderChildrenClosure($renderChildrenClosure371);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output242 .= $viewHelper451->initializeArgumentsAndRender();

$output242 .= '
		<span class="bar"> </span>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments452 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments453 = array();
// Rendering Array
$array454 = array();
$array454['currentPage'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'pagination.current', $renderingContext);
$arguments453['arguments'] = $array454;
$arguments453['action'] = NULL;
$arguments453['section'] = '';
$arguments453['format'] = '';
$arguments453['ajax'] = false;
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper456 = $self->getViewHelper('$viewHelper456', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper');
$viewHelper456->setArguments($arguments453);
$viewHelper456->setRenderingContext($renderingContext);
$viewHelper456->setRenderChildrenClosure($renderChildrenClosure455);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$arguments452['uri'] = $viewHelper456->initializeArgumentsAndRender();
$arguments452['icon'] = 'actions-system-refresh';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments457 = array();
$arguments457['key'] = 'widget.pagination.refresh';
$arguments457['id'] = NULL;
$arguments457['default'] = NULL;
$arguments457['htmlEscape'] = NULL;
$arguments457['arguments'] = NULL;
$arguments457['extensionName'] = NULL;
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper459 = $self->getViewHelper('$viewHelper459', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper459->setArguments($arguments457);
$viewHelper459->setRenderingContext($renderingContext);
$viewHelper459->setRenderChildrenClosure($renderChildrenClosure458);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments452['title'] = $viewHelper459->initializeArgumentsAndRender();
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper461 = $self->getViewHelper('$viewHelper461', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper461->setArguments($arguments452);
$viewHelper461->setRenderingContext($renderingContext);
$viewHelper461->setRenderChildrenClosure($renderChildrenClosure460);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output242 .= $viewHelper461->initializeArgumentsAndRender();

$output242 .= '
	</div>
';
return $output242;
};

$output220 .= '';

$output220 .= '
';

return $output220;
}


}
#1379767691    118745    