<?php


namespace Admin\controller;

use Admin\model\AccessoriesDao;
use Admin\model\AgentDao;
use Admin\model\BathroomDao;
use Admin\model\CarpentryDao;
use Admin\model\DocDao;
use Admin\model\EquipmentDao;
use Admin\model\GarageDao;
use Admin\model\HeatingDao;
use Admin\model\KitchenDao;
use Admin\model\LocationOneDao;
use Admin\model\LocationThreeDao;
use Admin\model\LocationTwoDao;
use Admin\model\OwnersDao;
use Admin\model\PhotoDao;
use Admin\model\ProductsDao;
use Admin\model\productssDao;
use Admin\model\ProviderDao;
use Admin\model\SecurityDao;
use Admin\model\StructureDao;
use Admin\model\TerraceDao;
use Admin\model\TypeDao;

class DaoHandler
{

    public $type;
    public $structure;
    public $equipment;
    public $locationOne;
    public $locationTwo;
    public $locationThree;
    public $products;
    public $owners;
    public $agent;
    public $kitchen;
    public $heating;
    public $garage;
    public $carpentry;
    public $provider;
    public $security;
    public $bathroom;
    public $terrace;
    public $accessories;
    public $docs;
    public $photos;

    public function __construct()
    {
        $this->type = new TypeDao();
        $this->structure = new StructureDao();
        $this->equipment = new EquipmentDao();
        $this->locationOne = new LocationOneDao();
        $this->locationTwo = new LocationTwoDao();
        $this->locationThree = new LocationThreeDao();
        $this->products = new ProductsDao();
        $this->owners = new OwnersDao();
        $this->agent = new AgentDao();
        $this->kitchen = new KitchenDao();
        $this->heating = new HeatingDao();
        $this->garage = new GarageDao();
        $this->carpentry = new CarpentryDao();
        $this->provider = new ProviderDao();
        $this->security = new SecurityDao();
        $this->bathroom = new BathroomDao();
        $this->terrace = new TerraceDao();
        $this->accessories = new AccessoriesDao();
        $this->docs= new DocDao();
        $this->photos = new PhotoDao();

    }

    public function typeList(){
        $list=$this->type->selectAll();
        return $list;
    }

    public function structureList(){
        $list=$this->structure->selectAll();
        return $list;
    }

    public function equipmentList(){
        $list=$this->equipment->selectAll();
        return $list;
    }

    public function lOneList(){
        $list=$this->locationOne->selectAll();
        return $list;
    }

    public function lTwoList(){
        $list=$this->locationTwo->selectAll();
        return $list;
    }

    public function lThreeList(){
        $list=$this->locationThree->selectAll();
        return $list;
    }

    public function productsList(){
        $list=$this->products->selectAll();
        return $list;
    }

    public function ownersList(){
        $list=$this->owners->selectAll();
        return $list;
    }

    public function agentList(){
        $list=$this->agent->selectALL();
        return $list;
    }

    public function kitchenList(){
        $list=$this->kitchen->selectALL();
        return $list;
    }

    public function heatingList(){
        $list=$this->heating->selectALL();
        return $list;
    }

    public function garageList(){
        $list=$this->garage->selectALL();
        return $list;
    }

    public function carpentryList(){
        $list=$this->carpentry->selectALL();
        return $list;
    }

    public function providerList(){
        $list=$this->provider->selectALL();
        return $list;
    }

    public function securityList(){
        $list=$this->security->selectALL();
        return $list;
    }

    public function bathroomList(){
        $list=$this->bathroom->selectALL();
        return $list;
    }

    public function terraceList(){
        $list=$this->terrace->selectAll();
        return $list;
    }

    public function accessoriesList(){
        $list=$this->accessories->selectAll();
        return $list;
    }
}