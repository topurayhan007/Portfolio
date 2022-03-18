<?php
    
    if( isset($_POST['email']) && $_POST['email'] != '' ) {

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = 'From website';

            $to = 'topurayhan007@gmail.com';
            $mail = '' . $email . "\r\n" . $message . "\r\n";

            mail($to, $subject, $mail);
        }
    }


?>