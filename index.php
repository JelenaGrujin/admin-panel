<?php 
include 'header.html';
require_once 'vendor/autoload.php';

use Admin\classes\Request;

$router = Admin\classes\Router::insert('Route.php');

$router->direct(Request::url(), Request::method());
include 'footer.html';
