<?php
    $message_sent = false;

    if( isset($_POST['email']) && $_POST['email'] != '' ) {

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = "From website";

            $my_email = "topurayhan007@gmail.com";
            $mail = $email. "\r\n" . $message. "\r\n";

            mail($my_email, $subject, $message, $mail);

            $message_sent = true;
        }
    }


?>