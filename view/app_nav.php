<?php
	$page_home = isset($page_home)?$page_home:"";
	$page_pro = isset($page_product)?$page_product:"";
	$page_bas = isset($page_base)?$page_base:"";
	//$user=unserialize($_SESSION['user']);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="navbar-brand text-white font-weight-bold">Admin panel</div>
	<nav class="navbar navbar-expand-sm">
		<ul class="navbar-nav">
			<li class="nav-item mr-2">
				<a  class="btn btn-outline-light <?php echo $page_home;?>" href="home">HOME</a>
			</li>
			<li class="nav-item mr-2">
				<a  class="btn btn-outline-light <?php echo $page_pro;?>" href="products">Poducts</a>
			</li>
			<li class="nav-item mr-2">
				<a  class="btn btn-outline-light <?php echo $page_bas;?>" href="baseCard">Base</a>
			</li>
		</ul>
	</nav>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto"></ul>
		<div class="navbar-brand text-white">Logged in: <?php //echo $user->getUsername(); ?></div>
		<a class="btn bg-danger text-white font-weight-bold" href="logout">Log out</a>
	</div>
</nav>
