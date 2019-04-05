<?php
	$page_loc_1 = isset($page_location_1)?$page_location_1:"";
	$page_loc_2 = isset($page_location_2)?$page_location_2:"";
	$page_loc_3 = isset($page_location_3)?$page_location_3:"";
	
?>
	<div class="row container-fluid text-white">
		<div class="col-3 mt-4">
			<div class="btn-group-vertical btn-block">
				<ul class="navbar-nav text-info w-100">
					<li class="nav-item mb-2">
						<a href="routes.php?page=location" class="btn btn-outline-secondary btn-block <?php echo $page_loc_1;?> btn-block">Location data 1: </a>
					</li>
					<li class="nav-item text-info mb-2">
						<a href="routes.php?page=location2" class="btn btn-outline-secondary btn-block <?php echo $page_loc_2;?> btn-block">Location data 2: </a>
					</li>
					<li class="nav-item text-info mb-2">
						<a href="routes.php?page=location3" class="btn btn-outline-secondary btn-block <?php echo $page_loc_3;?> btn-block">Location data 3: </a>
					</li>
				</ul>
			</div>			
		</div>
		<div class="col mt-2">
			<?php 
			if (empty($page_loc_1)) {
				if (empty($page_loc_2)) {
					if (empty($page_loc_3)) {
						
					} else {
						include 'location_data_3.php';
					}
				} else {
					include 'location_data_2.php';
				}
			} else {
				include 'location_data_1.php';
			}
				
			?>
		</div>
	</div>			