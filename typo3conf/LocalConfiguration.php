<?php
return array(
	'BE' => array(
		'disable_exec_function' => 0,
		'installToolPassword' => '5f4dcc3b5aa765d61d8327deb882cf99',
		'loginSecurityLevel' => 'normal',
	),
	'DB' => array(
		'database' => 'c25connectyou',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'web2.webshell.de',
		'password' => 'x5ums!99O',
		'username' => 'c25hugifalkner',
	),
	'EXT' => array(
		'extConf' => array(
			'connectyou' => 'a:0:{}',
			'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
			'ig_ldap_sso_auth' => 'a:24:{s:18:"checkConfiguration";s:1:"0";s:21:"throwExceptionAtLogin";s:1:"1";s:16:"uidConfiguration";s:1:"1";s:22:"forceLowerCaseUsername";s:1:"0";s:28:"evaluateGroupsFromMembership";s:1:"0";s:26:"enableBELDAPAuthentication";s:1:"0";s:16:"TYPO3BEUserExist";s:1:"0";s:10:"BEfailsafe";s:1:"0";s:27:"TYPO3BEGroupsNotSynchronize";s:1:"0";s:14:"assignBEGroups";s:1:"0";s:12:"keepBEGroups";s:1:"0";s:26:"updateAdminAttribForGroups";s:1:"0";s:20:"requiredLDAPBEGroups";s:1:"0";s:26:"enableFELDAPAuthentication";s:1:"0";s:31:"TYPO3FEDeleteUserIfNoLDAPGroups";s:1:"0";s:32:"TYPO3FEDeleteUserIfNoTYPO3Groups";s:1:"0";s:17:"TYPO3FEGroupExist";s:1:"0";s:20:"requiredLDAPFEGroups";s:1:"0";s:27:"TYPO3FEGroupsNotSynchronize";s:1:"0";s:14:"assignFEGroups";s:1:"0";s:12:"keepFEGroups";s:1:"0";s:25:"enableFECASAuthentication";s:1:"0";s:26:"enableFetchUserIfNoSession";s:1:"0";s:18:"DeleteCookieLogout";s:1:"0";}',
			'iglib' => 'a:0:{}',
			'saltedpasswords' => 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}',
		),
		'extListArray' => array(
			'info',
			'perm',
			'func',
			'filelist',
			'about',
			'version',
			'tsconfig_help',
			'context_help',
			'extra_page_cm_options',
			'impexp',
			'sys_note',
			'tstemplate',
			'tstemplate_ceditor',
			'tstemplate_info',
			'tstemplate_objbrowser',
			'tstemplate_analyzer',
			'func_wizards',
			'wizard_crpages',
			'wizard_sortpages',
			'lowlevel',
			'install',
			'belog',
			'beuser',
			'aboutmodules',
			'setup',
			'taskcenter',
			'info_pagetsconfig',
			'viewpage',
			'rtehtmlarea',
			'css_styled_content',
			't3skin',
			't3editor',
			'reports',
			'felogin',
			'form',
			'rsaauth',
			'saltedpasswords',
			'extension_builder',
			'connectyou',
			'iglib',
		),
	),
	'FE' => array(
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'gdlib_png' => 1,
		'im' => 0,
		'im_combine_filename' => '',
		'im_path' => '',
		'im_path_lzw' => '',
	),
	'SYS' => array(
		'compat_version' => '6.1',
		'encryptionKey' => '4940e2114f6536f759f2352d04cd95f6437650e1a6e859c3b04a53714d1f75646cc19824f7509e7c5d66e94146a724b4',
		'sitename' => 'Connect You',
	),
);
?>