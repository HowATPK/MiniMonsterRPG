<?php
require_once('AppController.php');
require_once __DIR__.'//..//models//User.php';
require_once __DIR__.'//..//repository//repo.php';
require_once __DIR__.'//..//repository//UserRepo.php';
class SecurityController extends AppController {

    public function login()
    {
        $userRepository = new UserRepository();
    
    if (!empty($_POST['email'])) {
        $user=$userRepository->getUser($_POST['email']);
        if($user==null) 
            {
            return $this->render(['message' => ['Email not recognized']],'login');
            }
            
        if (password_verify(($_POST['password']),$user->getPassword()))
            {
            $_SESSION["email"] = $user->getEmail();
            $_SESSION["id"] = $user-> getId();
            $_SESSION["role"] = $user->getRole();
            $_SESSION["monay"] = $user->getMoney();
            
            $url = "http://$_SERVER[HTTP_HOST]/minimonsterrpg/";
            header("Location: {$url}?page=mainPage");
            exit();
            } 
        else 
            {
                return $this->render(['message' => ['Wrong password']],'login');
            }
        }
       
        $this->render([],"login");
    }

    public function backToLogin()
    {
        $this->render([],"login");
    }

    public function logout()
    {
        session_unset();
        session_destroy();       

        $this->render( ['message' => ['You have been successfully logged out!']],"login");
    }

}