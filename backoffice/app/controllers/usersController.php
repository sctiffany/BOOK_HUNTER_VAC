<?php

namespace App\Controllers\UsersController;

use \PDO;

function indexAction(PDO $connexion)
{
    include_once '../app/models/usersModel.php';
    $users = \App\Models\UsersModel\findAll($connexion);

    global $content, $title;
    $title = "Tous les users";
    ob_start();
    include_once '../app/views/users/index.php';
    $content = ob_get_clean();
}
