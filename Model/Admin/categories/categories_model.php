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
    function edit(){
        $id = $_GET['cate_id'];
        include_once('Config/connect.php');
        $sql = "SELECT * FROM categories WHERE cate_id = '$id'";
        $query = mysqli_query($connect,$sql);
        include_once('Config/close_connect.php');
        return $query;
    }
    function update(){
        include_once('Config/connect.php');
        $id = $_POST['cate_id'];
        $cate_name = $_POST['cate_name'];
        $sql = "UPDATE categories SET cate_name = '$cate_name' WHERE cate_id = '$id'";
        mysqli_query($connect,$sql);
        include_once('Config/close_connect.php');
    }
    function destroy(){
        $id = $_GET['cate_id'];
        include_once('Config/connect.php');
        mysqli_query($connect, "DELETE FROM categories WHERE cate_id = '$id'");
        include_once('Config/close_connect.php');
    }
    
    switch($action){
        case '': $record = index(); break;
        case 'store': store(); break;
        case 'edit': $record = edit(); break;
        case 'update': update(); break;
        case 'destroy': destroy(); break;
    }
?>