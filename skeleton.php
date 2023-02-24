<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Skeleton extends Module
{
    public function __construct()
    {
        $this->name = 'skeleton';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'invertus';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('skeleton');
        $this->description = $this->l('Skeleton Skeleton Skeleton Skeleton Skeleton Skeleton');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

        $this->autoload();

        require_once __DIR__.'/bootstrap/app.php';
    }

    private function autoload()
    {
        include_once "{$this->getLocalPath()}vendor/autoload.php";
    }
}