<?php
namespace Admin\model;

class PhotoDao extends Dao
{
    public $table='photos';
    private $SELECT_FROM_PRODUCTS_PHOTO_BY_PRODUCT="SELECT * FROM products_photos WHERE id_products=?";

        public function selectByProduct($id_products){
            $statement = $this->db->prepare($this->SELECT_FROM_PRODUCTS_PHOTO_BY_PRODUCT);
	     	
	     	$statement ->bindValue(1, $id_products);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
        }
}