<?php require 'nav.php';?>
    <div class="detail-container">
      <div class="header">Chi tiết sản phẩm</div>
      <?php 
      require 'ketnoi.php';
      $sqli = "SELECT * FROM sanpham Where idsp = '".$_GET['id']."' ";
      $resulti = mysqli_query($conn,$sqli);
      $row = $resulti->fetch_assoc();
      ?>
      <div class="content">
        <div class="detail-aside-left">
          <div class="detail-img">
          <?php if($row['photo'] == null){
             echo '<img src="images/20653430.png"alt="">';
          }else{
             echo'<img src="data:avatar;base64,'.base64_encode($row['photo']).'"alt="">';
          }
          ?>
          </div>
          <div class="detail-title"><?php echo $row['tensp'] ?></div>
          <div class="nm1">
            <div class="detail-price"><?php echo $row['giatien'] ?><span>đ</span></div>
            <a href="archive.php?idsp=<?php echo $row['idsp'] ?>">
            <div class="save-product"><span> Lưu tin </span> <i class="ri-heart-line"></i></div>
          </a>
          </div>
          <div class="describe">
            <span>Mô tả sản phẩm: </span>
            <?php echo $row['Mota'] ?>
          </div>
          <div class="detail-address"><span>Địa chỉ: </span> <?php echo $row['addressproduct'] ?></div>
        </div>
        <?php require 'ketnoi.php';
                  $sqlii = "SELECT user.name,user.phone,user.photo,user.iduser FROM user,sanpham Where user.iduser = sanpham.iduser AND idsp = '".$_GET['id']."' ";
                  $resultii = mysqli_query($conn,$sqlii);
                  $rowi = $resultii->fetch_assoc();
            ?>
        <div class="detail-aside-right">
          <div class="saller-info">
            <div class="img-saller">
            <?php if($rowi['photo'] == 0){
             echo '<img src="images/20653430.png" alt="" />';
            }else{
             echo'<img src="data:avatar;base64,'.base64_encode($rowi['photo']).'"alt="">';
            }?>
            </div>
            <div class="name-saller"><?php echo $rowi['name'] ?></div>
          </div>
          <div class="phoneNumber"><span>Số điện thoại:</span><?php echo $rowi['phone'] ?> </div>
          <a href="chat.html">
              <button class="btn-chat"><i class="ri-wechat-line"></i>Chat với người bán</button>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
