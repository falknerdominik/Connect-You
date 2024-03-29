<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Cymarcetplace',
	'cy_marcetplace'
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
		'searchFields' => 'name,description,type,team,widgets_private,widgets_public,',
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

				
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_widget', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_widget.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_widget');
$TCA['tx_connectyou_domain_model_widget'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_widget',
		'label' => 'todo',
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
		'searchFields' => 'todo,notepad,gallery,timekeeper,milestones,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Widget.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_widget.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_todowidget', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_todowidget.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_todowidget');
$TCA['tx_connectyou_domain_model_todowidget'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_todowidget',
		'label' => 'task',
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
		'searchFields' => 'task,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/TodoWidget.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_todowidget.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_todotask', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_todotask.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_todotask');
$TCA['tx_connectyou_domain_model_todotask'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_todotask',
		'label' => 'task',
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
		'searchFields' => 'task,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/TodoTask.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_todotask.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_notepadwidget', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_notepadwidget.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_notepadwidget');
$TCA['tx_connectyou_domain_model_notepadwidget'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_notepadwidget',
		'label' => 'text',
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
		'searchFields' => 'text,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/NotepadWidget.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_notepadwidget.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_gallerywidget', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_gallerywidget.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_gallerywidget');
$TCA['tx_connectyou_domain_model_gallerywidget'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_gallerywidget',
		'label' => 'img',
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
		'searchFields' => 'img,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/GalleryWidget.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_gallerywidget.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_galleryimages', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_galleryimages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_galleryimages');
$TCA['tx_connectyou_domain_model_galleryimages'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_galleryimages',
		'label' => 'img',
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
		'searchFields' => 'img,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/GalleryImages.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_galleryimages.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_timekeeperwidget', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_timekeeperwidget.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_timekeeperwidget');
$TCA['tx_connectyou_domain_model_timekeeperwidget'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_timekeeperwidget',
		'label' => 'assignment',
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
		'searchFields' => 'assignment,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/TimekeeperWidget.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_timekeeperwidget.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_milestoneswidget', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_milestoneswidget.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_milestoneswidget');
$TCA['tx_connectyou_domain_model_milestoneswidget'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_milestoneswidget',
		'label' => 'milestones',
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
		'searchFields' => 'milestones,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/MilestonesWidget.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_milestoneswidget.gif'
	),
);
		

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_connectyou_domain_model_milestones', 'EXT:connectyou/Resources/Private/Language/locallang_csh_tx_connectyou_domain_model_milestones.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_connectyou_domain_model_milestones');
$TCA['tx_connectyou_domain_model_milestones'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:connectyou/Resources/Private/Language/locallang_db.xlf:tx_connectyou_domain_model_milestones',
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
		'searchFields' => 'name,description,complete,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Milestones.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_connectyou_domain_model_milestones.gif'
	),
);
		

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
?>