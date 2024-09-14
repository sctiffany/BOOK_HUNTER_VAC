<?php

use App\Controllers\UsersController;

include '../app/controllers/usersController.php';

// Si on passe par ici, on est certains qu'il existe
switch ($_GET['users']):
    default:
        // ACTION: index
        UsersController\indexAction($connexion);
        break;
endswitch;
