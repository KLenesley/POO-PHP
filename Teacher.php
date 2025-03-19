<?php

require_once 'User.php';
include_once 'Enseignable.php';

class Teacher extends User implements Enseignable
{
    private string $matieres;

    public function setMatieres(?string $matieres)
    {
        $this->matieres = $matieres;
    }

    public function getMatieres()
    {
        return $this->matieres . "<br>";
    }

    public function travailler()
    {
        return "Je prépare mes cours <br>";
    }

    public function enseigner()
    {
        return "J'enseigne <br>";
    }
}