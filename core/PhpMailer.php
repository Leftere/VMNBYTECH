<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__.'/../config/config.php';


$hello = "Hello worlfsdfsdd";

function sendMail($email, $subject, $message) {
    $mail = new PHPMailer(true);

    $mail->SMTPAuth   = true;     
    $mail->Host       = MAILHOST;     
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  

    $mail->Port       = 587;   

    $mail->setFrom(SEND_FROM, SEND_FROM_NAME);

    $mail->addAddress($email); 

    $mail->addReplyTo(SEND_FROM, SEND_FROM_NAME);

    $mail->isHTML(true); 

    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        return "Email not send. Please try again";
    } else {
        return "Success";
    }
}

