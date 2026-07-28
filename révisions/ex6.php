<?php

$ventes = [1250, 980, 1540, 2100, 870, 1620];

//Afficher :
// la plus petite vente ;
// la plus grande vente ;
// la moyenne ;
// le total des ventes ;
// le nombre de ventes supérieures à 1500 €.

function calculerMoy(array $notes):float {
    $somme=0;
    foreach($notes as $value){
        $somme+=$value;
    }
    $moyenne=$somme/count($notes);
    return $moyenne;
}

function trouverMin(array $tab):int{
    $min=$tab[0];
    for($i=0;$i<count($tab);$i++){
        if ($tab[$i]<$min){
            $min=$tab[$i];
        }
    }
    return $min;
}

function trouverMax(array $tab):int{
    $max=$tab[0];
    for($i=0;$i<count($tab);$i++){
        if ($tab[$i]<$max){
            $max=$tab[$i];
        }
    }
    return $max;
}

function calculerTotal(array $tab):int{
    $total=0;
    foreach($tab as $value){
        $total+=$value;
    }
    return $total;
}

echo "La plus petite vente : ".trouverMin($ventes)."\n";
echo "La plus grande vente : ".trouverMax($ventes)."\n";
echo "La moyenne des ventes : ".calculerMoy($ventes)."\n";
echo "Le total des ventes : ".calculerTotal($ventes)."\n";