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
		
		$this->user->setUsername($username);
		$this->user->setPassword($password);
		
		self::get_data();
		
	}
	
	public function get_data(){
		
		
		$username=$this->user->getUsername();
		$password=$this->user->getPassword();
		
		$pass=$this->user->salted($password);

		$user=$this->daouser->selectUserByUsernameAndPassword($username, $pass);
			if ($user==null){
			echo $msg='nema';
		}else {
		
			$this->sesion->create_session($this->session_name);
					
			$_SESSION[$this->session_name]=serialize($user);
			echo $msg='ima';
		}
		include 'login.php';
		
	}
	 
	public function logout(){

		session_unset();
		session_destroy();
		header('Location:login.php');
		
	}
	
}

?>
