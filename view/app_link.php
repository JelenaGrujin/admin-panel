<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	$msg=isset($msg)?$msg:"";
	
	$page_list_product = isset($page_list_productpa)?$page_list_productpa:"";
	$page_own = isset($page_owners)?$page_owners:"";
	$page_pon = isset($page_ponuda)?$page_ponuda:"";
	$page_pro_pho = isset($page_product_photo)?$page_product_photo:"";
	$page_edi_pho = isset($page_edit_photo)?$page_edit_photo:"";
	$page_own_doc = isset($page_owners_doc)?$page_owners_doc:"";
	$page_pro_car = isset($page_product_card)?$page_product_card:"";
	$page_ed_car = isset($page_edit_card)?$page_edit_card:"";
	$page_own_car = isset($page_owner_card)?$page_owner_card:"";
	$page_edi_own = isset($page_edit_owner)?$page_edit_owner:"";
	
	if ($user) {
?>

		<?php include 'app_nav.php';?>
		<?php include 'nav.php';?>
		<div class="wrapper bg-faded ml-2 mr-2">
			<?php include 'productfiles/product_nav.php';?>
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
				if (empty($page_list_product)) {
					if (empty($page_own)) {
						if (empty($page_pro_car)) {
							if (empty($page_ed_car)) {
								if (empty($page_own_car)) {
									if (empty($page_edi_own)) {
										if (empty($page_own_doc)){
											if (empty($page_edi_pho)) {
												if (empty($page_pro_pho)) {
																
													header('Location:homefiles/home.php');
															
												} else {
													include 'product_photo.php';
												}	
											} else {
												include 'edit_photo.php';
											}
										}else {
											include 'owners_doc.php';
										}
									} else {
										include 'ownerfiles/edit_owner.php';										}
								} else {
									include 'ownerfiles/owner_card.php';	
								}
							} else {									
								include 'productfiles/edit_card.php';
							}
						} else {
							include 'productfiles/product_card.php';
						}
					} else {
						include 'ownerfiles/owners.php';
					}
				} else {
					include 'productfiles/product.php';
				}
			?>
		</div>
