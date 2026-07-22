<?php

$tab = [12,3,22,6,47,89,1,187,2,26,44,22,47,1];


$max=$tab[0];
for ($i=1;$i<count($tab)-1;$i++){
    if ($tab[$i]>$max){
        $max=$tab[$i];
    }
}
echo $max;


