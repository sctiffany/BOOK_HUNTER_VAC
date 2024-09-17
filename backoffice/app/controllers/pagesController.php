<?php

namespace App\Controllers\PagesController;


function dashboardAction()
{
    global $content, $title;
    $title = "Homepage du backoffice";
    ob_start();
    include_once '../app/views/pages/dashboard.php';
    $content = ob_get_clean();
}
