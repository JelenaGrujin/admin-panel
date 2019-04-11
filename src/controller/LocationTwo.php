<?php
namespace Admin\controller;

use Admin\controller\Controller;
use Admin\model\LocationTwoDao;

class LocationTwoController extends Controller{

	public function __construct(){
		parent::__construct();
	    $this->daoltwo = new LocationTwoDao();

	}

	public function showLocation2(){
		
		
		$listlocation2=$this->daoltwo->selectFromLocation2();
		
		$page_basepa='active';
		$page_location = 'active';
		$page_location_2 = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function newLocation2(){
		
		$name_location_2=isset($_POST['new_location_2'])?$_POST['new_location_2']:"";
		
		
		$this->daoltwo->insertIntoLocation2($name_location_2);
		
		$listlocation2=$this->daoltwo->selectFromLocation2();
		
		$page_basepa='active';
		$page_location = 'active';
		$page_location_2 = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
		
	}
	
	public function deleteLocation2(){
		
		$id_location_2=isset($_GET['id_location_2'])?$_GET['id_location_2']:"";
		
		
		if ($id_location_2){
			
			$this->daoltwo->deleteFromLocation2($id_location_2);
			$msg='Successfully';

		}else {

			$msg='Something is wrong';

		}
		
	}

}


?>
