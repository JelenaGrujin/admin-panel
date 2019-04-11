<?php 
namespace Admin\controller;

use Admin\controller\Controller;
use Admin\model\UserDao;
use Admin\model\ProductDao;
use Admin\model\OwnersDao;
use Admin\model\OwnDocDao;
use Admin\model\ProPhoDao;

class OwnerController {

		public function __construct() {
	     	$this->daouser = new UserDao();
	     	$this->daopro = new ProductDao();
	     	$this->daoown = new OwnersDao();
	     	$this->daoowndoc = new OwnDocDao();
	     	$this->daopropho = new ProPhoDao();
	     }

	public function showOwners(){
		
		
		$ownerslist=$this->daoown->selectFromOwners();
		
		$page_productpa='active';		
		$page_owners='active';
		include 'view/app_link.php';
	}
	
	public function searchOwn(){
		
		$izvor=isset($_POST['izvor'])?$_POST['izvor']:"";
		$agent=isset($_POST['agent'])?$_POST['agent']:"";
		$lok=isset($_POST['lokacija'])?$_POST['lokacija']:"";
		$naziv=isset($_POST['naziv_firme'])?$_POST['naziv_firme']:"";
		$tel=isset($_POST['telefon'])?$_POST['telefon']:"";
		$naziv_firme=("%$naziv%");
		$lokacija=("%$lok%");
		$telefon=("%$tel%");
		
		$nf=empty($naziv)?"":$naziv_firme;
		$t=empty($tel)?"":$telefon;
		$l=empty($lok)?"":$lokacija;
		
			
			$pretrazeno=$this->dao->selectKontaktBySearch($izvor, $agent, $nf, $l, $t);
			
		if (!empty($pretrazeno)) {
			
			$listakontakata=$this->dao->selectFromKontak();
			$statuskontakta=$this->dao->selectFromStatusKontakta();
			$izvorpodatka=$this->dao->selectFromIzvorPodatka();
			$listaagenta=$this->dao->selectFromAgent();
			
			$page_productpa='active';		
			$page_klijenti='active';
			include 'app_link.php';
			
		}else {
			
			 $msg='Nema trazenog rezultata pokusajte ponovo';
			
			$listakontakata=$this->dao->selectFromKontak();
			$statuskontakta=$this->dao->selectFromStatusKontakta();
			$izvorpodatka=$this->dao->selectFromIzvorPodatka();
			$listaagenta=$this->dao->selectFromAgent();
			
			$page_productpa='active';		
			$page_klijenti='active';
			include 'app_link.php';
		}
		
	}

	public function ownerCard(){
		
		$id_owner=isset($_GET['id_owner'])?$_GET['id_owner']:"";
		$id_owner=isset($_POST['id_owner'])?$_POST['id_owner']:"";
		
		$owner=$this->daoown->selectFromOwnersById($id_owner);
		$product=$this->daopro->selectFromProductByIdOwner($id_owner);
		
		$page_productpa='active';
		$page_owner_card='active';
		include 'app_link.php';
		
	}
	
	public function showEditOwnerCard(){
		
		$id_owner=isset($_GET['id_owner'])?$_GET['id_owner']:"";
		$id_owner=isset($_POST['id_owner'])?$_POST['id_owner']:"";
		
		$owner=$this->daoown->selectFromOwnersById($id_owner);
		
		//$listastausakontakta=$this->dao->SelectFromStatusKontakta();
		
		//$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
		
		$agentlist = $this->daouser->selectFromUsers();
		
		$page_productpa='active';
		$page_edit_owner='active';
		include 'app_link.php';
	}
	
	public function filterOwner($owner_name,$phone,$phone_1,$e_mail,$source,$b_day,$title,$owner_type,$owner_address,$e_mail_owner,$name_3,$phone_3,$e_mail_3,$name_4,$phone_4,$e_mail_4,$name_5,$phone_5,$e_mail_5,$name_6,$phone_6,$e_mail_6,$name_7,$phone_7,$e_mail_7,$name_8,$phone_8,$e_mail_8,$name_9,$phone_9,$company_name,$tin,$company_num,$activity_code,$company_adres,$responsible_person,$id_num,$UMCN,$agent,$type_owner){
		
		$owner_name=isset($_POST['owner_name'])?$_POST['owner_name']:"";
    	$phone=isset($_POST['phone'])?$_POST['phone']:"";
    	$phone_1=isset($_POST['phone_1'])?$_POST['phone_1']:"";
    	$e_mail=isset($_POST['e_mail'])?$_POST['e_mail']:"";
    	$source=isset($_POST['source'])?$_POST['source']:"";
    	$b_day=isset($_POST['b_day'])?$_POST['b_day']:"";
    	$title=isset($_POST['title'])?$_POST['title']:"";
    	$owner_type=isset($_POST['owner_type'])?$_POST['owner_type']:"";
    	$owner_address=isset($_POST['owner_address'])?$_POST['owner_address']:"";
    	$e_mail_owner=isset($_POST['e_mail_owner'])?$_POST['e_mail_owner']:"";
    	$name_3=isset($_POST['name_3'])?$_POST['name_3']:"";
    	$phone_3=isset($_POST['phone_3'])?$_POST['phone_3']:"";
    	$e_mail_3=isset($_POST['e_mail_3'])?$_POST['e_mail_3']:"";
    	$name_4=isset($_POST['name_4'])?$_POST['name_4']:"";
    	$phone_4=isset($_POST['phone_4'])?$_POST['phone_4']:"";
    	$e_mail_4=isset($_POST['e_mail_4'])?$_POST['e_mail_4']:"";
    	$name_5=isset($_POST['name_5'])?$_POST['name_5']:"";
    	$phone_5=isset($_POST['phone_5'])?$_POST['phone_5']:"";
    	$e_mail_5=isset($_POST['e_mail_5'])?$_POST['e_mail_5']:"";
    	$name_6=isset($_POST['name_6'])?$_POST['name_6']:"";
    	$phone_6=isset($_POST['phone_6'])?$_POST['phone_6']:"";
    	$e_mail_6=isset($_POST['e_mail_6'])?$_POST['e_mail_6']:"";
    	$name_7=isset($_POST['name_7'])?$_POST['name_7']:"";
    	$phone_7=isset($_POST['phone_7'])?$_POST['phone_7']:"";
    	$e_mail_7=isset($_POST['e_mail_7'])?$_POST['e_mail7']:"";
    	$name_8=isset($_POST['name_8'])?$_POST['name_8']:"";
    	$phone_8=isset($_POST['phone_8'])?$_POST['phone_8']:"";
    	$e_mail_8=isset($_POST['e_mail_8'])?$_POST['e_mail_8']:"";
    	$name_9=isset($_POST['name_9'])?$_POST['name_9']:"";
    	$phone_9=isset($_POST['phone_9'])?$_POST['phone_9']:"";
    	$company_name=isset($_POST['company_name'])?$_POST['company_name']:"";
    	$tin=isset($_POST['tin'])?$_POST['tin']:"";
    	$company_num=isset($_POST['company_num'])?$_POST['company_num']:"";
    	$activity_code=isset($_POST['activity_code'])?$_POST['activity_code']:"";
    	$company_adres=isset($_POST['company_adres'])?$_POST['company_adres']:"";
    	$responsible_person=isset($_POST['responsible_person'])?$_POST['responsible_person']:"";
    	$id_num=isset($_POST['id_num'])?$_POST['id_num']:"";
    	$UMCN=isset($_POST['UMCN'])?$_POST['UMCN']:"";
    	$agent=isset($_POST['agent'])?$_POST['agent']:"";
    	$type_owner=isset($_POST['type_owner'])?$_POST['type_owner']:"";

		$errors=array();
 				
				$check = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,64}$/';
				if (!empty($e_mail) && !preg_match($check, $e_mail)){
				$errors['e_mail']='* Incorrectly written e-mail';
				}
				if (!empty($e_mail_owner) && !preg_match($check, $e_mail_owner)){
				$errors['e_mail_owner']='* Incorrectly written e-mail';
				}
				if (!empty($e_mail_3) && !preg_match($check,$e_mail_3)){
				$errors['e_mail_3']='* Incorrectly written e-mail';
				}
				if (!empty($e_mail_4) && !preg_match($check, $e_mail_4)){
				$errors['e_mail_4']='* Incorrectly written e-mail';
				}
				if (!empty($e_mail_5) && !preg_match($check, $e_mail_5)){
				$errors['e_mail_5']='* Incorrectly written e-mail';
				}
				if (!empty($e_mail_6) && !preg_match($check, $e_mail_6)){
				$errors['e_mail_6']='* Incorrectly written e-mail';
				}
				if (!empty($e_mail_7) && !preg_match($check, $e_mail_7)){
				$errors['e_mail_7']='* Incorrectly written e-mail';
				}
				if (!empty($e_mail_8) && !preg_match($check, $e_mail_8)){
				$errors['e_mail_8']='* Incorrectly written e-mail';
				}
				if (!empty($e_mail_9) && !preg_match($check, $e_mail_9)){
				$errors['e_mail_9']='* Incorrectly written e-mail';
				}
				if (empty($phone)){
				$errors['major']='* required';	
				}elseif (!is_numeric($phone)){
					$errors['phone']='* numeric';
				}
				if (!empty($phone_1) && !is_numeric($phone_1)){
				$errors['phone_1']='* numeric';
				}
				if (!empty($phone_3) && !is_numeric($phone_3)){
				$errors['phone_3']='* numeric';
				}
				if (!empty($phone_4) && !is_numeric($phone_4)){
				$errors['phone_4']='* numeric';
				}
				if (!empty($phone_5) && !is_numeric($phone_5)){
				$errors['phone_5']='* numeric';
				}
				if (!empty($phone_6) && !is_numeric($phone_6)){
				$errors['phone_6']='* numeric';
				}
				if (!empty($phone_7) && !is_numeric($phone_7)){
				$errors['phone_7']='* numeric';
				}
				if (!empty($phone_8) && !is_numeric($phone_8)){
				$errors['phone_8']='* numeric';
				}
				if (!empty($phone_9) && !is_numeric($phone_9)){
				$errors['phone_9']='* numeric';
				}
				if (!empty($tin) && !is_numeric($tin)){
				$errors['tin']='* numeric';
				}
				if (!empty($company_num) && !is_numeric($company_num)){
				$errors['company_num']='* numeric';
				}
				if (!empty($activity_code) && !is_numeric($activity_code)){
				$errors['activity_code']='* numeric';
				}
				if (!empty($id_num) && !is_numeric($id_num)){
				$errors['id_num']='* numeric';
				}
				if (!empty($UMCN) && !is_numeric($UMCN)){
				$errors['UMCN']='* numeric';
				}
				if (!empty($UMCN) && !is_numeric($UMCN)){
				$errors['UMCN']='* numeric';
				}
				
				if (count($errors)==0){	
					return true;
				}else {
					return false;
				}
	}
	
	public function filterOwnersDoc($name_doc,$name_doc_tmp){
		$name_doc=$_FILES['doc']['name'];
		$name_doc_tmp = $_FILES['doc']['tmp_name'];
		
		if (!empty($name_doc)){
			if (count($name_doc)>10){
				$errors['many_doc']='* Can not add more than 10 doc';
			}
			$check_name=$this->daoowndoc->selectFromOwnersDoc();
				foreach ($check_name as $cn) {
					if ($name_doc==$cn['name_doc']){
	 					$errors['doc_ex']='* Select unique name';
					}
				}
			foreach ($name_doc as $n_d) {
			$ext = pathinfo($n_d, PATHINFO_EXTENSION);
				if(!empty($ext)&& $ext!= "pdf"){
					$errors['ext_dok']='* Documents must be PDF extensions';
				}
			}
		}
		
		if (count($errors)==0){	
			return true;
		}else {
			return false;
		}
	}
	
	public function editOwner(){

		$this->daoown->updateOwnerById($data_update, $owner_name, $phone, $phone_1, $e_mail, $source, $b_day, $title, $owner_type, $owner_address, $e_mail_owner, $name_3, $phone_3, $e_mail_3, $name_4, $phone_4, $e_mail_4, $name_5, $phone_5, $e_mail_5, $name_6, $phone_6, $e_mail_6, $name_7, $phone_7, $e_mail_7, $name_8, $phone_8, $e_mail_8, $name_9, $phone_9, $e_mail_9, $company_name, $tin, $company_num, $activity_code, $company_adres, $responsible_person, $id_num, $UMCN, $agent, $id_owner);
		
	}
	//napraviti delete product i delete doc pa daodati
	public function deleteOwner(){
		$id_owner=isset($_GET['id_own'])?$_GET['id_own']:"";
		
		$id_product=$this->daopro->selectF ;
		foreach ($id_nekretnine as $nek) {
			
			$photos=$this->dao->selectFromphotosNekretnineByIdNekretnine($nek['id_nekretnine']);
				if (!empty($photos)){
					foreach ($photos as $sl) {
						$this->dao->deletephotosNekretnineByIdphotos($sl['id_photos']);
						$file= '../css/image/'.$sl['naziv_photos'];
          			  	unlink($file);
					}
				}
				
		}
		$this->dao->deleteNekretninaByIdKontakt($id_owner);

		$dokumenti=$this->dao->selectFromDokumentaByIdKontakta($id_owner);
		if (!empty($dokumenti)){
			foreach ($dokumenti as $dok) {
				
				$this->dao->deleteDokumentByIdKontakta($id_owner);
				$file= '../css/dokumenta/'.$dok['naziv_dokumenta'];
          		unlink($file);
			}
		}
		$this->dao->deleteFromKontaktById($id_owner);
		
		$msg='Uspesno ste obrisali kontakta';

	}
	
}

?>
