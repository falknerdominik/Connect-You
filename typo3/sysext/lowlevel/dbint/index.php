<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 1999-2013 Kasper Skårhøj (kasperYYYY@typo3.com)
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
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Module: Database integrity check
 *
 * This module lets you check if all pages and the records relate properly to each other
 *
 * @author Kasper Skårhøj <kasperYYYY@typo3.com>
 * @coauthor Jo Hasenau <info@cybercraft.de>
 */
$GLOBALS['LANG']->includeLLFile('EXT:lowlevel/dbint/locallang.xml');
$BE_USER->modAccess($MCONF, 1);
/*
 * @deprecated since 6.0, the classname SC_mod_tools_dbint_index and this file is obsolete
 * and will be removed with 6.2. The class was renamed and is now located at:
 * typo3/sysext/lowlevel/Classes/View/DatabaseIntegrityView.php
 */
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('lowlevel') . 'Classes/View/DatabaseIntegrityView.php';
// Make instance:
$SOBE = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Lowlevel\\View\\DatabaseIntegrityView');
$SOBE->init();
$SOBE->main();
$SOBE->printContent();
?>