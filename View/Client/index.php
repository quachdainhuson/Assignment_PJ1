<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="shortcut icon" href="../Public/image/logo-title.png" type="image/x-icon">
    <link rel="stylesheet" href="Public/css/style.css">
    <link rel="stylesheet" href="Public/css/product.css">
    <link rel="stylesheet" href="Public/css/product_detail.css">
    <link rel="stylesheet" href="Public/css/intro.css">
    <link rel="stylesheet" href="Public/css/cart.css">
    <link rel="stylesheet" href="Public/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Public/font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>
<body>
    <!-- HEADER -->
    <div id="container">
        
        <div id="header">
            <div class="Public/image_logo">
                <a href="?"><img src="Public/image/store-giay.png" alt="" id="logo"></a>  
            </div>
                
            <ul id="menu-categories-1">
                <li><a href="?">TRANG CHỦ</a></li>
                <li><a href="?redirect=product">GIÀY</a></li>
                <?php
                    foreach($arr['categories'] as $item){
                ?>
                <li><a href="?redirect=cate&cate_id=<?= $item['cate_id'];?>"><?=$item['cate_name'];?></a></li>
                <?php
                    }
                ?>
                <li><a href="">HOT PRODUCT</a></li>
                <li><a href="?redirect=intro">ABOUT US</a></li>
            </ul>
                                       
        </div> 
        <div class="icon-menu">
            <!-- <input type="text" id="search_bar"> -->
            <a href=""></a><i class="fa-sharp fa-solid fa-magnifying-glass" style="color: white;"></i></a>
            <a href="?controller=login&action=login"><i class="fa-regular fa-user" style="color: white;"></i></a>
            <?php
                if(isset($_SESSION['user_level'])){
                    echo '<a href="?controller=login&action=logout"><i class="fa-solid fa-right-from-bracket" style="color: white;"></i></a>';
                }
            ?>
            <a href="?redirect=cart"><i class="fa-sharp fa-solid fa-cart-shopping" style="color: white;"></i></a>
            <a href="?redirect=cart" id="price">0/0đ</a>
        </div>
    </div>
    
    <div class="row">
        <div class="service col-3" id="col-3-1">HÀNG CÓ SẴN CHÍNH HÃNG</div>
        <div class="service col-3" id="col-3-2">ĐỔI TRẢ LINH HOẠT</div>
        <div class="service col-3" id="col-3-3">SHIP TOÀN QUỐC</div>
    </div>
    
    
    
    <?php
        if(isset($_GET['redirect'])){
            $redirect = $_GET['redirect'];
            switch($redirect){
                case 'product_detail' :
                    include_once('View/Client/product_detail.php');
                    break;
                case 'intro': 
                    include_once('View/Client/intro.php');
                    break;
                case 'cate': 
                    include_once('View/Client/product.php');
                    break;
                case 'product': 
                    include_once('View/Client/product.php');
                    break;
                case 'cart': 
                    include_once('View/Client/cart.php');
                    break;
                case 'style': 
                    include_once('View/Client/product.php');
                    break;
                case 'color': 
                    include_once('View/Client/product.php');
                    break; 
            }
            
        }else{
            include_once('View/Client/dashboard.php');
        } 
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- FOOTER -->
    


<div class="footer">
    <div class="row">
        <div class="service col-3">
            <ul id="footer-col-1">
                <li><a href="">MUA HÀNG</a></li>
                <li><a href="">ĐỔI TRẢ</a></li>
                <li><a href="">SHIP HÀNG</a></li>
                <li><a href="">THANH TOÁN</a></li>
                <li><a href="">SIZE GUIDE</a></li>
                <li><a href="">CÁCH CHECK CODE</a></li>
                <br>
                <li><a href=""><img src="Public/image/fb.png" alt="" width="35px" height="35px"> FACEBOOK</i></a></li>
                <li><a href=""><img src="Public/image/instagram.png" alt="" width="35px" height="35px"> INSTAGRAM</a></li>
                <li><a href=""><img src="Public/image/shopee.jpg" alt="" width="35px" height="35px">SHOPPE</a></li>
            
            </ul>
        </div>
        <div class="service col-3">
            <ul id="footer-col-1">
                <li><a href="">GIÀY</a></li>
                <li><a href="">ÁO</a></li>
                <li><a href="">SALE</a></li>
                <li><a href="">NAM</a></li>
                <li><a href="">NỮ</a></li>
                <li><a href="">CONVERSE</a></li>
                <li><a href="">VANS</a></li>

            </ul>
        </div>
        <div class="service col-3">
            <ul id="footer-col-1">
                <li><a href="">CONVERSE.STORE_</a></li>
                <br>
                <li><a href="">CỬA HÀNG:</a></li>
                <li><a href="">Số 8, Nguyễn Hoàng Tôn, Xuân La, Tây Hồ, Hà Nội</a></li>
                <li ><a href=""id="footer-phone-number" style="font-size: 20px; color: #0a5750;">+84 866.866.368</a></li>
                <br>
                <li><a href="">BLOG</a></li>
            </ul>
        </div>
        <div class="service col-3">
            <br><br><br>
            <a href="" id="footer-col-4">NHẬN ƯU ĐÃI TỪ CỦA HÀNG:</a>
            <br>
            <input type="email" id="footer-email" value="NHẬP MAIL CỦA BẠN">
            <button id="bt-nhan-ngay"> NHẬN NGAY</button>
        </div>
    </div>
</div>    
</body>

</html>
