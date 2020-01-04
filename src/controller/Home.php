<?php 
namespace Admin\controller;

use Admin\model\PhotoDao;

class Home extends Controller {

    private $id;

    public function __construct()
    {
        parent::__construct();
    }

    public function setID($id){
        $this->id=$id;
    }

    public function getID(){
        return $this->id;
    }

    public function showHome(){

        $this->redirect->sessionRedirect();
        $product_list=$this->productsList();
		$owner_list=$this->ownersList();
        $cookie=isset($_COOKIE['cookie'])?$_COOKIE['cookie']:array();
		
		$make_month=date("d-m-Y", strtotime("+1 months"));
		$make_week=date("d-m-Y", strtotime("+1 week"));
		$make_day=date("d-m-Y", strtotime("+1 day"));
		$make_d=date("d-m-Y", strtotime("-1 day"));

		$page_home = 'active';
		include 'view/home_files/home_link.php';
	}

	public function reminder(){

        $id=isset($_GET['id'])?$_GET['id']:"";
        !empty($id)?$this->setCookie($id):$this->setMsg();

    }
	
	public function setCookie($id){

        setcookie("cookie[$id]", date("d-m-Y"), time()+86400);

        header('Location:home');

	}

	public function setMsg(){

        echo $msg='<script>alert("Invalid ID, call the service!");</script>';
    }

    public function unsetReminder(){

        $id=isset($_GET['id'])?$_GET['id']:"";
        $this->unsetCookie($id);
        header('Location:home');

    }

    public function unsetCookie($id){

        setcookie("cookie[$id]", date("d-m-Y"), time()-86400);
    }

	public function showBdayCard(){

		$id=isset($_GET['id'])?$_GET['id']:"";
		$products=$this->products->selectByIdOwner($id);
		$dao_pho=new PhotoDao();
		$photos=$dao_pho->selectByProduct($products['0']['id_products']);
		$owner=$this->owners->selectById($id);

		$page_birthday_view = 'active';
		include 'view/home_files/home_link.php';
	}

	public function sendBdayCard(){
        $e_mail=isset($_POST['e_mail'])?$_POST['e_mail']:"";
        $title=isset($_POST['title'])?$_POST['title']:"";
        $message=isset($_POST['message'])?$_POST['message']:"";
        $send=new SendMail();
        $send->sendMail($e_mail,$title,$message);

        $this->showHome();
    }
}
?>