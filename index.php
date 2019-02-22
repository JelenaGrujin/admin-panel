<?php 
require_once 'vendor/autoload.php';

use Admin\classes\Route;
use Admin\controller\EquipmentController;
use Admin\controller\LogController;
use Admin\controller\Controller;



Route::set('index.php', function(){
    require_once 'view/login.php';
});

Route::set('home', function(){
    $makemonth=date("d-m-Y", strtotime("+1 months"));
    $makeweek=date("d-m-Y", strtotime("+1 week"));
    $makeday=date("d-m-Y", strtotime("+1 day"));
    $maked=date("d-m-Y", strtotime("-1 day"));
    
    $page_homepa = 'active';
    include 'view/homefiles/home_link.php';
});

  //  Route::set('equipment', EquipmentController::showView('login'));
    
       // Route::set('type', Controller::showView('login'));
        
          //  Route::set('helo', LogController::login());
?>
