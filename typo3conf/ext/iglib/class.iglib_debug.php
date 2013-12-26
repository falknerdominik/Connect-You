<?php

/***************************************************************
* Copyright notice
*
* (c) 2007 Michaël Gagnon <mgagnon@infoglobe.ca>
* All rights reserved
*
* Is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Class iglib_debug.
 *
 * Debug TYPO3 variables.
 *
 * @access public
 * @package TYPO3
 * @subpackage iglib
 * @author       Michael Gagnon <mgagnon@infoglobe.ca>
 * @copyright Copyright (c) Infoglobe 2007
 * @version $Id: class.iglib_debug.php
 *
 * $BE_USER
 * $LANG
 * $BACK_PATH
 * $TCA_DESCR
 * $TCA
 * $CLIENT
 * $TYPO3_CONF_VARS
 */
class iglib_debug {

	function print_this ($value = null, $comment = null, $var_dump = false) {

		echo '<hr />';

		echo $comment ? '<h2>'.$comment.'</h2>' : null;

		if ($var_dump) {

			echo '<stonrg><u>var_dump : </u></strong><br /><br />';

			//var_export($to_print);

			print_r("<xmp>");
			print_r(var_dump($value));
			print_r("</xmp>");

			echo '<br /><br /><stonrg><u>print_r : </u></strong>';

		}

		print_r("<xmp>");
		print_r($value);
		print_r("</xmp>");

		echo '<hr />';

	}

	function session ($comment = null) {

		iglib_debug::print_this($_SESSION, $comment ? $comment : 'SESSION');

	}

	function post ($comment = null) {

		iglib_debug::print_this($_POST, $comment ? $comment : 'POST');

	}

	function get ($comment = null) {

		iglib_debug::print_this($_GET, $comment ? $comment : 'GET');

	}

	function be_user ($comment = null) {

		global $BE_USER;

		iglib_debug::print_this($BE_USER, $comment ? $comment : 'BE_USER');

	}

	function lang ($comment = null) {

		global $LANG;

		iglib_debug::print_this($LANG, $comment ? $comment : 'LANG');

	}

	function tca ($comment = null) {

		global $TCA;

		iglib_debug::print_this($TCA, $comment ? $comment : 'TCA');

	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/iglib/class.iglib_debug.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/iglib/class.iglib_debug.php']);
}

?>