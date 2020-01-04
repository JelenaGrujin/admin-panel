<div class="">
		<div class="row wrapper bg-faded ml-3 mr-3">
			<div class="col-3 bg-white mr-1">
				<div class="text-dark border-bottom pt-2 pb-2"><strong>Calendar of activities</strong></div>
				<div class="row border-bottom">
					<div class="col">
						<div class="small text-muted pt-2 pb-2">Activity</div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2">ID</div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2">Time</div>
					</div>
				</div>
				<?php if (!empty($cookie)){?>
				<?php foreach ($cookie as $v=>$k) {?>
			 	<div class="row">
					<div class="col">
						<div class="small text-muted pt-2 pb-2">Reminder:</div>
					</div>
					<div class="col">
					<div class="small text-muted pt-2 pb-2"><a href="unset&id=<?php echo $v;?>" class=" badge-pill badge-primary"><?php echo $v;?></a></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo $k;?></div>
					</div>
				</div> 
				<?php }?>
				<?php }?>
			</div>
			<div class="col bg-white mr-1">
				<div class="text-dark bg-muted border-bottom pt-2 pb-2"><strong>Activities</strong></div>
				<div class="row border-bottom">
					<div class="col-1">
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
				<?php foreach ($product_list as $pom){?>
				<?php if ($make_month==$pom['active_data']||$make_week==$pom['active_data']||$make_day==$pom['active_data']){?>
				<div class="row">
					<div class="col-1">
						<div class="small text-muted pt-2 pb-2"><a href="card&id=<?php echo $pom['id_products']?>&class=products_card" class=" badge-pill badge-danger"><?php echo $pom['id_products'];?></a></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo $pom['product_type'];?></div>
					</div>
					<div class="col">
						<div class="small text-muted pt-2 pb-2"><?php echo $pom['location_data_1'],$pom['location_data_2'],$pom['location_data_3'];?></div>
					</div>
					<div class="col-2">
						<div class="small text-danger pt-2 pb-2"><?php echo $pom['active_data'];?></div>
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
				<?php foreach ($owner_list as $owli){?>
				<?php if ($owli['b_day']){ $d=strtotime($owli['b_day']); $bd=date("d-m-", $d);?>
				<?php if ($make_week == $bd.date("Y")){?>
				<div class="row">
					<div class="col-2">
						<div class="small pt-2 pb-2"><a href="b_day&id=<?php echo $owli['id_owner']?>" class=" badge-pill badge-info"><?php echo $owli['id_owner'];?></a></div>
					</div>
					<div class="col-6">
						<div class="small text-muted pt-2 pb-2"><?php echo $owli['owner_name'];?></div>
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