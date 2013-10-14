<?php
namespace TYPO3\Connectyou\Controller;

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
class AddressController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$addresses = $this->addressRepository->findAll();
		$this->view->assign('addresses', $addresses);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Address $newAddress
	 * @dontvalidate $newAddress
	 * @return void
	 */
	public function newAction(\TYPO3\Connectyou\Domain\Model\Address $newAddress = NULL) {
		$this->view->assign('newAddress', $newAddress);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Address $newAddress
	 * @return void
	 */
	public function createAction(\TYPO3\Connectyou\Domain\Model\Address $newAddress) {
		$this->addressRepository->add($newAddress);
		$this->flashMessageContainer->add('Your new Address was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Address $address
	 * @return void
	 */
	public function editAction(\TYPO3\Connectyou\Domain\Model\Address $address) {
		$this->view->assign('address', $address);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Address $address
	 * @return void
	 */
	public function updateAction(\TYPO3\Connectyou\Domain\Model\Address $address) {
		$this->addressRepository->update($address);
		$this->flashMessageContainer->add('Your Address was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Address $address
	 * @return void
	 */
	public function deleteAction(\TYPO3\Connectyou\Domain\Model\Address $address) {
		$this->addressRepository->remove($address);
		$this->flashMessageContainer->add('Your Address was removed.');
		$this->redirect('list');
	}

}
?>