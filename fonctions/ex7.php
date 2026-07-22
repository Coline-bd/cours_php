<?php

function estMajeur(int $age): bool{
    if ($age>=18){
        return true;
    }
    else {
        return false;
    }
}

echo(estMajeur(19))?"Vous êtes majeur":"Vous êtes mineur";