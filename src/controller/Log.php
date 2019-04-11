<?php
namespace Admin\controller;

use Admin\classes\Login;
use Admin\classes\Session;
use Admin\model\UserDao;

use function Composer\Autoload\includeFile;

class Log{
    
    protected $session_name='user';
    public $user;
    public $dao_user;
    public $session;
    public $home;

    public function __construct(){
        
        $this->session = new Session();
        $this->dao_user = new UserDao();
        $this->user = new Login();
        $this->home = new Home();
    }
    
    public function showLog(){
        
        include 'view/login.php';
      
    }

    public function login(){
     
        $this->user->setUsername($_POST['username']?$_POST['username']:"");
        $this->user->setPassword($_POST['password']?$_POST['password']:"");
        
        $user=$this->dao_user->selectUserByUsernameAndPassword($this->user->getUsername(), $this->user->getPassword());
       
        if (!empty($user)){
           
          $this->session->create_session($this->session_name);
          $this->session->serializeSession($this->session_name, $user);
        
        }

        $this->home->showHome();
    }
    
    public function logout(){
        session_unset();
        session_destroy();
        header('Location:index.php');
        
    }
    
}
?>
