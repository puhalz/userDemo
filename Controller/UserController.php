<?php

require_once("../Model/UserModel.php");
require_once("../Service/UserService.php");
require_once("../Repository/UserRepository.php");

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService(new UserRepository());
    }

    public function addUser($postData)
    {
        if (!empty($postData['email']) && !empty($postData['password'])) {
            $user = new UserModel($postData['email'], $postData['password']);

            $this->userService->add($user);
        }
    }
}