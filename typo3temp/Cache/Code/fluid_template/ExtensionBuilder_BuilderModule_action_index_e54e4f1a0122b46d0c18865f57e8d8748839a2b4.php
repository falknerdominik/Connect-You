<?php
class FluidCache_ExtensionBuilder_BuilderModule_action_index_e54e4f1a0122b46d0c18865f57e8d8748839a2b4 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '
';
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
$output0 = '';

$output0 .= '
	<p class="bodytext">Welcome to the <b>Extension Builder</b>! This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a href="http://www.infoq.com/presentations/model-to-work-evans" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots!</li>
	</ul>
	Have a look at the Wiki <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder" target="_blank" style="color:blue;text-decoration:underline;">Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments1 = array();
$arguments1['action'] = 'domainmodelling';
$arguments1['style'] = 'color:blue;text-decoration:underline;';
$arguments1['additionalAttributes'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['name'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['rev'] = NULL;
$arguments1['target'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Go to the Domain Modeller';
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use lateron. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager. <br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	At the Wiki <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Modifying_and_extending_the_model" target="_blank" style="color:blue;text-decoration:underline;">Modifying and extending the model</a> you find more details about this feature
';

return $output0;
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
return '
';
};

$output4 .= '';

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments10 = array();
$arguments10['name'] = 'iconButtons';
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return '
';
};

$output4 .= '';

$output4 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments12 = array();
$arguments12['name'] = 'content';
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
	<p class="bodytext">Welcome to the <b>Extension Builder</b>! This page is intended to give you some overview about the workflow we suggest.</p>
	<h2>What is this extension builder about?</h2>
	<ul>
		<li>This extension builder helps you to build and manage applications based on <b>Extbase</b> and <b>Fluid</b>.</li>
		<li>We also want to provide a learning tool for <b>Domain-Driven Design</b></li>
	</ul>
	<h2>Domain Driven Design</h2>
	View <a href="http://www.infoq.com/presentations/model-to-work-evans" target="_blank">Putting the Model to Work and Strategic Design</a> by Eric Evans to get an introduction into Domain Driven Design (DDD).
	<h2>Domain Modelling</h2>
	At first, you will start creating your <b>Domain Model</b> with a graphical editor. This editor will do the following for you:
	<ul>
		<li><b>Extension Skeleton</b>: will create the extension directory structure needed</li>
		<li><b>Domain Model</b>: Will create basic classes for the Domain Model, residing under Domain/Model/</li>
		<li><b>Database Tables and TCA</b>: Will create Database Tables and TCA definitions which fit to the domain model.</li>
		<li><b>Skeleton Locallang Files</b>: Will create skeleton locallang files</li>
		<li><b>Plugin Configuration</b>: Will create a plugin configuration, so it will work out-of-the-box.</li>
		<li><b>Dynamic Scaffolding</b>: Automatically create all CRUD actions (Create, Read, Update, Delete) for Aggregate Roots!</li>
	</ul>
	Have a look at the Wiki <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder" target="_blank" style="color:blue;text-decoration:underline;">Using the Extension Builder</a> for more details.
	<br /><br />
	<p><b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments15 = array();
$arguments15['action'] = 'domainmodelling';
$arguments15['style'] = 'color:blue;text-decoration:underline;';
$arguments15['additionalAttributes'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['controller'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['pluginName'] = NULL;
$arguments15['pageUid'] = NULL;
$arguments15['pageType'] = 0;
$arguments15['noCache'] = false;
$arguments15['noCacheHash'] = false;
$arguments15['section'] = '';
$arguments15['format'] = '';
$arguments15['linkAccessRestrictedPages'] = false;
$arguments15['additionalParams'] = array (
);
$arguments15['absolute'] = false;
$arguments15['addQueryString'] = false;
$arguments15['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return 'Go to the Domain Modeller';
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output14 .= $viewHelper17->initializeArgumentsAndRender();

$output14 .= '</b></p>

	<h2>Iterative model refinement</h2>
	The first version of the model will usually not be the one you\'ll use lateron. That\'s why you should take your time, and improve your model.<br />
	Useful things to know:
	<ul>
		<li><b>Dynamic Scaffolding</b>: The Scaffolding will automatically adjust the templates needed to render CRUD-functionality for your domain models.
			That is, if you modify your domain model by adding or removing fields, the standard CRUD actions display the new fields as well.
	</ul>
	When you start to modify the generated files, but still want to use the graphical modeler to extend your model, you have to enable the roundtrip feature
	in the Extension Builder settings in the Extension Manager. <br />
	You will find a file in your extension directory Configuration/ExtensionBuilder/settings.yaml.<br />
	There you can configure which files should be overwritten, kept or merged if you save your model.<br />
	A good practice would be, to let the Extension Builder generate the Partials for form fields and properties for you and include them in your templates.
	<br /><br />
	At the Wiki <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Modifying_and_extending_the_model" target="_blank" style="color:blue;text-decoration:underline;">Modifying and extending the model</a> you find more details about this feature
';
return $output14;
};

$output4 .= '';

return $output4;
}


}
#1379767829    12273     