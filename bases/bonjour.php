<?php

echo "Bonjour le monde !\n";
echo 'Bienvenue dans le cours PHP.';

$prenom = 'coline';
$nom = 'bertrand';
$age =29;
$ville = "toulouse";

echo 'Je m\'appelle ' . $prenom .' '. $nom . '
J\'ai ' . $age .' ans.
J\'habite à ' . $ville ."\n";

$TVA ="Valeur de PI = 3.14159
TVA = 20";

echo $TVA;

$a = 12;
$b = 8;

echo 'Addition : ' . $a+$b . ' 
Soustraction : '.$a-$b . ' 
Multiplication : '. $a*$b . '
Division : ' . $a/$b . "\n";


$valeur=readline("entrez une valeur\n");
echo $valeur;

$prixHT = 100;
$nb=3;
$tauxTVA=0.2;

$TTX = $nb *($prixHT+($prixHT*$tauxTVA));
echo $TTX;
