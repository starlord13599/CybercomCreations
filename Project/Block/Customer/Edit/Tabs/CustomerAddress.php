<?php
Mage::getBlock('block_core_template');


class Block_Customer_Edit_Tabs_CustomerAddress extends Block_Core_Template
{

    public function __construct()
    {
        $this->setTemplate('View/customer/edit/tabs/customeraddress.php');
    }
}
