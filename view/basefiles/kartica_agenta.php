<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	$msg=isset($msg)?$msg:"";
	$agent=isset($agent)?$agent:array();
	if ($ulogovan) {

?>

		<?php foreach ($agent as $pom){?>
<div class="col text-dark">
			<div class="col text-white mb-2">
			<div class="row mr-0 ml-0">				
				<div class="col mt-2 mb-3">
					<span class="small text-info">ID:</span>
					<input type="text" placeholder="<?php echo $pom['id_agenta']?>" class="form-control form-control-sm" readonly>
										
				</div>
				<div class="col mt-2 mb-3">
					
					<span class="small text-info">Username:</span>
					<input type="text" placeholder="<?php echo $pom['username_agenta']?>" class="form-control form-control-sm" readonly>					
				</div>			
			</div>
		</div>
	<div class="row mt-4 border border_color">
					<div class="col mt-3 mb-3">
					<div class="form-group">
						<a class="btn btn-outline-secondary form-control form-control mb-2" href="routes.php?page=brisiagenta&id_age=<?php echo $pom['id_agenta'];?>">Bri&#353;i</a>
						<a class="btn btn-outline-secondary form-control form-control mb-2" href="#">&#352;tampa</a>
						<a class="btn btn-outline-secondary form-control form-control mb-2 text-center" href="routes.php?page=azuriraj_agenta&id_age=<?php echo $pom['id_agenta'];?>">A&#382;uriranje</a>
					</div>
				</div>
		<div class="col-2 mt-2">
			<span class="small text-dark">Ime i prezime:</span>
			<input type="text" placeholder="<?php echo $pom['ime_prezime_agenta']?>" class="form-control form-control-sm">	
		</div>
		<div class="col-2 mt-2">
			<span class="small text-dark">Kontakt telefon:</span>
			<input type="text" placeholder="<?php echo $pom['kontakt_telefon_agenta']?>" class="form-control form-control-sm">	
		</div>
		<div class="col-3 mt-2 mb-3">
			<span class="small text-dark">e-mail:</span>
			<input type="text" placeholder="<?php echo $pom['email_agenta']?>" class="form-control form-control-sm">	
		</div>
		<div class="col-2 mt-2">
		<span class="small text-dark">Adresa:</span>
	<input type="text" placeholder="<?php echo $pom['adresa_agenta']?>" class="form-control form-control-sm">	
		</div>
		<div class="col-2 mt-2">
	</div>

</div>
<?php }?>
</div>
<?php 
	} else {
		header('Location:login.php?msgg=Morate se ulogovti');
	}
?>