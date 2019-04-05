<?php
	$page_age_baza = isset($page_agent_baza)?$page_agent_baza:"";
	$page_upiage = isset($page_upisagenta)?$page_upisagenta:"";
	$page_listage = isset($page_listaagenta)?$page_listaagenta:"";
	$page_kartage = isset($page_kartica_agenta)?$page_kartica_agenta:"";
	$page_azuage = isset($page_azuriraj_agenta)?$page_azuriraj_agenta:"";

?>
	<div class="row container-fluid ml-1">
		<div class="col-2 mt-4">
			<div class="btn-group-vertical btn-block">
				<ul class="navbar-nav text-info w-100">
					<li class="nav-item mb-2">
						<a href="routes.php?page=upis_agenta" class="btn btn-outline-secondary btn-block <?php echo $page_upiage;?> btn-block">Upis Agenta</a>
					</li>
					<li class="nav-item mb-2">
						<a href="routes.php?page=lista_agenta" class="btn btn-outline-secondary btn-block <?php echo $page_listage; echo $page_kartage; echo $page_azuage; ?> btn-block">Lista Agenata</a>
					</li>
				</ul>
			</div>			
		</div>
		<div class="col mt-2">
			<?php 
			if (empty($page_upiage)) {
				if(empty($page_listage)){
					if (empty($page_kartage)) {
						if (empty($page_azuage)) {
							
						} else {
							include 'azuriranje_agenta.php';	
						}
					} else {
						include 'kartica_agenta.php';
					}
				}else {
					include 'lista_agenata.php';
				}
			} else {					
				include 'upis_agenta.php';
			}
				
			?>
		</div>
	</div>		
