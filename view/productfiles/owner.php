<?php
	$msg=isset($msg)?$msg:"";
	
	$page_cor = isset($page_corporate)?$page_corporate:"";
	$page_per = isset($page_personal)?$page_personal:"";		
?>	

	<div class="row text-white">
		<div class="col-1 mt-4 p-0">
			<div class="btn-group-vertical">
				<span class="text-primary mb-2"><strong>Owner type:</strong></span>
				<ul class="navbar-nav text-white">
					<li class="nav-item mb-2">
						<a href="corporate" class="btn btn-outline-primary <?php echo $page_cor;?>">corporate</a>
					</li>
					<li class="nav-item">
						<a href="personal" class="btn btn-outline-primary <?php echo $page_per;?>">personal</a>
					</li>
				</ul>
			</div>			
		</div>
		<div class="col mt-2">
				<?php 
					if (empty($page_cor)) {
						if (empty($page_per)) {
							
						} else {
							include 'personal.php';
						}
					} else {
						include 'corporate.php';
					}
					
				?>
			</div>
		</div>
