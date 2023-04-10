
    <!-- Tiêu đề 1 -->
    <h4 id="title-1">SẢN PHẨM</h4>

    <div class="row">
        <div class="col-2" id="slide_bar">
            
            <h5>DÁNG GIÀY</h5>
            <ul class="slide_bar_shoe_shape">
                <?php
                    foreach($arr['style'] as $item){
                ?>
                <li><a href="?redirect=style&action=style&style_id=<?=$item['style_id'];?>"><?=$item['style_name']?></a></li>
                
                <?php }?>
            </ul>
            <br><br>
            <h5>CHỌN THEO MÀU</h5>
            <ul class="slide_bar_choose_color">
                <?php
                    foreach($arr['color'] as $item){
                ?>
                <li><a href="?redirect=color&action=color&color_id=<?=$item['color_id'];?>"><?=$item['color_name']?></a></li>
                <?php }?>
            </ul>
            <br><br>
            <h5>SẢN PHẨM HOT</h6>
            <?php
                    foreach($arr['product_hot'] as $item){

                    
                ?>
            <div class="product_sale">
                <div class="pic-prd-sale">
                    <img src="Public/image/<?=$item['product_image'];?>"  alt="" style="padding-right: 7px">
                    <div class="content_prd_sale">
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>">
                            <span id="content_prd_name" style="font-size: 13px"><?=$item['product_name'];?></span>
                        
                        </a>
                        <a href=""><p id="content_prd_sale_price" style="font-size: 13px"><?=$item['product_price'];?>đ</p></a>
                        
                    </div>
                    
                </div>

            </div>
            <?php
                    }
            ?>

        </div>
        <div class="col-10">
            <ul class="products">
                <?php
                    foreach($arr['product'] as $item){
                    
                    
                ?>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-thumb">
                                <img src="Public/image/<?=$item['product_image'];?>" alt="">
                                <img class="img-change" src="" alt="">
                            </a>
                            <a href="product_detail.html" class="buy-now">MUA NGAY</a>
                        </div>
                            <div class="product-info">
                                <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-cat"><?=$item['cate_name'];?></a>
                                <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-name"><?=$item['product_name'];?></a>
                                <div class="product-price"><?=$item['product_price'];?></div>
                            </div>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>

    <script src="Public/js/js.js"></script>

    
</body>
</html>