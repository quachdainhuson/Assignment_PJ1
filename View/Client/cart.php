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
                            foreach ($arr['product'] as $productID => $item) {
                                $total_price = $item['amount'] * $item["product_price"];
                                $total_price_all += $total_price; // Tính tổng tiền sản phẩm trong giỏ hành
                    ?>
                <div class="cart-item row">
                <?= $item['product_image'];?>
                    <div class="cart-thumb col-7">
                        <img src="Public/image/<?= $item['product_image'];?>" >
                        <h4><?= $item['product_name'];?></h4>
                    </div>

                    <div class="cart-quantity col-2">
                        <input type="number" id="quantity" name="qtt[<?= $productID ?>]" class="form-control form-blue quantity" value="<?= $item['amount'] ?>"
                            min="1" max="<?= $item['quantity'] ?>">
                    </div>
                    <div class="cart-price col-3"><b><?= number_format($item['product_price']); ?>đ</b><a href="?redirect=cart&action=del&id=<?= $productID ?>"><i class="fa-solid fa-circle-xmark"></i></a></div>
                </div>
                

                <?php } ?>
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