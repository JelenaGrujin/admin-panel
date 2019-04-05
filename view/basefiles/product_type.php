<h4 class="display-5 text-secondary mt-4 text-center">View products type</h4>
<form action="routes.php" method="post">
	<div class="row justify-content-center text-dark mt-3">	
		<div class="col-6 col-sm-5 text-left">
			<strong>product types</strong>
		</div>
		<div class="col-6 col-sm-3 text-center">
				
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-1">
		<?php //foreach ($typeslist as $pom){?>	
		<div class="col-6 col-sm-5 text-left text-info mb-2 pt-1 border-bottom">
			<span><?php //echo $pom['name_pro_type'];?></span>
		</div>
		<div class="col-6 col-sm-3 text-center mb-2 border-bottom">
		</div>
		<?php  //} ?>
	</div>
		
	<div class="row justify-content-center text-dark mt-2">	
		<div class="col-6 col-sm-5 text-left mt-2 mb-2">
			<span>add new:</span>
		</div>
		<div class="col-6 col-sm-3 text-center">
			<input type="text" name="new_type" maxlength="30" class="form-control pt-1 pb-1">
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-2">	
		<div class="col-6 col-sm-5 text-left">
				
		</div>
		<div class="col-6 col-sm-3 text-center">
			<button class="btn btn-sm btn-secondary btn-block" type="submit" name="page" value="newTypeProduct">Add new</button>
		</div>
	</div>
</form>