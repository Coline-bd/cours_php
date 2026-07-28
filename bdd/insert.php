<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter une categorie</h1>
    <form action="" method="post">
        <input type="text" name="category_name">
        <input type="submit" value="ajouter" name="submit">
    </form>

</body>
</html>

<?php

//importer la connexion à la BDD
include 'connect_bdd.php';

if (isset($_POST["submit"])) {

    //Version avec bindValue et ?
    //1 écrire la requête
    $sql = "INSERT INTO category(category_name) VALUE(?)";

    //2 connecter à la BDD
    $bdd = connect_bdd();

    //3 préparer la requête
    $request = $bdd->prepare($sql);

    //4 Assigner les paramètres
    $request->bindValue(1,sanitize($_POST["category_name"]), PDO::PARAM_STR );

    //5 Exécuter la requête
    $request->execute();
}

     //Version avec  ? et execute
    //1 écrire la requête
    $sql = "INSERT INTO category(category_name) VALUE(?)";

    //2 connecter à la BDD
    $bdd = connect_bdd();

    //3 préparer la requête
    $request = $bdd->prepare($sql);

    //5 Exécuter la requête
    $request->execute(
        [
            sanitize($_POST["category_name"])
        ]);

     //Version avec etiquette et execute
     //1 écrire la requête
    $sql = "INSERT INTO category(category_name) VALUE(:name)";

    //2 connecter à la BDD
    $bdd = connect_bdd();

    //3 préparer la requête
    $request = $bdd->prepare($sql);

    //5 Exécuter la requête
    $request->execute(
        [
            ":name"=>sanitize($_POST["category_name"])
        ]);

     //Version avec bindValue et etiquette
            //1 écrire la requête
    $sql = "INSERT INTO category(category_name) VALUE(:name)";

    //2 connecter à la BDD
    $bdd = connect_bdd();

    //3 préparer la requête
    $request = $bdd->prepare($sql);

    //4 Assigner les paramètres
    $request->bindValue(':name',sanitize($_POST["category_name"]), PDO::PARAM_STR );

    //5 Exécuter la requête
    $request->execute();