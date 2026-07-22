<?php

$nombre1=readline("Entrez un nombre");
$operateur=readline("Entrez un opérateur");
$nombre2=readline("Entrez un nombre");


if ($operateur=="/" ) {
    if ($nombre2==0){
    echo "division par zéro impossible";}
    echo "Résultat de la division : $nombre1 / $nombre2 = " .$nombre1/$nombre2;
    }
else if ($operateur=="+"){
    echo "Résultat de l'addition : $nombre1 + $nombre2 = " .$nombre1+$nombre2;
}
else if ($operateur=="-"){
    echo "Résultat de la soustraction : $nombre1 - $nombre2 = " .$nombre1-$nombre2;
}
else if ($operateur=="*"){
    echo "Résultat de la multiplication : $nombre1 * $nombre2 = " .$nombre1*$nombre2;
}
else {
    echo "l'opérateur est incorrect";
}

