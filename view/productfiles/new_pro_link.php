<?php
	$msg=isset($msg)?$msg:"";
	$page_inf = isset($page_info)?$page_info:"";
	$page_own = isset($page_owner)?$page_owner:"";
	$page_pho = isset($page_photos)?$page_photos:"";

?>

	<?php include 'view/app_nav.php';?>
	<?php include 'view//nav.php';?>
		<div class="wrapper bg-faded ml-3 mr-3">
		
			<?php include 'new_pro_nav.php';?>
			<span class="text-light"><?php echo $msg; ?></span>
			<div class="row bg-dark">
			 	<div class="container-fluid bg-white pl-4 pr-4">
			 		<?php 
				 		if (empty($page_inf)) {
				 			if (empty($page_own)) {
				 				if (empty($page_pho)) {
				 					
				 				} else {
				 					include 'photos.php';
				 				}
				 			} else {
				 				include 'owner.php';
				 			}
				 		} else {
				 			include 'product_info.php';
				 		}
			 		?>
				</div>
				
			</div>
		</div>
		<?php include 'footer.php';?>
