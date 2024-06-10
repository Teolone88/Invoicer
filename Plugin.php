<?php

namespace Kanboard\Plugin\Invoicer;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        // Template Override
        //  - Override name should be camelCase e.g. pluginNameExampleCamelCase
        //$this->template->setTemplateOverride('config/webhook', 'kanboardSupport:config/webhook');

        // CSS - Asset Hook - keep filename lowercase
        //$this->hook->on('template:layout:css', array('template' => 'plugins/KanboardSupport/Assets/css/kanboard-support.css'));
        //if (!file_exists('plugins/ContentCleaner') || !file_exists('plugins/PluginManager')) {
        //    $this->hook->on('template:layout:css', array('template' => 'plugins/KanboardSupport/Assets/css/messages.css'));
        //}

        // JS - Asset Hook
        //  - Keep filename lowercase
        $this->hook->on('template:layout:js', array('template' => 'plugins/Invoicer/Assets/js/invoicer-support.js'));
        // SETTINGS APPLICATION
        $this->template->hook->attach('template:config:application', 'Invoicer:config/invoiceConfig');
        // PROJECT DROPDOWN BUTTON
        $this->template->hook->attach('template:project:dropdown', 'Invoicer:project_header/buttonInvoice');
    	//$this->template->hook->attach('template:task:sidebar:information', 'Invoicer:invoice');
        // HELPER
        //$this->helper->register('invoicerHelper', '\Kanboard\Plugin\Invoicer\Helper\invoicerHelper');
    }

    public function getClasses()
    {
        return array(
            'Plugin\Invoicer\Model' => array(
                'invoiceModel',
            )
        );
    }

    //public function onStartup()
    //{
    //    Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    //}

    public function getPluginName()
    {
        return 'Invoicer';
    }

    public function getPluginDescription()
    {
        return t('Generate Invoice templates from projects and related tasks');
    }

    public function getPluginAuthor()
    {
        return 'Teo Lo Piparo';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples: '>=1.0.37' '<1.0.37' '<=1.0.37'
        // Tested on KB v1.2.20 upto plugin v2.8.0, then KB v1.2.32+
        return '>=1.0.00';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/teolopiparo/Invoicer';
    }
}
