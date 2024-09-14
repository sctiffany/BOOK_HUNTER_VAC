<?php

use App\Controllers\TagsController;

include '../app/controllers/tagsController.php';

// Si on passe par ici, on est certains qu'il existe
switch ($_GET['tags']):
    default:
        // ACTION: index
        TagsController\indexAction($connexion);
        break;
endswitch;
