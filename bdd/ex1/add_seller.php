<?php

include "bdd_connect.php";

if (isset($_POST["submit"])){
    $firstname=sanitize($_POST["firstname"]);
    $lastname=sanitize($_POST["lastname"]);

    $sql ="INSERT INTO seller(firstname,lastname) VALUE (?,?) ";

    $bdd = bdd_connect();

    $request = $bdd->prepare($sql);

    $request->bindValue(1,$firstname,pdo::PARAM_STR);
    $request->bindValue(2,$lastname,pdo::PARAM_STR);
    $request->execute();
    echo "Le vendeur : $firstname $lastname a été ajouté";

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="submit" name="submit" value="envoyer">
    </form>
</body>
</html>