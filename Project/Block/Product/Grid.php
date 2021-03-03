<?php
Mage::loadFileByClassName('block_core_template');

class Block_Product_Grid extends Block_Core_Template
{
    protected $products = null;

    public function __construct()
    {
        $this->templateName  = './View/products/grid.php';
    }

    public function setProducts($products = null)
    {
        if (!$products) {
            $product = Mage::getModel('model_Product');
            $products = $product->fetchAll();
            if ($products) {
                $products = $products->getData();
            }
        }

        $this->products = $products;
        return $this;
    }

    public function getProducts()
    {
        if (!$this->products) {
            $this->setProducts();
        }

        return $this->products;
    }
}
