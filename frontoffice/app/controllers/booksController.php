<?php

namespace App\Controllers\BooksController;

use \PDO;

function indexAction(PDO $connexion)
{
    // Je vais demander des données aux modèles
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion, 6);

    global $content, $title;
    $title = "Catalogue";
    ob_start();
    include '../app/views/books/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id)
{
    include_once '../app/models/booksModel.php';
    $book = \App\Models\BooksModel\findOneById($connexion, $id);

    global $content, $title;
    $title = $book['title'];
    ob_start();
    include '../app/views/books/show.php';
    $content = ob_get_clean();
}
