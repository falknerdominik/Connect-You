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
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Name des Projektes
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Beschreibung des Projektes
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * Welcher Projekttyp
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $type;

	/**
	 * Teammitglieder
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\User>
	 */
	protected $team;

	/**
	 * Widgets für ie Private Pinnwand
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Widget>
	 */
	protected $widgetsPrivate;

	/**
	 * Widgets für die Public Pinnwand
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Widget>
	 */
	protected $widgetsPublic;

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
		$this->team = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->widgetsPrivate = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->widgetsPublic = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the type
	 *
	 * @return \string $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param \string $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Adds a User
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $team
	 * @return void
	 */
	public function addTeam(\TYPO3\Connectyou\Domain\Model\User $team) {
		$this->team->attach($team);
	}

	/**
	 * Removes a User
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $teamToRemove The User to be removed
	 * @return void
	 */
	public function removeTeam(\TYPO3\Connectyou\Domain\Model\User $teamToRemove) {
		$this->team->detach($teamToRemove);
	}

	/**
	 * Returns the team
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\User> $team
	 */
	public function getTeam() {
		return $this->team;
	}

	/**
	 * Sets the team
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\User> $team
	 * @return void
	 */
	public function setTeam(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $team) {
		$this->team = $team;
	}

	/**
	 * Adds a Widget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Widget $widgetsPrivate
	 * @return void
	 */
	public function addWidgetsPrivate(\TYPO3\Connectyou\Domain\Model\Widget $widgetsPrivate) {
		$this->widgetsPrivate->attach($widgetsPrivate);
	}

	/**
	 * Removes a Widget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Widget $widgetsPrivateToRemove The Widget to be removed
	 * @return void
	 */
	public function removeWidgetsPrivate(\TYPO3\Connectyou\Domain\Model\Widget $widgetsPrivateToRemove) {
		$this->widgetsPrivate->detach($widgetsPrivateToRemove);
	}

	/**
	 * Returns the widgetsPrivate
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Widget> $widgetsPrivate
	 */
	public function getWidgetsPrivate() {
		return $this->widgetsPrivate;
	}

	/**
	 * Sets the widgetsPrivate
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Widget> $widgetsPrivate
	 * @return void
	 */
	public function setWidgetsPrivate(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $widgetsPrivate) {
		$this->widgetsPrivate = $widgetsPrivate;
	}

	/**
	 * Adds a Widget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Widget $widgetsPublic
	 * @return void
	 */
	public function addWidgetsPublic(\TYPO3\Connectyou\Domain\Model\Widget $widgetsPublic) {
		$this->widgetsPublic->attach($widgetsPublic);
	}

	/**
	 * Removes a Widget
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Widget $widgetsPublicToRemove The Widget to be removed
	 * @return void
	 */
	public function removeWidgetsPublic(\TYPO3\Connectyou\Domain\Model\Widget $widgetsPublicToRemove) {
		$this->widgetsPublic->detach($widgetsPublicToRemove);
	}

	/**
	 * Returns the widgetsPublic
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Widget> $widgetsPublic
	 */
	public function getWidgetsPublic() {
		return $this->widgetsPublic;
	}

	/**
	 * Sets the widgetsPublic
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Widget> $widgetsPublic
	 * @return void
	 */
	public function setWidgetsPublic(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $widgetsPublic) {
		$this->widgetsPublic = $widgetsPublic;
	}

}
?>