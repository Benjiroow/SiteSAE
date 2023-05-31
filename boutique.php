<?php

if ((date('Y')-$dnn)>=18) {
    $css = 'boutique.style.css';
    $view = 'app/view/boutique.view.php';
} else {
    $css = "page_age.style.css";
    $view = 'app/view/page_age.view.php';
}


// Génération de la page à partir de la vue et du layout
$page_title = "Boutique - Alda";
$css = 'boutique.style.css';

ob_start();
require_once $view;
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
