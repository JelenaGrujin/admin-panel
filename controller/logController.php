<?php 

require_once 'Controller.php';

class logController extends Controller{
	
	public function __construct(){
		
		parent::__construct();
		$this->daouser = new UserDao();
		$this->daoproduct = new ProductDao();
		$this->daoowner = new OwnersDao();
		
	}
	
	public function login(){
		
		$username=isset($_POST['username'])?$_POST['username']:"";
		$password=isset($_POST['password'])?$_POST['password']:"";
				
		$salted="4f3gv4fsd354g.$password.4g56hert";		
		$pass=hash('md5', $salted);
		
		if(!empty($username)&&!empty($pass)){
			
			
			$user=$this->daouser->selectUserByUsernameAndPassword($username, $pass);
			
			if($user){
				
				session_start();
				$_SESSION['user']=serialize($user);
		
				$productlist=$this->daoproduct->selectFromProducts();
				$ownerlist=$this->daoowner->selectFromOwners();

				$page_homepa = 'active';
				include 'homefiles/home_link.php';
				
			}else{
				 $user=$this->daouser->selectUserByUsernameAndPassword($username, $pass);

				$msg='Wrong username and password.';
				include 'login.php';
			}
			
		}else{
			$msg='Try again.';
			include 'login.php';
		}
		
	
	}
	 
	public function logout(){
		
		session_start();
		session_unset();
		session_destroy();
		header('Location:login.php');
		
	}
	
}

?>