<?php

use App\Controllers\AuthorsController;

include '../app/controllers/authorsController.php';

// Si on passe par ici, on est certains qu'il existe
switch ($_GET['authors']):
    case 'show':
        // ACTION: show
        AuthorsController\showAction($connexion, $_GET['id']);
        break;
    default:
        // ACTION: index
        AuthorsController\indexAction($connexion);
        break;
endswitch;
