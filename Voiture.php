<?php

class Voiture {

    // Propriétés
    private $couleur;
    private $marque;
    private $modele;

    // Méthodes
    public function klaxonner() {
        print("Tut tut!");
    }

    // setters (accesseurs)
    public function setCouleur($c) {
        if (is_string($c)){
            $this->couleur = $c;
        } else {
            throw new Exception("Veuillez entrer une couleur valide");
        }
    }
    public function setMarque($m) {
        $this->marque = $m;
    }
    public function setModele($m){
        $this->modele = $m;
    }

    // getters (mutateurs)
    public function getCouleur() {
        return $this->couleur;
    }
    public function getMarque() {
        return $this->marque;
    }
    public function getModele(){
        return $this->modele;
    }
}

