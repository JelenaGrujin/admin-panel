<?php

namespace Admin\controller;

class Garage extends Controller
{

    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->garage->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Garage = 'active';
        include 'view/base_files/base_link.php';
    }

    public function insert($data){
        $this->garage->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->garage->delete($id);
    }
}