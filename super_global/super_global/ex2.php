<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nbr1">Saisir un nombre</label>
        <input type="text" name="nbr1">
        <label for="nbr2">Saisir un nombre</label>
        <input type="text" name="nbr2">
        <label for="operateur">saisir un operateur mathématique : add, sous, multi, div</label>
        <input type="text" name="operateur">
        <input type="submit" name="submit" value="ajouter">
    </form>

    <?php 
    if (isset($_POST["submit"])) {
            //test si les champs sont remplis
            if ($_POST["nbr1"]!=="" && $_POST["nbr2"]!=="" && !empty($_POST["operateur"])) {
                //si les nombres sont bien des nombres
                if (is_numeric($_POST["nbr1"]) && is_numeric($_POST["nbr2"])){
                    if ($_POST["operateur"]=="add"){
                    echo $_POST["nbr1"]." + ".$_POST["nbr2"]."  = ". $_POST["nbr1"]+$_POST["nbr2"] ;
                    }
                    else if ($_POST["operateur"]=="sous"){
                    echo $_POST["nbr1"]." - ".$_POST["nbr2"]." = ". $_POST["nbr1"]-$_POST["nbr2"] ;
                    }
                    else if ($_POST["operateur"]=="multi"){
                    echo $_POST["nbr1"]." x ".$_POST["nbr2"]." = ". $_POST["nbr1"]*$_POST["nbr2"] ;
                    }
                    else if ($_POST["operateur"]=="div"){
                        if ($_POST["nbr2"]!=="0"){
                            echo $_POST["nbr1"]." / ".$_POST["nbr2"]." = ". $_POST["nbr1"]/$_POST["nbr2"] ;
                        }
                        else {
                            echo "le nombre ne doit pas être nul";
                        }
                    }
                    else {
                        echo "L'opérateur est incorrect";
                    }
                    }
                else {
                    echo "Veuillez saisir des nombres";
                }
            }
    }
   
    ?>
</body>
</html>