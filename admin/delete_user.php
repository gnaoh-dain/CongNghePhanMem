<?php require 'ketnoi.php';
$sql = "SELECT idsp from sanpham WHERE iduser  = '". $_GET['iduser'] ."'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
  while ($row = mysqli_fetch_assoc($result)){
    $sqli = "DELETE From luutin WHERE idsp  = '". $row['idsp'] ."'";
    $resulti = mysqli_query($conn,$sqli); 
  }
}
$sqlt = "DELETE From sanpham WHERE iduser  = '". $_GET['iduser'] ."'";
$resultt = mysqli_query($conn,$sqlt);

$sqlt = "DELETE From user WHERE iduser  = '". $_GET['iduser'] ."'";
$resultt = mysqli_query($conn,$sqlt);
header('location:http://localhost:81/CongNghePhanMem/admin/user-management.php');
?>