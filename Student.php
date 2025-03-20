<?php

require_once 'User.php';
include_once 'Coursable.php';

class Student extends User implements Coursable
{
    private string $classe;
    public static int $nbStudents = 0;

    public function __construct()
    {
        self::$nbStudents++;
    }

    public function setClasse(?string $classe)
    {
        $this->classe = $classe;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function travailler()
    {
        return "Je suis en cours";
    }

    public function suivreCours()
    {
        return "Je suis le cours";
    }
}