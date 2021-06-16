<?php
if(isset($_GET['id'])){
   require 'ketnoi.php';
   $sql = "SELECT * from user where email = '" . $_GET['id'] . "'";
   $result = mysqli_query($conn,$sql);
   $rows = mysqli_fetch_assoc($result);
   if ($rows['code'] == $_POST['ma']){
     echo '<script>alert("Cập nhật mật khẩu thành công !")</script>';
     $sqli = "UPDATE user SET password = '".$_GET['mk']."' WHERE email = '". $_GET['id'] ."'";
     $resulti = mysqli_query($conn,$sqli);
     require 'login.php';
   }
   else {
     echo'<h3>Sai mã OTP !</h3>';
     ?>
    <form action="dangki1.php?id=<?php echo $_GET['id'];?>&&mk=<?php echo $_GET['mk'];?>" method = "post">
    <h1>Nhập mã xác thực được gửi tới email của bạn : </h1>
    <input type="text" name ="ma" value = "">
    <input type="submit" value="xac nhan">
    </form>
     <?php 
   }
  }
else {
  require 'ketnoi.php';
  //kiem email có khong
  if(isset($_POST['email'])&& !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword']) && $_POST['password'] == $_POST['confirmPassword']){

  $sqli = "SELECT * from user where email = '" . $_POST['email'] . "' ";
  $resulti = mysqli_query($conn,$sqli);
  $rows = mysqli_num_rows($resulti);
  if($rows == 0){
    echo '<script>alert("Tài khoản này không tồn tại !")</script>';
    require 'forgot_pass.php';
  }else{
      //tao tai khoan
      $a = rand(10000,99999);
      $sql = "UPDATE user SET code = '".$a."' WHERE email = '". $_POST['email'] ."'";
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
            <form action="forgot_pass1.php?id=<?php echo $_POST['email'];?>&&mk=<?php echo $_POST['confirmPassword'];?>" method = "post">
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
  }else {
    require('nav.php') ?>
    <div class="register-container">
      <form class="form-register" id="formRegister" action="forgot_pass1.php" method="post" >
        <h1>Tìm Tài Khoản Của Bạn</h1>
        <div class="input-wrapper">
          <input type="email" name="email" placeholder="Nhập email của bạn " />
        </div>
        <div class="input-wrapper">
          <input type="password" name="password" placeholder="Nhập password mới của bạn" />
        </div>
        <div class="input-wrapper">
          <input type="password" name="confirmPassword" placeholder="Nhập lại password của bạn" />
        </div>
        <div class="mess-err">
          Bạn thiếu thông tin hoặc xác nhận mật khẩu không khớp không khớp !
        </div>
        <div class="submit">
          <button type="submit">Tiếp Tục</button>
          <div>Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></div>
          <div>Bạn chưa có tài khoản? <a href="./register.php">Đăng ký</a></div>
        </div>
      </form>
    </div>

    <script src="../js/main.js"></script>
  </body>
</html>
<?php } } ?>