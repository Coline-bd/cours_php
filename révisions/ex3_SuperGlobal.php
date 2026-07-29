<?php

// tous les champs sont remplis ;
// l'email est valide (filter_var) ;
// le mot de passe possède au moins 8 caractères.

// Si tout est valide :
// Inscription réussie !
// Sinon afficher toutes les erreurs.

if(isset($_POST["submit"])){
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
        if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            if(strlen($_POST["password"])>=8){
                $message = "Inscrition réussie";
            }
            else {
                $message = "Le mot de passe doit contenir au moins 8 caractères";
            }
    }
    else {
            $message = "Le format du mail est invalide";
        }
    }
    else {
        $message ="Veuillez remplir tous les champs";
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
        <label for="nom">Nom : </label>
        <input type="text" name="nom">
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom">
        <label for="email">Email : </label>
        <input type="email" name="email">
        <label for="password">Mot de passe : </label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="envoyer">
    </form>
</body>
</html>
