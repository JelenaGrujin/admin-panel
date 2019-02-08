<?php
		require_once '../config/db.php';
	
	class DAO {
	    private $db;
   
		public function __construct() {
	     	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();

	    }
		
	}	     
?>
