<?php require 'nav.php';?>
    <div class="post-container">
      <div class="header">Sản phẩm đã đăng</div>
       <div class="posts">
      <?php $sql = "SELECT * from user where email='".$_SESSION['email']."'";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            $sqli = "SELECT * from sanpham where iduser = '".$row['iduser']."' order by idsp ASC";

            $resulti = mysqli_query($conn,$sqli);
            while ($rowi = mysqli_fetch_assoc($resulti)){
      ?>
          <div class="post">
              <div class="img-post">
              <?php echo'<img src="data:avatar;base64,'.base64_encode($rowi['photo']).'"alt="">'; ?>
              </div>
              <div class="info-post">
                  <div class="title-post"><?php echo $rowi['tensp']; ?></div>
                  <div class="update-btn"><a href="editPost.php?id=<?php echo $rowi['idsp']?>&&function=update"><button>Chỉnh sửa</button></a></div>
                  <div class="delete-btn"><a href="editPost.php?id=<?php echo $rowi['idsp']?>&&function=delete"><button>Xóa</button></a></div>
              </div>
          </div>
          <?php } ?>
      </div>
    </div>
  </body>
</html>
