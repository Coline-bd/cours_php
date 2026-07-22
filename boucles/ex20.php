<?php



function ajouterNotes() :void{
    $notes=[];
    $nbrNotes=readline("Entrez le nombre de notes");
    for ($i=0;$i<$nbrNotes;$i++){
        $prenom=readline("Entrez le prénom ");
        $note=readline("Entrez la note ");
        $tab=[];
        $tab["prénom"]=$prenom;
        $tab["note"]=$note;
        $notes[$i]=$tab;
    }
    //rechercher meilleure et pire note
    $max=$notes[0]["note"];
    $indexMax=0;
    $indexMin=0;
    $min=$notes[0]["note"];
    for ($i=1;$i<$nbrNotes;$i++){
        if ($notes[$i]["note"]>$max){
            $max=$notes[$i]["note"];
            $indexMax=$i;
        }
        if ($notes[$i]["note"]<$min){
            $min=$notes[$i]["note"];
            $indexMin=$i;
        }
    }
    echo "meilleur note : ".$notes[$indexMax]["prénom"]." ".$notes[$indexMax]["note"]."\n";
    echo "pire note : ".$notes[$indexMin]["prénom"]." ".$notes[$indexMin]["note"];
}
