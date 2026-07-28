<?php

$notes = [8, 14, 12, 19, 7, 10, 15];

//Calculer la moyenne.
//Afficher uniquement les notes supérieures à la moyenne.

function calculerMoy(array $notes):void {
    $somme=0;
    foreach($notes as $value){
        $somme+=$value;
        if ($value>=10){
            echo $value."\n";
        }
    }
    $moyenne=$somme/count($notes);
    echo "Moyenne : ".$moyenne;
}

calculerMoy($notes);