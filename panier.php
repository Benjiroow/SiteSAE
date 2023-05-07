<?php


// Génération de la page à partir de la vue et du layout
$page_title = "Panier - Alda";
$css = 'panier.style.css';

ob_start();
require_once 'app/view/panier.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
