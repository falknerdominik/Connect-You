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
class User extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * unique username
	 *
	 * @var \string
	 */
	protected $username;

	/**
	 * users first name
	 *
	 * @var \string
	 */
	protected $firstname;

	/**
	 * users lastname
	 *
	 * @var \string
	 */
	protected $lastname;

	/**
	 * users email
	 *
	 * @var \string
	 */
	protected $email;

	/**
	 * phone number
	 *
	 * @var \integer
	 */
	protected $phone;

	/**
	 * timeset
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Timeset>
	 */
	protected $timeset;

	/**
	 * __construct
	 *
	 * @return User
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
		$this->timeset = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the username
	 *
	 * @return \string $username
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * Sets the username
	 *
	 * @param \string $username
	 * @return void
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	 * Returns the firstname
	 *
	 * @return \string $firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets the firstname
	 *
	 * @param \string $firstname
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * Returns the lastname
	 *
	 * @return \string $lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets the lastname
	 *
	 * @param \string $lastname
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Returns the email
	 *
	 * @return \string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param \string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the phone
	 *
	 * @return \integer $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param \integer $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Adds a Timeset
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Timeset $timeset
	 * @return void
	 */
	public function addTimeset(\TYPO3\Connectyou\Domain\Model\Timeset $timeset) {
		$this->timeset->attach($timeset);
	}

	/**
	 * Removes a Timeset
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Timeset $timesetToRemove The Timeset to be removed
	 * @return void
	 */
	public function removeTimeset(\TYPO3\Connectyou\Domain\Model\Timeset $timesetToRemove) {
		$this->timeset->detach($timesetToRemove);
	}

	/**
	 * Returns the timeset
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Timeset> $timeset
	 */
	public function getTimeset() {
		return $this->timeset;
	}

	/**
	 * Sets the timeset
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\Timeset> $timeset
	 * @return void
	 */
	public function setTimeset(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $timeset) {
		$this->timeset = $timeset;
	}

}
?>