<?php

namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT *
            FROM categories 
            ORDER BY name ASC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function insert(PDO $connexion, array $data = null)
{
    $sql = "INSERT INTO categories
            SET name = :name,
                created_at = NOW();";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':name', $data['name'], PDO::PARAM_STR);
    $rs->execute();
    return $connexion->lastInsertId();
}

function delete(PDO $connexion, int $id)
{
    $sql = "DELETE FROM categories
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    return intval($rs->execute());
    // intval = forcer une réponse en booléen
}
