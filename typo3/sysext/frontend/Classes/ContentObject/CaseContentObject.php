<?php
namespace TYPO3\CMS\Frontend\ContentObject;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2013 Xavier Perseguers <typo3@perseguers.ch>
 *  (c) 2010-2013 Steffen Kamper <steffen@typo3.org>
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
 * Contains CASE class object.
 *
 * @author Xavier Perseguers <typo3@perseguers.ch>
 * @author Steffen Kamper <steffen@typo3.org>
 */
class CaseContentObject extends \TYPO3\CMS\Frontend\ContentObject\AbstractContentObject {

	/**
	 * Rendering the cObject, CASE
	 *
	 * @param array $conf Array of TypoScript properties
	 * @return string Output
	 */
	public function render($conf = array()) {
		if ($this->cObj->checkIf($conf['if.'])) {
			$setCurrent = isset($conf['setCurrent.']) ? $this->cObj->stdWrap($conf['setCurrent'], $conf['setCurrent.']) : $conf['setCurrent'];
			if ($setCurrent) {
				$this->cObj->data[$this->cObj->currentValKey] = $setCurrent;
			}
			$key = isset($conf['key.']) ? $this->cObj->stdWrap($conf['key'], $conf['key.']) : $conf['key'];
			$key = strlen($conf[$key]) ? $key : 'default';
			$name = $conf[$key];
			$theValue = $this->cObj->cObjGetSingle($name, $conf[$key . '.'], $key);
			if (isset($conf['stdWrap.'])) {
				$theValue = $this->cObj->stdWrap($theValue, $conf['stdWrap.']);
			}
			return $theValue;
		}
	}

}


?>