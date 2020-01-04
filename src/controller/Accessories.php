<?php

namespace Admin\controller;

class Accessories extends Controller
{
    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->accessories->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Accessories = 'active';
        include 'view/base_files/base_link.php';
    }

    public function insert($data){
        $this->accessories->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->accessories->delete($id);
    }
}