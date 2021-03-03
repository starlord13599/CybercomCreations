<?php

Mage::loadFileByClassName('block_core_template');

class Block_Admin_Edit_Tabs_Form extends Block_Core_Template
{

    protected $admin = null;

    public function __construct()
    {
        $this->setTemplate('View/admin/edit/tabs/form.php');
    }

    public function setAdmin($admin = null)
    {
        if ($admin) {
            $this->admin = $admin;
        }

        $admin = Mage::getModel('model_admin');

        if ($id = (int) $this->getRequest()->getGet('id')) {
            $admin = $admin->load($id);
        }

        $this->admin = $admin;
        return $this;
    }

    public function getAdmin()
    {
        if (!$this->admin) {
            $this->setAdmin();
        }

        return $this->admin;
    }


    public function getTitle()
    {
        if ((int) $this->getUrl()->getRequest()->getGet('id')) {
            return 'Update Admin';
        }
        return 'Create Admin';
    }
}
