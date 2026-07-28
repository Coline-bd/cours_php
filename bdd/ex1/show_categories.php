<?php
include "bdd_connect.php";
include "category.php";


$data = getAllCategories();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="categories" id="categories">
            <?php foreach($data as $value){
    echo '<option value="'.$value["id"].'">' .$value["category_name"].'</option>';
}?>
        </select>
    </form>
</body>
</html>