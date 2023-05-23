<?php


// Génération de la page à partir de la vue et du layout
$page_title = "Boutique - Alda";
$css = 'boutique.style.css';

ob_start();
require_once 'app/view/boutique.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
