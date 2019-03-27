<?php
namespace Admin\controller;

use Admin\classes\Login;
use Admin\session\Session;
use Admin\model\UserDao;

use function Composer\Autoload\includeFile;

class LogController {
    
    protected $session_name='user';
    public $user;
    public $daouser;
    public $session;
    public $home;

    
    public function __construct(){

        $this->session = new Session();
        $this->daouser = new UserDao();
        $this->user = new Login();
        $this->home = new HomeController();
    }
    
    public function showView(){
        
        include 'view/login.php';
      
    }
    
    public function login(){
     
        $this->user->setUsername($_POST['username']?$_POST['username']:"");
        $this->user->setPassword($_POST['password']?$_POST['password']:"");
        
        $user=$this->daouser->selectUserByUsernameAndPassword($this->user->getUsername(), $this->user->getPassword());
        
        if (!empty($user)){
            
            $this->session->create_session($this->session_name);
            $this->session->serializeSession($this->session_name, $user);
        }
        
        self::redirect();
    }

    public function redirect() {

        
        if ($this->session->sessionExist($this->session_name)==true){
            
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
