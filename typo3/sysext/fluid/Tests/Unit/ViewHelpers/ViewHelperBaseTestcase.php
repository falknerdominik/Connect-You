<?php
namespace TYPO3\CMS\Fluid\Tests\Unit\ViewHelpers;

/*                                                                        *
 * This script is backported from the TYPO3 Flow package "TYPO3.Fluid".   *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Base test class for testing view helpers
 */
abstract class ViewHelperBaseTestcase extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {

	/**
	 * @var \TYPO3\CMS\Fluid\Core\ViewHelper\ViewHelperVariableContainer
	 */
	protected $viewHelperVariableContainer;

	/**
	 * @var \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer
	 */
	protected $templateVariableContainer;

	/**
	 * @var \TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder
	 */
	protected $uriBuilder;

	/**
	 * @var \TYPO3\CMS\Extbase\Mvc\Controller\ControllerContext
	 */
	protected $controllerContext;

	/**
	 * @var \TYPO3\CMS\Fluid\Core\ViewHelper\TagBuilder
	 */
	protected $tagBuilder;

	/**
	 * @var \TYPO3\CMS\Fluid\Core\ViewHelper\Arguments
	 */
	protected $arguments;

	/**
	 * @var \TYPO3\CMS\Extbase\Mvc\Web\Request
	 */
	protected $request;

	/**
	 * @var \TYPO3\CMS\Fluid\Core\Rendering\RenderingContext
	 */
	protected $renderingContext;

	/**
	 * @var \TYPO3\CMS\Extbase\Mvc\Controller\MvcPropertyMappingConfigurationService
	 */
	protected $mvcPropertyMapperConfigurationService;

	/**
	 * @return void
	 */
	public function setUp() {
		$this->viewHelperVariableContainer = $this->getMock('TYPO3\\CMS\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer');
		$this->templateVariableContainer = $this->getMock('TYPO3\\CMS\\Fluid\\Core\\ViewHelper\\TemplateVariableContainer');
		$this->uriBuilder = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\Web\\Routing\\UriBuilder');
		$this->uriBuilder->expects($this->any())->method('reset')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setArguments')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setSection')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setFormat')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setCreateAbsoluteUri')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setAddQueryString')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setArgumentsToBeExcludedFromQueryString')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setLinkAccessRestrictedPages')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setTargetPageUid')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setTargetPageType')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setNoCache')->will($this->returnValue($this->uriBuilder));
		$this->uriBuilder->expects($this->any())->method('setUseCacheHash')->will($this->returnValue($this->uriBuilder));
		$this->request = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\Web\\Request');
		$this->controllerContext = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\Controller\\ControllerContext', array(), array(), '', FALSE);
		$this->controllerContext->expects($this->any())->method('getUriBuilder')->will($this->returnValue($this->uriBuilder));
		$this->controllerContext->expects($this->any())->method('getRequest')->will($this->returnValue($this->request));
		$this->tagBuilder = $this->getMock('TYPO3\\CMS\\Fluid\\Core\\ViewHelper\\TagBuilder');
		$this->arguments = array();
		$this->renderingContext = new \TYPO3\CMS\Fluid\Core\Rendering\RenderingContext();
		$this->renderingContext->injectTemplateVariableContainer($this->templateVariableContainer);
		$this->renderingContext->injectViewHelperVariableContainer($this->viewHelperVariableContainer);
		$this->renderingContext->setControllerContext($this->controllerContext);
		$this->mvcPropertyMapperConfigurationService = new \TYPO3\CMS\Extbase\Mvc\Controller\MvcPropertyMappingConfigurationService;
	}

	/**
	 * @param \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper $viewHelper
	 * @return void
	 */
	protected function injectDependenciesIntoViewHelper(\TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper $viewHelper) {
		$viewHelper->setRenderingContext($this->renderingContext);
		$viewHelper->setArguments($this->arguments);
		if ($viewHelper instanceof \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper) {
			$viewHelper->injectTagBuilder($this->tagBuilder);
		}
	}
}

?>