<?php

class User
{
    private $name;

    public function __construct($nom = "Inconnu"){
    }

    public function getName(){
        return $this->name;
    }
}