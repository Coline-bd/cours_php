<?php

$compteur=20;

while ($compteur>=0){
    echo $compteur."\n";
    if($compteur==0){
        echo "Décollage !";
    }
    $compteur-=1;
}
