<?php

$users = [
    [
        "firstname" => "Alice",
        "lastname" => "Martin",
        "age" => 25
    ],
    [
        "firstname" => "Lucas",
        "lastname" => "Petit",
        "age" => 17
    ],
    [
        "firstname" => "Emma",
        "lastname" => "Durand",
        "age" => 32
    ]
];

for ($i=0;$i<count($users);$i++){
    $majeur=($users[$i]["age"]>18)?"majeur":"mineur";
    echo $users[$i]["firstname"]." ".$users[$i]["lastname"]." est ".$majeur."\n";
}