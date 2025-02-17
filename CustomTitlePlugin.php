<?php

/**
 * @file plugins/generic/customTitle/CustomTitlePlugin.php
 *
 * Copyright (c) 2013-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CustomTitlePlugin
 *
 * @brief This plugin allows to add a custom title to the journal.
 */

namespace APP\plugins\generic\customTitle;

use APP\core\Application;
use APP\template\TemplateManager;
use Exception;
use PKP\plugins\Hook;
use PKP\facades\Locale;
use PKP\plugins\GenericPlugin;
use PKP\core\PKPApplication;


class CustomTitlePlugin extends GenericPlugin
{
    /**
     * @copydoc Plugin::register()
     *
     * @param null|mixed $mainContextId
     */
    public function register($category, $path, $mainContextId = null)
    {
        if (parent::register($category, $path, $mainContextId)) {
            if ($this->getEnabled($mainContextId)) {
                $this->setupLocalizationOverriding();
            }
            return true;
        }
        return false;
    }


    public function setupLocalizationOverriding(): void 
    {
        $localePath = $this->getPluginPath() . '/locale';
        if (is_dir($localePath)) {
            Locale::registerPath($localePath, PHP_INT_MAX);
        }
    }

    

    /**
     * @copydoc Plugin::getDisplayName
     */
    public function getDisplayName()
    {
        return __('plugins.generic.customTitle.name');
    }

    /**
     * @copydoc Plugin::getDescription
     */
    public function getDescription()
    {
        return __('plugins.generic.customTitle.description');
    }

}