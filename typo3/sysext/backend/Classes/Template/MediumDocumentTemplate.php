<?php
namespace TYPO3\CMS\Backend\Template;

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
 * Extension class for "template" - used for backend pages which were medium wide. Typically submodules to Web or File which were presented in the list-frame when the content frame were divided into a navigation and list frame.
 * The class were more significant in the past than today. But probably you should use this one for most modules you make.
 *
 * @deprecated since 6.1 will be removed two versions later
 */
class MediumDocumentTemplate extends \TYPO3\CMS\Backend\Template\DocumentTemplate {

	public function __construct() {
		\TYPO3\CMS\Core\Utility\GeneralUtility::logDeprecatedFunction();
		parent::__construct();
	}

}

?>