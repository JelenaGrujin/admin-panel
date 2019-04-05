<?php
	$msg=isset($msg)?$msg:"";
	$product=isset($product)?$product:"";


?>
<?php foreach ($owner as $pom){?>
<div class="row text-dark bg-white ml-0 mr-0 border-top-0 p-3 mb-2">
		<div class="col">
			<span class="small">Name:</span>
			<input type="text" placeholder="<?php echo $pom['name_surname']?>" class="form-control form-control-sm" readonly>
			
			<span class="small">E-mail:</span>
			<input type="text" placeholder="<?php echo $pom['e_mail']?>" class="form-control form-control-sm"readonly>
			
		</div>
		<div class="col">
			<span class="small">Inserted:</span>
			<input type="text" placeholder="<?php echo $pom['data_insert']?>" class="form-control form-control-sm" readonly>
		
			<span class="small">Updated:</span>
			<input type="text" placeholder="<?php echo $pom['data_update']?>" class="form-control form-control-sm" readonly>
		</div>
		<div class="col">
			<span class="small">Title:</span>
			<input type="text" placeholder="<?php echo $pom['title']?>" class="form-control form-control-sm"readonly>
			
			<span class="small">Source:</span>
			<input type="text" placeholder="<?php echo $pom['source']?>" class="form-control form-control-sm"readonly>
		</div>
		
	</div>
<div class="row bg-white mr-0 ml-0">
	<div class="col mt-2">
		<div class="row  ml-0 mr-0">				
			<div class="col mt-2">
				<div class="form-group">
					<a class="btn btn-outline-secondary form-control mb-2" href="routes.php?page=delete_owner&id_own=<?php echo $pom['id_owner'];?>">Delete</a>
					<a class="btn btn-outline-secondary form-control mb-2" href="routes.php?page=add_product&id_owner=<?php echo $pom['id_owner'];?>">Add product</a>
					<a class="btn btn-outline-secondary form-control mb-2 text-center" href="routes.php?page=edit_owner&id_owner=<?php echo $pom['id_owner'];?>">Edit</a>
				</div>
			</div>
		</div>
	</div>
		<div class="col text-dark mt-2">	
		<span class="small">Phone 1:</span>
		<input type="text" placeholder="<?php echo $pom['phone_1']?>" class="form-control form-control-sm"readonly>	
			
		<span class="small">Phone 2:</span>
		<input type="text" placeholder="<?php echo $pom['phone_2']?>" class="form-control form-control-sm"readonly>	
	</div>
	<div class="col text-dark mt-2">
		<span class="small">Products id:</span>
			<div class="form-row mt-1">
			<?php foreach ($product as $nek){ ?>
			<a href="routes.php?page=view_product_card&id_pro=<?php echo $nek['id_products']?>" class="badge-pill badge-light"><?php echo $nek['id_products'];?></a>
			<?php }?>
		</div>
		<span class="small">Agent:</span>
		<input type="text" placeholder="<?php echo $pom['agent']?>" class="form-control form-control-sm" readonly>
		
	</div>
	
	<div class="col mt-2">	
	</div>
</div>

<div class="row bg-white text-dark mt-2 ml-1 mr-1 border">
	<div class="col pt-2 pb-3 ">
		<span class="small">Phone 3:</span>
		<input type="text" placeholder="<?php echo $pom['phone_3']?>" class="form-control form-control-sm"readonly>	
		
		<span class="small">Name 3:</span>
		<input type="text" placeholder="<?php echo $pom['name_3']?>" class="form-control form-control-sm"readonly>
	
		<span class="small">e-mail 3:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_3']?>" class="form-control form-control-sm"readonly>
	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">Phone 4:</span>
		<input type="text" placeholder="<?php echo $pom['tphone_4']?>" class="form-control form-control-sm"readonly>	
		
		<span class="small">Name 4:</span>
		<input type="text" placeholder="<?php echo $pom['name_4']?>" class="form-control form-control-sm"readonly>
		
		<span class="small">e-mail 4:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_4']?>" class="form-control form-control-sm"readonly>
	
	</div>
	
	<div class="col pt-2 pb-3 ">
		<span class="small">Phone 5:</span>
		<input type="text" placeholder="<?php echo $pom['phone_5']?>" class="form-control form-control-sm"readonly>	
		
		<span class="small">Name 5:</span>
		<input type="text" placeholder="<?php echo $pom['name_5']?>" class="form-control form-control-sm"readonly>
		
		<span class="small">e-mail 5:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_5']?>" class="form-control form-control-sm"readonly>
	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">Phone 6:</span>
		<input type="text" placeholder="<?php echo $pom['phone_6']?>" class="form-control form-control-sm"readonly>	
		
		<span class="small">IName 6:</span>
		<input type="text" placeholder="<?php echo $pom['name_6']?>" class="form-control form-control-sm"readonly>
		
		<span class="small">e-mail 6:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_6']?>" class="form-control form-control-sm"readonly>
	
	</div>
	
	<div class="col pt-2 pb-3 ">
		<span class="small">Phone 7:</span>
		<input type="text" placeholder="<?php echo $pom['phone_7']?>" class="form-control form-control-sm"readonly>	
		
		<span class="small">Name 7:</span>
		<input type="text" placeholder="<?php echo $pom['name_7']?>" class="form-control form-control-sm"readonly>
		
		<span class="small">e-mail 7:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_7']?>" class="form-control form-control-sm"readonly>
	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">Phone 8:</span>
		<input type="text" placeholder="<?php echo $pom['phone_8']?>" class="form-control form-control-sm"readonly>
			
		<span class="small">Name 8:</span>
		<input type="text" placeholder="<?php echo $pom['name_8']?>" class="form-control form-control-sm"readonly>
		
		<span class="small">e-mail 8:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_8']?>" class="form-control form-control-sm"readonly>
	
	</div>
	
	<div class="col pt-2 pb-3 ">
		<span class="small">Phone 9:</span>
		<input type="text" placeholder="<?php echo $pom['phone_9']?>" class="form-control form-control-sm"readonly>
			
		<span class="small">Name 9:</span>
		<input type="text" placeholder="<?php echo $pom['name_9']?>" class="form-control form-control-sm"readonly>
		
		<span class="small">e-mail 9:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_9']?>" class="form-control form-control-sm"readonly>
	
	</div>
</div>

<div class="row bg-white text-dark mt-2 ml-1 mr-1 border ">
	<div class="col-3 mt-2 mb-3">
		<span class="small">Company name:</span>
		<input type="text" placeholder="<?php echo $pom['company_name']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">TIN:</span>
		<input type="text" placeholder="<?php echo $pom['tin']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">Company number:</span>
		<input type="text" placeholder="<?php echo $pom['company_num']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">Activiti code:</span>
		<input type="text" placeholder="<?php echo $pom['activiti_code']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col-3 mt-2 mb-3">
		<span class="small">Company address:</span>
		<input type="text" placeholder="<?php echo $pom['company_address']?>" class="form-control form-control-sm"readonly>	
	</div>
</div>

<div class="row bg-white text-dark mt-2 ml-1 mr-1 border">
	<div class="col-2 mt-2 mb-3">
		<span class="small"><strong>Responsibile person:</strong></span>
		<input type="text" placeholder="<?php echo $pom['responsibile_person']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">ID number:</span>
		<input type="text" placeholder="<?php echo $pom['id_num']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">UMCN:</span>
		<input type="text" placeholder="<?php echo $pom['UMCN']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col mt-2 mb-3">
		<span class="small">Birth date:</span>
		<input type="text" placeholder="<?php echo $pom['b_day']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col-3 mt-2 mb-3">
		<span class="small">Adresa:</span>
		<input type="text" placeholder="<?php echo $pom['owner_address']?>" class="form-control form-control-sm"readonly>	
	</div>
	
	<div class="col-3 mt-2 mb-3">
		<span class="small">owners e-mail:</span>
		<input type="text" placeholder="<?php echo $pom['e_mail_owner']?>" class="form-control form-control-sm"readonly>	
	</div>
</div>

<?php }?>
