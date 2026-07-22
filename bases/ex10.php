<?php

$nombre1=readline("Entrez un nombre");
$nombre2=readline("Entrez un autre nombre");

if ($nombre1>$nombre2){
    echo "$nombre1 est plus grand que $nombre2";
} else if ($nombre1<$nombre2){
     echo "$nombre2 est plus grand que $nombre1";
} else {
    echo "Les nombres sont égaux";
}