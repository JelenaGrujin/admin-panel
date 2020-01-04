<h4 class="display-5 text-secondary mt-4">New Agent</h4>
<form action="sign_in" method="post">
	<div class="row justify-content-center text-dark w-75">
        <input type="hidden" name="id_users" value="<?php if(isset($list['id_users'])) echo $list['id_users']?>">
		<div class="col-3 col-sm text-left">
			<span class="small">Name Surname:</span><span class="msg text-danger"><?php if(array_key_exists('name_surname', $errors)) echo $errors['name_surname']?></span>
			<input type="text" name="name_surname" maxlength="100" value="<?php if(isset($list['name_surname']))echo $list['name_surname']?>" class="form-control form-control-sm">
		</div>
		<div class="col-3 col-sm ">
			<span class="small">addressa:</span><span class="msg text-danger"><?php if(array_key_exists('address', $errors)) echo $errors['address']?></span>
			<input type="text" name="address" maxlength="130" value="<?php if(isset($list['address'])) echo $list['address']?>" class="form-control form-control-sm">
		</div>
	</div>
	<div class="row justify-content-center text-dark w-75">	
		<div class="col-3 col-sm text-left">
			<span class="small">phone:</span><span class="msg text-danger"><?php if(array_key_exists('phone', $errors)) echo $errors['phone']?></span>
			<input type="text" name="phone" maxlength="20" value="<?php if(isset($list['phone'])) echo $list['phone']?>" class="form-control form-control-sm">
		</div>
		<div class="col-3 col-sm ">
			<span class="small">e_mail:</span><span class="msg text-danger"><?php if(array_key_exists('e_mail', $errors)) echo $errors['e_mail']?></span>
			<input type="text" name="e_mail" maxlength="50" value="<?php if(isset($list['e_mail'])) echo $list['e_mail']?>" class="form-control form-control-sm">
		</div>
	</div>
	<div class="row justify-content-center text-dark w-75">	
		<div class="col col-sm text-left">
			<span class="small">username:</span><span class="msg text-danger"><?php if(array_key_exists('username', $errors)) echo $errors['username']?></span>
			<input type="text" name="username" maxlength="30"  value="<?php if(isset($list['username'])) echo $list['username']?>" class="form-control form-control-sm">
		</div>
		<div class="col col-sm ">
			<span class="small">password:</span><span class="msg text-danger"><?php if(array_key_exists('pass', $errors)) echo $errors['pass']?></span>
			<input type="password" name="password" maxlength="20" value="<?php if (isset($list))echo 1234;?>" class="form-control form-control-sm">
		</div>
		<div class="col col-sm text-left">
			<span class="small">repeat the password:</span><span class="msg text-danger"><?php if(array_key_exists('r_pass', $errors)) echo $errors['r_pass']?></span>
			<input type="password" name="r_password" maxlength="20" value="<?php if (isset($list))echo 1234;?>" class="form-control form-control-sm">

		</div>
	</div>
    <?php ?>
    <?php ?>
	<div class="row justify-content-center text-dark">
		<div class="col-4 mt-3">
			<button class="btn btn-sm btn-secondary btn-block" type="submit" name="page" value="confirm">Confirm</button>
		</div>
	</div>
</form>