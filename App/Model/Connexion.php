<?php
namespace App\Model;
use PDO;
class Connexion
{
  protected static $instance;
  
  protected function __construct() { } // Constructor private.
  protected function __clone() { } // Méthode of clonage .
  
  public static function getInstance()
  {
    if (!isset(self::$instance)) // if the class has not an instance.
    {
      self::$instance = new PDO('mysql:host=localhost;dbname=blog','facinet', 'Mariam2014') ;// creating a PDO object
    }
    
    return self::$instance;
  }
}