<?php
Mage::loadFileByClassName('block_core_template');

class Block_Customer_Grid extends Block_Core_Template
{
    protected $customers = null;
    protected $templateName = null;


    public function __construct()
    {
        $this->templateName  = './View/customer/grid.php';
    }

    public function setCustomers($customers = null)
    {
        if (!$customers) {
            $customer = Mage::getModel('model_customer');
            $customers = $customer->fetchAll();

            if ($customers) {
                $customers = $customers->getData();
            }
        }

        $this->customers = $customers;
        return $this;
    }

    public function getCustomers()
    {
        if (!$this->customers) {
            $this->setCustomers();
        }

        return $this->customers;
    }
}
