<?php


namespace Admin\controller;

use Admin\model\KitchenDao;

class Kitchen extends Controller
{
    public function showView($data=null){
        $errors=is_array($data)?$data:array();
        $list=$this->kitchen->selectAll();
        $page=$this->getPage();
        $page_base = 'active';
        $page_products = 'active';
        $Kitchen = 'active';
        include 'view/base_files/base_link.php';
    }

    public function insert($data){
        $this->kitchen->insert($data);
        $this->showView();
    }

    public function delete($id){
        $this->kitchen->delete($id);
    }
}