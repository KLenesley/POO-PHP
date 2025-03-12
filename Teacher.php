<?php

class Teacher extends User
{
    private string $matieres;

    public function setMatieres(?string $matieres)
    {
        $this->matieres = $matieres;
    }

    public function getMatieres()
    {
        return $this->matieres . "\n";
    }

    public function travailler()
    {
        return "J'enseigne \n";
    }
}