<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

defined('TYPO3') or die();

// PageTS for adding custom page layouts
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '@import "EXT:bootstrap_template/Configuration/TsConfig/Page/All.tsconfig"'
);

// Add rootline fields for template usage
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',layout,backend_layout';
