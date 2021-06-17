<?php
session_start();
if (isset($_SESSION['iduser'])) {
    include_once "ketnoi.php";
    $output = "";

    $sql = "SELECT * FROM messages LEFT JOIN user ON user.iduser = messages.incoming_msg_id 
                WHERE (outgoing_msg_id = '".$_POST['outgoing_id'] ."' AND incoming_msg_id = '".$_POST['incoming_id'] ."' AND idsp = '".$_POST['idsp']."')
                OR
                (outgoing_msg_id = '".$_POST['incoming_id'] ."' AND incoming_msg_id = '".$_POST['outgoing_id'] ."' AND idsp = '".$_POST['idsp']."')
                ORDER BY msg_id
        ";
     $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) > 0){
     while ($row = mysqli_fetch_assoc($result)){
            if($row['outgoing_msg_id'] == $_POST['outgoing_id']){ 
                
                $output .= '
                <div class="chat outgoing">
                    <div class="details">
                        <p>'.$row['msg'].'</p>
                    </div>
                </div>
                ';

            } else {
                $output .= '
                <div class="chat incoming">
                    <div class="details">
                        <p>'.$row['msg'].'</p>
                    </div>
                </div>
                ';
            }
        }
        echo $output;
    } 
    else {
        echo 'chua co';
    }
}
else {
 include '../dangki/login.php';
}
?>