<?php

$note1=readline("Entrez une note");
if ($note1>=10){
    echo "Admis ";
    if ($note1<12){
        echo "Mention passable";
    }
    else if($note1<14){
        echo "Mention assez bien";
    }
    else if($note1<16){
        echo "Mention bien";
    }
    else if($note1>=16){
        echo "Mention très bien";
    }
}

$note2=readline("Entrez une note");
if ($note2>=10){
    echo "Admis ";
    if ($note2<12){
        echo "Mention passable";
    }
    else if($note2<14){
        echo "Mention assez bien";
    }
    else if($note2<16){
        echo "Mention bien";
    }
    else if($note2>=16){
        echo "Mention très bien";
    }
}
$note3=readline("Entrez une note");
if ($note3>=10){
    echo "Admis ";
    if ($note3<12){
        echo "Mention passable";
    }
    else if($note3<14){
        echo "Mention assez bien";
    }
    else if($note3<16){
        echo "Mention bien";
    }
    else if($note3>=16){
        echo "Mention très bien";
    }
}

echo "la moyenne est de ". ($note1+$note2+$note3)/3;