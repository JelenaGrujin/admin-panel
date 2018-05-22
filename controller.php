<?php 

if($_SERVER["REQUEST_METHOD"]=="GET"){
		
$dv= isset($_GET["dv"])?$_GET["dv"]:"";	
$velicina= isset($_GET["velicina"])?$_GET["velicina"]:"";
$ime= isset($_GET["ime"])?$_GET["ime"]:"";	
$telefon= isset($_GET["telefon"])?$_GET["telefon"]:"";	
$komentar= isset($_GET["komentar"])?$_GET["komentar"]:"";	

$dodaci= isset($_GET["dodaci"])?$_GET["dodaci"]:array();	

function test($data){
		$data= trim($data);
		$data= stripslashes($data);
		$data= htmlspecialchars($data);
		return $data;}

	if(!empty($velicina)&&!empty($ime)&&!empty($telefon)&&!empty($dv)){
		include 'wiew.php';
	}else{
		echo "<script>alert(' Niste uneli sve podatke')</script>";
		include 'index.php';}
	
}else {
	echo "<script>alert('Pogresan metod :D')</script>";
include 'index.php';}

?>
