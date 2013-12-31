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
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * projectRepository
	 *
	 * @var \TYPO3\Connectyou\Domain\Repository\ProjectRepository
	 * @inject
	 */
	protected $projectRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$projects = $this->projectRepository->findAll();
		$this->view->assign('projects', $projects);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function showAction(\TYPO3\Connectyou\Domain\Model\Project $project) {
		$this->view->assign('project', $project);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $newProject
	 * @dontvalidate $newProject
	 * @return void
	 */
	public function newAction(\TYPO3\Connectyou\Domain\Model\Project $newProject = NULL) {
		$this->view->assign('newProject', $newProject);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $newProject
	 * @return void
	 */
	public function createAction(\TYPO3\Connectyou\Domain\Model\Project $newProject) {
		$this->projectRepository->add($newProject);
		$this->flashMessageContainer->add('Your new Project was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function editAction(\TYPO3\Connectyou\Domain\Model\Project $project) {
		$this->view->assign('project', $project);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function updateAction(\TYPO3\Connectyou\Domain\Model\Project $project) {
		$this->projectRepository->update($project);
		$this->flashMessageContainer->add('Your Project was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function deleteAction(\TYPO3\Connectyou\Domain\Model\Project $project) {
		$this->projectRepository->remove($project);
		$this->flashMessageContainer->add('Your Project was removed.');
		$this->redirect('list');
	}

    /**
     * action addTeammember
     *
     * @param \TYPO3\Connectyou\Domain\Model\User $user
     * @return void
     */
    public function addTeammember($\TYPO3\Connectyou\Domain\Model\User $user){
        
    }
}
?>