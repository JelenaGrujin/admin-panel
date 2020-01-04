<?php
	$page_pro = isset($page_products)?$page_products:"";
	$page_loc = isset($page_location)?$page_location:"";
	$page_ord = isset($page_orders)?$page_orders:"";
	$page_age = isset($page_agent)?$page_agent:"";

?>
<div class="text-center border-0">
	<div class="card-header pl-2">
		<ul class="nav nav-tabs card-header-tabs">
		  	<li role="presentation" class="nav-item" >
		    	<a class="nav-link text-primary <?php echo $page_pro;?>" href="baseCard&class=type">Product</a>
		  	</li>
		  	<li role="presentation" class="nav-item" >
		   	 	<a class="nav-link text-primary <?php echo $page_loc;?>" href="location">Location</a>
		  	</li>
		  	<li role="presentation" class="nav-item">
		    	<a class="nav-link text-primary <?php echo $page_ord;?>" href="#">Orders</a>
		  	</li>
		  	<li role="presentation" class="nav-item">
		    	<a class="nav-link text-primary <?php echo $page_age;?>" href="agent">Agent</a>
		  	</li>
		</ul>
	</div>
</div>