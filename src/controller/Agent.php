<?php

namespace Admin\controller;

use Admin\classes\Register;
use Admin\model\AgentDao;


class Agent extends Controller {

    public function showInfo($data=null, $list=null) {

        $agent_list=$this->agent->selectAll();
        $id_updated=$data?$data:"";
        $page_agent_list = 'active';
        $page_base='active';
        $page_agent = 'active';
        include 'view/base_files/base_link.php';

    }

    public function insertInfo($data){

        $log = new Register();
        $log->setPassword($data['password']);

        if ($data['id_users']!=null){
            $this->agent->updateById($data['name_surname'],$data['e_mail'],$data['address'],$data['phone'],$data['id_users']);
        }else {
            $this->agent->insertInto($data['name_surname'], $data['username'], $data['e_mail'], $log->getPassword(), $data['address'], $data['phone']);
        }
            $this->showInfo($data['id_users']);
    }

    public function newAgent($errors=null, $list=null){

        $errors=is_array($errors)?$errors:array();
        $list=is_array($this->setData())?$this->setData():array();
        $page_sign_in = 'active';
        $page_base='active';
        $page_agent = 'active';
        include 'view/base_files/base_link.php';

    }

    public function agentCard(){

        $id=isset($_GET['id_users'])?$_GET['id_users']:"";
        $list=$this->agent->selectById($id);
        $this->setData($list['0']);
        if (isset($_GET['action'])){
            $this->newAgent($error=null);
        }else{
            $page_agent_card='active';
            $page_base='active';
            $page_agent = 'active';
            include 'view/base_files/base_link.php';
        }
    }

}