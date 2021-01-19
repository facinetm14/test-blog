<?php

namespace App\Model;

use App\Model\Post;
use App\Model\Connexion;
use PDO;

require_once 'Post.php';
require_once 'Connexion.php';

class PostManager
{
    /**
     * add a post
     */
    public function add(Post $post)
    {
      $req = (Connexion::getInstance())->prepare("INSERT INTO post (title,content) VALUES (:title,:content)");
      
      $req->bindValue(':title',$post->getTitle(),PDO::PARAM_STR);
      $req->bindValue(':content',$post->getContent(),PDO::PARAM_STR);
      
      
     if($req->execute()){

         $_SESSION['message'] = "You have successfully created a new post";

     } 
      
      header('Location: home');
        
    }

    /** get all posts
     * @return posts 
     */
    public function read()
    {

      $query = (Connexion::getInstance())->query('SELECT * FROM post');

      return $query->fetchAll(PDO::FETCH_ASSOC);
      
    }

    // find a post by id 
    public function readById($id)
    {
      $query = (Connexion::getInstance())->prepare("SELECT * FROM post WHERE id =:id");
      $query->bindValue(':id',$id);
      $query->execute();
      return $query->fetch(PDO::FETCH_ASSOC);
    }
  }