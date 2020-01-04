<?php
	$errors =isset($errors)?$errors:array();
?>
<form class="form" action="new_photo" method="POST" enctype="multipart/form-data" id="js-upload-form">
	<div class="row mt-2 mb-2 border">
		<div class="col mt-4 mb-3">
			<span class="text-dark">Select photos :</span>
			<input type="file" name="photo[]" value="" class="control-file text-dark"  multiple="multiple">
			<span class="msg text-danger"><?php if(array_key_exists('photo', $errors)) echo $errors['photo']?></span>
		</div>
		<div class="col-3 mt-4 mb-3">
            <input class="btn btn-sm btn-primary btn-block mt-2 pt-2 pb-2" type="submit" value="Confirm">
			</div>
	</div>
</form>