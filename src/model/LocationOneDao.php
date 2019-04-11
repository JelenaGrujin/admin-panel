<?php 
namespace Admin\model;

use Admin\config\DB;
use Admin\model\DAO;

class LocationOneDao extends DAO{
	
	   private $db;
	   
	     private $INSERT_INTO_LOCATION_1="INSERT INTO data_location_1(name_location_1) VALUES (?)";
         private $SELECT_FROM_LOCATION_1="SELECT * FROM data_location_1";
         private $DELETE_LOCATION_1="DELETE FROM data_location_1 WHERE id_location_1=?";
         
		public function __construct() {
	     	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();

	    }
	
	     public function insertIntoLocation1($name_location_1){
	     	$statement = $this->db->prepare($this->INSERT_INTO_LOCATION_1);
	     	
	     	$statement ->bindValue(1, $name_location_1);
	     	
	     	$statement->execute();
	     	
	     	
	     }
	
	     public function selectFromLocation1(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_LOCATION_1);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
		public function deleteFromLocation1($id_location_1){
	     	$statement = $this->db->prepare($this->DELETE_LOCATION_1);
	     	
	     	$statement->bindValue(1, $id_location_1);
	     	
	     	$statement->execute();
	     	
	     }
	
}


?>