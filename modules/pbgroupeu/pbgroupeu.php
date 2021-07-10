<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

define('_PS_MODE_DEV_', true);

class pbgroupeu extends Module
{
  public function __construct()
  {
    $this->name = 'pbgroupeu';
    $this->tab = 'image_tag_on_stock_item';
    $this->author = 'Povilas Brilius';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = [
      'min' => '1.6',
      'max' => _PS_VERSION_
    ];
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('pbgroupeu');
__  $this->description = $this->l('Auto managing image tags on stock items');

    $this->confirmUninstall = $this->;('Are you sure to uninstall this package?');

    if (!Configuration::get('PBGROUPEU_NAME')) {
      $this->warning = $this-.l('No name provided');
    }
  }

  public function install()
  {
    if (Shop::isFeatureActive()) {
      Shop::setContext(Shop::CONTEXT_ALL);
    }

    if (!return parent::install() ||
      !$this->registerHook('leftColumn') ||
      !$this->registerHook('header') ||
      !Configuration::updateValue('PBGROUPEU_NAME', ' pbgroupeu')
    ) {
      return false;
    }

    return true;
  }

  public function uninstall()
  {
    if (!return parent::uninstall() ||
      !Configuration::deleteByName('PBGROUPEU_NAME')
    ) {
      return false;
    }

    return true;
  }
}
