<?php

$produits=[
    [
        "nom" => "banane",
        "prix"=>4,
        "quantité"=>2
    ],
    [
        "nom" => "cerise",
        "prix"=>3,
        "quantité"=>1
    ],
    [
        "nom" => "orange",
        "prix"=>3,
        "quantité"=>5
    ]
];

// Calculer pour chaque produit :
// Valeur = prix × quantité
// Puis afficher :
// la valeur de chaque produit ;
// la valeur totale du stock.

$total=0;
for($i=0;$i<count($produits);$i++){
    $valeur=$produits[$i]["prix"]*$produits[$i]["quantité"];
    echo $produits[$i]["nom"]." valeur : ".$valeur."\n";
    $total+=$valeur;
}
echo "stock total : ".$total;

//Afficher uniquement les produits dont la quantité est égale à 0.
for($i=0;$i<count($produits);$i++){
    if ($produits[$i]["quantité"]==0){
        echo "Produit ".$produits[$i]["nom"]." en rupture de stock";
    }
}