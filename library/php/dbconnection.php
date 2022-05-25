<?php 
class Database { 
  private static $dbName = 'neust-clinic' ; 
  private static $dbHost = 'localhost' ; 
  private static $dbUsername = 'root'; 
  private static $dbUserPassword = ''; 
  private static $connect = null;

  public function __construct() { 
    die('Init function is not allowed'); 
  } 

  public static function connect() { 
    if ( null == self::$connect ) {
      try { 
        self::$connect = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName,self::$dbUsername,self::$dbUserPassword);
      } 
      catch(PDOException $e) { 
        die($e->getMessage()); 
      } 
    }
    return self::$connect; 
  }

  public static function disconnect() { 
    self::$connect = null; 
  } 

} 
?> 
