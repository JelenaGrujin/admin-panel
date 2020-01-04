<?php
/*
$accessories=isset($only['accessories'])?$only['accessories']:"";
$acc=explode(', ', $accessories);
$garage=isset($only['garage_type'])?$only['garage_type']:"";
$gar=explode(', ', $garage);
$provider=isset($only['provider'])?$only['provider']:"";
$pro=explode(', ', $provider);
$type_terrace=isset($only['type_terrace'])?$only['type_terrace']:"";
$ter=explode(', ', $type_terrace);
$type_bath=isset($only['type_bath'])?$only['type_bath']:"";
$bath=explode(', ', $type_bath);*/
$active =isset($active)?$active:array();
?>
<form class="form" action="new_product" method="POST">
    <span class="text-dark"><strong>Basic data:</strong></span>
    <div class="row bg-light text-danger border border-primary mt-2 mb-1">
        <div class="col-1 m-3">
            <input type="hidden" name="id_owner" value="<?php if (isset($id_owner)) echo $id_owner; ?>" >
            <input type="hidden" name="business_status" value="renting" >
            <span class="small text-dark">ID:</span>
            <input type="text" class="form-control form-control-sm" placeholder="#">
            <span class="small text-dark">ID euro:</span><span class="msg"><?php if(array_key_exists('edited_id', $errors)) echo $errors['edited_id']?></span>
            <input type="text" name="id_euro" maxlength="11" value="<?php if (isset($id_euro)) echo $id_euro?>" class="form-control form-control-sm">
        </div>
        <div class="col-2 mt-3 ml-3 mb-3">
            <span class="small text-dark">City:</span> <span class="msg"><?php if(array_key_exists('location_data_1', $errors)) echo $errors['location_data_1']?></span>
            <select class="custom-select custom-select-sm" name="location_data_1">
                <option value="<?php if (isset($location_data_1)) echo $location_data_1?>"><?php if (isset($location_data_1)) echo $location_data_1?></option>
                <?php foreach ($list_location_1 as $gr){?>
                    <option value="<?php echo $gr['name'];?>"><?php echo $gr['name'];?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-2 mt-3 mb-3">
            <span class="small text-dark">District:</span><span class="msg"><?php if(array_key_exists('location_data_2', $errors)) echo $errors['location_data_2']?></span>
            <select class="custom-select custom-select-sm" name="location_data_2">
                <option value="<?php if (isset($location_data_2)) echo $location_data_2?>"><?php if (isset($location_data_2)) echo $location_data_2?></option>
                <?php foreach ($list_location_2 as $op){?>
                    <option value="<?php echo $op['name'];?>"><?php echo $op['name'];?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-2 mt-3 mb-3">
            <span class="small text-dark">Location:</span><span class="msg"><?php if(array_key_exists('location_data_3', $errors)) echo $errors['location_data_3']?></span>
            <select class="custom-select custom-select-sm" name="location_data_3">
                <option value="<?php if (isset($location_data_3)) echo $location_data_3?>"><?php if (isset($location_data_3)) echo $location_data_3?></option>
                <?php foreach ($list_location_3 as $li_lo){?>
                    <option value="<?php echo $li_lo['name'];?>"><?php echo $li_lo['name'];?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-2 mt-3 mb-3">
            <span class="small text-dark">Street:</span> <span class="msg"><?php if(array_key_exists('address_location', $errors)) echo $errors['address_location']?></span>
            <input type="text" name="address_location" maxlength="130" value="<?php if (isset($address_location)) echo $address_location;?>" class="form-control form-control-sm">
        </div>
        <div class="col-2 mt-3 mb-3">
            <span class="small text-dark">Number:</span><span class="msg"><?php if(array_key_exists('address_num', $errors)) echo $errors['address_num']?></span>
            <span class="msg"><?php if(array_key_exists('number', $errors)) echo $errors['number']?></span>
            <div class="input-group">
                <input type="text" name="address_num" maxlength="5" value="<?php if (isset($address_num)) echo $address_num?>" class="form-control form-control-sm">
                <div class="input-group-addon text-dark pl-2 pr-2 pt-1 pb-1">/</div>
                <input type="text" name="number" maxlength="5" value="<?php if (isset($number)) echo $number?>" class="form-control form-control-sm">
            </div>
        </div>

        <div class="col-3 text-danger pt-1 pb-2">
            <span class="text-dark"><strong>Product type:</strong></span><span class="msg"><?php if(array_key_exists('product_type', $errors)) echo $errors['product_type']?></span>
            <div class="form-row mt-1">
                <?php foreach ($types_list as $pom){?>
                    <div class="custom-control text-dark custom-checkbox">
                        <?php echo $pom['name']?>
                        <input type="checkbox"  name="product_type[]" <?php if (in_array($pom['name'],$pro_type)) echo"checked";?> value="<?php echo $pom['name']?>">
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="col-2 pt-1 pb-2">
            <span class="small text-dark">Structure:</span><span class="msg"><?php if(array_key_exists('structure', $errors)) echo $errors['structure']?></span>
            <select class="custom-select custom-select-sm" name="structure">
                <option value="<?php if (isset($structure)) echo $structure;?>"><?php if (isset($structure)) echo $structure;?></option>
                <?php foreach ($structure_list as $st){?>
                    <option value="<?php echo $st['name'];?>"><?php echo $st['name'];?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-2 pt-1 pb-2">
            <span class="small text-dark">Square:</span><span class="msg"><?php if(array_key_exists('square', $errors)) echo $errors['square']?></span>
            <div class="input-group">
                <input type="text" name="square" maxlength="5" value="<?php if (isset($square)) echo $square;?>" class="form-control form-control-sm">
                <div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
            </div>
        </div>
        <div class="col-2 pt-1 pb-2">
            <span class="small text-dark">Price:</span><span class="msg"><?php if(array_key_exists('price', $errors)) echo $errors['price']?></span>
            <input type="text" name="price" maxlength="11" value="<?php if (isset($price)) echo $price;?>" class="form-control form-control-sm">
        </div>
        <div class="col-2 pt-1 pb-2"><span class="msg"><?php if(array_key_exists('deposit', $errors)) echo $errors['deposit']?></span>
            <span class="small text-dark">Deposit:</span>
            <input type="text" name="deposit" maxlength="10" value="<?php if (isset($deposit))echo $deposit;?>" class="form-control form-control-sm">
        </div>
    </div>
    <span class="text-dark "><strong>Other information:</strong></span>
    <div class="row bg-light border border-primary mt-2 mb-1">
        <div class="col text-danger m-2 pt-2 pb-2">
            <span class="small text-dark">Min price:</span><span class="msg"><?php if(array_key_exists('min_price', $errors)) echo $errors['min_price']?></span>
            <input type="text" name="min_price" maxlength="11" value="<?php if (isset($min_price)) echo $min_price;?>" class="form-control form-control-sm">
            <span class="small text-dark">Commission:</span><span class="msg"><?php if(array_key_exists('commission', $errors)) echo $errors['commission']?></span>
            <div class="input-group">
                <input type="text" name="commission" maxlength="11" value="<?php if (isset($commission)) echo $commission;?>" class="form-control form-control-sm">
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
            <input type="text" name="place" maxlength="30" value="<?php if (isset($object)){echo $object;}?>" class="form-control form-control-sm">
            <span class="small text-dark">floor:</span><span class="msg"><?php if(array_key_exists('floor', $errors)) echo $errors['floor']?></span><span class="msg"><?php if(array_key_exists('of_floor', $errors)) echo $errors['of_floor']?></span>
            <div class="row">
                <div class="col">
                    <input type="text" name="floors" maxlength="3" value="<?php if (isset($floor)){echo $floor;}?>" class="form-control form-control-sm">
                </div>
                <div class="pt-1 text-dark"> of </div>
                <div class="col">
                    <input type="text" name="of_floors" maxlength="3" value="<?php if (isset($of_floor)){echo $of_floor;}?>" class="form-control form-control-sm">
                </div>
            </div>
            <span class="small text-dark">Num elevator:</span><span class="msg"><?php if(array_key_exists('num_elevator', $errors)) echo $errors['num_elevator']?></span>
            <input type="text" name="num_elevator" maxlength="2" value="<?php if (isset($num_elevator)){echo $num_elevator;}?>" class="form-control form-control-sm">
        </div>

        <div class="col text-danger m-2 pt-2 pb-2">
            <span class="small text-dark">construction year:</span><span class="msg"><?php if(array_key_exists('construction_year', $errors)) echo $errors['construction_year']?></span>
            <input type="text" name="construction_year" maxlength="4" value="<?php if (isset($construction_year)){echo $construction_year;}?>" class="form-control form-control-sm">

            <span class="small text-dark">ceiling height:</span><span class="msg"><?php if(array_key_exists('ceiling_height', $errors)) echo $errors['ceiling_height']?></span>
            <div class="input-group">
                <input type="text" name="ceiling_height" maxlength="4" value="<?php if (isset($ceiling_height)){echo $ceiling_height;}?>" class="form-control form-control-sm">
                <div class="input-group-addon text-dark pl-2 pr-2 pt-1 pb-1">m</div>
            </div>

            <span class="small text-dark">Level:</span><span class="msg"><?php if(array_key_exists('level', $errors)) echo $errors['level']?></span>
            <input type="text" name="level" maxlength="3" value="<?php if (isset($level)){echo $level;}?>" class="form-control form-control-sm">

            <span class="small text-dark">Salon:</span><span class="msg"><?php if(array_key_exists('salon_m_', $errors)) echo $errors['salon_m_']?></span>
            <div class="input-group">
                <input type="text" name="salon_m" maxlength="4" value="<?php if (isset($salon_m)){echo $salon_m;}?>" class="form-control form-control-sm">
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

            <span class="small text-dark">Number of terrace:</span><span class="msg"><?php if(array_key_exists('num_terrace', $errors)) echo $errors['num_terrace']?></span>
            <input type="text" name="num_terrace" maxlength="3" value="<?php if (isset($num_terrace)){echo $num_terrace;}?>" class="form-control form-control-sm">

        </div>

        <div class="col text-danger m-2 pt-2 pb-2">
            <span class="small text-dark">Equipment:</span>
            <select class="custom-select custom-select-sm" name="equipment">
                <option value="<?php if (isset($equipment)){echo $equipment;}?>"><?php if (isset($equipment)){echo $equipment;}?></option>
                <?php foreach ($equipment_list as $o){?>
                    <option value="<?php echo $o['name'];?>"><?php echo $o['name'];?></option>
                <?php  } ?>
            </select>

            <span class="small text-dark">Kitchen:</span>
            <select class="custom-select custom-select-sm" name="kitchen">
                <option value="<?php if (isset($kitchen)){echo $kitchen;}?>"><?php if (isset($kitchen)){echo $kitchen;}?></option>
                <?php foreach ($kitchen_list as $kl){?>
                    <option value="<?php echo $kl['name']?>"><?php echo $kl['name']?></option>
                <?php }?>
            </select>
            <span class="small text-dark">Number of air con:</span><span class="msg"><?php if(array_key_exists('num_air_con', $errors)) echo $errors['num_air_con']?></span>
            <input type="text" name="num_air_con" maxlength="3" value="<?php if (isset($num_air_con)){echo $num_air_con;}?>" class="form-control form-control-sm">
            <span class="small text-dark">Number of garages:</span><span class="msg"><?php if(array_key_exists('num_garages', $errors)) echo $errors['num_garages']?></span>
            <input type="text" name="num_garages" maxlength="3" value="<?php if (isset($num_garages)){echo $num_garages;}?>" class="form-control form-control-sm">
        </div>
        <div class="col text-danger m-2 pt-2 pb-2">
            <span class="small text-dark"><strong>Coasts:</strong></span><br>
            <span class="small text-dark">Info:</span>
            <input type="text" name="info" maxlength="20" value="<?php if (isset($info)){echo $info;}?>" class="form-control form-control-sm">

            <span class="small text-dark">Electricity:</span>
            <input type="text" name="elect" maxlength="20" value="<?php if (isset($elect)){echo $elect;}?>" class="form-control form-control-sm">

            <span class="small text-dark">Network:</span>
            <input type="text" name="network" maxlength="20" value="<?php if (isset($network)){echo $network;}?>" class="form-control form-control-sm">

            <span class="small text-dark">Maintenance:</span>
            <input type="text" name="maintenance" maxlength="20"  value="<?php if (isset($maintenance)){echo $maintenance;}?>" class="form-control form-control-sm">
        </div>
    </div>
	<div class="row bg-light border border-primary mt-2 mb-1">

		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Heating: </strong></span>
				<div class="form">
				<?php foreach ($heating_list as $hl){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="heating[]" <?php if (in_array($hl['name'],$hea)) echo"checked";?> value="<?php  echo $hl['name'];?>"> <?php echo $hl['name'];?>
				</div>
		 		<?php }?>
				</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Carpentry: </strong></span>
			<div class="form">
				<?php foreach ($carpentry_list as $cl){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="carpentry[]" <?php if(in_array($cl['name'],$car)) echo"checked";?> value="<?php echo $cl['name'];?>"> <?php echo $cl['name'];?>
				</div>
		 		<?php }?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Security: </strong></span>
			<div class="form">
				<?php foreach ($security_list as $sl){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="security[]" <?php if(in_array($sl['name'],$sec)) echo"checked";?> value="<?php echo $sl['name'];?>"> <?php echo $sl['name'];?>
				</div>
		 		<?php }?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Garage: </strong></span>
			<div class="form">
				<?php foreach ($garage_list as $gl){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="garage_type[]" <?php if(in_array($gl['name'],$gar)) echo"checked";?> value="<?php echo $gl['name']?>"> <?php echo $gl['name']?>
				</div>
		 		<?php }?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Provider: </strong></span>
			<div class="form">
				<?php foreach ($provider_list as $pl){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="provider[]" <?php if(in_array($pl['name'],$prov)) echo"checked";?> value="<?php echo $pl['name']?>"> <?php echo $pl['name']?>
				</div>
		 		<?php }?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Bathroom: </strong></span>
			<div class="form">
				<?php foreach ($bath_list as $bl){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="type_bath[]" <?php if(in_array($bl['name'],$bath)) echo"checked";?> value="<?php echo $bl['name']?>"> <?php echo $bl['name']?>
				</div>
		 		<?php }?>
			</div>
		</div>
		<div class="col pt-1 pb-2">
			<span class="text-dark"><strong>Terrace: </strong></span>
			<div class="form">
				<?php foreach ($terrace_list as $tl){?>
				<div class="custom-control text-dark custom-checkbox small pl-0">
				<input type="checkbox"  name="type_terrace[]" <?php if(in_array($tl['name'],$ter)) echo"checked";?> value="<?php echo $tl['name']?>"> <?php echo $tl['name']?>
				</div>
		 		<?php }?>
			</div>
		</div>
        <div class="col pt-1 pb-2">
            <span class="text-dark"><strong>Terrace: </strong></span>
            <div class="form">
                <?php foreach ($accessories_list as $al){?>
                    <div class="custom-control text-dark custom-checkbox small pl-0">
                        <input type="checkbox"  name="accessories[]" <?php if(in_array($al['name'],$aces)) echo"checked";?> value="<?php echo $al['name']?>"> <?php echo $al['name']?>
                    </div>
                <?php }?>
            </div>
        </div>
	</div>
    <div class="row bg-light border border-primary mt-2 mb-1">
        <div class="col-2 text-dark pt-1 pb-2">
            <div class="row border-bottom pt-4 pb-1">
                <div class="col">
                    <span class="mr-2">Active:</span><input class="mt-1 mr-2" type="radio" name="active" <?php if($active=="Active") echo "checked";?> value="Active" checked>
                </div>
                <div class="col">
                    <span class="p-0">Passive: </span><input class="mt-1" type="radio" name="active" <?php if($active=="Passive") echo "checked";?> value="Passive">
                </div>
            </div>
            <div class="row text-danger border-bottom pt-1 pb-1">
                <div class="col pl-5">
                    <span class="text-dark">date:</span><span class="msg"><?php if(array_key_exists('date', $errors)) echo $errors['date']?></span>
                </div>
                <div class="col">
                    <input type="date" name="active_data" maxlength="11" value="<?php if (isset($active_data)){echo $active_data;}?>" class="form-control form-control-sm">
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
            <input class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" value="Pause"></input>
        </div>
        <div class="col-2">
            <input class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" value="Confirm"></input>
        </div>
    </div>
</form>