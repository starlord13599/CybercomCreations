<?php

require_once "./Controller/Core/Front.php";

class Mage
{

    public static function init()
    {
        Front::init();
    }
}


Mage::init();
