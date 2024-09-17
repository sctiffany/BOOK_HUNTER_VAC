<?php
if (isset($_GET['books'])) {
    include '../app/routers/books.php';
} elseif (isset($_GET['categories'])) {
    include '../app/routers/categories.php';
} elseif (isset($_GET['tags'])) {
    include '../app/routers/tags.php';
} elseif (isset($_GET['users'])) {
    include '../app/routers/users.php';
}


// Route par défaut
else {
    include_once '../app/controllers/pagesController.php';
    App\Controllers\PagesController\dashboardAction();
}
