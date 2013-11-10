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
 * Test case for class \TYPO3\CyMarketplace\Domain\Model\Project.
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
class ProjectTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\CyMarketplace\Domain\Model\Project
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\CyMarketplace\Domain\Model\Project();
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
	public function getStartdateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setStartdateForDateTimeSetsStartdate() { }
	
	/**
	 * @test
	 */
	public function getEnddateReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEnddateForStringSetsEnddate() { 
		$this->fixture->setEnddate('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEnddate()
		);
	}
	
	/**
	 * @test
	 */
	public function getTechnologiesReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTechnologiesForStringSetsTechnologies() { 
		$this->fixture->setTechnologies('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTechnologies()
		);
	}
	
	/**
	 * @test
	 */
	public function getAssignmentsReturnsInitialValueForAssignment() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getAssignments()
		);
	}

	/**
	 * @test
	 */
	public function setAssignmentsForObjectStorageContainingAssignmentSetsAssignments() { 
		$assignment = new \TYPO3\CyMarketplace\Domain\Model\Assignment();
		$objectStorageHoldingExactlyOneAssignments = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneAssignments->attach($assignment);
		$this->fixture->setAssignments($objectStorageHoldingExactlyOneAssignments);

		$this->assertSame(
			$objectStorageHoldingExactlyOneAssignments,
			$this->fixture->getAssignments()
		);
	}
	
	/**
	 * @test
	 */
	public function addAssignmentToObjectStorageHoldingAssignments() {
		$assignment = new \TYPO3\CyMarketplace\Domain\Model\Assignment();
		$objectStorageHoldingExactlyOneAssignment = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneAssignment->attach($assignment);
		$this->fixture->addAssignment($assignment);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneAssignment,
			$this->fixture->getAssignments()
		);
	}

	/**
	 * @test
	 */
	public function removeAssignmentFromObjectStorageHoldingAssignments() {
		$assignment = new \TYPO3\CyMarketplace\Domain\Model\Assignment();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($assignment);
		$localObjectStorage->detach($assignment);
		$this->fixture->addAssignment($assignment);
		$this->fixture->removeAssignment($assignment);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getAssignments()
		);
	}
	
	/**
	 * @test
	 */
	public function getClientReturnsInitialValueForUser() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getClient()
		);
	}

	/**
	 * @test
	 */
	public function setClientForObjectStorageContainingUserSetsClient() { 
		$client = new \TYPO3\CyMarketplace\Domain\Model\User();
		$objectStorageHoldingExactlyOneClient = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneClient->attach($client);
		$this->fixture->setClient($objectStorageHoldingExactlyOneClient);

		$this->assertSame(
			$objectStorageHoldingExactlyOneClient,
			$this->fixture->getClient()
		);
	}
	
	/**
	 * @test
	 */
	public function addClientToObjectStorageHoldingClient() {
		$client = new \TYPO3\CyMarketplace\Domain\Model\User();
		$objectStorageHoldingExactlyOneClient = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneClient->attach($client);
		$this->fixture->addClient($client);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneClient,
			$this->fixture->getClient()
		);
	}

	/**
	 * @test
	 */
	public function removeClientFromObjectStorageHoldingClient() {
		$client = new \TYPO3\CyMarketplace\Domain\Model\User();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($client);
		$localObjectStorage->detach($client);
		$this->fixture->addClient($client);
		$this->fixture->removeClient($client);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getClient()
		);
	}
	
}
?>