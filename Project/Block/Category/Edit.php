<?php
Mage::loadFileByClassName('Block_Core_Template');


class Block_Category_Edit extends Block_Core_Template
{
    protected $templateName = null;


    public function __construct()
    {
        $this->templateName  = './View/category/edit.php';
    }

    public function getTabs()
    {
        return Mage::getBlock('block_category_edit_tabs');
    }

    public function getTabContents()
    {
        $tab = $this->getRequest()->getGet('tabs', $this->getTabs()->getDefaultTab());
        $blockName =  $this->getTabs()->getTabs()[$tab]['block'];
        $block = Mage::getBlock($blockName);

        echo $block->toHtml();
    }
}
