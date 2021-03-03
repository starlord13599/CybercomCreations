<?php

Mage::loadFileByClassName('block_core_template');

class Block_Category_Edit_Tabs_Category extends Block_Core_Template
{

    public function __construct()
    {
        $this->setTemplate('View/category/edit/tabs/category.php');
    }
}
