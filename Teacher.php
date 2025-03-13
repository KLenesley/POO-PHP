<?php

class Teacher extends User implements Enseignable
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
        return "Je prépare mes cours \n";
    }

    public function enseigner()
    {
        return "J'enseigne \n";
    }
}