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
 * Test case for class \TYPO3\Connectyou\Domain\Model\Address.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Connect-You
 *
 */
class AddressTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Connectyou\Domain\Model\Address
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Connectyou\Domain\Model\Address();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getPlzReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPlz()
		);
	}

	/**
	 * @test
	 */
	public function setPlzForIntegerSetsPlz() { 
		$this->fixture->setPlz(12);

		$this->assertSame(
			12,
			$this->fixture->getPlz()
		);
	}
	
	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation() { 
		$this->fixture->setLocation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLocation()
		);
	}
	
	/**
	 * @test
	 */
	public function getStreetnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStreetnameForStringSetsStreetname() { 
		$this->fixture->setStreetname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStreetname()
		);
	}
	
	/**
	 * @test
	 */
	public function getStreetnumberReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getStreetnumber()
		);
	}

	/**
	 * @test
	 */
	public function setStreetnumberForIntegerSetsStreetnumber() { 
		$this->fixture->setStreetnumber(12);

		$this->assertSame(
			12,
			$this->fixture->getStreetnumber()
		);
	}
	
}
?>