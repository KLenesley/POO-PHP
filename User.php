<?php

class User
{
    private $name;

    public function __construct($nom = "Inconnu"){
        $this->name = $nom;
    }

    public function __toString(){
        return "Nom : " . $this->name;
    }

    public function getName(){
        return $this->name;
    }
}