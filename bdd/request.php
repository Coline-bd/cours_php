<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <input type="text" name="id">
        <input type="submit" value="chercher" name="submit">
    </form>
</body>

</html>


<?php

include 'connect_bdd.php';
include '../vendor/autoload.php';

    //1 écrire une requête
    
    $sql = "SELECT c.id, c.category_name  FROM category AS c ORDER BY c.id ASC";

    //2 se connecter à BDD
    $bdd = connect_bdd();

    //3 préparation de la requête
    $request = $bdd->prepare($sql);

    //assignation des paramètres
 /*    $request->bindValue(1, 2, PDO::PARAM_INT); */

    //4 exécter la requête
    $request->execute();

    //5 récupérer la réponse
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $category) {
        # code...
        echo "Id " . $category["id"] . " nom : " . $category["category_name"] . "<br>";
    }