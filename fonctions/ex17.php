<?php

function jourActuel(): string{
    $jour=date('N',time());
    switch ($jour){
        case 1:
            return "lundi";
        case 2:
            return "mardi";
      
        case 3:
            return "mercredi";
           
        case 4: 
            return "jeudi";
  
        case 5:
            return "vendredi";
      
        case 6:
            return "samedi";

        default:
            return "dimanche";
    }
}

echo "Aujourd'hui nous sommes ".jourActuel();