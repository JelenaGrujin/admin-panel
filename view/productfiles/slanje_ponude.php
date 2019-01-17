<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	$msg=isset($msg)?$msg:"";
	
	if ($ulogovan) {
?>

<form class="form" action="routes.php" method="POST" enctype="multipart/form-data">
<?php foreach ($nekretnina as $nek) {?>
  <div class="row">
    <div class="col-4 m-2">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="e_mail">
  </div>
  <div class="form-group">
    <label>naslov</label>
    <input type="text" class="form-control" value="Ponuda za nekretninu" name="naslov">
  </div>
  </div>
  <div class="col-5 m-2">
   <div class="form-group">
    <label>sadrzaj</label>
   <textarea class="form-control" name="sadrzaj" rows="7"><?php echo $nek['opis'];?></textarea>
  </div>
<span>Fotografije za nekretninu ID<strong><?php echo $nek['id_nekretnine']?></strong> se nalaze na: <strong class="text-danger">C:\xampp\htdocs\nekretnine\css\image</strong></span>
  <div class="custom-file">
    <input type="file" class="custom-file-input">
    <label class="custom-file-label">Izaberite slike...</label>
  </div>
  </div>
</div>
	<div class="row">
	<input type="hidden" name="status_potraznje" value="poslata" >
	<input type="hidden" name="id_nekretnine" value="<?php echo $nek['id_nekretnine'];?>" >
	<input type="hidden" name="status_poslovanja" value="iznajmljivanje" >
  	<div class="col-3 mt-3 ml-5">
		<button class="btn btn-sm btn-block btn-primary" type="submit" name="page" value="posalji"><strong>Potvrdi</strong></button>	
	</div>
	</div>
	<?php }?>
</form>


<?php 
	} else {
		header('Location:login.php?msgg=Morate se ulogovti');
	}
?>