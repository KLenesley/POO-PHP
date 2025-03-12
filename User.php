<?php

abstract class User
{
    protected ?string $name;

    public function setName(?string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name . "\n";
    }

    abstract public function travailler();
}