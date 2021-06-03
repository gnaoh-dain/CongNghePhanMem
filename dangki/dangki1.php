<?php
if(isset($_GET['id'])){
   require 'ketnoi.php';
   $sql = "SELECT * from user where email = '" . $_GET['id'] . "'";
   $result = mysqli_query($conn,$sql);
   $rows = mysqli_fetch_assoc($result);
   if ($rows['code'] == $_POST['ma']){
     echo '<script>alert("Đăng ký thành công!")</script>';
     require 'ketnoi.php';
     $sqlii = "UPDATE user set status = 1 where email = '" . $_GET['id'] . "'";
     $resultii = mysqli_query($conn,$sqlii);
     require 'login.php';
   }
   else {
     echo'<h3>Sai mã OTP !</h3>';
     ?>
    <form action="dangki1.php?id=<?php echo $_GET['id'];?>" method = "post">
    <h1>Nhập mã xác thực được gửi tới email của bạn : </h1>
    <input type="text" name ="ma" value = "">
    <input type="submit" value="xac nhan">
    </form>
     <?php 
   }
  }
else {
  require 'ketnoi.php';
  //kiem tra email trung khong
  if(isset($_POST['email'])&& !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword']) && isset($_POST['userName'])&& !empty($_POST['userName'])){




  $sqli = "SELECT * from user where email = '" . $_POST['email'] . "' ";
  $resulti = mysqli_query($conn,$sqli);
  $rows = mysqli_num_rows($resulti);
  if($rows>0){
    echo '<script>alert("Email đã tồn tại!")</script>';
    require 'register.php';
  }else{
      //tao tai khoan
      $a = rand(10000,99999);
      $sql = "INSERT into user(iduser,photo,email,name,phone,address,password,status,code) values(null,0,'" . $_POST['email'] . "','" .$_POST['userName'] . "','Chưa cập nhật','Chưa cập nhật','". $_POST['password']."',0,$a)";
      $result = mysqli_query($conn,$sql);
      
      if(!$result){
        echo("Error description: " . mysqli_error($conn));
        die('chua them duoc');
      }
      else{
        require './sendmail/PHPMailerAutoload.php';
        $mail = new PHPMailer(true);                                 // Enable verbose debug output  
        $mail->isSMTP();                                       // Set mailer to use SMTP  
        $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
        $mail->SMTPAuth = true;                                // Enable SMTP authentication  
        $mail->Username = 'phamthanhquan2411@gmail.com';               // your SMTP username  
        $mail->Password = 'qczbppysuijbmobm';                      // your SMTP password  
        $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
        $mail->Port = 587;                                     // TCP port to connect to  
        $mail->setFrom('phamthanhquan2411@gmail.com', 'Chợ Online');  
        $mail->addAddress($_POST['email']);                 // Name is optional  
        $mail->addReplyTo($_POST['email'], 'Information');  
        //$mail->addCC('cc@example.com');                        // set your CC email address  
        //$mail->addBCC('bcc@example.com');                      // set your BCC email address  
        $mail->isHTML(true);                                   // Set email format to HTML  
        $mail->Subject = 'ma OTP'; 
        $mail->Body  = 'ma OTP la : '.$a;  
        if($mail->send()) {  ?> 
      <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
          </head>
          <body>
            <form action="dangki1.php?id=<?php echo $_POST['email'];?>" method = "post">
              <h1>Nhập mã xác thực được gửi tới email của bạn : </h1>
              <input type="text" name ="ma" value = "">
              <input type="submit" value="xac nhan">
            </form>
          </body>
        </html>
        <?php
      } else {  
        echo 'Message could not be sent';  
      }
        ?>
  <?php
      } 
    } 
  }else { ?>
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
    <!-- nav  -->
    <div class="nav-container">
      <div class="nav">
        <div class="aside-left">
          <div class="logo">
            <img src="../images/choOnline.png" alt="" />
          </div>
        </div>
        <div class="aside-right">
          <div>
            <a href="localhost:80/CongNghePhanMem/index.php"><i class="ri-home-line"></i> Trang chủ</a>
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
        <div class="mess-err" style="display: block;">
          Bạn cần điền đầy đủ thông tin!
        </div>
        <div class="submit">
          <button type="submit">Đăng ký</button>
          <div>Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></div>
        </div>
      </form>
    </div>
  </body>
</html>

  <?php }
  } 
?> 