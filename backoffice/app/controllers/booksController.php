<?php

namespace App\Controllers\BooksController;

use \PDO;

function indexAction(PDO $connexion)
{
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion);

    global $content, $title;
    $title = "Tous les books";
    ob_start();
    include_once '../app/views/books/index.php';
    $content = ob_get_clean();
}
