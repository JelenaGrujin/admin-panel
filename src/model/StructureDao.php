<?php
namespace Admin\model;
	
use Admin\config\DB;
use Admin\model\DAO;
	
	class StructureDao extends DAO {
	    private $db;
	   
         private $INSERT_INTO_STRUCTURE="INSERT INTO structure (name_STRUCTURE) VALUES(?)";
         private $SELECT_FROM_STRUCTURE="SELECT * FROM structure";
         private $DELETE_FROM_STRUCTURE="DELETE FROM structure WHERE id_structure=?";
        
		public function __construct(){
	    	//parent::__construct();
	    	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();
	    }
	     
		public function insertIntoStructure($name_structure){
	     	$statement = $this->db->prepare($this->INSERT_INTO_STRUCTURE);
	     	
	     	$statement ->bindValue(1, $name_structure);
	     	
	     	$statement->execute();
	     	
	     	
	     }
	     
		public function selectFromStructure(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_STRUCTURE);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
			
	     public function deleteFromStructure($id_structure){
	     	$statement = $this->db->prepare($this->DELETE_FROM_STRUCTURE);
	     	
	     	$statement->bindValue(1, $id_structure);
	     	
	     	$statement->execute();
	     	
	     }
}
?>
