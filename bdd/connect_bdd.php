<?php

function connect_bdd() : PDO {
       return new PDO(
        'mysql:host=localhost:3306;dbname=receipt',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}


function sanitize(string $str) : string {
    return htmlentities(
        htmlspecialchars(
            strip_tags(
                trim($str)
            )
        )
    );
}

$str = "";
$str = trim($str);

$str = strip_tags($str);

$str = htmlspecialchars($str);

$str = htmlentities($str);