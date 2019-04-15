
<?php

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
	$id_owner=isset($id_owner)?$id_owner:"";
    $listlocation1=isset($listlocation1)?$listlocation1:array();
    $listlocation2=isset($listlocation2)?$listlocation2:array();
    $listlocation3=isset($listlocation3)?$listlocation3:array();
    $typeslist=isset($typeslist)?$typeslist:array();
    $strlist=isset($strlist)?$strlist:array();
    $equilist=isset($equilist)?$equilist:array();
    $listakitchen=isset($listakitchen)?$listakitchen:array();

?>
<form class="form" action="new_product" method="POST">
	<span class="text-dark"><strong>Basic data:</strong></span>
	<div class="row bg-light text-danger border border-primary mt-2 mb-1">
		<div class="col-1 m-3">
			<input type="hidden" name="id_owner" value="<?php if (isset($id_owner)) echo $id_owner; ?>" >	
			<input type="hidden" name="business_status" value="renting" >
			<span class="small text-dark">ID:</span>
			<input type="text" name="id" value="" class="form-control form-control-sm" placeholder="#">
			<span class="small text-dark">ID euro:</span><span class="msg"><?php if(array_key_exists('postojeci_id', $errors)) echo $errors['postojeci_id']?></span>
			<input type="text" name="id_euro" maxlength="11" value="<?php if (isset($id_euro)) echo $id_euro?>" class="form-control form-control-sm">
		</div>	
		<div class="col-2 mt-3 ml-3 mb-3">
			<span class="small text-dark">City:</span>
			<select class="custom-select custom-select-sm" name="location_data_1">
				<option value="<?php if (isset($location_data_1)) echo $location_data_1?>"><?php if (isset($location_data_1)) echo $location_data_1?></option>
				<?php foreach ($listlocation1 as $gr){?>
				<option value="<?php echo $gr['name_location_1'];?>"><?php echo $gr['name_location_1'];?></option>
				<?php }?>
			</select>
			<span class="msg"><?php if(array_key_exists('location_data_1', $errors)) echo $errors['location_data_1']?></span>
		</div>
		<div class="col-2 mt-3 mb-3">
			<span class="small text-dark">District:</span>
			<select class="custom-select custom-select-sm" name="location_data_2">
				<option value="<?php if (isset($location_data_2)) echo $location_data_2?>"><?php if (isset($location_data_2)) echo $location_data_2?></option>
				<?php foreach ($listlocation2 as $op){?>
				<option value="<?php echo $op['name_location_2'];?>"><?php echo $op['name_location_2'];?></option>
				<?php }?>
			</select>
			<span class="msg"><?php if(array_key_exists('location_data_2', $errors)) echo $errors['location_data_2']?></span>
		</div>
		<div class="col-2 mt-3 mb-3">
			<span class="small text-dark">Location:</span>
			<select class="custom-select custom-select-sm" name="location_data_3">
				<option value="<?php if (isset($location_data_3)) echo $location_data_3?>"><?php if (isset($location_data_3)) echo $location_data_3?></option>
				<?php foreach ($listlocation3 as $loda){?>
				<option value="<?php echo $loda['name_location_3'];?>"><?php echo $loda['name_location_3'];?></option>
				<?php }?>
			</select>
			<span class="msg"><?php if(array_key_exists('location_data_3', $errors)) echo $errors['location_data_3']?></span>
			</div>
		<div class="col-2 mt-3 mb-3">
			<span class="small text-dark">Street:</span>
			<input type="text" name="addres_location" maxlength="130" value="<?php if (isset($addres_location)) echo $addres_location;?>" class="form-control form-control-sm">	
			<span class="msg"><?php if(array_key_exists('addres_location', $errors)) echo $errors['addres_location']?></span>
		</div>
		<div class="col-2 mt-3 mb-3">
			<span class="small text-dark">Number:</span><span class="msg"><?php if(array_key_exists('adres_num', $errors)) echo $errors['adres_num']?></span>
			<div class="input-group">	
			<input type="text" name="adres_num" maxlength="5" value="<?php if (isset($adres_num)) echo $adres_num?>" class="form-control form-control-sm">
			<div class="input-group-addon text-dark pl-2 pr-2 pt-1 pb-1">/</div><span class="msg"><?php if(array_key_exists('number', $errors)) echo $errors['number']?></span>
			<input type="text" name="number" maxlength="5" value="<?php if (isset($number)) echo $number?>" class="form-control form-control-sm">
			</div>
		</div>

		<div class="col-3 text-danger pt-1 pb-2">
		<span class="text-dark"><strong>Product type:</strong></span>
			<div class="form-row mt-1">
				<?php foreach ($typeslist as $pom){?>
				<div class="custom-control text-dark custom-checkbox">
				<?php echo $pom['name_pro_type']?>
				<input type="checkbox"  name="product_type[]" <?php if (in_array($pom['name_pro_type'],$product_type)) echo"checked";?> value="<?php echo $pom['name_pro_type']?>">
				</div>
		 		<?php }?>
			</div>
			<span class="msg"><?php if(array_key_exists('product_type', $errors)) echo $errors['product_type']?></span>
		</div>
		<div class="col-2 pt-1 pb-2">
			<span class="small text-dark">Strusture:</span>
			<select class="custom-select custom-select-sm" name="structure">
				<option value="<?php if (isset($structure)) echo $structure;?>"><?php if (isset($structure)) echo $structure;?></option>
				<?php foreach ($strlist as $st){?>
				<option value="<?php echo $st['name_structure'];?>"><?php echo $st['name_structure'];?></option>
				<?php }?>
			</select>
			<span class="msg"><?php if(array_key_exists('structure', $errors)) echo $errors['structure']?></span>
		</div>
		<div class="col-2 pt-1 pb-2">
			<span class="small text-dark">Square:</span>			
			<div class="input-group">				    
				<input type="text" name="square" maxlength="5" value="<?php if (isset($square)) echo $square;?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
			<span class="msg"><?php if(array_key_exists('square', $errors)) echo $errors['square']?></span>
		</div>
		<div class="col-2 pt-1 pb-2">
			<span class="small text-dark">Price:</span>
			<input type="text" name="price" maxlength="11" value="<?php if (isset($price)) echo $price;?>" class="form-control form-control-sm">
			<span class="msg"><?php if(array_key_exists('price', $errors)) echo $errors['price']?></span>
		</div>
		<div class="col-2 pt-1 pb-2">
			<span class="small text-dark">Deposit:</span><span class="msg"><?php if(array_key_exists('deposit', $errors)) echo $errors['deposit']?></span>
			<input type="text" name="deposit" maxlength="10" value="<?php if (isset($deposit))echo $deposit;?>" class="form-control form-control-sm">
		</div>
	</div>
			<span class="text-dark "><strong>Other information:</strong></span>	
	<div class="row bg-light border border-primary mt-2 mb-1">
		<div class="col text-danger m-2 pt-2 pb-2">
			<span class="small text-dark">Min price:</span><span class="msg"><?php if(array_key_exists('min_price', $errors)) echo $errors['min_price']?></span>
			<input type="text" name="min_price" maxlength="11" value="<?php if (isset($min_price)) echo $min_price;?>" class="form-control form-control-sm">
			<span class="small text-dark">Commision:</span><span class="msg"><?php if(array_key_exists('commision', $errors)) echo $errors['commision']?></span>
			<div class="input-group">	
			<input type="text" name="commision" maxlength="11" value="<?php if (isset($commision)) echo $commision;?>" class="form-control form-control-sm">
			<div class="input-group-addon text-dark pl-2 pr-2 pt-1 pb-1">%</div>
			</div>
			
			
			<span class="small text-dark">Payment:</span>
			<select class="custom-select custom-select-sm" name="payment">
				<option value="<?php if (isset($payment))echo $payment;?>"><?php if (isset($payment))echo $payment;?></option>
				<option value="monthly">monthly</option>
				<option value="3 m">3 m</option>
				<option value="6 m">6 m</option>
				<option value="9 m">9 m</option>
				<option value="12 m">12 m</option>
				<option value="agreement">agreement</option>
			</select>
		</div>
		<!-- gruba struktuta -->
		<div class="col text-danger m-2 pt-2 pb-2">
						<span class="small text-dark">Surface area:</span><span class="msg"><?php if(array_key_exists('surface_area', $errors)) echo $errors['surface_area']?></span>
			<div class="input-group">				    
				<input type="text" name="surface_area" maxlength="5" value="<?php if (isset($surface_area))echo $surface_area;?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-2 pt-1 pb-1">ar</div>
			</div>
			<span class="small text-dark">Object:</span>
			<input type="text" name="object" maxlength="30" value="<?php if (isset($object)){echo $object;}?>" class="form-control form-control-sm">
			<span class="small text-dark">Flors:</span><span class="msg"><?php if(array_key_exists('flors', $errors)) echo $errors['flors']?></span><span class="msg"><?php if(array_key_exists('spratnost', $errors)) echo $errors['spratnost']?></span>
			<div class="row">
				<div class="col">
					<input type="text" name="flors" maxlength="3" value="<?php if (isset($flors)){echo $flors;}?>" class="form-control form-control-sm">
				</div>
				<div class="pt-1 text-dark"> of </div><span class="msg"><?php if(array_key_exists('of_flors', $errors)) echo $errors['of_flors']?></span>
				<div class="col">
					<input type="text" name="of_flors" maxlength="3" value="<?php if (isset($of_flors)){echo $of_flors;}?>" class="form-control form-control-sm">
				</div>
			</div>
			<span class="small text-dark">Num elevator:</span><span class="msg"><?php if(array_key_exists('num_elevator', $errors)) echo $errors['num_elevator']?></span>
			<input type="text" name="lift" maxlength="2" value="<?php if (isset($num_elevator)){echo $num_elevator;}?>" class="form-control form-control-sm">
		</div>

		<div class="col text-danger m-2 pt-2 pb-2">
			<span class="small text-dark">Construct year:</span><span class="msg"><?php if(array_key_exists('construct_year', $errors)) echo $errors['construct_year']?></span>
			<input type="text" name="construct_year" maxlength="4" value="<?php if (isset($construct_year)){echo $construct_year;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Celing height:</span><span class="msg"><?php if(array_key_exists('celing_height', $errors)) echo $errors['celing_height']?></span>
			<div class="input-group">				    
				<input type="text" name="celing_height" maxlength="4" value="<?php if (isset($celing_height)){echo $celing_height;}?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-2 pt-1 pb-1">m</div>
			</div>
			
			<span class="small text-dark">Level:</span><span class="msg"><?php if(array_key_exists('level', $errors)) echo $errors['level']?></span>
			<input type="text" name="level" maxlength="3" value="<?php if (isset($level)){echo $level;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Salon:</span><span class="msg"><?php if(array_key_exists('salon_m_', $errors)) echo $errors['salon_m_']?></span>
			<div class="input-group">				    
				<input type="text" name="salon_m" maxlength="4" value="<?php if (isset($salon_m_m)){echo $salon_m_m;}?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
		</div>
		
		<div class="col text-danger pt-2 pb-2">
			<span class="small text-dark">Number of rooms:</span><span class="msg"><?php if(array_key_exists('num_rooms', $errors)) echo $errors['num_rooms']?></span>
			<input type="text" name="num_rooms" maxlength="3" value="<?php if (isset($num_rooms)){echo $num_rooms;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Number of bathrooms:</span><span class="msg"><?php if(array_key_exists('broj_num_bath', $errors)) echo $errors['broj_num_bath']?></span>
			<input type="text" name="num_bath" maxlength="3" value="<?php if (isset($num_bath)){echo $num_bath;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Number of toilets:</span><span class="msg"><?php if(array_key_exists('num_wc', $errors)) echo $errors['num_wc']?></span>
			<input type="text" name="num_wc" maxlength="3" value="<?php if (isset($num_wc)){echo $num_wc;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Number of terrace:</span><span class="msg"><?php if(array_key_exists('broj_num_terrace', $errors)) echo $errors['broj_num_terrace']?></span>
			<input type="text" name="num_terrace" maxlength="3" value="<?php if (isset($num_terrace)){echo $num_terrace;}?>" class="form-control form-control-sm">
			
			</div>
		
		<div class="col text-white m-2 pt-2 pb-2">
			<span class="small text-dark">Equipment:</span>
			<select class="custom-select custom-select-sm" name="equipment">
				<option value="<?php if (isset($equipment)){echo $equipment;}?>"><?php if (isset($equipment)){echo $equipment;}?></option>
				<?php foreach ($equilist as $o){?>
				<option value="<?php echo $o['name_equipment'];?>"><?php echo $o['name_equipment'];?></option>
				<?php  } ?>
			</select>
			
			<span class="small text-dark">Kitchen:</span>
			<select class="custom-select custom-select-sm" name="kitchen">
				<option value="<?php if (isset($kitchen)){echo $kitchen;}?>"><?php if (isset($kitchen)){echo $kitchen;}?></option>
				<?php foreach ($listakitchen as $likuh){?>	
				<option value="<?php echo $likuh['ime_kuhinje']?>"><?php echo $likuh['ime_kuhinje']?></option>
				<?php }?>
			</select>
			
			<span class="small text-dark">Number of air conditions:</span><span class="msg"><?php if(array_key_exists('broj_num_air_con', $errors)) echo $errors['broj_num_air_con']?></span>
			<input type="text" name="num_air_con" maxlength="3" value="<?php if (isset($broj_num_air_con)){echo $broj_num_air_con;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Number of garages:</span><span class="msg"><?php if(array_key_exists('broj_mesta', $errors)) echo $errors['broj_mesta']?></span>
			<input type="text" name="num_garages" maxlength="3" value="<?php if (isset($broj_mesta)){echo $broj_mesta;}?>" class="form-control form-control-sm">
		
		</div>

		<div class="col text-danger m-2 pt-2 pb-2">
		<span class="small text-dark"><strong>Coasts:</strong></span><br>
		<!-- Troskovi -->
			<span class="small text-dark">Info:</span>
			<input type="text" name="info" maxlength="20" value="<?php if (isset($info)){echo $info;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Electricity:</span>
			<input type="text" name="electricity" maxlength="20" value="<?php if (isset($electricity)){echo $electricity;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Network:</span>
			<input type="text" name="network" maxlength="20" value="<?php if (isset($network)){echo $network;}?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Maintenance:</span>
			<input type="text" name="maintenance" maxlength="20"  value="<?php if (isset($maintenance)){echo $maintenance;}?>" class="form-control form-control-sm">
		</div>
	</div>	
	<!--
	<div class="row bg-light border border-primary mt-2 mb-1">	
  
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Heating: </strong></span>
				<div class="form">
				<?php //foreach ($listagrejanja as $g){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="heating[]" <?php// if (in_array($g['ime_grejanja'],$hae)) echo"checked";?> value="<?php // echo $g['ime_grejanja'];?>"> <?php //echo $g['ime_grejanja'];?>
				</div>
		 		<?php //}?>
				</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Carpentery: </strong></span>
			<div class="form">
				<?php //foreach ($listastolarije as $ls){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="carpentery[]" <?php //if(in_array($ls['ime_stolarije'],$car)) echo"checked";?> value="<?php //echo $ls['ime_stolarije'];?>"> <?php //echo $ls['ime_stolarije'];?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Security: </strong></span>
			<div class="form">
				<?php //foreach ($listaobezbedjenja as $lo){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="security[]" <?php //if(in_array($lo['ime_obezbedjenja'],$sec)) echo"checked";?> value="<?php //echo $lo['ime_obezbedjenja'];?>"> <?php //echo $lo['ime_obezbedjenja'];?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Garage: </strong></span>
			<div class="form">
				<?php //foreach ($listagarage as $lg){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="garage[]" <?php //if(in_array($lg['ime_garaze'],$gar)) echo"checked";?> value="<?php //echo $lg['ime_garaze']?>"> <?php //echo $lg['ime_garaze']?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Provider: </strong></span>
			<div class="form">
				<?php //foreach ($listaprovidera as $lp){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="provider[]" <?php //if(in_array($lp['ime_providera'],$prov)) echo"checked";?> value="<?php //echo $lp['ime_providera']?>"> <?php //echo $lp['ime_providera']?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Bathroom: </strong></span>
			<div class="form">
				<?php //foreach ($listanum_bath as $lk){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="type_bath[]" <?php //if(in_array($lk['ime_num_bath'],$bath)) echo"checked";?> value="<?php //echo $lk['ime_num_bath']?>"> <?php //echo $lk['ime_num_bath']?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Terrace: </strong></span>
			<div class="form">
				<?php //foreach ($lisanum_terrace as $lt){?>	
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="type_terrace[]" <?php //if(in_array($lt['ime_terase'],$ter)) echo"checked";?> value="<?php //echo $lt['ime_terase']?>"> <?php //echo $lt['ime_terase']?>
				</div>
		 		<?php //}?>
			</div>
		</div>

		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Accessories: </strong></span>
			<div class="form">
				<?php //foreach ($listadodataka as $lido){?>	
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="accessories[]" <?php //if(in_array($lido['ime_dodatka'],$aces)) echo"checked";?>value="<?php //echo $lido['ime_dodatka']?>"> <?php //echo $lido['ime_dodatka']?>
				</div>
		 		<?php //}?>
			</div>
		</div>
	</div>
	-->
	<div class="row bg-light border border-primary mt-2 mb-1">
		<div class="col-2 text-dark pt-1 pb-2">
			<div class="row border-bottom pt-4 pb-1">
				<div class="col ">
					<span class="mr-2">Active:</span><input class="mt-1 mr-2" type="radio" name="active" <?php if($active=="Active") echo "checked";?> value="Active" checked>
				</div>
			</div>
			<div class="row border-bottom pt-1 pb-1">
				<div class="col-4">
					<span class="p-0">Passive: </span><input class="mt-1" type="radio" name="active" <?php if($active=="Passive") echo "checked";?> value="Passive">
				</div>
				<div class="col-2 p-0">
					<span class="text-dark">date:</span>
				</div>
				<div class="col p-0">					
					<input type="text" name="active_data" maxlength="11" placeholder="dd-mm-GGGG" value="<?php if (isset($active_data)){echo $active_data;}?>" class="form-control form-control-sm">
				</div>
			</div>
		</div>
		
		<div class="col text-white pt-1 pb-2">
			<span class="small text-dark">Note:</span>
			<textarea name="note" class="form-control form-control-sm" maxlength="30" rows="3"><?php if (isset($note)){echo $note;}?></textarea>
		</div>
		
		<div class="col text-white pt-1 pb-2">
			<span class="small text-dark">Description:</span>
			<textarea name="description" class="form-control form-control-sm" maxlength="200" rows="7"><?php if (isset($description)){echo $description;}?></textarea>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-2">
			<button class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" name="page" value="pause"><strong>Pause</strong></button>
		</div>
		<div class="col-2">
			<button class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" name="page" value="confirm_info"><strong>Confirm</strong></button>
		</div>
	</div>
</form>