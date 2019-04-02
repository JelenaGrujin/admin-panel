<?php
namespace Admin\controller;

use Admin\model\typeDao;

class ProducTypeController{

	public function __construct(){

		$this->daotype = new TypeDao();

	}

	public function showTypeProduct(){
		
		$typeslist=$this->daotype->selectFromProductType();
		
		$page_basepa='active';
		$page_type_product = 'active';
		$container = 'container';
		include 'view/basefiles/base_link.php';
		
	}
	
	public function newProductType(){
		
		$name_type=isset($_POST['new_type'])?$_POST['new_type']:"";

		$this->daotype->insertIntoProductType($name_type);
		
		$typeslist=$this->daotype->selectFromProductType();
		
		$msg='Successfully';
		
		$page_basepa='active';
		$page_type_product = 'active';
		$container = 'container';
		include 'view/basefiles/base_link.php';
		
	}



}

?>
