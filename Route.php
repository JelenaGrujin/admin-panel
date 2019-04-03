<?php
$ruter->get('index.php', 'LogController::showView');
$ruter->post('home', 'LogController::login');
$ruter->get('logout', 'LogController::logout');
$ruter->get('product', 'ProductController::showProduct');
$ruter->post('type', 'ProducTypeController::showTypeProduct');
$ruter->get('new_product', 'NewProductController::showInfo');
$ruter->get('owner', 'NewProductController::showOwner');
$ruter->get('photos', 'NewProductController::showPhotos');
$ruter->get('corporate', 'NewProductController::showCorporate');
$ruter->get('personal', 'NewProductController::showPersonal');
$ruter->get('owners', 'OwnerController::showOwners');
?>
