<?php

namespace Admin\controller;

class NewPhotos extends Controller {

    public function showInfo($data=null) {

        $errors=is_array($data)?$data:array();

        $page_new_product='active';
        $page_product='active';
        $page_photos='active';
        include 'view/new_files/new_pro_link.php';
    }

    public function insert($array)
    {
        $id_products = $this->products->selectLastOne()['id'];
        mkdir("public/photos/$id_products", 0700);
        $data=$array['photo'];
            foreach ($data['tmp_name'] as $pom=>$k){
                $name_photos = $data['name'][$pom];
                $name_photos_tmp = $data['tmp_name'][$pom];

                $this->photos->insertFile($id_products.$name_photos, $id_products);
                move_uploaded_file($name_photos_tmp, "public/photos/$id_products/$id_products$name_photos");

            }

        $product=new Products();
        $product->showInfo();
    }
}