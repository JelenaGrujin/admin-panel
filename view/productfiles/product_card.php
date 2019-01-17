<?php
	if(!isset($_SESSION['user'])){
		session_start();
	
	}
	
	$user=unserialize($_SESSION['user']);
	
	if ($user){

		$msg=isset($msg)?$msg:"";
		
		foreach ($product as $pom){?>
		<div class="col bg-white text-white mb-2">
			<div class="row mr-0 ml-0">				
				<div class="col mt-2 mb-3">
					<span class="small text-dark">ID:</span>
					<input type="text" placeholder="<?php echo $pom['id_products']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Id euro:</span>
					<input type="text" placeholder="<?php echo $pom['id_euro']?>" class="form-control form-control-sm" readonly>					
				</div>
				<div class="col mt-2 mb-3">
					<span class="small text-dark">Inserted:</span>
					<input type="text" placeholder="<?php echo $pom['date_insert']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Updated:</span>
					<input type="text" placeholder="<?php echo $pom['date_update']?>" class="form-control form-control-sm" readonly>
				</div>
				<div class="col mt-2 mb-3">
					<span class="small text-dark">Activity:</span>
					<input type="text" placeholder="<?php echo $pom['active']?>" class="form-control form-control-sm" readonly>					
					<span class="small text-dark">date:</span>
					<input type="text" placeholder="<?php echo $pom['active_data']?>" class="form-control form-control-sm" readonly>
				</div>				
			</div>
		</div>
		<div class="col text-white pt-2 pb-2">
			<div class="row bg-white border ml-0 mr-0">				
				<div class="col mt-3 mb-3">
					<div class="form-group">
						<a class="btn btn-outline-secondary form-control form-control mb-2" href="routes.php?page=delete_product&id_pro=<?php echo $pom['id_products'];?>">Delete</a>
						<a class="btn btn-outline-secondary form-control form-control mb-2 text-center" href="routes.php?page=edit_product&id_pro=<?php echo $pom['id_products'];?>">Edit</a>
						<a class="btn btn-outline-secondary form-control form-control mb-2 text-center" href="routes.php?page=owner_card_view=<?php echo $pom['id_owner']?>">Owner view</a>
					</div>
				</div>
				<div class="col mt-2 mb-3">
					<span class="small text-dark">Product type:</span>
					<input type="text" placeholder="<?php echo $pom['product_type']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Structure:</span>
					<input type="text" placeholder="<?php echo $pom['structure']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Square:</span>
					<div class="input-group">				    
						<input type="text" placeholder="<?php echo $pom['square']?>" class="form-control form-control-sm" readonly>
						<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
					</div>
					<span class="small text-dark">Surface area:</span>
					<div class="input-group">				    
						<input type="text" placeholder="<?php echo $pom['surface_area']?>" class="form-control form-control-sm" readonly>
						<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
					</div>
					<span class="small text-dark">Object:</span>
					<input type="text" placeholder="<?php echo $pom['object']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Flor:</span>
					<div class="row">
						<div class="col">
						<input type="text" placeholder="<?php echo $pom['flors']?>" class="form-control form-control-sm" readonly>
					</div>
					<div class="pt-1 text-dark"> of </div>
						<div class="col">
							<input type="text" placeholder="<?php echo $pom['of_flors']?>" class="form-control form-control-sm" readonly>
						</div>
					</div>
					<span class="small text-dark">Number of elevators:</span>
					<input type="text" placeholder="<?php echo $pom['num_elevator']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Accessories:</span>
					<input type="text" placeholder="<?php echo $pom['accessories']?>" class="form-control form-control-sm" readonly>
				
				</div>
				<div class="col mt-2 mb-3">
					<span class="small text-dark">Street:</span>
					<input type="text" placeholder="<?php echo $pom['addres_location']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Location:</span>
					<input type="text" placeholder="<?php echo $pom['location_data_3']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">District:</span>
					<input type="text" placeholder="<?php echo $pom['location_data_2']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">City:</span>
					<input type="text" placeholder="<?php echo $pom['location_data_1']?>" class="form-control form-control-sm" readonly>
					<div class="row">
						
						<div class="col">
						<span class="small text-dark">street number</span>
						<input type="text" placeholder="<?php echo $pom['adres_num']?>" class="form-control form-control-sm" readonly>
						</div>
					
						<div class="col">
						<span class="small text-dark">number</span>
						<input type="text" placeholder="<?php echo $pom['number']?>" class="form-control form-control-sm" readonly>
						</div>
					</div>
					<span class="small text-dark">Garage:</span>
					<input type="text" placeholder="<?php echo $pom['garage']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Parking places:</span>
					<input type="text" placeholder="<?php echo $pom['num_garages']?>" class="form-control form-control-sm" readonly>
					
				</div>
				<div class="col mt-2 mb-3">
					<span class="small text-dark">Equipment:</span>
					<input type="text" placeholder="<?php echo $pom['equipment']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Kitchen:</span>
					<input type="text" placeholder="<?php echo $pom['kitchen']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Heating:</span>
					<input type="text" placeholder="<?php echo $pom['heating']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Carpentry:</span>
					<input type="text" placeholder="<?php echo $pom['carpentry']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Surface area:</span>
					<input type="text" placeholder="<?php echo $pom['surface_area']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Construction year:</span>
					<input type="text" placeholder="<?php echo $pom['construc_year']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Level:</span>
					<input type="text" placeholder="<?php echo $pom['level']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Salon:</span>
					<div class="input-group">				    
					<input type="text" placeholder="<?php echo $pom['salon_m']?>" class="form-control form-control-sm" readonly>
					<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">m<sup>2</sup></div>
					</div>
					
				</div>
				<div class="col mt-2 mb-3">
						<span class="small text-dark">Number of rooms:</span>
					<input type="text" placeholder="<?php echo $pom['num_rooms']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Number of bathrooms:</span>
					<input type="text" placeholder="<?php echo $pom['num_bath']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Number of toiletes:</span>
					<input type="text" name="" value="<?php echo $pom['num_wc']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Number of terrace:</span>
					<input type="text" placeholder="<?php echo $pom['num_terrace']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Air conditions:</span>
					<input type="text" placeholder="<?php echo $pom['num_air_con']?>" class="form-control form-control-sm" readonly>
					
			</div>
				<div class="col mt-2 mb-3">
					<span class="small text-dark">Security:</span>
					<input type="text" placeholder="<?php echo $pom['security']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Provideri:</span>
					<input type="text" placeholder="<?php echo $pom['provider']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark"><strong>Coasts:</strong></span><br>
					<span class="small text-dark">Maintenance:</span>
					<input type="text" placeholder="<?php echo $pom['maintenance']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Electricity:</span>
					<input type="text" placeholder="<?php echo $pom['electricity']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">Info:</span>
					<input type="text" placeholder="<?php echo $pom['info']?>" class="form-control form-control-sm" readonly>
					<span class="small text-dark">network:</span>
					<input type="text" placeholder="<?php echo $pom['network']?>" class="form-control form-control-sm" readonly>
				</div>				
			</div>
			
		</div>
		<div class="col text-white bg-light pt-2 pb-2">
			<div class="row bg-white border ml-0 mr-0">
				<div class="col mt-2 mb-3">
					<span class="small text-dark">Price:</span>
					<div class="input-group">				    
						<input type="text" placeholder="<?php echo number_format($pom['price'],2,",",".")?>" class="form-control form-control-sm" readonly>
						<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">e</div>
					</div>
					<span class="small text-dark">Min price:</span>
					<div class="input-group">				    
						<input type="text" placeholder="<?php echo number_format($pom['min_price'],2,",",".")?>" class="form-control form-control-sm" readonly>
						<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">e</div>
					</div>
					<span class="small text-dark">Deposit:</span>
					<div class="input-group">				    
						<input type="text" placeholder="<?php echo $pom['deposit']?>" class="form-control form-control-sm" readonly>
						<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">e</div>
					</div>
					<span class="small text-dark">Commission:</span>
					<div class="input-group">				    
						<input type="text" placeholder="<?php echo number_format($pom['commission'],2,",",".")?>" class="form-control form-control-sm" readonly>
						<div class="input-group-addon text-dark pl-2 pr-1 pt-1 pb-1">%</div>
					</div>
					<span class="small text-dark">Payment:</span>
					<input type="text" placeholder="<?php echo $pom['payment']?>" class="form-control form-control-sm" readonly>
				</div>
				<div class="col-8 mt-2 mb-3">
					<span class="small text-dark">Note:</span>
					<input type="text" placeholder="<?php echo $pom['note']?>" class="form-control form-control-sm" readonly>
					<div class="form-group mb-0">
    					<span class="small text-dark">Description:</span>
    					<textarea class="form-control form-control-sm" rows="8" readonly><?php echo $pom['description']?></textarea>
  					</div>
				</div>
			</div>	
		</div>
<?php }

}else {
	header('Location:../login.php?msgg=You need to log in');
	
}?>