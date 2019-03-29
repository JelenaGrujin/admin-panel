<?php
	$user=unserialize($_SESSION['user']);
	$page_home = isset($page_homepa)?$page_homepa:"";
	$page_product = isset($page_productpa)?$page_productpa:"";
	$page_pro_type = isset($page_basepa)?$page_basepa:"";
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="navbar-brand text-white font-weight-bold">Admin panel</div>
	<nav class="navbar navbar-expand-sm">
		<ul class="navbar-nav">
			<li class="nav-item mr-2">
				<a  class="btn btn-outline-light <?php echo $page_home;?>" href="home">HOME</a>
			</li>
			<li class="nav-item mr-2">
				<a  class="btn btn-outline-light <?php echo $page_product;?>" href="product">Poducts</a>
			</li>
			<li class="nav-item mr-2">
				<a  class="btn btn-outline-light <?php echo $page_pro_type;?>" href="type">Base</a>
			</li>
		</ul>
	</nav>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto"></ul>
		<div class="navbar-brand text-white">Logged in: <?php echo $user[0]['username']; ?></div>
		<a class="btn bg-danger text-white font-weight-bold" href="logout">Log out</a>
	</div>
</nav>
