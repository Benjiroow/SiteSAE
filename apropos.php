<?php


// Génération de la page à partir de la vue et du layout
$page_title = "À propos de nous - Alda";
$css = 'apropos.style.css';

ob_start();
require_once 'app/view/apropos.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 
