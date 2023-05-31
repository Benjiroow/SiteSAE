<?php

session_start();

if(!empty($_GET['annee']) && is_numeric($_GET['annee']) ){
    $dnn=htmlspecialchars($_GET['annee']);
}

if ((date('Y')-$dnn)>=18) {
    $css = 'acccueil.style.css';
    $view = 'app/view/accueil.view.php';
} else {
    $css = "page_age.style.css";
    $view = 'app/view/page_age.view.php';
}



// Génération de la page à partir de la vue et du layout
$page_title = "Page d'accueil - Alda";

ob_start();
require_once $view;
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
