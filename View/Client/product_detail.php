<?php
    foreach($arr['prd_detail'] as $item){

    
?>
    <div class="row">
        <div class="col-md-5">
            <div class="slide_show">

                <!-- Full-width images with number text -->
                <div class="mySlides">
                  <div class="numbertext">1 / 6</div>
                    <img src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[0];
                                                        echo $main_pic;
                                                    ?>" style="width:90%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">2 / 6</div>
                    <img src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[1];
                                                        echo $main_pic;
                                                    ?>" style="width:90%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">3 / 6</div>
                    <img src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[2];
                                                        echo $main_pic;
                                                    ?>" style="width:90%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                      <img src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[3];
                                                        echo $main_pic;
                                                    ?>" style="width:90%">
                  </div>
              
                
              
                
              
                <!-- Next and previous buttons -->
                <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
              
                <!-- Image text -->
                
              
                <!-- Thumbnail images -->
                <div class="row" id="slide_show">
                  <div class="column">
                    <img class="demo cursor" src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[0];
                                                        echo $main_pic;
                                                    ?>" style="width:80%" onclick="currentSlide(1)" >
                  </div>
                  <div class="column">
                    <img class="demo cursor" src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[1];
                                                        echo $main_pic;
                                                    ?>" style="width:80%" onclick="currentSlide(2)" >
                  </div>
                  <div class="column">
                    <img class="demo cursor" src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[2];
                                                        echo $main_pic;
                                                    ?>" style="width:80%" onclick="currentSlide(3)" >
                  </div>
                  <div class="column">
                    <img class="demo cursor" src="Public/image/<?php 
                                                        $list_img = explode(',',$item['product_image']);
                                                        $main_pic = $list_img[3];
                                                        echo $main_pic;
                                                    ?>" style="width:80%" onclick="currentSlide(4)" >
                  </div>
                  
                </div>
              </div>

        </div>
        <div class="col-md-7">
            <h4 id="prd_detail_title"><?= $item['product_name'];?></h4>
            <p id="prd_detail_price"><span id="price_prd"><?= number_format($item['product_price']);?>đ</span> <span id="id_prd">Mã SP: N/A</span></p>
            <p><?= $item['product_description'];?></p>
            <label for="pa_size">Size:</label>
            <select name="size_id" id="pa_size">
              <option value="0">Chọn một tùy chọn</option>
              <?php
                foreach($arr['prd_detail'] as $prd_detail){   
                    if($prd_detail['so_luong'] != 0){
              ?>
              
              <option value="<?= $prd_detail['size_id']?>"><?= $prd_detail['size_number']?>
                        
            </option>
              <?php
                    }
                }
              ?>
            </select>
            
            <!-- <div class="quantity">
              <input type="button" value="-" class="minus">
              <input type="number" step="1" min="0" max="9999" value="1" class="quantity-input">
              <input type="button" value="+" class="plus">
              </div> -->
              
              <button  id="add_to_cart"><a href="" style="text-decoration: none; color:white;">THÊM VÀO GIỎ</a> </button>
              
            <p><strong>Mã SP:</strong> N/A</p>
            <p><strong>Thể Loại:</strong>Converse</p>
            <p><strong>Từ Khóa:</strong> Classic</p>
            <p><strong>Mã SP:</strong> N/A</p>
              
        </div>  
    </div>
    <h3 style="text-align: center;">SẢN PHẨM TƯƠNG TỰ</h3>
    <ul class="products">
      <li>
          <div class="product-item">
              <div class="product-top">
                  <a href="" class="product-thumb">
                      <img src="Public/image/prd-2.jpg" alt="">
                      <img class="img-change" src="Public/image/prd-1.png" alt="">
                  </a>
                  
              </div>
                  <div class="product-info">
                      <a href="#" class="product-cat">Converse</a>
                      <a href="#" class="product-name">Converse Run Star Hike</a>
                      <div class="product-price">3.200.000đ</div>
                  </div>
          </div>
      </li>
      <li>
          <div class="product-item">
              <div class="product-top">
                  <a href="" class="product-thumb">
                      <img src="Public/image/prd-2.jpg" alt="">
                      <img class="img-change" src="Public/image/prd-1.png" alt="">
                  </a>
                  <a href="#" class="buy-now">XEM NGAY</a>
              </div>
                  <div class="product-info">
                      <a href="#" class="product-cat">Converse</a>
                      <a href="#" class="product-name">Converse Run Star Hike</a>
                      <div class="product-price">3.200.000đ</div>
                  </div>
          </div>
      </li>
      <li>
          <div class="product-item">
              <div class="product-top">
                  <a href="" class="product-thumb">
                      <img src="Public/image/prd-2.jpg" alt="">
                      <img class="img-change" src="Public/image/prd-1.png" alt="">
                  </a>
                  <a href="#" class="buy-now">XEM NGAY</a>
              </div>
                  <div class="product-info">
                      <a href="#" class="product-cat">Converse</a>
                      <a href="#" class="product-name">Converse Run Star Hike</a>
                      <div class="product-price">3.200.000đ</div>
                  </div>
          </div>
      </li>
      <li>
          <div class="product-item">
              <div class="product-top">
                  <a href="" class="product-thumb">
                      <img src="Public/image/prd-2.jpg" alt="">
                      <img class="img-change" src="Public/image/prd-1.png" alt="">
                  </a>
                  <a href="#" class="buy-now">XEM NGAY</a>
              </div>
                  <div class="product-info">
                      <a href="#" class="product-cat">Converse</a>
                      <a href="#" class="product-name">Converse Run Star Hike</a>
                      <div class="product-price">3.200.000đ</div>
                  </div>
          </div>
      </li>
      
    </ul>
    
    
</div>
<script src="Public/js/cart.js"></script>
<script src="Public/js/js.js"></script>

</body>

</html>

<?php 
    }
?>