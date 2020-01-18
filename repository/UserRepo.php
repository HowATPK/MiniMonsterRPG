<?php

require_once "repo.php";
require_once __DIR__.'//..//Models//User.php';

class UserRepository extends Repository {

    public function getUser(string $email): ?User 
    {
        $stmt = $this->database->connect()->prepare('SELECT * FROM user  where email = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }
        return new User($user['email'],$user['password'],$user['money'],$user['ID_user'],$user['id_rola']);
    }

    public function NewUser(string $email,string $login,string $password,string $salt,date $date)
    {
        $stmt = $this->database->connect()->prepare('
        INSERT INTO `user` (`ID_user`, `id_rola`,`email`, `login`, `password`, `salt`, `created_at`,`money`) 
        VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([1,$email,$login,$password,$salt,$date,200]);
    }

    public function getUsers(): array {

        $stmt = $this->database->connect()->prepare('SELECT * FROM user where email != :email;');
        $stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getMonay(string $email):int {
        $stmt=$this->database>conntect()->prepare('SELECT monay FROM user where email = :email;');
        $stmt->bindParam(':email',$email, PDO::PARAM_STR);
        $stmt->execute();
        $UserMonay=$stmt->fetch(PDO::FETCH_ASSOC);
        return $UserMonay;
    }

    public function setMonay(string $email,int $newMonayWalue){
        $stmt=$this->database>conntect()->prepare('UPDATE user t SET t.monay = ? WHERE email = ?;');
        $stmt->execute([$newMonayWalue,$email]);
    }
}