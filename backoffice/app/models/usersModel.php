<?php

namespace App\Models\UsersModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT *
            FROM users 
            ORDER BY id ASC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
