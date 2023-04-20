
<link rel="stylesheet" href="Public/css/login.css">
    <div class="login-content">
        <div class="login-heading">
            <a href="#" style="opacity: 1;"><h2>ĐĂNG NHẬP</h2> </a>
            <!-- <a href="register.html" style="opacity: 0.5;"><h2>ĐĂNG KÍ</h2></a> -->
            
        </div>
        <br><br>
        <form role="form" method="post" action="index.php?controller=login&action=checklogin">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" class="form-control" name="user_name" aria-describedby="emailHelp" placeholder="Vui lòng nhập email của bạn">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
              <input type="password" class="form-control" name="pass_word" placeholder="Vui lòng nhập mật khẩu">
            </div>
            
            <div class="button-login">
                <button type="submit" name="sbm" class="btn btn-primary">Đăng nhập</button>
                <!-- <p>Bạn chưa có tài khoản? <a href="register.html">Đăng ký ngay</a></p> -->
            </div>
          </form>
    </div>
    <br><br><br><br><br>
    <br><br>













    
