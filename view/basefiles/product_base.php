<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	
	$page_pro_type = isset($page_type_product)?$page_type_product:"";
	
	$page_equi = isset($page_equipment)?$page_equipment:"";

	$page_str = isset($page_structure)?$page_structure:"";
	
	
	if ($user) {
?>
	<div class="row container-fluid text-white">
		<div class="col-3 mt-4">
			<div class="btn-group-vertical btn-block">
				<ul class="navbar-nav text-info w-100">
					<li class="nav-item mb-2">
						<a href="routes.php?page=type" class="btn btn-outline-secondary <?php echo $page_pro_type;?>">Product type</a>
					</li>
					<li class="nav-item text-info mb-2">
						<a href="routes.php?page=equipment" class="btn btn-outline-secondary <?php echo $page_equi;?>">Equipment</a>
					</li>
					<li class="nav-item text-info mb-2">
						<a href="routes.php?page=structure" class="btn btn-outline-secondary <?php echo $page_str;?>">Structure</a>
					</li>
				</ul>
			</div>			
		</div>
		<div class="col mt-2">
			<?php 
			if (empty($page_pro_type)) {
				if (empty($page_equi)) {
					if (empty($page_str)) {
					
						} else {
							include 'structure.php';
						}					
					} else {
						include 'equipment.php';
					}
				} else {
					include 'product_type.php';
				}
				
			?>
		</div>
	</div>			
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>