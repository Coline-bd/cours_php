<?php

$prenom=readline("entrer prénom");
$nom=readline("entrer nom");

echo "Vos initiales sont : ".strtoupper(substr($prenom,0,1)).".".strtoupper(substr($nom,0,1));
