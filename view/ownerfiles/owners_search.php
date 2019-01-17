<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);

	if ($user) {
?>	
<div class="row text-primary bg-white m-3 border-top-0 p-2 pb-3">

	<div class="col-2">
		<input class="form-control" id="myInput" type="text" placeholder="Key word...">
 	</div>

</div>
<?php 
	} else {
			header('Location:login.php?msgg=You need to log in');
	}
?>