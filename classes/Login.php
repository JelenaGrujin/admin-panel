<?php 

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
		$this->password=$password;
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	public function salted($password){
		
		$salted="4f3gv4fsd354g.$password.4g56hert";		
		$pass=hash('md5', $salted);
		
		return $pass;
	}
}


?>