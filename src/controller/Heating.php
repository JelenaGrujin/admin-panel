<?php

namespace Admin\controller;

class Heating extends Controller
{
    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->heating->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Heating = 'active';
        include 'view/base_files/base_link.php';
    }
    
    public function insert($data){
        $this->heating->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->heating->delete($id);
    }
}