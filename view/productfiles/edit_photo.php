<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	$id_product=isset($id_product)?$id_product:"";
	$photos=isset($photos)?$photos:array();
	$errors =isset($errors)?$errors:array();
	if ($user) {
?>
<?php include 'head.php';?>
<div class="">
<div class="album py-5 bg-transparent">
	<div class="row mb-5">
	<?php foreach ($photos as $photo) {?>
        <div class="col-md-3 mb-2">
			<div class="card">
			  <img class="card-img-top" src="../css/image/<?php echo $photo['name_photo']?>" style="width:19.3rem; height: 13rem;" alt="<?php echo $photo['name_photo']?>">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $photo['name_photo']?></h5>
			    <a href="routes.php?page=deletephoto&id_photo=<?php echo $photo['id_photo']?>" class="btn btn-danger">
				  Obri&scaron;i<span class="badge badge-danger text-light">X</span>
				</a>
			  </div>
			</div>
		</div>
		<?php }?>
	</div>
</div>
<form class="form" action="routes.php" method="POST" enctype="multipart/form-data" id="js-upload-form">
	<div class="row mt-2 mb-2 border">
		<div class="col mt-4 mb-3">
			<span class="text-dark">Select photos for product ID: <?php echo $id_product?></span>
			<input type="file" name="foto[]" value="" class="control-file text-dark"  multiple="multiple">
			<span class="msg text-danger"><?php if(array_key_exists('many_pho', $errors)) echo $errors['many_pho']?></span>
			<span class="msg text-danger"><?php if(array_key_exists('ext_photos', $errors)) echo $errors['ext_photos']?></span>
		</div>
		<div class="col-3 mt-4 mb-3">
				<button class="btn btn-primary btn-block pt-1 pb-2" type="submit" name="page" value="Confirm_photos"><strong>Confirm photos</strong></button>	
			</div>
	</div>
</form>
</div>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>