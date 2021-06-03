<?php require('nav.php') ?>
    <div class="register-container">
      <form class="form-register" id="formRegister" action="dangki1.php" method="post" >
        <h1>Đăng ký</h1>
        <div class="input-wrapper">
          <input type="text" name="userName" placeholder="Nhập họ tên của bạn" />
        </div>
        <div class="input-wrapper">
          <input type="email" name="email" placeholder="Nhập email của bạn" />
        </div>
        <div class="input-wrapper">
          <input type="password" name="password" placeholder="Nhập password của bạn" />
        </div>
        <div class="input-wrapper">
          <input type="password" name="confirmPassword" placeholder="Nhập lại password của bạn" />
        </div>
        <div class="mess-err">
          Bạn cần điền đầy đủ và chính xác thông tin!
        </div>
        <div class="submit">
          <button type="submit">Đăng ký</button>
          <div>Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></div>
        </div>
      </form>
    </div>

    <script src="../js/main.js"></script>
  </body>
</html>
