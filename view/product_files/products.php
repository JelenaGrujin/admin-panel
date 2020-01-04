<?php
$id_updated=isset($id_updated)?$id_updated:null;
	$owner=new \Admin\model\OwnersDao();
?>

<div class="container-fluid">
    <form method="post" action="send_offer">
<?php  include 'product_search.php';?>
		<div class="row m-1">
		<div class="col">
		<?php foreach ($list as $li) {?>
		<?php if ($li['active_data']== date('d-m-Y')){?>
		*<a class="badge-pill badge-danger" href="card&id=<?php echo $li['id_products']?>&class=product" ><?php echo $li['id_products']?></a>
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
				<?php foreach ($list as $pom){
				$ow=$owner->selectById($pom['id_owner']);?>
				 <?php $id_updated == $pom['id_products']?$class="class='bg-primary'":$class="class='bg-white'";?>
				 	<tr <?php echo $class;?> >
					<td hidden ><?php foreach ($ow as $tv) echo $tv['phone'];?></td>
					<td class="text-dark" ><input type="radio" name="id" value="<?php echo $pom['id_products']?>"></td>
					<?php if ($pom['active']=='Pasive'){ $clasa="class='text-danger'";}else  $clasa="class='text-success'";?>
					<td ><a <?php echo $clasa;?> href="card&id=<?php echo $pom['id_products']?>">view</a></td>
					<td ><a href="reminder&id=<?php echo 'P'.$pom['id_products'];?>" class=" badge-pill badge-primary"><?php echo 'P'.$pom['id_products']?></a></td>
					<td class="text-dark"><?php echo $pom['date_update']?></td>
					<td class="text-dark"><?php echo $pom['product_type']?></td>
					<td class="text-dark"><?php echo $pom['equipment']?></td>
					<td <?php echo $clasa;?>><?php echo number_format($pom['price'],2,",",".")?></td>
					<td class="text-dark"><?php foreach ($ow as $tv) echo $tv['type_owner'];?></td>
					<td class="text-dark"><a class=" badge-pill badge-primary" href="photo_card&id=<?php echo $pom['id_products']?>" >photo</a></td>
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