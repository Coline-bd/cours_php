<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>choisir une option</legend>
            <input type="radio" name="opt" value="1" checked>
            <input type="radio" name="opt" value="2">
            <input type="radio" name="opt" value="3">

            <legend>choisir une option</legend>
            <input type="radio" name="opt2" value="1" checked>
            <input type="radio" name="opt2" value="2">
            <input type="radio" name="opt2" value="3">
        </fieldset>
        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>

<?php

if (isset($_POST["submit"])) {
    echo $_POST["opt"];
}