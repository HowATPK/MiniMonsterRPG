<?php
require_once('AppController.php');
require_once __DIR__.'//..//repository//repo.php';
require_once __DIR__.'//..//repository//UserRepo.php';

class registerController extends AppController {

    public function register()
    {
            $userRepository = new UserRepository();
            if(isset($_POST['buttonregister']))
            {
                
                if (empty($_POST['email'])) 
                {
                    return $this->render(['Email not recognized'],'register');
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
                if($tempuser=$userRepository->getUser($_POST['email']))return $this->render(['message' => ['This email already Exist!']],'register');

                if($_POST['email']==$_POST['repeatemail'] and $_POST['password']==$_POST['repeatpassword'])
                {
                    $hashed=password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $userRepository->NewUser($_POST['email'],$_POST['email'],$hashed,'',date("Y-m-d"));
                    $url = "http://$_SERVER[HTTP_HOST]/minimonsterrpg/";
                    header("Location: {$url}?page=login");
                }
                $this->render(['message' => ['bad data']],"register");
            }
        $this->render([],"register");
    }

}