<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	
	$page_reali_baza = isset($page_realizacija_baza)?$page_realizacija_baza:"";
	
	if ($ulogovan) {
?>
	<div class="row container-fluid ml-1">
		<div class="col-3 mt-4">
			<div class="btn-group-vertical btn-block">
				<ul class="navbar-nav text-info w-100">
					<li class="nav-item mb-2">
						<a href="routes.php?page=potraznja_baza" class="btn btn-outline-secondary <?php echo $page_reali_baza;?>">Status potra&#382;nje</a>
					</li>
				</ul>
			</div>			
		</div>
		<div class="col mt-2">
			<?php 
			if (empty($page_reali_baza)) {
				
			} else {					
				include 'realizacija_baza.php';
			}
				
			?>
		</div>
	</div>			
<?php 
	} else {
		header('Location:login.php?msgg=Morate se ulogovti');
	}
?>