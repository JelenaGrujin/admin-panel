<?php
	$msg=isset($msg)?$msg:"";
	$errors =isset($errors)?$errors:array();
?>

<?php foreach ($listapotraznji as $pom){?>
<form class="form" action="routes.php" method="POST">
	<div class="row text-dark mr-0 ml-0">
		<div class="col mt-2">
			<input type="hidden" name="id_potraznje" value="<?php echo $pom['id_potraznje']?>" >
			<span class="small">ID:</span>
			<input type="text" placeholder="<?php echo $pom['id_potraznje']?>" class="form-control form-control-sm" readonly>
			
			<span class="small">Poslate ponude:</span>
			<input type="text" valuer="<?php ?>" class="form-control form-control-sm" >
		</div>
		
		<div class="col mt-2">
			<span class="small">Uba&#269;en:</span>
			<input type="text" placeholder="<?php echo $pom['datum_upisa_p']?>" class="form-control form-control-sm" readonly>
			
			<span class="small">Izmena:</span>
			<input type="text" placeholder="<?php echo $pom['datum_azuriranja_p']?>" class="form-control form-control-sm" readonly>
		</div>
		
		<div class="col mt-2">
			<span class="small">Status potra&#382;nje:</span>
			<select class="custom-select custom-select-sm" name="status_potraznje">
				<option value="<?php echo $pom['status_potraznje']?>"><?php echo $pom['status_potraznje']?></option>
				<option value="ceka se">&#269;eka se</option>
				<option value="ceka se">poslata ponuda</option>
				<option value="ceka se">realizovano</option>
			</select>
			
			<span class="small text-dark">Status kontakta:</span>
			<select class="custom-select custom-select-sm" name="status_kotakta">
				<option value="<?php echo $pom['status_kontakta']?>"><?php echo $pom['status_kontakta']?></option>
				<?php foreach ($listastausakontakta as $lsk){?>
				<option value="<?php echo $lsk['ime_statusa_kontakta']?>"><?php echo $lsk['ime_statusa_kontakta']?></option>
				<?php }?>
			</select>
		</div>
	</div>
	
	<div class="row text-dark mt-2 ml-1 mr-1 pb-2 border">
		<div class="col mt-2">
			<span class="small text-dark">Ime i prezime:</span>
			<input type="text" name="ime_prezime_p" value="<?php if (isset($pom['ime_prezime_potraznje']))echo $pom['ime_prezime_potraznje']?>" class="form-control form-control-sm">
			
			<span class="small text-dark">e-mail:</span><span class="msg text-danger"><?php if(array_key_exists('e_mail_potraznje', $errors)) echo $errors['e_mail_potraznje']?></span>
			<input type="text" name="e_mail_p" value="<?php if (isset($pom['e_mail_potraznje'])) echo $pom['e_mail_potraznje']?>"  class="form-control form-control-sm">
		</div>
		
		<div class="col mt-2">
			<span class="small text-dark">Kontakt telefon:</span><span class="msg text-danger"><?php if(array_key_exists('kontakt_tel', $errors)) echo $errors['kontakt_tel']?></span>
			<input type="text" name="kontakt_telefon_p" value="<?php if (isset($pom['kontakt_tel'])) echo $pom['kontakt_tel']?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Izvor podatka:</span>
			<select class="custom-select custom-select-sm" name="izvor_podatka_p">
				<option value="<?php echo $pom['izvor_podatka_p']?>"><?php echo $pom['izvor_podatka_p']?></option>
				<?php foreach ($lisatizvorapodatka as $lip){?>
				<option value="<?php echo $lip['ime_izvora_podatka'];?>"><?php echo $lip['ime_izvora_podatka'];?></option>
				<?php }?>
			</select>
		</div>
		
		<div class="col mt-2">
			<span class="small text-dark">Kontakt telefon 2:</span><span class="msg text-danger"><?php if(array_key_exists('kontakt_tel_2', $errors)) echo $errors['kontakt_tel_2']?></span>
			<input type="text" name="kontakt_2" value"<?php if (isset($pom['kontakt_tel_2']))echo $pom['kontakt_tel_2']?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Agent:</span>
			<select class="custom-select custom-select-sm" name="agent_p">
				<option value="<?php echo $pom['agent_p']?>"><?php echo $pom['agent_p']?></option>
				<?php foreach ($listaagenata as $liag){?>
				<option value="<?php echo $liag['username_agenta']?>"><?php echo $liag['username_agenta']?></option>
				<?php }?>
			</select>
		</div>
		
		<div class="col mt-2">
			<span class="small text-dark">Kontakt telefon 3:</span><span class="msg text-danger"><?php if(array_key_exists('kontakt_tel_3', $errors)) echo $errors['kontakt_tel_3']?></span>
			<input type="text" name="kontakt_3" value="<?php if (isset($pom['kontakt_tel_3'])) echo $pom['kontakt_tel_3']?>" class="form-control form-control-sm">
		</div>
	</div>
	
	<div class="row text-dark mt-2 ml-1 mr-1 pb-2 border border_color">
		<div class="col mt-2">
			<span class="small text-dark">Grad:</span>
			<select class="custom-select custom-select-sm" name="grad_p">
				<option value="<?php echo $pom['grad_p'];?>"><?php echo $pom['grad_p'];?></option>
				<?php foreach ($listagradova as $gr){?>
				<option value="<?php echo $gr['ime_grada'];?>"><?php echo $gr['ime_grada'];?></option>
				<?php }?>
			</select>
			
			<span class="small text-dark">Op&#353;tina:</span>
			<select class="custom-select custom-select-sm" name="opstina_p">
				<option value="<?php echo $pom['opstina_p']?>"><?php echo $pom['opstina_p']?></option>
				<?php foreach ($listaopstina as $op){?>
				<option value="<?php echo $op['ime_opstine'];?>"><?php echo $op['ime_opstine'];?></option>
				<?php }?>
			</select>
		</div>
		
		<div class="col mt-2">
			<span class="small text-dark">Deo grada:</span>
			<select class="custom-select custom-select-sm" name="deo_p">
				<option value="<?php echo $pom['deo_grada_p']?>"><?php echo $pom['deo_grada_p']?></option>
				<?php foreach ($listadelova as $deo){?>
				<option value="<?php echo $deo['ime_dela_grada'];?>"><?php echo $deo['ime_dela_grada'];?></option>
				<?php }?>
			</select>
			
			<span class="small text-dark">Ulica:</span>
			<input type="text" name="ulica_p" value="<?php if (isset($pom['ulica_p'])) echo $pom['ulica_p']?>" class="form-control form-control-sm">
		</div>
		
		<div class="col mt-2">
			<span class="small text-dark">Struktura:</span>
			<select class="custom-select custom-select-sm" name="struktura_p">
				<option value="<?php echo $pom['struktura_p']?>"><?php echo $pom['struktura_p']?></option>
				<?php foreach ($listastrukture as $st){?>
				<option value="<?php echo $st['ime_strukture_nekretnine'];?>"><?php echo $st['ime_strukture_nekretnine'];?></option>
				<?php }?>
			</select>
			
			<span class="small text-dark">Oprema:</span>
			<select class="custom-select custom-select-sm" name="oprema_p">
				<option value="<?php echo $pom['oprema_p']?>"><?php echo $pom['oprema_p']?></option>
				<?php foreach ($listaopreme as $o){?>
				<option value="<?php echo $o['ime_opreme'];?>"><?php echo $o['ime_opreme'];?></option>
				<?php  } ?>
			</select>
		</div>
		
		<div class="col mt-2">
			<span class="small text-dark">Kvadratura od:</span><span class="msg text-danger"><?php if(array_key_exists('kvadratura_od', $errors)) echo $errors['kvadratura_od']?></span>
			<input type="text" name="kvadratura_od" value="<?php if (isset($pom['kvadratura_od'])) echo $pom['kvadratura_od']?>" class="form-control form-control-sm">
			<span class="msg text-danger"><?php if(array_key_exists('kvadratura', $errors)) echo $errors['kvadratura']?></span>
			<span class="small text-dark">Kvadratura do:</span><span class="msg text-danger"><?php if(array_key_exists('kvadratura_do', $errors)) echo $errors['kvadratura_do']?></span> 
			<input type="text" name="kvadratura_do" value="<?php if (isset($pom['kvadratura_do'])) echo $pom['kvadratura_do']?>" class="form-control form-control-sm">
		</div>
			
			<!-- u mesecu od do izbaciti sve potraznje -->
			<!-- prefiksi u potraznji slovna numenklatira  -->
			
			<!-- pretraga po ceni od do -->
			<!-- crveni i zeleni datumi -->
			<!-- klasifikacija realizacije/odustao, nasao,  -->
			<!-- promena zahteva -->
			<!-- datum realizacije  -->
		
		<div class="col mt-2">			
			<span class="small text-dark">Cena od:</span><span class="msg text-danger"><?php if(array_key_exists('cena_od', $errors)) echo $errors['cena_od']?></span>
			<input type="text" name="cena_od" value="<?php if (isset($pom['cena_od'])) echo $pom['cena_od']?>" class="form-control form-control-sm"> 
			<span class="msg text-danger"><?php if(array_key_exists('cena', $errors)) echo $errors['cena']?></span>
			<span class="small text-dark">Cena do:</span><span class="msg text-danger"><?php if(array_key_exists('cena_do', $errors)) echo $errors['cena_do']?></span>
			<input type="text" name="cena_do" value="<?php if (isset($pom['cena_do'])) echo $pom['cena_do']?>"class="form-control form-control-sm">
		</div>
	</div>
	
	<div class="row text-dark mt-2 ml-1 mr-1 pb-3 border">
		<div class="col mt-2">
			<span class=""><strong>Vrsta nepokretnosti:</strong></span>
			<div class="form">
				<?php $chek=explode(',', $pom['tip_nepokretnosti_p']);?>
				<?php foreach ($listatipova as $ln){?>
				<div class="custom-control text-dark custom-checkbox">
				<?php echo $ln['ime_tipa_nekretnine']?>
				<input type="checkbox"  name="tip_nekretnine_p[]" <?php if(in_array($ln['ime_tipa_nekretnine'],$chek)) echo"checked"?> value="<?php echo $ln['ime_tipa_nekretnine']?>">
				</div>
		 		<?php }?>
			</div>
		</div>
		
		<div class="col mt-2">
			<span class=""><strong>Dodaci:</strong></span>
			<div class="form">
				<?php $chekdod=explode(',', $pom['dodaci_p']);?>
				<?php foreach ($listadodataka as $lido){?>	
				<div class="custom-control text-dark custom-checkbox">
				<?php echo $lido['ime_dodatka']?>
				<input type="checkbox"  name="dodaci_p[]" <?php if(in_array($lido['ime_dodatka'],$chekdod)) echo"checked"?> value="<?php echo $lido['ime_dodatka']?>">
				</div>
		 		<?php }?>
			</div>
		</div>
		
		<div class="col mt-2">
			<span class=""><strong>Tip gara&#382;e:</strong></span>
			<div class="form">
				<?php $chekgar=explode(',', $pom['tip_garaze_p']);?>
				<?php foreach ($listagaraza as $lg){?>
				<div class="custom-control text-dark custom-checkbox">
				<?php echo $lg['ime_garaze']?>
				<input type="checkbox"  name="garaza_p[]" <?php if(in_array($lg['ime_garaze'],$chekgar)) echo"checked"?> value="<?php echo $lg['ime_garaze']?>">
				</div>
		 		<?php }?>
			</div>
		</div>
		
		<div class="col mt-2">
			<span class=""><strong>Provajder:</strong></span>
			<div class="form">
				<?php $chekpro=explode(',', $pom['provajder_p']);?> 
				<?php foreach ($listaprovajdera as $lp){?>
				<div class="custom-control text-dark custom-checkbox">
				<?php echo $lp['ime_provajdera']?>
				<input type="checkbox"  name="provajder_p[]" <?php if(in_array($lp['ime_provajdera'],$chekpro)) echo"checked"?> value="<?php echo $lp['ime_provajdera']?>">
				</div>
		 		<?php }?>
			</div>
		</div>
	</div>
	<div class="row justify-content-around m-0">
		<div class="col-4">
			<button class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" name="page" value="azurirajpotraznju"><strong>Potvrdi</strong></button>
		</div>
	</div>
</form>
<?php }?>
