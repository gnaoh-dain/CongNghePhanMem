<?php
if(!isset($_SESSION['email'])){
    header('location:http://localhost:81/CongNghePhanMem/admin/login-admin.php'); ?>
}else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>logout</title>
    </head>
    <body>

        <?php session_destroy();
        header('location:http://localhost:81/CongNghePhanMem/admin/login-admin.php'); ?>
    </body>
    </html>
    <?php } ?>