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
class Milestones extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Name des Meilensteins
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Beschreibung
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * Wie viel Prozent ist es schon fertig (0-100)
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $complete;

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
	 * Returns the complete
	 *
	 * @return \integer $complete
	 */
	public function getComplete() {
		return $this->complete;
	}

	/**
	 * Sets the complete
	 *
	 * @param \integer $complete
	 * @return void
	 */
	public function setComplete($complete) {
		$this->complete = $complete;
	}

}
?>