<?php
$ruter->get('index.php', 'Log::showView');
$ruter->post('home', 'Log::login');
$ruter->get('logout', 'Log::logout');
$ruter->get('product', 'Product::showProduct');
$ruter->post('type', 'ProducTypeController::showTypeProduct');
$ruter->get('new_product', 'NewProductController::showInfo');
$ruter->get('owner', 'NewProductController::showOwner');
$ruter->get('photos', 'NewProductController::showPhotos');
$ruter->get('corporate', 'NewProductController::showCorporate');
$ruter->get('personal', 'NewProductController::showPersonal');
$ruter->get('owners', 'Owner::showOwners');
?>