<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	$msg=isset($msg)?$msg:"";
	$page_pro_type = isset($page_type_product)?$page_type_product:"";
	$page_loc = isset($page_location)?$page_location:"";
	$page_ord = isset($page_orders)?$page_orders:"";
	$page_age_baza = isset($page_agent_baza)?$page_agent_baza:"";
	
	
	if ($user) {
?>

<div class="text-center border-0">
	<div class="card-header pl-2">
		<ul class="nav nav-tabs card-header-tabs">
		  	<li role="presentation" class="nav-item" >
		    	<a class="nav-link text-primary <?php echo $page_pro_type;?>" href="routes.php?page=type">Product</a>
		  	</li>
		  	<li role="presentation" class="nav-item" >
		   	 	<a class="nav-link text-primary <?php echo $page_loc;?>" href="routes.php?page=location">Location</a>
		  	</li>
		  	<li role="presentation" class="nav-item">
		    	<a class="nav-link text-primary <?php echo $page_ord;?>" href="#">Orders</a>
		  	</li>
		  	<li role="presentation" class="nav-item">
		    	<a class="nav-link text-primary <?php echo $page_age_baza;?>" href="routes.php?page=agent_baza">Agent</a>
		  	</li>
		</ul>
	</div>
</div>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>