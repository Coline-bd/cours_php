<?php

include "bdd_connect.php";
$sql1= "SELECT s.id,s.firstname,s.lastname FROM seller as s";

$bdd =bdd_connect();

$request=$bdd ->prepare($sql1);

$request->execute();

$data = $request->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $value){
    echo "id : " .$value["id"]. " prénom : ".$value["firstname"]." nom : ".$value["lastname"]."<Br>";
    }