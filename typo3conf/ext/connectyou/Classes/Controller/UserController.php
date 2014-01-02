<?php
namespace TYPO3\Connectyou\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dominik Falkner <falkner.dominik@gmail.com>, BBS-Rohrbach
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
class UserController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * feUserRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
     * @inject
     */
    protected $userRepository;

    /**
     * projectRepository
     *
     * @var \TYPO3\connectyou\Domain\Repository\ProjectRepository
     * @inject
     */
    protected $projectRepository;

    /**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$users = $this->userRepository->findAll();
        $projects = $this->projectRepository->findAll();

        #Debug
        $config = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($config);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->projectRepository);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->userRepository);
		$this->view->assign('users', $users);
        $this->view->assign('projects', $projects);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $user
	 * @return void
	 */
	public function showAction(\TYPO3\Connectyou\Domain\Model\User $user) {
		$this->view->assign('user', $user);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $newUser
	 * @dontvalidate $newUser
	 * @return void
	 */
	public function newAction(\TYPO3\Connectyou\Domain\Model\User $newUser = NULL) {
		$this->view->assign('newUser', $newUser);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $newUser
	 * @return void
	 */
	public function createAction(\TYPO3\Connectyou\Domain\Model\User $newUser) {
		$this->userRepository->add($newUser);
		$this->flashMessageContainer->add('Your new User was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $user
	 * @return void
	 */
	public function editAction(\TYPO3\Connectyou\Domain\Model\User $user) {
		$this->view->assign('user', $user);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $user
	 * @return void
	 */
	public function updateAction(\TYPO3\Connectyou\Domain\Model\User $user) {
		$this->userRepository->update($user);
		$this->flashMessageContainer->add('Your User was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\User $user
	 * @return void
	 */
	public function deleteAction(\TYPO3\Connectyou\Domain\Model\User $user) {
		$this->userRepository->remove($user);
		$this->flashMessageContainer->add('Your User was removed.');
		$this->redirect('list');
	}

}
?>