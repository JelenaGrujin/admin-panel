<?php
	$msg=isset($msg)?$msg:"";
	$errors =isset($errors)?$errors:array();


?>

<form class="form" action="update_owner" method="POST">
	<?php foreach ($list as $pom){?>
	<div class="row text-dark mr-0 ml-0">
		<div class="col mt-2">
			<input type="hidden" name="id_owner" value="<?php echo $pom['id_owner']?>" readonly>
			<span class="small ">Name:</span>
			<input type="text" name="name_surname" maxlength="30" value="<?php if(isset($name_surname)){echo $name_surname;}elseif (isset($pom['name_surname'])) echo $pom['name_surname']?>" class="form-control form-control-sm">	
			
			<span class="small ">Title:</span>
			<input type="text" name="title" maxlength="20" value="<?php if(isset($title)){echo $title;}elseif (isset($pom['title'])) echo $pom['title']?>" class="form-control form-control-sm">
		</div>
		
		<div class="col mt-2">			
			<span class="small ">Inesrted:</span>
			<input type="text" placeholder="<?php echo $pom['data_insert']?>" class="form-control form-control-sm" readonly>
			
			<span class="small ">Updated:</span>
			<input type="text" placeholder="<?php echo $pom['data_update']?>" class="form-control form-control-sm" readonly>
		</div>
		
		<div class="col mt-2">
		
			<span class="small text-dark">Agent:</span>
			<select class="custom-select custom-select-sm" name="agent">
			<option value="<?php echo $pom['agent']?>"><?php echo $pom['agent']?></option>
				<?php foreach ($agentlist as $liag){?>
				<option value="<?php echo $liag['username']?>"><?php echo $liag['username']?></option>
				<?php }?>
			</select>
						
			<span class="small text-dark">Sorce:</span>
			<select class="custom-select custom-select-sm" name="source">
				<option value="<?php if(isset($source)){echo $source;}else echo $pom['source'];?>"><?php if(isset($source)){echo $source;}else echo $pom['source'];?></option>
				<?php foreach ($lisatizvorapodatka as $lip){?>
				<option value="<?php echo $lip['ime_izvora_podatka'];?>"><?php echo $lip['ime_izvora_podatka'];?></option>
				<?php }?>
			</select>
		</div>
		<div class="col mt-2">
		<span class="small ">E-mail:</span><span class="msg text-danger"><?php if(array_key_exists('e_mail', $errors)) echo $errors['e_mail']?></span>
			<input type="text" name="e_mail" maxlength="13" value="<?php if(isset($e_mail)){echo $e_mail;}elseif (isset($pom['e_mail'])) echo $pom['e_mail']?>" class="form-control form-control-sm">
			
			<span class="small ">Phone 1:</span><span class="msg text-danger"><?php if(array_key_exists('phone', $errors)) echo $errors['phone']?></span>
			<input type="text" name="phone" maxlength="13" value="<?php if(isset($phone)){echo $phone;}elseif (isset($pom['phone'])) echo $pom['phone']?>" class="form-control form-control-sm">
			
			<span class="small ">Phone 2:</span><span class="msg text-danger"><?php if(array_key_exists('phone_1', $errors)) echo $errors['phone_1']?></span>
			<input type="text" name="phone_1" maxlength="13" value="<?php if(isset($phone_1)){echo $phone_1;}elseif (isset($pom['phone_1'])) echo $pom['phone_1']?>" class="form-control form-control-sm">
			
		</div>	
	</div>
	
	<div class="row text-dark mt-2 ml-1 mr-1 border">
		<div class="col pt-2 pb-3 ">
			
			<span class="small ">Phone 3:</span><span class="msg text-danger"><?php if(array_key_exists('phone_3', $errors)) echo $errors['phone_3']?></span>
			<input type="text" name="phone_3"  maxlength="13" value="<?php if(isset($phone_3)){echo $phone_3;}elseif (isset($pom['phone_3'])) echo $pom['phone_3']?>" class="form-control form-control-sm">	
			<span class="small ">Name 3:</span>
			<input type="text" name="name_3" maxlength="30" value="<?php if(isset($name_3)){echo $name_3;}elseif (isset($pom['name_3'])) echo $pom['name_3']?>" class="form-control form-control-sm">
			<span class="small ">E-mail 3:</span>
			<input type="text" name="e_mail_3" maxlength="30" value="<?php if(isset($e_mail_3)){echo $e_mail_3;}elseif (isset($pom['e_mail_3'])) echo $pom['e_mail_3']?>" class="form-control form-control-sm">
		
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">Phone 4:</span><span class="msg text-danger"><?php if(array_key_exists('phone_4', $errors)) echo $errors['phone_4']?></span>
			<input type="text" name="phone_4"  maxlength="13" value="<?php if(isset($phone_4)){echo $phone_4;}elseif (isset($pom['phone_4'])) echo $pom['phone_4']?>" class="form-control form-control-sm">	
			<span class="small ">Name 4:</span>
			<input type="text" name="name_4" maxlength="30" value="<?php if(isset($name_4)){echo $name_4;}elseif (isset($pom['name_4'])) echo $pom['name_4']?>" class="form-control form-control-sm">
			<span class="small ">E-mail 4:</span>
			<input type="text" name="e_mail_4" maxlength="30" value="<?php if(isset($e_mail_4)){echo $e_mail_4;}elseif (isset($pom['e_mail_'])) echo $pom['e_mail_4']?>" class="form-control form-control-sm">
		
		</div>
		
		<div class="col pt-2 pb-3 ">
			<span class="small ">Phone 5:</span><span class="msg text-danger"><?php if(array_key_exists('phone_5', $errors)) echo $errors['phone_5']?></span>
			<input type="text" name="phone_5" maxlength="13"  value="<?php if(isset($phone_5)){echo $phone_5;}elseif (isset($pom['phone_5'])) echo $pom['phone_5']?>" class="form-control form-control-sm">	
			<span class="small ">Name 5:</span>
			<input type="text" name="name_5" maxlength="30" value="<?php if(isset($name_5)){echo $name_5;}elseif (isset($pom['name_5'])) echo $pom['name_5']?>" class="form-control form-control-sm">
			<span class="small ">E-mail 5:</span>
			<input type="text" name="e_mail_5" maxlength="30" value="<?php if(isset($e_mail_5)){echo $e_mail_5;}elseif (isset($pom['e_mail_5'])) echo $pom['e_mail_5']?>" class="form-control form-control-sm">
		
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">Phone 6:</span><span class="msg text-danger"><?php if(array_key_exists('phone_6', $errors)) echo $errors['phone_6']?></span>
			<input type="text" name="phone_6" maxlength="13"  value="<?php if(isset($phone_6)){echo $phone_6;}elseif (isset($pom['phone_6'])) echo $pom['phone_6']?>" class="form-control form-control-sm">	
			<span class="small ">Name 6:</span>
			<input type="text" name="name_6" maxlength="30" value="<?php if(isset($name_6)){echo $name_6;}elseif (isset($pom['name_6'])) echo $pom['name_6']?>" class="form-control form-control-sm">
			<span class="small ">E-mail 6:</span>
			<input type="text" name="e_mail_6" maxlength="30" value="<?php if(isset($e_mail_6)){echo $e_mail_6;}elseif (isset($pom['e_mail_6'])) echo $pom['e_mail_6']?>" class="form-control form-control-sm">
		
		</div>
		
		<div class="col pt-2 pb-3 ">
			<span class="small ">Phone 7:</span><span class="msg text-danger"><?php if(array_key_exists('phone_7', $errors)) echo $errors['phone_7']?></span>
			<input type="text" name="phone_7"  maxlength="13" value="<?php if(isset($phone_7)){echo $phone_7;}elseif (isset($pom['phone_7'])) echo $pom['phone_7']?>" class="form-control form-control-sm">	
			<span class="small ">Name 7:</span>
			<input type="text" name="name_7" maxlength="30" value="<?php if(isset($name_7)){echo $name_7;}elseif (isset($pom['name_7'])) echo $pom['name_7']?>" class="form-control form-control-sm">
			<span class="small ">E-mail 7:</span>
			<input type="text" name="e_mail_7" maxlength="30" value="<?php if(isset($e_mail_)){echo $e_mail_7;}elseif (isset($pom['e_mail_3'])) echo $pom['e_mail_7']?>" class="form-control form-control-sm">
		
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">Phone 8:</span><span class="msg text-danger"><?php if(array_key_exists('phone_8', $errors)) echo $errors['phone_8']?></span>
			<input type="text" name="phone8" maxlength="13"  value="<?php if(isset($phone_8)){echo $phone_8;}elseif (isset($pom['phone_8'])) echo $pom['phone_8']?>" class="form-control form-control-sm">	
			<span class="small ">Name 8:</span>
			<input type="text" name="name_8" maxlength="30" value="<?php if(isset($name_8)){echo $name_8;}elseif (isset($pom['name_8'])) echo $pom['name_8']?>" class="form-control form-control-sm">
			<span class="small ">E-mail 8:</span>
			<input type="text" name="e_mail_8" maxlength="30" value="<?php if(isset($e_mail_8)){echo $e_mail_8;}elseif (isset($pom['e_mail_8'])) echo $pom['e_mail_8']?>" class="form-control form-control-sm">
		
		</div>
		
		<div class="col pt-2 pb-3 ">
			<span class="small ">Phone 9:</span><span class="msg text-danger"><?php if(array_key_exists('phone_9', $errors)) echo $errors['phone_9']?></span>
			<input type="text" name="phone_9"  maxlength="13" value="<?php if(isset($phone_9)){echo $phone_9;}elseif (isset($pom['phone_9'])) echo $pom['phone_9']?>" class="form-control form-control-sm">	
			<span class="small ">Name 9:</span>
			<input type="text" name="name_9" maxlength="30" value="<?php if(isset($name_9)){echo $name_9;}elseif (isset($pom['name_9'])) echo $pom['name_9']?>" class="form-control form-control-sm">
			<span class="small ">E-mail 9:</span>
			<input type="text" name="e_mail_9" maxlength="30" value="<?php if(isset($e_mail_9)){echo $e_mail_9;}elseif (isset($pom['e_mail_9'])) echo $pom['e_mail_9']?>" class="form-control form-control-sm">
		
		</div>
	</div>
	
	<div class="row mt-2 ml-1 mr-1 border ">
		<div class="col-3 mt-2 mb-3">
			<span class="small ">Company name:</span>
			<input type="text" name="company_name" maxlength="100" value="<?php if(isset($company_name)){echo $company_name;}elseif (isset($pom['company_name'])) echo $pom['company_name']?>" class="form-control form-control-sm">	
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">TIN:</span><span class="msg text-danger"><?php if(array_key_exists('tin', $errors)) echo $errors['tin']?></span>
			<input type="text" name="tin" maxlength="13" value="<?php if(isset($tin)){echo $tin;}elseif (isset($pom['tin'])) echo $pom['tin']?>" class="form-control form-control-sm">	
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">Company number:</span><span class="msg text-danger"><?php if(array_key_exists('company_num', $errors)) echo $errors['company_num']?></span>
			<input type="text" name="company_num" maxlength="6" value="<?php if(isset($company_num)){echo $company_num;}elseif (isset($pom['company_num'])) echo $pom['company_num']?>" class="form-control form-control-sm">	
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">Activiti code:</span><span class="msg text-danger"><?php if(array_key_exists('activity_code', $errors)) echo $errors['activity_code']?></span>
			<input type="text" name="activity_code" maxlength="4" value="<?php if(isset($activity_code)){echo $activity_code;}elseif (isset($pom['activity_code'])) echo $pom['activity_code']?>" class="form-control form-control-sm">	
		</div>
		
		<div class="col-3 mt-2 mb-3">
			<span class="small ">Company address:</span>
			<input type="text" name="company_address" maxlength="130" value="<?php if(isset($company_address)){echo $company_address;}elseif (isset($pom['company_address'])) echo $pom['company_address']?>" class="form-control form-control-sm">	
		</div>
	</div>
	
	<div class="row text-dark mt-2 ml-1 mr-1 border">
		<div class="col-2 mt-2 mb-3">
			<span class="small "><strong>Responsible person:</strong></span>
			<input type="text" name="responsible_person" maxlength="50" value="<?php if(isset($responsible_person)){echo $responsible_person;}elseif (isset($pom['responsible_person'])) echo $pom['responsible_person']?>" class="form-control form-control-sm">	
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">ID number:</span><span class="msg text-danger"><?php if(array_key_exists('id_num', $errors)) echo $errors['id_num']?></span>
			<input type="text" name="id_num" maxlength="9" value="<?php if(isset($id_num)){echo $id_num;}elseif (isset($pom['id_num'])) echo $pom['id_num']?>" class="form-control form-control-sm">	
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">UMCN:</span><span class="msg text-danger"><?php if(array_key_exists('UMCN', $errors)) echo $errors['UMCN']?></span>
			<input type="text" name="UMCN" maxlength="13" value="<?php if(isset($UMCN)){echo $UMCN;}elseif (isset($pom['UMCN'])) echo $pom['UMCN']?>" class="form-control form-control-sm">	
		</div>
		
		<div class="col mt-2 mb-3">
			<span class="small ">Birth data:</span>
			<input type="date" name="b_day" maxlength="11" value="<?php if(isset($b_day)){echo $b_day;}elseif (isset($pom['b_day'])) echo $pom['b_day']?>" class="form-control form-control-sm">
		</div>
		
		<div class="col-3 mt-2 mb-3">
			<span class="small ">Owner Address:</span>
			<input type="text" name="owner_address" maxlength="130" value="<?php if(isset($owner_address)){echo $owner_address;}elseif (isset($pom['owner_address'])) echo $pom['owner_address']?>" class="form-control form-control-sm">	
		</div>
		
		<div class="col-3 mt-2 mb-3">
			<span class="small ">owner e-mail:</span><span class="msg text-danger"><?php if(array_key_exists('e_mail', $errors)) echo $errors['e_mail']?></span>
			<input type="text" name="e_mail_owner" maxlength="50" value="<?php if(isset($e_mail_owner_nekretnine)){echo $e_mail_owner_nekretnine;}elseif (isset($pom['e_mail_owner_nekretnine'])) echo $pom['e_mail_owner_nekretnine']?>" class="form-control form-control-sm">	
		</div>
	</div>
	
	<div class="row justify-content-around m-0">
		<div class="col-4">
			<button class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" name="page" value="confirm"><strong>Confirm</strong></button>
		</div>
	</div>
	<?php }?>
</form>
