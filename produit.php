<?php


// Génération de la page à partir de la vue et du layout
$page_title = "Produit - Alda";
$css = 'produit.style.css';

ob_start();
require_once 'app/view/produit.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
