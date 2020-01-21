<?php
require_once('AppController.php');
require_once __DIR__.'//..//Models//Item.php';
require_once __DIR__.'//..//repository//repo.php';
require_once __DIR__.'//..//repository//UserRepo.php';

class BackpackController extends AppController {

    public function backpack()
    {
        $this->render([],"backpack");
    }

    public function items(): void
    {
        $item = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200);
        echo $item->getItems() ? json_encode($item->getItems()) : '';
    }

}