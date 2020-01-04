<?php

namespace Admin\controller;

class Security extends Controller
{
    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->security->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Security = 'active';
        include 'view/base_files/base_link.php';
    }
    
    public function insert($data){
        $this->security->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->security->delete($id);
    }
}