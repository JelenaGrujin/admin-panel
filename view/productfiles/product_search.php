<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	$listatipova=isset($listatipova)?$listatipova:array();
	$listastatusa=isset($listastatusa)?$listastatusa:array();


	
	if ($user) {
?>
	<div class="row">
		<div class="col-2">
			<button class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="" name="" value="#"><strong>Send</strong></button>
			</div>
		<div class="col-2">
			<input class="form-control mt-2 pt-2 pb-2" id="myInput" type="text" placeholder="Key word...">
	 	</div>
 	</div>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>