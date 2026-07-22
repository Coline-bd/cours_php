<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="email">email</label>
        <input type="email" name="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="ajouter">
    </form>

    <?php 
    $email="admin@test.com";
    $password="php2026";
    if (isset($_POST["submit"])) {
            //test si les champs sont remplis
            if (!empty($_POST["email"]) && !empty($_POST["password"])) {
                //si le format de mail est correct
                if (preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/",$_POST["email"])){
                    //si le mail est incorrect
                    if ($_POST["email"]==$email){
                        //si le mot de passe est correct
                        if ($_POST["password"]==$password){
                            echo "Connexion réussie";
                        }
                        else {
                            echo "Mot de passe incorrect";
                        }
                    }
                    else {
                        echo "Adresse email incorrecte <Br>";
                    }
                }
                //si le format de mail est incorrect
                else {
                    echo "format de mail incorrect";
                }
            }
            else {
                echo "Veuillez remplir les champs";
            }
        }
    ?>
</body>
</html>