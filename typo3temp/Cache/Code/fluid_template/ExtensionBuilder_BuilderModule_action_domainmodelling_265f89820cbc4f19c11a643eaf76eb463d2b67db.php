<?php
class FluidCache_ExtensionBuilder_BuilderModule_action_domainmodelling_265f89820cbc4f19c11a643eaf76eb463d2b67db extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section header
 */
public function section_594fd1615a341c77829e83ed988f137e1ba96231(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper Tx_ExtensionBuilder_ViewHelpers_Be_ConfigurationViewHelper
$arguments1 = array();
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'Tx_ExtensionBuilder_ViewHelpers_Be_ConfigurationViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Tx_ExtensionBuilder_ViewHelpers_Be_ConfigurationViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * section iconButtons
 */
public function section_cfe02ef001375ab02a741661b53c8aacfcbfd7a0(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
';
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '

	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.baseUrl + "Resources/Public/jsDomainModeling/wireit/lib/inputex/images/space.gif";

		YAHOO.util.Event.onDOMReady( function() {
			var editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
		});
	</script>

	<div id="domainModelEditor" class="yui-skin-sam">

		<div id="left">
			<div id="propertiesForm"></div>
		</div>

		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>

		<div id="bottom">
			<center><div id="toolbar"></div></center>
		</div>

		<div id="helpPanel">

		</div>

	</div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments5 = array();
$arguments5['name'] = 'Default';
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output4 .= $viewHelper7->initializeArgumentsAndRender();

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments8 = array();
$arguments8['name'] = 'header';
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
	';
// Rendering ViewHelper Tx_ExtensionBuilder_ViewHelpers_Be_ConfigurationViewHelper
$arguments11 = array();
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'Tx_ExtensionBuilder_ViewHelpers_Be_ConfigurationViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper Tx_ExtensionBuilder_ViewHelpers_Be_ConfigurationViewHelper

$output10 .= $viewHelper13->initializeArgumentsAndRender();

$output10 .= '
';
return $output10;
};

$output4 .= '';

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments14 = array();
$arguments14['name'] = 'iconButtons';
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return '
';
};

$output4 .= '';

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments16 = array();
$arguments16['name'] = 'content';
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return '

	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.baseUrl + "Resources/Public/jsDomainModeling/wireit/lib/inputex/images/space.gif";

		YAHOO.util.Event.onDOMReady( function() {
			var editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
		});
	</script>

	<div id="domainModelEditor" class="yui-skin-sam">

		<div id="left">
			<div id="propertiesForm"></div>
		</div>

		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>

		<div id="bottom">
			<center><div id="toolbar"></div></center>
		</div>

		<div id="helpPanel">

		</div>

	</div>
';
};

$output4 .= '';

return $output4;
}


}
#1379772450    5416      