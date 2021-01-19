<?php
use App\Model\UserManager;
use App\Model\User;
require_once 'App/Model/User.php';
require_once 'App/Model/UserManger.php';
if(isset($_POST['login']) && isset($_POST['password']))
{ 
    if(!empty($_POST['login']) && !empty($_POST['password']))
    { 
        
        $user = new User;
        $user->setLogin(strip_tags((htmlspecialchars($_POST['login']))));
        $password = htmlspecialchars(strip_tags($_POST['password']));
        $user->setPassword(sha1($password));

        $userManager = new UserManager;
        
        $userManager->login($user);


    }
}
header('Location:');