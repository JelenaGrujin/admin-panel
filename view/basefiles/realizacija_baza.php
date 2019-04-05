<h4 class="display-5 text-secondary mt-4 text-center">STATUS potra&#382;nje</h4>
<form action="routes.php" method="post">
	<div class="row justify-content-center text-dark mt-3">	
		<div class="col-6 col-sm-5 text-left">
			<strong>STATUS</strong>
		</div>
		<div class="col-6 col-sm-3 text-center">
			<strong>Obri&#353;i</strong>
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-1">
		<?php foreach ($potraznja as $re){?>	
		<div class="col-6 col-sm-5 text-left text-info mb-2 pt-1 border-bottom">
			<span><?php  echo $re['ime_statusa_potraznje']?></span>
		</div>
		<div class="col-6 col-sm-3 text-center mb-2 border-bottom">
		<a href="routes.php?page=obrisistatus&id_statusa=<?php  echo $re['id_statusa_potraznje']?>" class="btn btn-light btn-sm btn-block" ><strong class="text-danger">X</strong></a>
		</div>
		<?php  } ?>
	</div>
		
	<div class="row justify-content-center text-dark mt-2">	
		<div class="col-6 col-sm-5 text-left mt-2 mb-2">
			<span>dodaj novi:</span>
		</div>
		<div class="col-6 col-sm-3 text-center">
			<input type="text" name="novi_status" maxlength="20" class="form-control pt-1 pb-1">
		</div>
	</div>
		
	<div class="row justify-content-center text-white mt-2">	
		<div class="col-6 col-sm-5 text-left">
				
		</div>
		<div class="col-6 col-sm-3 text-center">
			<button class="btn btn-sm btn-secondary btn-block" type="submit" name="page" value="novstatus">Dodaj</button>
		</div>
	</div>
</form>
