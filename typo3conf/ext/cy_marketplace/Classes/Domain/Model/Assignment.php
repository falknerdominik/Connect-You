<?php
namespace TYPO3\CyMarketplace\Domain\Model;

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
 * @package cy_marketplace
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Assignment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * user
	 *
	 * @var \TYPO3\CyMarketplace\Domain\Model\User
	 */
	protected $user;

	/**
	 * role
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Role>
	 */
	protected $role;

	/**
	 * timeset
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Timeset>
	 */
	protected $timeset;

	/**
	 * project
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Project>
	 */
	protected $project;

	/**
	 * __construct
	 *
	 * @return Assignment
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
		$this->role = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->timeset = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->project = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the user
	 *
	 * @return \TYPO3\CyMarketplace\Domain\Model\User $user
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * Sets the user
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\User $user
	 * @return void
	 */
	public function setUser(\TYPO3\CyMarketplace\Domain\Model\User $user) {
		$this->user = $user;
	}

	/**
	 * Adds a Role
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Role $role
	 * @return void
	 */
	public function addRole(\TYPO3\CyMarketplace\Domain\Model\Role $role) {
		$this->role->attach($role);
	}

	/**
	 * Removes a Role
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Role $roleToRemove The Role to be removed
	 * @return void
	 */
	public function removeRole(\TYPO3\CyMarketplace\Domain\Model\Role $roleToRemove) {
		$this->role->detach($roleToRemove);
	}

	/**
	 * Returns the role
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Role> $role
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * Sets the role
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Role> $role
	 * @return void
	 */
	public function setRole(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $role) {
		$this->role = $role;
	}

	/**
	 * Adds a Timeset
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Timeset $timeset
	 * @return void
	 */
	public function addTimeset(\TYPO3\CyMarketplace\Domain\Model\Timeset $timeset) {
		$this->timeset->attach($timeset);
	}

	/**
	 * Removes a Timeset
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Timeset $timesetToRemove The Timeset to be removed
	 * @return void
	 */
	public function removeTimeset(\TYPO3\CyMarketplace\Domain\Model\Timeset $timesetToRemove) {
		$this->timeset->detach($timesetToRemove);
	}

	/**
	 * Returns the timeset
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Timeset> $timeset
	 */
	public function getTimeset() {
		return $this->timeset;
	}

	/**
	 * Sets the timeset
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Timeset> $timeset
	 * @return void
	 */
	public function setTimeset(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $timeset) {
		$this->timeset = $timeset;
	}

	/**
	 * Adds a Project
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Project $project
	 * @return void
	 */
	public function addProject(\TYPO3\CyMarketplace\Domain\Model\Project $project) {
		$this->project->attach($project);
	}

	/**
	 * Removes a Project
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Project $projectToRemove The Project to be removed
	 * @return void
	 */
	public function removeProject(\TYPO3\CyMarketplace\Domain\Model\Project $projectToRemove) {
		$this->project->detach($projectToRemove);
	}

	/**
	 * Returns the project
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Project> $project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Sets the project
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CyMarketplace\Domain\Model\Project> $project
	 * @return void
	 */
	public function setProject(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $project) {
		$this->project = $project;
	}

}
?>