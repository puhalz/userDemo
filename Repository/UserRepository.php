<?php

require_once("../Service/DatabaseService.php");
require_once("../Model/Config.php");
require_once("../Model/UserModel.php");

class UserRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = new DatabaseService(new Config());
    }

    public function create(UserModel $user)
    {
        $query = sprintf(
            "INSERT INTO user (email, password) VALUES ('%s', '%s')", $user->getEmail(), $user->getPassword()
        );

        $stmt = $this->connection->getConnection()->query($query);
    }
}