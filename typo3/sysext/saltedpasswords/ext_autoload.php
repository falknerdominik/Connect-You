<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2009-09-16 14:24
$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('saltedpasswords');
return array(
	'tx_saltedpasswords_div' => $extensionPath . 'Classes/class.tx_saltedpasswords_div.php',
	'tx_saltedpasswords_emconfhelper' => $extensionPath . 'Classes/class.tx_saltedpasswords_emconfhelper.php',
	'tx_saltedpasswords_abstract_salts' => $extensionPath . 'Classes/salts/class.tx_saltedpasswords_abstract_salts.php',
	'tx_saltedpasswords_salts_blowfish' => $extensionPath . 'Classes/salts/class.tx_saltedpasswords_salts_blowfish.php',
	'tx_saltedpasswords_salts_factory' => $extensionPath . 'Classes/salts/class.tx_saltedpasswords_salts_factory.php',
	'tx_saltedpasswords_salts_md5' => $extensionPath . 'Classes/salts/class.tx_saltedpasswords_salts_md5.php',
	'tx_saltedpasswords_salts_phpass' => $extensionPath . 'Classes/salts/class.tx_saltedpasswords_salts_phpass.php',
	'tx_saltedpasswords_salts' => $extensionPath . 'Classes/salts/interfaces/interface.tx_saltedpasswords_salts.php',
	'tx_saltedpasswords_eval' => $extensionPath . 'Classes/eval/class.tx_saltedpasswords_eval.php',
	'tx_saltedpasswords_eval_be' => $extensionPath . 'Classes/eval/class.tx_saltedpasswords_eval_be.php',
	'tx_saltedpasswords_eval_fe' => $extensionPath . 'Classes/eval/class.tx_saltedpasswords_eval_fe.php',
	'tx_saltedpasswords_tasks_bulkupdate' => $extensionPath . 'Classes/tasks/class.tx_saltedpasswords_tasks_bulkupdate.php',
	'tx_saltedpasswords_tasks_bulkupdate_additionalfieldprovider' => $extensionPath . 'Classes/tasks/class.tx_saltedpasswords_tasks_bulkupdate_additionalfieldprovider.php',
	'tx_saltedpasswords_sv1' => $extensionPath . 'sv1/class.tx_saltedpasswords_sv1.php',
	'tx_saltedpasswords_div_testcase' => $extensionPath . 'tests/tx_saltedpasswords_div_testcase.php',
	'tx_saltedpasswords_salts_blowfish_testcase' => $extensionPath . 'tests/tx_saltedpasswords_salts_blowfish_testcase.php',
	'tx_saltedpasswords_salts_factory_testcase' => $extensionPath . 'tests/tx_saltedpasswords_salts_factory_testcase.php',
	'tx_saltedpasswords_salts_md5_testcase' => $extensionPath . 'tests/tx_saltedpasswords_salts_md5_testcase.php',
	'tx_saltedpasswords_salts_phpass_testcase' => $extensionPath . 'tests/tx_saltedpasswords_salts_phpass_testcase.php'
);
?>