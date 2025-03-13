<?php

require_once 'User.php';
include_once 'Coursable.php';

class Student extends User implements Coursable
{
    private string $classe;

    public function setClasse(?string $classe)
    {
        $this->classe = $classe;
    }

    public function getClasse()
    {
        return $this->classe . "\n";
    }

    public function travailler()
    {
        return "Je suis en cours \n";
    }

    public function suivreCours()
    {
        return "Je suis le cours \n";
    }
}