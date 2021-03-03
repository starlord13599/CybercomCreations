<?php

Mage::loadFileByClassName('block_core_template');

class Block_Admin_Edit_Tabs extends Block_Core_Template
{

    protected $tabs = [];
    protected $defaultTab = null;

    public function __construct()
    {
        $this->setTemplate('View/admin/edit/tabs.php');
        $this->prepareTabs();
    }

    public function prepareTabs()
    {
        $this->addTab('Form', ['label' => 'Form', 'block' => 'Block_Admin_Edit_Tabs_Form']);
        $this->setDefaultTab('Form');
        return $this;
    }

    public function getDefaultTab()
    {
        return $this->defaultTab;
    }

    public function setDefaultTab($value)
    {
        $this->defaultTab = $value;
        return $this;
    }


    public function setTabs(array $tabs)
    {
        $this->tabs = $tabs;
        return $this;
    }

    public function getTabs()
    {
        return $this->tabs;
    }

    public function addTab($key, $value = [])
    {
        $this->tabs[$key] = $value;
    }

    public function getTab($key)
    {
        if (!array_key_exists($key, $this->tabs)) {
            return null;
        }

        return $this->tabs[$key];
    }

    public function removeTab()
    {
        if (array_key_exists($key, $this->tabs)) {
            unset($this->tabs[$key]);
        }
        return $this;
    }
}
