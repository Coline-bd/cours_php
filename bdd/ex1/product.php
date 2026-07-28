<?php 


function is_product_exist(string $name): bool{
    $sql ="SELECT p.product_name FROM product as p WHERE p.product_name=?";
    
    try{
    $bdd =bdd_connect();
    $request=$bdd ->prepare($sql);
    $request->bindValue(1,$name,pdo::PARAM_STR);
    $request->execute();
    $result=$request->fetch(pdo::FETCH_ASSOC);
    if (empty($result)){
        return false;
    } else{
        return true;
    }
    }
    catch (Exception $e){
        echo $e->getMessage();
        return false;
    }
}

function add_product() :string{

    if (!empty($_POST["product_name"]) && !empty($_POST["price"]) && !empty($_POST["description"])){
        $product_name=sanitize($_POST["product_name"]);
        $price=sanitize($_POST["price"]);
        $description=sanitize($_POST["description"]);
        $category_id=sanitize($_POST["category"]);
        if (!is_product_exist("$product_name")){
            try{
            $bdd= bdd_connect();
            $sql= "INSERT INTO product(product_name,price,`description`,category_id) VALUE (?,?,?,?) ";
            $request = $bdd->prepare($sql);
            $request->bindValue(1,$product_name,PDO::PARAM_STR);
            $request->bindValue(2,$price);
            $request->bindValue(3,$description,PDO::PARAM_STR);
            $request->bindValue(4,$category_id);
            $request->execute();
            return "Le produit ". $product_name." a bien été ajouté";
            }
            catch(Exception $e){
                echo $e->getMessage();
                return "erreur";
            }
        }
        else {
            return "Le produit existe déjà";
        }
    }
    return "Veuillez remplir tous les champs";
}


