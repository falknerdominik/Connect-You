<?php
namespace TYPO3\Connectyou\Domain\Model;


/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dominik Falkner <falkner.dominik@gmail.com>, BBS-Rohrbach
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
class Assignment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Welche Rolle übernimmt der User
	 *
	 * @var \TYPO3\Connectyou\Domain\Model\Role
	 */
	protected $role;

	/**
	 * Wie lange macht er es
	 *
	 * @var \TYPO3\Connectyou\Domain\Model\Timeset
	 */
	protected $timeset;

	/**
	 * für welches Projekt
	 *
	 * @var \TYPO3\Connectyou\Domain\Model\Project
	 */
	protected $project;

	/**
	 * Returns the role
	 *
	 * @return \TYPO3\Connectyou\Domain\Model\Role $role
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * Sets the role
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Role $role
	 * @return void
	 */
	public function setRole(\TYPO3\Connectyou\Domain\Model\Role $role) {
		$this->role = $role;
	}

	/**
	 * Returns the timeset
	 *
	 * @return \TYPO3\Connectyou\Domain\Model\Timeset $timeset
	 */
	public function getTimeset() {
		return $this->timeset;
	}

	/**
	 * Sets the timeset
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Timeset $timeset
	 * @return void
	 */
	public function setTimeset(\TYPO3\Connectyou\Domain\Model\Timeset $timeset) {
		$this->timeset = $timeset;
	}

	/**
	 * Returns the project
	 *
	 * @return \TYPO3\Connectyou\Domain\Model\Project $project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Sets the project
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function setProject(\TYPO3\Connectyou\Domain\Model\Project $project) {
		$this->project = $project;
	}

}
?>