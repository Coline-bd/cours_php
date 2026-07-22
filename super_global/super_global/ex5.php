<?php
    if (isset($_POST["submit"])){
        if (!empty($_POST["note"])){
            if ($_POST["note"]>=1 && $_POST["note"]<=5){
                if (isset($_POST["cgu"])){
                    if (strlen($_POST["comment"])<500){
                        echo "Note : ".$_POST["note"];
                        echo $_POST["comment"];
                    }
                    else {
                        echo "commentaire trop long";
                    }
                }
                else {
                    echo "Veuillez accepter les CGU";
                }
            }
            else {
                echo "Veuillez entrer une note entre 1 et 5";
            }
        }
    }   else {
        echo "Veuillez écrire une note";
    }

?>

<!-- - input de type texte : le nom du participant ;
- input de type texte : une note comprise entre 1 et 5 ;
- text area : un commentaire facultatif.
- input de type checkbox (une case à cocher) : accepter les conditions d'utilisation (obligatoire)

2 Au clic sur le bouton submit vous allez exécuter le traitement suivant :
vérifier que les champs obligatoires sont remplis,
vérifier que la note soit comprise entre 1 et 5 ;
vérifier que la checkbox soit cochée,
vérifier que le commentaire soit limité à 500 caractères.
3 Afficher le résumé que ce que l'utilisateur à renseigné.  -->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="note">Note : </label>
        <input type="text" name="note">
        <label for="comment">Commentaire : </label>
        <textarea maxlength="500" name="comment" id="comment"></textarea>
        <input type="checkbox" name="cgu">
        <label for="cgu">J'accepte les conditions d'uitlisation </label>
        <input type="submit" name="submit" value="envoyer">
    </form>
</body>
</html>
