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

function addFormAction(PDO $connexion)
{
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion);

    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion);

    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($connexion);

    include_once '../app/models/tagsModel.php';
    $tags = \App\Models\TagsModel\findAll($connexion);

    global $content, $title;
    $title = "Ajouter un book";
    ob_start();
    include_once '../app/views/books/addForm.php';
    $content = ob_get_clean();
}

function addAction(PDO $connexion, array $data = null)
{
    include_once '../app/models/booksModel.php';
    $id = \App\Models\BooksModel\insert($connexion, $data);

    header('Location: ' . BASE_ADMIN_URL . 'books');
}

function deleteAction(PDO $connexion, int $id)
{

    include_once '../app/models/tagsModel.php';
    $return = \App\Models\TagsModel\deleteAllByBookId($connexion, $id);


    include_once '../app/models/usersModel.php';
    $return = \App\Models\UsersModel\deleteAllCollectionsByBookId($connexion, $id);


    include_once '../app/models/usersModel.php';
    $return = \App\Models\UsersModel\deleteAllNotationsByBookId($connexion, $id);


    include_once '../app/models/booksModel.php';
    $return = \App\Models\BooksModel\delete($connexion, $id);


    header('Location: ' . BASE_ADMIN_URL . 'books');
}
