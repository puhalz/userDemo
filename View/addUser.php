<?php

require_once("../Controller/UserController.php");

$userController = new UserController();

$userController->addUser($_POST);