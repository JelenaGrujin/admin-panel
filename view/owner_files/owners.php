<?php
	$id_updated=isset($id_updated)?$id_updated:"";
?>
<div class="container-fluid">
<?php  include 'owners_search.php';?>
	<table class="table border table-sm table-hover table-light small table table-striped mt-2">
		<thead>
			<tr class=" bg-light">
      			<th class="text-dark" scope="col">View</th>
      			<th class="text-dark" scope="col">ID</th>
      			<th class="text-dark" scope="col">Name</th>
     			<th class="text-dark" scope="col">Company</th>
      			<th class="text-dark" scope="col">Address</th>
      			<th class="text-dark" scope="col">e-mail</th>
      			<th class="text-dark" scope="col">Phone</th>
      			<th class="text-dark" scope="col">Doc</th>
    		</tr>
		</thead>
		
       	<tbody id="myTable">
    		<?php foreach ($list as $li){?>
    		 <?php if ($id_updated == $li['id_owner']){ $class="class='bg-primary'";}else  $class="class='bg-white'";?>
    		<tr <?php echo $class;?>>
				<td class=""><a class="text-success" href="card&id=<?php echo $li['id_owner']?>&class=owners_card">view</a ></td>
				<td ><a href="reminder&id=<?php echo 'O'.$li['id_owner'];?>" class="badge-pill badge-primary"><?php echo 'O'.$li['id_owner']?></a></td>
				<td class="text-dark"><?php echo $li['owner_name']?></td>
				<td class="text-dark"><?php echo $li['company_name']?></td>
				<td class="text-dark"><?php echo $li['company_address']?></td>
				<td class="text-dark"><?php echo $li['e_mail']?></td>
				<td class="text-dark"><?php echo $li['phone']?></td>
				<td hidden ><?php echo $li['phone_2'];echo $li['phone_3'];echo $li['e_mail_2'];echo $li['e_mail_3'];?></td>
				<td ><a href="owners_doc&id=<?php echo $li['id_owner'];?>" class="badge-pill badge-primary">Doc</a></td>
		    </tr>
    		<?php }?>
       </tbody>
	</table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>