<?php
namespace Kanboard\Plugin\ExportCompleted;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    /**
     *
     */
    public function initialize()
    {
		//Substitui Template header pelo do plugin
        $this->template->setTemplateOverride('export/header', 'ExportCompleted:export/header');

        //Adiciona novo template
		$this->template->hook->attach('template:export:completed', 'ExportCompleted:export/completed');
    }

    /**
     *
     */
    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    /**
     * @return string
     */
    public function getPluginName()
    {
        return 'Exportar tarefas finalizadas';
    }

    /**
     * @return string
     */
    public function getPluginDescription()
    {
        return ('Plugin para adicionar exportação de tarefas baseado nas datas de finalização.)');
    }

    /**
     * @return string
     */
    public function getPluginAuthor()
    {
        return 'Caio Maia';
    }

    /**
     * @return string
     */
    public function getPluginVersion()
    {
        return '1.0.0';
    }
}
