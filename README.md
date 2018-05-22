<html>
<head>
<title>Demo, prikaz forme</title>
<meta charset="utf-8">
<link  rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
 
$dv= isset($_GET["dv"])?$_GET["dv"]:"";	
$velicina= isset($_GET["velicina"])?$_GET["velicina"]:"";
$ime= isset($_GET["ime"])?$_GET["ime"]:"";	
$telefon= isset($_GET["telefon"])?$_GET["telefon"]:"";	
$komentar= isset($_GET["komentar"])?$_GET["komentar"]:"";	

$dodaci= isset($_GET["dodaci"])?$_GET["dodaci"]:array();	
	// mora prazan niz kada je checkbox u pitanju

?>

<div id="menu">
<form action="controller.php" method="GET" align="center">

<h2>Vencanje iz snova</h2>
<span class="poruka"> * POLJA SA ZVEZDICOM OBAVEZNO POPUNITE </span>
<p>
Upisite datum vencanja <span class="poruka" >*</span>
<input type="date" name="dv" value="<?php echo $dv?>">

<h3>broj gostiju</h3>
<p>
<input type="radio" name="velicina" value="mala" <?php if($velicina=="mala") echo "checked";?>> <span class="poruka">*</span> do 150 <br>
<input type="radio" name="velicina" value="srednja" <?php if($velicina=="srednja") echo"checked";?>> <span class="poruka">*</span> 150 - 250 <br>
<input type="radio" name="velicina" value="velika" <?php if($velicina=="velika") echo "checked";?>> <span class="poruka">*</span> 250 - 400 <br>
</p>

<h3>Dodaci</h3>

<input type="checkbox" name="dodaci[]" value="maticar" <?php if(in_array("maticar",$dodaci)) echo "checked"?> > Maticar
<input type="checkbox" name="dodaci[]" value="kicenje" <?php if(in_array("kicenje",$dodaci)) echo "checked"?> > Kicenje
<input type="checkbox" name="dodaci[]" value="muzika"<?php if(in_array("muzika",$dodaci)) echo "checked"?> > Muzika
<input type="checkbox" name="dodaci[]" value="hrana"<?php if(in_array("hrana",$dodaci)) echo"checked"?> > Hrana
<h3>Podaci o naruciocu:</h3>
<p>
Ime:<span class="poruka">*</span> <input type="text" name="ime" value="<?php echo $ime ?>"></p>
<p>
Telefon:<span class="poruka">*</span> <input type="text" name="telefon" value="<?php echo $telefon ?>"></p>
Komentar:<br>
<textarea name="komentar" rows="4" ><?php echo $komentar ?></textarea>

<input type="submit" value="Posalji">
<input type="reset" name="reset" value="Ponisti">
	</form>
	</div>


</body>

</html>
