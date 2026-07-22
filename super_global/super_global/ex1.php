<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="prixHT">Prix HT</label>
        <input type="number" name="prixHT">
        <label for="quantite">quantite</label>
        <input type="number" name="quantite">
        <label for="tauxTVA">tauxTVA</label>
        <input type="number" name="tauxTVA">
        <input type="submit" name="submit" value="ajouter">
    </form>

    <?php 
    if (isset($_POST["submit"])) {
            //test si les champs sont remplis
            if ($_POST["prixHT"]!="" && $_POST["quantite"]!="" && $_POST["tauxTVA"]!="") {
                if (is_numeric($_POST["prixHT"]) && is_numeric($_POST["quantite"]) && is_numeric($_POST["tauxTVA"])){
                echo "Le prix TTC est égal à : " . $_POST["prixHT"]*(1+$_POST["tauxTVA"]/100)*$_POST["quantite"] ." €" ;
            }
                else {
                    echo "Veuillez rentrer des nombres";
                }
            }
            else{
                echo "Veuillez remplir tous les champs";
            }
        }
    ?>
</body>
</html>