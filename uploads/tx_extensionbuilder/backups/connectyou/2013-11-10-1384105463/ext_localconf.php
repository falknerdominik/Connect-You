<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Cymarketplace',
	array(
		'User' => 'list, show, new, create, edit, update, delete',
		'Timeset' => 'list, new, create, edit, update, delete',
		'Assignment' => 'list, show, new, create, edit, update, delete',
		'Role' => 'list, new, create, edit, update, delete',
		'Project' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'User' => 'create, update, delete',
		'Timeset' => 'create, update, delete',
		'Assignment' => 'create, update, delete',
		'Role' => 'create, update, delete',
		'Project' => 'create, update, delete',
		
	)
);

?>