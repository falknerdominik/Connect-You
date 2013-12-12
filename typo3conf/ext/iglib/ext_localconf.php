<?php
if (!defined ("TYPO3_MODE")) die ("Access denied.");

	define('PATH_iglib', t3lib_extMgm::extPath("iglib"));

	require_once(PATH_iglib.'class.iglib_debug.php');


	require_once(t3lib_extMgm::extPath('cms').'tslib/class.tslib_pibase.php');

?>
