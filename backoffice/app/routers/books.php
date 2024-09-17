<?php

use App\Controllers\BooksController;

include '../app/controllers/booksController.php';

// Si on passe par ici, on est certains qu'il existe
switch ($_GET['books']):
    case 'addForm':
        BooksController\addFormAction($connexion);
        break;
    case 'add':
        BooksController\addAction($connexion, [
            'isbn' => $_POST['isbn'],
            'title' => $_POST['title'],
            'resume' => $_POST['resume'],
            'publicated_at' => $_POST['publicated_at'],
            'author_id' => $_POST['author_id'],
            'category_id' => $_POST['category_id'],
        ]);
        break;
    case 'delete':
        BooksController\deleteAction($connexion, $_GET['id']);
        break;
    default:
        // ACTION: index
        BooksController\indexAction($connexion);
        break;
endswitch;
