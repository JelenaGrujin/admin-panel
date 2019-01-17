<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	$id_p=isset($id_p)?$id_p:"";
	$errors =isset($errors)?$errors:array();
	if ($ulogovan) {
		
?>
<form class="form" action="routes.php" method="POST" enctype="multipart/form-data" id="js-upload-form">
	<div class="row mt-2 mb-2 border">
		<div class="col mt-4 mb-3">
			<span class="text-dark">Select photos for product ID: <?php echo $id_p?></span>
			<input type="file" name="foto[]" value="" class="control-file text-dark"  multiple="multiple">
			<span class="msg text-danger"><?php if(array_key_exists('many_pho', $errors)) echo $errors['many_pho']?></span>
			<span class="msg text-danger"><?php if(array_key_exists('ext_photos', $errors)) echo $errors['ext_photos']?></span>
		</div>
		<div class="col-3 mt-4 mb-3">
				<button class="btn btn-primary btn-block pt-1 pb-2" type="submit" name="page" value="Confirm_photos"><strong>Confirm photos</strong></button>	
			</div>
	</div>
</form>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
	
?>