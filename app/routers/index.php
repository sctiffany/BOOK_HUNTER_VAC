<?php
// ROUTER PRINCIPAL

// ROUTE DES BOOKS
// PATTERN : /?books
// CTRL : booksController
// ACTION : indexAction
if (isset($_GET['books'])) {
    include '../app/controllers/booksController.php';
    \App\Controllers\BooksController\indexAction($connexion);
}

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: pagesController - il s'occupe des différentes pages particulières
// ACTION: homeAction
else {
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
}
