<?php session_start();?>
<?php require 'ketnoi.php'; ?>

    <!-- Nav -->
    <div class="nav-container">
      <div class="nav">
        <div class="aside-left">
          <div class="logo">
            <img src="./images/choOnline.png" alt="" />
          </div>
        </div>

        <div class="aside-right">
          <div>
            <a href="./index.php"><i class="ri-home-line"></i> Trang chủ</a>
          </div>
          <div>
            <a href="#"><i class="ri-group-line"></i> Quản lí tin</a>
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