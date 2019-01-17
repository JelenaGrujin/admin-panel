<?php 

class Session{
	
	private $productinfo=array();
	private $own_ses;
	
	public function __construct(){
		if (!isset($_SESSION)) {
			$this->onSession();
		}
		
		
	}
	
	public function onSession(){
		
		session_start();
		
	}

	public function productPause($productinfo){
		$_SESSION['product'][]=
	}
//proveriti...
	public function create_session($session_name, $ses_array=false){
		if (!isset($_SESSION[$session_name])) {
			if ($ses_array==false) {
				$_SESSION[$session_name]=$array();
			}else{
				$_SESSION[$session_name]='';
			}
		}


	}
	
	public function fillSession($session_name, $session_array){
		
		if (isset($_SESSION[$session_name])){
			$_SESSION[$session_name][]=$session_array;
		}else {
			$_SESSION[$session_name]=array();
		}
		
	}
	
	public function offSession($session_name){
		
		if (!empty($session_name)){
			unset($_SESSION[$session_name]);
			session_destroy();
		}
		
	}
}


?>