<?php
    function index(){
        include_once('Config/connect.php');
        $sql_receipt = "SELECT customer.*, order1.* FROM order1 INNER JOIN customer ON customer.customer_id = order1.customer_id";
        $query_receipt = mysqli_query($connect, $sql_receipt);

        include_once('Config/close_connect.php');
        $arr = array();
        $arr['order'] = $query_receipt;
        return $arr;
    }

    switch($action){
        case '': $arr = index();break;
        case 'detail': $arr = index();break;
    }
?>