<?php
namespace Admin\controller;

use Admin\model\EquipmentDao;

class Equipment{

    public $dao_equipment;
    
	public function __construct(){
		

	}

	public function showEquipment() {
	    
	    $dao_equipment = new EquipmentDao();
	   
	    $equilist=$dao_equipment->selectFromEquipment();
		
		$page_basepa='active';
		$page_equipment = 'active';
		$container = 'container';
		include 'view/basefiles/base_link.php';
	}
	
	public function newEquipment(){
		
		$name_equipment=isset($_POST['new_equipment'])?$_POST['new_equipment']:"";
		
			
			$this->dao_equipment->insertIntoEquipment($name_equipment);
			
			$msg='Successfully';
			
			$equilist=$this->dao_equipment->selectFromEquipment();
			
			$page_basepa='active';
			$page_equipment = 'active';
			$container = 'container';
			include 'basefiles/base_link.php';
		
	}
	
	public function deleteEquipment(){
		
		$id_equipment=isset($_GET['id_equipment'])?$_GET['id_equipment']:"";
		
		
		if ($id_equipment){
			
			$this->dao_equipment->deleteFromEquipment($id_equipment);
			$msg='Successfully';

		}else {
			
			$msg='Something is wrong';

		}
	}
}

?>