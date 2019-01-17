<?php
	if(!isset($_SESSION['user'])) {
		session_start();
	}
	
	if ($ulogovan) {
?>
<h4 class="display-5 text-secondary mt-4">Lista agenata</h4>
<form action="routes.php" method="post">
	<table class="table table-striped border table-sm table-hover table-light small">
		<thead>
			<tr class=" bg-white">
				<th class="text-dark" scope="col">KARTICA</th>
				<th class="text-dark" scope="col"> id </th>
			    <th class="text-dark" scope="col">Ime i Prezime</th>
			    <th class="text-dark" scope="col">username</th>
			    <th class="text-dark" scope="col">adresa</th>
			    <th class="text-dark" scope="col">kontakt telefon</th>
			    <th class="text-dark" scope="col">e-mail</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($listaagenata as $la){?>
			<tr class=" bg-muted">
				
				<td class="text-dark"><a class="text-success" href="routes.php?page=kartica_agenta&id_agenta=<?php echo $la['id_agenta']?>">kartica</a ></td>
      			<td class="text-dark"><?php echo $la['id_agenta']?></td>
			    <td class="text-dark"><?php echo $la['ime_prezime_agenta']?></td>
			    <td class="text-dark"><?php echo $la['username_agenta']?></td>
			    <td class="text-dark"><?php echo $la['adresa_agenta']?></td>
			    <td class="text-dark"><?php echo $la['kontakt_telefon_agenta']?></td>
			    <td class="text-dark"><?php echo $la['email_agenta']?></td>
				
			</tr>
			<?php }?>
		</tbody>
	</table>
</form>
<?php 
	} else {
		header('Location:login.php?msgg=Morate se ulogovti');
	}
?>