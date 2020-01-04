<?php

namespace Admin\controller;

class NewProduct extends Controller {

    public function __construct(){
        parent::__construct();
	}

    public function showView($data=null){
		$this->redirect->sessionRedirect();
        $errors=is_array($data)?$data:array();

		$id_owner=isset($_GET['id_owner'])?$_GET['id_owner']:"";
		$types_list = $this->typeList();
        $equipment_list=$this->equipmentList();
        $list_location_1=$this->lOneList();
        $list_location_2=$this->lTwoList();
        $list_location_3=$this->lThreeList();
        $structure_list=$this->structureList();
        $kitchen_list=$this->kitchenList();
        $heating_list=$this->heatingList();
        $garage_list=$this->garageList();
        $carpentry_list=$this->carpentryList();
        $provider_list=$this->providerList();
        $security_list=$this->securityList();
        $bath_list=$this->bathroomList();
        $terrace_list=$this->terraceList();
        $accessories_list=$this->accessoriesList();

		if ($this->session->sessionExist(get_class($this))==true){

			foreach ($this->session->getSessionData(get_class($this)) as $k=>$only){
			    $id_euro=isset($only['id_euro'])?$only['id_euro']:"";
				$location_data_1=isset($only['location_data_1'])?$only['location_data_1']:"";
				$location_data_2=isset($only['location_data_2'])?$only['location_data_2']:"";
				$location_data_3=isset($only['location_data_3'])?$only['location_data_3']:"";
				$address_location=isset($only['address_location'])?$only['address_location']:"";
				$address_num=isset($only['address_num'])?$only['address_num']:"";
				$number=isset($only['number'])?$only['number']:"";
				$place=isset($only['place'])?$only['place']:"";
				$floors=isset($only['floors'])?$only['floors']:"";
				$of_floors=isset($only['of_floors'])?$only['of_floors']:"";
				$price=isset($only['price'])?$only['price']:"";
				$min_price=isset($only['min_price'])?$only['min_price']:"";
				$deposit=isset($only['deposit'])?$only['deposit']:"";
				$commission=isset($only['commission'])?$only['commission']:"";
				$payment=isset($only['payment'])?$only['payment']:"";
				$square=isset($only['square'])?$only['square']:"";
				$surface_area=isset($only['surface_area'])?$only['surface_area']:"";
				$equipment=isset($only['equipment'])?$only['equipment']:"";
				$ceiling_height=isset($only['ceiling_height'])?$only['ceiling_height']:"";
				$structure=isset($only['structure'])?$only['structure']:"";
				$heating=isset($only['heating'])?$only['heating']:"";
				$carpentry=isset($only['carpentry'])?$only['carpentry']:"";
				$kitchen=isset($only['kitchen'])?$only['kitchen']:"";
				$num_rooms=isset($only['num_rooms'])?$only['num_rooms']:"";
				$num_bath=isset($only['num_bath'])?$only['num_bath']:"";
				$num_wc=isset($only['num_wc'])?$only['num_wc']:"";
				$num_terrace=isset($only['num_terrace'])?$only['num_terrace']:"";
				$level=isset($only['level'])?$only['level']:"";
				$salon_m=isset($only['salon_m'])?$only['salon_m']:"";
				$security=isset($only['security'])?$only['security']:"";
				$num_elevator=isset($only['num_elevator'])?$only['num_elevator']:"";
				$construction_year=isset($only['construction_year'])?$only['construction_year']:"";
				$num_air_con=isset($only['num_air_con'])?$only['num_air_con']:"";
				$num_garages=isset($only['num_garages'])?$only['num_garages']:"";
				$note=isset($only['note'])?$only['note']:"";
				$description=isset($only['description'])?$only['description']:"";
				$active=isset($only['active'])?$only['active']:"";
				$active_data=isset($only['active_data'])?$only['active_data']:"";
				$info=isset($only['info'])?$only['info']:"";
				$electricity=isset($only['electricity'])?$only['electricity']:"";
				$network=isset($only['network'])?$only['network']:"";
				$maintenance=isset($only['maintenance'])?$only['maintenance']:"";
				$accessories=isset($only['accessories'])?$only['accessories']:"";
				$garage=isset($only['garage_type'])?$only['garage_type']:"";
				$provider=isset($only['provider'])?$only['provider']:"";
				$type_terrace=isset($only['type_terrace'])?$only['type_terrace']:"";
				$type_bath=isset($only['type_bath'])?$only['type_bath']:"";
				$product_type=isset($only['product_type'])?$only['product_type']:"";
				$business_status=isset($only['business_status'])?$only['business_status']:"";
			}

		}

        $car=isset($carpentry)?explode(', ', $carpentry):array();
        $aces=isset($accessories)?explode(', ', $accessories):array();
        $gar=isset($garage)?explode(', ', $garage):array();
        $prov=isset($provider)?explode(', ', $provider):array();
        $ter=isset($type_terrace)?explode(', ', $type_terrace):array();
        $bath=isset($type_bath)?explode(', ', $type_bath):array();
        $pro_type=isset($product_type)?explode(', ', $product_type):array();
        $sec=isset($security)?explode(', ', $security):array();
        $hea=isset($heating)?explode(', ', $heating):array();

		$page_new_product='active';
		$page_info='active';
		$page_product='active';
		include 'view/new_files/new_pro_link.php';
	}

	public function insert($data){
        $this->session->fillSession(get_class($this),$data);
        $newOwner=new NewOwner();
        $newOwner->showView();

	}

	public function addProduct($id_owner){

        if ($this->session->sessionExist(get_class($this)) == true) {
            $k = $this->session->getSessionData(get_class($this));
            $k['0']['id_owner']=$id_owner;
            $this->products->insert($k['0']);
            $this->session->offSession(get_class($this));
        }

        $photo=new NewPhotos();
        $photo->showInfo();
    }
}