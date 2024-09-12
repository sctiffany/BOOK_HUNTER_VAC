<?php

namespace App\Controllers\TagsController;

use \PDO;

function indexAction(PDO $connexion)
{
    include_once '../app/models/tagsModel.php';
    $tags = \App\Models\TagsModel\findAll($connexion);

    global $content, $title;
    $title = "Tous les tags";
    ob_start();
    include_once '../app/views/tags/index.php';
    $content = ob_get_clean();
}
