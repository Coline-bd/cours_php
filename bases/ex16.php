<?php

$nb1=readline("Entrez un nombre");
$nb2=readline("Entrez un nombre");
$nb3=readline("Entrez un nombre");
$nb4=readline("Entrez un nombre");
$nb5=readline("Entrez un nombre");

echo " $nb1, $nb2, $nb3, $nb4, $nb5";

$max=$nb1;
if ($nb2>$max){
    $max=$nb2;
}
if ($nb3>$max){
    $max=$nb3;
}
if ($nb4>$max){
    $max=$nb4;
}
if ($nb5>$max){
    $max=$nb5;
}
echo "Le plus grand nombre est $max";