<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Cymarcetplace',
	'cy_marcetplace'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Cyusers',
	'cy_users'
);



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Connect You');


	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_project', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_project.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_project');
$TCA['tx_connectyou_domain_model_project'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_project',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,description,type,assignments,team,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Project.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_project.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_role', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_role.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_role');
$TCA['tx_connectyou_domain_model_role'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_role',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Role.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_role.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_assignment', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_assignment.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_assignment');
$TCA['tx_connectyou_domain_model_assignment'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_assignment',
		'label' => 'role',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'role,timeset,project,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Assignment.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_assignment.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_timeset', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_timeset.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_timeset');
$TCA['tx_connectyou_domain_model_timeset'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_timeset',
		'label' => 'start_time',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'start_time,end_time,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Timeset.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_timeset.gif'
	),
);
		

	
			
					
$tmp_connectyou_columns = array(

);

$tmp_connectyou_columns['project'] = array(
	'config' => array(
		'type' => 'passthrough',
	)
);

t3lib_extMgm::addTCAcolumns('fe_users',$tmp_connectyou_columns);

$TCA['fe_users']['columns'][$TCA['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Connectyou_User','Tx_Connectyou_User');


$TCA['fe_users']['types']['Tx_Connectyou_User']['showitem'] = $TCA['fe_users']['types']['1']['showitem'];
$TCA['fe_users']['types']['Tx_Connectyou_User']['showitem'] .= ',--div--;LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_user,';
$TCA['fe_users']['types']['Tx_Connectyou_User']['showitem'] .= '';

				
		

?>