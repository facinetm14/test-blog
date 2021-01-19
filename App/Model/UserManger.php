<?php
namespace App\Model;
use App\Model\User;
use App\Model\Connexion;
use Exception;
use PDO;

require_once 'User.php';
require_once 'Connexion.php';

class UserManager
{
    public function add(User $user)
    {
        
        $req = (Connexion::getInstance())->prepare("INSERT INTO user (login,password) VALUES (:login,:password)");

        $req->bindValue(':login',$user->getLogin(),PDO::PARAM_STR);
        $req->bindValue(':password',$user->getPassword(),PDO::PARAM_STR);
        
       if($req->execute()){

            $_SESSION['message'] = "You have successful registered";

       } 
        
        header('Location: home');
    }

    // function login user

    public function login (User $user)
    {
        
        $req = (Connexion::getInstance())->prepare("SELECT * FROM user WHERE login=:login AND password=:password");

        $req->bindValue(':login',$user->getLogin(),PDO::PARAM_STR);
        $req->bindValue(':password',$user->getPassword(),PDO::PARAM_STR);
        
       if($req->execute()){

        if($req->fetch()!=null)
        {
            $_SESSION['message'] = 'Welcome '.$user->getLogin();
            $_SESSION['userLogin'] = $user->getLogin();

            header('Location:');
        }

       } 
        
        else header('Location:home');
    }

 
}

