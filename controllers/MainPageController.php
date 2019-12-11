<?php
require_once('AppController.php');

class mainPageController extends AppController {

    public function mainPage()
    {
        $this->render([],"mainPage");
    }
}