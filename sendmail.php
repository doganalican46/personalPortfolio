<?php
// Load PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'alicanalican4141@gmail.com';
    $mail->Password = 'ddbrgvaeutlqwcxo';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress($email);
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;
    $mail->send();

    try {
        $mail->send();
        echo '<script>alert("Mail sent successfully!");</script>';
        header("Location: index.html");
        exit;
    } catch (Exception $e) {
        echo '<script>alert("Failed to send email!");</script>';
        header("Location: index.html");
        exit;
    }
}
?>
