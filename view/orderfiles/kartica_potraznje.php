<?php
	$msg=isset($msg)?$msg:"";
	$listapotraznji=isset($listapotraznji)?$listapotraznji:array();

?>

<?php foreach ($listapotraznji as $pom){?>
<div class="row text-dark mt-2 ml-1 mr-1 pb-2 border">
	<div class="col mt-2">
		<span class="small">ID:</span>
		<input type="text" placeholder="<?php echo $pom['id_potraznje']?>" class="form-control form-control-sm" readonly>
		
		<span class="small">Poslate ponude:</span>
		<input type="text" placeholder="" class="form-control form-control-sm" readonly>
	</div>
	
	<div class="col mt-2">
		<span class="small">Uba&#269;en:</span>
		<input type="text" placeholder="<?php echo $pom['datum_upisa_p']?>" class="form-control form-control-sm" readonly>
		
		<span class="small">Izmena:</span>
		<input type="text" placeholder="<?php echo $pom['datum_azuriranja_p']?>" class="form-control form-control-sm" readonly>
	</div>
	
	<div class="col mt-2">
		<span class="small">Status potra&#382;nje:</span>
		<input type="text" placeholder="<?php echo $pom['status_potraznje']?>" class="form-control form-control-sm" readonly>
							
		<span class="small">Status kontakta:</span>
		<input type="text" placeholder="<?php echo $pom['status_kontakta']?>" class="form-control form-control-sm" readonly>
	</div>
</div>
	
<div class="row text-dark mt-2 ml-1 mr-1 border">
	<div class="col mt-2">
		<div class="form-group mb-0">
			<a class="btn btn-outline-secondary form-control form-control mb-2" href="routes.php?page=brisipotraznju&id_pot=<?php echo $pom['id_potraznje'];?>">Bri&#353;i</a>
			<a class="btn btn-outline-secondary form-control form-control mb-2" href="#">&#352;tampa</a>
			<a class="btn btn-outline-secondary form-control form-control mb-2 text-center" href="routes.php?page=azuriranjepotraznje&id_pot=<?php echo $pom['id_potraznje'];?>">A&#382;uriranje</a>
		</div>
	</div>
		
	<div class="col mt-2">
		<span class="small text-dark">Ime i prezime:</span>
		<input type="text" placeholder="<?php echo $pom['ime_prezime_potraznje']?>" class="form-control form-control-sm" readonly>
		
		<span class="small text-dark">e-mail:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_potraznje']?>" class="form-control form-control-sm" readonly>
	</div>
		
	<div class="col mt-2">
		<span class="small text-dark">Kontakt telefon:</span>
		<input type="text" placeholder="<?php echo $pom['kontakt_tel']?>" class="form-control form-control-sm" readonly>
		
		<span class="small text-dark">Izvor podatka:</span>
		<input type="text" placeholder="<?php echo $pom['izvor_podatka_p']?>" class="form-control form-control-sm" readonly>
	</div>
		
	<div class="col mt-2">
		<span class="small text-dark">Kontakt telefon 2:</span>
		<input type="text" placeholder="<?php echo $pom['kontakt_tel_2']?>" class="form-control form-control-sm" readonly>
		
		<span class="small text-dark">Agent:</span>
		<input type="text" placeholder="<?php echo $pom['agent_p']?>" class="form-control form-control-sm" readonly>
	</div>
		
	<div class="col mt-2">
		<span class="small text-dark">Kontakt telefon 3:</span>
		<input type="text" placeholder="<?php echo $pom['kontakt_tel_3']?>" class="form-control form-control-sm" readonly>
	</div>
</div>

<div class="row text-dark mt-2 ml-1 mr-1 pb-2 border">
	<div class="col mt-2">
		<span class="small text-dark">Grad:</span>
		<input type="text" placeholder="<?php echo $pom['grad_p']?>" class="form-control form-control-sm" readonly>	
		
		<span class="small text-dark">Struktura:</span>
		<input type="text" placeholder="<?php echo $pom['struktura_p']?>" class="form-control form-control-sm" readonly>
		
		</div>
	
	<div class="col mt-2">
		<span class="small text-dark">Op&#353;tina:</span>
		<input type="text" placeholder="<?php echo $pom['opstina_p']?>" class="form-control form-control-sm" readonly>	
	
		<span class="small text-dark">Oprema:</span>
		<input type="text" placeholder="<?php echo $pom['oprema_p']?>" class="form-control form-control-sm" readonly>	
	
		</div>
	
	<div class="col mt-2">
		<span class="small text-dark">Deo grada:</span>
		<input type="text" placeholder="<?php echo $pom['deo_grada_p']?>" class="form-control form-control-sm" readonly>
		
		<span class="small text-dark">Kvadratura od:</span>	    
		<input type="text" placeholder="<?php echo $pom['kvadratura_od']?>" class="form-control form-control-sm" readonly>
		
		</div>
	
	<div class="col mt-2">
		<span class="small text-dark">Ulica:</span>
		<input type="text" placeholder="<?php echo $pom['ulica_p']?>" class="form-control form-control-sm" readonly>
	
		
		<span class="small text-dark">Kvadratura do:</span>	    
		<input type="text" placeholder="<?php echo $pom['kvadratura_do']?>" class="form-control form-control-sm" readonly>
	</div>
	
	<div class="col mt-2">
		<span class="small text-dark">Cena od:</span>
		<input type="text" placeholder="<?php echo $pom['cena_od']?>" class="form-control form-control-sm" readonly>
		
		<span class="small text-dark">Cena do:</span>
		<input type="text" placeholder="<?php echo $pom['cena_do']?>" class="form-control form-control-sm" readonly>
	</div>
</div>

<!--od do   -->
			
		
			<!-- u mesecu od do izbaciti sve potraznje -->
			<!-- prefiksi u potraznji slovna numenklatira  -->
			<!-- pretraga po ceni od do -->
			<!-- crveni i zeleni datumi -->
			<!-- klasifikacija realizacije/odustao, nasao,  -->
			<!-- promena zahteva -->
			<!-- datum realizacije  -->

<div class="row text-dark mt-2 ml-1 mr-1 mb-3 pb-3 border">
	<div class="col mt-2">
		<span class="text-dark"><strong>Vrsta nepokretnosti:</strong></span>
		<input type="text" placeholder="<?php echo $pom['tip_nepokretnosti_p']?>" class="form-control form-control-sm" readonly>
	</div>
	
	<div class="col mt-2">
		<span class="text-dark"><strong>Dodaci:</strong></span>
		<input type="text" placeholder="<?php echo $pom['dodaci_p']?>" class="form-control form-control-sm" readonly>
	</div>
	
	<div class="col mt-2">
		<span class="text-dark"><strong>Tip gara&#382;e:</strong></span>
		<input type="text" placeholder="<?php echo $pom['tip_garaze_p']?>" class="form-control form-control-sm" readonly>	
	</div>
	
	<div class="col mt-2">
		<span class="text-dark"><strong>Provajder</strong></span>
		<input type="text" placeholder="<?php echo $pom['provajder_p']?>" class="form-control form-control-sm" readonly>
	</div>
</div>

<?php }?>
