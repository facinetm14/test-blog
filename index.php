<?php
require_once('router.php');

use App\Model\Post;
use App\Model\PostManager;

require_once ('App/Model/Post.php');
require_once ('App/Model/PostManager.php');

$post = new Post;
$posts = (new PostManager)->read();

//check the post id for display details
if(isset($_GET['id'])&&!empty($_GET['id']))
{
    
    $post = (new PostManager)->readById($_GET['id']);
}


require_once $page;

