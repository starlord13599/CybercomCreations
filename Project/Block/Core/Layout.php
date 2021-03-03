<?php
// require_once "Template.php";
Mage::loadFileByClassName('block_core_template');
// require_once "./Block/Core/Layout/Content.php";
Mage::loadFileByClassName('block_core_layout_content');
// require_once "./Block/Core/Layout/Header.php";
Mage::loadFileByClassName('block_core_layout_header');
// require_once "./Block/Core/Layout/Footer.php";
Mage::loadFileByClassName('block_core_layout_footer');
// require_once "./Block/Core/Layout/Left.php";
Mage::loadFileByClassName('block_core_layout_left');
// require_once "./Block/Core/Layout/Right.php";
Mage::loadFileByClassName('block_core_layout_right');



class Block_Core_Layout extends Block_Core_Template
{

    public function __construct()
    {
        $this->setTemplate("View/core/layout/threeColumn.php");
        $this->prepareChildren();
    }

    public function prepareChildren()
    {

        $this->addChild(new Block_Core_Layout_Header(), 'header');
        $this->addChild(new Block_Core_Layout_Content(), 'content');
        $this->addChild(new Block_Core_Layout_Footer(), 'footer');
        $this->addChild(new Block_Core_Layout_Left(), 'left');
        // $this->addChild(new Block_Core_Layout_Right(), 'right');
    }
}
