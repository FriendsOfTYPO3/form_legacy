<?php
defined('TYPO3_MODE') or die();

// Register static TypoScript resource
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('form_legacy', 'Configuration/TypoScript/', 'Form Legacy Default TS');
