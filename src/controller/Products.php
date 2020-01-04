<?php 
namespace Admin\controller;

use Admin\classes\Validator;
use ZipArchive;

class Products extends NewProduct{

    private $class='Product';

    public function __construct()
    {
        parent::__construct();
        $this->class;
    }

    public function showInfo($data=null){

        $this->redirect->sessionRedirect();

        $id_updated=is_int($data)?$data:null;
        $list = $this->productsList();

        $page_product = 'active';
        $page_products = 'active';
		include 'view/app_link.php';		
	}

	public function update(){
        $data=$this->getData();
        $validator = new Validator();
        $validator->validate($data, $this->class);
        if ($validator->error() == false) {
            $this->product->update($data['id_euro'], date('d-m-Y'), $data['location_data_1'], $data['location_data_2'], $data['location_data_3'], $data['address_location'], $data['address_num'], $data['number'], $data['place'], $data['floors'], $data['of_floors'], $data['price'], $data['min_price'], $data['deposit'], $data['commission'], $data['payment'], $data['square'], $data['surface_area'], $data['equipment'], $data['ceiling_height'], $data['structure'], $data['heating'], $data['carpentry'], $data['kitchen'], $data['num_rooms'], $data['num_bath'], $data['num_wc'], $data['num_terrace'], $data['level'], $data['salon_m'], $data['security'], $data['num_elevator'], $data['construction_year'], $data['num_air_con'], $data['num_garages'], $data['note'], $data['description'], $data['active'], $data['active_data'], $data['info'], $data['elect'], $data['network'], $data['maintenance'], $data['accessories'], $data['garage'], $data['provider'], $data['type_terrace'], $data['type_bath'], $data['product_type'], $data['id_products']);
            $this->showInfo((int)$data['id_products']);
        } else {
            $error = $validator->error();
            $this->showCard($data,'products_edit',$data['id_product']);
        }
    }

	public function showOfferCard()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : "";

        $zip = new \ZipArchive();

        $zip_folder="public/photos/offer.$id.zip";
        if ($zip->open($zip_folder, ZipArchive::CREATE) === TRUE) {

                foreach (glob("public/photos/$id/*") as $files) {
                    $new_filename = substr($files, strrpos($files, '/')+1);
                    $zip->addFile($files,$new_filename);
                }
        }

        $product = $this->product->selectById($id);
        $page_send_offer = 'active';
        $page_product = 'active';
        include 'view/app_link.php';

    }

    public function sendOffer(){

        $id=isset($_POST['id'])?$_POST['id']:"";
        $e_mail=isset($_POST['e_mail'])?$_POST['e_mail']:"";
        $title=isset($_POST['title'])?$_POST['title']:"";
        $description=isset($_POST['message'])?$_POST['message']:"";
        $attach_path="public/photos/offer.$id.zip";
        $attach_name="offer.$id.zip";
        $send= new SendMail();
        $send->sendMail($e_mail,$title,$description,$attach_path,$attach_name);

        $this->showInfo();
    }
}