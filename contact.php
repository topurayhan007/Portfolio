<?php
    
    if( isset($_POST['submit']) && isset($_POST['email']) && $_POST['email'] != '' ) { ){

            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = 'From website';

            $to = '1930179@iub.edu.bd';
            $mail = '' . $email . "\r\n" . $message . "\r\n";

            mail($to, $subject, $mail);
            header("Location: index.html");
            echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";
        
    }


?>