<?php 

		require_once '../config/db.php';
		require_once 'DAO.php';

class LocationTwoDao extends DAO{
	
	   private $db;
	   
	     private $INSERT_INTO_LOCATION_2="INSERT INTO data_location_2(name_location_2) VALUES (?)";
         private $SELECT_FROM_LOCATION_2="SELECT * FROM data_location_2";
         private $DELETE_LOCATION_2="DELETE FROM data_location_2 WHERE id_location_2=?";
         
		public function __construct() {
	     	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();

	    }
         
		public function insertIntoLocation2($name_location_2){
	     	$statement = $this->db->prepare($this->INSERT_INTO_LOCATION_2);
	     	
	     	$statement ->bindValue(1, $name_location_2);
	     	
	     	$statement->execute();
	     	
	     	
	     }
	
	     public function selectFromLocation2(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_LOCATION_2);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
		public function deleteFromLocation2($id_location_2){
	     	$statement = $this->db->prepare($this->DELETE_LOCATION_2);
	     	
	     	$statement->bindValue(1, $id_location_2);
	     	
	     	$statement->execute();
	     	
	     }
	     
}
?>