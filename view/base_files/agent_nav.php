<?php
	$page_sign = isset($page_sign_in)?$page_sign_in:"";
    $page_agents = isset($page_agent_list)?$page_agent_list:"";
	$page_card = isset($page_agent_card)?$page_agent_card:"";
	$page_ed_agent = isset($page_agent_edit)?$page_agent_edit:"";

?>
	<div class="row container-fluid ml-1">
		<div class="col-2 mt-4">
			<div class="btn-group-vertical btn-block">
				<ul class="navbar-nav text-info w-100">
					<li class="nav-item mb-2">
						<a href="agent" class="btn btn-outline-secondary btn-block <?php echo $page_agents; echo $page_card; echo $page_ed_agent; ?> btn-block">Agents list</a>
					</li>
                    <li class="nav-item mb-2">
                        <a href="new_agent" class="btn btn-outline-secondary btn-block <?php echo $page_sign;?> btn-block">New Agent</a>
                    </li>
				</ul>
			</div>			
		</div>
		<div class="col mt-2">
			<?php 
			if (empty($page_sign)) {
				if(empty($page_agents)){
					if (empty($page_card)) {
						if (empty($page_ed_agent)) {
							
						} else {
							include 'agent_edit.php';
						}
					} else {
						include 'agent_card.php';
					}
				}else {
					include 'agents_list.php';
				}
			} else {					
				include 'sign_in.php';
			}
			?>
		</div>
	</div>		
