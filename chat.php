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
?>
    <div class="chat-container">
        <div class="aside-left-chat">
            <div class="user-chat">
                <a href="#">
                    <div class="img-user-chat">
                        <img src="./images/mayanh.png" alt="">
                    </div>
                    <div class="info-chat">
                        <div class="user-name-chat">hoangtoviet</div>
                        <span class="product-chat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vel delectus eius ipsam voluptatem facere ex excepturi reprehenderit consectetur dolores sapiente et dicta, minima, voluptate laborum culpa laboriosam. Eaque, dolorem.</span>
                    </div>
                    <div class="img-product-chat">
                        <img src="./images/mayanh.png" alt="">                
                    </div>
                </a>
            </div>
            <div class="user-chat">
                <a href="#">
                    <div class="img-user-chat">
                        <img src="./images/mayanh.png" alt="">
                    </div>
                    <div class="info-chat">
                        <div class="user-name-chat">hoangtoviet</div>
                        <div class="product-chat">Máy ảnh</div>
                    </div>
                    <div class="img-product-chat">
                        <img src="./images/mayanh.png" alt="">                
                    </div>
                </a>
            </div>
        </div>
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
    <script src="js/chat.js"></script>
</body>
</html>