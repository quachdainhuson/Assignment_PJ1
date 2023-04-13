<h4 id="title-1">BỘ SƯU TẬP</h4>
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Public/image/pic-carosel-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Public/image/pic-carosel-2.jpg" class="d-block w-100" alt="...">
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

<div id="wrapper" style="z-index: 1000;">
        <div class="headline">
            <h3>SẢN PHẨM NỔI BẬT</h3>
        </div>
        <ul class="products">
            <?php
                foreach($arr['featured'] as $item){  
            ?>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-thumb">
                            <img src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[1];
                                                        echo $main_pic;
                                                    ?>" alt="">
                            <img class="img-change" src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[0];
                                                        echo $main_pic;
                                                    ?>" alt="">
                        </a>
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="buy-now">MUA NGAY</a>
                    </div>
                        <div class="product-info">
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-cat"><?= $item['cate_name'];?></a>
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-name"><?= $item['product_name'];?></a>
                            <div class="product-price"><?= number_format($item['product_price']);?>đ</div>
                        </div>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
    <div class="line"></div>
    <div id="wrapper" style="z-index: 1000;">
        <div class="headline">
            <h3>SẢN PHẨM MỚI NHẤT</h3>
        </div>
        <ul class="products">
        <?php
                foreach($arr['featured'] as $item){  
            ?>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-thumb">
                        <img src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[1];
                                                        echo $main_pic;
                                                    ?>" alt="">
                            <img class="img-change" src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[0];
                                                        echo $main_pic;
                                                    ?>" alt="">
                        </a>
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="buy-now">MUA NGAY</a>
                    </div>
                        <div class="product-info">
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-cat"><?= $item['cate_name'];?></a>
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-name"><?= $item['product_name'];?></a>
                            <div class="product-price"><?= number_format($item['product_price']);?>đ</div>
                        </div>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
    <div class = "center">
	<div class = "row" >
        <div class="col-3">
            <div class = "frame col-xs-6">
			    <img src = "Public/image/banner-1.jpg">
                <div class = "details">
                    <h1>CONVERSE</h1>
                    <p>CHUCK 70S</p>
                </div>
		    </div>
        </div>
        <div class="col-3">
            <div class = "frame col-xs-6">
                <img src = "Public/image/banner-2.jpg">
                <div class = "details">
                    <h1>CONVERSE</h1>
                    <p>CLASSIC</p>
                </div>
		    </div>
        </div>
        <div class="col-3">
            <div class = "frame col-xs-6">
			<img src = "Public/image/banner-3.jpg">
			<div class = "details">
				<h1>CONVERSE</h1>
				<p>HOT SALE</p>
			</div>
		</div>
        </div>	
        <div class="col-3">
            <div class = "frame col-xs-6">
                <img src = "Public/image/banner-4.jpg">
            </div>
        </div>
	</div>
    </div>