<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	$msg=isset($msg)?$msg:"";
	$listanek = isset($listanek)?$listanek:array();
	if ($ulogovan) {
?>

<form class="form" action="routes.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="e_mail" class="form-control" name="e_mail">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">naslov</label>
    <input type="text" class="form-control" name="naslov">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">sadrzaj</label>
    <textarea class="form-control" name="sadrzaj" rows="3"></textarea>
  </div>
  <div class="col-4 mt-3 mb-3">
			<button class="btn btn-info btn-block pt-1 pb-2" type="submit" name="page" value="posalji"><strong>Potvrdi</strong></button>	
		</div>
</form>


<?php 
	} else {
		header('Location:login.php?msgg=Morate se ulogovti');
	}
?>