<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connexion, $limit = 4): array
{
    $sql = "SELECT *
            FROM authors
            ORDER BY created_at DESC
            LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
