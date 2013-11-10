<?php

namespace TYPO3\CyMarketplace\Tests;
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
 * Test case for class \TYPO3\CyMarketplace\Domain\Model\Timeset.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Connect-You
 *
 * @author Falkner Dominik <falkner.dominik@gmail.com>
 */
class TimesetTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\CyMarketplace\Domain\Model\Timeset
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\CyMarketplace\Domain\Model\Timeset();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getStartTimeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setStartTimeForDateTimeSetsStartTime() { }
	
	/**
	 * @test
	 */
	public function getEndTimeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setEndTimeForDateTimeSetsEndTime() { }
	
	/**
	 * @test
	 */
	public function getUserReturnsInitialValueForUser() { }

	/**
	 * @test
	 */
	public function setUserForUserSetsUser() { }
	
}
?>