{namespace k=Tx_ExtensionBuilder_ViewHelpers}<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
<f:for each="{extension.Plugins}" as="plugin">
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'<k:format.uppercaseFirst>{plugin.key}</k:format.uppercaseFirst>',
	'<k:format.quoteString>{plugin.name}</k:format.quoteString>'
);
<f:if condition="{plugin.switchableControllerActions}">
$pluginSignature = str_replace('_','',$_EXTKEY) . '_{plugin.key}';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_{plugin.key}.xml');
</f:if></f:for>

<f:if condition="{extension.BackendModules}">
if (TYPO3_MODE === 'BE') {
<f:for each="{extension.BackendModules}" as="backendModule">
	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'{extension.vendorName}.' . $_EXTKEY,
		'{backendModule.mainModule}',	 // Make module a submodule of '{backendModule.mainModule}'
		'{backendModule.key}',	// Submodule key
		'',						// Position
		array(<f:if condition="{backendModule.controllerActionCombinations}"><f:then>
			<f:for each="{backendModule.controllerActionCombinations}" as="actionNames" key="controllerName">'{controllerName}' => '<f:for each="{actionNames}" as="actionName" iteration="i">{actionName}<f:if condition="{i.isLast} == 0">, </f:if></f:for>',
			</f:for></f:then><f:else>
			<f:for each="{extension.domainObjectsForWhichAControllerShouldBeBuilt}" as="domainObject">'{domainObject.name}' => '<f:for each="{domainObject.actions}" as="action" iteration="actionIterator">{action.name}<f:if condition="{actionIterator.isLast} == 0">, </f:if></f:for>',</f:for></f:else></f:if>
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_{backendModule.key}.xlf',
		)
	);
</f:for>
}
</f:if>
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', '<k:format.quoteString>{extension.name}</k:format.quoteString>');

<f:for each="{extension.domainObjects}" as="domainObject">
	<k:mapping renderCondition="needsTypeField" domainObject="{domainObject}">
		<f:then>
			<k:mapping domainObject="{domainObject}" renderCondition="isMappedToExternalTable">
				<f:then>
					<k:render partial="TCA/Columns.phpt" arguments="{domainObject:domainObject, settings:settings}" />
				</f:then>
				<f:else>
					<k:render partial="TCA/TypeField.phpt" arguments="{domainObject:domainObject, settings:settings}" />
				</f:else>
			</k:mapping>
		</f:then>
		<f:else>
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('{domainObject.databaseTableName}', 'EXT:{extension.extensionKey}/Resources/Private/Language/locallang_csh_{domainObject.databaseTableName}.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('{domainObject.databaseTableName}');
$TCA['{domainObject.databaseTableName}'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:{extension.extensionKey}/Resources/Private/Language/locallang_db.xlf:{domainObject.databaseTableName}',
		'label' => '{domainObject.listModuleValueLabel}',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
<f:if condition="{domainObject.sorting}">		'sortby' => 'sorting',</f:if>
<f:if condition="{extension.supportVersioning}">		'versioningWS' => 2,
		'versioning_followPages' => TRUE,</f:if>
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
		'searchFields' => '<f:for each="{domainObject.properties}" as="property">{property.fieldName},</f:for>',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/{domainObject.name}.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/{domainObject.databaseTableName}.gif'
	),
);
		</f:else>
	</k:mapping>
</f:for>
?>
