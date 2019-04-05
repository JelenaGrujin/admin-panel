<?php 
namespace Admin\controller;

use Admin\model\ProductDao;
use Admin\model\OwnersDao;
use Admin\model\ProPhoDao;

class PhotoController extends Controller {
	
	private $daopropho;
	private $daoproduct;
	private $daoowner;
	
	public function __construct() {
	     	$this->daoproduct = new ProductDao();
	     	$this->daoowner = new OwnersDao();
	     	$this->daopropho = new ProPhoDao();
	     }
	
	
	public function showProductPhotos(){
		
		$id_product=isset($_GET['id_product'])?$_GET['id_product']:"";
		
		$photos = $this->daopropho->selectFromProductsPhoto($id_product);

		if (empty($photos)) {
			$msg='No pictures in the database';
		}

		$page_product_photo = 'active';
		include 'app_link.php';
	}
	
	public function showEditPhotos(){
		$id_product=isset($_GET['id_pro'])?$_GET['id_pro']:"";
		
		$photos = $this->daopropho->selectFromProductsPhoto($id_product);

		if (empty($photos)) {
			$msg='No pictures in the database';
		}

		$page_productpa='active';
		$page_edit_photo = 'active';
		include 'app_link.php';
	}

	public function deletePhoto(){
		
		$id_photo=isset($_GET['id_photo'])?$_GET['id_photo']:"";
		
		
			$all=$this->daopropho->selectFromProductsPhotoById($id_photo);
			foreach ($all as $s) {
				$id_product=$s['id_products'];
				 $file= '../css/image/'.$s['name_photo'];
	          			  unlink($file);
			}
			
			$this->dao->deleteFromProductPhoto($id_photo);
	
			$photos = $this->daopropho->selectFromProductsPhoto($id_product);
			
			if (!empty($photos)){
				
				$page_productpa='active';
				$page_edit_photo = 'active';
				include 'app_link.php';
				
			}else {
				
				$msg='Product ID: '.$id_product.' does not have any more photos in the database';

				$productlist=$this->daoproduct->selectFromProducts();
				$ownerlist=$this->daoowner->selectFromOwners();
		
				$page_productpa='active';
				$page_list_productpa='active';	
				include 'app_link.php';	
			}
	}
	
	
	
}

?>