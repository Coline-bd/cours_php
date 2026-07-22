<?php

function nomComplet(string $prenom, string $nom): string{
    return ucfirst($prenom)." ".ucfirst($nom);
}

echo nomComplet("Coline","Bertrand");