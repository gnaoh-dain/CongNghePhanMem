<?php
  require 'ketnoi.php';?>
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
            <a href="./index.php">
            <img src="./images/choOnline.png" alt="" />
            </a>
          </div>
        </div>

        <div class="aside-right">
          <div>
            <a href="./index.php"><i class="ri-home-line"></i> Trang chủ</a>
          </div>
          <?php 
          if(!isset($_SESSION['email'])){
          ?>
          <div>
            <a href="./dangki/login.php"><i class="ri-group-line"></i> Quản lí tin</a>
          </div>
          <?php
          }else{
          $sql = "SELECT * from user where email='". $_SESSION['email']."'";
          $result = mysqli_query($conn,$sql);
         $row = $result->fetch_assoc();
          ?>
          <div>
            <a href="post.php"><i class="ri-group-line"></i> Quản lí tin</a>
          </div>
          <?php 
          }
          ?>
          
          <!-- <div><i class="ri-more-line"></i> Thêm</div> -->
          <?php  if(isset($_SESSION['email'])){ ?>
            <ul class="list-dropdown">
            <li><a href="#"><i class="ri-more-line"></i> Thêm</a> 
            <ul class="dropdown">
              <li><a href="archive.php">Tin đã lưu</a></li>
              <li><a href="logout.php">Đăng xuất</a></li>
            </ul>
              </li>
              </ul>
            
            <?php }else{?>  <ul class="list-dropdown">
            <li><a href="#"><i class="ri-more-line"></i> Thêm</a> 
            <ul class="dropdown">
              <li><a href="archive.php">Tin đã lưu</a></li>
              <li><a href="dangki/login.php">Đăng Nhập</a></li>
            </ul>
              </li>
              </ul>
            
            <?php } ?>

        </div>

        <div class="aside-left">
          <div class="search">
            <form action="search.php" method = "post" class="form-search" enctype ="multipart/form-data">
              <span>Search</span>
              <input type="text" name="search1" />
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
          <div><a href="uploadProduct.php">Đăng Tin</a></div>
       <?php 
        }
        ?>
          
        </div>
      </div>
    </div>