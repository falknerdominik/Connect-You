<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Ingmar Schlecht
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
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_ExtensionBuilder_Domain_Model_DomainObject_BooleanProperty extends Tx_ExtensionBuilder_Domain_Model_DomainObject_AbstractProperty {

	/**
	 * string representation of the default value
	 *
	 * @var string
	 */
	protected $defaultValue = 'FALSE';

	/*
	 * @return string
	 */
	public function getTypeForComment() {
		return 'boolean';
	}

	/*
	 * @return string
	 */
	public function getTypeHint() {
		return '';
	}

	/*
	 * @return string
	 */
	public function getSqlDefinition() {
		return $this->getFieldName() . " tinyint(1) unsigned DEFAULT '0' NOT NULL,";
	}

}

?>