<?php

namespace Constructers;

class Constructer
{
    public function __construct()
    {
        $this->setTemplateDir('templates/');
        $this->setConfigDir('config/');
        $this->setCompileDir('templates_c/');
        $this->setCacheDir('cache/');
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('constructer', 'Constructer');
    }
}
