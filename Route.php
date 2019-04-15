<?php

            $ruter->get('index.php', 'Log::showLog');
            $ruter->post('home', 'Log::login');
            $ruter->get('home', 'Home::showHome');
            $ruter->get('logout', 'Log::logout');
            $ruter->get('product', 'ProductInfo::showProduct');
            $ruter->get('type', 'ProductType::showTypeProduct');
            $ruter->get('new_product', 'NewProduct::showInfo');
            $ruter->get('owner', 'NewProduct::showOwner');
            $ruter->get('photos', 'NewProduct::showPhotos');
            $ruter->get('corporate', 'NewProduct::showCorporate');
            $ruter->get('personal', 'NewProduct::showPersonal');
            $ruter->get('owners', 'Owner::showOwners');
            $ruter->post('new_product', 'NewProduct::confirmNewProduct');

?>
