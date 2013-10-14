<?php

namespace TYPO3\CyMarketplace\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Falkner Dominik <falkner.dominik@gmail.com>, BBS-Rohbach
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
 * Test case for class \TYPO3\CyMarketplace\Domain\Model\Assignment.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Connect-You
 *
 * @author Falkner Dominik <falkner.dominik@gmail.com>
 */
class AssignmentTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\CyMarketplace\Domain\Model\Assignment
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\CyMarketplace\Domain\Model\Assignment();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getUserReturnsInitialValueForUser() { }

	/**
	 * @test
	 */
	public function setUserForUserSetsUser() { }
	
	/**
	 * @test
	 */
	public function getRoleReturnsInitialValueForRole() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getRole()
		);
	}

	/**
	 * @test
	 */
	public function setRoleForObjectStorageContainingRoleSetsRole() { 
		$role = new \TYPO3\CyMarketplace\Domain\Model\Role();
		$objectStorageHoldingExactlyOneRole = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneRole->attach($role);
		$this->fixture->setRole($objectStorageHoldingExactlyOneRole);

		$this->assertSame(
			$objectStorageHoldingExactlyOneRole,
			$this->fixture->getRole()
		);
	}
	
	/**
	 * @test
	 */
	public function addRoleToObjectStorageHoldingRole() {
		$role = new \TYPO3\CyMarketplace\Domain\Model\Role();
		$objectStorageHoldingExactlyOneRole = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneRole->attach($role);
		$this->fixture->addRole($role);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneRole,
			$this->fixture->getRole()
		);
	}

	/**
	 * @test
	 */
	public function removeRoleFromObjectStorageHoldingRole() {
		$role = new \TYPO3\CyMarketplace\Domain\Model\Role();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($role);
		$localObjectStorage->detach($role);
		$this->fixture->addRole($role);
		$this->fixture->removeRole($role);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getRole()
		);
	}
	
	/**
	 * @test
	 */
	public function getTimesetReturnsInitialValueForTimeset() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTimeset()
		);
	}

	/**
	 * @test
	 */
	public function setTimesetForObjectStorageContainingTimesetSetsTimeset() { 
		$timeset = new \TYPO3\CyMarketplace\Domain\Model\Timeset();
		$objectStorageHoldingExactlyOneTimeset = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTimeset->attach($timeset);
		$this->fixture->setTimeset($objectStorageHoldingExactlyOneTimeset);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTimeset,
			$this->fixture->getTimeset()
		);
	}
	
	/**
	 * @test
	 */
	public function addTimesetToObjectStorageHoldingTimeset() {
		$timeset = new \TYPO3\CyMarketplace\Domain\Model\Timeset();
		$objectStorageHoldingExactlyOneTimeset = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTimeset->attach($timeset);
		$this->fixture->addTimeset($timeset);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTimeset,
			$this->fixture->getTimeset()
		);
	}

	/**
	 * @test
	 */
	public function removeTimesetFromObjectStorageHoldingTimeset() {
		$timeset = new \TYPO3\CyMarketplace\Domain\Model\Timeset();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($timeset);
		$localObjectStorage->detach($timeset);
		$this->fixture->addTimeset($timeset);
		$this->fixture->removeTimeset($timeset);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTimeset()
		);
	}
	
	/**
	 * @test
	 */
	public function getProjectReturnsInitialValueForProject() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getProject()
		);
	}

	/**
	 * @test
	 */
	public function setProjectForObjectStorageContainingProjectSetsProject() { 
		$project = new \TYPO3\CyMarketplace\Domain\Model\Project();
		$objectStorageHoldingExactlyOneProject = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneProject->attach($project);
		$this->fixture->setProject($objectStorageHoldingExactlyOneProject);

		$this->assertSame(
			$objectStorageHoldingExactlyOneProject,
			$this->fixture->getProject()
		);
	}
	
	/**
	 * @test
	 */
	public function addProjectToObjectStorageHoldingProject() {
		$project = new \TYPO3\CyMarketplace\Domain\Model\Project();
		$objectStorageHoldingExactlyOneProject = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneProject->attach($project);
		$this->fixture->addProject($project);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneProject,
			$this->fixture->getProject()
		);
	}

	/**
	 * @test
	 */
	public function removeProjectFromObjectStorageHoldingProject() {
		$project = new \TYPO3\CyMarketplace\Domain\Model\Project();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($project);
		$localObjectStorage->detach($project);
		$this->fixture->addProject($project);
		$this->fixture->removeProject($project);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getProject()
		);
	}
	
}
?>