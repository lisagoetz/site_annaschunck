<?php

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:site_annaschunck/Configuration/RTE/Default.yaml';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp';

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

call_user_func(
    function() {
        // Custom code ...
    }
);

