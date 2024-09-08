<?php

use App\Controllers\UsersController;

include '../app/controllers/usersController.php';

// Si on passe par ici, on est certains qu'il existe
switch ($_GET['users']):
    case 'verification':
        UsersController\verificationAction($connexion, [
            'name' => $_POST['name'],
            'password' => $_POST['password']
        ]);
        break;
    default:
        // ACTION: index
        UsersController\loginAction();
        break;
endswitch;
