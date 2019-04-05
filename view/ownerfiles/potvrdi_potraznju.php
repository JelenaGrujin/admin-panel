<?php
	$msg=isset($msg)?$msg:"";
	$errors =isset($errors)?$errors:array();
	$tip_nek_p = isset($tip_nek_p)?$tip_nek_p:array();
	$dod_p = isset($dod_p)?$dod_p:array();
	$gar_p = isset($gar_p)?$gar_p:array();
	$prov_p = isset($prov_p)?$prov_p:array();

?>

<div class="col text-dark">
	<form class="form" action="routes.php" method="POST">
	<div class="row bg-white border-top-0 pb-3">
			<input type="hidden" name="status_potraznje" value="na čekanju" >
			<input type="hidden" name="status_poslovanja_p" value="iznajmljivanje" >
		<div class="mt-2">
			<span class="small text-dark">Ime i prezime:</span>
			<input type="text" name="ime_prezime_p" maxlength="30" size="30" value="<?php if (isset($ime_prezime_potraznje)){echo $ime_prezime_potraznje;}?>" class="form-control form-control-sm">	
		</div>
		<div class="col-2 mt-2">
			<span class="small text-dark">Kontakt telefon:</span><span class="msg text-danger"><?php if(array_key_exists('kontakt_tel', $errors)) echo $errors['kontakt_tel']?></span>
			<input type="text" name="kontakt_telefon_p" maxlength="13" value="<?php if (isset($kontakt_tel)){echo $kontakt_tel;}?>" class="form-control form-control-sm">	
		</div>
		<div class="col-2 mt-2"><span class="msg text-danger"><?php if(array_key_exists('kontakt_tel_2', $errors)) echo $errors['kontakt_tel_2']?></span>
			<span class="small text-dark">Kontakt telefon 2:</span>
			<input type="text" name="kontakt_2" maxlength="13" value="<?php if (isset($kontakt_tel_2)){echo $kontakt_tel_2;}?>" class="form-control form-control-sm">	
		</div>
		<div class="col-2 mt-2">
			<span class="small text-dark">Kontakt telefon 3:</span><span class="msg text-danger"><?php if(array_key_exists('kontakt_tel_3', $errors)) echo $errors['kontakt_tel_3']?></span>
			<input type="text" name="kontakt_3" maxlength="13" value="<?php if (isset($kontakt_tel_3)){echo $kontakt_tel_3;}?>" class="form-control form-control-sm">	
		</div>
		<div class="mt-2 mb-3">
			<span class="small text-dark">e-mail:</span><span class="msg text-danger"><?php if(array_key_exists('e_mail_potraznje', $errors)) echo $errors['e_mail_potraznje']?></span>
			<input type="text" name="e_mail_p" maxlength="50" size="50" value="<?php if (isset($e_mail_potraznje)){echo $e_mail_potraznje;}?>" class="form-control form-control-sm">	
		</div>
	<div class="col-2 mt-2">
		<span class="small text-dark">Status kontakta:</span>
				<select class="custom-select custom-select-sm" name="status_kotakta">
					<option value="<?php if (isset($status_kontakta))echo $status_kontakta;?>"><?php if (isset($status_kontakta))echo $status_kontakta;?></option>
					<?php foreach ($listastausakontakta as $lsk){?>
					<option value="<?php echo $lsk['ime_statusa_kontakta']?>"><?php echo $lsk['ime_statusa_kontakta']?></option>
					<?php }?>
				</select>
		</div>
		<div class="col-2 mt-2">
		<span class="small text-dark">Izvor podatka:</span>
				<select class="custom-select custom-select-sm" name="izvor_podatka_p">
					<option value="<?php if (isset($izvor_podatka_p))echo $izvor_podatka_p;?>"><?php if (isset($izvor_podatka_p))echo $izvor_podatka_p;?></option>
					<?php foreach ($lisatizvorapodatka as $lip){?>
					<option value="<?php echo $lip['ime_izvora_podatka'];?>"><?php echo $lip['ime_izvora_podatka'];?></option>
					<?php }?>
				</select>
		</div>
		<div class="col-2 mt-2">
		<span class="small text-dark">Agent:</span>
				<select class="custom-select custom-select-sm" name="agent_p">
					<?php foreach ($listaagenata as $liag){?>
					<option value="<?php echo $liag['username_agenta']?>"><?php echo $liag['username_agenta']?></option>
					<?php }?>
				</select>
	</div>
	</div>
	<div class="row mt-2 border pb-2">
		<div class="col-2 mt-2">
			<span class="small text-dark">Grad:</span>
			<select class="custom-select custom-select-sm" name="grad_p">
				<option value="<?php if (isset($grad_p))echo $grad_p;?>"><?php if (isset($grad_p))echo $grad_p;?></option>
				<?php foreach ($listagradova as $gr){?>
				<option value="<?php echo $gr['ime_grada'];?>"><?php echo $gr['ime_grada'];?></option>
				<?php }?>
			</select>	
			<span class="small text-dark">Op&#353;tina:</span>
			<select class="custom-select custom-select-sm" name="opstina_p">
				<option value="<?php if (isset($opstina_p))echo $opstina_p;?>"><?php if (isset($opstina_p))echo $opstina_p;?></option>
				<?php foreach ($listaopstina as $op){?>
				<option value="<?php echo $op['ime_opstine'];?>"><?php echo $op['ime_opstine'];?></option>
				<?php }?>
			</select>
			<span class="small text-dark">Deo grada:</span>
			<select class="custom-select custom-select-sm" name="deo_p">
				<option value="<?php if (isset($deo_p))echo $deo_p;?>"><?php if (isset($deo_p))echo $deo_p;?></option>
				<?php foreach ($listadelova as $deo){?>
				<option value="<?php echo $deo['ime_dela_grada'];?>"><?php echo $deo['ime_dela_grada'];?></option>
				<?php }?>
			</select>
			<span class="small text-dark">Ulica:</span>
			<input type="text" name="ulica_p" maxlength="50" value="<?php if (isset($ulica_p)){echo $ulica_p;}?>" class="form-control form-control-sm">	
		</div>
		<div class="col-2">
			<span class="small text-dark">Struktura:</span>
			<select class="custom-select custom-select-sm" name="struktura_p">
				<option value="<?php if (isset($struktura_p))echo $struktura_p;?>"><?php if (isset($struktura_p))echo $struktura_p;?></option>
				<?php foreach ($listastrukture as $st){?>
				<option value="<?php echo $st['ime_strukture_nekretnine'];?>"><?php echo $st['ime_strukture_nekretnine'];?></option>
				<?php }?>
			</select>
			<span class="small text-dark">Kvadratura od:</span><span class="msg text-danger"><?php if(array_key_exists('kvadratura_od', $errors)) echo $errors['kvadratura_od']?></span>
			<input type="text" name="kvadratura_od" maxlength="5" value="<?php if (isset($kvadratura_od)){echo $kvadratura_od;}?>" class="form-control form-control-sm">
			<span class="msg text-danger"><?php if(array_key_exists('kvadratura', $errors)) echo $errors['kvadratura']?></span>
			<span class="small text-dark">Kvadratura do:</span><span class="msg text-danger"><?php if(array_key_exists('kvadratura_do', $errors)) echo $errors['kvadratura_do']?></span> 
			<input type="text" name="kvadratura_do" maxlength="5" value="<?php if (isset($kvadratura_do)){echo $kvadratura_do;}?>" class="form-control form-control-sm">
			<!-- crveni i zeleni datumi -->
			<!-- klasifikacija realizacije/odustao, nasao,  -->
			<!-- datum realizacije  -->
			<span class="small text-dark">Cena od:</span><span class="msg text-danger"><?php if(array_key_exists('cena_od', $errors)) echo $errors['cena_od']?></span>
			<input type="text" name="cena_od" maxlength="10" value="<?php if (isset($cena_od)){echo $cena_od;}?>" class="form-control form-control-sm">
			<span class="msg text-danger"><?php if(array_key_exists('cena', $errors)) echo $errors['cena']?></span>
			<span class="small text-dark">Cena do:</span><span class="msg text-danger"><?php if(array_key_exists('cena_do', $errors)) echo $errors['cena_do']?></span>
			<input type="text" name="cena_do" maxlength="10" value="<?php if (isset($cena_do)){echo $cena_do;}?>" class="form-control form-control-sm">
			<span class="small text-dark">Oprema:</span>
			<select class="custom-select custom-select-sm" name="oprema_p">
				<option value="<?php if (isset($oprema_p))echo $oprema_p;?>"><?php if (isset($oprema_p))echo $oprema_p;?></option>
				<?php foreach ($listaopreme as $o){?>
				<option value="<?php echo $o['ime_opreme'];?>"><?php echo $o['ime_opreme'];?></option>
				<?php  } ?>
			</select>
		</div>
		<div class="col-2 text-dark pt-0 pb-2">
			<span class="text-dark"><strong>Vrsta nepokretnosti:</strong></span>
				<?php foreach ($listatipova as $pom){?>
				<div class="custom-control text-dark custom-checkbox pl-0">
					<input type="checkbox"  name="tip_nekretnine_p[]" <?php if(in_array($pom['ime_tipa_nekretnine'],$tip_nek_p)) echo"checked";?> value="<?php echo $pom['ime_tipa_nekretnine']?>">
					<?php echo $pom['ime_tipa_nekretnine']?>
				</div>
		 		<?php }?>
		</div>
		<div class="col-2 text-white pt-0 pb-2">
			<span class="text-dark"><strong>Dodaci:</strong></span>
				<?php foreach ($listadodataka as $lido){?>	
				<div class="custom-control text-dark custom-checkbox pl-0">
				
					<input type="checkbox"  name="dodaci_p[]" <?php if(in_array($lido['ime_dodatka'],$dod_p)) echo"checked";?> value="<?php echo $lido['ime_dodatka']?>">
					<?php echo $lido['ime_dodatka']?>
				</div>
		 		<?php }?>
		</div>
		<div class="col-2 text-white pt-0 pb-2">
			<span class="text-dark"><strong>Tip gara&zcaron;e:</strong></span>
				<?php foreach ($listagaraza as $lg){?>
				<div class="custom-control text-dark custom-checkbox pl-0">
					
					<input type="checkbox"  name="garaza_p[]" <?php if(in_array($lg['ime_garaze'],$gar_p)) echo"checked";?> value="<?php echo $lg['ime_garaze']?>">
					<?php echo $lg['ime_garaze']?>
				</div>
		 		<?php }?>
		</div>
		<div class="col-2 text-white pt-0 pb-2">
			<span class="text-dark"><strong>Provajder</strong></span>
				<?php foreach ($listaprovajdera as $lp){?>
				<div class="custom-control text-dark custom-checkbox pl-0">
					
					<input type="checkbox"  name="provajder_p[]" <?php if(in_array($lp['ime_provajdera'],$prov_p)) echo"checked";?> value="<?php echo $lp['ime_provajdera']?>">
					<?php echo $lp['ime_provajdera']?>
				</div>
		 		<?php }?>
		</div>	
	</div>
		<div class="row justify-content-center">
		<div class="col-2 mt-3 mb-3">
			<button class="btn btn-primary btn-block pt-1 pb-2" type="submit" name="page" value="potvrdapotraznje"><strong>Potvrdi</strong></button>	
		</div>
		<div class="col-2 mt-3 mb-3">
			<button class="btn btn-primary btn-block pt-1 pb-2" type="submit" name="page" value="pauzirajpotraznju"><strong>Pauziraj</strong></button>	
		</div>
	</div>
	</form>
</div>