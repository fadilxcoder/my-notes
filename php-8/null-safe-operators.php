<?php

class User
{
    private $name = 'FX';

    private $password = 'passwd';

    private $email = 'fadil@xcoder.developer';

    public function getPassword()
    {
        return $this->password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

$user = new User();
$user = null;

$vars = $user?->getEmail();
var_dump($vars);