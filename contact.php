<?php


// Génération de la page à partir de la vue et du layout
$page_title = "Nous contacter - Alda";
$css = 'contact.style.css';

ob_start();
require_once 'app/view/contact.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
