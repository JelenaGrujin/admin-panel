<?php

		$listapotraznja=isset($nadjeno)?$nadjeno:$listapotraznja;
		//proveriti brisanje potraznje... 
?>
<div class="container-fluid">
<?php  // include 'potraznja_search.php';?>
	<form method="post" action="routes.php">
		<div class="row justify-content-start">
			<div class="col-2">
				<a  class="btn btn-outline-primary btn-block mt-3 mb-3" href="routes.php?page=nova_potraznja">+ Nova potra&#382;nja</a>
			</div>
			<div class="col-2">
				<button class="btn btn-outline-success btn-block mt-3 mb-3" type="submit" name="page" value="realizacija">Izmeni status</button>
			</div>
		</div>
	<table class="table border table-sm table-hover table-light small table table-striped">
		<thead>
			<tr class=" bg-light">
				<th class="text-dark" scope="col">izaberi</th>
				<th class="text-dark" scope="col">kartice</th>
				<th class="text-dark" scope="col">id</th>
				<th class="text-dark" scope="col">ime i prezime</th>
				<th class="text-dark" scope="col">e_mail</th>
				<th class="text-dark" scope="col">kontak</th>
				<th class="text-dark" scope="col">poslate ponude</th>
				<th class="text-dark" scope="col">tip</th>
				<th class="text-dark" scope="col">lokacija</th>
				<th class="text-dark" scope="col">struktura</th>
				<th class="text-dark" scope="col">cena</th>
				<th class="text-dark" scope="col">status ponude</th>
				<th class="text-dark" scope="col">status kontakta</th>
				<th class="text-dark" scope="col">izvor</th>
				<th class="text-dark" scope="col">datum</th>
				<th class="text-dark" scope="col">agent</th>
			</tr>
		</thead>
		<tbody id="myTable">
			<?php foreach ($listapotraznja as $pom){?>
			<tr class=" bg-muted">
				<th class="text-dark" scope="col"><input type="radio" name="id_pot" value="<?php echo $pom['id_potraznje']?>"></th>
				<td class=""><a class="text-success" href="routes.php?page=kartica_potraznje&id_potraznje=<?php echo $pom['id_potraznje']?>" >pregled</a ></td>
				<td class="text-dark">P<?php echo $pom['id_potraznje']?></td>
				<td class="text-dark"><?php echo $pom['ime_prezime_potraznje']?></td>
				<td class="text-dark"><?php echo $pom['e_mail_potraznje']?></td>
				<td class="text-dark"><?php echo $pom['kontakt_tel']?></td>
				<?php $ponude=$dao->selectFromPotraznjaNekretnineByIdPotraznje($pom['id_potraznje']);?>
				<td class="text-dark"><?php foreach ($ponude as $p) {echo $p['id_nekretnine'];}?></td>
				<td class="text-dark"><?php echo $pom['tip_nepokretnosti_p']?></td>
				<td class="text-dark"><?php echo $pom['opstina_p'].','.$pom['deo_grada_p']?></td>
				<td class="text-dark"><?php echo $pom['struktura_p']?></td>
				<td class="text-dark"><?php echo $pom['cena_od']." - ".$pom['cena_do']?></td>
				<td class="text-dark"><?php echo $pom['status_potraznje']?></td>
				<td class="text-dark"><?php echo $pom['status_kontakta']?></td>
				<td class="text-dark"><?php echo $pom['izvor_podatka_p']?></td>
				<td class="text-dark"><?php echo $pom['datum_azuriranja_p']?></td>
				<td class="text-dark"><?php echo $pom['agent_p']?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	</form>
</div>
