
<?php
require 'nav.php';
require 'ketnoi.php';
if(isset($_GET['action'])){
  $a = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
 $sql = "UPDATE user SET name = '".$_POST['name']."',email = '".$_POST['email']."',phone = '".$_POST['phone']."',address = '".$_POST['address']."',password = '".$_POST['password']."',photo = '".$a."' WHERE  iduser = '". $_GET['action'] ."'";
 $result = mysqli_query($conn,$sql);
header('location:user.php');
}
else{
$sql = "SELECT * from user where email='". $_SESSION['email']."'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
mysqli_close($conn);
if(!empty($row)){
?>

    <div class="user-information-container">
      <div class="header">Thông tin cá nhân</div>
      <form action="user.php?action=<?php echo $row["iduser"] ?>" method = "POST" class="info-form" enctype ="multipart/form-data">
        <div class="avatar">
          <div class="input-img">
            <label for="inputImg">
            <div>
               <?php echo'<img id="avatar" src="data:avatar;base64,'.base64_encode($row['photo']).'"alt="Thay đổi ảnh đại diện">'; ?>
           </div>
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
            <label for="name">Họ và tên</label>
            <input type="text" value = "<?php echo $row['name'];?>" name="name" placeholder="" />
          </div>
          <div class="input-wrapper-info">
            <label for="phone">Số điện thoại</label>
            <input type="text" value = "<?php echo $row['phone'];?>" name="phone" placeholder="" />
          </div>
          <div class="input-wrapper-info">
            <label for="address">Địa chỉ</label>
            <input type="text" value = "<?php echo $row['address'];?>" name="address" placeholder="" />
          </div>
          <div class="input-wrapper-info">
            <label for="email">Email</label>
            <input type="email" value = "<?php echo $row['email'];?>" name="email" placeholder="" />
          </div>
          <div class="input-wrapper-info">
            <label for="password">Password</label>
            <input type="password" value = "<?php echo $row['password'];?>" name="password" placeholder="" />
          </div>
          <button type="submit" class="btn-info">Lưu thay đổi</button>
        </div>
      </form>
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
  </body>
</html>
<?php } } ?>
