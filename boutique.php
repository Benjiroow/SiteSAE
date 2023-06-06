<?php

session_start();


require_once 'config.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/boutique.model.php';

$databaseConnection = getDatabaseConnection();
$boutique = getBoutique(1, $databaseConnection);
$sousbock = rand(0,5);

if (isset($_SESSION['majeur'])&&$_SESSION['majeur']) {
    $css = 'boutique.style.css';
    $view = 'app/view/boutique.view.php';
    $page_title = "Boutique - Alda";
} else {
    $css = "page_age.style.css";
    $view = 'app/view/page_age.view.php';
    $page_title = "Validation âge - Alda";
}



if (empty($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] < 1) {
    $currentPage = 1;
} else if ($_GET['page'] > $nbPages) {
    $currentPage = $nbPages;
} else {
    $currentPage = $_GET['page'];
}


// Génération de la page à partir de la vue et du layout


ob_start();
require_once $view;
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
