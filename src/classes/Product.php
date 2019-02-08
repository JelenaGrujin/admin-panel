<?php


class Product{
	
/*	public $id_euro;
	public $location_data_1; 
	public $location_data_2; 
	public $location_data_3; 
	public $addres_location; 
	public $adres_num; 
	public $number; 
	public $object; 
	public $flors; 
	public $of_flors; 
	public $price; 
	public $min_price; 
	public $deposit; 
	public $commission; 
	public $payment; 
	public $square; 
	public $surface_area; 
	public $equipment; 
	public $celing_height; 
	public $structure; 
	public $heating; 
	public $carpentry; 
	public $kitchen; 
	public $num_rooms; 
	public $num_bath; 
	public $num_wc; 
	public $num_terrace; 
	public $level; 
	public $salon_m; 
	public $security; 
	public $num_elevator; 
	public $construc_year; 
	public $num_air_con; 
	public $num_garages; 
	public $note; 
	public $description; 
	public $active; 
	public $active_data; 
	public $info; 
	public $electricity; 
	public $network; 
	public $maintenance; 
	public $accessories; 
	public $garage; 
	public $provider; 
	public $type_terrace; 
	public $type_bath; 
	public $product_type; 
	public $business_status;*/
	
	
 	public $productdata = array();

    public function __get($key) {
        echo "get $key\n";
        return array_key_exists($key, $this->productdata) ? $this->productdata[$key] : null;
    }

    public function __set($key, $value) {
        echo "set $key = $value\n";
        $this->productdata[$key] = $value;
    }

    public function __isset($key) {
       echo sprintf("isset $key ( returns %b )", array_key_exists($key, $this->productdata));
       return array_key_exists($key, $this->productdata);
    }
	
	public function __construct(){
        foreach($this->productdata as $key=>$value){
            $this->$key = $value;
        }
    }
	
	/*  public function __set($name,$value) {
	  	
	    $functionname='set'.$name;
	    return $this->$functionname($value);
	    
	  }
	  
	  public function __get($name) {
	  	
	    $functionname='get'.$name;
	    return $this->$functionname();
	    
	  }*/
	
	
	
	
	
}


?>