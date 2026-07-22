<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prix TTC</h1>
    <form action="" method="post">
        <label for="prix_ht">saisir le prix HT</label>
        <input type="text" name="prix_ht">
        <label for="qtx">saisir la quantite</label>
        <input type="number" name="qtx">
        <label for="tva">saisir le taux de TVA ex : 20 pour 20%</label>
        <input type="number" name="tva">
        <input type="submit" value="Calculer" name="submit">
    </form>

    <?php
        // Test si le formulaire est soumis
        if (isset($_POST["submit"])) {
            //test si les champs sont remplis
            if ($_POST["prix_ht"] != "" && $_POST["qtx"] != "" && $_POST["tva"] !="") {
                //test si les 3 champs contiennent des nombres
                if (is_numeric($_POST["prix_ht"]) && is_numeric($_POST["qtx"]) && is_numeric($_POST["tva"])) {
                    $resultat = $_POST["prix_ht"] * $_POST["qtx"] * ($_POST["tva"] / 100 + 1);
                    echo "Le prix TTC est égal à : " . $resultat.  "€."; 
                } else {
                    echo "Veuillez renseigner des nombres";
                }
            } else {
                echo "Veuillez remplir tous les champs du formulaire";
            }
        }
    ?>
</body>
</html>
