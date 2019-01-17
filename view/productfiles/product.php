<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	$id_updated=isset($id_updated)?$id_updated:"";
	$productlist=isset($pretrazeno)?$pretrazeno:$productlist;
	if ($user) {
?>

<div class="container-fluid">
<?php  include 'product_search.php';?>	
<form class="mb-2" method="post" action="routes.php">
		<div class="row m-1">
		<div class="col">
		<?php foreach ($productlist as $li) {?>
		<?php if ($li['active_data']== date('d-m-Y')){?>
		*<a class="badge-pill badge-danger" href="routes.php?page=productcard&id_product=<?php echo $li['id_products']?>" ><?php echo $li['id_products']?></a>
		<?php } }?>
		</div>
		</div>
		<table class="table border table-sm table-hover table-light small table table-striped mt-2">
			<thead>
				<tr class=" bg-light">
					<th class="text-dark" scope="col">Check</th>
					<th class="text-dark" scope="col">View</th>
					<th class="text-dark" scope="col">ID</th>
					<th class="text-dark" scope="col">Updated</th>
					<th class="text-dark" scope="col">Type</th>
					<th class="text-dark" scope="col">Equipment</th>
					<th class="text-dark" scope="col">Price</th>
					<th class="text-dark" scope="col">Owners</th>
					<th class="text-dark" scope="col">Photos</th>
				</tr>
			</thead>
				<tbody id="myTable">
				<?php foreach ($productlist as $pom){
				$ownertype=$this->daoowner->selectFromOwnersById($pom['id_owner']);?>
				 <?php if ($id_updated == $pom['id_products']){  $class="class='bg-warning'";}else  $class="class='bg-muted'";?>
				 	<tr class=" bg-white">
					<td hidden ><?php foreach ($ownertype as $tv) echo $tv['phone'];?></td>
					<td class="text-dark" ><input type="radio" name="id_pro" value="<?php echo $pom['id_products']?>"></td>
					<?php if ($pom['active']=='Pasive'){ $clasa="class='text-danger'";}else  $clasa="class='text-success'";?>
					<td ><a <?php echo $clasa;?> href="routes.php?page=view_product_card&id_pro=<?php echo $pom['id_products']?>" >view</a></td>
					<td ><a href="routes.php?page=kliknek&id_product=<?php echo $pom['id_products'];?>" class=" badge-pill badge-primary"><?php echo $pom['id_products']?></a></td>
					<td class="text-dark"><?php echo $pom['date_update']?></td>
					<td class="text-dark"><?php echo $pom['product_type']?></td>
					<td class="text-dark"><?php echo $pom['equipment']?></td>
					<td <?php echo $clasa;?>><?php echo number_format($pom['price'],2,",",".")?></td>
					<td class="text-dark"><?php foreach ($ownertype as $tv) echo $tv['type_owner'];?></td>
					<td class="text-dark"><a class=" badge-pill badge-primary" href="routes.php?page=show_photos&id_product=<?php echo $pom['id_products']?>" >photo</a></td>
				</tr>
				<tr class=" bg-light">
					<td class="text-dark" scope="row" colspan="18">note for product ID <?php echo $pom['id_products']?>: <?php echo $pom['note']?></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
<script>
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").each(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
</form>	
</div>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>