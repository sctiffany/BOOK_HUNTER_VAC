<?php

use App\Controllers\CategoriesController;

include '../app/controllers/categoriesController.php';

// Si on passe par ici, on est certains qu'il existe
switch ($_GET['categories']):
    default:
        // ACTION: index
        CategoriesController\indexAction($connexion);
        break;
endswitch;
