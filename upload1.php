
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
$sql = "SELECT * from user where email='".$_SESSION['email']."'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
$b = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
$sqli = "INSERT INTO sanpham(idsp,idloaisp,tensp,photo,Mota,giatien,addressproduct,iduser) VALUES (null,$a,'" . $_POST['name'] . "','" . $b . "','" . $_POST['describe'] . "','" . $_POST['price'] . "','haha','" . $row['iduser'] . "')";
$resulti = mysqli_query($conn,$sqli);
header('location:http://localhost:85/CongNghePhanMem/post.php');
?>