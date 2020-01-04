<?php
namespace Admin\controller;

use Admin\model\LocationThreeDao;

class LocationThree extends Controller{

    private $location_three_info = array('new');

    public function showInfo($data=null) {

        $errors = is_array($data) ? $data : array();
        $list=$this->lThreeList();

        $page_base='active';
        $page_location = 'active';
        $page_location_3 = 'active';
        $container = 'container';
        include 'view/base_files/base_link.php';
    }

    public function getData()
    {
        $new = isset($_POST['new']) ? $_POST['new'] : "";
        $post_info = array($new);
        $combined_array = array_combine($this->location_three_info, $post_info);

        return $combined_array;
    }

    public function insertInfo($data = null)
    {
        $this->locationThree->insertInto($data['new']);

        $this->showInfo();
    }

}