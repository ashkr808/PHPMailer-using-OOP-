<?php
    class Mail{
        private $senderName;
        private $senderEmail;
        private $password;
        private $reciever;
        private $subject;
        private $body;
        private $SMTPhost;

        public function __construct($senderName,$senderEmail,$password,$reciever,$subject,$body,$SMTPhost = 'smtp.gmail.com')
        {
            require('phpmailer/PHPMailerAutoload.php');
            $this->senderName = $senderName;
            $this->senderEmail = $senderEmail;
            $this->password = $password;
            $this->reciever = $reciever;
            $this->subject = $subject;
            $this->body = $body;
            $this->SMTPhost = $SMTPhost;
        }
        public function sendMail(){

            $mail = new PHPMailer;
            $mail->SMTPDebug = 0;                               // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = $this->SMTPhost;                            // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = $this->senderEmail;                 // SMTP username
            $mail->Password = $this->password;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom($this->senderEmail, $this->senderName);
            $mail->addAddress($this->reciever);                     // Add a recipient

            $mail->addReplyTo($this->senderEmail);
        
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = $this->subject;
            $mail->Body    = $this->body;
            $mail->AltBody = $this->body;
            $mail->send();
        }
    }
?>