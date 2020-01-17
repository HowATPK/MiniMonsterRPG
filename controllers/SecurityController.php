<?php
require_once('AppController.php');
require_once __DIR__.'//..//models//User.php';
class SecurityController extends AppController {

    public function login()
    {

        //sample users list until we connect to a database
    $users = 
    [
        new User('adrian.widlak@pk.edu.pl','Adrian',1000),
        new User('krzysztof.krawczyk@pk.edu.pl','parostatek',1000),
    ];

    
    if (!empty($_POST['email'])) {
        
        //we'll replace this with a query to the database
        $user=null;
        foreach ($users as $u) {
        if ($u->getEmail() === $_POST['email']) {
        $user = $u;
        break;
        }
        }
        if($user==null) {
        return $this->render(['message' => ['Email not recognized']],'login');
        }
        if ($user->getPassword() !== ($_POST['password'])) {
        return $this->render(['message' => ['Wrongpassword']],'login');
        } else {
        $_SESSION["id"] = $user->getEmail();
        $_SESSION["role"] = $user->getRole();

        $url = "http://$_SERVER[HTTP_HOST]/minimonsterrpg/";
        header("Location: {$url}?page=mainPage");
        exit();
        }
        }
       
        $this->render([],"login");
    }

    public function logout()
    {
        session_unset();
        session_destroy();       

        $this->render( ['message' => ['You have been successfully logged out!']],"login");
    }

}