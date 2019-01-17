<?php
	require_once '../controller/Controller.php';
	require_once '../controller/HomeController.php';
	require_once '../controller/logController.php';
	require_once '../controller/productController.php';
	require_once '../controller/newProductController.php';
	require_once '../controller/photoController.php';
	require_once '../controller/ownerController.php';
	require_once '../controller/ProductTypeConteroller.php';
	require_once '../controller/EquipmentController.php';
	require_once '../controller/LocationOneController.php';
	require_once '../controller/LocationTwoController.php';
	require_once '../controller/LocationThreeController.php';
	require_once '../controller/StructureController.php';
	
		$controller = new Controller();
		$homeController = new HomeController();
		$logController = new logController();
		$productController = new productController();
		$newProducController = new newProductController();
		$photoController = new photoController();
		$ownerController = new ownerController();
		$proTypeController = new ProducTypeController();
		$equipmentController = new EquipmentController();
		$locOneController = new LocationOneController();
		$locTwoController = new LocationTwoController();
		$locThreeController = new LocationThreeController();
		$structureController = new StructureController();

	if ($_SERVER['REQUEST_METHOD']=='POST'){
	  
	  $page=isset($_POST['page'])?$_POST['page']:"";
		
	switch ($page){
		
		case 'Log in':
			$logController->login();
			break;
		case 'pretraga_nek':
			$controller->pretraziNek(); //pretraga nekretnina izdavanja
			break;
		case 'pretraga_kon':
			$controller->pretraziKon(); //pretraga vlasnika
			break;
		case 'newTypeProduct':
			$proTypeController->newProductType();
			break;
		case'newequipment':
			$equipmentController->newEquipment();
			break;
		case 'newstructure':
			$structureController->newStructure();
			break;
		case 'newlocation1':
			$locOneController->newLocation1();
			break;
		case'newlocation2':
			$locTwoController->newLocation2();
			break;
		case'newlocation3':
			$locThreeController->newLocation3();
			break;
		case 'confirm_info':
			$newProducController->getData();
			break;
		case 'ConfirmOwner':
			$newProducController->confirmOwner(); 
			break;
		case 'signing':
			$controller->signing(); //upis agenta
			break;
		case 'novistatuskontakta':
			$controller->noviStatusKontakta(); //dodavanje vlasnik podataka adminu
			break;
		case 'noviizvorpodatka':
			$controller->noviIzvorPodatka(); //dodavanje izvora kontakta vlasnika adminu
			break;
		case 'confirm_edit_product':
			$productController->editProduct();
			break;
		case 'confirm_edit_owner':
			$ownerController->editOwner();
			break;
		case 'Confirm_photos':
			$newProducController->insertPhotos();
			break;
		case 'potvrdapotraznje':
			$controller->potvrdaPotraznje(); //upis potraznje u tabelu
			break;
		case 'send':
			$controller->Send();
			break;
		case 'Izmeni_slike':
			$controller->editSlike(); //kartica pregleda slika sa opcijama brisanja i dodavanja
			break;
		case 'posaljiponudu':
			$productController->showSendOffer();
			break;
		case 'realizacija':
			$controller->showRealizacija();
			break;
		case 'azurirajpotraznju':
			$controller->azurirajPotraznju(); //izmena podataka potraznje u tabeli
			break;
		case 'pause':
        	$newProducController->pause();
        	break;
        case 'dodaj_dokumenta':
        	$controller->dodajDokumenta(); //dodavanje nekumenta u tabelu i folder po id vasnika
        	break;
         case 'pauzirajpotraznju':
        	$controller->pauzirajPotraznju(); //ubacivanje podataka potraznje u sesiju
        	break;
        case 'pretraga_potraznje':
        	$controller->searchPotraznju(); //pretrazivanje podataka potraznje
        	break;
         case 'novstatus':
        	$controller->novStatus(); 
        	break;
         case 'ubaci_realizaciju':
         	$controller->ubaciRealizaciju();
         	break;
         default:
			$controller->showHome();
	}

} else {

	$page=$_GET['page'];
	
	switch ($page){
		
		case 'Logout':
			$logController->logout();
			break;
		case 'type':
			$proTypeController->showTypeProduct();
			break;
		case 'delete_equipment':
			$equipmentController->deleteEquipment();
			$equipmentController->showEquipment();
			break;
		case 'structure':
			$structureController->showStructure();
			break;
		case 'delete_structure':
			$structureController->deleteStructure();
			$structureController->showStructure();
			break;
		case 'deletelocation1':
			$locOneController->deleteLocation1();
			$locOneController->showLocation();
			break;
		case 'deletelocation2':
			$locTwoController->deleteLocation2();
			$locTwoController->showLocation2();
			break;
		case 'deletelocation3':
			$locThreeController->deleteLocation3();
			$locThreeController->showLocation3();
			break;
		case 'upis_potraznja':
			$controller->upisPotraznje();
			break;
		case 'kartica_klijenta': //prikaz str kartice vlasnika
			$controller->karticaKlijenta();
			break;
		case 'delete_product';
			$productController->deleteProduct();
			$productController->showProdust();
			break;
		case 'nova_potraznja':
			$controller->novaPotraznja();
			break;
		case 'editphotos':
			$photoController->showEditPhotos();
			break;			
		case 'deletephoto'://brisanje slike po ID slike
			$photoController->deletePhoto();
			break;
        case 'brisipotraznju':
        	$controller->brisiPotraznju();
        	$controller->showPotraznja();
        	break;
		case 'delete_owner':
			$ownerController->deleteOwner();
			$ownerController->showOwners(); 
			break;
		case 'kliknek':
			$homeController->klikPro();
			$productController->showProduct();
			break;
		case 'klikon':
			$homeController->kliOwn(); 
			$controller->showKlijenti(); 
			break;
		case 'unsetreminder':
			$homeController->unsetKukiPro();
			$productController->showProductCard();
			break;
		case 'unsetremindero':
			$homeController->unsetKukiOwn(); 
			$controller->karticaKlijenta();
			break;
		case 'owners_doc':
			$controller->showOwnersDoc(); //prikaz dokumenta po ID vlsanika
			break;
		case 'pregled_dok_po_naz':
			$controller->showDokument();
			break;
		case 'izbrisi_dok_po_naz':
			$controller->brisiDokument(); //brisanje dokumenta vlasnika izdavanja
			break;
		case 'birth_view':
			$homeController->showBirth_view();
			break;
		case 'azuriranjeslika':
			$controller->showAzuriranjeSlika();
			break;
		case'edit_product':
			$productController->showEditCard();
			break;
		case 'show_photos':
			$photoController->showProductPhotos();
			break;
		case 'kartica_agenta':
			$controller->showKarticaAgenta();
        	break;
        case 'azuriraj_agenta':
        	$controller->showAzuriranjeAgenta();
        	break;
        case'owner';
			$newProducController->showOwner();
			break;
		case 'kartica_potraznje':
			$controller->showKarticaPotraznje();
			break;
		case 'azuriranjepotraznje':
			$controller->showAzuriranjePotraznje();
			break;	
		case'corporate':
			$newProducController->showCorporate();
			break;
		case 'edit_owner':
			$ownerController->showEditOwnerCard();
			break;	
		case'personal':
			$newProducController->showPersonal();
			break;
		case 'product':
			$productController->showProduct();
			break;
		case 'prodaja':
			$controller->showProdaja();
			break;
		case 'potraznja':
			$controller->showPotraznja();
			break;
		case 'view_product_card':
			$productController->showProductCard();
			break;
		case 'owners':
			$ownerController->showOwners();
			break;
		case 'new_product':
		case 'dodaj_nekretninu':
			$newProducController->showInfo(); //upis podataka nekretnine u tabelu
			break;	
		case'equipment':
			$equipmentController->showEquipment();
			break;
		case'location':
			$locOneController->showLocation();
			break;
		case'location2':
			$locTwoController->showLocation2();
			break;
		case'location3':
			$locThreeController->showLocation3();
			break;
		case'vlasnik_baza':
			$controller->showVlasnikBaza();
			break;
		case'status_kontakta':
			$controller->showStatusKontakta();
			break;
		case'agent_baza':
			$controller->showAgenta();
			break;
		case'upis_agenta':
			$controller->showUpisAgenta();
			break;
		case'home':
			$homeController->showHome();
			break;
		case 'izvor_podatka':
			$controller->showIzvorPodatka();
			break;
		case 'lista_agenta':
			$controller->listaAgenta();
			break;
		case 'photos':
			$newProducController->showPhotos();
			break;
		case 'Pretazi':
			$controller->Pretrazi();
			break;
		case 'potraznja_baza':
			$controller->potraznjaBaza();
			break;
		case 'obrisistatus':
			$controller->obrisiStatus();
			$controller->potraznjaBaza();
			break;
		default:
			$homeController->showHome();
			
 }

}

?>