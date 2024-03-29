<?php
{namespace k=Tx_ExtensionBuilder_ViewHelpers}
namespace {extension.nameSpace}\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) <f:format.date format="Y">now</f:format.date> <f:for each="{extension.persons}" as="person">{person.name} <f:if condition="{person.email}"><{person.email}></f:if><f:if condition="{person.company}">, {person.company}</f:if>
 *  			</f:for>
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
 * Test case for class {domainObject.fullQualifiedClassName}.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage {extension.name}
 *
<f:for each="{extension.persons}" as="person"> * @author {person.name} <f:if condition="{person.email}"><{person.email}></f:if>
</f:for> */
class {domainObject.name}Test extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var {domainObject.fullQualifiedClassName}
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new {domainObject.fullQualifiedClassName}();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	<f:if condition="{f:count(subject:domainObject.properties)} > 0">
	<f:then>
	<f:for each="{domainObject.properties}" as="property">
	/**
	 * @test
	 */
	public function get{property.name -> k:format.uppercaseFirst()}ReturnsInitialValueFor{f:if(condition:"{k:matchString(match:'ObjectStorage', in:property.unqualifiedType)}", then:"{property.foreignModelName}", else:"{property.unqualifiedType -> k:format.uppercaseFirst()}")}() { <f:if condition="{k:compareStrings(firstString:property.unqualifiedType, secondString:'integer')}">
		$this->assertSame(
			0,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if><f:if condition="{k:compareStrings(firstString:property.unqualifiedType, secondString:'float')}">
		$this->assertSame(
			0.0,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if><f:if condition="{k:compareStrings(firstString:property.unqualifiedType, secondString:'boolean')}">
		$this->assertSame(
			TRUE,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if><f:if condition="{k:matchString(match:'ObjectStorage', in:property.unqualifiedType)}"><f:then>
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:then><f:else><f:if condition="{k:matchString(match:extension.extensionKey, in:property.unqualifiedType)}">
		$this->assertEquals(
			NULL,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if></f:else></f:if>}

	/**
	 * @test
	 */
	public function set{property.name -> k:format.uppercaseFirst()}For{f:if(condition:"{k:matchString(match:'ObjectStorage', in:property.unqualifiedType)}", then:"ObjectStorageContaining{property.foreignModelName}", else:"{property.unqualifiedType -> k:format.uppercaseFirst()}")}Sets{property.name -> k:format.uppercaseFirst()}() { <f:if condition="{k:compareStrings(firstString:property.unqualifiedType, secondString:'string')}">
		$this->fixture->set{property.name -> k:format.uppercaseFirst()}('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if><f:if condition="{k:compareStrings(firstString:property.unqualifiedType, secondString:'integer')}">
		$this->fixture->set{property.name -> k:format.uppercaseFirst()}(12);

		$this->assertSame(
			12,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if><f:if condition="{k:compareStrings(firstString:property.unqualifiedType, secondString:'float')}">
		$this->fixture->set{property.name -> k:format.uppercaseFirst()}(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if><f:if condition="{k:compareStrings(firstString:property.unqualifiedType, secondString:'boolean')}">
		$this->fixture->set{property.name -> k:format.uppercaseFirst()}(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if><f:if condition="{k:matchString(match:'ObjectStorage', in:property.unqualifiedType)}"><f:then>
		${property.name -> k:singularize()} = new {k:pregReplace(match:'/^.*<(.*)>$/', replace:'\1', subject:property.unqualifiedType)}();
		$objectStorageHoldingExactlyOne{property.name -> k:format.uppercaseFirst()} = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOne{property.name -> k:format.uppercaseFirst()}->attach(${property.name -> k:singularize()});
		$this->fixture->set{property.name -> k:format.uppercaseFirst()}($objectStorageHoldingExactlyOne{property.name -> k:format.uppercaseFirst()});

		$this->assertSame(
			$objectStorageHoldingExactlyOne{property.name -> k:format.uppercaseFirst()},
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:then><f:else><f:if condition="{k:matchString(match:extension.extensionKey, in:property.unqualifiedType)}">
		$dummyObject = new {f:if(condition:"{k:matchString(match:'ObjectStorage', in:property.unqualifiedType)}", then:"ObjectStorageContaining{property.foreignModelName)}", else:"{property.unqualifiedType -> k:format.uppercaseFirst()}")}();
		$this->fixture->set{property.name -> k:format.uppercaseFirst()}($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	</f:if></f:else></f:if>}
	<f:if condition="{k:matchString(match:'ObjectStorage', in:property.unqualifiedType)}">
	/**
	 * @test
	 */
	public function add{property.name -> k:singularize() -> k:format.uppercaseFirst()}ToObjectStorageHolding{property.name -> k:format.uppercaseFirst()}() {
		${property.name -> k:singularize()} = new {property.foreignClassName}();
		$objectStorageHoldingExactlyOne{property.name -> k:singularize() -> k:format.uppercaseFirst()} = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOne{property.name -> k:singularize() -> k:format.uppercaseFirst()}->attach(${property.name -> k:singularize()});
		$this->fixture->add{property.name -> k:singularize() -> k:format.uppercaseFirst()}(${property.name -> k:singularize()});

		$this->assertEquals(
			$objectStorageHoldingExactlyOne{property.name -> k:singularize() -> k:format.uppercaseFirst()},
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	}

	/**
	 * @test
	 */
	public function remove{property.name -> k:singularize() -> k:format.uppercaseFirst()}FromObjectStorageHolding{property.name -> k:format.uppercaseFirst()}() {
		${property.name -> k:singularize()} = new {property.foreignClassName}();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach(${property.name -> k:singularize()});
		$localObjectStorage->detach(${property.name -> k:singularize()});
		$this->fixture->add{property.name -> k:singularize() -> k:format.uppercaseFirst()}(${property.name -> k:singularize()});
		$this->fixture->remove{property.name -> k:singularize() -> k:format.uppercaseFirst()}(${property.name -> k:singularize()});

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->get{property.name -> k:format.uppercaseFirst()}()
		);
	}
	</f:if></f:for></f:then><f:else>
	/**
	 * @test
	 */
	public function dummyTestToNotLeaveThisFileEmpty() {
		$this->markTestIncomplete();
	}
	</f:else>
	</f:if>
}
?>
