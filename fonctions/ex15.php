<?php

function meteo(int $temperature): string{
    if ($temperature<0){
        return "Il gèle";
    }
    else if ($temperature<15){
        return "Il fait froid";
    }
    else if ($temperature<25){
        return "Temps agréable";
    }
    else {
        return "Il fait chaud";
    }
}

$temp=16;
echo "Avec une température de ".$temp. " : ".meteo($temp);
