<?php
    require 'Mail.php';

    $senderName = "SENDER_NAME";
    $senderEmail = "SENDER_EMAIL";
    $senderEmailPassword = "YOUR_EMAIL_PASWORD_OR_APP_PASSWORD";
    $recieverEmail = "RECIEVER_EMAIL";
    $subject = "MAIL_SUBJECT";
    $body = "MAIL_BODY_OR_HTML_BODY";
    
    $mailer = new Mail($senderName,$senderEmail,$senderEmailPassword);
    $mailer->sendMail($recieverEmail,$subject,$body);

?>