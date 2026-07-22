<?php

function nombreCaracteres(string $texte): int{
    return strlen($texte);
}

echo nombreCaracteres("coucou");