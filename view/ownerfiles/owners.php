<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	$id_updated=isset($id_updated)?$id_updated:"";
	
	if ($user) {
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
    		<?php foreach ($ownerslist as $liko){?>
    		 <?php if ($id_updated == $liko['id_owner']){ $class="class='bg-warning'";}else  $class="class='bg-muted'";?>
    		<tr <?php echo $class;?>>
				<td class=""><a class="text-success" href="#">view</a ></td>
				<td ><a href="#" class="badge-pill badge-primary"><?php echo $liko['id_owner']?></a></td>
				<td class="text-dark"><?php echo $liko['owner_name']?></td>
				<td class="text-dark"><?php echo $liko['company_name']?></td>
				<td class="text-dark"><?php echo $liko['company_adres']?></td>
				<td class="text-dark"><?php echo $liko['e_mail']?></td>
				<td class="text-dark"><?php echo $liko['phone']?></td>
				<td hidden ><?php echo $liko['phone_2'];echo $liko['phone_3'];echo $liko['e_mail_2'];echo $liko['e_mail_3'];?></td>
				<td ><a href="routes.php?page=owners_doc&id_owner=<?php echo $liko['id_owner'];?>" class="badge-pill badge-primary">Doc</a></td>
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

<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>