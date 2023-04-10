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
        case 'intro': 
            require_once('Model/Client/product_model.php');
            require_once('View/Client/index.php');
            require_once('View/Client/intro.php');
            break;
        case 'cate': 
            require_once('Model/Client/product_model.php');
            require_once('View/Client/index.php');
            require_once('View/Client/product.php');
            break;
        case 'product': 
            require_once('Model/Client/product_model.php');
            require_once('View/Client/index.php');
            require_once('View/Client/product.php');
            break;
        case 'cart': 
            require_once('Controller/Client/Cart/cart_controller.php');
            require_once('View/Client/index.php');
            require_once('View/Client/cart.php');
            break;
    }
?>