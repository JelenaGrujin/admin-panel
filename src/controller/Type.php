<?php
namespace Admin\controller;

class Type extends Controller{

    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->type->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Type = 'active';
        include 'view/base_files/base_link.php';
    }

    public function insert($data){
        $this->type->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->type->delete($id);
    }
}