<?php


$ages = [25, 18, 32, 20, 19, 41, 28];
//Sans utiliser sort(), trier les valeurs par ordre croissant.

for($i=0;$i<=count($ages)-2;$i++){
    $min=$i;
    for($j=$i+1;$j<=count($ages)-1;$j++){
        if ($ages[$j]<$ages[$min]){
            $min=$j;
        }
    }
    $temp=$ages[$i];
    $ages[$i]=$ages[$min];
    $ages[$min]=$temp;
}

//sort($ages);
print_r($ages);