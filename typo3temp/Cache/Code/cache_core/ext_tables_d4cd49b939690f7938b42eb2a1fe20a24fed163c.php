<?php
/**
 * Compiled ext_tables.php cache file
 */

global $T3_SERVICES, $T3_VAR, $TYPO3_CONF_VARS;
global $TBE_MODULES, $TBE_MODULES_EXT, $TCA;
global $PAGES_TYPES, $TBE_STYLES, $FILEICONS;
global $_EXTKEY;

/**
 * Extension: core
 * File: C:/xampp/htdocs/typo3/typo3/sysext/core/ext_tables.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/**
 * $GLOBALS['PAGES_TYPES'] defines the various types of pages (field: doktype) the system
 * can handle and what restrictions may apply to them.
 * Here you can set the icon and especially you can define which tables are
 * allowed on a certain pagetype (doktype)
 * NOTE: The 'default' entry in the $GLOBALS['PAGES_TYPES'] array is the 'base' for all
 * types, and for every type the entries simply overrides the entries in the 'default' type!
 */
$GLOBALS['PAGES_TYPES'] = array(
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_LINK => array(),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SHORTCUT => array(),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_BE_USER_SECTION => array(
		'type' => 'web',
		'allowedTables' => '*'
	),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_MOUNTPOINT => array(),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SPACER => array(
		'type' => 'sys'
	),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SYSFOLDER => array(
		//  Doktype 254 is a 'Folder' - a general purpose storage folder for whatever you like.
		// In CMS context it's NOT a viewable page. Can contain any element.
		'type' => 'sys',
		'allowedTables' => '*'
	),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_RECYCLER => array(
		// Doktype 255 is a recycle-bin.
		'type' => 'sys',
		'allowedTables' => '*'
	),
	'default' => array(
		'type' => 'web',
		'allowedTables' => 'pages',
		'onlyAllowedTables' => '0'
	),
);

/**
 * $GLOBALS['TCA']:
 * This array configures TYPO3 to work with the tables from the database by
 * assigning meta information about data types, relations etc. The global
 * variable $TCA will contain the information needed to recognize and
 * render each table in the backend
 * See documentation 'Inside TYPO3' for the syntax and list of
 * required tables/fields!
 *
 * The tables configured in this document
 * is the required minimum set of tables/field that any TYPO3 system MUST have.
 * These tables are therefore a part of the TYPO3 core.
 * The SQL definitions of these tables (and some more which are not defined in
 * $TCA) is found in the file "ext_tables.sql". Only "ctrl" part is defined and
 * the columns are defined in detail in the associated file.
 *
 * NOTE: The (default) icon for a table is defined 1) as a giffile named
 * 'gfx/i/[tablename].gif' or 2) as the value of [table][ctrl][iconfile]
 * NOTE: [table][ctrl][rootLevel] goes NOT for pages. Apart from that if
 * rootLevel is TRUE, records can ONLY be created on rootLevel. If it's
 * FALSE records can ONLY be created OUTSIDE rootLevel
 */

// If the compat version is less than 4.2, pagetype 2 ("Advanced")
// and pagetype 5 ("Not in menu") are added to TCA.
if (!\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('4.2')) {
	// Merging in CMS doktypes
	array_splice($GLOBALS['TCA']['pages']['columns']['doktype']['config']['items'], 2, 0, array(
		array(
			'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.0',
			'2',
			'i/pages.gif'
		),
		array(
			'LLL:EXT:cms/locallang_tca.xlf:pages.doktype.I.3',
			'5',
			'i/pages_notinmenu.gif'
		)
	));
	// Set the doktype 1 ("Standard") to show less fields
	$GLOBALS['TCA']['pages']['types'][1] = array(
		// standard
		'showitem' => 'doktype;;2;;1-1-1, hidden, nav_hide, title;;3;;2-2-2, subtitle,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
				starttime, endtime, fe_group, extendToSubpages,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.options,
				TSconfig;;6;nowrap;4-4-4, storage_pid;;7, l18n_cfg, backend_layout;;8,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
	'
	);
	// Add doktype 2 ("Advanced")
	$GLOBALS['TCA']['pages']['types'][2] = array(
		'showitem' => 'doktype;;2;;1-1-1, hidden, nav_hide, title;;3;;2-2-2, subtitle, nav_title,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
				abstract;;5;;3-3-3, keywords, description,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.files,
				media,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
				starttime, endtime, fe_login_mode, fe_group, extendToSubpages,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.options,
				TSconfig;;6;nowrap;6-6-6, storage_pid;;7, l18n_cfg, module, content_from_pid, backend_layout;;8,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.extended,
	'
	);
}

// Keep old code (pre-FAL) for installations that haven't upgraded yet. please remove this code in TYPO3 6.2
// @deprecated since TYPO3 6.0, please remove at earliest in TYPO3 6.2
if (
	(
		!isset($GLOBALS['TYPO3_CONF_VARS']['INSTALL']['wizardDone']['TYPO3\\CMS\\Install\\Updates\\TceformsUpdateWizard'])
		|| !\TYPO3\CMS\Core\Utility\GeneralUtility::inList($GLOBALS['TYPO3_CONF_VARS']['INSTALL']['wizardDone']['TYPO3\\CMS\\Install\\Updates\\TceformsUpdateWizard'], 'pages:media')
	)
	&& !\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('6.0')
) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::deprecationLog(
		'This installation hasn\'t been migrated to FAL for the field $GLOBALS[TCA][pages][columns][media] yet. Please do so before TYPO3 v7.'
	);
	// existing installation and no upgrade wizard was executed - and files haven't been merged: use the old code
	$GLOBALS['TCA']['pages']['columns']['media']['config'] = array(
		'type' => 'group',
		'internal_type' => 'file',
		'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'] . ',html,htm,ttf,txt,css',
		'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
		'uploadfolder' => 'uploads/media',
		'show_thumbs' => '1',
		'size' => '3',
		'maxitems' => '100',
		'minitems' => '0'
	);
}

// Populate available languages
/** @var $locales \TYPO3\CMS\Core\Localization\Locales */
$locales = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Localization\\Locales');
$languageItems = $locales->getLanguages();
unset($languageItems['default']);
asort($languageItems);
foreach ($languageItems as $locale => $name) {
	$GLOBALS['TCA']['be_users']['columns']['lang']['config']['items'][] = array($name, $locale);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_category');

/** @var \TYPO3\CMS\Core\Resource\Driver\DriverRegistry $registry */
$registry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry');
$registry->addDriversToTCA();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_file_reference');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_file_collection');

/**
 * $TBE_MODULES contains the structure of the backend modules as they are
 * arranged in main- and sub-modules. Every entry in this array represents a
 * menu item on either first (key) or second level (value from list) in the
 * left menu in the TYPO3 backend
 * For information about adding modules to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_MODULES'] = array(
	'web' => 'list',
	'file' => '',
	'user' => '',
	'tools' => '',
	'help' => ''
);


// Register the page tree core navigation component
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addCoreNavigationComponent('web', 'typo3-pagetree');


/**
 * $TBE_STYLES configures backend styles and colors; Basically this contains
 * all the values that can be used to create new skins for TYPO3.
 * For information about making skins to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_STYLES'] = array(
	'colorschemes' => array(
		'0' => '#E4E0DB,#CBC7C3,#EDE9E5'
	),
	'borderschemes' => array(
		'0' => array('border:solid 1px black;', 5)
	)
);


/**
 * Setting up $TCA_DESCR - Context Sensitive Help (CSH)
 * For information about using the CSH API in TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:lang/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_users', 'EXT:lang/locallang_csh_be_users.xml');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_groups', 'EXT:lang/locallang_csh_be_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_filemounts', 'EXT:lang/locallang_csh_sysfilem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_language', 'EXT:lang/locallang_csh_syslang.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_news', 'EXT:lang/locallang_csh_sysnews.xlf');
// General Core
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_csh_corebe', 'EXT:lang/locallang_csh_corebe.xlf');
// Extension manager
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_tools_em', 'EXT:lang/locallang_csh_em.xlf');
// Web > Info
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:lang/locallang_csh_web_info.xlf');
// Web > Func
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:lang/locallang_csh_web_func.xlf');
// Labels for TYPO3 4.5 and greater.
// These labels override the ones set above, while still falling back to the original labels
// if no translation is available.
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:lang/locallang_csh_pages.xlf'][] = 'EXT:lang/4.5/locallang_csh_pages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:lang/locallang_csh_corebe.xlf'][] = 'EXT:lang/4.5/locallang_csh_corebe.xlf';


/**
 * $FILEICONS defines icons for the various file-formats
 */
$GLOBALS['FILEICONS'] = array(
	'txt' => 'txt.gif',
	'pdf' => 'pdf.gif',
	'doc' => 'doc.gif',
	'ai' => 'ai.gif',
	'bmp' => 'bmp.gif',
	'tif' => 'tif.gif',
	'htm' => 'htm.gif',
	'html' => 'html.gif',
	'pcd' => 'pcd.gif',
	'gif' => 'gif.gif',
	'jpg' => 'jpg.gif',
	'jpeg' => 'jpg.gif',
	'mpg' => 'mpg.gif',
	'mpeg' => 'mpeg.gif',
	'exe' => 'exe.gif',
	'com' => 'exe.gif',
	'zip' => 'zip.gif',
	'tgz' => 'zip.gif',
	'gz' => 'zip.gif',
	'php3' => 'php3.gif',
	'php4' => 'php3.gif',
	'php5' => 'php3.gif',
	'php6' => 'php3.gif',
	'php' => 'php3.gif',
	'ppt' => 'ppt.gif',
	'ttf' => 'ttf.gif',
	'pcx' => 'pcx.gif',
	'png' => 'png.gif',
	'tga' => 'tga.gif',
	'class' => 'java.gif',
	'sxc' => 'sxc.gif',
	'sxw' => 'sxw.gif',
	'xls' => 'xls.gif',
	'swf' => 'swf.gif',
	'swa' => 'flash.gif',
	'dcr' => 'flash.gif',
	'wav' => 'wav.gif',
	'mp3' => 'mp3.gif',
	'avi' => 'avi.gif',
	'au' => 'au.gif',
	'mov' => 'mov.gif',
	'3ds' => '3ds.gif',
	'csv' => 'csv.gif',
	'ico' => 'ico.gif',
	'max' => 'max.gif',
	'ps' => 'ps.gif',
	'tmpl' => 'tmpl.gif',
	'fh3' => 'fh3.gif',
	'inc' => 'inc.gif',
	'mid' => 'mid.gif',
	'psd' => 'psd.gif',
	'xml' => 'xml.gif',
	'rtf' => 'rtf.gif',
	't3x' => 't3x.gif',
	't3d' => 't3d.gif',
	'cdr' => 'cdr.gif',
	'dtd' => 'dtd.gif',
	'sgml' => 'sgml.gif',
	'ani' => 'ani.gif',
	'css' => 'css.gif',
	'eps' => 'eps.gif',
	'js' => 'js.gif',
	'wrl' => 'wrl.gif',
	'default' => 'default.gif'
);


/**
 * Backend sprite icon-names
 */
$GLOBALS['TBE_STYLES']['spriteIconApi']['coreSpriteImageNames'] = array(
	'actions-document-close',
	'actions-document-duplicates-select',
	'actions-document-edit-access',
	'actions-document-export-csv',
	'actions-document-export-t3d',
	'actions-document-history-open',
	'actions-document-import-t3d',
	'actions-document-info',
	'actions-document-localize',
	'actions-document-move',
	'actions-document-new',
	'actions-document-open',
	'actions-document-open-read-only',
	'actions-document-paste-after',
	'actions-document-paste-into',
	'actions-document-save',
	'actions-document-save-close',
	'actions-document-save-new',
	'actions-document-save-view',
	'actions-document-select',
	'actions-document-synchronize',
	'actions-document-view',
	'actions-edit-add',
	'actions-edit-copy',
	'actions-edit-copy-release',
	'actions-edit-cut',
	'actions-edit-cut-release',
	'actions-edit-delete',
	'actions-edit-hide',
	'actions-edit-insert-default',
	'actions-edit-localize-status-high',
	'actions-edit-localize-status-low',
	'actions-edit-merge-localization',
	'actions-edit-pick-date',
	'actions-edit-rename',
	'actions-edit-restore',
	'actions-edit-undelete-edit',
	'actions-edit-undo',
	'actions-edit-unhide',
	'actions-edit-upload',
	'actions-input-clear',
	'actions-insert-record',
	'actions-insert-reference',
	'actions-message-error-close',
	'actions-message-information-close',
	'actions-message-notice-close',
	'actions-message-ok-close',
	'actions-message-warning-close',
	'actions-move-down',
	'actions-move-left',
	'actions-move-move',
	'actions-move-right',
	'actions-move-to-bottom',
	'actions-move-to-top',
	'actions-move-up',
	'actions-page-move',
	'actions-page-new',
	'actions-page-open',
	'actions-selection-delete',
	'actions-system-backend-user-emulate',
	'actions-system-backend-user-switch',
	'actions-system-cache-clear',
	'actions-system-cache-clear-impact-high',
	'actions-system-cache-clear-impact-low',
	'actions-system-cache-clear-impact-medium',
	'actions-system-cache-clear-rte',
	'actions-system-extension-configure',
	'actions-system-extension-documentation',
	'actions-system-extension-download',
	'actions-system-extension-import',
	'actions-system-extension-install',
	'actions-system-extension-sqldump',
	'actions-system-extension-uninstall',
	'actions-system-extension-update',
	'actions-system-help-open',
	'actions-system-list-open',
	'actions-system-options-view',
	'actions-system-pagemodule-open',
	'actions-system-refresh',
	'actions-system-shortcut-new',
	'actions-system-tree-search-open',
	'actions-system-typoscript-documentation',
	'actions-system-typoscript-documentation-open',
	'actions-template-new',
	'actions-version-document-remove',
	'actions-version-page-open',
	'actions-version-swap-version',
	'actions-version-swap-workspace',
	'actions-version-workspace-preview',
	'actions-version-workspace-sendtostage',
	'actions-view-go-back',
	'actions-view-go-down',
	'actions-view-go-forward',
	'actions-view-go-up',
	'actions-view-list-collapse',
	'actions-view-list-expand',
	'actions-view-paging-first',
	'actions-view-paging-first-disabled',
	'actions-view-paging-last',
	'actions-view-paging-last-disabled',
	'actions-view-paging-next',
	'actions-view-paging-next-disabled',
	'actions-view-paging-previous',
	'actions-view-paging-previous-disabled',
	'actions-view-table-collapse',
	'actions-view-table-expand',
	'actions-window-open',
	'apps-clipboard-images',
	'apps-clipboard-list',
	'apps-filetree-folder-add',
	'apps-filetree-folder-default',
	'apps-filetree-folder-list',
	'apps-filetree-folder-locked',
	'apps-filetree-folder-media',
	'apps-filetree-folder-news',
	'apps-filetree-folder-opened',
	'apps-filetree-folder-recycler',
	'apps-filetree-folder-temp',
	'apps-filetree-folder-user',
	'apps-filetree-mount',
	'apps-filetree-root',
	'apps-irre-collapsed',
	'apps-irre-expanded',
	'apps-pagetree-backend-user',
	'apps-pagetree-backend-user-hideinmenu',
	'apps-pagetree-collapse',
	'apps-pagetree-drag-copy-above',
	'apps-pagetree-drag-copy-below',
	'apps-pagetree-drag-move-above',
	'apps-pagetree-drag-move-below',
	'apps-pagetree-drag-move-between',
	'apps-pagetree-drag-move-into',
	'apps-pagetree-drag-new-between',
	'apps-pagetree-drag-new-inside',
	'apps-pagetree-drag-place-denied',
	'apps-pagetree-expand',
	'apps-pagetree-folder-contains-approve',
	'apps-pagetree-folder-contains-board',
	'apps-pagetree-folder-contains-fe_users',
	'apps-pagetree-folder-contains-news',
	'apps-pagetree-folder-contains-shop',
	'apps-pagetree-folder-default',
	'apps-pagetree-page-advanced',
	'apps-pagetree-page-advanced-hideinmenu',
	'apps-pagetree-page-advanced-root',
	'apps-pagetree-page-backend-users',
	'apps-pagetree-page-backend-users-hideinmenu',
	'apps-pagetree-page-backend-users-root',
	'apps-pagetree-page-default',
	'apps-pagetree-page-domain',
	'apps-pagetree-page-frontend-user',
	'apps-pagetree-page-frontend-user-hideinmenu',
	'apps-pagetree-page-frontend-user-root',
	'apps-pagetree-page-frontend-users',
	'apps-pagetree-page-frontend-users-hideinmenu',
	'apps-pagetree-page-frontend-users-root',
	'apps-pagetree-page-mountpoint',
	'apps-pagetree-page-mountpoint-hideinmenu',
	'apps-pagetree-page-mountpoint-root',
	'apps-pagetree-page-no-icon-found',
	'apps-pagetree-page-no-icon-found-hideinmenu',
	'apps-pagetree-page-no-icon-found-root',
	'apps-pagetree-page-not-in-menu',
	'apps-pagetree-page-recycler',
	'apps-pagetree-page-shortcut',
	'apps-pagetree-page-shortcut-external',
	'apps-pagetree-page-shortcut-external-hideinmenu',
	'apps-pagetree-page-shortcut-external-root',
	'apps-pagetree-page-shortcut-hideinmenu',
	'apps-pagetree-page-shortcut-root',
	'apps-pagetree-root',
	'apps-pagetree-spacer',
	'apps-tcatree-select-recursive',
	'apps-toolbar-menu-actions',
	'apps-toolbar-menu-cache',
	'apps-toolbar-menu-opendocs',
	'apps-toolbar-menu-search',
	'apps-toolbar-menu-shortcut',
	'apps-toolbar-menu-workspace',
	'mimetypes-compressed',
	'mimetypes-excel',
	'mimetypes-media-audio',
	'mimetypes-media-flash',
	'mimetypes-media-image',
	'mimetypes-media-video',
	'mimetypes-other-other',
	'mimetypes-pdf',
	'mimetypes-powerpoint',
	'mimetypes-text-css',
	'mimetypes-text-csv',
	'mimetypes-text-html',
	'mimetypes-text-js',
	'mimetypes-text-php',
	'mimetypes-text-text',
	'mimetypes-word',
	'mimetypes-x-content-divider',
	'mimetypes-x-content-domain',
	'mimetypes-x-content-form',
	'mimetypes-x-content-form-search',
	'mimetypes-x-content-header',
	'mimetypes-x-content-html',
	'mimetypes-x-content-image',
	'mimetypes-x-content-link',
	'mimetypes-x-content-list-bullets',
	'mimetypes-x-content-list-files',
	'mimetypes-x-content-login',
	'mimetypes-x-content-menu',
	'mimetypes-x-content-multimedia',
	'mimetypes-x-content-page-language-overlay',
	'mimetypes-x-content-plugin',
	'mimetypes-x-content-script',
	'mimetypes-x-content-table',
	'mimetypes-x-content-template',
	'mimetypes-x-content-template-extension',
	'mimetypes-x-content-template-static',
	'mimetypes-x-content-text',
	'mimetypes-x-content-text-picture',
	'mimetypes-x-sys_action',
	'mimetypes-x-sys_category',
	'mimetypes-x-sys_language',
	'mimetypes-x-sys_news',
	'mimetypes-x-sys_workspace',
	'mimetypes-x_belayout',
	'status-dialog-error',
	'status-dialog-information',
	'status-dialog-notification',
	'status-dialog-ok',
	'status-dialog-warning',
	'status-overlay-access-restricted',
	'status-overlay-deleted',
	'status-overlay-hidden',
	'status-overlay-icon-missing',
	'status-overlay-includes-subpages',
	'status-overlay-locked',
	'status-overlay-scheduled',
	'status-overlay-scheduled-future-end',
	'status-overlay-translated',
	'status-status-checked',
	'status-status-current',
	'status-status-edit-read-only',
	'status-status-icon-missing',
	'status-status-locked',
	'status-status-permission-denied',
	'status-status-permission-granted',
	'status-status-readonly',
	'status-status-reference-hard',
	'status-status-reference-soft',
	'status-status-sorting-asc',
	'status-status-sorting-desc',
	'status-status-sorting-light-asc',
	'status-status-sorting-light-desc',
	'status-status-workspace-draft',
	'status-system-extension-required',
	'status-user-admin',
	'status-user-backend',
	'status-user-frontend',
	'status-user-group-backend',
	'status-user-group-frontend',
	'status-version-1',
	'status-version-2',
	'status-version-3',
	'status-version-4',
	'status-version-5',
	'status-version-6',
	'status-version-7',
	'status-version-8',
	'status-version-9',
	'status-version-10',
	'status-version-11',
	'status-version-12',
	'status-version-13',
	'status-version-14',
	'status-version-15',
	'status-version-16',
	'status-version-17',
	'status-version-18',
	'status-version-19',
	'status-version-20',
	'status-version-21',
	'status-version-22',
	'status-version-23',
	'status-version-24',
	'status-version-25',
	'status-version-26',
	'status-version-27',
	'status-version-28',
	'status-version-29',
	'status-version-30',
	'status-version-31',
	'status-version-32',
	'status-version-33',
	'status-version-34',
	'status-version-35',
	'status-version-36',
	'status-version-37',
	'status-version-38',
	'status-version-39',
	'status-version-40',
	'status-version-41',
	'status-version-42',
	'status-version-43',
	'status-version-44',
	'status-version-45',
	'status-version-46',
	'status-version-47',
	'status-version-48',
	'status-version-49',
	'status-version-50',
	'status-version-no-version',
	'status-warning-in-use',
	'status-warning-lock'
);


$GLOBALS['TBE_STYLES']['spriteIconApi']['spriteIconRecordOverlayPriorities'] = array(
	'deleted',
	'hidden',
	'starttime',
	'endtime',
	'futureendtime',
	'fe_group',
	'protectedSection'
);


$GLOBALS['TBE_STYLES']['spriteIconApi']['spriteIconRecordOverlayNames'] = array(
	'hidden' => 'status-overlay-hidden',
	'fe_group' => 'status-overlay-access-restricted',
	'starttime' => 'status-overlay-scheduled',
	'endtime' => 'status-overlay-scheduled',
	'futureendtime' => 'status-overlay-scheduled-future-end',
	'readonly' => 'status-overlay-locked',
	'deleted' => 'status-overlay-deleted',
	'missing' => 'status-overlay-missing',
	'translated' => 'status-overlay-translated',
	'protectedSection' => 'status-overlay-includes-subpages'
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: cms
 * File: C:/xampp/htdocs/typo3/typo3/sysext/cms/ext_tables.php
 */

$_EXTKEY = 'cms';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'layout', 'top', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'layout/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_layout', 'EXT:cms/locallang_csh_weblayout.xml');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:cms/locallang_csh_webinfo.xml');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_info', 'tx_cms_webinfo_page', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'web_info/class.tx_cms_webinfo.php', 'LLL:EXT:cms/locallang_tca.xlf:mod_tx_cms_webinfo_page');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_info', 'tx_cms_webinfo_lang', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'web_info/class.tx_cms_webinfo_lang.php', 'LLL:EXT:cms/locallang_tca.xlf:mod_tx_cms_webinfo_lang');
}
// Add allowed records to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('pages_language_overlay,tt_content,sys_template,sys_domain,backend_layout');

if (!function_exists('user_sortPluginList')) {
	function user_sortPluginList(array &$parameters) {
		usort($parameters['items'], create_function('$item1,$item2', 'return strcasecmp($GLOBALS[\'LANG\']->sL($item1[0]),$GLOBALS[\'LANG\']->sL($item2[0]));'));
	}
}

// keep old code (pre-FAL) for installations that haven't upgraded yet. please remove this code in TYPO3 7.0
// @deprecated since TYPO3 6.0, please remove in TYPO3 7.0
// existing installation - and files are merged, nothing to do
if ((!isset($GLOBALS['TYPO3_CONF_VARS']['INSTALL']['wizardDone']['Tx_Install_Updates_File_TceformsUpdateWizard']) || !\TYPO3\CMS\Core\Utility\GeneralUtility::inList($GLOBALS['TYPO3_CONF_VARS']['INSTALL']['wizardDone']['Tx_Install_Updates_File_TceformsUpdateWizard'], 'tt_content:image')) && !\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('6.0')) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::deprecationLog('This installation hasn\'t been migrated to FAL for the field $TCA[tt_content][columns][image] yet. Please do so before TYPO3 v7.');
	// Existing installation and no upgrade wizard was executed - and files haven't been merged: use the old code
	$GLOBALS['TCA']['tt_content']['columns']['image']['config'] = array(
		'type' => 'group',
		'internal_type' => 'file',
		'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
		'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
		'uploadfolder' => 'uploads/pics',
		'show_thumbs' => '1',
		'size' => '3',
		'maxitems' => '200',
		'minitems' => '0',
		'autoSizeMax' => 40
	);
}

if ((!isset($GLOBALS['TYPO3_CONF_VARS']['INSTALL']['wizardDone']['Tx_Install_Updates_File_TceformsUpdateWizard']) || !\TYPO3\CMS\Core\Utility\GeneralUtility::inList($GLOBALS['TYPO3_CONF_VARS']['INSTALL']['wizardDone']['Tx_Install_Updates_File_TceformsUpdateWizard'], 'tt_content:media')) && !\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('6.0')) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::deprecationLog('This installation hasn\'t been migrated to FAL for the field $TCA[tt_content][columns][media] yet. Please do so before TYPO3 v7.');
	// Existing installation and no upgrade wizard was executed - and files haven't been merged: use the old code
	$GLOBALS['TCA']['tt_content']['columns']['media']['config'] = array(
		'type' => 'group',
		'internal_type' => 'file',
		'allowed' => '',
		// Must be empty for disallowed to work.
		'disallowed' => PHP_EXTENSIONS_DEFAULT,
		'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
		'uploadfolder' => 'uploads/media',
		'show_thumbs' => '1',
		'size' => '3',
		'maxitems' => '10',
		'minitems' => '0'
	);
}

// Keep old code (pre-FAL) for installations that haven't upgraded yet.
// @deprecated since TYPO3 6.0, please remove at earliest in TYPO3 6.2
// existing installation - and files are merged, nothing to do
if ((!isset($GLOBALS['TYPO3_CONF_VARS']['INSTALL']['wizardDone']['Tx_Install_Updates_File_TceformsUpdateWizard']) || !\TYPO3\CMS\Core\Utility\GeneralUtility::inList($GLOBALS['TYPO3_CONF_VARS']['INSTALL']['wizardDone']['Tx_Install_Updates_File_TceformsUpdateWizard'], 'pages_language_overlay:media')) && !\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('6.0')) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::deprecationLog('This installation hasn\'t been migrated to FAL for the field $TCA[pages_language_overlay][columns][media] yet. Please do so before TYPO3 v7.');
	// Existing installation and no upgrade wizard was executed - and files haven't been merged: use the old code
	$GLOBALS['TCA']['pages_language_overlay']['columns']['media']['config'] = array(
		'type' => 'group',
		'internal_type' => 'file',
		'allowed' => $TCA['pages']['columns']['media']['config']['allowed'],
		'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
		'uploadfolder' => 'uploads/media',
		'show_thumbs' => '1',
		'size' => '3',
		'maxitems' => '100',
		'minitems' => '0'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: lang
 * File: C:/xampp/htdocs/typo3/typo3/sysext/lang/ext_tables.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE == 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
		// Registers a Backend Module
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools', // Make module a submodule of 'tools'
		'language', // Submodule key
		'after:extensionmanager', // Position
		array(
				// An array holding the controller-action-combinations that are accessible
			'Language' => 'index, updateLanguageSelection, updateTranslation'
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod_language.xml',
		)
	);
}



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sv
 * File: C:/xampp/htdocs/typo3/typo3/sysext/sv/ext_tables.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['sv']['services'] = array(
		'title' => 'LLL:EXT:sv/reports/locallang.xml:report_title',
		'description' => 'LLL:EXT:sv/reports/locallang.xml:report_description',
		'icon' => 'EXT:sv/reports/tx_sv_report.png',
		'report' => 'TYPO3\\CMS\\Sv\\Report\\ServicesListReport'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extensionmanager
 * File: C:/xampp/htdocs/typo3/typo3/sysext/extensionmanager/ext_tables.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'extensionmanager', '', array(
			'List' => 'index,ter,showAllVersions',
			'Action' => 'toggleExtensionInstallationState,removeExtension,downloadExtensionZip,downloadExtensionData',
			'Configuration' => 'showConfigurationForm,save',
			'Download' => 'checkDependencies,installFromTer,updateExtension,updateCommentForUpdatableVersions',
			'UpdateScript' => 'show',
			'UpdateFromTer' => 'updateExtensionListFromTer',
			'UploadExtensionFile' => 'form,extract'
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xml',
		)
	);

	// Register extension status report system
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Extension Manager'][] =
		'TYPO3\\CMS\\Extensionmanager\\Report\\ExtensionStatus';

	// Register specific icon for update script button
	\TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons(
		array(
			'update-script' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/Icons/ExtensionUpdateScript.png'
		),
		$_EXTKEY
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: recordlist
 * File: C:/xampp/htdocs/typo3/typo3/sysext/recordlist/ext_tables.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath('web_list', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'list', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extbase
 * File: C:/xampp/htdocs/typo3/typo3/sysext/extbase/ext_tables.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	// register Extbase dispatcher for modules
	$TBE_MODULES['_dispatcher'][] = 'TYPO3\\CMS\\Extbase\\Core\\ModuleRunnerInterface';
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['extbase'][] = 'TYPO3\\CMS\\Extbase\\Utility\\ExtbaseRequirementsCheckUtility';
if (!isset($TCA['fe_users']['ctrl']['type'])) {
	$tempColumns = array(
		'tx_extbase_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.0', '0'),
					array('LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser', 'Tx_Extbase_Domain_Model_FrontendUser')
				),
				'size' => 1,
				'maxitems' => 1,
				'default' => '0'
			)
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumns, 1);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'tx_extbase_type');
	$TCA['fe_users']['ctrl']['type'] = 'tx_extbase_type';
}
$TCA['fe_users']['types']['Tx_Extbase_Domain_Model_FrontendUser'] = $TCA['fe_users']['types']['0'];
if (!isset($TCA['fe_groups']['ctrl']['type'])) {
	$tempColumns = array(
		'tx_extbase_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type.0', '0'),
					array('LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup', 'Tx_Extbase_Domain_Model_FrontendUserGroup')
				),
				'size' => 1,
				'maxitems' => 1,
				'default' => '0'
			)
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_groups', $tempColumns, 1);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_groups', 'tx_extbase_type');
	$TCA['fe_groups']['ctrl']['type'] = 'tx_extbase_type';
}
$TCA['fe_groups']['types']['Tx_Extbase_Domain_Model_FrontendUserGroup'] = $TCA['fe_groups']['types']['0'];
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Extbase\\Scheduler\\Task'] = array(
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:task.name',
	'description' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xml:task.description',
	'additionalFields' => 'TYPO3\\CMS\\Extbase\\Scheduler\\FieldProvider'
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: fluid
 * File: C:/xampp/htdocs/typo3/typo3/sysext/fluid/ext_tables.php
 */

$_EXTKEY = 'fluid';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid: (Optional) default ajax configuration');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: cshmanual
 * File: C:/xampp/htdocs/typo3/typo3/sysext/cshmanual/ext_tables.php
 */

$_EXTKEY = 'cshmanual';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'help',
		'cshmanual',
		'top',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: install
 * File: C:/xampp/htdocs/typo3/typo3/sysext/install/ext_tables.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath('tools_install', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('tools', 'install', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/');
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'TYPO3\\CMS\\Install\\Report\\InstallStatusReport';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = 'TYPO3\\CMS\\Install\\Report\\EnvironmentStatusReport';
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: perm
 * File: C:/xampp/htdocs/typo3/typo3/sysext/perm/ext_tables.php
 */

$_EXTKEY = 'perm';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'perm', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
	$TYPO3_CONF_VARS['BE']['AJAX']['PermissionAjaxController::dispatch'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/class.sc_mod_web_perm_ajax.php:TYPO3\\CMS\\Perm\\Controller\\PermissionAjaxController->dispatch';
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: func
 * File: C:/xampp/htdocs/typo3/typo3/sysext/func/ext_tables.php
 */

$_EXTKEY = 'func';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'func', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: filelist
 * File: C:/xampp/htdocs/typo3/typo3/sysext/filelist/ext_tables.php
 */

$_EXTKEY = 'filelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('file', 'list', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: about
 * File: C:/xampp/htdocs/typo3/typo3/sysext/about/ext_tables.php
 */

$_EXTKEY = 'about';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'help',
		'about',
		'top',
		array('About' => 'index'),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:about/ext_icon.gif',
			'labels' => 'LLL:EXT:lang/locallang_mod_help_about.xlf'
		)
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: version
 * File: C:/xampp/htdocs/typo3/typo3/sysext/version/ext_tables.php
 */

$_EXTKEY = 'version';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	if (!\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('workspaces')) {
		$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
			'name' => 'TYPO3\\CMS\\Version\\ClickMenu\\VersionClickMenu',
		);
	}
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tsconfig_help
 * File: C:/xampp/htdocs/typo3/typo3/sysext/tsconfig_help/ext_tables.php
 */

$_EXTKEY = 'tsconfig_help';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'help',
		'txtsconfighelpM1',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: context_help
 * File: C:/xampp/htdocs/typo3/typo3/sysext/context_help/ext_tables.php
 */

$_EXTKEY = 'context_help';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_groups', 'EXT:context_help/locallang_csh_fe_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_users', 'EXT:context_help/locallang_csh_fe_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:context_help/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages_language_overlay', 'EXT:context_help/locallang_csh_pageslol.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('static_template', 'EXT:context_help/locallang_csh_statictpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_domain', 'EXT:context_help/locallang_csh_sysdomain.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_storage', 'EXT:context_help/locallang_csh_sysfilestorage.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_template', 'EXT:context_help/locallang_csh_systmpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:context_help/locallang_csh_ttcontent.xlf');
// Labels for TYPO3 4.5 and greater.  These labels override the ones set above, while still falling back to the original labels if no translation is available.
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:context_help/locallang_csh_pages.xlf'][] = 'EXT:context_help/4.5/locallang_csh_pages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:context_help/locallang_csh_ttcontent.xlf'][] = 'EXT:context_help/4.5/locallang_csh_ttcontent.xlf';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extra_page_cm_options
 * File: C:/xampp/htdocs/typo3/typo3/sysext/extra_page_cm_options/ext_tables.php
 */

$_EXTKEY = 'extra_page_cm_options';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
		'name' => 'TYPO3\\CMS\\ExtraPageCmOptions\\ExtraPageContextMenuOptions',
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: impexp
 * File: C:/xampp/htdocs/typo3/typo3/sysext/impexp/ext_tables.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
		'name' => 'TYPO3\\CMS\\Impexp\\Clickmenu',
	);
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['taskcenter']['impexp']['tx_impexp_task'] = array(
		'title' => 'LLL:EXT:impexp/locallang_csh.xlf:.alttitle',
		'description' => 'LLL:EXT:impexp/locallang_csh.xlf:.description',
		'icon' => 'EXT:impexp/export.gif'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_tx_impexp', 'EXT:impexp/locallang_csh.xlf');
	// CSH labels for TYPO3 4.5 and greater.  These labels override the ones set above, while still falling back to the original labels if no translation is available.
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:impexp/locallang_csh.xml'][] = 'EXT:impexp/locallang_csh_45.xml';
	// Special context menu actions for the import/export module
	$importExportActions = '
		9000 = DIVIDER

		9100 = ITEM
		9100 {
			name = exportT3d
			label = LLL:EXT:impexp/app/locallang.xml:export
			spriteIcon = actions-document-export-t3d
			callbackAction = exportT3d
		}

		9200 = ITEM
		9200 {
			name = importT3d
			label = LLL:EXT:impexp/app/locallang.xlf:import
			spriteIcon = actions-document-import-t3d
			callbackAction = importT3d
		}
	';
	// Context menu user default configuration
	$GLOBALS['TYPO3_CONF_VARS']['BE']['defaultUserTSconfig'] .= '
		options.contextMenu.table {
			virtual_root.items {
				' . $importExportActions . '
			}

			pages_root.items {
				' . $importExportActions . '
			}

			pages.items.1000 {
				' . $importExportActions . '
			}
		}
	';
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sys_note
 * File: C:/xampp/htdocs/typo3/typo3/sysext/sys_note/ext_tables.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_note');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_note', 'EXT:sys_note/Resources/Private/Language/locallang_csh_sysnote.xlf');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tstemplate
 * File: C:/xampp/htdocs/typo3/typo3/sysext/tstemplate/ext_tables.php
 */

$_EXTKEY = 'tstemplate';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'web',
		'ts',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'ts/'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tstemplate_ceditor
 * File: C:/xampp/htdocs/typo3/typo3/sysext/tstemplate_ceditor/ext_tables.php
 */

$_EXTKEY = 'tstemplate_ceditor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		'tx_tstemplateceditor',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Controller/TypoScriptTemplateConstantEditorModuleFunctionController.php',
		'LLL:EXT:tstemplate/ts/locallang.xlf:constantEditor'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tstemplate_info
 * File: C:/xampp/htdocs/typo3/typo3/sysext/tstemplate_info/ext_tables.php
 */

$_EXTKEY = 'tstemplate_info';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		'tx_tstemplateinfo',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Controller/TypoScriptTemplateInformationModuleFunctionController.php',
		'LLL:EXT:tstemplate/ts/locallang.xlf:infoModify'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tstemplate_objbrowser
 * File: C:/xampp/htdocs/typo3/typo3/sysext/tstemplate_objbrowser/ext_tables.php
 */

$_EXTKEY = 'tstemplate_objbrowser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		'tx_tstemplateobjbrowser',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Controller/TypoScriptTemplateObjectBrowserModuleFunctionController.php',
		'LLL:EXT:tstemplate/ts/locallang.xlf:objectBrowser'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tstemplate_analyzer
 * File: C:/xampp/htdocs/typo3/typo3/sysext/tstemplate_analyzer/ext_tables.php
 */

$_EXTKEY = 'tstemplate_analyzer';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		'tx_tstemplateanalyzer',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Controller/TemplateAnalyzerModuleFunctionController.php',
		'LLL:EXT:tstemplate/ts/locallang.xlf:templateAnalyzer'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: func_wizards
 * File: C:/xampp/htdocs/typo3/typo3/sysext/func_wizards/ext_tables.php
 */

$_EXTKEY = 'func_wizards';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_func',
		'TYPO3\\CMS\\FuncWizards\\Controller\\WebFunctionWizardsBaseController',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Controller/WebFunctionWizardsBaseController.php',
		'LLL:EXT:func_wizards/locallang.xlf:mod_wizards'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:func_wizards/locallang_csh.xlf');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: wizard_crpages
 * File: C:/xampp/htdocs/typo3/typo3/sysext/wizard_crpages/ext_tables.php
 */

$_EXTKEY = 'wizard_crpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_func',
		'TYPO3\\CMS\\WizardCrpages\\Controller\\CreatePagesWizardModuleFunctionController',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Controller/CreatePagesWizardModuleFunctionController.php',
		'LLL:EXT:wizard_crpages/locallang.xlf:wiz_crMany',
		'wiz'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
		'_MOD_web_func',
		'EXT:wizard_crpages/locallang_csh.xlf'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: wizard_sortpages
 * File: C:/xampp/htdocs/typo3/typo3/sysext/wizard_sortpages/ext_tables.php
 */

$_EXTKEY = 'wizard_sortpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_func',
		'TYPO3\\CMS\\WizardSortPages\\View\\SortPagesWizardModuleFunction',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/View/SortPagesWizardModuleFunction.php',
		'LLL:EXT:wizard_sortpages/locallang.php:wiz_sort',
		'wiz'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
		'_MOD_web_func',
		'EXT:wizard_sortpages/locallang_csh.xlf'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: lowlevel
 * File: C:/xampp/htdocs/typo3/typo3/sysext/lowlevel/ext_tables.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('tools', 'dbint', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'dbint/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('tools', 'config', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'config/');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: belog
 * File: C:/xampp/htdocs/typo3/typo3/sysext/belog/ext_tables.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register backend modules, but not in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	// Module Web->Info->Log
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_info',
		'TYPO3\\CMS\\Belog\\Module\\BackendLogModuleBootstrap',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Module/BackendLogModuleBootstrap.php',
		'Log'
	);

	// Module Tools->Log
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'log',
		'',
		array(
			'Tools' => 'index',
			'WebInfo' => 'index',
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:belog/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
		)
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: beuser
 * File: C:/xampp/htdocs/typo3/typo3/sysext/beuser/ext_tables.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	// Module Admin > Backend Users
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'tx_Beuser',
		'top',
		array(
			'BackendUser' => 'index, addToCompareList, removeFromCompareList, compare, online, terminateBackendUserSession'
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
		)
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: aboutmodules
 * File: C:/xampp/htdocs/typo3/typo3/sysext/aboutmodules/ext_tables.php
 */

$_EXTKEY = 'aboutmodules';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'help',
		'aboutmodules',
		'after:about',
		array(
			'Modules' => 'index'
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:aboutmodules/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
		)
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: setup
 * File: C:/xampp/htdocs/typo3/typo3/sysext/setup/ext_tables.php
 */

$_EXTKEY = 'setup';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('user', 'setup', 'after:task', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_user_setup', 'EXT:setup/locallang_csh_mod.xml');
}
$GLOBALS['TYPO3_USER_SETTINGS'] = array(
	'ctrl' => array(
		'dividers2tabs' => 1
	),
	'columns' => array(
		'realName' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:beUser_realName',
			'table' => 'be_users',
			'csh' => 'beUser_realName'
		),
		'email' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:beUser_email',
			'table' => 'be_users',
			'csh' => 'beUser_email'
		),
		'emailMeAtLogin' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:emailMeAtLogin',
			'csh' => 'emailMeAtLogin'
		),
		'password' => array(
			'type' => 'password',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:newPassword',
			'table' => 'be_users',
			'csh' => 'newPassword',
			'eval' => 'md5'
		),
		'password2' => array(
			'type' => 'password',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:newPasswordAgain',
			'table' => 'be_users',
			'csh' => 'newPasswordAgain',
			'eval' => 'md5'
		),
		'lang' => array(
			'type' => 'select',
			'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderLanguageSelect',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:language',
			'csh' => 'language'
		),
		'startModule' => array(
			'type' => 'select',
			'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderStartModuleSelect',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:startModule',
			'csh' => 'startModule'
		),
		'thumbnailsByDefault' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:showThumbs',
			'csh' => 'showThumbs'
		),
		'edit_wideDocument' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:edit_wideDocument',
			'csh' => 'edit_wideDocument'
		),
		'titleLen' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:maxTitleLen',
			'csh' => 'maxTitleLen'
		),
		'edit_RTE' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:edit_RTE',
			'csh' => 'edit_RTE'
		),
		'edit_docModuleUpload' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:edit_docModuleUpload',
			'csh' => 'edit_docModuleUpload'
		),
		'showHiddenFilesAndFolders' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:showHiddenFilesAndFolders',
			'csh' => 'showHiddenFilesAndFolders'
		),
		'copyLevels' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:copyLevels',
			'csh' => 'copyLevels'
		),
		'recursiveDelete' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:recursiveDelete',
			'csh' => 'recursiveDelete'
		),
		'simulate' => array(
			'type' => 'select',
			'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderSimulateUserSelect',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:simulate',
			'csh' => 'simuser'
		),
		'resetConfiguration' => array(
			'type' => 'button',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:resetConfiguration',
			'buttonlabel' => 'LLL:EXT:setup/mod/locallang.xml:resetConfigurationShort',
			'csh' => 'reset',
			'onClick' => 'if (confirm(\'%s\')) { document.getElementById(\'setValuesToDefault\').value = 1; this.form.submit(); }',
			'onClickLabels' => array(
				'LLL:EXT:setup/mod/locallang.xml:setToStandardQuestion'
			)
		),
		'clearSessionVars' => array(
			'type' => 'button',
			'access' => 'admin',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:clearSessionVars',
			'buttonlabel' => 'LLL:EXT:setup/mod/locallang.xml:clearSessionVarsShort',
			'csh' => 'reset',
			'onClick' => 'if (confirm(\'%s\')) { document.getElementById(\'clearSessionVars\').value = 1; this.form.submit(); }',
			'onClickLabels' => array(
				'LLL:EXT:setup/mod/locallang.xml:clearSessionVarsQuestion'
			)
		),
		'resizeTextareas' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:resizeTextareas',
			'csh' => 'resizeTextareas'
		),
		'resizeTextareas_Flexible' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:resizeTextareas_Flexible',
			'csh' => 'resizeTextareas_Flexible'
		),
		'resizeTextareas_MaxHeight' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:flexibleTextareas_MaxHeight',
			'csh' => 'flexibleTextareas_MaxHeight'
		),
		'debugInWindow' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:setup/mod/locallang.xml:debugInWindow',
			'access' => 'admin'
		)
	),
	'showitem' => '--div--;LLL:EXT:setup/mod/locallang.xml:personal_data,realName,email,emailMeAtLogin,password,password2,lang,
			--div--;LLL:EXT:setup/mod/locallang.xml:opening,startModule,thumbnailsByDefault,titleLen,
			--div--;LLL:EXT:setup/mod/locallang.xml:editFunctionsTab,edit_RTE,edit_wideDocument,edit_docModuleUpload,showHiddenFilesAndFolders,resizeTextareas,resizeTextareas_Flexible,resizeTextareas_MaxHeight,copyLevels,recursiveDelete,resetConfiguration,clearSessionVars,
			--div--;LLL:EXT:setup/mod/locallang.xml:adminFunctions,simulate,debugInWindow'
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: taskcenter
 * File: C:/xampp/htdocs/typo3/typo3/sysext/taskcenter/ext_tables.php
 */

$_EXTKEY = 'taskcenter';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'tools_txtaskcenterM1',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'task/'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'user',
		'task',
		'top',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'task/'
	);
	$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['Taskcenter::saveCollapseState'] = 'EXT:taskcenter/Classes/TaskStatus.php:TYPO3\\CMS\\Taskcenter\\TaskStatus->saveCollapseState';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['Taskcenter::saveSortingState'] = 'EXT:taskcenter/Classes/TaskStatus.php:TYPO3\\CMS\\Taskcenter\\TaskStatus->saveSortingState';
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: info_pagetsconfig
 * File: C:/xampp/htdocs/typo3/typo3/sysext/info_pagetsconfig/ext_tables.php
 */

$_EXTKEY = 'info_pagetsconfig';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_info', 'tx_infopagetsconfig_webinfo', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'class.tx_infopagetsconfig_webinfo.php', 'LLL:EXT:info_pagetsconfig/locallang.php:mod_pagetsconfig');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:info_pagetsconfig/locallang_csh_webinfo.xml');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: viewpage
 * File: C:/xampp/htdocs/typo3/typo3/sysext/viewpage/ext_tables.php
 */

$_EXTKEY = 'viewpage';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	// Module Web->View
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'web',
		'view',
		'after:layout',
		array(
			'ViewModule' => 'show'
		),
		array(
			'icon' => 'EXT:viewpage/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
			'access' => 'user,group'
		)
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: rtehtmlarea
 * File: C:/xampp/htdocs/typo3/typo3/sysext/rtehtmlarea/ext_tables.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Add static template for Click-enlarge rendering
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/clickenlarge/', 'Clickenlarge Rendering');
// Add configuration of soft references on image tags in RTE content
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'hooks/softref/ext_tables.php';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rtehtmlarea_acronym');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rtehtmlarea_acronym', 'EXT:' . $_EXTKEY . '/locallang_csh_abbreviation.xml');
// Add contextual help files
$htmlAreaRteContextHelpFiles = array(
	'General' => 'EXT:' . $_EXTKEY . '/locallang_csh.xlf',
	'Acronym' => 'EXT:' . $_EXTKEY . '/extensions/Acronym/locallang_csh.xlf',
	'EditElement' => 'EXT:' . $_EXTKEY . '/extensions/EditElement/locallang_csh.xlf',
	'Language' => 'EXT:' . $_EXTKEY . '/extensions/Language/locallang_csh.xlf',
	'MicrodataSchema' => 'EXT:' . $_EXTKEY . '/extensions/MicrodataSchema/locallang_csh.xlf',
	'PlainText' => 'EXT:' . $_EXTKEY . '/extensions/PlainText/locallang_csh.xlf',
	'RemoveFormat' => 'EXT:' . $_EXTKEY . '/extensions/RemoveFormat/locallang_csh.xlf',
	'TableOperations' => 'EXT:' . $_EXTKEY . '/extensions/TableOperations/locallang_csh.xlf'
);
foreach ($htmlAreaRteContextHelpFiles as $key => $file) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xEXT_' . $_EXTKEY . '_' . $key, $file);
}
unset($htmlAreaRteContextHelpFiles);
// Extend TYPO3 User Settings Configuration
if (TYPO3_MODE === 'BE' && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('setup') && is_array($GLOBALS['TYPO3_USER_SETTINGS'])) {
	$GLOBALS['TYPO3_USER_SETTINGS']['columns'] = array_merge($GLOBALS['TYPO3_USER_SETTINGS']['columns'], array(
		'rteWidth' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xml:rteWidth',
			'csh' => 'xEXT_rtehtmlarea_General:rteWidth'
		),
		'rteHeight' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xml:rteHeight',
			'csh' => 'xEXT_rtehtmlarea_General:rteHeight'
		),
		'rteResize' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xml:rteResize',
			'csh' => 'xEXT_rtehtmlarea_General:rteResize'
		),
		'rteMaxHeight' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xml:rteMaxHeight',
			'csh' => 'xEXT_rtehtmlarea_General:rteMaxHeight'
		),
		'rteCleanPasteBehaviour' => array(
			'type' => 'select',
			'label' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xml:rteCleanPasteBehaviour',
			'items' => array(
				'plainText' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xml:plainText',
				'pasteStructure' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xml:pasteStructure',
				'pasteFormat' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xml:pasteFormat'
			),
			'csh' => 'xEXT_rtehtmlarea_PlainText:behaviour'
		)
	));
	$GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',--div--;LLL:EXT:rtehtmlarea/locallang.xml:rteSettings,rteWidth,rteHeight,rteResize,rteMaxHeight,rteCleanPasteBehaviour';
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: css_styled_content
 * File: C:/xampp/htdocs/typo3/typo3/sysext/css_styled_content/ext_tables.php
 */

$_EXTKEY = 'css_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add flexform
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('*', 'FILE:EXT:css_styled_content/flexform_ds.xml', 'table');

$GLOBALS['TCA']['tt_content']['types']['table']['showitem'] = 'CType;;4;;1-1-1, hidden, header;;3;;2-2-2, linkToTop;;;;4-4-4,
			--div--;LLL:EXT:cms/locallang_ttc.xml:CType.I.5, layout;;10;;3-3-3, cols, bodytext;;9;nowrap:wizards[table], text_properties, pi_flexform,
			--div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access, starttime, endtime, fe_group';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/', 'CSS Styled Content');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v3.8/', 'CSS Styled Content TYPO3 v3.8');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v3.9/', 'CSS Styled Content TYPO3 v3.9');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.2/', 'CSS Styled Content TYPO3 v4.2');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.3/', 'CSS Styled Content TYPO3 v4.3');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.4/', 'CSS Styled Content TYPO3 v4.4');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.5/', 'CSS Styled Content TYPO3 v4.5');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.6/', 'CSS Styled Content TYPO3 v4.6');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v4.7/', 'CSS Styled Content TYPO3 v4.7');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/v6.0/', 'CSS Styled Content TYPO3 v6.0');
$GLOBALS['TCA']['tt_content']['columns']['section_frame']['config']['items'][0] = array(
	'LLL:EXT:css_styled_content/locallang_db.xlf:tt_content.tx_cssstyledcontent_section_frame.I.0', '0'
);
$GLOBALS['TCA']['tt_content']['columns']['section_frame']['config']['items'][9] = array(
	'LLL:EXT:css_styled_content/locallang_db.xlf:tt_content.tx_cssstyledcontent_section_frame.I.9', '66'
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: t3skin
 * File: C:/xampp/htdocs/typo3/typo3/sysext/t3skin/ext_tables.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE' || TYPO3_MODE == 'FE' && isset($GLOBALS['BE_USER'])) {
	global $TBE_STYLES;
	// Register as a skin
	$TBE_STYLES['skins'][$_EXTKEY] = array(
		'name' => 't3skin'
	);
	// Support for other extensions to add own icons...
	$presetSkinImgs = is_array($TBE_STYLES['skinImg']) ? $TBE_STYLES['skinImg'] : array();
	$TBE_STYLES['skins'][$_EXTKEY]['stylesheetDirectories']['sprites'] = 'EXT:t3skin/stylesheets/sprites/';
	/** Setting up backend styles and colors */
	$TBE_STYLES['mainColors'] = array(
		// Always use #xxxxxx color definitions!
		'bgColor' => '#FFFFFF',
		// Light background color
		'bgColor2' => '#FEFEFE',
		// Steel-blue
		'bgColor3' => '#F1F3F5',
		// dok.color
		'bgColor4' => '#E6E9EB',
		// light tablerow background, brownish
		'bgColor5' => '#F8F9FB',
		// light tablerow background, greenish
		'bgColor6' => '#E6E9EB',
		// light tablerow background, yellowish, for section headers. Light.
		'hoverColor' => '#FF0000',
		'navFrameHL' => '#F8F9FB'
	);
	$TBE_STYLES['colorschemes'][0] = '-|class-main1,-|class-main2,-|class-main3,-|class-main4,-|class-main5';
	$TBE_STYLES['colorschemes'][1] = '-|class-main11,-|class-main12,-|class-main13,-|class-main14,-|class-main15';
	$TBE_STYLES['colorschemes'][2] = '-|class-main21,-|class-main22,-|class-main23,-|class-main24,-|class-main25';
	$TBE_STYLES['colorschemes'][3] = '-|class-main31,-|class-main32,-|class-main33,-|class-main34,-|class-main35';
	$TBE_STYLES['colorschemes'][4] = '-|class-main41,-|class-main42,-|class-main43,-|class-main44,-|class-main45';
	$TBE_STYLES['colorschemes'][5] = '-|class-main51,-|class-main52,-|class-main53,-|class-main54,-|class-main55';
	$TBE_STYLES['styleschemes'][0]['all'] = 'CLASS: formField';
	$TBE_STYLES['styleschemes'][1]['all'] = 'CLASS: formField1';
	$TBE_STYLES['styleschemes'][2]['all'] = 'CLASS: formField2';
	$TBE_STYLES['styleschemes'][3]['all'] = 'CLASS: formField3';
	$TBE_STYLES['styleschemes'][4]['all'] = 'CLASS: formField4';
	$TBE_STYLES['styleschemes'][5]['all'] = 'CLASS: formField5';
	$TBE_STYLES['styleschemes'][0]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][1]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][2]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][3]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][4]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][5]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][0]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][1]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][2]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][3]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][4]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][5]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][0]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][1]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][2]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][3]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][4]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][5]['select'] = 'CLASS: select';
	$TBE_STYLES['borderschemes'][0] = array('', '', '', 'wrapperTable');
	$TBE_STYLES['borderschemes'][1] = array('', '', '', 'wrapperTable1');
	$TBE_STYLES['borderschemes'][2] = array('', '', '', 'wrapperTable2');
	$TBE_STYLES['borderschemes'][3] = array('', '', '', 'wrapperTable3');
	$TBE_STYLES['borderschemes'][4] = array('', '', '', 'wrapperTable4');
	$TBE_STYLES['borderschemes'][5] = array('', '', '', 'wrapperTable5');
	// Setting the relative path to the extension in temp. variable:
	$temp_eP = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY);
	// Alternative dimensions for frameset sizes:
	// Left menu frame width
	$TBE_STYLES['dims']['leftMenuFrameW'] = 190;
	// Top frame height
	$TBE_STYLES['dims']['topFrameH'] = 42;
	// Default navigation frame width
	$TBE_STYLES['dims']['navFrameWidth'] = 280;
	// Setting roll-over background color for click menus:
	// Notice, this line uses the the 'scriptIDindex' feature to override another value in this array (namely $TBE_STYLES['mainColors']['bgColor5']), for a specific script "typo3/alt_clickmenu.php"
	$TBE_STYLES['scriptIDindex']['typo3/alt_clickmenu.php']['mainColors']['bgColor5'] = '#dedede';
	// Setting up auto detection of alternative icons:
	$TBE_STYLES['skinImgAutoCfg'] = array(
		'absDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'icons/',
		'relDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'icons/',
		'forceFileExtension' => 'gif',
		// Force to look for PNG alternatives...
		'iconSizeWidth' => 16,
		'iconSizeHeight' => 16
	);
	// Changing icon for filemounts, needs to be done here as overwriting the original icon would also change the filelist tree's root icon
	$TCA['sys_filemounts']['ctrl']['iconfile'] = '_icon_ftp_2.gif';
	// Adding flags to sys_language
	$TCA['sys_language']['ctrl']['typeicon_column'] = 'flag';
	$TCA['sys_language']['ctrl']['typeicon_classes'] = array(
		'default' => 'mimetypes-x-sys_language',
		'mask' => 'flags-###TYPE###'
	);
	$flagNames = array(
		'multiple',
		'ad',
		'ae',
		'af',
		'ag',
		'ai',
		'al',
		'am',
		'an',
		'ao',
		'ar',
		'as',
		'at',
		'au',
		'aw',
		'ax',
		'az',
		'ba',
		'bb',
		'bd',
		'be',
		'bf',
		'bg',
		'bh',
		'bi',
		'bj',
		'bm',
		'bn',
		'bo',
		'br',
		'bs',
		'bt',
		'bv',
		'bw',
		'by',
		'bz',
		'ca',
		'catalonia',
		'cc',
		'cd',
		'cf',
		'cg',
		'ch',
		'ci',
		'ck',
		'cl',
		'cm',
		'cn',
		'co',
		'cr',
		'cs',
		'cu',
		'cv',
		'cx',
		'cy',
		'cz',
		'de',
		'dj',
		'dk',
		'dm',
		'do',
		'dz',
		'ec',
		'ee',
		'eg',
		'eh',
		'england',
		'er',
		'es',
		'et',
		'europeanunion',
		'fam',
		'fi',
		'fj',
		'fk',
		'fm',
		'fo',
		'fr',
		'ga',
		'gb',
		'gd',
		'ge',
		'gf',
		'gh',
		'gi',
		'gl',
		'gm',
		'gn',
		'gp',
		'gq',
		'gr',
		'gs',
		'gt',
		'gu',
		'gw',
		'gy',
		'hk',
		'hm',
		'hn',
		'hr',
		'ht',
		'hu',
		'id',
		'ie',
		'il',
		'in',
		'io',
		'iq',
		'ir',
		'is',
		'it',
		'jm',
		'jo',
		'jp',
		'ke',
		'kg',
		'kh',
		'ki',
		'km',
		'kn',
		'kp',
		'kr',
		'kw',
		'ky',
		'kz',
		'la',
		'lb',
		'lc',
		'li',
		'lk',
		'lr',
		'ls',
		'lt',
		'lu',
		'lv',
		'ly',
		'ma',
		'mc',
		'md',
		'me',
		'mg',
		'mh',
		'mk',
		'ml',
		'mm',
		'mn',
		'mo',
		'mp',
		'mq',
		'mr',
		'ms',
		'mt',
		'mu',
		'mv',
		'mw',
		'mx',
		'my',
		'mz',
		'na',
		'nc',
		'ne',
		'nf',
		'ng',
		'ni',
		'nl',
		'no',
		'np',
		'nr',
		'nu',
		'nz',
		'om',
		'pa',
		'pe',
		'pf',
		'pg',
		'ph',
		'pk',
		'pl',
		'pm',
		'pn',
		'pr',
		'ps',
		'pt',
		'pw',
		'py',
		'qa',
		'qc',
		're',
		'ro',
		'rs',
		'ru',
		'rw',
		'sa',
		'sb',
		'sc',
		'scotland',
		'sd',
		'se',
		'sg',
		'sh',
		'si',
		'sj',
		'sk',
		'sl',
		'sm',
		'sn',
		'so',
		'sr',
		'st',
		'sv',
		'sy',
		'sz',
		'tc',
		'td',
		'tf',
		'tg',
		'th',
		'tj',
		'tk',
		'tl',
		'tm',
		'tn',
		'to',
		'tr',
		'tt',
		'tv',
		'tw',
		'tz',
		'ua',
		'ug',
		'um',
		'us',
		'uy',
		'uz',
		'va',
		'vc',
		've',
		'vg',
		'vi',
		'vn',
		'vu',
		'wales',
		'wf',
		'ws',
		'ye',
		'yt',
		'za',
		'zm',
		'zw'
	);
	foreach ($flagNames as $flagName) {
		$TCA['sys_language']['columns']['flag']['config']['items'][] = array($flagName, $flagName, 'EXT:t3skin/images/flags/' . $flagName . '.png');
	}
	// Manual setting up of alternative icons. This is mainly for module icons which has a special prefix:
	$TBE_STYLES['skinImg'] = array_merge($presetSkinImgs, array(
		'gfx/ol/blank.gif' => array('clear.gif', 'width="18" height="16"'),
		'MOD:web/website.gif' => array($temp_eP . 'icons/module_web.gif', 'width="24" height="24"'),
		'MOD:web_layout/layout.gif' => array($temp_eP . 'icons/module_web_layout.gif', 'width="24" height="24"'),
		'MOD:web_view/view.gif' => array($temp_eP . 'icons/module_web_view.png', 'width="24" height="24"'),
		'MOD:web_list/list.gif' => array($temp_eP . 'icons/module_web_list.gif', 'width="24" height="24"'),
		'MOD:web_info/info.gif' => array($temp_eP . 'icons/module_web_info.png', 'width="24" height="24"'),
		'MOD:web_perm/perm.gif' => array($temp_eP . 'icons/module_web_perms.png', 'width="24" height="24"'),
		'MOD:web_func/func.gif' => array($temp_eP . 'icons/module_web_func.png', 'width="24" height="24"'),
		'MOD:web_ts/ts1.gif' => array($temp_eP . 'icons/module_web_ts.gif', 'width="24" height="24"'),
		'MOD:web_modules/modules.gif' => array($temp_eP . 'icons/module_web_modules.gif', 'width="24" height="24"'),
		'MOD:web_txversionM1/cm_icon.gif' => array($temp_eP . 'icons/module_web_version.gif', 'width="24" height="24"'),
		'MOD:file/file.gif' => array($temp_eP . 'icons/module_file.gif', 'width="22" height="24"'),
		'MOD:file_list/list.gif' => array($temp_eP . 'icons/module_file_list.gif', 'width="22" height="24"'),
		'MOD:file_images/images.gif' => array($temp_eP . 'icons/module_file_images.gif', 'width="22" height="22"'),
		'MOD:user/user.gif' => array($temp_eP . 'icons/module_user.gif', 'width="22" height="22"'),
		'MOD:user_task/task.gif' => array($temp_eP . 'icons/module_user_taskcenter.gif', 'width="22" height="22"'),
		'MOD:user_setup/setup.gif' => array($temp_eP . 'icons/module_user_setup.gif', 'width="22" height="22"'),
		'MOD:user_doc/document.gif' => array($temp_eP . 'icons/module_doc.gif', 'width="22" height="22"'),
		'MOD:user_ws/sys_workspace.gif' => array($temp_eP . 'icons/module_user_ws.gif', 'width="22" height="22"'),
		'MOD:tools/tool.gif' => array($temp_eP . 'icons/module_tools.gif', 'width="25" height="24"'),
		'MOD:tools_beuser/beuser.gif' => array($temp_eP . 'icons/module_tools_user.gif', 'width="24" height="24"'),
		'MOD:tools_em/em.gif' => array($temp_eP . 'icons/module_tools_em.png', 'width="24" height="24"'),
		'MOD:tools_em/install.gif' => array($temp_eP . 'icons/module_tools_em.gif', 'width="24" height="24"'),
		'MOD:tools_dbint/db.gif' => array($temp_eP . 'icons/module_tools_dbint.gif', 'width="25" height="24"'),
		'MOD:tools_config/config.gif' => array($temp_eP . 'icons/module_tools_config.gif', 'width="24" height="24"'),
		'MOD:tools_install/install.gif' => array($temp_eP . 'icons/module_tools_install.gif', 'width="24" height="24"'),
		'MOD:tools_log/log.gif' => array($temp_eP . 'icons/module_tools_log.gif', 'width="24" height="24"'),
		'MOD:tools_txphpmyadmin/thirdparty_db.gif' => array($temp_eP . 'icons/module_tools_phpmyadmin.gif', 'width="24" height="24"'),
		'MOD:tools_isearch/isearch.gif' => array($temp_eP . 'icons/module_tools_isearch.gif', 'width="24" height="24"'),
		'MOD:help/help.gif' => array($temp_eP . 'icons/module_help.gif', 'width="23" height="24"'),
		'MOD:help_about/info.gif' => array($temp_eP . 'icons/module_help_about.gif', 'width="25" height="24"'),
		'MOD:help_aboutmodules/aboutmodules.gif' => array($temp_eP . 'icons/module_help_aboutmodules.gif', 'width="24" height="24"'),
		'MOD:help_cshmanual/about.gif' => array($temp_eP . 'icons/module_help_cshmanual.gif', 'width="25" height="24"'),
		'MOD:help_txtsconfighelpM1/moduleicon.gif' => array($temp_eP . 'icons/module_help_ts.gif', 'width="25" height="24"')
	));
	// Logo at login screen
	$TBE_STYLES['logo_login'] = $temp_eP . 'images/login/typo3logo-white-greyback.gif';
	// extJS theme
	$TBE_STYLES['extJS']['theme'] = $temp_eP . 'extjs/xtheme-t3skin.css';
	// Adding HTML template for login screen
	$TBE_STYLES['htmlTemplates']['templates/login.html'] = 'sysext/t3skin/templates/login.html';
	$GLOBALS['TBE_STYLES']['stylesheets']['admPanel'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('t3skin') . 'stylesheets/standalone/admin_panel.css';
	foreach ($flagNames as $flagName) {
		\TYPO3\CMS\Backend\Sprite\SpriteManager::addIconSprite(array(
			'flags-' . $flagName,
			'flags-' . $flagName . '-overlay'
		));
	}
	unset($flagNames, $flagName);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: t3editor
 * File: C:/xampp/htdocs/typo3/typo3/sysext/t3editor/ext_tables.php
 */

$_EXTKEY = 't3editor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	// Register AJAX handlers:
	$TYPO3_CONF_VARS['BE']['AJAX']['T3Editor::saveCode'] = 'EXT:t3editor/Classes/class.tx_t3editor.php:TYPO3\\CMS\\T3Editor\\T3Editor->ajaxSaveCode';
	$TYPO3_CONF_VARS['BE']['AJAX']['T3Editor::getPlugins'] = 'EXT:t3editor/Classes/class.tx_t3editor.php:TYPO3\\CMS\\T3Editor\\T3Editor->getPlugins';
	$TYPO3_CONF_VARS['BE']['AJAX']['T3Editor_TSrefLoader::getTypes'] = 'EXT:t3editor/Classes/ts_codecompletion/class.tx_t3editor_tsrefloader.php:TYPO3\\CMS\\T3Editor\\TypoScriptReferenceLoader->processAjaxRequest';
	$TYPO3_CONF_VARS['BE']['AJAX']['T3Editor_TSrefLoader::getDescription'] = 'EXT:t3editor/Classes/ts_codecompletion/class.tx_t3editor_tsrefloader.php:TYPO3\\CMS\\T3Editor\\TypoScriptReferenceLoader->processAjaxRequest';
	$TYPO3_CONF_VARS['BE']['AJAX']['CodeCompletion::loadTemplates'] = 'EXT:t3editor/Classes/ts_codecompletion/class.tx_t3editor_codecompletion.php:TYPO3\\CMS\\T3Editor\\CodeCompletion->processAjaxRequest';
	// Add the t3editor wizard on the bodytext field of tt_content
	$TCA['tt_content']['columns']['bodytext']['config']['wizards']['t3editor'] = array(
		'enableByTypeConfig' => 1,
		'type' => 'userFunc',
		'userFunc' => 'EXT:t3editor/Classes/class.tx_t3editor_tceforms_wizard.php:TYPO3\\CMS\\T3Editor\\FormWizard->main',
		'title' => 't3editor',
		'icon' => 'wizard_table.gif',
		'script' => 'wizard_table.php',
		'params' => array(
			'format' => 'html',
			'style' => 'width:98%; height: 60%;'
		)
	);
	// Activate the t3editor only for type html
	$TCA['tt_content']['types']['html']['showitem'] = str_replace('bodytext,', 'bodytext;LLL:EXT:cms/locallang_ttc.xml:bodytext.ALT.html_formlabel;;nowrap:wizards[t3editor],', $TCA['tt_content']['types']['html']['showitem']);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: reports
 * File: C:/xampp/htdocs/typo3/typo3/sysext/reports/ext_tables.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'txreportsM1',
		'',
		array(
			'Report' => 'index,detail'
		), array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/moduleicon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf'
		)
	);
	$statusReport = array(
		'title' => 'LLL:EXT:reports/reports/locallang.xml:status_report_title',
		'description' => 'LLL:EXT:reports/reports/locallang.xml:status_report_description',
		'report' => 'TYPO3\\CMS\\Reports\\Report\\Status\\Status'
	);
	if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'])) {
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array();
	}
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'], $statusReport);
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\Typo3Status';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\SystemStatus';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\SecurityStatus';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['configuration'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\ConfigurationStatus';
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: felogin
 * File: C:/xampp/htdocs/typo3/typo3/sysext/felogin/ext_tables.php
 */

$_EXTKEY = 'felogin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$_EXTCONF = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['felogin']);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('*', 'FILE:EXT:' . $_EXTKEY . '/flexform.xml', 'login');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem('tt_content', 'CType', array(
	'LLL:EXT:cms/locallang_ttc.xlf:CType.I.10',
	'login',
	'i/tt_content_login.gif'
), 'mailform', 'after');
$GLOBALS['TCA']['tt_content']['types']['login']['showitem'] = '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
													--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.header;header,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.plugin,
													pi_flexform;;;;1-1-1,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
													--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
													--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.appearance,
													--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.behaviour,
													--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended';
// Adds the redirect field to the fe_groups table
$tempColumns = array(
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
					'type' => 'suggest'
				)
			)
		)
	)
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_groups', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_groups', 'felogin_redirectPid;;;;1-1-1', '', 'after:TSconfig');
// Adds the redirect field and the forgotHash field to the fe_users-table
$tempColumns = array(
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
					'type' => 'suggest'
				)
			)
		)
	),
	'felogin_forgotHash' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:felogin/locallang_db.xlf:felogin_forgotHash',
		'config' => array(
			'type' => 'passthrough'
		)
	)
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'felogin_redirectPid;;;;1-1-1', '', 'after:TSconfig');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: form
 * File: C:/xampp/htdocs/typo3/typo3/sysext/form/ext_tables.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add Default TS to Include static (from extensions)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Default TS');

$GLOBALS['TCA']['tt_content']['columns']['bodytext']['config']['wizards']['forms'] = array(
	'notNewRecords' => 1,
	'enableByTypeConfig' => 1,
	'type' => 'script',
	'title' => 'Form wizard',
	'icon' => 'wizard_forms.gif',
	'script' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('form') . 'Classes/Controller/Wizard.php',
	'params' => array(
		'xmlOutput' => 0
	)
);
$GLOBALS['TCA']['tt_content']['types']['mailform']['showitem'] = '
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
';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extension_builder
 * File: C:/xampp/htdocs/typo3/typo3conf/ext/extension_builder/ext_tables.php
 */

$_EXTKEY = 'extension_builder';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}


/**
 * Register Backend Module
 */

Tx_Extbase_Utility_Extension::registerModule(
	$_EXTKEY,
	'tools',
	'extensionbuilder',
	'',
	array(
		 'BuilderModule' => 'index,domainmodelling,dispatchRpc',
	),
	array(
		 'access' => 'user,group',
		 'icon' => 'EXT:extension_builder/ext_icon.gif',
		 'labels' => 'LLL:EXT:extension_builder/Resources/Private/Language/locallang_mod.xml',
	)
);




\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

#