<?php
    session_start();

    if(isset($_SESSION['iduser'])){
        include_once "ketnoi.php";
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']); // saida_id
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']); // entrada_id
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        if(!empty($message)) {
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg) VALUES ('".$_POST['incoming_id']."', '".$_POST['outgoing_id']."', '".$_POST['message']."')") or die();
        }

    } else {
        include "../login.php";
    }