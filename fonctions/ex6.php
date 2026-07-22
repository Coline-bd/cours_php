<?php

const TVA = 20;

function calculTTC(float $prixHT): float{
    return $prixHT*(1+0.2);
}

echo calculTTC(10);