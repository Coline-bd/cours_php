<?php
function bdd_connect() :PDO{
    return new PDO(
        'mysql:host=localhost:3306;dbname=ticket',
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