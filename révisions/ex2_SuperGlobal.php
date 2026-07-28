<?php

// Au clic sur Calculer, afficher le résultat.
// Bonus :
// gérer la division par zéro.

if(isset($_POST["submit"])){
    if(!empty($_POST["nombre1"]) && !empty($_POST["nombre2"]) && !empty($_POST["operation"])){
        switch($_POST["operation"]){
            case"+":
                $resultat=$_POST["nombre1"]+$_POST["nombre2"];
                echo "résultat : ".$resultat;
                break;
            case"-":
                $resultat=$_POST["nombre1"]-$_POST["nombre2"];
                echo "résultat : ".$resultat;
                break;
            case"*":
                $resultat=$_POST["nombre1"]*$_POST["nombre2"];
                echo "résultat : ".$resultat;
                break;
            default:
                $resultat=$_POST["nombre1"]/$_POST["nombre2"];
                echo "résultat : ".$resultat;
        }
    }
    else{
        echo "Veuillez remplir les champs";
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
    <label for="nombre1">Nombre 1 : </label>
        <input type="text" name="nombre1">
        <label for="nombre2">Nombre 2 : </label>
        <input type="text" name="nombre2">
        <select name="operation" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" name="submit" value="envoyer">
    </form>
</body>
</html>