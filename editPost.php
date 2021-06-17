<?php require 'nav.php';
if(isset($_GET['update'])){
  require 'ketnoi.php';
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
  $b = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
   $sql = "UPDATE sanpham SET tensp = '".$_POST['name']."',giatien = '".$_POST['phone']."',addressproduct = '".$_POST['address']."',photo = '".$b."',Mota = '".$_POST['describe']."',idloaisp = $a WHERE  idsp = '". $_GET['update'] ."'";
   $resu = mysqli_query($conn,$sql);
   echo("Error description: " . mysqli_error($conn));
   header('location:post.php');
}else{
if($_GET['function'] =="delete"){
  $sql = "DELETE FROM `sanpham` WHERE idsp = '".$_GET['id']."' ";
  $resu = mysqli_query($conn,$sql);
  header('location:post.php');
}elseif($_GET['function'] =="post"){
  $sql = "UPDATE sanpham set level = 0  where idsp = '" . $_GET['id'] . "'";
  $resu = mysqli_query($conn,$sql);
  header('location:post.php');
}
else{
?>
    <div class="edit-post-container">
      <div class="header">Chỉnh sửa sản phẩm</div>
      <?php require 'ketnoi.php';
      $sqli = "SELECT * FROM sanpham Where idsp = '".$_GET['id']."' ";
      $resulti = mysqli_query($conn,$sqli);
      $row = $resulti->fetch_assoc(); 
      ?>
      <div class="edit-post">
        <form action="editPost.php?update=<?php echo $_GET['id']?>" method = "post" class="info-form" enctype ="multipart/form-data">
          <div class="avatar">
            <div class="input-img">
              <label for="inputImg">
              <?php echo'<img id="avatar" src="data:avatar;base64,'.base64_encode($row['photo']).'"alt="">'; ?>
              </label>
              <input
                id="inputImg"
                name="avatar"
                type="file"
                accept="image/*"
                style="display: none; visibility: hidden"
                onchange="getImg(this.value)"
              />
            </div>
          </div>
          <div class="info">
            <div class="input-wrapper-info">
              <label for="category">Danh mục</label>
              <select name="category" id="" >
                <option value="">--- Vui lòng chọn danh mục ---</option>
                <option value="xe cộ">Xe cộ</option>
                <option value="máy tính">Máy tính</option>
                <option value="mỹ phẩm">Mỹ phẩm</option>
                <option value="điện thoại">Điện thoại</option>
                <option value="máy ảnh">Máy ảnh - Máy quay phim</option>
              </select>
            </div>
            <div class="input-wrapper-info">
              <label for="name">Tên sản phẩm</label>
              <input type="text" name="name" value  = "<?php echo $row['tensp'] ?>"  />
            </div>
            <div class="input-wrapper-info">
              <label for="phone">Giá Tiền</label>
              <input type="text" name="phone" placeholder="" value  = "<?php echo $row['giatien'] ?>"/>
            </div>
            <div class="input-wrapper-info">
              <label for="address">Địa chỉ</label>
              <input type="text" name="address" placeholder="" value  = "<?php echo $row['addressproduct'] ?>"/>
            </div>
            <div class="input-wrapper-info">
              <label for="describe">Mô tả</label>
              <textarea name="describe" value  = "<?php echo $row['Mota'] ?>" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn-info">Lưu thay đổi</button>
          </div>
        </form>
      </div>
    </div>
    <script>
      function getImg(evt) {
        var tgt = evt.target || window.event.srcElement,
          files = tgt.files;

        if (FileReader && files && files.length) {
          var fr = new FileReader();
          fr.onload = function () {
            document.getElementById("avatar").src = fr.result;
          };
          fr.readAsDataURL(files[0]);
        }
      }
    </script>
          <?php require 'footer.php'; ?>
  </body>
</html>
<?php } } ?>
