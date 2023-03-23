<?php 
    switch($action){
        case '': 
            require_once('Model/user/user_model.php');
            require_once('View/Admin/user/user.php');
            break;
        case 'create': 
            require_once('Model/user/user_model.php');
            require_once('View/Admin/user/add_user.php');
            break;
        case 'store': 
            require_once('Model/user/user_model.php');
            header('location: ?controller=user');
            break;
        case 'edit': 
            require_once('Model/user/user_model.php');
            require_once('View/Admin/user/edit_user.php');
            break;
        case 'update': 
            require_once('Model/user/user_model.php');
            header('location: ?controller=user');
            break;
        case 'destroy': 
            require_once('Model/user/user_model.php');
            header('location: ?controller=user');
            break;
    }
?>