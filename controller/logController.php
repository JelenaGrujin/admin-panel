<?php 

require_once 'Controller.php';
require_once 'HomeController.php';

class logController extends Controller{
	
	protected $session_name='user';
	
	public function __construct(){
		
		parent::__construct();
		$this->daouser = new UserDao();
		$this->home = new homeController();
		$this->sesion = new Session();
	}

		public function login(){
		
		$username=isset($_POST['username'])?$_POST['username']:"";
		$password=isset($_POST['password'])?$_POST['password']:"";
				
		$salted="4f3gv4fsd354g.$password.4g56hert";		
		$pass=hash('md5', $salted);
		
		if(!empty($username)&&!empty($pass)){
			
			$user=$this->daouser->selectUserByUsernameAndPassword($username, $pass);
			self::userExsist($user); 
			
		}else{
			header('Location:login.php?msgg=You need to log in');
		}
		
	}
	
	public function userExsist($user){
		
		$this->sesion->create_session($this->session_name);
				
		$_SESSION[$this->session_name]=serialize($user);

		if ($this->sesion->sessionExist($this->session_name)){
			$this->home->showHome();
		}else {
			header('Location:index.php?msgg=You need to log in');
		}
			
	}
	 
	public function logout(){

		session_unset();
		session_destroy();
		header('Location:login.php');
		
	}
	
}

?>
