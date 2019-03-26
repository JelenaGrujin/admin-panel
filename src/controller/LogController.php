<?php 
namespace Admin\controller;

use Admin\controller\Controller;
use Admin\controller\HomeController;
use Admin\classes\Login;
use Admin\session\Session;
use Admin\model\UserDao;

class LogController extends Controller{
	
	protected $session_name='user';
	public $user;
	
	public function __construct(){
		
		parent::__construct();
		$this->daouser = new UserDao();
		$this->home = new homeController();
		$this->sesion = new Session();
		$this->user = new Login();
	}
	
	public function showView(){
		
		 include 'view/login.php';
	}
	
	public function login(){
        
        $username=isset($_POST['username'])?$_POST['username']:"";
        $password=isset($_POST['password'])?$_POST['password']:"";
        
        $this->user->setUsername($username);
        $this->user->setPassword($password);
        
        $user=self::get_data();
        
    }
	
	public function get_data(){
		
		
		$username=$this->user->getUsername();
		$password=$this->user->getPassword();
		
		$pass=$this->user->salted($password);

		$user=$this->daouser->selectUserByUsernameAndPassword($username, $pass);
			if ($user!==null){
				
				$this->sesion->create_session($this->session_name);
				$this->sesion->serializeSession($this->session_name, $user);
		}
		
		self::redirect();
		
	}
	
	public function redirect() {
		
		if ($this->sesion->sessionExist($this->session_name)==true){
			
			$this->home->showHome();
		}else {
			header('Location:login.php?$msgg=morate se ulogovati');
			
		}
	}
	 
	public function logout(){

		session_unset();
		session_destroy();
		header('Location:login.php');
		
	}
	
}

?>
