<?php

namespace Admin\controller;

class Terrace extends Controller
{
    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->terrace->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Terrace = 'active';
        include 'view/base_files/base_link.php';
    }
    
    public function insert($data){
        $this->terrace->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->terrace->delete($id);
    }
}