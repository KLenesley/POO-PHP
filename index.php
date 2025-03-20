<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require_once 'vendor/autoload.php';

require_once ("User.php");
require_once ("Student.php");
require_once ("Teacher.php");
include_once ("Enseignable.php");
include_once ("Coursable.php");

function afficherTravail(User $user)
{
    echo $user->travailler();

    if ($user instanceof Enseignable)
        echo $user->enseigner();
    if ($user instanceof Coursable)
        echo $user->suivreCours();
}

echo "nbStudents = " . Student::$nbStudents . "<br>";

echo "<br>";

$user1 = new Student();
$user1->setName("Momo le morse");
$user1->setClasse("SIO1");

echo $user1->getName();
echo $user1->getClasse();

echo "nbStudents = " . Student::$nbStudents . "<br>";

echo "<br>";

$user2 = new Student();
$user2->setName("Coco qui code");
$user2->setClasse("SIO1");

echo $user2->getName();
echo $user2->getClasse();

echo "nbStudents = " . Student::$nbStudents . "<br>";

echo "<br>";

$user3 = new Teacher();
$user3->setName("Toto le prof");
$user3->setMatieres("SLAM");

echo $user3->getName();
echo $user3->getMatieres();

echo "nbStudents = " . Student::$nbStudents . "<br>";

echo "<br>";

afficherTravail($user1);
afficherTravail($user2);
afficherTravail($user3);

// Twig
$loader = new FilesystemLoader('templates/');
$twig = new Environment($loader);

$users = array();
$users[] = $user1;
$users[] = $user2;
$users[] = $user3;

echo $twig->render('index.html.twig', [
    'users' => $users,
]);

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
    $mail->Subject = 'Coucou';
    $mail->Body    = 'Mail envoyer depuis PHPMailer';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}