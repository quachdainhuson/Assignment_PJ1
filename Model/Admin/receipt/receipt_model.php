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
    function detail(){
        $order_id = $_GET['order_id'];
        include_once('Config/connect.php');
        $sql = "SELECT order1.*, order_detail.*, prd_detail.* , product.*, size.* FROM
        order1 
        INNER JOIN order_detail ON order1.order_id = order_detail.order_id 
        INNER JOIN prd_detail ON order_detail.prd_detail_id = prd_detail.prd_detail_id
        INNER JOIN product ON prd_detail.product_id = product.product_id
        INNER JOIN size ON prd_detail.size_id = size.size_id
        WHERE order1.order_id = '$order_id';
        ";
        $query = mysqli_query($connect, $sql);
        $sql_customer = "SELECT customer.*, order1.* FROM order1 INNER JOIN customer ON customer.customer_id = order1.customer_id WHERE order1.order_id = '$order_id'";
        $query_2 = mysqli_query($connect, $sql_customer);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['order_detail'] = $query;
        $arr['customer'] = $query_2;
        return $arr;
    }
    function unconfirm(){
        $order_id = $_GET['order_id'];
        include_once('Config/connect.php');
        $sql = "UPDATE order1 SET status = (0) WHERE order_id = '$order_id' ";
        mysqli_query($connect,$sql);
        include_once('Config/close_connect.php');
    }
    function confirm(){
        $order_id = $_GET['order_id'];
        include_once('Config/connect.php');
        $sql = "UPDATE order1 SET status = (1) WHERE order_id = '$order_id' ";
        mysqli_query($connect,$sql);
        include_once('Config/close_connect.php');
    }
    function delivery(){
        $order_id = $_GET['order_id'];
        include_once('Config/connect.php');
        $sql = "UPDATE order1 SET status = (2) WHERE order_id = '$order_id' ";
        mysqli_query($connect,$sql);
        include_once('Config/close_connect.php');
    }
    function delivered(){
        $order_id = $_GET['order_id'];
        include_once('Config/connect.php');
        $sql = "UPDATE order1 SET status = (3) WHERE order_id = '$order_id' ";
        mysqli_query($connect,$sql);
        include_once('Config/close_connect.php');
    }
    switch($action){
        case '': $arr = index();break;
        case 'detail': $arr = detail();break;
        case 'unconfirm': unconfirm();break;
        case 'confirm': confirm();break;
        case 'delivery': delivery();break;
        case 'delivered': delivered();break;
    }
?>