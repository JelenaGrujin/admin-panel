<?php 
namespace Admin\controller;

use Admin\controller\Controller;

class OrdersController extends Controller {
	//proveriti
	public function __construct(){
		
	}
	
	public function showPotraznja(){
		
		$listapotraznja=$this->dao->selctFromPotraznja();
		
		$page_productpa='active';
		$page_ponuda='active';
		include 'app_link.php';
		
	}
 
	public function novaPotraznja(){
		
		
		session_start();
		$sesija_potraznje=isset($_SESSION['potraznja'])?$_SESSION['potraznja']:array();
		
		$listaagenata=$this->dao->selectFromAgent();
		$listastausakontakta=$this->dao->SelectFromStatusKontakta();
		$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
		$listaprovajdera=$this->dao->selectFromProvajder();
		$listagaraza=$this->dao->selectFromGaraza();
		$listadodataka=$this->dao->selectFromDodaci();
		$listastrukture=$this->dao->selectFromsome_data();
		$listagradova=$this->dao->selectFromGrad();
		$listaopstina=$this->dao->selectFromOpstina();
		$listadelova=$this->dao->selectFromDeo();
		$listatipova=$this->dao->selectFromTipNekretnine();
		$listaopreme=$this->dao->selectFromOpremljenost();
		
		if (!empty($sesija_potraznje)){
			
			foreach ($sesija_potraznje as $potraznja){
			$ime_prezime_potraznje=$potraznja['0'];
			$kontakt_tel=$potraznja['1'];
			$kontakt_tel_2=$potraznja['2'];
			$kontakt_tel_3=$potraznja['3'];
			$e_mail_potraznje=$potraznja['4'];
			$status_kontakta=$potraznja['5'];
			$izvor_podatka_p=$potraznja['6'];
			$agent_p=$potraznja['7'];
			$grad_p=$potraznja['8'];
			$opstina_p=$potraznja['9'];
			$deo_grada_p=$potraznja['10'];
			$ulica_p=$potraznja['11'];
			$some_data_p=$potraznja['12'];
			$kvadratura_od=$potraznja['13'];
			$kvadratura_do=$potraznja['14'];
			$cena_od=$potraznja['15'];
			$cena_do=$potraznja['16'];
			$oprema_p=$potraznja['17'];
			$tip_nepokretnosti_p=$potraznja['18'];
			$tip_nek_p=explode(', ', $tip_nepokretnosti_p);
			$dodaci_p=$potraznja['19'];
			$dod_p=explode(', ', $dodaci_p);
			$tip_garaze_p=$potraznja['20'];
			$gar_p=explode(', ', $tip_garaze_p);
			$provajder_p=$potraznja['21'];
			$prov_p= explode(', ', $provajder_p);
			$status_potraznje=$potraznja['22'];
			$status_poslovanja_p=$potraznja['23'];}
		
		}
		
		$page_productpa='active';;
		$page_nova_potraznja = 'active';
		include 'app_link.php';
	}
 	
	public function pauzirajPotraznju(){
		
		$status_potraznje=isset($_POST['status_potraznje'])?$_POST['status_potraznje']:"";
		$status_poslovanja_p=isset($_POST['status_poslovanja_p'])?$_POST['status_poslovanja_p']:"";
		$kontakt_tel=isset($_POST['kontakt_telefon_p'])?$_POST['kontakt_telefon_p']:"";
		$kontakt_tel_2=isset($_POST['kontakt_2'])?$_POST['kontakt_2']:"";
		$kontakt_tel_3=isset($_POST['kontakt_3'])?$_POST['kontakt_3']:"";
		$izvor_podatka_p=isset($_POST['izvor_podatka_p'])?$_POST['izvor_podatka_p']:"";
		$ime_prezime_potraznje=isset($_POST['ime_prezime_p'])?$_POST['ime_prezime_p']:"";
		$e_mail_potraznje=isset($_POST['e_mail_p'])?$_POST['e_mail_p']:"";
		$status_kontakta=isset($_POST['status_kotakta'])?$_POST['status_kotakta']:"";
		$agent_p=isset($_POST['agent_p'])?$_POST['agent_p']:"";
		
		$grad_p=isset($_POST['grad_p'])?$_POST['grad_p']:"";
		$opstina_p=isset($_POST['opstina_p'])?$_POST['opstina_p']:"";
		$deo_grada_p=isset($_POST['deo_p'])?$_POST['deo_p']:"";
		$ulica_p=isset($_POST['ulica_p'])?$_POST['ulica_p']:"";
		$kvadratura_od=isset($_POST['kvadratura_od'])?$_POST['kvadratura_od']:"";
		$kvadratura_do=isset($_POST['kvadratura_do'])?$_POST['kvadratura_do']:"";
		$some_data_p=isset($_POST['some_data_p'])?$_POST['some_data_p']:"";
		$cena_od=isset($_POST['cena_od'])?$_POST['cena_od']:"";
		$cena_do=isset($_POST['cena_do'])?$_POST['cena_do']:"";
		$tip_nek_p=isset($_POST['tip_nekretnine_p'])?$_POST['tip_nekretnine_p']:array();
		$oprema_p=isset($_POST['oprema_p'])?$_POST['oprema_p']:"";
		$dod_p=isset($_POST['dodaci_p'])?$_POST['dodaci_p']:array();
		$gar_p=isset($_POST['garaza_p'])?$_POST['garaza_p']:array();
		$prov_p=isset($_POST['provajder_p'])?$_POST['provajder_p']:array();
		
		$tip_nepokretnosti_p=implode(', ', $tip_nek_p);
		$dodaci_p=implode(', ', $dod_p);
		$tip_garaze_p=implode(', ', $gar_p);
		$provajder_p= implode(', ', $prov_p);
		
		
		$pauza_potraznje=array($ime_prezime_potraznje, $kontakt_tel, $kontakt_tel_2, $kontakt_tel_3, $e_mail_potraznje, $status_kontakta, $izvor_podatka_p, $agent_p, $grad_p, $opstina_p, $deo_grada_p, $ulica_p, $some_data_p, $kvadratura_od, $kvadratura_do, $cena_od, $cena_do, $oprema_p, $tip_nepokretnosti_p, $dodaci_p, $tip_garaze_p, $provajder_p, $status_potraznje, $status_poslovanja_p);
			if ($pauza_potraznje){
				session_start();
				$_SESSION['potraznja']=array();
				$_SESSION['potraznja'][]=$pauza_potraznje;
				
				$listatipova=$this->dao->selectFromTipNekretnine();
				
				$page_basepa='active';
				$page_tip_nekretnine = 'active';
				$page_type_product = 'active';
				$container = 'container';
				include 'basefiles/base_link.php';
				
			}else {
				$msg='Pokusajte ponovo ';
				$listaagenata=$this->dao->selectFromAgent();
				$listastausakontakta=$this->dao->SelectFromStatusKontakta();
				$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
				$listaprovajdera=$this->dao->selectFromProvajder();
				$listagaraza=$this->dao->selectFromGaraza();
				$listadodataka=$this->dao->selectFromDodaci();
				$listastrukture=$this->dao->selectFromsome_data();
				$listagradova=$this->dao->selectFromGrad();
				$listaopstina=$this->dao->selectFromOpstina();
				$listadelova=$this->dao->selectFromDeo();
				$listatipova=$this->dao->selectFromTipNekretnine();
				$listaopreme=$this->dao->selectFromOpremljenost();
				
				$page_productpa='active';;
				$page_nova_potraznja = 'active';
				include 'app_link.php';
			}
			
	}
	
	public function potvrdaPotraznje(){
		
		$status_potraznje=isset($_POST['status_potraznje'])?$_POST['status_potraznje']:"";
		$status_poslovanja_p=isset($_POST['status_poslovanja_p'])?$_POST['status_poslovanja_p']:"";
		$kontakt_tel=isset($_POST['kontakt_telefon_p'])?$_POST['kontakt_telefon_p']:"";
		$kontakt_tel_2=isset($_POST['kontakt_2'])?$_POST['kontakt_2']:"";
		$kontakt_tel_3=isset($_POST['kontakt_3'])?$_POST['kontakt_3']:"";
		$izvor_podatka_p=isset($_POST['izvor_podatka_p'])?$_POST['izvor_podatka_p']:"";
		$ime_prezime_potraznje=isset($_POST['ime_prezime_p'])?$_POST['ime_prezime_p']:"";
		$e_mail_potraznje=isset($_POST['e_mail_p'])?$_POST['e_mail_p']:"";
		$status_kontakta=isset($_POST['status_kotakta'])?$_POST['status_kotakta']:"";
		$agent_p=isset($_POST['agent_p'])?$_POST['agent_p']:"";
		
		$grad_p=isset($_POST['grad_p'])?$_POST['grad_p']:"";
		$opstina_p=isset($_POST['opstina_p'])?$_POST['opstina_p']:"";
		$deo_grada_p=isset($_POST['deo_p'])?$_POST['deo_p']:"";
		$ulica_p=isset($_POST['ulica_p'])?$_POST['ulica_p']:"";
		$kvadratura_od=isset($_POST['kvadratura_od'])?$_POST['kvadratura_od']:"";
		$kvadratura_do=isset($_POST['kvadratura_do'])?$_POST['kvadratura_do']:"";
		$some_data_p=isset($_POST['some_data_p'])?$_POST['some_data_p']:"";
		$cena_od=isset($_POST['cena_od'])?$_POST['cena_od']:"";
		$cena_do=isset($_POST['cena_do'])?$_POST['cena_do']:"";
		$tip_nek_p=isset($_POST['tip_nekretnine_p'])?$_POST['tip_nekretnine_p']:array();
		$oprema_p=isset($_POST['oprema_p'])?$_POST['oprema_p']:"";
		$dod_p=isset($_POST['dodaci_p'])?$_POST['dodaci_p']:array();
		$gar_p=isset($_POST['garaza_p'])?$_POST['garaza_p']:array();
		$prov_p=isset($_POST['provajder_p'])?$_POST['provajder_p']:array();
		
		$tip_nepokretnosti_p=implode(', ', $tip_nek_p);
		$dodaci_p=implode(', ', $dod_p);
		$tip_garaze_p=implode(', ', $gar_p);
		$provajder_p= implode(', ', $prov_p);
		session_start();
		$errors=array();
			if (!empty($kontakt_tel) && !is_numeric($kontakt_tel)){
				 $errors['kontakt_tel']='* upisite brojevima';
					}
			if (!empty($kontakt_tel_2) && !is_numeric($kontakt_tel_2)){
				$errors['kontakt_tel_2']='* upisite brojevima';
					}
			if (!empty($kontakt_tel_3) && !is_numeric($kontakt_tel_3)){
				$errors['kontakt_tel_3']='* upisite brojevima';
					}
			if (!empty($kvadratura_do) && !is_numeric($kvadratura_do)){
				$errors['kvadratura_do']='* upisite brojevima';
					}
			if (!empty($kvadratura_od) && !is_numeric($kvadratura_od)){
				$errors['kvadratura_od']='* upisite brojevima';
					}
			if ($kvadratura_od > $kvadratura_do){
				$errors['kvadratura']='* nepravilno upisana kvadratura';
			}
			if (!empty($cena_do) && !is_numeric($cena_do)){
				$errors['cena_do']='* upisite brojevima';
					}
			if (!empty($cena_od) && !is_numeric($cena_od)){
				$errors['cena_od']='* upisite brojevima';
					}
			if ($cena_od > $cena_do){
				$errors['cena']='* nepravilno upisana cena';
			}
			if(empty($e_mail_potraznje)){
				$errors['e_mail_potraznje']='* Niste upisali e mail';}
				
					
		if (count($errors)==0){
		
			
			$this->dao->insertIntoPotraznja($ime_prezime_potraznje, $kontakt_tel, $kontakt_tel_2, $kontakt_tel_3, $e_mail_potraznje, $status_kontakta, $izvor_podatka_p, $agent_p, $grad_p, $opstina_p, $deo_grada_p, $ulica_p, $some_data_p, $kvadratura_od, $kvadratura_do, $cena_od, $cena_do, $oprema_p, $tip_nepokretnosti_p, $dodaci_p, $tip_garaze_p, $provajder_p, date('d-m-Y'), $status_potraznje, $status_poslovanja_p);

			unset($_SESSION['potraznja']);
			
			$listapotraznja=$this->dao->selctFromPotraznja();
			
			$page_productpa='active';
			$page_ponuda='active';
			include 'app_link.php';
		
		}else {
			
			echo $msg='Nesto nije uredu, pokusajte ponovo';
			
			
			
			$listaagenata=$this->dao->selectFromAgent();
			$listastausakontakta=$this->dao->SelectFromStatusKontakta();
			$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
			$listaprovajdera=$this->dao->selectFromProvajder();
			$listagaraza=$this->dao->selectFromGaraza();
			$listadodataka=$this->dao->selectFromDodaci();
			$listastrukture=$this->dao->selectFromsome_data();
			$listagradova=$this->dao->selectFromGrad();
			$listaopstina=$this->dao->selectFromOpstina();
			$listadelova=$this->dao->selectFromDeo();
			$listatipova=$this->dao->selectFromTipNekretnine();
			$listaopreme=$this->dao->selectFromOpremljenost();
			
			$page_productpa='active';;
			$page_nova_potraznja = 'active';
			include 'app_link.php';
		}
		
	}
	
	public function showRealizacija(){
		$id_potraznje=isset($_POST['id_pot'])?$_POST['id_pot']:"";
		
		
		if (!empty($id_potraznje)){
			$nekretnine=$this->dao->selectFromNekretnina();
			$statusi=$this->dao->selectFromStatusPotraznje();
			$postojeca=$this->dao->selectRealizacijaByPotraznja($id_potraznje);
				foreach ($postojeca as $po) {
					$id_nek=$po['id_nekretnine'];
					$stat=$po['tip_realizacije'];
					$opi=$po['opis_realizacije'];
				}
			$page_productpa='active';
			$page_realizacija='active';
			include 'app_link.php';
		}else {
			$msg='Niste odabrali potraznju';
			$listapotraznja=$this->dao->selctFromPotraznja();
		
			$page_productpa='active';
			$page_ponuda='active';
			include 'app_link.php';
		}
	}
	
	public function ubaciRealizaciju(){
		
		$id_potraznje=isset($_POST['id_potraznje'])?$_POST['id_potraznje']:"";
		$id_nekretnine=isset($_POST['id_nekretnine'])?$_POST['id_nekretnine']:"";
		$tip_realizacije=isset($_POST['status'])?$_POST['status']:"";
		$opis_realizacije=isset($_POST['opis'])?$_POST['opis']:"";
		$datum=isset($_POST['datum'])?$_POST['datum']:"";
		
		$errors=array();
		$naziv_photos_primopredaje=$_FILES['foto']['name'];
		$naziv_photos_primopredaje_tmp = $_FILES['foto']['tmp_name'];
		$naziv_dokumenta=$_FILES['doc']['name'];
		$naziv_dokumenta_tmp =$_FILES['doc']['tmp_name'];

			$vlasnik=$this->dao->selectFromNekretninaById($id_nekretnine);
			foreach ($vlasnik as $vl){
				$id_vla=$vl['id_vlasnika'];
			}
			$id_vlasnika=isset($id_vla)?$id_vla:"";
			
			$this->dao->insertIntoRealizacija(date('d-m-Y'), $tip_realizacije, $opis_realizacije, $id_nekretnine, $id_vlasnika, $id_potraznje, $datum);
			$this->dao->updateStatusPotraznjeById($tip_realizacije, $id_potraznje);
			if ($tip_realizacije=='realizovan'){
				$this->dao->updateStatusAktivnostiByIdNek(date('d-m-Y'), 'Nije', $datum, $id_nekretnine);
			}
			$id_real=$this->dao->selectFromRealizacijaPoslednja();
			$id_realizacije=$id_real['id_realizacije'];
			if (!empty($naziv_photos_primopredaje)){
					
					$ima=$this->dao->selectphotosRealizacijeByIdRealizacije($id_realizacije);
					$moguce=40-count($ima);
					if (count($naziv_photos_primopredaje)+count($ima)>40){
						$errors['mnogo_slika']='* <br>moguce je dodati '.$moguce.' fotografija';
					}
					foreach ($naziv_photos_primopredaje as $n_s) {
						$ext_photos = strtolower(pathinfo($n_s, PATHINFO_EXTENSION));
						if($ext_photos != "jpg" && $ext_photos != "png" && $ext_photos != "jpeg" && $ext_photos != "gif" ){
							$errors['ext_slika']='* <br>photos moraju biti JPG, PNG, JPEG ili GIF formata';
						}
					}
			}elseif (!empty($naziv_dokumenta)) {
				if (!empty($naziv_dokumenta)){
					if (count($naziv_dokumenta)>10){
						$errors['mnogo_dok']='* Ne mozete uneti vise od 10 dokumenata';
					}
					$provera_imena=$this->dao->selectFromDokumenta();
						foreach ($provera_imena as $pi) {
							if ($naziv_dokumenta==$pi['naziv_dokumenta']){
					 			$errors['dok_postojeci']='* Odaberite jedinstven naziv dokumenta';
							}
						}
						foreach ($naziv_dokumenta as $n_d) {
							$ext = pathinfo($n_d, PATHINFO_EXTENSION);
								if(!empty($ext)&& $ext!= "pdf"){
									$errors['ext_dok']='* Dokumenta moraju biti PDF formata';
								}
						}
				}
			}
			
		if (count($errors)==0){
			foreach ($_FILES['foto']['tmp_name'] as $key=>$tmp_name){
				$naziv_photos_primopredaje=$_FILES['foto']['name'][$key];
				$naziv_photos_primopredaje_tmp = $_FILES['foto']['tmp_name'][$key];
	
				$this->dao->insertIntophotosRealizacija('P'.$id_realizacije.$naziv_photos_primopredaje, $id_realizacije, $id_nekretnine);
				move_uploaded_file($naziv_photos_primopredaje_tmp, "../css/primopredaja/P$id_realizacije$naziv_photos_primopredaje");                   
	                
			}
		}
		$listapotraznja=$this->dao->selctFromPotraznja();
			
			$page_productpa='active';
			$page_ponuda='active';
			include 'app_link.php';
		
	}
	
	public function showKarticaPotraznje(){
		$id_potraznje=isset($_GET['id_potraznje'])?$_GET['id_potraznje']:"";
		
		
		$listapotraznji=$this->dao->selctFromPotraznjaById($id_potraznje);
		
		$page_productpa='active';
		$page_kartica_potreznje='active';
		include 'app_link.php';
	}
	
	public function showAzuriranjePotraznje(){
		
		$id_potraznje=isset($_GET['id_pot'])?$_GET['id_pot']:"";
		
		
		$listaagenata=$this->dao->selectFromAgent();
		$listastausakontakta=$this->dao->SelectFromStatusKontakta();
		$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
		$listaprovajdera=$this->dao->selectFromProvajder();
		$listagaraza=$this->dao->selectFromGaraza();
		$listadodataka=$this->dao->selectFromDodaci();
		$listastrukture=$this->dao->selectFromsome_data();
		$listagradova=$this->dao->selectFromGrad();
		$listaopstina=$this->dao->selectFromOpstina();
		$listadelova=$this->dao->selectFromDeo();
		$listatipova=$this->dao->selectFromTipNekretnine();
		$listaopreme=$this->dao->selectFromOpremljenost();
		$listapotraznji=$this->dao->selctFromPotraznjaById($id_potraznje);
		
		$page_productpa='active';
		$page_azuriranje_potraznje='active';
		include 'app_link.php';
	}
	
	public function azurirajPotraznju(){
		$status_potraznje=isset($_POST['status_potraznje'])?$_POST['status_potraznje']:"";
		$kontakt_tel=isset($_POST['kontakt_telefon_p'])?$_POST['kontakt_telefon_p']:"";
		$kontakt_tel_2=isset($_POST['kontakt_2'])?$_POST['kontakt_2']:"";
		$kontakt_tel_3=isset($_POST['kontakt_3'])?$_POST['kontakt_3']:"";
		$izvor_podatka_p=isset($_POST['izvor_podatka_p'])?$_POST['izvor_podatka_p']:"";
		$ime_prezime_potraznje=isset($_POST['ime_prezime_p'])?$_POST['ime_prezime_p']:"";
		$e_mail_potraznje=isset($_POST['e_mail_p'])?$_POST['e_mail_p']:"";
		$status_kontakta=isset($_POST['status_kotakta'])?$_POST['status_kotakta']:"";
		$agent_p=isset($_POST['agent_p'])?$_POST['agent_p']:"";
		
		$grad_p=isset($_POST['grad_p'])?$_POST['grad_p']:"";
		$opstina_p=isset($_POST['opstina_p'])?$_POST['opstina_p']:"";
		$deo_grada_p=isset($_POST['deo_p'])?$_POST['deo_p']:"";
		$ulica_p=isset($_POST['ulica_p'])?$_POST['ulica_p']:"";
		$kvadratura_od=isset($_POST['kvadratura_od'])?$_POST['kvadratura_od']:"";
		$kvadratura_do=isset($_POST['kvadratura_do'])?$_POST['kvadratura_do']:"";
		$some_data_p=isset($_POST['some_data_p'])?$_POST['some_data_p']:"";
		$cena_od=isset($_POST['cena_od'])?$_POST['cena_od']:"";
		$cena_do=isset($_POST['cena_do'])?$_POST['cena_do']:"";
		$tip_nek_p=isset($_POST['tip_nekretnine_p'])?$_POST['tip_nekretnine_p']:array();
		$oprema_p=isset($_POST['oprema_p'])?$_POST['oprema_p']:"";

		$dod_p=isset($_POST['dodaci_p'])?$_POST['dodaci_p']:array();
		$gar_p=isset($_POST['garaza_p'])?$_POST['garaza_p']:array();
		$prov_p=isset($_POST['provajder_p'])?$_POST['provajder_p']:array();
		$id_potraznje=isset($_POST['id_potraznje'])?$_POST['id_potraznje']:"";

		$tip_nepokretnosti_p=implode(', ', $tip_nek_p);
		$dodaci_p=implode(', ', $dod_p);
		$tip_garaze_p=implode(', ', $gar_p);
		$provajder_p= implode(', ', $prov_p);

		$errors=array();
			if (!empty($kontakt_tel) && !is_numeric($kontakt_tel)){
				 $errors['kontakt_tel']='* upisite brojevima';
					}
			if (!empty($kontakt_tel_2) && !is_numeric($kontakt_tel_2)){
				$errors['kontakt_tel_2']='* upisite brojevima';
					}
			if (!empty($kontakt_tel_3) && !is_numeric($kontakt_tel_3)){
				$errors['kontakt_tel_3']='* upisite brojevima';
					}
			if (!empty($kvadratura_do) && !is_numeric($kvadratura_do)){
				$errors['kvadratura_do']='* upisite brojevima';
					}
			if (!empty($kvadratura_od) && !is_numeric($kvadratura_od)){
				$errors['kvadratura_od']='* upisite brojevima';
					}
			if ($kvadratura_od > $kvadratura_do){
				$errors['kvadratura']='* nepravilno upisana kvadratura';
			}
			if (!empty($cena_do) && !is_numeric($cena_do)){
				$errors['cena_do']='* upisite brojevima';
					}
			if (!empty($cena_od) && !is_numeric($cena_od)){
				$errors['cena_od']='* upisite brojevima';
					}
			if ($cena_od > $cena_do){
				$errors['cena']='* nepravilno upisana cena';
			}
			if(empty($e_mail_potraznje)){
				$errors['e_mail_potraznje']='* Niste upisali e mail';}
				
					
		if (count($errors)==0){
			
			
			$this->dao->updatePotraznjaById($ime_prezime_potraznje, $kontakt_tel, $kontakt_tel_2, $kontakt_tel_3, $e_mail_potraznje, $status_kontakta, $izvor_podatka_p, $agent_p, $grad_p, $opstina_p, $deo_grada_p, $ulica_p, $some_data_p, $kvadratura_od, $kvadratura_do, $cena_od, $cena_do, $oprema_p, $tip_nepokretnosti_p, $dodaci_p, $tip_garaze_p, $provajder_p, date('d-m-Y'), $status_potraznje, $id_potraznje);
		
			$listapotraznja=$this->dao->selctFromPotraznja();
		
			$page_productpa='active';
			$page_ponuda='active';
			include 'app_link.php';
		}else {
			
			echo $msg='Nesto nije uredu, pokusajte ponovo';
			
			$id_potraznje=isset($_POST['id_potraznje'])?$_POST['id_potraznje']:"";
		
			
			$listaagenata=$this->dao->selectFromAgent();
			$listastausakontakta=$this->dao->SelectFromStatusKontakta();
			$lisatizvorapodatka=$this->dao->selectFromIzvorPodatka();
			$listaprovajdera=$this->dao->selectFromProvajder();
			$listagaraza=$this->dao->selectFromGaraza();
			$listadodataka=$this->dao->selectFromDodaci();
			$listastrukture=$this->dao->selectFromsome_data();
			$listagradova=$this->dao->selectFromGrad();
			$listaopstina=$this->dao->selectFromOpstina();
			$listadelova=$this->dao->selectFromDeo();
			$listatipova=$this->dao->selectFromTipNekretnine();
			$listaopreme=$this->dao->selectFromOpremljenost();
			$listapotraznji=$this->dao->selctFromPotraznjaById($id_potraznje);
			
			$page_productpa='active';
			$page_azuriranje_potraznje='active';
			include 'app_link.php';
		}


	}
 
    public function brisiPotraznju(){
    	
			$id_potraznje=isset($_GET['id_pot'])?$_GET['id_pot']:"";
			
			
			
			$ima=$this->dao->selectRealizacijaByPotraznja($id_potraznje);
			if (!empty($ima)){
				foreach ($ima as $i) {
					$id_realizacije=$i['id_realizacije'];
				$photos=$this->dao->selectphotosRealizacijeByIdRealizacije($id_realizacije);
					if (!empty($photos)){
						foreach ($photos as $sl) {
							$this->dao->deletephotosPrimopredajeByIdRealizacije($sl['id_realizacije']);
							$file= '../css/primopredaja/'.$sl['naziv_photos_primopredaje'];
          			  		unlink($file);	
						}
					}
				}
					
				$this->dao->deleteRealizacijaById($id_potraznje);
			}
			$this->dao->deletePotraznjaById($id_potraznje);

	}
}

?>
