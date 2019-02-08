<?php
		require_once '../config/db.php';
		require_once 'DAO.php';
	
	class ProductDao extends DAO 
	{
		
	     private $INSERT_INTO_PRODUCTS="INSERT INTO products(id_euro, date_insert,  location_data_1, location_data_2, location_data_3, addres_location, adres_num, number, object, flors, of_flors, price, min_price, deposit, commission, payment, square, surface_area, equipment, celing_height, structure, heating, carpentry, kitchen, num_rooms, num_bath, num_wc, num_terrace, level, salon_m, security, num_elevator, construc_year, num_air_con, num_garages, note, description, active, active_data, info, electricity, network, maintenance, accessories, garage, provider, type_terrace, type_bath, product_type, business_status, id_owner) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
         private $SELECT_FROM_PRODUCT_BY_ID_OWNER="SELECT * FROM products WHERE id_owner=?";
	     private $SELECT_FROM_PRODUCT="SELECT * FROM products";
	     private $SELECT_FROM_PRODUCT_LAST_ONE="SELECT id_products FROM products ORDER BY id_products DESC LIMIT 1";
	     private $SELECT_FROM_PRODUCT_BY_ID="SELECT * FROM products WHERE id_products=?";
	     private $UPDATE_PRODUCT_BY_ID="UPDATE products SET id_euro=?,date_update=?,location_data_1=?,location_data_2=?,location_data_3=?,addres_location=?,adres_num=?,number=?,object=?,flors=?,of_flors=?,price=?,min_price=?,deposit=?,commission=?,payment=?,square=?,surface_area=?,equipment=?,celing_height=?,structure=?,heating=?,carpentry=?,kitchen=?,num_rooms=?,num_bath=?,num_wc=?,num_terrace=?,level=?,salon_m=?,security=?,num_elevator=?,construc_year=?,num_air_con=?,num_garages=?,note=?,description=?,active=?,active_data=?,info=?,electricity=?,network=?,maintenance=?,accessories=?,garage=?,provider=?,type_terrace=?,type_bath=?,product_type=? WHERE id_products=?";
         
		public function __construct() {
			//parent::__construct();
	     	$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();

	    }
	    
	     public function insertIntoProducts($id_euro, $date_insert,  $location_data_1, $location_data_2, $location_data_3, $addres_location, $adres_num, $number, $object, $flors, $of_flors, $price, $min_price, $deposit, $commission, $payment, $square, $surface_area, $equipment, $celing_height, $structure, $heating, $carpentry, $kitchen, $num_rooms, $num_bath, $num_wc, $num_terrace, $level, $salon_m, $security, $num_elevator, $construc_year, $num_air_con, $num_garages, $note, $description, $active, $active_data, $info, $electricity, $network, $maintenance, $accessories, $garage, $provider, $type_terrace, $type_bath, $product_type, $business_status, $id_owner){
	     	
	     	$statement = $this->db->prepare($this->INSERT_INTO_PRODUCTS);
	     	
	     	$statement ->bindValue(1, $id_euro);
	     	$statement ->bindValue(2, $date_insert);
	     	$statement ->bindValue(3, $location_data_1);
	     	$statement ->bindValue(4, $location_data_2);
	     	$statement ->bindValue(5, $location_data_3);
	     	$statement ->bindValue(6, $addres_location);
	     	$statement ->bindValue(7, $adres_num);
	     	$statement ->bindValue(8, $number);
	     	$statement ->bindValue(9, $object);
	     	$statement ->bindValue(10, $flors);
	     	$statement ->bindValue(11, $of_flors);
	     	$statement ->bindValue(12, $price);
	     	$statement ->bindValue(13, $min_price);
	     	$statement ->bindValue(14, $deposit);
	     	$statement ->bindValue(15, $commission);
	     	$statement ->bindValue(16, $payment);
	     	$statement ->bindValue(17, $square);
	     	$statement ->bindValue(18, $surface_area);
	     	$statement ->bindValue(19, $equipment);
	     	$statement ->bindValue(20, $celing_height);
	     	$statement ->bindValue(21, $structure);
	     	$statement ->bindValue(22, $heating);
	     	$statement ->bindValue(22, $carpentry);
	     	$statement ->bindValue(24, $kitchen);
	     	$statement ->bindValue(25, $num_rooms);
	     	$statement ->bindValue(26, $num_bath);
	     	$statement ->bindValue(27, $num_wc);
	     	$statement ->bindValue(28, $num_terrace);
	     	$statement ->bindValue(29, $level);
	     	$statement ->bindValue(30, $salon_m);
	     	$statement ->bindValue(31, $security);
	     	$statement ->bindValue(32, $num_elevator);
	     	$statement ->bindValue(33, $construc_year);
	     	$statement ->bindValue(34, $num_air_con);
	     	$statement ->bindValue(35, $num_garages);
	     	$statement ->bindValue(36, $note);
	     	$statement ->bindValue(37, $description);
	     	$statement ->bindValue(38, $active);
	     	$statement ->bindValue(39, $active_data);
	     	$statement ->bindValue(40, $info);
	     	$statement ->bindValue(41, $electricity);
	     	$statement ->bindValue(42, $network);
	     	$statement ->bindValue(43, $maintenance);
	     	$statement ->bindValue(44, $accessories);
	     	$statement ->bindValue(45, $garage);
	     	$statement ->bindValue(46, $provider);
	     	$statement ->bindValue(47, $type_terrace);
	     	$statement ->bindValue(48, $type_bath);
	     	$statement ->bindValue(49, $product_type);
	     	$statement ->bindValue(50, $business_status);
	     	$statement ->bindValue(51, $id_owner);
	     	
	     	$statement->execute();
	     }
	     
		 public function selectFromProductByIdOwner($id_owner){
	     	$statement = $this->db->prepare($this->SELECT_FROM_PRODUCT_BY_ID_OWNER);
	     	
	     	$statement ->bindValue(1, $id_owner);
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
	     public function selectFromProducts(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_PRODUCT);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
		public function selectFromProductsLastOne(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_PRODUCT_LAST_ONE);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetch();
	     	return $result;
	     	
	     }
	     
		public function selectFromProductById($id_products){
	     	$statement = $this->db->prepare($this->SELECT_FROM_PRODUCT_BY_ID);
	     	
	     	$statement ->bindValue(1, $id_products);
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }
	     
	     public function updateProductById($id_euro, $date_update, $location_data_1, $location_data_2, $location_data_3, $addres_location, $adres_num, $number, $object, $flors, $of_flors, $price, $min_price, $deposit, $commission, $payment, $square, $surface_area, $equipment, $celing_height, $structure, $heating, $carpentry, $kitchen, $num_rooms, $num_bath, $num_wc, $num_terrace, $level, $salon_m, $security, $num_elevator, $construc_year, $num_air_con, $num_garages, $note, $description, $active, $active_data, $info, $electricity, $network, $maintenance, $accessories, $garage, $provider, $type_terrace, $type_bath, $product_type, $id_products){
	     	
	     	$statement = $this->db->prepare($this->UPDATE_PRODUCT_BY_ID);
	     	
	     	$statement ->bindValue(1, $id_euro);
	     	$statement ->bindValue(2, $date_update);
	     	$statement ->bindValue(3, $location_data_1);
	     	$statement ->bindValue(4, $location_data_2);
	     	$statement ->bindValue(5, $location_data_3);
	     	$statement ->bindValue(6, $addres_location);
	     	$statement ->bindValue(7, $adres_num);
	     	$statement ->bindValue(8, $number);
	     	$statement ->bindValue(9, $object);
	     	$statement ->bindValue(10, $flors);
	     	$statement ->bindValue(11, $of_flors);
	     	$statement ->bindValue(12, $price);
	     	$statement ->bindValue(13, $min_price);
	     	$statement ->bindValue(14, $deposit);
	     	$statement ->bindValue(15, $commission);
	     	$statement ->bindValue(16, $payment);
	     	$statement ->bindValue(17, $square);
	     	$statement ->bindValue(18, $surface_area);
	     	$statement ->bindValue(19, $equipment);
	     	$statement ->bindValue(20, $celing_height);
	     	$statement ->bindValue(21, $structure);
	     	$statement ->bindValue(22, $heating);
	     	$statement ->bindValue(22, $carpentry);
	     	$statement ->bindValue(24, $kitchen);
	     	$statement ->bindValue(25, $num_rooms);
	     	$statement ->bindValue(26, $num_bath);
	     	$statement ->bindValue(27, $num_wc);
	     	$statement ->bindValue(28, $num_terrace);
	     	$statement ->bindValue(29, $level);
	     	$statement ->bindValue(30, $salon_m);
	     	$statement ->bindValue(31, $security);
	     	$statement ->bindValue(32, $num_elevator);
	     	$statement ->bindValue(33, $construc_year);
	     	$statement ->bindValue(34, $num_air_con);
	     	$statement ->bindValue(35, $num_garages);
	     	$statement ->bindValue(36, $note);
	     	$statement ->bindValue(37, $description);
	     	$statement ->bindValue(38, $active);
	     	$statement ->bindValue(39, $active_data);
	     	$statement ->bindValue(40, $info);
	     	$statement ->bindValue(41, $electricity);
	     	$statement ->bindValue(42, $network);
	     	$statement ->bindValue(43, $maintenance);
	     	$statement ->bindValue(44, $accessories);
	     	$statement ->bindValue(45, $garage);
	     	$statement ->bindValue(46, $provider);
	     	$statement ->bindValue(47, $type_terrace);
	     	$statement ->bindValue(48, $type_bath);
	     	$statement ->bindValue(49, $product_type);
	     	$statement ->bindValue(50, $id_products);
	     	
	     	$statement->execute();
	     	
	     }
	     
}
?>