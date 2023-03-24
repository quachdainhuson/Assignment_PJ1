<?php 
    //Lấy giá trị COntroller nào đang làm việc với Client
    $controller = $_GET['controller'] ??'';
    // Điều khiển COntroller làm gì
    $action = $_GET['action'] ?? '';
    // Gọi chức năng cho Client
    
    if(!isset($_GET['controller'])) {
        require_once('Controller/Client/main_client_controller.php');
    }else {
        switch($controller) {
            case 'admin' : require_once('Controller/Admin/main_admin_controller.php'); break;
            case 'login' : require_once('Controller/Admin/login/login_controller.php'); break;
        }
    }
?>