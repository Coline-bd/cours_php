<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="var" placeholder="id de la categorie">
        <input type="submit" value="executer" name="submit">
    </form>
</body>
</html>

<?php


include 'connect_bdd.php';
include '../vendor/autoload.php';
if (isset($_POST["submit"])) {
    // ATTENTION : requête volontairement vulnérable à l'injection SQL (usage pédagogique uniquement)
    $injection = $_POST["var"];
    $sql = "SELECT c.id AS cle, c.category_name AS nom FROM category AS c WHERE c.id = '$injection'";
    //2 se connecter à BDD
    $bdd = connect_bdd();

    //3 exécution de la requête vulnérable
    $request = $bdd->query($sql);
}

/* //1 écrire une requête
$sql = "SELECT c.id AS cle, c.category_name AS nom FROM category AS c WHERE c.id = '$var'";

//2 se connecter à BDD
$bdd = connect_bdd();

//3 préparation de la requête
$request = $bdd->query($sql); */



