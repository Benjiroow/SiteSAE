<?php


// Génération de la page à partir de la vue et du layout
$page_title = "Commande - Alda";
$css = 'commande.style.css';

ob_start();
require_once 'app/view/commande.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
