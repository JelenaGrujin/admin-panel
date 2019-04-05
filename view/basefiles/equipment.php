<?php

	$errors=isset($errors)?$errors:array();
?>

<h4 class="display-5 text-secondary mt-4 text-center">View equipment</h4>
<form action="routes.php" method="post">
	<div class="row justify-content-center text-dark mt-3">	
		<div class="col-6 col-sm-5 text-left">
			<strong>Equipment</strong>
		</div>
		<div class="col-6 col-sm-3 text-center">
			<strong>Delete</strong>
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-1">
		<?php foreach ($equilist as $st){?>	
		<div class="col-6 col-sm-5 text-left text-info mb-2 pt-1 border-bottom">
			<span><?php echo $st['name_equipment'];?></span>
		</div>
		<div class="col-6 col-sm-3 text-center mb-2 border-bottom">
			<a href="routes.php?page=delete_equipment&id_equipment=<?php echo $st['id_equipment'];?>" class="btn btn-light btn-sm btn-block" role="button" aria-pressed="true"><strong class="text-danger">X</strong></a>
		</div>
		<?php  } ?>
	</div>
		
	<div class="row justify-content-center text-dark mt-2">	
		<div class="col-6 col-sm-5 text-left mt-2 mb-2">
		</div>
		<div class="col-6 col-sm-3 text-center">
			<input type="text" name="new_equipment" class="form-control pt-1 pb-1">
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-2">	
		<div class="col-6 col-sm-5 text-left">
				
		</div>
		<div class="col-6 col-sm-3 text-center">
			<button class="btn btn-sm btn-secondary btn-block" type="submit" name="page" value="newequipment">Add</button>
		</div>
	</div>
</form>