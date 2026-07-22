<?php

$notes = [12, 15, 8, 19, 17];

$somme=0;

for ($i=0;$i<count($notes);$i++){
    $somme+=$notes[$i];
}

$moyenne = $somme/count($notes);
echo $moyenne;