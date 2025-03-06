<?php

include_once ("User.php");
include_once ("Student.php");

$user1 = new Student();

$user1->setName("Bob");

echo $user1->getName();