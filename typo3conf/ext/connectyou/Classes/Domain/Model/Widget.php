<?php
namespace TYPO3\Connectyou\Domain\Model;

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
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package connectyou
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Widget extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Todo Widget
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\TodoWidget>
	 */
	protected $todo;

	/**
	 * Notizblock Widget
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\NotepadWidget>
	 */
	protected $notepad;

	/**
	 * gallery
	 *
	 * @var \TYPO3\Connectyou\Domain\Model\GalleryWidget
	 */
	protected $gallery;

	/**
	 * timekeeper
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\TimekeeperWidget>
	 */
	protected $timekeeper;

	/**
	 * milestones
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\MilestonesWidget>
	 */
	protected $milestones;

	/**
	 * __construct
	 *
	 * @return Widget
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->todo = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->notepad = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->timekeeper = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->milestones = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a TodoWidget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\TodoWidget $todo
	 * @return void
	 */
	public function addTodo(\TYPO3\Connectyou\Domain\Model\TodoWidget $todo) {
		$this->todo->attach($todo);
	}

	/**
	 * Removes a TodoWidget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\TodoWidget $todoToRemove The TodoWidget to be removed
	 * @return void
	 */
	public function removeTodo(\TYPO3\Connectyou\Domain\Model\TodoWidget $todoToRemove) {
		$this->todo->detach($todoToRemove);
	}

	/**
	 * Returns the todo
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\TodoWidget> $todo
	 */
	public function getTodo() {
		return $this->todo;
	}

	/**
	 * Sets the todo
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\TodoWidget> $todo
	 * @return void
	 */
	public function setTodo(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $todo) {
		$this->todo = $todo;
	}

	/**
	 * Adds a NotepadWidget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\NotepadWidget $notepad
	 * @return void
	 */
	public function addNotepad(\TYPO3\Connectyou\Domain\Model\NotepadWidget $notepad) {
		$this->notepad->attach($notepad);
	}

	/**
	 * Removes a NotepadWidget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\NotepadWidget $notepadToRemove The NotepadWidget to be removed
	 * @return void
	 */
	public function removeNotepad(\TYPO3\Connectyou\Domain\Model\NotepadWidget $notepadToRemove) {
		$this->notepad->detach($notepadToRemove);
	}

	/**
	 * Returns the notepad
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\NotepadWidget> $notepad
	 */
	public function getNotepad() {
		return $this->notepad;
	}

	/**
	 * Sets the notepad
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\NotepadWidget> $notepad
	 * @return void
	 */
	public function setNotepad(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $notepad) {
		$this->notepad = $notepad;
	}

	/**
	 * Returns the gallery
	 *
	 * @return \TYPO3\Connectyou\Domain\Model\GalleryWidget $gallery
	 */
	public function getGallery() {
		return $this->gallery;
	}

	/**
	 * Sets the gallery
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\GalleryWidget $gallery
	 * @return void
	 */
	public function setGallery(\TYPO3\Connectyou\Domain\Model\GalleryWidget $gallery) {
		$this->gallery = $gallery;
	}

	/**
	 * Adds a TimekeeperWidget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\TimekeeperWidget $timekeeper
	 * @return void
	 */
	public function addTimekeeper(\TYPO3\Connectyou\Domain\Model\TimekeeperWidget $timekeeper) {
		$this->timekeeper->attach($timekeeper);
	}

	/**
	 * Removes a TimekeeperWidget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\TimekeeperWidget $timekeeperToRemove The TimekeeperWidget to be removed
	 * @return void
	 */
	public function removeTimekeeper(\TYPO3\Connectyou\Domain\Model\TimekeeperWidget $timekeeperToRemove) {
		$this->timekeeper->detach($timekeeperToRemove);
	}

	/**
	 * Returns the timekeeper
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\TimekeeperWidget> $timekeeper
	 */
	public function getTimekeeper() {
		return $this->timekeeper;
	}

	/**
	 * Sets the timekeeper
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\TimekeeperWidget> $timekeeper
	 * @return void
	 */
	public function setTimekeeper(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $timekeeper) {
		$this->timekeeper = $timekeeper;
	}

	/**
	 * Adds a MilestonesWidget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\MilestonesWidget $milestone
	 * @return void
	 */
	public function addMilestone(\TYPO3\Connectyou\Domain\Model\MilestonesWidget $milestone) {
		$this->milestones->attach($milestone);
	}

	/**
	 * Removes a MilestonesWidget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\MilestonesWidget $milestoneToRemove The MilestonesWidget to be removed
	 * @return void
	 */
	public function removeMilestone(\TYPO3\Connectyou\Domain\Model\MilestonesWidget $milestoneToRemove) {
		$this->milestones->detach($milestoneToRemove);
	}

	/**
	 * Returns the milestones
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\MilestonesWidget> $milestones
	 */
	public function getMilestones() {
		return $this->milestones;
	}

	/**
	 * Sets the milestones
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\MilestonesWidget> $milestones
	 * @return void
	 */
	public function setMilestones(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $milestones) {
		$this->milestones = $milestones;
	}

}
?>