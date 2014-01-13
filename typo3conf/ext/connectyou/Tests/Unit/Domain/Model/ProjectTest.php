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
 * Test case for class \TYPO3\Connectyou\Domain\Model\Project.
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
class ProjectTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Connectyou\Domain\Model\Project
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Connectyou\Domain\Model\Project();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTypeForStringSetsType() { 
		$this->fixture->setType('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getType()
		);
	}
	
	/**
	 * @test
	 */
	public function getTeamReturnsInitialValueForUser() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTeam()
		);
	}

	/**
	 * @test
	 */
	public function setTeamForObjectStorageContainingUserSetsTeam() { 
		$team = new \TYPO3\Connectyou\Domain\Model\User();
		$objectStorageHoldingExactlyOneTeam = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTeam->attach($team);
		$this->fixture->setTeam($objectStorageHoldingExactlyOneTeam);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTeam,
			$this->fixture->getTeam()
		);
	}
	
	/**
	 * @test
	 */
	public function addTeamToObjectStorageHoldingTeam() {
		$team = new \TYPO3\Connectyou\Domain\Model\User();
		$objectStorageHoldingExactlyOneTeam = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTeam->attach($team);
		$this->fixture->addTeam($team);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTeam,
			$this->fixture->getTeam()
		);
	}

	/**
	 * @test
	 */
	public function removeTeamFromObjectStorageHoldingTeam() {
		$team = new \TYPO3\Connectyou\Domain\Model\User();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($team);
		$localObjectStorage->detach($team);
		$this->fixture->addTeam($team);
		$this->fixture->removeTeam($team);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTeam()
		);
	}
	
	/**
	 * @test
	 */
	public function getWidgetsPrivateReturnsInitialValueForWidget() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getWidgetsPrivate()
		);
	}

	/**
	 * @test
	 */
	public function setWidgetsPrivateForObjectStorageContainingWidgetSetsWidgetsPrivate() { 
		$widgetsPrivate = new \TYPO3\Connectyou\Domain\Model\Widget();
		$objectStorageHoldingExactlyOneWidgetsPrivate = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneWidgetsPrivate->attach($widgetsPrivate);
		$this->fixture->setWidgetsPrivate($objectStorageHoldingExactlyOneWidgetsPrivate);

		$this->assertSame(
			$objectStorageHoldingExactlyOneWidgetsPrivate,
			$this->fixture->getWidgetsPrivate()
		);
	}
	
	/**
	 * @test
	 */
	public function addWidgetsPrivateToObjectStorageHoldingWidgetsPrivate() {
		$widgetsPrivate = new \TYPO3\Connectyou\Domain\Model\Widget();
		$objectStorageHoldingExactlyOneWidgetsPrivate = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneWidgetsPrivate->attach($widgetsPrivate);
		$this->fixture->addWidgetsPrivate($widgetsPrivate);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneWidgetsPrivate,
			$this->fixture->getWidgetsPrivate()
		);
	}

	/**
	 * @test
	 */
	public function removeWidgetsPrivateFromObjectStorageHoldingWidgetsPrivate() {
		$widgetsPrivate = new \TYPO3\Connectyou\Domain\Model\Widget();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($widgetsPrivate);
		$localObjectStorage->detach($widgetsPrivate);
		$this->fixture->addWidgetsPrivate($widgetsPrivate);
		$this->fixture->removeWidgetsPrivate($widgetsPrivate);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getWidgetsPrivate()
		);
	}
	
	/**
	 * @test
	 */
	public function getWidgetsPublicReturnsInitialValueForWidget() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getWidgetsPublic()
		);
	}

	/**
	 * @test
	 */
	public function setWidgetsPublicForObjectStorageContainingWidgetSetsWidgetsPublic() { 
		$widgetsPublic = new \TYPO3\Connectyou\Domain\Model\Widget();
		$objectStorageHoldingExactlyOneWidgetsPublic = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneWidgetsPublic->attach($widgetsPublic);
		$this->fixture->setWidgetsPublic($objectStorageHoldingExactlyOneWidgetsPublic);

		$this->assertSame(
			$objectStorageHoldingExactlyOneWidgetsPublic,
			$this->fixture->getWidgetsPublic()
		);
	}
	
	/**
	 * @test
	 */
	public function addWidgetsPublicToObjectStorageHoldingWidgetsPublic() {
		$widgetsPublic = new \TYPO3\Connectyou\Domain\Model\Widget();
		$objectStorageHoldingExactlyOneWidgetsPublic = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneWidgetsPublic->attach($widgetsPublic);
		$this->fixture->addWidgetsPublic($widgetsPublic);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneWidgetsPublic,
			$this->fixture->getWidgetsPublic()
		);
	}

	/**
	 * @test
	 */
	public function removeWidgetsPublicFromObjectStorageHoldingWidgetsPublic() {
		$widgetsPublic = new \TYPO3\Connectyou\Domain\Model\Widget();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($widgetsPublic);
		$localObjectStorage->detach($widgetsPublic);
		$this->fixture->addWidgetsPublic($widgetsPublic);
		$this->fixture->removeWidgetsPublic($widgetsPublic);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getWidgetsPublic()
		);
	}
	
}
?>