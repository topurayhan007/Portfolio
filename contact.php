<?php
    
    if( isset($_POST['submit']) && isset($_POST['email']) && $_POST['email'] != '' ) { ){

            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = 'From website';

            $to = 'topurayhan007@gmail.com';
            $mail = '' . $email . "\r\n" . $message . "\r\n";

            mail($to, $subject, $mail);
        
    }


?>