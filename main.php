<?php

include_once ("voiture.php");

try {
    // Création d'une instance de la classe Voiture
    $maVoiture = new Voiture();

// Utilisation de l'objet
    $maVoiture->setCouleur("Grise");
    $maVoiture->setMarque("Peugeot");
    $maVoiture->setModele("206 HDI");
    $maVoiture->klaxonner();
}
catch (\Throwable $th) {
    echo "Une erreur est survenue : " . $th->getMessage();
}
