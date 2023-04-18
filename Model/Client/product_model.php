<?php

    function index(){
        $id = $_GET['product_id'];
        include_once('Config/connect.php');
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        $sql = "SELECT * FROM product WHERE product_id = '$id'";
        $query = mysqli_query($connect, $sql);
        $sql_2 = "SELECT prd_detail.*, product.*, size.* 
        FROM prd_detail 
        INNER JOIN product ON prd_detail.product_id = product.product_id
        INNER JOIN size ON prd_detail.size_id = size.size_id
        WHERE product.product_id = '$id'";
        $query_2 = mysqli_query($connect, $sql_2);
        $size = "SELECT * FROM size";
        $query_size = mysqli_query($connect, $size);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
        $arr['product'] = $query;
        $arr['prd_detail'] = $query_2;
        $arr['size'] = $query_size;
        return $arr;
    }
    function cate(){
        $id = $_GET['cate_id'];
        include_once('Config/connect.php');
        $limit = 4;
        $sqlTotal = "SELECT count(product_id) as total FROM product";
        $resultTotal = mysqli_query($connect, $sqlTotal);
        $total_records = mysqli_fetch_assoc($resultTotal)['total'];
        $total_page = ceil($total_records / $limit);
        if(isset($_GET['current_page'])){
            $current_page = $_GET['current_page'];
        }else{
            $current_page = 1; // Truong hop khong co thong tin trang tren duong dan thi mang dinh se tro ve trang 1
        }
        // Truong hop bam nut tro ve trang truoc o trang 1
        if($current_page < 1){
            $current_page = 1;
        }
        // Truong hop bam nut trang sau o trang cuoi cung
        if($current_page > $total_page){
            $current_page = $total_page;
        }
       
        $start = ($current_page - 1) * $limit;
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        $sql = "SELECT product.*, categories.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                WHERE categories.cate_id = '$id'
                ORDER BY product.product_id
                ASC LIMIT $start, $limit";
        $query = mysqli_query($connect, $sql);
        $style = mysqli_query($connect, "SELECT * FROM style");
        
        $sql_hot = "SELECT product.*, categories.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                WHERE categories.cate_id = '$id' LIMIT 4" ;
        $query_hot = mysqli_query($connect, $sql_hot);
        $size = "SELECT * FROM size";
        $query_size = mysqli_query($connect, $size);
        $color = mysqli_query($connect, "SELECT * FROM color");
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
        $arr['product'] = $query;
        $arr['product_hot'] = $query_hot;
        $arr['size'] = $query_size;
        $arr['style'] = $style;
        $arr['color'] = $color;
        $arr['current_page'] = $current_page;
        $arr['total_pages'] = $total_page;
        $arr['cate_id'] = $id;
        return $arr;
    }
    function product(){
        include_once('Config/connect.php');
        $limit = 8;
        $sqlTotal = "SELECT count(product_id) as total FROM product";
        $resultTotal = mysqli_query($connect, $sqlTotal);
        $total_records = mysqli_fetch_assoc($resultTotal)['total'];
        $total_page = ceil($total_records / $limit);
        if(isset($_GET['current_page'])){
            $current_page = $_GET['current_page'];
        }else{
            $current_page = 1; // Truong hop khong co thong tin trang tren duong dan thi mang dinh se tro ve trang 1
        }
        // Truong hop bam nut tro ve trang truoc o trang 1
        if($current_page < 1){
            $current_page = 1;
        }
        // Truong hop bam nut trang sau o trang cuoi cung
        if($current_page > $total_page){
            $current_page = $total_page;
        }
       
        $start = ($current_page - 1) * $limit;
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        $sql = "SELECT product.*, categories.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                ORDER BY product.product_id
                ASC LIMIT $start, $limit
                ";
        $query = mysqli_query($connect, $sql);
        $style = mysqli_query($connect, "SELECT * FROM style");
        $sql_hot = "SELECT product.*, categories.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                 LIMIT 4" ;
        $query_hot = mysqli_query($connect, $sql_hot);
        $color = mysqli_query($connect, "SELECT * FROM color");
        $size = "SELECT * FROM size";
        $query_size = mysqli_query($connect, $size);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
        $arr['product'] = $query;
        $arr['product_hot'] = $query_hot;
        $arr['size'] = $query_size;
        $arr['style'] = $style;
        $arr['color'] = $color; 
        $arr['current_page'] = $current_page;
        $arr['total_pages'] = $total_page;
        return $arr;
    }
    function style(){
        $style_id = $_GET['style_id'];
        include_once('Config/connect.php');
        $limit = 4;
        $sqlTotal = "SELECT count(product_id) as total FROM product";
        $resultTotal = mysqli_query($connect, $sqlTotal);
        $total_records = mysqli_fetch_assoc($resultTotal)['total'];
        $total_page = ceil($total_records / $limit);
        if(isset($_GET['current_page'])){
            $current_page = $_GET['current_page'];
        }else{
            $current_page = 1; // Truong hop khong co thong tin trang tren duong dan thi mang dinh se tro ve trang 1
        }
        // Truong hop bam nut tro ve trang truoc o trang 1
        if($current_page < 1){
            $current_page = 1;
        }
        // Truong hop bam nut trang sau o trang cuoi cung
        if($current_page > $total_page){
            $current_page = $total_page;
        }
       
        $start = ($current_page - 1) * $limit;
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        $sql = "SELECT product.*, categories.*, style.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                INNER JOIN style ON product.style_id = style.style_id
                WHERE style.style_id = '$style_id'
                ORDER BY product.product_id
                ASC LIMIT $start, $limit
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
        $color = mysqli_query($connect, "SELECT * FROM color");
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
        $arr['product'] = $query;
        $arr['product_hot'] = $query_hot;
        $arr['size'] = $query_size;
        $arr['style'] = $style;
        $arr['color'] = $color;
        $arr['current_page'] = $current_page;
        $arr['total_pages'] = $total_page;
        return $arr;
    }
    function color(){
        $color_id = $_GET['color_id'];
        include_once('Config/connect.php');
        $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
        $sql = "SELECT product.*, categories.*, color.*
        FROM product
                INNER JOIN categories ON product.cate_id = categories.cate_id
                INNER JOIN color ON product.color_id = color.color_id
                WHERE color.color_id = '$color_id'
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
        $color = mysqli_query($connect, "SELECT * FROM color");
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['categories'] = $cate;
        $arr['product'] = $query;
        $arr['product_hot'] = $query_hot;
        $arr['size'] = $query_size;
        $arr['style'] = $style;
        $arr['color'] = $color;
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
        case 'style': $arr = style(); break;
        case 'color': $arr = color(); break;


    }
?>