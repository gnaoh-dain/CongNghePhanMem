<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/main.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="nav-container">
      <div class="nav">
        <div class="aside-left">
          <div class="logo">
            <img src="https://static.chotot.com/storage/default/transparent_logo.webp" alt="" />
          </div>
        </div>

        <div class="aside-right">
          <div>
            <a href="../index.php"><i class="ri-home-line"></i> Trang chủ</a>
          </div>
          <div>
            <a href="./management.html"><i class="ri-group-line"></i> Quản lí tin</a>
          </div>
          <div><i class="ri-more-line"></i> Thêm</div>
        </div>

        <div class="aside-left">
          <div class="search">
            <form action="" class="form-search">
              <span>Search</span>
              <input type="text" name="search" />
              <button class="btn" type="submit"><i class="ri-search-line"></i></button>
            </form>
          </div>
        </div>
        <div class="aside-right">
          <div><a href="login.php">Đăng nhập</a></div>
          <div><a href="login.php">Đăng Tin</a></div>
        </div>
      </div>
    </div>
    <!-- Nav -->

    <div class="login-container">
      <form class="form-login" action="login1.php" method="POST">
        <h1>Đăng nhập</h1>
        <div class="input-wrapper">
          <input type="email" name="email" placeholder="Nhập email của bạn" />
        </div>
        <div class="input-wrapper">
          <input type="password" name="pass" placeholder="Nhập password của bạn" />
        </div>
        <div class="submit">
          <button type="submit">Đăng Nhập</button>
          <div>Bạn chưa có tài khoản? <a href="./register.php">Đăng ký</a></div>
        </div>
      </form>
    </div>
  </body>
</html>
