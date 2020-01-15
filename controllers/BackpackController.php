<?php
require_once('AppController.php');

class BackpackController extends AppController {

    public function backpack()
    {
        $this->render([],"backpack");
    }

}