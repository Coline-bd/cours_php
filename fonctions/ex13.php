<?php

function plusGrand(int $a, int $b): int{
    if ($a>$b){
        return $a;
    }
    else {
        return $b;
    }
}

echo "le plus grand nombre est ". plusGrand(2,3);