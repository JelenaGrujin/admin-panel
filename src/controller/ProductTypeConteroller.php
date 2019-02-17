<?php
namespace Admin\controller;

use Admin\controller\Controller;
use Admin\model\typeDao;

class ProducTypeController extends Controller{

	public function __construct(){

		parent:: __construct();
		$this->daotype = new TypeDao();

	}

	public function showTypeProduct(){
		
		
		$typeslist=$this->daotype->selectFromProductType();
		
		$page_basepa='active';
		$page_type_product = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
		
	}
	
	public function newProductType(){
		
		$name_type=isset($_POST['new_type'])?$_POST['new_type']:"";

		$this->daotype->insertIntoProductType($name_type);
		
		$typeslist=$this->daotype->selectFromProductType();
		
		$msg='Successfully';
		
		$page_basepa='active';
		$page_type_product = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
		
	}



}

?>
