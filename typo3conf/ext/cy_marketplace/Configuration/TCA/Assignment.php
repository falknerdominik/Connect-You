<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_cymarketplace_domain_model_assignment'] = array(
	'ctrl' => $TCA['tx_cymarketplace_domain_model_assignment']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, user, role, timeset, project',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, user, role, timeset, project,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
		'user' => Array (
			'exclude' => 1,
 			'label' => 'LLL:EXT:mittwald_timetrack/Resources/Private/Language/'
 				. 'locallang_db.xml:'
 				. 'tx_mittwaldtimetrack_domain_model_assignment.user',
 			'config' => Array (
 			'type' => 'select',
 			'foreign_class' => 'Tx_Extbase_Domain_Model_FrontendUser',
 			'foreign_table' => 'fe_users',
 			'maxitems' => 1 ) ),
				),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_cymarketplace_domain_model_assignment',
				'foreign_table_where' => 'AND tx_cymarketplace_domain_model_assignment.pid=###CURRENT_PID### AND tx_cymarketplace_domain_model_assignment.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'user' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:cy_marketplace/Resources/Private/Language/locallang_db.xlf:tx_cymarketplace_domain_model_assignment.user',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'fe_users',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'role' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:cy_marketplace/Resources/Private/Language/locallang_db.xlf:tx_cymarketplace_domain_model_assignment.role',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_cymarketplace_domain_model_role',
				'foreign_field' => 'assignment',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'timeset' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:cy_marketplace/Resources/Private/Language/locallang_db.xlf:tx_cymarketplace_domain_model_assignment.timeset',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_cymarketplace_domain_model_timeset',
				'foreign_field' => 'assignment',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'project' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:cy_marketplace/Resources/Private/Language/locallang_db.xlf:tx_cymarketplace_domain_model_assignment.project',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_cymarketplace_domain_model_project',
				'foreign_field' => 'assignment',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
	),
);

?>