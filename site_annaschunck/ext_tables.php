<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

call_user_func(
    function() {
        // Add static TypoScript files
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            'site_annaschunck',
            'Configuration/TypoScript',
            'Template for the Website of Anna Schunck'
        );

        // Custom code ...
    }
);
