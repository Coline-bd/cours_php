<?php

$contacts = [
    "Alice" => "0601020304",
    "Lucas" => "0605060708",
    "Emma" => "0611223344",
    "Nathan" => "0699887766"
];

// Afficher :
// Alice : 0601020304
// Lucas : 0605060708
// ...

// Créer une fonction qui recherche si un contact existe.

foreach($contacts as $key =>$value){
    echo $key." : ".$value."\n";
}

function is_contact_exists(string $nom, array $tab):bool{
    foreach($tab as $key =>$value){
        if ($nom==$key){
            return true;
        }
    }
    return false;
}

echo is_contact_exists("Lucas",$contacts);