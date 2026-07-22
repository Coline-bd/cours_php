<?php

$fruits = [
    "Pomme",
    "Poire",
    "Banane",
    "Orange",
    "Kiwi"
];

echo $fruits[0]."\n";
echo $fruits[4]."\n";
echo count($fruits)."\n";

for ($i=0;$i<count($fruits);$i++){
    echo $fruits[$i]."\n";
}