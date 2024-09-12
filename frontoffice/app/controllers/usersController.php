<?php

namespace App\Controllers\UsersController;

use \PDO, App\Models\UsersModel;

include_once '../app/models/usersModel.php';


function loginAction()
{
    global $content, $title;
    $title = 'Se connecter';
    ob_start();
    include '../app/views/users/login.php';
    $content = ob_get_clean();
}

function verificationAction(PDO $connexion, array $data)
{
    // Je vais chercher le user correspondant au name et au password
    $user = UsersModel\findOneByNameAndPassword($connexion, $data);

    if ($user) {
        // on va vers le dashboard du backoffice
        $_SESSION['user'] = $user;
        header('Location: ' . BASE_ADMIN_URL);
    } else {
        // on va vers users/login
        header('Location:' . BASE_PUBLIC_URL . 'users/login');
    }
}
