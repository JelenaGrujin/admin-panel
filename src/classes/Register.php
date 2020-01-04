<?php 
namespace Admin\classes;

class Register{
	
	private $username;
	private $password;
	
	
	public function setUsername($username) {
		$this->username=$username;
		
	}
	
	public function getUsername() {
		return $this->username;
	}
	
	public function setPassword($password) {
	    $pass=password_hash($password, PASSWORD_DEFAULT);
		$this->password=$pass;
	
	}
	
	public function getPassword() {
		return $this->password;
	}

}