<?php
namespace Admin\controller;

class NewOwner extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function showView($data=null){

        $this->redirect->sessionRedirect();
        $agent_list=$this->agentList();
        $errors=is_array($data)?$data:array();

        if ($this->session->sessionExist(get_class($this))==true){

            foreach ($this->session->getSessionData(get_class($this)) as $key=>$only) {
                $owner_name=isset($only['owner_name'])?$only['owner_name']:"";
                $phone=isset($only['phone'])?$only['phone']:"";
                $phone_1=isset($only['phone_1'])?$only['phone_1']:"";
                $e_mail=isset($only['e_mail'])?$only['e_mail']:"";
                $source=isset($only['source'])?$only['source']:"";
                $b_day=isset($only['b_day'])?$only['b_day']:"";
                $title=isset($only['title'])?$only['title']:"";
                $owner_type=isset($only['owner_type'])?$only['owner_type']:"";
                $owner_address=isset($only['owner_address'])?$only['owner_address']:"";
                $e_mail_owner=isset($only['e_mail_owner'])?$only['e_mail_owner']:"";
                $name_3=isset($only['name_3'])?$only['name_3']:"";
                $phone_3=isset($only['phone_3'])?$only['phone_3']:"";
                $e_mail_3=isset($only['e_mail_3'])?$only['e_mail_3']:"";
                $name_4=isset($only['name_4'])?$only['name_4']:"";
                $phone_4=isset($only['phone_4'])?$only['phone_4']:"";
                $e_mail_4=isset($only['e_mail_4'])?$only['e_mail_4']:"";
                $name_5=isset($only['name_5'])?$only['name_5']:"";
                $phone_5=isset($only['phone_5'])?$only['phone_5']:"";
                $e_mail_5=isset($only['e_mail_5'])?$only['e_mail_5']:"";
                $name_6=isset($only['name_6'])?$only['name_6']:"";
                $phone_6=isset($only['phone_6'])?$only['phone_6']:"";
                $e_mail_6=isset($only['e_mail_6'])?$only['e_mail_6']:"";
                $name_7=isset($only['name_7'])?$only['name_7']:"";
                $phone_7=isset($only['phone_7'])?$only['phone_7']:"";
                $e_mail_7=isset($only['e_mail_7'])?$only['e_mail_7']:"";
                $name_8=isset($only['name_8'])?$only['name_8']:"";
                $phone_8=isset($only['phone_8'])?$only['phone_8']:"";
                $e_mail_8=isset($only['e_mail_8'])?$only['e_mail_8']:"";
                $name_9=isset($only['name_9'])?$only['name_9']:"";
                $phone_9=isset($only['phone_9'])?$only['phone_9']:"";
                $company_name=isset($only['company_name'])?$only['company_name']:"";
                $tin=isset($only['tin'])?$only['tin']:"";
                $company_num=isset($only['company_num'])?$only['company_num']:"";
                $activity_code=isset($only['activity_code'])?$only['activity_code']:"";
                $company_address=isset($only['company_address'])?$only['company_address']:"";
                $responsible_person=isset($only['responsible_person'])?$only['responsible_person']:"";
                $id_num=isset($only['id_num'])?$only['id_num']:"";
                $UMCN=isset($only['UMCN'])?$only['UMCN']:"";
                $agent=isset($only['agent'])?$only['agent']:"";

            }
        }

        $page_new_product='active';
        $page_product='active';
        $page_owner='active';
        include 'view/new_files/new_pro_link.php';
    }

    public function rule($data){
        if (array_key_exists('doc',$data)) {
            unset($data['doc']);
            return $data;
        }
    }

    public function checkingDoc($data){
        if (($data['doc']['size']['0'])>0){
            $doc=new Doc();
            $doc->insert($data['doc'], $this->owners->selectLastOne()['id']);
        }
    }

    public function insert($data)
    {
        $this->owners->insert($this->rule($data));

        $id_con = $this->owners->selectLastOne();
        $id_owner = $id_con['id'];
        $this->checkingDoc($data);
        $newProduct=new NewProduct();
        $newProduct->addProduct($id_owner);
        $this->session->offSession(get_class($this));

    }

}