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
 * Test case for class \TYPO3\Connectyou\Domain\Model\Widget.
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
class WidgetTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Connectyou\Domain\Model\Widget
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Connectyou\Domain\Model\Widget();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getTodoReturnsInitialValueForTodoWidget() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTodo()
		);
	}

	/**
	 * @test
	 */
	public function setTodoForObjectStorageContainingTodoWidgetSetsTodo() { 
		$todo = new \TYPO3\Connectyou\Domain\Model\TodoWidget();
		$objectStorageHoldingExactlyOneTodo = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTodo->attach($todo);
		$this->fixture->setTodo($objectStorageHoldingExactlyOneTodo);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTodo,
			$this->fixture->getTodo()
		);
	}
	
	/**
	 * @test
	 */
	public function addTodoToObjectStorageHoldingTodo() {
		$todo = new \TYPO3\Connectyou\Domain\Model\TodoWidget();
		$objectStorageHoldingExactlyOneTodo = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTodo->attach($todo);
		$this->fixture->addTodo($todo);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTodo,
			$this->fixture->getTodo()
		);
	}

	/**
	 * @test
	 */
	public function removeTodoFromObjectStorageHoldingTodo() {
		$todo = new \TYPO3\Connectyou\Domain\Model\TodoWidget();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($todo);
		$localObjectStorage->detach($todo);
		$this->fixture->addTodo($todo);
		$this->fixture->removeTodo($todo);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTodo()
		);
	}
	
	/**
	 * @test
	 */
	public function getNotepadReturnsInitialValueForNotepadWidget() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getNotepad()
		);
	}

	/**
	 * @test
	 */
	public function setNotepadForObjectStorageContainingNotepadWidgetSetsNotepad() { 
		$notepad = new \TYPO3\Connectyou\Domain\Model\NotepadWidget();
		$objectStorageHoldingExactlyOneNotepad = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneNotepad->attach($notepad);
		$this->fixture->setNotepad($objectStorageHoldingExactlyOneNotepad);

		$this->assertSame(
			$objectStorageHoldingExactlyOneNotepad,
			$this->fixture->getNotepad()
		);
	}
	
	/**
	 * @test
	 */
	public function addNotepadToObjectStorageHoldingNotepad() {
		$notepad = new \TYPO3\Connectyou\Domain\Model\NotepadWidget();
		$objectStorageHoldingExactlyOneNotepad = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneNotepad->attach($notepad);
		$this->fixture->addNotepad($notepad);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneNotepad,
			$this->fixture->getNotepad()
		);
	}

	/**
	 * @test
	 */
	public function removeNotepadFromObjectStorageHoldingNotepad() {
		$notepad = new \TYPO3\Connectyou\Domain\Model\NotepadWidget();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($notepad);
		$localObjectStorage->detach($notepad);
		$this->fixture->addNotepad($notepad);
		$this->fixture->removeNotepad($notepad);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getNotepad()
		);
	}
	
	/**
	 * @test
	 */
	public function getGalleryReturnsInitialValueForGalleryWidget() { }

	/**
	 * @test
	 */
	public function setGalleryForGalleryWidgetSetsGallery() { }
	
	/**
	 * @test
	 */
	public function getTimekeeperReturnsInitialValueForTimekeeperWidget() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTimekeeper()
		);
	}

	/**
	 * @test
	 */
	public function setTimekeeperForObjectStorageContainingTimekeeperWidgetSetsTimekeeper() { 
		$timekeeper = new \TYPO3\Connectyou\Domain\Model\TimekeeperWidget();
		$objectStorageHoldingExactlyOneTimekeeper = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTimekeeper->attach($timekeeper);
		$this->fixture->setTimekeeper($objectStorageHoldingExactlyOneTimekeeper);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTimekeeper,
			$this->fixture->getTimekeeper()
		);
	}
	
	/**
	 * @test
	 */
	public function addTimekeeperToObjectStorageHoldingTimekeeper() {
		$timekeeper = new \TYPO3\Connectyou\Domain\Model\TimekeeperWidget();
		$objectStorageHoldingExactlyOneTimekeeper = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTimekeeper->attach($timekeeper);
		$this->fixture->addTimekeeper($timekeeper);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTimekeeper,
			$this->fixture->getTimekeeper()
		);
	}

	/**
	 * @test
	 */
	public function removeTimekeeperFromObjectStorageHoldingTimekeeper() {
		$timekeeper = new \TYPO3\Connectyou\Domain\Model\TimekeeperWidget();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($timekeeper);
		$localObjectStorage->detach($timekeeper);
		$this->fixture->addTimekeeper($timekeeper);
		$this->fixture->removeTimekeeper($timekeeper);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTimekeeper()
		);
	}
	
	/**
	 * @test
	 */
	public function getMilestonesReturnsInitialValueForMilestonesWidget() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getMilestones()
		);
	}

	/**
	 * @test
	 */
	public function setMilestonesForObjectStorageContainingMilestonesWidgetSetsMilestones() { 
		$milestone = new \TYPO3\Connectyou\Domain\Model\MilestonesWidget();
		$objectStorageHoldingExactlyOneMilestones = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneMilestones->attach($milestone);
		$this->fixture->setMilestones($objectStorageHoldingExactlyOneMilestones);

		$this->assertSame(
			$objectStorageHoldingExactlyOneMilestones,
			$this->fixture->getMilestones()
		);
	}
	
	/**
	 * @test
	 */
	public function addMilestoneToObjectStorageHoldingMilestones() {
		$milestone = new \TYPO3\Connectyou\Domain\Model\MilestonesWidget();
		$objectStorageHoldingExactlyOneMilestone = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneMilestone->attach($milestone);
		$this->fixture->addMilestone($milestone);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneMilestone,
			$this->fixture->getMilestones()
		);
	}

	/**
	 * @test
	 */
	public function removeMilestoneFromObjectStorageHoldingMilestones() {
		$milestone = new \TYPO3\Connectyou\Domain\Model\MilestonesWidget();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($milestone);
		$localObjectStorage->detach($milestone);
		$this->fixture->addMilestone($milestone);
		$this->fixture->removeMilestone($milestone);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getMilestones()
		);
	}
	
}
?>