<?php
namespace Admin\model;
	
use Admin\config\DB;
use Admin\model\DAO;
	
	class typeDao extends  DAO {
	    private $db;
	     
         private $SELECT_FROM_PRODUCT_TYPE="SELECT * FROM product_type";
         private $INSERT_INTO_PRODUCT_TYPE="INSERT INTO product_type(name_pro_type) VALUES (?)";
	  
		public function __construct(){
	    	//parent::__construct();
	    	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();
	    }
	     
		public function selectFromProductType(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_PRODUCT_TYPE);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
		public function insertIntoProductType($name_pro_type){
	     	$statement = $this->db->prepare($this->INSERT_INTO_PRODUCT_TYPE);
	     	
	     	$statement ->bindValue(1, $name_pro_type);
	     	
	     	$statement->execute();
	     	
	     	
	     }
}
?>
