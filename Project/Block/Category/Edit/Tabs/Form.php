<?php

Mage::loadFileByClassName('block_core_template');

class Block_Category_Edit_Tabs_Form extends Block_Core_Template
{
    protected $category = null;


    public function __construct()
    {
        $this->setTemplate('View/category/edit/tabs/form.php');
    }

    public function setCategory($category = null)
    {
        if ($category) {
            $this->category = $category;
        }

        $category = Mage::getModel('model_category');

        if ($id = (int) $this->getRequest()->getGet('id')) {
            $category = $category->load($id);
        }

        $this->category = $category;
        return $this;
    }

    public function getCategory()
    {
        if (!$this->category) {
            $this->setCategory();
        }

        return $this->category;
    }

    public function getTitle()
    {
        if ((int) $this->getUrl()->getRequest()->getGet('id')) {
            return 'Update Product';
        }
        return 'Create Product';
    }
}
