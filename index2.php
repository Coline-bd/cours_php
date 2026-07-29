<?php

include "database.php";

//imports des variables d'environnements
include 'env.php';

$bdd=connect_bdd();
if(isset($bdd)){
    echo "Connexion réussie";
}
else {
    echo "Connexion échouée";
}

$students=get_all_student();

//Ajouter un étudiant
if(isset($_POST["submit"])){
    if(!empty($_POST["lastname"]) && !empty($_POST["firstname"]) && !empty($_POST["age"])){
        if(is_numeric($_POST["age"])){
            $student=[
            "lastname"=>$_POST["lastname"],
            "firstname" => $_POST["firstname"],
            "age" => $_POST["age"]
        ];
        create_student($student);
        $createMessage="L'étudiant a bien été ajouté";
        }
        else {
            $createMessage="L'age rentré est incorrect";
        }
    }
    else $createMessage="Veuillez remplir tous les champs";
}

//Rechercher un étudiant
$results=[];
if(isset($_POST["search"])){
    if(!empty($_POST["name"])){
        $results=is_student_exists($_POST["name"]);
    }
    else{
        $searchMessage="Veuillez remplir le champ";
    }
}

//Supprimer un étudiant
if(isset($_POST["delete"])){
    if(isset($_POST["studentList"])){
        delete_student($_POST["studentList"]);
        $deleteMessage= "L'étudiant a bien été supprimé";
    }
    else{
        $deleteMessage="Veuillez choisir un étudiant";
    }
}

//Ajouter une catégorie
if(isset($_POST["add"])){
    if(!empty($_POST["category_name"])){
        create_category($_POST["category_name"]);
        $addCatMessage="La catégorie ".$_POST["category_name"]." a bien été ajoutée";
    }
    else {
        $addCatMessage="Veuillez remplir le nom";
    }
}

//Afficher les catégories
$categories=get_all_category();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Etudiants</h1>
    <h2>Ajouter un étudiant</h2>
    <form action="" method="post">
        <label for="lastname">Nom : </label>
        <input type="text" name="lastname">
        <label for="firstname">Prénom : </label>
        <input type="text" name="firstname">
        <label for="age">Age : </label>
        <input type="number" name="age">
        <input type="submit" name="submit" value="envoyer">
    </form>
    <p><?= $createMessage??"" ?> </p>
    <h2>Rechercher un étudiant</h2>
    <form action="" method="post">
        <label for="name">Nom : </label>
        <input type="text" name="name">
        <input type="submit" name="search" value="rechercher">
    </form>
    <?=  $searchMessage ?? "" ?>
    <?php if ($results) :?>
    <p>Résultat de la recherche :</p>
    <?php endif ?>
    <ul>
        <?php foreach($results as $student) : ?>
            <li> <?= $student["lastname"] ?>, <?= $student["firstname"]?>, <?= $student["age"]?></li>
        <?php endforeach ?>
    </ul>
    <h2>Supprimer un étudiant</h2>
    <form action="" method="post">
        <label for="studentList">Sélectionnez un étudiant</label>
        <select name="studentList">
            <?php foreach($students as $student): ?>
            <option value=<?= $student["id"] ?>> <?= $student["lastname"]?> <?= $student["firstname"]?></option>
            <?php endforeach ?>
        </select>
        <input type="submit" name="delete" value="supprimer">
    </form>
    <?=  $deleteMessage ?? "" ?>
    <h2>Tableau des étudiants</h2>
    <table>
        <thead>
            <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student) : ?>
            <tr>
                <td> <?= $student["firstname"] ?> </td>
                <td> <?= $student["lastname"] ?> </td>
                <td> <?= $student["age"] ?> </td>
            </tr>
            <?php endforeach ?>
        </tbody>
  <table>
    <h2>Catégories</h2>
    <p>Ajouter une catégorie</p>
    <form action="" method="post">
        <label for="category_name">Nom de la catégorie : </label>
        <input type="text" name="category_name">
        <input type="submit" name="add" value="Ajouter">
    </form>
    <?= $addCatMessage ?? "" ?>
    <h3>Liste des catégories</h3>
    <ul>
        <?php foreach($categories as $category): ?>
        <li><?= $category["category_name"] ?></li> 
        <?php endforeach ?>
    </ul>
</body>
</html>