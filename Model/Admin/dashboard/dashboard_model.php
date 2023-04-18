<?php
    function index(){
        include_once('Config/connect.php');
        $sql_count_prd = "SELECT COUNT(product_id)
        FROM product";
        $sql_count_order = "SELECT COUNT(order_id)
        FROM order1";
        $sql_count_user = "SELECT COUNT(user_id)
        FROM user";
        $query_prd = mysqli_query($connect, $sql_count_prd); 
        $query_user = mysqli_query($connect, $sql_count_user);
        $query_order = mysqli_query($connect, $sql_count_order);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['product'] = $query_prd;
        $arr['user'] = $query_user;
        $arr['order'] = $query_order;
        return $arr;
    }
    switch($action){
        case '': $arr = index();break;
    }
?>