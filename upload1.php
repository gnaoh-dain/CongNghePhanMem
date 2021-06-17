
 <?php 
  if($_POST['category'] == 'máy tính'){
    $a = 1;
  }elseif($_POST['category'] == 'điện thoại'){
     $a = 2;
  }
  elseif($_POST['category'] == 'mỹ phẩm'){
    $a = 3;
 }
 elseif($_POST['category'] == 'máy ảnh'){
  $a = 4;
}
else{
  $a = 5;
}
session_start();
require 'ketnoi.php';
if( isset($_POST['category']) && $_POST['category'] != '' && isset($_POST['address']) && !empty($_POST['address'])&& isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['price']) && !empty($_POST['price']) && isset($_POST['describe']) && !empty($_POST['describe'])){
  $sql = "SELECT * from user where email='".$_SESSION['email']."'";
  $result = mysqli_query($conn,$sql);
  $row = $result->fetch_assoc();
  $b = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
  $sqli = "INSERT INTO sanpham(idsp,idloaisp,tensp,photo,Mota,giatien,addressproduct,iduser) VALUES (null,$a,'" . $_POST['name'] . "','" . $b . "','" . $_POST['describe'] . "','" . $_POST['price'] . "','" . $_POST['address'] . "','" . $row['iduser'] . "')";
  $resulti = mysqli_query($conn,$sqli);
  header('location:post.php');

} else {
  
 require 'navWithoutSS.php'?>
    <div class="upload-container">
     <div class="header">Bài đăng</div>
      <div class="form-upload">
        <form action="upload1.php" method = "POST" enctype ="multipart/form-data">
         <div class="upload-input-wrapper">
        
          <label for="category">Danh mục:</label>
          <select name="category">
            <option value="">--- Vui lòng chọn danh mục ---</option>
            <option value="xe cộ">Xe cộ</option>
            <option value="máy tính">Máy tính</option>
            <option value="mỹ phẩm">Mỹ phẩm</option>
            <option value="điện thoại">Điện thoại</option>
            <option value="máy ảnh">Máy ảnh - Máy quay phim</option>
          </select>
        </div>
        <div class="upload-input-wrapper">
          <label for="address">Địa chỉ:</label>
          <input type="text" name="address" placeholder="Vui lòng nhập địa chỉ" id="" />
        </div>
        <div class="upload-input-wrapper">
          <label for="name">Tên sản phẩm:</label>
          <input type="text" name="name" placeholder="Vui lòng nhập tên sản phẩm" id="" />
        </div>
        <div class="upload-input-wrapper">
          <label for="price">Giá:</label>
          <input
            type="number"
            name="price"
            placeholder="Vui lòng nhập giá của sản phẩm"
            id="priceProduct"
          />
        </div>
        <div class="upload-input-wrapper">
          <label for="describe">Mô tả:</label>
          <textarea
            name="describe"
            id=""
            cols="30"
            rows="10"
            placeholder="Vui lòng nhập mô tả về sản phẩm của bạn"
          ></textarea>
        </div>

        <div class="upload-img">
          <label for="img">Chọn ảnh:</label>
          <input type="file" accept="image/*" name="avatar" id="photo" />
        </div>
        <div class="mess-err" style="display: block;">
          Bạn cần nhập đầy đủ thông tin sản phẩm!
        </div>
        <div class="button-upload">
          <button type = "submit" class="btn-upload">Đăng bài</button>
        </div> 
      </form>
      </div>
    </div>

    <?php require 'footer.php'; ?>

  </body>
</html>
<?php
}

?>