<?php 
include 'view/header.php';
require_once 'vendor/autoload.php';

use Admin\classes\Request;


$ruter = Admin\classes\Router::insert('Route.php');

$ruter->direct(Request::url(), Request::method());
include 'view/footer.php';
?>
