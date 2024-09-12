<?php
// ROUTER PRINCIPAL

// ROUTE DES BOOKS
// PATTERN : /?books
if (isset($_GET['books'])) {
    include '../app/routers/books.php';
}

// ROUTE DES AUTHORS
// PATTERN : /?authors
elseif (isset($_GET['authors'])) {
    include '../app/routers/authors.php';
}

// ROUTE DES USERS
// PATTERN : /?users
elseif (isset($_GET['users'])) {
    include '../app/routers/users.php';
}

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: pagesController - il s'occupe des différentes pages particulières
// ACTION: homeAction
else {
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
}
