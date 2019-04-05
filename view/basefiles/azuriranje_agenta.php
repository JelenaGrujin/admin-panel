<?php
	$agent=isset($agent)?$agent:array();

?>
<form action="routes.php" method="post">
		<?php foreach ($agent as $pom){?>
<div class="col text-dark">

			<div class="col text-white mb-2">
			<div class="row mr-0 ml-0">				
				<div class="col mt-2 mb-3">
					<span class="small text-info">id:</span>
					<input type="text" value="<?php if (isset($pom['id_agenta']))echo $pom['id_agenta']?>" class="form-control form-control-sm" readonly>
									
				</div>
				<div class="col mt-2 mb-3">
					
					<span class="small text-info">Username:</span>
					<input type="text" value="<?php if (isset($pom['username_agenta']))echo $pom['username_agenta']?>" class="form-control form-control-sm" readonly>					
				</div>				
			</div>
		</div>
	<div class="row mt-4 border border_color">
		<div class="col mt-2">
			<span class="small text-dark">Ime i prezime:</span>
			<input type="text" value="<?php if (isset($pom['ime_prezime_agenta'])) echo $pom['ime_prezime_agenta']?>" class="form-control form-control-sm">	
		</div>
		<div class="col mt-2">
			<span class="small text-dark">Kontakt telefon:</span>
			<input type="text" value="<?php if (isset($pom['kontakt_telefon_agenta'])) echo $pom['kontakt_telefon_agenta']?>" class="form-control form-control-sm">	
		</div>
		<div class="col mt-2 mb-3">
			<span class="small text-dark">e-mail:</span>
			<input type="text" value="<?php if (isset($pom['email_agenta'])) echo $pom['email_agenta']?>" class="form-control form-control-sm">	
		</div>
		<div class="col mt-2">
		<span class="small text-dark">Adresa:</span>
	<input type="text" value="<?php if (isset($pom['adresa_agenta'])) echo $pom['adresa_agenta']?>" class="form-control form-control-sm">	
		</div>
		<div class="col mt-2">
			<button class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" name="page" value="azuriraj_agenta"><strong>Potvrdi</strong></button>
		
	</div>

</div>
</div>

<?php }?>
</form>