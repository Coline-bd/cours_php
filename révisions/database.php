<?php


function connect_bdd() : PDO {
       return new PDO(
        'mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME2,
        BDD_USERNAME,
        BDD_PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}

function get_all_student() : array{
    $bdd=connect_bdd();
    $sql="SELECT id,firstname,lastname,age FROM student";
    $request=$bdd->prepare($sql);
    $request->execute();
    $data=$request->fetchAll(pdo::FETCH_ASSOC);
    return $data;
}

function create_student(array $tab):void{
    $bdd=connect_bdd();
    $sql="INSERT INTO student(lastname,firstname,age) VALUE (?,?,?)";
    $request=$bdd->prepare($sql);
    $request->bindValue(1,$tab["lastname"],pdo::PARAM_STR);
    $request->bindValue(2,$tab["firstname"],pdo::PARAM_STR);
    $request->bindValue(3,$tab["age"],pdo::PARAM_INT);
    $request->execute();
}

function is_student_exists(string $name):array{
    $bdd=connect_bdd();
    $sql="SELECT lastname,firstname,age FROM student where lastname like ?";
    $request=$bdd->prepare($sql);
    $request->bindValue(1,$name,pdo::PARAM_STR);
    $request->execute();
    $data=$request->fetchAll(pdo::FETCH_ASSOC);
    return $data;
}

function delete_student(int $id):void {
    $bdd=connect_bdd();
    $sql="DELETE FROM student WHERE id=?";
    $request=$bdd->prepare($sql);
    $request->bindValue(1,$id,pdo::PARAM_INT);
    $request-> execute();
}

function create_category(string $name):void {
    $bdd=connect_bdd();
    $sql="INSERT INTO category(category_name) VALUE (?)";
    $request=$bdd->prepare($sql);
    $request->bindValue(1,$name,pdo::PARAM_STR);
    $request->execute();
}

function get_all_category():array{
    $bdd=connect_bdd();
    $sql="SELECT category_name FROM category";
    $request=$bdd->prepare($sql);
    $request->execute();
    $data=$request->fetchAll(pdo::FETCH_ASSOC);
    return $data;
}