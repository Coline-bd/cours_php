<?php

$produits = [
    [
        "nom"=>"Clavier",
        "catégorie"=>"informatique",
        "prix"=>49.90,
        "stock"=>2
    ],
    [
        "nom"=>"Écran",
        "catégorie"=>"informatique",
        "prix"=>199.90,
        "stock"=>1
    ],
    [
        "nom"=>"Souris",
        "catégorie"=>"informatique",
        "prix"=>25.90,
        "stock"=>3
    ]
];


//générer automatiquement le tableau HTML suivant :
// Produit    
// Catégorie    
// Prix    
// Stock    
// Disponibilité

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tableau des produits</h1>
    <table>
        <thead>
            <tr>
            <th scope="col">Produit</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Prix</th>
            <th scope="col">Stock</th>
            <th scope="col">Disponibilité</th>
            </tr>
  </thead>
  <tbody>
    <?php foreach ($produits as $prod) : ?>
        <tr>
            <th scope="row"><?= $prod["nom"] ?></th>
            <td><?= $prod["catégorie"] ?></td>
            <td><?= $prod["prix"] ?></td>
            <td><?= $prod["stock"] ?></td>
            <td><?= $prod["stock"]==0?"Rupture":"En stock" ?> </td>
        </tr>
    <?php endforeach ?>
    </tbody>
    </table>

</body>
</html>