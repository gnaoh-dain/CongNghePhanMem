<?php require('nav.php') ?>

    <div class="login-container">
      <form class="form-login" action="login1.php" method="POST">
        <h1>Đăng nhập</h1>
        <div class="input-wrapper">
          <input type="email" name="email" placeholder="Nhập email của bạn" />
        </div>
        <div class="input-wrapper">
          <input type="password" name="pass" placeholder="Nhập password của bạn" />
        </div>
        <div class="mess-err">
          Bạn cần điền đầy đủ thông tin!
        </div>
        <div class="submit">
          <button type="submit">Đăng Nhập</button>
          <div>Bạn chưa có tài khoản? <a href="./register.php">Đăng ký</a></div>
        </div>
      </form>
    </div>
  </body>
</html>
