<?php 
namespace Admin\classes;

class Login{
	
	private $username;
	private $password;
	
	
	public function setUsername($username) {
		$this->username=$username;
		
	}
	
	public function getUsername() {
		return $this->username;
	}
	
	public function setPassword($password) {
	    $salted="4f3gv4fsd354g.$password.4g56hert";
	    $pass=hash('md5', $salted);
		$this->password=$pass;
	
	}
	
	public function getPassword() {
		return $this->password;
	}

}


?>