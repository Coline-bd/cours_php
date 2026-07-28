<?php

$vendeurs = [
    [
        "nom"=>"Alice",
        "ventes"=>15200
    ],
    [
        "nom"=>"Lucas",
        "ventes"=>9800
    ],
    [
        "nom"=>"Emma",
        "ventes"=>18750
    ],
    [
        "nom"=>"Nathan",
        "ventes"=>14300
    ]
];

// Afficher :
// le meilleur vendeur ;
// le moins bon vendeur ;
// la moyenne des ventes.

$max=0;
$min=10000000;
for($i=0;$i<count($vendeurs);$i++){
    if ($vendeurs[$i]["ventes"]>$max){
        $max=$vendeurs[$i]["ventes"];
        $meilleur=$vendeurs[$i]["nom"];
    }
    if ($vendeurs[$i]["ventes"]<$min){
        $min=$vendeurs[$i]["ventes"];
        $pire=$vendeurs[$i]["nom"];
    }
}
echo "Le meilleur vendeur est : ".$meilleur."\n";
echo "Le pire vendeur est : ".$pire."\n";
