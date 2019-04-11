<?php
namespace Admin\model;
	
use Admin\config\DB;
use Admin\model\DAO;
	
	class ProPhoDao extends DAO 
	{
		private $INSERT_INTO_PRODUCTS_PHOTO="INSERT INTO products_photos(name_photo, id_products) VALUES (?,?)";
        private $SELECT_FROM_PRODUCTS_PHOTO_BY_PRODUCT="SELECT * FROM products_photos WHERE id_products=?";
        private $SELECT_FROM_PRODUCTS_PHOTO_BY_PHOTO="SELECT * FROM products_photos WHERE id_photo=?";
        private $DELETE_FROM_PRODUCTS_PHOTO="DELETE FROM products_photos WHERE id_photo=?";
		
	
         
		public function __construct() {
			//parent::__construct();
	     	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();

	    }
	    
		public function insertIntoProductPhoto($name_photo, $id_products){
	     	$statement = $this->db->prepare($this->INSERT_INTO_PRODUCTS_PHOTO);
	     	
	     	$statement ->bindValue(1, $name_photo);
	     	$statement ->bindValue(2, $id_products);
	     	
	     	$statement->execute();
	     	
	     	
	     }

	     public function selectFromProductsPhoto($id_products){
	     	$statement = $this->db->prepare($this->SELECT_FROM_PRODUCTS_PHOTO_BY_PRODUCT);
	     	
	     	$statement ->bindValue(1, $id_products);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
		public function selectFromProductsPhotoById($id_photo){
	     	$statement = $this->db->prepare($this->SELECT_FROM_PRODUCTS_PHOTO_BY_PHOTO);
	     	
	     	$statement ->bindValue(1, $id_photo);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
		public function deleteFromProductPhoto($id_photo){
	     	$statement = $this->db->prepare($this->DELETE_FROM_PRODUCTS_PHOTO);
	     	
	     	$statement->bindValue(1, $id_photo);
	     	
	     	$statement->execute();
	     	
	     }
	    
	    
	     
}
?>