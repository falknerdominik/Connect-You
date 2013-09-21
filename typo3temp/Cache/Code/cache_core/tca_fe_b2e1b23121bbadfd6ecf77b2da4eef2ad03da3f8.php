<?php
$GLOBALS['TCA'] = array(
	'be_groups' => array(
		'ctrl' => array(
			'label' => 'title',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'delete' => 'deleted',
			'default_sortby' => 'ORDER BY title',
			'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
			'adminOnly' => 1,
			'rootLevel' => 1,
			'type' => 'inc_access_lists',
			'typeicon_column' => 'inc_access_lists',
			'typeicons' => array(
				1 => 'be_groups_lists.gif',
			),
			'typeicon_classes' => array(
				'default' => 'status-user-group-backend',
			),
			'enablecolumns' => array(
				'disabled' => 'hidden',
			),
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups',
			'useColumnsForDefaultValues' => 'lockToDomain, fileoper_perms',
			'dividers2tabs' => TRUE,
			'versioningWS_alwaysAllowLiveEdit' => TRUE,
			'searchFields' => 'title',
		),
		'interface' => array(
			'showRecordFieldList' => 'title, db_mountpoints, file_mountpoints, fileoper_perms, inc_access_lists, tables_select, tables_modify, pagetypes_select, non_exclude_fields, groupMods, lockToDomain, description',
		),
		'columns' => array(
			'title' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.title',
				'config' => array(
					'type' => 'input',
					'size' => '25',
					'max' => '50',
					'eval' => 'trim,required',
				),
			),
			'db_mountpoints' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:db_mountpoints',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => '3',
					'maxitems' => 25,
					'autoSizeMax' => 10,
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'file_mountpoints' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:file_mountpoints',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_filemounts',
					'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
					'size' => '3',
					'maxitems' => 25,
					'autoSizeMax' => 10,
					'iconsInOptionTags' => 1,
					'wizards' => array(
						'_PADDING' => 1,
						'_VERTICAL' => 1,
						'edit' => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:file_mountpoints_edit_title',
							'script' => 'wizard_edit.php',
							'popup_onlyOpenIfSelected' => 1,
							'icon' => 'edit2.gif',
							'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
						'add' => array(
							'type' => 'script',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:file_mountpoints_add_title',
							'icon' => 'add.gif',
							'params' => array(
								'table' => 'sys_filemounts',
								'pid' => '0',
								'setValue' => 'prepend',
							),
							'script' => 'wizard_add.php',
						),
						'list' => array(
							'type' => 'script',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:file_mountpoints_list_title',
							'icon' => 'list.gif',
							'params' => array(
								'table' => 'sys_filemounts',
								'pid' => '0',
							),
							'script' => 'wizard_list.php',
						),
					),
				),
			),
			'fileoper_perms' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.fileoper_perms',
				'config' => array(
					'type' => 'check',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_groups.fileoper_perms_general',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_groups.fileoper_perms_unzip',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_groups.fileoper_perms_diroper_perms',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_groups.fileoper_perms_diroper_perms_copy',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_groups.fileoper_perms_diroper_perms_delete',
							0,
						),
					),
					'default' => '7',
				),
			),
			'workspace_perms' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:workspace_perms',
				'config' => array(
					'type' => 'check',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_tca.xlf:workspace_perms_live',
							0,
						),
					),
					'default' => 0,
				),
			),
			'pagetypes_select' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.pagetypes_select',
				'config' => array(
					'type' => 'select',
					'special' => 'pagetypes',
					'size' => '5',
					'autoSizeMax' => 50,
					'maxitems' => 20,
					'renderMode' => 'checkbox',
					'iconsInOptionTags' => 1,
				),
			),
			'tables_modify' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.tables_modify',
				'config' => array(
					'type' => 'select',
					'special' => 'tables',
					'size' => '5',
					'autoSizeMax' => 50,
					'maxitems' => 100,
					'renderMode' => 'checkbox',
					'iconsInOptionTags' => 1,
				),
			),
			'tables_select' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.tables_select',
				'config' => array(
					'type' => 'select',
					'special' => 'tables',
					'size' => '5',
					'autoSizeMax' => 50,
					'maxitems' => 100,
					'renderMode' => 'checkbox',
					'iconsInOptionTags' => 1,
				),
			),
			'non_exclude_fields' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.non_exclude_fields',
				'config' => array(
					'type' => 'select',
					'special' => 'exclude',
					'size' => '25',
					'maxitems' => 1000,
					'autoSizeMax' => 50,
					'renderMode' => 'checkbox',
					'itemListStyle' => 'width:500px',
				),
			),
			'explicit_allowdeny' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.explicit_allowdeny',
				'config' => array(
					'type' => 'select',
					'special' => 'explicitValues',
					'maxitems' => 1000,
					'renderMode' => 'checkbox',
				),
			),
			'allowed_languages' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:allowed_languages',
				'config' => array(
					'type' => 'select',
					'special' => 'languages',
					'maxitems' => 1000,
					'renderMode' => 'checkbox',
				),
			),
			'custom_options' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.custom_options',
				'config' => array(
					'type' => 'select',
					'special' => 'custom',
					'maxitems' => 1000,
					'renderMode' => 'checkbox',
				),
			),
			'hidden' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'lockToDomain' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:lockToDomain',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '50',
					'softref' => 'substitute',
				),
			),
			'groupMods' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:userMods',
				'config' => array(
					'type' => 'select',
					'special' => 'modListGroup',
					'size' => '5',
					'autoSizeMax' => 50,
					'maxitems' => 100,
					'renderMode' => 'checkbox',
					'iconsInOptionTags' => 1,
				),
			),
			'inc_access_lists' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.inc_access_lists',
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'description' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.description',
				'config' => array(
					'type' => 'text',
					'rows' => 5,
					'cols' => 30,
				),
			),
			'TSconfig' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:TSconfig',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '5',
					'wizards' => array(
						'_PADDING' => 4,
						0 => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:TSconfig_title',
							'script' => 'wizard_tsconfig.php?mode=beuser',
							'icon' => 'wizard_tsconfig.gif',
							'JSopenParams' => 'height=500,width=780,status=0,menubar=0,scrollbars=1',
						),
					),
					'softref' => 'TSconfig',
				),
				'defaultExtras' => 'fixed-font : enable-tab',
			),
			'hide_in_lists' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.hide_in_lists',
				'config' => array(
					'type' => 'check',
					'default' => 0,
				),
			),
			'subgroup' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_groups.subgroup',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'be_groups',
					'foreign_table_where' => 'AND NOT(be_groups.uid = ###THIS_UID###) AND be_groups.hidden=0 ORDER BY be_groups.title',
					'size' => '5',
					'autoSizeMax' => 50,
					'maxitems' => 20,
					'iconsInOptionTags' => 1,
				),
			),
		),
		'types' => array(
			array(
				'showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2, description, subgroup;;;;3-3-3,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_groups.tabs.base_rights, inc_access_lists;;;;1-1-1,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces, workspace_perms;;;;1-1-1, db_mountpoints;;;;2-2-2, file_mountpoints;;;;3-3-3, fileoper_perms,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2, TSconfig;;;;3-3-3,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_groups.tabs.extended',
			),
			array(
				'showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2, description, subgroup;;;;3-3-3,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_groups.tabs.base_rights, inc_access_lists;;;;1-1-1, groupMods, tables_select, tables_modify, pagetypes_select, non_exclude_fields, explicit_allowdeny , allowed_languages;;;;2-2-2, custom_options;;;;3-3-3,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces, workspace_perms;;;;1-1-1, db_mountpoints;;;;2-2-2, file_mountpoints;;;;3-3-3, fileoper_perms,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2, TSconfig;;;;3-3-3,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_groups.tabs.extended',
			),
		),
	),
	'be_users' => array(
		'ctrl' => array(
			'label' => 'username',
			'tstamp' => 'tstamp',
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:be_users',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'delete' => 'deleted',
			'adminOnly' => 1,
			'rootLevel' => 1,
			'default_sortby' => 'ORDER BY admin, username',
			'enablecolumns' => array(
				'disabled' => 'disable',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'type' => 'admin',
			'typeicon_column' => 'admin',
			'typeicons' => array(
				'be_users.gif',
				'be_users_admin.gif',
			),
			'typeicon_classes' => array(
				0 => 'status-user-backend',
				1 => 'status-user-admin',
				'default' => 'status-user-backend',
			),
			'mainpalette' => '1',
			'useColumnsForDefaultValues' => 'usergroup,lockToDomain,options,db_mountpoints,file_mountpoints,fileoper_perms,userMods',
			'dividers2tabs' => TRUE,
			'versioningWS_alwaysAllowLiveEdit' => TRUE,
			'searchFields' => 'username,email,realName',
		),
		'interface' => array(
			'showRecordFieldList' => 'username,usergroup,db_mountpoints,file_mountpoints,admin,options,fileoper_perms,userMods,lockToDomain,realName,email,disable,starttime,endtime,lastlogin',
		),
		'columns' => array(
			'username' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.username',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'max' => '50',
					'eval' => 'nospace,lower,unique,required',
				),
			),
			'password' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.password',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'max' => '40',
					'eval' => 'required,md5,password',
				),
			),
			'usergroup' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.usergroup',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'be_groups',
					'foreign_table_where' => 'ORDER BY be_groups.title',
					'size' => '5',
					'maxitems' => '20',
					'iconsInOptionTags' => 1,
					'wizards' => array(
						'_PADDING' => 1,
						'_VERTICAL' => 1,
						'edit' => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.usergroup_edit_title',
							'script' => 'wizard_edit.php',
							'popup_onlyOpenIfSelected' => 1,
							'icon' => 'edit2.gif',
							'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
						'add' => array(
							'type' => 'script',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.usergroup_add_title',
							'icon' => 'add.gif',
							'params' => array(
								'table' => 'be_groups',
								'pid' => '0',
								'setValue' => 'prepend',
							),
							'script' => 'wizard_add.php',
						),
						'list' => array(
							'type' => 'script',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.usergroup_list_title',
							'icon' => 'list.gif',
							'params' => array(
								'table' => 'be_groups',
								'pid' => '0',
							),
							'script' => 'wizard_list.php',
						),
					),
				),
			),
			'lockToDomain' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:lockToDomain',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '50',
					'softref' => 'substitute',
				),
			),
			'db_mountpoints' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.options_db_mounts',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => '3',
					'maxitems' => 25,
					'autoSizeMax' => 10,
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'file_mountpoints' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.options_file_mounts',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_filemounts',
					'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
					'size' => '3',
					'maxitems' => 25,
					'autoSizeMax' => 10,
					'iconsInOptionTags' => 1,
					'wizards' => array(
						'_PADDING' => 1,
						'_VERTICAL' => 1,
						'edit' => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:file_mountpoints_edit_title',
							'script' => 'wizard_edit.php',
							'icon' => 'edit2.gif',
							'popup_onlyOpenIfSelected' => 1,
							'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
						'add' => array(
							'type' => 'script',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:file_mountpoints_add_title',
							'icon' => 'add.gif',
							'params' => array(
								'table' => 'sys_filemounts',
								'pid' => '0',
								'setValue' => 'prepend',
							),
							'script' => 'wizard_add.php',
						),
						'list' => array(
							'type' => 'script',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:file_mountpoints_list_title',
							'icon' => 'list.gif',
							'params' => array(
								'table' => 'sys_filemounts',
								'pid' => '0',
							),
							'script' => 'wizard_list.php',
						),
					),
				),
			),
			'email' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.email',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '80',
					'softref' => 'email[subst]',
				),
			),
			'realName' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.name',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '80',
				),
			),
			'disable' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'config' => array(
					'type' => 'check',
				),
			),
			'disableIPlock' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.disableIPlock',
				'config' => array(
					'type' => 'check',
				),
			),
			'admin' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.admin',
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'options' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.options',
				'config' => array(
					'type' => 'check',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_users.options_db_mounts',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_users.options_file_mounts',
							0,
						),
					),
					'default' => '3',
				),
			),
			'fileoper_perms' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.fileoper_perms',
				'config' => array(
					'type' => 'check',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_users.fileoper_perms_general',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_users.fileoper_perms_unzip',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_users.fileoper_perms_diroper_perms',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_users.fileoper_perms_diroper_perms_copy',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:be_users.fileoper_perms_diroper_perms_delete',
							0,
						),
					),
					'default' => '0',
				),
			),
			'workspace_perms' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:workspace_perms',
				'config' => array(
					'type' => 'check',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_tca.xlf:workspace_perms_live',
							0,
						),
					),
					'default' => 1,
				),
			),
			'starttime' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
			),
			'endtime' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
					'range' => array(
						'upper' => 2145913200,
					),
				),
			),
			'lang' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.lang',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'English',
							'',
						),
						array(
							'Afrikaans',
							'af',
						),
						array(
							'Albanian',
							'sq',
						),
						array(
							'Arabic',
							'ar',
						),
						array(
							'Basque',
							'eu',
						),
						array(
							'Bosnian',
							'bs',
						),
						array(
							'Brazilian Portuguese',
							'pt_BR',
						),
						array(
							'Bulgarian',
							'bg',
						),
						array(
							'Catalan',
							'ca',
						),
						array(
							'Chinese (Simpl.)',
							'ch',
						),
						array(
							'Chinese (Trad.)',
							'zh',
						),
						array(
							'Croatian',
							'hr',
						),
						array(
							'Czech',
							'cs',
						),
						array(
							'Danish',
							'da',
						),
						array(
							'Dutch',
							'nl',
						),
						array(
							'Esperanto',
							'eo',
						),
						array(
							'Estonian',
							'et',
						),
						array(
							'Faroese',
							'fo',
						),
						array(
							'Finnish',
							'fi',
						),
						array(
							'French',
							'fr',
						),
						array(
							'French (Canada)',
							'fr_CA',
						),
						array(
							'Galician',
							'gl',
						),
						array(
							'Georgian',
							'ka',
						),
						array(
							'German',
							'de',
						),
						array(
							'Greek',
							'el',
						),
						array(
							'Greenlandic',
							'kl',
						),
						array(
							'Hebrew',
							'he',
						),
						array(
							'Hindi',
							'hi',
						),
						array(
							'Hungarian',
							'hu',
						),
						array(
							'Icelandic',
							'is',
						),
						array(
							'Italian',
							'it',
						),
						array(
							'Japanese',
							'ja',
						),
						array(
							'Khmer',
							'km',
						),
						array(
							'Korean',
							'ko',
						),
						array(
							'Latvian',
							'lv',
						),
						array(
							'Lithuanian',
							'lt',
						),
						array(
							'Malay',
							'ms',
						),
						array(
							'Norwegian',
							'no',
						),
						array(
							'Persian',
							'fa',
						),
						array(
							'Polish',
							'pl',
						),
						array(
							'Portuguese',
							'pt',
						),
						array(
							'Romanian',
							'ro',
						),
						array(
							'Russian',
							'ru',
						),
						array(
							'Serbian',
							'sr',
						),
						array(
							'Slovak',
							'sk',
						),
						array(
							'Slovenian',
							'sl',
						),
						array(
							'Spanish',
							'es',
						),
						array(
							'Swedish',
							'sv',
						),
						array(
							'Thai',
							'th',
						),
						array(
							'Turkish',
							'tr',
						),
						array(
							'Ukrainian',
							'uk',
						),
						array(
							'Vietnamese',
							'vi',
						),
					),
				),
			),
			'userMods' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:userMods',
				'config' => array(
					'type' => 'select',
					'special' => 'modListUser',
					'size' => '5',
					'autoSizeMax' => 50,
					'maxitems' => '100',
					'renderMode' => 'checkbox',
					'iconsInOptionTags' => 1,
				),
			),
			'allowed_languages' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:allowed_languages',
				'config' => array(
					'type' => 'select',
					'special' => 'languages',
					'maxitems' => '1000',
					'renderMode' => 'checkbox',
				),
			),
			'TSconfig' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:TSconfig',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '5',
					'wizards' => array(
						'_PADDING' => 4,
						0 => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:TSconfig_title',
							'script' => 'wizard_tsconfig.php?mode=beuser',
							'icon' => 'wizard_tsconfig.gif',
							'JSopenParams' => 'height=500,width=780,status=0,menubar=0,scrollbars=1',
						),
					),
					'softref' => 'TSconfig',
				),
				'defaultExtras' => 'fixed-font : enable-tab',
			),
			'createdByAction' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			'lastlogin' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.lastlogin',
				'config' => array(
					'type' => 'input',
					'readOnly' => '1',
					'size' => '12',
					'eval' => 'datetime',
					'default' => 0,
				),
			),
		),
		'types' => array(
			array(
				'showitem' => 'disable;;;;1-1-1, username;;;;2-2-2, password, usergroup;;;;3-3-3, admin;;;;1-1-1, realName;;;;3-3-3, email, lang, lastlogin;;;;1-1-1,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.rights, userMods;;;;2-2-2, allowed_languages,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces, workspace_perms;;;;1-1-1, db_mountpoints;;;;2-2-2, options, file_mountpoints;;;;3-3-3, fileoper_perms,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.options, lockToDomain;;;;1-1-1, disableIPlock, TSconfig;;;;2-2-2,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.access, starttime;;;;1-1-1,endtime,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.extended',
			),
			array(
				'showitem' => 'disable;;;;1-1-1, username;;;;2-2-2, password, usergroup;;;;3-3-3, admin;;;;1-1-1, realName;;;;3-3-3, email, lang, lastlogin;;;;1-1-1,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.options, disableIPlock;;;;1-1-1, TSconfig;;;;2-2-2, db_mountpoints;;;;3-3-3, options, file_mountpoints;;;;4-4-4,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.access, starttime;;;;1-1-1,endtime,
			--div--;LLL:EXT:lang/locallang_tca.xlf:be_users.tabs.extended',
			),
		),
	),
	'pages' => array(
		'ctrl' => array(
			'label' => 'title',
			'tstamp' => 'tstamp',
			'sortby' => 'sorting',
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:pages',
			'type' => 'doktype',
			'versioningWS' => 2,
			'origUid' => 't3_origuid',
			'delete' => 'deleted',
			'crdate' => 'crdate',
			'hideAtCopy' => 1,
			'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
			'cruser_id' => 'cruser_id',
			'editlock' => 'editlock',
			'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
			'dividers2tabs' => 1,
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
				'fe_group' => 'fe_group',
			),
			'transForeignTable' => 'pages_language_overlay',
			'typeicon_column' => 'doktype',
			'typeicon_classes' => array(
				1 => 'apps-pagetree-page-default',
				'1-hideinmenu' => 'apps-pagetree-page-not-in-menu',
				'1-root' => 'apps-pagetree-page-domain',
				3 => 'apps-pagetree-page-shortcut-external',
				'3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
				'3-root' => 'apps-pagetree-page-shortcut-external-root',
				4 => 'apps-pagetree-page-shortcut',
				'4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
				'4-root' => 'apps-pagetree-page-shortcut-root',
				6 => 'apps-pagetree-page-backend-users',
				'6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
				'6-root' => 'apps-pagetree-page-backend-users-root',
				7 => 'apps-pagetree-page-mountpoint',
				'7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
				'7-root' => 'apps-pagetree-page-mountpoint-root',
				199 => 'apps-pagetree-spacer',
				'199-hideinmenu' => 'apps-pagetree-spacer',
				'199-root' => 'apps-pagetree-page-domain',
				254 => 'apps-pagetree-folder-default',
				'254-hideinmenu' => 'apps-pagetree-folder-default',
				'254-root' => 'apps-pagetree-page-domain',
				255 => 'apps-pagetree-page-recycler',
				'255-hideinmenu' => 'apps-pagetree-page-recycler',
				'contains-shop' => 'apps-pagetree-folder-contains-shop',
				'contains-approve' => 'apps-pagetree-folder-contains-approve',
				'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
				'contains-board' => 'apps-pagetree-folder-contains-board',
				'contains-news' => 'apps-pagetree-folder-contains-news',
				'default' => 'apps-pagetree-page-default',
			),
			'typeicons' => array(
				1 => 'pages.gif',
				254 => 'sysf.gif',
				255 => 'recycler.gif',
			),
			'searchFields' => 'title,alias,nav_title,subtitle,url,keywords,description,abstract,author,author_email',
		),
		'interface' => array(
			'showRecordFieldList' => 'doktype,title,alias,hidden,starttime,endtime,fe_group,url,target,no_cache,shortcut,keywords,description,abstract,newUntil,lastUpdated,cache_timeout,cache_tags,backend_layout,backend_layout_next_level',
			'maxDBListItems' => 30,
			'maxSingleDBListItems' => 50,
		),
		'columns' => array(
			'doktype' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.div.page',
							'--div--',
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:doktype.I.0',
							'1',
							'i/pages.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.4',
							'6',
							'i/be_users_section.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.div.link',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.2',
							'4',
							'i/pages_shortcut.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.5',
							'7',
							'i/pages_mountpoint.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.8',
							'3',
							'i/pages_link.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.div.special',
							'--div--',
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:doktype.I.folder',
							'254',
							'i/sysf.gif',
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:doktype.I.2',
							'255',
							'i/recycler.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.7',
							'199',
							'i/spacer_icon.gif',
						),
					),
					'default' => '1',
					'iconsInOptionTags' => 1,
					'noIconsBelowSelect' => 1,
				),
			),
			'title' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:title',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '255',
					'eval' => 'trim,required',
				),
			),
			'TSconfig' => array(
				'exclude' => 1,
				'label' => 'TSconfig:',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '5',
					'wizards' => array(
						'_PADDING' => 4,
						0 => array(
							'type' => 'popup',
							'title' => 'TSconfig QuickReference',
							'script' => 'wizard_tsconfig.php?mode=page',
							'icon' => 'wizard_tsconfig.gif',
							'JSopenParams' => 'height=500,width=780,status=0,menubar=0,scrollbars=1',
						),
					),
					'softref' => 'TSconfig',
				),
				'defaultExtras' => 'fixed-font : enable-tab',
			),
			'php_tree_stop' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:php_tree_stop',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'storage_pid' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:storage_pid',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => '1',
					'maxitems' => '1',
					'minitems' => '0',
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'tx_impexp_origuid' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			't3ver_label' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'input',
					'size' => '23',
					'max' => '255',
				),
			),
			'editlock' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:editlock',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'hidden' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.hidden',
				'config' => array(
					'type' => 'check',
					'default' => '1',
					'items' => array(
						1 => array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.hidden_checkbox_1_formlabel',
						),
					),
				),
			),
			'starttime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
			),
			'endtime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
					'range' => array(
						'upper' => 2145913200,
					),
				),
			),
			'layout' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.layout',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.layout.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.layout.I.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.layout.I.3',
							'3',
						),
					),
					'default' => '0',
				),
			),
			'url_scheme' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.url_scheme',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.url_scheme.http',
							1,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.url_scheme.https',
							2,
						),
					),
					'default' => 0,
				),
			),
			'fe_group' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.fe_group',
				'config' => array(
					'type' => 'select',
					'size' => 7,
					'maxitems' => 20,
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login',
							-1,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.any_login',
							-2,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups',
							'--div--',
						),
					),
					'exclusiveKeys' => '-1,-2',
					'foreign_table' => 'fe_groups',
					'foreign_table_where' => 'ORDER BY fe_groups.title',
				),
			),
			'extendToSubpages' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.extendToSubpages',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'nav_title' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.nav_title',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '255',
					'eval' => 'trim',
				),
			),
			'nav_hide' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.nav_hide',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.nav_hide_checkbox_1_formlabel',
						),
					),
				),
			),
			'subtitle' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.subtitle',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '255',
					'eval' => '',
				),
			),
			'target' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.target',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '80',
					'eval' => 'trim',
				),
			),
			'alias' => array(
				'exclude' => 1,
				'displayCond' => 'VERSION:IS:false',
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.alias',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '32',
					'eval' => 'nospace,alphanum_x,lower,unique',
					'softref' => 'notify',
				),
			),
			'url' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.url',
				'config' => array(
					'type' => 'input',
					'size' => '23',
					'max' => '255',
					'eval' => 'trim,required',
					'softref' => 'url',
				),
			),
			'urltype' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_core.xlf:labels.automatic',
							'0',
						),
						array(
							'http://',
							'1',
						),
						array(
							'https://',
							'4',
						),
						array(
							'ftp://',
							'2',
						),
						array(
							'mailto:',
							'3',
						),
					),
					'default' => '1',
				),
			),
			'lastUpdated' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.lastUpdated',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
			),
			'newUntil' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.newUntil',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'date',
					'default' => '0',
				),
			),
			'cache_timeout' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.1',
							60,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.2',
							300,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.3',
							900,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.4',
							1800,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.5',
							3600,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.6',
							14400,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.7',
							86400,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.8',
							172800,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.9',
							604800,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout.I.10',
							2678400,
						),
					),
					'default' => '0',
				),
			),
			'cache_tags' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.cache_tags',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '255',
					'eval' => '',
				),
			),
			'no_cache' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.no_cache',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.no_cache_checkbox_1_formlabel',
						),
					),
				),
			),
			'no_search' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.no_search',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.no_search_checkbox_1_formlabel',
						),
					),
				),
			),
			'shortcut' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.shortcut_page',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => '1',
					'maxitems' => '1',
					'minitems' => '0',
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'shortcut_mode' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode.I.0',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode.I.1',
							1,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode.I.2',
							2,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode.I.3',
							3,
						),
					),
					'default' => '0',
				),
			),
			'content_from_pid' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.content_from_pid',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => '1',
					'maxitems' => '1',
					'minitems' => '0',
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'mount_pid' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.mount_pid',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => '1',
					'maxitems' => '1',
					'minitems' => '0',
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'keywords' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.keywords',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '3',
					'softref' => 'rtehtmlarea_images,typolink_tag',
				),
			),
			'description' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.description',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '3',
					'softref' => 'rtehtmlarea_images,typolink_tag',
				),
			),
			'abstract' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.abstract',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '3',
					'softref' => 'rtehtmlarea_images,typolink_tag',
				),
			),
			'author' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.author',
				'config' => array(
					'type' => 'input',
					'size' => '23',
					'eval' => 'trim',
					'max' => '80',
				),
			),
			'author_email' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.email',
				'config' => array(
					'type' => 'input',
					'size' => '23',
					'eval' => 'trim',
					'max' => '80',
					'softref' => 'email[subst]',
				),
			),
			'media' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.media',
				'config' => array(
					'type' => 'inline',
					'foreign_table' => 'sys_file_reference',
					'foreign_field' => 'uid_foreign',
					'foreign_sortby' => 'sorting_foreign',
					'foreign_table_field' => 'tablenames',
					'foreign_match_fields' => array(
						'fieldname' => 'media',
					),
					'foreign_label' => 'uid_local',
					'foreign_selector' => 'uid_local',
					'foreign_selector_fieldTcaOverride' => array(
						'config' => array(
							'appearance' => array(
								'elementBrowserType' => 'file',
								'elementBrowserAllowed' => '',
							),
						),
					),
					'filter' => array(
						array(
							'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
							'parameters' => array(
								'allowedFileExtensions' => '',
								'disallowedFileExtensions' => '',
							),
						),
					),
					'appearance' => array(
						'useSortable' => TRUE,
						'headerThumbnail' => array(
							'field' => 'uid_local',
							'width' => '64',
							'height' => '64',
						),
						'showPossibleLocalizationRecords' => TRUE,
						'showRemovedLocalizationRecords' => TRUE,
						'showSynchronizationLink' => TRUE,
						'enabledControls' => array(
							'info' => FALSE,
							'new' => FALSE,
							'dragdrop' => TRUE,
							'sort' => FALSE,
							'hide' => TRUE,
							'delete' => TRUE,
							'localize' => TRUE,
						),
					),
					'behaviour' => array(
						'localizationMode' => 'select',
						'localizeChildrenAtParentLocalization' => TRUE,
					),
				),
			),
			'is_siteroot' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.is_siteroot',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'mount_pid_ol' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.mount_pid_ol',
				'config' => array(
					'type' => 'radio',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.mount_pid_ol.I.0',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.mount_pid_ol.I.1',
							1,
						),
					),
				),
			),
			'module' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.module',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							'',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.module.I.4',
							'fe_users',
							'i/fe_users.gif',
						),
					),
					'default' => '',
					'iconsInOptionTags' => 1,
					'noIconsBelowSelect' => 1,
				),
			),
			'fe_login_mode' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.fe_login_mode',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.fe_login_mode.enable',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.fe_login_mode.disableAll',
							1,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.fe_login_mode.disableGroups',
							3,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.fe_login_mode.enableAgain',
							2,
						),
					),
				),
			),
			'l18n_cfg' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.l18n_cfg',
				'config' => array(
					'type' => 'check',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.l18n_cfg.I.1',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.l18n_cfg.I.2',
							'',
						),
					),
				),
			),
			'backend_layout' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.backend_layout_formlabel',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'backend_layout',
					'foreign_table_where' => 'AND ( ( ###PAGE_TSCONFIG_ID### = 0 AND ###STORAGE_PID### = 0 ) OR ( backend_layout.pid = ###PAGE_TSCONFIG_ID### OR backend_layout.pid = ###STORAGE_PID### ) OR ( ###PAGE_TSCONFIG_ID### = 0 AND backend_layout.pid = ###THIS_UID### ) ) AND backend_layout.hidden = 0 ORDER BY backend_layout.sorting',
					'items' => array(
						array(
							'',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.backend_layout.none',
							-1,
						),
					),
					'selicon_cols' => 5,
					'size' => 1,
					'maxitems' => 1,
					'default' => '',
				),
			),
			'backend_layout_next_level' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'backend_layout',
					'foreign_table_where' => 'AND ( ( ###PAGE_TSCONFIG_ID### = 0 AND ###STORAGE_PID### = 0 ) OR ( backend_layout.pid = ###PAGE_TSCONFIG_ID### OR backend_layout.pid = ###STORAGE_PID### ) OR ( ###PAGE_TSCONFIG_ID### = 0 AND backend_layout.pid = ###THIS_UID### ) ) AND backend_layout.hidden = 0 ORDER BY backend_layout.sorting',
					'items' => array(
						array(
							'',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.backend_layout.none',
							-1,
						),
					),
					'selicon_cols' => 5,
					'size' => 1,
					'maxitems' => 1,
					'default' => '',
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.abstract;abstract,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.metatags;metatags,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.layout;layout,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.replace;replace,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.behaviour,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.links;links,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.caching;caching,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.language;language,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.module;module,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.storage;storage,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.config;config,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
			3 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.external;external,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.abstract;abstract,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.layout;layout,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.behaviour,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.links;links,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.language;language,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.storage;storage,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.config;config,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
			4 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.shortcut;shortcut,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.shortcutpage;shortcutpage,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.abstract;abstract,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.layout;layout,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.behaviour,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.links;links,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.language;language,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.storage;storage,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.config;config,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
				',
			),
			7 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.mountpoint;mountpoint,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.mountpage;mountpage,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.abstract;abstract,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.layout;layout,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.behaviour,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.links;links,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.language;language,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.config;config,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
			199 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;titleonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.behaviour,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
			',
			),
			254 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;titleonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.behaviour,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.module;module,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.storage;storage,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.config;config,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
			255 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;titleonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.behaviour,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => 'starttime, endtime, extendToSubpages',
			),
			2 => array(
				'showitem' => 'layout, lastUpdated, newUntil, no_search',
			),
			3 => array(
				'showitem' => 'alias, target, no_cache, cache_timeout, cache_tags, url_scheme',
			),
			5 => array(
				'showitem' => 'author, author_email',
				'canNotCollapse' => 1,
			),
			6 => array(
				'showitem' => 'php_tree_stop, editlock',
			),
			7 => array(
				'showitem' => 'is_siteroot',
			),
			8 => array(
				'showitem' => 'backend_layout_next_level',
			),
			'standard' => array(
				'showitem' => 'doktype;LLL:EXT:cms/locallang_tca.xlf:pages.doktype_formlabel',
				'canNotCollapse' => 1,
			),
			'shortcut' => array(
				'showitem' => 'doktype;LLL:EXT:cms/locallang_tca.xlf:pages.doktype_formlabel, shortcut_mode;LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode_formlabel',
				'canNotCollapse' => 1,
			),
			'shortcutpage' => array(
				'showitem' => 'shortcut;LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_formlabel',
				'canNotCollapse' => 1,
			),
			'mountpoint' => array(
				'showitem' => 'doktype;LLL:EXT:cms/locallang_tca.xlf:pages.doktype_formlabel, mount_pid_ol;LLL:EXT:cms/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
				'canNotCollapse' => 1,
			),
			'mountpage' => array(
				'showitem' => 'mount_pid;LLL:EXT:cms/locallang_tca.xlf:pages.mount_pid_formlabel',
				'canNotCollapse' => 1,
			),
			'external' => array(
				'showitem' => 'doktype;LLL:EXT:cms/locallang_tca.xlf:pages.doktype_formlabel, urltype;LLL:EXT:cms/locallang_tca.xlf:pages.urltype_formlabel, url;LLL:EXT:cms/locallang_tca.xlf:pages.url_formlabel',
				'canNotCollapse' => 1,
			),
			'title' => array(
				'showitem' => 'title;LLL:EXT:cms/locallang_tca.xlf:pages.title_formlabel, --linebreak--, nav_title;LLL:EXT:cms/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:cms/locallang_tca.xlf:pages.subtitle_formlabel',
				'canNotCollapse' => 1,
			),
			'titleonly' => array(
				'showitem' => 'title;LLL:EXT:cms/locallang_tca.xlf:pages.title_formlabel',
				'canNotCollapse' => 1,
			),
			'visibility' => array(
				'showitem' => 'hidden;LLL:EXT:cms/locallang_tca.xlf:pages.hidden_formlabel, nav_hide;LLL:EXT:cms/locallang_tca.xlf:pages.nav_hide_formlabel',
				'canNotCollapse' => 1,
			),
			'hiddenonly' => array(
				'showitem' => 'hidden;LLL:EXT:cms/locallang_tca.xlf:pages.hidden_formlabel',
				'canNotCollapse' => 1,
			),
			'access' => array(
				'showitem' => 'starttime;LLL:EXT:cms/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:cms/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:cms/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:cms/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--, fe_login_mode;LLL:EXT:cms/locallang_tca.xlf:pages.fe_login_mode_formlabel',
				'canNotCollapse' => 1,
			),
			'abstract' => array(
				'showitem' => 'abstract;LLL:EXT:cms/locallang_tca.xlf:pages.abstract_formlabel',
				'canNotCollapse' => 1,
			),
			'metatags' => array(
				'showitem' => 'keywords;LLL:EXT:cms/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:cms/locallang_tca.xlf:pages.description_formlabel',
				'canNotCollapse' => 1,
			),
			'editorial' => array(
				'showitem' => 'author;LLL:EXT:cms/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:cms/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:cms/locallang_tca.xlf:pages.lastUpdated_formlabel',
				'canNotCollapse' => 1,
			),
			'layout' => array(
				'showitem' => 'layout;LLL:EXT:cms/locallang_tca.xlf:pages.layout_formlabel, newUntil;LLL:EXT:cms/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:cms/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:cms/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
				'canNotCollapse' => 1,
			),
			'module' => array(
				'showitem' => 'module;LLL:EXT:cms/locallang_tca.xlf:pages.module_formlabel',
				'canNotCollapse' => 1,
			),
			'replace' => array(
				'showitem' => 'content_from_pid;LLL:EXT:cms/locallang_tca.xlf:pages.content_from_pid_formlabel',
				'canNotCollapse' => 1,
			),
			'links' => array(
				'showitem' => 'alias;LLL:EXT:cms/locallang_tca.xlf:pages.alias_formlabel, --linebreak--, target;LLL:EXT:cms/locallang_tca.xlf:pages.target_formlabel, --linebreak--, url_scheme;LLL:EXT:cms/locallang_tca.xlf:pages.url_scheme_formlabel',
				'canNotCollapse' => 1,
			),
			'caching' => array(
				'showitem' => 'cache_timeout;LLL:EXT:cms/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags, no_cache;LLL:EXT:cms/locallang_tca.xlf:pages.no_cache_formlabel',
				'canNotCollapse' => 1,
			),
			'language' => array(
				'showitem' => 'l18n_cfg;LLL:EXT:cms/locallang_tca.xlf:pages.l18n_cfg_formlabel',
				'canNotCollapse' => 1,
			),
			'miscellaneous' => array(
				'showitem' => 'is_siteroot;LLL:EXT:cms/locallang_tca.xlf:pages.is_siteroot_formlabel, no_search;LLL:EXT:cms/locallang_tca.xlf:pages.no_search_formlabel, editlock;LLL:EXT:cms/locallang_tca.xlf:pages.editlock_formlabel, php_tree_stop;LLL:EXT:cms/locallang_tca.xlf:pages.php_tree_stop_formlabel',
				'canNotCollapse' => 1,
			),
			'adminsonly' => array(
				'showitem' => 'editlock;LLL:EXT:cms/locallang_tca.xlf:pages.editlock_formlabel',
				'canNotCollapse' => 1,
			),
			'media' => array(
				'showitem' => 'media;LLL:EXT:cms/locallang_tca.xlf:pages.media_formlabel',
				'canNotCollapse' => 1,
			),
			'storage' => array(
				'showitem' => 'storage_pid;LLL:EXT:cms/locallang_tca.xlf:pages.storage_pid_formlabel',
				'canNotCollapse' => 1,
			),
			'config' => array(
				'showitem' => 'TSconfig;LLL:EXT:cms/locallang_tca.xlf:pages.TSconfig_formlabel',
				'canNotCollapse' => 1,
			),
		),
	),
	'sys_category' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_category',
			'label' => 'title',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'delete' => 'deleted',
			'default_sortby' => 'ORDER BY title ASC',
			'dividers2tabs' => TRUE,
			'versioningWS' => 2,
			'rootLevel' => -1,
			'versioning_followPages' => TRUE,
			'origUid' => 't3_origuid',
			'languageField' => 'sys_language_uid',
			'transOrigPointerField' => 'l10n_parent',
			'transOrigDiffSourceField' => 'l10n_diffsource',
			'searchFields' => 'title,description',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'typeicon_classes' => array(
				'default' => 'mimetypes-x-sys_category',
			),
		),
		'interface' => array(
			'showRecordFieldList' => 'title,description',
		),
		'types' => array(
			1 => array(
				'showitem' => 'title;;1, parent,description,--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.items,items,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => 'sys_language_uid, l10n_parent, hidden',
			),
		),
		'columns' => array(
			't3ver_label' => array(
				'displayCond' => 'FIELD:t3ver_label:REQ:true',
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'none',
					'cols' => 27,
				),
			),
			'sys_language_uid' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_language',
					'foreign_table_where' => 'ORDER BY sys_language.title',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
							-1,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
					),
				),
			),
			'l10n_parent' => array(
				'displayCond' => 'FIELD:sys_language_uid:>:0',
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'sys_category',
					'foreign_table_where' => 'AND sys_category.uid=###REC_FIELD_l10n_parent### AND sys_category.sys_language_uid IN (-1,0)',
				),
			),
			'l10n_diffsource' => array(
				'config' => array(
					'type' => 'passthrough',
				),
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
					'size' => '10',
					'max' => '20',
					'eval' => 'datetime',
					'checkbox' => '0',
					'default' => '0',
				),
			),
			'endtime' => array(
				'exclude' => 1,
				'l10n_mode' => 'mergeIfNotBlank',
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '8',
					'max' => '20',
					'eval' => 'datetime',
					'checkbox' => '0',
					'default' => '0',
					'range' => array(
						'upper' => 2145913200,
					),
				),
			),
			'title' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_category.title',
				'config' => array(
					'type' => 'input',
					'width' => '200',
					'eval' => 'trim,required',
				),
			),
			'description' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_category.description',
				'config' => array(
					'type' => 'text',
				),
			),
			'parent' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_category.parent',
				'config' => array(
					'minitems' => 0,
					'maxitems' => 1,
					'type' => 'select',
					'renderMode' => 'tree',
					'foreign_table' => 'sys_category',
					'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.title ASC',
					'treeConfig' => array(
						'parentField' => 'parent',
					),
				),
			),
			'items' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_category.items',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => '*',
					'MM' => 'sys_category_record_mm',
					'show_thumbs' => FALSE,
				),
			),
		),
	),
	'sys_collection' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_collection',
			'label' => 'title',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'versioningWS' => TRUE,
			'origUid' => 't3_origuid',
			'languageField' => 'sys_language_uid',
			'transOrigPointerField' => 'l10n_parent',
			'transOrigDiffSourceField' => 'l10n_diffsource',
			'default_sortby' => 'ORDER BY crdate',
			'delete' => 'deleted',
			'type' => 'type',
			'rootLevel' => -1,
			'searchFields' => 'title,description',
			'typeicon_column' => 'type',
			'typeicon_classes' => array(
				'default' => 'apps-clipboard-list',
				'static' => 'apps-clipboard-list',
				'filter' => 'actions-system-tree-search-open',
			),
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
				'fe_group' => 'fe_group',
			),
		),
		'interface' => array(
			'showRecordFieldList' => 'title, description, table_name, items',
		),
		'columns' => array(
			't3ver_label' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '30',
				),
			),
			'sys_language_uid' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_language',
					'foreign_table_where' => 'ORDER BY sys_language.title',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
							-1,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
					),
				),
			),
			'l10n_parent' => array(
				'displayCond' => 'FIELD:sys_language_uid:>:0',
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'sys_file_collection',
					'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
				),
			),
			'l10n_diffsource' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			'hidden' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'starttime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '8',
					'max' => '20',
					'eval' => 'date',
					'default' => '0',
					'checkbox' => '0',
				),
			),
			'endtime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '8',
					'max' => '20',
					'eval' => 'date',
					'checkbox' => '0',
					'default' => '0',
					'range' => array(
						'upper' => 2145913200,
					),
				),
			),
			'fe_group' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.fe_group',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login',
							-1,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.any_login',
							-2,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups',
							'--div--',
						),
					),
					'foreign_table' => 'fe_groups',
				),
			),
			'table_name' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_collection.table_name',
				'config' => array(
					'type' => 'select',
					'special' => 'tables',
				),
			),
			'items' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_collection.items',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'prepend_tname' => TRUE,
					'allowed' => '*',
					'MM' => 'sys_collection_entries',
					'MM_hasUidField' => TRUE,
					'multiple' => TRUE,
				),
			),
			'title' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_collection.title',
				'config' => array(
					'type' => 'input',
					'size' => '60',
					'eval' => 'required',
				),
			),
			'description' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_collection.description',
				'config' => array(
					'type' => 'text',
					'cols' => '60',
					'rows' => '5',
				),
			),
			'type' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_collection.type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_tca.xlf:sys_collection.type.static',
							'static',
						),
					),
					'default' => 'static',
				),
			),
		),
		'types' => array(
			'static' => array(
				'showitem' => 'title;;1,type, description,table_name, items',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => 'starttime, endtime, fe_group, sys_language_uid, l10n_parent, l10n_diffsource, hidden',
			),
		),
	),
	'sys_file' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file',
			'label' => 'name',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'type' => 'type',
			'hideTable' => TRUE,
			'rootLevel' => TRUE,
			'versioningWS' => TRUE,
			'origUid' => 't3_origuid',
			'default_sortby' => 'ORDER BY crdate DESC',
			'delete' => 'deleted',
			'dividers2tabs' => TRUE,
			'typeicon_column' => 'type',
			'typeicon_classes' => array(
				1 => 'mimetypes-text-text',
				2 => 'mimetypes-media-image',
				3 => 'mimetypes-media-audio',
				4 => 'mimetypes-media-video',
				5 => 'mimetypes-application',
				'default' => 'mimetypes-other-other',
			),
			'security' => array(
				'ignoreWebMountRestriction' => TRUE,
				'ignoreRootLevelRestriction' => TRUE,
			),
		),
		'interface' => array(
			'showRecordFieldList' => 'storage, name, description, alternative, type, mime_type, size, sha1',
		),
		'columns' => array(
			't3ver_label' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '30',
				),
			),
			'fileinfo' => array(
				'config' => array(
					'type' => 'user',
					'userFunc' => 'typo3/sysext/core/Classes/Resource/Hook/FileInfoHook.php:TYPO3\\CMS\\Core\\Resource\\Hook\\FileInfoHook->renderFileInfo',
				),
			),
			'storage' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.storage',
				'config' => array(
					'readOnly' => 1,
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'sys_file_storage',
					'foreign_table_where' => 'ORDER BY sys_file_storage.name',
					'size' => 1,
					'minitems' => 0,
					'maxitems' => 1,
				),
			),
			'identifier' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.identifier',
				'config' => array(
					'readOnly' => 1,
					'type' => 'input',
					'size' => '30',
				),
			),
			'name' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.name',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'eval' => 'required',
					'readOnly' => TRUE,
				),
			),
			'title' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.title',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'placeholder' => '__row|name',
				),
			),
			'description' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.description',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '3',
				),
			),
			'alternative' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.alternative',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '3',
				),
			),
			'type' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.type',
				'config' => array(
					'readOnly' => 1,
					'type' => 'select',
					'size' => '1',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_tca.xlf:sys_file.type.unknown',
							0,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:sys_file.type.text',
							1,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:sys_file.type.image',
							2,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:sys_file.type.audio',
							3,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:sys_file.type.video',
							4,
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:sys_file.type.software',
							5,
						),
					),
				),
			),
			'mime_type' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.mime_type',
				'config' => array(
					'readOnly' => 1,
					'type' => 'input',
					'size' => '30',
				),
			),
			'sha1' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.sha1',
				'config' => array(
					'readOnly' => 1,
					'type' => 'input',
					'size' => '30',
				),
			),
			'size' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file.size',
				'config' => array(
					'readOnly' => 1,
					'type' => 'input',
					'size' => '8',
					'max' => '30',
					'eval' => 'int',
					'default' => 0,
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => 'fileinfo, name, title, description, alternative, storage',
			),
		),
		'palettes' => array(),
	),
	'sys_file_collection' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_collection',
			'label' => 'title',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'versioningWS' => TRUE,
			'origUid' => 't3_origuid',
			'languageField' => 'sys_language_uid',
			'transOrigPointerField' => 'l10n_parent',
			'transOrigDiffSourceField' => 'l10n_diffsource',
			'default_sortby' => 'ORDER BY crdate',
			'delete' => 'deleted',
			'rootlevel' => -1,
			'type' => 'type',
			'typeicon_column' => 'type',
			'typeicon_classes' => array(
				'default' => 'apps-filetree-folder-media',
				'static' => 'apps-clipboard-images',
				'folder' => 'apps-filetree-folder-media',
			),
			'requestUpdate' => 'storage',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
		),
		'interface' => array(
			'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,files,title',
		),
		'columns' => array(
			't3ver_label' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '30',
				),
			),
			'sys_language_uid' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_language',
					'foreign_table_where' => 'ORDER BY sys_language.title',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
							-1,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
					),
				),
			),
			'l10n_parent' => array(
				'displayCond' => 'FIELD:sys_language_uid:>:0',
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'sys_file_collection',
					'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
				),
			),
			'l10n_diffsource' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			'hidden' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'starttime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '8',
					'max' => '20',
					'eval' => 'date',
					'default' => '0',
					'checkbox' => '0',
				),
			),
			'endtime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '8',
					'max' => '20',
					'eval' => 'date',
					'checkbox' => '0',
					'default' => '0',
					'range' => array(
						'upper' => 2145913200,
					),
				),
			),
			'type' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_collection.type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'Static selection of files',
							'static',
						),
						array(
							'Folder from Storage',
							'folder',
						),
					),
				),
			),
			'files' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_collection.files',
				'config' => array(
					'type' => 'inline',
					'foreign_table' => 'sys_file_reference',
					'foreign_field' => 'uid_foreign',
					'foreign_sortby' => 'sorting_foreign',
					'foreign_table_field' => 'tablenames',
					'foreign_match_fields' => array(
						'fieldname' => 'files',
					),
					'foreign_label' => 'uid_local',
					'foreign_selector' => 'uid_local',
					'foreign_selector_fieldTcaOverride' => array(
						'config' => array(
							'appearance' => array(
								'elementBrowserType' => 'file',
								'elementBrowserAllowed' => '',
							),
						),
					),
					'filter' => array(
						array(
							'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
							'parameters' => array(
								'allowedFileExtensions' => '',
								'disallowedFileExtensions' => '',
							),
						),
					),
					'appearance' => array(
						'useSortable' => TRUE,
						'headerThumbnail' => array(
							'field' => 'uid_local',
							'width' => '64',
							'height' => '64',
						),
						'showPossibleLocalizationRecords' => TRUE,
						'showRemovedLocalizationRecords' => TRUE,
						'showSynchronizationLink' => TRUE,
						'enabledControls' => array(
							'info' => FALSE,
							'new' => FALSE,
							'dragdrop' => TRUE,
							'sort' => FALSE,
							'hide' => TRUE,
							'delete' => TRUE,
							'localize' => TRUE,
						),
					),
					'behaviour' => array(
						'localizationMode' => 'select',
						'localizeChildrenAtParentLocalization' => TRUE,
					),
				),
			),
			'title' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_collection.title',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'eval' => 'required',
				),
			),
			'storage' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_collection.storage',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'sys_file_storage',
					'foreign_table_where' => 'ORDER BY sys_file_storage.name',
					'size' => 1,
					'minitems' => 0,
					'maxitems' => 1,
				),
			),
			'folder' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_collection.folder',
				'config' => array(
					'type' => 'select',
					'items' => array(),
					'itemsProcFunc' => 'typo3/sysext/core/Classes/Resource/Service/UserFileMountService.php:TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
				),
			),
		),
		'types' => array(
			0 => array(
				'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, title;;1, type, files',
			),
			'static' => array(
				'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, title;;1, type, files',
			),
			'folder' => array(
				'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, title;;1, type, storage, folder',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => 'hidden, starttime, endtime',
			),
		),
	),
	'sys_file_reference' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference',
			'label' => 'uid',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'type' => 'uid_local:type',
			'hideTable' => TRUE,
			'sortby' => 'sorting',
			'delete' => 'deleted',
			'versioningWS' => TRUE,
			'languageField' => 'sys_language_uid',
			'transOrigPointerField' => 'l10n_parent',
			'transOrigDiffSourceField' => 'l10n_diffsource',
			'shadowColumnsForNewPlaceholders' => 'tablenames,fieldname,uid_local,uid_foreign',
			'enablecolumns' => array(
				'disabled' => 'hidden',
			),
			'security' => array(
				'ignoreWebMountRestriction' => TRUE,
				'ignoreRootLevelRestriction' => TRUE,
			),
		),
		'interface' => array(
			'showRecordFieldList' => 'hidden,uid_local,uid_foreign,tablenames,fieldname,sorting_foreign,table_local,title,description',
		),
		'columns' => array(
			't3ver_label' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '30',
				),
			),
			'sys_language_uid' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_language',
					'foreign_table_where' => 'ORDER BY sys_language.title',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
							-1,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
					),
				),
			),
			'l10n_parent' => array(
				'displayCond' => 'FIELD:sys_language_uid:>:0',
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'sys_file_reference',
					'foreign_table_where' => 'AND sys_file_reference.uid=###REC_FIELD_l10n_parent### AND sys_file_reference.sys_language_uid IN (-1,0)',
				),
			),
			'l10n_diffsource' => array(
				'exclude' => 0,
				'config' => array(
					'type' => 'passthrough',
				),
			),
			'hidden' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'uid_local' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.uid_local',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'size' => 1,
					'maxitems' => 1,
					'minitems' => 0,
					'allowed' => 'sys_file',
				),
			),
			'uid_foreign' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.uid_foreign',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'tt_content',
					'foreign_table_where' => 'ORDER BY tt_content.uid',
					'size' => 1,
					'minitems' => 0,
					'maxitems' => 1,
				),
			),
			'tablenames' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.tablenames',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'eval' => 'trim',
				),
			),
			'fieldname' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.fieldname',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'sorting_foreign' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.sorting_foreign',
				'config' => array(
					'type' => 'input',
					'size' => '4',
					'max' => '4',
					'eval' => 'int',
					'checkbox' => '0',
					'range' => array(
						'upper' => '1000',
						'lower' => '10',
					),
					'default' => 0,
				),
			),
			'table_local' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.table_local',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'default' => 'sys_file',
				),
			),
			'title' => array(
				'l10n_mode' => 'mergeIfNotBlank',
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.title',
				'config' => array(
					'type' => 'input',
					'eval' => 'null',
					'size' => '20',
					'placeholder' => '__row|uid_local|title',
				),
			),
			'link' => array(
				'l10n_mode' => 'mergeIfNotBlank',
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.link',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'wizards' => array(
						'_PADDING' => 2,
						'link' => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.link',
							'icon' => 'link_popup.gif',
							'script' => 'browse_links.php?mode=wizard',
							'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
						),
					),
				),
			),
			'description' => array(
				'l10n_mode' => 'mergeIfNotBlank',
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.description',
				'config' => array(
					'type' => 'text',
					'eval' => 'null',
					'cols' => '20',
					'rows' => '5',
					'placeholder' => '__row|uid_local|description',
				),
			),
			'alternative' => array(
				'l10n_mode' => 'mergeIfNotBlank',
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.alternative',
				'config' => array(
					'type' => 'input',
					'eval' => 'null',
					'size' => '20',
					'placeholder' => '__row|uid_local|alternative',
				),
			),
		),
		'types' => array(
			array(
				'showitem' => '
				--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
				--palette--;;filePalette',
			),
			array(
				'showitem' => '
				--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
				--palette--;;filePalette',
			),
			array(
				'showitem' => '
				--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
				--palette--;;filePalette',
			),
			array(
				'showitem' => '
				--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
				--palette--;;filePalette',
			),
			array(
				'showitem' => '
				--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
				--palette--;;filePalette',
			),
			array(
				'showitem' => '
				--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
				--palette--;;filePalette',
			),
		),
		'palettes' => array(
			'basicoverlayPalette' => array(
				'showitem' => 'title,description',
				'canNotCollapse' => TRUE,
			),
			'imageoverlayPalette' => array(
				'showitem' => '
				title,alternative;;;;3-3-3,--linebreak--,
				link,description
				',
				'canNotCollapse' => TRUE,
			),
			'filePalette' => array(
				'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
				'isHiddenPalette' => TRUE,
			),
		),
	),
	'sys_file_storage' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage',
			'label' => 'name',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'default_sortby' => 'ORDER BY name',
			'delete' => 'deleted',
			'rootLevel' => TRUE,
			'versioningWS_alwaysAllowLiveEdit' => TRUE,
			'enablecolumns' => array(
				'disabled' => 'hidden',
			),
			'dividers2tabs' => TRUE,
			'requestUpdate' => 'driver',
			'iconfile' => '_icon_ftp.gif',
		),
		'interface' => array(
			'showRecordFieldList' => 'hidden,name,description,driver,processingfolder,configuration',
		),
		'columns' => array(
			'hidden' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.hidden',
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'name' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.name',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'eval' => 'required',
				),
			),
			'description' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.description',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
					'rows' => '5',
				),
			),
			'is_browsable' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.is_browsable',
				'config' => array(
					'type' => 'check',
					'default' => 1,
				),
			),
			'is_public' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.is_public',
				'config' => array(
					'type' => 'check',
					'default' => 1,
				),
			),
			'is_writable' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.is_writable',
				'config' => array(
					'type' => 'check',
					'default' => 1,
				),
			),
			'is_online' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.is_online',
				'config' => array(
					'type' => 'check',
					'default' => 1,
				),
			),
			'processingfolder' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.processingfolder',
				'config' => array(
					'type' => 'input',
					'placeholder' => '_processed_',
					'size' => '20',
				),
			),
			'driver' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.driver',
				'config' => array(
					'type' => 'select',
					'items' => array(),
					'default' => 'Local',
					'onChange' => 'reload',
				),
			),
			'configuration' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_storage.configuration',
				'config' => array(
					'type' => 'flex',
					'ds_pointerField' => 'driver',
					'ds' => array(),
				),
			),
		),
		'types' => array(
			array(
				'showitem' => 'name, description, hidden, --div--;Configuration, driver, configuration, processingfolder, --div--;Access, --palette--;Capabilities;capabilities, is_online',
			),
		),
		'palettes' => array(
			'capabilities' => array(
				'showitem' => 'is_browsable, is_public, is_writable',
				'canNotCollapse' => TRUE,
			),
		),
	),
	'sys_filemounts' => array(
		'ctrl' => array(
			'label' => 'title',
			'tstamp' => 'tstamp',
			'sortby' => 'sorting',
			'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_filemounts',
			'adminOnly' => 1,
			'rootLevel' => 1,
			'delete' => 'deleted',
			'enablecolumns' => array(
				'disabled' => 'hidden',
			),
			'iconfile' => '_icon_ftp.gif',
			'useColumnsForDefaultValues' => 'path,base',
			'versioningWS_alwaysAllowLiveEdit' => TRUE,
			'searchFields' => 'title,path',
		),
		'interface' => array(
			'showRecordFieldList' => 'title,hidden,path,base',
		),
		'columns' => array(
			'title' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_filemounts.title',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'max' => '30',
					'eval' => 'required,trim',
				),
			),
			'hidden' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'config' => array(
					'type' => 'check',
				),
			),
			'base' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.baseStorage',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_file_storage',
					'size' => 1,
					'maxitems' => 1,
				),
			),
			'path' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.folder',
				'config' => array(
					'type' => 'select',
					'items' => array(),
					'itemsProcFunc' => 'typo3/sysext/core/Classes/Resource/Service/UserFileMountService.php:TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
				),
			),
		),
		'types' => array(
			array(
				'showitem' => '--palette--;;mount, base, path',
			),
		),
		'palettes' => array(
			'mount' => array(
				'showitem' => 'title,hidden',
				'canNotCollapse' => 1,
			),
		),
	),
	'sys_history' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_history',
			'label' => 'tablename',
			'tstamp' => 'tstamp',
			'adminOnly' => TRUE,
			'rootLevel' => TRUE,
			'hideTable' => TRUE,
			'default_sortby' => 'uid DESC',
		),
		'columns' => array(
			'sys_log_uid' => array(
				'label' => 'sys_log_uid',
				'config' => array(
					'type' => 'input',
				),
			),
			'history_data' => array(
				'label' => 'history_data',
				'config' => array(
					'type' => 'input',
				),
			),
			'fieldlist' => array(
				'label' => 'fieldlist',
				'config' => array(
					'type' => 'input',
				),
			),
			'recuid' => array(
				'label' => 'recuid',
				'config' => array(
					'type' => 'input',
				),
			),
			'tablename' => array(
				'label' => 'tablename',
				'config' => array(
					'type' => 'input',
				),
			),
			'tstamp' => array(
				'label' => 'tstamp',
				'config' => array(
					'type' => 'input',
				),
			),
			'history_files' => array(
				'label' => 'history_files',
				'config' => array(
					'type' => 'input',
				),
			),
			'snapshot' => array(
				'label' => 'snapshot',
				'config' => array(
					'type' => 'input',
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => 'sys_log_uid, history_data, fieldlist, recuid, tablename, tstamp, history_files, snapshot',
			),
		),
	),
	'sys_language' => array(
		'ctrl' => array(
			'label' => 'title',
			'tstamp' => 'tstamp',
			'default_sortby' => 'ORDER BY title',
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language',
			'adminOnly' => 1,
			'rootLevel' => 1,
			'enablecolumns' => array(
				'disabled' => 'hidden',
			),
			'typeicon_classes' => array(
				'default' => 'mimetypes-x-sys_language',
			),
			'versioningWS_alwaysAllowLiveEdit' => TRUE,
		),
		'interface' => array(
			'showRecordFieldList' => 'hidden,title',
		),
		'columns' => array(
			'title' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
				'config' => array(
					'type' => 'input',
					'size' => '35',
					'max' => '80',
					'eval' => 'trim,required',
				),
			),
			'hidden' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'static_lang_isocode' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.isocode',
				'displayCond' => 'EXT:static_info_tables:LOADED:true',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'static_languages',
					'foreign_table_where' => 'AND static_languages.pid=0 ORDER BY static_languages.lg_name_en',
					'size' => 1,
					'minitems' => 0,
					'maxitems' => 1,
				),
			),
			'flag' => array(
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.flag',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
							'',
						),
					),
					'selicon_cols' => 16,
					'size' => 1,
					'minitems' => 0,
					'maxitems' => 1,
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => 'hidden;;;;1-1-1,title;;;;2-2-2,static_lang_isocode,flag',
			),
		),
	),
	'sys_log' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_log',
			'label' => 'details',
			'tstamp' => 'tstamp',
			'adminOnly' => TRUE,
			'rootLevel' => TRUE,
			'hideTable' => TRUE,
			'default_sortby' => 'uid DESC',
		),
		'columns' => array(
			'tstamp' => array(
				'label' => 'tstamp',
				'config' => array(
					'type' => 'input',
				),
			),
			'userid' => array(
				'label' => 'userid',
				'config' => array(
					'type' => 'input',
				),
			),
			'action' => array(
				'label' => 'action',
				'config' => array(
					'type' => 'input',
				),
			),
			'recuid' => array(
				'label' => 'recuid',
				'config' => array(
					'type' => 'input',
				),
			),
			'tablename' => array(
				'label' => 'tablename',
				'config' => array(
					'type' => 'input',
				),
			),
			'recpid' => array(
				'label' => 'recpid',
				'config' => array(
					'type' => 'input',
				),
			),
			'error' => array(
				'label' => 'error',
				'config' => array(
					'type' => 'input',
				),
			),
			'details' => array(
				'label' => 'details',
				'config' => array(
					'type' => 'input',
				),
			),
			'type' => array(
				'label' => 'type',
				'config' => array(
					'type' => 'input',
				),
			),
			'details_nr' => array(
				'label' => 'details_nr',
				'config' => array(
					'type' => 'input',
				),
			),
			'IP' => array(
				'label' => 'IP',
				'config' => array(
					'type' => 'input',
				),
			),
			'log_data' => array(
				'label' => 'log_data',
				'config' => array(
					'type' => 'input',
				),
			),
			'event_pid' => array(
				'label' => 'event_pid',
				'config' => array(
					'type' => 'input',
				),
			),
			'workspace' => array(
				'label' => 'workspace',
				'config' => array(
					'type' => 'input',
				),
			),
			'NEWid' => array(
				'label' => 'NEWid',
				'config' => array(
					'type' => 'input',
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
			),
		),
	),
	'sys_news' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_news',
			'label' => 'title',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'adminOnly' => TRUE,
			'rootLevel' => TRUE,
			'delete' => 'deleted',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'default_sortby' => 'crdate DESC',
			'typeicon_classes' => array(
				'default' => 'mimetypes-x-sys_news',
			),
			'dividers2tabs' => TRUE,
		),
		'interface' => array(
			'showRecordFieldList' => 'hidden,title,content,starttime,endtime',
		),
		'columns' => array(
			'hidden' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'starttime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
			),
			'endtime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
			),
			'title' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.title',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '255',
					'eval' => 'required',
				),
			),
			'content' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.text',
				'config' => array(
					'type' => 'text',
					'cols' => '48',
					'rows' => '5',
					'wizards' => array(
						'_PADDING' => 4,
						'_VALIGN' => 'middle',
						'RTE' => array(
							'notNewRecords' => 1,
							'RTEonly' => 1,
							'type' => 'script',
							'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
							'icon' => 'wizard_rte2.gif',
							'script' => 'wizard_rte.php',
						),
					),
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => '
			hidden, title, content;;9;richtext:rte_transform[flag=rte_enabled|mode=ts_css];3-3-3,
			--div--;LLL:EXT:lang/locallang_tca.xlf:sys_news.tabs.access, starttime, endtime',
			),
		),
	),
	'backend_layout' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:cms/locallang_tca.xlf:backend_layout',
			'label' => 'title',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'versioningWS' => TRUE,
			'origUid' => 't3_origuid',
			'sortby' => 'sorting',
			'delete' => 'deleted',
			'enablecolumns' => array(
				'disabled' => 'hidden',
			),
			'iconfile' => 'backend_layout.gif',
			'selicon_field' => 'icon',
			'selicon_field_path' => 'uploads/media',
			'thumbnail' => 'resources',
		),
		'interface' => array(
			'showRecordFieldList' => 'title,config,description,hidden,icon',
		),
		'columns' => array(
			'title' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:backend_layout.title',
				'config' => array(
					'type' => 'input',
					'size' => '25',
					'max' => '256',
					'eval' => 'required',
				),
			),
			'description' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:backend_layout.description',
				'config' => array(
					'type' => 'text',
					'rows' => '5',
					'cols' => '25',
				),
			),
			'config' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:backend_layout.config',
				'config' => array(
					'type' => 'text',
					'rows' => '5',
					'cols' => '25',
					'wizards' => array(
						'_PADDING' => 4,
						0 => array(
							'title' => 'LLL:EXT:cms/locallang_tca.xlf:backend_layout.wizard',
							'type' => 'popup',
							'icon' => 'sysext/cms/layout/wizard_backend_layout.png',
							'script' => 'sysext/cms/layout/wizard_backend_layout.php',
							'JSopenParams' => 'height=800,width=800,status=0,menubar=0,scrollbars=0',
						),
					),
				),
			),
			'hidden' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'icon' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:backend_layout.icon',
				'exclude' => 1,
				'config' => array(
					'type' => 'group',
					'internal_type' => 'file',
					'allowed' => 'jpg,gif,png',
					'uploadfolder' => 'uploads/media',
					'show_thumbs' => 1,
					'size' => 1,
					'maxitems' => 1,
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => 'hidden,title;;1;;2-2-2, icon, description, config',
			),
		),
	),
	'fe_groups' => array(
		'ctrl' => array(
			'label' => 'title',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'delete' => 'deleted',
			'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
			'enablecolumns' => array(
				'disabled' => 'hidden',
			),
			'title' => 'LLL:EXT:cms/locallang_tca.xlf:fe_groups',
			'typeicon_classes' => array(
				'default' => 'status-user-group-frontend',
			),
			'useColumnsForDefaultValues' => 'lockToDomain',
			'dividers2tabs' => 1,
			'searchFields' => 'title,description',
			'type' => 'tx_extbase_type',
		),
		'interface' => array(
			'showRecordFieldList' => 'title,hidden,subgroup,lockToDomain,description',
		),
		'columns' => array(
			'hidden' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'title' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:fe_groups.title',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'max' => '50',
					'eval' => 'trim,required',
				),
			),
			'subgroup' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:fe_groups.subgroup',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'fe_groups',
					'foreign_table_where' => 'AND NOT(fe_groups.uid = ###THIS_UID###) AND fe_groups.hidden=0 ORDER BY fe_groups.title',
					'size' => 6,
					'autoSizeMax' => 10,
					'minitems' => 0,
					'maxitems' => 20,
				),
			),
			'lockToDomain' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:fe_groups.lockToDomain',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '50',
				),
			),
			'description' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.description',
				'config' => array(
					'type' => 'text',
					'rows' => 5,
					'cols' => 48,
				),
			),
			'TSconfig' => array(
				'exclude' => 1,
				'label' => 'TSconfig:',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '10',
					'wizards' => array(
						'_PADDING' => 4,
						0 => array(
							'title' => 'TSconfig QuickReference',
							'script' => 'wizard_tsconfig.php?mode=fe_users',
							'icon' => 'wizard_tsconfig.gif',
							'JSopenParams' => 'height=500,width=780,status=0,menubar=0,scrollbars=1',
						),
					),
					'softref' => 'TSconfig',
				),
				'defaultExtras' => 'fixed-font : enable-tab',
			),
			'tx_extbase_type' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type.0',
							'0',
						),
						array(
							'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
							'Tx_Extbase_Domain_Model_FrontendUserGroup',
						),
					),
					'size' => 1,
					'maxitems' => 1,
					'default' => '0',
				),
			),
			'felogin_redirectPid' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:felogin/locallang_db.xlf:felogin_redirectPid',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => 1,
					'minitems' => 0,
					'maxitems' => 1,
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
		),
		'types' => array(
			0 => array(
				'showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2, description, subgroup;;;;3-3-3, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_groups.tabs.options, lockToDomain;;;;1-1-1, TSconfig;;;;2-2-2, felogin_redirectPid;;;;1-1-1, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_groups.tabs.extended, tx_extbase_type',
			),
			'Tx_Extbase_Domain_Model_FrontendUserGroup' => array(
				'showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2, description, subgroup;;;;3-3-3, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_groups.tabs.options, lockToDomain;;;;1-1-1, TSconfig;;;;2-2-2, felogin_redirectPid;;;;1-1-1, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_groups.tabs.extended, tx_extbase_type',
			),
		),
		'feInterface' => array(
			'fe_admin_fieldList' => ',tx_extbase_type,felogin_redirectPid',
		),
	),
	'fe_users' => array(
		'ctrl' => array(
			'label' => 'username',
			'default_sortby' => 'ORDER BY username',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'fe_cruser_id' => 'fe_cruser_id',
			'title' => 'LLL:EXT:cms/locallang_tca.xlf:fe_users',
			'delete' => 'deleted',
			'enablecolumns' => array(
				'disabled' => 'disable',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'typeicon_classes' => array(
				'default' => 'status-user-frontend',
			),
			'useColumnsForDefaultValues' => 'usergroup,lockToDomain,disable,starttime,endtime',
			'dividers2tabs' => 1,
			'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company',
			'type' => 'tx_extbase_type',
		),
		'feInterface' => array(
			'fe_admin_fieldList' => 'username,password,usergroup,name,address,telephone,fax,email,title,zip,city,country,www,company,tx_extbase_type,felogin_redirectPid,felogin_forgotHash',
		),
		'interface' => array(
			'showRecordFieldList' => 'username,password,usergroup,lockToDomain,name,first_name,middle_name,last_name,title,company,address,zip,city,country,email,www,telephone,fax,disable,starttime,endtime,lastlogin',
		),
		'columns' => array(
			'username' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:fe_users.username',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'max' => '50',
					'eval' => 'nospace,lower,uniqueInPid,required',
				),
			),
			'password' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:fe_users.password',
				'config' => array(
					'type' => 'input',
					'size' => '10',
					'max' => '40',
					'eval' => 'nospace,required,password',
				),
			),
			'usergroup' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:fe_users.usergroup',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'fe_groups',
					'foreign_table_where' => 'ORDER BY fe_groups.title',
					'size' => '6',
					'minitems' => '1',
					'maxitems' => '50',
				),
			),
			'lockToDomain' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:fe_users.lockToDomain',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '50',
					'softref' => 'substitute',
				),
			),
			'name' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.name',
				'config' => array(
					'type' => 'input',
					'size' => '40',
					'eval' => 'trim',
					'max' => '80',
				),
			),
			'first_name' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.first_name',
				'config' => array(
					'type' => 'input',
					'size' => '25',
					'eval' => 'trim',
					'max' => '50',
				),
			),
			'middle_name' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.middle_name',
				'config' => array(
					'type' => 'input',
					'size' => '25',
					'eval' => 'trim',
					'max' => '50',
				),
			),
			'last_name' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.last_name',
				'config' => array(
					'type' => 'input',
					'size' => '25',
					'eval' => 'trim',
					'max' => '50',
				),
			),
			'address' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.address',
				'config' => array(
					'type' => 'text',
					'cols' => '20',
					'rows' => '3',
				),
			),
			'telephone' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.phone',
				'config' => array(
					'type' => 'input',
					'eval' => 'trim',
					'size' => '20',
					'max' => '20',
				),
			),
			'fax' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.fax',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '20',
				),
			),
			'email' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.email',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '80',
				),
			),
			'title' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.title_person',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '40',
				),
			),
			'zip' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.zip',
				'config' => array(
					'type' => 'input',
					'eval' => 'trim',
					'size' => '10',
					'max' => '10',
				),
			),
			'city' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.city',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '50',
				),
			),
			'country' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.country',
				'config' => array(
					'type' => 'input',
					'size' => '20',
					'eval' => 'trim',
					'max' => '40',
				),
			),
			'www' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.www',
				'config' => array(
					'type' => 'input',
					'eval' => 'trim',
					'size' => '20',
					'max' => '80',
				),
			),
			'company' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.company',
				'config' => array(
					'type' => 'input',
					'eval' => 'trim',
					'size' => '20',
					'max' => '80',
				),
			),
			'image' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.image',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'file',
					'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai',
					'max_size' => '10240',
					'uploadfolder' => 'uploads/pics',
					'show_thumbs' => '1',
					'size' => '3',
					'maxitems' => '6',
					'minitems' => '0',
				),
			),
			'disable' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'config' => array(
					'type' => 'check',
				),
			),
			'starttime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
			),
			'endtime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
					'range' => array(
						'upper' => 1609369200,
					),
				),
			),
			'TSconfig' => array(
				'exclude' => 1,
				'label' => 'TSconfig:',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '10',
					'wizards' => array(
						'_PADDING' => 4,
						0 => array(
							'title' => 'TSconfig QuickReference',
							'script' => 'wizard_tsconfig.php?mode=fe_users',
							'icon' => 'wizard_tsconfig.gif',
							'JSopenParams' => 'height=500,width=780,status=0,menubar=0,scrollbars=1',
						),
					),
					'softref' => 'TSconfig',
				),
				'defaultExtras' => 'fixed-font : enable-tab',
			),
			'lastlogin' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.lastlogin',
				'config' => array(
					'type' => 'input',
					'readOnly' => '1',
					'size' => '12',
					'eval' => 'datetime',
					'default' => 0,
				),
			),
			'tx_extbase_type' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.0',
							'0',
						),
						array(
							'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
							'Tx_Extbase_Domain_Model_FrontendUser',
						),
					),
					'size' => 1,
					'maxitems' => 1,
					'default' => '0',
				),
			),
			'felogin_redirectPid' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:felogin/locallang_db.xlf:felogin_redirectPid',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => 1,
					'minitems' => 0,
					'maxitems' => 1,
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'felogin_forgotHash' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:felogin/locallang_db.xlf:felogin_forgotHash',
				'config' => array(
					'type' => 'passthrough',
				),
			),
		),
		'types' => array(
			0 => array(
				'showitem' => 'disable, username;;;;1-1-1, password, usergroup, lastlogin;;;;1-1-1, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.personelData, company;;1;;1-1-1, name;;2;;2-2-2, address, zip, city, country, telephone, fax, email, www, image;;;;2-2-2, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.options, lockToDomain;;;;1-1-1, TSconfig;;;;2-2-2, felogin_redirectPid;;;;1-1-1, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.access, starttime, endtime, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.extended, tx_extbase_type',
			),
			'Tx_Extbase_Domain_Model_FrontendUser' => array(
				'showitem' => 'disable, username;;;;1-1-1, password, usergroup, lastlogin;;;;1-1-1, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.personelData, company;;1;;1-1-1, name;;2;;2-2-2, address, zip, city, country, telephone, fax, email, www, image;;;;2-2-2, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.options, lockToDomain;;;;1-1-1, TSconfig;;;;2-2-2, felogin_redirectPid;;;;1-1-1, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.access, starttime, endtime, --div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.extended, tx_extbase_type',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => 'title',
			),
			2 => array(
				'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
			),
		),
	),
	'pages_language_overlay' => array(
		'ctrl' => array(
			'label' => 'title',
			'tstamp' => 'tstamp',
			'title' => 'LLL:EXT:cms/locallang_tca.xlf:pages_language_overlay',
			'versioningWS' => TRUE,
			'versioning_followPages' => TRUE,
			'origUid' => 't3_origuid',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'delete' => 'deleted',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'transOrigPointerField' => 'pid',
			'transOrigPointerTable' => 'pages',
			'transOrigDiffSourceField' => 'l18n_diffsource',
			'shadowColumnsForNewPlaceholders' => 'title',
			'languageField' => 'sys_language_uid',
			'mainpalette' => 1,
			'type' => 'doktype',
			'typeicon_classes' => array(
				'default' => 'mimetypes-x-content-page-language-overlay',
			),
			'dividers2tabs' => TRUE,
			'searchFields' => 'title,subtitle,nav_title,keywords,description,abstract,author,author_email,url',
		),
		'interface' => array(
			'showRecordFieldList' => 'title,hidden,starttime,endtime,keywords,description,abstract',
		),
		'columns' => array(
			'doktype' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.div.page',
							'--div--',
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:doktype.I.0',
							'1',
							'i/pages.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.4',
							'6',
							'i/be_users_section.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.div.link',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.2',
							'4',
							'i/pages_shortcut.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.5',
							'7',
							'i/pages_mountpoint.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.8',
							'3',
							'i/pages_link.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.div.special',
							'--div--',
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:doktype.I.folder',
							'254',
							'i/sysf.gif',
						),
						array(
							'LLL:EXT:lang/locallang_tca.xlf:doktype.I.2',
							'255',
							'i/recycler.gif',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.7',
							'199',
							'i/spacer_icon.gif',
						),
					),
					'default' => '1',
					'iconsInOptionTags' => 1,
					'noIconsBelowSelect' => 1,
				),
			),
			'hidden' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.hidden',
				'config' => array(
					'type' => 'check',
					'default' => '0',
					'items' => array(
						1 => array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.hidden_checkbox_1_formlabel',
						),
					),
				),
			),
			'starttime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
			),
			'endtime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
					'range' => array(
						'upper' => 1609369200,
					),
				),
			),
			'title' => array(
				'l10n_mode' => 'prefixLangTitle',
				'label' => 'LLL:EXT:lang/locallang_tca.xlf:title',
				'l10n_cat' => 'text',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '255',
					'eval' => 'trim,required',
				),
			),
			'subtitle' => array(
				'exclude' => 1,
				'l10n_cat' => 'text',
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.subtitle',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '255',
					'eval' => 'trim',
				),
			),
			'nav_title' => array(
				'exclude' => 1,
				'l10n_cat' => 'text',
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.nav_title',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '255',
					'eval' => 'trim',
				),
			),
			'keywords' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.keywords',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '3',
				),
			),
			'description' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.description',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '3',
				),
			),
			'abstract' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.abstract',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '3',
				),
			),
			'author' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.author',
				'config' => array(
					'type' => 'input',
					'size' => '23',
					'eval' => 'trim',
					'max' => '80',
				),
			),
			'author_email' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.email',
				'config' => array(
					'type' => 'input',
					'size' => '23',
					'eval' => 'trim',
					'max' => '80',
					'softref' => 'email[subst]',
				),
			),
			'media' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.media',
				'config' => array(
					'type' => 'inline',
					'foreign_table' => 'sys_file_reference',
					'foreign_field' => 'uid_foreign',
					'foreign_sortby' => 'sorting_foreign',
					'foreign_table_field' => 'tablenames',
					'foreign_match_fields' => array(
						'fieldname' => 'media',
					),
					'foreign_label' => 'uid_local',
					'foreign_selector' => 'uid_local',
					'foreign_selector_fieldTcaOverride' => array(
						'config' => array(
							'appearance' => array(
								'elementBrowserType' => 'file',
								'elementBrowserAllowed' => '',
							),
						),
					),
					'filter' => array(
						array(
							'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
							'parameters' => array(
								'allowedFileExtensions' => '',
								'disallowedFileExtensions' => '',
							),
						),
					),
					'appearance' => array(
						'useSortable' => TRUE,
						'headerThumbnail' => array(
							'field' => 'uid_local',
							'width' => '64',
							'height' => '64',
						),
						'showPossibleLocalizationRecords' => TRUE,
						'showRemovedLocalizationRecords' => TRUE,
						'showSynchronizationLink' => TRUE,
						'enabledControls' => array(
							'info' => FALSE,
							'new' => FALSE,
							'dragdrop' => TRUE,
							'sort' => FALSE,
							'hide' => TRUE,
							'delete' => TRUE,
							'localize' => TRUE,
						),
					),
					'behaviour' => array(
						'localizationMode' => 'select',
						'localizeChildrenAtParentLocalization' => TRUE,
					),
				),
			),
			'url' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.url',
				'config' => array(
					'type' => 'input',
					'size' => '23',
					'max' => '255',
					'eval' => 'trim',
					'softref' => 'url',
				),
			),
			'urltype' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_core.xlf:labels.automatic',
							'0',
						),
						array(
							'http://',
							'1',
						),
						array(
							'https://',
							'4',
						),
						array(
							'ftp://',
							'2',
						),
						array(
							'mailto:',
							'3',
						),
					),
					'default' => '1',
				),
			),
			'shortcut' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.shortcut_page',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => '1',
					'maxitems' => '1',
					'minitems' => '0',
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'shortcut_mode' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode.I.0',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode.I.1',
							1,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode.I.2',
							2,
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode.I.3',
							3,
						),
					),
					'default' => '0',
				),
			),
			'sys_language_uid' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_language',
					'foreign_table_where' => 'ORDER BY sys_language.title',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
					),
				),
			),
			'tx_impexp_origuid' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			'l18n_diffsource' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			't3ver_label' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '255',
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.abstract;abstract,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.metatags;metatags,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
			3 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.external;external,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.abstract;abstract,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
			4 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.shortcut;shortcut,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.shortcutpage;shortcutpage,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.abstract;abstract,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
				',
			),
			7 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.abstract;abstract,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
			199 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;titleonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
			',
			),
			254 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;titleonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
			255 => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;titleonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
					--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,
				--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
		',
			),
		),
		'palettes' => array(
			5 => array(
				'showitem' => 'author,author_email',
				'canNotCollapse' => TRUE,
			),
			'standard' => array(
				'showitem' => 'doktype;LLL:EXT:cms/locallang_tca.xlf:pages.doktype_formlabel, sys_language_uid',
				'canNotCollapse' => 1,
			),
			'shortcut' => array(
				'showitem' => 'doktype;LLL:EXT:cms/locallang_tca.xlf:pages.doktype_formlabel, sys_language_uid, shortcut_mode;LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_mode_formlabel',
				'canNotCollapse' => 1,
			),
			'shortcutpage' => array(
				'showitem' => 'shortcut;LLL:EXT:cms/locallang_tca.xlf:pages.shortcut_formlabel',
				'canNotCollapse' => 1,
			),
			'external' => array(
				'showitem' => 'doktype;LLL:EXT:cms/locallang_tca.xlf:pages.doktype_formlabel, sys_language_uid, urltype;LLL:EXT:cms/locallang_tca.xlf:pages.urltype_formlabel, url;LLL:EXT:cms/locallang_tca.xlf:pages.url_formlabel',
				'canNotCollapse' => 1,
			),
			'title' => array(
				'showitem' => 'title;LLL:EXT:cms/locallang_tca.xlf:pages.title_formlabel, --linebreak--, nav_title;LLL:EXT:cms/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:cms/locallang_tca.xlf:pages.subtitle_formlabel',
				'canNotCollapse' => 1,
			),
			'titleonly' => array(
				'showitem' => 'title;LLL:EXT:cms/locallang_tca.xlf:pages.title_formlabel',
				'canNotCollapse' => 1,
			),
			'hiddenonly' => array(
				'showitem' => 'hidden;LLL:EXT:cms/locallang_tca.xlf:pages.hidden_formlabel',
				'canNotCollapse' => 1,
			),
			'access' => array(
				'showitem' => 'starttime;LLL:EXT:cms/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:cms/locallang_tca.xlf:pages.endtime_formlabel',
				'canNotCollapse' => 1,
			),
			'abstract' => array(
				'showitem' => 'abstract;LLL:EXT:cms/locallang_tca.xlf:pages.abstract_formlabel',
				'canNotCollapse' => 1,
			),
			'metatags' => array(
				'showitem' => 'keywords;LLL:EXT:cms/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:cms/locallang_tca.xlf:pages.description_formlabel',
				'canNotCollapse' => 1,
			),
			'editorial' => array(
				'showitem' => 'author;LLL:EXT:cms/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:cms/locallang_tca.xlf:pages.author_email_formlabel',
				'canNotCollapse' => 1,
			),
			'language' => array(
				'showitem' => 'l18n_cfg;LLL:EXT:cms/locallang_tca.xlf:pages.l18n_cfg_formlabel',
				'canNotCollapse' => 1,
			),
			'media' => array(
				'showitem' => 'media;LLL:EXT:cms/locallang_tca.xlf:pages.media_formlabel',
				'canNotCollapse' => 1,
			),
		),
	),
	'sys_domain' => array(
		'ctrl' => array(
			'label' => 'domainName',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'sortby' => 'sorting',
			'title' => 'LLL:EXT:cms/locallang_tca.xlf:sys_domain',
			'iconfile' => 'domain.gif',
			'enablecolumns' => array(
				'disabled' => 'hidden',
			),
			'typeicon_classes' => array(
				'default' => 'mimetypes-x-content-domain',
			),
			'searchFields' => 'domainName,redirectTo',
		),
		'interface' => array(
			'showRecordFieldList' => 'hidden,domainName,redirectTo',
		),
		'columns' => array(
			'domainName' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_domain.domainName',
				'config' => array(
					'type' => 'input',
					'size' => '35',
					'max' => '80',
					'eval' => 'required,unique,lower,trim,domainname',
					'softref' => 'substitute',
				),
			),
			'redirectTo' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_domain.redirectTo',
				'config' => array(
					'type' => 'input',
					'size' => '35',
					'max' => '255',
					'default' => '',
					'eval' => 'trim',
					'softref' => 'substitute',
				),
			),
			'redirectHttpStatusCode' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_domain.redirectHttpStatusCode',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.301',
							'301',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.302',
							'302',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.303',
							'303',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.307',
							'307',
						),
					),
					'size' => 1,
					'maxitems' => 1,
				),
			),
			'hidden' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'prepend_params' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_domain.prepend_params',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'forced' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_domain.forced',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '1',
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => 'hidden;;;;1-1-1,domainName;;1;;3-3-3,prepend_params,forced;;;;4-4-4',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => 'redirectTo, redirectHttpStatusCode',
			),
		),
	),
	'sys_template' => array(
		'ctrl' => array(
			'label' => 'title',
			'tstamp' => 'tstamp',
			'sortby' => 'sorting',
			'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
			'title' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template',
			'versioningWS' => TRUE,
			'origUid' => 't3_origuid',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'delete' => 'deleted',
			'adminOnly' => 1,
			'iconfile' => 'template.gif',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'typeicon_column' => 'root',
			'typeicon_classes' => array(
				'default' => 'mimetypes-x-content-template-extension',
				1 => 'mimetypes-x-content-template',
			),
			'typeicons' => array(
				'template_add.gif',
			),
			'dividers2tabs' => 1,
			'searchFields' => 'title,constants,config',
		),
		'interface' => array(
			'showRecordFieldList' => 'title,clear,root,basedOn,nextLevel,sitetitle,description,hidden,starttime,endtime',
		),
		'columns' => array(
			'title' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.title',
				'config' => array(
					'type' => 'input',
					'size' => '25',
					'max' => '256',
					'eval' => 'required',
				),
			),
			'hidden' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'starttime' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'exclude' => 1,
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
			),
			'endtime' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'exclude' => 1,
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
					'range' => array(
						'upper' => 1609369200,
					),
				),
			),
			'root' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.root',
				'config' => array(
					'type' => 'check',
				),
			),
			'clear' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.clear',
				'config' => array(
					'type' => 'check',
					'items' => array(
						array(
							'Constants',
							'',
						),
						array(
							'Setup',
							'',
						),
					),
					'cols' => 2,
				),
			),
			'sitetitle' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.sitetitle',
				'config' => array(
					'type' => 'input',
					'size' => '25',
					'max' => '256',
				),
			),
			'constants' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.constants',
				'config' => array(
					'type' => 'text',
					'cols' => '48',
					'rows' => '10',
					'wrap' => 'OFF',
					'softref' => 'TStemplate,email[subst],url[subst]',
				),
				'defaultExtras' => 'fixed-font : enable-tab',
			),
			'nextLevel' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.nextLevel',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'sys_template',
					'show_thumbs' => '1',
					'size' => '1',
					'maxitems' => '1',
					'minitems' => '0',
					'default' => '',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'include_static_file' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.include_static_file',
				'config' => array(
					'type' => 'select',
					'size' => 10,
					'maxitems' => 100,
					'items' => array(
						array(
							'Fluid: (Optional) default ajax configuration (fluid)',
							'EXT:fluid/Configuration/TypoScript',
						),
						array(
							'Clickenlarge Rendering (rtehtmlarea)',
							'EXT:rtehtmlarea/static/clickenlarge/',
						),
						array(
							'CSS Styled Content (css_styled_content)',
							'EXT:css_styled_content/static/',
						),
						array(
							'CSS Styled Content TYPO3 v3.8 (css_styled_content)',
							'EXT:css_styled_content/static/v3.8/',
						),
						array(
							'CSS Styled Content TYPO3 v3.9 (css_styled_content)',
							'EXT:css_styled_content/static/v3.9/',
						),
						array(
							'CSS Styled Content TYPO3 v4.2 (css_styled_content)',
							'EXT:css_styled_content/static/v4.2/',
						),
						array(
							'CSS Styled Content TYPO3 v4.3 (css_styled_content)',
							'EXT:css_styled_content/static/v4.3/',
						),
						array(
							'CSS Styled Content TYPO3 v4.4 (css_styled_content)',
							'EXT:css_styled_content/static/v4.4/',
						),
						array(
							'CSS Styled Content TYPO3 v4.5 (css_styled_content)',
							'EXT:css_styled_content/static/v4.5/',
						),
						array(
							'CSS Styled Content TYPO3 v4.6 (css_styled_content)',
							'EXT:css_styled_content/static/v4.6/',
						),
						array(
							'CSS Styled Content TYPO3 v4.7 (css_styled_content)',
							'EXT:css_styled_content/static/v4.7/',
						),
						array(
							'CSS Styled Content TYPO3 v6.0 (css_styled_content)',
							'EXT:css_styled_content/static/v6.0/',
						),
						array(
							'Default TS (form)',
							'EXT:form/Configuration/TypoScript/',
						),
					),
					'softref' => 'ext_fileref',
				),
			),
			'basedOn' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.basedOn',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'sys_template',
					'show_thumbs' => '1',
					'size' => '3',
					'maxitems' => '50',
					'autoSizeMax' => 10,
					'minitems' => '0',
					'default' => '',
					'wizards' => array(
						'_PADDING' => 4,
						'_VERTICAL' => 1,
						'suggest' => array(
							'type' => 'suggest',
						),
						'edit' => array(
							'type' => 'popup',
							'title' => 'Edit template',
							'script' => 'wizard_edit.php',
							'popup_onlyOpenIfSelected' => 1,
							'icon' => 'edit2.gif',
							'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
						'add' => array(
							'type' => 'script',
							'title' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.basedOn_add',
							'icon' => 'add.gif',
							'params' => array(
								'table' => 'sys_template',
								'pid' => '###CURRENT_PID###',
								'setValue' => 'prepend',
							),
							'script' => 'wizard_add.php',
						),
					),
				),
			),
			'includeStaticAfterBasedOn' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
				'exclude' => 1,
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'config' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.config',
				'config' => array(
					'type' => 'text',
					'rows' => 10,
					'cols' => 48,
					'wizards' => array(
						'_PADDING' => 4,
						0 => array(
							'title' => 'TSref online',
							'script' => 'wizard_tsconfig.php?mode=tsref',
							'icon' => 'wizard_tsconfig.gif',
							'JSopenParams' => 'height=500,width=780,status=0,menubar=0,scrollbars=1',
						),
					),
					'wrap' => 'OFF',
					'softref' => 'TStemplate,email[subst],url[subst]',
				),
				'defaultExtras' => 'fixed-font : enable-tab',
			),
			'description' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.description',
				'config' => array(
					'type' => 'text',
					'rows' => 5,
					'cols' => 48,
				),
			),
			'static_file_mode' => array(
				'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.static_file_mode',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_tca.xlf:sys_template.static_file_mode.0',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:sys_template.static_file_mode.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:sys_template.static_file_mode.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_tca.xlf:sys_template.static_file_mode.3',
							'3',
						),
					),
					'default' => '0',
				),
			),
			'tx_impexp_origuid' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			't3ver_label' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '255',
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => '
			hidden,title;;1;;2-2-2, sitetitle, constants;;;;3-3-3, config, description;;;;4-4-4,
			--div--;LLL:EXT:cms/locallang_tca.xlf:sys_template.tabs.options, clear, root, nextLevel,
			--div--;LLL:EXT:cms/locallang_tca.xlf:sys_template.tabs.include, includeStaticAfterBasedOn,6-6-6, include_static_file, basedOn, static_file_mode,
			--div--;LLL:EXT:cms/locallang_tca.xlf:sys_template.tabs.access, starttime, endtime',
			),
		),
	),
	'tt_content' => array(
		'ctrl' => array(
			'label' => 'header',
			'label_alt' => 'subheader,bodytext',
			'sortby' => 'sorting',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'title' => 'LLL:EXT:cms/locallang_tca.xlf:tt_content',
			'delete' => 'deleted',
			'versioningWS' => 2,
			'versioning_followPages' => TRUE,
			'origUid' => 't3_origuid',
			'type' => 'CType',
			'hideAtCopy' => TRUE,
			'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
			'copyAfterDuplFields' => 'colPos,sys_language_uid',
			'useColumnsForDefaultValues' => 'colPos,sys_language_uid',
			'shadowColumnsForNewPlaceholders' => 'colPos',
			'transOrigPointerField' => 'l18n_parent',
			'transOrigDiffSourceField' => 'l18n_diffsource',
			'languageField' => 'sys_language_uid',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
				'fe_group' => 'fe_group',
			),
			'typeicon_column' => 'CType',
			'typeicon_classes' => array(
				'header' => 'mimetypes-x-content-header',
				'textpic' => 'mimetypes-x-content-text-picture',
				'image' => 'mimetypes-x-content-image',
				'bullets' => 'mimetypes-x-content-list-bullets',
				'table' => 'mimetypes-x-content-table',
				'uploads' => 'mimetypes-x-content-list-files',
				'multimedia' => 'mimetypes-x-content-multimedia',
				'media' => 'mimetypes-x-content-multimedia',
				'menu' => 'mimetypes-x-content-menu',
				'list' => 'mimetypes-x-content-plugin',
				'mailform' => 'mimetypes-x-content-form',
				'search' => 'mimetypes-x-content-form-search',
				'login' => 'mimetypes-x-content-login',
				'shortcut' => 'mimetypes-x-content-link',
				'script' => 'mimetypes-x-content-script',
				'div' => 'mimetypes-x-content-divider',
				'html' => 'mimetypes-x-content-html',
				'text' => 'mimetypes-x-content-text',
				'default' => 'mimetypes-x-content-text',
			),
			'typeicons' => array(
				'header' => 'tt_content_header.gif',
				'textpic' => 'tt_content_textpic.gif',
				'image' => 'tt_content_image.gif',
				'bullets' => 'tt_content_bullets.gif',
				'table' => 'tt_content_table.gif',
				'uploads' => 'tt_content_uploads.gif',
				'multimedia' => 'tt_content_mm.gif',
				'media' => 'tt_content_mm.gif',
				'menu' => 'tt_content_menu.gif',
				'list' => 'tt_content_list.gif',
				'mailform' => 'tt_content_form.gif',
				'search' => 'tt_content_search.gif',
				'login' => 'tt_content_login.gif',
				'shortcut' => 'tt_content_shortcut.gif',
				'script' => 'tt_content_script.gif',
				'div' => 'tt_content_div.gif',
				'html' => 'tt_content_html.gif',
			),
			'thumbnail' => 'image',
			'requestUpdate' => 'list_type,rte_enabled,menu_type',
			'dividers2tabs' => 1,
			'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
		),
		'interface' => array(
			'always_description' => 0,
			'showRecordFieldList' => 'CType,header,header_link,bodytext,image,imagewidth,imageorient,media,records,colPos,starttime,endtime,fe_group',
		),
		'columns' => array(
			'CType' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.div.standard',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.0',
							'header',
							'i/tt_content_header.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.1',
							'text',
							'i/tt_content.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.2',
							'textpic',
							'i/tt_content_textpic.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.3',
							'image',
							'i/tt_content_image.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.div.lists',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.4',
							'bullets',
							'i/tt_content_bullets.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.5',
							'table',
							'i/tt_content_table.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.6',
							'uploads',
							'i/tt_content_uploads.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.div.forms',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.8',
							'mailform',
							'i/tt_content_form.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xlf:CType.I.10',
							'login',
							'i/tt_content_login.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.9',
							'search',
							'i/tt_content_search.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.div.special',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.7',
							'multimedia',
							'i/tt_content_mm.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.18',
							'media',
							'i/tt_content_mm.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.12',
							'menu',
							'i/tt_content_menu.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.13',
							'shortcut',
							'i/tt_content_shortcut.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.14',
							'list',
							'i/tt_content_list.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.16',
							'div',
							'i/tt_content_div.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:CType.I.17',
							'html',
							'i/tt_content_html.gif',
						),
					),
					'default' => 'text',
					'authMode' => 'explicitDeny',
					'authMode_enforce' => 'strict',
					'iconsInOptionTags' => 1,
					'noIconsBelowSelect' => 1,
				),
			),
			'hidden' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:cms/locallang_ttc.xml:hidden.I.0',
						),
					),
				),
			),
			'starttime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
				),
				'l10n_mode' => 'exclude',
				'l10n_display' => 'defaultAsReadonly',
			),
			'endtime' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'datetime',
					'default' => '0',
					'range' => array(
						'upper' => 1609369200,
					),
				),
				'l10n_mode' => 'exclude',
				'l10n_display' => 'defaultAsReadonly',
			),
			'fe_group' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.fe_group',
				'config' => array(
					'type' => 'select',
					'size' => 5,
					'maxitems' => 20,
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login',
							-1,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.any_login',
							-2,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups',
							'--div--',
						),
					),
					'exclusiveKeys' => '-1,-2',
					'foreign_table' => 'fe_groups',
					'foreign_table_where' => 'ORDER BY fe_groups.title',
				),
			),
			'sys_language_uid' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_language',
					'foreign_table_where' => 'ORDER BY sys_language.title',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
							-1,
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
					),
				),
			),
			'l18n_parent' => array(
				'displayCond' => 'FIELD:sys_language_uid:>:0',
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'foreign_table' => 'tt_content',
					'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,0)',
				),
			),
			'layout' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.layout',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:layout.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:layout.I.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:layout.I.3',
							'3',
						),
					),
					'default' => '0',
				),
			),
			'colPos' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:colPos',
				'config' => array(
					'type' => 'select',
					'itemsProcFunc' => 'EXT:cms/classes/class.tx_cms_backendlayout.php:TYPO3\\CMS\\Backend\\View\\BackendLayoutView->colPosListItemProcFunc',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:colPos.I.0',
							'1',
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.normal',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:colPos.I.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:colPos.I.3',
							'3',
						),
					),
					'default' => '0',
				),
			),
			'date' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:date',
				'config' => array(
					'type' => 'input',
					'size' => '13',
					'max' => '20',
					'eval' => 'date',
					'default' => '0',
				),
			),
			'header' => array(
				'l10n_mode' => 'prefixLangTitle',
				'l10n_cat' => 'text',
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:header',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '256',
					'softref' => 'typolink_tag',
				),
			),
			'header_position' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:header_position',
				'exclude' => 1,
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_position.I.1',
							'center',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_position.I.2',
							'right',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_position.I.3',
							'left',
						),
					),
					'default' => '',
				),
			),
			'header_link' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:header_link',
				'exclude' => 1,
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '256',
					'eval' => 'trim',
					'wizards' => array(
						'_PADDING' => 2,
						'link' => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
							'icon' => 'link_popup.gif',
							'script' => 'browse_links.php?mode=wizard',
							'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
						),
					),
					'softref' => 'typolink',
				),
			),
			'header_layout' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_layout.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_layout.I.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_layout.I.3',
							'3',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_layout.I.4',
							'4',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_layout.I.5',
							'5',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:header_layout.I.6',
							'100',
						),
					),
					'default' => '0',
				),
			),
			'subheader' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.subheader',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '256',
					'softref' => 'email[subst]',
				),
			),
			'bodytext' => array(
				'l10n_mode' => 'prefixLangTitle',
				'l10n_cat' => 'text',
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.text',
				'config' => array(
					'type' => 'text',
					'cols' => '80',
					'rows' => '15',
					'wizards' => array(
						'_PADDING' => 4,
						'_VALIGN' => 'middle',
						'RTE' => array(
							'notNewRecords' => 1,
							'RTEonly' => 1,
							'type' => 'script',
							'title' => 'LLL:EXT:cms/locallang_ttc.xml:bodytext.W.RTE',
							'icon' => 'wizard_rte2.gif',
							'script' => 'wizard_rte.php',
						),
						'table' => array(
							'notNewRecords' => 1,
							'enableByTypeConfig' => 1,
							'type' => 'script',
							'title' => 'LLL:EXT:cms/locallang_ttc.xml:bodytext.W.table',
							'icon' => 'wizard_table.gif',
							'script' => 'wizard_table.php',
							'params' => array(
								'xmlOutput' => 0,
							),
						),
						'forms' => array(
							'notNewRecords' => 1,
							'enableByTypeConfig' => 1,
							'type' => 'script',
							'title' => 'Form wizard',
							'icon' => 'wizard_forms.gif',
							'script' => 'sysext/form/Classes/Controller/Wizard.php',
							'params' => array(
								'xmlOutput' => 0,
							),
						),
					),
					'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
					'search' => array(
						'andWhere' => 'CType=\'text\' OR CType=\'textpic\'',
					),
				),
			),
			'text_align' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:text_align',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_align.I.1',
							'center',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_align.I.2',
							'right',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_align.I.3',
							'left',
						),
					),
					'default' => '',
				),
			),
			'text_face' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:text_face',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'0',
						),
						array(
							'Times',
							'1',
						),
						array(
							'Verdana',
							'2',
						),
						array(
							'Arial',
							'3',
						),
					),
					'default' => '0',
				),
			),
			'text_size' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:text_size',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_size.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_size.I.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_size.I.3',
							'3',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_size.I.4',
							'4',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_size.I.5',
							'5',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_size.I.6',
							'10',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_size.I.7',
							'11',
						),
					),
					'default' => '0',
				),
			),
			'text_color' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:text_color',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.3',
							'200',
						),
						array(
							'-----',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.5',
							'240',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.6',
							'241',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.7',
							'242',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.8',
							'243',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.9',
							'244',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.10',
							'245',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.11',
							'246',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.12',
							'247',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.13',
							'248',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.14',
							'249',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_color.I.15',
							'250',
						),
					),
					'default' => '0',
				),
			),
			'text_properties' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:text_properties',
				'config' => array(
					'type' => 'check',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_properties.I.0',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_properties.I.1',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_properties.I.2',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:text_properties.I.3',
							'',
						),
					),
					'cols' => 4,
				),
			),
			'image' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.images',
				'config' => array(
					'type' => 'inline',
					'foreign_table' => 'sys_file_reference',
					'foreign_field' => 'uid_foreign',
					'foreign_sortby' => 'sorting_foreign',
					'foreign_table_field' => 'tablenames',
					'foreign_match_fields' => array(
						'fieldname' => 'image',
					),
					'foreign_label' => 'uid_local',
					'foreign_selector' => 'uid_local',
					'foreign_selector_fieldTcaOverride' => array(
						'config' => array(
							'appearance' => array(
								'elementBrowserType' => 'file',
								'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai',
							),
						),
					),
					'filter' => array(
						array(
							'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
							'parameters' => array(
								'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai',
								'disallowedFileExtensions' => '',
							),
						),
					),
					'appearance' => array(
						'useSortable' => TRUE,
						'headerThumbnail' => array(
							'field' => 'uid_local',
							'width' => '64',
							'height' => '64',
						),
						'showPossibleLocalizationRecords' => TRUE,
						'showRemovedLocalizationRecords' => TRUE,
						'showSynchronizationLink' => TRUE,
						'enabledControls' => array(
							'info' => FALSE,
							'new' => FALSE,
							'dragdrop' => TRUE,
							'sort' => FALSE,
							'hide' => TRUE,
							'delete' => TRUE,
							'localize' => TRUE,
						),
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference',
					),
					'behaviour' => array(
						'localizationMode' => 'select',
						'localizeChildrenAtParentLocalization' => TRUE,
					),
					'foreign_types' => array(
						array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette',
						),
						array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette',
						),
						array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette',
						),
						array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette',
						),
						array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette',
						),
						array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette',
						),
					),
				),
			),
			'imagewidth' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:imagewidth',
				'config' => array(
					'type' => 'input',
					'size' => '4',
					'max' => '4',
					'eval' => 'int',
					'range' => array(
						'upper' => '999',
						'lower' => '25',
					),
					'default' => 0,
				),
			),
			'imageheight' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:imageheight',
				'config' => array(
					'type' => 'input',
					'size' => '4',
					'max' => '4',
					'eval' => 'int',
					'range' => array(
						'upper' => '700',
						'lower' => '25',
					),
					'default' => 0,
				),
			),
			'imageorient' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:imageorient',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.0',
							0,
							'selicons/above_center.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.1',
							1,
							'selicons/above_right.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.2',
							2,
							'selicons/above_left.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.3',
							8,
							'selicons/below_center.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.4',
							9,
							'selicons/below_right.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.5',
							10,
							'selicons/below_left.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.6',
							17,
							'selicons/intext_right.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.7',
							18,
							'selicons/intext_left.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.8',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.9',
							25,
							'selicons/intext_right_nowrap.gif',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.10',
							26,
							'selicons/intext_left_nowrap.gif',
						),
					),
					'selicon_cols' => 6,
					'default' => '0',
					'iconsInOptionTags' => 1,
				),
			),
			'imageborder' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:imageborder',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'image_noRows' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_noRows',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:cms/locallang_ttc.xml:image_noRows.I.0',
						),
					),
				),
			),
			'image_link' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_link',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
					'rows' => '3',
					'wizards' => array(
						'_PADDING' => 2,
						'link' => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:cms/locallang_ttc.xml:image_link_formlabel',
							'icon' => 'link_popup.gif',
							'script' => 'browse_links.php?mode=wizard',
							'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
						),
					),
					'softref' => 'typolink[linkList]',
				),
			),
			'image_zoom' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_zoom',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'image_effects' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_effects',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.0',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.1',
							1,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.2',
							2,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.3',
							3,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.4',
							10,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.5',
							11,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.6',
							20,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.7',
							23,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.8',
							25,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_effects.I.9',
							26,
						),
					),
				),
			),
			'image_frames' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_frames',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.0',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.1',
							1,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.2',
							2,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.3',
							3,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.4',
							4,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.5',
							5,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.6',
							6,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.7',
							7,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_frames.I.8',
							8,
						),
					),
				),
			),
			'image_compression' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_compression',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							0,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_compression.I.1',
							1,
						),
						array(
							'GIF/256',
							10,
						),
						array(
							'GIF/128',
							11,
						),
						array(
							'GIF/64',
							12,
						),
						array(
							'GIF/32',
							13,
						),
						array(
							'GIF/16',
							14,
						),
						array(
							'GIF/8',
							15,
						),
						array(
							'PNG',
							39,
						),
						array(
							'PNG/256',
							30,
						),
						array(
							'PNG/128',
							31,
						),
						array(
							'PNG/64',
							32,
						),
						array(
							'PNG/32',
							33,
						),
						array(
							'PNG/16',
							34,
						),
						array(
							'PNG/8',
							35,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_compression.I.15',
							21,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_compression.I.16',
							22,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_compression.I.17',
							24,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_compression.I.18',
							26,
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:image_compression.I.19',
							28,
						),
					),
				),
			),
			'imagecols' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:imagecols',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'1',
							1,
						),
						array(
							'2',
							2,
						),
						array(
							'3',
							3,
						),
						array(
							'4',
							4,
						),
						array(
							'5',
							5,
						),
						array(
							'6',
							6,
						),
						array(
							'7',
							7,
						),
						array(
							'8',
							8,
						),
					),
					'default' => 1,
				),
			),
			'imagecaption' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.caption',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
					'rows' => '3',
					'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
				),
			),
			'imagecaption_position' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:imagecaption_position',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imagecaption_position.I.1',
							'center',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imagecaption_position.I.2',
							'right',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:imagecaption_position.I.3',
							'left',
						),
					),
					'default' => '',
				),
			),
			'altText' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_altText',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
					'rows' => '3',
					'softref' => 'rtehtmlarea_images,typolink_tag',
				),
			),
			'titleText' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_titleText',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
					'rows' => '3',
					'softref' => 'rtehtmlarea_images,typolink_tag',
				),
			),
			'longdescURL' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:image_longdescURL',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
					'rows' => '3',
					'wizards' => array(
						'_PADDING' => 2,
						'link' => array(
							'type' => 'popup',
							'title' => 'LLL:EXT:cms/locallang_ttc.xml:image_link_formlabel',
							'icon' => 'link_popup.gif',
							'script' => 'browse_links.php?mode=wizard',
							'params' => array(
								'blindLinkOptions' => 'folder,file,mail,spec',
								'blindLinkFields' => 'target,title,class,params',
							),
							'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
						),
					),
					'softref' => 'typolink[linkList]',
				),
			),
			'cols' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:cols',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:cols.I.0',
							'0',
						),
						array(
							'1',
							'1',
						),
						array(
							'2',
							'2',
						),
						array(
							'3',
							'3',
						),
						array(
							'4',
							'4',
						),
						array(
							'5',
							'5',
						),
						array(
							'6',
							'6',
						),
						array(
							'7',
							'7',
						),
						array(
							'8',
							'8',
						),
						array(
							'9',
							'9',
						),
					),
					'default' => '0',
				),
			),
			'pages' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.startingpoint',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'pages',
					'size' => '3',
					'maxitems' => '22',
					'minitems' => '0',
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'recursive' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.recursive',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:recursive.I.0',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:recursive.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:recursive.I.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:recursive.I.3',
							'3',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:recursive.I.4',
							'4',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:recursive.I.5',
							'250',
						),
					),
					'default' => '0',
				),
			),
			'menu_type' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:menu_type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.0',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.2',
							'4',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.3',
							'7',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.4',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.8',
							'8',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.5',
							'3',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.6',
							'5',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:menu_type.I.7',
							'6',
						),
					),
					'default' => '0',
				),
			),
			'list_type' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:list_type',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							'',
							'',
						),
					),
					'itemsProcFunc' => 'user_sortPluginList',
					'default' => '',
					'authMode' => 'explicitDeny',
					'iconsInOptionTags' => 1,
					'noIconsBelowSelect' => 1,
				),
			),
			'select_key' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.code',
				'config' => array(
					'type' => 'input',
					'size' => '50',
					'max' => '80',
					'eval' => 'trim',
				),
			),
			'table_bgColor' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:table_bgColor',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:table_bgColor.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:table_bgColor.I.2',
							'2',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:table_bgColor.I.3',
							'200',
						),
						array(
							'-----',
							'--div--',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:table_bgColor.I.5',
							'240',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:table_bgColor.I.6',
							'241',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:table_bgColor.I.7',
							'242',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:table_bgColor.I.8',
							'243',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:table_bgColor.I.9',
							'244',
						),
					),
					'default' => '0',
				),
			),
			'table_border' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:table_border',
				'config' => array(
					'type' => 'input',
					'size' => '3',
					'max' => '3',
					'eval' => 'int',
					'range' => array(
						'upper' => '20',
						'lower' => '0',
					),
					'default' => 0,
				),
			),
			'table_cellspacing' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:table_cellspacing',
				'config' => array(
					'type' => 'input',
					'size' => '3',
					'max' => '3',
					'eval' => 'int',
					'range' => array(
						'upper' => '200',
						'lower' => '0',
					),
					'default' => 0,
				),
			),
			'table_cellpadding' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:table_cellpadding',
				'config' => array(
					'type' => 'input',
					'size' => '3',
					'max' => '3',
					'eval' => 'int',
					'range' => array(
						'upper' => '200',
						'lower' => '0',
					),
					'default' => 0,
				),
			),
			'media' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:media',
				'config' => array(
					'type' => 'inline',
					'foreign_table' => 'sys_file_reference',
					'foreign_field' => 'uid_foreign',
					'foreign_sortby' => 'sorting_foreign',
					'foreign_table_field' => 'tablenames',
					'foreign_match_fields' => array(
						'fieldname' => 'media',
					),
					'foreign_label' => 'uid_local',
					'foreign_selector' => 'uid_local',
					'foreign_selector_fieldTcaOverride' => array(
						'config' => array(
							'appearance' => array(
								'elementBrowserType' => 'file',
								'elementBrowserAllowed' => '',
							),
						),
					),
					'filter' => array(
						array(
							'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
							'parameters' => array(
								'allowedFileExtensions' => '',
								'disallowedFileExtensions' => '',
							),
						),
					),
					'appearance' => array(
						'useSortable' => TRUE,
						'headerThumbnail' => array(
							'field' => 'uid_local',
							'width' => '64',
							'height' => '64',
						),
						'showPossibleLocalizationRecords' => TRUE,
						'showRemovedLocalizationRecords' => TRUE,
						'showSynchronizationLink' => TRUE,
						'enabledControls' => array(
							'info' => FALSE,
							'new' => FALSE,
							'dragdrop' => TRUE,
							'sort' => FALSE,
							'hide' => TRUE,
							'delete' => TRUE,
							'localize' => TRUE,
						),
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference',
					),
					'behaviour' => array(
						'localizationMode' => 'select',
						'localizeChildrenAtParentLocalization' => TRUE,
					),
				),
			),
			'file_collections' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xlf:file_collections',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'localizeReferencesAtParentLocalization' => TRUE,
					'allowed' => 'sys_file_collection',
					'foreign_table' => 'sys_file_collection',
					'maxitems' => 999,
					'minitems' => 0,
					'size' => 5,
				),
			),
			'multimedia' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:multimedia',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'file',
					'allowed' => 'txt,html,htm,class,swf,swa,dcr,wav,avi,au,mov,asf,mpg,wmv,mp3,mp4,m4v',
					'max_size' => '10240',
					'uploadfolder' => 'uploads/media',
					'size' => '2',
					'maxitems' => '1',
					'minitems' => '0',
				),
			),
			'filelink_size' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:filelink_size',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'filelink_sorting' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:filelink_sorting',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:cms/locallang_ttc.xlf:filelink_sorting.none',
							'',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xlf:filelink_sorting.extension',
							'extension',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xlf:filelink_sorting.name',
							'name',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xlf:filelink_sorting.type',
							'type',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xlf:filelink_sorting.size',
							'size',
						),
					),
				),
			),
			'target' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:target',
				'config' => array(
					'type' => 'input',
					'size' => 20,
					'eval' => 'trim',
					'wizards' => array(
						'target_picker' => array(
							'type' => 'select',
							'mode' => '',
							'items' => array(
								array(
									'LLL:EXT:cms/locallang_ttc.xml:target.I.1',
									'_blank',
								),
							),
						),
					),
					'default' => '',
				),
			),
			'records' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:records',
				'config' => array(
					'type' => 'group',
					'internal_type' => 'db',
					'allowed' => 'tt_content',
					'size' => '5',
					'maxitems' => '200',
					'minitems' => '0',
					'show_thumbs' => '1',
					'wizards' => array(
						'suggest' => array(
							'type' => 'suggest',
						),
					),
				),
			),
			'spaceBefore' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:spaceBefore',
				'config' => array(
					'type' => 'input',
					'size' => '5',
					'max' => '5',
					'eval' => 'int',
					'range' => array(
						'lower' => '0',
					),
					'default' => 0,
				),
			),
			'spaceAfter' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:spaceAfter',
				'config' => array(
					'type' => 'input',
					'size' => '5',
					'max' => '5',
					'eval' => 'int',
					'range' => array(
						'lower' => '0',
					),
					'default' => 0,
				),
			),
			'section_frame' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:section_frame',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'LLL:EXT:css_styled_content/locallang_db.xlf:tt_content.tx_cssstyledcontent_section_frame.I.0',
							'0',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:section_frame.I.1',
							'1',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:section_frame.I.2',
							'5',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:section_frame.I.3',
							'6',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:section_frame.I.4',
							'10',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:section_frame.I.5',
							'11',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:section_frame.I.6',
							'12',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:section_frame.I.7',
							'20',
						),
						array(
							'LLL:EXT:cms/locallang_ttc.xml:section_frame.I.8',
							'21',
						),
						array(
							'LLL:EXT:css_styled_content/locallang_db.xlf:tt_content.tx_cssstyledcontent_section_frame.I.9',
							'66',
						),
					),
					'default' => '0',
				),
			),
			'sectionIndex' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:sectionIndex',
				'config' => array(
					'type' => 'check',
					'default' => 1,
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'linkToTop' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:linkToTop',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'rte_enabled' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:rte_enabled',
				'config' => array(
					'type' => 'check',
					'showIfRTE' => 1,
					'items' => array(
						1 => array(
							'LLL:EXT:cms/locallang_ttc.xml:rte_enabled.I.0',
						),
					),
				),
			),
			'pi_flexform' => array(
				'l10n_display' => 'hideDiff',
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:pi_flexform',
				'config' => array(
					'type' => 'flex',
					'ds_pointerField' => 'list_type,CType',
					'ds' => array(
						'default' => '
						<T3DataStructure>
						  <ROOT>
						    <type>array</type>
						    <el>
								<!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
						      <xmlTitle>
								<TCEforms>
									<label>The Title:</label>
									<config>
										<type>input</type>
										<size>48</size>
									</config>
								</TCEforms>
						      </xmlTitle>
						    </el>
						  </ROOT>
						</T3DataStructure>
					',
						',media' => '<?xml version="1.0" encoding="utf-8"?>
<T3DataStructure>
	<meta>
		<langDisable>1</langDisable>
	</meta>
	<sheets>
		<sGeneral>
			<ROOT>
				<TCEforms>
					<sheetTitle>LLL:EXT:cms/locallang_ttc.xml:media.options</sheetTitle>
				</TCEforms>
				<type>array</type>
				<el>
					<mmType>
						<TCEforms>
							<onChange>reload</onChange>
							<label>LLL:EXT:cms/locallang_ttc.xml:media.type</label>
							<config>
								<type>select</type>
								<items>
									<numIndex index="0">
										<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.type.video</numIndex>
										<numIndex index="1">video</numIndex>
									</numIndex>
									<numIndex index="1">
										<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.type.audio</numIndex>
										<numIndex index="1">audio</numIndex>
									</numIndex>
								</items>
							</config>
						</TCEforms>
					</mmType>
					<mmUseHTML5>
						<TCEforms>
							<label>LLL:EXT:cms/locallang_ttc.xml:media.useHTML5</label>
							<displayCond>FIELD:mmType:!=:audio</displayCond>
							<onChange>reload</onChange>
							<config>
								<type>check</type>
								<default>0</default>
							</config>
						</TCEforms>
					</mmUseHTML5>
					<mmWidth>
						<TCEforms>
							<label>LLL:EXT:cms/locallang_ttc.xml:media.width</label>
							<config>
								<type>input</type>
								<size>8</size>
								<max>5</max>
								<eval>trim,num</eval>
							</config>
						</TCEforms>
					</mmWidth>
					<mmHeight>
						<TCEforms>
							<label>LLL:EXT:cms/locallang_ttc.xml:media.height</label>
							<config>
								<type>input</type>
								<size>8</size>
								<max>5</max>
								<eval>trim,num</eval>
							</config>
						</TCEforms>
					</mmHeight>
					<mmRenderType>
						<TCEforms>
							<label>LLL:EXT:cms/locallang_ttc.xml:media.renderType</label>
							<displayCond>FIELD:mmType:!=:audio</displayCond>
							<config>
								<type>select</type>
								<items>
									<numIndex index="0">
										<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.renderType.auto</numIndex>
										<numIndex index="1">auto</numIndex>
									</numIndex>
									<numIndex index="1">
										<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.renderType.qt</numIndex>
										<numIndex index="1">qt</numIndex>
									</numIndex>
									<numIndex index="2">
										<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.renderType.embed</numIndex>
										<numIndex index="1">embed</numIndex>
									</numIndex>
								</items>
								<itemsProcFunc>tx_cms_mediaItems->customMediaRenderTypes</itemsProcFunc>
							</config>
						</TCEforms>
					</mmRenderType>
					<mmMediaOptions>
						<title>LLL:EXT:cms/locallang_ttc.xml:media.additionalOptions</title>
						<type>array</type>
						<section>1</section>
						<el>
							<mmMediaOptionsContainer>
								<type>array</type>
								<title>LLL:EXT:cms/locallang_ttc.xml:media.params</title>
								<el>
									<mmParamName>
										<TCEforms>
											<label>LLL:EXT:cms/locallang_ttc.xml:media.params.option</label>
											<config>
												<type>select</type>
												<items>
													<numIndex index="0">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.autoPlay</numIndex>
														<numIndex index="1">autoPlay</numIndex>
													</numIndex>
													<numIndex index="1">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.loop</numIndex>
														<numIndex index="1">loop</numIndex>
													</numIndex>
													<numIndex index="2">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.quality</numIndex>
														<numIndex index="1">quality</numIndex>
													</numIndex>
													<numIndex index="3">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.preview</numIndex>
														<numIndex index="1">preview</numIndex>
													</numIndex>
													<numIndex index="4">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.allowScriptAccess</numIndex>
														<numIndex index="1">allowScriptAccess</numIndex>
													</numIndex>
													<numIndex index="5">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.allowFullScreen</numIndex>
														<numIndex index="1">allowFullScreen</numIndex>
													</numIndex>
													<numIndex index="6">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.preload</numIndex>
														<numIndex index="1">preload</numIndex>
													</numIndex>
													<numIndex index="7">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.controlsBelow</numIndex>
														<numIndex index="1">controlsBelow</numIndex>
													</numIndex>
													<numIndex index="8">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.controlsAtStart</numIndex>
														<numIndex index="1">controlsAtStart</numIndex>
													</numIndex>
													<numIndex index="9">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.controlsHiding</numIndex>
														<numIndex index="1">controlsHiding</numIndex>
													</numIndex>
													<numIndex index="10">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.defaultVolume</numIndex>
														<numIndex index="1">defaultVolume</numIndex>
													</numIndex>
												</items>
												<itemsProcFunc>tx_cms_mediaItems->customMediaParams</itemsProcFunc>
											</config>
										</TCEforms>
									</mmParamName>
									<mmParamSet>
										<TCEforms>
											<label>LLL:EXT:cms/locallang_ttc.xml:media.params.setTo</label>
											<config>
												<type>select</type>
												<items>
													<numIndex index="0">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.on</numIndex>
														<numIndex index="1">1</numIndex>
													</numIndex>
													<numIndex index="1">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.off</numIndex>
														<numIndex index="1">0</numIndex>
													</numIndex>
													<numIndex index="2">
														<numIndex index="0">LLL:EXT:cms/locallang_ttc.xml:media.params.valueEntry</numIndex>
														<numIndex index="1">2</numIndex>
													</numIndex>
												</items>
											</config>
										</TCEforms>
									</mmParamSet>
									<mmParamValue>
										<TCEforms>
											<label>LLL:EXT:cms/locallang_ttc.xml:media.params.value</label>
											<config>
												<type>input</type>
												<size>16</size>
												<default></default>
											</config>
										</TCEforms>
									</mmParamValue>
								</el>
							</mmMediaOptionsContainer>
							<mmMediaCustomParameterContainer>
								<type>array</type>
								<title>LLL:EXT:cms/locallang_ttc.xml:media.params.customEntry</title>
								<el>
									<mmParamCustomEntry>
										<TCEforms>
											<label>LLL:EXT:cms/locallang_ttc.xml:media.params.customEntryLabel</label>
											<config>
												<type>text</type>
												<rows>6</rows>
												<cols>60</cols>
											</config>
										</TCEforms>
									</mmParamCustomEntry>
								</el>
							</mmMediaCustomParameterContainer>
						</el>
					</mmMediaOptions>
				</el>
			</ROOT>
		</sGeneral>
		<sVideo>
			<ROOT>
				<TCEforms>
					<sheetTitle>LLL:EXT:cms/locallang_ttc.xml:media.tabVideo</sheetTitle>
					<displayCond>FIELD:sGeneral.mmType:!=:audio</displayCond>
				</TCEforms>
				<type>array</type>
				<el>
					<mmFile>
						<TCEforms>
							<label>LLL:EXT:cms/locallang_ttc.xml:media.fallbackUrl</label>
							<config>
								<type>input</type>
								<size>60</size>
								<eval>trim,required</eval>
								<default></default>
								<wizards type="array">
									<_PADDING>2</_PADDING>
									<link type="array">
										<type>popup</type>
										<title>LLL:EXT:cms/locallang_ttc.xml:media.browseUrlTitle</title>
										<icon>link_popup.gif</icon>
										<script>browse_links.php?mode=wizard&amp;act=file|url</script>
										<params type="array">
											<blindLinkOptions>page,folder,mail,spec</blindLinkOptions>
											<allowedExtensions>class,swa,dcr,wav,avi,au,mov,asf,mpg,wmv,mp3,mp4,m4v,m4a,flv,ogg,ogv,swf,webm</allowedExtensions>
										</params>
										<JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams>
									</link>
								</wizards>
							</config>
						</TCEforms>
					</mmFile>
				</el>
			</ROOT>
		</sVideo>
		<sVideoAccessible>
			<ROOT>
				<TCEforms>
					<sheetTitle>LLL:EXT:cms/locallang_ttc.xml:media.tabVideoAccessible</sheetTitle>
					<displayCond>FIELD:sGeneral.mmUseHTML5:=:1</displayCond>
				</TCEforms>
				<type>array</type>
				<el>
					<mmSources>
						<title>LLL:EXT:cms/locallang_ttc.xml:media.sources</title>
						<type>array</type>
						<section>1</section>
						<el>
							<mmSourcesContainer>
								<type>array</type>
								<title>LLL:EXT:cms/locallang_ttc.xml:media.media.url</title>
								<el>
									<mmSource>
										<TCEforms>
											<label>LLL:EXT:cms/locallang_ttc.xml:media.url</label>
											<config>
												<type>input</type>
												<size>60</size>
												<eval>trim,required</eval>
												<default></default>
												<wizards type="array">
													<_PADDING>2</_PADDING>
													<link type="array">
														<type>popup</type>
														<title>LLL:EXT:cms/locallang_ttc.xml:media.browseUrlTitle</title>
														<icon>link_popup.gif</icon>
														<script>browse_links.php?mode=wizard&amp;act=file|url</script>
														<params type="array">
															<blindLinkOptions>page,folder,mail,spec</blindLinkOptions>
															<allowedExtensions>mov,mpg,mp4,m4a,m4v,ogg,ogv,swf,webm</allowedExtensions>
														</params>
														<JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams>
													</link>
												</wizards>
											</config>
										</TCEforms>
									</mmSource>
								</el>
							</mmSourcesContainer>
						</el>
					</mmSources>
					<mmCaption>
						<TCEforms>
							<label>LLL:EXT:cms/locallang_ttc.xml:media.captionUrl</label>
							<config>
								<type>input</type>
								<size>60</size>
								<eval>trim</eval>
								<default></default>
								<wizards type="array">
									<_PADDING>2</_PADDING>
									<link type="array">
										<type>popup</type>
										<title>LLL:EXT:cms/locallang_ttc.xml:media.browseUrlTitle</title>
										<icon>link_popup.gif</icon>
										<script>browse_links.php?mode=wizard&amp;act=file|url</script>
										<params type="array">
											<blindLinkOptions>page,folder,mail,spec</blindLinkOptions>
											<allowedExtensions>srt</allowedExtensions>
										</params>
										<JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams>
									</link>
								</wizards>
							</config>
						</TCEforms>
					</mmCaption>
					<mmAudioSources>
						<title>LLL:EXT:cms/locallang_ttc.xml:media.audioDescription</title>
						<type>array</type>
						<section>1</section>
						<el>
							<mmAudioSourcesContainer>
								<type>array</type>
								<title>LLL:EXT:cms/locallang_ttc.xml:media.media.browseUrl</title>
								<el>
									<mmAudioSource>
										<TCEforms>
											<label>LLL:EXT:cms/locallang_ttc.xml:media.browseUrl</label>
											<config>
												<type>input</type>
												<size>60</size>
												<eval>trim,required</eval>
												<default></default>
												<wizards type="array">
													<_PADDING>2</_PADDING>
													<link type="array">
														<type>popup</type>
														<title>LLL:EXT:cms/locallang_ttc.xml:media.browseUrlTitle</title>
														<icon>link_popup.gif</icon>
														<script>browse_links.php?mode=wizard&amp;act=file|url</script>
														<params type="array">
															<blindLinkOptions>page,folder,mail,spec</blindLinkOptions>
															<allowedExtensions>au,asf,mp3,m4a,oga,ogg, wav,webm,wmv</allowedExtensions>
														</params>
														<JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams>
													</link>
												</wizards>
											</config>
										</TCEforms>
									</mmAudioSource>
								</el>
							</mmAudioSourcesContainer>
						</el>
					</mmAudioSources>

				</el>
			</ROOT>
		</sVideoAccessible>
		<sAudio>
			<ROOT>
				<TCEforms>
					<sheetTitle>LLL:EXT:cms/locallang_ttc.xml:media.tabAudio</sheetTitle>
					<displayCond>FIELD:sGeneral.mmType:=:audio</displayCond>
				</TCEforms>
				<type>array</type>
				<el>
					<mmAudioFallback>
						<TCEforms>
							<label>LLL:EXT:cms/locallang_ttc.xml:media.audioFallbackUrl</label>
							<config>
								<type>input</type>
								<size>60</size>
								<eval>trim</eval>
								<default></default>
								<wizards type="array">
									<_PADDING>2</_PADDING>
									<link type="array">
										<type>popup</type>
										<title>LLL:EXT:cms/locallang_ttc.xml:media.browseUrlTitle</title>
										<icon>link_popup.gif</icon>
										<script>browse_links.php?mode=wizard&amp;act=file|url</script>
										<params type="array">
											<blindLinkOptions>page,folder,mail,spec</blindLinkOptions>
											<allowedExtensions>au,asf,mp3,m4a,oga,swa,wav,webm,wmv</allowedExtensions>
										</params>
										<JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams>
									</link>
								</wizards>
							</config>
						</TCEforms>
					</mmAudioFallback>
					<mmAudioSources>
						<title>LLL:EXT:cms/locallang_ttc.xml:media.audioSources</title>
						<type>array</type>
						<section>1</section>
						<el>
							<mmAudioSourcesContainer>
								<type>array</type>
								<title>LLL:EXT:cms/locallang_ttc.xml:media.media.url</title>
								<el>
									<mmAudioSource>
										<TCEforms>
											<label>LLL:EXT:cms/locallang_ttc.xml:media.url</label>
											<config>
												<type>input</type>
												<size>60</size>
												<eval>trim,required</eval>
												<default></default>
												<wizards type="array">
													<_PADDING>2</_PADDING>
													<link type="array">
														<type>popup</type>
														<title>LLL:EXT:cms/locallang_ttc.xml:media.browseUrlTitle</title>
														<icon>link_popup.gif</icon>
														<script>browse_links.php?mode=wizard&amp;act=file|url</script>
														<params type="array">
															<blindLinkOptions>page,folder,mail,spec</blindLinkOptions>
															<allowedExtensions>au,asf,mp3,m4a,oga,ogg, wav,webm,wmv</allowedExtensions>
														</params>
														<JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams>
													</link>
												</wizards>
											</config>
										</TCEforms>
									</mmAudioSource>
								</el>
							</mmAudioSourcesContainer>
						</el>
					</mmAudioSources>
				</el>
			</ROOT>
		</sAudio>
	</sheets>
</T3DataStructure>
',
						'*,table' => 'FILE:EXT:css_styled_content/flexform_ds.xml',
						'*,login' => 'FILE:EXT:felogin/flexform.xml',
					),
					'search' => array(
						'andWhere' => 'CType=\'list\'',
					),
				),
			),
			'tx_impexp_origuid' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			'accessibility_title' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:accessibility_title',
				'config' => array(
					'type' => 'input',
					'size' => 20,
					'eval' => 'trim',
					'default' => '',
				),
			),
			'accessibility_bypass' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:accessibility_bypass',
				'config' => array(
					'type' => 'check',
					'items' => array(
						1 => array(
							'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
						),
					),
				),
			),
			'accessibility_bypass_text' => array(
				'label' => 'LLL:EXT:cms/locallang_ttc.xml:accessibility_bypass_text',
				'config' => array(
					'type' => 'input',
					'size' => 20,
					'eval' => 'trim',
					'default' => '',
				),
			),
			'l18n_diffsource' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			't3ver_label' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'max' => '255',
				),
			),
		),
		'types' => array(
			1 => array(
				'showitem' => 'CType',
			),
			'header' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.headers;headers,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'text' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
					bodytext;LLL:EXT:cms/locallang_ttc.xml:bodytext_formlabel;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
					rte_enabled;LLL:EXT:cms/locallang_ttc.xml:rte_enabled_formlabel,
					--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
						--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
						--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.textlayout;textlayout,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'textpic' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
					bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
					rte_enabled;LLL:EXT:cms/locallang_ttc.xml:rte_enabled_formlabel,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images,
					image,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagelinks;imagelinks,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imageblock;imageblock,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.textlayout;textlayout,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'image' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.images,
					image,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagelinks;imagelinks,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_settings;image_settings,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imageblock;imageblock,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'bullets' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
					bodytext;LLL:EXT:cms/locallang_ttc.xml:bodytext.ALT.bulletlist_formlabel;;nowrap,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.textlayout;textlayout,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'table' => array(
				'showitem' => 'CType;;4;;1-1-1, hidden, header;;3;;2-2-2, linkToTop;;;;4-4-4,
			--div--;LLL:EXT:cms/locallang_ttc.xml:CType.I.5, layout;;10;;3-3-3, cols, bodytext;;9;nowrap:wizards[table], text_properties, pi_flexform,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access, starttime, endtime, fe_group',
			),
			'uploads' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:media;uploads,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.uploads_layout;uploadslayout,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'multimedia' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.media,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.multimediafiles;multimediafiles,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'media' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.media,
					pi_flexform; ;,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.behaviour,
					bodytext;LLL:EXT:cms/locallang_ttc.xml:bodytext.ALT.media_formlabel;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'menu' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.menu;menu,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.menu_accessibility;menu_accessibility,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
				'subtype_value_field' => 'menu_type',
				'subtypes_excludelist' => array(
					2 => 'pages',
				),
			),
			'mailform' => array(
				'showitem' => '
	CType;;4;;1-1-1,
	hidden,
	header;;3;;2-2-2,
	linkToTop;;;;3-3-3,
	--div--;LLL:EXT:cms/locallang_ttc.xml:CType.I.8,
	bodytext;LLL:EXT:cms/locallang_ttc.php:bodytext.ALT.mailform;;nowrap:wizards[forms];3-3-3,
	--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
	starttime,
	endtime,
	fe_group
',
			),
			'search' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.behaviour,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.searchform;searchform,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'shortcut' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.shortcut_formlabel,
					records;LLL:EXT:cms/locallang_ttc.xml:records_formlabel,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'list' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.plugin,
					list_type;LLL:EXT:cms/locallang_ttc.xml:list_type_formlabel,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.behaviour,
					select_key;LLL:EXT:cms/locallang_ttc.xml:select_key_formlabel,
					pages;LLL:EXT:cms/locallang_ttc.xml:pages.ALT.list_formlabel,
					recursive,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
				'subtype_value_field' => 'list_type',
				'subtypes_excludelist' => array(
					3 => 'layout',
					2 => 'layout',
					5 => 'layout',
					9 => 'layout',
					0 => 'layout',
					6 => 'layout',
					7 => 'layout',
					1 => 'layout',
					8 => 'layout',
					11 => 'layout',
					20 => 'layout',
					21 => 'layout',
				),
			),
			'div' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.div_formlabel,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'html' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
					header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.html_formlabel,
					bodytext,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended',
			),
			'login' => array(
				'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
													--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.header;header,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.plugin,
													pi_flexform;;;;1-1-1,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
													--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
													--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.appearance,
													--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.behaviour,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => 'starttime, endtime',
			),
			2 => array(
				'showitem' => 'imagecols, image_noRows, imageborder',
			),
			3 => array(
				'showitem' => 'header_position, header_layout, header_link, date',
			),
			4 => array(
				'showitem' => 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, sectionIndex',
			),
			5 => array(
				'showitem' => 'imagecaption_position',
			),
			6 => array(
				'showitem' => 'imagewidth,image_link',
			),
			7 => array(
				'showitem' => 'image_link, image_zoom',
				'canNotCollapse' => 1,
			),
			8 => array(
				'showitem' => 'layout',
			),
			9 => array(
				'showitem' => 'text_align,text_face,text_size,text_color',
			),
			10 => array(
				'showitem' => 'table_bgColor, table_border, table_cellspacing, table_cellpadding',
			),
			11 => array(
				'showitem' => 'image_compression, image_effects, image_frames',
				'canNotCollapse' => 1,
			),
			12 => array(
				'showitem' => 'recursive',
			),
			13 => array(
				'showitem' => 'imagewidth, imageheight',
				'canNotCollapse' => 1,
			),
			14 => array(
				'showitem' => 'sys_language_uid, l18n_parent, colPos',
			),
			'general' => array(
				'showitem' => 'CType;LLL:EXT:cms/locallang_ttc.xml:CType_formlabel, colPos;LLL:EXT:cms/locallang_ttc.xml:colPos_formlabel, sys_language_uid;LLL:EXT:cms/locallang_ttc.xml:sys_language_uid_formlabel',
				'canNotCollapse' => 1,
			),
			'header' => array(
				'showitem' => 'header;LLL:EXT:cms/locallang_ttc.xml:header_formlabel, --linebreak--, header_layout;LLL:EXT:cms/locallang_ttc.xml:header_layout_formlabel, header_position;LLL:EXT:cms/locallang_ttc.xml:header_position_formlabel, date;LLL:EXT:cms/locallang_ttc.xml:date_formlabel, --linebreak--, header_link;LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
				'canNotCollapse' => 1,
			),
			'headers' => array(
				'showitem' => 'header;LLL:EXT:cms/locallang_ttc.xml:header_formlabel, --linebreak--, header_layout;LLL:EXT:cms/locallang_ttc.xml:header_layout_formlabel, header_position;LLL:EXT:cms/locallang_ttc.xml:header_position_formlabel, date;LLL:EXT:cms/locallang_ttc.xml:date_formlabel, --linebreak--, header_link;LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel, --linebreak--, subheader;LLL:EXT:cms/locallang_ttc.xml:subheader_formlabel',
				'canNotCollapse' => 1,
			),
			'multimediafiles' => array(
				'showitem' => 'multimedia;LLL:EXT:cms/locallang_ttc.xml:multimedia_formlabel, bodytext;LLL:EXT:cms/locallang_ttc.xml:bodytext.ALT.multimedia_formlabel;;nowrap',
				'canNotCollapse' => 1,
			),
			'imagelinks' => array(
				'showitem' => 'image_zoom;LLL:EXT:cms/locallang_ttc.xml:image_zoom_formlabel',
				'canNotCollapse' => 1,
			),
			'image_accessibility' => array(
				'showitem' => 'altText;LLL:EXT:cms/locallang_ttc.xml:altText_formlabel, titleText;LLL:EXT:cms/locallang_ttc.xml:titleText_formlabel, --linebreak--, longdescURL;LLL:EXT:cms/locallang_ttc.xml:longdescURL_formlabel',
				'canNotCollapse' => 1,
			),
			'image_settings' => array(
				'showitem' => 'imagewidth;LLL:EXT:cms/locallang_ttc.xml:imagewidth_formlabel, imageheight;LLL:EXT:cms/locallang_ttc.xml:imageheight_formlabel, imageborder;LLL:EXT:cms/locallang_ttc.xml:imageborder_formlabel, --linebreak--, image_compression;LLL:EXT:cms/locallang_ttc.xml:image_compression_formlabel, image_effects;LLL:EXT:cms/locallang_ttc.xml:image_effects_formlabel, image_frames;LLL:EXT:cms/locallang_ttc.xml:image_frames_formlabel',
				'canNotCollapse' => 1,
			),
			'imageblock' => array(
				'showitem' => 'imageorient;LLL:EXT:cms/locallang_ttc.xml:imageorient_formlabel, imagecols;LLL:EXT:cms/locallang_ttc.xml:imagecols_formlabel, --linebreak--, image_noRows;LLL:EXT:cms/locallang_ttc.xml:image_noRows_formlabel, imagecaption_position;LLL:EXT:cms/locallang_ttc.xml:imagecaption_position_formlabel',
				'canNotCollapse' => 1,
			),
			'uploads' => array(
				'showitem' => 'media;LLL:EXT:cms/locallang_ttc.xml:media.ALT.uploads_formlabel, --linebreak--, file_collections;LLL:EXT:cms/locallang_ttc.xml:file_collections.ALT.uploads_formlabel, --linebreak--, filelink_sorting, target',
				'canNotCollapse' => 1,
			),
			'mailform' => array(
				'showitem' => 'pages;LLL:EXT:cms/locallang_ttc.xml:pages.ALT.mailform, --linebreak--, subheader;LLL:EXT:cms/locallang_ttc.xml:subheader.ALT.mailform_formlabel',
				'canNotCollapse' => 1,
			),
			'searchform' => array(
				'showitem' => 'pages;LLL:EXT:cms/locallang_ttc.xml:pages.ALT.searchform',
				'canNotCollapse' => 1,
			),
			'menu' => array(
				'showitem' => 'menu_type;LLL:EXT:cms/locallang_ttc.xml:menu_type_formlabel, --linebreak--, pages;LLL:EXT:cms/locallang_ttc.xml:pages.ALT.menu_formlabel',
				'canNotCollapse' => 1,
			),
			'menu_accessibility' => array(
				'showitem' => 'accessibility_title;LLL:EXT:cms/locallang_ttc.xml:menu.ALT.accessibility_title_formlabel, --linebreak--, accessibility_bypass;LLL:EXT:cms/locallang_ttc.xml:menu.ALT.accessibility_bypass_formlabel, accessibility_bypass_text;LLL:EXT:cms/locallang_ttc.xml:menu.ALT.accessibility_bypass_text_formlabel',
				'canNotCollapse' => 1,
			),
			'visibility' => array(
				'showitem' => 'hidden;LLL:EXT:cms/locallang_ttc.xml:hidden_formlabel, sectionIndex;LLL:EXT:cms/locallang_ttc.xml:sectionIndex_formlabel, linkToTop;LLL:EXT:cms/locallang_ttc.xml:linkToTop_formlabel',
				'canNotCollapse' => 1,
			),
			'access' => array(
				'showitem' => 'starttime;LLL:EXT:cms/locallang_ttc.xml:starttime_formlabel, endtime;LLL:EXT:cms/locallang_ttc.xml:endtime_formlabel, --linebreak--, fe_group;LLL:EXT:cms/locallang_ttc.xml:fe_group_formlabel',
				'canNotCollapse' => 1,
			),
			'frames' => array(
				'showitem' => 'layout;LLL:EXT:cms/locallang_ttc.xml:layout_formlabel, spaceBefore;LLL:EXT:cms/locallang_ttc.xml:spaceBefore_formlabel, spaceAfter;LLL:EXT:cms/locallang_ttc.xml:spaceAfter_formlabel, section_frame;LLL:EXT:cms/locallang_ttc.xml:section_frame_formlabel',
				'canNotCollapse' => 1,
			),
			'textlayout' => array(
				'showitem' => 'text_align;LLL:EXT:cms/locallang_ttc.xml:text_align_formlabel, text_face;LLL:EXT:cms/locallang_ttc.xml:text_face_formlabel, text_size;LLL:EXT:cms/locallang_ttc.xml:text_size_formlabel, text_color;LLL:EXT:cms/locallang_ttc.xml:text_color_formlabel, --linebreak--, text_properties;LLL:EXT:cms/locallang_ttc.xml:text_properties_formlabel',
				'canNotCollapse' => 1,
			),
			'tablelayout' => array(
				'showitem' => 'table_bgColor;LLL:EXT:cms/locallang_ttc.xml:table_bgColor_formlabel, table_border;LLL:EXT:cms/locallang_ttc.xml:table_border_formlabel, table_cellspacing;LLL:EXT:cms/locallang_ttc.xml:table_cellspacing_formlabel, table_cellpadding;LLL:EXT:cms/locallang_ttc.xml:table_cellpadding_formlabel',
				'canNotCollapse' => 1,
			),
			'uploadslayout' => array(
				'showitem' => 'filelink_size;LLL:EXT:cms/locallang_ttc.xml:filelink_size_formlabel',
				'canNotCollapse' => 1,
			),
		),
	),
	'tx_extensionmanager_domain_model_extension' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xml:tx_extensionmanager_domain_model_extension',
			'label' => 'uid',
			'default_sortby' => '',
			'hideTable' => TRUE,
		),
		'interface' => array(
			'showRecordFieldList' => 'extension_key,version,integer_version,title,description,state,category,last_updated,update_comment,author_name,author_email,md5hash,serialized_dependencies',
		),
		'columns' => array(
			'extension_key' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.extensionkey',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'version' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.version',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'alldownloadcounter' => array(
				'config' => array(
					'type' => 'passthrough',
				),
			),
			'integer_version' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.integerversion',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'title' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.title',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'description' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.description',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
					'rows' => '5',
				),
			),
			'state' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.state',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'range' => array(
						'lower' => 0,
						'upper' => 1000,
					),
					'eval' => 'int',
				),
			),
			'category' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.category',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'range' => array(
						'lower' => 0,
						'upper' => 1000,
					),
					'eval' => 'int',
				),
			),
			'last_updated' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.lastupdated',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'eval' => 'datetime',
				),
			),
			'update_comment' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.updatecomment',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
					'rows' => '5',
				),
			),
			'author_name' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.authorname',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'author_email' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.authoremail',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'current_version' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.currentversion',
				'config' => array(
					'type' => 'check',
					'size' => '1',
				),
			),
			'review_state' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.reviewstate',
				'config' => array(
					'type' => 'check',
					'size' => '1',
				),
			),
			'md5hash' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.md5hash',
				'config' => array(
					'type' => 'input',
					'size' => '1',
				),
			),
			'serialized_dependencies' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_extension.serializedDependencies',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
		),
		'types' => array(
			array(
				'showitem' => 'extensionkey;;;;1-1-1, version, integer_version, title;;;;2-2-2, description;;;;3-3-3, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => '',
			),
		),
	),
	'tx_extensionmanager_domain_model_repository' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xml:tx_extensionmanager_domain_model_repository',
			'label' => 'uid',
			'default_sortby' => '',
			'hideTable' => TRUE,
		),
		'interface' => array(
			'showRecordFieldList' => 'title,description,wsdl_url_mirror_list_url,last_update,extension_count',
		),
		'columns' => array(
			'title' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_repository.title',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'description' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_repository.description',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'wsdl_url' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_repository.wsdlUrl',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'mirror_list_url' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_repository.mirrorListUrl',
				'config' => array(
					'type' => 'text',
					'cols' => '30',
				),
			),
			'last_update' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_repository.lastUpdate',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
			'extension_count' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xml:tx_extensionmanager_domain_model_repository.extensionCount',
				'config' => array(
					'type' => 'input',
					'size' => '30',
				),
			),
		),
		'types' => array(
			array(
				'showitem' => 'title;;;;1-1-1, description;;;;1-1-1, wsdl_url, mirror_list_url, last_update, extension_count',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => '',
			),
		),
	),
	'sys_note' => array(
		'ctrl' => array(
			'label' => 'subject',
			'default_sortby' => 'ORDER BY crdate',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser',
			'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
			'delete' => 'deleted',
			'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
			'iconfile' => 'sysext/sys_note/ext_icon.gif',
			'sortby' => 'sorting',
		),
		'interface' => array(
			'showRecordFieldList' => 'category,subject,message,personal',
		),
		'columns' => array(
			'category' => array(
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.category',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							'0',
						),
						array(
							'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
							'1',
							'sysext/t3skin/icons/ext/sys_note/icon-instruction.png',
						),
						array(
							'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
							'3',
							'sysext/t3skin/icons/ext/sys_note/icon-note.png',
						),
						array(
							'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
							'4',
							'sysext/t3skin/icons/ext/sys_note/icon-todo.png',
						),
						array(
							'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
							'2',
							'sysext/t3skin/icons/ext/sys_note/icon-template.png',
						),
					),
					'default' => '0',
				),
			),
			'subject' => array(
				'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
				'config' => array(
					'type' => 'input',
					'size' => '40',
					'max' => '256',
				),
			),
			'message' => array(
				'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
				'config' => array(
					'type' => 'text',
					'cols' => '40',
					'rows' => '15',
				),
			),
			'personal' => array(
				'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
				'config' => array(
					'type' => 'check',
				),
			),
		),
		'types' => array(
			array(
				'showitem' => 'category;;;;2-2-2, personal, subject;;;;3-3-3, message',
			),
		),
	),
	'tx_rtehtmlarea_acronym' => array(
		'ctrl' => array(
			'title' => 'LLL:EXT:rtehtmlarea/locallang_db.xml:tx_rtehtmlarea_acronym',
			'label' => 'term',
			'default_sortby' => 'ORDER BY term',
			'sortby' => 'sorting',
			'delete' => 'deleted',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'iconfile' => 'sysext/rtehtmlarea/extensions/Acronym/skin/images/acronym.gif',
		),
		'interface' => array(
			'showRecordFieldList' => 'hidden,sys_language_uid,term,acronym',
		),
		'columns' => array(
			'hidden' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
				'config' => array(
					'type' => 'check',
					'default' => '0',
				),
			),
			'starttime' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
				'config' => array(
					'type' => 'input',
					'size' => '8',
					'max' => '20',
					'eval' => 'date',
					'default' => '0',
					'checkbox' => '0',
				),
			),
			'endtime' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
				'config' => array(
					'type' => 'input',
					'size' => '8',
					'max' => '20',
					'eval' => 'date',
					'checkbox' => '0',
					'default' => '0',
					'range' => array(
						'upper' => 1609369200,
						'lower' => 1377036000,
					),
				),
			),
			'sys_language_uid' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
				'config' => array(
					'type' => 'select',
					'foreign_table' => 'sys_language',
					'foreign_table_where' => 'ORDER BY sys_language.title',
					'items' => array(
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
							'-1',
						),
						array(
							'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
							'0',
						),
					),
				),
			),
			'type' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:rtehtmlarea/locallang_db.xml:tx_rtehtmlarea_acronym.type',
				'config' => array(
					'type' => 'radio',
					'items' => array(
						array(
							'LLL:EXT:rtehtmlarea/locallang_db.xml:tx_rtehtmlarea_acronym.type.I.1',
							'2',
						),
						array(
							'LLL:EXT:rtehtmlarea/locallang_db.xml:tx_rtehtmlarea_acronym.type.I.0',
							'1',
						),
					),
					'default' => '2',
				),
			),
			'term' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:rtehtmlarea/locallang_db.xml:tx_rtehtmlarea_acronym.term',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'eval' => 'trim,required',
				),
			),
			'acronym' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:rtehtmlarea/locallang_db.xml:tx_rtehtmlarea_acronym.acronym',
				'config' => array(
					'type' => 'input',
					'size' => '30',
					'eval' => 'trim,required',
				),
			),
			'static_lang_isocode' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:rtehtmlarea/locallang_db.xml:tx_rtehtmlarea_acronym.static_lang_isocode',
				'displayCond' => 'EXT:static_info_tables:LOADED:true',
				'config' => array(
					'type' => 'select',
					'items' => array(
						array(
							'',
							0,
						),
					),
					'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
					'itemsProcFunc_config' => array(
						'table' => 'static_languages',
						'indexField' => 'uid',
						'prependHotlist' => 1,
					),
					'size' => 1,
					'minitems' => 0,
					'maxitems' => 1,
				),
			),
		),
		'types' => array(
			array(
				'showitem' => 'hidden;;1;;1-1-1, sys_language_uid, type, term, acronym, static_lang_isocode',
			),
		),
		'palettes' => array(
			1 => array(
				'showitem' => 'starttime, endtime',
			),
		),
	),
);
#