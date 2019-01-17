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
<span class="text-dark"><?php if (!empty($msg)) 
echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$msg.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>'?></span>
<div class="text-center bg-light">
	<div class="card-header pl-2 pr-2">
		<ul class="nav nav-tabs card-header-tabs">
		  	<li role="presentation" class="nav-item" >
		    	<a class="nav-link text-primary <?php echo $page_inf;?>" href="routes.php?page=new_product">About</a>
		  	</li>
		  	<li role="presentation" class="nav-item" >
		   	 	<a class="nav-link text-primary <?php echo $page_own;?>" href="routes.php?page=owner">Owner</a>
		  	</li>
		  	<li role="presentation" class="nav-item">
		    	<a class="nav-link text-primary <?php echo $page_pho;?>" href="routes.php?page=photos">Photos</a>
		  	</li>
		</ul>
	</div>
</div>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>