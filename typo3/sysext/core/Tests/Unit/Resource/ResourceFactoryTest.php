<?php
namespace TYPO3\CMS\Core\Tests\Unit\Resource;

/***************************************************************
 * Copyright notice
 *
 * (c) 2011-2013 Andreas Wolf <andreas.wolf@ikt-werk.de>
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Testcase for the factory of FAL
 *
 * @author Andreas Wolf <andreas.wolf@ikt-werk.de>
 */
class FactoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var array A backup of registered singleton instances
	 */
	protected $singletonInstances = array();

	/**
	 * @var \TYPO3\CMS\Core\Resource\ResourceFactory
	 */
	private $fixture;

	/**
	 * @var boolean
	 */
	private $objectCreated = FALSE;

	/**
	 * @var array
	 */
	private $filesCreated = array();

	public function setUp() {
		$this->singletonInstances = \TYPO3\CMS\Core\Utility\GeneralUtility::getSingletonInstances();
		$this->fixture = $this->getAccessibleMock('TYPO3\\CMS\\Core\\Resource\\ResourceFactory', array('dummy'), array(), '', FALSE);
	}

	public function tearDown() {
		\TYPO3\CMS\Core\Utility\GeneralUtility::resetSingletonInstances($this->singletonInstances);
		foreach ($this->filesCreated as $file) {
			unlink($file);
		}
	}

	/**********************************
	 * Storage Collections
	 **********************************/
	/**
	 * @test
	 */
	public function createStorageCollectionObjectCreatesCollectionWithCorrectArguments() {
		$mockedMount = $this->getMock('TYPO3\\CMS\\Core\\Resource\\ResourceStorage', array(), array(), '', FALSE);
		$path = uniqid();
		$name = uniqid();
		$storageCollection = $this->fixture->createFolderObject($mockedMount, $path, $name, 0);
		$this->assertSame($mockedMount, $storageCollection->getStorage());
		$this->assertEquals($path . '/', $storageCollection->getIdentifier());
		$this->assertEquals($name, $storageCollection->getName());
	}

	/**********************************
	 * Drivers
	 **********************************/
	/**
	 * @test
	 */
	public function getDriverObjectAcceptsDriverClassName() {
		$mockedDriver = $this->getMock('TYPO3\\CMS\\Core\\Resource\\Driver\\AbstractDriver', array(), array(), '', FALSE);
		$driverFixtureClass = get_class($mockedDriver);
		\TYPO3\CMS\Core\Utility\GeneralUtility::addInstance($driverFixtureClass, $mockedDriver);
		$mockedMount = $this->getMock('TYPO3\\CMS\\Core\\Resource\\ResourceStorage', array(), array(), '', FALSE);
		$mockedRegistry = $this->getMock('TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry');
		$mockedRegistry->expects($this->once())->method('getDriverClass')->with($this->equalTo($driverFixtureClass))->will($this->returnValue($driverFixtureClass));
		\TYPO3\CMS\Core\Utility\GeneralUtility::setSingletonInstance('TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry', $mockedRegistry);
		$obj = $this->fixture->getDriverObject($driverFixtureClass, array());
		$this->assertInstanceOf('TYPO3\\CMS\\Core\\Resource\\Driver\\AbstractDriver', $obj);
	}

	/***********************************
	 *  File Handling
	 ***********************************/

	public function directoryDataProviderValidFolderValues() {
		return array(
			'relative path' => array('typo3'),
			'path with PATH_site' => array(PATH_site . 'typo3')
		);
	}

	/**
	 * @test
	 * @dataProvider directoryDataProviderValidFolderValues
	 */
	public function retrieveFileOrFolderObjectReturnsFolderIfPathIsGiven($source) {
		$storage = $this->getMock('TYPO3\\CMS\\Core\\Resource\\ResourceStorage', array('getFile', 'getFolder'), array(), '', FALSE);
		$storage->expects($this->once())
			->method('getFolder')
			->with('typo3');
		$this->fixture->_set('storageInstances', array(0 => $storage));
		$this->fixture->retrieveFileOrFolderObject($source);
	}

	/**
	 * @test
	 */
	public function retrieveFileOrFolderObjectReturnsFileIfPathIsGiven() {
		$filename = 'typo3temp/4711.txt';
		$storage = $this->getMock('TYPO3\\CMS\\Core\\Resource\\ResourceStorage', array('getFile', 'getFolder'), array(), '', FALSE);
		$storage->expects($this->once())
			->method('getFile')
			->with($filename);
		$this->fixture->_set('storageInstances', array(0 => $storage));
		// Create and prepare test file
		\TYPO3\CMS\Core\Utility\GeneralUtility::writeFileToTypo3tempDir(PATH_site . $filename, '42');
		$this->filesCreated[] = PATH_site . $filename;
		$this->fixture->retrieveFileOrFolderObject($filename);
	}

	/***********************************
	 * Storage AutoDetection
	 ***********************************/

	/**
	 * @param array $storageConfiguration
	 * @param string $path
	 * @param integer $expectedStorageId
	 * @test
	 * @dataProvider storageDetectionDataProvider
	 */

	public function findBestMatchingStorageByLocalPathReturnsDefaultStorageIfNoMatchIsFound(array $storageConfiguration, $path, $expectedStorageId) {
		$this->fixture->_set('localDriverStorageCache', $storageConfiguration);
		$this->assertSame($expectedStorageId, $this->fixture->_callRef('findBestMatchingStorageByLocalPath', $path));
	}



	/**
	 * @return array
	 */
	public function storageDetectionDataProvider() {
		return array(
			'NoLocalStoragesReturnDefaultStorage' => array(
				array(),
				'my/dummy/Image.png',
				0
			),
			'NoMatchReturnsDefaultStorage' => array(
				array(1 => 'fileadmin/', 2 => 'fileadmin2/public/'),
				'my/dummy/Image.png',
				0
			),
			'MatchReturnsTheMatch' => array(
				array(1 => 'fileadmin/', 2 => 'other/public/'),
				'fileadmin/dummy/Image.png',
				1
			),
			'TwoFoldersWithSameStartReturnsCorrect' => array(
				array(1 => 'fileadmin/', 2 => 'fileadmin/public/'),
				'fileadmin/dummy/Image.png',
				1
			),
			'NestedStorageReallyReturnsTheBestMatching' => array(
				array(1 => 'fileadmin/', 2 => 'fileadmin/public/'),
				'fileadmin/public/Image.png',
				2
			),
			'CommonPrefixButWrongPath' => array(
				array(1 => 'fileadmin/', 2 => 'uploads/test/'),
				'uploads/bogus/dummy.png',
				0
			),
			'CommonPrefixRightPath' => array(
				array(1 => 'fileadmin/', 2 => 'uploads/test/'),
				'uploads/test/dummy.png',
				2
			),
			'FindStorageFromWindowsPath' => array(
				array(1 => 'fileadmin/', 2 => 'uploads/test/'),
				'uploads\\test\\dummy.png',
				2
			),
		);
	}
}

?>
