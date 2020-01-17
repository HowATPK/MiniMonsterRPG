<?php

class User {
    private $id;
    private $email;
    private $password;
    private $money;
    private $role = ['ROLE_USER'];

    public function __construct(string $email,string $password,int $money,int $id = null)
    {
        $this->email = $email;
        $this->password = $password;
        $this->money = $money;
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function getRole(): array
    {
        return $this->role;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

}