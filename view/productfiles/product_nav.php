<?php
	$page_list_product = isset($page_list_productpa)?$page_list_productpa:"";
	$page_pro_pho = isset($page_product_photo)?$page_product_photo:"";
	$page_edi_pho = isset($page_edit_photo)?$page_edit_photo:"";
	$page_own = isset($page_owners)?$page_owners:"";
	$page_own_doc = isset($page_owners_doc)?$page_owners_doc:"";

?>
<div class="text-center border-0">
	<div class="card-header pl-2">
		<ul class="nav nav-tabs card-header-tabs">
		  	<li role="presentation" class="nav-item" >
		    	<a class="nav-link text-primary <?php echo $page_list_product; echo $page_pro_pho; echo $page_edi_pho;?>" href="product">Product</a>
		  	</li>
		  	<li role="presentation" class="nav-item" >
		   	 	<a class="nav-link text-primary <?php echo $page_own; echo $page_own_doc;?>" href="owners">Owner</a>
		  	</li>
		  	<li role="presentation" class="nav-item">
		    	<a class="nav-link text-primary <?php ?>" href="#">Orders</a>
		  	</li>
		</ul>
	</div>
</div>
