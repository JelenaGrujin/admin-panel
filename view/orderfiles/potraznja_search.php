<form class="form" action="routes.php" method="POST">
<div class="row text-primary bg-white mt-2 border-top-0">

	<div class="col-2">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">od:</div>
        </div>
        <input type="text" name="datum_od" class="form-control" placeholder="dd-mm-GGGG">
      </div>
	</div>
	<div class="col-2">      
		<div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">do:</div>
        </div>
        <input type="text" name="datum_do" class="form-control" placeholder="dd-mm-GGGG">
      </div>
	</div>
	<div class="col-2">
		<div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">od:</div>
        </div>
        <input type="text" name="cena_od" class="form-control" placeholder="cena">
      </div>
	</div>
	<div class="col-2">
		<div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">do:</div>
        </div>
        <input type="text" name="cena_do" class="form-control" placeholder="cena">
      </div>
	</div>
 	<div class="col-2">
		 <button type="submit" name="page" value="pretraga_potraznje" class="btn btn-primary">Pretraži</button>
	</div>
	<div class="col-2">
		<input class="form-control" id="myInput" type="text" placeholder="Ključna reč...">
 	</div>
</div>
</form>

