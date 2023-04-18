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
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="buy-now">XEM NGAY</a>
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
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="buy-now"><a href="?controller=admin&?redirect=user " class="list-group-item list-group-item-action active "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg> Quản Lý Thành Viên
                    </a></a>
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