<?php

use App\Controllers\BooksController;

include '../app/controllers/booksController.php';

// Si on passe par ici, on est certains qu'il existe
switch ($_GET['books']):
    case 'show':
        // ACTION: show
        BooksController\showAction($connexion, $_GET['id']);
        break;
    default:
        // ACTION: index
        BooksController\indexAction($connexion);
        break;
endswitch;
