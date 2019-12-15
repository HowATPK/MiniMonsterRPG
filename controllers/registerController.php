<?php
require_once('AppController.php');

class registerController extends AppController {

    public function register()
    {
        $this->render([],"register");
    }

}