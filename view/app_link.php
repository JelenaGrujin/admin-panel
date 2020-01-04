<?php

use Admin\controller\Login;

$msg=isset($msg)?$msg:"";
	
	$page_pro = isset($page_products)?$page_products:"";
	$page_own = isset($page_owners)?$page_owners:"";
	$page_pro_pho = isset($page_product_photo)?$page_product_photo:"";
	$page_own_doc = isset($page_owners_doc)?$page_owners_doc:"";
	$page_pro_car = isset($page_products_card)?$page_products_card:"";
	$page_ed_pr = isset($page_products_edit)?$page_products_edit:"";
	$page_own_car = isset($page_owners_card)?$page_owners_card:"";
	$page_ed_ow = isset($page_owners_edit)?$page_owners_edit:"";
	$page_offer = isset($page_send_offer)?$page_send_offer:"";
	$page_ed_aget = isset($page_agent_edit)?$page_agent_edit:"";
?>
		<?php include 'app_nav.php';?>
		<?php include 'nav.php';?>
		<div class="wrapper bg-faded ml-2 mr-2">
			<?php include 'product_files/product_nav.php';?>
			<span class="text-dark">
			<?php 
			if (!empty($msg)) 
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>$msg</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>'
			?>
			</span>
 			<?php 
				if (empty($page_pro)) {
					if (empty($page_own)) {
					    if (empty($page_pro_car)) {
					        if (empty($page_own_car)) {
					            if (empty($page_pro_pho)) {
                                    if (empty($page_own_doc)){
                                        if (empty($page_ed_pr)){
                                            if (empty($page_ed_ow)) {
                                                if (empty($page_offer)) {
                                                    if (empty($page_ed_aget)) {
                                                               /*if (empty($page_pro_pho)) {
                                                                      if (empty($page_nov_pot)) {
                                                                           if (empty($page_reali)){*/
																			/*}else {
																				include 'realizacija.php';;
																		}
																	} else {
																		include 'potvrdi_potraznju.php';
																	}
																} else {
																include 'product_photo.php';
															}*/
                                                    } else {
                                                        include 'base_files/agent_edit.php';
                                                    }
                                                } else {
                                                    include 'product_files/send_offer.php';
                                                }
                                            } else {
                                                include 'owner_files/edit_owner.php';
                                            }
                                        }else {
                                            include 'product_files/edit_product.php';
                                        }
                                    }else {
                                        include 'owner_files/owners_doc.php';
                                    }
					            } else {
                                  include 'product_files/product_photo.php';
                                }
					        } else {
					            include 'owner_files/owner_card.php';
							}
						} else {
							include 'product_files/product_card.php';
						}
					} else {
						include 'view/owner_files/owners.php';
					}
				} else {
					include 'view/product_files/products.php';
				}
			?>
		</div>
