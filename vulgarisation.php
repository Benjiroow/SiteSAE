<?php


// Génération de la page à partir de la vue et du layout
$page_title = "Fabrication de la bière - Alda";
$css = 'public/css/vulgarisation.style.css';

ob_start();
require_once 'app/view/vulgarisation.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
