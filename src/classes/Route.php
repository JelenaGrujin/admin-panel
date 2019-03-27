<?php
$ruter->get('index.php', 'LogController::showView');
$ruter->post('loging', 'LogController::login');
$ruter->get('logout', 'LogController::logout');

?>
