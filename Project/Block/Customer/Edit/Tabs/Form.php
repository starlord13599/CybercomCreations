<?php

Mage::loadFileByClassName('block_core_template');

class Block_Customer_Edit_Tabs_Form extends Block_Core_Template
{
    protected $customer = null;


    public function __construct()
    {
        $this->setTemplate('View/customer/edit/tabs/form.php');
    }

    public function setCustomer($customer = null)
    {
        if ($customer) {
            $this->customer = $customer;
        }

        $customer = Mage::getModel('model_customer');

        if ($id = (int) $this->getRequest()->getGet('id')) {
            $customer = $customer->load($id);
        }

        $this->customer = $customer;
        return $this;
    }

    public function getCustomer()
    {
        if (!$this->customer) {
            $this->setCustomer();
        }

        return $this->customer;
    }

    public function getTitle()
    {
        if ($this->getUrl()->getRequest()->getGet('id')) {
            return 'Update Customer';
        }
        return 'Create Customer';
    }
}
