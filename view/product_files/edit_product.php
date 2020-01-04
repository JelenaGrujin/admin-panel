<?php
$errors=isset($errors)?$errors:array();
?>

<form class="form" action="update_product" method="POST">
	<?php foreach ($list as $pom){?>
	<div class="row text-dark mr-0 ml-0">			
		<div class="col mt-2 mb-3">
			<span class="small">ID:</span>
			<input type="text" name="id_products" value="<?php if (isset($pom['id_products']))echo $pom['id_products']?>" class="form-control form-control-sm"readonly>
			
			<span class="small">ID euro:</span>
			<input type="text" name="id_euro" value="<?php if (isset($pom['id_euro']))echo $pom['id_euro']?>" class="form-control form-control-sm">
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
			<input type="date" name="active_data" maxlength="11" value="<?php echo isset($active_data)?$active_data:$pom['active_data'];?>" class="form-control form-control-sm">
		</div>				
	</div>
	
	<div class="row bg-white border text-dark ml-0 mr-0 mb-2">
		<div class="col">
			<div class="form-row pt-2 pb-2">
				<strong class="mr-3">Product type:</strong>
				<?php $chek=explode(', ', $pom['product_type']);?>
                <?php foreach ($types_list as $pt){?>
                    <div class="custom-control text-dark custom-checkbox">
                        <?php echo $pt['name_pro_type']?>
                        <input type="checkbox"  name="product_type[]" <?php if (in_array($pt['name_pro_type'],$chek)) echo"checked";?> value="<?php echo $pt['name_pro_type']?>">
                    </div>
                <?php }?>
				<span class="msg text-danger"><?php if(array_key_exists('product_type', $errors)) echo $errors['product_type']?></span>
			</div>
		</div>
	</div>
    <div class="row bg-white border text-dark ml-0 mr-0 mb-2">
		<div class="col mt-2 mb-3">					
			<span class="small">Structure:</span><span class="msg text-danger"><?php if(array_key_exists('structure', $errors)) echo $errors['structure']?></span>
			<select class="custom-select custom-select-sm" name="structure">
				<option value="<?php echo isset($structure)?$structure:$pom['structure'];?>"><?php echo isset($structure)?$structure:$pom['structure'];?></option>
				<?php  foreach ($structure_list as $st){?>
				<option value="<?php echo $st['name_structure'];?>"><?php echo $st['name_structure'];?></option>
				<?php }?>
			</select>

			<span class="small">Square:</span><span class="msg text-danger"><?php if(array_key_exists('square', $errors)) echo $errors['square']?></span>
			<div class="input-group">				    
				<input type="text" name="square" maxlength="5" value="<?php echo isset($square)?$square:$pom['square'];?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
					
			<span class="small">Surface area:</span><span class="msg text-danger"><?php if(array_key_exists('surface_area', $errors)) echo $errors['surface_area']?></span>
			<div class="input-group">				    
				<input type="text" name="surface_area" maxlength="5" value="<?php echo isset($surface_area)?$surface_area:$pom['surface_area'];?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>

			<span class="small">Object:</span>
			<input type="text" name="place" value="<?php echo isset($place)?$place:$pom['place']?>" class="form-control form-control-sm">
			<span class="small">floors:</span><span class="msg text-danger"><?php if(array_key_exists('floors', $errors)) echo $errors['floors']?></span>
			<div class="row">
				<div class="col">
					<input type="text" name="floors" maxlength="3" value="<?php echo isset($floors)?$floors:$pom['floors']?>" class="form-control form-control-sm">
				</div>
				<div class="pt-1 text-dark"> of </div><span class="msg text-danger"><?php if(array_key_exists('of_floors', $errors)) echo $errors['of_floors']?></span>
				<div class="col">
					<input type="text" name="of_floors" maxlength="3" value="<?php echo isset($of_floors)?$of_floors:$pom['of_floors']?>" class="form-control form-control-sm">
				</div>
			</div>
        </div>
		<div class="col mt-2 mb-3">
			<span class="small">City:</span><span class="msg text-danger"><?php if(array_key_exists('location_data_1', $errors)) echo $errors['location_data_1']?></span>
			<select class="custom-select custom-select-sm" name="location_data_1">
				<option value="<?php echo isset($location_data_1)?$location_data_1:$pom['location_data_1']?>"><?php echo isset($location_data_1)?$location_data_1:$pom['location_data_1']?></option>
				<?php  foreach ( $list_location_1 as $gr){?>
				<option value="<?php  echo $gr['name_location_1'];?>"><?php echo $gr['name_location_1'];?></option>
				<?php  }?>
			</select>
			<span class="small">District:</span><span class="msg text-danger"><?php if(array_key_exists('location_data_2', $errors)) echo $errors['location_data_2']?></span>
            <select class="custom-select custom-select-sm" name="location_data_2">
                <option value="<?php echo isset($location_data_2)?$location_data_2:$pom['location_data_2']?>"><?php echo isset($location_data_2)?$location_data_2:$pom['location_data_2']?></option>
                <?php  foreach ( $list_location_2 as $lo){?>
                    <option value="<?php  echo $lo['name_location_2'];?>"><?php echo $lo['name_location_2'];?></option>
                <?php  }?>
            </select>
			<span class="small">Location:</span><span class="msg text-danger"><?php if(array_key_exists('location_data_3', $errors)) echo $errors['location_data_3']?></span>
            <select class="custom-select custom-select-sm" name="location_data_3">
                <option value="<?php echo isset($location_data_3)?$location_data_3:$pom['location_data_3']?>"><?php echo isset($location_data_3)?$location_data_3:$pom['location_data_3']?></option>
                <?php  foreach ( $list_location_3 as $lu){?>
                    <option value="<?php  echo $lu['name_location_3'];?>"><?php echo $lu['name_location_3'];?></option>
                <?php  }?>
            </select>
				<span class="small">Street:</span><span class="msg text-danger"><?php if(array_key_exists('address_location', $errors)) echo $errors['address_location']?></span>
			<input type="text" name="address_location" value="<?php echo isset($address_location)?$address_location:$pom['address_location'];?>" class="form-control form-control-sm">
			<div class="row">						
				<div class="col">
					<span class="small">No:</span><span class="msg text-danger"><?php if(array_key_exists('address_num', $errors)) echo $errors['address_num']?></span>
					<input type="text" name="address_num" maxlength="5" value="<?php echo isset($address_num)?$address_num:$pom['address_num'];?>" class="form-control form-control-sm">
				</div>					
				<div class="col">
					<span class="small">Number:</span><span class="msg text-danger"><?php if(array_key_exists('number', $errors)) echo $errors['number']?></span>
					<input type="text" name="number" maxlength="5" value="<?php echo isset($number)?$number:$pom['number'];?>" class="form-control form-control-sm">
				</div>
			</div>
		</div>
		<div class="col mt-2 mb-3">
			<span class="small">Number of elevatorova:</span><span class="msg text-danger"><?php if(array_key_exists('num_elevator', $errors)) echo $errors['num_elevator']?></span>
			<input type="text" name="num_elevator" maxlength="3" value="<?php echo isset($num_elevator)?$num_elevator:$pom['num_elevator'];?>" class="form-control form-control-sm">
					
			<span class="small">Equipment:</span>
			<select class="custom-select custom-select-sm" name="equipment">
				<option value="<?php echo isset($equipment)?$equipment:$pom['equipment']?>"><?php echo isset($equipment)?$equipment:$pom['equipment']?></option>
				<?php foreach ($equipment_list as $o){?>
				<option value="<?php echo $o['name_equipment'];?>"><?php echo $o['name_equipment'];?></option>
				<?php  } ?>
			</select>
					
			<span class="small text-dark">Number of aircondison:</span><span class="msg text-danger"><?php if(array_key_exists('num_air_con', $errors)) echo $errors['num_air_con']?></span>
			<input type="text" name="num_air_con" maxlength="3" value="<?php echo isset($num_air_con)?$num_air_con:$pom['num_air_con'];?>" class="form-control form-control-sm">
			
			<span class="small text-dark">Parking places:</span><span class="msg text-danger"><?php if(array_key_exists('num_garages', $errors)) echo $errors['num_garages']?></span>
			<input type="text" name="num_garages" maxlength="3" value="<?php echo isset($num_garages)?$num_garages:$pom['num_garages'];?>" class="form-control form-control-sm">
<!--
			<span class="small">Kitchen:</span>
			<select class="custom-select custom-select-sm" name="kitchen">
				<option value="<?php if (isset($kitchen)){echo $kitchen;}else echo $pom['kitchen']?>"><?php if (isset($kitchen)){echo $kitchen;}else echo $pom['kitchen']?></option>
				<?php //foreach ($listakitchen as $likuh){?>
				<option value="<?php //echo $likuh['ime_kuhinje']?>"><?php //echo $likuh['ime_kuhinje']?></option>
				<?php //}?>
			</select>-->
		</div>
				
		<div class="col mt-2 mb-3">					
			<span class="small">Year of construction:</span><span class="msg text-danger"><?php if(array_key_exists('construction_year', $errors)) echo $errors['construction_year']?></span>
			<input type="text" name="construction_year" maxlength="4" value="<?php echo isset($construction_year)?$construction_year:$pom['construction_year'];?>" class="form-control form-control-sm">
			
			<span class="small">Level:</span><span class="msg text-danger"><?php if(array_key_exists('level', $errors)) echo $errors['level']?></span>
			<input type="text" name="level" maxlength="3" value="<?php echo isset($level)?$level:$pom['level']?>" class="form-control form-control-sm">
			
			<span class="small">m2 salon:</span><span class="msg text-danger"><?php if(array_key_exists('salon_m', $errors)) echo $errors['salon_m']?></span>
			<div class="input-group">				    
				<input type="text" name="salon_m" maxlength="3" value="<?php echo isset($salon_m)?$salon_m:$pom['salon_m'];?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
			
			<span class="small">Cell height:</span><span class="msg text-danger"><?php if(array_key_exists('celing_height', $errors)) echo $errors['celing_height']?></span>
			<div class="input-group">				    
				<input type="text" name="ceiling_height" maxlength="5" value="<?php echo isset($ceiling_height)?$ceiling_height:$pom['ceiling_height'];?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
			</div>
		
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small text-dark">Number of rooms:</span><span class="msg text-danger"><?php if(array_key_exists('num_rooms', $errors)) echo $errors['num_rooms']?></span>
			<input type="text" name="num_rooms" maxlength="3" value="<?php echo isset($num_rooms)?$num_rooms:$pom['num_rooms'];?>" class="form-control form-control-sm">
							
			<span class="small">Number of bathrooms:</span><span class="msg text-danger"><?php if(array_key_exists('num_bath', $errors)) echo $errors['num_bathrooms']?></span>
			<input type="text" name="num_bath" maxlength="3" value="<?php echo isset($num_bath)?$num_bath:$pom['num_bath'];?>" class="form-control form-control-sm">
			
			<span class="small">Number of toailetes:</span><span class="msg text-danger"><?php if(array_key_exists('num_wc', $errors)) echo $errors['num_wc']?></span>
			<input type="text" name="num_wc" maxlength="3" value="<?php echo isset($num_wc)?$num_wc:$pom['num_wc'];?>" class="form-control form-control-sm">
		
			<span class="small">Number of terraces:</span><span class="msg text-danger"><?php if(array_key_exists('num_terrace', $errors)) echo $errors['num_terrace']?></span>
			<input type="text" name="num_terrace" maxlength="3" value="<?php echo isset($num_terrace)?$num_terrace:$pom['num_terrace'];?>" class="form-control form-control-sm">
		</div>
		
		<div class="col mt-2 mb-3">					
			<span class="small">Maintenance:</span><span class="msg text-danger"><?php if(array_key_exists('maintenance', $errors)) echo $errors['maintenance']?></span>
			<input type="text" name="maintenance" maxlength="11" value="<?php echo isset($maintenance)?$maintenance:$pom['maintenance'];?>" class="form-control form-control-sm">
			
			<span class="small">elect:</span><span class="msg text-danger"><?php if(array_key_exists('elect', $errors)) echo $errors['elect']?></span>
			<input type="text" name="elect" maxlength="11" value="<?php echo isset($elect)?$elect:$pom['elect'];?>" class="form-control form-control-sm">
			
			<span class="small">Info:</span><span class="msg text-danger"><?php if(array_key_exists('info', $errors)) echo $errors['info']?></span>
			<input type="text" name="info" maxlength="11" value="<?php echo isset($info)?$info:$pom['info'];?>" class="form-control form-control-sm">
		
			<span class="small">Network:</span><span class="msg text-danger"><?php if(array_key_exists('network', $errors)) echo $errors['network']?></span>
			<input type="text" name="network" maxlength="11" value="<?php echo isset($network)?$network:$pom['network'];?>" class="form-control form-control-sm">
		</div>
	</div>
	<!--
	<div class="row bg-white border text-dark ml-0 mr-0 mb-2">	
		<div class="col pt-2 pb-2">		
			<span><strong>Bathroom:</strong></span>
			<div class="form">
				<?php if (isset($vrsta_num_bathrooms)){?>
				<?php $num_bathrooms=explode(', ', $vrsta_num_bathrooms);}else{?> 
				<?php $chekkup=explode(', ', $pom['vrsta_num_bathrooms']);}?> 
				<?php //foreach ($listanum_bathrooms as $lk){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="type_bath[]" <?php //if(in_array($lk['ime_num_bathrooms'],$num_bathrooms)){echo"checked";}elseif(in_array($lk['ime_num_bathrooms'],$chekkup)) echo"checked"?> value="<?php //echo $lk['ime_num_bathrooms']?>">
					<?php //echo $lk['ime_num_bathrooms']?>
				</div>
		 	<?php //}?>
			</div>									
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Terrace:</strong></span>
			<div class="form">
				<?php if (isset($vrsta_terasa)){?>
				<?php $ter=explode(', ', $vrsta_terasa);}else{?> 
				<?php $chekter=explode(', ', $pom['vrsta_terasa']);}?> 
				<?php //foreach ($lisaterasa as $lt){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="type_terrace[]" <?php //if(in_array($lt['ime_terase'],$ter)){echo"checked";}elseif(in_array($lt['ime_terase'],$chekter)) echo"checked"?> value="<?php //echo $lt['ime_terase']?>">
					<?php //echo $lt['ime_terase']?>
				</div>
		 		<?php //}?>
			</div>	
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Carpentry:</strong></span>
			<div class="form">
				<?php if (isset($cararija)){?>
				<?php $car=explode(', ', $cararija);}else{?> 
				<?php $chekstol=explode(', ', $pom['stolarija']);}?> 
				<?php // foreach ($listastolarije as $ls){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="carpentry[]" <?php //if(in_array($ls['ime_stolarije'],$car)){echo"checked";}elseif(in_array($ls['ime_stolarije'],$chekstol)) echo"checked"?> value="<?php //echo $ls['ime_stolarije']?>" >
					<?php // echo $ls['ime_stolarije']?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Provider:</strong></span>
			<div class="form">
				<?php if (isset($provajder)){?>
				<?php $pro=explode(', ', $provajder);}else{?> 
				<?php $chekpro=explode(', ', $pom['provajder']);}?> 
				<?php //foreach ($listaprovajdera as $lp){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="provider[]" <?php //if(in_array($lp['ime_provajdera'],$pro)){echo"checked";}elseif(in_array($lp['ime_provajdera'],$chekpro)) echo"checked"?> value="<?php //echo $lp['ime_provajdera']?>">
					<?php //echo $lp['ime_provajdera']?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Garage type:</strong></span>
			<div class="form">
				<?php if (isset($garza)){?>
				<?php $gar=explode(', ', $garza);}else{?> 
				<?php $chekgar=explode(', ', $pom['garaza']);}?>
				<?php //foreach ($listagaraza as $lg){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="garage[]" <?php //if(in_array($lg['ime_garaze'],$gar)){echo"checked";}elseif(in_array($lg['ime_garaze'],$chekgar)) echo"checked"?> value="<?php //echo $lg['ime_garaze']?>">
					<?php //echo $lg['ime_garaze']?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Accessories:</strong></span>
			<div class="form">
				<?php if (isset($acesci)){?>
				<?php $aces=explode(', ', $acesci);}else{?> 
				<?php $chekdod=explode(', ', $pom['dodaci']);}?>
				<?php //foreach ($listadodataka as $lido){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="accessories[]" <?php //if(in_array($lido['ime_dodatka'],$aces)){echo"checked";}elseif(in_array($lido['ime_dodatka'],$chekdod)) echo"checked"?> value="<?php //echo $lido['ime_dodatka']?>">
					<?php //echo $lido['ime_dodatka']?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Security:</strong></span>
			<div class="form">
				<?php $chekobe=explode(', ', $pom['obezbedjenje']);?>
				<?php //foreach ($listaobezbedjenja as $lo){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="secutyty[]" <?php //if(in_array($lo['ime_obezbedjenja'],$chekobe)) echo"checked"?> value="<?php //echo $lo['ime_obezbedjenja'];?>">
					<?php //echo $lo['ime_obezbedjenja'];?>
				</div>
		 		<?php //}?>
			</div>
		</div>
		
		<div class="col pt-2 pb-2">
			<span><strong>Heating:</strong></span>
			<div class="form">
				<?php $chekgre=explode(', ', $pom['grejanje']);?>
				<?php //foreach ($listagrejanja as $g){?>
				<div class="custom-control text-dark custom-checkbox pl-0 mr-2 small">
					<input type="checkbox"  name="heating[]" <?php //if(in_array($g['ime_grejanja'],$chekgre)) echo"checked"?> value="<?php //echo $g['ime_grejanja'];?>">
					<?php //echo $g['ime_grejanja'];?>
				</div>
		 		<?php //}?>
			</div>
		</div>
	</div>
	-->
	<div class="row bg-white border text-dark ml-0 mr-0 mb-2">
		<div class="col pt-2 pb-2">
			<span class="small">Price:</span><span class="msg text-danger"><?php if(array_key_exists('price', $errors)) echo $errors['price']?></span>
			<div class="input-group">				    
				<input type="text" name="price" value="<?php echo isset($price)?$price:$pom['price'];?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">$</div>
			</div>
			
			<span class="small">Min price:</span><span class="msg text-danger"><?php if(array_key_exists('min_price', $errors)) echo $errors['min_price']?></span>
			<div class="input-group">				    
				<input type="text" name="min_price" value="<?php echo isset($min_price)?$min_price:$pom['min_price'];?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">$</div>
			</div>
				
			<span class="small">Deposit:</span><span class="msg text-danger"><?php if(array_key_exists('deposit', $errors)) echo $errors['deposit']?></span>
			<div class="input-group">				    
				<input type="text" name="deposit" value="<?php echo isset($deposit)?$deposit:$pom['deposit'];?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">$</div>
			</div>
			
			<span class="small">Commission:</span><span class="msg text-danger"><?php if(array_key_exists('commission', $errors)) echo $errors['commission']?></span>
			<div class="input-group">				    
				<input type="text" name="commission" value="<?php echo isset($commission)?$commission:$pom['commission'];?>" class="form-control form-control-sm">
				<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">%</div>
			</div>
			<span class="small">Payment:</span>
			<select class="custom-select custom-select-sm" name="payment">
				<option value="<?php echo isset($payment)?$payment:$pom['payment'];?>"><?php echo isset($payment)?$payment:$pom['payment'];?></option>
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
			<input type="text" name="note" maxlength="30" value="<?php echo isset($note)?$note:$pom['note'];?>" class="form-control form-control-sm">
			<div class="form-group mb-0">
    			<span class="small">Description:</span>
    			<textarea name="description" maxlength="255" class="form-control form-control-sm" rows="8"><?php echo isset($description)?$description:$pom['description'];?></textarea>
  			</div>
  			<div class="row justify-content-around">
  				<div class="col-4">
  					<button class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" name="page" value="confirm"><strong>Confirm</strong></button>
  				</div>  				 
  			</div>
		</div>
	</div>
</form>
	<?php }?>