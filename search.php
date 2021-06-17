<?php require 'nav.php'; 
if(isset($_GET['search']) && $_GET['search'] == 'dienthoai'){
  ?>
  <div class="search-container">
    <div class="header">Danh Mục: <span>Điện Thoại</span></div>
    <div class="search-product">
   <?php  $sqli = "SELECT * FROM sanpham Where idloaisp = 2";
  $resulti = mysqli_query($conn,$sqli);

}elseif(isset($_GET['search']) && $_GET['search'] == 'xeco'){
  ?>
  <div class="search-container">
  <div class="header">Danh Mục: <span>Xe Cộ</span></div>
    <div class="search-product">
   <?php  $sqli = "SELECT * FROM sanpham Where idloaisp = 5";
  $resulti = mysqli_query($conn,$sqli);
}
elseif(isset($_GET['search']) && $_GET['search'] == 'maytinh'){
  ?>
  <div class="search-container">
  <div class="header">Danh Mục: <span>Máy Tính</span></div>
    <div class="search-product">
   <?php  $sqli = "SELECT * FROM sanpham Where idloaisp = 1 ";
  $resulti = mysqli_query($conn,$sqli);
}
elseif(isset($_GET['search']) && $_GET['search'] == 'mayanh'){
  ?>
  <div class="search-container">
  <div class="header">Danh Mục: <span>Máy Ảnh</span></div>
    <div class="search-product">
   <?php  $sqli = "SELECT * FROM sanpham Where idloaisp = 4 ";
  $resulti = mysqli_query($conn,$sqli);
}
elseif(isset($_GET['search']) && $_GET['search'] == 'mypham'){
  ?>
  <div class="search-container">
  <div class="header">Danh Mục: <span>Mỹ Phẩm</span></div>
    <div class="search-product">
   <?php  $sqli = "SELECT * FROM sanpham Where idloaisp = 3";
  $resulti = mysqli_query($conn,$sqli);
}else{
?>
    <div class="search-container">
      <div class="header">Kết quả tìm kiếm của: <span><?php echo $_POST['search1'] ?></span></div>
      <div class="search-product">
     <?php  $sqli = "SELECT * FROM sanpham Where tensp LIKE '".$_POST['search1']."%' ";
    $resulti = mysqli_query($conn,$sqli);}
    while ($rows = mysqli_fetch_assoc($resulti)){?>
        <div class="search-result">
          <a href="detail.php?id=<?php echo $rows['idsp'] ?>">
            <div class="image-product">
            <?php echo'<img src="data:avatar;base64,'.base64_encode($rows['photo']).'"alt="">'; ?>
            </div>
            <div class="info-product">
              <div class="search-title"><?php echo $rows['tensp']; ?> </div>
              <div class="search-price"><?php echo $rows['giatien']; ?> <span>đ</span></div>
              <div class="address"><i class="ri-map-pin-2-line"></i> <?php echo $rows['addressproduct']; ?></div>
            </div>
          </a>
        </div>
<?php }
 ?>
      </div>
    </div>
    <?php require 'footer.php'; ?>

  </body>
</html>

