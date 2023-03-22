<?php 
    switch($action){
        case '': 
            require_once('Model/product/product_model.php');
            require_once('View/Admin/product/product.php');
            break;
        case 'create': 
            require_once('Model/product/product_model.php');
            require_once('View/Admin/product/add_product.php');
            break;
        case 'store': 
            require_once('Model/product/product_model.php');
            header('location: ?controller=product');
            break;
        case 'edit': 
            require_once('Model/product/product_model.php');
            require_once('View/Admin/product/edit_product.php');
            break;
        case 'update': 
            require_once('Model/product/product_model.php');
            header('location: ?controller=categories');
            break;
        case 'destroy': 
            require_once('Model/product/product_model.php');
            header('location: ?controller=product');
            break;
    }
?>