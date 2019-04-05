<?php 
namespace Admin\controller;

use Admin\model\DAO;
use Admin\model\UserDao;
use Admin\model\ProductDao;
use Admin\model\OwnersDao;
use Admin\model\typeDao;
use Admin\model\EquipmentDao;
use Admin\model\OwnDocDao;

class ProductController{

	
	public function __construct(){
		
			$this->dao = new DAO();
	     	$this->daouser = new UserDao();
	     	$this->daoproduct = new ProductDao();
	     	$this->daoowner = new OwnersDao();
	     	$this->daotype = new TypeDao();
	     	$this->daoequipment = new EquipmentDao();
	     	$this->daoowndoc = new OwnDocDao();
	}
	
	public function showProduct(){
		
		//$productlist=$this->daoproduct->selectFromProducts();
		//$ownerlist=$this->daoowner->selectFromOwners();

		$page_productpa='active';
		$page_list_productpa='active';	
		include 'view/app_link.php';		
	}
	
	public function showSendOffer(){
		
		$id_pro=isset($_POST['id_pro'])?$_POST['id_pro']:"";
		
		if (!empty($id_pro)){
			
			$product=$this->daoproduct->selectFromProductById($id_pro);
			$photos=$this->daopropho->selectFromProductsPhoto($id_pro);
			$page_slanje_ponude='active';
			include 'app_link.php';
			
		}else {
			$msg='You have not selected any product to send ';
			
			$productlist=$this->daoproduct->selectFromProducts();
			$ownerlist=$this->daoowner->selectFromOwners();
			
			$page_productpa='active';
			$page_list_productpa='active';	
			include 'app_link.php';	
				
		}
		
	}
	
	public function showProductCard(){
		
		$id_product=isset($_GET['id_pro'])?$_GET['id_pro']:"";
		
		$product=$this->daoproduct->selectFromProductById($id_product);
		$page_productpa='active';
		$page_product_card='active';
		include 'app_link.php';
	}
	
	public function showEditCard(){
		
		$id_product=isset($_GET['id_pro'])?$_GET['id_pro']:"";

		$product = $this->daoproduct->selectFromProductById($id_product);
		
		$page_productpa='active';
		$page_edit_card = 'active';
		include 'app_link.php';
		
	}
	
	public function editProduct(){
		
		$id_product=isset($_POST['id_product'])?$_POST['id_product']:"";
		$id_euro=isset($_POST['id_euro'])?$_POST['id_euro']:"";
		$location_data_1=isset($_POST['location_data_1'])?$_POST['location_data_1']:"";
		$location_data_2=isset($_POST['location_data_2'])?$_POST['location_data_2']:"";
		$location_data_3=isset($_POST['location_data_3'])?$_POST['location_data_3']:"";
		$addres_location=isset($_POST['addres_location'])?$_POST['addres_location']:"";
		$adres_num=isset($_POST['adres_num'])?$_POST['adres_num']:"";
		$number=isset($_POST['number'])?$_POST['number']:"";
		$object=isset($_POST['object'])?$_POST['object']:"";
		$flors=isset($_POST['flors'])?$_POST['flors']:"";
		$of_flors=isset($_POST['of_flors'])?$_POST['of_flors']:"";
		$price=isset($_POST['price'])?$_POST['price']:"";
		$min_price=isset($_POST['min_price'])?$_POST['min_price']:"";
		$deposit=isset($_POST['deposit'])?$_POST['deposit']:"";
		$commission=isset($_POST['commission'])?$_POST['commission']:"";
		$payment=isset($_POST['payment'])?$_POST['payment']:"";
		$square=isset($_POST['square'])?$_POST['square']:"";
		$surface_area=isset($_POST['surface_area'])?$_POST['surface_area']:"";
		$equipment=isset($_POST['equipment'])?$_POST['equipment']:"";
		$celing_height=isset($_POST['celing_height'])?$_POST['celing_height']:"";
		$structure=isset($_POST['structure'])?$_POST['structure']:"";
		$kitchen=isset($_POST['kitchen'])?$_POST['kitchen']:"";
		$num_rooms=isset($_POST['br_soba'])?$_POST['br_soba']:"";
		$num_bath=isset($_POST['kupatila'])?$_POST['kupatila']:"";
		$num_wc=isset($_POST['num_wc'])?$_POST['num_wc']:"";
		$num_terrace=isset($_POST['terasa'])?$_POST['terasa']:"";
		$level=isset($_POST['level'])?$_POST['level']:"";
		$salon_m=isset($_POST['salon_m'])?$_POST['salon_m']:"";
		$sec=isset($_POST['security'])?$_POST['security']:array();
		$num_elevator=isset($_POST['num_elevator'])?$_POST['num_elevator']:"";
		$construc_year=isset($_POST['construc_year'])?$_POST['construc_year']:"";
		$num_air_con=isset($_POST['num_air_con'])?$_POST['num_air_con']:"";
		$num_garages=isset($_POST['num_garages'])?$_POST['num_garages']:"";
		$note=isset($_POST['note'])?$_POST['note']:"";
		$description=isset($_POST['description'])?$_POST['description']:"";
		$active=isset($_POST['active'])?$_POST['active']:"";
		$active_data=isset($_POST['active_data'])?$_POST['active_data']:"";
		$info=isset($_POST['info'])?$_POST['info']:"";
		$electricity=isset($_POST['electricity'])?$_POST['electricity']:"";
		$network=isset($_POST['network'])?$_POST['network']:"";
		$maintenance=isset($_POST['maintenance'])?$_POST['maintenance']:"";
		$aces=isset($_POST['accessories'])?$_POST['accessories']:array();
		$gar=isset($_POST['garage'])?$_POST['garage']:array();
		$pro=isset($_POST['provider'])?$_POST['provider']:array();
		$bath=isset($_POST['type_bath'])?$_POST['type_bath']:array();
		$ter=isset($_POST['type_terrace'])?$_POST['type_terrace']:array();
		$prod=isset($_POST['product_type'])?$_POST['product_type']:array();
		$hea=isset($_POST['heating'])?$_POST['heating']:array();
		$car=isset($_POST['carpentry'])?$_POST['carpentry']:array();
		$business_status=isset($_POST['business_status'])?$_POST['business_status']:"";
		
		$provider= implode(', ', $pro);
		$type_bath=implode(', ', $bath);
		$product_type=implode(', ', $prod);
		$type_terrace=implode(', ', $ter);
		$accessories=implode(', ', $aces);
		$heating=implode(', ', $hea);
		$carpentry=implode(', ', $car);
		$security=implode(', ', $sec);
		$garage=implode(', ', $gar);

		
	$errors=array();
			if (!empty($min_price) && !is_numeric($min_price)){
				 $errors['min_price']='* number';
					}
			if (!empty($commission) && !is_numeric($commission)){
				$errors['commission']='* number';
					}
			if (!empty($deposit) && !is_numeric($deposit)){
				$errors['deposit']='* number';
					}	
			if (!empty($surface_area) && !is_numeric($surface_area)){
				$errors['surface_area']='* number';
					}
			if (!empty($flors) && !is_numeric($flors)){
				$errors['flors']='* number';
					}
			if (!empty($of_flors) && !is_numeric($of_flors)){
				$errors['of_flors']='*';
					}
			if ($flors > $of_flors){
				$errors['florsnost']='* uncorectly';
			}
			if (!empty($num_elevator) && !is_numeric($num_elevator)){
				$errors['num_elevator']='* number';
					}
			if (!empty($construc_year) && !is_numeric($construc_year)){
				$errors['construc_year']='* number';
					}
			if (!empty($celing_height) && !is_numeric($celing_height)){
				$errors['celing_height']='* number';
					}
			if (!empty($level) && !is_numeric($level)){
				$errors['level']='* number';
					}
			if (!empty($salon_m) && !is_numeric($salon_m)){
				$errors['salon_m']='* number';
					}
			if (!empty($num_rooms) && !is_numeric($num_rooms)){
				$errors['num_rooms']='* number';
					}
			if (!empty($num_bath) && !is_numeric($num_bath)){
				$errors['num_bath']='* unumber';
					}
			if (!empty($num_wc) && !is_numeric($num_wc)){
				$errors['num_wc']='* number';
					}
			if (!empty($num_terrace) && !is_numeric($num_terrace)){
				$errors['num_terrace']='* number';
					}
			if (!empty($num_air_con) && !is_numeric($num_air_con)){
				$errors['num_air_con']='* number';
					}
			if(empty($location_data_1)){
				$errors['location_data_1']='* required';}
			if(empty($location_data_2)){
				$errors['location_data_2']='* required';}
			if(empty($location_data_3)){
				$errors['location_data_3']='* required';}
			if(empty($addres_location)){
				$errors['addres_location']='* required';}
			if(empty($adres_num)){
				$errors['adres_num']='*';}
			if(empty($number)){
				$errors['number']='*';}
			if(empty($prod)){
				$errors['tip_nekretnine']='* required';}
			if(empty($structure)){
				$errors['structure']='* required';}
			if(empty($square)){
				$errors['square']='* required';
			}elseif (is_numeric($square)){
					}else{$errors['square']='* number';}
			if(empty($price)){
				$errors['price']='* required';
			}elseif (is_numeric($price)){
					}else{$errors['price']='* number';}
				
					
		if (count($errors)==0){
			
			$this->daoproduct->updateProductById($id_euro, $date_update, $location_data_1, $location_data_2, $location_data_3, $addres_location, $adres_num, $number, $object, $flors, $of_flors, $price, $min_price, $deposit, $commission, $payment, $square, $surface_area, $equipment, $celing_height, $structure, $heating, $carpentry, $kitchen, $num_rooms, $num_bath, $num_wc, $num_terrace, $level, $salon_m, $security, $num_elevator, $construc_year, $num_air_con, $num_garages, $note, $description, $active, $active_data, $info, $electricity, $network, $maintenance, $accessories, $garage, $provider, $type_terrace, $type_bath, $product_type, $id_products);
			
			$id_changed=isset($_POST['id_product'])?$_POST['id_product']:"";
			
			$productlist=$this->daoproduct->selectFromProducts();
			$ownerlist=$this->daoowner->selectFromOwners();
				
			$page_productpa='active';
			$page_list_productpa='active';	
			include 'app_link.php';
		
		}else {
			
			$msg='Something is wrong';
			$id_product=isset($_POST['id_product'])?$_POST['id_product']:"";

			$product = $this->daoproduct->selectFromProductById($id_product);
		
			$page_productpa='active';
			$page_edit_card = 'active';
			include 'app_link.php';
		}
			
	}
	
	public function brisiNekretninu(){
		
		$id_product=isset($_GET['id_pro'])?$_GET['id_pro']:"";
		
		$have_photo=$this->daopropho->selectFromProductsPhoto($id_product);

			if (!empty($have_photo)){
			
				$delete_photo=$this->daopropho->deleteFromProductPhoto($id_photo);
				foreach ($have_photo as $photos) {
					 $file= '../css/image/'.$photos['name_photos'];
          			  unlink($file);
				}
	
			}
				
				//upit za brisanje 
			
				$msg='Uspesno ste obrisali nekretninu';

	}
	
 	
	
}
?>