<?php
$action = '';
if(isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch($action) {
    case 'login' : 
            include_once('View/login_logout/login.php'); break;
    case 'checklogin' :
        require_once('Model/login/login_model.php');
        if(isset($check)) {
            header('location: index.php?controller=admin');
        }else{
            
            include_once('View/login_logout/login.php');
        }
        ; break;
    case 'logout' : 
        session_destroy();
        header('location: index.php?controller=admin');
        ; break;
        
}

?>
