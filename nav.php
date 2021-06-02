<?php session_start();?>
<<<<<<< Updated upstream
<?php require 'ketnoi.php';
if(isset($_GET['action'] )){?>
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
      <link rel="stylesheet" href="css/main.css" />
      
      <title>Document</title>
    </head>
    <body>
      <!-- Nav -->
      <div class="nav-container">
        <div class="nav">
          <div class="aside-left">
            <div class="logo">
              <img src="https://static.chotot.com/storage/default/transparent_logo.webp" alt="" />
            </div>
          </div>
  
          <div class="aside-right">
            <div>
              <a href="./index.php"><i class="ri-home-line"></i> Trang chủ</a>
            </div>
            <div>
              <a href="./management.html"><i class="ri-group-line"></i> Quản lí tin</a>
            </div>
            <div><i class="ri-more-line"></i> Thêm</div>
          </div>
  
          <div class="aside-left">
            <div class="search">
              <form action="nav.php?action=search" method = "GET" class="form-search" >
                <span>Search</span>
                <input type="text" name="search" />
                <button class="btn" type="submit"><i class="ri-search-line"></i></button>
              </form>
            </div>
          </div>
          
          <div class="aside-right">
            <?php 
          if(!isset($_SESSION['email'])){
            ?>
            <div><a href="./dangki/login.php">Đăng nhập</a></div>
            <div><a href="./dangki/login.php">Đăng Tin</a></div>
            <?php
          }else{
            $sql = "SELECT * from user where email='". $_SESSION['email']."'";
            $result = mysqli_query($conn,$sql);
           $row = $result->fetch_assoc();
            ?>
           <div><a href="user.php"><?php echo $row["name"] ?></a></div>
            <div><a href="#">Đăng Tin</a></div>
         <?php 
          }
          ?>
          </div>
        </div>
      </div>

  <?php
}
else{
?>
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
    <link rel="stylesheet" href="css/main.css" />
    
    <title>Document</title>
  </head>
  <body>
=======
<?php require 'ketnoi.php'; ?>
>>>>>>> Stashed changes
    <!-- Nav -->
    <div class="nav-container">
      <div class="nav">
        <div class="aside-left">
          <div class="logo">
            <img src="https://static.chotot.com/storage/default/transparent_logo.webp" alt="" />
          </div>
        </div>

        <div class="aside-right">
          <div>
            <a href="./index.php"><i class="ri-home-line"></i> Trang chủ</a>
          </div>
          <div>
            <a href="./management.html"><i class="ri-group-line"></i> Quản lí tin</a>
          </div>
          <div><i class="ri-more-line"></i> Thêm</div>
        </div>

        <div class="aside-left">
          <div class="search">
            <form action="nav.php?action=search" class="form-search">
              <span>Search</span>
              <input type="text" name="search" />
              <button class="btn" type="submit"><i class="ri-search-line"></i></button>
            </form>
          </div>
        </div>
        
        <div class="aside-right">
          <?php 
        if(!isset($_SESSION['email'])){
          ?>
          <div><a href="./dangki/login.php">Đăng nhập</a></div>
          <div><a href="./dangki/login.php">Đăng Tin</a></div>
          <?php
        }else{
          $sql = "SELECT * from user where email='". $_SESSION['email']."'";
          $result = mysqli_query($conn,$sql);
         $row = $result->fetch_assoc();
          ?>
         <div><a href="user.php"><?php echo $row["name"] ?></a></div>
          <div><a href="#">Đăng Tin</a></div>
       <?php 
        }
        ?>
          
        </div>
      </div>
    </div>
    <?php } ?>