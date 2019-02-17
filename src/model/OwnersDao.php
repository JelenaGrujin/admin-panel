<?php
namespace Admin\model;		

use Admin\config\DB;
use Admin\model\DAO;
	
	class OwnersDao extends DAO {
         private $INSERT_INTO_OWNERS="INSERT INTO owners(data_insert, owner_name, phone, phone_1, e_mail, source, b_day, title, owner_type, owner_address, e_mail_owner, name_3, phone_3, e_mail_3, name_4, phone_4, e_mail_4, name_5, phone_5, e_mail_5, name_6, phone_6, e_mail_6, name_7, phone_7, e_mail_7, name_8, phone_8, e_mail_8, name_9, phone_9, e_mail_9, company_name, tin, company_num, activity_code, company_adres, responsible_person, id_num, UMCN, agent, type_owner) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
         private $SELECT_FROM_OWNERS_LAST_ONE="SELECT id_owner FROM owners ORDER BY id_owner DESC LIMIT 1";
         private $SELECT_FROM_OWNERS="SELECT * FROM owners";
         private $SELECT_FROM_OWNERS_BY_ID="SELECT * FROM owners WHERE id_owner=?";
         private $UPDATE_OWNER_BY_ID="UPDATE owners SET data_update=?,owner_name=?,phone=?,phone_1=?,e_mail=?,source=?,b_day=?,title=?,owner_type=?,owner_address=?,e_mail_owner=?,name_3=?,phone_3=?,e_mail_3=?,name_4=?,phone_4=?,e_mail_4=?,name_5=?,phone_5=?,e_mail_5=?,name_6=?,phone_6=?,e_mail_6=?,name_7=?,phone_7=?,e_mail_7=?,name_8=?,phone_8=?,e_mail_8=?,name_9=?,phone_9=?,e_mail_9=?,company_name=?,tin=?,company_num=?,activity_code=?,company_adres=?,responsible_person=?,id_num=?,UMCN=?,agent=? WHERE id_owner=?";
	        
		public function __construct(){
			$this->db = DB::getInstance();
	     	$this->db = $this->db->getConnection();
		}
		
		public function insertIntoOwners($data_insert, $owner_name, $phone, $phone_1, $e_mail, $source, $b_day, $title, $owner_type, $owner_address, $e_mail_owner, $name_3, $phone_3, $e_mail_3, $name_4, $phone_4, $e_mail_4, $name_5, $phone_5, $e_mail_5, $name_6, $phone_6, $e_mail_6, $name_7, $phone_7, $e_mail_7, $name_8, $phone_8, $e_mail_8, $name_9, $phone_9, $e_mail_9, $company_name, $tin, $company_num, $activity_code, $company_adres, $responsible_person, $id_num, $UMCN, $agent, $type_owner){
	     	
	     	$statement = $this->db->prepare($this->INSERT_INTO_OWNERS);
	     	
	     	$statement ->bindValue(1, $data_insert);
	     	$statement ->bindValue(2, $owner_name);
	     	$statement ->bindValue(3, $phone);
	     	$statement ->bindValue(4, $phone_1);
	     	$statement ->bindValue(5, $e_mai);
	     	$statement ->bindValue(6, $source);
	     	$statement ->bindValue(7, $b_day);
	     	$statement ->bindValue(8, $title);
	     	$statement ->bindValue(9, $owner_type);
	     	$statement ->bindValue(10, $owner_address);
	     	$statement ->bindValue(11, $e_mail_owner);
	     	$statement ->bindValue(12, $name_3);
	     	$statement ->bindValue(13, $phone_3);
	     	$statement ->bindValue(14, $e_mail_3);
	     	$statement ->bindValue(15, $name_4);
	     	$statement ->bindValue(16, $phone_4);
	     	$statement ->bindValue(17, $e_mail_4);
	     	$statement ->bindValue(18, $name_5);
	     	$statement ->bindValue(19, $phone_5);
	     	$statement ->bindValue(20, $e_mail_5);
	     	$statement ->bindValue(21, $name_6);
	     	$statement ->bindValue(22, $phone_6);
	     	$statement ->bindValue(23, $e_mail_6);
	     	$statement ->bindValue(24, $name_7);
	     	$statement ->bindValue(25, $phone_7);
	     	$statement ->bindValue(26, $e_mail_7);
	     	$statement ->bindValue(27, $name_8);
	     	$statement ->bindValue(28, $phone_8);
	     	$statement ->bindValue(29, $e_mail_8);
	     	$statement ->bindValue(30, $name_9);
	     	$statement ->bindValue(31, $phone_9);
	     	$statement ->bindValue(32, $e_mail_9);
	     	$statement ->bindValue(33, $company_name);
	     	$statement ->bindValue(34, $tin);
	     	$statement ->bindValue(35, $company_num);
	     	$statement ->bindValue(36, $activity_code);
	     	$statement ->bindValue(37, $company_adres);
	     	$statement ->bindValue(38, $responsible_person);
	     	$statement ->bindValue(39, $id_num);
	     	$statement ->bindValue(40, $UMCN);
	     	$statement ->bindValue(41, $agent);
	     	$statement ->bindValue(42, $type_owner);
	     	
	     	$statement->execute();
	     }
	     
		public function selectFromOwnersLastOne(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_OWNERS_LAST_ONE);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetch();
	     	return $result;
	     	
	     }

	     public function selectFromOwners(){
	     	$statement = $this->db->prepare($this->SELECT_FROM_OWNERS);
	     	
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     }

	     public function selectFromOwnersById($id_owner){
	     	$statement = $this->db->prepare($this->SELECT_FROM_OWNERS_BY_ID);
	     	
	     	$statement ->bindValue(1, $id_owner);
	     	$statement->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;

	     }
	     
	     public function updateOwnerById($data_update,$owner_name,$phone,$phone_1,$e_mail,$source,$b_day,$title,$owner_type,$owner_address,$e_mail_owner,$name_3,$phone_3,$e_mail_3,$name_4,$phone_4,$e_mail_4,$name_5,$phone_5,$e_mail_5,$name_6,$phone_6,$e_mail_6,$name_7,$phone_7,$e_mail_7,$name_8,$phone_8,$e_mail_8,$name_9,$phone_9,$e_mail_9,$company_name,$tin,$company_num,$activity_code,$company_adres,$responsible_person,$id_num,$UMCN,$agent,$id_owner){
	     	$statement = $this->db->prepare($this->UPDATE_OWNER_BY_ID);
	     	
	     	$statement ->bindValue(1, $data_update);
	     	$statement ->bindValue(2, $owner_name);
	     	$statement ->bindValue(3, $phone);
	     	$statement ->bindValue(4, $phone_1);
	     	$statement ->bindValue(5, $e_mai);
	     	$statement ->bindValue(6, $source);
	     	$statement ->bindValue(7, $b_day);
	     	$statement ->bindValue(8, $title);
	     	$statement ->bindValue(9, $owner_type);
	     	$statement ->bindValue(10, $owner_address);
	     	$statement ->bindValue(11, $e_mail_owner);
	     	$statement ->bindValue(12, $name_3);
	     	$statement ->bindValue(13, $phone_3);
	     	$statement ->bindValue(14, $e_mail_3);
	     	$statement ->bindValue(15, $name_4);
	     	$statement ->bindValue(16, $phone_4);
	     	$statement ->bindValue(17, $e_mail_4);
	     	$statement ->bindValue(18, $name_5);
	     	$statement ->bindValue(19, $phone_5);
	     	$statement ->bindValue(20, $e_mail_5);
	     	$statement ->bindValue(21, $name_6);
	     	$statement ->bindValue(22, $phone_6);
	     	$statement ->bindValue(23, $e_mail_6);
	     	$statement ->bindValue(24, $name_7);
	     	$statement ->bindValue(25, $phone_7);
	     	$statement ->bindValue(26, $e_mail_7);
	     	$statement ->bindValue(27, $name_8);
	     	$statement ->bindValue(28, $phone_8);
	     	$statement ->bindValue(29, $e_mail_8);
	     	$statement ->bindValue(30, $name_9);
	     	$statement ->bindValue(31, $phone_9);
	     	$statement ->bindValue(32, $e_mail_9);
	     	$statement ->bindValue(33, $company_name);
	     	$statement ->bindValue(34, $tin);
	     	$statement ->bindValue(35, $company_num);
	     	$statement ->bindValue(36, $activity_code);
	     	$statement ->bindValue(37, $company_adres);
	     	$statement ->bindValue(38, $responsible_person);
	     	$statement ->bindValue(39, $id_num);
	     	$statement ->bindValue(40, $UMCN);
	     	$statement ->bindValue(41, $agent);
	     	$statement ->bindValue(42, $id_owner);
	     	
	     	$statement ->execute();
	     	
	     	$result = $statement->fetchAll();
	     	return $result;
	     	
	     }

	     
	}	     
?>
