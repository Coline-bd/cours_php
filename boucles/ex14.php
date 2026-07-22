<?php

$tab = [12,3,22,6,47,89,1,187,2,26,44,22,47,1];

$somme=0;
for ($i=0;$i<count($tab);$i++){
    $somme+=$tab[$i];
}
$moyenne = $somme/count($tab);
echo $moyenne;