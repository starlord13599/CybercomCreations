<?php


class Front
{

    public static function init()
    {
        $controllerName = ucfirst($_GET['c']);
        $actionName = $_GET['a'];
        require_once "./Controller/{$controllerName}/{$controllerName}.php";
        $controller = new $controllerName();
        $controller->$actionName();
    }
}
