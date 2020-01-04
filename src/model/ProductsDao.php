<?php
namespace Admin\model;
	
	class ProductsDao extends Dao
	{
	    public $table='products';
	    private $SELECT_FROM_PRODUCT_BY_ID_OWNER="SELECT * FROM products WHERE id_owner=?";
	     
	    public function selectByIdOwner($id_owner){

	        $statement = $this->db->prepare($this->SELECT_FROM_PRODUCT_BY_ID_OWNER);
	     	
	     	$statement ->bindValue(1, $id_owner);
	     	$statement ->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	    }




	     
}