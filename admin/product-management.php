<?php require 'ketnoi.php'; ?>
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
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="nav-admin">
      <div>
        <div class="logo">
          <a href="#"> <img src="../images/choOnline.png" alt="" /> </a>
        </div>
        <ul class="list-dropdown">
          <li><a href="#"><i class="ri-more-line"></i> Thêm</a> 
          <ul class="dropdown">
            <li><a href="user-management.php">Quản lý người dùng</a></li>
            <li><a href="product-management.php">Quản lý sản phẩm</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
          </ul>
            </li>
            </ul>
      </div>
    </div>

    <div class="manage-container">
      <div class="table">
        <div>Người đăng</div>
        <div>Tên sản phẩm</div>
        <div>Hình ảnh</div>
        <div>Giá tiền</div>
        <div>Mô tả</div>
        <div>Hành động</div>
      </div>
      <?php 
      $sql = "SELECT * from sanpham where level = 0";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
          $sqli = "SELECT * from user WHERE iduser = '". $row['iduser'] ."' ";
          $resulti = mysqli_query($conn,$sqli);
          $dp = mysqli_fetch_assoc($resulti);
       ?>
       
      <div class="product">
        
        <div class="user-upload"><a href="#"></a><?php echo $dp['name'] ?></div>
        <div class="title"><?php echo $row['tensp'] ?></div>
        <div class="img">
        <?php echo'<img src="data:avatar;base64,'.base64_encode($row['photo']).'"alt="">'; ?>
        </div>
        <div class="price"><?php echo $row['giatien'] ?></div>
        <div class="describe"><?php echo $row['Mota'] ?></div>
        <div class="check">
          <button class="accept"><a href="accept_post.php?idsp=<?php echo $row['idsp'] ?>">Duyệt</a></button>
          <button type="submit" class="refuse"><a href="refuse.php?idsp=<?php echo $row['idsp'] ?>">Từ chối</a></button>
        </div>

      </div>
      <?php }
          }
      ?>
    </div>
  </body>
</html>
