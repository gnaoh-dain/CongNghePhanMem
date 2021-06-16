
<?php
include 'ketnoi.php';
   session_start();
    if(isset($_POST['email'])&& !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass'])){
        $sqli = "SELECT * from user where email = '" . $_POST['email'] . "'";
        $resulti = mysqli_query($conn,$sqli);
        $rows = mysqli_fetch_assoc($resulti);
        if(!$rows){ 
            echo '<script>alert("Bạn nhập sai email!")</script>';
            require 'login-admin.php';
          ?>
    <?php
        }
        elseif($rows['level'] == 2){

          if($rows['password'] == ($_POST['pass'])){
            $_SESSION['email'] = $rows['email'];
           
            header('location:http://localhost:81/CongNghePhanMem/admin/product-management.php');
            }
        else{
            
            //header('location:http://localhost:81/CongNghePhanMem/admin/login-admin.php');
            echo '<script>alert("Bạn nhập sai password!")</script>';
            require 'login-admin.php';
        }
        }
      }
    ?>