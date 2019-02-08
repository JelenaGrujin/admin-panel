<?php

require_once 'Controller.php';

class LocationOneController extends Controller{

	public function __construct(){

		parent::__construct();
	    $this->daolone = new LocationOneDao();

	}

		public function showLocation() {
		
		
		
		$listlocation1=$this->daolone->selectFromLocation1();
		
		$page_basepa='active';
		$page_location = 'active';
		$page_location_1 = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function newLocation1(){
		
		$name_location_1=isset($_POST['new_location_1'])?$_POST['new_location_1']:"";
		
		
		$this->daolone->insertIntoLocation1($name_location_1);

		$listlocation1=$this->daolone->selectFromLocation1();
		
		$page_basepa='active';
		$page_location = 'active';
		$page_location_1 = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function deleteLocation1(){
		
		$id_location_1=isset($_GET['id_location_1'])?$_GET['id_location_1']:"";
		
		
		if ($id_location_1){
			
			$this->daolone->deleteFromLocation1($id_location_1);
			$msg='Successfully';

		}else {
			
			$msg='Something is wrong';

		}
		
	}

}


?>