<?php
    $message_sent = false;

    if( isset($_POST['email']) && $_POST['email'] != '' ) {

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

            $email = $_POST['email'];
            $message = $_POST['message'];

            $my_email = "topurayhan007@gmail.com";
            $mail = "";
            $mail .= $email. "\r\n";
            $mail .= $message. "\r\n";

            mail($my_email,"From website",$message, $mail);

            $message_sent = true;
        }
    }


?>