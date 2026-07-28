<?php

$etudiants = [
    [
        "nom" => "Martin",
        "notes" => [12,15,18]
    ],
    [
        "nom" => "Durand",
        "notes" => [9,10,8]
    ],
    [
        "nom" => "Petit",
        "notes" => [18,19,17]
    ]
];

// Pour chaque étudiant :
// calculer la moyenne ;
// afficher s'il est admis ;
// afficher son nom et sa moyenne.
// for($j=0;$j<count($etudiants);$j++){
//     $somme=0;
//     for($i=0;$i<count($etudiants[$j]["notes"]);$i++){
//         $somme+=$etudiants[$j]["notes"][$i];
//     }
//     $moyenne=$somme/count($etudiants[$j]["notes"]);
//     echo $etudiants[$j]["nom"]." : Moyenne : ". $moyenne."\n";
//     echo $moyenne>=10?"Admis":"Non admis \n";

// }

//Afficher uniquement l'étudiant ayant la meilleure moyenne
$meilleur=["nom" =>"","moyenne" =>0];
for($j=0;$j<count($etudiants);$j++){
    $somme=0;
    for($i=0;$i<count($etudiants[$j]["notes"]);$i++){
        $somme+=$etudiants[$j]["notes"][$i];
    }
    $moyenne=$somme/count($etudiants[$j]["notes"]);
    if ($moyenne >$meilleur["moyenne"]){
        $meilleur["nom"]=$etudiants[$j]["nom"];
        $meilleur["moyenne"]=$moyenne;
    }
}
echo $meilleur["nom"]." : Moyenne : ". $meilleur["moyenne"]."\n";