<?php

$products = [
    [
        "name" => "Clavier",
        "price" => 49.99,
        "stock" => 12
    ],
    [
        "name" => "Souris",
        "price" => 19.90,
        "stock" => 0
    ],
    [
        "name" => "Écran",
        "price" => 189.00,
        "stock" => 5
    ]
];

$somme=0;
for($i=0;$i<count($products);$i++){
    if ($products[$i]["stock"]!==0){
        $somme+=$products[$i]["stock"]*$products[$i]["price"];
    }
}
echo "Valeur totale du stock : ".$somme." €";