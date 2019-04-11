<?php 
namespace Admin\model;

use Admin\config\DB;
use Admin\model\DAO;

class LocationThreeDao extends DAO{
	
	   private $db;
	   
	     private $INSERT_INTO_LOCATION_3="INSERT INTO data_location_3(name_location_3) VALUES (?)";
         private $SELECT_FROM_LOCATION_3="SELECT * FROM data_location_3";
         private $DELETE_LOCATION_3="DELETE FROM data_location_3 WHERE id_location_3=?";
         
		public function __construct() {
	     	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();

	    }
         
		public function insertIntoLocation3($name_location_3){
	     	$statement = $this->db->prepare($this->INSERT_INTO_LOCATION_3);
	     	
	     	$statement ->bindValue(1, $name_location_3);
	     	
	     	$statement->execute();
	     	
	     	
	     }
	
	     public function selectFromLocation3(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_LOCATION_3);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
		public function deleteFromLocation3($id_location_3){
	     	$statement = $this->db->prepare($this->DELETE_LOCATION_3);
	     	
	     	$statement->bindValue(1, $id_location_3);
	     	
	     	$statement->execute();
	     	
	     }
	     
}
?>