<?php 
    switch($action){
        case '': 
            require_once('Model/Admin/receipt/receipt_model.php');
            require_once('View/Admin/receipt/receipt.php');
            break;
        case 'detail': 
            require_once('Model/Admin/receipt/receipt_model.php');
            require_once('View/Admin/receipt/edit_receipt.php');
            break;
        case 'update': 
            require_once('Model/Admin/receipt/receipt_model.php');
            header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'destroy': 
            require_once('Model/Admin/receipt/receipt_model.php');
            header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
    }
?>