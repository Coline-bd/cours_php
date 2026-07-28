<?php
$bdd = [
    ["id"=>1,
    "nom"=>"bertrand",
    "prénom"=>"coline",
    "email"=>"lkjrgkj",
    "rôle"=>"Admin",
    "actif"=>true
    ],
    ["id"=>2,
    "nom"=>"jean",
    "prénom"=>"jean",
    "email"=>"lkjrgkj",
    "rôle"=>"eleve",
    "actif"=>true
    ],
    ["id"=>3,
    "nom"=>"arnaud",
    "prénom"=>"arnaud",
    "email"=>"lkjrgkj",
    "rôle"=>"Admin",
    "actif"=>false
    ],
];

// Afficher uniquement les administrateurs.
for($i=0;$i<count($bdd);$i++){
    if($bdd[$i]["rôle"]=="Admin"){
        echo "Administrateur : ".$bdd[$i]["prénom"]."\n";
    }
}

// Afficher uniquement les comptes actifs.
for($i=0;$i<count($bdd);$i++){
    if($bdd[$i]["actif"]){
        echo "compte actif : ".$bdd[$i]["prénom"]."\n";
    }
}
// Rechercher un utilisateur par son identifiant.
for($i=0;$i<count($bdd);$i++){
    if($bdd[$i]["id"]==2){
        echo "compte recherché : ".$bdd[$i]["prénom"]."\n";
    }
}

// Compter le nombre d'administrateurs.
$admin=0;
for($i=0;$i<count($bdd);$i++){
    if($bdd[$i]["rôle"]=="Admin"){
        $admin+=1;
    }
}
echo "Il y a ".$admin." administrateurs";
// Compter le nombre de comptes inactifs.