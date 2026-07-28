<?php 
include "bdd_connect.php";
include "product.php";
include "category.php";


//chercher les catégories qui existent
$categories = getAllCategories();


if (isset($_POST["submit"])){
    echo add_product();
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="product_name">Nom du produit : </label>
    <input type="text" name="product_name">
    <label for="price">Prix : </label>
    <input type="text" name="price">
    <label for="description">Description : </label>
    <input type="text" name="description">
    <select name="category" id="category">
        <?php foreach($categories as $value){
    echo '<option value="'.$value["id"].'">' .$value["category_name"].'</option>';
}?>
    </select>
    <input type="submit" name="submit" value="ajouter">

    </form>
</body>
</html>