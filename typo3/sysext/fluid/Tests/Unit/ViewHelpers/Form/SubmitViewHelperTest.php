<?php
namespace TYPO3\CMS\Fluid\Tests\Unit\ViewHelpers\Form;

/*                                                                        *
 * This script is backported from the TYPO3 Flow package "TYPO3.Fluid".   *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 *  of the License, or (at your option) any later version.                *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

require_once(__DIR__ . '/FormFieldViewHelperBaseTestcase.php');

/**
 * Test for the "Submit" Form view helper
 */
class SubmitViewHelperTest extends \TYPO3\CMS\Fluid\Tests\Unit\ViewHelpers\Form\FormFieldViewHelperBaseTestcase {

	/**
	 * @var \TYPO3\CMS\Fluid\ViewHelpers\Form\ubmitViewHelper
	 */
	protected $viewHelper;

	public function setUp() {
		parent::setUp();
		$this->viewHelper = new \TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper();
		$this->arguments['name'] = '';
		$this->injectDependenciesIntoViewHelper($this->viewHelper);
		$this->viewHelper->initializeArguments();
	}

	/**
	 * @test
	 */
	public function renderCorrectlySetsTagNameAndDefaultAttributes() {
		$mockTagBuilder = $this->getMock('TYPO3\\CMS\\Fluid\\Core\\ViewHelper\\TagBuilder', array('setTagName', 'addAttribute'));
		$mockTagBuilder->expects($this->once())->method('setTagName')->with('input');
		$mockTagBuilder->expects($this->at(1))->method('addAttribute')->with('type', 'submit');

		$this->viewHelper->injectTagBuilder($mockTagBuilder);

		$this->viewHelper->initialize();
		$this->viewHelper->render();
	}
}

?>