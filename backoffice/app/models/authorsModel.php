<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT *
            FROM authors
            ORDER BY firstname ASC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
