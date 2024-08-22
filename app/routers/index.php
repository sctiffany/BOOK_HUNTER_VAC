<?php
// ROUTER PRINCIPAL

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: pagesController - il s'occupe des différentes pages particulières
// ACTION: homeAction
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\HomeAction($connexion);
