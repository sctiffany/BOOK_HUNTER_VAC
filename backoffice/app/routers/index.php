<?php
if (isset($_GET['books'])) {
    include_once '../app/controllers/booksController.php';
    App\Controllers\BooksController\indexAction($connexion);
} elseif (isset($_GET['categories'])) {
    include_once '../app/controllers/categoriesController.php';
    App\Controllers\CategoriesController\indexAction($connexion);
} elseif (isset($_GET['tags'])) {
    include_once '../app/controllers/tagsController.php';
    App\Controllers\TagsController\indexAction($connexion);
} elseif (isset($_GET['users'])) {
    include_once '../app/controllers/usersController.php';
    App\Controllers\UsersController\indexAction($connexion);
}


// Route par défaut
else {
    include_once '../app/controllers/pagesController.php';
    App\Controllers\PagesController\homeAction($connexion);
}
