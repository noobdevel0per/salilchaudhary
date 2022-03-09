<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'Salilchaudhary Website';

    $email_subject = "New enquiry";

    $email_body = "User name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
            
    $to = "salilchaudhary18@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-To $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location:/index.html");
    
    ?>
  <--!  https://formspree.io/f/xnqloale -->