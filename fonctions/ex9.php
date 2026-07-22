<?php

function initiales(string $prenom, string $nom): string{
    return strtoupper($prenom[0]).".".strtoupper($nom[0]);
}

echo initiales("coline","bertrand");