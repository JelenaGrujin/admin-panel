<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	
	if ($user) {
		
		$naziv_dokumenta=isset($naziv_dokumenta)?$naziv_dokumenta:"";
	include 'head.php';?>
  <embed src="../css/dokumenta/<?php echo $naziv_dokumenta;?>" type="aplication/pdf" width="100%" height="600px" ></embed>


<?php 
		} else {
		header('Location:login.php?msgg=Morate se ulogovti');
	}
?>