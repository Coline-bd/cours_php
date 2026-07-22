<?php

function addition(int $a, int $b): int {
    return $a + $b;
}

function soustraction(int $a, int $b): int{
    return $a-$b;
}

function multiplication(int $a, int $b): int{
    return $a * $b;

}

function division(float $a, float $b): float | string{
        if ($b!==0){
            return $a/$b;
        }
        else {
            return "erreur";
        }
}

if (is_numeric($a) and is_numeric($b)){
    echo addition(2,1);
}