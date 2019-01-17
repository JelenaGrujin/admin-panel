<?php 

require_once 'Controller.php';

class homeController extends Controller{
	
	public function __construct(){
		
		parent::__construct();
		$this->daoproduct = new ProductDao();
	    $this->daoowner = new OwnersDao();
	    $this->daopropho = new ProPhoDao();
		
	}
	
	public function showHome() {
		
		$productlist=$this->daoproduct->selectFromProducts();
		$ownerlist=$this->daoowner->selectFromOwners();

		$page_homepa = 'active';
		include 'homefiles/home_link.php';
	}
	
	public function klikPro(){
		
		$id_pro=isset($_GET['id_product'])?$_GET['id_product']:"";
		$time=date("d-m-Y");
		if (!empty($id_pro)){
			setcookie("kukit[$id_pro]", date("d-m-Y"), time()+86400);
		}else {
			echo $msg='Invalid ID, call the service';
		}
	}

	public function unsetKukiPro(){
		
		$id_pro=isset($_GET['id_product'])?$_GET['id_product']:"";
		if (!empty($id_pro)) {
			foreach ($_COOKIE['kukit'] as $k => $v) {
				if ($id_pro==$k){
					setcookie("kukit[$id_pro]", date("d-m-Y"), time()-86400);
				}
			}
		}else {
			 $msg='Invalid ID, call the service';
		}
	}
	
	public function kliOwn(){
		
		$id_own=isset($_GET['$id_owner'])?$_GET['$id_owner']:"";
		$time=date("d-m-Y");

		setcookie("kukio[$id_own]", date("d-m-Y"), time()+86400);

	}
	
	public function unsetKukiOwn(){
		$id_own=isset($_GET['$id_owner'])?$_GET['$id_owner']:"";
		if (!empty($id_own)) {
			foreach ($_COOKIE['kukio'] as $k => $v) {
				if ($id_own==$k){
					setcookie("kukio[$id_own]", date("d-m-Y"), time()-86400);
				}
			}
		}else {
			 $msg='Invalid ID, call the service';
		}
	}
	
	public function showBirth_view(){
		$id_owner=isset($_GET['id_ownera'])?$_GET['id_ownera']:"";
		
		$products=$this->daoproduct->selectFromProductByIdOwner($id_owner);
		foreach ($products as $pro){
			$id_pro=$pro['id_product'];
		}
		$photos=$this->daopropho->selectFromProductsPhoto($id_pro);
		$owners=$this->daoowner->selectFromOwnersById($id_owner);

		$page_birthday_view = 'active';
		include 'homefiles/home_link.php';
	}
	
}

?>