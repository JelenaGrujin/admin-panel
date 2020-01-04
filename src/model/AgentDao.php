<?php
namespace Admin\model;
	
	class AgentDao extends Dao
    {
        public $table='users';
        private $SELECT_USER_BY_USERNAME="SELECT * FROM users WHERE username=?";

        public function selectByUsername($username){
            $statement = $this->db->prepare($this->SELECT_USER_BY_USERNAME);
	     	
	     	$statement ->bindValue(1, $username);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
        }
	}