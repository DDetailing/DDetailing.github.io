<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require "vendor"/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = 'dandddetailing1@gmal.com';
$mail->Password = 'aqkf fbaj qcni lzha';

$mail->setFrom($email, $name);
$mail->addAddress('dandddetailing1@gmail.com');

$mail->Subject = $subject;
$mail->Body = $message;

if($mail->send()){
    $status = "success";
    $response = "Email is sent!";
    