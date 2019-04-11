<?php
namespace Admin\config;

use PDO;

	class DB  {
	
  	private static $instance = null;
  	private $conn;
  
  	private $host = 'localhost';
  	private $user = 'root';
 	private $pass = '';
  	private $name = 'adminbase';
   
	  private function __construct()
	  {
	    $this->conn = new PDO("mysql:host={$this->host};
	    dbname={$this->name}", $this->user,$this->pass,
	    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
	  }
  
	  public static function getInstance()
	  {
	    if(!self::$instance)
	    {
	      self::$instance = new self();
	    }
	   
	    return self::$instance;
	  }
	  
	  public function getConnection()
	  {
	    return $this->conn;
	  }
  
	}
?>