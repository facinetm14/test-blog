<?php


use App\Model\PostManager;
use App\Model\Post;

require_once 'App/Model/Post.php';
require_once 'App/Model/PostManager.php';



if(isset($_POST['title']) && isset($_POST['content']))
{ 
    if(!empty($_POST['title']) && !empty($_POST['content']))
    { 

        $post = new Post;
        $post->setTitle(strip_tags((htmlspecialchars($_POST['title']))));
        $post->setContent($_POST['content']);
        

        $userManager = new PostManager;
        $userManager->add($post);


    }
}
header('Location:home');