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
     * feUserRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
     * @inject
     */
    protected $userRepository;

	/**
	 * Die Projekte in Listenform anzeigen
	 *
	 * @return void
	 */
	public function listAction() {
        # Alle Projekte aus dem Repository holen
		$projects = $this->projectRepository->findAll();

        # Das Projekt Fluid übergeben
		$this->view->assign('projects', $projects);
	}

	/**
	 * Details eines Projektes Anzeigen
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function showAction(\TYPO3\Connectyou\Domain\Model\Project $project) {
        # Das Projekt zu Fluid weitergeben
		$this->view->assign('project', $project);
	}

	/**
	 * Neues Projekt erstellen
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $newProject
	 * @dontvalidate $newProject
	 * @return void
	 */
	public function newAction(\TYPO3\Connectyou\Domain\Model\Project $newProject = NULL) {

        # Die Benutzer nach Gruppensortiert auslesen
        $clients = $this->findUsersWithFrontendUserGroupTitle('Clients', $uid);
        $students = $this->findUsersWithFrontendUserGroupTitle("Students", $uid);

        # debug
         \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($clients);

        # der View zuweisen
        $this->view->assign('students', $students);
        $this->view->assign('clients', $clients);
		$this->view->assign('project', $newProject);
	}

	/**
	 * Neues Projekt persistieren
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $newProject
	 * @return void
	 */
	public function createAction(\TYPO3\Connectyou\Domain\Model\Project $newProject) {
		# Persistieren
        $this->projectRepository->add($newProject);

        # Neue FlashMassage erstellen
		$this->flashMessageContainer->add('Your new Project was created.');

        # Weiterleitung zur Liste
		$this->redirect('list');
	}

	/**
	 * Project bearbeiten
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function editAction(\TYPO3\Connectyou\Domain\Model\Project $project) {
        # Uid des Projektes auslesen das vorhandene Team angezeigt wird
        $uid = $project->getUid();

        # Die Benutzer nach Gruppensortiert auslesen
        $clients = $this->findUsersWithFrontendUserGroupTitle('Clients', $uid);
        $students = $this->findUsersWithFrontendUserGroupTitle("Students", $uid);

        # debug
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($project);

        # der View zuweisen
        $this->view->assign('students', $students);
        $this->view->assign('project', $project);
        $this->view->assign('clients', $clients);
	}

	/**
	 * Project Updaten
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function updateAction(\TYPO3\Connectyou\Domain\Model\Project $project) {
        # Die Daten der Form holen für Debugging
        # $arguments = $this->request->getArguments();
        # $formData = $arguments['project'];

        #debug
        #\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($formData);
        #\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($project);

        # Update Projekt
        $this->projectRepository->update($project);

        # Erstelle FlashMassage
		$this->flashMessageContainer->add("Das Projekt $project->getName() wurde geupdated.");

        # Weiterleitung zur Liste
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Connectyou\Domain\Model\Project $project
	 * @return void
	 */
	public function deleteAction(\TYPO3\Connectyou\Domain\Model\Project $project) {
		# Das Projekt vom Repo löschen
        $this->projectRepository->remove($project);

        # Erstelle FlashMassage
		$this->flashMessageContainer->add("Das Projekt $project->getName() wurde gelöscht!");

        #Weiterleitung zur Liste
		$this->redirect('list');
	}


    /**
     * Sucht die Benutzer nach dem Gruppentitel heraus.
     *
     * @param $title
     * @return array
     */
    public function findUsersWithFrontendUserGroupTitle($title, $uid) {
        # Array initalisieren
        $searchedUsers = array();

        # Finde alle Benutzer
        $allUsers = $this->userRepository->findAll();

        # debug
        #\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($allUsers);

        # suche nur jene heraus die den Gruppentitel $title haben
        foreach($allUsers as $user) {
            # get FrontendUserGroup  aus ObjektStorage
            $group = $user->getUsergroup();

            # Suche die Gruppenzugehörigen heraus und Speichere die nötigen user im Array
            if($group->getTitle() == $title && ($user->getProject == 0 || $user->getProject() == $uid)){
                array_push($searchedUsers, $user);
            }
        }

        #debug
        #\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($searchedUsers);

        # return
        return $searchedUsers;
    }
}
?>