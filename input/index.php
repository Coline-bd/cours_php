<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <input type="text" name="texte">
            <label for="ck-ok">ok</label>
            <input type="checkbox" name="ck-ok">
            <label for="ck">ne sais pas</label>
            <input type="checkbox" name="ck">
            <label for="ck-no">non </label>
            <input type="checkbox" name="ck-no">
        </fieldset>
        <input type="submit" value="test" name="submit">
    </form>
</body>
</html>

<?php

if (isset($_POST["submit"])) {
    if (isset($_POST["ck-ok"])) {
        echo "Vous étes d'accord<br>";
    }
    if (isset($_POST["ck"])) {
        echo "Vous ne savais pas<br>";
    }
   if (isset($_POST["ck-no"])) {
        echo "Vous ne savais pas<br>";
    }
   
}