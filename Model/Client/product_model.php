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
    function cate(){
        $id = $_GET['cate_id'];
        include_once('Config/connect.php');
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        $sql = "SELECT product.*, categories.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                WHERE categories.cate_id = '$id'";
        $query = mysqli_query($connect, $sql);
        $style = mysqli_query($connect, "SELECT * FROM style");
        
        $sql_hot = "SELECT product.*, categories.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                WHERE categories.cate_id = '$id' LIMIT 4" ;
        $query_hot = mysqli_query($connect, $sql_hot);
        $size = "SELECT * FROM size";
        $query_size = mysqli_query($connect, $size);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
        $arr['product'] = $query;
        $arr['product_hot'] = $query_hot;
        $arr['size'] = $query_size;
        $arr['style'] = $style;

        return $arr;
    }
    function product(){
        include_once('Config/connect.php');
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        $sql = "SELECT product.*, categories.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                ";
        $query = mysqli_query($connect, $sql);
        $style = mysqli_query($connect, "SELECT * FROM style");
        $sql_hot = "SELECT product.*, categories.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                 LIMIT 4" ;
        $query_hot = mysqli_query($connect, $sql_hot);
        $size = "SELECT * FROM size";
        $query_size = mysqli_query($connect, $size);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
        $arr['product'] = $query;
        $arr['product_hot'] = $query_hot;
        $arr['size'] = $query_size;
        $arr['style'] = $style;
        
        return $arr;
    }
    function intro(){
        include_once('Config/connect.php');
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
       
        
        return $arr;
    }
    switch($redirect){
        case 'product_detail': $arr = index(); break;
        case 'intro': $arr = intro(); break;
        case 'cate': $arr = cate(); break;
        case 'product': $arr = product(); break;
    }
?>