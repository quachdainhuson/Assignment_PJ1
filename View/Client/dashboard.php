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
                            <img src="Public/image/<?=$item['product_image']?>" alt="">
                            <img class="img-change" src="Public/image/prd-1.png" alt="">
                        </a>
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="buy-now">MUA NGAY</a>
                    </div>
                        <div class="product-info">
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-cat"><?= $item['cate_name'];?></a>
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-name"><?= $item['product_name'];?></a>
                            <div class="product-price"><?= $item['product_price'];?>đ</div>
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
                            <img src="Public/image/<?=$item['product_image']?>" alt="">
                            <img class="img-change" src="Public/image/prd-1.png" alt="">
                        </a>
                        <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="buy-now">MUA NGAY</a>
                    </div>
                        <div class="product-info">
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-cat"><?= $item['cate_name'];?></a>
                            <a href="?redirect=product_detail&product_id=<?=$item['product_id'];?>" class="product-name"><?= $item['product_name'];?></a>
                            <div class="product-price"><?= $item['product_price'];?>đ</div>
                        </div>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>