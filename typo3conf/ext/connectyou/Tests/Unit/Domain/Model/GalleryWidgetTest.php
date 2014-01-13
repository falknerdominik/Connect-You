<?php

namespace TYPO3\Connectyou\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Dominik Falkner <falkner.dominik@gmail.com>, BBS-Rohrbach
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \TYPO3\Connectyou\Domain\Model\GalleryWidget.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Connect You
 *
 * @author Dominik Falkner <falkner.dominik@gmail.com>
 */
class GalleryWidgetTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Connectyou\Domain\Model\GalleryWidget
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Connectyou\Domain\Model\GalleryWidget();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getImgReturnsInitialValueForGalleryImages() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getImg()
		);
	}

	/**
	 * @test
	 */
	public function setImgForObjectStorageContainingGalleryImagesSetsImg() { 
		$img = new \TYPO3\Connectyou\Domain\Model\GalleryImages();
		$objectStorageHoldingExactlyOneImg = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneImg->attach($img);
		$this->fixture->setImg($objectStorageHoldingExactlyOneImg);

		$this->assertSame(
			$objectStorageHoldingExactlyOneImg,
			$this->fixture->getImg()
		);
	}
	
	/**
	 * @test
	 */
	public function addImgToObjectStorageHoldingImg() {
		$img = new \TYPO3\Connectyou\Domain\Model\GalleryImages();
		$objectStorageHoldingExactlyOneImg = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneImg->attach($img);
		$this->fixture->addImg($img);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneImg,
			$this->fixture->getImg()
		);
	}

	/**
	 * @test
	 */
	public function removeImgFromObjectStorageHoldingImg() {
		$img = new \TYPO3\Connectyou\Domain\Model\GalleryImages();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($img);
		$localObjectStorage->detach($img);
		$this->fixture->addImg($img);
		$this->fixture->removeImg($img);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getImg()
		);
	}
	
}
?>