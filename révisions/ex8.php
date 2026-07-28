<?php

$produits = [
    "Clavier" => 49.90,
    "Souris" => 24.90,
    "Écran" => 199.90
];

// Effectuer les opérations suivantes :
// ajouter un casque ;
$produits["Casque"]=30;
// modifier le prix de la souris ;
$produits["Souris"]=15;
// supprimer l'écran ;
unset($produits["Écran"]);
// afficher le catalogue.
print_r($produits);