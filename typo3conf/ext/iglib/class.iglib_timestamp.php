<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2007 Michael Gagnon <mgagnon@infoglobe.ca>
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
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
 * Class iglib_timestamp.
 *
 * Description of class ...
 *
 * TEST SVN
 *
 * @access public
 * @package	TYPO3
 * @subpackage	iglib
 * @author	Michael Gagnon <mgagnon@infoglobe.ca>
 * @copyright	(c) 2007 Michael Gagnon <mgagnon@infoglobe.ca>
 * @version	$Id: class.iglib_timestamp.php
 */
class iglib_timestamp {

	function reset_time ($h = 0, $m = 0, $s = 0, $timestamp = null) {

		$date = getdate($timestamp);
		return mktime($h, $m, $s, $date['mon'], $date['mday'], $date['year']);

	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/iglib/class.iglib_timestamp.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/iglib/class.iglib_timestamp.php']);
}

?>