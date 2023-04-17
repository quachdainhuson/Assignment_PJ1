<?php
    function index(){
        include_once('Config/connect.php');
        $limit = 5;
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
        

        
        $sql = "SELECT product.*, 
        categories.*,
        color.*,
        style.*
        FROM  product 
        INNER JOIN categories ON product.cate_id = categories.cate_id
        INNER JOIN style ON product.style_id = style.style_id
        INNER JOIN color ON product.color_id = color.color_id
        ORDER BY product.product_id ASC LIMIT $start, $limit
        ";
        $query = mysqli_query($connect,$sql); 
        $sql_2 = "SELECT prd_detail.*, product.*, size.* 
        FROM prd_detail 
        INNER JOIN product ON prd_detail.product_id = product.product_id
        INNER JOIN size ON prd_detail.size_id = size.size_id";
        $query_2 = mysqli_query($connect,$sql_2); 
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['product'] = $query;
        $arr['prd_detail'] = $query_2;
        $arr['current_page'] = $current_page;
        $arr['total_pages'] = $total_page;

        return $arr;
        
    }
    function create(){
        include_once('Config/connect.php');
        $sql_1 = "SELECT * FROM categories";
        $query_1 = mysqli_query($connect, $sql_1);
        $sql_2 = "SELECT * FROM color";
        $query_2 = mysqli_query($connect, $sql_2);
        $sql_3 = "SELECT * FROM size";
        $query_3 = mysqli_query($connect, $sql_3);
        $sql_4 = "SELECT * FROM style";
        $query_4 = mysqli_query($connect, $sql_4);
        include_once('Config/close_connect.php');
    
        $values = array(); // tạo một mảng rỗng để lưu giá trị
        $values['categories'] = $query_1; 
        $values['color'] = $query_2;
        $values['size'] = $query_3;
        $values['style'] = $query_4;
        return $values;
    }
    function store(){
        include_once('Config/connect.php');
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $description = $_POST['product_description'];
        if(isset($_POST['product_featured'])){
            $featured = 1;
        }else{
            $featured = 0;
        }
        $cate = $_POST["cate_id"];
        $color = $_POST['color_id'];
        $style = $_POST['style_id'];
        $product_images = array();
        foreach ($_FILES['product_image']['tmp_name'] as $key => $tmp_name) {
            $image_name = $_FILES['product_image']['name'][$key];
            $image_tmp = $_FILES['product_image']['tmp_name'][$key];
            move_uploaded_file($image_tmp, "Public/image/".$image_name);
            $product_images[] = $image_name;
        }
        $prd_image_string = implode(',', $product_images);
        $sql_product = "INSERT INTO product (product_name, product_price, product_description, product_featured, product_image, cate_id, color_id, style_id)
        VALUES ('$name', $price, '$description', $featured, '$prd_image_string',$cate, $color, $style)";
        mysqli_query($connect, $sql_product);
        $product_id = mysqli_insert_id($connect);
        $sql = "SELECT * FROM size";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $size_id = $row['size_id'];
            $size_name = $row['size_number'];
            $quantity = $_POST[$size_name];
            $sql_size = "INSERT INTO prd_detail (product_id, size_id, so_luong) VALUES ('$product_id', '$size_id', '$quantity')";
        mysqli_query($connect, $sql_size);
        }
        include_once('Config/close_connect.php');
        
    }
    function edit(){
        $id = $_GET['product_id'];
        include_once('Config/connect.php');
        $sql_1 = "SELECT product.*, 
        categories.*,
        color.*,
        style.*
        FROM  product 
        INNER JOIN categories ON product.cate_id = categories.cate_id
        INNER JOIN style ON product.style_id = style.style_id
        INNER JOIN color ON product.color_id = color.color_id WHERE product_id = '$id'
        ";
        $query_1 = mysqli_query($connect, $sql_1);
        $sql_2 = "SELECT * FROM categories" ;
        $query_2 = mysqli_query($connect, $sql_2);
        $sql_3 = "SELECT * FROM color";
        $query_3 = mysqli_query($connect, $sql_3);
        $sql_4 = "SELECT * FROM size";
        $query_4 = mysqli_query($connect, $sql_4);
        $sql_5 = "SELECT * FROM style";
        $query_5 = mysqli_query($connect, $sql_5);

        $sql_6 = "SELECT prd_detail.*, product.*, size.* 
        FROM prd_detail 
        INNER JOIN product ON prd_detail.product_id = product.product_id
        INNER JOIN size ON prd_detail.size_id = size.size_id
        WHERE product.product_id = '$id'";
        $query_6 = mysqli_query($connect, $sql_6);
        $values = array();
        $values['product'] = $query_1; 
        $values['categories'] = $query_2; 
        $values['color'] = $query_3; 
        $values['size'] = $query_4; 
        $values['style'] = $query_5; 
        $values['prd_detail'] = $query_6; 
        return $values;
    }
    function destroy(){
        $id = $_GET['product_id'];
        include_once('Config/connect.php');
        mysqli_query($connect, "DELETE FROM prd_detail WHERE product_id = '$id'");
        mysqli_query($connect, "DELETE FROM product WHERE product_id = '$id'");
        include_once('Config/close_connect.php');
    }
    function update(){
        
        include_once('Config/connect.php');
        
        $id = $_POST['product_id'];
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $description = $_POST['product_description'];
        if(isset($_POST['product_featured'])){
            $featured = 1;
        }else{
            $featured = 0;
        }
        $cate = $_POST['cate_id'];
        $color = $_POST['color_id'];
        $style = $_POST['style_id'];
        $arr = mysqli_fetch_array(mysqli_query($connect, "SELECT product_image FROM product WHERE product_id = '$id'"));
        if($_FILES['product_image']['name'] == '') {
            $image = $arr['product_image'];
        }else
        {
            $image = $_FILES['product_image']['name'];
            $file_tmp = $_FILES['product_image']['tmp_name'];
            move_uploaded_file($file_tmp, 'Public/image/'.$image);
        }
        $sql_product = "UPDATE product SET 
        product_name = '$name', 
        product_price = $price, 
        product_description = '$description', 
        product_featured = $featured, 
        product_image = '$image', 
        cate_id = $cate, 
        color_id = $color, 
        style_id =  $style
        WHERE product_id = '$id'
        ";
        mysqli_query($connect, $sql_product);
        $id = $_POST['product_id'];
        $size = $_POST['quantity'];
        
        foreach($size as $size_id => $quantity){
            $sql_product_detail =  "UPDATE prd_detail SET so_luong = $quantity WHERE size_id = '$size_id' AND product_id = '$id' ";
            mysqli_query($connect, $sql_product_detail);
            }
 
        include_once('Config/close_connect.php');
    }
    switch($action){
        case '': $arr = index(); break;
        case 'create': $values = create(); break;
        case 'store': store(); break;
        case 'edit': $values = edit(); break;
        case 'update': update(); break;
        case 'destroy': destroy(); break;
    }

 ?>