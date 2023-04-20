  

   
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
                        <a href="#" id="submit-link" onClick="buyNow()">
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
        <!-- <div class="my_order col-6">
            <h3 id="content">ĐƠN HÀNG CỦA BẠN</h3>
            <div class="info_order">
                <div class="row">
                    <div class="cart-nav-item col-8">Sản phẩm</div>
                    <div class="cart-nav-item col-4">Giá tiền</div>
                </div>

                <div class="item_order row">
                    <div class="order_name col-8">
                    <h5>
                        Converse Run Star Hike - 39 x 1
                    </h5>
                </div>
                    <div class="order_price col-4">3.200.000đ</div>
                </div>

                <div class="item_order row">
                    <div class="final_order col-8">
                    <h4>
                        Tạm tính
                    </h4>
                </div>
                    <div class="final_order col-4">
                        <h4>
                            3.200.000đ
                        </h4>
                    </div>
                </div>

                <div class="row">
                    <div class="total_order col-8">
                    <h3>
                        Tổng
                    </h3>
                </div>
                    <div class="final_price col-4">
                        <h3>
                            3.200.000đ
                        </h3>
                    </div>
                </div>
                
            </div>

            
            <div>
                <label class="radio col-12" id="r1"><input type="radio" name="Radio" value="radio1"> Trả tiền mặt khi nhận hàng</label>
                <div class="box" id="radio-div-1">Trả tiền mặt khi giao hàng</div>
                <label class="radio col-12" id="r2"><input type="radio" name="Radio" value="radio2"> Chuyển khoản ngân hàng</label>
                <div class="box" id="radio-div-2">
                    <div>
                        QUACH DAI NHU NAM – MB Bank (Ngân Hàng Quân Đội)
                    </div>
                    <div>
                        012345678910
                    </div>
                    <div>
                        Nội dung: Ghi mã đơn hàng + SĐT
                    </div>
                </div>
            </div>
            
            <script>
                document.getElementById("r1").onclick = function(){
                    document.getElementById("radio-div-1").style.display="block";
                    document.getElementById("radio-div-2").style.display="none";
                }

                document.getElementById("r2").onclick = function(){
                    document.getElementById("radio-div-2").style.display="block";
                    document.getElementById("radio-div-1").style.display="none";
                }
            </script>
        </div> -->
    </div>
    </div>
    
  
  <?php
    }  ?>
    <script>
    var form = document.getElementById("buy-now");
    var submitLink = document.getElementById("submit-link");

    submitLink.addEventListener("click", function(event) {
    event.preventDefault();
    var name = form.elements["customer_name"].value;
    var phone = form.elements["phone_number"].value;
    var email = form.elements["customer_email"].value;
    var address = form.elements["customer_address"].value;

    if (name === "" || phone === "" || email === "" || address === "") {
      alert("Please fill in all required fields.");
      return false;
    }
    form.submit();
    });
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- FOOTER -->
    



