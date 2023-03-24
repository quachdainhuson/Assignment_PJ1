
<?php 
    switch($action){
        case '': 
        require_once('Model/Admin/categories/categories_model.php');
        require_once('View/Admin/categories/categories.php');
            break;
        case 'create': 
            require_once('View/Admin/categories/add_categories.php');
            break;
        case 'store': 
        require_once('Model/Admin/categories/categories_model.php');
        header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'edit': 
        require_once('Model/Admin/categories/categories_model.php');
        require_once('View/Admin/categories/edit_categories.php');
            break;
        case 'update': 
        require_once('Model/Admin/categories/categories_model.php');
        header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'destroy': 
        require_once('Model/Admin/categories/categories_model.php');
        header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
    }
?>