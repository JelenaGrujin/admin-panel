<?php
	$page_new = isset($page_new_product)?$page_new_product:"";
?>
<nav class="navbar navbar-expand-lg navbar-dark">
	<nav class="navbar navbar-expand-sm">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="new_product" class="btn btn-outline-primary <?php echo $page_new;?> ml-2">+ New product</a>
			</li>
	    </ul>
	</nav>
</nav>