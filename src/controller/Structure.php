<?php
namespace Admin\controller;

class Structure extends Controller {

    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->structure->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Structure = 'active';
        include 'view/base_files/base_link.php';
    }
    
    public function insert($data){
        $this->structure->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->structure->delete($id);
    }
}