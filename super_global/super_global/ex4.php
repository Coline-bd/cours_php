<?php

if (isset($_POST["submit"])){
    //le nom et le prénom contiennent au moins 2 caractères
    if (!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["password"]) && !empty($_POST["passwordConfirm"]) && !empty(["birth"])){
        //prenom et nom corrects
        if (strlen($_POST["firstname"]) && strlen($_POST["lastname"])) {
        //le format du mail est correct
        if (preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/",$_POST["email"])){
            //le mot de passe contient au moins 6 caractères
            if (preg_match("/^.{6,}$/",$_POST["password"])){
                if ($_POST["password"]==$_POST["passwordConfirm"]){
                    //age supérieur à 18
                    $date_courante = new DateTime();
                    $date_naissance= new DateTime($_POST["birth"]);
                    if ($date_courante->diff($date_naissance)->y >=18){
                        echo "Nom : ".$_POST["lastname"];
                        echo "Prénom : ".$_POST["firstname"];
                        echo "Adresse électronique : ".$_POST["email"];
                        echo "Date de naissance : ".$_POST["birth"];
                    }
                    else {
                        echo "Vous êtes mineur";
                    }
                }
                else {
                    echo "Les mots de passe ne sont pas identiques";
                }
            }
            else {
                echo "Le mot de passe doit contenir au moins 6 caractères";
            }
        }
        else{
            echo "Le format du mail est incorrect";
        }
    }
    else {
        echo "le nom et le prénom doivent contenir au moins 2 caractères";
    }
}
else{
    echo "Veuillez remplir tous les champs";
}}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="lastname">Nom : </label>
        <input type="text" name="lastname">
        <label for="firstname">Prénom : </label>
        <input type="text" name="firstname">
        <label for="email">Adresse électronique : </label>
        <input type="email" name="email">
        <label for="password">Mot de passe : </label>
        <input type="password" name="password">
        <label for="passwordConfirm">Confirmation du mot de passe : </label>
        <input type="password" name="passwordConfirm">
        <label for="birth">Date de naissance</label>
        <input type="date" name="birth">
        <input type="submit" name="submit" value="envoyer">
    </form>
</body>
</html>
