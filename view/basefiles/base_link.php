<?php
$msg=isset($msg)?$msg:"";

$page_pro_type = isset($page_type_product)?$page_type_product:"";
$page_equi = isset($page_equipment)?$page_equipment:"";
$page_str = isset($page_structure)?$page_structure:"";

$page_loc_1 = isset($page_location_1)?$page_location_1:"";
$page_loc_2 = isset($page_location_2)?$page_location_2:"";
$page_loc_3 = isset($page_location_3)?$page_location_3:"";


$page_pot_baza = isset($page_potraznja_baza)?$page_potraznja_baza:"";

$page_age_baza = isset($page_agent_baza)?$page_agent_baza:"";
$page_upiage = isset($page_upisagenta)?$page_upisagenta:"";
$page_listage = isset($page_listaagenta)?$page_listaagenta:"";
$page_kartage = isset($page_kartica_agenta)?$page_kartica_agenta:"";
$page_azuage = isset($page_azuriraj_agenta)?$page_azuriraj_agenta:"";
$cont = isset($container)?$container:"";

?>
	<?php include 'app_nav.php';?>
		<div class="wrapper bg-faded ml-3 mr-3">
			<?php include 'base_nav.php';?>
			<span class="text-dark">
			<?php 
			if (!empty($msg)) 
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$msg.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button>
					</div>'
			?>
			</span>
			<div class="row bg-light">
				<div class="container-fluid pl-3 pr-3">
					<div class="row bg-white ml-0 mr-0 pt-2 pb-2 pl-2">
				 		<h1 class="form-signin-heading text-muted">Base data:</h1>	
				 	</div>
				 		<div class="row <?php echo $cont;?>">
						<?php 
						if (empty($page_pro_type) && empty($page_equi)&& empty($page_str)) {
							if (empty($page_loc_1) && empty($page_loc_2) && empty($page_loc_3)) {
									if (empty($page_pot_baza)){
										if (empty($page_age_baza) && empty($page_upiage) &&empty($page_listage) && empty($page_kartage) && empty($page_azuage)) {
								
										} else {
											include 'agent_baza.php';
										}
									}else {
										include 'potraznja_baza.php';
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
		<?php include 'footer.php';?>
