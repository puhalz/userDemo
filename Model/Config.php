<?php

class Config implements ConfigInterface
{
    public function getHostname()
    {
        return "127.0.0.1";
    }

    public function getUsername()
    {
        return "root";
    }

    public function getPassword()
    {
        return "puhal123";
    }

    public function getDatabase()
    {
        return "userDb";
    }
}