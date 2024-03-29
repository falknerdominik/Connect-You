<?php
namespace TYPO3\CMS\Form\Tests\Unit\Filter;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2013 Andreas Lappe <nd@kaeufli.ch>, kaeufli.ch
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
 * Test case
 *
 * @author Andreas Lappe <nd@kaeufli.ch>
 */
class DigitFilterTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \TYPO3\CMS\Form\Filter\DigitFilter
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\CMS\Form\Filter\DigitFilter();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	public function validDataProvider() {
		return array(
			'1,00 -> 100' => array('1,00', '100'),
			'1E+49 -> 149' => array('1E+49', '149'),
			'100 -> 100' => array('100', '100'),
			'00000 -> 00000' => array('00000', '00000'),
			'ABCD -> ""' => array('ABCD', ''),
		);
	}

	/**
	 * @test
	 * @dataProvider validDataProvider
	 */
	public function filterForStringsReturnsStringsFilteredToOnlyContainDigits($input, $expected) {
		$this->assertSame(
			$expected,
			$this->fixture->filter($input)
		);
	}
}
?>