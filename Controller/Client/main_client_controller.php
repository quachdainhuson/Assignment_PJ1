<?php
    $redirect = $_GET['redirect'] ?? '';
    
    if($redirect == ''){
        require_once('Model/Client/index_model.php');
        require_once('View/Client/index.php');
    }

    switch($redirect){
        case 'product_detail': 
            require_once('Model/Client/product_model.php');
            require_once('View/Client/index.php');
            require_once('View/Client/product_detail.php');
            break;
    }
?>