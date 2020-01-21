<?php

require_once('AppController.php');
require_once __DIR__.'//..//repository//repo.php';
require_once __DIR__.'//..//models//User.php';
require_once __DIR__.'//..//repository//UserRepo.php';

class AdminController extends AppController {
    
  


    public function Admin()
    {
    $userRepo = new UserRepository();
    $temUsr=$userRepo->getUser( $_SESSION["email"]);
    //$id=$temUsr->getEmail();
    $this->render(['message' => $temUsr],'Admin');
    }

    public function users()
    {
     $userRepo = new UserRepository();
     header('Content-type: application/json');
     http_response_code(200);
     echo $userRepo->getUsers() ? json_encode($userRepo->getUsers()) : '';
    }

}