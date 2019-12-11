
<?php

require_once 'controllers\SecurityController.php';
require_once 'controllers\mainPageController.php';
class Routing{
    private $routes=[];
    
    public function __construct()
    {
        $this->routes = [
            'mainPage'=>[
                'controller'=>'mainPageController',
                'action'=>'mainPage'
            ],

            'index'=>[
                'controller'=>'SecurityController',
                'action'=>'login'
            ]
            ];
    }


    public function run()
    {
        $page=isset($_GET['page'])? $_GET['page']:'index';

        if(isset($this->routes[$page]))
        {
            $controller=$this->routes[$page]['controller'];
            $action=$this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}