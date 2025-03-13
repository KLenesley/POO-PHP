<?php

class Student extends User 
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
}