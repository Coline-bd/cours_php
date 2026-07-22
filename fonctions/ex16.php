<?php 


function calculAge(int $anneeNaissance): int | string{
    if (is_numeric($anneeNaissance) && date("Y") - $anneeNaissance < 0) {
        return "Saisir une date valide";
} else {
    return date("Y") - $anneeNaissance;
}
}

$annee=1997;
echo "Je suis née en ".$annee." et j'ai ".calculAge($annee)." ans.";