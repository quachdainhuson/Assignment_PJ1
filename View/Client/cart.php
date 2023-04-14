  <script>
        function buyNow() {
        document.getElementById('buy-now').submit();
    }
    </script> 

   
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
                        <a href="#" onClick="buyNow()">
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
    <?php
    if(isset($_SESSION['cart'])){
    ?>
  <div class="container">
    <div class="row">
        <div class="infocustomer col-6">
            <form method="post" id="buy-now" action="?redirect=cart&action=checkaccess">
                <div class="row">
                    <h3>THÔNG TIN THANH TOÁN</h3>
                    <div id="customer-name" class="col-12">
                        <label>Họ tên</label>
                        <input type="text" name="customer_name" class="form-control" required>
                    </div>
                    <div id="customer-phone" class="col-12">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone_number" class="form-control" required>
                    </div>
                    <div id="customer-mail" class="col-12">
                        <label>Địa chỉ email</label>
                        <input type="text" name="customer_email" class="form-control" required>
                    </div>
                    <div id="customer-add" class="col-12">
                        <label>Địa chỉ</label>
                        <input type="text" name="customer_address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea name="customer_note" class="form-control" rows="3"></textarea>
                    </div>
    
                </div>
            </form>
        </div>
    </div>
  </div>
  <?php
    }  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- FOOTER -->
    



</body>
    
</html>
