<?php 
namespace Admin\classes;

class Validator{
	
	private $errors=array();
	private $rule=array();
	
	public function trim($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

    public function switching($class){

        switch ($class){
            case 'Admin\controller\NewProduct':
                $this->rule = ['location_data_1' => ['required'], 'location_data_2' => ['required'], 'location_data_3' => ['required'], 'address_location' => ['required'], 'structure' => ['required'], 'product_type' => ['required'], 'address_num' => ['required'], 'number' => ['required'], 'square' => ['required','numeric'], 'price' => ['required','numeric'], 'num_air_con' => ['numeric'], 'num_garages'=>['numeric'], 'num_terrace' => ['numeric'], 'num_wc' => ['numeric'], 'num_rooms' => ['numeric'], 'salon_m' => ['numeric'], 'level' => ['numeric'], 'ceiling_height' => ['numeric'], 'construction_year' => ['numeric'], 'num_elevator' => ['numeric'], 'floor' => ['numeric','incorrectly'], 'of_floor' => ['numeric'], 'surface_area' => ['numeric'], 'deposit' => ['numeric'], 'commission' => ['numeric'], 'min_price' => ['numeric']];
                break;
            case 'Admin\controller\NewOwner':
                $this->rule = ['e_mail' => ['e_mail'], 'e_mail_owner' => ['e_mail'], 'e_mail_3' => ['e_mail'], 'e_mail_4' => ['e_mail'], 'e_mail_5' => ['e_mail'], 'e_mail_6' => ['e_mail'], 'e_mail_7' => ['e_mail'], 'e_mail_8' => ['e_mail'], 'e_mail_9' => ['e_mail'], 'phone' => ['required','numeric'], 'UMCN' => ['numeric'], 'id_num' => ['numeric'], 'activity_code' => ['numeric'], 'company_num' => ['numeric'], 'tin' => ['numeric'], 'phone_9' => ['numeric'], 'phone_8' => ['numeric'], 'phone_7' => ['numeric'], 'phone_6' => ['numeric'], 'phone_5' => ['numeric'], 'phone_4' => ['numeric'], 'phone_3' => ['numeric'], 'phone_1' => ['numeric']];
                break;
            case 'Agent':
                $this->rule = ['name_surname' => ['required'], 'address' => ['required'], 'username' => ['required'], 'pass' => ['required'],'r_pass'=>['required','match'], 'phone' => ['numeric'], 'e_mail' => ['required','e_mail']];
                break;
            case 'photo':
                $this->rule = ['photo' => ['photo']];
                break;
            case 'docs':
                $this->rule = ['doc' => ['pdf']];
                break;
            case 'Type':
            case 'LocationOne':
            case 'LocationTwo':
            case 'LocationThree':
                $this->rule = ['new' => ['required']];
                break;
            case 'Equipment':
            case 'Structure':
                $this->rule = ['new' => ['numeric','required']];
                break;
        }
        return $this->rule;
    }

	public function validate($data, $class){
        foreach($data as $item => $item_value){
            if(key_exists($item, $this->switching($class))){
                foreach($this->rule[$item] as $rule => $rule_value){
                    switch ($rule_value){
                        case 'required':
                        if(empty($item_value)){
                            $this->addError($item,'* required');
                        }
                        break;

                        case 'numeric':
                        if(!empty($item_value)&&!is_numeric($item_value)){
                            $this->addError($item,'* no');
                        }
                        break;

                        case 'incorrectly':
                        if($item_value>$_POST['of_floor']){
                            $this->addError($item,'* Incorrectly');
                        }
                        break;

                        case 'e_mail':
                            if(!empty($item_value) && !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,64}$/', $item_value)){
                                $this->addError($item,'* Incorrectly');
                            }
                        break;

                        case 'pdf':
                            if(count($item_value)>10){
                                $this->addError($item,'* <br>it is possible to get only 10 pdf');
                            }
                            foreach ($item_value['name'] as $i_v){
                                if(strtolower(pathinfo($i_v, PATHINFO_EXTENSION)) != 'pdf'){
                                    $this->addError($item,'* Extension must be PDF');
                                }
                            }
                        break;

                        case 'photo':
                            if(count($item_value)>40){
                                $this->addError($item,'* <br>it is possible to get only 40 photos');
                            }
                            foreach ($item_value as $i_v){
                                if(strtolower(pathinfo($i_v, PATHINFO_EXTENSION)) != ("jpg" || "png" || "jpeg" || "gif" )){
                                    $this->addError($item,'* <br>Extension must be JPG, PNG, JPEG or GIF');
                                }
                            }
                        break;

                        case 'match':
                            if ($item_value!==$_POST['password']){
                                $this->addError($item,'* <br>Passwords not match');
                            }
                        break;
                    }
                }
            }
        }
    }

    private function addError($item, $error){
        $this->errors[$item] = $error;
    }

    public function error(){
        if(empty($this->errors)) return false;
        return $this->errors;
    }
}