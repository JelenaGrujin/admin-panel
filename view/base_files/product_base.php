<?php
	$page_typ = isset($page_type)?$page_type:"";
	$page_equ = isset($page_equipment)?$page_equipment:"";
	$page_str = isset($page_structure)?$page_structure:"";
    $page_hea = isset($page_heating)?$page_heating:"";
    $page_car = isset($page_carpentry)?$page_carpentry:"";
    $page_sec = isset($page_security)?$page_security:"";
    $page_gar = isset($page_garage)?$page_garage:"";
    $page_pro = isset($page_provider)?$page_provider:"";
    $page_bat = isset($page_bathroom)?$page_bathroom:"";
    $page_ter = isset($page_terrace)?$page_terrace:"";
    $page_acs = isset($page_accessories)?$page_accessories:"";
    $page_kit = isset($page_kitchen)?$page_kitchen:"";
?>
	<div class="row container-fluid text-white">
		<div class="col-3 mt-4">
			<div class="btn-group-vertical btn-block">
				<ul class="navbar-nav text-info w-100">
					<li class="nav-item mb-2">
						<a href="baseCard" class="btn btn-outline-secondary <?php echo $page_typ;?>">Type</a>
					</li>
					<li class="nav-item text-info mb-2">
						<a href="equipment" class="btn btn-outline-secondary <?php echo $page_equ;?>">Equipment</a>
					</li>
					<li class="nav-item text-info mb-2">
						<a href="structure" class="btn btn-outline-secondary <?php echo $page_str;?>">Structure</a>
					</li>
                    <li class="nav-item mb-2">
                        <a href="heating" class="btn btn-outline-secondary <?php echo $page_hea;?>">Heating</a>
                    </li>
                    <li class="nav-item text-info mb-2">
                        <a href="carpentry" class="btn btn-outline-secondary <?php echo $page_car;?>">Carpentry</a>
                    </li>
                    <li class="nav-item text-info mb-2">
                        <a href="security" class="btn btn-outline-secondary <?php echo $page_sec;?>">Security</a>
                    </li>
                    <li class="nav-item text-info mb-2">
                        <a href="garage" class="btn btn-outline-secondary <?php echo $page_gar;?>">Garage</a>
                    </li>
                    <li class="nav-item text-info mb-2">
                        <a href="provider" class="btn btn-outline-secondary <?php echo $page_pro;?>">Provider</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="bathroom" class="btn btn-outline-secondary <?php echo $page_bat;?>">Bathroom</a>
                    </li>
                    <li class="nav-item text-info mb-2">
                        <a href="terrace" class="btn btn-outline-secondary <?php echo $page_ter;?>">Terrace</a>
                    </li>
                    <li class="nav-item text-info mb-2">
                        <a href="accessories" class="btn btn-outline-secondary <?php echo $page_acs;?>">Accessories</a>
                    </li>
                    <li class="nav-item text-info mb-2">
                        <a href="kitchen" class="btn btn-outline-secondary <?php echo $page_kit;?>">Kitchen</a>
                    </li>
				</ul>
			</div>			
		</div>
		<div class="col mt-2">
			<?php
			    include 'products_cards.php';
			?>
		</div>
	</div>			
