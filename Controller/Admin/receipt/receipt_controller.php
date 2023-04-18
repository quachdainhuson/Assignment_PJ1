<?php 
    switch($action){
        case '': 
            require_once('Model/Admin/receipt/receipt_model.php');
            require_once('View/Admin/receipt/receipt.php');
            break;
        case 'detail': 
            require_once('Model/Admin/receipt/receipt_model.php');
            require_once('View/Admin/receipt/receipt_detail.php');
            break;
        case 'unconfirm': 
            require_once('Model/Admin/receipt/receipt_model.php');
            header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'confirm': 
            require_once('Model/Admin/receipt/receipt_model.php');
            header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'delivery': 
            require_once('Model/Admin/receipt/receipt_model.php');
            header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'delivered': 
            require_once('Model/Admin/receipt/receipt_model.php');
            header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            break;
        
    }
?>