<?php

Mage::loadFileByClassName('block_core_template');

class Block_Product_Edit_Tabs_Media extends Block_Core_Template
{

    public function __construct()
    {
        $this->setTemplate('View/products/edit/tabs/media.php');
    }
}
