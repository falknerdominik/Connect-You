<?php
namespace TYPO3\Connectyou\Domain\Model;


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
class User extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {
    /**
     * Benutzername des Users
     *
     * @var \string
     */
    protected $username;

    /**
     * Die Id des Users
     *
     * @var int
     */
    protected $uid;

    /**
     * Returns the name
     *
     * @return \string $name
     */
    public function getUserame() {
        return $this->username;
    }

    /**
     * Gets the uid
     *
     * @param int $uid
     * @return void
     */
    public function setUsername($uid) {
        $this->name = $uid;
    }
}
?>