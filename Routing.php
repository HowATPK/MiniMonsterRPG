
<?php

require_once 'controllers\SecurityController.php';
require_once 'controllers\mainPageController.php';
require_once 'controllers\registerController.php';
require_once 'controllers\ShopController.php';
require_once 'controllers\BackpackController.php';
require_once 'controllers\adminController.php';

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
                'action'=>'backToLogin'
            ],

            'login'=>[
                'controller'=>'SecurityController',
                'action'=>'login'
            ],

            'logout'=>[
                'controller'=>'SecurityController',
                'action'=>'logout'
            ],

            'Shop'=>[
                'controller'=>'ShopController',
                'action'=>'shop'
            ],

            'MediumMedicine'=>[
                'controller'=>'ShopController',
                'action'=>'MediumMedicine'
            ],

            'BigMedicine'=>[
                'controller'=>'ShopController',
                'action'=>'BigMedicine'
            ],

            'SmallMedicine'=>[
                'controller'=>'ShopController',
                'action'=>'SmallMedicine'
            ],

            'RedBall'=>[
                'controller'=>'ShopController',
                'action'=>'RedBall'
            ],

            'Backpack'=>[
                'controller'=>'BackpackController',
                'action'=>'backpack'
            ],

            'register'=>[
                'controller'=>'RegisterController',
                'action'=>'register'
            ],

            'Admin' => [
                'controller' => 'AdminController',
                'action' => 'Admin'
            ],
         
            
            'admin_users' => [
            'controller' => 'adminController',
            'action' => 'users'
            ],

            'user_items' => [
                'controller' => 'BackpackController',
                'action' => 'items'
            ],
               
               

            
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