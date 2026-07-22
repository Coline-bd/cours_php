<?php

$secret=8;
$guess=readline("Devinez le nombre");
if ($guess ==$secret){
    echo "Bravo !";
} else{
    echo "Perdu !";
}