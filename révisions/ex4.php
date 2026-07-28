<?php

$frontend = ["HTML", "CSS", "JavaScript"];
$backend = ["PHP", "Symfony", "SQL"];

//Créer un troisième tableau contenant tous les éléments.
//Afficher ensuite chaque élément précédé de son numéro.

$new=array_merge($frontend,$backend);
// print_r($new);
for($i=0;$i<count($new);$i++){
    echo ($i+1). " : ". $new[$i]. "\n" ;
}