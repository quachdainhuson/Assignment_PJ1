   
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
            <?php
                    if(isset($_SESSION["cart"])){
                        $totals = 0;
                        foreach($arr['prd_detail'] as $prd_id=>$qtt){
                            $totals++;
                        }
                        echo $totals;
                    }
                    else{
                        echo 0;
                    }
                    ?>
            <!-- <a href="?redirect=cart" id="price">0/0đ</a> -->
        </div>
    </div>
    
    <div class="row">
        <div class="service col-3" id="col-3-1">HÀNG CÓ SẴN CHÍNH HÃNG</div>
        <div class="service col-3" id="col-3-2">ĐỔI TRẢ LINH HOẠT</div>
        <div class="service col-3" id="col-3-3">SHIP TOÀN QUỐC</div>
    </div>
   
   <h4 id="title-2">GIỎ HÀNG</h4>
    <br>
    <div class="container">
    <?php
        if(isset($_SESSION['cart'])) {
        ?>
        <div id="my-cart">
            <div class="row">
                <div class="cart-nav-item col-7">Sản phẩm</div>
                <div class="cart-nav-item col-2">Số lượng</div>
                <div class="cart-nav-item col-3">Giá tiền</div>
            </div>
            <form method="post" action="?redirect=<?= $redirect ?>&action=update">
                    <?php
                            $total_price_all = 0;
                            foreach ($arr['prd_detail'] as $productID => $size_id) {
                                foreach($size_id as $size_id => $details){
                                $total_price = $details['amount'] * $details['product_price'];
                                $total_price_all += $total_price; // Tính tổng tiền sản phẩm trong giỏ hành
                    ?>
                <div class="cart-item row">
                    <div class="cart-thumb col-7">
                        <img src="Public/image/<?php 
                                                        $list_img = explode(',',$details['product_image']);
                                                        $main_pic = $list_img[0];
                                                        echo $main_pic;
                                                    ?>" alt="">
                        <h4><?= $details['product_name'];?></h4>
                        <h4><?= $details['size_number'];?></h4>
                        
                    </div>

                    <div class="cart-quantity col-2">
                        <input type="number" id="quantity" name="qtt[<?= $productID ?>][<?= $size_id ?>]" class="form-control form-blue quantity" value="<?= $details['amount'] ?>"
                            min="1" max="<?= $details['quantity'] ?>">
                    </div>
                    <div class="cart-price col-3"><b><?= number_format($details['amount'] * $details['product_price']); ?>đ</b><a href="?redirect=cart&action=del&product_id=<?= $productID ?>&size_id=<?= $size_id ?>"><i class="fa-solid fa-circle-xmark"></i></a></div>
                </div>
                

                <?php } }?>
                <div class="row">
                    <div class="cart-thumb col-7">
                        <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật
                            giỏ hàng</button>
                    </div>
                    <div class="cart-total col-2"><b>Tổng:</b></div>
                    <div class="cart-price col-3"><b><?= number_format($total_price_all); ?>đ</b></div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <!-- <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật
                            giỏ hàng</button> -->
                    </div>
                    <div class="col-2"></div>
                    <div class="by-now col-3">
                        <a href="order.html">
                            <b>Thanh toán ngay</b>
                        </a>
                    </div>
                </div>
            </form>

        </div>
        <?php }else {
                        echo '<br><div class="alert alert-danger mt-3">Giỏ hàng của bạn hiện không có sản phẩm nào !</div>';
                    } ?>
    </div>
  <div class="container">
    <div class="row">
        <div class="infocustomer col-6">
            <form method="post">
                <div class="row">
                    <h3>THÔNG TIN THANH TOÁN</h3>
                    <div id="customer-name" class="col-12">
                        <label>Họ tên</label>
                        <input type="text" name="name"
                            class="form-control" required>
                    </div>
                    <div id="customer-phone" class="col-12">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone"
                            class="form-control" required>
                    </div>
                    <div id="customer-mail" class="col-12">
                        <label>Địa chỉ email</label>
                        <input type="text" name="mail" class="form-control"
                            required>
                    </div>
                    <div id="customer-add" class="col-12">
                        <label>Địa chỉ</label>
                        <input type="text"
                            name="add" class="form-control" required>
                    </div>
    
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea required name="detail_product" class="form-control" rows="3"></textarea>
                    </div>
    
                </div>
            </form>
        </div>
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
