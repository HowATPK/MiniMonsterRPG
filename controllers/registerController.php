<?php
require_once('AppController.php');
require_once __DIR__.'//..//repository//repo.php';
require_once __DIR__.'//..//repository//UserRepo.php';

class registerController extends AppController {

    public function register()
    {
        $userRepository = new UserRepository();
        if (empty($_POST['email'])) 
        {
            return $this->render(['message' => ['Email not recognized']],'register');
        }
        if(empty($_POST['repeatemail']))
        {
            return $this->render(['message' => ['RepeatEmail not recognized']],'register');
        }
        if(empty($_POST['password']))
        {
            return $this->render(['message' => ['password not recognized']],'register');
        }
        if(empty($_POST['repeatpassword']))
        {
            return $this->render(['message' => ['repeat password not recognized']],'register');
        }
        if($_POST['email']==$_POST['repeatemail'] and $_POST['password']==$_POST['repeatpassword'])
        {
            
        }
        
        $this->render([],"register");
    }

}