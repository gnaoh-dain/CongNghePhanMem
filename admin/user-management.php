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
          <li>
            <a href="#"><i class="ri-more-line"></i> Thêm</a>
            <ul class="dropdown">
              <li><a href="user-management.php">Quản lý người dùng</a></li>
              <li><a href="product-management.php">Quản lý sản phẩm</a></li>
              <li><a href="logout.php
              ">Đăng xuất</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="users-container">
      <div class="table-user">
        <div>ID</div>
        <div>Tên người dùng</div>
        <div>ảnh đại diện</div>
        <div>Hành động</div>
      </div>
<?php 
      $sql = "SELECT * from user WHERE level = 1";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
        ?>
      <div class="user">
        <div class="id-user"><?php echo $row['iduser'] ?></div>
        <div class="username"><?php echo $row['name'] ?></div>
        <div class="img">
        <?php echo'<img src="data:avatar;base64,'.base64_encode($row['photo']).'"alt="">'; ?>
        </div>
        <div class="action"><button><a href="delete_user.php?iduser=<?php echo $row['iduser']?>">Xóa</a></button></div>
      </div>
      <?php }
         } 
         ?>
    </div>
  </body>
</html>
