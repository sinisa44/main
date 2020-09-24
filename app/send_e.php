<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'phpmailer\src\Exception.php';

/* The main PHPMailer class. */
require 'phpmailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'phpmailer\src\SMTP.php';

function verificationEmailSend($To,$Body){
$useremail="webstranice2020@gmail.com";
$pw="nimirobibusiness2020";
$mail = new PHPMailer(TRUE);

/* Open the try/catch block. */
try {
      /* SMTP parameters. */
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = TRUE;
      $mail->SMTPSecure = 'tls';
      $mail->Username = $useremail;
      $mail->Password = $pw;
      $mail->Port = 587;
         /* Disable some SSL checks. */
   $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
 );
         /* Set the mail sender. */
   $mail->setFrom($useremail);

   /* Add a recipient. */
   $mail->addAddress($To);

   /* Set the subject. */
   $mail->Subject = 'Email Verification';

   /* Set the mail message body. */
   $mail->Body = $Body;

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}
}