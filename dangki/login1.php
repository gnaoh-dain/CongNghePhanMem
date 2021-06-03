<?php session_start();?>
<?php
include 'ketnoi.php';
    if(isset($_POST['email'])&& !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass'])){
        $sqli = "SELECT * from user where email = '" . $_POST['email'] . "'";
        $resulti = mysqli_query($conn,$sqli);
        $rows = mysqli_fetch_assoc($resulti);
        if(!$rows){ ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div>
            <div>
            <H3 style ="text-align : center; ">Sai Email !</H3>
            </div>
            </div>
        </body>
        </html>

<?php
          include 'login.php';
        }
        elseif($rows['status'] != 1){
            echo '<H3 style ="text-align : center">Tài khoản chưa được kích hoạt !</H3>';
            require 'login.php';
        }
        else{
            if($rows['password'] == ($_POST['pass'])){
                $_SESSION['email'] = $rows['email'];
                header('location:http://localhost/CongNghePhanMem/index.php');
                }
            else{
                echo '<H3 style ="text-align : center">Sai Password !</H3>';
                require 'login.php';
            }
        }
        
    }
    else {
     require('nav.php') ?>

    <div class="login-container">
      <form class="form-login" action="login1.php" method="POST">
        <h1>Đăng nhập</h1>
        <div class="input-wrapper">
          <input type="email" name="email" placeholder="Nhập email của bạn" />
        </div>
        <div class="input-wrapper">
          <input type="password" name="pass" placeholder="Nhập password của bạn" />
        </div>
        <div class="mess-err" style="display:block;">
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
<?php
    }
?>