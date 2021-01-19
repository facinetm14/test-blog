<?php
session_start();

if(isset($_POST['url']))
{
    $url = $_POST['url'];
}
else if(isset($_GET['url']))
{
    $url = $_GET['url'];
}
// this array contents all pages
$pages = [
    'details'=>'pages/details.php',
    'register' =>'pages/register.php',
    'login' =>'pages/login.php',
    'postRegister' =>'App/utils/postRegister.php',
    'postLogin' =>'App/utils/postLogin.php',
    'addPost'=> 'pages/addPost.php',
    'postPost'=>'App/utils/postPost.php'
];
//rout logout
if($url == "logout")
{
    $_SESSION['message'] = "you are logout";
    unset($_GET['url']);
    unset($_SESSION['userLogin']);
    unset($_SESSION['message']);
}
/** verify if root is home */
if($_SERVER['REQUEST_URI']=='home')
{
    $page = $_SERVER['REQUEST_URI'];
}
// verify if url match with any page
else if(key_exists($url, $pages))
{
    $page = $pages[$url];
}
else
{
    $page = 'pages/listPost.php';
}
