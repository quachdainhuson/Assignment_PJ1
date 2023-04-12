<?php
    function index(){
        include_once('Config/connect.php');
        $sql_cate = "SELECT * FROM categories ORDER BY cate_id ASC";
        $query_cate = mysqli_query($connect, $sql_cate);
        $sql_prd_featured = "SELECT product.*, 
        categories.*,
        color.*,
        style.*
        FROM  product 
        INNER JOIN categories ON product.cate_id = categories.cate_id
        INNER JOIN style ON product.style_id = style.style_id
        INNER JOIN color ON product.color_id = color.color_id WHERE product_featured = 1 ORDER BY product_id DESC LIMIT 8";
        $query_prd_featured = mysqli_query($connect, $sql_prd_featured);
        $sql_prd_new = "SELECT * FROM product  ORDER BY product_id DESC LIMIT 6";
        $query_prd_featured = mysqli_query($connect, $sql_prd_featured);
        
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $query_cate;
        $arr['featured'] = $query_prd_featured;
        $arr['new'] = $sql_prd_new;
        return $arr;
    }
    switch($redirect){
        case '': $arr = index(); break;
        case 'product_detail': $arr = index(); break;
    }
?>