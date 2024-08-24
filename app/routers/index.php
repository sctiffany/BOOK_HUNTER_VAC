<?php
// ROUTER PRINCIPAL

// ROUTE DES BOOKS
// PATTERN : /?books
if (isset($_GET['books'])) {
    include '../app/routers/books.php';
}

// ROUTE DES AUTHORS
// PATTERN : /?authors
// CTRL : authorsController
// ACTION : indexAction
elseif (isset($_GET['authors'])) {
    include '../app/controllers/authorsController.php';
    \App\Controllers\AuthorsController\indexAction($connexion);
}

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: pagesController - il s'occupe des différentes pages particulières
// ACTION: homeAction
else {
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
}
