<?php 
namespace Admin\classes;


class Validator{
	
	private $errors=array();
	
	public function trimer($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;	
	}
	
	/*public function filterData($datainfo){
		
			if (!empty($min_price) && !is_numeric($min_price)){
				 $errors['min_price']='* number';
					}
			if (!empty($commission) && !is_numeric($commission)){
				$errors['commission']='* number';
					}
			if (!empty($deposit) && !is_numeric($deposit)){
				$errors['deposit']='* number';
					}	
			if (!empty($surface_area) && !is_numeric($surface_area)){
				$errors['surface_area']='* number';
					}
			if (!empty($flors) && !is_numeric($flors)){
				$errors['flors']='* number';
					}//elseif (!empty($of_flors) && !is_numeric($of_flors)){
					//	$errors['of_flors']='*';
						//}//elseif ($flors > $of_flors){
							//$errors['florsnost']='* uncorectly';
						//} 
			if (!empty($num_elevator) && !is_numeric($num_elevator)){
				$errors['num_elevator']='* number';
					}
			if (!empty($construc_year) && !is_numeric($construc_year)){
				$errors['construc_year']='* number';
					}
			if (!empty($celing_height) && !is_numeric($celing_height)){
				$errors['celing_height']='* number';
					}
			if (!empty($level) && !is_numeric($level)){
				$errors['level']='* number';
					}
			if (!empty($salon_m) && !is_numeric($salon_m)){
				$errors['salon_m']='* number';
					}
			if (!empty($num_rooms) && !is_numeric($num_rooms)){
				$errors['num_rooms']='* number';
					}
			if (!empty($num_bath) && !is_numeric($num_bath)){
				$errors['num_bath']='* unumber';
					}
			if (!empty($num_wc) && !is_numeric($num_wc)){
				$errors['num_wc']='* number';
					}
			if (!empty($num_terrace) && !is_numeric($num_terrace)){
				$errors['num_terrace']='* number';
					}
			if (!empty($num_air_con) && !is_numeric($num_air_con)){
				$errors['num_air_con']='* number';
					}
			if(empty($location_data_1)){
				$errors['location_data_1']='* required';}
			if(empty($location_data_2)){
				$errors['location_data_2']='* required';}
			if(empty($location_data_3)){
				$errors['location_data_3']='* required';}
			if(empty($addres_location)){
				$errors['addres_location']='* required';}
			if(empty($adres_num)){
				$errors['adres_num']='*';}
			if(empty($number)){
				$errors['number']='*';}
			if(empty($prod)){
				$errors['tip_nekretnine']='* required';}
			if(empty($structure)){
				$errors['structure']='* required';}
			if(empty($square)){
				$errors['square']='* required';
			}elseif (is_numeric($square)){
					}else{$errors['square']='* number';}
			if(empty($price)){
				$errors['price']='* required';
			}elseif (is_numeric($price)){
					}else{$errors['price']='* number';}
					
		if (count($errors)==0){
		
		}else {
			$typeslist=$this->daotype->selectFromProductType();
			$equilist=$this->daoequipment->selectFromEquipment();
			$listlocation1=$this->daolone->selectFromLocation1();
			$listlocation2=$this->daoltwo->selectFromLocation2();
			$listlocation3=$this->daolthree->selectFromLocation3();
			$strlist=$this->daostructure->selectFromStructure();
			$page_new_product='active';
			$page_info='active';
			$page_productpa='active';
			include 'productfiles/new_pro_link.php';
		}
		
	}
	*/
	public function validate($data, $rules = array() ){

        foreach($data as $item => $item_value){
            if(key_exists($item, $rules)){
                foreach($rules[$item] as $rule => $rule_value){

                    switch ($rule){
                        case 'required':
                        if(empty($item_value) && $rule_value){
                            $this->addError($item,'* required');
                        }
                        break;

                        case 'numeric':
                        if(!is_numeric($item_value) && $rule_value){
                            $this->addError($item,'* numeric');
                        }
                        break;
                    }
                }
            }
        }    
    }

    private function addError($item, $error){
        $this->errors[$item][] = $error;
    }


    public function error(){
        if(empty($this->errors)) return false;
        return $this->errors;
    }

	
}


?>