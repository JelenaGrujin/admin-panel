<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	$msg=isset($msg)?$msg:"";
	
	$page_home = isset($page_homepa)?$page_homepa:"";
	$page_birth_view = isset($page_birthday_view)?$page_birthday_view:"";
	
	if ($user) {
?>
<html lang="sr">
	<?php include 'head.php'; ?>
	<body class="bg-light">
		<?php include 'index.php';?>
			<?php include 'nav.php';?>
			<div class="wrapper bg-faded ml-2 mr-2">
			<span class="text-dark">
			<?php 
			if (!empty($msg)) 
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$msg.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button>
					</div>'
			?>
			</span>
 			<?php 
				if (empty($page_home)) {
					if (empty($page_birth_view)){
						
					}else {
						include 'birth_view.php';;
					}										
				} else {
					include 'home.php';
				}
			?>
		</div>
	</body>
</html>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>