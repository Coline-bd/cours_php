<?php

$calcul = "";
if (isset($_POST["submit"])) {
    //test si les champs sont remplis
    if ($_POST["nbr1"] != "" && $_POST["nbr2"] != "" && $_POST["operateur"] != "") {
        //test si les 2 champs sont bien des nombres
        if (is_numeric($_POST["nbr1"]) && is_numeric($_POST["nbr2"])) {
            $calcul = calculatrice($_POST["nbr1"], $_POST["nbr2"], $_POST["operateur"]);
        } else {
            $calcul = "Veuillez saisir des nombres valides";
        } 
    } else {
        $calcul =  "Veuillez remplir les 3 champs";
    } 
}

function calculatrice(float|int $nbr1, float|int $nbr2, string $operateur): string
{
    $resultat = "";
    switch ($operateur) {
        case '+':
            $resultat = $nbr1 + $nbr2;
            break;
        case '-':
            $resultat = $nbr1 - $nbr2;
            break;
        case '*':
            $resultat = $nbr1 * $nbr2;
            break;
        case '/':
            if ($nbr2 == 0) {
                $resultat = "Division par 0 impossible";
            } else {
                $resultat = $nbr1 / $nbr2;
            }
            break;
        default:
            $resultat = "L'opération n'existe pas";
            break;
    }
    return $nbr1 . " " . $operateur . " " . $nbr2  . " = " . $resultat;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>

<body>
    <h1>Calculatrice</h1>
    <form action="" method="post">
        <label for="nbr1">Saisir un nombre</label>
        <input type="text" name="nbr1">
        <label for="nbr2">Saisir un nombre</label>
        <input type="text" name="nbr2">
        <label for="operateur">Saisir un oeprateur : + ,- , *,/</label>
        <input type="text" name="operateur">
        <input type="submit" value="calculer" name="submit">
    </form>
    <p><?= $calcul ?? "" ?></p>
</body>

</html>
