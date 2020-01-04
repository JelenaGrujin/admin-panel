<?php
$page_type = isset($Type)?$Type:"";
$page_equipment = isset($Equipment)?$Equipment:"";
$page_structure = isset($Structure)?$Structure:"";
$page_heating = isset($Heating)?$Heating:"";
$page_carpentry = isset($Carpentry)?$Carpentry:"";
$page_security = isset($Security)?$Security:"";
$page_garage = isset($Garage)?$Garage:"";
$page_provider = isset($Provider)?$Provider:"";
$page_bathroom = isset($Bathroom)?$Bathroom:"";
$page_terrace = isset($Terrace)?$Terrace:"";
$page_accessories = isset($Accessories)?$Accessories:"";
$page_kitchen = isset($Kitchen)?$Kitchen:"";

$page_loc_1 = isset($page_location_1)?$page_location_1:"";
$page_loc_2 = isset($page_location_2)?$page_location_2:"";
$page_loc_3 = isset($page_location_3)?$page_location_3:"";

$page_orders = isset($page_orders_base)?$page_orders_base:"";

$page_age_base = isset($page_agent_base)?$page_agent_base:"";
$page_sign = isset($page_sign_in)?$page_sign_in:"";
$page_agents = isset($page_agent_list)?$page_agent_list:"";
$page_card = isset($page_agent_card)?$page_agent_card:"";


?>
		<?php include 'view/app_nav.php';?>
		<div class="wrapper bg-white ml-3 mr-3">
			<?php include 'base_nav.php';?>
			<span class="text-dark">
			<?php
            if (isset($msg))
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>'.$msg.'</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>'
            ?>
			</span>
			<div class="row bg-white">
				<div class="container-fluid pl-3 pr-3">
					<div class="row ml-0 mr-0 pt-2 pb-2 pl-2">
				 		<h1 class="form-signin-heading text-muted">Base data:</h1>	
				 	</div>
				 		<div class="row container">
						<?php 
						if (empty($page_type) && empty($page_equipment)&& empty($page_structure)&& empty($page_heating)&& empty($page_carpentry)&& empty($page_security)&& empty($page_garage)&& empty($page_provider)&& empty($page_bathroom)&& empty($page_terrace)&& empty($page_accessories)&& empty($page_kitchen)) {
							if (empty($page_loc_1) && empty($page_loc_2) && empty($page_loc_3)) {
									if (empty($page_orders)){
										if (empty($page_age_baza) && empty($page_sign) &&empty($page_agents) && empty($page_card)) {
								
										} else {
											include 'agent_nav.php';
										}
									}else {
										include 'orders.php';
									}
							} else {
								include 'location.php';
							}
						} else {
							include 'product_base.php';
						}
						?>	
						</div>
					</div>
				</div>
		</div>
