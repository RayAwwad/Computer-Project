<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/* Exception class. */

require __DIR__.'\PHPMailer\src\Exception.php';
/* The main PHPMailer class. */
require __DIR__.'\PHPMailer\src\PHPMailer.php';
/* SMTP class, needed if you want to use SMTP. */
require __DIR__.'\PHPMailer\src\SMTP.php';

$mail = new PHPMailer(true);

//Send mail using gmail
// if($send_using_gmail){
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "jpk2002.jpk@gmail.com"; // GMAIL username
    $mail->Password = "lcu.jpkbbfyp"; // GMAIL password
// }

//Typical mail data
