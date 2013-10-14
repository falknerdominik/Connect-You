<?php
namespace TYPO3\Connectyou\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
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
class Address extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Postleitzahl
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $plz;

	/**
	 * The Location
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $location;

	/**
	 * Name of the street
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $streetname;

	/**
	 * Number of the house
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $streetnumber;

	/**
	 * Returns the plz
	 *
	 * @return \integer $plz
	 */
	public function getPlz() {
		return $this->plz;
	}

	/**
	 * Sets the plz
	 *
	 * @param \integer $plz
	 * @return void
	 */
	public function setPlz($plz) {
		$this->plz = $plz;
	}

	/**
	 * Returns the location
	 *
	 * @return \string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the streetname
	 *
	 * @return \string $streetname
	 */
	public function getStreetname() {
		return $this->streetname;
	}

	/**
	 * Sets the streetname
	 *
	 * @param \string $streetname
	 * @return void
	 */
	public function setStreetname($streetname) {
		$this->streetname = $streetname;
	}

	/**
	 * Returns the streetnumber
	 *
	 * @return \integer $streetnumber
	 */
	public function getStreetnumber() {
		return $this->streetnumber;
	}

	/**
	 * Sets the streetnumber
	 *
	 * @param \integer $streetnumber
	 * @return void
	 */
	public function setStreetnumber($streetnumber) {
		$this->streetnumber = $streetnumber;
	}

}
?>