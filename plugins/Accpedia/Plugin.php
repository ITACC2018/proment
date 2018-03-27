<?php

namespace Kanboard\Plugin\Accpedia;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Security\Role;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
		//$this->hook->on('template:layout:css', array('template' => 'plugins/Accpedia/Assets/bootstrap.min.css'));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'Accpedia';
    }

    public function getPluginDescription()
    {
        return t('Accpedia');
    }

    public function getPluginAuthor()
    {
        return 'Ardyanto';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Kanboard/plugin-gantt';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.43';
    }
}
