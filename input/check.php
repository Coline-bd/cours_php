<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération des checkBox cochées :</title>
</head>
<body>
    <h4>Cocher une ou plusieurs checkbox :</h4>
    <!--Formulaire HTML-->
    <form action="" method="post">
        <p><input type="checkbox" name="box[]" value="1"/>1</p>
        <p><input type="checkbox" name="box[]" value="2"/>2</p>
        <p><input type="checkbox" name="box[]" value="3"/>3</p>
        <p><input type="checkbox" name="box[]" value="4"/>4</p>
        <p><input type="checkbox" name="box[]" value="5"/>5</p>
        <p><input type="submit" value="Récupérer" name="submit"></p>
    </form>
    <h4>Liste des checkbox cochées :</h4>
    <!--Code PHP-->
    <?php
        if (isset($_POST["submit"])) {
            foreach ($_POST["box"] as $value) {
                echo $value . "<br>";
            }
        }
    ?>
</body>
</html>