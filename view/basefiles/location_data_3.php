<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	
	if ($ulogovan) {
?>
<h4 class="display-5 text-secondary mt-4 text-center">Location 3</h4>
<form action="routes.php" method="post">
	<div class="row justify-content-center text-dark mt-3">	
		<div class="col-6 col-sm-5 text-left">
			<strong>Location 3</strong>
		</div>
		<div class="col-6 col-sm-3 text-center">
			<strong>Delete</strong>
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-1">
		<?php foreach ($listlocation3 as $gr){?>
		<div class="col-6 col-sm-5 text-left text-info mb-2 pt-1 border-bottom">
			<span><?php echo $gr['name_location_3'];?></span>
		</div>
		<div class="col-6 col-sm-3 text-center mb-2 border-bottom">
			<a href="routes.php?page=deletelocation3&id_location_3=<?php echo $gr['id_location_3'];?>" class="btn btn-light btn-sm btn-block" role="button" aria-pressed="true"><strong class="text-danger">X</strong></a>
		</div>
		<?php  } ?>
	</div>
		
	<div class="row justify-content-center text-dark mt-2">	
		<div class="col-6 col-sm-5 text-left mt-2 mb-2">
			<span>Add new:</span>
		</div>
		<div class="col-6 col-sm-3 text-center">
			<input type="text" name="new_location_3" maxlength="20" class="form-control pt-1 pb-1">
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-2">	
		<div class="col-6 col-sm-5 text-left">
				
		</div>
		<div class="col-6 col-sm-3 text-center">
			<button class="btn btn-sm btn-secondary btn-block" type="submit" name="page" value="newlocation3">Add</button>
		</div>
	</div>
</form>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>