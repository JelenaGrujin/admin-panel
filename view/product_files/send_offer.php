<form class="form" action="send" method="POST" enctype="multipart/form-data">
<?php foreach ($product as $pr) {?>
  <div class="row">
    <div class="col-4 m-2">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="e_mail">
  </div>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" value="Offer" name="title">
  </div>
  </div>
  <div class="col-5 m-2">
   <div class="form-group">
    <label>Message</label>
   <textarea class="form-control" name="message" rows="7"><?php echo $pr['description'];?></textarea>
  </div>
  </div>
</div>
	<div class="row">
	<input type="hidden" name="offer_status" value="sent" >
	<input type="hidden" name="id" value="<?php echo $pr['id_products'];?>" >
	<input type="hidden" name="business_status" value="<?php $pr['business_status']?>" >
  	<div class="col-3 mt-3 ml-5">
		<button class="btn btn-sm btn-block btn-primary" type="submit" name="page" value="send"><strong>Send</strong></button>
	</div>
	</div>
	<?php }?>
</form>