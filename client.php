<?php

session_start();

if (isset($_SESSION['majeur'])&&$_SESSION['majeur']) {
    $css = 'client.style.css';
    $view = 'app/view/client.view.php';
    $page_title = "Compte client - Alda";
} else {
    $css = "page_age.style.css";
    $view = 'app/view/page_age.view.php';
    $page_title = "Validation âge - Alda";
}


// Génération de la page à partir de la vue et du layout

ob_start();
require_once $view;
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
