<?php 
namespace Admin\controller;

use Admin\classes\Validator;
use Admin\model\User;
use Admin\model\DocDao;

class Owners extends NewOwner{

    private $class='Owners';

    public function __construct()
    {
        parent::__construct();
        $this->class;
    }

	public function showInfo($data=null){

        $this->redirect->sessionRedirect();
		$list=$this->owners->selectAll();

        $id_updated=is_int($data)?$data:null;

		$page_product='active';
		$page_owners='active';
		include 'view/app_link.php';
	}

	public function showDoc(){

	    $id=isset($_GET['id'])?$_GET['id']:"";
	    $doc = new DocDao();
        $docs=$doc->selectByOwner($id);

        $page_product='active';
        $page_owners_doc = 'active';
        include 'view/app_link.php';
    }

    public function update(){
        $data=$this->getData();
        $validator = new Validator();
        $validator->validate($data, $this->class);
        if ($validator->error() == false) {
            $this->owners->update(date('d-m-Y'), $data['owner_name'], $data['phone'], $data['phone_1'], $data['e_mail'], $data['source'], $data['b_day'], $data['title'], $data['owner_type'], $data['owner_address'], $data['e_mail_owner'], $data['name_3'], $data['phone_3'], $data['e_mail_3'], $data['name_4'], $data['phone_4'], $data['e_mail_4'], $data['name_5'], $data['phone_5'], $data['e_mail_5'], $data['name_6'], $data['phone_6'], $data['e_mail_6'], $data['name_7'], $data['phone_7'], $data['e_mail_7'], $data['name_8'], $data['phone_8'], $data['e_mail_8'], $data['name_9'], $data['phone_9'], $data['e_mail_9'], $data['company_name'], $data['tin'], $data['company_num'], $data['activity_code'], $data['company_address'], $data['responsible_person'], $data['id_num'], $data['UMCN'], $data['agent'], $data['id_owner']);
            $this->showInfo((int)$data['id_owner']);
        } else {
            $error = $validator->error();
            $this->showCard($data,'owners_edit', $data['id_owner']);
        }
    }


}

?>