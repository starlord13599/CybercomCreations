<?php


class Front
{

    public static function init()
    {


        if (!array_key_exists('a', $_GET) && !array_key_exists('c', $_GET)) {
            $controllerName = 'product';
            $actionName = 'indexAction';
        } else {
            $controllerName =  ucfirst($_GET['c']);
            $actionName = $_GET['a'] . "Action";
        }

        $concat = "Controller_" . $controllerName;
        require_once "./Controller/{$controllerName}.php";
        $controller = new $concat();
        $controller->$actionName();
    }
}
