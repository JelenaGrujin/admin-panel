<?php
		require_once '../config/db.php';
		require_once 'DAO.php';
	
	class OwnDocDao extends DAO {
		
		private $SELECT_FROM_OWNERS_DOC="SELECT * FROM owners_doc";
        private $INSERT_INTO_OWNERS_DOC="INSERT INTO owners_doc(name_doc, id_owner) VALUES (?,?)";
        private $SELECT_FROM_OWNERS_DOC_BY_OWNERS="SELECT * FROM owners_doc WHERE id_owner=?";
           
		public function __construct(){}
	    
		public function selectFromOwnersDoc(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_OWNERS_DOC);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }

	     public function insertIntoOwnersDoc($name_doc, $id_owner){
	     	$statement = $this->db->prepare($this->INSERT_INTO_OWNERS_DOC);
	     	
	     	$statement ->bindValue(1, $name_doc);
	     	$statement ->bindValue(2, $id_owner);
	     	
	     	$statement->execute();
	     	
	     	
	     }
	     
		public function selectFromOwnersDocByOwner($id_owner){
	     	$statement = $this->db->prepare($this->SELECT_FROM_OWNERS_DOC_BY_OWNERS);
	     	
	     	$statement ->bindValue(1, $id_owner);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	    


	     
	}	     
?>
