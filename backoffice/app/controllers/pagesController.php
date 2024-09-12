<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion)
{
    global $content, $title;
    $title = "Homepage du backoffice";
    ob_start();
    include_once '../app/views/pages/home.php';
    $content = ob_get_clean();
}
