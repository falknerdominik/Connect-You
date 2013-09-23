<?php
/**
 * Compiled ext_localconf.php cache file
 */

global $TYPO3_CONF_VARS, $T3_SERVICES, $T3_VAR;

/**
 * Extension: cms
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/cms/ext_localconf.php
 */

$_EXTKEY = 'cms';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocView = 1
	options.saveDocNew = 1
	options.saveDocNew.pages = 0
	options.saveDocNew.sys_file = 0
	options.disableDelete.sys_file = 1
	TCAdefaults.tt_content.imagecols = 2
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
mod.wizards.newContentElement {
	renderMode = tabs
	wizardItems {
		common.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common
		common.elements {
			header {
				icon = gfx/c_wiz/regular_header.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_headerOnly_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_headerOnly_description
				tt_content_defValues {
					CType = header
				}
			}
			text {
				icon = gfx/c_wiz/regular_text.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_regularText_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_regularText_description
				tt_content_defValues {
					CType = text
				}
			}
			textpic {
				icon = gfx/c_wiz/text_image_right.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_textImage_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_textImage_description
				tt_content_defValues {
					CType = textpic
					imageorient = 17
				}
			}
			image {
				icon = gfx/c_wiz/images_only.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_imagesOnly_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_imagesOnly_description
				tt_content_defValues {
					CType = image
				}
			}
			bullets {
				icon = gfx/c_wiz/bullet_list.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_bulletList_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_bulletList_description
				tt_content_defValues {
					CType = bullets
				}
			}
			table {
				icon = gfx/c_wiz/table.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_table_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_table_description
				tt_content_defValues {
					CType = table
				}
			}

		}
		common.show = header,text,textpic,image,bullets,table

		special.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special
		special.elements {
			uploads {
				icon = gfx/c_wiz/filelinks.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_filelinks_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_filelinks_description
				tt_content_defValues {
					CType = uploads
				}
			}
			multimedia {
				icon = gfx/c_wiz/multimedia.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_multimedia_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_multimedia_description
				tt_content_defValues {
					CType = multimedia
				}
			}
			media {
				icon = gfx/c_wiz/multimedia.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_media_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_media_description
				tt_content_defValues {
					CType = media
				}
			}
			menu {
				icon = gfx/c_wiz/sitemap2.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_menus_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_menus_description
				tt_content_defValues {
					CType = menu
					menu_type = 0
				}
			}
			html {
				icon = gfx/c_wiz/html.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_plainHTML_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_plainHTML_description
				tt_content_defValues {
					CType = html
				}
			}
			div {
				icon = gfx/c_wiz/div.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_divider_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_divider_description
				tt_content_defValues {
					CType = div
				}
			}
			shortcut {
				icon = gfx/c_wiz/shortcut.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_shortcut_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_shortcut_description
				tt_content_defValues {
					CType = shortcut
				}
			}

		}
		special.show = uploads,media,menu,html,div,shortcut

		forms.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms
		forms.elements {
			mailform {
				icon = gfx/c_wiz/mailform.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_mail_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_mail_description
				tt_content_defValues {
					CType = mailform
					bodytext (
	# Example content:
	Name: | *name = input,40 | Enter your name here
	Email: | *email=input,40 |
	Address: | address=textarea,40,5 |
	Contact me: | tv=check | 1

	|formtype_mail = submit | Send form!
	|html_enabled=hidden | 1
	|subject=hidden| This is the subject
					)
				}
			}
			search {
				icon = gfx/c_wiz/searchform.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_search_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_search_description
				tt_content_defValues {
					CType = search
				}
			}
		}
		forms.show = mailform,search

		plugins.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:plugins
		plugins.elements {
			general {
				icon = gfx/c_wiz/user_defined.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:plugins_general_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:plugins_general_description
				tt_content_defValues.CType = list
			}
		}
		plugins.show = *
	}
}

');
$TYPO3_CONF_VARS['SYS']['contentTable'] = 'tt_content';
$TYPO3_CONF_VARS['FE']['eID_include']['tx_cms_showpic'] = 'EXT:cms/tslib/showpic.php';
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['compat_version']['cms'] = array(
	'title' => 'CMS Frontend',
	'version' => 4000000,
	'description' => '<ul>' . '<li><p>The extention simluatestatic has been removed in TYPO3 6.0</p></li>' . '<li><p>CSS Stylesheets and JavaScript are put into an external file by default.</p>' . '<p>Technically, that means that the default value of "config.inlineStyle2TempFile" is now set to "1" and that of "config.removeDefaultJS" to "external"</p></li>' . '</ul>'
);
// Registering hooks for the treelist cache
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:cms/tslib/hooks/class.tx_cms_treelistcacheupdate.php:&TYPO3\\CMS\\Frontend\\Hooks\\TreelistCacheUpdateHooks';
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = 'EXT:cms/tslib/hooks/class.tx_cms_treelistcacheupdate.php:&TYPO3\\CMS\\Frontend\\Hooks\\TreelistCacheUpdateHooks';
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = 'EXT:cms/tslib/hooks/class.tx_cms_treelistcacheupdate.php:&TYPO3\\CMS\\Frontend\\Hooks\\TreelistCacheUpdateHooks';
if (TYPO3_MODE === 'FE') {
	// Register the core media wizard provider
	\TYPO3\CMS\Frontend\MediaWizard\MediaWizardProviderManager::registerMediaWizardProvider('TYPO3\\CMS\\Frontend\\MediaWizard\\MediaWizardProvider');
	// Register eID provider for ExtDirect for the frontend
	$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['ExtDirect'] = PATH_tslib . 'extdirecteid.php';
}
// Register search keys
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';
// Register hook to show preview info
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_previewInfo']['cms'] = 'EXT:cms/tslib/hooks/class.tx_cms_fehooks.php:TYPO3\\CMS\\Frontend\\Hooks\\FrontendHooks->hook_previewInfo';



/**
 * Extension: lang
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/lang/ext_localconf.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Register cache t3lib_l10n
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['t3lib_l10n'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['t3lib_l10n'] = array();
}
if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['t3lib_l10n']['backend'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['t3lib_l10n']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\FileBackend';
}
if (isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['lang']['cache']['clear_menu']) && $GLOBALS['TYPO3_CONF_VARS']['SYS']['lang']['cache']['clear_menu']) {
	// Register Clear Cache Menu hook
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['additionalBackendItems']['cacheActions']['clearLangCache'] = 'TYPO3\CMS\Lang\ClearLanguageCacheMenuItem';
} else {
	// Clear l10n cache when the user clears all caches
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['clearLangCache'] = 'TYPO3\CMS\Lang\LanguageCacheClearer->clearCache';
}
// Register Ajax call
$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['lang::clearCache'] = 'TYPO3\CMS\Lang\LanguageCacheClearer->clearCache';



/**
 * Extension: sv
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/sv/ext_localconf.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Register base authentication service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService($_EXTKEY, 'auth', 'TYPO3\\CMS\\Sv\\AuthenticationService', array(
	'title' => 'User authentication',
	'description' => 'Authentication with username/password.',
	'subtype' => 'getUserBE,authUserBE,getUserFE,authUserFE,getGroupsFE,processLoginDataBE,processLoginDataFE',
	'available' => TRUE,
	'priority' => 50,
	'quality' => 50,
	'os' => '',
	'exec' => '',
	'className' => 'TYPO3\\CMS\\Sv\\AuthenticationService'
));
// Add hooks to the backend login form
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/index.php']['loginFormHook'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/class.tx_sv_loginformhook.php:TYPO3\\CMS\\Sv\\LoginFormHook->getLoginFormTag';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/index.php']['loginScriptHook'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/class.tx_sv_loginformhook.php:TYPO3\\CMS\\Sv\\LoginFormHook->getLoginScripts';



/**
 * Extension: extensionmanager
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/extensionmanager/ext_localconf.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register extension list update task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Extensionmanager\\Task\\UpdateExtensionListTask'] = array(
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
	'description' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
	'additionalFields' => '',
);



/**
 * Extension: extbase
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/extbase/ext_localconf.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('extbase') . 'Classes/Mvc/Dispatcher.php';
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('extbase') . 'Classes/Utility/ExtensionUtility.php';

// Register caches if not already done in localconf.php or a previously loaded extension.
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_reflection'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_reflection'] = array();
}
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_object'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_object'] = array();
}
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_tablecolumns'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_tablecolumns'] = array();
}
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_datamapfactory_datamap'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_datamapfactory_datamap'] = array();
}
// We need to set the default implementation for Storage Backend & Query Settings
// the code below is NO PUBLIC API! It's just to make sure that
// Extbase works correctly in the backend if the page tree is empty or no
// template is defined.
/** @var $extbaseObjectContainer \TYPO3\CMS\Extbase\Object\Container\Container */
$extbaseObjectContainer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\Container\\Container');
// Singleton
$extbaseObjectContainer->registerImplementation('TYPO3\CMS\Extbase\Persistence\QueryInterface', 'TYPO3\CMS\Extbase\Persistence\Generic\Query');
$extbaseObjectContainer->registerImplementation('TYPO3\CMS\Extbase\Persistence\QueryResultInterface', 'TYPO3\CMS\Extbase\Persistence\Generic\QueryResult');
$extbaseObjectContainer->registerImplementation('TYPO3\CMS\Extbase\Persistence\PersistenceManagerInterface', 'TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager');
$extbaseObjectContainer->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\BackendInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbBackend');
$extbaseObjectContainer->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QuerySettingsInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
unset($extbaseObjectContainer);
// Register type converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ArrayConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\BooleanConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FloatConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\IntegerConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectStorageConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\PersistentObjectConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StringConverter');
// Experimental FAL<->extbase converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileReferenceConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderBasedFileCollectionConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StaticFileCollectionConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderConverter');
// $GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:extbase/Classes/Persistence/Hook/TCEMainValueObjectUpdater.php:tx_Extbase_Persistence_Hook_TCEMainValueObjectUpdater';
if (TYPO3_MODE === 'BE') {
	// registers Extbase at the cli_dispatcher with key "extbase".
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['extbase'] = array(
		'EXT:extbase/Scripts/CommandLineLauncher.php',
		'_CLI_lowlevel'
	);
	// register help command
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = 'TYPO3\\CMS\\Extbase\\Command\\HelpCommandController';
}



/**
 * Extension: fluid
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/fluid/ext_localconf.php
 */

$_EXTKEY = 'fluid';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Register caches if not already done in localconf.php or a previously loaded extension.
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['fluid_template'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['fluid_template'] = array(
		'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend',
		'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\PhpFrontend'
	);
}



/**
 * Extension: install
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/install/ext_localconf.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// TYPO3 6.0 - Update localconf.php to LocalConfiguration.php
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['localConfiguration'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\LocalConfigurationUpdate';
// TYPO3 6.0 - Create page and TypoScript root template (automatically executed in 123-mode)
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['rootTemplate'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\RootTemplateUpdate';
// TYPO3 4.5 - Check the database to be utf-8 compliant
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['charsetDefaults'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\CharsetDefaultsUpdate';
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['changeCompatibilityVersion'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\CompatVersionUpdate';
// manage split includes of css_styled_contents since TYPO3 4.3
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['splitCscToMultipleTemplates'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\CscSplitUpdate';
// remove pagetype "not in menu" since TYPO3 4.2
// as there is an option in every pagetype
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['removeNotInMenuDoktypeConversion'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\NotInMenuUpdate';
// remove pagetype "advanced" since TYPO3 4.2
// this is merged with doctype "standard" with tab view to edit
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['mergeAdvancedDoktypeConversion'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\MergeAdvancedUpdate';
// TYPO3 6.0 - Add new tables for ExtensionManager
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['extensionManagerTables'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\ExtensionManagerTables';
// add new / outsourced system extensions since TYPO3 4.3
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['installSystemExtensions'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\InstallSysExtsUpdate';
// change tt_content.imagecols=0 to 1 for proper display in TCEforms since TYPO3 4.3
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['changeImagecolsValue'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\ImagecolsUpdate';
// register eID script for install tool AJAX calls
$TYPO3_CONF_VARS['FE']['eID_include']['tx_install_ajax'] = 'EXT:install/mod/class.tx_install_ajax.php';
// warn for t3skin installed in Version 4.4
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['checkForT3SkinInstalled'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\T3skinUpdate';
// Version 4.4: warn for set CompressionLevel and warn user to update his .htaccess
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['checkForCompressionLevel'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\CompressionLevelUpdate';
// Version 4.5: migrate workspaces to use custom stages and install the required extensions
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['migrateWorkspaces'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\MigrateWorkspacesUpdate';
// Version 4.5: Removes the ".gif" suffix from entries in sys_language
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['flagsFromSprites'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\FlagsFromSpriteUpdate';
// Version 4.5: Adds excludeable FlexForm fields to Backend group access lists (ACL)
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['addFlexformsToAcl'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\AddFlexFormsToAclUpdate';
// Version 4.5: Split tt_content image_link to newline by comma
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['imagelink'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\ImagelinkUpdate';
// Version 6.0: Migrate files content elements to use File Abstraction Layer
// Migrations of tt_content.image DB fields and captions, alt texts, etc. into sys_file_reference records.
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['sysext_file_init'] = 'TYPO3\\CMS\\Install\\Updates\\InitUpdateWizard';
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['sysext_file_images'] = 'TYPO3\\CMS\\Install\\Updates\\TceformsUpdateWizard';
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['sysext_file_uploads'] = 'TYPO3\\CMS\\Install\\Updates\\TtContentUploadsUpdateWizard';
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['referenceIntegrity'] = 'TYPO3\\CMS\\Install\\Updates\\ReferenceIntegrityUpdateWizard';

$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['sysext_file_filemounts'] = 'TYPO3\\CMS\\Install\\Updates\\FilemountUpdateWizard';
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['sysext_file_rtemagicimages'] = 'TYPO3\\CMS\\Install\\Updates\\RteMagicImagesUpdateWizard';
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['sysext_file_rtefilelinks'] = 'TYPO3\\CMS\\Install\\Updates\\RteFileLinksUpdateWizard';

// Version 4.7: Migrate the flexforms of MediaElement
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['mediaElementFlexform'] = 'TYPO3\\CMS\\Install\\CoreUpdates\\MediaFlexformUpdate';



/**
 * Extension: introduction
 * File: /Users/falkner_d2/Sites/Connect-You/typo3conf/ext/introduction/ext_localconf.php
 */

$_EXTKEY = 'introduction';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


/***************************************************************
*  Copyright notice
*
*  (c) 2009 Peter Beernink <p.beernink@drecomm.nl>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Configuration of the introduction package
 *
 * @author      Peter Beernink <p.beernink@drecomm.nl>
 *
 */

if (!defined ("TYPO3_MODE"))    die ('Access denied.');

if (TYPO3_MODE == 'BE') {
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install/mod/class.tx_install.php']['stepOutput'][] = 'EXT:'.$_EXTKEY.'/Classes/Controller/Controller.php:&tx_introduction_controller';
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install/mod/class.tx_install.php']['additionalSteps'][] = 'EXT:'.$_EXTKEY.'/Classes/Controller/AdditionalStepsController.php:&tx_introduction_additionalstepscontroller';
}



/**
 * Extension: version
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/version/ext_localconf.php
 */

$_EXTKEY = 'version';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


/* $Id: ext_localconf.php 7251 2010-04-06 18:57:45Z francois $ */
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// register the hook to actually do the work within TCEmain
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['version'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('version', 'class.tx_version_tcemain.php:&TYPO3\\CMS\\Version\\Hook\\DataHandlerHook');
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass']['version'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('version', 'class.tx_version_tcemain.php:&TYPO3\\CMS\\Version\\Hook\\DataHandlerHook');
// Register hook for overriding the icon status overlay
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_iconworks.php']['overrideIconOverlay']['version'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('version', 'class.tx_version_iconworks.php:&TYPO3\\CMS\\Version\\Hook\\IconUtilityHook');
// Register hook to check for the preview mode in the FE
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['connectToDB']['version_preview'] = 'EXT:version/Classes/Preview.php:TYPO3\\CMS\\Version\\Hook\\PreviewHook->checkForPreview';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/index_ts.php']['postBeUser']['version_preview'] = 'EXT:version/Classes/Preview.php:TYPO3\\CMS\\Version\\Hook\\PreviewHook->initializePreviewUser';
if (TYPO3_MODE == 'BE') {
	// add default notification options to every page
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSconfig('
	tx_version.workspaces.stageNotificationEmail.subject = LLL:EXT:version/Resources/Private/Language/locallang_emails.xml:subject
	tx_version.workspaces.stageNotificationEmail.message = LLL:EXT:version/Resources/Private/Language/locallang_emails.xml:message
	# tx_version.workspaces.stageNotificationEmail.additionalHeaders =
');
}



/**
 * Extension: sys_note
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/sys_note/ext_localconf.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register "switchableControllerActions" manually because it exists no plugin or module for sys_note
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['SysNote']['modules']['Note']['controllers'] = array(
	'Note' => array(
		'actions' => array('list')
	)
);

// Hook into the list module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['recordlist/mod1/index.php']['drawFooterHook'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Classes/Hook/RecordListHook.php:TYPO3\\CMS\\SysNote\\Hook\\RecordListHook->render';
// Hook into the page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawFooterHook'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Classes/Hook/PageHook.php:TYPO3\\CMS\\SysNote\\Hook\\PageHook->render';
// Hook into the info module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/web_info/class.tx_cms_webinfo.php']['drawFooterHook'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Classes/Hook/InfoModuleHook.php:TYPO3\\CMS\\SysNote\\Hook\\InfoModuleHook->render';



/**
 * Extension: lowlevel
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/lowlevel/ext_localconf.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	// Setting up scripts that can be run from the cli_dispatch.phpsh script.
	$TYPO3_CONF_VARS['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_refindex'] = array('EXT:lowlevel/dbint/cli/refindex_cli.php', '_CLI_lowlevel');
	$TYPO3_CONF_VARS['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_cleaner'] = array('EXT:lowlevel/dbint/cli/cleaner_cli.php', '_CLI_lowlevel');
	$TYPO3_CONF_VARS['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_admin'] = array('EXT:lowlevel/admin_cli.php', '_CLI_lowlevel');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['missing_files'] = array('EXT:lowlevel/clmods/class.missing_files.php:TYPO3\\CMS\\Lowlevel\\MissingFilesCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['missing_relations'] = array('EXT:lowlevel/clmods/class.missing_relations.php:TYPO3\\CMS\\Lowlevel\\MissingRelationsCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['double_files'] = array('EXT:lowlevel/clmods/class.double_files.php:TYPO3\\CMS\\Lowlevel\\DoubleFilesCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['rte_images'] = array('EXT:lowlevel/clmods/class.rte_images.php:TYPO3\\CMS\\Lowlevel\\RteImagesCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['lost_files'] = array('EXT:lowlevel/clmods/class.lost_files.php:TYPO3\\CMS\\Lowlevel\\LostFilesCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['orphan_records'] = array('EXT:lowlevel/clmods/class.orphan_records.php:TYPO3\\CMS\\Lowlevel\\OrphanRecordsCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['deleted'] = array('EXT:lowlevel/clmods/class.deleted.php:TYPO3\\CMS\\Lowlevel\\DeletedRecordsCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['versions'] = array('EXT:lowlevel/clmods/class.versions.php:TYPO3\\CMS\\Lowlevel\\VersionsCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['cleanflexform'] = array('EXT:lowlevel/clmods/class.cleanflexform.php:TYPO3\\CMS\\Lowlevel\\CleanFlexformCommand');
	$TYPO3_CONF_VARS['EXTCONF']['lowlevel']['cleanerModules']['syslog'] = array('EXT:lowlevel/clmods/class.syslog.php:TYPO3\\CMS\\Lowlevel\\SyslogCommand');
}



/**
 * Extension: beuser
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/beuser/ext_localconf.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_pre_processing'][] = 'TYPO3\\CMS\\Beuser\\Hook\\SwitchBackUserHook->switchBack';



/**
 * Extension: rtehtmlarea
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/rtehtmlarea/ext_localconf.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


/***************************************************************
 *  Copyright notice
 *
 *  (c) 2005-2012 Stanislas Rolland <typo3(arobas)sjbr.ca>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Configuration of the htmlArea RTE extension
 *
 * @author 	Stanislas Rolland <typo3(arobas)sjbr.ca>
 */
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (!$TYPO3_CONF_VARS['BE']['RTEenabled']) {
	$TYPO3_CONF_VARS['BE']['RTEenabled'] = 1;
}
// Registering the RTE object
$TYPO3_CONF_VARS['BE']['RTE_reg'][$_EXTKEY] = array('objRef' => 'EXT:' . $_EXTKEY . '/class.tx_rtehtmlarea_base.php:&TYPO3\\CMS\\Rtehtmlarea\\RteHtmlAreaBase');
// Make the extension version number available to the extension scripts
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'ext_emconf.php';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['version'] = $EM_CONF[$_EXTKEY]['version'];
// Unserializing the configuration so we can use it here
$_EXTCONF = unserialize($_EXTCONF);
// Add default RTE transformation configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/proc/pageTSConfig.txt">');
// Add default Page TS Config RTE configuration
if (strstr($_EXTCONF['defaultConfiguration'], 'Minimal')) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] = 'Advanced';
} elseif (strstr($_EXTCONF['defaultConfiguration'], 'Demo')) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] = 'Demo';
} else {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] = 'Typical';
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/' . strtolower($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration']) . '/pageTSConfig.txt">');
// Add default User TS Config RTE configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/' . strtolower($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration']) . '/userTSConfig.txt">');
// Add processing of soft references on image tags in RTE content
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'hooks/softref/ext_localconf.php';
// Add Status Report about Conflicting Extensions
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'hooks/statusreport/ext_localconf.php';
// Configure Lorem Ipsum hook to insert nonsense in wysiwyg mode
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('lorem_ipsum') && TYPO3_MODE == 'BE') {
	$TYPO3_CONF_VARS['EXTCONF']['lorem_ipsum']['RTE_insert'][] = 'TYPO3\\CMS\\Rtehtmlarea\\RteHtmlAreaBase->loremIpsumInsert';
}
// Set warning in the Update Wizard of the Install Tool for deprecated Page TS Config properties
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['checkForDeprecatedRtePageTSConfigProperties'] = 'EXT:' . $_EXTKEY . '/hooks/install/class.tx_rtehtmlarea_deprecatedrteproperties.php:&TYPO3\\CMS\\Rtehtmlarea\\Hook\\Install\\DeprecatedRteProperties';
// Initialize plugin registration array
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins'] = array();
// Editor Mode configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditorMode'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditorMode']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/EditorMode/class.tx_rtehtmlarea_editormode.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\EditorMode';
// General Element configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditElement'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditElement']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/EditElement/class.tx_rtehtmlarea_editelement.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\EditElement';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditElement']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditElement']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['MicrodataSchema'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['MicrodataSchema']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/MicrodataSchema/class.tx_rtehtmlarea_microdataschema.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\MicroDataSchema';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['MicrodataSchema']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['MicrodataSchema']['disableInFE'] = 0;
// Inline Elements configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultInline'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultInline']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/DefaultInline/class.tx_rtehtmlarea_defaultinline.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefaultInline';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultInline']['addIconsToSkin'] = 1;
if ($_EXTCONF['enableInlineElements']) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InlineElements'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InlineElements']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/InlineElements/class.tx_rtehtmlarea_inlineelements.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\InlineElements';
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/extensions/InlineElements/res/pageTSConfig.txt">');
}
// Block Elements configuration
// Set compatibility warnings in the Update Wizard of the Install Tool for indentation and alignment
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['compat_version']['tx_rtehtmlarea_indent'] = array(
	'title' => 'htmlArea RTE: Using CSS classes for indentation and alignment',
	'version' => 4002000,
	'description' => '<ul>
				<li><strong>Indentation is produced by a CSS class instead of the blockquote element.</strong><br />You will need to specify in Page TSConfig the class to be used for indentation using property buttons.indent.useClass (default is "indent"). You will need to define this class in your stylesheets and ensure that it is allowed by the RTE transformation (RTE.default.proc). Alternatively, you may continue using the blockquote element by setting property buttons.indent.useBlockquote. You may also want to add the new blockquote button to the RTE toolbar.</li>
				<li><strong>Text alignment is produced by CSS classes instead of deprecated align attribute.</strong><br />You will need to specify in Page TSConfig the class to be used for each text alignment button using property buttons.[<i>left, center, right or justifyfull</i>].useClass (defaults are "align-left", "align-center", "align-right", "align-justify"). You will need to define these classes in your stylesheets, and ensure that they are allowed by the RTE transformation (RTE.default.proc). Alternatively, you may continue using deprecated align attribute by setting property buttons.[<i>left, center, right or justifyfull</i>].useAlignAttribute.</li>
			</ul>'
);
// Add compatibility Page TSConfig for indentation and alignment
if (!\TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('4.2.0')) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/indentalign/pageTSConfig.txt">');
}
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockElements'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockElements']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/BlockElements/class.tx_rtehtmlarea_blockelements.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\BlockElements';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockElements']['addIconsToSkin'] = 0;
// Set compatibility warning in the Update Wizard of the Install Tool for definition lists
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('rtehtmlarea_definitionlist')) {
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['compat_version']['TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefinitionList'] = array(
		'title' => 'htmlArea RTE: Integration of Definition List feature',
		'version' => 4003000,
		'description' => 'Support for definition lists has been integrated into htmlArea RTE.<br />You should uninstall extension "Definition Lists for htmlArea RTE" (key: rtehtmlarea_definitionlist)'
	);
}
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefinitionList'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefinitionList']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/DefinitionList/class.tx_rtehtmlarea_definitionlist.php:&tx_rtehtmlarea_definitionlist';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefinitionList']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockStyle'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockStyle']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/BlockStyle/class.tx_rtehtmlarea_blockstyle.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\BlockStyle';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CharacterMap'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CharacterMap']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/CharacterMap/class.tx_rtehtmlarea_charactermap.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\CharacterMap';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CharacterMap']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Acronym'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Acronym']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/Acronym/class.tx_rtehtmlarea_acronym.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Acronym';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Acronym']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Acronym']['disableInFE'] = 1;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UserElements'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UserElements']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/UserElements/class.tx_rtehtmlarea_userelements.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\UserElements';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UserElements']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UserElements']['disableInFE'] = 1;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextStyle'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextStyle']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/TextStyle/class.tx_rtehtmlarea_textstyle.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\TextStyle';
// Enable images and add default Page TS Config RTE configuration for enabling images with the Minimal and Typical default configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableImages'] = $_EXTCONF['enableImages'] ? $_EXTCONF['enableImages'] : 0;
if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] == 'Demo') {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableImages'] = 1;
}
if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableImages']) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultImage'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultImage']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/DefaultImage/class.tx_rtehtmlarea_defaultimage.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefaultImage';
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultImage']['addIconsToSkin'] = 0;
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Image'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Image']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/TYPO3Image/class.tx_rtehtmlarea_typo3image.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Typo3Image';
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Image']['addIconsToSkin'] = 0;
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Image']['disableInFE'] = 1;
	require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'extensions/TYPO3Image/ext_localconf.php';
	if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] == 'Advanced' || $TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] == 'Typical') {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/image/pageTSConfig.txt">');
	}
}
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultLink'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultLink']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/DefaultLink/class.tx_rtehtmlarea_defaultlink.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefaultLink';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultLink']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/TYPO3Link/class.tx_rtehtmlarea_typo3link.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Typo3Link';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link']['disableInFE'] = 1;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link']['additionalAttributes'] = 'rel';
// Add default Page TS Config RTE configuration for enabling links accessibility icons
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableAccessibilityIcons'] = $_EXTCONF['enableAccessibilityIcons'] ? $_EXTCONF['enableAccessibilityIcons'] : 0;
if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableAccessibilityIcons']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/accessibilityicons/pageTSConfig.txt">');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/accessibilityicons/setup.txt">', 43);
}
// Register features that use the style attribute
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['allowStyleAttribute'] = isset($_EXTCONF['allowStyleAttribute']) && !$_EXTCONF['allowStyleAttribute'] ? 0 : 1;
if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['allowStyleAttribute']) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Color'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Color']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/TYPO3Color/class.tx_rtehtmlarea_typo3color.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Typo3Color';
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Color']['addIconsToSkin'] = 0;
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Color']['disableInFE'] = 0;
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SelectFont'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SelectFont']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/SelectFont/class.tx_rtehtmlarea_selectfont.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\SelectFont';
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SelectFont']['addIconsToSkin'] = 0;
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SelectFont']['disableInFE'] = 0;
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/style/pageTSConfig.txt">');
}
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextIndicator'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextIndicator']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/TextIndicator/class.tx_rtehtmlarea_textindicator.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\TextIndicator';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextIndicator']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextIndicator']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InsertSmiley'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InsertSmiley']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/InsertSmiley/class.tx_rtehtmlarea_insertsmiley.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\InsertSmiley';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InsertSmiley']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InsertSmiley']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Language'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Language']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/Language/class.tx_rtehtmlarea_language.php:&tx_rtehtmlarea_language';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Language']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Language']['disableInFE'] = 0;
// Spell checking configuration
$TYPO3_CONF_VARS['FE']['eID_include']['rtehtmlarea_spellchecker'] = 'EXT:' . $_EXTKEY . '/pi1/class.tx_rtehtmlarea_pi1.php';
$TYPO3_CONF_VARS['BE']['AJAX']['rtehtmlarea::spellchecker'] = 'EXT:' . $_EXTKEY . '/pi1/class.tx_rtehtmlarea_pi1.php:TYPO3\\CMS\\Rtehtmlarea\\Controller\\SpellCheckingController->main';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/SpellChecker/class.tx_rtehtmlarea_spellchecker.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Spellchecker';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['AspellDirectory'] = $_EXTCONF['AspellDirectory'] ? $_EXTCONF['AspellDirectory'] : '/usr/bin/aspell';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['noSpellCheckLanguages'] = $_EXTCONF['noSpellCheckLanguages'] ? $_EXTCONF['noSpellCheckLanguages'] : 'ja,km,ko,lo,th,zh,b5,gb';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['forceCommandMode'] = $_EXTCONF['forceCommandMode'] ? $_EXTCONF['forceCommandMode'] : 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['FindReplace'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['FindReplace']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/FindReplace/class.tx_rtehtmlarea_findreplace.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\FindReplace';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['FindReplace']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['FindReplace']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['RemoveFormat'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['RemoveFormat']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/RemoveFormat/class.tx_rtehtmlarea_removeformat.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\RemoveFormat';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['RemoveFormat']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['RemoveFormat']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['PlainText'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['PlainText']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/PlainText/class.tx_rtehtmlarea_plaintext.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Plaintext';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['PlainText']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['PlainText']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultClean'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultClean']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/DefaultClean/class.tx_rtehtmlarea_defaultclean.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefaultClean';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3HtmlParser'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3HtmlParser']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/TYPO3HtmlParser/class.tx_rtehtmlarea_typo3htmlparser.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Typo3HtmlParser';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3HtmlParser']['disableInFE'] = 1;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['QuickTag'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['QuickTag']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/QuickTag/class.tx_rtehtmlarea_quicktag.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\QuickTag';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['QuickTag']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['QuickTag']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TableOperations'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TableOperations']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/TableOperations/class.tx_rtehtmlarea_tableoperations.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\TableOperations';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TableOperations']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TableOperations']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['AboutEditor'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['AboutEditor']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/AboutEditor/class.tx_rtehtmlarea_abouteditor.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\AboutEditor';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['AboutEditor']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['AboutEditor']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['ContextMenu'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['ContextMenu']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/ContextMenu/class.tx_rtehtmlarea_contextmenu.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\ContextMenu';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['ContextMenu']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['ContextMenu']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UndoRedo'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UndoRedo']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/UndoRedo/class.tx_rtehtmlarea_undoredo.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\UndoRedo';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UndoRedo']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UndoRedo']['disableInFE'] = 0;
// Copy & Paste configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste']['objectReference'] = 'EXT:' . $_EXTKEY . '/extensions/CopyPaste/class.tx_rtehtmlarea_copypaste.php:&TYPO3\\CMS\\Rtehtmlarea\\Extension\\CopyPaste';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste']['mozillaAllowClipboardURL'] = 'https://addons.mozilla.org/firefox/downloads/latest/852/addon-852-latest.xpi';



/**
 * Extension: css_styled_content
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/css_styled_content/ext_localconf.php
 */

$_EXTKEY = 'css_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// unserializing the configuration so we can use it here:
$_EXTCONF = unserialize($_EXTCONF);
if ($_EXTCONF['setPageTSconfig'] || !$_EXTCONF) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:css_styled_content/pageTSconfig.txt">');
}
if ($_EXTCONF['removePositionTypes'] || !$_EXTCONF) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
		TCEFORM.tt_content.imageorient.types.image.removeItems = 8,9,10,17,18,25,26
	');
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['compat_version']['tx_cssstyledcontent_accessibility'] = array(
	'title' => 'CSS Styled Content: Accessibility improvements',
	'version' => 3009000,
	'description' => '<p>The rendering of the following elements will change:
				<ul><li><strong>tt_content.menu</strong> (used f.e. for sitemaps): Instead of div-tags, lists are used now.</li>
				<li><strong>tt_content.mailform</strong>: Mailforms do not use tables anymore, instead, they use the div-tag. Besides that, mailforms are accessible now.</li>
				<li><strong>The p-tag</strong> has been removed from all table cells.</li>
				<li><strong>CSS based "image" and "text with image"</strong><br />As the extension cron_cssstyledimgtext has been merged into the core, rendering of the content elements "image" and "text with image" has been changed to be CSS instead of table based. Read the <a href="http://wiki.typo3.org/index.php/TYPO3_4.0" target="_blank">4.0 release notes</a> for further information.</li></ul>',
	'description_acknowledge' => 'You will have to update your stylesheets to comply with these changes.'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['compat_version']['tx_cssstyledcontent_pagetargets'] = array(
	'title' => 'CSS Styled Content: Default targets for non-frame pages',
	'version' => 4002000,
	'description' => '<p>The default page target is empty (so no target is generated). If you use frames, you have to set target to "page" in Constants.</p>'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['compat_version']['tx_cssstyledcontent_menuhtmlspecialchars'] = array(
	'title' => 'CSS Styled Content: htmlspecialchars in menu content elements',
	'version' => 4003000,
	'description' => '<p>Page titles will get htmlspecialchar\'ed when rendered in "Sitemap/menu" content elements, to avoid generating invalid XHTML.</p>'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['compat_version']['tx_cssstyledcontent_clearerdivsafterintexttextpicelements'] = array(
	'title' => 'CSS Styled Content: clear divs, changed row space, corrected margins',
	'version' => 4004000,
	'description' => '<ul><li>Clear divs will be generated by default for in-text right or left positioned textpic elements.</li><li>The default row space changes to 10px, to be in line with col space and text margin.</li><li>Rendering bugs with wrong margins were fixed (Default CSS changed).</li></ul>'
);
// Register ourselves as "content rendering template" (providing the hooks of "static template 43" = content (default) )
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'] = array(
	'cssstyledcontent/static/',
	'cssstyledcontent/static/v6.0/',
	'cssstyledcontent/static/v4.7/',
	'cssstyledcontent/static/v4.6/',
	'cssstyledcontent/static/v4.5/',
	'cssstyledcontent/static/v4.4/',
	'cssstyledcontent/static/v4.3/',
	'cssstyledcontent/static/v4.2/',
	'cssstyledcontent/static/v3.9/',
	'cssstyledcontent/static/v3.8/'
);



/**
 * Extension: t3skin
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/t3skin/ext_localconf.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	RTE.default.skin = EXT:' . $_EXTKEY . '/rtehtmlarea/htmlarea.css
	RTE.default.FE.skin = EXT:' . $_EXTKEY . '/rtehtmlarea/htmlarea.css
');



/**
 * Extension: t3editor
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/t3editor/ext_localconf.php
 */

$_EXTKEY = 't3editor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	// Register hooks for tstemplate module
	$TYPO3_CONF_VARS['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = 'EXT:t3editor/Classes/class.tx_t3editor_hooks_tstemplateinfo.php:&TYPO3\\CMS\\T3Editor\\Hook\\TypoScriptTemplateInfoHook->preStartPageHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/tstemplate_info/class.tx_tstemplateinfo.php']['postOutputProcessingHook'][] = 'EXT:t3editor/Classes/class.tx_t3editor_hooks_tstemplateinfo.php:&TYPO3\\CMS\\T3Editor\\Hook\\TypoScriptTemplateInfoHook->postOutputProcessingHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['tx_tstemplateinfo'] = 'EXT:t3editor/Classes/class.tx_t3editor_hooks_tstemplateinfo.php:&TYPO3\\CMS\\T3Editor\\Hook\\TypoScriptTemplateInfoHook->save';
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['file_edit'] = 'EXT:t3editor/Classes/class.tx_t3editor_hooks_fileedit.php:&TYPO3\\CMS\\T3Editor\\Hook\\FileEditHook->save';
	$TYPO3_CONF_VARS['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = 'EXT:t3editor/Classes/class.tx_t3editor_hooks_fileedit.php:&TYPO3\\CMS\\T3Editor\\Hook\\FileEditHook->preStartPageHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['typo3/file_edit.php']['preOutputProcessingHook'][] = 'EXT:t3editor/Classes/class.tx_t3editor_hooks_fileedit.php:&TYPO3\\CMS\\T3Editor\\Hook\\FileEditHook->preOutputProcessingHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['typo3/file_edit.php']['postOutputProcessingHook'][] = 'EXT:t3editor/Classes/class.tx_t3editor_hooks_fileedit.php:&TYPO3\\CMS\\T3Editor\\Hook\\FileEditHook->postOutputProcessingHook';
}



/**
 * Extension: reports
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/reports/ext_localconf.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Reports\\Task\\SystemStatusUpdateTask'] = array(
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:' . $_EXTKEY . '/reports/locallang.xml:status_updateTaskTitle',
	'description' => 'LLL:EXT:' . $_EXTKEY . '/reports/locallang.xml:status_updateTaskDescription',
	'additionalFields' => 'TYPO3\\CMS\\Reports\\Task\\SystemStatusUpdateTaskNotificationEmailField'
);
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['tx_reports_WarningMessagePostProcessor'] = 'EXT:reports/reports/status/class.tx_reports_reports_status_warningmessagepostprocessor.php:TYPO3\\CMS\\Reports\\Report\\Status\\WarningMessagePostProcessor';



/**
 * Extension: felogin
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/felogin/ext_localconf.php
 */

$_EXTKEY = 'felogin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
//replace old Login
$pluginContent = trim('
plugin.tx_felogin_pi1 = USER_INT
plugin.tx_felogin_pi1 {
  includeLibs = EXT:felogin/pi1/class.tx_felogin_pi1.php
  userFunc = tx_felogin_pi1->main
}
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '
# Setting ' . $_EXTKEY . ' plugin TypoScript
' . $pluginContent);
$addLine = '
tt_content.login = COA
tt_content.login {
	10 = < lib.stdheader
	20 >
	20 = < plugin.tx_felogin_pi1
}
';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '# Setting ' . $_EXTKEY . ' plugin TypoScript' . $addLine . '', 43);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
mod.wizards.newContentElement.wizardItems.forms {
	elements {
		login {
			icon = gfx/c_wiz/login_form.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms_login_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms_login_description
			tt_content_defValues {
				CType = login
			}
		}
	}
	show :=addToList(login)
}
');

// Page module hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/CmsLayout.php:TYPO3\CMS\Felogin\Hooks\CmsLayout';




/**
 * Extension: form
 * File: /Users/falkner_d2/Sites/Connect-You/typo3/sysext/form/ext_localconf.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Form\Utility\FormUtility::getInstance()->initializeFormObjects()->initializePageTsConfig();



#