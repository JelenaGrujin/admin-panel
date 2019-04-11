<?php
namespace Admin\controller;

use Admin\controller\Controller;
use Admin\model\LocationThreeDao;

class LocationThree extends Controller{


	public function __construct(){
		parent::__construct();
	    $this->daolthree = new LocationThreeDao();
	}

	public function showLocation3(){
		
		
		$listlocation3=$this->daolthree->selectFromLocation3();
		
		$page_basepa='active';
		$page_location = 'active';
		$page_location_3 = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function newLocation3(){
		
		$name_location_3=isset($_POST['new_location_3'])?$_POST['new_location_3']:"";
		
		
		$this->daolthree->insertIntoLocation3($name_location_3);
		
		$listlocation3=$this->daolthree->selectFromLocation3();
		
		$page_basepa='active';
		$page_location = 'active';
		$page_location_3 = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
		
	}
	
	public function deleteLocation3(){
		
		$id_location_3=isset($_GET['id_location_3'])?$_GET['id_location_3']:"";
		
		
		if ($id_location_3){
			
			$this->daolthree->deleteFromLocation3($id_location_3);
			$msg='Successfully';

		}else {

			$msg='Something is wrong';

		}
		
	}

}

?>