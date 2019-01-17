<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	
			


	if ($user) {
		
	$photos=isset($photos)?$photos:array();
		$id_product=isset($id_product)?$id_product:"";
 	
	include 'head.php';?>
<div class="">
<div class="col-2 p-2 m-2">
<a class="btn btn-outline-primary form-control mt-2 pt-2 pb-2 text-center" href="routes.php?page=editphotos&id_pro=<?php echo $id_product;?>">Edit photos</a>
</div>
<div id="carouselExampleControls" class="carousel slide bg-light text-primary" data-ride="carousel">
  <div class="carousel-inner" >
   
   <?php $i=0; foreach ($photos as $photo) {?>
  
    <div class="carousel-item <?php if ($i==0)echo 'active'?>"><?php $i++;?>
    	<span><?php echo $i;?></span>
      <img class="d-block m-auto" style="width: 800px; height:600px;" src="../css/image/<?php echo $photo['name_photo']?>" alt="<?php echo $photo['name_photo']?>">
    </div>
    <?php }?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php 
		} else {
		  header('Location:login.php?msgg=You need to log in');
	}
?>