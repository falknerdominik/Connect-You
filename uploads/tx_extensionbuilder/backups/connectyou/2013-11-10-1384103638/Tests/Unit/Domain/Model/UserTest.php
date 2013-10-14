<?php

namespace TYPO3\Connectyou\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
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
 * Test case for class \TYPO3\Connectyou\Domain\Model\User.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Connect-You
 *
 */
class UserTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Connectyou\Domain\Model\User
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Connectyou\Domain\Model\User();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getUsernameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setUsernameForStringSetsUsername() { 
		$this->fixture->setUsername('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getUsername()
		);
	}
	
	/**
	 * @test
	 */
	public function getFirstnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFirstnameForStringSetsFirstname() { 
		$this->fixture->setFirstname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFirstname()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastnameForStringSetsLastname() { 
		$this->fixture->setLastname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastname()
		);
	}
	
	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForIntegerSetsPhone() { 
		$this->fixture->setPhone(12);

		$this->assertSame(
			12,
			$this->fixture->getPhone()
		);
	}
	
	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForAddress() { }

	/**
	 * @test
	 */
	public function setAddressForAddressSetsAddress() { }
	
	/**
	 * @test
	 */
	public function getTimesetReturnsInitialValueForTimeset() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTimeset()
		);
	}

	/**
	 * @test
	 */
	public function setTimesetForObjectStorageContainingTimesetSetsTimeset() { 
		$timeset = new \TYPO3\Connectyou\Domain\Model\Timeset();
		$objectStorageHoldingExactlyOneTimeset = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTimeset->attach($timeset);
		$this->fixture->setTimeset($objectStorageHoldingExactlyOneTimeset);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTimeset,
			$this->fixture->getTimeset()
		);
	}
	
	/**
	 * @test
	 */
	public function addTimesetToObjectStorageHoldingTimeset() {
		$timeset = new \TYPO3\Connectyou\Domain\Model\Timeset();
		$objectStorageHoldingExactlyOneTimeset = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTimeset->attach($timeset);
		$this->fixture->addTimeset($timeset);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTimeset,
			$this->fixture->getTimeset()
		);
	}

	/**
	 * @test
	 */
	public function removeTimesetFromObjectStorageHoldingTimeset() {
		$timeset = new \TYPO3\Connectyou\Domain\Model\Timeset();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($timeset);
		$localObjectStorage->detach($timeset);
		$this->fixture->addTimeset($timeset);
		$this->fixture->removeTimeset($timeset);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTimeset()
		);
	}
	
}
?>