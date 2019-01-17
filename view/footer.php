<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	
	if ($ulogovan) {
?>

<?php 
	} else {
		header('Location:login.php?msgg=Morate se ulogovti');
	}
?>