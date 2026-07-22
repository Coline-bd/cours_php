<?php

$nombre =10;
$compteur=1;

do {
    $guess = readline("Devine le nombre : "."\n");
    if ($guess==$nombre){
        echo "Bravo tu as trouvé en  ".$compteur." essais";
    }
    else {
        if ($guess>$nombre){
            echo "Le nombre est plus petit"."\n";
    }
        else if ($guess<$nombre){
            echo "Le nombre est plus grand"."\n";
    }
        if($compteur==2){
            echo "Change de métier";
    }
        $compteur++;
}}
while ($guess != $nombre && $compteur<=2);
