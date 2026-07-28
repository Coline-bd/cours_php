<?php

$produits=[
    [
        "nom" => "banane",
        "catégorie"=>"fruit",
        "prix"=>4
        
    ],
    [
        "nom" => "cerise",
        "catégorie"=>"légume",
        "prix"=>6
    ],
    [
        "nom" => "orange",
        "catégorie"=>"Informatique",
        "prix"=>2
    ]
];

$categorie = "Informatique";
$prixMaximum = 150;

//Afficher uniquement les produits correspondant aux deux critères.
for($i=0;$i<count($produits);$i++){
    if($produits[$i]["catégorie"]=="Informatique" && $produits[$i]["prix"]<$prixMaximum){
        echo "le produit ".$produits[$i]["nom"]." correspond à la recherche";
    }
}