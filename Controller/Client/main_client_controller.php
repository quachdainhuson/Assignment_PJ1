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
            require_once('View/Client/categories_product.php');
            break;
        case 'product': 
            require_once('Model/Client/product_model.php');
            require_once('View/Client/index.php');
            require_once('View/Client/product.php');
            break;
        case 'style': 
            require_once('Model/Client/product_model.php');
            require_once('View/Client/index.php');
            require_once('View/Client/style_product.php');
            break;
        case 'color': 
            require_once('Model/Client/product_model.php');
            require_once('View/Client/index.php');
            require_once('View/Client/color_product.php');
            break;    
        case 'cart': 
            require_once('Controller/Client/Cart/cart_controller.php');
            require_once('View/Client/cart.php');
            break;
        case 'search': 
            require_once('Model/Client/search_model.php');
            require_once('View/Client/index.php');
            require_once('View/Client/search_product.php');
            break;
        
    }
?>