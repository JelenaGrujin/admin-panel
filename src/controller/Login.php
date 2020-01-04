<?php
namespace Admin\controller;

use Admin\classes\register;
use Admin\classes\Session;
use Admin\model\AgentDao;

class Login{
    
    public $register;
    
    public function __construct()
    {
        $this->register= new Register();
    }
    public function showLog(){
        
        include 'view/login.php';
      
    }

    public function showError(){

        include '404.html';
    }

    public function login(){

        $username=$_POST['username']?$_POST['username']:"";
        $password=$_POST['password']?$_POST['password']:"";

        $dao_user = new AgentDao();
        $user=$dao_user->selectByUsername($username);

        if (!empty($user)){
            $this->matching($password,$user);
        }else{
            $this->showLog();
        }
    }
    
    public function matching($password,$user){
        foreach ($user as $item){
            $this->passVerify($password,$item['password'],$user);
        }
    }

    public function passVerify($pass,$password,$user){
        $hash = settype($password,"string");
        var_dump($pass);
        var_dump($hash);
        if (password_verify($pass, $hash)) {
            echo 'Password is valid!';
        } else {
            echo 'Invalid password.';
        }
    }

    public function logged($user){
        //sledeća tačka
        $session = new Session();
        $session->fillSession(get_class($this),$user);
        $home=new Home();
        $home->showHome();
    }
    
    public function logout(){
        session_unset();
        session_destroy();
        $session = new Session();
        $session->offSession(get_class($this));
        $session->offSession('Admin\controller\NewProduct');
        $session->offSession('Admin\controller\NewOwner');
        header('Location:index.php');
        
    }
    
}