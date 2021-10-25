<?php

require_once("../Repository/UserRepository.php");

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = new UserRepository();
    }

    public function add(UserModel $user)
    {
        $this->userRepository->create($user);
    }
}