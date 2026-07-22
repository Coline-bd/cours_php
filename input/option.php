<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="liste">Choisir une valeur</label>
            <select name="liste[]" multiple>
                <option value="">pas de choix</option>
                <option value="ok">ok</option>
                <option value="?">ne sais pas</option>
                <option value="no">non</option>
            </select>
        </fieldset>
        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>

<?php

if (isset($_POST["submit"])) {
    if (!empty($_POST["liste"])) {
        foreach ($_POST["liste"] as $value) {
            # code...
            echo "valeur : "  . $value . "<br>";
        }
    }
}