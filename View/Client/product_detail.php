
    <div class="row">
    <?php
    foreach($arr['prd_detail'] as $item){

    
?>
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
              
              <button id="add_to_cart"><a href="" style="text-decoration: none; color:white;">THÊM VÀO GIỎ</a> </button>
              
            <p><strong>Mã SP:</strong> N/A</p>
            <p><strong>Thể Loại:</strong>Converse</p>
            <p><strong>Từ Khóa:</strong> Classic</p>
            <p><strong>Mã SP:</strong> N/A</p>
              
        </div>  
    </div>
    <?php 
    }
?>
<br><br>
<div class="allinfo" style="background-color: rgb(251, 247, 247);">
        <div>
            <div style="margin-left: 50px;">
                <button class="btninfo" id="b1">THÔNG TIN BỔ SUNG</button>
                <button class="btninfo" id="b2">ĐÁNH GIÁ</button>
                <button class="btninfo" id="b3">VẬN CHUYỂN & GIAO HÀNG</button>
            </div>
        </div>
        <div class="box" id="Button-div-1" style="background-color: rgb(251, 247, 247);">
            <div id="my-cart">
                <!-- <div class="row">
                    <div class="cart-nav-item col-7">Sản phẩm</div>
                    <div class="cart-nav-item col-2">Số lượng</div>
                    <div class="cart-nav-item col-3">Giá tiền</div>
                </div> -->
                <form>
                    <div class="cart-item row">
                        <div class="cart-thumb col-4">

                            <h5>Màu sắc</h5>
                        </div>
    
                        <div class="cart-quantity col-8">
                        <?php
                          foreach($arr['prd_detail'] as $prd_detail){   
                   
                            echo $prd_detail['color_name'];
                            break;
                          }
                        ?>
                        </div>
                    </div>
                    <div class="cart-item row">
                        <div class="cart-thumb col-4">

                            <h5>Dáng</h5>
                        </div>
    
                        <div class="cart-quantity col-8">
                        <?php
                          foreach($arr['prd_detail'] as $prd_detail){   
                   
                            echo $prd_detail['style_name'];
                            break;
                          }
                        ?>
                        </div>
                    </div>
                    <div class="cart-item row">
                        <div class="cart-thumb col-4">

                            <h5>Size</h5>
                        </div>
    
                        <div class="cart-quantity col-8">
                        <?php
                foreach($arr['prd_detail'] as $prd_detail){   
                    if($prd_detail['so_luong'] != 0){
                      echo $prd_detail['size_number'] .',';
                    }
                  }
              ?>
                        </div>
                    </div>

                </form>
    
            </div>
            </div>

            <div class="box" id="Button-div-2" style="background-color: rgb(251, 247, 247);">
                <div class="rate row">
                    <div class="col-6">
                        <h5>Đánh giá</h5>
                        <label>Chưa có đánh giá nào</label>
                    </div>
                    <div class="col-6">
                        <h5>Hãy là người đầu tiên nhận xét</h5>
                        <div class="row">
                            <div class="col-12">
                                <label>Đánh giá của bạn:</label>
                                <section id="like" class="rating">
                                    <!-- FIFTH HEART -->
                                    <input type="radio" id="heart_5" name="like" value="5" />
                                    <label for="heart_5" title="Five">&#10084;</label>
                                    <!-- FOURTH HEART -->
                                    <input type="radio" id="heart_4" name="like" value="4" />
                                    <label for="heart_4" title="Four">&#10084;</label>
                                    <!-- THIRD HEART -->
                                    <input type="radio" id="heart_3" name="like" value="3" />
                                    <label for="heart_3" title="Three">&#10084;</label>
                                    <!-- SECOND HEART -->
                                    <input type="radio" id="heart_2" name="like" value="2" />
                                    <label for="heart_2" title="Two">&#10084;</label>
                                    <!-- FIRST HEART -->
                                    <input type="radio" id="heart_1" name="like" value="1" />
                                    <label for="heart_1" title="One">&#10084;</label>
                                  </section>
                            </div>
                            <div id="customer-name" class="col-6">
                                <label>Họ tên</label>
                                <input type="text" name="name"
                                    class="form-control" required>
                            </div>
                            <div id="customer-mail" class="col-6">
                                <label>Email</label>
                                <input type="text" name="mail" class="form-control"
                                    required>
                            </div>  
                        </div>
      
                        <div class="form-group">
                            <label>Nhận xét</label>
                            <textarea required name="detail_product" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </div>

            </div>

            <div class="box" id="Button-div-3" style="background-color: rgb(251, 247, 247);">
               <h5>1. Khi mua hàng tại Conversestore, quý khách có thể lựa chọn một trong các hình thức vận chuyển, giao nhận sau:</h5>
               <ul>
                <li>Conversestore trực tiếp vận chuyển và giao hàng tận tay khách hàng.</li>
                <li>Conversestore giao hàng cho khách hàng thông qua các nhà cung cấp dịch vụ chuyển phát.</li>
               </ul>
               <h5>2. Giao hàng nội thành</h5>
               <ul>
                <li>Phí giao hàng trong nội thành : 30.000/ đơn hàng.</li>
                <li>Nhân viên giao hàng sẽ liên lạc trước với những khách hàng không có yêu cầu về thời gian để sắp xếp thời gian hợp lý với khách hàng.</li>
                <li>Với những khách hàng có yêu cầu về thời gian , nhân viên giao hàng sẽ liên lạc và sắp xếp giao đúng giờ khách hàng yêu cầu </li>
               </ul>
               <h5>3. Giao hàng liên tỉnh: thông qua dịch vụ GHTK.VN</h5>
               <ul>
                <li>Khi đặt hàng, Quý khách vui lòng điền đầy đủ và chính xác các thông tin cần thiết theo yêu cầu để tạo điều kiện thuận lợi 
                    cho chúng tôi trong việc cung cấp hàng hóa và nhận thanh toán nhanh chóng. Chúng tôi cũng không chịu trách nhiệm đối với 
                    những trường hợp giao hàng chậm trễ hay thất lạc vì các thông tin do Quý khách cung cấp không chính xác.</li>
                <li>Thời gian giao hàng Từ 2 đến 4 ngày (không tính Chủ Nhật hoặc những ngày Lễ, Tết).. Phí: 50.000đ/sản phẩm, thời gian này chỉ mang tính chất tương đối.</li>
                <li>Những đơn hàng đặt vào Chủ nhật, ngày nghỉ Lễ, Tết: thời gian giao hàng được tính từ 16 giờ ngày 
                    thứ Hai tuần sau hoặc ngày làm việc đầu tiên sau ngày nghỉ Lễ,Tết.</li>
               </ul>
            </div>
        </div>


    
    <script>
        document.getElementById("b1").onclick = function(){
            document.getElementById("Button-div-1").style.display="block";
            document.getElementById("Button-div-2").style.display="none";
            document.getElementById("Button-div-3").style.display="none";
            document.getElementById('b2').style.backgroundColor="rgb(69, 146, 69)";
            document.getElementById('b2').style.color="white";
            document.getElementById('b3').style.backgroundColor="rgb(69, 146, 69)";
            document.getElementById('b3').style.color="white";
        }

        document.getElementById("b2").onclick = function(){
            document.getElementById("Button-div-2").style.display="block";
            document.getElementById("Button-div-1").style.display="none";
            document.getElementById("Button-div-3").style.display="none";
            document.getElementById('b1').style.backgroundColor="rgb(69, 146, 69)";
            document.getElementById('b1').style.color="white";
            document.getElementById('b3').style.backgroundColor="rgb(69, 146, 69)";
            document.getElementById('b3').style.color="white";
        }

        document.getElementById("b3").onclick = function(){
            document.getElementById("Button-div-3").style.display="block";
            document.getElementById("Button-div-1").style.display="none";
            document.getElementById("Button-div-2").style.display="none";
            document.getElementById('b1').style.backgroundColor="rgb(69, 146, 69)";
            document.getElementById('b1').style.color="white";
            document.getElementById('b2').style.backgroundColor="rgb(69, 146, 69)";
            document.getElementById('b2').style.color="white";
        }

        let btn1 = document.querySelector('#b1');
        let btn2 = document.querySelector('#b2');
        let btn3 = document.querySelector('#b3');



        btn1.addEventListener('click', () => btn1.style.backgroundColor = '#e0dcdc')
        btn1.addEventListener('click', () => btn1.style.color = 'black')
        btn2.addEventListener('click', () => btn2.style.backgroundColor = '#e0dcdc')
        btn2.addEventListener('click', () => btn2.style.color = 'black')
        btn3.addEventListener('click', () => btn3.style.backgroundColor = '#e0dcdc')
        btn3.addEventListener('click', () => btn3.style.color = 'black')

    </script>
    <h3 style="text-align: center;">SẢN PHẨM TƯƠNG TỰ</h3>
    <ul class="products">
       
      
      <?php
            foreach($arr['product_hot'] as $item){
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
                  
              </div>
                  <div class="product-info">
                      <a href="#" class="product-cat"><?= $item['cate_name'];?></a>
                      <a href="#" class="product-name"><?= $item['product_name'];?></a>
                      <div class="product-price"><?=number_format($item['product_price']),0,',',',' ;?></div>
                  </div>
          </div>
          </li>
          <?php
            }
      ?>
      
      
      
    </ul>
    
    
</div>
<script src="Public/js/cart.js"></script>
<script src="Public/js/js.js"></script>

</body>

</html>

