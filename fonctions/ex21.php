<?php

$prenom=readline("prénom");
$nom=readline("nom");
$naissance=readline("année de naissance");
$salaireM=readline("salaire mensuel");

function nomComplet(string $prenom, string $nom): string{
    return ucfirst($prenom)." ".ucfirst($nom);
}

function calculAge(int $annee): int | string{
    if (is_numeric($annee) && date("Y") - $annee < 0) {
        return "Saisir une date valide";
} else {
    return date("Y") - $annee;
}
}


function estMajeur(int $age): bool{
    if ($age>=18){
        return true;
    }
    else {
        return false;
    }
}



function salaireAnnuel(float $mensuel): float{
    return $mensuel*12;
}



function afficherEmploye(string $nomComplet,int $age,string $majeur,float $salaire): void{
    echo "Employé \n";
    echo "Nom : ".$nomComplet."\n";
    echo "Age : ".$age." ans."."\n";
    $majeur=estMajeur($age)?"Oui":"Non";
    echo "Majeur : ".$majeur."\n";
    echo "Salaire annuel : ".$salaire." €";
}

$nomComplet=nomComplet($prenom,$nom);
$age=calculAge($naissance);
$majeur=estMajeur($age)?"Oui":"Non";
$salaire=salaireAnnuel($salaireM);
afficherEmploye($nomComplet,$age,$majeur,$salaire);
