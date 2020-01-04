<?php
	$photos=isset($photos)?$photos:array();
	$id=isset($id)?$id:"";
?>
<div class="">
<div class="col-2 p-2 m-2">
<a class="btn btn-outline-primary form-control mt-2 pt-2 pb-2 text-center" href="edit&id=<?php echo $id;?>">Edit photos</a>
</div>
<div id="carouselExampleControls" class="carousel slide bg-light text-primary" data-ride="carousel">
  <div class="carousel-inner" >
   
   <?php $i=0; foreach ($photos as $photo) {?>
  
    <div class="carousel-item <?php if ($i==0)echo 'active'?>"><?php $i++;?>
    	<span><?php echo $i;?></span>
      <img class="d-block m-auto" style="width: 800px; height:600px;" src="public/photos/<?php echo $id;?>/<?php echo $photo['name_photo']?>" alt="<?php echo $photo['name_photo']?>">
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
