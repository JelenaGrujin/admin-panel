<?php 

require_once '../controller/Controller.php';
require_once '../controller/ownerController.php';
require_once '../controller/ProductTypeConteroller.php';
require_once '../session/Session.php';

class newProductController extends Controller{	
	
	public $datainfo=array('id_euro', 'location_data_1', 'location_data_2', 'location_data_3', 'addres_location', 'adres_num', 'number', 'object', 'flors', 'of_flors', 'price', 'min_price', 'deposit', 'commission', 'payment', 'square', 'surface_area', 'equipment', 'celing_height', 'structure', 'heating', 'carpentry', 'kitchen', 'num_rooms', 'num_bath', 'num_wc', 'num_terrace', 'level', 'salon_m', 'security', 'num_elevator', 'construc_year', 'num_air_con', 'num_garages', 'note', 'description', 'active', 'active_data', 'info', 'electricity', 'network', 'maintenance', 'accessories', 'garage', 'provider', 'type_terrace', 'type_bath', 'product_type', 'business_status');
	private $session_name='product';
	
	public function __construct() {
		parent::__construct();
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
		$this->daostructure = new StructureDao(); 
		$this->owncon = new ownerController();
		$this->protyco = new ProducTypeController();
		$this->sesia = new Session();

	}
	
	public function showInfo(){
		
		$id_owner=isset($_GET['id_owner'])?$_GET['id_owner']:"";
		
		$typeslist=$this->daotype->selectFromProductType();
		$equilist=$this->daoequipment->selectFromEquipment();
		$listlocation1=$this->daolone->selectFromLocation1();
		$listlocation2=$this->daoltwo->selectFromLocation2();
		$listlocation3=$this->daolthree->selectFromLocation3();
		$strlist=$this->daostructure->selectFromStructure();
 
		if ($this->sesia->sessionExist($this->session_name)==true){
			$k=$this->sesia->getSessionData($this->session_name);
			
			foreach ($k as $key=>$dinfo) {
			    	$id_euro=$dinfo['0'];
				$location_data_1=$dinfo['1']; 
				$location_data_2=$dinfo['2']; 
				$location_data_3=$dinfo['3']; 
				$addres_location=$dinfo['4']; 
				$adres_num=$dinfo['5']; 
				$number=$dinfo['6']; 
				$object=$dinfo['7']; 
				$flors=$dinfo['8']; 
				$of_flors=$dinfo['9']; 
				$price=$dinfo['10']; 
				$min_price=$dinfo['11']; 
				$deposit=$dinfo['12']; 
				$commission=$dinfo['13']; 
				$payment=$dinfo['14']; 
				$square=$dinfo['15']; 
				$surface_area=$dinfo['16']; 
				$equipment=$dinfo['17']; 
				$celing_height=$dinfo['18']; 
				$structure=$dinfo['19']; 
				$hea=$dinfo['20']; 
				$heating= explode(', ', $hea);
				$car=$dinfo['21']; 
				$carpentry= explode(', ', $car);
				$kitchen=$dinfo['22']; 
				$num_rooms=$dinfo['23']; 
				$num_bath=$dinfo['24']; 
				$num_wc=$dinfo['25']; 
				$num_terrace=$dinfo['26']; 
				$level=$dinfo['27']; 
				$salon_m=$dinfo['28']; 
				$sec=$dinfo['29'];
				$security= explode(', ', $sec); 
				$num_elevator=$dinfo['30']; 
				$construc_year=$dinfo['31']; 
				$num_air_con=$dinfo['32']; 
				$num_garages=$dinfo['33']; 
				$note=$dinfo['34']; 
				$description=$dinfo['35']; 
				$active=$dinfo['36']; 
				$active_data=$dinfo['37']; 
				$info=$dinfo['38']; 
				$electricity=$dinfo['39']; 
				$network=$dinfo['40']; 
				$maintenance=$dinfo['41']; 
				$aces=$dinfo['42']; 
				$accessories= explode(', ', $aces);
				$gar=$dinfo['43']; 
				$garage= explode(', ', $gar);
				$pro=$dinfo['44']; 
				$provider= explode(', ', $pro);
				$ter=$dinfo['45']; 
				$type_terrace= explode(', ', $ter);
				$bath=$dinfo['46']; 
				$type_bath= explode(', ', $bath);
				$prod=$dinfo['47'];
				$product_type= explode(', ', $prod);
				$business_status=$dinfo['48'];
			}
			
		}
		
		$page_new_product='active';
		$page_info='active';
		$page_productpa='active';
		include 'productfiles/new_pro_link.php';
		
		
	}
	
	public function insertInfo($datainfo){

		if ($id_owner==NULL) {

		$datainfo=array($id_euro, $location_data_1, $location_data_2, $location_data_3, $addres_location, $adres_num, $number, $object, $flors, $of_flors, $price, $min_price, $deposit, $commission, $payment, $square, $surface_area, $equipment, $celing_height, $structure, $heating, $carpentry, $kitchen, $num_rooms, $num_bath, $num_wc, $num_terrace, $level, $salon_m, $security, $num_elevator, $construc_year, $num_air_con, $num_garages, $note, $description, $active, $active_data, $info, $electricity, $network, $maintenance, $accessories, $garage, $provider, $type_terrace, $type_bath, $product_type, $business_status);
			if ($datainfo){
				$this->sesia->create_session($this->session_name);
				$this->sesia->fillSession($this->session_name, $datainfo);
				$msg='successfully';
				self::showOwner();
			}else {
				echo $msg='something is wrong';
				
				self::showInfo();
			}
				
		}else {
			
				$this->daopro->insertIntoProducts($id_euro, $date_insert, $location_data_1, $location_data_2, $location_data_3, $addres_location, $adres_num, $number, $object, $flors, $of_flors, $price, $min_price, $deposit, $commission, $payment, $square, $surface_area, $equipment, $celing_height, $structure, $heating, $carpentry, $kitchen, $num_rooms, $num_bath, $num_wc, $num_terrace, $level, $salon_m, $security, $num_elevator, $construc_year, $num_air_con, $num_garages, $note, $description, $active, $active_data, $info, $electricity, $network, $maintenance, $accessories, $garage, $provider, $type_terrace, $type_bath, $product_type, $business_status, $id_owner);
				$id_owner=isset($_POST['id_owner'])?$_POST['id_owner']:"";

				$owner=$this->daoown->selectFromOwnersById($id_owner);
			    $product=$this->daopro->selectFromProductByIdOwner($id_owner);
				$this->owncon->ownerCard();
		}
			
	}
	
	public function getData(){
		
		$id_euro=isset($_POST['id_euro'])?$_POST['id_euro']:"";
		$location_data_1=isset($_POST['location_data_1'])?$_POST['location_data_1']:"";
		$location_data_2=isset($_POST['location_data_2'])?$_POST['location_data_2']:"";
		$location_data_3=isset($_POST['location_data_3'])?$_POST['location_data_3']:"";
		$addres_location=isset($_POST['addres_location'])?$_POST['addres_location']:"";
		$adres_num=isset($_POST['adres_num'])?$_POST['adres_num']:"";
		$number=isset($_POST['number'])?$_POST['number']:"";
		$object=isset($_POST['object'])?$_POST['object']:"";
		$flors=isset($_POST['flors'])?$_POST['flors']:"";
		$of_flors=isset($_POST['of_flors'])?$_POST['of_flors']:"";
		$price=isset($_POST['price'])?$_POST['price']:"";
		$min_price=isset($_POST['min_price'])?$_POST['min_price']:"";
		$deposit=isset($_POST['deposit'])?$_POST['deposit']:"";
		$commission=isset($_POST['commission'])?$_POST['commission']:"";
		$payment=isset($_POST['payment'])?$_POST['payment']:"";
		$square=isset($_POST['square'])?$_POST['square']:"";
		$surface_area=isset($_POST['surface_area'])?$_POST['surface_area']:"";
		$equipment=isset($_POST['equipment'])?$_POST['equipment']:"";
		$celing_height=isset($_POST['celing_height'])?$_POST['celing_height']:"";
		$structure=isset($_POST['structure'])?$_POST['structure']:"";
		$kitchen=isset($_POST['kitchen'])?$_POST['kitchen']:"";
		$num_rooms=isset($_POST['br_soba'])?$_POST['br_soba']:"";
		$num_bath=isset($_POST['kupatila'])?$_POST['kupatila']:"";
		$num_wc=isset($_POST['num_wc'])?$_POST['num_wc']:"";
		$num_terrace=isset($_POST['terasa'])?$_POST['terasa']:"";
		$level=isset($_POST['level'])?$_POST['level']:"";
		$salon_m=isset($_POST['salon_m'])?$_POST['salon_m']:"";
		$sec=isset($_POST['security'])?$_POST['security']:array();
		$num_elevator=isset($_POST['num_elevator'])?$_POST['num_elevator']:"";
		$construc_year=isset($_POST['construc_year'])?$_POST['construc_year']:"";
		$num_air_con=isset($_POST['num_air_con'])?$_POST['num_air_con']:"";
		$num_garages=isset($_POST['num_garages'])?$_POST['num_garages']:"";
		$note=isset($_POST['note'])?$_POST['note']:"";
		$description=isset($_POST['description'])?$_POST['description']:"";
		$active=isset($_POST['active'])?$_POST['active']:"";
		$active_data=isset($_POST['active_data'])?$_POST['active_data']:"";
		$info=isset($_POST['info'])?$_POST['info']:"";
		$electricity=isset($_POST['electricity'])?$_POST['electricity']:"";
		$network=isset($_POST['network'])?$_POST['network']:"";
		$maintenance=isset($_POST['maintenance'])?$_POST['maintenance']:"";
		$aces=isset($_POST['accessories'])?$_POST['accessories']:array();
		$gar=isset($_POST['garage'])?$_POST['garage']:array();
		$pro=isset($_POST['provider'])?$_POST['provider']:array();
		$bath=isset($_POST['type_bath'])?$_POST['type_bath']:array();
		$ter=isset($_POST['type_terrace'])?$_POST['type_terrace']:array();
		$prod=isset($_POST['product_type'])?$_POST['product_type']:array();
		$hea=isset($_POST['heating'])?$_POST['heating']:array();
		$car=isset($_POST['carpentry'])?$_POST['carpentry']:array();
		$business_status=isset($_POST['business_status'])?$_POST['business_status']:"";
		
		$provider= implode(', ', $pro);
		$type_bath=implode(', ', $bath);
		$product_type=implode(', ', $prod);
		$type_terrace=implode(', ', $ter);
		$accessories=implode(', ', $aces);
		$heating=implode(', ', $hea);
		$carpentry=implode(', ', $car);
		$security=implode(', ', $sec);
		$garage=implode(', ', $gar);
		
		$postinfo=array($id_euro, $location_data_1, $location_data_2, $location_data_3, $addres_location, $adres_num, $number, $object, $flors, $of_flors, $price, $min_price, $deposit, $commission, $payment, $square, $surface_area, $equipment, $celing_height, $structure, $heating, $carpentry, $kitchen, $num_rooms, $num_bath, $num_wc, $num_terrace, $level, $salon_m, $security, $num_elevator, $construc_year, $num_air_con, $num_garages, $note, $description, $active, $active_data, $info, $electricity, $network, $maintenance, $accessories, $garage, $provider, $type_terrace, $type_bath, $product_type, $business_status);
		$productinfo=array_combine($this->datainfo, $postinfo);
		return $productinfo;
		
	}
	
	public function unpackProductData($datafrompost){
		
		foreach ($datainfo as $k=>$dinfo) {
				$id_euro=$dinfo['0']; 
				$location_data_1=$dinfo['2']; 
				$location_data_2=$dinfo['3']; 
				$location_data_3=$dinfo['4']; 
				$addres_location=$dinfo['5']; 
				$adres_num=$dinfo['6']; 
				$number=$dinfo['7']; 
				$object=$dinfo['8']; 
				$flors=$dinfo['9']; 
				$of_flors=$dinfo['10']; 
				$price=$dinfo['11']; 
				$min_price=$dinfo['12']; 
				$deposit=$dinfo['13']; 
				$commission=$dinfo['14']; 
				$payment=$dinfo['15']; 
				$square=$dinfo['16']; 
				$surface_area=$dinfo['17']; 
				$equipment=$dinfo['18']; 
				$celing_height=$dinfo['19']; 
				$structure=$dinfo['20']; 
				$hea=$dinfo['21']; 
				$heating= explode(', ', $hea);
				$car=$dinfo['22']; 
				$carpentry= explode(', ', $car);
				$kitchen=$dinfo['23']; 
				$num_rooms=$dinfo['24']; 
				$num_bath=$dinfo['25']; 
				$num_wc=$dinfo['26']; 
				$num_terrace=$dinfo['27']; 
				$level=$dinfo['28']; 
				$salon_m=$dinfo['29']; 
				$sec=$dinfo['30'];
				$security= explode(', ', $sec); 
				$num_elevator=$dinfo['31']; 
				$construc_year=$dinfo['32']; 
				$num_air_con=$dinfo['33']; 
				$num_garages=$dinfo['34']; 
				$note=$dinfo['35']; 
				$description=$dinfo['36']; 
				$active=$dinfo['37']; 
				$active_data=$dinfo['38']; 
				$info=$dinfo['39']; 
				$electricity=$dinfo['40']; 
				$network=$dinfo['41']; 
				$maintenance=$dinfo['42']; 
				$aces=$dinfo['43']; 
				$accessories= explode(', ', $aces);
				$gar=$dinfo['44']; 
				$garage= explode(', ', $gar);
				$pro=$dinfo['45']; 
				$provider= explode(', ', $pro);
				$ter=$dinfo['46']; 
				$type_terrace= explode(', ', $ter);
				$bath=$dinfo['47']; 
				$type_bath= explode(', ', $bath);
				$prod=$dinfo['48'];
				$product_type= explode(', ', $prod);
				$business_status=$dinfo['48'];
			}
			
			
			return array($id_euro, $location_data_1, $location_data_2, $location_data_3, $addres_location, $adres_num, $number, $object, $flors, $of_flors, $price, $min_price, $deposit, $commission, $payment, $square, $surface_area, $equipment, $celing_height, $structure, $heating, $carpentry, $kitchen, $num_rooms, $num_bath, $num_wc, $num_terrace, $level, $salon_m, $security, $num_elevator, $construc_year, $num_air_con, $num_garages, $note, $description, $active, $active_data, $info, $electricity, $network, $maintenance, $accessories, $garage, $provider, $type_terrace, $type_bath, $product_type, $business_status);
	
	}
	
	public function pause(){
		
		if ($this->sesia->sessionExist($this->session_name)==true){
			$this->sesia->offSession($this->session_name);
		}
		$productinfo=self::getData();
		

			$this->sesia->create_session($this->session_name);
			$this->sesia->fillSession($this->session_name, $productinfo);
			
		//if (--){
			$this->protyco->showTypeProduct();
			
		//}else {
			
		//	$msg='try again';
		//	self::showInfo();
			
		//}
		
	}
	
	public function confirmData(){
		//make rules array!!!!
		$data=self::getData();
		$filter=$this->v->validate($data, $rules);
		if (!empty($filter)){
			self::showInfo();
		}else {
			self::insertInfo($data);
		}
	}
	
	public function showOwner(){
		
		$page_new_product='active';
		$page_productpa='active';
		$page_owner='active';
		include 'productfiles/new_pro_link.php';
	
	}
	
		public function showCorporate() {
		
		$agentlist=$this->daouser->selectFromUsers();

		$page_new_product='active';
		$page_productpa='active';
		$page_owner='active';
		$page_corporate = 'active';
		include 'productfiles/new_pro_link.php';
	}
	
	public function showPersonal() {
			
		$agentlist=$this->daouser->selectFromUsers();	
		
		$page_new_product='active';
		$page_productpa='active';
		$page_owner='active';
		$page_personal = 'active';
		include 'productfiles/new_pro_link.php';
	}
		
	public function confirmOwner(){

		$fildata= $this->owncon->filterOwner($owner_name,$phone,$phone_1,$e_mail,$source,$b_day,$title,$owner_type,$owner_address,$e_mail_owner,$name_3,$phone_3,$e_mail_3,$name_4,$phone_4,$e_mail_4,$name_5,$phone_5,$e_mail_5,$name_6,$phone_6,$e_mail_6,$name_7,$phone_7,$e_mail_7,$name_8,$phone_8,$e_mail_8,$name_9,$phone_9,$e_mail_3,$company_name,$tin,$company_num,$activity_code,$company_adres,$responsible_person,$id_num,$UMCN,$agent,$type_owner);
		$fildoc= $this->owncon->filterOwnersDoc($name_doc,$name_doc_tmp);
		
		
				if ($fildoc || $fildoc == true){	
		session_start();
		$sesija=isset($_SESSION[$this->session_name])?$_SESSION[$this->session_name]:array();

		if ($sesija){
			
			$this->daoown->insertIntoOwners(date('d-m-Y'), $owner_name, $phone, $phone_1, $e_mail, $source, $b_day, $title, $owner_type, $owner_address, $e_mail_owner, $name_3, $phone_3, $e_mail_3, $name_4, $phone_4, $e_mail_4, $name_5, $phone_5, $e_mail_5, $name_6, $phone_6, $e_mail_6, $name_7, $phone_7, $e_mail_7, $name_8, $phone_8, $e_mail_8, $name_9, $phone_9, $e_mail_9, $company_name, $tin, $company_num, $activity_code, $company_adres, $responsible_person, $id_num, $UMCN, $agent, $type_owner);
			$id_con=$this->daoown->selectFromOwnersLastOne();
			$id_owner=$id_con['id_owner'];
			
			foreach ($_FILES['doc']['tmp_name'] as $key=>$tmp_name){
				$name_doc=$_FILES['doc']['name'][$key];
				$name_doc_tmp = $_FILES['doc']['tmp_name'][$key];
					if (!empty($name_doc) && !empty($name_doc_tmp)){
						$this->dao->insertIntoOwnersDoc($name_doc, $id_owner);
						move_uploaded_file($name_doc_tmp,"../css/documents/$name_doc");                  
					}
			}
	
		if (!empty($sesija)){

		foreach ($sesija as $dinfo){
			
			$id_euro=$dinfo['0']; 
			$date_insert=$dinfo['1']; 
			$location_data_1=$dinfo['2']; 
			$location_data_2=$dinfo['3']; 
			$location_data_3=$dinfo['4']; 
			$addres_location=$dinfo['5']; 
			$adres_num=$dinfo['6']; 
			$number=$dinfo['7']; 
			$object=$dinfo['8']; 
			$flors=$dinfo['9']; 
			$of_flors=$dinfo['10']; 
			$price=$dinfo['11']; 
			$min_price=$dinfo['12']; 
			$deposit=$dinfo['13']; 
			$commission=$dinfo['14']; 
			$payment=$dinfo['15']; 
			$square=$dinfo['16']; 
			$surface_area=$dinfo['17']; 
			$equipment=$dinfo['18']; 
			$celing_height=$dinfo['19']; 
			$structure=$dinfo['20']; 
			$hea=$dinfo['21']; 
			$heating= explode(', ', $hea);
			$car=$dinfo['22']; 
			$carpentry= explode(', ', $car);
			$kitchen=$dinfo['23']; 
			$num_rooms=$dinfo['24']; 
			$num_bath=$dinfo['25']; 
			$num_wc=$dinfo['26']; 
			$num_terrace=$dinfo['27']; 
			$level=$dinfo['28']; 
			$salon_m=$dinfo['29']; 
			$sec=$dinfo['30'];
			$security= explode(', ', $sec); 
			$num_elevator=$dinfo['31']; 
			$construc_year=$dinfo['32']; 
			$num_air_con=$dinfo['33']; 
			$num_garages=$dinfo['34']; 
			$note=$dinfo['35']; 
			$description=$dinfo['36']; 
			$active=$dinfo['37']; 
			$active_data=$dinfo['38']; 
			$info=$dinfo['39']; 
			$electricity=$dinfo['40']; 
			$network=$dinfo['41']; 
			$maintenance=$dinfo['42']; 
			$aces=$dinfo['43']; 
			$accessories= explode(', ', $aces);
			$gar=$dinfo['44']; 
			$garage= explode(', ', $gar);
			$pro=$dinfo['45']; 
			$provider= explode(', ', $pro);
			$ter=$dinfo['46']; 
			$type_terrace= explode(', ', $ter);
			$bath=$dinfo['47']; 
			$type_bath= explode(', ', $bath);
			$prod=$dinfo['48'];
			$product_type= explode(', ', $prod);
			
		}
		}
			$this->daoproduct->insertIntoProducts(date('d-m-Y'), $location_data_1, $location_data_2, $location_data_3, $name, $serial, $number, $some_data, $area, $price, $deposit, $activiti, $date, $note, $description, $mo, $id_owner);
			
			unset($_SESSION[$this->session_name]);
			
			$id_pro = $this->daoproduct->selectFromProductsLastOne();
			$id_p=$id_pro['id_products'];
		
			$msg='Successfully';
			$page_new_product='active';
			$page_productpa='active';
			$page_photos='active';
			include 'productfiles/new_pro_link.php';

	    }else{
		 	$msg='something is wrong';
	
			$typelist=$this->daotype->selectFromType();
			$equpmentlist=$this->daoequipment->selectFromEquipment();
			$listlocation1=$this->daolone->selectFromLocation1();
			$listlocation2=$this->daoltwo->selectFromLocation2();
			$listlocation3=$this->daolthree->selectFromLocation3();

			$page_new_product='active';
			$page_info='active';
			$page_productpa='active';
			include 'productfiles/new_pro_link.php';
			}
				}else {
					
					$msg='something is wrong';
					
					if($type_owner=='corporate'){
					
						$agentlist=$this->daouser->selectFromUsers();

						$page_new_product='active';
						$page_productpa='active';
						$page_owner='active';
						$page_corporate = 'active';
						include 'productfiles/new_pro_link.php';
					}else {
						
						$agentlist=$this->daouser->selectFromUsers();
						
						$page_new_product='active';
						$page_productpa='active';
						$page_owner='active';
						$page_personal = 'active';
						include 'productfiles/new_pro_link.php';
					}
				}
	}
	
	public function showPhotos() {
		
		$page_new_product='active';
		$page_productpa='active';
		$page_photos='active';
		include 'productfiles/new_pro_link.php';
	}
	
	public function insertPhotos() {
		
		
		
		$id_pro = $this->daopro->selectFromProductsLastOne();
		$id_p=$id_pro['id_products'];
		
		$id_product=isset($_POST['id_product'])?$_POST['id_product']:$id_p;
		
		$name_photos=$_FILES['foto']['name'];
		$name_photos_tmp = $_FILES['foto']['tmp_name'];
	
		$errors=array();
		$exists=$this->daopropho->selectFromProductsPhoto($id_product);
		$posible=40-count($exists);
		if (count($name_photos)+count($exists)>40){
			$errors['many_pho']='* <br>it posibile to add '.$posible.' photos';
		}
		foreach ($name_photos as $n_p) {
			$ext_photos = strtolower(pathinfo($n_p, PATHINFO_EXTENSION));
			if($ext_photos != "jpg" && $ext_photos != "png" && $ext_photos != "jpeg" && $ext_photos != "gif" ){
				$errors['ext_photos']='* <br>The photo extension must be JPG, PNG, JPEG or GIF';
			}
		}
		
		if (count($errors)==0){
			foreach ($_FILES['foto']['tmp_name'] as $key=>$tmp_name){
				$name_photos=$_FILES['foto']['name'][$key];
				$name_photos_tmp = $_FILES['foto']['tmp_name'][$key];
	
				$this->dao->insertIntoProductPhoto($id_product.$name_photos, $id_product);
				move_uploaded_file($name_photos_tmp, "../css/image/$id_product$name_photos");                   
	                
			}
			if (isset($_POST['id_product'])){
				
				$msg='Successfully';
				
				$photos = $this->daopropho->selectFromProductsPhoto($id_product);

				$page_productpa='active';
				$page_edit_photo = 'active';
				include 'app_link.php';
			}else {
				
				$msg='Successfully';
			
				
				$productlist=$this->daopro->selectFromProducts();

				$page_productpa='active';
				$page_list_productpa='active';	
				include 'app_link.php';	
			}
			
		}else {
			
			if (isset($_POST['id_product'])){
				
				$msg='Successfully';
				
				$photos = $this->daopropho->selectFromProductsPhoto($id_product);

				$page_productpa='active';
				$page_edit_photo = 'active';
				include 'app_link.php';
			}else {
				
				$msg='Try again';
			
				$page_new_product='active';
				$page_productpa='active';
				$page_photos='active';
				include 'productfiles/new_pro_link.php';
			}
		}
		
	}
	
}

?>
