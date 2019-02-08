<?php 

class Session{
	
	private $datainfo=array();
	private $own_ses;
	
	public function __construct(){
		if (!isset($_SESSION)) {
			$this->onSession();
		}
		
	}
	
	private static function onSession(){
		
		session_start();
		
	}
	
	public function serializeSession($session_name, $data) {
		
		$_SESSION[$session_name]=serialize($data);
	
	}

	public function create_session($session_name, $ses_array=false){
		if (!isset($_SESSION[$session_name])) {
			if ($ses_array==false) {
				$_SESSION[$session_name]=array();
			}else{
				$_SESSION[$session_name]='';
			}
		}
	}
	
	public function fillSession($session_name, $datainfo){
		
		if (isset($_SESSION[$session_name])){
			$_SESSION[$session_name][]=$datainfo;
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
