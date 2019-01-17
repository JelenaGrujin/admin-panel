<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	$user=unserialize($_SESSION['user']);
	
	if ($user) {
		
	$msg=isset($msg)?$msg:"";
	$kukipro=isset($_COOKIE['kukit'])?$_COOKIE['kukit']:"";
	$kukiown=isset($_COOKIE['kukio'])?$_COOKIE['kukio']:"";
	$makemonth=date("d-m-Y", strtotime("+1 months")); 
	$makeweek=date("d-m-Y", strtotime("+1 week")); 
	$makeday=date("d-m-Y", strtotime("+1 day"));
	$maked=date("d-m-Y", strtotime("-1 day"));
					
	
?>
<div class="">
		<div class="row wrapper bg-faded ml-3 mr-3">
			<div class="col-3 bg-white mr-1">
				<div class="text-dark border-bottom pt-2 pb-2"><strong>Calendar of activities</strong></div>
				<div class="row border-bottom">
					<div class="col-6">
						<div class="small text-muted pt-2 pb-2">Activity</div>
					</div>
					<div class="col-2">
						<div class="small text-muted pt-2 pb-2">ID</div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2">Time</div>
					</div>
				</div>
				<?php foreach ($productlist as $pom){?>
				<?php if ($maked== $pom['date_update']){?>
				<div class="row">
					<div class="col-6">
						<div class="small text-muted pt-2 pb-2">Updated product:</div>
						</div>
					<div class="col-2">
						<div class="small pt-2 pb-2"><a href="routes.php?page=productcard&id_product=<?php echo $pom['id_products']?>" class=" badge-pill badge-warning"><?php echo $pom['id_products'] ?></a></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo $pom['date_update'];?></div>
						
					</div>
				</div>
				<?php }?>
				<?php }?>
				<?php if (!empty($kukipro)){?>
				<?php foreach ($kukipro as $v=>$k) {?>
			 	<div class="row">
					<div class="col-6">
						<div class="small text-muted pt-2 pb-2">Reminder:</div>
					</div>
					<div class="col-2">
					<div class="small text-muted pt-2 pb-2"><a href="routes.php?page=unsetreminder&id_pro=<?php echo $v;?>" class=" badge-pill badge-primary"><?php echo $v;?></a></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo $k;?></div>
					</div>
				</div> 
				<?php }?>
				<?php }?>
				<?php if (!empty($kukiown)){?>
				<?php foreach ($kukiown as $k=>$o) {?>
			 	<div class="row">
					<div class="col-6">
						<div class="small text-muted pt-2 pb-2">Reminder:</div>
					</div>
					<div class="col-2">
					<div class="small text-muted pt-2 pb-2"><a href="routes.php?page=unsetremindero&id_own=<?php echo $k;?>" class=" badge-pill badge-primary"><?php echo $k;?></a></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo $o;?></div>
					</div>
				</div> 
				<?php }?>
				<?php }?>
			</div>
			<div class="col bg-white mr-1">
				<div class="text-dark bg-muted border-bottom pt-2 pb-2"><strong>Activities</strong></div>
				<div class="row border-bottom">
					<div class="col-2">
						<div class="small text-muted pt-2 pb-2">ID</div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2">Type</div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2">Location</div>
					</div>
					<div class="col-2">
						<div class="small text-muted pt-2 pb-2">Activiti</div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2">Price</div>
					</div>
				</div>
				
				<?php foreach ($productlist as $pom){?>
				<?php if ($makemonth==$pom['active_data']||$makeweek==$pom['active_data']||$makeday==$pom['active_data']){?>
				<div class="row">
					<div class="col-2">
						<div class="small text-muted pt-2 pb-2"><a href="routes.php?page=productcard&id_product=<?php echo $pom['id_products']?>" class=" badge-pill badge-danger"><?php echo $pom['id_products'];?></a></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo $pom['model'];?></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo $pom['location_data_1'],$pom['location_data_2'],$pom['location_data_3'];?></div>
					</div>
					<div class="col-2">
						<div class="small text-danger pt-2 pb-2"><?php echo $pom['date'];?></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo number_format($pom['price'],2,",",".");?></div>
					</div>
				</div>
					<?php }?>
					<?php }?>
				
			</div>
			<div class="col-3 bg-white">
				<div class="text-dark bg-muted border-bottom pt-2 pb-2"><strong>Birthdays</strong></div>
				<div class="row border-bottom">
					<div class="col-2">
						<div class="small text-muted pt-2 pb-2">ID</div>
					</div>
					<div class="col-6">
						<div class="small text-muted pt-2 pb-2">Name</div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2">Date</div>
					</div>
				</div>
				<?php foreach ($ownerlist as $liko){?>
				<?php if ($liko['b_day']){ $d=strtotime($liko['b_day']); $bd=date("d-m-", $d);?>
				<?php if ($makeweek == $bd.date("Y")){?>
				<div class="row">
					<div class="col-2">
						<div class="small pt-2 pb-2"><a href="routes.php?page=birth_view&id_owner=<?php echo $liko['id_owner']?>" class=" badge-pill badge-info"><?php echo $liko['id_owner'];?></a></div>
					</div>
					<div class="col-6">
						<div class="small text-muted pt-2 pb-2"><?php echo $liko['name_surname'];?></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php  echo $bd.date("Y"); ?></div>
					</div>
				</div>
				<?php }?>
				<?php }?>
				<?php }?>
			</div>
		</div>
</div>
<?php 
	} else {
		header('Location:../login.php?msgg=You need to log in');
	}
?>