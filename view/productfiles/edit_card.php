<?php
	if(!isset($_SESSION['user'])){
		session_start();
	
	}
	
	$user=unserialize($_SESSION['user']);
	$msg=isset($msg)?$msg:"";
	$errors =isset($errors)?$errors:array();
	$active =isset($active)?$active:array();
	$hea =isset($hea)?$hea:array();
	$car =isset($car)?$car:array();
	$sec=isset($sec)?$sec:array();
	$gar=isset($gar)?$gar:array();
	$prov=isset($prov)?$prov:array();
	$bath=isset($bath)?$bath:array();
	$ter=isset($ter)?$ter:array();
	$aces=isset($aces)?$aces:array();
	$product_type=isset($product_type)?$product_type:array();
	if ($user){

?>

<form class="form" action="routes.php" method="POST">
	<?php foreach ($product as $pom){?>
	<div class="row text-dark mr-0 ml-0">			
		<div class="col mt-2 mb-3">
			<span class="small">ID:</span>
			<input type="text" name="id_product" value="<?php if (isset($pom['id_products']))echo $pom['id_products']?>" class="form-control form-control-sm"readonly>
			
			<span class="small">ID euro:</span>
			<input type="text" name="id_eurorenta" value="<?php if (isset($pom['id_euro']))echo $pom['id_euro']?>" class="form-control form-control-sm">					
		</div>
		<div class="col mt-2 mb-3">
			<span class="small">Inserted:</span>
			<input type="text" placeholder="<?php if (isset($pom['date_insert']))echo $pom['date_insert']?>" class="form-control form-control-sm" readonly>
			
			<span class="small">Updated:</span>
			<input type="text" placeholder="<?php if (isset($pom['date_update']))echo $pom['date_update']?>" class="form-control form-control-sm" readonly>
		</div>
		<div class="col mt-2 mb-3">
			<span class="small">Activity:</span>
			<div class="col pt-0 pb-2">
				<div class="form-row">
					<span class="mr-2">Active:</span><input class="mt-2 mr-2" type="radio" name="active" value="Active"<?php if (isset($active)=="Active"){echo "checked";}elseif($pom['active']=="Active") echo "checked";?>>
					<span class="mr-2">Passive:</span><input class="mt-2 mr-2" type="radio" name="active" value="Passive"<?php if (isset($active)=="Passive"){echo "checked";}elseif($pom['active']=="Passive") echo "checked";?>>
				</div>
			</div>
					
			<span class="small">date:</span>
			<input type="text" name="active_data" maxlength="11" value="<?php if (isset($active_data)){echo $active_data;}elseif (isset($pom['active_data']))echo $pom['active_data']?>" class="form-control form-control-sm">	
		</div>				
	</div>
	
	<div class="row bg-white border text-dark ml-0 mr-0 mb-2">
		<div class="col">
			<div class="form-row pt-2 pb-2">
				<strong class="mr-3">Product type:</strong>
				<?php if (isset($product_type)){?>
				<?php $product_type=explode(', ', $product_type);}else {?> 
				<?php $chek=explode(', ', $pom['product_type']);}?> 
				<?php  foreach ($listatipova as $ln){?>
				<div class="custom-control text-dark custom-checkbox pl-0 pt-1 mr-2 small">
					<?php echo $ln['ime_tipa_nekretnine']?>
					<input type="checkbox"  name="product_type[]" <?php if(in_array($ln['ime_tipa_nekretnine'],$product_type)){echo"checked";}elseif (in_array($ln['ime_tipa_nekretnine'],$chek)) echo'checked';?> value="<?php echo $ln['ime_tipa_nekretnine']?>" >
				</div>
				<?php }?>
				<span class="msg text-danger"><?php if(array_key_exists('product_type', $errors)) echo $errors['product_type']?></span>
			</div>
		</div>
	</div>
	
	<div class="row bg-white border text-dark ml-0 mr-0 mb-2">
		<!-- grube karakteristike -->
		<div class="col mt-2 mb-3">					
			<span class="small">Structure:</span><span class="msg text-danger"><?php if(array_key_exists('structure', $errors)) echo $errors['structure']?></span>
			<select class="custom-select custom-select-sm" name="structure">
				<option value="<?php if (isset($structure)){echo $structure;}else echo $pom['structure']?>"><?php if (isset($structure)){echo $structure;}else echo $pom['structure']?></option>
				<?php foreach ($listastrukture as $st){?>
				<option value="<?php echo $st['ime_strukture_nekretnine'];?>"><?php echo $st['ime_strukture_nekretnine'];?></option>
				<?php }?>
			</select>
					
			<span class="small">Square:</span><span class="msg text-danger"><?php if(array_key_exists('square', $errors)) echo $errors['square']?></span>
			<div class="input-group">				    
				<input type="text" name="square" maxlength="5" value="<?php if (isset($square)){echo $square;}elseif (isset($pom['square']))echo $pom['square']?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
					
			<span class="small">Surface area:</span><span class="msg text-danger"><?php if(array_key_exists('surface_area', $errors)) echo $errors['surface_area']?></span>
			<div class="input-group">				    
				<input type="text" name="surface_area" maxlength="5" value="<?php if (isset($surface_area)){echo $surface_area;}elseif (isset($pom['surface_area']))echo $pom['surface_area']?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
					
			<span class="small">object:</span>
			<input type="text" name="object" value="<?php if (isset($object)){echo $object;}elseif (isset($pom['object']))echo $pom['object']?>" class="form-control form-control-sm">
			
			<span class="small">Flors:</span><span class="msg text-danger"><?php if(array_key_exists('flors', $errors)) echo $errors['flors']?></span><span class="msg text-danger"><?php if(array_key_exists('florsnost', $errors)) echo $errors['florsnost']?></span>
			<div class="row">
				<div class="col">
					<input type="text" name="flors" maxlength="3" value="<?php if (isset($flors)){echo $flors;}elseif (isset($pom['flors']))echo $pom['flors']?>" class="form-control form-control-sm">
				</div>
				<div class="pt-1 text-dark"> od </div><span class="msg text-danger"><?php if(array_key_exists('of_flors', $errors)) echo $errors['of_flors']?></span>
				<div class="col">
					<input type="text" name="of_flors" maxlength="3" value="<?php if (isset($of_flors)){echo $of_flors;}elseif (isset($pom['of_flors']))echo $pom['of_flors']?>" class="form-control form-control-sm">
				</div>
			</div>
			
		</div>
				
		<div class="col mt-2 mb-3">
							
			<span class="small">City:</span><span class="msg text-danger"><?php if(array_key_exists('location_data_1', $errors)) echo $errors['location_data_1']?></span>
			<select class="custom-select custom-select-sm" name="location_data_1">
				<option value="<?php if (isset($location_data_1)){echo $location_data_1;}else echo $pom['location_data_1']?>"><?php if (isset($location_data_1)){echo $location_data_1;}else echo $pom['location_data_1']?></option>
				<?php foreach ($listalocation_data_1ova as $gr){?>
				<option value="<?php echo $gr['ime_location_data_1a'];?>"><?php echo $gr['ime_location_data_1a'];?></option>
				<?php }?>
			</select>
			<span class="small">district:</span><span class="msg text-danger"><?php if(array_key_exists('location_data_2', $errors)) echo $errors['location_data_2']?></span>
			<select class="custom-select custom-select-sm" name="location_data_2">
				<option value="<?php if (isset($location_data_2)){echo $location_data_2;}else echo $pom['location_data_2']?>"><?php if (isset($location_data_2)){echo $location_data_2;}else echo $pom['location_data_2']?></option>
				<?php foreach ($listalocation_data_2 as $op){?>
				<option value="<?php echo $op['ime_opstine'];?>"><?php echo $op['ime_opstine'];?></option>
				<?php }?>
			</select>
			<span class="small">Location:</span><span class="msg text-danger"><?php if(array_key_exists('location_data_3', $errors)) echo $errors['location_data_3']?></span>
			<select class="custom-select custom-select-sm" name="location_data_3">
				<option value="<?php if (isset($location_data_3)){echo $location_data_3;}else echo $pom['location_data_3']?>"><?php if (isset($location_data_3)){echo $location_data_3;}else echo $pom['location_data_3']?></option>
				<?php foreach ($listadelova as $location_data_3){?>
				<option value="<?php echo $location_data_3['ime_dela_location_data_1a'];?>"><?php echo $location_data_3['ime_dela_location_data_1a'];?></option>
				<?php }?>
			</select>
				<span class="small">Street:</span><span class="msg text-danger"><?php if(array_key_exists('addres_location', $errors)) echo $errors['addres_location']?></span>
			<input type="text" name="addres_location" value="<?php if(isset($addres_location))echo $addres_location;elseif (isset($pom['addres_location']))echo $pom['addres_location'];?>" class="form-control form-control-sm">	
			<div class="row">						
				<div class="col">
					<span class="small">Br. objekta:</span><span class="msg text-danger"><?php if(array_key_exists('adres_num', $errors)) echo $errors['adres_num']?></span>
					<input type="text" name="adres_num" maxlength="5" value="<?php if (isset($adres_num)){echo $adres_num;}elseif (isset($pom['adres_num']))echo $pom['adres_num']?>" class="form-control form-control-sm">
				</div>					
				<div class="col">
					<span class="small">Number:</span><span class="msg text-danger"><?php if(array_key_exists('number', $errors)) echo $errors['number']?></span>
					<input type="text" name="number" maxlength="5" value="<?php if (isset($broj_stana)){echo $broj_stana;}elseif (isset($pom['broj_stana']))echo $pom['broj_stana']?>" class="form-control form-control-sm">
				</div>
			</div>
		</div>
				
		<div class="col mt-2 mb-3">

			<span class="small">Number of elevatorova:</span><span class="msg text-danger"><?php if(array_key_exists('num_elevator', $errors)) echo $errors['num_elevator']?></span>
			<input type="text" name="num_elevator" maxlength="3" value="<?php if (isset($num_elevator)){echo $num_elevator;}elseif (isset($pom['num_elevator']))echo $pom['num_elevator']?>" class="form-control form-control-sm">
					
			<span class="small">Equipment:</span>
			<select class="custom-select custom-select-sm" name="equipment">
				<option value="<?php if (isset($equipment)){echo $equipment;}else echo $pom['equipment']?>"><?php if (isset($equipment)){echo $equipment;}else echo $pom['equipment']?></option>
				<?php foreach ($listaopreme as $o){?>
				<option value="<?php echo $o['ime_opreme'];?>"><?php echo $o['ime_opreme'];?></option>
				<?php  } ?>
			</select>
					
			<span class="small text-dark">Number of aircondison:</span><span class="msg text-danger"><?php if(array_key_exists('num_air_con', $errors)) echo $errors['num_air_con']?></span>
			<input type="text" name="num_air_con" maxlength="3" value="<?php if (isset($num_air_con)){echo $num_air_con;}elseif (isset($pom['num_air_con']))echo $pom['num_air_con']?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Parking places:</span><span class="msg text-danger"><?php if(array_key_exists('num_garage', $errors)) echo $errors['num_garage']?></span>
			<input type="text" name="num_garage" maxlength="3" value="<?php if (isset($num_garage)){echo $num_garage;}elseif (isset($pom['num_garage']))echo $pom['num_garage']?>" class="form-control form-control-sm">

			<span class="small">Kitchen:</span>
			<select class="custom-select custom-select-sm" name="kitchen">
				<option value="<?php if (isset($kitchen)){echo $kitchen;}else echo $pom['kitchen']?>"><?php if (isset($kitchen)){echo $kitchen;}else echo $pom['kitchen']?></option>
				<?php foreach ($listakitchen as $likuh){?>	
				<option value="<?php echo $likuh['ime_kuhinje']?>"><?php echo $likuh['ime_kuhinje']?></option>
				<?php }?>
			</select>
		</div>
				
		<div class="col mt-2 mb-3">					
			<span class="small">Year of construction:</span><span class="msg text-danger"><?php if(array_key_exists('construc_year', $errors)) echo $errors['construc_year']?></span>
			<input type="text" name="construc_year" maxlength="4" value="<?php if (isset($construc_year)){echo $construc_year;}elseif (isset($pom['construc_year']))echo $pom['construc_year']?>" class="form-control form-control-sm">
			
			<span class="small">Level:</span><span class="msg text-danger"><?php if(array_key_exists('level', $errors)) echo $errors['level']?></span>
			<input type="text" name="level" maxlength="3" value="<?php if (isset($level)){echo $level;}elseif (isset($pom['level']))echo $pom['level']?>" class="form-control form-control-sm">
			
			<span class="small">m2 salon:</span><span class="msg text-danger"><?php if(array_key_exists('salon_m', $errors)) echo $errors['salon_m']?></span>
			<div class="input-group">				    
				<input type="text" name="salon_m" maxlength="3" value="<?php if (isset($salon_m)){echo $salon_m;}elseif (isset($pom['salon_m']))echo $pom['salon_m']?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
			
			<span class="small">Cell height:</span><span class="msg text-danger"><?php if(array_key_exists('celing_height', $errors)) echo $errors['celing_height']?></span>
			<div class="input-group">				    
				<input type="text" name="celing_height" maxlength="5" value="<?php if (isset($celing_height)){echo $celing_height;}elseif (isset($pom['celing_height']))echo $pom['celing_height']?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
		
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small text-dark">Number of rooms:</span><span class="msg text-danger"><?php if(array_key_exists('num_rooms', $errors)) echo $errors['num_rooms']?></span>
			<input type="text" name="num_rooms" maxlength="3" value="<?php if (isset($num_rooms)){echo $num_rooms;}elseif (isset($pom['num_rooms']))echo $pom['num_rooms']?>" class="form-control form-control-sm">
							
			<span class="small">Number of bathrooms:</span><span class="msg text-danger"><?php if(array_key_exists('num_bathrooms', $errors)) echo $errors['num_bathrooms']?></span>
			<input type="text" name="num_bathrooms" maxlength="3" value="<?php if (isset($num_bathrooms)){echo $num_bathrooms;}elseif (isset($pom['num_bathrooms']))echo $pom['num_bathrooms']?>" class="form-control form-control-sm">
			
			<span class="small">Number of toailetes:</span><span class="msg text-danger"><?php if(array_key_exists('num_wc', $errors)) echo $errors['num_wc']?></span>
			<input type="text" name="num_wc" maxlength="3" value="<?php if (isset($num_wc)){echo $num_wc;}elseif (isset($pom['num_wc']))echo $pom['num_wc']?>" class="form-control form-control-sm">
		
			<span class="small">Number of terraces:</span><span class="msg text-danger"><?php if(array_key_exists('num_terrace', $errors)) echo $errors['num_terrace']?></span>
			<input type="text" name="num_terrace" maxlength="3" value="<?php if (isset($num_terrace)){echo $num_terrace;}elseif (isset($pom['num_terrace']))echo $pom['num_terrace']?>" class="form-control form-control-sm">			
		</div>
		
		<div class="col mt-2 mb-3">					
			<span class="small">Maintenance:</span><span class="msg text-danger"><?php if(array_key_exists('maintenance', $errors)) echo $errors['maintenance']?></span>
			<input type="text" name="maintenance" maxlength="11" value="<?php if (isset($maintenance)){echo $maintenance;}elseif (isset($pom['maintenance']))echo $pom['maintenance']?>" class="form-control form-control-sm">
			
			<span class="small">electricity:</span><span class="msg text-danger"><?php if(array_key_exists('electricity', $errors)) echo $errors['electricity']?></span>
			<input type="text" name="electricity" maxlength="11" value="<?php if (isset($electricity)){echo $electricity;}elseif (isset($pom['electricity']))echo $pom['electricity']?>" class="form-control form-control-sm">
			
			<span class="small">Info:</span><span class="msg text-danger"><?php if(array_key_exists('info', $errors)) echo $errors['info']?></span>
			<input type="text" name="info" maxlength="11" value="<?php if (isset($info)){echo $info;}elseif (isset($pom['info']))echo $pom['info']?>" class="form-control form-control-sm">
		
			<span class="small">Network:</span><span class="msg text-danger"><?php if(array_key_exists('network', $errors)) echo $errors['network']?></span>
			<input type="text" name="network" maxlength="11" value="<?php if (isset($network)){echo $network;}elseif (isset($pom['network']))echo $pom['network']?>" class="form-control form-control-sm">
		</div>
	</div>
	
	<div class="row bg-white border text-dark ml-0 mr-0 mb-2">	
		<div class="col pt-2 pb-2">		
			<span><strong>Bathroom:</strong></span>
			<div class="form">
				<?php if (isset($vrsta_num_bathrooms)){?>
				<?php $num_bathrooms=explode(', ', $vrsta_num_bathrooms);}else{?> 
				<?php $chekkup=explode(', ', $pom['vrsta_num_bathrooms']);}?> 
				<?php foreach ($listanum_bathrooms as $lk){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="type_bath[]" <?php if(in_array($lk['ime_num_bathrooms'],$num_bathrooms)){echo"checked";}elseif(in_array($lk['ime_num_bathrooms'],$chekkup)) echo"checked"?> value="<?php echo $lk['ime_num_bathrooms']?>">
					<?php echo $lk['ime_num_bathrooms']?>
				</div>
		 	<?php }?>
			</div>									
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Terrace:</strong></span>
			<div class="form">
				<?php if (isset($vrsta_terasa)){?>
				<?php $ter=explode(', ', $vrsta_terasa);}else{?> 
				<?php $chekter=explode(', ', $pom['vrsta_terasa']);}?> 
				<?php foreach ($lisaterasa as $lt){?>	
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="type_terrace[]" <?php if(in_array($lt['ime_terase'],$ter)){echo"checked";}elseif(in_array($lt['ime_terase'],$chekter)) echo"checked"?> value="<?php echo $lt['ime_terase']?>">
					<?php echo $lt['ime_terase']?>
				</div>
		 		<?php }?>
			</div>	
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Carpentry:</strong></span>
			<div class="form">
				<?php if (isset($cararija)){?>
				<?php $car=explode(', ', $cararija);}else{?> 
				<?php $chekstol=explode(', ', $pom['stolarija']);}?> 
				<?php  foreach ($listastolarije as $ls){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="carpentry[]" <?php if(in_array($ls['ime_stolarije'],$car)){echo"checked";}elseif(in_array($ls['ime_stolarije'],$chekstol)) echo"checked"?> value="<?php echo $ls['ime_stolarije']?>" >
					<?php echo $ls['ime_stolarije']?>
				</div>
		 		<?php }?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Provider:</strong></span>
			<div class="form">
				<?php if (isset($provajder)){?>
				<?php $pro=explode(', ', $provajder);}else{?> 
				<?php $chekpro=explode(', ', $pom['provajder']);}?> 
				<?php foreach ($listaprovajdera as $lp){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="provider[]" <?php if(in_array($lp['ime_provajdera'],$pro)){echo"checked";}elseif(in_array($lp['ime_provajdera'],$chekpro)) echo"checked"?> value="<?php echo $lp['ime_provajdera']?>">
					<?php echo $lp['ime_provajdera']?>
				</div>
		 		<?php }?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Garage type:</strong></span>
			<div class="form">
				<?php if (isset($garza)){?>
				<?php $gar=explode(', ', $garza);}else{?> 
				<?php $chekgar=explode(', ', $pom['garaza']);}?>
				<?php foreach ($listagaraza as $lg){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="garage[]" <?php if(in_array($lg['ime_garaze'],$gar)){echo"checked";}elseif(in_array($lg['ime_garaze'],$chekgar)) echo"checked"?> value="<?php echo $lg['ime_garaze']?>">
					<?php echo $lg['ime_garaze']?>
				</div>
		 		<?php }?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Accessories:</strong></span>
			<div class="form">
				<?php if (isset($acesci)){?>
				<?php $aces=explode(', ', $acesci);}else{?> 
				<?php $chekdod=explode(', ', $pom['dodaci']);}?>
				<?php foreach ($listadodataka as $lido){?>	
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="accessories[]" <?php if(in_array($lido['ime_dodatka'],$aces)){echo"checked";}elseif(in_array($lido['ime_dodatka'],$chekdod)) echo"checked"?> value="<?php echo $lido['ime_dodatka']?>">
					<?php echo $lido['ime_dodatka']?>
				</div>
		 		<?php }?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Security:</strong></span>
			<div class="form">
				<?php $chekobe=explode(', ', $pom['obezbedjenje']);?>
				<?php foreach ($listaobezbedjenja as $lo){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="secutyty[]" <?php if(in_array($lo['ime_obezbedjenja'],$chekobe)) echo"checked"?> value="<?php echo $lo['ime_obezbedjenja'];?>">
					<?php echo $lo['ime_obezbedjenja'];?>
				</div>
		 		<?php }?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Heating:</strong></span>
			<div class="form">
				<?php $chekgre=explode(', ', $pom['grejanje']);?>
				<?php foreach ($listagrejanja as $g){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="heating[]" <?php if(in_array($g['ime_grejanja'],$chekgre)) echo"checked"?> value="<?php echo $g['ime_grejanja'];?>">
					<?php echo $g['ime_grejanja'];?>
				</div>
		 		<?php }?>
			</div>
		</div>
	</div>
	
	<div class="row bg-white border text-dark ml-0 mr-0 mb-2">
		<div class="col pt-2 pb-2">
			<span class="small">price:</span><span class="msg text-danger"><?php if(array_key_exists('price', $errors)) echo $errors['price']?></span>
			<div class="input-group">				    
				<input type="text" name="price" value="<?php if (isset($price)){echo $price;}elseif (isset($pom['price']))echo $pom['price']?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">$</div>
			</div>
			
			<span class="small">Min price:</span><span class="msg text-danger"><?php if(array_key_exists('min_price', $errors)) echo $errors['min_price']?></span>
			<div class="input-group">				    
				<input type="text" name="min_price" value="<?php if (isset($min_price)){echo $min_price;}elseif (isset($pom['min_price']))echo $pom['min_price']?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">$</div>
			</div>
				
			<span class="small">Deposit:</span><span class="msg text-danger"><?php if(array_key_exists('deposit', $errors)) echo $errors['deposit']?></span>
			<div class="input-group">				    
				<input type="text" name="deposit" value="<?php if (isset($deposit)){echo $deposit;}elseif (isset($pom['deposit']))echo $pom['deposit']?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">$</div>
			</div>
			
			<span class="small">Commission:</span><span class="msg text-danger"><?php if(array_key_exists('commission', $errors)) echo $errors['commission']?></span>
			<div class="input-group">				    
				<input type="text" name="commission" value="<?php if (isset($commission)){echo $commission;}elseif (isset($pom['commission']))echo $pom['commission']?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">%</div>
			</div>
			
			<span class="small">Payment:</span>
			<select class="custom-select custom-select-sm" name="payment">
				<option value="<?php if (isset($payment)){echo $payment;}else echo $pom['payment']?>"><?php echo $pom['payment']?></option>
				<option value="monthly">monthly</option>
				<option value="3 m">3 m</option>
				<option value="6 m">6 m</option>
				<option value="9 m">9 m</option>
				<option value="12 m">12 m</option>
				<option value="agreemnt">agreement</option>
			</select>
		</div>
		
		<div class="col-8 pt-2 pb-2">
			<span class="small">Note:</span>
			<input type="text" name="note" maxlength="30" value="<?php if (isset($note)){echo $note;}elseif (isset($pom['note']))echo $pom['note']?>" class="form-control form-control-sm">
			
			<div class="form-group mb-0">
    			<span class="small">Description:</span>
    			<textarea name="description" maxlength="255" class="form-control form-control-sm" rows="8"><?php if (isset($description)){echo $description;}else echo $pom['description']?></textarea>
  			</div>
  			
  			<div class="row justify-content-around">
  				
  				<div class="col-4">
  					<button class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" name="page" value="confirm_edit_product"><strong>Confirm</strong></button>
  				</div>  				 
  			</div>
		</div>
	</div>	
	<?php }?>
</form>


<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>