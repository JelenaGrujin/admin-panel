<html>
<head>
<title>picerija</title>
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
<div id="obavestenje" align="center">
  <h1>HVALA NA <br> POVERENJU</h1>
   
   <p>Vasa rezervacija: <br>
   <p>Datum venčanja: <?php echo $dv?> <br>
   <p>Veličina sale je: <?php echo $velicina ?> <br>
   <p>Od dodataka ste odabrali:<br>
  <?php if(count($dodaci)>0){
	   echo "<ul>";
	   foreach($dodaci as $k=>$v)
	   echo "<li>$v</li>";
	   echo"</ul>";
   }else{
	   echo "...zapravo, praznu picu";
   }?>
    <h2>Vasi podaci su:</h2>
	<p>Ime: <?php echo $ime ?> <br>
	<p>Telefon: <?php echo $telefon ?> <br>
	<p>Komentar: <?php echo $komentar ?>
	<p> <a href="index.php"> VRATITE SE NAZAD -> </a> </p>
</div>
	
</body>
</html>