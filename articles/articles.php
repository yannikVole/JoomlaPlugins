<?php

jimport('joomla.plugin.plugin');

class plgAPIArticles extends ApiPlugin{
    public function __construct(&$subject,$config = array())
    {
        parent::__construct($subject,$config);

        ApiResource::addIncludePath(dirname(__FILE__).'articles');

        $lang = JFactory::getLanguage();
        $lang->load('com_users',JPATH_ADMINISTRATOR,'',true);

        $this->setResourceAccess('article','public','get');
    }
}
?>