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
class GalleryWidget extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * img
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\GalleryImages>
	 */
	protected $img;

	/**
	 * __construct
	 *
	 * @return GalleryWidget
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
		$this->img = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a GalleryImages
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\GalleryImages $img
	 * @return void
	 */
	public function addImg(\TYPO3\Connectyou\Domain\Model\GalleryImages $img) {
		$this->img->attach($img);
	}

	/**
	 * Removes a GalleryImages
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\GalleryImages $imgToRemove The GalleryImages to be removed
	 * @return void
	 */
	public function removeImg(\TYPO3\Connectyou\Domain\Model\GalleryImages $imgToRemove) {
		$this->img->detach($imgToRemove);
	}

	/**
	 * Returns the img
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\GalleryImages> $img
	 */
	public function getImg() {
		return $this->img;
	}

	/**
	 * Sets the img
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Connectyou\Domain\Model\GalleryImages> $img
	 * @return void
	 */
	public function setImg(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $img) {
		$this->img = $img;
	}

}
?>