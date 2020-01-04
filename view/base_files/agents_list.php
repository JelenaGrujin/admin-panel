<?php $id_updated=isset($id_updated)?$id_updated:null;?>
<h4 class="display-5 text-secondary mt-4">Agents list</h4>
	<table class="table table-striped border table-sm table-hover table-light small">
		<thead>
			<tr class=" bg-white">
				<th class="text-dark" scope="col">CARD</th>
				<th class="text-dark" scope="col"> id </th>
			    <th class="text-dark" scope="col">Name Surname</th>
			    <th class="text-dark" scope="col">username</th>
			    <th class="text-dark" scope="col">address</th>
			    <th class="text-dark" scope="col">phone</th>
			    <th class="text-dark" scope="col">e-mail</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($agent_list as $la){?><?php $id_updated == $la['id_users']?$class="class='bg-primary'":$class="class='bg-white'";?>
            <tr <?php echo $class;?> >
				<td class="text-dark"><a class="text-success" href="agent_card&id_users=<?php echo $la['id_users']?>">CARD</a ></td>
      			<td class="text-dark"><?php echo $la['id_users']?></td>
			    <td class="text-dark"><?php echo $la['name_surname']?></td>
			    <td class="text-dark"><?php echo $la['username']?></td>
			    <td class="text-dark"><?php echo $la['address']?></td>
			    <td class="text-dark"><?php echo $la['phone']?></td>
			    <td class="text-dark"><?php echo $la['e_mail']?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>