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

function addFormAction()
{
    global $content, $title;
    $title = "Ajouter une catégorie";
    ob_start();
    include_once '../app/views/categories/addForm.php';
    $content = ob_get_clean();
}

function addAction(PDO $connexion, array $data = null)
{
    include_once '../app/models/categoriesModel.php';
    $id = \App\Models\CategoriesModel\insert($connexion, $data);

    header('Location: ' . BASE_ADMIN_URL . '?categories');
}

function deleteAction(PDO $connexion, int $id)
{
    include_once '../app/models/categoriesModel.php';
    $return = \App\Models\CategoriesModel\delete($connexion, $id);

    header('Location: ' . BASE_ADMIN_URL . '?categories');
}
