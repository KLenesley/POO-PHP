<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\Dotenv\Dotenv;

require_once 'vendor/autoload.php';

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USERNAME'];
    $mail->Password = $_ENV['SMTP_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom($_ENV['SMTP_USERNAME'], $_ENV['SMTP_NAME']);
    $mail->addAddress($_ENV['SMTP_USERNAME'], $_ENV['SMTP_NAME']);
    $mail->Subject = $subject;
    $mail->Body    = $message . "\n\n Envoyé par : " . $email;

    $mail->send();
    echo 'Message correctement envoyé. <br>';
    echo '<a href="index.html">Retourner à l\'accueil</a>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>