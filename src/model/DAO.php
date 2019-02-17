<?php
namespace Admin\model;

use Admin\config\DB;

	class DAO {
	    private $db;
   
		public function __construct() {
	     	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();

	    }
		
	}	     
?>
