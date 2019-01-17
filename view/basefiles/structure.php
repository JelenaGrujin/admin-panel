<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	$errors=isset($errors)?$errors:array();
	if ($user) {
?>
<h4 class="display-5 text-secondary mt-4 text-center">View structure</h4>
<form action="routes.php" method="post">
	<div class="row justify-content-center text-dark mt-3">	
		<div class="col-6 col-sm-5 text-left">
			<strong>Structure</strong>
		</div>
		<div class="col-6 col-sm-3 text-center">
			<strong>Delete</strong>
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-1">
		<?php foreach ($strlist as $st){?>	
		<div class="col-6 col-sm-5 text-left text-info mb-2 pt-1 border-bottom">
			<span><?php echo $st['name_structure'];?></span>
		</div>
		<div class="col-6 col-sm-3 text-center mb-2 border-bottom">
			<a href="routes.php?page=delete_structure&id_structure=<?php echo $st['id_structure'];?>" class="btn btn-light btn-sm btn-block" role="button" aria-pressed="true"><strong class="text-danger">X</strong></a>
		</div>
		<?php  } ?>
	</div>
		
	<div class="row justify-content-center text-dark mt-2">	
		<div class="col-6 col-sm-5 text-left mt-2 mb-2">
			<span>add new:</span><span class="msg text-danger"><?php if(array_key_exists('structure', $errors)) echo $errors['structure']?></span>
		</div>
		<div class="col-6 col-sm-3 text-center">
			<input type="text" name="new_structure" class="form-control pt-1 pb-1">
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-2">	
		<div class="col-6 col-sm-5 text-left">
				
		</div>
		<div class="col-6 col-sm-3 text-center">
			<button class="btn btn-sm btn-secondary btn-block" type="submit" name="page" value="newstructure">Add</button>
		</div>
	</div>
</form>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>