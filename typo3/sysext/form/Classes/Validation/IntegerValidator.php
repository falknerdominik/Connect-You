<?php
namespace TYPO3\CMS\Form\Validation;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2008-2013 Patrick Broens (patrick@patrickbroens.nl)
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
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Integer rule
 *
 * @author Patrick Broens <patrick@patrickbroens.nl>
 */
class IntegerValidator extends \TYPO3\CMS\Form\Validation\AbstractValidator {

	/**
	 * Returns TRUE if submitted value validates according to rule
	 *
	 * @return boolean
	 * @see \TYPO3\CMS\Form\Validation\ValidatorInterface::isValid()
	 */
	public function isValid() {
		if ($this->requestHandler->has($this->fieldName)) {
			$value = $this->requestHandler->getByMethod($this->fieldName);
			$locale = localeconv();
			$valueFiltered = str_replace($locale['thousands_sep'], '', $value);
			$valueFiltered = str_replace($locale['mon_thousands_sep'], '', $value);
			$valueFiltered = str_replace($locale['decimal_point'], '.', $valueFiltered);
			$valueFiltered = str_replace($locale['mon_decimal_point'], '.', $valueFiltered);
			if (strval(intval($valueFiltered)) != $valueFiltered) {
				return FALSE;
			}
		}
		return TRUE;
	}

}

?>