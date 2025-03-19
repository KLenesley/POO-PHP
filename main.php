<?php

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

echo "nbStudents = " . Student::$nbStudents . "\n";

echo "\n";

$user1 = new Student();
$user1->setName("Momo");
$user1->setClasse("SIO1");

echo $user1->getName();
echo $user1->getClasse();

echo "nbStudents = " . Student::$nbStudents . "\n";

echo "\n";

$user2 = new Student();
$user2->setName("Coco");
$user2->setClasse("SIO1");

echo $user2->getName();
echo $user2->getClasse();

echo "nbStudents = " . Student::$nbStudents . "\n";

echo "\n";

$user3 = new Teacher();
$user3->setName("Toto");
$user3->setMatieres("SLAM");

echo $user3->getName();
echo $user3->getMatieres();

echo "nbStudents = " . Student::$nbStudents . "\n";

echo "\n";

afficherTravail($user1);
afficherTravail($user2);
afficherTravail($user3);
