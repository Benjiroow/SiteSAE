<?php


// Génération de la page à partir de la vue et du layout
$page_title = "Page d'accueil - Alda";
$css = 'acccueil.style.css';

ob_start();
require_once 'app/view/accueil.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
