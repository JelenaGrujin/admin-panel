<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$ulogovan=unserialize($_SESSION['user']);
	
	if ($ulogovan) {
		
	$msg=isset($msg)?$msg:"";
	$nekretnine=isset($nekretnine)?$nekretnine:"";
	$klijent=isset($klijent)?$klijent:"";
	$fotografije=isset($fotografije)?$fotografije:array();
					
	
?>
<div class="">
<div class="card">
  <div id="carouselExampleControls" class="carousel slide bg-light text-primary" data-ride="carousel">
  <div class="carousel-inner" >
   
   <?php $i=1; foreach ($fotografije as $foto) {?>
  
    <div class="carousel-item <?php if ($i==1)echo 'active'?>"><?php $i++;?>
      <img class="d-block m-auto" style="width: 300px; height:225px;" src="../css/image/<?php echo $foto['naziv_slike']?>" alt="<?php echo $foto['naziv_slike']?>">
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
<?php foreach ($nekretnine as $nek) {?>
    <h5 class="card-title"> <?php echo $nek['tip_nekretnine'].' - '.$nek['opstina'].', '.$nek['adresa_nekretnine']?></h5>
    <p class="card-text"><?php echo $nek['opis']?></p>
<?php }?>
<?php foreach ($klijent as $kl) {?>
<form class="form" action="routes.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <span>tel:</span><?php //echo $kl['telefon_kontakta']?>
            <br>
            <label class="col-form-label">E mail recipient:</label>
            <input type="text" class="form-control" name="e_mail" value="<?php echo $kl['e_mail_vlasnika_nekretnine']?>" placeholder="<?php echo $kl['e_mail_vlasnika_nekretnine']?>">
            <label class="col-form-label">Title:</label>
            <input type="text" class="form-control" name="title" value="Greeting card">
            <label class="col-form-label">Message:</label>
            <textarea class="form-control" rows="3" name="message"><?php echo $kl['ime_kontakta']?> We wish you a happy birthday</textarea>
          </div>
        <button type="submit" name="page" value="send" class="btn btn-primary">Send card</button>
</form>
<?php }?>
</div>
</div>
</div>
<?php 
	} else {
		header('Location:login.php?msgg=You need to log in');
	}
?>