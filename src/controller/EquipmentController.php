<?php
namespace Admin\controller;

use Admin\controller\Controller;
use Admin\model\EquipmentDao;

class EquipmentController extends Controller{

	public function __construct(){
		parent::__construct();
		$this->daoequipment = new EquipmentDao();

	}

	public function showEquipment() {
		
		
		$equilist=$this->daoequipment->selectFromEquipment();
		
		$page_basepa='active';
		$page_equipment = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function newEquipment(){
		
		$name_equipment=isset($_POST['new_equipment'])?$_POST['new_equipment']:"";
		
			
			$this->daoequipment->insertIntoEquipment($name_equipment);
			
			$msg='Successfully';
			
			$equilist=$this->daoequipment->selectFromEquipment();
			
			$page_basepa='active';
			$page_equipment = 'active';
			$container = 'container';
			include 'basefiles/base_link.php';
		
	}
	
	public function deleteEquipment(){
		
		$id_equipment=isset($_GET['id_equipment'])?$_GET['id_equipment']:"";
		
		
		if ($id_equipment){
			
			$this->daoequipment->deleteFromEquipment($id_equipment);
			$msg='Successfully';

		}else {
			
			$msg='Something is wrong';

		}
	}
}

?>
