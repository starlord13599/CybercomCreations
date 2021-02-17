<?php
require_once 'C:\xampp\htdocs\Project\Modal\Core\Request.php';

class Admin
{
    public $request = null;
    public function __construct()
    {
        $this->request = new Request();
    }


    public function redirect($controllerName = null, $actionName = null, $params = null, $resetprams = false)
    {
        return header("location:{$this->getUrl($controllerName,$actionName,$params,$resetprams)}");
    }

    public function getUrl($controllerName = null, $actionName = null, $params = null, $resetprams = false)
    {

        $final = $_GET;
        if ($resetprams) {
            $final = [];
        }

        if (!$controllerName) {
            $controllerName = $this->request->getGet('c');
        }
        if (!$actionName) {
            $actionName = $this->request->getGet('a');
        }

        $final['a'] = $actionName;
        $final['c'] = $controllerName;

        if (is_array($params)) {
            $final = array_merge($final, $params);
        }

        $queryString = http_build_query($final);
        unset($final);
        return "http://localhost/Project/?{$queryString}";
    }
}
