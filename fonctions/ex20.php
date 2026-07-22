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

function puissance(float $nombre, int $exposant): float{
    return pow($nombre,$exposant);
}

function racine(float $nombre): float{
    return sqrt($nombre);
}


function calculer(float $a, float $b, string $operateur): float | string{
    if ($operateur=="+"){
        return addition($a,$b);
    }
    else if ($operateur=="-"){
        return soustraction($a,$b);
    }
    else if ($operateur=="*"){
        return multiplication($a,$b);
    }
    else if ($operateur=="/"){
        return division($a,$b);
    }
    else if ($operateur=="puissance"){
        return puissance($a,$b);
    }
    else if ($operateur=="racine"){
        return racine($a);
    }
    else {
        return "erreur";
    }
}

echo "resultat : ".calculer(25,0,"racine");