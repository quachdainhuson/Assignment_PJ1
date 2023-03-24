<?php

    function index(){
        $id = $_GET['product_id'];
        include_once('Config/connect.php');
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        $sql = "SELECT * FROM product WHERE product_id = '$id'";
        $query = mysqli_query($connect, $sql);
        $size = "SELECT * FROM size";
        $query_size = mysqli_query($connect, $size);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
        $arr['product'] = $query;
        $arr['size'] = $query_size;
        return $arr;
    }
    switch($redirect){
        case 'product_detail': $arr = index(); break;
    }
?>