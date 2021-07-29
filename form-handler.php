<?php
   $name=$_POST['name'];
   $visitor_email=$_POST['email'];
   $message=$_POST['message'];
   $subject=$_POST['subject'];
   $email_from='info@yourwebsite.com';
   $email_subject='NEW FORM SUBMISSION';
   $email_body="USER NAME: $name.\n".
               "USER E-MAIL: $email.\n".
               "USER SUBJECT: $subject.\n".
               "USER MESSAGE: $message.\n";
    $to='anwarameerun@gmail.com';
    $headers="From: $email_from \r\n";
    $headers .="Reply to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("From: Contact-me.tml");
?>