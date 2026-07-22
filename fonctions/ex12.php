<?php

function estPair(int $nombre): bool{
    if ($nombre%2==0){
        return true;
    }
    else {
        return false;
    }
}

$nombre=6;
echo estPair($nombre)?"$nombre est pair":"$nombre est impair";