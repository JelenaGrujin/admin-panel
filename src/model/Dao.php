<?php
namespace Admin\model;

use Admin\config\DB;

class Dao extends DB {

    protected $db;
    public $table;
    public $array_=array();
    public $array_item;
    public $array_value;

    public function __construct() {
        $this->db = DB::getInstance();
        $this->db = $this->db->getConnection();
    }

    public function splitArray($array)
    {
        foreach ($array as $item => $value) {
            $this->array_[] = $item;
        }
        $this->array_item = implode(', ', $this->array_);
        $this->array_value = implode(', :', $this->array_);
    }

    public function getItem(){
        return $this->array_item;
    }

    public function getValue(){
        return $this->array_value;
    }

    public function insert($array){
        $this->splitArray($array);
        $statement = $this->db->prepare("INSERT INTO ".$this->table."(".$this->getItem().") VALUES (:".$this->getValue().")");

        foreach ($array as $value=>$item){
            $statement ->bindValue(':'.$value,$item);
        }
        $statement->execute();

    }

    public function insertFile($name,$id){
        $statement = $this->db->prepare("INSERT INTO ".$this->table."(name, id_products) VALUES (:name, :id_products)");

        $statement ->bindValue(':name',$name);
        $statement ->bindValue(':id_products',$id);

        $statement->execute();
    }

    public function update($array){
        $this->splitArray($array);
        $statement = $this->db->prepare("UPDATE ".$this->table." SET ".$this->getItem()."=".$this->getValue());

        foreach ($array as $value=>$item){
            $statement ->bindValue(':'.$value, $item);
        }

        $statement->execute();

    }

    public function selectAll(){
        $statement = $this->db->prepare("SELECT * FROM ".$this->table);

        $statement->execute();

        $result = $statement->fetchAll();
        return $result;

    }

    public function selectById($id){
        $statement = $this->db->prepare("SELECT * FROM ".$this->table." WHERE id=?");

        $statement ->bindValue(1, $id);
        $statement->execute();

        $result = $statement->fetcAll();
        return $result;

    }

    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM ".$this->table." WHERE id=?");

        $statement->bindValue(1, $id);

        $statement->execute();

    }

    public function selectLastOne(){
        $statement = $this->db->prepare("SELECT id FROM ".$this->table." ORDER BY id DESC LIMIT 1");

        $statement->execute();

        $result = $statement->fetch();
        return $result;

    }
}