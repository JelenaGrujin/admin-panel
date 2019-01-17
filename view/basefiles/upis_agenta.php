<?php
//	if(!isset($_SESSION['user'])) {
	//	session_start();
	//}
	
	//if ($ulogovan) {

		$errors=isset($errors)?$errors:array();
?>
<h4 class="display-5 text-secondary mt-4">upisa Agenata</h4>
<form action="routes.php" method="post">
	<div class="row justify-content-center text-dark w-75">	
		<div class="col-3 col-sm text-left">
			<span class="small">Ime i prezime agenta:</span>
			<input type="text" name="name_surname" maxlength="100" value="" class="form-control form-control-sm" placeholder="Ime i Prezime agenta">
		</div>
		<div class="col-3 col-sm ">
			<span class="small">Adresa:</span>
			<input type="text" name="address" maxlength="130" value="" class="form-control form-control-sm" placeholder="adresa">
		</div>
	</div>
	<div class="row justify-content-center text-dark w-75">	
		<div class="col-3 col-sm text-left">
			<span class="small">Telefon:</span><span class="msg text-danger"><?php if(array_key_exists('phone', $errors)) echo $errors['phone']?></span>
			<input type="text" name="phone" maxlength="20" value="" class="form-control form-control-sm" placeholder="telefon">
		</div>
		<div class="col-3 col-sm ">
			<span class="small">e_mail:</span><span class="msg text-danger"><?php if(array_key_exists('e_mail', $errors)) echo $errors['e_mail']?></span><span class="msg text-danger"><?php if(array_key_exists('e_mail_bad', $errors)) echo $errors['e_mail_bad']?></span><span class="msg text-danger"><?php if(array_key_exists('e_mail_posotjeci', $errors)) echo $errors['e_mail_posotjeci']?></span>
			<input type="text" name="e_mail" maxlength="50" value="" class="form-control form-control-sm" placeholder="e_mail">
		</div>
	</div>
	<div class="row justify-content-center text-dark w-75">	
		<div class="col col-sm text-left">
			<span class="small">Username:</span><span class="msg text-danger"><?php if(array_key_exists('user_existing', $errors)) echo $errors['user_existing']?></span>
			<input type="text" name="username" maxlength="30" value="" class="form-control form-control-sm" placeholder="username">
		</div>
		<div class="col col-sm ">
			<span class="small">Password:</span>
			<input type="password" name="password" maxlength="20" value="" class="form-control form-control-sm" placeholder="password">
		</div>
		<div class="col col-sm text-left">
			<span class="small">ponovi Password:</span>
			<input type="password" name="p_password" maxlength="20" value="" class="form-control form-control-sm" placeholder="ponovi password"><span class="msg text-danger"><?php if(array_key_exists('bad_pass', $errors)) echo $errors['bad_pass']?></span>
		</div>
	</div>
	<div class="row justify-content-center text-dark w-75">	
		
		<div class="col-6 col-sm  mt-3">
			
		</div>
	</div>
	<div class="row justify-content-center text-dark w-75">	
		<div class="col-6 col-sm text-left">
			
		</div>
		<div class="col-6 col-sm  mt-3">
			<button class="btn btn-sm btn-secondary btn-block" type="submit" name="page" value="signing">SIGNING</button>
		</div>
	</div>
		
	
</form>
<?php 
//	} else {
//		header('Location:login.php?msgg=Morate se ulogovti');
//	}
?>