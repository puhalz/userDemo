<?php

class UserModel
{
    private $email;

    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}