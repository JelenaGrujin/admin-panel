<?php
namespace Admin\controller;

use Admin\controller\Controller;
use Admin\model\typeDao;

class ProductType{

	public function __construct(){

		$this->daotype = new TypeDao();

	}

	public function showTypeProduct(){
        $con= new Controller();
        $con->redirect();

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