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

for ($i=0; $i<count($products);$i++){
    $stock=($products[$i]["stock"]>0)?"En stock":"Rupture";
    echo $products[$i]["name"]." - ".$products[$i]["price"]." - ".$stock."\n";
}