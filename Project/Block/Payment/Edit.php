<?php
Mage::loadFileByClassName('block_core_template');


class Block_Payment_Edit extends Block_Core_Template
{
    protected $templateName = null;

    public function __construct()
    {
        $this->templateName  = './View/payment/edit.php';
    }

    public function getTabs()
    {
        return Mage::getBlock('block_payment_edit_tabs');
    }

    public function getTabContents()
    {
        $tab = $this->getRequest()->getGet('tabs', $this->getTabs()->getDefaultTab());
        $blockName =  $this->getTabs()->getTabs()[$tab]['block'];
        $block = Mage::getBlock($blockName);

        echo $block->toHtml();
    }
}
