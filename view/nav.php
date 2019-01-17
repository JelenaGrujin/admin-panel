<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	$page_new = isset($page_new_product)?$page_new_product:"";
	if ($ulogovan) {
?>
<nav class="navbar navbar-expand-lg navbar-dark">
	<nav class="navbar navbar-expand-sm">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="routes.php?page=new_product" class="btn btn-outline-primary <?php echo $page_new;?> ml-2">+ New product</a>
			</li>
	    </ul>
	</nav>
</nav>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>