<?php
namespace TYPO3\Connectyou\Domain\Model;

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
 * @package connectyou
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Projectname
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * startdate
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $startdate;

	/**
	 * enddate
	 *
	 * @var \string
	 */
	protected $enddate;

	/**
	 * What technologies are used
	 *
	 * @var \string
	 */
	protected $technologies;

	/**
	 * assignments
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Assignment>
	 */
	protected $assignments;

	/**
	 * client
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\User>
	 */
	protected $client;

	/**
	 * __construct
	 *
	 * @return Project
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
		$this->assignments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->client = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the startdate
	 *
	 * @return \DateTime $startdate
	 */
	public function getStartdate() {
		return $this->startdate;
	}

	/**
	 * Sets the startdate
	 *
	 * @param \DateTime $startdate
	 * @return void
	 */
	public function setStartdate($startdate) {
		$this->startdate = $startdate;
	}

	/**
	 * Returns the enddate
	 *
	 * @return \string $enddate
	 */
	public function getEnddate() {
		return $this->enddate;
	}

	/**
	 * Sets the enddate
	 *
	 * @param \string $enddate
	 * @return void
	 */
	public function setEnddate($enddate) {
		$this->enddate = $enddate;
	}

	/**
	 * Returns the technologies
	 *
	 * @return \string $technologies
	 */
	public function getTechnologies() {
		return $this->technologies;
	}

	/**
	 * Sets the technologies
	 *
	 * @param \string $technologies
	 * @return void
	 */
	public function setTechnologies($technologies) {
		$this->technologies = $technologies;
	}

	/**
	 * Adds a Assignment
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Assignment $assignment
	 * @return void
	 */
	public function addAssignment(\TYPO3\Connectyou\Domain\Model\Assignment $assignment) {
		$this->assignments->attach($assignment);
	}

	/**
	 * Removes a Assignment
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Assignment $assignmentToRemove The Assignment to be removed
	 * @return void
	 */
	public function removeAssignment(\TYPO3\Connectyou\Domain\Model\Assignment $assignmentToRemove) {
		$this->assignments->detach($assignmentToRemove);
	}

	/**
	 * Returns the assignments
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Assignment> $assignments
	 */
	public function getAssignments() {
		return $this->assignments;
	}

	/**
	 * Sets the assignments
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Assignment> $assignments
	 * @return void
	 */
	public function setAssignments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $assignments) {
		$this->assignments = $assignments;
	}

	/**
	 * Adds a User
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $client
	 * @return void
	 */
	public function addClient(\TYPO3\Connectyou\Domain\Model\User $client) {
		$this->client->attach($client);
	}

	/**
	 * Removes a User
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $clientToRemove The User to be removed
	 * @return void
	 */
	public function removeClient(\TYPO3\Connectyou\Domain\Model\User $clientToRemove) {
		$this->client->detach($clientToRemove);
	}

	/**
	 * Returns the client
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\User> $client
	 */
	public function getClient() {
		return $this->client;
	}

	/**
	 * Sets the client
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\User> $client
	 * @return void
	 */
	public function setClient(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $client) {
		$this->client = $client;
	}

}
?>