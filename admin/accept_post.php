<?php require 'ketnoi.php';
     $sqlii = "UPDATE sanpham set level = 2  where idsp = '" . $_GET['idsp'] . "'";
     $resultii = mysqli_query($conn,$sqlii);
     header('location:http://localhost:81/CongNghePhanMem/admin/product-management.php');
     ?>