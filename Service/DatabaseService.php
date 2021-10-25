<?php

require("../Model/ConfigInterface.php");

class DatabaseService
{
    private  $config;

    private  $database;

    public function __construct(ConfigInterface $config)
    {
        $this->database = new mysqli(
            $config->getHostname(),
            $config->getUsername(),
            $config->getPassword(),
            $config->getDatabase()
        );

        var_dump($this->database);
    }

    public function getConnection()
    {
        return $this->database;
    }
}