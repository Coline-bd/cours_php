<?php

// $mois=substr($anniv,3,2);
// $jour=substr($anniv,0,2);
// $annee=substr($anniv,6,4);
// echo $mois . $jour. $annee;
// $time =mktime(0,0,0,$mois,$jour,$annee);
// echo date("l",$time);
$anniv=readline("Entrez votre anniversaire");
$result =explode('/',$anniv);
$time =mktime(0,0,0,$result[1],$result[0],$result[2]);
// echo date("l",$time); afficher le jour

$days=array("Monday" =>"lundi","Tuesday"=>"mardi","Wednesday"=>"mercredi","Thursday"=>"jeudi","Friday"=>"vendredi","Saturday"=>"samedi","Sunday"=>"dimanche");

//afficher le jour en français
echo "Vous êtes nées un " .$days[date("l",$time)];
