<?php
	$page_pro = isset($page_products)?$page_products:"";
    $page_pro_car = isset($page_products_card)?$page_products_card:"";
    $page_own_car = isset($page_owners_card)?$page_owners_card:"";
	$page_pro_pho = isset($page_product_photo)?$page_product_photo:"";
	$page_edi_pho = isset($page_edit_photo)?$page_edit_photo:"";
    $page_ed_pr = isset($page_products_edit)?$page_products_edit:"";
	$page_own = isset($page_owners)?$page_owners:"";
	$page_own_doc = isset($page_owners_doc)?$page_owners_doc:"";
    $page_ed_ow = isset($page_owners_edit)?$page_owners_edit:"";
    $page_offer = isset($page_send_offer)?$page_send_offer:"";
?>
<div class="text-center border-0">
	<div class="card-header pl-2">
		<ul class="nav nav-tabs card-header-tabs">
		  	<li role="presentation" class="nav-item" >
		    	<a class="nav-link text-primary <?php echo $page_pro; echo $page_pro_car; echo $page_pro_pho; echo $page_ed_pr; echo $page_offer;?>" href="products">Products</a>
		  	</li>
		  	<li role="presentation" class="nav-item" >
		   	 	<a class="nav-link text-primary <?php echo $page_own; echo $page_own_car; echo $page_own_doc; echo $page_ed_ow?>" href="owners">Owners</a>
		  	</li>
		  	<li role="presentation" class="nav-item">
		    	<a class="nav-link text-primary <?php ?>" href="#">Orders</a>
		  	</li>
		</ul>
	</div>
</div>