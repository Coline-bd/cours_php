<?php

$temp= readline("Entrez une température");
if ($temp<0){
    echo "Il gèle";
} else if ($temp <16 ){
    echo "Il fait froid";
} else if ($temp <26){
    echo "Il fait bon";
} else {
    echo "Il fait chaud";
}