<?php
require_once "./Block/Core/Template.php";

class Block_Core_Layout_Left extends Block_Core_Template
{

    public function __construct()
    {
        $this->setTemplate('View/core/layout/left.php');
    }
}
