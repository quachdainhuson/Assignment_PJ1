
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
                    <img src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[0];
                                                        echo $main_pic;
                                                    ?>"  alt="" style="padding-right: 7px">
                    <div class="content_prd_sale">
                        <a href="?redirect=product_detail&action=product_detail&product_id=<?=$item['product_id'];?>">
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
        <?php
            if($arr['count'] != 0){  
        ?>
        <div class="col-10">
            <ul class="products">
                <?php
                    foreach($arr['product'] as $item){
                    
                    
                ?>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="?redirect=product_detail&action=product_detail&product_id=<?=$item['product_id'];?>" class="product-thumb">
                                <img src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[0];
                                                        echo $main_pic;
                                                    ?>" alt="">
                                <img class="img-change" src="" alt="">
                            </a>
                            <a href="?redirect=product_detail&action=product_detail&product_id=<?=$item['product_id'];?>" class="buy-now">XEM NGAY</a>
                        </div>
                            <div class="product-info">
                                <a href="?redirect=product_detail&action=product_detail&product_id=<?=$item['product_id'];?>" class="product-cat"><?=$item['cate_name'];?></a>
                                <a href="?redirect=product_detail&action=product_detail&product_id=<?=$item['product_id'];?>" class="product-name"><?=$item['product_name'];?></a>
                                <div class="product-price"><?=$item['product_price'];?></div>
                            </div>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                        if($arr['current_page'] > 1 && $arr['total_pages'] > 1){
                            $prev = $arr['current_page'] - 1;
                            echo '<li class="page-item">
                                    <a class="page-link" href="?redirect=product&action=product&current_page='.$prev.'">&laquo;</a>
                                </li>';
                        }

                    ?>
                    <?php
                        for($i = 1; $i < $arr['total_pages']+1; $i++){
                            if($i == $arr['current_page']){
                                echo '<li class="page-item active "><a class="page-link" >'.$i.'</a></li>';

                            }else{
                                echo '<li class="page-item"><a class="page-link" href="?redirect=product&action=product&current_page='.$i.'">'.$i.'</a></li>';
                            }
                        }
                    ?>
                    <?php
                                
                        if($arr['current_page'] < $arr['total_pages'] && $arr['total_pages'] > 1){
                            $next = $arr['current_page'] + 1;
                            echo '<li class="page-item"><a class="page-link" href="?redirect=product&action=product&current_page='.$next.'">&raquo;</a></li>';
                        }
                               
                    ?>   
                            
            </ul>
  
            </nav>          
        </div>
        <?php
            }else{       
        ?>
            <div class="col-10">
            <br><div class="alert alert-danger mt-3" style="width: 500px; margin-left:450px; text-align:center;">Không có sản phẩm mà bạn đang tìm kiếm !!</div>
            
            </div>
        <?php
            }
        ?>
    </div>
                 
    <script src="Public/js/js.js"></script>

    
</body>
 
</html>