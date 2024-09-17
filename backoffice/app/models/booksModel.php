<?php

namespace App\Models\BooksModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT *, b.id AS bookID
            FROM books b
            JOIN authors a ON b.author_id = a.id
            ORDER BY b.title ASC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id): array
{
    $sql = "SELECT *
            FROM books b
            JOIN authors a ON b.author_id = a.id
            WHERE b.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}

function insert(PDO $connexion, array $data = null)
{
    $sql = "INSERT INTO books
            SET isbn = :isbn,
                title = :title,
                resume = :resume,
                publicated_at = :publicated_at,
                created_at = NOW(),
                author_id = :author_id,
                category_id = :category_id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':isbn', $data['isbn'], PDO::PARAM_STR);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':resume', $data['resume'], PDO::PARAM_STR);
    $rs->bindValue(':publicated_at', $data['publicated_at'], PDO::PARAM_STR);
    $rs->bindValue(':author_id', $data['author_id'], PDO::PARAM_INT);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
    $rs->execute();
    return $connexion->lastInsertId();
}

function delete(PDO $connexion, int $id)
{
    $sql = "DELETE FROM books
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    return intval($rs->execute());
    // intval = forcer une réponse en booléen
}
