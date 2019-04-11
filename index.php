<?php 
include 'header.html';
require_once 'vendor/autoload.php';

use Admin\classes\Request;


$ruter = Admin\classes\Router::insert('Route.php');

$ruter->direct(Request::url(), Request::method());
include 'footer.html';
?>
