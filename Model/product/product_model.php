 <?php
    function index(){
        include_once('Config/connect.php');
        $sql = "SELECT product.*, 
        categories.*,
        color.*,
        style.*,
        size.*
        FROM  product 
        INNER JOIN categories ON product.cate_id = categories.cate_id
        INNER JOIN size ON product.size_id = size.size_id
        INNER JOIN style ON product.style_id = style.style_id
        INNER JOIN color ON product.color_id = color.color_id
        ";
        $query = mysqli_query($connect,$sql); 
        include_once('Config/close_connect.php');
        return $query;
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
    
        while ($row = mysqli_fetch_assoc($query_1)) {
            $values['categories'][] = $row; // thêm dữ liệu từ bảng categories vào mảng $values
        }
        while ($row = mysqli_fetch_assoc($query_2)) {
            $values['color'][] = $row; 
        }
        while ($row = mysqli_fetch_assoc($query_3)) {
            $values['size'][] = $row; 
        }
        while ($row = mysqli_fetch_assoc($query_4)) {
            $values['style'][] = $row; 
        }
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
        $cate = $_POST['cate_id'];
        $size = $_POST['size_id'];
        $color = $_POST['color_id'];
        $style = $_POST['style_id'];
        $image = $_FILES['product_image']['name'];
        $file_tmp = $_FILES['product_image']['tmp_name'];
        $sql_product = "INSERT INTO product (product_name, product_price, product_description, product_featured, product_image, cate_id, color_id, style_id, size_id)
        VALUES ('$name', $price, '$description', $featured, '$image',$cate, $color, $style, $size )
        ";
        mysqli_query($connect, $sql_product);
        move_uploaded_file($file_tmp, 'Public/image/'.$image);
        include_once('Config/close_connect.php');
        
    }
    function edit(){
        $id = $_GET['product_id'];
        include_once('Config/connect.php');
        $sql_1 = "SELECT product.*, 
        categories.*,
        color.*,
        style.*,
        size.*
        FROM  product 
        INNER JOIN categories ON product.cate_id = categories.cate_id
        INNER JOIN size ON product.size_id = size.size_id
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
        while ($row = mysqli_fetch_assoc($query_1)) {
            $values['product'][] = $row; // thêm dữ liệu từ bảng categories vào mảng $values
        }
        while ($row = mysqli_fetch_assoc($query_2)) {
            $values['categories'][] = $row; // thêm dữ liệu từ bảng categories vào mảng $values
        }
        while ($row = mysqli_fetch_assoc($query_3)) {
            $values['color'][] = $row; 
        }
        while ($row = mysqli_fetch_assoc($query_4)) {
            $values['size'][] = $row; 
        }
        while ($row = mysqli_fetch_assoc($query_5)) {
            $values['style'][] = $row; 
        }
        return $values;
    }
    function destroy(){
        $id = $_GET['product_id'];
        include_once('Config/connect.php');
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
        $size = $_POST['size_id'];
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
        style_id =  $style, 
        size_id = $size WHERE product_id = '$id'
        ";
        mysqli_query($connect, $sql_product);
        include_once('Config/close_connect.php');
    }
    switch($action){
        case '': $record = index(); break;
        case 'create': $values = create(); break;
        case 'store': store(); break;
        case 'edit': $values = edit(); break;
        case 'update': update(); break;
        case 'destroy': destroy(); break;
    }

 ?>