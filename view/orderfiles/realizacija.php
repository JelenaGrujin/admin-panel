<?php
		$id_potraznje=isset($id_potraznje)?$id_potraznje:"";
		$nekretnine=isset($nekretnine)?$nekretnine:array();
		$errors=isset($errors)?$errors:array();
		$id_nekretnine=isset($id_nek)?$id_nek:"";
		$status=isset($stat)?$stat:'-';
		$opis=isset($opi)?$opi:"";
?>
<div class="container-fluid">
	<form class="form" action="routes.php" method="POST" enctype="multipart/form-data" id="js-upload-form">
<div class="row mt-5 ml-5">
  <div class="col-1 m-1">
    <span>ID potra&#382;nje</span>
    <input type="text" class="form-control" placeholder="P<?php echo $id_potraznje;?>" >
    <input type="hidden" name="id_potraznje" value="<?php echo $id_potraznje?>" >
  </div>
  <div class="col-1 m-1">
  <span>ID nekretnine</span>
   <select class="form-control" name="id_nekretnine">
    <option value="">-</option>
    <?php foreach ($nekretnine as $nk) {?>
      <option value="<?php echo $nk['id_nekretnine']?>"><?php echo $nk['id_nekretnine']?></option>
    <?php }?>
    </select>

  </div>
  <span class="msg text-danger"><?php if (array_key_exists('nekretnina', $errors))echo $errors['nekretnina']?></span>
</div>
<div class="row ml-5">
  <div class="col-2 m-2">
  <span>status</span>
    <select class="form-control" name="status">
    <option value="<?php echo $status?>"><?php echo $status?></option>
    <?php foreach ($statusi as $st) {?>
      <option value="<?php echo $st['ime_statusa_potraznje']?>"><?php echo $st['ime_statusa_potraznje']?></option>
    <?php }?>
    </select>
  </div>
  <div class="col-2 m-2">
  <span>datum</span>
  	<input class="form-control" type="text" name="datum" placeholder="dd-mm-GGGG">
  </div>
</div>
<div class="row ml-5">
  <div class="col-4 m-2">
    <span>Opis realizacije</span>
    <textarea class="form-control"rows="3" name="opis"><?php echo $opis?></textarea>
  </div>
	<div class="col-5 mt-4 mb-3">
	<div class="row mb-3">
		<span>Odaberite slike primopredaje:</span>
			<input type="file" name="foto[]" value="" class="control-file text-dark"  multiple="multiple">
			<span class="msg text-danger"><?php if(array_key_exists('mnogo_slika', $errors)) echo $errors['mnogo_slika']?></span>
			<span class="msg text-danger"><?php if(array_key_exists('ext_slika', $errors)) echo $errors['ext_slika']?></span>
		</div>
		<div class="row mt-3">	
		<span>Unos dokumenta:</span>
			<input type="file" name="doc[]" multiple>  
			<span class="msg"><?php if(array_key_exists('mnogo_dok', $errors)) echo $errors['mnogo_dok']?></span><span class="msg"><?php if(array_key_exists('ext_dok', $errors)) echo $errors['ext_dok']?></span><span class="msg"><?php if(array_key_exists('dok_postojeci', $errors)) echo $errors['dok_postojeci']?></span>
		</div>
	</div>
</div>
		
<div class="row ml-5">
 <div class="col-2 m-2">
  <button type="submit" name="page" value="ubaci_realizaciju" class="btn btn-primary">Potvrdi</button>
 </div>  
</div>    
	</form>
</div>