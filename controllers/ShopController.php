<?php
require_once('AppController.php');

class ShopController extends AppController {

    public function shop()
    {
        $this->render([],"shop");
    }

}