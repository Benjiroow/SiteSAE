<?php

session_start();
require_once 'app/model/dataConnection.php';
require_once 'app/model/boutique.model.php';

$databaseConnection = getDatabaseConnection();
$pokedex = getBoutique(1, $databaseConnection);


$view = 'app/view/page_age.view.php';
$page_title = "Validation âge - Alda";
$css = "page_age.style.css";

//var_dump($_SESSION['majeur']);

if (isset($_SESSION['majeur'])&&$_SESSION['majeur']) {
    $view = 'app/view/accueil.view.php';
    $css = 'accueil.style.css';
    $page_title = "Page d'accueil - Alda";
} else {
    
    if (!empty($_GET['annee']) && is_numeric($_GET['annee'])) {
        $datedenaissance = $_GET['annee'];
        if ((date('Y') - $datedenaissance) >= 18) {
            $view = 'app/view/accueil.view.php';
            $css = 'accueil.style.css';
            $page_title = "Page d'accueil - Alda";
            $_SESSION['majeur'] = true;
        }
    } else {
        $_SESSION['majeur'] = false;
    }
}






// Génération de la page à partir de la vue et du layout


ob_start();
require_once $view;
$content = ob_get_clean();
require_once 'app/view/common/layout.php';
