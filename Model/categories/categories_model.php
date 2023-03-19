<?php
    function index(){
        include_once('Config/connect.php');
        $query = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id DESC");
        include_once('Config/close_connect.php');
        return $query;
    }
    function store(){
        include_once('Config/connect.php');
        $cate_name = $_POST['cate_name'];
        $sql = "INSERT INTO categories (cate_name) VALUES ('$cate_name')";
        mysqli_query($connect,$sql);
        include_once('Config/close_connect.php');
    }
    
    switch($action){
        case '': $record = index(); break;
        case 'store': store(); break;
    }
?>