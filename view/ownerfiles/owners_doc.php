<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	
	if ($user) {
		
		$docs=isset($docs)?$docs:array();
		$id_owner=isset($id_owner)?$id_owner:"";
		$errors =isset($errors)?$errors:array();
 		$broj=0;
		$ukupanbroj=count($docs);
	include 'head.php';?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">owners ID</th>
      <th scope="col">doc name</th>
      <th scope="col">view</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($docs as $dok) {?>
    <tr>
      <th scope="row"><?php echo $dok['id_doc']?></th>
      <td scope="row"><?php echo $dok['id_owner']?></td>
      <td scope="row"><?php echo $dok['name_doc']?></td>
      <td scope="row"><a href="routes.php?page=docview&name_doc=<?php echo $dok['name_doc'];?>">View doc</a></td>
      <td scope="row"><a class="text-danger text-bold" href="routes.php?page=delete_doc&id_doc=<?php echo $dok['id_doc'];?>">X</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<form class="form" action="routes.php" method="POST" enctype="multipart/form-data">
	<div class="col mt-3 mb-3">
			<span class="text-dark">Documents:</span>
			<input type="file" name="doc[]" value="" class="control-file text-dark"  multiple="multiple">
			<span class="msg"><?php if(array_key_exists('many_doc', $errors)) echo $errors['many_doc']?></span><span class="msg"><?php if(array_key_exists('ext_doc', $errors)) echo $errors['ext_doc']?></span><span class="msg"><?php if(array_key_exists('doc_ex', $errors)) echo $errors['doc_ex']?></span>
		
		<div class="col-2 mt-3 mb-3">
			<button class="btn btn-primary btn-block pt-1 pb-2" type="submit" name="page" value="add_doc"><strong>Confirm</strong></button>	
		</div>	
	</div>
</form>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>