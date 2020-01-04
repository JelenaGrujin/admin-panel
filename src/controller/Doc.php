<?php

namespace Admin\controller;

class Doc extends Controller
{

    public function insert($data,$id){

        foreach ($data['tmp_name'] as $pom=>$k) {
            $name = $data['name'][$pom];
            $name_doc_tmp = $data['tmp_name'][$pom];
            move_uploaded_file($name_doc_tmp, "public/documents/$name");
            $this->docs->insertFile($name, $id);
        }
    }
}