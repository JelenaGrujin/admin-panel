<?php

namespace Admin\controller;
 
use Admin\model\DAO;
use Admin\model\TypeDao;
use Admin\model\EquipmentDao;
use Admin\model\LocationOneDao;
use Admin\model\LocationTwoDao;
use Admin\model\LocationThreeDao;
use Admin\model\ProductDao;
use Admin\model\OwnersDao;
use Admin\model\UserDao;
use Admin\model\ProPhoDao;
use Admin\model\OwnDocDao;
use Admin\model\StructureDao;

class Controller{

	private $daotype;
	private $daoequipment;  
	private $daolone;
	private $daoltwo;
	private $daolthree;
	private $daopro;
	private $daoown;
	private $daouser;
	private $daopropho;
	private $daoowndoc;
	private $daostructure;
		
		public function __construct() {
	     	$this->dao = new DAO();
	     	$this->daotype = new TypeDao();
	     	$this->daoequipment = new EquipmentDao();
	     	$this->daolone = new LocationOneDao();
	     	$this->daoltwo = new LocationTwoDao();
	     	$this->daolthree = new LocationThreeDao();
			$this->daopro = new ProductDao();     
			$this->daoown = new OwnersDao();
			$this->daouser = new UserDao();
			$this->daopropho = new ProPhoDao();
			$this->daoowndoc = new OwnDocDao();
			$this->daostructure = new StructureDao(); 
		}
	
	public static function showView($page){
		require_once 'view/'.$page.'.php';
	}
 
	    public function Send(){
		$e_mail=isset($_POST['e_mail'])?$_POST['e_mail']:"";
		$message=isset($_POST['message'])?$_POST['message']:"";
		$title=isset($_POST['title'])?$_POST['title']:"";
		mail($e_mail, $title, $message);
		
		$listanekretnina=$this->dao->selectFromNekretnina();
		$listakontakata=$this->dao->selectFromKontak();

		$page_home = 'active';
		include 'homefiles/home_link.php';
		
	}

	//prikaz dokumenata po ID vlsanika
	public function showOwnersDoc(){
		
		$id_owner=isset($_GET['id_owner'])?$_GET['id_owner']:"";
		$dao= new DAO();
		
		$docs=$this->daoowndoc->selectFromOwnersDocByOwner($id_owner);
		if (empty($docs)){
			
			$msg='Owner id:'.$id_owner.' does not have any documents';
		}
		
		$page_productpa='active';
		$page_owners_doc='active';
		include 'app_link.php';
	}
	
	//prikaz pojedinacnog dokumenta u pdf formatu
	public function showDokument(){
		
		$naziv_dokumenta=isset($_GET['naziv_dok'])?$_GET['naziv_dok']:"";
		
		$page_productpa='active';		
		$page_pregled_dokument='active';
		include 'app_link.php';
	}
	
	//naknadno dodavanje dokumenta vlasnika izdavanja
	public function dodajDokumenta(){
		
		$id_vlasnika=isset($_POST['id_vlasnika'])?$_POST['id_vlasnika']:"";
	    $naziv_dokumenta=$_FILES['doc']['name'];
		$naziv_dokumenta_tmp = $_FILES['doc']['tmp_name'];
		
		$errors=array();
			
			foreach ($naziv_dokumenta as $n_d) {
				$ext_dok = strtolower(pathinfo($n_d, PATHINFO_EXTENSION));
					if(!empty($ext_dok) != "pdf"){
						$errors['ext_dok']='* <br>Dokumenta moraju biti PDF formata';
					}
			}
			$provera_imena=$this->dao->selectFromDokumenta();
			foreach ($provera_imena as $pi) {
				$postojace_ime=$pi['naziv_dokumenta'];
			}
			if (!empty($naziv_dokumenta)==$postojace_ime){
 				$errors['dok_postojeci']='* Odaberite jedinstven naziv dokumenta';
			}
			$moguce=10-count($provera_imena);
			if (count($naziv_dokumenta)+count($provera_imena)>10){
				$errors['mnogo_dok']='* Mozete dodati najviše '.$moguce.' dokumenata';
			}	
		if (count($errors)==0){
			foreach ($_FILES['doc']['tmp_name'] as $key=>$tmp_name){
				$naziv_dokumenta=$_FILES['doc']['name'][$key];
				$naziv_dokumenta_tmp = $_FILES['doc']['tmp_name'][$key];
					if (!empty($naziv_dokumenta) && !empty($naziv_dokumenta_tmp)){
						$this->dao->insertIntoDokumentaKontakt($naziv_dokumenta, $id_vlasnika);
						move_uploaded_file($naziv_dokumenta_tmp,"../css/dokumenta/$naziv_dokumenta");                  
					}
			}
		}
		$dokumenta=$this->dao->selectFromDokumentaByIdKontakta($id_vlasnika);
		
		$page_productpa='active';
		$page_dokumenta_vlasnika='active';
		include 'app_link.php';
	}
	
	//brisanje dokumenta sa liste i prikaz liste dokumenata istog id vlasnika
	public function brisiDokument(){
		
		$id_dokumenta=$_GET['id_dokumenta']?$_GET['id_dokumenta']:"";
		
		$dokumenti=$this->dao->selectFromDokumentaByIdDokumenta($id_dokumenta);
		$brise=$this->dao->deleteDokumentByIdDokumenta($id_dokumenta);

			if (!empty($dokumenti)){
				foreach ($dokumenti as $dok) {
					
					$file= '../css/dokumenta/'.$dok['naziv_dokumenta'];
	          		unlink($file);
	          		$id_vlasnika=$dok['id_kontakta'];
				}
			}else {
				$msg='Vlasnik ID: '.$id_vlasnika.' nema vise dokumenata';
			}
			
		$dokumenta=$this->dao->selectFromDokumentaByIdKontakta($id_vlasnika);

		$page_productpa='active';
		$page_dokumenta_vlasnika='active';
		include 'app_link.php';
	}

	
	public function potraznjaBaza(){
		
		
		$potraznja=$this->dao->selectFromStatusPotraznje();
		
		$page_basepa='active';
		$page_potraznja_baza='active';
		$page_realizacija_baza='active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function obrisiStatus(){
		
		$id_statusa=isset($_GET['id_statusa'])?$_GET['id_statusa']:"";
		
		$this->dao->deleteStatusPotraznje($id_statusa);
		
	}
	
	public function novStatus(){
		
		$novi_status=isset($_POST['novi_status'])?$_POST['novi_status']:"";
		
	
		if ($novi_status){
			$nova=$this->dao->insertIntoStatusPotraznje($novi_status);
			$msg='Uspešno ste upisali novi status potražnje';
		}else {
			$msg='Neuspešno, pokušajte ponovo';
		}
		
		$potraznja=$this->dao->selectFromStatusPotraznje();
		
		$page_basepa='active';
		$page_potraznja_baza='active';
		$page_realizacija_baza='active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
//kartice agenta

	public function showAgenta() {
				
		$page_basepa='active';
		$page_agent_baza = 'active';
		$page_upisagenta = 'active';
		include 'basefiles/base_link.php';
	}

	public function listaAgenta(){
		
		
		$listaagenata=$this->dao->selectFromAgent();
		$page_basepa='active';
		$page_agent_baza = 'active';
		$page_listaagenta = 'active';
		include 'basefiles/base_link.php';
		
	}

	public function showKarticaAgenta(){

		$id_agenta=isset($_GET['id_agenta'])?$_GET['id_agenta']:"";
		
		
		$agent=$this->dao->selectUserById($id_agenta);
		
		$page_basepa='active';
		$page_agent_baza = 'active';
		$page_kartica_agenta='active';
		include 'basefiles/base_link.php';
	}

	public function showAzuriranjeAgenta(){
		$id_agenta=isset($_GET['id_age'])?$_GET['id_age']:"";
		
		
		$agent=$this->dao->selectUserById($id_agenta);
		
		$page_basepa='active';
		$page_agent_baza = 'active';
		$page_azuriraj_agenta='active';
		include 'basefiles/base_link.php';
	}

	public function showUpisAgenta() {
		
		$page_basepa='active';
		$page_agent_baza = 'active';
		$page_upisagenta = 'active';
		include 'basefiles/base_link.php';
	}
	
	public function signing(){
			
		$name_surname=isset($_POST['name_surname'])?$_POST['name_surname']:"";
		$address=isset($_POST['address'])?$_POST['address']:"";
		$phone=isset($_POST['phone'])?$_POST['phone']:"";
		$e_mail=isset($_POST['e_mail'])?$_POST['e_mail']:"";
		$username=isset($_POST['username'])?$_POST['username']:"";
		$pass=isset($_POST['password'])?$_POST['password']:"";
		$p_pass=isset($_POST['p_password'])?$_POST['p_password']:"";
		$errors=array();
		
		
		$provemail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,64}$/';
		if(empty($e_mail)){
		$errors['e_mail']='* Niste upisali e_mail adresu';
		}elseif (!preg_match($provemail, $e_mail)){
			$errors['e_mail_bad']='* badly typed';
		}
		//$e_adresa=$this->dao->selectFromAgent();
 		//foreach ($e_adresa as $e_a) {
 		//	$e_postojeca=$e_a['email_agenta'];
 		//}
 		//if ($e_postojeca==$email_agenta){
 		//	$errors['e_mail_posotjeci']='* Adresa vec postoji u bazi vlasnika';
 		//}
		$user_name=$this->dao->selectFromUsers();
 		foreach ($user_name as $u_n) {
 			$user=$u_n['username'];
 		if ($user==$username){
 			$errors['user_existing']='* Username already exists';
 		}
 		}
 		
		if (!empty($phone) && !is_numeric($phone)){
		$errors['phone']='* numeric';
		}
		if ($pass!=$p_pass){
		$errors['bad_pass']='* passwords do not match';
		}	
		if (count($errors)==0){
			$usoljeno="4f3gv4fsd354g.$pass.4g56hert";
		
			$password=hash('md5', $usoljeno);
		
			$this->dao->insertIntoUsers($name_surname, $username, $e_mail, $password, $address, $phone);
			
			$msg='Successfully';
			$listaagenata=$this->dao->selectFromUsers();
			$page_basepa='active';
			$page_agent_baza = 'active';
			$page_listaagenta = 'active';
			include 'basefiles/base_link.php';
		}else {
			$msg='Try again';
			
			$page_basepa='active';
			$page_agent_baza = 'active';
			$page_upisagenta = 'active';
			include 'basefiles/base_link.php';
		}
		
	}
	
	//kontakti kartice baze
	
	public function showVlasnikBaza() {
		
		
		$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
		
		$page_basepa='active';
		$page_vlasnik_baza = 'active';
		$page_tipvlasnika = 'active';
		$page_izvorpodatka = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function showStatusKontakta() {
		
		
		$listastatusakontakta=$this->dao->selectFromStatusKontakta();
		
		$page_basepa='active';
		$page_vlasnik_baza = 'active';
		$page_statuskontakta = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function noviStatusKontakta(){
		
		$ime_statusa_kontakta=isset($_POST['novi_statuskontakta'])?$_POST['novi_statuskontakta']:"";
		
		
		$this->dao->insertStatusKontakta($ime_statusa_kontakta);
		$msg='Uspesno ste upisali novi status kontakta';
		$listastatusakontakta=$this->dao->selectFromStatusKontakta();
		
		$page_basepa='active';
		$page_vlasnik_baza = 'active';
		$page_statuskontakta = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
		
	}
	
	public function obrisiStatusKontakta(){
		
		$id_statusa_kontakta=isset($_GET['id_statusa_kontakta'])?$_GET['id_statusa_kontakta']:"";
		
		
		if ($id_statusa_kontakta){
			
			$this->dao->deleteFromStatusKontakta($id_statusa_kontakta);
			
			$msg='Uspesno ste obrisali tip profila kontakata';

		}else {
			
			$msg='Niste obrisali tip proflia kontakta';

		}
		
	}
	
	public function showIzvorPodatka(){
		
		$dao= new DAO();
		$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
		
		$page_basepa='active';
		$page_vlasnik_baza = 'active';
		$page_izvorpodatka = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
		
	}
	
	public function noviIzvorPodatka(){
		
		$ime_izvora_podatka=isset($_POST['novi_izvor_podatka'])?$_POST['novi_izvor_podatka']:"";
		
		
		$this->dao->insertIntoIzvorPodatka($ime_izvora_podatka);
		$msg='Uspesno ste upisali izvor podtaka';
		
		$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
		
		$page_basepa='active';
		$page_vlasnik_baza = 'active';
		$page_izvorpodatka = 'active';
		$container = 'container';
		include 'basefiles/base_link.php';
	}
	
	public function obrisiIzvorPodatka(){
		
	$id_izvora_podatka=isset($_GET['id_izvorapodatka'])?$_GET['id_izvorapodatka']:"";
	
		
		if ($id_izvora_podatka){
			
			$this->dao->deleteFromIzvorPodatka($id_izvora_podatka);
			
			$msg='Uspesno ste obrisali izvor podatka';

		}else {
			
			$msg='Niste obrisali izvor podatka';
	
		}
		
	}
	
}
?>
