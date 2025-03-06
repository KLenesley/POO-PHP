<?php

include_once ("User.php");
include_once ("Student.php");

$user1 = new User();

echo "Nom : " . $user1->getName(). "\n";

echo $user1;