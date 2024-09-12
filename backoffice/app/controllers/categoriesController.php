<?php

namespace App\Controllers\CategoriesController;

use \PDO;

function indexAction(PDO $connexion)
{
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($connexion);

    global $content, $title;
    $title = "Toutes les catégories";
    ob_start();
    include_once '../app/views/categories/index.php';
    $content = ob_get_clean();
}
