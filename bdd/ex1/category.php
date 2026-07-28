
<?php 


function getAllCategories():array{
    $bdd = bdd_connect();
    $sql="SELECT c.id, c.category_name FROM category as c";
    $request = $bdd->prepare($sql);
    $request->execute();
    $data = $request-> fetchAll(PDO::FETCH_ASSOC);
    return $data;
}