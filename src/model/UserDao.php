<?php
		require_once '../config/db.php';
		require_once 'DAO.php';
	
	class UserDao extends DAO{
		
	   private $db;
	     
	     private $INSERT_INTO_USERS="INSERT INTO users(name_surname, username, e_mail, password, address, phone) VALUES (?,?,?,?,?,?)";
	     private $SELECT_FROM_USERES="SELECT * FROM users ";
	     private $SELECT_USER_BY_USERNAME_AND_PASSWORD="SELECT * FROM users WHERE username=? AND password=?";
	
	    public function __construct(){
	    	//parent::__construct();
	    	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();
	    }
		public function insertIntoUsers($name_surname, $username, $e_mail, $password, $address, $phone){
			
			$statement = $this->db->prepare($this->INSERT_INTO_USERS);
	     	
	     	$statement ->bindValue(1, $name_surname);
	     	$statement ->bindValue(2, $username);
	     	$statement ->bindValue(3, $e_mail);
	     	$statement ->bindValue(4, $password);
	     	$statement ->bindValue(5, $address);
	     	$statement ->bindValue(6, $phone);
	     	
	     	$statement->execute();
			
		}
		
		public function selectFromUsers(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_USERES);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
		public function selectUserByUsernameAndPassword($username, $password){
	     	$statement = $this->db->prepare($this->SELECT_USER_BY_USERNAME_AND_PASSWORD);
	     	
	     	$statement ->bindValue(1, $username);
	     	$statement ->bindValue(2, $password);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
		
	    
	}	     
?>
