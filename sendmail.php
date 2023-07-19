<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Load PHPMailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server address
    $mail->SMTPAuth = true;
    $mail->Username = 'alicanalican4141@gmail.com';
    $mail->Password = 'ddbrgvaeutlqwcxo';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress('your_email@example.com'); // Replace with your email address
    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        // Email sent successfully, redirect to thank you page
        header("Location: thank_you.html");
        exit;
    } else {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>