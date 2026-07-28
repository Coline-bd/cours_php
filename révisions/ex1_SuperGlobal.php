<?php
//À la soumission :
// afficher un message de bienvenue ;
// si un champ est vide, afficher un message d'erreur.
if (isset($_POST["submit"])){
    if(empty($_POST["prenom"]) || (empty($_POST["nom"]))){
        $message="Veuillez remplir tous les champs";
    }
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
        <?= $message??"" ?>
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom">
        <label for="nom">Nom : </label>
        <input type="text" name="nom">
        <input type="submit" name="submit" value="envoyer">
    </form>
</body>
</html>