<?php
namespace TYPO3\CyMarketplace\Controller;

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
 * @package cy_marketplace
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class TimesetController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$timesets = $this->timesetRepository->findAll();
		$this->view->assign('timesets', $timesets);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Timeset $newTimeset
	 * @dontvalidate $newTimeset
	 * @return void
	 */
	public function newAction(\TYPO3\CyMarketplace\Domain\Model\Timeset $newTimeset = NULL) {
		$this->view->assign('newTimeset', $newTimeset);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Timeset $newTimeset
	 * @return void
	 */
	public function createAction(\TYPO3\CyMarketplace\Domain\Model\Timeset $newTimeset) {
		$this->timesetRepository->add($newTimeset);
		$this->flashMessageContainer->add('Your new Timeset was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Timeset $timeset
	 * @return void
	 */
	public function editAction(\TYPO3\CyMarketplace\Domain\Model\Timeset $timeset) {
		$this->view->assign('timeset', $timeset);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Timeset $timeset
	 * @return void
	 */
	public function updateAction(\TYPO3\CyMarketplace\Domain\Model\Timeset $timeset) {
		$this->timesetRepository->update($timeset);
		$this->flashMessageContainer->add('Your Timeset was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\CyMarketplace\Domain\Model\Timeset $timeset
	 * @return void
	 */
	public function deleteAction(\TYPO3\CyMarketplace\Domain\Model\Timeset $timeset) {
		$this->timesetRepository->remove($timeset);
		$this->flashMessageContainer->add('Your Timeset was removed.');
		$this->redirect('list');
	}

}
?>