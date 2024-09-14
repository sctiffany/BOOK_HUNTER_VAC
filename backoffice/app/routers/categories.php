<?php

use App\Controllers\CategoriesController;

include '../app/controllers/categoriesController.php';

// Si on passe par ici, on est certains qu'il existe
switch ($_GET['categories']):
    case 'addForm':
        CategoriesController\addFormAction();
        break;
    case 'add':
        CategoriesController\addAction($connexion, [
            'name' => $_POST['name']
        ]);
        break;
    case 'delete':
        CategoriesController\deleteAction($connexion, $_GET['id']);
        break;
    default:
        // ACTION: index
        CategoriesController\indexAction($connexion);
        break;
endswitch;
