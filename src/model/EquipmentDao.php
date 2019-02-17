<?php
namespace Admin\model;
		
use Admin\config\DB;
use Admin\model\DAO;
	
	class EquipmentDao extends DAO {
	    private $db;
	   
         private $INSERT_INTO_EQUIPMENT="INSERT INTO equipment (name_equipment) VALUES(?)";
         private $SELECT_FROM_EQUIPMETN="SELECT * FROM equipment";
         private $DELETE_FROM_EQUIPMENT="DELETE FROM equipment WHERE id_equipment=?";
        
		public function __construct(){
	    	//parent::__construct();
	    	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();
	    }
	     
		public function insertIntoEquipment($name_equipment){
	     	$statement = $this->db->prepare($this->INSERT_INTO_EQUIPMENT);
	     	
	     	$statement ->bindValue(1, $name_equipment);
	     	
	     	$statement->execute();
	     	
	     	
	     }
	     
		public function selectFromEquipment(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_EQUIPMETN);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
			
	     public function deleteFromEquipment($id_equipment){
	     	$statement = $this->db->prepare($this->DELETE_FROM_EQUIPMENT);
	     	
	     	$statement->bindValue(1, $id_equipment);
	     	
	     	$statement->execute();
	     	
	     }
}
?>
