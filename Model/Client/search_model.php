<?php
function index() {
    $search = $_POST['search'];
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
        
        $sql = "SELECT product.*, categories.* FROM product
        INNER JOIN categories ON categories.cate_id = product.cate_id
        WHERE product_name LIKE '%$search%'";
        $query = mysqli_query($connect, $sql);
        $count = mysqli_num_rows(mysqli_query($connect, $sql));
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
        $arr['count'] = $count;
        return $arr;
    }
switch($action) {
    case '': $arr = index(); break;
}

?>