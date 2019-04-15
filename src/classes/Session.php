<?php 
namespace Admin\classes;

class Session{
	
	public function __construct(){
	   
		if (!isset($_SESSION)) {
			$this->onSession();
		}
		
	}
	
	public function onSession(){
		
		session_start();
		
	}
	
	public function serializeSession($session_name, $data) {
		
		$_SESSION[$session_name]=serialize($data);
	
	}

	public function createSession($session_name, $data_info=false){
		if (!isset($_SESSION[$session_name])) {
		    if ($data_info==false) {
				$_SESSION[$session_name]=array();
			}else{
				$_SESSION[$session_name]='';
			}
		
		}
	}
	
	public function fillSession($session_name, $data_info){
		
		if (isset($_SESSION[$session_name])){
			$_SESSION[$session_name][]=$data_info;
		}else {
			$_SESSION[$session_name]=array();
		}
		
	}
	
	public function getSessionData($session_name){

		if (isset($_SESSION[$session_name])){
		
			return $_SESSION[$session_name];
			
		}else {
			return false;
		}
	}
	
	public function sessionExist($session_name){
		
		if(isset($_SESSION[$session_name])){
			return true;
		}else{
			return false;
		}
		
	}
	
	public function offSession($session_name){
		
		if (!empty($session_name)){
			unset($_SESSION[$session_name]);
		}
		
	}
	/*
	public static function getInstance(){
	    if(!self::$instance)
	    {
	      self::$instance = new self();
	    }
	   
	    return self::$instance;
	  }*/
}


?>
