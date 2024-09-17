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

function deleteAllCollectionsByBookId(PDO $connexion, int $id)
{
    $sql = "DELETE FROM users_collections
            WHERE book_id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    return intval($rs->execute());
}

function deleteAllNotationsByBookId(PDO $connexion, int $id)
{
    $sql = "DELETE FROM users_notations
            WHERE book_id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    return intval($rs->execute());
}
