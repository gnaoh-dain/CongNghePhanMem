<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Document</title>
</head>
<body> -->

<?php 
    require 'nav.php';
    if(!isset($_GET['user_id'])){?>
        <div class="chat-container">
         <div class="aside-left-chat">
        <?php
        $sql = "SELECT DISTINCT idsp,outgoing_msg_id FROM messages WHERE incoming_msg_id = '".$_SESSION['iduser']."' OR outgoing_msg_id = '".$_SESSION['iduser']."' ORDER BY idsp,outgoing_msg_id";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            if($row['outgoing_msg_id'] == $_SESSION['iduser']){
            $sql1 = "SELECT user.iduser,sanpham.idsp,user.name,user.photo,sanpham.tensp,sanpham.photo AS photo1 FROM user,sanpham WHERE user.iduser = sanpham.iduser AND idsp = '".$row['idsp']."' ";
            $result1 = mysqli_query($conn,$sql1);
            $row1 = mysqli_fetch_assoc($result1)?>
            <div class="user-chat">
                <a href="chat.php?user_id=<?php echo $row1['iduser']?>&&idsp=<?php echo $row1['idsp']?>">
                    <div class="img-user-chat">
                     <?php echo '<img src="data:avatar;base64,'.base64_encode($row1['photo']).'"alt="">' ?>
                    </div>
                    <div class="info-chat">
                        <div class="user-name-chat"><?php echo $row1['name'] ?></div>
                        <span class="product-chat"><?php echo $row1['tensp'] ?></span>
                    </div>
                    <div class="img-product-chat">
                    <?php echo '<img src="data:avatar;base64,'.base64_encode($row1['photo1']).'"alt="">' ?>               
                    </div>
                </a>
            </div>
            <?php
        }
            else{
                $sql1 = "SELECT user.iduser,sanpham.idsp,user.name,user.photo,sanpham.tensp,sanpham.photo AS photo1 FROM user,sanpham WHERE user.iduser = sanpham.iduser AND idsp = '".$row['idsp']."' ";
                $result1 = mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);

                $sql2 = "SELECT user.iduser,user.name,user.photo FROM user WHERE iduser = '".$row['outgoing_msg_id']."'  ";
                $result2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_assoc($result2);?>
                <div class="user-chat">
                <a href="chat.php?user_id=<?php echo $row2['iduser']?>&&idsp=<?php echo $row1['idsp']?>">
                    <div class="img-user-chat">
                     <?php echo '<img src="data:avatar;base64,'.base64_encode($row2['photo']).'"alt="">' ?>
                    </div>
                    <div class="info-chat">
                        <div class="user-name-chat"><?php echo $row2['name'] ?></div>
                        <span class="product-chat"><?php echo $row1['tensp'] ?></span>
                    </div>
                    <div class="img-product-chat">
                    <?php echo '<img src="data:avatar;base64,'.base64_encode($row1['photo1']).'"alt="">' ?>               
                    </div>
                </a>
            </div>
    <?php
            }    
    }}
?>
            <div class="aside-right-chat">

            </div>
        </div>

        </div>
    <?php
    }else {
?>       <div class="chat-container">
<div class="aside-left-chat">
<?php
$sql = "SELECT DISTINCT idsp,outgoing_msg_id FROM messages WHERE incoming_msg_id = '".$_SESSION['iduser']."' OR outgoing_msg_id = '".$_SESSION['iduser']."' ORDER BY idsp,outgoing_msg_id";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_assoc($result)){
   if($row['outgoing_msg_id'] == $_SESSION['iduser']){
   $sql1 = "SELECT user.iduser,sanpham.idsp,user.name,user.photo,sanpham.tensp,sanpham.photo AS photo1 FROM user,sanpham WHERE user.iduser = sanpham.iduser AND idsp = '".$row['idsp']."' ";
   $result1 = mysqli_query($conn,$sql1);
   $row1 = mysqli_fetch_assoc($result1)?>
   <div class="user-chat">
       <a href="chat.php?user_id=<?php echo $row1['iduser']?>&&idsp=<?php echo $row1['idsp']?>">
           <div class="img-user-chat">
            <?php echo '<img src="data:avatar;base64,'.base64_encode($row1['photo']).'"alt="">' ?>
           </div>
           <div class="info-chat">
               <div class="user-name-chat"><?php echo $row1['name'] ?></div>
               <span class="product-chat"><?php echo $row1['tensp'] ?></span>
           </div>
           <div class="img-product-chat">
           <?php echo '<img src="data:avatar;base64,'.base64_encode($row1['photo1']).'"alt="">' ?>               
           </div>
       </a>
   </div>
   <?php
}
   else{
       $sql1 = "SELECT user.iduser,sanpham.idsp,user.name,user.photo,sanpham.tensp,sanpham.photo AS photo1 FROM user,sanpham WHERE user.iduser = sanpham.iduser AND idsp = '".$row['idsp']."' ";
       $result1 = mysqli_query($conn,$sql1);
       $row1 = mysqli_fetch_assoc($result1);

       $sql2 = "SELECT user.iduser,user.name,user.photo FROM user WHERE iduser = '".$row['outgoing_msg_id']."'  ";
       $result2 = mysqli_query($conn,$sql2);
       $row2 = mysqli_fetch_assoc($result2);?>
       <div class="user-chat">
       <a href="chat.php?user_id=<?php echo $row2['iduser']?>&&idsp=<?php echo $row1['idsp']?>">
           <div class="img-user-chat">
            <?php echo '<img src="data:avatar;base64,'.base64_encode($row2['photo']).'"alt="">' ?>
           </div>
           <div class="info-chat">
               <div class="user-name-chat"><?php echo $row2['name'] ?></div>
               <span class="product-chat"><?php echo $row1['tensp'] ?></span>
           </div>
           <div class="img-product-chat">
           <?php echo '<img src="data:avatar;base64,'.base64_encode($row1['photo1']).'"alt="">' ?>               
           </div>
       </a>
   </div>
            
       <?php
       }}
    ?></div>
        <div class="aside-right-chat">
        <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
                include_once "ketnoi.php";
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

                $sql = mysqli_query($conn, "SELECT * FROM user WHERE iduser = '{$user_id}'");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
              <?php echo '<img src="data:avatar;base64,' . base64_encode($row['photo']) . '"alt="">'; ?>
                <div class="details">
                    <span><?php echo $row['name'];?></span>
                </div>
            </header>
            <div class="chat-box">
            </div>
            <form action="#" class="typing-area">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['iduser']; ?>" hidden>
                <input type="text" name="idsp" value="<?php echo $_GET['idsp']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>

    
        </div>
    </div>
    <?php } }?>
    <script src="js/chat.js"></script>
</body>
</html>