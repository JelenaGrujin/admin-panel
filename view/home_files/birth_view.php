<div class="">
<div class="card">
  <div id="carouselExampleControls" class="carousel slide m-auto bg-light text-primary w-25" data-ride="carousel">
  <div class="carousel-inner" >
   
   <?php $i=1; foreach ($photos as $photo) {?>
  
    <div class="carousel-item <?php if ($i==1)echo 'active'?>"><?php $i++;?>
      <img class="d-block m-auto" style="width: 300px; height:225px;" src="public/photos/<?php echo $photo['id_products']?>/<?php echo $photo['name_photo']?>" alt="<?php echo $photo['name_photo']?>">
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
<div class="card-body">
<?php foreach ($products as $pr) {?>
    <h5 class="card-title"> <?php echo $pr['product_type'].' - '.$pr['location_data_2'].', '.$pr['address_location']?></h5>
    <p class="card-text"><?php echo $pr['description']?></p>
<?php }?>
<?php foreach ($owner as $ow) {?>
<form class="form" action="b_card" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <span>tel:</span><?php echo $ow['phone']?>
            <br>
            <label class="col-form-label">E mail recipient:</label>
            <input type="text" class="form-control" name="e_mail" value="<?php echo $ow['e_mail']?>" placeholder="<?php echo $ow['e_mail']?>">
            <label class="col-form-label">Title:</label>
            <input type="text" class="form-control" name="title" value="Greeting card">
            <label class="col-form-label">Message:</label>
            <textarea class="form-control" rows="3" name="message"><?php echo $ow['owner_name']?> We wish you a happy birthday</textarea>
          </div>
        <button type="submit" name="page" value="send" class="btn btn-primary">Send card</button>
</form>
<?php }?>
</div>
</div>
</div>
