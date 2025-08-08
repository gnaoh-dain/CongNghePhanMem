<?php require 'nav.php';
 if(!isset($_SESSION['email'])){
  header("location:dangki/login.php");
  
}else{
if(isset($_GET['idsp'])){
  $sql = "SELECT * from user where email='". $_SESSION['email']."'";
          $result = mysqli_query($conn,$sql);
         $row = $result->fetch_assoc();
  $sqli = "INSERT INTO luutin(iduser,idsp) VALUES('".$row['iduser']."','".$_GET['idsp']."')";
      $resulti = mysqli_query($conn,$sqli);
      header('location:archive.php');
}
else {
?>

    <div class="search-container">
      <div class="header">Tin đã lưu</div>
      <div class="search-product">
        <?php
        $sql = "SELECT sanpham.idsp,sanpham.photo,sanpham.tensp,sanpham.giatien,sanpham.addressproduct from user,sanpham,luutin where user.iduser = luutin.iduser AND luutin.idsp = sanpham.idsp AND email='". $_SESSION['email']."'";
        $result = mysqli_query($conn,$sql);
        while ($rowi = mysqli_fetch_assoc($result)){
         ?>
        <div class="search-result">
          <a href="detail.php?id=<?php echo $rowi['idsp']?>">
            <div class="image-product">
            <?php echo'<img src="data:avatar;base64,'.base64_encode($rowi['photo']).'"alt="">'; ?>
            </div>
            <div class="info-product">
              <div class="search-title"><?php echo $rowi['tensp'] ?></div>
              <div class="search-price"><?php echo $rowi['giatien'] ?><span>đ</span></div>
              <div class="address"><i class="ri-map-pin-2-line"></i> <?php echo $rowi['addressproduct'] ?></div>
            </div>
          </a>
        </div>
</body>
</html>
<?php } } } ?>
