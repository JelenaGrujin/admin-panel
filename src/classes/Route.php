<?php
$ruter->get('index.php', 'LogController::showView');
$ruter->post('home', 'LogController::login');
$ruter->get('logout', 'LogController::logout');
$ruter->get('product', 'ProductController::showProduct');
$ruter->post('type', 'ProducTypeController::showTypeProduct');
$ruter->get('new_product', 'NewProductController::showInfo');
?>
