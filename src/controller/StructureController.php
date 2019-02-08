<?php

require_once 'Controller.php';

class StructureController extends Controller{

	public function __construct(){
		parent::__construct();
		$this->daostructure = new StructureDao();
	}

	public function showStructure() {
		
		
		$strlist=$this->daostructure->selectFromStructure();
		
		$page_basepa='active';
		$page_structure = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function newStructure(){
		
		$name_structure=isset($_POST['new_structure'])?$_POST['new_structure']:"";
		
		
		$errors=array();
		
		if (!is_numeric($name_structure)){
			$errors['structure']='<br>* Numeric!';
		}
		if (count($errors)==0){
			
			$this->daostructure->insertIntoStructure($name_structure);
			
			$msg='Successfully';
			
		}else {
			
			$msg='Something is wrong';
		}

			$strlist=$this->daostructure->selectFromStructure();
			
			$page_basepa='active';
			$page_structure = 'active';
			$container = 'container';
			include 'basefiles/base_link.php';
	}
	
	public function deleteStructure(){
		
		$id_structure=isset($_GET['id_structure'])?$_GET['id_structure']:"";
		
		
		if ($id_structure){
			
			$this->daostructure->deleteFromStructure($id_structure);
			$msg='Successfully';

		}else {
			
			$msg='Something is wrong';

		}
	}

}

?>