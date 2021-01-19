<?php
namespace App\Model;

class Post
{
    
    // attributs
    private $id;
    private $title;
    private $content;
    private $datePost;
    private $author;

    //etters and setters  
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getdatePost()
    {
        return $this->datePost;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setDatePost($datePost)
    {
        $this->datePost = $datePost;
    }

    public function setAuthor($author)
    {
        $this->title = $author;
    }
    
}