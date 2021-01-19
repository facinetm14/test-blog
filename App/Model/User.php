<?php
namespace App\Model;
class User
{
    private $id;
    private $login;
    private $password;

    // getters, in this cas I don't need a setters because user won't be modify
    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

}