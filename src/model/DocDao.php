<?php

namespace Admin\model;
	
	class DocDao extends Dao
    {

        public $table='docs';
        private $SELECT_FROM_OWNERS_DOC_BY_OWNERS="SELECT * FROM docs WHERE id_owner=?";

        public function selectByOwner($id_owner){
	     	$statement = $this->db->prepare($this->SELECT_FROM_OWNERS_DOC_BY_OWNERS);

	     	$statement ->bindValue(1, $id_owner);

	     	$statement->execute();

	     	$result = $statement->fetchAll();
	     	return $result;

        }
    }