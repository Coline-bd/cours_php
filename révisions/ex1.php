<?php

$nombres = [12, 5, 9, 18, 7, 2];
//créer un nouveau tableau contenant les éléments dans l'ordre inverse.
$reverse=[];
$n=count($nombres);
echo $n;
for($i=$n-1;$i>=0;$i--){
    $reverse[]=$nombres[$i];
}
print_r($reverse);