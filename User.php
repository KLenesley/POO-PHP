<?php

abstract class User
{
    protected ?string $name;

    public function setName(?string $name) // Mutateur
    {
        $this->name = $name;
    }

    public function getName() // Assesseur
    {
        return $this->name . "\n";
    }

    abstract public function travailler();
}