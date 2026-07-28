<?php

$notes = [12, 15, 12, 18, 10, 15, 19, 18];

//Afficher uniquement les valeurs présentes plusieurs fois.
//Bonus : afficher le nombre d'occurrences de chaque valeur.


for($i=0;$i<=count($notes)-2;$i++){
    $nb=0;
    $trouve=false;
    for($j=$i+1;$j<=count($notes)-1;$j++){
        if ($notes[$i]==$notes[$j]){
            $trouve=true;
            $nb++;
        }
    }
    if ($trouve){
        echo $notes[$i]." : présent ".$nb." fois \n";
    }
}