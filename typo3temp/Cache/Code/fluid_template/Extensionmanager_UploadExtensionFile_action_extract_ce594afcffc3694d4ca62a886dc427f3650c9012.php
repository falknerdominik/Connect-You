<?php
class FluidCache_Extensionmanager_UploadExtensionFile_action_extract_ce594afcffc3694d4ca62a886dc427f3650c9012 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Format\JsonEncodeViewHelper
$arguments1 = array();
// Rendering Array
$array2 = array();
$array2['success'] = 'true';
$array2['extension'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extensionKey', $renderingContext);
$array2['error'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'error', $renderingContext);
$arguments1['additionalAttributes'] = $array2;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\Format\JsonEncodeViewHelper');
$viewHelper4->setArguments($arguments1);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Format\JsonEncodeViewHelper

$output0 .= $viewHelper4->initializeArgumentsAndRender();

return $output0;
}


}
#1379767635    1810      