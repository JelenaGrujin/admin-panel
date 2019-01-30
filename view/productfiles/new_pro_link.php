<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	$msg=isset($msg)?$msg:"";
	$page_inf = isset($page_info)?$page_info:"";
	$page_own = isset($page_owner)?$page_owner:"";
	$page_pho = isset($page_photos)?$page_photos:"";
	
	if ($ulogovan) {
?>
<html lang="en">
	<?php include 'header.php'; ?>
	<body class="bg-light">
		<?php include 'app_nav.php';?>
		<?php include 'nav.php';?>
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
	</body>
</html>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>
