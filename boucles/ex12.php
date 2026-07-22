<?php

$personne = [
    "firstname" => "Alice",
    "lastname" => "Martin",
    "age" => 28,
    "city" => "Bordeaux"
];

foreach ($personne as $key => $value){
    echo $key ." : ".$value."\n";
}