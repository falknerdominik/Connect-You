<?php
if (!defined('TYPO3_cliMode')) {
	die('You cannot run this script directly!');
}
// Call the functionality
if (in_array('-e', $_SERVER['argv']) || in_array('-c', $_SERVER['argv'])) {
	$testOnly = in_array('-c', $_SERVER['argv']);
	$refIndexObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Database\\ReferenceIndex');
	list($headerContent, $bodyContent) = $refIndexObj->updateIndex($testOnly, !in_array('-s', $_SERVER['argv']));
} else {
	echo '
Options:
-c = Check refindex
-e = Update refindex
-s = Silent
';
	die;
}
?>