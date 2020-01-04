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

    public function fillSession($session_name, $data_info){
	    if ($this->sessionExist($session_name)==true){
	        $this->offSession($session_name);
	        $_SESSION[$session_name][]=$data_info;
        }else{
            $_SESSION[$session_name][]=$data_info;
        }
    }
	
	public function sessionExist($session_name){
		if(isset($_SESSION[$session_name])){
			return true;
		}else{
			return false;
		}
	}

    public function getSessionData($session_name){
        if (isset($_SESSION[$session_name])){

            return $_SESSION[$session_name];

        }else {
            return false;
        }
    }

	public function offSession($session_name){
		
		if (!empty($session_name)){
			unset($_SESSION[$session_name]);
		}
		
	}
}
