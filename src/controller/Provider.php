<?php

namespace Admin\controller;

class Provider extends Controller
{
    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->provider->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Provider = 'active';
        include 'view/base_files/base_link.php';
    }
    
    public function insert($data){
        $this->provider->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->provider->delete($id);
    }
}