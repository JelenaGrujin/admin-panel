<?php
namespace Admin\controller;
 
use Admin\classes\Redirect;
use Admin\classes\Session;
use Admin\classes\Validator;

class Controller extends DaoHandler
{
    public $post_data=array();
    public $redirect;
    public $session;
    public $validator;

    public function __construct()
    {
        parent::__construct();
        $this->redirect = new Redirect();
        $this->session = new Session();
        $this->validator = new Validator();
    }

    public function set($item,$value){

        $this->post_data[$item]=$value;
    }

    public function setPostItem($array){
        foreach ($array as $item=>$value) {
           if (is_array($value)){
               $this->setArray($item,$value);
           }else{
               $this->set($item,$value);
           }
        }
    }

    public function setFiles(){

        foreach ($_FILES as $item=>$value){
            $this->post_data[$item]=$value;
        }
    }

    public function setArray($item,$value){
            $val = implode(', ', $value);
            $this->set($item, $val);
    }

    public function get(){
        return $this->post_data;
    }

    public function confirm(){
        $array=$_POST;
        $this->setPostItem($array);
        $this->setFiles();
        $this->validateData($this->get());
    }

    public function validateData($data)
    {
        $this->validator->validate($data, get_class($this));
        if ($this->validator->error() == false) {
            $this->insert($data);
        } else {
            $this->showView($this->validator->error(), $data);
        }
    }

    /*old one
        public function forging($page, $data, $class){
            switch ($page){
                case 'pause':
                    $this->showBaseCard($data=null,'type');     //if submit action pause, redirect on base cards
                    break;
                case 'confirm':
                    $this->validateData($data,$class);      //if submit action is confirm, forward -assoc _POST array- on validations
                    break;
                default:
                    $log = new Login();
                    $log->showError();      //redirect on 404.html
            }
        }
    */

    public function remove(){

        $id=isset($_GET['id'])?$_GET['id']:"";
        $this->delete($id);
        $this->showView();

    }

    public function getPage(){
        return $page=str_replace('Admin\controller\\','',get_class($this));
    }
/*
    public function showClientsCard($data=null, $id_product=null){        //shows card of product or owners

        $id=isset($_GET['id'])?$_GET['id']:$id_product;     //if isn't from get is from product controller

        $page=$this->getPage();

        $list=$this->selectById($id);
        $types_list = $this->typeList();
        $equipment_list=$this->equipmentList();
        $list_location_1=$this->lOneList();
        $list_location_2=$this->lTwoList();
        $list_location_3=$this->lThreeList();
        $structure_list=$this->structureList();

        $page_product='active';
        ${'page_'.$a['0'].'_'.$a['1']}='active'; //activate card of view or edit
        include 'view/app_link.php';

    }*/

}