<?php

function formatterNom(string $prenom, string $nom): string{
    return ucfirst(strtolower($prenom))." ".strtoupper($nom);
}

echo formatterNom("coline","bertrand");
