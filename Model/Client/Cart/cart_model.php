<?php

function view_cart() {
    $arr = array();
    $temp = array();
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM categories ORDER BY cate_id ASC");
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id => $value) {
            foreach($value as $size_id => $quantity) {
                // Tìm bản ghi cần thêm vào giỏ hàng
                $sqlTemp = "SELECT prd_detail.*, product.*, size.* 
                FROM prd_detail
                INNER JOIN product ON product.product_id = prd_detail.product_id
                INNER JOIN size ON prd_detail.size_id = size.size_id
                WHERE product.product_id = '$prd_id'AND prd_detail.size_id = '$size_id' ";
                $resultTemp = mysqli_query($connect, $sqlTemp);
                if(isset($resultTemp)){
                    // Lặp mảng để lấy ra chi tiết từng bản ghi
                    foreach ($resultTemp as $each){
                        $temp[$prd_id][$size_id]['product_name'] = $each['product_name'];
                        $temp[$prd_id][$size_id]['product_price'] = $each['product_price'];
                        $temp[$prd_id][$size_id]['product_image'] = $each['product_image'];
                        $temp[$prd_id][$size_id]['size_number'] = $each['size_number'];
                        $temp[$prd_id][$size_id]['quantity'] = $each['so_luong'];
                        $temp[$prd_id][$size_id]['amount'] = $quantity;
                    }
                }
            }
        }
    }
    // 
    include_once('Config/close_connect.php');
    $arr['prd_detail'] = $temp;
    $arr['categories'] = $cate;
    return $arr;
}
    function add_cart() {
        $prd_id = $_GET['product_id'];
        $size_id = $_GET['size_id'];
        if(isset($_SESSION['cart'])){
            if(isset($_SESSION['cart'][$prd_id][$size_id])) {
                $_SESSION['cart'][$prd_id][$size_id]++;
            } else {
                $_SESSION['cart'][$prd_id][$size_id] = 1;
            }
        } else {
            $_SESSION['cart'] = array();
            $_SESSION['cart'][$prd_id][$size_id] = 1;
        }   
    }
    function update_cart() {
        $quantity = $_POST['qtt'];
        foreach($quantity as $prd_id => $qtt_by_size) {
            if(isset($_SESSION['cart'][$prd_id])) {
                foreach($qtt_by_size as $size_id => $qtt) {
                    if(isset($_SESSION['cart'][$prd_id][$size_id])) {
                        $_SESSION['cart'][$prd_id][$size_id] = $qtt;
                    } else {
                        $_SESSION['cart'][$prd_id][$size_id] = $qtt;
                    }
                }
            } else {
                $_SESSION['cart'][$prd_id] = $qtt_by_size;
            }
        }
    }
    // Xóa giỏ hàng
    function del_cart() {
        $prd_id = $_GET["product_id"];
        $size_id = $_GET["size_id"];
        if (isset($_SESSION['cart'][$prd_id])) {
            if (isset($_SESSION['cart'][$prd_id][$size_id])) {
                unset($_SESSION['cart'][$prd_id][$size_id]);
                if (count($_SESSION['cart'][$prd_id]) == 0) {
                    unset($_SESSION['cart'][$prd_id]);
                }
            }
        }
        echo count($_SESSION['cart']);
        if (count($_SESSION['cart']) == 0) {
            unset($_SESSION['cart']);
        }
    }
    switch($action) {
    case '': $arr = view_cart(); break;
    case 'add': add_cart(); break;
    case 'update': update_cart(); break;
    case 'del': del_cart(); break;
    }
?>