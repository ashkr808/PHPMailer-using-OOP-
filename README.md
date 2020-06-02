# PHPMailer-using-OOP-
This repo  wraps PHP mailer into a class which makes it even easier to use for new developers.

# It as as simple as  inctanciating an object and calling a method

# example

  $mailer = new Mail($senderName,$senderEmail,$senderPassword,$recipientEmail,$subject,$body);
  $mailer->sendMail();

# Instructions
1.By deafult the SMTP host is of gmail (smtp.gmail.com) is used for senders email. If you want to use another eamil service pass in an     additional parameter white inctanciating the object. 
  Example : 
    
    $mailer = new Mail($senderName,$senderEmail,$senderPassword,$recipientEmail,$subject,$body,$SMTPhost);
    $mailer->sendMail();
        
2.In senders email password if you are using your noraml google account password, it may not work so it is recomended to generate app     specific password from you Google Account. Here the lonk from where you can genertae your app specific password provided by google       and use it as Email Paassword while inctanciating an object.
  
    https://myaccount.google.com/intro/security
    
    In "Security" tab you will get the APP Passsword option.
    
3. By deafult the debudgging for PHPmailer is turned off, if you want to use debugging change to value of $mail->SMTPDebug to 1 in          sendMail() method defined inside Mail class.

# Here is the link to official PHP mailer repo
  https://github.com/PHPMailer/PHPMailer

