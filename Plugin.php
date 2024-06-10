<?php

namespace Kanboard\Plugin\Invoicer;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
    	$this->addCspRules();
        // Template Override
        //  - Override name should be camelCase e.g. pluginNameExampleCamelCase
        //$this->template->setTemplateOverride('config/webhook', 'kanboardSupport:config/webhook');

        // CSS - Asset Hook - keep filename lowercase
        $this->hook->on('template:layout:css', array('template' => 'plugins/Invoicer/Assets/css/invoicestyle.css'));
        // JS - Asset Hook
        //  - Keep filename lowercase
        //$this->hook->on('template:layout:js', array('template' => 'plugins/Invoicer/Assets/js/invoice.js'));
    	//$this->hook->on('template:layout:js', array('template' => 'plugins/Invoicer/Assets/js/jsPDF_script.js'));
    	//$this->hook->on('template:layout:js', array('template' => 'plugins/Invoicer/Assets/js/jspdf.umd.min.js'));
    	//$this->hook->on('template:layout:js', array('template' => 'plugins/Invoicer/Assets/js/html2canvas.min.js'));
    	//$this->hook->on('template:layout:js', array('template' => 'plugins/Invoicer/Assets/js/jspdf-html2canvas.min.js'));
        // SETTINGS APPLICATION
        $this->template->hook->attach('template:config:application', 'Invoicer:config/invoiceConfig');
        // PROJECT DROPDOWN BUTTON
        $this->template->hook->attach('template:project:dropdown', 'Invoicer:project_header/buttonInvoice');
    	//$this->template->hook->attach('template:task:sidebar:information', 'Invoicer:invoice');
        // HELPER
        //$this->helper->register('invoicerHelper', '\Kanboard\Plugin\Invoicer\Helper\invoicerHelper');

    }

	public function addCspRules() 
	{
        // get current csp rules
    	$cspRules = $this->container['cspRules']; 
    	$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    	// add new domain 
    	$cspRules['script-src'] =  "'unsafe-inline' 'self' https://fonts.googleapis.com  https://fonts.gstatic.com http://php743.localhost.com https://www.gstatic.com https://cdnjs.cloudflare.com " . $root;
    	$cspRules['style-src'] =  "'unsafe-inline' 'self' https://fonts.googleapis.com https://fonts.gstatic.com http://php743.localhost.com https://www.gstatic.com https://cdnjs.cloudflare.com " . $root;
    	$cspRules['font-src'] =  "'unsafe-inline' 'self' https://fonts.googleapis.com https://fonts.gstatic.com http://php743.localhost.com https://www.gstatic.com https://cdnjs.cloudflare.com " . $root;
    
    	// update cspRules with the ones we changed
    	$this->container['cspRules'] = $cspRules;
	}

    //public function getClasses()
    //{

    //}

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
