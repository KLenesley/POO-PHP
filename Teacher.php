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
        return $this->matieres;
    }

    public function travailler()
    {
        return "Je prépare mes cours";
    }

    public function enseigner()
    {
        return "J'enseigne";
    }
}