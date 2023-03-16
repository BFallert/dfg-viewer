<?php
defined('TYPO3_MODE') or die();

// Register static typoscript.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'dfgviewer-ma',
    'Configuration/TypoScript',
    'DFG-Viewer-ma: Main TypoScript'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'dfgviewer-ma',
    'Configuration/TypoScript/Plugins/News/changelog.typoscript',
    'DFG-Viewer-ma: News: Changelog Configuration'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'dfgviewer-ma',
    'Configuration/TypoScript/Plugins/News/faq.typoscript',
    'DFG-Viewer-ma: News: FAQ Configuration'
);
