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
class MilestonesWidget extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * milestones
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Milestones>
	 */
	protected $milestones;

	/**
	 * __construct
	 *
	 * @return MilestonesWidget
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
		$this->milestones = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a Milestones
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Milestones $milestone
	 * @return void
	 */
	public function addMilestone(\TYPO3\Connectyou\Domain\Model\Milestones $milestone) {
		$this->milestones->attach($milestone);
	}

	/**
	 * Removes a Milestones
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Milestones $milestoneToRemove The Milestones to be removed
	 * @return void
	 */
	public function removeMilestone(\TYPO3\Connectyou\Domain\Model\Milestones $milestoneToRemove) {
		$this->milestones->detach($milestoneToRemove);
	}

	/**
	 * Returns the milestones
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Milestones> $milestones
	 */
	public function getMilestones() {
		return $this->milestones;
	}

	/**
	 * Sets the milestones
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Milestones> $milestones
	 * @return void
	 */
	public function setMilestones(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $milestones) {
		$this->milestones = $milestones;
	}

}
?>