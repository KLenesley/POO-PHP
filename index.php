<?php

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
$loader = new \Twig\Loader\FilesystemLoader('templates/');
$twig = new \Twig\Environment($loader);

$users = array();
$users[] = $user1;
$users[] = $user2;
$users[] = $user3;

echo $twig->render('index.html.twig', [
    'users' => $users,
]);